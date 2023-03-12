<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>

    <!-- <? var_dump($arResult["DISPLAY_PROPERTIES"]["GALLERY"]["FILE_VALUE"]   )?>    -->
	  <!-- <?=var_dump($arResult["DISPLAY_PROPERTIES"] );?>   -->


<div class="site-blocks-cover overlay" style="background-image: url(<?=$arResult["DETAIL_PICTURE"]["SRC"]?>);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">
          <div class="col-md-10">
            <!-- <span class="d-inline-block text-white px-3 mb-3 property-offer-type rounded">Property Details of</span> -->
            <h1 class="mb-2"><?=$arResult["NAME"]?></h1>
            <p class="mb-5"><strong class="h2 text-success font-weight-bold"><?=$arResult["DISPLAY_PROPERTIES"]["PRICE"]["VALUE"]?></strong></p>
          </div>
        </div>
      </div>
    </div>



	<div class="site-section site-section-sm">
      <div class="container">
        <div class="row">
          <div class="col-lg-8" style="margin-top: -150px;">
            <div class="mb-5">
              <div class="slide-one-item home-slider owl-carousel">
			  <?if( isset($arResult["DISPLAY_PROPERTIES"]["GALLERY"]["FILE_VALUE"][0]) ):?>
				<?foreach($arResult["DISPLAY_PROPERTIES"]["GALLERY"]["FILE_VALUE"] as $arItem):?>
				<div><img src=<?=$arItem["SRC"]?> alt="Image" class="img-fluid"></div>
				
				<?endforeach;?>
			<?else:?>
				
				<div><img src=<?=$arResult["DISPLAY_PROPERTIES"]["GALLERY"]["FILE_VALUE"]["SRC"]?> alt="Image" class="img-fluid"></div>
			<?endif;?> 
			  
			   

			  

                <!-- <div><img src=<?=$arResult["DISPLAY_PROPERTIES"]["GALLERY"]["FILE_VALUE"]["SRC"]?> alt="Image" class="img-fluid"></div>
                <div><img src="images/img_2.jpg" alt="Image" class="img-fluid"></div>
                <div><img src="images/img_3.jpg" alt="Image" class="img-fluid"></div>
              
			 -->
			


			  
			</div>
            </div>
            <div class="bg-white">
              <div class="row mb-5">
                <div class="col-md-6">
                  <strong class="text-success h1 mb-3"><?=$arResult["DISPLAY_PROPERTIES"]["PRICE"]["VALUE"]?></strong>
                </div>
                <div class="col-md-6">
                  <ul class="property-specs-wrap mb-3 mb-lg-0  float-lg-right">
                  <li>
                    <span class="property-specs"><?=GetMessage("FLOORS")?></span>
                    <span class="property-specs-number"><?=$arResult["DISPLAY_PROPERTIES"]["FLOORS"]["VALUE"]?><sup>+</sup></span>
                    
                  </li>
                  <li>
                    <span class="property-specs"><?=GetMessage("CHANGE_DATE")?></span>
                    <span class="property-specs-number"><?=$arResult["TIMESTAMP_X"]?></span>
                    
                  </li>
                  <li>
                    <span class="property-specs"><?=GetMessage("SPACE")?></span>
                    <span class="property-specs-number"><?=$arResult["DISPLAY_PROPERTIES"]["SPACE"]["VALUE"]?></span>
                    
                  </li>
                </ul>
                </div>
              </div>
              <div class="row mb-5">
                <div class="col-md-6 col-lg-4 text-left border-bottom border-top py-3">
                  <span class="d-inline-block text-black mb-0 caption-text"><?=GetMessage("BATHROOMS")?></span>
                  <strong class="d-block"><?=$arResult["DISPLAY_PROPERTIES"]["BATHROOMS"]["VALUE"]?></strong>
                </div>
                <div class="col-md-6 col-lg-4 text-left border-bottom border-top py-3">
                  <span class="d-inline-block text-black mb-0 caption-text"><?=GetMessage("GARAGE")?></span>
                  <strong class="d-block"><?=$arResult["DISPLAY_PROPERTIES"]["GARAGE"]["VALUE"]?></strong>
                </div>
                 
              </div>
              <h2 class="h4 text-black"><?=GetMessage("DETAIL_TEXT")?></h2>
              <p><?=$arResult["DETAIL_TEXT"]?></p>
               

              <div class="row mt-5">
                <div class="col-12">
                  <h2 class="h4 text-black mb-3"><?=GetMessage("GALLERY")?></h2>
                </div>


				<?if( isset($arResult["DISPLAY_PROPERTIES"]["GALLERY"]["FILE_VALUE"][0]) ):?>
				<?foreach($arResult["DISPLAY_PROPERTIES"]["GALLERY"]["FILE_VALUE"] as $arItem):?>
				 

				<div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                  <a href=<?=$arItem["SRC"]?> class="image-popup gal-item"><img src=<?=$arItem["SRC"]?> alt="Image" class="img-fluid"></a>
                </div>
				
				<?endforeach;?>
			<?else:?>

				<div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                  <a href=<?=$arResult["DISPLAY_PROPERTIES"]["GALLERY"]["FILE_VALUE"]["SRC"]?> class="image-popup gal-item"><img src=<?=$arResult["DISPLAY_PROPERTIES"]["GALLERY"]["FILE_VALUE"]["SRC"]?> alt="Image" class="img-fluid"></a>
                </div>
				
				 <?endif;?> 


                 
                 
              </div>



            </div>
          </div>
          <div class="col-lg-4 pl-md-5">

             

               


              <?$APPLICATION->IncludeComponent(
	"bitrix:main.feedback",
	"myfeedback",
	Array(
		"COMPONENT_TEMPLATE" => "myfeedback",
		"EMAIL_TO" => "dontlookbackinanger@yandex.ru",
		"EVENT_MESSAGE_ID" => array(0=>"7",),
		"OK_TEXT" => "Спасибо, ваше сообщение принято.",
		"REQUIRED_FIELDS" => array(0=>"NAME",1=>"EMAIL",),
		"USE_CAPTCHA" => "Y"
	)
);?>


              <!-- <form action="" class="form-contact-agent">
                 
              </form> -->
             

             
            <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"EDIT_TEMPLATE" => "",
    "PATH" => "/include/mydetailContacts.php"
	)
);?>

          </div>
          
        </div>
      </div>
    </div>


	<div>
		<h2><?=GetMessage("ADDITIONAL")?></h2>
		<?if( is_array($arResult["DISPLAY_PROPERTIES"]["ADDITIONAL_FILES"]["DISPLAY_VALUE"]) ):?>
			 
		<?foreach($arResult["DISPLAY_PROPERTIES"]["ADDITIONAL_FILES"]["DISPLAY_VALUE"] as $arItem):?>
  
  <?=$arItem?>
   <br>
   <br>
