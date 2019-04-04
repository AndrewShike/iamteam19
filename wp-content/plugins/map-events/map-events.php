<?php

/*

 * Plugin Name:       Map Events

 * Description:       A plugin used to aggregate event data using an .ics file.

 * Author:            IAM Team 2019
 
 */
 
add_action( 'admin_menu', 'extra_post_info_menu' );

function extra_post_info_menu(){

  $page_title = 'WordPress Map Events';
  $menu_title = 'Map Events';
  $capability = 'manage_options';
  $menu_slug  = 'map-events';
  $function   = 'map_events_admin_page';
  $icon_url   = 'dashicons-media-code';
  $position   = 99;

  add_menu_page( $page_title,
                 $menu_title, 
                 $capability, 
                 $menu_slug, 
                 $function, 
                 $icon_url, 
                 $position );
}

if( !function_exists("map_events_admin_page") )
{
function map_events_admin_page(){
    test_handle_post();
?>
    <h1>CCA Facebook Events Importer</h1>
    <h2>Upload a .ics File</h2>
    <!-- Form to handle the upload - The enctype value here is very important -->
    <form  method="post" enctype="multipart/form-data">
            <input type='file' id='test_upload_ics' name='test_upload_ics'></input>
            <?php submit_button('Upload') ?>
    </form>
<?php
}
}

function test_handle_post(){
        // First check if the file appears on the _FILES array
        if(isset($_FILES['test_upload_ics'])){
                $ics = $_FILES['test_upload_ics'];
 
                // Use the wordpress function to upload
                // test_upload_ics corresponds to the position in the $_FILES array
                // 0 means the content is not associated with any other posts
                $uploaded=media_handle_upload('test_upload_ics', 0);
                // Error checking using WP functions
                if(is_wp_error($uploaded)){
                        echo "Error uploading file: " . $uploaded->get_error_message();
                }else{
                        echo "File upload successful!";
                        convert($uploaded);
                }
        }
}

$events = array();
$before = "/(?<=";
$after = ")(?s)(.+?)(?=BEGIN:VCALENDAR|PRODID:|X-WR-CALNAME:|X-PUBLISHED-TTL:|X-ORIGINAL-URL:|VERSION:|CALSCALE:|METHOD:|BEGIN:VEVENT|DTSTAMP:|LAST-MODIFIED:|CREATED:|SEQUENCE:|ORGANIZER;|DTSTART:|DTEND:|UID:|SUMMARY:|LOCATION:|URL:|DESCRIPTION:|CLASS:|STATUS:|PARTSTAT:|END:VEVENT|END:VCALENDAR)/";
$i = 0;

//$events[0] = array();
//$events[0]["TEST"] = "foo";

function convert($id) {
    global $i, $events, $before, $after;
    
    $contents = file_get_contents(get_attached_file($id));
    
//    echo "<p>convert</p>";
//    
//    echo "<p>count: " . count($events) . "</p>";
    
    //echo "<h1>contents:</h1><br><p>" . $contents . "</p>"; //_wp_get_attachment_relative_path(

    
    $ics_events = explode("BEGIN:VEVENT", $contents);
    array_shift($ics_events);

    for ($i = 0; $i < count($ics_events); $i++) {
        //global $events, $before, $after;

        $events[$i] = array();

        $events[$i]["TEST"] = "fooey " . $i;
        
        preg_replace_callback_array(
            [
                $before . "CREATED:" . $after => function($match) {
                    global $i, $events;

                    $events[$i]["CREATED"] = strtotime($match[0]);
                },
                $before . "ORGANIZER;" . $after => function($match) {
                    global $i, $events;

                    $events[$i]["ORGANIZER"] = preg_replace("/:MAILTO:.*|CN=/", "", $match[0]);
                },
                $before . "DTSTART:" . $after => function($match) {
                    global $i, $events;

                    $events[$i]["DTSTART"] = date("m/d/y g:i", strtotime($match[0]));
                },
                $before . "DTEND:" . $after => function($match) {
                    global $i, $events;

                    $events[$i]["DTEND"] = date("m/d/y g:i", strtotime($match[0]));
                },
                $before . "SUMMARY:" . $after => function($match) {
                    global $i, $events;

                    $events[$i]["SUMMARY"] = $match[0];
                },
                $before . "LOCATION:" . $after => function($match) {
                    global $i, $events;

                    $events[$i]["LOCATION"] = $match[0];
                },
                $before . "URL:" . $after => function($match) {
                    global $i, $events;

                    $events[$i]["URL"] = $match[0];
                },
                $before . "DESCRIPTION:" . $after => function($match) {
                    global $i, $events;

                    $events[$i]["DESCRIPTION"] = $match[0];
                }
            ],
            $ics_events[$i]
        );
    }
    
    for ($i = 0; $i < count($events); $i++) {
        $stuff = $events[$i];
        foreach ($stuff as $thing => $thing_value) {
            echo "<p>$thing: $thing_value</p>";
        }
        //echo "<p>" . $events[$i] ."</p>";
        echo "<br>";
    }
}
?>