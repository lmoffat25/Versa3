// SETUP ########################################################
// init controller
const controller = new ScrollMagic.Controller();
let triggers = document.querySelectorAll(".trigger");
var triggerlength = triggers.length;
// Différentes Pages
const avantage = document.querySelector(".scroll-avantage");
const about = document.querySelector(".scroll-about");
// Page actuelle
var page = "";

// Hauteur de l'écran
var screenH = window.innerHeight;
var offset = screenH / 6; // Default value

var main = function() {
    if ( triggers == undefined ) {
        console.log("no triggers");
        return;
    }
    // Vérifie la page actuelle
    checkPage();
    // Applique un décallage entre 2 triggers : chiffre + grand = écart + petit
    if ( page === avantage ) {
        offset = screenH / 30; 
    }else if ( page === about ) {
        offset = screenH / 6;
    }
    // Donne taille du scroll
    if ( page === avantage ) {
        var scrollLength = 1000;
    }else if ( page === about ) {
        var scrollLength = screenH * triggerlength;
    }
    // Applique la taille du scroll
    scroll(scrollLength);
    // Applique les effets aux éléments
    active(scrollLength);
};

// FUNCTIONS #####################################
var checkPage = function() {
    if ( avantage != undefined ) {
        page = avantage;
    }else if ( about != undefined ) {
        page = about;
    }
    return page;
}


var scroll = function(scrollLength) {
    if ( page === avantage ) { // Nouvel ajout, réduit la longeur de page pour avantages
        //var scrollLength = scrollLength / 2;
    }

    var image = new ScrollMagic.Scene({triggerElement: "#trigger1", duration : scrollLength})
                    .setPin("#pin1")
                    //.addIndicators({name: "1 (duration: "+ scrollLength +")"}) // add indicators (requires plugin)
                    .addTo(controller);

}


var active = function(scrollLength) {
    let scrollInterval = scrollLength / triggerlength;
    for( var i = 1; i < triggerlength + 1; i++ ) {
        var image = new ScrollMagic.Scene({triggerElement: "#trigger" + i, duration : scrollInterval - offset})
        .setClassToggle("#txt" + i, "-active")
        //.addIndicators({name: i + "(duration:"+ scrollInterval +")"})
        .addTo(controller);
    }
}

main();

