/* 
Quand clique sur menu
Toggle classe -open
*/

var dropdownCustom = document.querySelectorAll('.dropdownCustom');
//var button = document.querySelectorAll('.dropdownCustom__title i:last-of-type');

for( $i = 0; $i < dropdownCustom.length; $i++) {
    dropdownCustom[$i].addEventListener('click', function() {
        this.classList.toggle("-open");
    })
}

var dropdown = document.querySelectorAll('.dropdownCustom')