<?php

if (!isset($this->NM_ajax_info['param']['buffer_output']) || !$this->NM_ajax_info['param']['buffer_output'])
{
    $sOBContents = ob_get_contents();
    ob_end_clean();
}

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
            "http://www.w3.org/TR/1999/REC-html401-19991224/loose.dtd">

<html<?php echo $_SESSION['scriptcase']['reg_conf']['html_dir'] ?>>
<HEAD>
 <TITLE><?php if ('novo' == $this->nmgp_opcao) { echo strip_tags("" . $this->Ini->Nm_lang['lang_othr_frmi_titl'] . " - socios"); } else { echo strip_tags("" . $this->Ini->Nm_lang['lang_othr_frmu_titl'] . " - socios"); } ?></TITLE>
 <META http-equiv="Content-Type" content="text/html; charset=<?php echo $_SESSION['scriptcase']['charset_html'] ?>" />
 <META http-equiv="Expires" content="Fri, Jan 01 1900 00:00:00 GMT"/>
 <META http-equiv="Last-Modified" content="<?php echo gmdate("D, d M Y H:i:s"); ?> GMT"/>
 <META http-equiv="Cache-Control" content="no-store, no-cache, must-revalidate"/>
 <META http-equiv="Cache-Control" content="post-check=0, pre-check=0"/>
 <META http-equiv="Pragma" content="no-cache"/>
 <SCRIPT language="javascript" src="<?php echo $this->Ini->url_lib_js; ?>dynifs.js"></SCRIPT>
 <link rel="stylesheet" href="<?php echo $this->Ini->path_prod ?>/third/jquery_plugin/thickbox/thickbox.css" type="text/css" media="screen" />
 <SCRIPT type="text/javascript">
  var sc_pathToTB = '<?php echo $this->Ini->path_prod ?>/third/jquery_plugin/thickbox/';
  var sc_blockCol = '<?php echo $this->Ini->Block_img_col; ?>';
  var sc_blockExp = '<?php echo $this->Ini->Block_img_exp; ?>';
  var sc_ajaxBg = '<?php echo $this->Ini->Color_bg_ajax; ?>';
  var sc_ajaxBordC = '<?php echo $this->Ini->Border_c_ajax; ?>';
  var sc_ajaxBordS = '<?php echo $this->Ini->Border_s_ajax; ?>';
  var sc_ajaxBordW = '<?php echo $this->Ini->Border_w_ajax; ?>';
  var sc_ajaxMsgTime = 2;
  var sc_img_status_ok = '<?php echo $this->Ini->path_icones; ?>/<?php echo $this->Ini->Img_status_ok; ?>';
  var sc_img_status_err = '<?php echo $this->Ini->path_icones; ?>/<?php echo $this->Ini->Img_status_err; ?>';
  var sc_css_status = '<?php echo $this->Ini->Css_status; ?>';
 </SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/jquery/js/jquery.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/jquery/js/jquery-ui.js"></SCRIPT>
 <link rel="stylesheet" href="<?php echo $this->Ini->path_prod ?>/third/jquery/css/smoothness/jquery-ui.css" type="text/css" media="screen" />
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_lib_js; ?>jquery.iframe-transport.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_lib_js; ?>jquery.fileupload.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/jquery_plugin/malsup-blockui/jquery.blockUI.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/jquery_plugin/thickbox/thickbox-compressed.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_lib_js; ?>jquery.scInput.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_lib_js; ?>jquery.fieldSelection.js"></SCRIPT>
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_form.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_tab.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/buttons/<?php echo $this->Ini->Str_btn_form . '/' . $this->Ini->Str_btn_form ?>.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_calendar.css" />
<?php
include_once("../_lib/css/" . $this->Ini->str_schema_all . "_tab.php");
?>

<script>
var scFocusFirstErrorField = false;
var scFocusFirstErrorName  = "<?php echo $this->scFormFocusErrorName; ?>";
</script>

<?php
include_once("form_socios_sajax_js.php");
?>
<script type="text/javascript">
if (document.getElementById("id_error_display_fixed"))
{
 scCenterFixedElement("id_error_display_fixed");
}
var posDispLeft = 0;
var posDispTop = 0;
var Nm_Proc_Atualiz = false;
function findPos(obj)
{
 var posCurLeft = posCurTop = 0;
 if (obj.offsetParent)
 {
  posCurLeft = obj.offsetLeft
  posCurTop = obj.offsetTop
  while (obj = obj.offsetParent)
  {
   posCurLeft += obj.offsetLeft
   posCurTop += obj.offsetTop
  }
 }
 posDispLeft = posCurLeft - 10;
 posDispTop = posCurTop + 30;
}
var Nav_permite_ret = "<?php if ($this->Nav_permite_ret) { echo 'S'; } else { echo 'N'; } ?>";
var Nav_permite_ava = "<?php if ($this->Nav_permite_ava) { echo 'S'; } else { echo 'N'; } ?>";
var Nav_binicio     = "<?php echo $this->arr_buttons['binicio']['type']; ?>";
var Nav_binicio_off = "<?php echo $this->arr_buttons['binicio_off']['type']; ?>";
var Nav_bavanca     = "<?php echo $this->arr_buttons['bavanca']['type']; ?>";
var Nav_bavanca_off = "<?php echo $this->arr_buttons['bavanca_off']['type']; ?>";
var Nav_bretorna    = "<?php echo $this->arr_buttons['bretorna']['type']; ?>";
var Nav_bretorna_off = "<?php echo $this->arr_buttons['bretorna_off']['type']; ?>";
var Nav_bfinal      = "<?php echo $this->arr_buttons['bfinal']['type']; ?>";
var Nav_bfinal_off  = "<?php echo $this->arr_buttons['bfinal_off']['type']; ?>";
function nav_atualiza(str_ret, str_ava, str_pos)
{
 if ('S' == str_ret)
 {
  if (Nav_binicio == 'image')
  {
      if (document.getElementById("sc_b_ini_" + str_pos)) {
        sImg = document.getElementById("id_img_sc_b_ini_" + str_pos).src;
        nav_liga_img();
        document.getElementById("id_img_sc_b_ini_" + str_pos).src = sImg;
        document.getElementById("sc_b_ini_" + str_pos).disabled = false;
      }
  }
  else
  {
      if (document.getElementById("sc_b_ini_" + str_pos)){
        document.getElementById("sc_b_ini_" + str_pos).className = "scButton_<?php echo $this->arr_buttons['binicio']['style'] ?>";
        document.getElementById("sc_b_ini_" + str_pos).disabled = false;
        if('only_img' == '<?php echo $this->arr_buttons['binicio']['display']; ?>' || 'text_img' == '<?php echo $this->arr_buttons['binicio']['display']; ?>')
        {
            sImg = document.getElementById("id_img_sc_b_ini_" + str_pos).src;
            nav_liga_img();
            document.getElementById("id_img_sc_b_ini_" + str_pos).src = sImg;
        }
      }
  }
  if (Nav_bretorna == 'image')
  {
      if (document.getElementById("sc_b_ret_" + str_pos)) {
        sImg = document.getElementById("id_img_sc_b_ret_" + str_pos).src;
        nav_liga_img();
        document.getElementById("id_img_sc_b_ret_" + str_pos).src = sImg;
        document.getElementById("sc_b_ret_" + str_pos).disabled = false;
      }
  }
  else
  {
      if (document.getElementById("sc_b_ret_" + str_pos)) {
        document.getElementById("sc_b_ret_" + str_pos).className = "scButton_<?php echo $this->arr_buttons['bretorna']['style'] ?>";
        document.getElementById("sc_b_ret_" + str_pos).disabled = false;
        if('only_img' == '<?php echo $this->arr_buttons['bretorna']['display']; ?>' || 'text_img' == '<?php echo $this->arr_buttons['bretorna']['display']; ?>')
        {
            sImg = document.getElementById("id_img_sc_b_ret_" + str_pos).src;
            nav_liga_img();
            document.getElementById("id_img_sc_b_ret_" + str_pos).src = sImg;
        }
      }
  }
 }
 else
 {
  if (Nav_binicio_off == 'image')
  {
      if (document.getElementById("sc_b_ini_" + str_pos)) {
        sImg = document.getElementById("id_img_sc_b_ini_" + str_pos).src;
        nav_desliga_img();
        document.getElementById("id_img_sc_b_ini_" + str_pos).src = sImg;
        document.getElementById("sc_b_ini_" + str_pos).disabled = true;
      }
  }
  else
  {
      if (document.getElementById("sc_b_ini_" + str_pos)) {
        document.getElementById("sc_b_ini_" + str_pos).className = "scButton_<?php echo $this->arr_buttons['binicio_off']['style'] ?>";
        document.getElementById("sc_b_ini_" + str_pos).disabled = true;
        if('only_img' == '<?php echo $this->arr_buttons['binicio_off']['display']; ?>' || 'text_img' == '<?php echo $this->arr_buttons['binicio_off']['display']; ?>')
        {
            sImg = document.getElementById("id_img_sc_b_ini_" + str_pos).src;
            nav_desliga_img();
            document.getElementById("id_img_sc_b_ini_" + str_pos).src = sImg;
        }
      }
  }
  if (Nav_bretorna_off == 'image')
  {
      if (document.getElementById("sc_b_ret_" + str_pos)) {
        sImg = document.getElementById("id_img_sc_b_ret_" + str_pos).src;
        nav_desliga_img();
        document.getElementById("id_img_sc_b_ret_" + str_pos).src = sImg;
        document.getElementById("sc_b_ret_" + str_pos).disabled = true;
      }
  }
  else
  {
      if (document.getElementById("sc_b_ret_" + str_pos)) {
        document.getElementById("sc_b_ret_" + str_pos).className = "scButton_<?php echo $this->arr_buttons['bretorna_off']['style'] ?>";
        document.getElementById("sc_b_ret_" + str_pos).disabled = true;
        if('only_img' == '<?php echo $this->arr_buttons['bretorna_off']['display']; ?>' || 'text_img' == '<?php echo $this->arr_buttons['bretorna_off']['display']; ?>')
        {
            sImg = document.getElementById("id_img_sc_b_ret_" + str_pos).src;
            nav_desliga_img();
            document.getElementById("id_img_sc_b_ret_" + str_pos).src = sImg;
        }
      }
  }
 }
 if ('S' == str_ava)
 {
  if (Nav_bavanca == 'image')
  {
      if (document.getElementById("sc_b_avc_" + str_pos)) {
        sImg = document.getElementById("id_img_sc_b_avc_" + str_pos).src;
        nav_liga_img();
        document.getElementById("id_img_sc_b_avc_" + str_pos).src = sImg;
        document.getElementById("sc_b_avc_" + str_pos).disabled = false;
      }
  }
  else
  {
      if (document.getElementById("sc_b_avc_" + str_pos)) {
        document.getElementById("sc_b_avc_" + str_pos).className = "scButton_<?php echo $this->arr_buttons['bavanca']['style'] ?>";
        document.getElementById("sc_b_avc_" + str_pos).disabled = false;
        if('only_img' == '<?php echo $this->arr_buttons['bavanca']['display']; ?>' || 'text_img' == '<?php echo $this->arr_buttons['bavanca']['display']; ?>')
        {
            sImg = document.getElementById("id_img_sc_b_avc_" + str_pos).src;
            nav_liga_img();
            document.getElementById("id_img_sc_b_avc_" + str_pos).src = sImg;
        }
      }
  }
  if (Nav_bfinal == 'image')
  {
      if (document.getElementById("sc_b_fim_" + str_pos)) {
        sImg = document.getElementById("id_img_sc_b_fim_" + str_pos).src;
        nav_liga_img();
        document.getElementById("id_img_sc_b_fim_" + str_pos).src = sImg;
        document.getElementById("sc_b_fim_" + str_pos).disabled = false;
      }
  }
  else
  {
      if (document.getElementById("sc_b_fim_" + str_pos)) {
        document.getElementById("sc_b_fim_" + str_pos).className = "scButton_<?php echo $this->arr_buttons['bfinal']['style'] ?>";
        document.getElementById("sc_b_fim_" + str_pos).disabled = false;
        if('only_img' == '<?php echo $this->arr_buttons['bfinal']['display']; ?>' || 'text_img' == '<?php echo $this->arr_buttons['bfinal']['display']; ?>')
        {
            sImg = document.getElementById("id_img_sc_b_fim_" + str_pos).src;
            nav_liga_img();
            document.getElementById("id_img_sc_b_fim_" + str_pos).src = sImg;
        }
      }
  }
 }
 else
 {
  if (Nav_bavanca_off == 'image')
  {
      if (document.getElementById("sc_b_avc_" + str_pos)) {
        sImg = document.getElementById("id_img_sc_b_avc_" + str_pos).src;
        nav_desliga_img();
        document.getElementById("id_img_sc_b_avc_" + str_pos).src = sImg;
        document.getElementById("sc_b_avc_" + str_pos).disabled = true;
      }
  }
  else
  {
      if (document.getElementById("sc_b_avc_" + str_pos)) {
        document.getElementById("sc_b_avc_" + str_pos).className = "scButton_<?php echo $this->arr_buttons['bavanca_off']['style'] ?>";
        document.getElementById("sc_b_avc_" + str_pos).disabled = true;
        if('only_img' == '<?php echo $this->arr_buttons['bavanca_off']['display']; ?>' || 'text_img' == '<?php echo $this->arr_buttons['bavanca_off']['display']; ?>')
        {
            sImg = document.getElementById("id_img_sc_b_avc_" + str_pos).src;
            nav_desliga_img();
            document.getElementById("id_img_sc_b_avc_" + str_pos).src = sImg;
        }
      }
  }
  if (Nav_bfinal_off == 'image')
  {
      if (document.getElementById("sc_b_fim_" + str_pos)) {
        sImg = document.getElementById("id_img_sc_b_fim_" + str_pos).src;
        nav_desliga_img();
        document.getElementById("id_img_sc_b_fim_" + str_pos).src = sImg;
        document.getElementById("sc_b_fim_" + str_pos).disabled = true;
      }
  }
  else
  {
      if (document.getElementById("sc_b_fim_" + str_pos)) {
        document.getElementById("sc_b_fim_" + str_pos).className = "scButton_<?php echo $this->arr_buttons['bfinal_off']['style'] ?>";
        document.getElementById("sc_b_fim_" + str_pos).disabled = true;
        if('only_img' == '<?php echo $this->arr_buttons['bfinal_off']['display']; ?>' || 'text_img' == '<?php echo $this->arr_buttons['bfinal_off']['display']; ?>')
        {
            sImg = document.getElementById("id_img_sc_b_fim_" + str_pos).src;
            nav_desliga_img();
            document.getElementById("id_img_sc_b_fim_" + str_pos).src = sImg;
        }
      }
  }
 }
}
function nav_liga_img()
{
 sExt = sImg.substr(sImg.length - 4);
 sImg = sImg.substr(0, sImg.length - 4);
 if ('_off' == sImg.substr(sImg.length - 4))
 {
  sImg = sImg.substr(0, sImg.length - 4);
 }
 sImg += sExt;
}
function nav_desliga_img()
{
 sExt = sImg.substr(sImg.length - 4);
 sImg = sImg.substr(0, sImg.length - 4);
 if ('_off' != sImg.substr(sImg.length - 4))
 {
  sImg += '_off';
 }
 sImg += sExt;
}
<?php

include_once('form_socios_jquery.php');

?>

 var scQSInit = true;
 var scQSPos = {};
 $(function() {

  scJQElementsAdd('');

  scJQGeneralAdd();

  sc_form_onload();

  $(document).bind('drop dragover', function (e) {
      e.preventDefault();
  });

  var i, iTestWidth, iMaxLabelWidth = 0, $labelList = $(".scUiLabelWidthFix");
  for (i = 0; i < $labelList.length; i++) {
    iTestWidth = $($labelList[i]).width();
    sTestWidth = iTestWidth + "";
    if ("" == iTestWidth) {
      iTestWidth = 0;
    }
    else if ("px" == sTestWidth.substr(sTestWidth.length - 2)) {
      iTestWidth = parseInt(sTestWidth.substr(0, sTestWidth.length - 2));
    }
    iMaxLabelWidth = Math.max(iMaxLabelWidth, iTestWidth);
  }
  if (0 < iMaxLabelWidth) {
    $(".scUiLabelWidthFix").css("width", iMaxLabelWidth + "px");
  }
<?php
if (!$this->NM_ajax_flag && isset($this->NM_non_ajax_info['ajaxJavascript']) && !empty($this->NM_non_ajax_info['ajaxJavascript']))
{
    foreach ($this->NM_non_ajax_info['ajaxJavascript'] as $aFnData)
    {
?>
  <?php echo $aFnData[0]; ?>(<?php echo implode(', ', $aFnData[1]); ?>);

<?php
    }
}
?>
 });

   $(window).load(function() {
   });
 if($(".sc-ui-block-control").length) {
  preloadBlock = new Image();
  preloadBlock.src = "<?php echo $this->Ini->path_icones; ?>/" + sc_blockExp;
 }

 var show_block = {
  
 };

 function toggleBlock(e) {
  var block = e.data.block,
      block_id = $(block).attr("id");
      block_img = $("#" + block_id + " .sc-ui-block-control");

  if (1 >= block.rows.length) {
   return;
  }

  show_block[block_id] = !show_block[block_id];

  if (show_block[block_id]) {
    $(block).css("height", "100%");
    if (block_img.length) block_img.attr("src", changeImgName(block_img.attr("src"), sc_blockCol));
  }
  else {
    $(block).css("height", "");
    if (block_img.length) block_img.attr("src", changeImgName(block_img.attr("src"), sc_blockExp));
  }

  for (var i = 1; i < block.rows.length; i++) {
   if (show_block[block_id])
    $(block.rows[i]).show();
   else
    $(block.rows[i]).hide();
  }
 }

 function changeImgName(imgOld, imgNew) {
   var aOld = imgOld.split("/");
   aOld.pop();
   aOld.push(imgNew);
   return aOld.join("/");
 }

