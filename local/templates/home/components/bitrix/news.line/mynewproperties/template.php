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
<!-- <div class="news-line">
	<?foreach($arResult["ITEMS"] as $arItem):?>
		<?
		$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
		$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
		?>
		<small id="<?=$this->GetEditAreaId($arItem['ID']);?>"><span class="news-date-time"><?echo $arItem["DISPLAY_ACTIVE_FROM"]?>&nbsp;&nbsp;</span><a href="<?echo $arItem["DETAIL_PAGE_URL"]?>"><?echo $arItem["NAME"]?></a><br /></small>
	<?endforeach;?>
</div> -->
 

 
       
      <div class="row mb-5">
	<?foreach($arResult["ITEMS"] as $arItem):?>

		   <!-- <?   var_dump($arItem);  
		
		?>      -->



		<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
		<div id="<?=$this->GetEditAreaId($arItem['ID']);?>" class="col-md-6 col-lg-4 mb-4">
          <a href="property-details.html" class="prop-entry d-block">
            <figure>
              <img src= "<?=$arItem["PREVIEW_PICTURE"]["SRC"];?>" alt="Image" class="img-fluid">
            </figure>
            <div class="prop-text">
              <div class="inner">
                <span class="price rounded"><?=isset($arItem["PROPERTY_PRICE_VALUE"]) ? $arItem["PROPERTY_PRICE_VALUE"] : "";?></span>
                <h3 class="title"><?=isset($arItem["NAME"]) ? $arItem["NAME"] : "";?></h3>
                <p class="location"><?=isset($arItem["PREVIEW_TEXT"]) ? $arItem["PREVIEW_TEXT"] : "";?></p>
              </div>
              <div class="prop-more-info">
                <div class="inner d-flex">
                  <div class="col">
                    <span>Площадь:</span>
                    <strong><?=isset($arItem["PROPERTY_SPACE_VALUE"]) ? $arItem["PROPERTY_SPACE_VALUE"] : "";?><sup>2</sup></strong>
                  </div>
                  <div class="col">
                    <span>Этажи:</span>
                    <strong><?=isset($arItem["PROPERTY_FLOORS_VALUE"]) ? $arItem["PROPERTY_FLOORS_VALUE"] : "";?></strong>
                  </div>
                  <div class="col">
                    <span>Санузлов:</span>
                    <strong><?=isset($arItem["PROPERTY_BATHROOMS_VALUE"]) ? $arItem["PROPERTY_BATHROOMS_VALUE"] : "";?></strong>
                  </div>
                  <div class="col">
                    <span>Гараж:</span>
                    <strong><?=isset($arItem["PROPERTY_GARAGE_VALUE"]) ? $arItem["PROPERTY_GARAGE_VALUE"] : "";?></strong>
                  </div>
                </div>
              </div>
            </div>
          </a>
        </div>
		
	<?endforeach;?>

      </div>

    </div>