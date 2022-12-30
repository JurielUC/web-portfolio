//this code is used to prevent navigation to login page
function preventBack() {
    window.history.forward(); 
}
setTimeout("preventBack()", 0);
window.onunload = function () { null };