</script>
</HEAD>
<?php
$str_iframe_body = ('F' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['run_iframe'] || 'R' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['run_iframe']) ? 'margin: 2px;' : '';
 if (isset($_SESSION['nm_aba_bg_color']))
 {
     $this->Ini->cor_bg_grid = $_SESSION['nm_aba_bg_color'];
     $this->Ini->img_fun_pag = $_SESSION['nm_aba_bg_img'];
 }
if ($GLOBALS["erro_incl"] == 1)
{
    $this->nmgp_opcao = "novo";
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['opc_ant'] = "novo";
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['recarga'] = "novo";
}
if (empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['recarga']))
{
    $opcao_botoes = $this->nmgp_opcao;
}
else
{
    $opcao_botoes = $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['recarga'];
}
?>
<body class="scFormPage" style="<?php echo $str_iframe_body; ?>">
<?php

if (!isset($this->NM_ajax_info['param']['buffer_output']) || !$this->NM_ajax_info['param']['buffer_output'])
{
    echo $sOBContents;
}

?>
<div id="idJSSpecChar" style="display: none;"></div>
<script type="text/javascript">
function NM_tp_critica(TP)
{
    if (TP == 0 || TP == 1 || TP == 2)
    {
        nmdg_tipo_crit = TP;
    }
}
</script> 
<?php
 include_once("form_socios_js0.php");
?>
<script type="text/javascript" src="<?php echo str_replace("{str_idioma}", $this->Ini->str_lang, "../_lib/js/tab_erro_{str_idioma}.js"); ?>"> 
</script> 
<script type="text/javascript"> 
 function setLocale(oSel)
 {
  var sLocale = "";
  if (-1 < oSel.selectedIndex)
  {
   sLocale = oSel.options[oSel.selectedIndex].value;
  }
  document.F1.nmgp_idioma_novo.value = sLocale;
 }
 function setSchema(oSel)
 {
  var sLocale = "";
  if (-1 < oSel.selectedIndex)
  {
   sLocale = oSel.options[oSel.selectedIndex].value;
  }
  document.F1.nmgp_schema_f.value = sLocale;
 }
 </script>
<form name="F1" method=post 
               action="form_socios.php" 
               target="_self"> 
<input type=hidden name="nm_form_submit" value="1">
<input type=hidden name="nmgp_idioma_novo" value="">
<input type=hidden name="nmgp_schema_f" value="">
<input type=hidden name="nmgp_url_saida" value="">
<input type=hidden name="nmgp_opcao" value="">
<input type=hidden name="nmgp_ancora" value="">
<input type=hidden name="nmgp_num_form" value="<?php  echo NM_encode_input($nmgp_num_form); ?>">
<input type=hidden name="nmgp_parms" value="">
<input type=hidden name="script_case_init" value="<?php  echo NM_encode_input($this->Ini->sc_page); ?>"> 
<input type=hidden name="script_case_session" value="<?php  echo NM_encode_input(session_id()); ?>"> 
<?php
$int_iframe_padding = ('F' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['run_iframe'] || 'R' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['run_iframe']) ? 0 : "0px";
?>
<?php
$_SESSION['scriptcase']['error_span_title']['form_socios'] = $this->Ini->Error_icon_span;
$_SESSION['scriptcase']['error_icon_title']['form_socios'] = '' != $this->Ini->Err_ico_title ? $this->Ini->path_icones . '/' . $this->Ini->Err_ico_title : '';
?>
<div style="display: none; position: absolute" id="id_error_display_table_frame">
<table class="scFormErrorTable">
<tr><?php if ($this->Ini->Error_icon_span && '' != $this->Ini->Err_ico_title) { ?><td style="padding: 0px" rowspan="2"><img src="<?php echo $this->Ini->path_icones; ?>/<?php echo $this->Ini->Err_ico_title; ?>" style="border-width: 0px" align="top"></td><?php } ?><td class="scFormErrorTitle"><table style="border-collapse: collapse; border-width: 0px; width: 100%"><tr><td class="scFormErrorTitleFont" style="padding: 0px; vertical-align: top; width: 100%"><?php if (!$this->Ini->Error_icon_span && '' != $this->Ini->Err_ico_title) { ?><img src="<?php echo $this->Ini->path_icones; ?>/<?php echo $this->Ini->Err_ico_title; ?>" style="border-width: 0px" align="top">&nbsp;<?php } ?><?php echo $this->Ini->Nm_lang['lang_errm_errt'] ?></td><td style="padding: 0px; vertical-align: top"><?php echo nmButtonOutput($this->arr_buttons, "berrm_clse", "scAjaxHideErrorDisplay('table')", "scAjaxHideErrorDisplay('table')", "", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "");?>
</td></tr></table></td></tr>
<tr><td class="scFormErrorMessage"><span id="id_error_display_table_text"></span></td></tr>
</table>
</div>
<div style="display: none; position: absolute" id="id_message_display_frame">
 <table class="scFormMessageTable" id="id_message_display_content" style="width: 100%">
  <tr id="id_message_display_title_line">
   <td class="scFormMessageTitle" style="height: 20px"><?php
if ('' != $this->Ini->Msg_ico_title) {
?>
<img src="<?php echo $this->Ini->path_icones . '/' . $this->Ini->Msg_ico_title; ?>" style="border-width: 0px; vertical-align: middle">&nbsp;<?php
}
?>
<?php echo nmButtonOutput($this->arr_buttons, "bmessageclose", "_scAjaxMessageBtnClose()", "_scAjaxMessageBtnClose()", "id_message_display_close_icon", "", "", "float: right", "", "", "", $this->Ini->path_botoes, "", "", "", "");?>
<span id="id_message_display_title" style="vertical-align: middle"></span></td>
  </tr>
  <tr>
   <td class="scFormMessageMessage"><?php
if ('' != $this->Ini->Msg_ico_body) {
?>
<img id="id_message_display_body_icon" src="<?php echo $this->Ini->path_icones . '/' . $this->Ini->Msg_ico_body; ?>" style="border-width: 0px; vertical-align: middle">&nbsp;<?php
}
?>
<span id="id_message_display_text"></span><div id="id_message_display_buttond" style="display: none; text-align: center"><br /><input id="id_message_display_buttone" type="button" class="scButton_default" value="Ok" onClick="_scAjaxMessageBtnClick()" ></div></td>
  </tr>
 </table>
</div>
<script type="text/javascript">
var scMsgDefTitle = "<?php echo $this->Ini->Nm_lang['lang_usr_lang_othr_msgs_titl']; ?>";
var scMsgDefButton = "Ok";
var scMsgDefClick = "close";
var scMsgDefScInit = "<?php echo $this->Ini->page; ?>";
</script>
<table id="main_table_form"  align="center" cellpadding="<?php echo $int_iframe_padding; ?>" cellspacing=0 class="scFormBorder" >
<tr><td>
<?php
  if ($this->nmgp_form_empty)
  {
       echo "</td></tr><tr><td align=center>";
       echo "<font face=\"" . $this->Ini->pag_fonte_tipo . "\" color=\"" . $this->Ini->cor_txt_grid . "\" size=\"2\"><b>" . $this->Ini->Nm_lang['lang_errm_empt'] . "</b></font>";
       echo "</td></tr>";
  }
  else
  {
?>
<?php $sc_hidden_no = 1; $sc_hidden_yes = 0; ?>
   <a name="bloco_0"></a>
   <table width="100%" height="100%" cellpadding="0"><tr valign="top"><td width="100%" height="">
<div id="div_hidden_bloco_0"><!-- bloco_c -->
<?php
?>
<TABLE align="center" id="hidden_bloco_0" class="scFormTable" width="100%" style="height: 100%;">   <tr>


    <TD colspan="4" height="40" class="scFormBlock" style="background-color: #006699; text-align: center; vertical-align: bottom">
     <TABLE style="padding: 0px; spacing: 0px; border-width: 0px;" width="100%" height="100%">
      <TR>
       <TD align="center" valign="bottom" class="scFormBlockFont" style="font-size: 14px; color: #FFFFFF">BÚSQUEDA DE SOCI@ POR:</TD>
       
      </TR>
     </TABLE>
    </TD>




   </tr>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>
<?php
           if ('novo' != $this->nmgp_opcao && !isset($this->nmgp_cmp_readonly['cod_socios']))
           {
               $this->nmgp_cmp_readonly['cod_socios'] = 'on';
           }
?>


   <?php
   if (!isset($this->nm_new_label['txt_tipo_documento']))
   {
       $this->nm_new_label['txt_tipo_documento'] = "";
   }
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $txt_tipo_documento = $this->txt_tipo_documento;
   $sStyleHidden_txt_tipo_documento = '';
   if (isset($this->nmgp_cmp_hidden['txt_tipo_documento']) && $this->nmgp_cmp_hidden['txt_tipo_documento'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['txt_tipo_documento']);
       $sStyleHidden_txt_tipo_documento = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_txt_tipo_documento = 'display: none;';
   $sStyleReadInp_txt_tipo_documento = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['txt_tipo_documento']) && $this->nmgp_cmp_readonly['txt_tipo_documento'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['txt_tipo_documento']);
       $sStyleReadLab_txt_tipo_documento = '';
       $sStyleReadInp_txt_tipo_documento = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['txt_tipo_documento']) && $this->nmgp_cmp_hidden['txt_tipo_documento'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="txt_tipo_documento" value="<?php echo NM_encode_input($this->txt_tipo_documento) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd" id="hidden_field_data_txt_tipo_documento" style="<?php echo $sStyleHidden_txt_tipo_documento; ?>text-align:left;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd" style="text-align:left;;vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat" style="font-weight:bold;text-align:left;vertical-align:middle;width:100px;" ><span id="id_label_txt_tipo_documento"><?php echo $this->nm_new_label['txt_tipo_documento']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["txt_tipo_documento"]) &&  $this->nmgp_cmp_readonly["txt_tipo_documento"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_txt_tipo_documento']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_txt_tipo_documento'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_txt_tipo_documento']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_txt_tipo_documento'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_txt_tipo_documento']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_txt_tipo_documento'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_txt_tipo_documento']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_txt_tipo_documento'] = array(); 
    }

   $old_value_fecha_nacimiento = $this->fecha_nacimiento;
   $this->nm_tira_formatacao();
   $this->nm_converte_datas(false);


   $unformatted_value_fecha_nacimiento = $this->fecha_nacimiento;

   $nm_comando = "SELECT codigo, valor 
FROM catalogo WHERE tipo = 'tipo_documento'
ORDER BY valor";

   $this->fecha_nacimiento = $old_value_fecha_nacimiento;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando)) 
   {
       while (!$rs->EOF) 
       { 
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_txt_tipo_documento'][] = $rs->fields[0];
              $rs->MoveNext() ; 
       } 
       $rs->Close() ; 
   } 
   elseif ($GLOBALS["NM_ERRO_IBASE"] != 1 && $nm_comando != "")  
   {  
       $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
       exit; 
   } 
   $GLOBALS["NM_ERRO_IBASE"] = 0; 
   $x = 0; 
   $txt_tipo_documento_look = ""; 
   $todo = explode("?@?", trim($nmgp_def_dados)) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->txt_tipo_documento_1))
          {
              foreach ($this->txt_tipo_documento_1 as $tmp_txt_tipo_documento)
              {
                  if (trim($tmp_txt_tipo_documento) === trim($cadaselect[1])) { $txt_tipo_documento_look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->txt_tipo_documento) === trim($cadaselect[1])) { $txt_tipo_documento_look .= $cadaselect[0]; } 
          $x++; 
   }

?>
<input type=hidden name="txt_tipo_documento" value="<?php echo NM_encode_input($txt_tipo_documento) . "\">" . $txt_tipo_documento_look . ""; ?>
<?php } else { ?>
 
<?php  
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_txt_tipo_documento']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_txt_tipo_documento'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_txt_tipo_documento']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_txt_tipo_documento'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_txt_tipo_documento']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_txt_tipo_documento'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_txt_tipo_documento']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_txt_tipo_documento'] = array(); 
    }

   $old_value_fecha_nacimiento = $this->fecha_nacimiento;
   $this->nm_tira_formatacao();
   $this->nm_converte_datas(false);


   $unformatted_value_fecha_nacimiento = $this->fecha_nacimiento;

   $nm_comando = "SELECT codigo, valor 
FROM catalogo WHERE tipo = 'tipo_documento'
ORDER BY valor";

   $this->fecha_nacimiento = $old_value_fecha_nacimiento;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando)) 
   {
       while (!$rs->EOF) 
       { 
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_txt_tipo_documento'][] = $rs->fields[0];
              $rs->MoveNext() ; 
       } 
       $rs->Close() ; 
   } 
   elseif ($GLOBALS["NM_ERRO_IBASE"] != 1 && $nm_comando != "")  
   {  
       $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
       exit; 
   } 
   $GLOBALS["NM_ERRO_IBASE"] = 0; 
   $x = 0 ; 
   $todo = explode("?@?", $nmgp_def_dados) ; 
   $x = 0; 
   $txt_tipo_documento_look = ""; 
   $todo = explode("?@?", trim($nmgp_def_dados)) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->txt_tipo_documento_1))
          {
              foreach ($this->txt_tipo_documento_1 as $tmp_txt_tipo_documento)
              {
                  if (trim($tmp_txt_tipo_documento) === trim($cadaselect[1])) { $txt_tipo_documento_look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->txt_tipo_documento) === trim($cadaselect[1])) { $txt_tipo_documento_look .= $cadaselect[0]; } 
          $x++; 
   }
   $x = 0; 
   echo "<span id=\"id_read_on_txt_tipo_documento\" style=\"text-align:left;" .  $sStyleReadLab_txt_tipo_documento . "\">" . NM_encode_input($txt_tipo_documento_look) . "</span><span id=\"id_read_off_txt_tipo_documento\" style=\"" . $sStyleReadInp_txt_tipo_documento . "\">";
   echo " <span id=\"idAjaxSelect_txt_tipo_documento\"><select class=\"sc-js-input scFormObjectOdd\" style=\"text-align:left;\" id=\"id_sc_field_txt_tipo_documento\" name=\"txt_tipo_documento\" size=1>" ; 
   echo "\r" ; 
   $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_txt_tipo_documento'][] = ''; 
   echo "  <option value=\"\">--Seleccione--</option>" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->txt_tipo_documento) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->txt_tipo_documento)) 
              {
                  echo " selected" ;
              } 
           } 
          echo ">$cadaselect[0] </option>" ; 
          echo "\r" ; 
          $x++ ; 
   }  ; 
   echo " </select></span>" ; 
   echo "\r" ; 
   echo "</span>";
