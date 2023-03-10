<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
IncludeTemplateLangFile(__FILE__);
?>




<?
    
 $sResult = "";
 if (CModule::IncludeModule('iblock')) {
     $iBlock = 5;
     $arSelect = Array("ID", "IBLOCK_ID", "NAME","PROPERTY_PRICE", "PROPERTY_PRIORITY");
     $arFilter = array("IBLOCK_ID" => $iBlock,"PROPERTY_GARAGE_VALUE"=>"YES",   "ACTIVE" => "Y");
     $res = CIBlockElement::GetList(Array(), $arFilter, false, false, $arSelect);
     while ($ob = $res->GetNextElement()) {
          $arFields = $ob->GetFields();
          var_dump($arFields);}
 }

 ?>

















<!DOCTYPE html>
<html lang="en">
<head>
<?$APPLICATION->ShowPanel();?>
<?$APPLICATION->ShowHead();?>
<?$APPLICATION->ShowMeta("keywords");?>
<?$APPLICATION->ShowMeta("description");?>
<?$APPLICATION->ShowCSS();?>
 
  <title>HomeSpace &mdash; Colorlib Website Template</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   
   
  <?$APPLICATION->SetAdditionalCSS("https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Roboto+Mono:300,400,500");?>
 
    <?$APPLICATION->SetAdditionalCSS( "/local/templates/.default/fonts/icomoon/style.css");?>
    <?$APPLICATION->SetAdditionalCSS("/local/templates/.default/css/bootstrap.min.css");?>
    <?$APPLICATION->SetAdditionalCSS("/local/templates/.default/css/magnific-popup.css");?>
    <?$APPLICATION->SetAdditionalCSS("/local/templates/.default/css/jquery-ui.css");?>
    <?$APPLICATION->SetAdditionalCSS("/local/templates/.default/css/owl.carousel.min.css");?>
    <?$APPLICATION->SetAdditionalCSS("/local/templates/.default/css/owl.theme.default.min.css");?>
    <?$APPLICATION->SetAdditionalCSS("/local/templates/.default/css/bootstrap-datepicker.css");?>
    <?$APPLICATION->SetAdditionalCSS("/local/templates/.default/css/mediaelementplayer.css");?>
    <?$APPLICATION->SetAdditionalCSS("/local/templates/.default/css/animate.css");?>
    <?$APPLICATION->SetAdditionalCSS("/local/templates/.default/fonts/flaticon/font/flaticon.css");?>
    <?$APPLICATION->SetAdditionalCSS("/local/templates/.default/css/fl-bigmug-line.css");?>
    <?$APPLICATION->SetAdditionalCSS("/local/templates/.default/css/aos.css");?>
    <?$APPLICATION->SetAdditionalCSS("/local/templates/.default/css/style.css");?>  

           
<?$APPLICATION->AddHeadScript('/local/templates/.default/js/jquery-3.3.1.min.js');?>
  <?$APPLICATION->AddHeadScript('/local/templates/.default/js/jquery-migrate-3.0.1.min.js');?>
  <?$APPLICATION->AddHeadScript('/local/templates/.default/js/jquery-ui.js');?>
  <?$APPLICATION->AddHeadScript('/local/templates/.default/js/popper.min.js');?>
  <?$APPLICATION->AddHeadScript('/local/templates/.default/js/bootstrap.min.js');?>
  <?$APPLICATION->AddHeadScript('/local/templates/.default/js/owl.carousel.min.js');?>
  <?$APPLICATION->AddHeadScript('/local/templates/.default/js/mediaelement-and-player.min.js');?>
  <?$APPLICATION->AddHeadScript('/local/templates/.default/js/jquery.stellar.min.js');?>
  <?$APPLICATION->AddHeadScript('/local/templates/.default/js/jquery.countdown.min.js');?>
  <?$APPLICATION->AddHeadScript('/local/templates/.default/js/jquery.magnific-popup.min.js');?>
  <?$APPLICATION->AddHeadScript('/local/templates/.default/js/bootstrap-datepicker.min.js');?>
  <?$APPLICATION->AddHeadScript('/local/templates/.default/js/aos.js');?>
  <?$APPLICATION->AddHeadScript('/local/templates/.default/js/main.js');?>
   
    
  


  






  <title><?$APPLICATION->ShowTitle()?></title>
</head>

