<?php
/**
 * Created by PhpStorm.
 * User: ilasidorov
 * Date: 13.11.15
 * Time: 20:47
 */?>
<?if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die(); ?>
<footer>
    <div class="main"> <span>Copyright <? echo date("Y")?>
            All Rights Reserved</span>
        Design by
        <?$APPLICATION->IncludeComponent
        (
            "bitrix:main.include",
            "",
            Array
            (
                "COMPONENT_TEMPLATE" => ".default",
                "AREA_FILE_SHOW" => "file",
                "AREA_FILE_SUFFIX" => "inc",
                "EDIT_TEMPLATE" => "",
                "PATH" => SITE_TEMPLATE_PATH."/include_areas/email.php"
            )
        )
        ;?>
        <!--<a target="_blank" href="http://www.templatemonster.com/">TemplateMonster.com</a>-->
    </div>
</footer>
</div>
</div>
<script type="text/javascript">Cufon.now();</script>
<script type="text/javascript">
    $(window).load(function () {
        $('.slider')._TMS({
            duration: 1000,
            easing: 'easeOutQuint',
            preset: 'simpleFade',
            slideshow: 7000,
            banners: false,
            pauseOnHover: true,
            pagination: false,
            pagNums: false,
            nextBu: '.next',
            prevBu: '.prev'
        });
    });
</script>
</body>
</html>