?> 
<?php  }?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_txt_tipo_documento_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_txt_tipo_documento_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php
    if (!isset($this->nm_new_label['txt_cedula']))
    {
        $this->nm_new_label['txt_cedula'] = "Ingresar:";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $txt_cedula = $this->txt_cedula;
   $sStyleHidden_txt_cedula = '';
   if (isset($this->nmgp_cmp_hidden['txt_cedula']) && $this->nmgp_cmp_hidden['txt_cedula'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['txt_cedula']);
       $sStyleHidden_txt_cedula = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_txt_cedula = 'display: none;';
   $sStyleReadInp_txt_cedula = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['txt_cedula']) && $this->nmgp_cmp_readonly['txt_cedula'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['txt_cedula']);
       $sStyleReadLab_txt_cedula = '';
       $sStyleReadInp_txt_cedula = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['txt_cedula']) && $this->nmgp_cmp_hidden['txt_cedula'] == 'off') { $sc_hidden_yes++;  ?>
<input type=hidden name="txt_cedula" value="<?php echo NM_encode_input($txt_cedula) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd" id="hidden_field_data_txt_cedula" style="<?php echo $sStyleHidden_txt_cedula; ?>text-align:left;vertical-align:middle;width:140px;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd" style="text-align:left;vertical-align:middle;width:140px;padding: 0px"><span class="scFormLabelOddFormat" style="text-align:left;vertical-align:middle;width:140px;" ><span id="id_label_txt_cedula"><?php echo $this->nm_new_label['txt_cedula']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["txt_cedula"]) &&  $this->nmgp_cmp_readonly["txt_cedula"] == "on") { 

 ?>
<input type=hidden name="txt_cedula" value="<?php echo NM_encode_input($txt_cedula) . "\">" . $txt_cedula . ""; ?>
<?php } else { ?>
<span id="id_read_on_txt_cedula" class="sc-ui-readonly-txt_cedula" style="text-align:left;vertical-align:middle;width:140px;<?php echo $sStyleReadLab_txt_cedula; ?>"><?php echo NM_encode_input($this->txt_cedula); ?></span><span id="id_read_off_txt_cedula" style="white-space: nowrap;<?php echo $sStyleReadInp_txt_cedula; ?>">
 <input class="sc-js-input scFormObjectOdd" style="text-align:left;vertical-align:middle;width:140px;" id="id_sc_field_txt_cedula" type=text name="txt_cedula" value="<?php echo NM_encode_input($txt_cedula) ?>"
 size=20 maxlength=10 alt="{datatype: 'text', maxLength: 10, allowedChars: '0123456789', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}"></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_txt_cedula_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_txt_cedula_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php
    if (!isset($this->nm_new_label['txt_pasaporte']))
    {
        $this->nm_new_label['txt_pasaporte'] = "Ingresar:";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $txt_pasaporte = $this->txt_pasaporte;
   $sStyleHidden_txt_pasaporte = '';
   if (isset($this->nmgp_cmp_hidden['txt_pasaporte']) && $this->nmgp_cmp_hidden['txt_pasaporte'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['txt_pasaporte']);
       $sStyleHidden_txt_pasaporte = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_txt_pasaporte = 'display: none;';
   $sStyleReadInp_txt_pasaporte = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['txt_pasaporte']) && $this->nmgp_cmp_readonly['txt_pasaporte'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['txt_pasaporte']);
       $sStyleReadLab_txt_pasaporte = '';
       $sStyleReadInp_txt_pasaporte = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['txt_pasaporte']) && $this->nmgp_cmp_hidden['txt_pasaporte'] == 'off') { $sc_hidden_yes++;  ?>
<input type=hidden name="txt_pasaporte" value="<?php echo NM_encode_input($txt_pasaporte) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd" id="hidden_field_data_txt_pasaporte" style="<?php echo $sStyleHidden_txt_pasaporte; ?>text-align:left;vertical-align:middle;width:140px;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd" style="text-align:left;vertical-align:middle;width:140px;padding: 0px"><span class="scFormLabelOddFormat" style="font-weight:bold;text-align:left;vertical-align:middle;width:140px;" ><span id="id_label_txt_pasaporte"><?php echo $this->nm_new_label['txt_pasaporte']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["txt_pasaporte"]) &&  $this->nmgp_cmp_readonly["txt_pasaporte"] == "on") { 

 ?>
<input type=hidden name="txt_pasaporte" value="<?php echo NM_encode_input($txt_pasaporte) . "\">" . $txt_pasaporte . ""; ?>
<?php } else { ?>
<span id="id_read_on_txt_pasaporte" class="sc-ui-readonly-txt_pasaporte" style="text-align:left;vertical-align:middle;width:140px;<?php echo $sStyleReadLab_txt_pasaporte; ?>"><?php echo NM_encode_input($this->txt_pasaporte); ?></span><span id="id_read_off_txt_pasaporte" style="white-space: nowrap;<?php echo $sStyleReadInp_txt_pasaporte; ?>">
 <input class="sc-js-input scFormObjectOdd" style="text-align:left;vertical-align:middle;width:140px;" id="id_sc_field_txt_pasaporte" type=text name="txt_pasaporte" value="<?php echo NM_encode_input($txt_pasaporte) ?>"
 size=20 maxlength=20 alt="{datatype: 'text', maxLength: 20, allowedChars: 'abcdefghijklmnopqrstuvwxyz0123456789', lettersCase: 'upper', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}"></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_txt_pasaporte_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_txt_pasaporte_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php
    if (!isset($this->nm_new_label['btnbuscar']))
    {
        $this->nm_new_label['btnbuscar'] = "";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $btnbuscar = $this->btnbuscar;
   $sStyleHidden_btnbuscar = '';
   if (isset($this->nmgp_cmp_hidden['btnbuscar']) && $this->nmgp_cmp_hidden['btnbuscar'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['btnbuscar']);
       $sStyleHidden_btnbuscar = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_btnbuscar = 'display: none;';
   $sStyleReadInp_btnbuscar = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['btnbuscar']) && $this->nmgp_cmp_readonly['btnbuscar'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['btnbuscar']);
       $sStyleReadLab_btnbuscar = '';
       $sStyleReadInp_btnbuscar = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['btnbuscar']) && $this->nmgp_cmp_hidden['btnbuscar'] == 'off') { $sc_hidden_yes++;  ?>
<input type=hidden name="btnbuscar" value="<?php echo NM_encode_input($btnbuscar) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd" id="hidden_field_data_btnbuscar" style="<?php echo $sStyleHidden_btnbuscar; ?>;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd" style=";;vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat" style=";" ><span id="id_label_btnbuscar"><?php echo $this->nm_new_label['btnbuscar']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["btnbuscar"]) &&  $this->nmgp_cmp_readonly["btnbuscar"] == "on") { 

 ?>
<input type=hidden name="btnbuscar" value="<?php echo NM_encode_input($btnbuscar) . "\">" . $btnbuscar . ""; ?>
<?php } else { ?>
<span id="id_read_on_btnbuscar" class="sc-ui-readonly-btnbuscar" style=";<?php echo $sStyleReadLab_btnbuscar; ?>"><?php echo NM_encode_input($this->btnbuscar); ?></span><span id="id_read_off_btnbuscar" style="white-space: nowrap;<?php echo $sStyleReadInp_btnbuscar; ?>">
 <input class="sc-js-input scFormObjectOdd" style="background-color:#CCCCCC;font-weight:bold;border-width:1px;border-color:#000000;text-align:center;vertical-align:middle;" id="id_sc_field_btnbuscar" type=text name="btnbuscar" value="<?php echo NM_encode_input($btnbuscar) ?>"
 size=6 maxlength=20 alt="{datatype: 'text', maxLength: 20, allowedChars: '', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: 'Buscar', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}"></span><?php } ?>
<span class="scFormPopupBubble"><span class="scFormPopupTrigger"><?php echo nmButtonOutput($this->arr_buttons, "bfieldhelp", "return false;", "return false;", "", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "");?>
</span><table class="scFormPopup"><tbody><tr><td class="scFormPopupTopLeft scFormPopupCorner"></td><td class="scFormPopupTop"></td><td class="scFormPopupTopRight scFormPopupCorner"></td></tr><tr><td class="scFormPopupLeft"></td><td class="scFormPopupContent">De un click aqui luego de ingresar la información.</td><td class="scFormPopupRight"></td></tr><tr><td class="scFormPopupBottomLeft scFormPopupCorner"></td><td class="scFormPopupBottom"><img src="<?php echo $this->Ini->path_icones . '/' . $this->Ini->Bubble_tail; ?>" /></td><td class="scFormPopupBottomRight scFormPopupCorner"></td></tr></tbody></table></span></td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_btnbuscar_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_btnbuscar_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 






   </tr>
<?php $sc_hidden_no = 1; ?>
</TABLE></div><!-- bloco_f -->
   </td>
   </tr></table>
   <a name="bloco_1"></a>
   <table width="100%" height="100%" cellpadding="0"><tr valign="top"><td width="100%" height="">
<div id="div_hidden_bloco_1"><!-- bloco_c -->
<TABLE align="center" id="hidden_bloco_1" class="scFormTable" width="100%" style="height: 100%;">   <tr>


    <TD colspan="2" height="40" class="scFormBlock" style="background-color: #006699; text-align: center; vertical-align: bottom">
     <TABLE style="padding: 0px; spacing: 0px; border-width: 0px;" width="100%" height="100%">
      <TR>
       <TD align="center" valign="bottom" class="scFormBlockFont" style="font-size: 14px; color: #FFFFFF">SOCI@S</TD>
       
      </TR>
     </TABLE>
    </TD>




   </tr>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['cod_socios']))
    {
        $this->nm_new_label['cod_socios'] = "CÓDIGO";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $cod_socios = $this->cod_socios;
   $sStyleHidden_cod_socios = '';
   if (isset($this->nmgp_cmp_hidden['cod_socios']) && $this->nmgp_cmp_hidden['cod_socios'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['cod_socios']);
       $sStyleHidden_cod_socios = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_cod_socios = 'display: none;';
   $sStyleReadInp_cod_socios = '';
   if (/*($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir") || */(isset($this->nmgp_cmp_readonly["cod_socios"]) &&  $this->nmgp_cmp_readonly["cod_socios"] == "on"))
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['cod_socios']);
       $sStyleReadLab_cod_socios = '';
       $sStyleReadInp_cod_socios = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['cod_socios']) && $this->nmgp_cmp_hidden['cod_socios'] == 'off') { $sc_hidden_yes++;  ?>
<input type=hidden name="cod_socios" value="<?php echo NM_encode_input($cod_socios) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd" id="hidden_field_data_cod_socios" style="<?php echo $sStyleHidden_cod_socios; ?>;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd" style=";;vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat" style="font-weight:bold;" ><span id="id_label_cod_socios"><?php echo $this->nm_new_label['cod_socios']; ?></span></span><br>
<?php if ((isset($this->Embutida_form) && $this->Embutida_form) || ($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir")) { 
 ?>
<span id="id_read_on_cod_socios" style=";<?php echo $sStyleReadLab_cod_socios; ?>"><?php echo NM_encode_input($this->cod_socios); ?></span><span id="id_read_off_cod_socios" style="<?php echo $sStyleReadInp_cod_socios; ?>"><input type=hidden name="cod_socios" value="<?php echo NM_encode_input($cod_socios) . "\">"?><span id="id_ajax_label_cod_socios"><?php echo nl2br($cod_socios); ?></span>
</span><?php } else { ?>
&nbsp;
<?php } ?>
</span></td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_cod_socios_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_cod_socios_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php
   if (!isset($this->nm_new_label['estado']))
   {
       $this->nm_new_label['estado'] = "ESTADO";
   }
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $estado = $this->estado;
   $sStyleHidden_estado = '';
   if (isset($this->nmgp_cmp_hidden['estado']) && $this->nmgp_cmp_hidden['estado'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['estado']);
       $sStyleHidden_estado = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_estado = 'display: none;';
   $sStyleReadInp_estado = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['estado']) && $this->nmgp_cmp_readonly['estado'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['estado']);
       $sStyleReadLab_estado = '';
       $sStyleReadInp_estado = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['estado']) && $this->nmgp_cmp_hidden['estado'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="estado" value="<?php echo NM_encode_input($this->estado) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd" id="hidden_field_data_estado" style="<?php echo $sStyleHidden_estado; ?>;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd" style=";;vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat" style="font-weight:bold;" ><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['php_cmp_required']['estado']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['php_cmp_required']['estado'] == "on") { ?><span class="scFormRequiredOdd">*</span> <?php }?> <span id="id_label_estado"><?php echo $this->nm_new_label['estado']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["estado"]) &&  $this->nmgp_cmp_readonly["estado"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_estado']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_estado'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_estado']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_estado'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_estado']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_estado'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_estado']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_estado'] = array(); 
    }

   $old_value_fecha_nacimiento = $this->fecha_nacimiento;
   $this->nm_tira_formatacao();
   $this->nm_converte_datas(false);


   $unformatted_value_fecha_nacimiento = $this->fecha_nacimiento;

   $nm_comando = "SELECT codigo, valor 
FROM catalogo WHERE tipo = 'estado_socio'
ORDER BY valor";

   $this->fecha_nacimiento = $old_value_fecha_nacimiento;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando)) 
   {
       while (!$rs->EOF) 
       { 
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_estado'][] = $rs->fields[0];
              $rs->MoveNext() ; 
       } 
       $rs->Close() ; 
   } 
   elseif ($GLOBALS["NM_ERRO_IBASE"] != 1 && $nm_comando != "")  
   {  
       $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
       exit; 
   } 
   $GLOBALS["NM_ERRO_IBASE"] = 0; 
   $x = 0; 
   $estado_look = ""; 
   $todo = explode("?@?", trim($nmgp_def_dados)) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->estado_1))
          {
              foreach ($this->estado_1 as $tmp_estado)
              {
                  if (trim($tmp_estado) === trim($cadaselect[1])) { $estado_look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->estado) === trim($cadaselect[1])) { $estado_look .= $cadaselect[0]; } 
          $x++; 
   }

?>
<input type=hidden name="estado" value="<?php echo NM_encode_input($estado) . "\">" . $estado_look . ""; ?>
<?php } else { ?>
 
<?php  
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_estado']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_estado'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_estado']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_estado'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_estado']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_estado'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_estado']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_estado'] = array(); 
    }

   $old_value_fecha_nacimiento = $this->fecha_nacimiento;
   $this->nm_tira_formatacao();
   $this->nm_converte_datas(false);


   $unformatted_value_fecha_nacimiento = $this->fecha_nacimiento;

   $nm_comando = "SELECT codigo, valor 
FROM catalogo WHERE tipo = 'estado_socio'
ORDER BY valor";

   $this->fecha_nacimiento = $old_value_fecha_nacimiento;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando)) 
   {
       while (!$rs->EOF) 
       { 
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_estado'][] = $rs->fields[0];
              $rs->MoveNext() ; 
       } 
       $rs->Close() ; 
   } 
   elseif ($GLOBALS["NM_ERRO_IBASE"] != 1 && $nm_comando != "")  
   {  
       $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
       exit; 
   } 
   $GLOBALS["NM_ERRO_IBASE"] = 0; 
   $x = 0 ; 
   $todo = explode("?@?", $nmgp_def_dados) ; 
   $x = 0; 
   $estado_look = ""; 
   $todo = explode("?@?", trim($nmgp_def_dados)) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->estado_1))
          {
              foreach ($this->estado_1 as $tmp_estado)
              {
                  if (trim($tmp_estado) === trim($cadaselect[1])) { $estado_look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->estado) === trim($cadaselect[1])) { $estado_look .= $cadaselect[0]; } 
          $x++; 
   }
   $x = 0; 
   echo "<span id=\"id_read_on_estado\" style=\";" .  $sStyleReadLab_estado . "\">" . NM_encode_input($estado_look) . "</span><span id=\"id_read_off_estado\" style=\"" . $sStyleReadInp_estado . "\">";
   echo " <span id=\"idAjaxSelect_estado\"><select class=\"sc-js-input scFormObjectOdd\" style=\";\" id=\"id_sc_field_estado\" name=\"estado\" size=1>" ; 
   echo "\r" ; 
   $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_estado'][] = ''; 
   echo "  <option value=\"\">--Seleccione--</option>" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->estado) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->estado)) 
              {
                  echo " selected" ;
              } 
           } 
          echo ">$cadaselect[0] </option>" ; 
          echo "\r" ; 
          $x++ ; 
   }  ; 
   echo " </select></span>" ; 
   echo "\r" ; 
   echo "</span>";
