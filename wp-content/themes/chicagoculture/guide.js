var acc = document.getElementsByClassName("accordion");
var arrow = document.getElementsByClassName("accordion-arrow");
var main = document.getElementById("main-content");
// var place_hours_p = document.getElementsByClassName("place-hours");
var journey_hours = document.querySelectorAll(".place-hours > p")
var place_hours;
var full_place_hours;
var todays_place_hours;
var date = new Date();
var day = date.getDay();
var main_previous_height;
var desktop = window.matchMedia( "(min-width: 651px)" );
var mobile = window.matchMedia( "(max-width: 650px)" );
var dumbphone = window.matchMedia( "(max-width: 350px)" );

if (mobile.matches){
    main_previous_height = (3 * acc.length * 62) + 600;
}
if (dumbphone.matches) {
    main_previous_height = (3 * acc.length * 62) + 600;
}
if (desktop.matches) {
    main_previous_height = ( acc.length * 62 ) + 600;
}

for (let i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {

    /* Toggle between hiding and showing the active panel */
    var panel = this.nextElementSibling;
    

    var panel_height;
      
    if (panel.style.display === "block") {
        /* Remove the "active" class, to un-highlight the button that controls the panel */
        this.classList.remove("active");
        this.lastElementChild.src="http://goodspark.com/iamteam19/wp-content/uploads/2019/03/pinktriangle-upsidedown1-5.png";
        panel.style.display = "none";
        main.style.height = main_previous_height + "px";
            
    } else {
        /* Add the "active" class, to highlight the button that controls the panel */
        this.classList.add("active");
        for (let j = 0; j < acc.length; j++) {
            acc[j].nextElementSibling.style.display = "none";
        }
        this.lastElementChild.src="http://goodspark.com/iamteam19/wp-content/uploads/2019/03/pinktriangle1-5.png";
        panel.style.display = "block";
        panel_height = parseInt(getComputedStyle(panel).getPropertyValue('height').split("px")[0]);
        main.style.height = panel_height + main_previous_height + "px";
        main.style.minHeight = "1080px";
    }
  });
}

// var weekday = new Array(7);
// weekday[0] = "Monday";
// weekday[1] = "Tuesday";
// weekday[2] = "Wednesday";
// weekday[3] = "Thursday";
// weekday[4] = "Friday";
// weekday[5] = "Saturday";
// weekday[6] = "Sunday";


// var today = weekday[day];
// Add failsafe in later version.
// Check to see if todays_place_hours contains weekday[].
// If it does, hide the rest of the week's hours.
// If not, then display the full hours.
// Formatting instructions are in Places new post.

// var journey_hours = document.querySelectorAll(".place-hours > p")
// var place_hours;
// var full_place_hours;
// var todays_place_hours;
// var date = new Date();
// var day = date.getDay();

// for (let k = 0; k < journey_hours.length; k++) {
//     var place_hours = journey_hours[k].split("<br>");
//     full_place_hours = place_hours;
//     // for (let l = 0; l < place_hours.length; l++) {
//     //     if 
//     // }
//     //var n = str.includes(weekday[day]);
//     todays_place_hours = place_hours[day];

//     place_hours.innerHTML = todays_place_hours;

//     journey_hours[k].addEventListener("click", function() {
//     if () {
//         place_hours.innerHTML = full_place_hours.innerHTML;
//     }
//     else {
//         place_hours.innerHTML = todays_place_hours.innerHTML;
//     }
//     });

// }