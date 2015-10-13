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
<? $APPLICATION->AddHeadString("<script src='/bitrix/components/sanshung/jssip/templates/.default/jssip/dist/jssip.js'></script>",true)?>

<input type="hidden" id="ws_servers" value="<?=$arParams[WS_SERVER]?>">
<input type="hidden" id="outboundproxy" value="<?=$arParams[OUTBOUND_PROXY]?>">
<input type="hidden" id="user_sip_id" value="<?=$arParams[USER_SIP]?>">
<input type="hidden" id="user_sip_password" value="<?=$arParams[USER_PASSWORD]?>">
 <!-- WebRTC media containers -->
    <audio id="local-media" autoplay ></audio>
    <audio id="remote-media" autoplay ></audio>
<div id="phone">
    <div class="controls">
    
    	<div class="ws-disconnected" style="/* display: none; */"></div>
    
        <div class="dialbox">
            <input type="text" class="destination" value="">
            <div class="to">To:</div>
            <div class="dial-buttons">
                <div class="button call-sip">call</div>
                <div class="line-separator"></div>
            </div>
        </div>
        
        <div class="dialpad">
            <div class="line">
                <div class="button digit-1">1</div>
                <div class="button digit-2">2</div>
                <div class="button digit-3">3</div>
            </div>
            <div class="line-separator"></div>
            <div class="line">
                <div class="button digit-4">4</div>
                <div class="button digit-5">5</div>
                <div class="button digit-6">6</div>
            </div>
            <div class="line-separator"></div>
            <div class="line">
                <div class="button digit-7">7</div>
                <div class="button digit-8">8</div>
                <div class="button digit-9">9</div>
            </div>
            <div class="line-separator"></div>
            <div class="line">
                <div class="button digit-asterisk">*</div>
                <div class="button digit-0">0</div>
                <div class="button digit-pound">#</div>
            </div>
        </div><!-- .dialpad -->
    
    </div>
</div>