?> 
<?php  }?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_estado_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_estado_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php $sStyleHidden_cod_socios_dumb = ('' == $sStyleHidden_cod_socios) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_cod_socios_dumb" style="<?php echo $sStyleHidden_cod_socios_dumb; ?>"></TD>
<?php $sStyleHidden_estado_dumb = ('' == $sStyleHidden_estado) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_estado_dumb" style="<?php echo $sStyleHidden_estado_dumb; ?>"></TD>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['cedula']))
    {
        $this->nm_new_label['cedula'] = "CÉDULA / PASAPORTE";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $cedula = $this->cedula;
   $sStyleHidden_cedula = '';
   if (isset($this->nmgp_cmp_hidden['cedula']) && $this->nmgp_cmp_hidden['cedula'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['cedula']);
       $sStyleHidden_cedula = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_cedula = 'display: none;';
   $sStyleReadInp_cedula = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['cedula']) && $this->nmgp_cmp_readonly['cedula'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['cedula']);
       $sStyleReadLab_cedula = '';
       $sStyleReadInp_cedula = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['cedula']) && $this->nmgp_cmp_hidden['cedula'] == 'off') { $sc_hidden_yes++;  ?>
<input type=hidden name="cedula" value="<?php echo NM_encode_input($cedula) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd" id="hidden_field_data_cedula" style="<?php echo $sStyleHidden_cedula; ?>width:245px;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd" style="width:245px;;vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat" style="font-weight:bold;" ><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['php_cmp_required']['cedula']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['php_cmp_required']['cedula'] == "on") { ?><span class="scFormRequiredOdd">*</span> <?php }?> <span id="id_label_cedula"><?php echo $this->nm_new_label['cedula']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["cedula"]) &&  $this->nmgp_cmp_readonly["cedula"] == "on") { 

 ?>
<input type=hidden name="cedula" value="<?php echo NM_encode_input($cedula) . "\">" . $cedula . ""; ?>
<?php } else { ?>
<span id="id_read_on_cedula" class="sc-ui-readonly-cedula" style="width:245px;<?php echo $sStyleReadLab_cedula; ?>"><?php echo NM_encode_input($this->cedula); ?></span><span id="id_read_off_cedula" style="white-space: nowrap;<?php echo $sStyleReadInp_cedula; ?>">
 <input class="sc-js-input scFormObjectOdd" style="width:245px;" id="id_sc_field_cedula" type=text name="cedula" value="<?php echo NM_encode_input($cedula) ?>"
 size=20 maxlength=20 alt="{datatype: 'text', maxLength: 20, allowedChars: '', lettersCase: 'upper', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}"></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_cedula_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_cedula_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php
    if (!isset($this->nm_new_label['apellidos']))
    {
        $this->nm_new_label['apellidos'] = "NOMBRES";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $apellidos = $this->apellidos;
   $sStyleHidden_apellidos = '';
   if (isset($this->nmgp_cmp_hidden['apellidos']) && $this->nmgp_cmp_hidden['apellidos'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['apellidos']);
       $sStyleHidden_apellidos = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_apellidos = 'display: none;';
   $sStyleReadInp_apellidos = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['apellidos']) && $this->nmgp_cmp_readonly['apellidos'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['apellidos']);
       $sStyleReadLab_apellidos = '';
       $sStyleReadInp_apellidos = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['apellidos']) && $this->nmgp_cmp_hidden['apellidos'] == 'off') { $sc_hidden_yes++;  ?>
<input type=hidden name="apellidos" value="<?php echo NM_encode_input($apellidos) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd" id="hidden_field_data_apellidos" style="<?php echo $sStyleHidden_apellidos; ?>vertical-align:middle;width:245px;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd" style="vertical-align:middle;width:245px;padding: 0px"><span class="scFormLabelOddFormat" style="font-weight:bold;vertical-align:middle;" ><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['php_cmp_required']['apellidos']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['php_cmp_required']['apellidos'] == "on") { ?><span class="scFormRequiredOdd">*</span> <?php }?> <span id="id_label_apellidos"><?php echo $this->nm_new_label['apellidos']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["apellidos"]) &&  $this->nmgp_cmp_readonly["apellidos"] == "on") { 

 ?>
<input type=hidden name="apellidos" value="<?php echo NM_encode_input($apellidos) . "\">" . $apellidos . ""; ?>
<?php } else { ?>
<span id="id_read_on_apellidos" class="sc-ui-readonly-apellidos" style="vertical-align:middle;width:245px;<?php echo $sStyleReadLab_apellidos; ?>"><?php echo NM_encode_input($this->apellidos); ?></span><span id="id_read_off_apellidos" style="white-space: nowrap;<?php echo $sStyleReadInp_apellidos; ?>">
 <input class="sc-js-input scFormObjectOdd" style="vertical-align:middle;width:245px;" id="id_sc_field_apellidos" type=text name="apellidos" value="<?php echo NM_encode_input($apellidos) ?>"
 size=50 maxlength=50 alt="{datatype: 'text', maxLength: 50, allowedChars: 'abcdefghijklmnopqrstuvwxyzï¿½ï¿½ï¿½ï¿½ï¿½ï¿½ï¿½ï¿½ï¿½ï¿½ï¿½ï¿½ï¿½ ÁÉÍÓÚ', lettersCase: 'upper', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}"></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_apellidos_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_apellidos_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php $sStyleHidden_cedula_dumb = ('' == $sStyleHidden_cedula) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_cedula_dumb" style="<?php echo $sStyleHidden_cedula_dumb; ?>"></TD>
<?php $sStyleHidden_apellidos_dumb = ('' == $sStyleHidden_apellidos) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_apellidos_dumb" style="<?php echo $sStyleHidden_apellidos_dumb; ?>"></TD>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['fecha_nacimiento']))
    {
        $this->nm_new_label['fecha_nacimiento'] = "FECHA DE NACIMIENTO";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $fecha_nacimiento = $this->fecha_nacimiento;
   $sStyleHidden_fecha_nacimiento = '';
   if (isset($this->nmgp_cmp_hidden['fecha_nacimiento']) && $this->nmgp_cmp_hidden['fecha_nacimiento'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['fecha_nacimiento']);
       $sStyleHidden_fecha_nacimiento = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_fecha_nacimiento = 'display: none;';
   $sStyleReadInp_fecha_nacimiento = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['fecha_nacimiento']) && $this->nmgp_cmp_readonly['fecha_nacimiento'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['fecha_nacimiento']);
       $sStyleReadLab_fecha_nacimiento = '';
       $sStyleReadInp_fecha_nacimiento = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['fecha_nacimiento']) && $this->nmgp_cmp_hidden['fecha_nacimiento'] == 'off') { $sc_hidden_yes++;  ?>
<input type=hidden name="fecha_nacimiento" value="<?php echo NM_encode_input($fecha_nacimiento) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd" id="hidden_field_data_fecha_nacimiento" style="<?php echo $sStyleHidden_fecha_nacimiento; ?>;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd" style=";;vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat" style=";" ><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['php_cmp_required']['fecha_nacimiento']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['php_cmp_required']['fecha_nacimiento'] == "on") { ?><span class="scFormRequiredOdd">*</span> <?php }?> <span id="id_label_fecha_nacimiento"><?php echo $this->nm_new_label['fecha_nacimiento']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["fecha_nacimiento"]) &&  $this->nmgp_cmp_readonly["fecha_nacimiento"] == "on") { 

 ?>
<input type=hidden name="fecha_nacimiento" value="<?php echo NM_encode_input($fecha_nacimiento) . "\">" . $fecha_nacimiento . ""; ?>
<?php } else { ?>
<span id="id_read_on_fecha_nacimiento" class="sc-ui-readonly-fecha_nacimiento" style=";<?php echo $sStyleReadLab_fecha_nacimiento; ?>"><?php echo NM_encode_input($this->fecha_nacimiento); ?></span><span id="id_read_off_fecha_nacimiento" style="white-space: nowrap;<?php echo $sStyleReadInp_fecha_nacimiento; ?>">
 <input class="sc-js-input scFormObjectOdd" style=";" id="id_sc_field_fecha_nacimiento" type=text name="fecha_nacimiento" value="<?php echo NM_encode_input($fecha_nacimiento) ?>"
 size=10 alt="{datatype: 'date', dateSep: '<?php echo $this->field_config['fecha_nacimiento']['date_sep']; ?>', dateFormat: '<?php echo $this->field_config['fecha_nacimiento']['date_format']; ?>', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}"><?php
$tmp_form_data = $this->field_config['fecha_nacimiento']['date_format'];
$tmp_form_data = str_replace('aaaa', 'yyyy', $tmp_form_data);
$tmp_form_data = str_replace('dd'  , $this->Ini->Nm_lang['lang_othr_date_days'], $tmp_form_data);
$tmp_form_data = str_replace('mm'  , $this->Ini->Nm_lang['lang_othr_date_mnth'], $tmp_form_data);
$tmp_form_data = str_replace('yyyy', $this->Ini->Nm_lang['lang_othr_date_year'], $tmp_form_data);
$tmp_form_data = str_replace('hh'  , $this->Ini->Nm_lang['lang_othr_date_hour'], $tmp_form_data);
$tmp_form_data = str_replace('ii'  , $this->Ini->Nm_lang['lang_othr_date_mint'], $tmp_form_data);
$tmp_form_data = str_replace('ss'  , $this->Ini->Nm_lang['lang_othr_date_scnd'], $tmp_form_data);
$tmp_form_data = str_replace(';'   , ' '                                       , $tmp_form_data);
?>
</span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_fecha_nacimiento_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_fecha_nacimiento_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php
    if (!isset($this->nm_new_label['nacionalidad']))
    {
        $this->nm_new_label['nacionalidad'] = "NACIONALIDAD";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $nacionalidad = $this->nacionalidad;
   $sStyleHidden_nacionalidad = '';
   if (isset($this->nmgp_cmp_hidden['nacionalidad']) && $this->nmgp_cmp_hidden['nacionalidad'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['nacionalidad']);
       $sStyleHidden_nacionalidad = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_nacionalidad = 'display: none;';
   $sStyleReadInp_nacionalidad = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['nacionalidad']) && $this->nmgp_cmp_readonly['nacionalidad'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['nacionalidad']);
       $sStyleReadLab_nacionalidad = '';
       $sStyleReadInp_nacionalidad = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['nacionalidad']) && $this->nmgp_cmp_hidden['nacionalidad'] == 'off') { $sc_hidden_yes++;  ?>
<input type=hidden name="nacionalidad" value="<?php echo NM_encode_input($nacionalidad) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd" id="hidden_field_data_nacionalidad" style="<?php echo $sStyleHidden_nacionalidad; ?>vertical-align:middle;width:245px;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd" style="vertical-align:middle;width:245px;padding: 0px"><span class="scFormLabelOddFormat" style="vertical-align:middle;" ><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['php_cmp_required']['nacionalidad']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['php_cmp_required']['nacionalidad'] == "on") { ?><span class="scFormRequiredOdd">*</span> <?php }?> <span id="id_label_nacionalidad"><?php echo $this->nm_new_label['nacionalidad']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["nacionalidad"]) &&  $this->nmgp_cmp_readonly["nacionalidad"] == "on") { 

 ?>
<input type=hidden name="nacionalidad" value="<?php echo NM_encode_input($nacionalidad) . "\">" . $nacionalidad . ""; ?>
<?php } else { ?>
<span id="id_read_on_nacionalidad" class="sc-ui-readonly-nacionalidad" style="vertical-align:middle;width:245px;<?php echo $sStyleReadLab_nacionalidad; ?>"><?php echo NM_encode_input($this->nacionalidad); ?></span><span id="id_read_off_nacionalidad" style="white-space: nowrap;<?php echo $sStyleReadInp_nacionalidad; ?>">
 <input class="sc-js-input scFormObjectOdd" style="vertical-align:middle;width:245px;" id="id_sc_field_nacionalidad" type=text name="nacionalidad" value="<?php echo NM_encode_input($nacionalidad) ?>"
 size=50 maxlength=50 alt="{datatype: 'text', maxLength: 50, allowedChars: 'abcdefghijklmnopqrstuvwxyzï¿½ï¿½ï¿½ï¿½ï¿½ï¿½ï¿½ï¿½ï¿½ï¿½ï¿½ï¿½ ÁÉÍÓÚ', lettersCase: 'upper', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}"></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_nacionalidad_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_nacionalidad_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php $sStyleHidden_fecha_nacimiento_dumb = ('' == $sStyleHidden_fecha_nacimiento) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_fecha_nacimiento_dumb" style="<?php echo $sStyleHidden_fecha_nacimiento_dumb; ?>"></TD>
<?php $sStyleHidden_nacionalidad_dumb = ('' == $sStyleHidden_nacionalidad) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_nacionalidad_dumb" style="<?php echo $sStyleHidden_nacionalidad_dumb; ?>"></TD>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['genero']))
   {
       $this->nm_new_label['genero'] = "SEXO";
   }
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $genero = $this->genero;
   $sStyleHidden_genero = '';
   if (isset($this->nmgp_cmp_hidden['genero']) && $this->nmgp_cmp_hidden['genero'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['genero']);
       $sStyleHidden_genero = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_genero = 'display: none;';
   $sStyleReadInp_genero = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['genero']) && $this->nmgp_cmp_readonly['genero'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['genero']);
       $sStyleReadLab_genero = '';
       $sStyleReadInp_genero = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['genero']) && $this->nmgp_cmp_hidden['genero'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="genero" value="<?php echo NM_encode_input($this->genero) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd" id="hidden_field_data_genero" style="<?php echo $sStyleHidden_genero; ?>width:250px;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd" style="width:250px;;vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat" style=";" ><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['php_cmp_required']['genero']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['php_cmp_required']['genero'] == "on") { ?><span class="scFormRequiredOdd">*</span> <?php }?> <span id="id_label_genero"><?php echo $this->nm_new_label['genero']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["genero"]) &&  $this->nmgp_cmp_readonly["genero"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_genero']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_genero'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_genero']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_genero'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_genero']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_genero'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_genero']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_genero'] = array(); 
    }

   $old_value_fecha_nacimiento = $this->fecha_nacimiento;
   $this->nm_tira_formatacao();
   $this->nm_converte_datas(false);


   $unformatted_value_fecha_nacimiento = $this->fecha_nacimiento;

   $nm_comando = "SELECT codigo, valor 
FROM catalogo WHERE tipo = 'genero'
ORDER BY valor";

   $this->fecha_nacimiento = $old_value_fecha_nacimiento;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando)) 
   {
       while (!$rs->EOF) 
       { 
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_genero'][] = $rs->fields[0];
              $rs->MoveNext() ; 
       } 
       $rs->Close() ; 
   } 
   elseif ($GLOBALS["NM_ERRO_IBASE"] != 1 && $nm_comando != "")  
   {  
       $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
       exit; 
   } 
   $GLOBALS["NM_ERRO_IBASE"] = 0; 
   $x = 0; 
   $genero_look = ""; 
   $todo = explode("?@?", trim($nmgp_def_dados)) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->genero_1))
          {
              foreach ($this->genero_1 as $tmp_genero)
              {
                  if (trim($tmp_genero) === trim($cadaselect[1])) { $genero_look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->genero) === trim($cadaselect[1])) { $genero_look .= $cadaselect[0]; } 
          $x++; 
   }

?>
<input type=hidden name="genero" value="<?php echo NM_encode_input($genero) . "\">" . $genero_look . ""; ?>
<?php } else { ?>
 
<?php  
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_genero']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_genero'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_genero']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_genero'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_genero']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_genero'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_genero']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_genero'] = array(); 
    }

   $old_value_fecha_nacimiento = $this->fecha_nacimiento;
   $this->nm_tira_formatacao();
   $this->nm_converte_datas(false);


   $unformatted_value_fecha_nacimiento = $this->fecha_nacimiento;

   $nm_comando = "SELECT codigo, valor 
FROM catalogo WHERE tipo = 'genero'
ORDER BY valor";

   $this->fecha_nacimiento = $old_value_fecha_nacimiento;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando)) 
   {
       while (!$rs->EOF) 
       { 
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_genero'][] = $rs->fields[0];
              $rs->MoveNext() ; 
       } 
       $rs->Close() ; 
   } 
   elseif ($GLOBALS["NM_ERRO_IBASE"] != 1 && $nm_comando != "")  
   {  
       $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
       exit; 
   } 
   $GLOBALS["NM_ERRO_IBASE"] = 0; 
   $x = 0 ; 
   $todo = explode("?@?", $nmgp_def_dados) ; 
   $x = 0; 
   $genero_look = ""; 
   $todo = explode("?@?", trim($nmgp_def_dados)) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->genero_1))
          {
              foreach ($this->genero_1 as $tmp_genero)
              {
                  if (trim($tmp_genero) === trim($cadaselect[1])) { $genero_look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->genero) === trim($cadaselect[1])) { $genero_look .= $cadaselect[0]; } 
          $x++; 
   }
   $x = 0; 
   echo "<span id=\"id_read_on_genero\" style=\"width:250px;" .  $sStyleReadLab_genero . "\">" . NM_encode_input($genero_look) . "</span><span id=\"id_read_off_genero\" style=\"" . $sStyleReadInp_genero . "\">";
   echo " <span id=\"idAjaxSelect_genero\"><select class=\"sc-js-input scFormObjectOdd\" style=\"width:250px;\" id=\"id_sc_field_genero\" name=\"genero\" size=1>" ; 
   echo "\r" ; 
   $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_genero'][] = ''; 
   echo "  <option value=\"\">--Seleccione--</option>" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->genero) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->genero)) 
              {
                  echo " selected" ;
              } 
           } 
          echo ">$cadaselect[0] </option>" ; 
          echo "\r" ; 
          $x++ ; 
   }  ; 
   echo " </select></span>" ; 
   echo "\r" ; 
   echo "</span>";
?> 
<?php  }?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_genero_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_genero_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php
   if (!isset($this->nm_new_label['grupo_etnico']))
   {
       $this->nm_new_label['grupo_etnico'] = "GRUPO ÉTNICO";
   }
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $grupo_etnico = $this->grupo_etnico;
   $sStyleHidden_grupo_etnico = '';
   if (isset($this->nmgp_cmp_hidden['grupo_etnico']) && $this->nmgp_cmp_hidden['grupo_etnico'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['grupo_etnico']);
       $sStyleHidden_grupo_etnico = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_grupo_etnico = 'display: none;';
   $sStyleReadInp_grupo_etnico = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['grupo_etnico']) && $this->nmgp_cmp_readonly['grupo_etnico'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['grupo_etnico']);
       $sStyleReadLab_grupo_etnico = '';
       $sStyleReadInp_grupo_etnico = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['grupo_etnico']) && $this->nmgp_cmp_hidden['grupo_etnico'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="grupo_etnico" value="<?php echo NM_encode_input($this->grupo_etnico) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd" id="hidden_field_data_grupo_etnico" style="<?php echo $sStyleHidden_grupo_etnico; ?>vertical-align:middle;width:250px;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd" style="vertical-align:middle;width:250px;padding: 0px"><span class="scFormLabelOddFormat" style="font-weight:bold;vertical-align:middle;" ><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['php_cmp_required']['grupo_etnico']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['php_cmp_required']['grupo_etnico'] == "on") { ?><span class="scFormRequiredOdd">*</span> <?php }?> <span id="id_label_grupo_etnico"><?php echo $this->nm_new_label['grupo_etnico']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["grupo_etnico"]) &&  $this->nmgp_cmp_readonly["grupo_etnico"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_grupo_etnico']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_grupo_etnico'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_grupo_etnico']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_grupo_etnico'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_grupo_etnico']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_grupo_etnico'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_grupo_etnico']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_grupo_etnico'] = array(); 
    }

   $old_value_fecha_nacimiento = $this->fecha_nacimiento;
   $this->nm_tira_formatacao();
   $this->nm_converte_datas(false);


   $unformatted_value_fecha_nacimiento = $this->fecha_nacimiento;

   $nm_comando = "SELECT codigo, valor 
