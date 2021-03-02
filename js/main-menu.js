const nav = document.querySelector(".mainNav");
const burger = document.querySelector(".burger__toggle");

let onClickBurger = function() {
    this.classList.toggle("-active");
    nav.classList.toggle("-open");
    nav.classList.toggle("-close");
}

burger.addEventListener("click", onClickBurger);