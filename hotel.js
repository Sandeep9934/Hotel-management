 let $in = document.getElementById("in");
 let $out = document.getElementById("out");

 function data() {
     if (value.$in > value.$out) {
         alert("invalid date input please correct it");
         error("invalid input");
     } else {
         console.log("successfully entered data input");
     }
 }
 let $room = document.getElementById("room");
 let $guest = document.getElementById("guest");

 function room() {
     if ($room > $guest && $room > 0) {
         console.log("successfully entered room data");
     } else {
         alert("invalid room enter data");
         error("invalid room data");
     }
 }