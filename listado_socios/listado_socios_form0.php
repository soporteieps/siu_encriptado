<?php
class listado_socios_form extends listado_socios_apl
{
function Form_Init()
{
   global $sc_seq_vert, $nm_apl_dependente, $opcao_botoes, $nm_url_saida; 
?>
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
 <TITLE><?php if ('novo' == $this->nmgp_opcao) { echo strip_tags(""); } else { echo strip_tags(""); } ?></TITLE>
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
<?php
if ($this->Embutida_form && isset($_SESSION['sc_session'][$this->Ini->sc_page]['listado_socios']['sc_modal']) && $_SESSION['sc_session'][$this->Ini->sc_page]['listado_socios']['sc_modal'] && isset($_SESSION['sc_session'][$this->Ini->sc_page]['listado_socios']['sc_redir_atualiz']) && $_SESSION['sc_session'][$this->Ini->sc_page]['listado_socios']['sc_redir_atualiz'] == 'ok')
{
?>
  var sc_closeChange = true;
<?php
}
else
{
?>
  var sc_closeChange = false;
<?php
}
?>
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
include_once("listado_socios_sajax_js.php");
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

include_once('listado_socios_jquery.php');

?>

 var scQSInit = true;
 var scQSPos = {};
 $(function() {


  scJQGeneralAdd();

  sc_form_onload();

  $(document).bind('drop dragover', function (e) {
      e.preventDefault();
  });

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
$str_iframe_body = ('F' == $_SESSION['sc_session'][$this->Ini->sc_page]['listado_socios']['run_iframe'] || 'R' == $_SESSION['sc_session'][$this->Ini->sc_page]['listado_socios']['run_iframe']) ? 'margin: 2px;' : '';
 if (isset($_SESSION['nm_aba_bg_color']))
 {
     $this->Ini->cor_bg_grid = $_SESSION['nm_aba_bg_color'];
     $this->Ini->img_fun_pag = $_SESSION['nm_aba_bg_img'];
 }
if ($GLOBALS["erro_incl"] == 1)
{
    $this->nmgp_opcao = "novo";
    $_SESSION['sc_session'][$this->Ini->sc_page]['listado_socios']['opc_ant'] = "novo";
    $_SESSION['sc_session'][$this->Ini->sc_page]['listado_socios']['recarga'] = "novo";
}
if (empty($_SESSION['sc_session'][$this->Ini->sc_page]['listado_socios']['recarga']))
{
    $opcao_botoes = $this->nmgp_opcao;
}
else
{
    $opcao_botoes = $_SESSION['sc_session'][$this->Ini->sc_page]['listado_socios']['recarga'];
}
if ('novo' == $opcao_botoes && $this->Embutida_form)
{
    $opcao_botoes = 'inicio';
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
 include_once("listado_socios_js0.php");
?>
<script type="text/javascript" src="<?php echo str_replace("{str_idioma}", $this->Ini->str_lang, "../_lib/js/tab_erro_{str_idioma}.js"); ?>"> 
</script> 
<script type="text/javascript"> 
  sc_quant_excl = <?php echo count($sc_check_excl); ?>; 
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
               action="listado_socios.php" 
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
$int_iframe_padding = ('F' == $_SESSION['sc_session'][$this->Ini->sc_page]['listado_socios']['run_iframe'] || 'R' == $_SESSION['sc_session'][$this->Ini->sc_page]['listado_socios']['run_iframe']) ? 0 : "0px";
?>
<?php
$_SESSION['scriptcase']['error_span_title']['listado_socios'] = $this->Ini->Error_icon_span;
$_SESSION['scriptcase']['error_icon_title']['listado_socios'] = '' != $this->Ini->Err_ico_title ? $this->Ini->path_icones . '/' . $this->Ini->Err_ico_title : '';
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
if ((!$this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['listado_socios']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['listado_socios']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['listado_socios']['run_iframe'] != "R")
{
?>
    <table style="border-collapse: collapse; border-width: 0px; width: 100%"><tr><td class="scFormToolbar" style="padding: 0px; spacing: 0px">
    <table style="border-collapse: collapse; border-width: 0px; width: 100%">
    <tr> 
     <td nowrap align="left" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php
}
if ((!$this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['listado_socios']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['listado_socios']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['listado_socios']['run_iframe'] != "R")
{
    $NM_btn = false;
?> 
     </td> 
     <td nowrap align="center" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php 
        $sCondStyle = ($this->nmgp_botoes['btn_Insertar'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "btn_insertar", "sc_btn_btn_Insertar()", "sc_btn_btn_Insertar()", "sc_btn_Insertar_top", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "");?>
 
<?php
        $NM_btn = true;
?> 
     </td> 
     <td nowrap align="right" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php 
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['btn_Salir'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "btn_salir", "sc_btn_btn_Salir()", "sc_btn_btn_Salir()", "sc_btn_Salir_top", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
}
if ((!$this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['listado_socios']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['listado_socios']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['listado_socios']['run_iframe'] != "R")
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
<?php if ('novo' != $this->nmgp_opcao || $this->Embutida_form) { ?><script>nav_atualiza(Nav_permite_ret, Nav_permite_ava, 't');</script><?php } ?>
</td></tr> 
<tr><td>
<?php
  if ($this->nmgp_form_empty)
  {
       echo "</td></tr><tr><td align=center>";
       echo "<font face=\"" . $this->Ini->pag_fonte_tipo . "\" color=\"" . $this->Ini->cor_txt_grid . "\" size=\"2\"><b>" . $this->Ini->Nm_lang['lang_errm_empt'] . "</b></font>";
       echo "</td></tr>";
       echo "<tr><td>";
  }
?>
<?php $sc_hidden_no = 1; $sc_hidden_yes = 0; ?>
   <a name="bloco_0"></a>
   <table width="100%" height="100%" cellpadding="0"><tr valign="top"><td width="100%" height="">
<div id="div_hidden_bloco_0"><!-- bloco_c -->
     <div id="SC_tab_mult_reg">
<?php
}

function Form_Table($Table_refresh = false)
{
   global $sc_seq_vert, $nm_apl_dependente, $opcao_botoes, $nm_url_saida; 
   if ($Table_refresh) 
   { 
       ob_start();
   }
?>
<?php
   if (!isset($this->nmgp_cmp_hidden['cod_u_organizaciones_']))
   {
       $this->nmgp_cmp_hidden['cod_u_organizaciones_'] = 'off';
   }
?>
<TABLE align="center" id="hidden_bloco_0" class="scFormTable" width="100%" style="height: 100%;"><?php
     $Span = 0;
     $Col_span = ($Span == 0) ? "" : " colspan=$Span";
 ?>
    <TR>
     <TD class="scFormLabelOddMult" <?php echo $Col_span ?>>&nbsp;</TD>
     <TD class="scFormLabelOddMult" colspan=11 style="text-align:center;vertical-align:middle;background-color:#006699;font-size:16px;color:#006699;"><?php echo $_SESSION['nom_organizacion_aux'] ?>  -  RUC:<?php echo $_SESSION['ruc_organizacion_aux'] ?></TD>
    </TR>
   <tr>
<?php
$orderColName = '';
$orderColOrient = '';
?>
    <script type="text/javascript">
     var orderImgAsc = "<?php echo $this->Ini->path_img_global . "/" . $this->Ini->Label_sort_asc ?>";
     var orderImgDesc = "<?php echo $this->Ini->path_img_global . "/" . $this->Ini->Label_sort_desc ?>";
     var orderImgNone = "<?php echo $this->Ini->path_img_global . "/" . $this->Ini->Label_sort ?>";
     var orderColName = "";
     function scSetOrderColumn(clickedColumn) {
      $(".sc-ui-img-order-column").attr("src", orderImgNone);
      if (clickedColumn != orderColName) {
       orderColName = clickedColumn;
       orderColOrient = orderImgAsc;
      }
      else if ("" != orderColName) {
       orderColOrient = orderColOrient == orderImgAsc ? orderImgDesc : orderImgAsc;
      }
      else {
       orderColName = "";
       orderColOrient = "";
      }
      $("#sc-id-img-order-" + orderColName).attr("src", orderColOrient);
     }
    </script>
<?php
     $Col_span = "";


    ?>

    <TD class="scFormLabelOddMult" <?php echo $Col_span ?>> &nbsp; </TD>
   
   <?php if ($this->Embutida_form && $this->nmgp_botoes['insert'] == "on") {?>
    <TD class="scFormLabelOddMult"  width="10">  </TD>
   <?php }?>
   <?php if ($this->Embutida_form && $this->nmgp_botoes['insert'] != "on") {?>
    <TD class="scFormLabelOddMult"  width="10"> &nbsp; </TD>
   <?php }?>
   <?php if (isset($this->nmgp_cmp_hidden['btn_eliminar_']) && $this->nmgp_cmp_hidden['btn_eliminar_'] == 'off') { $sStyleHidden_btn_eliminar_ = 'display: none'; }
      if (1 || !isset($this->nmgp_cmp_hidden['btn_eliminar_']) || $this->nmgp_cmp_hidden['btn_eliminar_'] == 'on') {
      if (!isset($this->nm_new_label['btn_eliminar_'])) {
          $this->nm_new_label['btn_eliminar_'] = ""; } ?>

    <TD class="scFormLabelOddMult" id="hidden_field_label_btn_eliminar_" style="white-space:nowrap;;<?php echo $sStyleHidden_btn_eliminar_; ?>" > <?php echo $this->nm_new_label['btn_eliminar_'] ?> </TD>
   <?php } ?>

   <?php if (isset($this->nmgp_cmp_hidden['cod_u_organizaciones_']) && $this->nmgp_cmp_hidden['cod_u_organizaciones_'] == 'off') { $sStyleHidden_cod_u_organizaciones_ = 'display: none'; }
      if (1 || !isset($this->nmgp_cmp_hidden['cod_u_organizaciones_']) || $this->nmgp_cmp_hidden['cod_u_organizaciones_'] == 'on') {
      if (!isset($this->nm_new_label['cod_u_organizaciones_'])) {
          $this->nm_new_label['cod_u_organizaciones_'] = "ORGANIZACIÓN"; } ?>

    <TD class="scFormLabelOddMult" id="hidden_field_label_cod_u_organizaciones_" style="white-space:nowrap;;<?php echo $sStyleHidden_cod_u_organizaciones_; ?>" > <?php echo $this->nm_new_label['cod_u_organizaciones_'] ?> </TD>
   <?php } ?>

   <?php if (isset($this->nmgp_cmp_hidden['cedula_']) && $this->nmgp_cmp_hidden['cedula_'] == 'off') { $sStyleHidden_cedula_ = 'display: none'; }
      if (1 || !isset($this->nmgp_cmp_hidden['cedula_']) || $this->nmgp_cmp_hidden['cedula_'] == 'on') {
      if (!isset($this->nm_new_label['cedula_'])) {
          $this->nm_new_label['cedula_'] = "CÉDULA"; } ?>

    <TD class="scFormLabelOddMult" id="hidden_field_label_cedula_" style="white-space:nowrap;text-align:center;vertical-align:middle;width:15px;<?php echo $sStyleHidden_cedula_; ?>" > <?php echo $this->nm_new_label['cedula_'] ?> </TD>
   <?php } ?>

   <?php if (isset($this->nmgp_cmp_hidden['apellidos_']) && $this->nmgp_cmp_hidden['apellidos_'] == 'off') { $sStyleHidden_apellidos_ = 'display: none'; }
      if (1 || !isset($this->nmgp_cmp_hidden['apellidos_']) || $this->nmgp_cmp_hidden['apellidos_'] == 'on') {
      if (!isset($this->nm_new_label['apellidos_'])) {
          $this->nm_new_label['apellidos_'] = "APELLIDOS Y NOMBRES"; } ?>

    <TD class="scFormLabelOddMult" id="hidden_field_label_apellidos_" style="white-space:nowrap;;<?php echo $sStyleHidden_apellidos_; ?>" > <?php echo $this->nm_new_label['apellidos_'] ?> </TD>
   <?php } ?>

   <?php if (isset($this->nmgp_cmp_hidden['zona_']) && $this->nmgp_cmp_hidden['zona_'] == 'off') { $sStyleHidden_zona_ = 'display: none'; }
      if (1 || !isset($this->nmgp_cmp_hidden['zona_']) || $this->nmgp_cmp_hidden['zona_'] == 'on') {
      if (!isset($this->nm_new_label['zona_'])) {
          $this->nm_new_label['zona_'] = "ZONA"; } ?>

    <TD class="scFormLabelOddMult" id="hidden_field_label_zona_" style="white-space:nowrap;text-align:center;vertical-align:middle;<?php echo $sStyleHidden_zona_; ?>" > <?php echo $this->nm_new_label['zona_'] ?> </TD>
   <?php } ?>

   <?php if (isset($this->nmgp_cmp_hidden['cod_provincia_']) && $this->nmgp_cmp_hidden['cod_provincia_'] == 'off') { $sStyleHidden_cod_provincia_ = 'display: none'; }
      if (1 || !isset($this->nmgp_cmp_hidden['cod_provincia_']) || $this->nmgp_cmp_hidden['cod_provincia_'] == 'on') {
      if (!isset($this->nm_new_label['cod_provincia_'])) {
          $this->nm_new_label['cod_provincia_'] = "PROVINCIA"; } ?>

    <TD class="scFormLabelOddMult" id="hidden_field_label_cod_provincia_" style="white-space:nowrap;;<?php echo $sStyleHidden_cod_provincia_; ?>" > <?php echo $this->nm_new_label['cod_provincia_'] ?> </TD>
   <?php } ?>

   <?php if (isset($this->nmgp_cmp_hidden['cod_canton_']) && $this->nmgp_cmp_hidden['cod_canton_'] == 'off') { $sStyleHidden_cod_canton_ = 'display: none'; }
      if (1 || !isset($this->nmgp_cmp_hidden['cod_canton_']) || $this->nmgp_cmp_hidden['cod_canton_'] == 'on') {
      if (!isset($this->nm_new_label['cod_canton_'])) {
          $this->nm_new_label['cod_canton_'] = "CANTÓN"; } ?>

    <TD class="scFormLabelOddMult" id="hidden_field_label_cod_canton_" style="white-space:nowrap;;<?php echo $sStyleHidden_cod_canton_; ?>" > <?php echo $this->nm_new_label['cod_canton_'] ?> </TD>
   <?php } ?>

   <?php if (isset($this->nmgp_cmp_hidden['cod_parroquia_']) && $this->nmgp_cmp_hidden['cod_parroquia_'] == 'off') { $sStyleHidden_cod_parroquia_ = 'display: none'; }
      if (1 || !isset($this->nmgp_cmp_hidden['cod_parroquia_']) || $this->nmgp_cmp_hidden['cod_parroquia_'] == 'on') {
      if (!isset($this->nm_new_label['cod_parroquia_'])) {
          $this->nm_new_label['cod_parroquia_'] = "PARROQUIA"; } ?>

    <TD class="scFormLabelOddMult" id="hidden_field_label_cod_parroquia_" style="white-space:nowrap;;<?php echo $sStyleHidden_cod_parroquia_; ?>" > <?php echo $this->nm_new_label['cod_parroquia_'] ?> </TD>
   <?php } ?>

   <?php if (isset($this->nmgp_cmp_hidden['estado_']) && $this->nmgp_cmp_hidden['estado_'] == 'off') { $sStyleHidden_estado_ = 'display: none'; }
      if (1 || !isset($this->nmgp_cmp_hidden['estado_']) || $this->nmgp_cmp_hidden['estado_'] == 'on') {
      if (!isset($this->nm_new_label['estado_'])) {
          $this->nm_new_label['estado_'] = "ESTADO"; } ?>

    <TD class="scFormLabelOddMult" id="hidden_field_label_estado_" style="white-space:nowrap;;<?php echo $sStyleHidden_estado_; ?>" > <?php echo $this->nm_new_label['estado_'] ?> </TD>
   <?php } ?>

   <?php if (isset($this->nmgp_cmp_hidden['nacionalidad_']) && $this->nmgp_cmp_hidden['nacionalidad_'] == 'off') { $sStyleHidden_nacionalidad_ = 'display: none'; }
      if (1 || !isset($this->nmgp_cmp_hidden['nacionalidad_']) || $this->nmgp_cmp_hidden['nacionalidad_'] == 'on') {
      if (!isset($this->nm_new_label['nacionalidad_'])) {
          $this->nm_new_label['nacionalidad_'] = "NACIONALIDAD"; } ?>

    <TD class="scFormLabelOddMult" id="hidden_field_label_nacionalidad_" style="white-space:nowrap;;<?php echo $sStyleHidden_nacionalidad_; ?>" > <?php echo $this->nm_new_label['nacionalidad_'] ?> </TD>
   <?php } ?>

   <?php if (isset($this->nmgp_cmp_hidden['btn_editar_']) && $this->nmgp_cmp_hidden['btn_editar_'] == 'off') { $sStyleHidden_btn_editar_ = 'display: none'; }
      if (1 || !isset($this->nmgp_cmp_hidden['btn_editar_']) || $this->nmgp_cmp_hidden['btn_editar_'] == 'on') {
      if (!isset($this->nm_new_label['btn_editar_'])) {
          $this->nm_new_label['btn_editar_'] = "EDITAR"; } ?>

    <TD class="scFormLabelOddMult" id="hidden_field_label_btn_editar_" style="white-space:nowrap;text-align:center;vertical-align:middle;width:20px;<?php echo $sStyleHidden_btn_editar_; ?>" > <?php echo $this->nm_new_label['btn_editar_'] ?> </TD>
   <?php } ?>





    <script type="text/javascript">
     var orderColOrient = "<?php echo $orderColOrient ?>";
     scSetOrderColumn("<?php echo $orderColName ?>");
    </script>
   </tr>
<?php   
} 
function Form_Corpo($Line_Add = false, $Table_refresh = false) 
{ 
   global $sc_seq_vert; 
   if ($Line_Add) 
   { 
       ob_start();
       $iStart = sizeof($this->form_vert_listado_socios);
       $guarda_nmgp_opcao = $this->nmgp_opcao;
       $guarda_form_vert_listado_socios = $this->form_vert_listado_socios;
       $this->nmgp_opcao = 'novo';
   } 
   if ($this->Embutida_form && empty($this->form_vert_listado_socios))
   {
       $sc_seq_vert = 0;
   }
   foreach ($this->form_vert_listado_socios as $sc_seq_vert => $sc_lixo)
   {
       $this->cod_socios_ = $this->form_vert_listado_socios[$sc_seq_vert]['cod_socios_'];
       $this->cod_evento_ = $this->form_vert_listado_socios[$sc_seq_vert]['cod_evento_'];
       $this->tipo_evento_ = $this->form_vert_listado_socios[$sc_seq_vert]['tipo_evento_'];
       $this->fecha_reporte_ = $this->form_vert_listado_socios[$sc_seq_vert]['fecha_reporte_'];
       $this->tipo_servicio_ = $this->form_vert_listado_socios[$sc_seq_vert]['tipo_servicio_'];
       $this->ruc_ = $this->form_vert_listado_socios[$sc_seq_vert]['ruc_'];
       $this->tipo_documento_ = $this->form_vert_listado_socios[$sc_seq_vert]['tipo_documento_'];
       $this->nombres_ = $this->form_vert_listado_socios[$sc_seq_vert]['nombres_'];
       $this->asociacion_ = $this->form_vert_listado_socios[$sc_seq_vert]['asociacion_'];
       $this->fecha_registro_ = $this->form_vert_listado_socios[$sc_seq_vert]['fecha_registro_'];
       $this->grupo_etnico_ = $this->form_vert_listado_socios[$sc_seq_vert]['grupo_etnico_'];
       $this->genero_ = $this->form_vert_listado_socios[$sc_seq_vert]['genero_'];
       $this->poblacion_ = $this->form_vert_listado_socios[$sc_seq_vert]['poblacion_'];
       $this->estado_socio_ = $this->form_vert_listado_socios[$sc_seq_vert]['estado_socio_'];
       $this->fecha_nacimiento_ = $this->form_vert_listado_socios[$sc_seq_vert]['fecha_nacimiento_'];
       $this->telefono_ = $this->form_vert_listado_socios[$sc_seq_vert]['telefono_'];
       $this->celular_ = $this->form_vert_listado_socios[$sc_seq_vert]['celular_'];
       $this->mail_ = $this->form_vert_listado_socios[$sc_seq_vert]['mail_'];
       $this->direccion_ = $this->form_vert_listado_socios[$sc_seq_vert]['direccion_'];
       $this->discapacidad_ = $this->form_vert_listado_socios[$sc_seq_vert]['discapacidad_'];
       $this->tipo_discapacidad_ = $this->form_vert_listado_socios[$sc_seq_vert]['tipo_discapacidad_'];
       $this->vinculado_a_ = $this->form_vert_listado_socios[$sc_seq_vert]['vinculado_a_'];
       $this->zona_procedencia_ = $this->form_vert_listado_socios[$sc_seq_vert]['zona_procedencia_'];
       $this->provincia_procedencia_ = $this->form_vert_listado_socios[$sc_seq_vert]['provincia_procedencia_'];
       $this->forma_organizacion_ = $this->form_vert_listado_socios[$sc_seq_vert]['forma_organizacion_'];
       $this->socio_empleado_ = $this->form_vert_listado_socios[$sc_seq_vert]['socio_empleado_'];
       $this->cod_servicio_im_ = $this->form_vert_listado_socios[$sc_seq_vert]['cod_servicio_im_'];
       $this->fecha_reporte_im_ = $this->form_vert_listado_socios[$sc_seq_vert]['fecha_reporte_im_'];
       $this->btn_registrar_ = $this->form_vert_listado_socios[$sc_seq_vert]['btn_registrar_'];
       if (isset($this->Embutida_ronly) && $this->Embutida_ronly && !$Line_Add)
       {
           $this->nmgp_cmp_readonly['btn_eliminar_'] = true;
           $this->nmgp_cmp_readonly['cod_u_organizaciones_'] = true;
           $this->nmgp_cmp_readonly['cedula_'] = true;
           $this->nmgp_cmp_readonly['apellidos_'] = true;
           $this->nmgp_cmp_readonly['zona_'] = true;
           $this->nmgp_cmp_readonly['cod_provincia_'] = true;
           $this->nmgp_cmp_readonly['cod_canton_'] = true;
           $this->nmgp_cmp_readonly['cod_parroquia_'] = true;
           $this->nmgp_cmp_readonly['estado_'] = true;
           $this->nmgp_cmp_readonly['nacionalidad_'] = true;
           $this->nmgp_cmp_readonly['btn_editar_'] = true;
       }
       elseif ($Line_Add)
       {
           if (!isset($this->nmgp_cmp_readonly['btn_eliminar_']) || $this->nmgp_cmp_readonly['btn_eliminar_'] != "on") {$this->nmgp_cmp_readonly['btn_eliminar_'] = false;}
           if (!isset($this->nmgp_cmp_readonly['cod_u_organizaciones_']) || $this->nmgp_cmp_readonly['cod_u_organizaciones_'] != "on") {$this->nmgp_cmp_readonly['cod_u_organizaciones_'] = false;}
           if (!isset($this->nmgp_cmp_readonly['cedula_']) || $this->nmgp_cmp_readonly['cedula_'] != "on") {$this->nmgp_cmp_readonly['cedula_'] = false;}
           if (!isset($this->nmgp_cmp_readonly['apellidos_']) || $this->nmgp_cmp_readonly['apellidos_'] != "on") {$this->nmgp_cmp_readonly['apellidos_'] = false;}
           if (!isset($this->nmgp_cmp_readonly['zona_']) || $this->nmgp_cmp_readonly['zona_'] != "on") {$this->nmgp_cmp_readonly['zona_'] = false;}
           if (!isset($this->nmgp_cmp_readonly['cod_provincia_']) || $this->nmgp_cmp_readonly['cod_provincia_'] != "on") {$this->nmgp_cmp_readonly['cod_provincia_'] = false;}
           if (!isset($this->nmgp_cmp_readonly['cod_canton_']) || $this->nmgp_cmp_readonly['cod_canton_'] != "on") {$this->nmgp_cmp_readonly['cod_canton_'] = false;}
           if (!isset($this->nmgp_cmp_readonly['cod_parroquia_']) || $this->nmgp_cmp_readonly['cod_parroquia_'] != "on") {$this->nmgp_cmp_readonly['cod_parroquia_'] = false;}
           if (!isset($this->nmgp_cmp_readonly['estado_']) || $this->nmgp_cmp_readonly['estado_'] != "on") {$this->nmgp_cmp_readonly['estado_'] = false;}
           if (!isset($this->nmgp_cmp_readonly['nacionalidad_']) || $this->nmgp_cmp_readonly['nacionalidad_'] != "on") {$this->nmgp_cmp_readonly['nacionalidad_'] = false;}
           if (!isset($this->nmgp_cmp_readonly['btn_editar_']) || $this->nmgp_cmp_readonly['btn_editar_'] != "on") {$this->nmgp_cmp_readonly['btn_editar_'] = false;}
       }
              foreach ($this->form_vert_form_preenchimento[$sc_seq_vert] as $sCmpNome => $mCmpVal)
              {
                  eval("\$this->" . $sCmpNome . " = \$mCmpVal;");
              }
        $this->btn_eliminar_ = $this->form_vert_listado_socios[$sc_seq_vert]['btn_eliminar_']; 
       $btn_eliminar_ = $this->btn_eliminar_; 
       $sStyleHidden_btn_eliminar_ = '';
       if (isset($sCheckRead_btn_eliminar_))
       {
           unset($sCheckRead_btn_eliminar_);
       }
       if (isset($this->nmgp_cmp_readonly['btn_eliminar_']))
       {
           $sCheckRead_btn_eliminar_ = $this->nmgp_cmp_readonly['btn_eliminar_'];
       }
       if (isset($this->nmgp_cmp_hidden['btn_eliminar_']) && $this->nmgp_cmp_hidden['btn_eliminar_'] == 'off')
       {
           unset($this->nmgp_cmp_hidden['btn_eliminar_']);
           $sStyleHidden_btn_eliminar_ = 'display: none;';
       }
       $bTestReadOnly_btn_eliminar_ = true;
       $sStyleReadLab_btn_eliminar_ = 'display: none;';
       $sStyleReadInp_btn_eliminar_ = '';
       if (isset($this->nmgp_cmp_readonly['btn_eliminar_']) && $this->nmgp_cmp_readonly['btn_eliminar_'] == 'on')
       {
           $bTestReadOnly_btn_eliminar_ = false;
           unset($this->nmgp_cmp_readonly['btn_eliminar_']);
           $sStyleReadLab_btn_eliminar_ = '';
           $sStyleReadInp_btn_eliminar_ = 'display: none;';
       }
       $this->cod_u_organizaciones_ = $this->form_vert_listado_socios[$sc_seq_vert]['cod_u_organizaciones_']; 
       $cod_u_organizaciones_ = $this->cod_u_organizaciones_; 
       if (!isset($this->nmgp_cmp_hidden['cod_u_organizaciones_']))
       {
           $this->nmgp_cmp_hidden['cod_u_organizaciones_'] = 'off';
       }
       $sStyleHidden_cod_u_organizaciones_ = '';
       if (isset($sCheckRead_cod_u_organizaciones_))
       {
           unset($sCheckRead_cod_u_organizaciones_);
       }
       if (isset($this->nmgp_cmp_readonly['cod_u_organizaciones_']))
       {
           $sCheckRead_cod_u_organizaciones_ = $this->nmgp_cmp_readonly['cod_u_organizaciones_'];
       }
       if (isset($this->nmgp_cmp_hidden['cod_u_organizaciones_']) && $this->nmgp_cmp_hidden['cod_u_organizaciones_'] == 'off')
       {
           unset($this->nmgp_cmp_hidden['cod_u_organizaciones_']);
           $sStyleHidden_cod_u_organizaciones_ = 'display: none;';
       }
       $bTestReadOnly_cod_u_organizaciones_ = true;
       $sStyleReadLab_cod_u_organizaciones_ = 'display: none;';
       $sStyleReadInp_cod_u_organizaciones_ = '';
       if (isset($this->nmgp_cmp_readonly['cod_u_organizaciones_']) && $this->nmgp_cmp_readonly['cod_u_organizaciones_'] == 'on')
       {
           $bTestReadOnly_cod_u_organizaciones_ = false;
           unset($this->nmgp_cmp_readonly['cod_u_organizaciones_']);
           $sStyleReadLab_cod_u_organizaciones_ = '';
           $sStyleReadInp_cod_u_organizaciones_ = 'display: none;';
       }
       $this->cedula_ = $this->form_vert_listado_socios[$sc_seq_vert]['cedula_']; 
       $cedula_ = $this->cedula_; 
       $sStyleHidden_cedula_ = '';
       if (isset($sCheckRead_cedula_))
       {
           unset($sCheckRead_cedula_);
       }
       if (isset($this->nmgp_cmp_readonly['cedula_']))
       {
           $sCheckRead_cedula_ = $this->nmgp_cmp_readonly['cedula_'];
       }
       if (isset($this->nmgp_cmp_hidden['cedula_']) && $this->nmgp_cmp_hidden['cedula_'] == 'off')
       {
           unset($this->nmgp_cmp_hidden['cedula_']);
           $sStyleHidden_cedula_ = 'display: none;';
       }
       $bTestReadOnly_cedula_ = true;
       $sStyleReadLab_cedula_ = 'display: none;';
       $sStyleReadInp_cedula_ = '';
       if (isset($this->nmgp_cmp_readonly['cedula_']) && $this->nmgp_cmp_readonly['cedula_'] == 'on')
       {
           $bTestReadOnly_cedula_ = false;
           unset($this->nmgp_cmp_readonly['cedula_']);
           $sStyleReadLab_cedula_ = '';
           $sStyleReadInp_cedula_ = 'display: none;';
       }
       $this->apellidos_ = $this->form_vert_listado_socios[$sc_seq_vert]['apellidos_']; 
       $apellidos_ = $this->apellidos_; 
       $sStyleHidden_apellidos_ = '';
       if (isset($sCheckRead_apellidos_))
       {
           unset($sCheckRead_apellidos_);
       }
       if (isset($this->nmgp_cmp_readonly['apellidos_']))
       {
           $sCheckRead_apellidos_ = $this->nmgp_cmp_readonly['apellidos_'];
       }
       if (isset($this->nmgp_cmp_hidden['apellidos_']) && $this->nmgp_cmp_hidden['apellidos_'] == 'off')
       {
           unset($this->nmgp_cmp_hidden['apellidos_']);
           $sStyleHidden_apellidos_ = 'display: none;';
       }
       $bTestReadOnly_apellidos_ = true;
       $sStyleReadLab_apellidos_ = 'display: none;';
       $sStyleReadInp_apellidos_ = '';
       if (isset($this->nmgp_cmp_readonly['apellidos_']) && $this->nmgp_cmp_readonly['apellidos_'] == 'on')
       {
           $bTestReadOnly_apellidos_ = false;
           unset($this->nmgp_cmp_readonly['apellidos_']);
           $sStyleReadLab_apellidos_ = '';
           $sStyleReadInp_apellidos_ = 'display: none;';
       }
       $this->zona_ = $this->form_vert_listado_socios[$sc_seq_vert]['zona_']; 
       $zona_ = $this->zona_; 
       $sStyleHidden_zona_ = '';
       if (isset($sCheckRead_zona_))
       {
           unset($sCheckRead_zona_);
       }
       if (isset($this->nmgp_cmp_readonly['zona_']))
       {
           $sCheckRead_zona_ = $this->nmgp_cmp_readonly['zona_'];
       }
       if (isset($this->nmgp_cmp_hidden['zona_']) && $this->nmgp_cmp_hidden['zona_'] == 'off')
       {
           unset($this->nmgp_cmp_hidden['zona_']);
           $sStyleHidden_zona_ = 'display: none;';
       }
       $bTestReadOnly_zona_ = true;
       $sStyleReadLab_zona_ = 'display: none;';
       $sStyleReadInp_zona_ = '';
       if (isset($this->nmgp_cmp_readonly['zona_']) && $this->nmgp_cmp_readonly['zona_'] == 'on')
       {
           $bTestReadOnly_zona_ = false;
           unset($this->nmgp_cmp_readonly['zona_']);
           $sStyleReadLab_zona_ = '';
           $sStyleReadInp_zona_ = 'display: none;';
       }
       $this->cod_provincia_ = $this->form_vert_listado_socios[$sc_seq_vert]['cod_provincia_']; 
       $cod_provincia_ = $this->cod_provincia_; 
       $sStyleHidden_cod_provincia_ = '';
       if (isset($sCheckRead_cod_provincia_))
       {
           unset($sCheckRead_cod_provincia_);
       }
       if (isset($this->nmgp_cmp_readonly['cod_provincia_']))
       {
           $sCheckRead_cod_provincia_ = $this->nmgp_cmp_readonly['cod_provincia_'];
       }
       if (isset($this->nmgp_cmp_hidden['cod_provincia_']) && $this->nmgp_cmp_hidden['cod_provincia_'] == 'off')
       {
           unset($this->nmgp_cmp_hidden['cod_provincia_']);
           $sStyleHidden_cod_provincia_ = 'display: none;';
       }
       $bTestReadOnly_cod_provincia_ = true;
       $sStyleReadLab_cod_provincia_ = 'display: none;';
       $sStyleReadInp_cod_provincia_ = '';
       if (isset($this->nmgp_cmp_readonly['cod_provincia_']) && $this->nmgp_cmp_readonly['cod_provincia_'] == 'on')
       {
           $bTestReadOnly_cod_provincia_ = false;
           unset($this->nmgp_cmp_readonly['cod_provincia_']);
           $sStyleReadLab_cod_provincia_ = '';
           $sStyleReadInp_cod_provincia_ = 'display: none;';
       }
       $this->cod_canton_ = $this->form_vert_listado_socios[$sc_seq_vert]['cod_canton_']; 
       $cod_canton_ = $this->cod_canton_; 
       $sStyleHidden_cod_canton_ = '';
       if (isset($sCheckRead_cod_canton_))
       {
           unset($sCheckRead_cod_canton_);
       }
       if (isset($this->nmgp_cmp_readonly['cod_canton_']))
       {
           $sCheckRead_cod_canton_ = $this->nmgp_cmp_readonly['cod_canton_'];
       }
       if (isset($this->nmgp_cmp_hidden['cod_canton_']) && $this->nmgp_cmp_hidden['cod_canton_'] == 'off')
       {
           unset($this->nmgp_cmp_hidden['cod_canton_']);
           $sStyleHidden_cod_canton_ = 'display: none;';
       }
       $bTestReadOnly_cod_canton_ = true;
       $sStyleReadLab_cod_canton_ = 'display: none;';
       $sStyleReadInp_cod_canton_ = '';
       if (isset($this->nmgp_cmp_readonly['cod_canton_']) && $this->nmgp_cmp_readonly['cod_canton_'] == 'on')
       {
           $bTestReadOnly_cod_canton_ = false;
           unset($this->nmgp_cmp_readonly['cod_canton_']);
           $sStyleReadLab_cod_canton_ = '';
           $sStyleReadInp_cod_canton_ = 'display: none;';
       }
       $this->cod_parroquia_ = $this->form_vert_listado_socios[$sc_seq_vert]['cod_parroquia_']; 
       $cod_parroquia_ = $this->cod_parroquia_; 
       $sStyleHidden_cod_parroquia_ = '';
       if (isset($sCheckRead_cod_parroquia_))
       {
           unset($sCheckRead_cod_parroquia_);
       }
       if (isset($this->nmgp_cmp_readonly['cod_parroquia_']))
       {
           $sCheckRead_cod_parroquia_ = $this->nmgp_cmp_readonly['cod_parroquia_'];
       }
       if (isset($this->nmgp_cmp_hidden['cod_parroquia_']) && $this->nmgp_cmp_hidden['cod_parroquia_'] == 'off')
       {
           unset($this->nmgp_cmp_hidden['cod_parroquia_']);
           $sStyleHidden_cod_parroquia_ = 'display: none;';
       }
       $bTestReadOnly_cod_parroquia_ = true;
       $sStyleReadLab_cod_parroquia_ = 'display: none;';
       $sStyleReadInp_cod_parroquia_ = '';
       if (isset($this->nmgp_cmp_readonly['cod_parroquia_']) && $this->nmgp_cmp_readonly['cod_parroquia_'] == 'on')
       {
           $bTestReadOnly_cod_parroquia_ = false;
           unset($this->nmgp_cmp_readonly['cod_parroquia_']);
           $sStyleReadLab_cod_parroquia_ = '';
           $sStyleReadInp_cod_parroquia_ = 'display: none;';
       }
       $this->estado_ = $this->form_vert_listado_socios[$sc_seq_vert]['estado_']; 
       $estado_ = $this->estado_; 
       $sStyleHidden_estado_ = '';
       if (isset($sCheckRead_estado_))
       {
           unset($sCheckRead_estado_);
       }
       if (isset($this->nmgp_cmp_readonly['estado_']))
       {
           $sCheckRead_estado_ = $this->nmgp_cmp_readonly['estado_'];
       }
       if (isset($this->nmgp_cmp_hidden['estado_']) && $this->nmgp_cmp_hidden['estado_'] == 'off')
       {
           unset($this->nmgp_cmp_hidden['estado_']);
           $sStyleHidden_estado_ = 'display: none;';
       }
       $bTestReadOnly_estado_ = true;
       $sStyleReadLab_estado_ = 'display: none;';
       $sStyleReadInp_estado_ = '';
       if (isset($this->nmgp_cmp_readonly['estado_']) && $this->nmgp_cmp_readonly['estado_'] == 'on')
       {
           $bTestReadOnly_estado_ = false;
           unset($this->nmgp_cmp_readonly['estado_']);
           $sStyleReadLab_estado_ = '';
           $sStyleReadInp_estado_ = 'display: none;';
       }
       $this->nacionalidad_ = $this->form_vert_listado_socios[$sc_seq_vert]['nacionalidad_']; 
       $nacionalidad_ = $this->nacionalidad_; 
       $sStyleHidden_nacionalidad_ = '';
       if (isset($sCheckRead_nacionalidad_))
       {
           unset($sCheckRead_nacionalidad_);
       }
       if (isset($this->nmgp_cmp_readonly['nacionalidad_']))
       {
           $sCheckRead_nacionalidad_ = $this->nmgp_cmp_readonly['nacionalidad_'];
       }
       if (isset($this->nmgp_cmp_hidden['nacionalidad_']) && $this->nmgp_cmp_hidden['nacionalidad_'] == 'off')
       {
           unset($this->nmgp_cmp_hidden['nacionalidad_']);
           $sStyleHidden_nacionalidad_ = 'display: none;';
       }
       $bTestReadOnly_nacionalidad_ = true;
       $sStyleReadLab_nacionalidad_ = 'display: none;';
       $sStyleReadInp_nacionalidad_ = '';
       if (isset($this->nmgp_cmp_readonly['nacionalidad_']) && $this->nmgp_cmp_readonly['nacionalidad_'] == 'on')
       {
           $bTestReadOnly_nacionalidad_ = false;
           unset($this->nmgp_cmp_readonly['nacionalidad_']);
           $sStyleReadLab_nacionalidad_ = '';
           $sStyleReadInp_nacionalidad_ = 'display: none;';
       }
       $this->btn_editar_ = $this->form_vert_listado_socios[$sc_seq_vert]['btn_editar_']; 
       $btn_editar_ = $this->btn_editar_; 
       $sStyleHidden_btn_editar_ = '';
       if (isset($sCheckRead_btn_editar_))
       {
           unset($sCheckRead_btn_editar_);
       }
       if (isset($this->nmgp_cmp_readonly['btn_editar_']))
       {
           $sCheckRead_btn_editar_ = $this->nmgp_cmp_readonly['btn_editar_'];
       }
       if (isset($this->nmgp_cmp_hidden['btn_editar_']) && $this->nmgp_cmp_hidden['btn_editar_'] == 'off')
       {
           unset($this->nmgp_cmp_hidden['btn_editar_']);
           $sStyleHidden_btn_editar_ = 'display: none;';
       }
       $bTestReadOnly_btn_editar_ = true;
       $sStyleReadLab_btn_editar_ = 'display: none;';
       $sStyleReadInp_btn_editar_ = '';
       if (isset($this->nmgp_cmp_readonly['btn_editar_']) && $this->nmgp_cmp_readonly['btn_editar_'] == 'on')
       {
           $bTestReadOnly_btn_editar_ = false;
           unset($this->nmgp_cmp_readonly['btn_editar_']);
           $sStyleReadLab_btn_editar_ = '';
           $sStyleReadInp_btn_editar_ = 'display: none;';
       }

       $nm_cor_fun_vert = ($nm_cor_fun_vert == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
       $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);

       $sHideNewLine = '';
?>   
   <tr id="idVertRow<?php echo $sc_seq_vert; ?>"<?php echo $sHideNewLine; ?>>


   
    <TD class="scFormDataOddMult"  id="hidden_field_data_sc_seq<?php echo $sc_seq_vert; ?>" > <?php echo $sc_seq_vert; ?> </TD>
   
   <?php if ($this->Embutida_form) {?>
    <TD class="scFormDataOddMult"  id="hidden_field_data_sc_actions<?php echo $sc_seq_vert; ?>" NOWRAP> <?php if ($this->nmgp_botoes['delete'] == "on" && $this->nmgp_opcao != "novo") {?>
<?php echo nmButtonOutput($this->arr_buttons, "bmd_excluir", "nm_atualiza_line('excluir', " . $sc_seq_vert . ")", "nm_atualiza_line('excluir', " . $sc_seq_vert . ")", "sc_exc_line_" . $sc_seq_vert . "", "", "", "display: ''", "", "", "", $this->Ini->path_botoes, "", "", "", "");?>
<?php }?>

<?php
if ($this->nmgp_botoes['update'] == "on" && $this->nmgp_opcao != "novo") {
    if ($this->Embutida_ronly) {
?>
<?php echo nmButtonOutput($this->arr_buttons, "bmd_edit", "mdOpenLine(" . $sc_seq_vert . ")", "mdOpenLine(" . $sc_seq_vert . ")", "sc_open_line_" . $sc_seq_vert . "", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "");?>
<?php
        $sButDisp = 'display: none';
    }
    else
    {
        $sButDisp = '';
    }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bmd_alterar", "findPos(this); nm_atualiza_line('alterar', " . $sc_seq_vert . ")", "findPos(this); nm_atualiza_line('alterar', " . $sc_seq_vert . ")", "sc_upd_line_" . $sc_seq_vert . "", "", "", "" . $sButDisp. "", "", "", "", $this->Ini->path_botoes, "", "", "", "");?>
<?php
}
?>

<?php if ($this->nmgp_botoes['insert'] == "on" && $this->nmgp_opcao == "novo") {?>
<?php echo nmButtonOutput($this->arr_buttons, "bmd_incluir", "findPos(this); nm_atualiza_line('incluir', " . $sc_seq_vert . ")", "findPos(this); nm_atualiza_line('incluir', " . $sc_seq_vert . ")", "sc_ins_line_" . $sc_seq_vert . "", "", "", "display: ''", "", "", "", $this->Ini->path_botoes, "", "", "", "");?>
<?php if ($this->nmgp_botoes['delete'] == "on") {?>
<?php echo nmButtonOutput($this->arr_buttons, "bmd_excluir", "nm_atualiza_line('excluir', " . $sc_seq_vert . ")", "nm_atualiza_line('excluir', " . $sc_seq_vert . ")", "sc_exc_line_" . $sc_seq_vert . "", "", "", "display: none", "", "", "", $this->Ini->path_botoes, "", "", "", "");?>
<?php }?>

<?php if ($Line_Add && $this->Embutida_ronly) {?>
<?php echo nmButtonOutput($this->arr_buttons, "bmd_edit", "mdOpenLine(" . $sc_seq_vert . ")", "mdOpenLine(" . $sc_seq_vert . ")", "sc_open_line_" . $sc_seq_vert . "", "", "", "display: none", "", "", "", $this->Ini->path_botoes, "", "", "", "");?>
<?php }?>

<?php if ($this->nmgp_botoes['update'] == "on") {?>
<?php echo nmButtonOutput($this->arr_buttons, "bmd_alterar", "findPos(this); nm_atualiza_line('alterar', " . $sc_seq_vert . ")", "findPos(this); nm_atualiza_line('alterar', " . $sc_seq_vert . ")", "sc_upd_line_" . $sc_seq_vert . "", "", "", "display: none", "", "", "", $this->Ini->path_botoes, "", "", "", "");?>
<?php }?>
<?php }?>
<?php if ($this->nmgp_botoes['insert'] == "on") {?>
<?php echo nmButtonOutput($this->arr_buttons, "bmd_novo", "do_ajax_listado_socios_add_new_line(" . $sc_seq_vert . ")", "do_ajax_listado_socios_add_new_line(" . $sc_seq_vert . ")", "sc_new_line_" . $sc_seq_vert . "", "", "", "display: none", "", "", "", $this->Ini->path_botoes, "", "", "", "");?>
<?php }?>
<?php
  $Style_add_line = (!$Line_Add) ? "display: none" : "";
?>
<?php echo nmButtonOutput($this->arr_buttons, "bmd_cancelar", "do_ajax_listado_socios_cancel_insert(" . $sc_seq_vert . ")", "do_ajax_listado_socios_cancel_insert(" . $sc_seq_vert . ")", "sc_canceli_line_" . $sc_seq_vert . "", "", "", "" . $Style_add_line . "", "", "", "", $this->Ini->path_botoes, "", "", "", "");?>
<?php echo nmButtonOutput($this->arr_buttons, "bmd_cancelar", "do_ajax_listado_socios_cancel_update(" . $sc_seq_vert . ")", "do_ajax_listado_socios_cancel_update(" . $sc_seq_vert . ")", "sc_cancelu_line_" . $sc_seq_vert . "", "", "", "display: none", "", "", "", $this->Ini->path_botoes, "", "", "", "");?>
 </TD>
   <?php }?>
   <?php if (isset($this->nmgp_cmp_hidden['btn_eliminar_']) && $this->nmgp_cmp_hidden['btn_eliminar_'] == 'off') { $sc_hidden_yes++;  ?>
<input type=hidden name="btn_eliminar_<?php echo $sc_seq_vert ?>" value="<?php echo NM_encode_input($btn_eliminar_) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOddMult" id="hidden_field_data_btn_eliminar_<?php echo $sc_seq_vert; ?>" style="<?php echo $sStyleHidden_btn_eliminar_; ?>;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOddMult" style=";;vertical-align: top;padding: 0px"><?php
          if (!is_file($this->Ini->root  . $this->Ini->path_imag_cab . "/grp__NM__eliminar.gif"))
          { 
              $btn_eliminar_ = "&nbsp;" ;  
          } 
          else 
          { 
              $btn_eliminar_ = "<img border=\"0\" src=\"" . $this->Ini->path_imag_cab . "/grp__NM__eliminar.gif\"/>" ; 
          } 
?>
<span id="id_imghtml_btn_eliminar_<?php echo $sc_seq_vert; ?>"><a href="javascript:nm_gp_submit('<?php echo $this->Ini->link_confirmar_eliminacion_socios_edit . "', '$this->nm_location', 'cod_u_organizaciones_aux*scin" . $_SESSION['sc_session'][$this->Ini->sc_page]['listado_socios']['dados_form'][$sc_seq_vert]['cod_u_organizaciones_'] . "*scoutcod_socio*scin" . $_SESSION['sc_session'][$this->Ini->sc_page]['listado_socios']['dados_form'][$sc_seq_vert]['cod_socios_'] . "*scoutNM_btn_insert*scinS*scoutNM_btn_update*scinS*scoutNM_btn_delete*scinS*scoutNM_btn_navega*scinN*scoutNMSC_modal*scinok*scout', '', 'modal', '440', '1000')\"><font color=\"" . $this->Ini->cor_link_dados . "\">" . $btn_eliminar_ ; ?></font></a></span>
<?php if ($bTestReadOnly_btn_eliminar_ && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["btn_eliminar_"]) &&  $this->nmgp_cmp_readonly["btn_eliminar_"] == "on") { 

 ?>
<input type=hidden name="btn_eliminar_<?php echo $sc_seq_vert ?>" value="<?php echo NM_encode_input($btn_eliminar_) . "\">" . $btn_eliminar_ . ""; ?>
<?php } else { ?>
<span id="id_read_on_btn_eliminar_<?php echo $sc_seq_vert ?>" class="sc-ui-readonly-btn_eliminar_<?php echo $sc_seq_vert ?>" style=";<?php echo $sStyleReadLab_btn_eliminar_; ?>"><?php echo NM_encode_input($this->btn_eliminar_); ?></span><span id="id_read_off_btn_eliminar_<?php echo $sc_seq_vert ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_btn_eliminar_; ?>"></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_btn_eliminar_<?php echo $sc_seq_vert; ?>_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_btn_eliminar_<?php echo $sc_seq_vert; ?>_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php if (isset($this->nmgp_cmp_hidden['cod_u_organizaciones_']) && $this->nmgp_cmp_hidden['cod_u_organizaciones_'] == 'off') { $sc_hidden_yes++;  ?>
<input type=hidden name="cod_u_organizaciones_<?php echo $sc_seq_vert ?>" value="<?php echo NM_encode_input($cod_u_organizaciones_) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOddMult" id="hidden_field_data_cod_u_organizaciones_<?php echo $sc_seq_vert; ?>" style="<?php echo $sStyleHidden_cod_u_organizaciones_; ?>;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOddMult" style=";;vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly_cod_u_organizaciones_ && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["cod_u_organizaciones_"]) &&  $this->nmgp_cmp_readonly["cod_u_organizaciones_"] == "on") { 

 ?>
<input type=hidden name="cod_u_organizaciones_<?php echo $sc_seq_vert ?>" value="<?php echo NM_encode_input($cod_u_organizaciones_) . "\">" . $cod_u_organizaciones_ . ""; ?>
<?php } else { ?>
<span id="id_read_on_cod_u_organizaciones_<?php echo $sc_seq_vert ?>" class="sc-ui-readonly-cod_u_organizaciones_<?php echo $sc_seq_vert ?>" style=";<?php echo $sStyleReadLab_cod_u_organizaciones_; ?>"><?php echo NM_encode_input($this->cod_u_organizaciones_); ?></span><span id="id_read_off_cod_u_organizaciones_<?php echo $sc_seq_vert ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_cod_u_organizaciones_; ?>">
 <input class="sc-js-input scFormObjectOddMult" style="text-align:left;" id="id_sc_field_cod_u_organizaciones_<?php echo $sc_seq_vert ?>" type=text name="cod_u_organizaciones_<?php echo $sc_seq_vert ?>" value="<?php echo NM_encode_input($cod_u_organizaciones_) ?>"
 size=11 maxlength=11 alt="{datatype: 'text', maxLength: 11, allowedChars: '', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddMultWm', maskChars: '(){}[].,;:-+/ '}"></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_cod_u_organizaciones_<?php echo $sc_seq_vert; ?>_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_cod_u_organizaciones_<?php echo $sc_seq_vert; ?>_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php if (isset($this->nmgp_cmp_hidden['cedula_']) && $this->nmgp_cmp_hidden['cedula_'] == 'off') { $sc_hidden_yes++;  ?>
<input type=hidden name="cedula_<?php echo $sc_seq_vert ?>" value="<?php echo NM_encode_input($cedula_) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOddMult" id="hidden_field_data_cedula_<?php echo $sc_seq_vert; ?>" style="<?php echo $sStyleHidden_cedula_; ?>text-align:center;vertical-align:middle;width:15px;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOddMult" style="text-align:center;vertical-align:middle;width:15px;padding: 0px">
<?php if ($bTestReadOnly_cedula_ && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["cedula_"]) &&  $this->nmgp_cmp_readonly["cedula_"] == "on") { 

 ?>
<input type=hidden name="cedula_<?php echo $sc_seq_vert ?>" value="<?php echo NM_encode_input($cedula_) . "\">" . $cedula_ . ""; ?>
<?php } else { ?>
<span id="id_read_on_cedula_<?php echo $sc_seq_vert ?>" class="sc-ui-readonly-cedula_<?php echo $sc_seq_vert ?>" style="text-align:center;vertical-align:middle;width:15px;<?php echo $sStyleReadLab_cedula_; ?>"><?php echo NM_encode_input($this->cedula_); ?></span><span id="id_read_off_cedula_<?php echo $sc_seq_vert ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_cedula_; ?>">
 <input class="sc-js-input scFormObjectOddMult" style="text-align:center;vertical-align:middle;width:15px;" id="id_sc_field_cedula_<?php echo $sc_seq_vert ?>" type=text name="cedula_<?php echo $sc_seq_vert ?>" value="<?php echo NM_encode_input($cedula_) ?>"
 size=15 maxlength=20 alt="{datatype: 'text', maxLength: 20, allowedChars: '', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddMultWm', maskChars: '(){}[].,;:-+/ '}"></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_cedula_<?php echo $sc_seq_vert; ?>_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_cedula_<?php echo $sc_seq_vert; ?>_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php if (isset($this->nmgp_cmp_hidden['apellidos_']) && $this->nmgp_cmp_hidden['apellidos_'] == 'off') { $sc_hidden_yes++;  ?>
<input type=hidden name="apellidos_<?php echo $sc_seq_vert ?>" value="<?php echo NM_encode_input($apellidos_) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOddMult" id="hidden_field_data_apellidos_<?php echo $sc_seq_vert; ?>" style="<?php echo $sStyleHidden_apellidos_; ?>;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOddMult" style=";;vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly_apellidos_ && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["apellidos_"]) &&  $this->nmgp_cmp_readonly["apellidos_"] == "on") { 

 ?>
<input type=hidden name="apellidos_<?php echo $sc_seq_vert ?>" value="<?php echo NM_encode_input($apellidos_) . "\">" . $apellidos_ . ""; ?>
<?php } else { ?>
<span id="id_read_on_apellidos_<?php echo $sc_seq_vert ?>" class="sc-ui-readonly-apellidos_<?php echo $sc_seq_vert ?>" style=";<?php echo $sStyleReadLab_apellidos_; ?>"><?php echo NM_encode_input($this->apellidos_); ?></span><span id="id_read_off_apellidos_<?php echo $sc_seq_vert ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_apellidos_; ?>">
 <input class="sc-js-input scFormObjectOddMult" style=";" id="id_sc_field_apellidos_<?php echo $sc_seq_vert ?>" type=text name="apellidos_<?php echo $sc_seq_vert ?>" value="<?php echo NM_encode_input($apellidos_) ?>"
 size=50 maxlength=50 alt="{datatype: 'text', maxLength: 50, allowedChars: '', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddMultWm', maskChars: '(){}[].,;:-+/ '}"></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_apellidos_<?php echo $sc_seq_vert; ?>_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_apellidos_<?php echo $sc_seq_vert; ?>_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php if (isset($this->nmgp_cmp_hidden['zona_']) && $this->nmgp_cmp_hidden['zona_'] == 'off') { $sc_hidden_yes++;  ?>
<input type=hidden name="zona_<?php echo $sc_seq_vert ?>" value="<?php echo NM_encode_input($zona_) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOddMult" id="hidden_field_data_zona_<?php echo $sc_seq_vert; ?>" style="<?php echo $sStyleHidden_zona_; ?>text-align:center;vertical-align:middle;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOddMult" style="text-align:center;vertical-align:middle;padding: 0px">
<?php if ($bTestReadOnly_zona_ && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["zona_"]) &&  $this->nmgp_cmp_readonly["zona_"] == "on") { 

 ?>
<input type=hidden name="zona_<?php echo $sc_seq_vert ?>" value="<?php echo NM_encode_input($zona_) . "\">" . $zona_ . ""; ?>
<?php } else { ?>
<span id="id_read_on_zona_<?php echo $sc_seq_vert ?>" class="sc-ui-readonly-zona_<?php echo $sc_seq_vert ?>" style="text-align:center;vertical-align:middle;<?php echo $sStyleReadLab_zona_; ?>"><?php echo NM_encode_input($this->zona_); ?></span><span id="id_read_off_zona_<?php echo $sc_seq_vert ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_zona_; ?>">
 <input class="sc-js-input scFormObjectOddMult" style="text-align:center;vertical-align:middle;" id="id_sc_field_zona_<?php echo $sc_seq_vert ?>" type=text name="zona_<?php echo $sc_seq_vert ?>" value="<?php echo NM_encode_input($zona_) ?>"
 size=11 alt="{datatype: 'integer', maxLength: 11, thousandsSep: '<?php echo str_replace("'", "\'", $this->field_config['zona_']['symbol_grp']); ?>', thousandsFormat: <?php echo $this->field_config['zona_']['symbol_fmt']; ?>, allowNegative: false, onlyNegative: false, alignment: 'center', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddMultWm', maskChars: '(){}[].,;:-+/ '}"></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_zona_<?php echo $sc_seq_vert; ?>_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_zona_<?php echo $sc_seq_vert; ?>_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php if (isset($this->nmgp_cmp_hidden['cod_provincia_']) && $this->nmgp_cmp_hidden['cod_provincia_'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="cod_provincia_<?php echo $sc_seq_vert ?>" value="<?php echo NM_encode_input($this->cod_provincia_) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOddMult" id="hidden_field_data_cod_provincia_<?php echo $sc_seq_vert; ?>" style="<?php echo $sStyleHidden_cod_provincia_; ?>;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOddMult" style=";;vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly_cod_provincia_ && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["cod_provincia_"]) &&  $this->nmgp_cmp_readonly["cod_provincia_"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['listado_socios']['Lookup_cod_provincia_']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['listado_socios']['Lookup_cod_provincia_'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['listado_socios']['Lookup_cod_provincia_']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['listado_socios']['Lookup_cod_provincia_'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['listado_socios']['Lookup_cod_provincia_']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['listado_socios']['Lookup_cod_provincia_'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['listado_socios']['Lookup_cod_provincia_']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['listado_socios']['Lookup_cod_provincia_'] = array(); 
    }

   $old_value_zona_ = $this->zona_;
   $this->nm_tira_formatacao();


   $unformatted_value_zona_ = $this->zona_;

   $nm_comando = "SELECT cod_provincia, provincia 
FROM u_provincia 
ORDER BY provincia";

   $this->zona_ = $old_value_zona_;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando)) 
   {
       while (!$rs->EOF) 
       { 
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['listado_socios']['Lookup_cod_provincia_'][] = $rs->fields[0];
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
   $cod_provincia__look = ""; 
   $todo = explode("?@?", trim($nmgp_def_dados)) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->cod_provincia__1))
          {
              foreach ($this->cod_provincia__1 as $tmp_cod_provincia_)
              {
                  if (trim($tmp_cod_provincia_) === trim($cadaselect[1])) { $cod_provincia__look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->cod_provincia_) === trim($cadaselect[1])) { $cod_provincia__look .= $cadaselect[0]; } 
          $x++; 
   }

?>
<input type=hidden name="cod_provincia_<?php echo $sc_seq_vert ?>" value="<?php echo NM_encode_input($cod_provincia_) . "\">" . $cod_provincia__look . ""; ?>
<?php } else { ?>
 
<?php  
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['listado_socios']['Lookup_cod_provincia_']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['listado_socios']['Lookup_cod_provincia_'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['listado_socios']['Lookup_cod_provincia_']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['listado_socios']['Lookup_cod_provincia_'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['listado_socios']['Lookup_cod_provincia_']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['listado_socios']['Lookup_cod_provincia_'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['listado_socios']['Lookup_cod_provincia_']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['listado_socios']['Lookup_cod_provincia_'] = array(); 
    }

   $old_value_zona_ = $this->zona_;
   $this->nm_tira_formatacao();


   $unformatted_value_zona_ = $this->zona_;

   $nm_comando = "SELECT cod_provincia, provincia 
FROM u_provincia 
ORDER BY provincia";

   $this->zona_ = $old_value_zona_;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando)) 
   {
       while (!$rs->EOF) 
       { 
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['listado_socios']['Lookup_cod_provincia_'][] = $rs->fields[0];
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
   $cod_provincia__look = ""; 
   $todo = explode("?@?", trim($nmgp_def_dados)) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->cod_provincia__1))
          {
              foreach ($this->cod_provincia__1 as $tmp_cod_provincia_)
              {
                  if (trim($tmp_cod_provincia_) === trim($cadaselect[1])) { $cod_provincia__look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->cod_provincia_) === trim($cadaselect[1])) { $cod_provincia__look .= $cadaselect[0]; } 
          $x++; 
   }
   $x = 0; 
   echo "<span id=\"id_read_on_cod_provincia_" . $sc_seq_vert . "\" style=\";" .  $sStyleReadLab_cod_provincia_ . "\">" . NM_encode_input($cod_provincia__look) . "</span><span id=\"id_read_off_cod_provincia_" . $sc_seq_vert . "\" style=\"" . $sStyleReadInp_cod_provincia_ . "\">";
   echo " <span id=\"idAjaxSelect_cod_provincia_" .  $sc_seq_vert . "\"><select class=\"sc-js-input scFormObjectOddMult\" style=\";\" id=\"id_sc_field_cod_provincia_" . $sc_seq_vert . "\" name=\"cod_provincia_" . $sc_seq_vert . "\" size=1>" ; 
   echo "\r" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->cod_provincia_) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->cod_provincia_)) 
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
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_cod_provincia_<?php echo $sc_seq_vert; ?>_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_cod_provincia_<?php echo $sc_seq_vert; ?>_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php if (isset($this->nmgp_cmp_hidden['cod_canton_']) && $this->nmgp_cmp_hidden['cod_canton_'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="cod_canton_<?php echo $sc_seq_vert ?>" value="<?php echo NM_encode_input($this->cod_canton_) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOddMult" id="hidden_field_data_cod_canton_<?php echo $sc_seq_vert; ?>" style="<?php echo $sStyleHidden_cod_canton_; ?>;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOddMult" style=";;vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly_cod_canton_ && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["cod_canton_"]) &&  $this->nmgp_cmp_readonly["cod_canton_"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['listado_socios']['Lookup_cod_canton_']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['listado_socios']['Lookup_cod_canton_'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['listado_socios']['Lookup_cod_canton_']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['listado_socios']['Lookup_cod_canton_'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['listado_socios']['Lookup_cod_canton_']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['listado_socios']['Lookup_cod_canton_'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['listado_socios']['Lookup_cod_canton_']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['listado_socios']['Lookup_cod_canton_'] = array(); 
    }

   $old_value_zona_ = $this->zona_;
   $this->nm_tira_formatacao();


   $unformatted_value_zona_ = $this->zona_;

   $nm_comando = "SELECT cod_canton, canton 
FROM u_canton 
WHERE cod_provincia = '$this->cod_provincia_'
ORDER BY canton";

   $this->zona_ = $old_value_zona_;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando)) 
   {
       while (!$rs->EOF) 
       { 
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['listado_socios']['Lookup_cod_canton_'][] = $rs->fields[0];
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
   $cod_canton__look = ""; 
   $todo = explode("?@?", trim($nmgp_def_dados)) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->cod_canton__1))
          {
              foreach ($this->cod_canton__1 as $tmp_cod_canton_)
              {
                  if (trim($tmp_cod_canton_) === trim($cadaselect[1])) { $cod_canton__look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->cod_canton_) === trim($cadaselect[1])) { $cod_canton__look .= $cadaselect[0]; } 
          $x++; 
   }

?>
<input type=hidden name="cod_canton_<?php echo $sc_seq_vert ?>" value="<?php echo NM_encode_input($cod_canton_) . "\">" . $cod_canton__look . ""; ?>
<?php } else { ?>
 
<?php  
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['listado_socios']['Lookup_cod_canton_']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['listado_socios']['Lookup_cod_canton_'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['listado_socios']['Lookup_cod_canton_']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['listado_socios']['Lookup_cod_canton_'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['listado_socios']['Lookup_cod_canton_']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['listado_socios']['Lookup_cod_canton_'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['listado_socios']['Lookup_cod_canton_']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['listado_socios']['Lookup_cod_canton_'] = array(); 
    }

   $old_value_zona_ = $this->zona_;
   $this->nm_tira_formatacao();


   $unformatted_value_zona_ = $this->zona_;

   $nm_comando = "SELECT cod_canton, canton 
FROM u_canton 
WHERE cod_provincia = '$this->cod_provincia_'
ORDER BY canton";

   $this->zona_ = $old_value_zona_;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando)) 
   {
       while (!$rs->EOF) 
       { 
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['listado_socios']['Lookup_cod_canton_'][] = $rs->fields[0];
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
   $cod_canton__look = ""; 
   $todo = explode("?@?", trim($nmgp_def_dados)) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->cod_canton__1))
          {
              foreach ($this->cod_canton__1 as $tmp_cod_canton_)
              {
                  if (trim($tmp_cod_canton_) === trim($cadaselect[1])) { $cod_canton__look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->cod_canton_) === trim($cadaselect[1])) { $cod_canton__look .= $cadaselect[0]; } 
          $x++; 
   }
   $x = 0; 
   echo "<span id=\"id_read_on_cod_canton_" . $sc_seq_vert . "\" style=\";" .  $sStyleReadLab_cod_canton_ . "\">" . NM_encode_input($cod_canton__look) . "</span><span id=\"id_read_off_cod_canton_" . $sc_seq_vert . "\" style=\"" . $sStyleReadInp_cod_canton_ . "\">";
   echo " <span id=\"idAjaxSelect_cod_canton_" .  $sc_seq_vert . "\"><select class=\"sc-js-input scFormObjectOddMult\" style=\";\" id=\"id_sc_field_cod_canton_" . $sc_seq_vert . "\" name=\"cod_canton_" . $sc_seq_vert . "\" size=1>" ; 
   echo "\r" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->cod_canton_) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->cod_canton_)) 
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
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_cod_canton_<?php echo $sc_seq_vert; ?>_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_cod_canton_<?php echo $sc_seq_vert; ?>_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php if (isset($this->nmgp_cmp_hidden['cod_parroquia_']) && $this->nmgp_cmp_hidden['cod_parroquia_'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="cod_parroquia_<?php echo $sc_seq_vert ?>" value="<?php echo NM_encode_input($this->cod_parroquia_) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOddMult" id="hidden_field_data_cod_parroquia_<?php echo $sc_seq_vert; ?>" style="<?php echo $sStyleHidden_cod_parroquia_; ?>;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOddMult" style=";;vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly_cod_parroquia_ && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["cod_parroquia_"]) &&  $this->nmgp_cmp_readonly["cod_parroquia_"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['listado_socios']['Lookup_cod_parroquia_']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['listado_socios']['Lookup_cod_parroquia_'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['listado_socios']['Lookup_cod_parroquia_']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['listado_socios']['Lookup_cod_parroquia_'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['listado_socios']['Lookup_cod_parroquia_']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['listado_socios']['Lookup_cod_parroquia_'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['listado_socios']['Lookup_cod_parroquia_']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['listado_socios']['Lookup_cod_parroquia_'] = array(); 
    }

   $old_value_zona_ = $this->zona_;
   $this->nm_tira_formatacao();


   $unformatted_value_zona_ = $this->zona_;

   $nm_comando = "SELECT cod_parroquia, parroquia 
FROM u_parroquia 
WHERE cod_provincia = '$this->cod_provincia_' and cod_canton = '$this->cod_canton_'
ORDER BY parroquia";

   $this->zona_ = $old_value_zona_;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando)) 
   {
       while (!$rs->EOF) 
       { 
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['listado_socios']['Lookup_cod_parroquia_'][] = $rs->fields[0];
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
   $cod_parroquia__look = ""; 
   $todo = explode("?@?", trim($nmgp_def_dados)) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->cod_parroquia__1))
          {
              foreach ($this->cod_parroquia__1 as $tmp_cod_parroquia_)
              {
                  if (trim($tmp_cod_parroquia_) === trim($cadaselect[1])) { $cod_parroquia__look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->cod_parroquia_) === trim($cadaselect[1])) { $cod_parroquia__look .= $cadaselect[0]; } 
          $x++; 
   }

?>
<input type=hidden name="cod_parroquia_<?php echo $sc_seq_vert ?>" value="<?php echo NM_encode_input($cod_parroquia_) . "\">" . $cod_parroquia__look . ""; ?>
<?php } else { ?>
 
<?php  
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['listado_socios']['Lookup_cod_parroquia_']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['listado_socios']['Lookup_cod_parroquia_'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['listado_socios']['Lookup_cod_parroquia_']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['listado_socios']['Lookup_cod_parroquia_'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['listado_socios']['Lookup_cod_parroquia_']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['listado_socios']['Lookup_cod_parroquia_'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['listado_socios']['Lookup_cod_parroquia_']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['listado_socios']['Lookup_cod_parroquia_'] = array(); 
    }

   $old_value_zona_ = $this->zona_;
   $this->nm_tira_formatacao();


   $unformatted_value_zona_ = $this->zona_;

   $nm_comando = "SELECT cod_parroquia, parroquia 
FROM u_parroquia 
WHERE cod_provincia = '$this->cod_provincia_' and cod_canton = '$this->cod_canton_'
ORDER BY parroquia";

   $this->zona_ = $old_value_zona_;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando)) 
   {
       while (!$rs->EOF) 
       { 
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['listado_socios']['Lookup_cod_parroquia_'][] = $rs->fields[0];
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
   $cod_parroquia__look = ""; 
   $todo = explode("?@?", trim($nmgp_def_dados)) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->cod_parroquia__1))
          {
              foreach ($this->cod_parroquia__1 as $tmp_cod_parroquia_)
              {
                  if (trim($tmp_cod_parroquia_) === trim($cadaselect[1])) { $cod_parroquia__look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->cod_parroquia_) === trim($cadaselect[1])) { $cod_parroquia__look .= $cadaselect[0]; } 
          $x++; 
   }
   $x = 0; 
   echo "<span id=\"id_read_on_cod_parroquia_" . $sc_seq_vert . "\" style=\";" .  $sStyleReadLab_cod_parroquia_ . "\">" . NM_encode_input($cod_parroquia__look) . "</span><span id=\"id_read_off_cod_parroquia_" . $sc_seq_vert . "\" style=\"" . $sStyleReadInp_cod_parroquia_ . "\">";
   echo " <span id=\"idAjaxSelect_cod_parroquia_" .  $sc_seq_vert . "\"><select class=\"sc-js-input scFormObjectOddMult\" style=\";\" id=\"id_sc_field_cod_parroquia_" . $sc_seq_vert . "\" name=\"cod_parroquia_" . $sc_seq_vert . "\" size=1>" ; 
   echo "\r" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->cod_parroquia_) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->cod_parroquia_)) 
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
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_cod_parroquia_<?php echo $sc_seq_vert; ?>_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_cod_parroquia_<?php echo $sc_seq_vert; ?>_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php if (isset($this->nmgp_cmp_hidden['estado_']) && $this->nmgp_cmp_hidden['estado_'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="estado_<?php echo $sc_seq_vert ?>" value="<?php echo NM_encode_input($this->estado_) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOddMult" id="hidden_field_data_estado_<?php echo $sc_seq_vert; ?>" style="<?php echo $sStyleHidden_estado_; ?>;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOddMult" style=";;vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly_estado_ && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["estado_"]) &&  $this->nmgp_cmp_readonly["estado_"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['listado_socios']['Lookup_estado_']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['listado_socios']['Lookup_estado_'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['listado_socios']['Lookup_estado_']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['listado_socios']['Lookup_estado_'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['listado_socios']['Lookup_estado_']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['listado_socios']['Lookup_estado_'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['listado_socios']['Lookup_estado_']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['listado_socios']['Lookup_estado_'] = array(); 
    }

   $old_value_zona_ = $this->zona_;
   $this->nm_tira_formatacao();


   $unformatted_value_zona_ = $this->zona_;

   $nm_comando = "SELECT codigo, valor 
FROM catalogo WHERE tipo = 'estado_socio'
ORDER BY valor";

   $this->zona_ = $old_value_zona_;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando)) 
   {
       while (!$rs->EOF) 
       { 
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['listado_socios']['Lookup_estado_'][] = $rs->fields[0];
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
   $estado__look = ""; 
   $todo = explode("?@?", trim($nmgp_def_dados)) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->estado__1))
          {
              foreach ($this->estado__1 as $tmp_estado_)
              {
                  if (trim($tmp_estado_) === trim($cadaselect[1])) { $estado__look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->estado_) === trim($cadaselect[1])) { $estado__look .= $cadaselect[0]; } 
          $x++; 
   }

?>
<input type=hidden name="estado_<?php echo $sc_seq_vert ?>" value="<?php echo NM_encode_input($estado_) . "\">" . $estado__look . ""; ?>
<?php } else { ?>
 
<?php  
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['listado_socios']['Lookup_estado_']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['listado_socios']['Lookup_estado_'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['listado_socios']['Lookup_estado_']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['listado_socios']['Lookup_estado_'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['listado_socios']['Lookup_estado_']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['listado_socios']['Lookup_estado_'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['listado_socios']['Lookup_estado_']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['listado_socios']['Lookup_estado_'] = array(); 
    }

   $old_value_zona_ = $this->zona_;
   $this->nm_tira_formatacao();


   $unformatted_value_zona_ = $this->zona_;

   $nm_comando = "SELECT codigo, valor 
FROM catalogo WHERE tipo = 'estado_socio'
ORDER BY valor";

   $this->zona_ = $old_value_zona_;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando)) 
   {
       while (!$rs->EOF) 
       { 
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['listado_socios']['Lookup_estado_'][] = $rs->fields[0];
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
   $estado__look = ""; 
   $todo = explode("?@?", trim($nmgp_def_dados)) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->estado__1))
          {
              foreach ($this->estado__1 as $tmp_estado_)
              {
                  if (trim($tmp_estado_) === trim($cadaselect[1])) { $estado__look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->estado_) === trim($cadaselect[1])) { $estado__look .= $cadaselect[0]; } 
          $x++; 
   }
   $x = 0; 
   echo "<span id=\"id_read_on_estado_" . $sc_seq_vert . "\" style=\";" .  $sStyleReadLab_estado_ . "\">" . NM_encode_input($estado__look) . "</span><span id=\"id_read_off_estado_" . $sc_seq_vert . "\" style=\"" . $sStyleReadInp_estado_ . "\">";
   echo " <span id=\"idAjaxSelect_estado_" .  $sc_seq_vert . "\"><select class=\"sc-js-input scFormObjectOddMult\" style=\";\" id=\"id_sc_field_estado_" . $sc_seq_vert . "\" name=\"estado_" . $sc_seq_vert . "\" size=1>" ; 
   echo "\r" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->estado_) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->estado_)) 
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
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_estado_<?php echo $sc_seq_vert; ?>_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_estado_<?php echo $sc_seq_vert; ?>_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php if (isset($this->nmgp_cmp_hidden['nacionalidad_']) && $this->nmgp_cmp_hidden['nacionalidad_'] == 'off') { $sc_hidden_yes++;  ?>
<input type=hidden name="nacionalidad_<?php echo $sc_seq_vert ?>" value="<?php echo NM_encode_input($nacionalidad_) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOddMult" id="hidden_field_data_nacionalidad_<?php echo $sc_seq_vert; ?>" style="<?php echo $sStyleHidden_nacionalidad_; ?>;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOddMult" style=";;vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly_nacionalidad_ && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["nacionalidad_"]) &&  $this->nmgp_cmp_readonly["nacionalidad_"] == "on") { 

 ?>
<input type=hidden name="nacionalidad_<?php echo $sc_seq_vert ?>" value="<?php echo NM_encode_input($nacionalidad_) . "\">" . $nacionalidad_ . ""; ?>
<?php } else { ?>
<span id="id_read_on_nacionalidad_<?php echo $sc_seq_vert ?>" class="sc-ui-readonly-nacionalidad_<?php echo $sc_seq_vert ?>" style=";<?php echo $sStyleReadLab_nacionalidad_; ?>"><?php echo NM_encode_input($this->nacionalidad_); ?></span><span id="id_read_off_nacionalidad_<?php echo $sc_seq_vert ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_nacionalidad_; ?>">
 <input class="sc-js-input scFormObjectOddMult" style=";" id="id_sc_field_nacionalidad_<?php echo $sc_seq_vert ?>" type=text name="nacionalidad_<?php echo $sc_seq_vert ?>" value="<?php echo NM_encode_input($nacionalidad_) ?>"
 size=50 maxlength=50 alt="{datatype: 'text', maxLength: 50, allowedChars: '', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddMultWm', maskChars: '(){}[].,;:-+/ '}"></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_nacionalidad_<?php echo $sc_seq_vert; ?>_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_nacionalidad_<?php echo $sc_seq_vert; ?>_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php if (isset($this->nmgp_cmp_hidden['btn_editar_']) && $this->nmgp_cmp_hidden['btn_editar_'] == 'off') { $sc_hidden_yes++;  ?>
<input type=hidden name="btn_editar_<?php echo $sc_seq_vert ?>" value="<?php echo NM_encode_input($btn_editar_) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOddMult" id="hidden_field_data_btn_editar_<?php echo $sc_seq_vert; ?>" style="<?php echo $sStyleHidden_btn_editar_; ?>text-align:center;vertical-align:middle;width:20px;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOddMult" style="text-align:center;vertical-align:middle;width:20px;padding: 0px"><?php
          if (!is_file($this->Ini->root  . $this->Ini->path_imag_cab . "/sys__NM__editar.jpg"))
          { 
              $btn_editar_ = "&nbsp;" ;  
          } 
          elseif ($this->Ini->Gd_missing) 
          { 
              $btn_editar_ = "<span class=\"scFormErrorMessage\">" . $this->Ini->Nm_lang['lang_errm_gd'] . "</span>"; 
          } 
          else 
          { 
              $in_btn_editar_ = $this->Ini->root  . $this->Ini->path_imag_cab . "/sys__NM__editar.jpg"; 
              $img_time = filemtime($this->Ini->root . $this->Ini->path_imag_cab . "/sys__NM__editar.jpg"); 
              $out_btn_editar_ = str_replace("/", "_", $this->Ini->path_imag_cab); 
              $out_btn_editar_ = $this->Ini->path_imag_temp . "/sc_" . $out_btn_editar_ . "_btn_editar__1818_" . $img_time . "_sys__NM__editar.jpg";
              if (!is_file($this->Ini->root . $out_btn_editar_)) 
              {  
                  $sc_obj_img = new nm_trata_img($in_btn_editar_);
                  $sc_obj_img->setWidth(18);
                  $sc_obj_img->setHeight(18);
                  $sc_obj_img->setManterAspecto(true);
                  $sc_obj_img->createImg($this->Ini->root . $out_btn_editar_);
              } 
              $btn_editar_ = "<img border=\"0\" src=\"" . $out_btn_editar_ . "\"/>" ; 
          } 
?>
<span id="id_imghtml_btn_editar_<?php echo $sc_seq_vert; ?>"><a href="javascript:nm_gp_submit('<?php echo $this->Ini->link_form_socios_edit . "', '$this->nm_location', 'cod_socios*scin" . $_SESSION['sc_session'][$this->Ini->sc_page]['listado_socios']['dados_form'][$sc_seq_vert]['cod_socios_'] . "*scoutcod_u_organizaciones_aux*scin" . $_SESSION['sc_session'][$this->Ini->sc_page]['listado_socios']['dados_form'][$sc_seq_vert]['cod_u_organizaciones_'] . "*scoutNM_btn_insert*scinS*scoutNM_btn_update*scinS*scoutNM_btn_delete*scinS*scoutNM_btn_navega*scinN*scoutNMSC_modal*scinok*scout', '', 'modal', '400', '800')\"><font color=\"" . $this->Ini->cor_link_dados . "\">" . $btn_editar_ ; ?></font></a></span>
<?php if ($bTestReadOnly_btn_editar_ && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["btn_editar_"]) &&  $this->nmgp_cmp_readonly["btn_editar_"] == "on") { 

 ?>
<input type=hidden name="btn_editar_<?php echo $sc_seq_vert ?>" value="<?php echo NM_encode_input($btn_editar_) . "\">" . $btn_editar_ . ""; ?>
<?php } else { ?>
<span id="id_read_on_btn_editar_<?php echo $sc_seq_vert ?>" class="sc-ui-readonly-btn_editar_<?php echo $sc_seq_vert ?>" style="text-align:center;vertical-align:middle;width:20px;<?php echo $sStyleReadLab_btn_editar_; ?>"><?php echo NM_encode_input($this->btn_editar_); ?></span><span id="id_read_off_btn_editar_<?php echo $sc_seq_vert ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_btn_editar_; ?>"></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_btn_editar_<?php echo $sc_seq_vert; ?>_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_btn_editar_<?php echo $sc_seq_vert; ?>_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





   </tr>
<?php   
        if (isset($sCheckRead_btn_eliminar_))
       {
           $this->nmgp_cmp_readonly['btn_eliminar_'] = $sCheckRead_btn_eliminar_;
       }
       if ('display: none;' == $sStyleHidden_btn_eliminar_)
       {
           $this->nmgp_cmp_hidden['btn_eliminar_'] = 'off';
       }
       if (isset($sCheckRead_cod_u_organizaciones_))
       {
           $this->nmgp_cmp_readonly['cod_u_organizaciones_'] = $sCheckRead_cod_u_organizaciones_;
       }
       if ('display: none;' == $sStyleHidden_cod_u_organizaciones_)
       {
           $this->nmgp_cmp_hidden['cod_u_organizaciones_'] = 'off';
       }
       if (isset($sCheckRead_cedula_))
       {
           $this->nmgp_cmp_readonly['cedula_'] = $sCheckRead_cedula_;
       }
       if ('display: none;' == $sStyleHidden_cedula_)
       {
           $this->nmgp_cmp_hidden['cedula_'] = 'off';
       }
       if (isset($sCheckRead_apellidos_))
       {
           $this->nmgp_cmp_readonly['apellidos_'] = $sCheckRead_apellidos_;
       }
       if ('display: none;' == $sStyleHidden_apellidos_)
       {
           $this->nmgp_cmp_hidden['apellidos_'] = 'off';
       }
       if (isset($sCheckRead_zona_))
       {
           $this->nmgp_cmp_readonly['zona_'] = $sCheckRead_zona_;
       }
       if ('display: none;' == $sStyleHidden_zona_)
       {
           $this->nmgp_cmp_hidden['zona_'] = 'off';
       }
       if (isset($sCheckRead_cod_provincia_))
       {
           $this->nmgp_cmp_readonly['cod_provincia_'] = $sCheckRead_cod_provincia_;
       }
       if ('display: none;' == $sStyleHidden_cod_provincia_)
       {
           $this->nmgp_cmp_hidden['cod_provincia_'] = 'off';
       }
       if (isset($sCheckRead_cod_canton_))
       {
           $this->nmgp_cmp_readonly['cod_canton_'] = $sCheckRead_cod_canton_;
       }
       if ('display: none;' == $sStyleHidden_cod_canton_)
       {
           $this->nmgp_cmp_hidden['cod_canton_'] = 'off';
       }
       if (isset($sCheckRead_cod_parroquia_))
       {
           $this->nmgp_cmp_readonly['cod_parroquia_'] = $sCheckRead_cod_parroquia_;
       }
       if ('display: none;' == $sStyleHidden_cod_parroquia_)
       {
           $this->nmgp_cmp_hidden['cod_parroquia_'] = 'off';
       }
       if (isset($sCheckRead_estado_))
       {
           $this->nmgp_cmp_readonly['estado_'] = $sCheckRead_estado_;
       }
       if ('display: none;' == $sStyleHidden_estado_)
       {
           $this->nmgp_cmp_hidden['estado_'] = 'off';
       }
       if (isset($sCheckRead_nacionalidad_))
       {
           $this->nmgp_cmp_readonly['nacionalidad_'] = $sCheckRead_nacionalidad_;
       }
       if ('display: none;' == $sStyleHidden_nacionalidad_)
       {
           $this->nmgp_cmp_hidden['nacionalidad_'] = 'off';
       }
       if (isset($sCheckRead_btn_editar_))
       {
           $this->nmgp_cmp_readonly['btn_editar_'] = $sCheckRead_btn_editar_;
       }
       if ('display: none;' == $sStyleHidden_btn_editar_)
       {
           $this->nmgp_cmp_hidden['btn_editar_'] = 'off';
       }

   }
   if ($Line_Add) 
   { 
       $this->New_Line = ob_get_contents();
       ob_end_clean();
       $this->nmgp_opcao = $guarda_nmgp_opcao;
       $this->form_vert_listado_socios = $guarda_form_vert_listado_socios;
   } 
   if ($Table_refresh) 
   { 
       $this->Table_refresh = ob_get_contents();
       ob_end_clean();
   } 
}

