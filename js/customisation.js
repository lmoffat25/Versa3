var buttonChange = document.getElementById("custom_elements").querySelectorAll(".button");
var divsToDisplay = document.querySelectorAll(".customisation__details");
var button = document.querySelectorAll(".customisation__btn");

//Mobile ---
const $carousel = document.querySelector('.customisation-mobile__carousel');


var main = function() {
    // Selectionne élement
    selectButton();
    // Affiche détail sélectionné
    showDiv();
    // Detect le click sur mobile
    flkty.on( 'staticClick', onClick);
}

var elem = document.querySelector('.main-carousel');
var flkty = new Flickity( elem, {
    // options
    cellAlign: 'left',
    contain: true,
    wrapAround: true,
    fullscreen: false
});

flkty.on( 'select', function( index ) {
    console.log('Flickity select ' + index );

    let attribute = this.dataset.attribute;
    let value = this.dataset.value;
    console.log('Flickity attr ' + attribute);
    console.log('Flickity value ' + value);

});

function onClick() {
    
    const $cadranNoir = document.querySelector('.-cadran-noir');
    const $cadranRose = document.querySelector('.-cadran-rose');
    if ( !$carousel || !$cadranRose || !$cadranNoir ) {
        return;
    }
    if ( $cadranNoir.classList.contains('-onScreen') ) {
        $cadranRose.classList.add("-onScreen");
        $cadranNoir.classList.remove('-onScreen');
    }else if ( $cadranRose.classList.contains('-onScreen') ) {
        $cadranNoir.classList.add('-onScreen');
        $cadranRose.classList.remove('-onScreen');
    }
}

var selectButton = function() {

    button.forEach(function(item) {
        item.addEventListener("click", function(e) {
            Array.prototype.slice.call(this.parentNode.children).forEach(function(child) {
                child.classList.remove("-active");
            });

            this.classList.add("-active");
        })
    })
}

var showDiv = function() {
    buttonChange.forEach(function(item) {

        item.addEventListener("click", function(e) {

            // récupère id dans dataset
            var id = this.dataset.id;

            // Compare dataset avec id des divToDisplay
            var divToDisplay = document.getElementById(id);
            //Cache toutes les Divs
            divsToDisplay.forEach(function(div) {
                div.style.display = "none";
            })

            //Affiche Div avec Id correspondant
            divToDisplay.style.display = "flex";
        })
        
    })
}

main();

