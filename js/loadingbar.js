document.addEventListener('DOMContentLoaded', function() {

    var $bar = document.querySelector('.loader__fill');

    if ( $bar != null ) {
        window.addEventListener('scroll', function() {

            progress = (document.body.scrollTop / ( document.body.scrollHeight - window.innerHeight ) );
            $bar.style.transform = "scaleY(" + progress + ")";
        });
    }
});