FROM catalogo WHERE tipo = 'grupo_etnico'
ORDER BY valor";

   $this->fecha_nacimiento = $old_value_fecha_nacimiento;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando)) 
   {
       while (!$rs->EOF) 
       { 
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_grupo_etnico'][] = $rs->fields[0];
              $rs->MoveNext() ; 
       } 
       $rs->Close() ; 
   } 
   elseif ($GLOBALS["NM_ERRO_IBASE"] != 1 && $nm_comando != "")  
   {  
       $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
       exit; 
   } 
   $GLOBALS["NM_ERRO_IBASE"] = 0; 
   $x = 0; 
   $grupo_etnico_look = ""; 
   $todo = explode("?@?", trim($nmgp_def_dados)) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->grupo_etnico_1))
          {
              foreach ($this->grupo_etnico_1 as $tmp_grupo_etnico)
              {
                  if (trim($tmp_grupo_etnico) === trim($cadaselect[1])) { $grupo_etnico_look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->grupo_etnico) === trim($cadaselect[1])) { $grupo_etnico_look .= $cadaselect[0]; } 
          $x++; 
   }

?>
<input type=hidden name="grupo_etnico" value="<?php echo NM_encode_input($grupo_etnico) . "\">" . $grupo_etnico_look . ""; ?>
<?php } else { ?>
 
<?php  
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_grupo_etnico']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_grupo_etnico'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_grupo_etnico']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_grupo_etnico'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_grupo_etnico']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_grupo_etnico'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_grupo_etnico']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_grupo_etnico'] = array(); 
    }

   $old_value_fecha_nacimiento = $this->fecha_nacimiento;
   $this->nm_tira_formatacao();
   $this->nm_converte_datas(false);


   $unformatted_value_fecha_nacimiento = $this->fecha_nacimiento;

   $nm_comando = "SELECT codigo, valor 
FROM catalogo WHERE tipo = 'grupo_etnico'
ORDER BY valor";

   $this->fecha_nacimiento = $old_value_fecha_nacimiento;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando)) 
   {
       while (!$rs->EOF) 
       { 
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_grupo_etnico'][] = $rs->fields[0];
              $rs->MoveNext() ; 
       } 
       $rs->Close() ; 
   } 
   elseif ($GLOBALS["NM_ERRO_IBASE"] != 1 && $nm_comando != "")  
   {  
       $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
       exit; 
   } 
   $GLOBALS["NM_ERRO_IBASE"] = 0; 
   $x = 0 ; 
   $todo = explode("?@?", $nmgp_def_dados) ; 
   $x = 0; 
   $grupo_etnico_look = ""; 
   $todo = explode("?@?", trim($nmgp_def_dados)) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->grupo_etnico_1))
          {
              foreach ($this->grupo_etnico_1 as $tmp_grupo_etnico)
              {
                  if (trim($tmp_grupo_etnico) === trim($cadaselect[1])) { $grupo_etnico_look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->grupo_etnico) === trim($cadaselect[1])) { $grupo_etnico_look .= $cadaselect[0]; } 
          $x++; 
   }
   $x = 0; 
   echo "<span id=\"id_read_on_grupo_etnico\" style=\"vertical-align:middle;width:250px;" .  $sStyleReadLab_grupo_etnico . "\">" . NM_encode_input($grupo_etnico_look) . "</span><span id=\"id_read_off_grupo_etnico\" style=\"" . $sStyleReadInp_grupo_etnico . "\">";
   echo " <span id=\"idAjaxSelect_grupo_etnico\"><select class=\"sc-js-input scFormObjectOdd\" style=\"vertical-align:middle;width:250px;\" id=\"id_sc_field_grupo_etnico\" name=\"grupo_etnico\" size=1>" ; 
   echo "\r" ; 
   $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_grupo_etnico'][] = ''; 
   echo "  <option value=\"\">--Seleccione--</option>" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->grupo_etnico) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->grupo_etnico)) 
              {
                  echo " selected" ;
              } 
           } 
          echo ">$cadaselect[0] </option>" ; 
          echo "\r" ; 
          $x++ ; 
   }  ; 
   echo " </select></span>" ; 
   echo "\r" ; 
   echo "</span>";
?> 
<?php  }?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_grupo_etnico_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_grupo_etnico_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php $sStyleHidden_genero_dumb = ('' == $sStyleHidden_genero) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_genero_dumb" style="<?php echo $sStyleHidden_genero_dumb; ?>"></TD>
<?php $sStyleHidden_grupo_etnico_dumb = ('' == $sStyleHidden_grupo_etnico) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_grupo_etnico_dumb" style="<?php echo $sStyleHidden_grupo_etnico_dumb; ?>"></TD>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['telefono']))
    {
        $this->nm_new_label['telefono'] = "TELÉFONO";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $telefono = $this->telefono;
   $sStyleHidden_telefono = '';
   if (isset($this->nmgp_cmp_hidden['telefono']) && $this->nmgp_cmp_hidden['telefono'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['telefono']);
       $sStyleHidden_telefono = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_telefono = 'display: none;';
   $sStyleReadInp_telefono = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['telefono']) && $this->nmgp_cmp_readonly['telefono'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['telefono']);
       $sStyleReadLab_telefono = '';
       $sStyleReadInp_telefono = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['telefono']) && $this->nmgp_cmp_hidden['telefono'] == 'off') { $sc_hidden_yes++;  ?>
<input type=hidden name="telefono" value="<?php echo NM_encode_input($telefono) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd" id="hidden_field_data_telefono" style="<?php echo $sStyleHidden_telefono; ?>width:245px;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd" style="width:245px;;vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat" style="font-weight:bold;" ><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['php_cmp_required']['telefono']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['php_cmp_required']['telefono'] == "on") { ?><span class="scFormRequiredOdd">*</span> <?php }?> <span id="id_label_telefono"><?php echo $this->nm_new_label['telefono']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["telefono"]) &&  $this->nmgp_cmp_readonly["telefono"] == "on") { 

 ?>
<input type=hidden name="telefono" value="<?php echo NM_encode_input($telefono) . "\">" . $telefono . ""; ?>
<?php } else { ?>
<span id="id_read_on_telefono" class="sc-ui-readonly-telefono" style="width:245px;<?php echo $sStyleReadLab_telefono; ?>"><?php echo NM_encode_input($this->telefono); ?></span><span id="id_read_off_telefono" style="white-space: nowrap;<?php echo $sStyleReadInp_telefono; ?>">
 <input class="sc-js-input scFormObjectOdd" style="width:245px;" id="id_sc_field_telefono" type=text name="telefono" value="<?php echo NM_encode_input($telefono) ?>"
 size=10 maxlength=10 alt="{datatype: 'text', maxLength: 10, allowedChars: '0123456789', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}"></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_telefono_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_telefono_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php
    if (!isset($this->nm_new_label['celular']))
    {
        $this->nm_new_label['celular'] = "CELULAR";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $celular = $this->celular;
   $sStyleHidden_celular = '';
   if (isset($this->nmgp_cmp_hidden['celular']) && $this->nmgp_cmp_hidden['celular'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['celular']);
       $sStyleHidden_celular = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_celular = 'display: none;';
   $sStyleReadInp_celular = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['celular']) && $this->nmgp_cmp_readonly['celular'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['celular']);
       $sStyleReadLab_celular = '';
       $sStyleReadInp_celular = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['celular']) && $this->nmgp_cmp_hidden['celular'] == 'off') { $sc_hidden_yes++;  ?>
<input type=hidden name="celular" value="<?php echo NM_encode_input($celular) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd" id="hidden_field_data_celular" style="<?php echo $sStyleHidden_celular; ?>vertical-align:middle;width:245px;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd" style="vertical-align:middle;width:245px;padding: 0px"><span class="scFormLabelOddFormat" style="font-weight:bold;vertical-align:middle;width:245px;" ><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['php_cmp_required']['celular']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['php_cmp_required']['celular'] == "on") { ?><span class="scFormRequiredOdd">*</span> <?php }?> <span id="id_label_celular"><?php echo $this->nm_new_label['celular']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["celular"]) &&  $this->nmgp_cmp_readonly["celular"] == "on") { 

 ?>
<input type=hidden name="celular" value="<?php echo NM_encode_input($celular) . "\">" . $celular . ""; ?>
<?php } else { ?>
<span id="id_read_on_celular" class="sc-ui-readonly-celular" style="vertical-align:middle;width:245px;<?php echo $sStyleReadLab_celular; ?>"><?php echo NM_encode_input($this->celular); ?></span><span id="id_read_off_celular" style="white-space: nowrap;<?php echo $sStyleReadInp_celular; ?>">
 <input class="sc-js-input scFormObjectOdd" style="vertical-align:middle;width:245px;" id="id_sc_field_celular" type=text name="celular" value="<?php echo NM_encode_input($celular) ?>"
 size=10 maxlength=10 alt="{datatype: 'text', maxLength: 10, allowedChars: '0123456789', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}"></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_celular_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_celular_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php $sStyleHidden_telefono_dumb = ('' == $sStyleHidden_telefono) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_telefono_dumb" style="<?php echo $sStyleHidden_telefono_dumb; ?>"></TD>
<?php $sStyleHidden_celular_dumb = ('' == $sStyleHidden_celular) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_celular_dumb" style="<?php echo $sStyleHidden_celular_dumb; ?>"></TD>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['mail']))
    {
        $this->nm_new_label['mail'] = "CORREO ELECTRÓNICO";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $mail = $this->mail;
   $sStyleHidden_mail = '';
   if (isset($this->nmgp_cmp_hidden['mail']) && $this->nmgp_cmp_hidden['mail'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['mail']);
       $sStyleHidden_mail = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_mail = 'display: none;';
   $sStyleReadInp_mail = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['mail']) && $this->nmgp_cmp_readonly['mail'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['mail']);
       $sStyleReadLab_mail = '';
       $sStyleReadInp_mail = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['mail']) && $this->nmgp_cmp_hidden['mail'] == 'off') { $sc_hidden_yes++;  ?>
<input type=hidden name="mail" value="<?php echo NM_encode_input($mail) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd" id="hidden_field_data_mail" style="<?php echo $sStyleHidden_mail; ?>width:245px;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd" style="width:245px;;vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat" style="font-weight:bold;" ><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['php_cmp_required']['mail']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['php_cmp_required']['mail'] == "on") { ?><span class="scFormRequiredOdd">*</span> <?php }?> <span id="id_label_mail"><?php echo $this->nm_new_label['mail']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["mail"]) &&  $this->nmgp_cmp_readonly["mail"] == "on") { 

 ?>
<input type=hidden name="mail" value="<?php echo NM_encode_input($mail) . "\">" . $mail . ""; ?>
<?php } else { ?>
<span id="id_read_on_mail" class="sc-ui-readonly-mail" style="width:245px;<?php echo $sStyleReadLab_mail; ?>"><?php echo NM_encode_input($this->mail); ?></span><span id="id_read_off_mail" style="white-space: nowrap;<?php echo $sStyleReadInp_mail; ?>">
 <input class="sc-js-input scFormObjectOdd" style="width:245px;" id="id_sc_field_mail" type=text name="mail" value="<?php echo NM_encode_input($mail) ?>"
 size=50 maxlength=100 alt="{enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}">&nbsp;<span style="display: none"><?php echo nmButtonOutput($this->arr_buttons, "bemail", "if (document.F1.mail.value != '') {window.open('mailto:' + document.F1.mail.value); }", "if (document.F1.mail.value != '') {window.open('mailto:' + document.F1.mail.value); }", "mail_mail", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "");?>
</span>
</span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_mail_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_mail_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php
    if (!isset($this->nm_new_label['direccion']))
    {
        $this->nm_new_label['direccion'] = "DIRECCIÓN";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $direccion = $this->direccion;
   $sStyleHidden_direccion = '';
   if (isset($this->nmgp_cmp_hidden['direccion']) && $this->nmgp_cmp_hidden['direccion'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['direccion']);
       $sStyleHidden_direccion = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_direccion = 'display: none;';
   $sStyleReadInp_direccion = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['direccion']) && $this->nmgp_cmp_readonly['direccion'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['direccion']);
       $sStyleReadLab_direccion = '';
       $sStyleReadInp_direccion = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['direccion']) && $this->nmgp_cmp_hidden['direccion'] == 'off') { $sc_hidden_yes++;  ?>
<input type=hidden name="direccion" value="<?php echo NM_encode_input($direccion) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd" id="hidden_field_data_direccion" style="<?php echo $sStyleHidden_direccion; ?>width:245px;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd" style="width:245px;;vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat" style="font-weight:bold;" ><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['php_cmp_required']['direccion']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['php_cmp_required']['direccion'] == "on") { ?><span class="scFormRequiredOdd">*</span> <?php }?> <span id="id_label_direccion"><?php echo $this->nm_new_label['direccion']; ?></span></span><br>
<?php
$direccion_val = str_replace('<br />', '__SC_BREAK_LINE__', nl2br($direccion));

?>

<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["direccion"]) &&  $this->nmgp_cmp_readonly["direccion"] == "on") { 

 ?>
<input type=hidden name="direccion" value="<?php echo NM_encode_input($direccion) . "\">" . $direccion_val . ""; ?>
<?php } else { ?>
<span id="id_read_on_direccion" class="sc-ui-readonly-direccion" style="width:245px;<?php echo $sStyleReadLab_direccion; ?>"><?php echo NM_encode_input($direccion_val); ?></span><span id="id_read_off_direccion" style="white-space: nowrap;<?php echo $sStyleReadInp_direccion; ?>">
 <textarea  class="sc-js-input scFormObjectOdd" style="width:245px;" name="direccion" id="id_sc_field_direccion" rows=2 cols=50
 alt="{datatype: 'text', maxLength: 500, allowedChars: '', lettersCase: 'upper', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}">
<?php echo str_replace(array('\r\n', '\n\r', '\n', '\r'), array("\r\n", "\n\r", "\n", "\r"), $direccion); ?>
</textarea>
</span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_direccion_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_direccion_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php $sStyleHidden_mail_dumb = ('' == $sStyleHidden_mail) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_mail_dumb" style="<?php echo $sStyleHidden_mail_dumb; ?>"></TD>
<?php $sStyleHidden_direccion_dumb = ('' == $sStyleHidden_direccion) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_direccion_dumb" style="<?php echo $sStyleHidden_direccion_dumb; ?>"></TD>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['poblacion']))
   {
       $this->nm_new_label['poblacion'] = "POBLACIÓN";
   }
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $poblacion = $this->poblacion;
   $sStyleHidden_poblacion = '';
   if (isset($this->nmgp_cmp_hidden['poblacion']) && $this->nmgp_cmp_hidden['poblacion'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['poblacion']);
       $sStyleHidden_poblacion = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_poblacion = 'display: none;';
   $sStyleReadInp_poblacion = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['poblacion']) && $this->nmgp_cmp_readonly['poblacion'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['poblacion']);
       $sStyleReadLab_poblacion = '';
       $sStyleReadInp_poblacion = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['poblacion']) && $this->nmgp_cmp_hidden['poblacion'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="poblacion" value="<?php echo NM_encode_input($this->poblacion) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd" id="hidden_field_data_poblacion" style="<?php echo $sStyleHidden_poblacion; ?>width:250px;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd" style="width:250px;;vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat" style="font-weight:bold;" ><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['php_cmp_required']['poblacion']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['php_cmp_required']['poblacion'] == "on") { ?><span class="scFormRequiredOdd">*</span> <?php }?> <span id="id_label_poblacion"><?php echo $this->nm_new_label['poblacion']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["poblacion"]) &&  $this->nmgp_cmp_readonly["poblacion"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_poblacion']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_poblacion'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_poblacion']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_poblacion'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_poblacion']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_poblacion'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_poblacion']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_poblacion'] = array(); 
    }

   $old_value_fecha_nacimiento = $this->fecha_nacimiento;
   $this->nm_tira_formatacao();
   $this->nm_converte_datas(false);


   $unformatted_value_fecha_nacimiento = $this->fecha_nacimiento;

   $nm_comando = "SELECT codigo, valor 
FROM catalogo WHERE tipo = 'poblacion'
ORDER BY valor";

   $this->fecha_nacimiento = $old_value_fecha_nacimiento;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando)) 
   {
       while (!$rs->EOF) 
       { 
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_poblacion'][] = $rs->fields[0];
              $rs->MoveNext() ; 
       } 
       $rs->Close() ; 
   } 
   elseif ($GLOBALS["NM_ERRO_IBASE"] != 1 && $nm_comando != "")  
   {  
       $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
       exit; 
   } 
   $GLOBALS["NM_ERRO_IBASE"] = 0; 
   $x = 0; 
   $poblacion_look = ""; 
   $todo = explode("?@?", trim($nmgp_def_dados)) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->poblacion_1))
          {
              foreach ($this->poblacion_1 as $tmp_poblacion)
              {
                  if (trim($tmp_poblacion) === trim($cadaselect[1])) { $poblacion_look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->poblacion) === trim($cadaselect[1])) { $poblacion_look .= $cadaselect[0]; } 
          $x++; 
   }

?>
<input type=hidden name="poblacion" value="<?php echo NM_encode_input($poblacion) . "\">" . $poblacion_look . ""; ?>
<?php } else { ?>
 
<?php  
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_poblacion']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_poblacion'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_poblacion']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_poblacion'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_poblacion']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_poblacion'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_poblacion']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_poblacion'] = array(); 
    }

   $old_value_fecha_nacimiento = $this->fecha_nacimiento;
   $this->nm_tira_formatacao();
   $this->nm_converte_datas(false);


   $unformatted_value_fecha_nacimiento = $this->fecha_nacimiento;

   $nm_comando = "SELECT codigo, valor 