<?endforeach;?>
			<?else:?> 
				<?=$arResult["DISPLAY_PROPERTIES"]["ADDITIONAL_FILES"]["DISPLAY_VALUE"]?>
				
				 <?endif;?>
		
	</div>

	<br>
	<br>

	<div>
		<h2><?=GetMessage("RESOURCES")?></h2>



		<?if( is_array($arResult["DISPLAY_PROPERTIES"]["HYPERTEXT"]["DISPLAY_VALUE"]) ):?>
		<?foreach($arResult["DISPLAY_PROPERTIES"]["HYPERTEXT"]["DISPLAY_VALUE"] as $arItem):?>
  
  <?=$arItem?>
   <br>
   <br>
<?endforeach;?>
			<?else:?>
				<?=$arResult["DISPLAY_PROPERTIES"]["HYPERTEXT"]["DISPLAY_VALUE"]?>
				
				 <?endif;?>
		
	</div>

	 

	<!-- <?if( is_array($arResult["DISPLAY_PROPERTIES"]["HYPERTEXT"]["DISPLAY_VALUE"]) ):?>
		<?foreach($arResult["DISPLAY_PROPERTIES"]["HYPERTEXT"]["DISPLAY_VALUE"] as $arItem):?>
  
  <?=$arItem?>
   <br>
   <br>
<?endforeach;?>
			<?else:?>
				<?=$arResult["DISPLAY_PROPERTIES"]["HYPERTEXT"]["DISPLAY_VALUE"]?>
				
				 <?endif;?>  -->