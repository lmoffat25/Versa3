<section class="customisation">
        <form class="bg-triangle">
        <div class="col-12 col-md-6 col-md-push-3">
            <div class="watch">
                <?php if ($default_attributes[$attribute_dial_color]) : ?>
                    <img class="watch__dial" data-source="<?php echo $upload_dir ?>cadran-{color}.png" src="<?php echo $upload_dir ?>cadran-<?php echo $default_attributes[$attribute_dial_color]?>.png" alt="">
                <?php else:  ?>
                    <img class="watch__dial" data-source="<?php echo $upload_dir ?>cadran-{color}.png" src="<?php echo $upload_dir ?>cadran-noir.png" alt="">
                <?php endif; ?>
                <?php if ($default_attributes[$attribute_strap_color]) : ?>
                    <img class="watch__strap" data-source="<?php echo $upload_dir ?>bracelet-{color}.png" src="<?php echo $upload_dir ?>bracelet-<?php echo $default_attributes[$attribute_strap_color]?>.png" alt="">
                <?php else:  ?>
                    <img class="watch__strap" data-source="<?php echo $upload_dir ?>bracelet-{color}.png" src="<?php echo $upload_dir ?>bracelet-orange.png" alt="">
                <?php endif; ?>
            </div>
        </div>
            <ul id="watch-size" class="customisation__details customisation__size">
                <li class="customisation__btn -size -num1">40 mm</li>
                <li class="customisation__btn -size -num2">44 mm</li>
            </ul>

            <ul id="strap-color" class="customisation__details customisation__bands -colors">
                <li class="customisation__btn -strap"><span class="-num1 "></span></button>
                <li class="customisation__btn -strap"><span class="-num2 "></span></button>
                <li class="customisation__btn -strap"><span class="-num3 "></span></button>
            </ul>

            <ul id="body-color" class="customisation__details customisation__bodies -colors">
                <li class="customisation__btn -body"><span class="-num1 "></span></li>
                <li class="customisation__btn -body"><span class="-num2 "></span></li>
                <li class="customisation__btn -body"><span class="-num3 "></span></li>
            </ul>

            <div id="custom_elements" class="customisation__elements">
                <span data-id="watch-size" class="customisation__btn button -alt -big">Taille</span>
                <span data-id="strap-color" class="customisation__btn button -alt -big">Cadran</span>
                <span data-id="body-color" class="customisation__btn button -alt -big">Bracelet</span>
            </div>
        </form>
</section>