FROM catalogo WHERE tipo = 'poblacion'
ORDER BY valor";

   $this->fecha_nacimiento = $old_value_fecha_nacimiento;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando)) 
   {
       while (!$rs->EOF) 
       { 
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_poblacion'][] = $rs->fields[0];
              $rs->MoveNext() ; 
       } 
       $rs->Close() ; 
   } 
   elseif ($GLOBALS["NM_ERRO_IBASE"] != 1 && $nm_comando != "")  
   {  
       $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
       exit; 
   } 
   $GLOBALS["NM_ERRO_IBASE"] = 0; 
   $x = 0 ; 
   $todo = explode("?@?", $nmgp_def_dados) ; 
   $x = 0; 
   $poblacion_look = ""; 
   $todo = explode("?@?", trim($nmgp_def_dados)) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->poblacion_1))
          {
              foreach ($this->poblacion_1 as $tmp_poblacion)
              {
                  if (trim($tmp_poblacion) === trim($cadaselect[1])) { $poblacion_look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->poblacion) === trim($cadaselect[1])) { $poblacion_look .= $cadaselect[0]; } 
          $x++; 
   }
   $x = 0; 
   echo "<span id=\"id_read_on_poblacion\" style=\"width:250px;" .  $sStyleReadLab_poblacion . "\">" . NM_encode_input($poblacion_look) . "</span><span id=\"id_read_off_poblacion\" style=\"" . $sStyleReadInp_poblacion . "\">";
   echo " <span id=\"idAjaxSelect_poblacion\"><select class=\"sc-js-input scFormObjectOdd\" style=\"width:250px;\" id=\"id_sc_field_poblacion\" name=\"poblacion\" size=1>" ; 
   echo "\r" ; 
   $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_poblacion'][] = ''; 
   echo "  <option value=\"\">--Seleccione--</option>" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->poblacion) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->poblacion)) 
              {
                  echo " selected" ;
              } 
           } 
          echo ">$cadaselect[0] </option>" ; 
          echo "\r" ; 
          $x++ ; 
   }  ; 
   echo " </select></span>" ; 
   echo "\r" ; 
   echo "</span>";
?> 
<?php  }?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_poblacion_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_poblacion_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php
   if (!isset($this->nm_new_label['socio_empleado']))
   {
       $this->nm_new_label['socio_empleado'] = "SOCIO/EMPLEADO";
   }
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $socio_empleado = $this->socio_empleado;
   $sStyleHidden_socio_empleado = '';
   if (isset($this->nmgp_cmp_hidden['socio_empleado']) && $this->nmgp_cmp_hidden['socio_empleado'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['socio_empleado']);
       $sStyleHidden_socio_empleado = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_socio_empleado = 'display: none;';
   $sStyleReadInp_socio_empleado = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['socio_empleado']) && $this->nmgp_cmp_readonly['socio_empleado'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['socio_empleado']);
       $sStyleReadLab_socio_empleado = '';
       $sStyleReadInp_socio_empleado = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['socio_empleado']) && $this->nmgp_cmp_hidden['socio_empleado'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="socio_empleado" value="<?php echo NM_encode_input($this->socio_empleado) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd" id="hidden_field_data_socio_empleado" style="<?php echo $sStyleHidden_socio_empleado; ?>vertical-align:middle;width:250px;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd" style="vertical-align:middle;width:250px;padding: 0px"><span class="scFormLabelOddFormat" style="font-weight:bold;vertical-align:middle;width:250px;" ><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['php_cmp_required']['socio_empleado']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['php_cmp_required']['socio_empleado'] == "on") { ?><span class="scFormRequiredOdd">*</span> <?php }?> <span id="id_label_socio_empleado"><?php echo $this->nm_new_label['socio_empleado']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["socio_empleado"]) &&  $this->nmgp_cmp_readonly["socio_empleado"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_socio_empleado']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_socio_empleado'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_socio_empleado']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_socio_empleado'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_socio_empleado']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_socio_empleado'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_socio_empleado']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_socio_empleado'] = array(); 
    }

   $old_value_fecha_nacimiento = $this->fecha_nacimiento;
   $this->nm_tira_formatacao();
   $this->nm_converte_datas(false);


   $unformatted_value_fecha_nacimiento = $this->fecha_nacimiento;

   $nm_comando = "SELECT codigo, valor 
FROM catalogo WHERE tipo = 'socio_trabajador'
ORDER BY valor";

   $this->fecha_nacimiento = $old_value_fecha_nacimiento;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando)) 
   {
       while (!$rs->EOF) 
       { 
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_socio_empleado'][] = $rs->fields[0];
              $rs->MoveNext() ; 
       } 
       $rs->Close() ; 
   } 
   elseif ($GLOBALS["NM_ERRO_IBASE"] != 1 && $nm_comando != "")  
   {  
       $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
       exit; 
   } 
   $GLOBALS["NM_ERRO_IBASE"] = 0; 
   $x = 0; 
   $socio_empleado_look = ""; 
   $todo = explode("?@?", trim($nmgp_def_dados)) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->socio_empleado_1))
          {
              foreach ($this->socio_empleado_1 as $tmp_socio_empleado)
              {
                  if (trim($tmp_socio_empleado) === trim($cadaselect[1])) { $socio_empleado_look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->socio_empleado) === trim($cadaselect[1])) { $socio_empleado_look .= $cadaselect[0]; } 
          $x++; 
   }

?>
<input type=hidden name="socio_empleado" value="<?php echo NM_encode_input($socio_empleado) . "\">" . $socio_empleado_look . ""; ?>
<?php } else { ?>
 
<?php  
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_socio_empleado']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_socio_empleado'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_socio_empleado']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_socio_empleado'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_socio_empleado']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_socio_empleado'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_socio_empleado']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_socio_empleado'] = array(); 
    }

   $old_value_fecha_nacimiento = $this->fecha_nacimiento;
   $this->nm_tira_formatacao();
   $this->nm_converte_datas(false);


   $unformatted_value_fecha_nacimiento = $this->fecha_nacimiento;

   $nm_comando = "SELECT codigo, valor 
FROM catalogo WHERE tipo = 'socio_trabajador'
ORDER BY valor";

   $this->fecha_nacimiento = $old_value_fecha_nacimiento;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando)) 
   {
       while (!$rs->EOF) 
       { 
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_socio_empleado'][] = $rs->fields[0];
              $rs->MoveNext() ; 
       } 
       $rs->Close() ; 
   } 
   elseif ($GLOBALS["NM_ERRO_IBASE"] != 1 && $nm_comando != "")  
   {  
       $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
       exit; 
   } 
   $GLOBALS["NM_ERRO_IBASE"] = 0; 
   $x = 0 ; 
   $todo = explode("?@?", $nmgp_def_dados) ; 
   $x = 0; 
   $socio_empleado_look = ""; 
   $todo = explode("?@?", trim($nmgp_def_dados)) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->socio_empleado_1))
          {
              foreach ($this->socio_empleado_1 as $tmp_socio_empleado)
              {
                  if (trim($tmp_socio_empleado) === trim($cadaselect[1])) { $socio_empleado_look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->socio_empleado) === trim($cadaselect[1])) { $socio_empleado_look .= $cadaselect[0]; } 
          $x++; 
   }
   $x = 0; 
   echo "<span id=\"id_read_on_socio_empleado\" style=\"vertical-align:middle;width:250px;" .  $sStyleReadLab_socio_empleado . "\">" . NM_encode_input($socio_empleado_look) . "</span><span id=\"id_read_off_socio_empleado\" style=\"" . $sStyleReadInp_socio_empleado . "\">";
   echo " <span id=\"idAjaxSelect_socio_empleado\"><select class=\"sc-js-input scFormObjectOdd\" style=\"vertical-align:middle;width:250px;\" id=\"id_sc_field_socio_empleado\" name=\"socio_empleado\" size=1>" ; 
   echo "\r" ; 
   $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_socio_empleado'][] = ''; 
   echo "  <option value=\"\">--Seleccione--</option>" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->socio_empleado) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->socio_empleado)) 
              {
                  echo " selected" ;
              } 
           } 
          echo ">$cadaselect[0] </option>" ; 
          echo "\r" ; 
          $x++ ; 
   }  ; 
   echo " </select></span>" ; 
   echo "\r" ; 
   echo "</span>";
?> 
<?php  }?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_socio_empleado_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_socio_empleado_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php $sStyleHidden_poblacion_dumb = ('' == $sStyleHidden_poblacion) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_poblacion_dumb" style="<?php echo $sStyleHidden_poblacion_dumb; ?>"></TD>
<?php $sStyleHidden_socio_empleado_dumb = ('' == $sStyleHidden_socio_empleado) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_socio_empleado_dumb" style="<?php echo $sStyleHidden_socio_empleado_dumb; ?>"></TD>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['discapacidad']))
   {
       $this->nm_new_label['discapacidad'] = "DISCAPACIDAD";
   }
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $discapacidad = $this->discapacidad;
   $sStyleHidden_discapacidad = '';
   if (isset($this->nmgp_cmp_hidden['discapacidad']) && $this->nmgp_cmp_hidden['discapacidad'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['discapacidad']);
       $sStyleHidden_discapacidad = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_discapacidad = 'display: none;';
   $sStyleReadInp_discapacidad = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['discapacidad']) && $this->nmgp_cmp_readonly['discapacidad'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['discapacidad']);
       $sStyleReadLab_discapacidad = '';
       $sStyleReadInp_discapacidad = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['discapacidad']) && $this->nmgp_cmp_hidden['discapacidad'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="discapacidad" value="<?php echo NM_encode_input($this->discapacidad) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd" id="hidden_field_data_discapacidad" style="<?php echo $sStyleHidden_discapacidad; ?>vertical-align:middle;width:250px;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd" style="vertical-align:middle;width:250px;padding: 0px"><span class="scFormLabelOddFormat" style="font-weight:bold;vertical-align:middle;width:250px;" ><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['php_cmp_required']['discapacidad']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['php_cmp_required']['discapacidad'] == "on") { ?><span class="scFormRequiredOdd">*</span> <?php }?> <span id="id_label_discapacidad"><?php echo $this->nm_new_label['discapacidad']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["discapacidad"]) &&  $this->nmgp_cmp_readonly["discapacidad"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_discapacidad']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_discapacidad'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_discapacidad']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_discapacidad'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_discapacidad']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_discapacidad'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_discapacidad']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_discapacidad'] = array(); 
    }

   $old_value_fecha_nacimiento = $this->fecha_nacimiento;
   $this->nm_tira_formatacao();
   $this->nm_converte_datas(false);


   $unformatted_value_fecha_nacimiento = $this->fecha_nacimiento;

   $nm_comando = "SELECT codigo, valor 
FROM catalogo WHERE tipo = 'pregunta'
ORDER BY valor";

   $this->fecha_nacimiento = $old_value_fecha_nacimiento;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando)) 
   {
       while (!$rs->EOF) 
       { 
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_discapacidad'][] = $rs->fields[0];
              $rs->MoveNext() ; 
       } 
       $rs->Close() ; 
   } 
   elseif ($GLOBALS["NM_ERRO_IBASE"] != 1 && $nm_comando != "")  
   {  
       $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
       exit; 
   } 
   $GLOBALS["NM_ERRO_IBASE"] = 0; 
   $x = 0; 
   $discapacidad_look = ""; 
   $todo = explode("?@?", trim($nmgp_def_dados)) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->discapacidad_1))
          {
              foreach ($this->discapacidad_1 as $tmp_discapacidad)
              {
                  if (trim($tmp_discapacidad) === trim($cadaselect[1])) { $discapacidad_look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->discapacidad) === trim($cadaselect[1])) { $discapacidad_look .= $cadaselect[0]; } 
          $x++; 
   }

?>
<input type=hidden name="discapacidad" value="<?php echo NM_encode_input($discapacidad) . "\">" . $discapacidad_look . ""; ?>
<?php } else { ?>
 
<?php  
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_discapacidad']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_discapacidad'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_discapacidad']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_discapacidad'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_discapacidad']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_discapacidad'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_discapacidad']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_discapacidad'] = array(); 
    }

   $old_value_fecha_nacimiento = $this->fecha_nacimiento;
   $this->nm_tira_formatacao();
   $this->nm_converte_datas(false);


   $unformatted_value_fecha_nacimiento = $this->fecha_nacimiento;

   $nm_comando = "SELECT codigo, valor 
FROM catalogo WHERE tipo = 'pregunta'
ORDER BY valor";

   $this->fecha_nacimiento = $old_value_fecha_nacimiento;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando)) 
   {
       while (!$rs->EOF) 
       { 
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_discapacidad'][] = $rs->fields[0];
              $rs->MoveNext() ; 
       } 
       $rs->Close() ; 
   } 
   elseif ($GLOBALS["NM_ERRO_IBASE"] != 1 && $nm_comando != "")  
   {  
       $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
       exit; 
   } 
   $GLOBALS["NM_ERRO_IBASE"] = 0; 
   $x = 0 ; 
   $todo = explode("?@?", $nmgp_def_dados) ; 
   $x = 0; 
   $discapacidad_look = ""; 
   $todo = explode("?@?", trim($nmgp_def_dados)) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->discapacidad_1))
          {
              foreach ($this->discapacidad_1 as $tmp_discapacidad)
              {
                  if (trim($tmp_discapacidad) === trim($cadaselect[1])) { $discapacidad_look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->discapacidad) === trim($cadaselect[1])) { $discapacidad_look .= $cadaselect[0]; } 
          $x++; 
   }
   $x = 0; 
   echo "<span id=\"id_read_on_discapacidad\" style=\"vertical-align:middle;width:250px;" .  $sStyleReadLab_discapacidad . "\">" . NM_encode_input($discapacidad_look) . "</span><span id=\"id_read_off_discapacidad\" style=\"" . $sStyleReadInp_discapacidad . "\">";
   echo " <span id=\"idAjaxSelect_discapacidad\"><select class=\"sc-js-input scFormObjectOdd\" style=\"vertical-align:middle;width:250px;\" id=\"id_sc_field_discapacidad\" name=\"discapacidad\" size=1>" ; 
   echo "\r" ; 
   $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_discapacidad'][] = ''; 
   echo "  <option value=\"\">--Seleccione--</option>" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->discapacidad) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->discapacidad)) 
              {
                  echo " selected" ;
              } 
           } 
          echo ">$cadaselect[0] </option>" ; 
          echo "\r" ; 
          $x++ ; 
   }  ; 
   echo " </select></span>" ; 
   echo "\r" ; 
   echo "</span>";
?> 
<?php  }?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_discapacidad_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_discapacidad_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php
   if (!isset($this->nm_new_label['tipo_discapacidad']))
   {
       $this->nm_new_label['tipo_discapacidad'] = "TIPO DISCAPACIDAD";
   }
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $tipo_discapacidad = $this->tipo_discapacidad;
   $sStyleHidden_tipo_discapacidad = '';
   if (isset($this->nmgp_cmp_hidden['tipo_discapacidad']) && $this->nmgp_cmp_hidden['tipo_discapacidad'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['tipo_discapacidad']);
       $sStyleHidden_tipo_discapacidad = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_tipo_discapacidad = 'display: none;';
   $sStyleReadInp_tipo_discapacidad = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['tipo_discapacidad']) && $this->nmgp_cmp_readonly['tipo_discapacidad'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['tipo_discapacidad']);
       $sStyleReadLab_tipo_discapacidad = '';
       $sStyleReadInp_tipo_discapacidad = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['tipo_discapacidad']) && $this->nmgp_cmp_hidden['tipo_discapacidad'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="tipo_discapacidad" value="<?php echo NM_encode_input($this->tipo_discapacidad) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd" id="hidden_field_data_tipo_discapacidad" style="<?php echo $sStyleHidden_tipo_discapacidad; ?>vertical-align:middle;width:250px;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd" style="vertical-align:middle;width:250px;padding: 0px"><span class="scFormLabelOddFormat" style="font-weight:bold;vertical-align:middle;width:250px;" ><span id="id_label_tipo_discapacidad"><?php echo $this->nm_new_label['tipo_discapacidad']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["tipo_discapacidad"]) &&  $this->nmgp_cmp_readonly["tipo_discapacidad"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_tipo_discapacidad']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_tipo_discapacidad'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_tipo_discapacidad']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_tipo_discapacidad'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_tipo_discapacidad']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_tipo_discapacidad'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_tipo_discapacidad']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_tipo_discapacidad'] = array(); 
    }

   $old_value_fecha_nacimiento = $this->fecha_nacimiento;
   $this->nm_tira_formatacao();
   $this->nm_converte_datas(false);


   $unformatted_value_fecha_nacimiento = $this->fecha_nacimiento;

   $nm_comando = "SELECT codigo, valor 
FROM catalogo WHERE tipo = 'discapacidad'
ORDER BY valor";

   $this->fecha_nacimiento = $old_value_fecha_nacimiento;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando)) 
   {
       while (!$rs->EOF) 
       { 
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_tipo_discapacidad'][] = $rs->fields[0];
              $rs->MoveNext() ; 
       } 
       $rs->Close() ; 
   } 
   elseif ($GLOBALS["NM_ERRO_IBASE"] != 1 && $nm_comando != "")  
   {  
       $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
       exit; 
   } 
   $GLOBALS["NM_ERRO_IBASE"] = 0; 
   $x = 0; 
   $tipo_discapacidad_look = ""; 
   $todo = explode("?@?", trim($nmgp_def_dados)) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->tipo_discapacidad_1))
          {
              foreach ($this->tipo_discapacidad_1 as $tmp_tipo_discapacidad)
              {
                  if (trim($tmp_tipo_discapacidad) === trim($cadaselect[1])) { $tipo_discapacidad_look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->tipo_discapacidad) === trim($cadaselect[1])) { $tipo_discapacidad_look .= $cadaselect[0]; } 
          $x++; 
   }

