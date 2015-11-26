<?php
/**
 * Created by PhpStorm.
 * User: ilasidorov
 * Date: 13.11.15
 * Time: 20:48
 */?>
<?if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die(); ?>
<?IncludeTemplateLangFile(__FILE__);?>
<!DOCTYPE html>
<html lang=<?=LANGUAGE_ID?>>
<head>
    <title><?$APPLICATION->ShowTitle();?></title>
    <!-- <meta charset="utf-8"> -->
    <?$APPLICATION->ShowHead();?>
    <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/reset.css", true);?>
    <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/style.css", true);?>
    <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/grid.css", true);?>
    <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/jquery-1.7.1.min.js", true);?>
    <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/cufon-yui.js", true);?>
    <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/cufon-replace.js", true);?>
    <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/Vegur_500.font.js" , true);?>
    <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/FF-cash.js", true);?>
    <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/tms-0.3.js", true);?>
    <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/tms_presets.js", true);?>
    <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/jquery.easing.1.3.js", true);?>
    <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/jquery.equalheights.js", true);?>
    <!--[if lt IE 9]>
    <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/html5.js", true);?>
    <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/ie.css", true);?>
    <![endif]-->
</head>
<body id="page1">
<?$APPLICATION->ShowPanel();?>
<div class="main-bg">
    <div class="bg">
        <!--==============================header=================================-->
        <header>
            <div class="main">
                <div class="wrapper">
                   <!-- <h4><a href="index.html">Поликлиника 1404</h4>-->
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
                            "PATH" => SITE_TEMPLATE_PATH."/include_areas/logo.php"
                        )
                    )
                    ;?>
                    <div class="fright">
<<<<<<< HEAD

=======
>>>>>>> task_1_create_site_template
                        <div class="indent">
                            <span class="address">Венеция</span>
                            <span class="phone">Tel: 666666666</span>
                        </div>
                    </div>
                </div>
                <nav>
                    <ul class="menu">
                        <li><a class="active" href="index.html">Home</a></li>
                        <li><a href="../../../../../Downloads/car-repair/about.html">About Us</a></li>
                        <li><a href="../../../../../Downloads/car-repair/maintenance.html">Maintenance </a></li>
                        <li><a href="../../../../../Downloads/car-repair/repair.html">Repair</a></li>
                        <li><a href="../../../../../Downloads/car-repair/price.html">Price List</a></li>
                        <li><a href="../../../../../Downloads/car-repair/locations.html">Locations</a></li>
                    </ul>
                </nav>
                <div class="slider-wrapper">
                    <div class="slider">
                        <ul class="items">
                            <li> <img src="<?=SITE_TEMPLATE_PATH;?>/images/images/slider-img1.jpg"> </li>
                            <li> <img src="<?=SITE_TEMPLATE_PATH;?>/images/images/slider-img2.jpg"/> </li>
                            <li> <img src="<?=SITE_TEMPLATE_PATH;?>/images/images/slider-img3.jpg"/> </li>
                        </ul>
                    </div>
                    <a class="prev" href="#">prev</a> <a class="next" href="#">next</a> </div>
            </div>
        </header>