<header>
<div class="site-loader"></div>  
<div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->

    <div class="border-bottom bg-white top-bar">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-6 col-md-6">
            <p class="mb-0">
              <!-- <a href="#" class="mr-3"><span class="text-black fl-bigmug-line-phone351"></span> <span
                  class="d-none d-md-inline-block ml-2">+2 102 3923 3922</span></a> -->
                  <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"EDIT_TEMPLATE" => "",
		"PATH" => "/include/mynumber.php"
	)
);?>
              
                  <!-- <a href="#"><span class="text-black fl-bigmug-line-email64"></span> <span
                  class="d-none d-md-inline-block ml-2">info@domain.com</span></a> -->
                  <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"EDIT_TEMPLATE" => "",
		"PATH" => "/include/myemail.php"
	)
);?>
            </p>
          </div>
          <!-- <div class="col-6 col-md-6 text-right">
            <a href="#" class="mr-3"><span class="text-black icon-facebook"></span></a>
            <a href="#" class="mr-3"><span class="text-black icon-twitter"></span></a>
            <a href="#" class="mr-0"><span class="text-black icon-linkedin"></span></a>
          </div> -->
          <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"EDIT_TEMPLATE" => "",
		"PATH" => "/include/myicons.php"
	)
);?>

        </div>
      </div>

    </div>
    <div class="site-navbar">
      <div class="container py-1">
        <div class="row align-items-center">
          <div class="col-8 col-md-8 col-lg-4">
            <!-- <h1 class=""><a href="index.html" class="h5 text-uppercase text-black"><strong>HomeSpace<span
                    class="text-danger">.</span></strong></a></h1> -->
                    <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"EDIT_TEMPLATE" => "",
		"PATH" => "/include/mylogo.php"
	)
);?>
          </div>
          <div class="col-4 col-md-4 col-lg-8">
            <nav class="site-navigation text-right text-md-right" role="navigation">

              <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#"
                  class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

              <!--  Компонент меню - верхнее меню, просто разместить, рядом с текущей вёрсткой -->
              <?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"horizontal_multilevel1", 
	array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "left",
		"DELAY" => "N",
		"MAX_LEVEL" => "2",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "top",
		"USE_EXT" => "N",
		"COMPONENT_TEMPLATE" => "horizontal_multilevel1"
	),
	false
);?>
              <!-- <ul class="site-menu js-clone-nav d-none d-lg-block">
                <li class="active">
                  <a href="index.html">Home</a>
                </li>
                <li class="has-children">
                  <a href="properties.html">Properties</a>
                  <ul class="dropdown">
                    <li><a href="#">Buy</a></li>
                    <li><a href="#">Rent</a></li>
                    <li><a href="#">Lease</a></li>
                    <li class="has-children">
                      <a href="#">Menu</a>
                      <ul class="dropdown">
                        <li><a href="#">Menu One</a></li>
                        <li><a href="#">Menu Two</a></li>
                        <li><a href="#">Menu Three</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li><a href="blog.html">Blog</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="contact.html">Contact</a></li>
              </ul> -->
            </nav>
          </div>


        </div>
      </div>
    </div>
  </div>


  <?$APPLICATION->IncludeComponent(
	"bitrix:breadcrumb",
	"mybreadcrumb",
	Array(
		"PATH" => "",
		"SITE_ID" => "s1",
		"START_FROM" => "0"
	)
);?>
  <!-- <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(images/hero_bg_2.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">
          <div class="col-md-10">
            <h1 class="mb-2">About Us</h1>
            <div><a href="index.html">Home</a> <span class="mx-2 text-white">&bullet;</span> <strong class="text-white">About</strong></div>
          </div>
        </div>
      </div>
    </div> -->

    <?$APPLICATION->IncludeComponent(
	"bitrix:main.include", 
	".default", 
	array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"EDIT_TEMPLATE" => "",
		"PATH" => "/include/mycontacts.php",
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);?>
    <!-- <div class="site-section border-bottom">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
            <img src="/local/templates/.default/images/about.jpg" alt="Image" class="img-fluid">
          </div>
          <div class="col-md-5 ml-auto"  data-aos="fade-up" data-aos-delay="200">
            <div class="site-section-title mb-3">
              <h2>Our Company</h2>
            </div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus in cum odio.</p>
            <p>Illum repudiandae ratione facere explicabo. Consequatur dolor optio iusto, quos autem voluptate ea? Sunt laudantium fugiat, mollitia voluptate? Modi blanditiis veniam nesciunt architecto odit voluptatum tempore impedit magnam itaque natus!</p>
          </div>
        </div>
      </div>
    </div> -->


    

</header>

 
 