<?
if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();
/**
 * Bitrix vars
 *
 * @var array $arParams
 * @var array $arResult
 * @var CBitrixComponentTemplate $this
 * @global CMain $APPLICATION
 * @global CUser $USER
 */
?>





<div class="mfeedback bg-white widget border rounded">
<h3 class="h4 text-black widget-title mb-3">Contact Agent</h3>


<?if(!empty($arResult["ERROR_MESSAGE"]))
{
	foreach($arResult["ERROR_MESSAGE"] as $v)
		ShowError($v);
}
if($arResult["OK_MESSAGE"] <> '')
{
	?><div class="mf-ok-text"><?=$arResult["OK_MESSAGE"]?></div><?
}
?>


  <form action=<?=POST_FORM_ACTION_URI?> method="POST" class="form-contact-agent">
  <?=bitrix_sessid_post()?>
              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="fullname"><?=GetMessage("MFT_NAME")?></label>
                  <input name="user_name" type="text" id="fullname" class="form-control" value=<?=$arResult["AUTHOR_NAME"]?> placeholder="Full Name">
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="email"><?=GetMessage("MFT_EMAIL")?></label>
                  <input name="user_email" value=<?=$arResult["AUTHOR_EMAIL"]?> type="email" id="email" class="form-control" placeholder="Email Address">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="message"><?=GetMessage("MFT_MESSAGE")?></label> 
                  <textarea name="MESSAGE" id="message" cols="30" rows="5" class="form-control"  ><?=$arResult["MESSAGE"]?></textarea>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" name="submit" value=<?=GetMessage("MFT_SUBMIT")?> class="btn btn-primary  py-2 px-4 rounded-0">
                </div>
              </div>


			  <?if($arParams["USE_CAPTCHA"] == "Y"):?>
	<div class="mf-captcha">
		<div class="mf-text"><?=GetMessage("MFT_CAPTCHA")?></div>
		<input type="hidden" name="captcha_sid" value="<?=$arResult["capCode"]?>">
		<img src="/bitrix/tools/captcha.php?captcha_sid=<?=$arResult["capCode"]?>" width="180" height="40" alt="CAPTCHA">
		<div class="mf-text"><?=GetMessage("MFT_CAPTCHA_CODE")?><span class="mf-req">*</span></div>
		<input type="text" name="captcha_word" size="30" maxlength="50" value="">
	</div>
	<?endif;?>
	<input type="hidden" name="PARAMS_HASH" value="<?=$arResult["PARAMS_HASH"]?>">

  
            </form> 

</div>