?>
<input type=hidden name="tipo_discapacidad" value="<?php echo NM_encode_input($tipo_discapacidad) . "\">" . $tipo_discapacidad_look . ""; ?>
<?php } else { ?>
 
<?php  
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_tipo_discapacidad']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_tipo_discapacidad'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_tipo_discapacidad']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_tipo_discapacidad'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_tipo_discapacidad']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_tipo_discapacidad'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_tipo_discapacidad']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_tipo_discapacidad'] = array(); 
    }

   $old_value_fecha_nacimiento = $this->fecha_nacimiento;
   $this->nm_tira_formatacao();
   $this->nm_converte_datas(false);


   $unformatted_value_fecha_nacimiento = $this->fecha_nacimiento;

   $nm_comando = "SELECT codigo, valor 
FROM catalogo WHERE tipo = 'discapacidad'
ORDER BY valor";

   $this->fecha_nacimiento = $old_value_fecha_nacimiento;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando)) 
   {
       while (!$rs->EOF) 
       { 
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_tipo_discapacidad'][] = $rs->fields[0];
              $rs->MoveNext() ; 
       } 
       $rs->Close() ; 
   } 
   elseif ($GLOBALS["NM_ERRO_IBASE"] != 1 && $nm_comando != "")  
   {  
       $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
       exit; 
   } 
   $GLOBALS["NM_ERRO_IBASE"] = 0; 
   $x = 0 ; 
   $todo = explode("?@?", $nmgp_def_dados) ; 
   $x = 0; 
   $tipo_discapacidad_look = ""; 
   $todo = explode("?@?", trim($nmgp_def_dados)) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->tipo_discapacidad_1))
          {
              foreach ($this->tipo_discapacidad_1 as $tmp_tipo_discapacidad)
              {
                  if (trim($tmp_tipo_discapacidad) === trim($cadaselect[1])) { $tipo_discapacidad_look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->tipo_discapacidad) === trim($cadaselect[1])) { $tipo_discapacidad_look .= $cadaselect[0]; } 
          $x++; 
   }
   $x = 0; 
   echo "<span id=\"id_read_on_tipo_discapacidad\" style=\"vertical-align:middle;width:250px;" .  $sStyleReadLab_tipo_discapacidad . "\">" . NM_encode_input($tipo_discapacidad_look) . "</span><span id=\"id_read_off_tipo_discapacidad\" style=\"" . $sStyleReadInp_tipo_discapacidad . "\">";
   echo " <span id=\"idAjaxSelect_tipo_discapacidad\"><select class=\"sc-js-input scFormObjectOdd\" style=\"vertical-align:middle;width:250px;\" id=\"id_sc_field_tipo_discapacidad\" name=\"tipo_discapacidad\" size=1>" ; 
   echo "\r" ; 
   $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_tipo_discapacidad'][] = ''; 
   echo "  <option value=\"\">--Seleccione--</option>" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->tipo_discapacidad) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->tipo_discapacidad)) 
              {
                  echo " selected" ;
              } 
           } 
          echo ">$cadaselect[0] </option>" ; 
          echo "\r" ; 
          $x++ ; 
   }  ; 
   echo " </select></span>" ; 
   echo "\r" ; 
   echo "</span>";
?> 
<?php  }?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_tipo_discapacidad_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_tipo_discapacidad_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php $sStyleHidden_discapacidad_dumb = ('' == $sStyleHidden_discapacidad) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_discapacidad_dumb" style="<?php echo $sStyleHidden_discapacidad_dumb; ?>"></TD>
<?php $sStyleHidden_tipo_discapacidad_dumb = ('' == $sStyleHidden_tipo_discapacidad) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_tipo_discapacidad_dumb" style="<?php echo $sStyleHidden_tipo_discapacidad_dumb; ?>"></TD>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['zona']))
   {
       $this->nm_new_label['zona'] = "ZONA";
   }
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $zona = $this->zona;
   $sStyleHidden_zona = '';
   if (isset($this->nmgp_cmp_hidden['zona']) && $this->nmgp_cmp_hidden['zona'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['zona']);
       $sStyleHidden_zona = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_zona = 'display: none;';
   $sStyleReadInp_zona = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['zona']) && $this->nmgp_cmp_readonly['zona'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['zona']);
       $sStyleReadLab_zona = '';
       $sStyleReadInp_zona = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['zona']) && $this->nmgp_cmp_hidden['zona'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="zona" value="<?php echo NM_encode_input($this->zona) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd" id="hidden_field_data_zona" style="<?php echo $sStyleHidden_zona; ?>vertical-align:middle;width:250px;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd" style="vertical-align:middle;width:250px;padding: 0px"><span class="scFormLabelOddFormat" style="font-weight:bold;vertical-align:middle;width:250px;" ><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['php_cmp_required']['zona']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['php_cmp_required']['zona'] == "on") { ?><span class="scFormRequiredOdd">*</span> <?php }?> <span id="id_label_zona"><?php echo $this->nm_new_label['zona']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["zona"]) &&  $this->nmgp_cmp_readonly["zona"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_zona']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_zona'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_zona']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_zona'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_zona']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_zona'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_zona']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_zona'] = array(); 
    }

   $old_value_fecha_nacimiento = $this->fecha_nacimiento;
   $this->nm_tira_formatacao();
   $this->nm_converte_datas(false);


   $unformatted_value_fecha_nacimiento = $this->fecha_nacimiento;

   $nm_comando = "SELECT codigo, valor 
FROM catalogo WHERE tipo = 'zona'
ORDER BY valor";

   $this->fecha_nacimiento = $old_value_fecha_nacimiento;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando)) 
   {
       while (!$rs->EOF) 
       { 
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_zona'][] = $rs->fields[0];
              $rs->MoveNext() ; 
       } 
       $rs->Close() ; 
   } 
   elseif ($GLOBALS["NM_ERRO_IBASE"] != 1 && $nm_comando != "")  
   {  
       $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
       exit; 
   } 
   $GLOBALS["NM_ERRO_IBASE"] = 0; 
   $x = 0; 
   $zona_look = ""; 
   $todo = explode("?@?", trim($nmgp_def_dados)) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->zona_1))
          {
              foreach ($this->zona_1 as $tmp_zona)
              {
                  if (trim($tmp_zona) === trim($cadaselect[1])) { $zona_look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->zona) === trim($cadaselect[1])) { $zona_look .= $cadaselect[0]; } 
          $x++; 
   }

?>
<input type=hidden name="zona" value="<?php echo NM_encode_input($zona) . "\">" . $zona_look . ""; ?>
<?php } else { ?>
 
<?php  
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_zona']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_zona'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_zona']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_zona'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_zona']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_zona'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_zona']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_zona'] = array(); 
    }

   $old_value_fecha_nacimiento = $this->fecha_nacimiento;
   $this->nm_tira_formatacao();
   $this->nm_converte_datas(false);


   $unformatted_value_fecha_nacimiento = $this->fecha_nacimiento;

   $nm_comando = "SELECT codigo, valor 
FROM catalogo WHERE tipo = 'zona'
ORDER BY valor";

   $this->fecha_nacimiento = $old_value_fecha_nacimiento;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando)) 
   {
       while (!$rs->EOF) 
       { 
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_zona'][] = $rs->fields[0];
              $rs->MoveNext() ; 
       } 
       $rs->Close() ; 
   } 
   elseif ($GLOBALS["NM_ERRO_IBASE"] != 1 && $nm_comando != "")  
   {  
       $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
       exit; 
   } 
   $GLOBALS["NM_ERRO_IBASE"] = 0; 
   $x = 0 ; 
   $todo = explode("?@?", $nmgp_def_dados) ; 
   $x = 0; 
   $zona_look = ""; 
   $todo = explode("?@?", trim($nmgp_def_dados)) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->zona_1))
          {
              foreach ($this->zona_1 as $tmp_zona)
              {
                  if (trim($tmp_zona) === trim($cadaselect[1])) { $zona_look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->zona) === trim($cadaselect[1])) { $zona_look .= $cadaselect[0]; } 
          $x++; 
   }
   $x = 0; 
   echo "<span id=\"id_read_on_zona\" style=\"vertical-align:middle;width:250px;" .  $sStyleReadLab_zona . "\">" . NM_encode_input($zona_look) . "</span><span id=\"id_read_off_zona\" style=\"" . $sStyleReadInp_zona . "\">";
   echo " <span id=\"idAjaxSelect_zona\"><select class=\"sc-js-input scFormObjectOdd\" style=\"vertical-align:middle;width:250px;\" id=\"id_sc_field_zona\" name=\"zona\" size=1>" ; 
   echo "\r" ; 
   $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_zona'][] = ''; 
   echo "  <option value=\"\">--Seleccione--</option>" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->zona) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->zona)) 
              {
                  echo " selected" ;
              } 
           } 
          echo ">$cadaselect[0] </option>" ; 
          echo "\r" ; 
          $x++ ; 
   }  ; 
   echo " </select></span>" ; 
   echo "\r" ; 
   echo "</span>";
?> 
<?php  }?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_zona_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_zona_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php
   if (!isset($this->nm_new_label['cod_provincia']))
   {
       $this->nm_new_label['cod_provincia'] = "PROVINCIA";
   }
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $cod_provincia = $this->cod_provincia;
   $sStyleHidden_cod_provincia = '';
   if (isset($this->nmgp_cmp_hidden['cod_provincia']) && $this->nmgp_cmp_hidden['cod_provincia'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['cod_provincia']);
       $sStyleHidden_cod_provincia = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_cod_provincia = 'display: none;';
   $sStyleReadInp_cod_provincia = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['cod_provincia']) && $this->nmgp_cmp_readonly['cod_provincia'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['cod_provincia']);
       $sStyleReadLab_cod_provincia = '';
       $sStyleReadInp_cod_provincia = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['cod_provincia']) && $this->nmgp_cmp_hidden['cod_provincia'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="cod_provincia" value="<?php echo NM_encode_input($this->cod_provincia) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd" id="hidden_field_data_cod_provincia" style="<?php echo $sStyleHidden_cod_provincia; ?>vertical-align:middle;width:250px;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd" style="vertical-align:middle;width:250px;padding: 0px"><span class="scFormLabelOddFormat" style="font-weight:bold;vertical-align:middle;width:250px;" ><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['php_cmp_required']['cod_provincia']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['php_cmp_required']['cod_provincia'] == "on") { ?><span class="scFormRequiredOdd">*</span> <?php }?> <span id="id_label_cod_provincia"><?php echo $this->nm_new_label['cod_provincia']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["cod_provincia"]) &&  $this->nmgp_cmp_readonly["cod_provincia"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_cod_provincia']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_cod_provincia'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_cod_provincia']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_cod_provincia'] = array(); 
}
if ($this->zona != "")
{ 
   $this->nm_clear_val("zona");
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_cod_provincia']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_cod_provincia'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_cod_provincia']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_cod_provincia'] = array(); 
    }

   $old_value_fecha_nacimiento = $this->fecha_nacimiento;
   $this->nm_tira_formatacao();
   $this->nm_converte_datas(false);


   $unformatted_value_fecha_nacimiento = $this->fecha_nacimiento;

   $nm_comando = "SELECT cod_provincia, provincia 
FROM u_provincia WHERE zona = '$this->zona'
ORDER BY provincia";

   $this->fecha_nacimiento = $old_value_fecha_nacimiento;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando)) 
   {
       while (!$rs->EOF) 
       { 
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_cod_provincia'][] = $rs->fields[0];
              $rs->MoveNext() ; 
       } 
       $rs->Close() ; 
   } 
   elseif ($GLOBALS["NM_ERRO_IBASE"] != 1 && $nm_comando != "")  
   {  
       $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
       exit; 
   } 
   $GLOBALS["NM_ERRO_IBASE"] = 0; 
} 
   $x = 0; 
   $cod_provincia_look = ""; 
   $todo = explode("?@?", trim($nmgp_def_dados)) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->cod_provincia_1))
          {
              foreach ($this->cod_provincia_1 as $tmp_cod_provincia)
              {
                  if (trim($tmp_cod_provincia) === trim($cadaselect[1])) { $cod_provincia_look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->cod_provincia) === trim($cadaselect[1])) { $cod_provincia_look .= $cadaselect[0]; } 
          $x++; 
   }

?>
<input type=hidden name="cod_provincia" value="<?php echo NM_encode_input($cod_provincia) . "\">" . $cod_provincia_look . ""; ?>
<?php } else { ?>
 
<?php  
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_cod_provincia']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_cod_provincia'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_cod_provincia']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_cod_provincia'] = array(); 
}
if ($this->zona != "")
{ 
   $this->nm_clear_val("zona");
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_cod_provincia']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_cod_provincia'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_cod_provincia']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_cod_provincia'] = array(); 
    }

   $old_value_fecha_nacimiento = $this->fecha_nacimiento;
   $this->nm_tira_formatacao();
   $this->nm_converte_datas(false);


   $unformatted_value_fecha_nacimiento = $this->fecha_nacimiento;

   $nm_comando = "SELECT cod_provincia, provincia 
FROM u_provincia WHERE zona = '$this->zona'
ORDER BY provincia";

   $this->fecha_nacimiento = $old_value_fecha_nacimiento;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando)) 
   {
       while (!$rs->EOF) 
       { 
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_cod_provincia'][] = $rs->fields[0];
              $rs->MoveNext() ; 
       } 
       $rs->Close() ; 
   } 
   elseif ($GLOBALS["NM_ERRO_IBASE"] != 1 && $nm_comando != "")  
   {  
       $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
       exit; 
   } 
   $GLOBALS["NM_ERRO_IBASE"] = 0; 
} 
   $x = 0 ; 
   $todo = explode("?@?", $nmgp_def_dados) ; 
   $x = 0; 
   $cod_provincia_look = ""; 
   $todo = explode("?@?", trim($nmgp_def_dados)) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->cod_provincia_1))
          {
              foreach ($this->cod_provincia_1 as $tmp_cod_provincia)
              {
                  if (trim($tmp_cod_provincia) === trim($cadaselect[1])) { $cod_provincia_look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->cod_provincia) === trim($cadaselect[1])) { $cod_provincia_look .= $cadaselect[0]; } 
          $x++; 
   }
   $x = 0; 
   echo "<span id=\"id_read_on_cod_provincia\" style=\"vertical-align:middle;width:250px;" .  $sStyleReadLab_cod_provincia . "\">" . NM_encode_input($cod_provincia_look) . "</span><span id=\"id_read_off_cod_provincia\" style=\"" . $sStyleReadInp_cod_provincia . "\">";
   echo " <span id=\"idAjaxSelect_cod_provincia\"><select class=\"sc-js-input scFormObjectOdd\" style=\"vertical-align:middle;width:250px;\" id=\"id_sc_field_cod_provincia\" name=\"cod_provincia\" size=1>" ; 
   echo "\r" ; 
   $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_cod_provincia'][] = ''; 
   echo "  <option value=\"\">--Seleccione--</option>" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->cod_provincia) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->cod_provincia)) 
              {
                  echo " selected" ;
              } 
           } 
          echo ">$cadaselect[0] </option>" ; 
          echo "\r" ; 
          $x++ ; 
   }  ; 
   echo " </select></span>" ; 
   echo "\r" ; 
   echo "</span>";
?> 
<?php  }?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_cod_provincia_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_cod_provincia_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php $sStyleHidden_zona_dumb = ('' == $sStyleHidden_zona) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_zona_dumb" style="<?php echo $sStyleHidden_zona_dumb; ?>"></TD>
<?php $sStyleHidden_cod_provincia_dumb = ('' == $sStyleHidden_cod_provincia) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_cod_provincia_dumb" style="<?php echo $sStyleHidden_cod_provincia_dumb; ?>"></TD>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['cod_canton']))
   {
       $this->nm_new_label['cod_canton'] = "CANTÓN";
   }
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $cod_canton = $this->cod_canton;
   $sStyleHidden_cod_canton = '';
   if (isset($this->nmgp_cmp_hidden['cod_canton']) && $this->nmgp_cmp_hidden['cod_canton'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['cod_canton']);
       $sStyleHidden_cod_canton = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_cod_canton = 'display: none;';
   $sStyleReadInp_cod_canton = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['cod_canton']) && $this->nmgp_cmp_readonly['cod_canton'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['cod_canton']);
       $sStyleReadLab_cod_canton = '';
       $sStyleReadInp_cod_canton = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['cod_canton']) && $this->nmgp_cmp_hidden['cod_canton'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="cod_canton" value="<?php echo NM_encode_input($this->cod_canton) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd" id="hidden_field_data_cod_canton" style="<?php echo $sStyleHidden_cod_canton; ?>vertical-align:middle;width:250px;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd" style="vertical-align:middle;width:250px;padding: 0px"><span class="scFormLabelOddFormat" style="font-weight:bold;vertical-align:middle;width:250px;" ><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['php_cmp_required']['cod_canton']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['php_cmp_required']['cod_canton'] == "on") { ?><span class="scFormRequiredOdd">*</span> <?php }?> <span id="id_label_cod_canton"><?php echo $this->nm_new_label['cod_canton']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["cod_canton"]) &&  $this->nmgp_cmp_readonly["cod_canton"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_cod_canton']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_cod_canton'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_cod_canton']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_cod_canton'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_cod_canton']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_cod_canton'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_cod_canton']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_cod_canton'] = array(); 
    }

   $old_value_fecha_nacimiento = $this->fecha_nacimiento;
   $this->nm_tira_formatacao();
   $this->nm_converte_datas(false);


   $unformatted_value_fecha_nacimiento = $this->fecha_nacimiento;

   $nm_comando = "SELECT cod_canton, canton 