function Form_Fim() 
{
   global $sc_seq_vert, $opcao_botoes, $nm_url_saida; 
?>   
</TABLE></div><!-- bloco_f -->
 </div> 
<?php
$iContrVert = $this->Embutida_form ? $sc_seq_vert + 1 : $sc_seq_vert + 1;
if ($sc_seq_vert < $this->sc_max_reg)
{
    echo " <script type=\"text/javascript\">";
    echo "    bRefreshTable = true;";
    echo "</script>";
}
?>
<input type=hidden name="sc_contr_vert" value="<?php echo NM_encode_input($iContrVert); ?>">
<?php
    $sEmptyStyle = 0 == $sc_seq_vert ? '' : 'display: none;';
?>
</td></tr>
<tr id="sc-ui-empty-form" style="<?php echo $sEmptyStyle; ?>"><td class="scFormPageText" style="padding: 10px; text-align: center">
<?php echo $this->Ini->Nm_lang['lang_errm_empt'];
?>
</td></tr> 
<tr><td>
<?php
if ((!$this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['listado_socios']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['listado_socios']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['listado_socios']['run_iframe'] != "R")
{
?>
    <table style="border-collapse: collapse; border-width: 0px; width: 100%"><tr><td class="scFormToolbar" style="padding: 0px; spacing: 0px">
    <table style="border-collapse: collapse; border-width: 0px; width: 100%">
    <tr> 
     <td nowrap align="left" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php
}
if ((!$this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['listado_socios']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['listado_socios']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['listado_socios']['run_iframe'] != "R")
{
    $NM_btn = false;
?> 
     </td> 
     <td nowrap align="center" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php 
        $sCondStyle = ($this->nmgp_botoes['btn_Insertar'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "btn_insertar", "sc_btn_btn_Insertar()", "sc_btn_btn_Insertar()", "sc_btn_Insertar_bot", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "");?>
 
<?php
        $NM_btn = true;
?> 
     </td> 
     <td nowrap align="right" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php 
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['btn_Salir'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "btn_salir", "sc_btn_btn_Salir()", "sc_btn_btn_Salir()", "sc_btn_Salir_bot", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (isset($this->NMSC_modal) && $this->NMSC_modal == "ok") {
        $sCondStyle = '';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bsair", "document.F6.action='" . $nm_url_saida. "'; document.F6.submit(); return false;", "document.F6.action='" . $nm_url_saida. "'; document.F6.submit(); return false;", "sc_b_sai_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
}
if ((!$this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['listado_socios']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['listado_socios']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['listado_socios']['run_iframe'] != "R")
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
</table> 

<div id="id_debug_window" style="display: none; position: absolute; left: 50px; top: 50px"><table class="scFormMessageTable">
<tr><td class="scFormMessageTitle"><?php echo nmButtonOutput($this->arr_buttons, "berrm_clse", "scAjaxHideDebug()", "scAjaxHideDebug()", "", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "");?>
&nbsp;&nbsp;Output</td></tr>
<tr><td class="scFormMessageMessage" style="padding: 0px; vertical-align: top"><div style="padding: 2px; height: 200px; width: 350px; overflow: auto" id="id_debug_text"></div></td></tr>
</table></div>
<script> 
 var iAjaxNewLine = <?php echo $sc_seq_vert; ?>;
 for (var iLine = 1; iLine <= iAjaxNewLine; iLine++) {
  scJQElementsAdd(iLine);
 }
</script> 
<div id="new_line_dummy" style="display: none">
</div>

</form> 
<script> 
<?php
  $nm_sc_blocos_da_pag = array(0);

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
   </td></tr></table>
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
<script>parent.scAjaxDetailStatus("listado_socios");</script>
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
if ($this->lig_edit_lookup && isset($_SESSION['sc_session'][$this->Ini->sc_page]['listado_socios']['sc_modal']) && $_SESSION['sc_session'][$this->Ini->sc_page]['listado_socios']['sc_modal'])
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
<?php 
 } 
} 
?> 
