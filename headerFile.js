/* 
 * headerFile.js
 * 2019-12-04
 * Description:
 */

var icons;

window.onload = function () {
    icons = document.getElementsByClassName("icon");
    icons[0].onclick = resize();
    console.log(icons);
    console.log("Hello from 'headerFile.js'!");
};

/* 
 * Toggle between adding and removing the "responsive" class to navBar when the
 * user clicks on the icon 
 */
function resize() {
    console.log("Inside resize");
    var x = document.getElementById("resNavBar");
    if (x.className === "navBar") {
        x.className += " responsive";
    } else {
        x.className = "navBar";
    }
}