FROM u_canton 
WHERE cod_provincia = '$this->cod_provincia'
ORDER BY canton";

   $this->fecha_nacimiento = $old_value_fecha_nacimiento;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando)) 
   {
       while (!$rs->EOF) 
       { 
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_cod_canton'][] = $rs->fields[0];
              $rs->MoveNext() ; 
       } 
       $rs->Close() ; 
   } 
   elseif ($GLOBALS["NM_ERRO_IBASE"] != 1 && $nm_comando != "")  
   {  
       $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
       exit; 
   } 
   $GLOBALS["NM_ERRO_IBASE"] = 0; 
   $x = 0; 
   $cod_canton_look = ""; 
   $todo = explode("?@?", trim($nmgp_def_dados)) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->cod_canton_1))
          {
              foreach ($this->cod_canton_1 as $tmp_cod_canton)
              {
                  if (trim($tmp_cod_canton) === trim($cadaselect[1])) { $cod_canton_look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->cod_canton) === trim($cadaselect[1])) { $cod_canton_look .= $cadaselect[0]; } 
          $x++; 
   }

?>
<input type=hidden name="cod_canton" value="<?php echo NM_encode_input($cod_canton) . "\">" . $cod_canton_look . ""; ?>
<?php } else { ?>
 
<?php  
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_cod_canton']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_cod_canton'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_cod_canton']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_cod_canton'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_cod_canton']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_cod_canton'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_cod_canton']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_cod_canton'] = array(); 
    }

   $old_value_fecha_nacimiento = $this->fecha_nacimiento;
   $this->nm_tira_formatacao();
   $this->nm_converte_datas(false);


   $unformatted_value_fecha_nacimiento = $this->fecha_nacimiento;

   $nm_comando = "SELECT cod_canton, canton 
FROM u_canton 
WHERE cod_provincia = '$this->cod_provincia'
ORDER BY canton";

   $this->fecha_nacimiento = $old_value_fecha_nacimiento;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando)) 
   {
       while (!$rs->EOF) 
       { 
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_cod_canton'][] = $rs->fields[0];
              $rs->MoveNext() ; 
       } 
       $rs->Close() ; 
   } 
   elseif ($GLOBALS["NM_ERRO_IBASE"] != 1 && $nm_comando != "")  
   {  
       $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
       exit; 
   } 
   $GLOBALS["NM_ERRO_IBASE"] = 0; 
   $x = 0 ; 
   $todo = explode("?@?", $nmgp_def_dados) ; 
   $x = 0; 
   $cod_canton_look = ""; 
   $todo = explode("?@?", trim($nmgp_def_dados)) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->cod_canton_1))
          {
              foreach ($this->cod_canton_1 as $tmp_cod_canton)
              {
                  if (trim($tmp_cod_canton) === trim($cadaselect[1])) { $cod_canton_look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->cod_canton) === trim($cadaselect[1])) { $cod_canton_look .= $cadaselect[0]; } 
          $x++; 
   }
   $x = 0; 
   echo "<span id=\"id_read_on_cod_canton\" style=\"vertical-align:middle;width:250px;" .  $sStyleReadLab_cod_canton . "\">" . NM_encode_input($cod_canton_look) . "</span><span id=\"id_read_off_cod_canton\" style=\"" . $sStyleReadInp_cod_canton . "\">";
   echo " <span id=\"idAjaxSelect_cod_canton\"><select class=\"sc-js-input scFormObjectOdd\" style=\"vertical-align:middle;width:250px;\" id=\"id_sc_field_cod_canton\" name=\"cod_canton\" size=1>" ; 
   echo "\r" ; 
   $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_cod_canton'][] = ''; 
   echo "  <option value=\"\">--Seleccione--</option>" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->cod_canton) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->cod_canton)) 
              {
                  echo " selected" ;
              } 
           } 
          echo ">$cadaselect[0] </option>" ; 
          echo "\r" ; 
          $x++ ; 
   }  ; 
   echo " </select></span>" ; 
   echo "\r" ; 
   echo "</span>";
?> 
<?php  }?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_cod_canton_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_cod_canton_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php
   if (!isset($this->nm_new_label['cod_parroquia']))
   {
       $this->nm_new_label['cod_parroquia'] = "PARROQUIA";
   }
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $cod_parroquia = $this->cod_parroquia;
   $sStyleHidden_cod_parroquia = '';
   if (isset($this->nmgp_cmp_hidden['cod_parroquia']) && $this->nmgp_cmp_hidden['cod_parroquia'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['cod_parroquia']);
       $sStyleHidden_cod_parroquia = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_cod_parroquia = 'display: none;';
   $sStyleReadInp_cod_parroquia = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['cod_parroquia']) && $this->nmgp_cmp_readonly['cod_parroquia'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['cod_parroquia']);
       $sStyleReadLab_cod_parroquia = '';
       $sStyleReadInp_cod_parroquia = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['cod_parroquia']) && $this->nmgp_cmp_hidden['cod_parroquia'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="cod_parroquia" value="<?php echo NM_encode_input($this->cod_parroquia) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd" id="hidden_field_data_cod_parroquia" style="<?php echo $sStyleHidden_cod_parroquia; ?>width:250px;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd" style="width:250px;;vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat" style="font-weight:bold;width:250px;" ><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['php_cmp_required']['cod_parroquia']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['php_cmp_required']['cod_parroquia'] == "on") { ?><span class="scFormRequiredOdd">*</span> <?php }?> <span id="id_label_cod_parroquia"><?php echo $this->nm_new_label['cod_parroquia']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["cod_parroquia"]) &&  $this->nmgp_cmp_readonly["cod_parroquia"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_cod_parroquia']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_cod_parroquia'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_cod_parroquia']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_cod_parroquia'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_cod_parroquia']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_cod_parroquia'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_cod_parroquia']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_cod_parroquia'] = array(); 
    }

   $old_value_fecha_nacimiento = $this->fecha_nacimiento;
   $this->nm_tira_formatacao();
   $this->nm_converte_datas(false);


   $unformatted_value_fecha_nacimiento = $this->fecha_nacimiento;

   $nm_comando = "SELECT cod_parroquia, parroquia 
FROM u_parroquia 
WHERE cod_provincia = '$this->cod_provincia' and cod_canton = '$this->cod_canton'
ORDER BY parroquia";

   $this->fecha_nacimiento = $old_value_fecha_nacimiento;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando)) 
   {
       while (!$rs->EOF) 
       { 
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_cod_parroquia'][] = $rs->fields[0];
              $rs->MoveNext() ; 
       } 
       $rs->Close() ; 
   } 
   elseif ($GLOBALS["NM_ERRO_IBASE"] != 1 && $nm_comando != "")  
   {  
       $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
       exit; 
   } 
   $GLOBALS["NM_ERRO_IBASE"] = 0; 
   $x = 0; 
   $cod_parroquia_look = ""; 
   $todo = explode("?@?", trim($nmgp_def_dados)) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->cod_parroquia_1))
          {
              foreach ($this->cod_parroquia_1 as $tmp_cod_parroquia)
              {
                  if (trim($tmp_cod_parroquia) === trim($cadaselect[1])) { $cod_parroquia_look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->cod_parroquia) === trim($cadaselect[1])) { $cod_parroquia_look .= $cadaselect[0]; } 
          $x++; 
   }

?>
<input type=hidden name="cod_parroquia" value="<?php echo NM_encode_input($cod_parroquia) . "\">" . $cod_parroquia_look . ""; ?>
<?php } else { ?>
 
<?php  
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_cod_parroquia']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_cod_parroquia'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_cod_parroquia']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_cod_parroquia'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_cod_parroquia']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_cod_parroquia'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_cod_parroquia']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_cod_parroquia'] = array(); 
    }

   $old_value_fecha_nacimiento = $this->fecha_nacimiento;
   $this->nm_tira_formatacao();
   $this->nm_converte_datas(false);


   $unformatted_value_fecha_nacimiento = $this->fecha_nacimiento;

   $nm_comando = "SELECT cod_parroquia, parroquia 
FROM u_parroquia 
WHERE cod_provincia = '$this->cod_provincia' and cod_canton = '$this->cod_canton'
ORDER BY parroquia";

   $this->fecha_nacimiento = $old_value_fecha_nacimiento;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando)) 
   {
       while (!$rs->EOF) 
       { 
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_cod_parroquia'][] = $rs->fields[0];
              $rs->MoveNext() ; 
       } 
       $rs->Close() ; 
   } 
   elseif ($GLOBALS["NM_ERRO_IBASE"] != 1 && $nm_comando != "")  
   {  
       $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
       exit; 
   } 
   $GLOBALS["NM_ERRO_IBASE"] = 0; 
   $x = 0 ; 
   $todo = explode("?@?", $nmgp_def_dados) ; 
   $x = 0; 
   $cod_parroquia_look = ""; 
   $todo = explode("?@?", trim($nmgp_def_dados)) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->cod_parroquia_1))
          {
              foreach ($this->cod_parroquia_1 as $tmp_cod_parroquia)
              {
                  if (trim($tmp_cod_parroquia) === trim($cadaselect[1])) { $cod_parroquia_look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->cod_parroquia) === trim($cadaselect[1])) { $cod_parroquia_look .= $cadaselect[0]; } 
          $x++; 
   }
   $x = 0; 
   echo "<span id=\"id_read_on_cod_parroquia\" style=\"width:250px;" .  $sStyleReadLab_cod_parroquia . "\">" . NM_encode_input($cod_parroquia_look) . "</span><span id=\"id_read_off_cod_parroquia\" style=\"" . $sStyleReadInp_cod_parroquia . "\">";
   echo " <span id=\"idAjaxSelect_cod_parroquia\"><select class=\"sc-js-input scFormObjectOdd\" style=\"width:250px;\" id=\"id_sc_field_cod_parroquia\" name=\"cod_parroquia\" size=1>" ; 
   echo "\r" ; 
   $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_cod_parroquia'][] = ''; 
   echo "  <option value=\"\">--Seleccione--</option>" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->cod_parroquia) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->cod_parroquia)) 
              {
                  echo " selected" ;
              } 
           } 
          echo ">$cadaselect[0] </option>" ; 
          echo "\r" ; 
          $x++ ; 
   }  ; 
   echo " </select></span>" ; 
   echo "\r" ; 
   echo "</span>";
?> 
<?php  }?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_cod_parroquia_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_cod_parroquia_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 






   </td></tr></table>
   </tr>
</TABLE></div><!-- bloco_f -->
</td></tr>
<tr><td class="scFormPageText">
<span class="scFormRequiredOddColor">* <?php echo $this->Ini->Nm_lang['lang_othr_reqr']; ?></span>
</td></tr> 
<tr><td>
<?php
if ((!$this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['run_iframe'] != "R")
{
?>
    <table style="border-collapse: collapse; border-width: 0px; width: 100%"><tr><td class="scFormToolbar" style="padding: 0px; spacing: 0px">
    <table style="border-collapse: collapse; border-width: 0px; width: 100%">
    <tr> 
     <td nowrap align="left" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php
}
if ((!$this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['run_iframe'] != "R")
{
    $NM_btn = false;
?> 
     </td> 
     <td nowrap align="center" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php 
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['new'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bnovo", "nm_move ('novo'); return false;", "nm_move ('novo'); return false;", "sc_b_new_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes == "novo") && (!$this->Embutida_call || $this->sc_evento == "novo" || $this->sc_evento == "insert" || $this->sc_evento == "incluir")) {
        $sCondStyle = ($this->nmgp_botoes['insert'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bincluir", "nm_atualiza ('incluir'); return false;", "nm_atualiza ('incluir'); return false;", "sc_b_ins_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['update'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "balterar", "nm_atualiza ('alterar'); return false;", "nm_atualiza ('alterar'); return false;", "sc_b_upd_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
?> 
     </td> 
     <td nowrap align="right" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php 
        $sCondStyle = '';
?>
       <?php
if (is_file($this->Ini->root . $this->Ini->path_img_global . $this->Ini->Img_sep_form))
{
    if ($NM_btn)
    {
        $NM_btn = false;
        $NM_ult_sep = "NM_sep_1";
        echo "<img id=\"NM_sep_1\" style=\"vertical-align: middle\" src=\"" . $this->Ini->path_botoes . $this->Ini->Img_sep_form . "\" />";
    }
}
?>
 
<?php
        $sCondStyle = ($this->nmgp_botoes['btn_Salir'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "btn_salir", "sc_btn_btn_Salir()", "sc_btn_btn_Salir()", "sc_btn_Salir_bot", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "");?>
 
<?php
        $NM_btn = true;
    if (isset($this->NMSC_modal) && $this->NMSC_modal == "ok") {
        $sCondStyle = '';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bsair", "document.F6.action='" . $nm_url_saida. "'; document.F6.submit(); return false;", "document.F6.action='" . $nm_url_saida. "'; document.F6.submit(); return false;", "sc_b_sai_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
}
if ((!$this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['run_iframe'] != "R")
{
?>
   </td></tr> 
   </table> 
   </td></tr></table> 
<?php
}
?>
<?php
if (!$NM_btn && isset($NM_ult_sep))
{
    echo "    <script language=\"javascript\">";
    echo "      document.getElementById('" .  $NM_ult_sep . "').style.display='none';";
    echo "    </script>";
}
unset($NM_ult_sep);
?>
<?php if ('novo' != $this->nmgp_opcao || $this->Embutida_form) { ?><script>nav_atualiza(Nav_permite_ret, Nav_permite_ava, 'b');</script><?php } ?>
</td></tr> 
<?php
  }
?>
</table> 

<div id="id_debug_window" style="display: none; position: absolute; left: 50px; top: 50px"><table class="scFormMessageTable">
<tr><td class="scFormMessageTitle"><?php echo nmButtonOutput($this->arr_buttons, "berrm_clse", "scAjaxHideDebug()", "scAjaxHideDebug()", "", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "");?>
&nbsp;&nbsp;Output</td></tr>
<tr><td class="scFormMessageMessage" style="padding: 0px; vertical-align: top"><div style="padding: 2px; height: 200px; width: 350px; overflow: auto" id="id_debug_text"></div></td></tr>
</table></div>

</form> 
<script> 
<?php
  $nm_sc_blocos_da_pag = array(0,1);

  foreach ($this->Ini->nm_hidden_blocos as $bloco => $hidden)
  {
      if ($hidden == "off" && in_array($bloco, $nm_sc_blocos_da_pag))
      {
          echo "document.getElementById('hidden_bloco_" . $bloco . "').style.display = 'none';";
          if (isset($nm_sc_blocos_aba[$bloco]))
          {
               echo "document.getElementById('id_tabs_" . $nm_sc_blocos_aba[$bloco] . "_" . $bloco . "').style.display = 'none';";
          }
      }
  }
?>
</script> 
<script>
function updateHeaderFooter(sFldName, sFldValue)
{
  if (sFldValue[0] && sFldValue[0]["value"])
  {
    sFldValue = sFldValue[0]["value"];
  }
}
</script>
<?php
if (isset($_POST['master_nav']) && 'on' == $_POST['master_nav'])
{
?>
<script>parent.scAjaxDetailStatus("form_socios");</script>
<?php
}
?>
<?php
if (isset($this->NM_ajax_info['displayMsg']) && $this->NM_ajax_info['displayMsg'])
{
?>
<script type="text/javascript">
_scAjaxShowMessage(scMsgDefTitle, "<?php echo $this->NM_ajax_info['displayMsgTxt']; ?>", false, sc_ajaxMsgTime, false, "Ok", 0, 0, 0, 0, "", "", "", false, true);
</script>
<?php
}
?>
<?php
if ('' != $this->scFormFocusErrorName)
{
?>
<script>
scAjaxFocusError();
</script>
<?php
}
?>
<script>
bLigEditLookupCall = <?php if ($this->lig_edit_lookup_call) { ?>true<?php } else { ?>false<?php } ?>;
function scLigEditLookupCall()
{
<?php
if ($this->lig_edit_lookup && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['sc_modal']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['sc_modal'])
{
?>
  parent.<?php echo $this->lig_edit_lookup_cb; ?>(<?php echo $this->lig_edit_lookup_row; ?>);
<?php
}
elseif ($this->lig_edit_lookup)
{
?>
  opener.<?php echo $this->lig_edit_lookup_cb; ?>(<?php echo $this->lig_edit_lookup_row; ?>);
<?php
}
?>
}
if (bLigEditLookupCall)
{
  scLigEditLookupCall();
}
<?php
if (isset($this->redir_modal) && !empty($this->redir_modal))
{
    echo $this->redir_modal;
}
?>
</script>
</body> 
</html> 
