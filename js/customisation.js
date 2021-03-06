var buttonChange = document.getElementById("custom_elements").querySelectorAll(".button");
var divsToDisplay = document.querySelectorAll(".customisation__details");
var button = document.querySelectorAll(".customisation__btn");

var main = function() {
    // Selectionne élement
    selectButton();
    // Affiche détail sélectionné
    showDiv();
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

