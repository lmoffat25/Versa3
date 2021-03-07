var buttonChange = document.getElementById("custom_elements").querySelectorAll(".button");
var divsToDisplay = document.querySelectorAll(".customisation__details");
var button = document.querySelectorAll(".customisation__btn");

//Mobile ---
const $carousel = document.querySelector('.customisation-mobile__carousel');
var $sizeButton = document.querySelectorAll('.customosation-mobile__button ');


var main = function() {
    // Selectionne élement
    selectButton();
    // Affiche détail sélectionné
    showDiv();
    // Detect le click sur mobile
    flkty.on( 'staticClick', onClick);
    flkty.on( 'staticClick', getAttr);

    flkty.on( 'change',  showWatchAR);
    flkty.on( 'settle',  getAttr);

    showWatchAR();
}

var elem = document.querySelector('.main-carousel');
var flkty = new Flickity( elem, {
    // options
    cellAlign: 'left',
    contain: true,
    wrapAround: true,
    fullscreen: false
});


function onClick() {
    const $cadranNoir = document.querySelector('.-cadran-noir');
    const $cadranRose = document.querySelector('.-cadran-or');
    if ( !$carousel || !$cadranRose || !$cadranNoir ) {
        console.log($cadranNoir);

        return;
    }
    if ( $cadranNoir.classList.contains('-onScreen') ) {
        $cadranRose.classList.add("-onScreen");
        $cadranNoir.classList.remove('-onScreen');
    }else if ( $cadranRose.classList.contains('-onScreen') ) {
        $cadranNoir.classList.add('-onScreen');
        $cadranRose.classList.remove('-onScreen');
    }
    showWatchAR();
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

    $sizeButton.forEach(function(item) {
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


function showWatchAR() {
    // Iframes
    const $rose_noir = document.querySelector('.rose_noir');
    const $noir_noir = document.querySelector('.noir_noir');
    const $bleu_noir = document.querySelector('.bleu_noir');
    const $rose_or = document.querySelector('.rose_or');
    const $noir_or = document.querySelector('.noir_or');
    const $bleu_or = document.querySelector('.bleu_or');


    //Récupère data value des élements affichés
    var $selected_strap = document.querySelector(".carousel-cell.is-selected");
    var strap_value = $selected_strap.dataset.strap;
    var $selected_dial = document.querySelector(".watch__dial.-onScreen");
    var dial_value = $selected_dial.dataset.dial;


    // Affiche les Iframes #################################
    if ( strap_value == 'rose' && dial_value == 'noir' ) {
        $rose_noir.classList.add('-visible');
        $noir_noir.classList.remove('-visible');
        $bleu_noir.classList.remove('-visible');
        $rose_or.classList.remove('-visible');
        $noir_or.classList.remove('-visible');
        $bleu_or.classList.remove('-visible');
    }
    else if ( strap_value == 'noir' && dial_value == 'noir' ) {
        $rose_noir.classList.remove('-visible');
        $noir_noir.classList.add('-visible');
        $bleu_noir.classList.remove('-visible');
        $rose_or.classList.remove('-visible');
        $noir_or.classList.remove('-visible');
        $bleu_or.classList.remove('-visible');
    }
    else if ( strap_value == 'bleu' && dial_value == 'noir' ) {
        $noir_noir.classList.remove('-visible');
        $rose_noir.classList.remove('-visible');
        $bleu_noir.classList.add('-visible');
        $rose_or.classList.remove('-visible');
        $noir_or.classList.remove('-visible');
        $bleu_or.classList.remove('-visible');
    }
    else if ( strap_value == 'rose' && dial_value == 'or' ) {
        $noir_noir.classList.remove('-visible');
        $rose_noir.classList.remove('-visible');
        $bleu_noir.classList.remove('-visible');
        $rose_or.classList.add('-visible');
        $noir_or.classList.remove('-visible');
        $bleu_or.classList.remove('-visible');
    }
    else if ( strap_value == 'noir' && dial_value == 'or' ) {
        $noir_noir.classList.remove('-visible');
        $rose_noir.classList.remove('-visible');
        $bleu_noir.classList.remove('-visible');
        $rose_or.classList.remove('-visible');
        $noir_or.classList.add('-visible');
        $bleu_or.classList.remove('-visible');
    }
    else if ( strap_value == 'bleu' && dial_value == 'or' ) {
        $noir_noir.classList.remove('-visible');
        $rose_noir.classList.remove('-visible');
        $bleu_noir.classList.remove('-visible');
        $rose_or.classList.remove('-visible');
        $noir_or.classList.remove('-visible');
        $bleu_or.classList.add('-visible');
    }
}



/* ###################################################################### */

let filterItemsSelector = ".filterItem";
let filterItems = document.querySelectorAll(filterItemsSelector);

filterItems.forEach(function(item){
    getAttr(item);

})

function getAttr(item) {
    item.addEventListener("click", function(e){

        let attribute = this.dataset.attribute;
        let value = this.dataset.value;

        Array.prototype.slice.call(this.parentNode.children).forEach(function(child){
            child.classList.remove("-active");
        });
        
        this.classList.add("-active");
        console.log(attribute)
        if(attribute === "couleur-du-bracelet"){
            changeImage(value, ".watch__strap");
        } 
        if(attribute === "couleur-du-cadran"){
            changeImage(value, ".watch__dial");
        }

        let select = document.getElementById(attribute);
        select.value = value; 

        jQuery(select).trigger("change.wc-variation-form");
    })
}


let changeImage = function(color, selector){
    let image = document.querySelector(selector);
    let src = image.dataset.source;
    src = src.replace("{color}", color);
    image.src = src;
}


let addToCartSelector = "add-product-to-cart";
let buttonAddToCart = document.getElementById(addToCartSelector);

buttonAddToCart.addEventListener("click", function(){
    document.querySelector(".variations_form").submit();
})

jQuery(document).on("show_variation", function(){
    let selector = ".woocommerce-variation-price .woocommerce-Price-amount";
    let price = document.querySelector(selector).innerHTML;
    document.getElementById("product-final-price").innerHTML = price;
})

/* ###################################################################### */


main();



