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

<div class="container">
<div class="row justify-content-center">
        <div class="col-md-7 text-center mb-5">
          <div class="site-section-title">
            <h2>Our Services</h2>
          </div>
        </div>
      </div>
<div class="row">
<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
		$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
		$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
		?>
	<div id="<?=$this->GetEditAreaId($arItem['ID']);?>" class="col-md-6 col-lg-4 mb-4">
          <a href=<?=isset($arItem["PROPERTY_HYPER_VALUE"]) ? $arItem["PROPERTY_HYPER_VALUE"] : "";?> class="service text-center border rounded">
            <?$iconType;
			switch ($arItem["PROPERTY_WORK_TYPE_VALUE"]) {
				case 'SECURITY':
					$iconType = "icon flaticon-camera";
					break;
				case 'SOLD':
					$iconType = "icon flaticon-sold";
					break;
				case 'RESEARCH':
					$iconType = "icon flaticon-house";
					break;
					
				default:
					# code...
					$iconType = " ";
					break;
			}
			
			?>
			 
		  <span class="<?=$iconType;?>"></span>
            <h2 class="service-heading"><?=isset($arItem["NAME"]) ? $arItem["NAME"] : "";?></h2>
            <p><span class="read-more"><?=GetMessage("MORE_INFO");?></span></p>
          </a>
        </div>
  


<?endforeach;?>
         
         
      </div>
	  </div>