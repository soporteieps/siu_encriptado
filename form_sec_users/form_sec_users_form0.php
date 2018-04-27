<?php
class form_sec_users_form extends form_sec_users_apl
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
 <TITLE><?php if ('novo' == $this->nmgp_opcao) { echo strip_tags("Mantenimiento de Usuarios"); } else { echo strip_tags("Mantenimiento de Usuarios"); } ?></TITLE>
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
if ($this->Embutida_form && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['sc_modal']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['sc_modal'] && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['sc_redir_atualiz']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['sc_redir_atualiz'] == 'ok')
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
 <style type="text/css">
  #quicksearchph_t {
   position: relative;
  }
  #quicksearchph_t img {
   position: absolute;
   top: 0;
   right: 0;
  }
 </style>
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
include_once("form_sec_users_sajax_js.php");
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
function summary_atualiza(reg_ini, reg_qtd, reg_tot)
{
    nm_sumario = "[<?php echo $this->Ini->Nm_lang['lang_othr_smry_info']?>]";
    nm_sumario = nm_sumario.replace("?start?", reg_ini);
    nm_sumario = nm_sumario.replace("?final?", reg_qtd);
    nm_sumario = nm_sumario.replace("?total?", reg_tot);
    if (reg_qtd < 1) {
        nm_sumario = "";
    }
    document.getElementById("sc_b_summary_b").innerHTML = nm_sumario;
}
function navpage_atualiza(str_navpage)
{
    document.getElementById("sc_b_navpage_b").innerHTML = str_navpage;
}
<?php

include_once('form_sec_users_jquery.php');

?>

 var scQSInit = true;
 var scQSPos = {};
 $(function() {


  scJQGeneralAdd();

  $('#SC_fast_search_t').keyup(function(e) {
   scQuickSearchKeyUp('t', e);
  });

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
     scQuickSearchInit(false, '');
     scQuickSearchKeyUp('t', null);
     scQSInit = false;
   });
   function scQuickSearchSubmit_t() {
     nm_move('fast_search', 't');
   }

   function scQuickSearchInit(bPosOnly, sPos) {
     if (!bPosOnly) {
       if ('' == sPos || 't' == sPos) scQuickSearchSize('SC_fast_search_t', 'SC_fast_search_close_t', 'quicksearchph_t');
     }
   }
   function scQuickSearchSize(sIdInput, sIdClose, sPlaceHolder) {
     var oInput = $('#' + sIdInput),
         oClose = $('#' + sIdClose),
         oPlace = $('#' + sPlaceHolder),
         iInputP = parseInt(oInput.css('padding-right')) || 0,
         iInputB = parseInt(oInput.css('border-right-width')) || 0,
         iCloseW = oClose.width(),
         iInputW = oInput.outerWidth(),
         iPlaceW = oPlace.outerWidth(),
         oInputO = oInput.offset(),
         oPlaceO = oPlace.offset(),
         iNewRight;
     iNewRight = (iPlaceW - iInputW) - (oInputO.left - oPlaceO.left) + iInputB + 1;
     oInput.css({
       'height': Math.max(oInput.height(), 16) + 'px',
       'padding-right': iInputP + 16 + <?php echo $this->Ini->Str_qs_image_padding ?> + 'px'
     });
     oClose.css({
       'right': iNewRight + <?php echo $this->Ini->Str_qs_image_padding ?> + 'px',
       'cursor': 'pointer'
     });
   }
   function scQuickSearchKeyUp(sPos, e) {
     if (null != e) {
       var keyPressed = e.charCode || e.keyCode || e.which;
       if (13 == keyPressed) {
         if ('t' == sPos) scQuickSearchSubmit_t();
       }
     }
   }
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
$str_iframe_body = ('F' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['run_iframe'] || 'R' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['run_iframe']) ? 'margin: 2px;' : '';
 if (isset($_SESSION['nm_aba_bg_color']))
 {
     $this->Ini->cor_bg_grid = $_SESSION['nm_aba_bg_color'];
     $this->Ini->img_fun_pag = $_SESSION['nm_aba_bg_img'];
 }
if ($GLOBALS["erro_incl"] == 1)
{
    $this->nmgp_opcao = "novo";
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['opc_ant'] = "novo";
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['recarga'] = "novo";
}
if (empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['recarga']))
{
    $opcao_botoes = $this->nmgp_opcao;
}
else
{
    $opcao_botoes = $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['recarga'];
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
 include_once("form_sec_users_js0.php");
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
               action="form_sec_users.php" 
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
$int_iframe_padding = ('F' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['run_iframe'] || 'R' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['run_iframe']) ? 0 : "0px";
?>
<?php
$_SESSION['scriptcase']['error_span_title']['form_sec_users'] = $this->Ini->Error_icon_span;
$_SESSION['scriptcase']['error_icon_title']['form_sec_users'] = '' != $this->Ini->Err_ico_title ? $this->Ini->path_icones . '/' . $this->Ini->Err_ico_title : '';
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
<?php
  if (!$this->Embutida_call && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['mostra_cab']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['mostra_cab'] != "N"))
  {
?>
<tr><td>
<style>
#lin1_col1 { padding-left:9px; padding-top:7px;  height:27px; overflow:hidden; text-align:left;}			 
#lin1_col2 { padding-right:9px; padding-top:7px; height:27px; text-align:right; overflow:hidden;   font-size:12px; font-weight:normal;}
</style>

<div style="width: 100%">
 <div class="scFormHeader" style="height:11px; display: block; border-width:0px; "></div>
 <div style="height:37px; border-width:0px 0px 1px 0px;  border-style: dashed; border-color:#ddd; display: block">
 	<table style="width:100%; border-collapse:collapse; padding:0;">
    	<tr>
        	<td id="lin1_col1" class="scFormHeaderFont"><span><?php if ($this->nmgp_opcao == "novo") { echo "Mantenimiento de Usuarios"; } else { echo "Mantenimiento de Usuarios"; } ?></span></td>
            <td id="lin1_col2" class="scFormHeaderFont"><span></span></td>
        </tr>
    </table>		 
 </div>
</div>
</td></tr>
<?php
  }
?>
<tr><td>
<?php
if ((!$this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['run_iframe'] != "R")
{
?>
    <table style="border-collapse: collapse; border-width: 0px; width: 100%"><tr><td class="scFormToolbar" style="padding: 0px; spacing: 0px">
    <table style="border-collapse: collapse; border-width: 0px; width: 100%">
    <tr> 
     <td nowrap align="left" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php
}
if ((!$this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['run_iframe'] != "R")
{
    $NM_btn = false;
      if ($this->nmgp_botoes['qsearch'] == "on" && $opcao_botoes != "novo")
      {
          $OPC_cmp = (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['fast_search'])) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['fast_search'][0] : "";
          $OPC_arg = (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['fast_search'])) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['fast_search'][1] : "";
          $OPC_dat = (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['fast_search'])) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['fast_search'][2] : "";
?> 
           <script type="text/javascript">var change_fast_t = "";</script>
          <input type="hidden" name="nmgp_fast_search_t" value="SC_all_Cmp">
          <input type="hidden" name="nmgp_cond_fast_search_t" value="qp">
          <script type="text/javascript">var scQSInitVal = "<?php echo $OPC_dat ?>";</script>
          <span id="quicksearchph_t">
           <input type="text" id="SC_fast_search_t" class="scFormToolbarInput" style="vertical-align: middle" name="nmgp_arg_fast_search_t" value="<?php echo NM_encode_input($OPC_dat) ?>" size="10" onChange="change_fast_t = 'CH';">
           <img style="position: absolute; display: none; height: 16px; width: 16px" id="SC_fast_search_close_t" src="<?php echo $this->Ini->path_botoes ?>/<?php echo $this->Ini->Img_qs_clean; ?>" onclick="document.getElementById('SC_fast_search_t').value = ''; nm_move('fast_search', 't');">
          </span>
<?php 
        $sCondStyle = '';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bquick_search", "if (change_fast_t == 'CH') {nm_move('fast_search', 't')}", "if (change_fast_t == 'CH') {nm_move('fast_search', 't')}", "fast_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "");?>
 
<?php
      }
?> 
     </td> 
     <td nowrap align="center" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php 
    if ($this->Embutida_form) {
        $sCondStyle = ($this->nmgp_botoes['new'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bnovo", "do_ajax_form_sec_users_add_new_line(); return false;", "do_ajax_form_sec_users_add_new_line(); return false;", "sc_b_new_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes != "novo") && (!isset($this->Grid_editavel) || !$this->Grid_editavel) && (!$this->Embutida_form) && (!$this->Embutida_call || $this->Embutida_multi)) {
        $sCondStyle = ($this->nmgp_botoes['new'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bnovo", "nm_move ('novo'); return false;", "nm_move ('novo'); return false;", "sc_b_new_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes == "novo") && (!isset($this->Grid_editavel) || !$this->Grid_editavel) && (!$this->Embutida_form) && (!$this->Embutida_call || $this->Embutida_multi)) {
        $sCondStyle = ($this->nmgp_botoes['insert'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bincluir", "nm_atualiza ('incluir'); return false;", "nm_atualiza ('incluir'); return false;", "sc_b_ins_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes == "novo") && (!$this->Embutida_call || $this->sc_evento == "novo" || $this->sc_evento == "insert" || $this->sc_evento == "incluir")) {
        $sCondStyle = ($this->nmgp_botoes['insert'] == "on") && ($this->nm_flag_saida_novo != "S" || $this->nmgp_botoes['exit'] != "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bcancelar", "document.F5.submit();return false;", "document.F5.submit();return false;", "sc_b_sai_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes != "novo") && (!isset($this->Grid_editavel) || !$this->Grid_editavel) && (!$this->Embutida_form) && (!$this->Embutida_call || $this->Embutida_multi)) {
        $sCondStyle = ($this->nmgp_botoes['update'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "balterar", "nm_atualiza ('alterar'); return false;", "nm_atualiza ('alterar'); return false;", "sc_b_upd_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
?> 
     </td> 
     <td nowrap align="right" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php 
    if ('' != $this->url_webhelp) {
        $sCondStyle = '';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bhelp", "window.open('" . $this->url_webhelp. "', '', 'resizable, scrollbars'); ", "window.open('" . $this->url_webhelp. "', '', 'resizable, scrollbars'); ", "", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes == "novo") && (isset($_SESSION['scriptcase']['nm_sc_retorno']) && !empty($_SESSION['scriptcase']['nm_sc_retorno']) && ($nm_apl_dependente != 1 || $this->nm_Start_new) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['run_iframe'] != "R") && (!$this->Embutida_call)) {
        $sCondStyle = (($this->nm_flag_saida_novo == "S" || ($this->nm_Start_new && !$this->aba_iframe)) && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bvoltar", "document.F5.action='" . $nm_url_saida. "'; document.F5.submit();return false;", "document.F5.action='" . $nm_url_saida. "'; document.F5.submit();return false;", "sc_b_sai_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes == "novo") && (!isset($_SESSION['scriptcase']['nm_sc_retorno']) || empty($_SESSION['scriptcase']['nm_sc_retorno']) || $nm_apl_dependente == 1 || $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['run_iframe'] == "R") && (!$this->Embutida_call)) {
        $sCondStyle = ($this->nm_flag_saida_novo == "S" && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bvoltar", "document.F5.action='" . $nm_url_saida. "'; document.F5.submit();return false;", "document.F5.action='" . $nm_url_saida. "'; document.F5.submit();return false;", "sc_b_sai_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes != "novo") && (!$this->Embutida_call)) {
        $sCondStyle = (isset($_SESSION['scriptcase']['nm_sc_retorno']) && !empty($_SESSION['scriptcase']['nm_sc_retorno']) && $nm_apl_dependente != 1 && $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['run_iframe'] != "R" && (!$this->aba_iframe || $this->is_calendar_app) && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bsair", "document.F6.action='" . $nm_url_saida. "'; document.F6.submit(); return false;", "document.F6.action='" . $nm_url_saida. "'; document.F6.submit(); return false;", "sc_b_sai_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes != "novo") && (!$this->Embutida_call)) {
        $sCondStyle = (!isset($_SESSION['scriptcase']['nm_sc_retorno']) || empty($_SESSION['scriptcase']['nm_sc_retorno']) || $nm_apl_dependente == 1 || $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['run_iframe'] == "R" || $this->aba_iframe || $this->nmgp_botoes['exit'] != "on") && ($_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['run_iframe'] != "F" && $this->nmgp_botoes['exit'] == "on") && ($nm_apl_dependente == 1 && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bvoltar", "document.F6.action='" . $nm_url_saida. "'; document.F6.submit(); return false;", "document.F6.action='" . $nm_url_saida. "'; document.F6.submit(); return false;", "sc_b_sai_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes != "novo") && (!$this->Embutida_call)) {
        $sCondStyle = (!isset($_SESSION['scriptcase']['nm_sc_retorno']) || empty($_SESSION['scriptcase']['nm_sc_retorno']) || $nm_apl_dependente == 1 || $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['run_iframe'] == "R" || $this->aba_iframe || $this->nmgp_botoes['exit'] != "on") && ($_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['run_iframe'] != "F" && $this->nmgp_botoes['exit'] == "on") && ($nm_apl_dependente != 1 || $this->nmgp_botoes['exit'] != "on") && (!$this->aba_iframe && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bsair", "document.F6.action='" . $nm_url_saida. "'; document.F6.submit(); return false;", "document.F6.action='" . $nm_url_saida. "'; document.F6.submit(); return false;", "sc_b_sai_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
}
if ((!$this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['run_iframe'] != "R")
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
?>
<TABLE align="center" id="hidden_bloco_0" class="scFormTable" width="100%" style="height: 100%;">   <tr>
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


       if (!$this->Embutida_form && $this->nmgp_opcao != "novo" && $this->nmgp_botoes['delete'] == "on") { $Col_span = " colspan=2"; }
    if (!$this->Embutida_form && $this->nmgp_opcao == "novo") { $Col_span = " colspan=2"; }
 ?>

    <TD class="scFormLabelOddMult" style="display: none;" <?php echo $Col_span ?>> &nbsp; </TD>
   
   <?php if ($this->Embutida_form && $this->nmgp_botoes['insert'] == "on") {?>
    <TD class="scFormLabelOddMult"  width="10">  </TD>
   <?php }?>
   <?php if ($this->Embutida_form && $this->nmgp_botoes['insert'] != "on") {?>
    <TD class="scFormLabelOddMult"  width="10"> &nbsp; </TD>
   <?php }?>
   <?php if (isset($this->nmgp_cmp_hidden['usr_active_']) && $this->nmgp_cmp_hidden['usr_active_'] == 'off') { $sStyleHidden_usr_active_ = 'display: none'; }
      if (1 || !isset($this->nmgp_cmp_hidden['usr_active_']) || $this->nmgp_cmp_hidden['usr_active_'] == 'on') {
      if (!isset($this->nm_new_label['usr_active_'])) {
          $this->nm_new_label['usr_active_'] = "Estado"; } ?>

    <TD class="scFormLabelOddMult" id="hidden_field_label_usr_active_" style="white-space:nowrap;;<?php echo $sStyleHidden_usr_active_; ?>" >       
<?php
      $link_img = "";
      $SC_Label = "" . $this->nm_new_label['usr_active_']  . "";
      $nome_img = $this->Ini->Label_sort;
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['ordem_cmp'] == "usr_active")
      {
          $orderColName = "usr_active";
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['ordem_ord'] == " desc")
          {
              $orderColOrient = $nome_img = $this->Ini->Label_sort_desc;
          }
          else
          {
              $orderColOrient = $nome_img = $this->Ini->Label_sort_asc;
          }
      }
      if (empty($this->Ini->Label_sort_pos))
      {
          $this->Ini->Label_sort_pos = "right_field";
      }
      if (empty($nome_img))
      {
          $link_img = $SC_Label;
      }
      elseif ($this->Ini->Label_sort_pos == "right_field")
      {
          $link_img = $SC_Label . "<IMG SRC=\"" . $this->Ini->path_img_global . "/" . $nome_img . "\" BORDER=\"0\" class=\"sc-ui-img-order-column\" id=\"sc-id-img-order-usr_active\" />";
      }
      elseif ($this->Ini->Label_sort_pos == "left_field")
      {
          $link_img = "<IMG SRC=\"" . $this->Ini->path_img_global . "/" . $nome_img . "\" BORDER=\"0\" class=\"sc-ui-img-order-column\" id=\"sc-id-img-order-usr_active\" />" . $SC_Label;
      }
      elseif ($this->Ini->Label_sort_pos == "right_cell")
      {
          $link_img = "<IMG style=\"float: right\" SRC=\"" . $this->Ini->path_img_global . "/" . $nome_img . "\" BORDER=\"0\" class=\"sc-ui-img-order-column\" id=\"sc-id-img-order-usr_active\" />" . $SC_Label;
      }
      elseif ($this->Ini->Label_sort_pos == "left_cell")
      {
          $link_img = "<IMG style=\"float: left\" SRC=\"" . $this->Ini->path_img_global . "/" . $nome_img . "\" BORDER=\"0\" class=\"sc-ui-img-order-column\" id=\"sc-id-img-order-usr_active\" />" . $SC_Label;
      }
      ?>
<a href="javascript:nm_move('ordem', 'usr_active')" class="scFormLabelLink scFormLabelLinkOddMult"><?php echo $link_img ?></a> <span class="scFormRequiredOddMult">*</span> </TD>
   <?php } ?>

   <?php if (isset($this->nmgp_cmp_hidden['ci_']) && $this->nmgp_cmp_hidden['ci_'] == 'off') { $sStyleHidden_ci_ = 'display: none'; }
      if (1 || !isset($this->nmgp_cmp_hidden['ci_']) || $this->nmgp_cmp_hidden['ci_'] == 'on') {
      if (!isset($this->nm_new_label['ci_'])) {
          $this->nm_new_label['ci_'] = "Cédula"; } ?>

    <TD class="scFormLabelOddMult" id="hidden_field_label_ci_" style="white-space:nowrap;;<?php echo $sStyleHidden_ci_; ?>" >       
<?php
      $link_img = "";
      $SC_Label = "" . $this->nm_new_label['ci_']  . "";
      $nome_img = $this->Ini->Label_sort;
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['ordem_cmp'] == "ci")
      {
          $orderColName = "ci";
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['ordem_ord'] == " desc")
          {
              $orderColOrient = $nome_img = $this->Ini->Label_sort_desc;
          }
          else
          {
              $orderColOrient = $nome_img = $this->Ini->Label_sort_asc;
          }
      }
      if (empty($this->Ini->Label_sort_pos))
      {
          $this->Ini->Label_sort_pos = "right_field";
      }
      if (empty($nome_img))
      {
          $link_img = $SC_Label;
      }
      elseif ($this->Ini->Label_sort_pos == "right_field")
      {
          $link_img = $SC_Label . "<IMG SRC=\"" . $this->Ini->path_img_global . "/" . $nome_img . "\" BORDER=\"0\" class=\"sc-ui-img-order-column\" id=\"sc-id-img-order-ci\" />";
      }
      elseif ($this->Ini->Label_sort_pos == "left_field")
      {
          $link_img = "<IMG SRC=\"" . $this->Ini->path_img_global . "/" . $nome_img . "\" BORDER=\"0\" class=\"sc-ui-img-order-column\" id=\"sc-id-img-order-ci\" />" . $SC_Label;
      }
      elseif ($this->Ini->Label_sort_pos == "right_cell")
      {
          $link_img = "<IMG style=\"float: right\" SRC=\"" . $this->Ini->path_img_global . "/" . $nome_img . "\" BORDER=\"0\" class=\"sc-ui-img-order-column\" id=\"sc-id-img-order-ci\" />" . $SC_Label;
      }
      elseif ($this->Ini->Label_sort_pos == "left_cell")
      {
          $link_img = "<IMG style=\"float: left\" SRC=\"" . $this->Ini->path_img_global . "/" . $nome_img . "\" BORDER=\"0\" class=\"sc-ui-img-order-column\" id=\"sc-id-img-order-ci\" />" . $SC_Label;
      }
      ?>
<a href="javascript:nm_move('ordem', 'ci')" class="scFormLabelLink scFormLabelLinkOddMult"><?php echo $link_img ?></a> <span class="scFormRequiredOddMult">*</span> </TD>
   <?php } ?>

   <?php if (isset($this->nmgp_cmp_hidden['name_']) && $this->nmgp_cmp_hidden['name_'] == 'off') { $sStyleHidden_name_ = 'display: none'; }
      if (1 || !isset($this->nmgp_cmp_hidden['name_']) || $this->nmgp_cmp_hidden['name_'] == 'on') {
      if (!isset($this->nm_new_label['name_'])) {
          $this->nm_new_label['name_'] = "Nombres"; } ?>

    <TD class="scFormLabelOddMult" id="hidden_field_label_name_" style="white-space:nowrap;;<?php echo $sStyleHidden_name_; ?>" >       
<?php
      $link_img = "";
      $SC_Label = "" . $this->nm_new_label['name_']  . "";
      $nome_img = $this->Ini->Label_sort;
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['ordem_cmp'] == "name")
      {
          $orderColName = "name";
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['ordem_ord'] == " desc")
          {
              $orderColOrient = $nome_img = $this->Ini->Label_sort_desc;
          }
          else
          {
              $orderColOrient = $nome_img = $this->Ini->Label_sort_asc;
          }
      }
      if (empty($this->Ini->Label_sort_pos))
      {
          $this->Ini->Label_sort_pos = "right_field";
      }
      if (empty($nome_img))
      {
          $link_img = $SC_Label;
      }
      elseif ($this->Ini->Label_sort_pos == "right_field")
      {
          $link_img = $SC_Label . "<IMG SRC=\"" . $this->Ini->path_img_global . "/" . $nome_img . "\" BORDER=\"0\" class=\"sc-ui-img-order-column\" id=\"sc-id-img-order-name\" />";
      }
      elseif ($this->Ini->Label_sort_pos == "left_field")
      {
          $link_img = "<IMG SRC=\"" . $this->Ini->path_img_global . "/" . $nome_img . "\" BORDER=\"0\" class=\"sc-ui-img-order-column\" id=\"sc-id-img-order-name\" />" . $SC_Label;
      }
      elseif ($this->Ini->Label_sort_pos == "right_cell")
      {
          $link_img = "<IMG style=\"float: right\" SRC=\"" . $this->Ini->path_img_global . "/" . $nome_img . "\" BORDER=\"0\" class=\"sc-ui-img-order-column\" id=\"sc-id-img-order-name\" />" . $SC_Label;
      }
      elseif ($this->Ini->Label_sort_pos == "left_cell")
      {
          $link_img = "<IMG style=\"float: left\" SRC=\"" . $this->Ini->path_img_global . "/" . $nome_img . "\" BORDER=\"0\" class=\"sc-ui-img-order-column\" id=\"sc-id-img-order-name\" />" . $SC_Label;
      }
      ?>
<a href="javascript:nm_move('ordem', 'name')" class="scFormLabelLink scFormLabelLinkOddMult"><?php echo $link_img ?></a> <span class="scFormRequiredOddMult">*</span> </TD>
   <?php } ?>

   <?php if (isset($this->nmgp_cmp_hidden['email_']) && $this->nmgp_cmp_hidden['email_'] == 'off') { $sStyleHidden_email_ = 'display: none'; }
      if (1 || !isset($this->nmgp_cmp_hidden['email_']) || $this->nmgp_cmp_hidden['email_'] == 'on') {
      if (!isset($this->nm_new_label['email_'])) {
          $this->nm_new_label['email_'] = "Correo Electrónico"; } ?>

    <TD class="scFormLabelOddMult" id="hidden_field_label_email_" style="white-space:nowrap;;<?php echo $sStyleHidden_email_; ?>" > <?php echo $this->nm_new_label['email_'] ?> <span class="scFormRequiredOddMult">*</span> </TD>
   <?php } ?>

   <?php if (isset($this->nmgp_cmp_hidden['login_']) && $this->nmgp_cmp_hidden['login_'] == 'off') { $sStyleHidden_login_ = 'display: none'; }
      if (1 || !isset($this->nmgp_cmp_hidden['login_']) || $this->nmgp_cmp_hidden['login_'] == 'on') {
      if (!isset($this->nm_new_label['login_'])) {
          $this->nm_new_label['login_'] = "Usuario"; } ?>

    <TD class="scFormLabelOddMult" id="hidden_field_label_login_" style="white-space:nowrap;;<?php echo $sStyleHidden_login_; ?>" >       
<?php
      $link_img = "";
      $SC_Label = "" . $this->nm_new_label['login_']  . "";
      $nome_img = $this->Ini->Label_sort;
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['ordem_cmp'] == "login")
      {
          $orderColName = "login";
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['ordem_ord'] == " desc")
          {
              $orderColOrient = $nome_img = $this->Ini->Label_sort_desc;
          }
          else
          {
              $orderColOrient = $nome_img = $this->Ini->Label_sort_asc;
          }
      }
      if (empty($this->Ini->Label_sort_pos))
      {
          $this->Ini->Label_sort_pos = "right_field";
      }
      if (empty($nome_img))
      {
          $link_img = $SC_Label;
      }
      elseif ($this->Ini->Label_sort_pos == "right_field")
      {
          $link_img = $SC_Label . "<IMG SRC=\"" . $this->Ini->path_img_global . "/" . $nome_img . "\" BORDER=\"0\" class=\"sc-ui-img-order-column\" id=\"sc-id-img-order-login\" />";
      }
      elseif ($this->Ini->Label_sort_pos == "left_field")
      {
          $link_img = "<IMG SRC=\"" . $this->Ini->path_img_global . "/" . $nome_img . "\" BORDER=\"0\" class=\"sc-ui-img-order-column\" id=\"sc-id-img-order-login\" />" . $SC_Label;
      }
      elseif ($this->Ini->Label_sort_pos == "right_cell")
      {
          $link_img = "<IMG style=\"float: right\" SRC=\"" . $this->Ini->path_img_global . "/" . $nome_img . "\" BORDER=\"0\" class=\"sc-ui-img-order-column\" id=\"sc-id-img-order-login\" />" . $SC_Label;
      }
      elseif ($this->Ini->Label_sort_pos == "left_cell")
      {
          $link_img = "<IMG style=\"float: left\" SRC=\"" . $this->Ini->path_img_global . "/" . $nome_img . "\" BORDER=\"0\" class=\"sc-ui-img-order-column\" id=\"sc-id-img-order-login\" />" . $SC_Label;
      }
      ?>
<a href="javascript:nm_move('ordem', 'login')" class="scFormLabelLink scFormLabelLinkOddMult"><?php echo $link_img ?></a> <span class="scFormRequiredOddMult">*</span> </TD>
   <?php } ?>

   <?php if (isset($this->nmgp_cmp_hidden['pswd_']) && $this->nmgp_cmp_hidden['pswd_'] == 'off') { $sStyleHidden_pswd_ = 'display: none'; }
      if (1 || !isset($this->nmgp_cmp_hidden['pswd_']) || $this->nmgp_cmp_hidden['pswd_'] == 'on') {
      if (!isset($this->nm_new_label['pswd_'])) {
          $this->nm_new_label['pswd_'] = "Contraseña"; } ?>

    <TD class="scFormLabelOddMult" id="hidden_field_label_pswd_" style="white-space:nowrap;;<?php echo $sStyleHidden_pswd_; ?>" > <?php echo $this->nm_new_label['pswd_'] ?> <span class="scFormRequiredOddMult">*</span> </TD>
   <?php } ?>

   <?php if (isset($this->nmgp_cmp_hidden['access_fa_']) && $this->nmgp_cmp_hidden['access_fa_'] == 'off') { $sStyleHidden_access_fa_ = 'display: none'; }
      if (1 || !isset($this->nmgp_cmp_hidden['access_fa_']) || $this->nmgp_cmp_hidden['access_fa_'] == 'on') {
      if (!isset($this->nm_new_label['access_fa_'])) {
          $this->nm_new_label['access_fa_'] = "F.A."; } ?>

    <TD class="scFormLabelOddMult" id="hidden_field_label_access_fa_" style="white-space:nowrap;text-align:center;<?php echo $sStyleHidden_access_fa_; ?>" > <?php echo $this->nm_new_label['access_fa_'] ?> </TD>
   <?php } ?>

   <?php if (isset($this->nmgp_cmp_hidden['access_fp_']) && $this->nmgp_cmp_hidden['access_fp_'] == 'off') { $sStyleHidden_access_fp_ = 'display: none'; }
      if (1 || !isset($this->nmgp_cmp_hidden['access_fp_']) || $this->nmgp_cmp_hidden['access_fp_'] == 'on') {
      if (!isset($this->nm_new_label['access_fp_'])) {
          $this->nm_new_label['access_fp_'] = "F.P."; } ?>

    <TD class="scFormLabelOddMult" id="hidden_field_label_access_fp_" style="white-space:nowrap;text-align:center;<?php echo $sStyleHidden_access_fp_; ?>" > <?php echo $this->nm_new_label['access_fp_'] ?> </TD>
   <?php } ?>

   <?php if (isset($this->nmgp_cmp_hidden['access_im_']) && $this->nmgp_cmp_hidden['access_im_'] == 'off') { $sStyleHidden_access_im_ = 'display: none'; }
      if (1 || !isset($this->nmgp_cmp_hidden['access_im_']) || $this->nmgp_cmp_hidden['access_im_'] == 'on') {
      if (!isset($this->nm_new_label['access_im_'])) {
          $this->nm_new_label['access_im_'] = "I.M."; } ?>

    <TD class="scFormLabelOddMult" id="hidden_field_label_access_im_" style="white-space:nowrap;text-align:center;<?php echo $sStyleHidden_access_im_; ?>" > <?php echo $this->nm_new_label['access_im_'] ?> </TD>
   <?php } ?>

   <?php if (isset($this->nmgp_cmp_hidden['zona_']) && $this->nmgp_cmp_hidden['zona_'] == 'off') { $sStyleHidden_zona_ = 'display: none'; }
      if (1 || !isset($this->nmgp_cmp_hidden['zona_']) || $this->nmgp_cmp_hidden['zona_'] == 'on') {
      if (!isset($this->nm_new_label['zona_'])) {
          $this->nm_new_label['zona_'] = "Zona"; } ?>

    <TD class="scFormLabelOddMult" id="hidden_field_label_zona_" style="white-space:nowrap;;<?php echo $sStyleHidden_zona_; ?>" >       
<?php
      $link_img = "";
      $SC_Label = "" . $this->nm_new_label['zona_']  . "";
      $nome_img = $this->Ini->Label_sort;
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['ordem_cmp'] == "zona")
      {
          $orderColName = "zona";
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['ordem_ord'] == " desc")
          {
              $orderColOrient = $nome_img = $this->Ini->Label_sort_desc;
          }
          else
          {
              $orderColOrient = $nome_img = $this->Ini->Label_sort_asc;
          }
      }
      if (empty($this->Ini->Label_sort_pos))
      {
          $this->Ini->Label_sort_pos = "right_field";
      }
      if (empty($nome_img))
      {
          $link_img = $SC_Label;
      }
      elseif ($this->Ini->Label_sort_pos == "right_field")
      {
          $link_img = $SC_Label . "<IMG SRC=\"" . $this->Ini->path_img_global . "/" . $nome_img . "\" BORDER=\"0\" class=\"sc-ui-img-order-column\" id=\"sc-id-img-order-zona\" />";
      }
      elseif ($this->Ini->Label_sort_pos == "left_field")
      {
          $link_img = "<IMG SRC=\"" . $this->Ini->path_img_global . "/" . $nome_img . "\" BORDER=\"0\" class=\"sc-ui-img-order-column\" id=\"sc-id-img-order-zona\" />" . $SC_Label;
      }
      elseif ($this->Ini->Label_sort_pos == "right_cell")
      {
          $link_img = "<IMG style=\"float: right\" SRC=\"" . $this->Ini->path_img_global . "/" . $nome_img . "\" BORDER=\"0\" class=\"sc-ui-img-order-column\" id=\"sc-id-img-order-zona\" />" . $SC_Label;
      }
      elseif ($this->Ini->Label_sort_pos == "left_cell")
      {
          $link_img = "<IMG style=\"float: left\" SRC=\"" . $this->Ini->path_img_global . "/" . $nome_img . "\" BORDER=\"0\" class=\"sc-ui-img-order-column\" id=\"sc-id-img-order-zona\" />" . $SC_Label;
      }
      ?>
<a href="javascript:nm_move('ordem', 'zona')" class="scFormLabelLink scFormLabelLinkOddMult"><?php echo $link_img ?></a> <span class="scFormRequiredOddMult">*</span> </TD>
   <?php } ?>

   <?php if (isset($this->nmgp_cmp_hidden['cod_provincia_']) && $this->nmgp_cmp_hidden['cod_provincia_'] == 'off') { $sStyleHidden_cod_provincia_ = 'display: none'; }
      if (1 || !isset($this->nmgp_cmp_hidden['cod_provincia_']) || $this->nmgp_cmp_hidden['cod_provincia_'] == 'on') {
      if (!isset($this->nm_new_label['cod_provincia_'])) {
          $this->nm_new_label['cod_provincia_'] = "Provincia"; } ?>

    <TD class="scFormLabelOddMult" id="hidden_field_label_cod_provincia_" style="white-space:nowrap;;<?php echo $sStyleHidden_cod_provincia_; ?>" >       
<?php
      $link_img = "";
      $SC_Label = "" . $this->nm_new_label['cod_provincia_']  . "";
      $nome_img = $this->Ini->Label_sort;
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['ordem_cmp'] == "cod_provincia")
      {
          $orderColName = "cod_provincia";
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['ordem_ord'] == " desc")
          {
              $orderColOrient = $nome_img = $this->Ini->Label_sort_desc;
          }
          else
          {
              $orderColOrient = $nome_img = $this->Ini->Label_sort_asc;
          }
      }
      if (empty($this->Ini->Label_sort_pos))
      {
          $this->Ini->Label_sort_pos = "right_field";
      }
      if (empty($nome_img))
      {
          $link_img = $SC_Label;
      }
      elseif ($this->Ini->Label_sort_pos == "right_field")
      {
          $link_img = $SC_Label . "<IMG SRC=\"" . $this->Ini->path_img_global . "/" . $nome_img . "\" BORDER=\"0\" class=\"sc-ui-img-order-column\" id=\"sc-id-img-order-cod_provincia\" />";
      }
      elseif ($this->Ini->Label_sort_pos == "left_field")
      {
          $link_img = "<IMG SRC=\"" . $this->Ini->path_img_global . "/" . $nome_img . "\" BORDER=\"0\" class=\"sc-ui-img-order-column\" id=\"sc-id-img-order-cod_provincia\" />" . $SC_Label;
      }
      elseif ($this->Ini->Label_sort_pos == "right_cell")
      {
          $link_img = "<IMG style=\"float: right\" SRC=\"" . $this->Ini->path_img_global . "/" . $nome_img . "\" BORDER=\"0\" class=\"sc-ui-img-order-column\" id=\"sc-id-img-order-cod_provincia\" />" . $SC_Label;
      }
      elseif ($this->Ini->Label_sort_pos == "left_cell")
      {
          $link_img = "<IMG style=\"float: left\" SRC=\"" . $this->Ini->path_img_global . "/" . $nome_img . "\" BORDER=\"0\" class=\"sc-ui-img-order-column\" id=\"sc-id-img-order-cod_provincia\" />" . $SC_Label;
      }
      ?>
<a href="javascript:nm_move('ordem', 'cod_provincia')" class="scFormLabelLink scFormLabelLinkOddMult"><?php echo $link_img ?></a> <span class="scFormRequiredOddMult">*</span> </TD>
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
       $iStart = sizeof($this->form_vert_form_sec_users);
       $guarda_nmgp_opcao = $this->nmgp_opcao;
       $guarda_form_vert_form_sec_users = $this->form_vert_form_sec_users;
       $this->nmgp_opcao = 'novo';
   } 
   if ($this->Embutida_form && empty($this->form_vert_form_sec_users))
   {
       $sc_seq_vert = 0;
   }
           if ('novo' != $this->nmgp_opcao && !isset($this->nmgp_cmp_readonly['login_']))
           {
               $this->nmgp_cmp_readonly['login_'] = 'on';
           }
           if ('novo' != $this->nmgp_opcao && !isset($this->nmgp_cmp_readonly['pswd_']))
           {
               $this->nmgp_cmp_readonly['pswd_'] = 'on';
           }
   foreach ($this->form_vert_form_sec_users as $sc_seq_vert => $sc_lixo)
   {
       $this->activation_code_ = $this->form_vert_form_sec_users[$sc_seq_vert]['activation_code_'];
       $this->priv_admin_ = $this->form_vert_form_sec_users[$sc_seq_vert]['priv_admin_'];
       $this->fecha_registro_ = $this->form_vert_form_sec_users[$sc_seq_vert]['fecha_registro_'];
       $this->departamento_ = $this->form_vert_form_sec_users[$sc_seq_vert]['departamento_'];
       $this->ingreso_ = $this->form_vert_form_sec_users[$sc_seq_vert]['ingreso_'];
       $this->access_siu_ = $this->form_vert_form_sec_users[$sc_seq_vert]['access_siu_'];
       if (isset($this->Embutida_ronly) && $this->Embutida_ronly && !$Line_Add)
       {
           $this->nmgp_cmp_readonly['usr_active_'] = true;
           $this->nmgp_cmp_readonly['ci_'] = true;
           $this->nmgp_cmp_readonly['name_'] = true;
           $this->nmgp_cmp_readonly['email_'] = true;
           $this->nmgp_cmp_readonly['login_'] = true;
           $this->nmgp_cmp_readonly['pswd_'] = true;
           $this->nmgp_cmp_readonly['access_fa_'] = true;
           $this->nmgp_cmp_readonly['access_fp_'] = true;
           $this->nmgp_cmp_readonly['access_im_'] = true;
           $this->nmgp_cmp_readonly['zona_'] = true;
           $this->nmgp_cmp_readonly['cod_provincia_'] = true;
       }
       elseif ($Line_Add)
       {
           if (!isset($this->nmgp_cmp_readonly['usr_active_']) || $this->nmgp_cmp_readonly['usr_active_'] != "on") {$this->nmgp_cmp_readonly['usr_active_'] = false;}
           if (!isset($this->nmgp_cmp_readonly['ci_']) || $this->nmgp_cmp_readonly['ci_'] != "on") {$this->nmgp_cmp_readonly['ci_'] = false;}
           if (!isset($this->nmgp_cmp_readonly['name_']) || $this->nmgp_cmp_readonly['name_'] != "on") {$this->nmgp_cmp_readonly['name_'] = false;}
           if (!isset($this->nmgp_cmp_readonly['email_']) || $this->nmgp_cmp_readonly['email_'] != "on") {$this->nmgp_cmp_readonly['email_'] = false;}
           if (!isset($this->nmgp_cmp_readonly['login_']) || $this->nmgp_cmp_readonly['login_'] != "on") {$this->nmgp_cmp_readonly['login_'] = false;}
           if (!isset($this->nmgp_cmp_readonly['pswd_']) || $this->nmgp_cmp_readonly['pswd_'] != "on") {$this->nmgp_cmp_readonly['pswd_'] = false;}
           if (!isset($this->nmgp_cmp_readonly['access_fa_']) || $this->nmgp_cmp_readonly['access_fa_'] != "on") {$this->nmgp_cmp_readonly['access_fa_'] = false;}
           if (!isset($this->nmgp_cmp_readonly['access_fp_']) || $this->nmgp_cmp_readonly['access_fp_'] != "on") {$this->nmgp_cmp_readonly['access_fp_'] = false;}
           if (!isset($this->nmgp_cmp_readonly['access_im_']) || $this->nmgp_cmp_readonly['access_im_'] != "on") {$this->nmgp_cmp_readonly['access_im_'] = false;}
           if (!isset($this->nmgp_cmp_readonly['zona_']) || $this->nmgp_cmp_readonly['zona_'] != "on") {$this->nmgp_cmp_readonly['zona_'] = false;}
           if (!isset($this->nmgp_cmp_readonly['cod_provincia_']) || $this->nmgp_cmp_readonly['cod_provincia_'] != "on") {$this->nmgp_cmp_readonly['cod_provincia_'] = false;}
       }
              foreach ($this->form_vert_form_preenchimento[$sc_seq_vert] as $sCmpNome => $mCmpVal)
              {
                  eval("\$this->" . $sCmpNome . " = \$mCmpVal;");
              }
        $this->usr_active_ = $this->form_vert_form_sec_users[$sc_seq_vert]['usr_active_']; 
       $usr_active_ = $this->usr_active_; 
       $sStyleHidden_usr_active_ = '';
       if (isset($sCheckRead_usr_active_))
       {
           unset($sCheckRead_usr_active_);
       }
       if (isset($this->nmgp_cmp_readonly['usr_active_']))
       {
           $sCheckRead_usr_active_ = $this->nmgp_cmp_readonly['usr_active_'];
       }
       if (isset($this->nmgp_cmp_hidden['usr_active_']) && $this->nmgp_cmp_hidden['usr_active_'] == 'off')
       {
           unset($this->nmgp_cmp_hidden['usr_active_']);
           $sStyleHidden_usr_active_ = 'display: none;';
       }
       $bTestReadOnly_usr_active_ = true;
       $sStyleReadLab_usr_active_ = 'display: none;';
       $sStyleReadInp_usr_active_ = '';
       if (isset($this->nmgp_cmp_readonly['usr_active_']) && $this->nmgp_cmp_readonly['usr_active_'] == 'on')
       {
           $bTestReadOnly_usr_active_ = false;
           unset($this->nmgp_cmp_readonly['usr_active_']);
           $sStyleReadLab_usr_active_ = '';
           $sStyleReadInp_usr_active_ = 'display: none;';
       }
       $this->ci_ = $this->form_vert_form_sec_users[$sc_seq_vert]['ci_']; 
       $ci_ = $this->ci_; 
       $sStyleHidden_ci_ = '';
       if (isset($sCheckRead_ci_))
       {
           unset($sCheckRead_ci_);
       }
       if (isset($this->nmgp_cmp_readonly['ci_']))
       {
           $sCheckRead_ci_ = $this->nmgp_cmp_readonly['ci_'];
       }
       if (isset($this->nmgp_cmp_hidden['ci_']) && $this->nmgp_cmp_hidden['ci_'] == 'off')
       {
           unset($this->nmgp_cmp_hidden['ci_']);
           $sStyleHidden_ci_ = 'display: none;';
       }
       $bTestReadOnly_ci_ = true;
       $sStyleReadLab_ci_ = 'display: none;';
       $sStyleReadInp_ci_ = '';
       if (isset($this->nmgp_cmp_readonly['ci_']) && $this->nmgp_cmp_readonly['ci_'] == 'on')
       {
           $bTestReadOnly_ci_ = false;
           unset($this->nmgp_cmp_readonly['ci_']);
           $sStyleReadLab_ci_ = '';
           $sStyleReadInp_ci_ = 'display: none;';
       }
       $this->name_ = $this->form_vert_form_sec_users[$sc_seq_vert]['name_']; 
       $name_ = $this->name_; 
       $sStyleHidden_name_ = '';
       if (isset($sCheckRead_name_))
       {
           unset($sCheckRead_name_);
       }
       if (isset($this->nmgp_cmp_readonly['name_']))
       {
           $sCheckRead_name_ = $this->nmgp_cmp_readonly['name_'];
       }
       if (isset($this->nmgp_cmp_hidden['name_']) && $this->nmgp_cmp_hidden['name_'] == 'off')
       {
           unset($this->nmgp_cmp_hidden['name_']);
           $sStyleHidden_name_ = 'display: none;';
       }
       $bTestReadOnly_name_ = true;
       $sStyleReadLab_name_ = 'display: none;';
       $sStyleReadInp_name_ = '';
       if (isset($this->nmgp_cmp_readonly['name_']) && $this->nmgp_cmp_readonly['name_'] == 'on')
       {
           $bTestReadOnly_name_ = false;
           unset($this->nmgp_cmp_readonly['name_']);
           $sStyleReadLab_name_ = '';
           $sStyleReadInp_name_ = 'display: none;';
       }
       $this->email_ = $this->form_vert_form_sec_users[$sc_seq_vert]['email_']; 
       $email_ = $this->email_; 
       $sStyleHidden_email_ = '';
       if (isset($sCheckRead_email_))
       {
           unset($sCheckRead_email_);
       }
       if (isset($this->nmgp_cmp_readonly['email_']))
       {
           $sCheckRead_email_ = $this->nmgp_cmp_readonly['email_'];
       }
       if (isset($this->nmgp_cmp_hidden['email_']) && $this->nmgp_cmp_hidden['email_'] == 'off')
       {
           unset($this->nmgp_cmp_hidden['email_']);
           $sStyleHidden_email_ = 'display: none;';
       }
       $bTestReadOnly_email_ = true;
       $sStyleReadLab_email_ = 'display: none;';
       $sStyleReadInp_email_ = '';
       if (isset($this->nmgp_cmp_readonly['email_']) && $this->nmgp_cmp_readonly['email_'] == 'on')
       {
           $bTestReadOnly_email_ = false;
           unset($this->nmgp_cmp_readonly['email_']);
           $sStyleReadLab_email_ = '';
           $sStyleReadInp_email_ = 'display: none;';
       }
       $this->login_ = $this->form_vert_form_sec_users[$sc_seq_vert]['login_']; 
       $login_ = $this->login_; 
       $sStyleHidden_login_ = '';
       if (isset($sCheckRead_login_))
       {
           unset($sCheckRead_login_);
       }
       if (isset($this->nmgp_cmp_readonly['login_']))
       {
           $sCheckRead_login_ = $this->nmgp_cmp_readonly['login_'];
       }
       if (isset($this->nmgp_cmp_hidden['login_']) && $this->nmgp_cmp_hidden['login_'] == 'off')
       {
           unset($this->nmgp_cmp_hidden['login_']);
           $sStyleHidden_login_ = 'display: none;';
       }
       $bTestReadOnly_login_ = true;
       $sStyleReadLab_login_ = 'display: none;';
       $sStyleReadInp_login_ = '';
       if (/*($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir") || */(isset($this->nmgp_cmp_readonly["login_"]) &&  $this->nmgp_cmp_readonly["login_"] == "on"))
       {
           $bTestReadOnly_login_ = false;
           unset($this->nmgp_cmp_readonly['login_']);
           $sStyleReadLab_login_ = '';
           $sStyleReadInp_login_ = 'display: none;';
       }
       $this->pswd_ = $this->form_vert_form_sec_users[$sc_seq_vert]['pswd_']; 
       $pswd_ = $this->pswd_; 
       $sStyleHidden_pswd_ = '';
       if (isset($sCheckRead_pswd_))
       {
           unset($sCheckRead_pswd_);
       }
       if (isset($this->nmgp_cmp_readonly['pswd_']))
       {
           $sCheckRead_pswd_ = $this->nmgp_cmp_readonly['pswd_'];
       }
       if (isset($this->nmgp_cmp_hidden['pswd_']) && $this->nmgp_cmp_hidden['pswd_'] == 'off')
       {
           unset($this->nmgp_cmp_hidden['pswd_']);
           $sStyleHidden_pswd_ = 'display: none;';
       }
       $bTestReadOnly_pswd_ = true;
       $sStyleReadLab_pswd_ = 'display: none;';
       $sStyleReadInp_pswd_ = '';
       if (/*($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir") || */(isset($this->nmgp_cmp_readonly["pswd_"]) &&  $this->nmgp_cmp_readonly["pswd_"] == "on"))
       {
           $bTestReadOnly_pswd_ = false;
           unset($this->nmgp_cmp_readonly['pswd_']);
           $sStyleReadLab_pswd_ = '';
           $sStyleReadInp_pswd_ = 'display: none;';
       }
       $this->access_fa_ = $this->form_vert_form_sec_users[$sc_seq_vert]['access_fa_']; 
       $access_fa_ = $this->access_fa_; 
       $sStyleHidden_access_fa_ = '';
       if (isset($sCheckRead_access_fa_))
       {
           unset($sCheckRead_access_fa_);
       }
       if (isset($this->nmgp_cmp_readonly['access_fa_']))
       {
           $sCheckRead_access_fa_ = $this->nmgp_cmp_readonly['access_fa_'];
       }
       if (isset($this->nmgp_cmp_hidden['access_fa_']) && $this->nmgp_cmp_hidden['access_fa_'] == 'off')
       {
           unset($this->nmgp_cmp_hidden['access_fa_']);
           $sStyleHidden_access_fa_ = 'display: none;';
       }
       $bTestReadOnly_access_fa_ = true;
       $sStyleReadLab_access_fa_ = 'display: none;';
       $sStyleReadInp_access_fa_ = '';
       if (isset($this->nmgp_cmp_readonly['access_fa_']) && $this->nmgp_cmp_readonly['access_fa_'] == 'on')
       {
           $bTestReadOnly_access_fa_ = false;
           unset($this->nmgp_cmp_readonly['access_fa_']);
           $sStyleReadLab_access_fa_ = '';
           $sStyleReadInp_access_fa_ = 'display: none;';
       }
       $this->access_fp_ = $this->form_vert_form_sec_users[$sc_seq_vert]['access_fp_']; 
       $access_fp_ = $this->access_fp_; 
       $sStyleHidden_access_fp_ = '';
       if (isset($sCheckRead_access_fp_))
       {
           unset($sCheckRead_access_fp_);
       }
       if (isset($this->nmgp_cmp_readonly['access_fp_']))
       {
           $sCheckRead_access_fp_ = $this->nmgp_cmp_readonly['access_fp_'];
       }
       if (isset($this->nmgp_cmp_hidden['access_fp_']) && $this->nmgp_cmp_hidden['access_fp_'] == 'off')
       {
           unset($this->nmgp_cmp_hidden['access_fp_']);
           $sStyleHidden_access_fp_ = 'display: none;';
       }
       $bTestReadOnly_access_fp_ = true;
       $sStyleReadLab_access_fp_ = 'display: none;';
       $sStyleReadInp_access_fp_ = '';
       if (isset($this->nmgp_cmp_readonly['access_fp_']) && $this->nmgp_cmp_readonly['access_fp_'] == 'on')
       {
           $bTestReadOnly_access_fp_ = false;
           unset($this->nmgp_cmp_readonly['access_fp_']);
           $sStyleReadLab_access_fp_ = '';
           $sStyleReadInp_access_fp_ = 'display: none;';
       }
       $this->access_im_ = $this->form_vert_form_sec_users[$sc_seq_vert]['access_im_']; 
       $access_im_ = $this->access_im_; 
       $sStyleHidden_access_im_ = '';
       if (isset($sCheckRead_access_im_))
       {
           unset($sCheckRead_access_im_);
       }
       if (isset($this->nmgp_cmp_readonly['access_im_']))
       {
           $sCheckRead_access_im_ = $this->nmgp_cmp_readonly['access_im_'];
       }
       if (isset($this->nmgp_cmp_hidden['access_im_']) && $this->nmgp_cmp_hidden['access_im_'] == 'off')
       {
           unset($this->nmgp_cmp_hidden['access_im_']);
           $sStyleHidden_access_im_ = 'display: none;';
       }
       $bTestReadOnly_access_im_ = true;
       $sStyleReadLab_access_im_ = 'display: none;';
       $sStyleReadInp_access_im_ = '';
       if (isset($this->nmgp_cmp_readonly['access_im_']) && $this->nmgp_cmp_readonly['access_im_'] == 'on')
       {
           $bTestReadOnly_access_im_ = false;
           unset($this->nmgp_cmp_readonly['access_im_']);
           $sStyleReadLab_access_im_ = '';
           $sStyleReadInp_access_im_ = 'display: none;';
       }
       $this->zona_ = $this->form_vert_form_sec_users[$sc_seq_vert]['zona_']; 
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
       $this->cod_provincia_ = $this->form_vert_form_sec_users[$sc_seq_vert]['cod_provincia_']; 
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

       $nm_cor_fun_vert = ($nm_cor_fun_vert == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
       $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);

       $sHideNewLine = '';
?>   
   <tr id="idVertRow<?php echo $sc_seq_vert; ?>"<?php echo $sHideNewLine; ?>>


   
    <TD class="scFormDataOddMult"  id="hidden_field_data_sc_seq<?php echo $sc_seq_vert; ?>"  style="display: none;"> <?php echo $sc_seq_vert; ?> </TD>
   
   <?php if (!$this->Embutida_form && $this->nmgp_opcao != "novo" && $this->nmgp_botoes['delete'] == "on") {?>
    <TD class="scFormDataOddMult" > 
<input type=checkbox name="sc_check_vert[<?php echo $sc_seq_vert ?>]" value="<?php echo $sc_seq_vert . "\""; if (in_array($sc_seq_vert, $sc_check_excl)) { echo " checked";} ?> onclick="if (this.checked) {sc_quant_excl++; } else {sc_quant_excl--; }"> </TD>
   <?php }?>
   <?php if (!$this->Embutida_form && $this->nmgp_opcao == "novo") {?>
    <TD class="scFormDataOddMult" > 
<input type=checkbox name="sc_check_vert[<?php echo $sc_seq_vert ?>]" value="<?php echo $sc_seq_vert . "\"" ; if (in_array($sc_seq_vert, $sc_check_incl)) { echo " checked";} ?>> </TD>
   <?php }?>
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
<?php echo nmButtonOutput($this->arr_buttons, "bmd_novo", "do_ajax_form_sec_users_add_new_line(" . $sc_seq_vert . ")", "do_ajax_form_sec_users_add_new_line(" . $sc_seq_vert . ")", "sc_new_line_" . $sc_seq_vert . "", "", "", "display: none", "", "", "", $this->Ini->path_botoes, "", "", "", "");?>
<?php }?>
<?php
  $Style_add_line = (!$Line_Add) ? "display: none" : "";
?>
<?php echo nmButtonOutput($this->arr_buttons, "bmd_cancelar", "do_ajax_form_sec_users_cancel_insert(" . $sc_seq_vert . ")", "do_ajax_form_sec_users_cancel_insert(" . $sc_seq_vert . ")", "sc_canceli_line_" . $sc_seq_vert . "", "", "", "" . $Style_add_line . "", "", "", "", $this->Ini->path_botoes, "", "", "", "");?>
<?php echo nmButtonOutput($this->arr_buttons, "bmd_cancelar", "do_ajax_form_sec_users_cancel_update(" . $sc_seq_vert . ")", "do_ajax_form_sec_users_cancel_update(" . $sc_seq_vert . ")", "sc_cancelu_line_" . $sc_seq_vert . "", "", "", "display: none", "", "", "", $this->Ini->path_botoes, "", "", "", "");?>
 </TD>
   <?php }?>
   <?php if (isset($this->nmgp_cmp_hidden['usr_active_']) && $this->nmgp_cmp_hidden['usr_active_'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="usr_active_<?php echo $sc_seq_vert ?>" value="<?php echo NM_encode_input($this->usr_active_) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOddMult" id="hidden_field_data_usr_active_<?php echo $sc_seq_vert; ?>" style="<?php echo $sStyleHidden_usr_active_; ?>;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOddMult" style=";;vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly_usr_active_ && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["usr_active_"]) &&  $this->nmgp_cmp_readonly["usr_active_"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['Lookup_usr_active_']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['Lookup_usr_active_'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['Lookup_usr_active_']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['Lookup_usr_active_'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['Lookup_usr_active_']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['Lookup_usr_active_'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['Lookup_usr_active_']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['Lookup_usr_active_'] = array(); 
    }
   $nm_comando = "select codigo, valor from catalogo where tipo='estado_usuario'";
   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando)) 
   {
       while (!$rs->EOF) 
       { 
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['Lookup_usr_active_'][] = $rs->fields[0];
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
   $usr_active__look = ""; 
   $todo = explode("?@?", trim($nmgp_def_dados)) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->usr_active__1))
          {
              foreach ($this->usr_active__1 as $tmp_usr_active_)
              {
                  if (trim($tmp_usr_active_) === trim($cadaselect[1])) { $usr_active__look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->usr_active_) === trim($cadaselect[1])) { $usr_active__look .= $cadaselect[0]; } 
          $x++; 
   }

?>
<input type=hidden name="usr_active_<?php echo $sc_seq_vert ?>" value="<?php echo NM_encode_input($usr_active_) . "\">" . $usr_active__look . ""; ?>
<?php } else { ?>
 
<?php  
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['Lookup_usr_active_']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['Lookup_usr_active_'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['Lookup_usr_active_']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['Lookup_usr_active_'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['Lookup_usr_active_']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['Lookup_usr_active_'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['Lookup_usr_active_']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['Lookup_usr_active_'] = array(); 
    }
   $nm_comando = "select codigo, valor from catalogo where tipo='estado_usuario'";
   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando)) 
   {
       while (!$rs->EOF) 
       { 
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['Lookup_usr_active_'][] = $rs->fields[0];
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
   $usr_active__look = ""; 
   $todo = explode("?@?", trim($nmgp_def_dados)) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->usr_active__1))
          {
              foreach ($this->usr_active__1 as $tmp_usr_active_)
              {
                  if (trim($tmp_usr_active_) === trim($cadaselect[1])) { $usr_active__look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->usr_active_) === trim($cadaselect[1])) { $usr_active__look .= $cadaselect[0]; } 
          $x++; 
   }
   $x = 0; 
   echo "<span id=\"id_read_on_usr_active_" . $sc_seq_vert . "\" style=\";" .  $sStyleReadLab_usr_active_ . "\">" . NM_encode_input($usr_active__look) . "</span><span id=\"id_read_off_usr_active_" . $sc_seq_vert . "\" style=\"" . $sStyleReadInp_usr_active_ . "\">";
   echo " <span id=\"idAjaxSelect_usr_active_" .  $sc_seq_vert . "\"><select class=\"sc-js-input scFormObjectOddMult\" style=\";\" id=\"id_sc_field_usr_active_" . $sc_seq_vert . "\" name=\"usr_active_" . $sc_seq_vert . "\" size=1>" ; 
   echo "\r" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->usr_active_) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->usr_active_)) 
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
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_usr_active_<?php echo $sc_seq_vert; ?>_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_usr_active_<?php echo $sc_seq_vert; ?>_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php if (isset($this->nmgp_cmp_hidden['ci_']) && $this->nmgp_cmp_hidden['ci_'] == 'off') { $sc_hidden_yes++;  ?>
<input type=hidden name="ci_<?php echo $sc_seq_vert ?>" value="<?php echo NM_encode_input($ci_) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOddMult" id="hidden_field_data_ci_<?php echo $sc_seq_vert; ?>" style="<?php echo $sStyleHidden_ci_; ?>;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOddMult" style=";;vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly_ci_ && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["ci_"]) &&  $this->nmgp_cmp_readonly["ci_"] == "on") { 

 ?>
<input type=hidden name="ci_<?php echo $sc_seq_vert ?>" value="<?php echo NM_encode_input($ci_) . "\">" . $ci_ . ""; ?>
<?php } else { ?>
<span id="id_read_on_ci_<?php echo $sc_seq_vert ?>" class="sc-ui-readonly-ci_<?php echo $sc_seq_vert ?>" style=";<?php echo $sStyleReadLab_ci_; ?>"><?php echo NM_encode_input($this->ci_); ?></span><span id="id_read_off_ci_<?php echo $sc_seq_vert ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_ci_; ?>">
 <input class="sc-js-input scFormObjectOddMult" style=";" id="id_sc_field_ci_<?php echo $sc_seq_vert ?>" type=text name="ci_<?php echo $sc_seq_vert ?>" value="<?php echo NM_encode_input($ci_) ?>"
 size=11 maxlength=10 alt="{datatype: 'text', maxLength: 10, allowedChars: '0123456789', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddMultWm', maskChars: '(){}[].,;:-+/ '}"></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_ci_<?php echo $sc_seq_vert; ?>_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_ci_<?php echo $sc_seq_vert; ?>_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php if (isset($this->nmgp_cmp_hidden['name_']) && $this->nmgp_cmp_hidden['name_'] == 'off') { $sc_hidden_yes++;  ?>
<input type=hidden name="name_<?php echo $sc_seq_vert ?>" value="<?php echo NM_encode_input($name_) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOddMult" id="hidden_field_data_name_<?php echo $sc_seq_vert; ?>" style="<?php echo $sStyleHidden_name_; ?>;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOddMult" style=";;vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly_name_ && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["name_"]) &&  $this->nmgp_cmp_readonly["name_"] == "on") { 

 ?>
<input type=hidden name="name_<?php echo $sc_seq_vert ?>" value="<?php echo NM_encode_input($name_) . "\">" . $name_ . ""; ?>
<?php } else { ?>
<span id="id_read_on_name_<?php echo $sc_seq_vert ?>" class="sc-ui-readonly-name_<?php echo $sc_seq_vert ?>" style=";<?php echo $sStyleReadLab_name_; ?>"><?php echo NM_encode_input($this->name_); ?></span><span id="id_read_off_name_<?php echo $sc_seq_vert ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_name_; ?>">
 <input class="sc-js-input scFormObjectOddMult" style=";" id="id_sc_field_name_<?php echo $sc_seq_vert ?>" type=text name="name_<?php echo $sc_seq_vert ?>" value="<?php echo NM_encode_input($name_) ?>"
 size=50 maxlength=32767 alt="{datatype: 'text', maxLength: 32767, allowedChars: '', lettersCase: 'upper', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddMultWm', maskChars: '(){}[].,;:-+/ '}"></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_name_<?php echo $sc_seq_vert; ?>_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_name_<?php echo $sc_seq_vert; ?>_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php if (isset($this->nmgp_cmp_hidden['email_']) && $this->nmgp_cmp_hidden['email_'] == 'off') { $sc_hidden_yes++;  ?>
<input type=hidden name="email_<?php echo $sc_seq_vert ?>" value="<?php echo NM_encode_input($email_) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOddMult" id="hidden_field_data_email_<?php echo $sc_seq_vert; ?>" style="<?php echo $sStyleHidden_email_; ?>;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOddMult" style=";;vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly_email_ && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["email_"]) &&  $this->nmgp_cmp_readonly["email_"] == "on") { 

 ?>
<input type=hidden name="email_<?php echo $sc_seq_vert ?>" value="<?php echo NM_encode_input($email_) . "\">" . $email_ . ""; ?>
<?php } else { ?>
<span id="id_read_on_email_<?php echo $sc_seq_vert ?>" class="sc-ui-readonly-email_<?php echo $sc_seq_vert ?>" style=";<?php echo $sStyleReadLab_email_; ?>"><?php echo NM_encode_input($this->email_); ?></span><span id="id_read_off_email_<?php echo $sc_seq_vert ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_email_; ?>">
 <input class="sc-js-input scFormObjectOddMult" style=";" id="id_sc_field_email_<?php echo $sc_seq_vert ?>" type=text name="email_<?php echo $sc_seq_vert ?>" value="<?php echo NM_encode_input($email_) ?>"
 size=50 maxlength=32767 alt="{enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddMultWm', maskChars: '(){}[].,;:-+/ '}">&nbsp;<span style="display: none"><?php echo nmButtonOutput($this->arr_buttons, "bemail", "if (document.F1.email_" . $sc_seq_vert . ".value != '') {window.open('mailto:' + document.F1.email_" . $sc_seq_vert . ".value); }", "if (document.F1.email_" . $sc_seq_vert . ".value != '') {window.open('mailto:' + document.F1.email_" . $sc_seq_vert . ".value); }", "email_" . $sc_seq_vert . "_mail", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "");?>
</span>
</span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_email_<?php echo $sc_seq_vert; ?>_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_email_<?php echo $sc_seq_vert; ?>_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php if (isset($this->nmgp_cmp_hidden['login_']) && $this->nmgp_cmp_hidden['login_'] == 'off') { $sc_hidden_yes++;  ?>
<input type=hidden name="login_<?php echo $sc_seq_vert ?>" value="<?php echo NM_encode_input($login_) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOddMult" id="hidden_field_data_login_<?php echo $sc_seq_vert; ?>" style="<?php echo $sStyleHidden_login_; ?>;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOddMult" style=";;vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly_login_ && ($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir") || (isset($this->nmgp_cmp_readonly["login_"]) &&  $this->nmgp_cmp_readonly["login_"] == "on")) { 

 ?>
<input type=hidden name="login_<?php echo $sc_seq_vert ?>" value="<?php echo NM_encode_input($login_) . "\"><span id=\"id_ajax_label_login_" . $sc_seq_vert . "\">" . $login_ . "</span>"; ?>
<?php } else { ?>
<span id="id_read_on_login_<?php echo $sc_seq_vert ?>" class="sc-ui-readonly-login_<?php echo $sc_seq_vert ?>" style=";<?php echo $sStyleReadLab_login_; ?>"><?php echo NM_encode_input($this->login_); ?></span><span id="id_read_off_login_<?php echo $sc_seq_vert ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_login_; ?>">
 <input class="sc-js-input scFormObjectOddMult" style=";" id="id_sc_field_login_<?php echo $sc_seq_vert ?>" type=text name="login_<?php echo $sc_seq_vert ?>" value="<?php echo NM_encode_input($login_) ?>"
 size=20 maxlength=150 alt="{datatype: 'text', maxLength: 150, allowedChars: '', lettersCase: 'lower', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddMultWm', maskChars: '(){}[].,;:-+/ '}"></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_login_<?php echo $sc_seq_vert; ?>_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_login_<?php echo $sc_seq_vert; ?>_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php if (isset($this->nmgp_cmp_hidden['pswd_']) && $this->nmgp_cmp_hidden['pswd_'] == 'off') { $sc_hidden_yes++;  ?>
<input type=hidden name="pswd_<?php echo $sc_seq_vert ?>" value="<?php echo NM_encode_input($pswd_) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOddMult" id="hidden_field_data_pswd_<?php echo $sc_seq_vert; ?>" style="<?php echo $sStyleHidden_pswd_; ?>;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOddMult" style=";;vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly_pswd_ && ($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir") || (isset($this->nmgp_cmp_readonly["pswd_"]) &&  $this->nmgp_cmp_readonly["pswd_"] == "on")) { 

 ?>
<input type=hidden name="pswd_<?php echo $sc_seq_vert ?>" value="<?php echo NM_encode_input($pswd_) . "\"><span id=\"id_ajax_label_pswd_" . $sc_seq_vert . "\">" . $pswd_ . "</span>"; ?>
<?php } else { ?>
<span id="id_read_on_pswd_<?php echo $sc_seq_vert ?>" class="sc-ui-readonly-pswd_<?php echo $sc_seq_vert ?>" style=";<?php echo $sStyleReadLab_pswd_; ?>"><?php echo NM_encode_input($this->pswd_); ?></span><span id="id_read_off_pswd_<?php echo $sc_seq_vert ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_pswd_; ?>">
 <input class="sc-js-input scFormObjectOddMult" style=";" id="id_sc_field_pswd_<?php echo $sc_seq_vert ?>" type=text name="pswd_<?php echo $sc_seq_vert ?>" value="<?php echo NM_encode_input($pswd_) ?>"
 size=20 maxlength=150 alt="{datatype: 'text', maxLength: 150, allowedChars: '', lettersCase: 'lower', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddMultWm', maskChars: '(){}[].,;:-+/ '}"></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_pswd_<?php echo $sc_seq_vert; ?>_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_pswd_<?php echo $sc_seq_vert; ?>_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php if (isset($this->nmgp_cmp_hidden['access_fa_']) && $this->nmgp_cmp_hidden['access_fa_'] == 'off') { $sc_hidden_yes++;  ?>
<input type=hidden name="access_fa_<?php echo $sc_seq_vert ?>" value="<?php echo NM_encode_input($access_fa_) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOddMult" id="hidden_field_data_access_fa_<?php echo $sc_seq_vert; ?>" style="<?php echo $sStyleHidden_access_fa_; ?>;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOddMult" style=";;vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly_access_fa_ && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["access_fa_"]) &&  $this->nmgp_cmp_readonly["access_fa_"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['Lookup_access_fa_']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['Lookup_access_fa_'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['Lookup_access_fa_']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['Lookup_access_fa_'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['Lookup_access_fa_']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['Lookup_access_fa_'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['Lookup_access_fa_']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['Lookup_access_fa_'] = array(); 
    }
   $nm_comando = "SELECT codigo, valor 
FROM catalogo WHERE tipo= 'acceso_sistema'
ORDER BY valor";
   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando)) 
   {
       while (!$rs->EOF) 
       { 
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['Lookup_access_fa_'][] = $rs->fields[0];
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
   $access_fa__look = ""; 
   $todo = explode("?@?", trim($nmgp_def_dados)) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->access_fa__1))
          {
              foreach ($this->access_fa__1 as $tmp_access_fa_)
              {
                  if (trim($tmp_access_fa_) === trim($cadaselect[1])) { $access_fa__look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->access_fa_) === trim($cadaselect[1])) { $access_fa__look .= $cadaselect[0]; } 
          $x++; 
   }

?>
<input type=hidden name="access_fa_<?php echo $sc_seq_vert ?>" value="<?php echo NM_encode_input($access_fa_) . "\">" . $access_fa__look . ""; ?>
<?php } else { ?>
 
<?php  
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['Lookup_access_fa_']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['Lookup_access_fa_'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['Lookup_access_fa_']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['Lookup_access_fa_'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['Lookup_access_fa_']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['Lookup_access_fa_'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['Lookup_access_fa_']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['Lookup_access_fa_'] = array(); 
    }
   $nm_comando = "SELECT codigo, valor 
FROM catalogo WHERE tipo= 'acceso_sistema'
ORDER BY valor";
   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando)) 
   {
       while (!$rs->EOF) 
       { 
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['Lookup_access_fa_'][] = $rs->fields[0];
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
   $x = 0; 
   $access_fa__look = ""; 
   $todo = explode("?@?", trim($nmgp_def_dados)) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->access_fa__1))
          {
              foreach ($this->access_fa__1 as $tmp_access_fa_)
              {
                  if (trim($tmp_access_fa_) === trim($cadaselect[1])) { $access_fa__look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->access_fa_) === trim($cadaselect[1])) { $access_fa__look .= $cadaselect[0]; } 
          $x++; 
   }
   $x = 0; 
   echo "<span id=\"id_read_on_access_fa_" . $sc_seq_vert . "\" style=\";" .  $sStyleReadLab_access_fa_ . "\">" . NM_encode_input($access_fa__look) . "</span><span id=\"id_read_off_access_fa_" . $sc_seq_vert . "\" style=\"" . $sStyleReadInp_access_fa_ . "\">";
   $sCheckInsert = "";
   if ('novo' == $this->nmgp_opcao)
   {
      $sCheckInsert = "nm_check_insert(" . $sc_seq_vert . ");";
   }
   echo "<div id=\"idAjaxRadio_access_fa_" . $sc_seq_vert . "\">\r\n";
   $y = 0 ; 
   echo "<table border=0>\r\n";
   echo " <tr>\r\n";
   $todo = explode("?@?", $nmgp_def_dados) ; 
   while (!empty($todo[$x])) 
   {
          $cadaradio = explode("?#?", $todo[$x]) ; 
          if ($y == 2)
          {
              echo " </tr>\r\n";
              echo " <tr>\r\n";
              $y = 0;
          }
          echo "  <td class=\"scFormDataFontOddMult\" style=\";\">\r\n";
          echo "    <input type=radio name=\"access_fa_" . $sc_seq_vert . "\" value=\"$cadaradio[1]\"";
          if (trim($this->access_fa_) === trim($cadaradio[1])) 
          { 
              echo " checked" ; 
          } 
          if (strtoupper($cadaradio[2]) == "S") 
          { 
              if (empty($this->access_fa_)) 
              { 
                  echo " checked" ; 
              } 
          } 
          echo "  onClick=\"" . $sCheckInsert . "\" >" ; 
          echo $cadaradio[0] ; 
          $x++ ; 
          $y++ ; 
          echo "  </font></td>\r\n";
   } 
   echo " </tr>\r\n";
   echo "</table>";
   echo "</div>\r\n";
   echo "</span>";
?> 
<?php  }?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_access_fa_<?php echo $sc_seq_vert; ?>_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_access_fa_<?php echo $sc_seq_vert; ?>_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php if (isset($this->nmgp_cmp_hidden['access_fp_']) && $this->nmgp_cmp_hidden['access_fp_'] == 'off') { $sc_hidden_yes++;  ?>
<input type=hidden name="access_fp_<?php echo $sc_seq_vert ?>" value="<?php echo NM_encode_input($access_fp_) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOddMult" id="hidden_field_data_access_fp_<?php echo $sc_seq_vert; ?>" style="<?php echo $sStyleHidden_access_fp_; ?>;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOddMult" style=";;vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly_access_fp_ && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["access_fp_"]) &&  $this->nmgp_cmp_readonly["access_fp_"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['Lookup_access_fp_']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['Lookup_access_fp_'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['Lookup_access_fp_']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['Lookup_access_fp_'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['Lookup_access_fp_']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['Lookup_access_fp_'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['Lookup_access_fp_']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['Lookup_access_fp_'] = array(); 
    }
   $nm_comando = "SELECT codigo, valor 
FROM catalogo WHERE tipo= 'acceso_sistema'
ORDER BY valor";
   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando)) 
   {
       while (!$rs->EOF) 
       { 
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['Lookup_access_fp_'][] = $rs->fields[0];
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
   $access_fp__look = ""; 
   $todo = explode("?@?", trim($nmgp_def_dados)) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->access_fp__1))
          {
              foreach ($this->access_fp__1 as $tmp_access_fp_)
              {
                  if (trim($tmp_access_fp_) === trim($cadaselect[1])) { $access_fp__look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->access_fp_) === trim($cadaselect[1])) { $access_fp__look .= $cadaselect[0]; } 
          $x++; 
   }

?>
<input type=hidden name="access_fp_<?php echo $sc_seq_vert ?>" value="<?php echo NM_encode_input($access_fp_) . "\">" . $access_fp__look . ""; ?>
<?php } else { ?>
 
<?php  
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['Lookup_access_fp_']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['Lookup_access_fp_'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['Lookup_access_fp_']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['Lookup_access_fp_'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['Lookup_access_fp_']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['Lookup_access_fp_'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['Lookup_access_fp_']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['Lookup_access_fp_'] = array(); 
    }
   $nm_comando = "SELECT codigo, valor 
FROM catalogo WHERE tipo= 'acceso_sistema'
ORDER BY valor";
   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando)) 
   {
       while (!$rs->EOF) 
       { 
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['Lookup_access_fp_'][] = $rs->fields[0];
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
   $x = 0; 
   $access_fp__look = ""; 
   $todo = explode("?@?", trim($nmgp_def_dados)) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->access_fp__1))
          {
              foreach ($this->access_fp__1 as $tmp_access_fp_)
              {
                  if (trim($tmp_access_fp_) === trim($cadaselect[1])) { $access_fp__look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->access_fp_) === trim($cadaselect[1])) { $access_fp__look .= $cadaselect[0]; } 
          $x++; 
   }
   $x = 0; 
   echo "<span id=\"id_read_on_access_fp_" . $sc_seq_vert . "\" style=\";" .  $sStyleReadLab_access_fp_ . "\">" . NM_encode_input($access_fp__look) . "</span><span id=\"id_read_off_access_fp_" . $sc_seq_vert . "\" style=\"" . $sStyleReadInp_access_fp_ . "\">";
   $sCheckInsert = "";
   if ('novo' == $this->nmgp_opcao)
   {
      $sCheckInsert = "nm_check_insert(" . $sc_seq_vert . ");";
   }
   echo "<div id=\"idAjaxRadio_access_fp_" . $sc_seq_vert . "\">\r\n";
   $y = 0 ; 
   echo "<table border=0>\r\n";
   echo " <tr>\r\n";
   $todo = explode("?@?", $nmgp_def_dados) ; 
   while (!empty($todo[$x])) 
   {
          $cadaradio = explode("?#?", $todo[$x]) ; 
          if ($y == 2)
          {
              echo " </tr>\r\n";
              echo " <tr>\r\n";
              $y = 0;
          }
          echo "  <td class=\"scFormDataFontOddMult\" style=\";\">\r\n";
          echo "    <input type=radio name=\"access_fp_" . $sc_seq_vert . "\" value=\"$cadaradio[1]\"";
          if (trim($this->access_fp_) === trim($cadaradio[1])) 
          { 
              echo " checked" ; 
          } 
          if (strtoupper($cadaradio[2]) == "S") 
          { 
              if (empty($this->access_fp_)) 
              { 
                  echo " checked" ; 
              } 
          } 
          echo "  onClick=\"" . $sCheckInsert . "\" >" ; 
          echo $cadaradio[0] ; 
          $x++ ; 
          $y++ ; 
          echo "  </font></td>\r\n";
   } 
   echo " </tr>\r\n";
   echo "</table>";
   echo "</div>\r\n";
   echo "</span>";
?> 
<?php  }?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_access_fp_<?php echo $sc_seq_vert; ?>_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_access_fp_<?php echo $sc_seq_vert; ?>_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php if (isset($this->nmgp_cmp_hidden['access_im_']) && $this->nmgp_cmp_hidden['access_im_'] == 'off') { $sc_hidden_yes++;  ?>
<input type=hidden name="access_im_<?php echo $sc_seq_vert ?>" value="<?php echo NM_encode_input($access_im_) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOddMult" id="hidden_field_data_access_im_<?php echo $sc_seq_vert; ?>" style="<?php echo $sStyleHidden_access_im_; ?>;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOddMult" style=";;vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly_access_im_ && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["access_im_"]) &&  $this->nmgp_cmp_readonly["access_im_"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['Lookup_access_im_']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['Lookup_access_im_'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['Lookup_access_im_']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['Lookup_access_im_'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['Lookup_access_im_']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['Lookup_access_im_'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['Lookup_access_im_']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['Lookup_access_im_'] = array(); 
    }
   $nm_comando = "SELECT codigo, valor 
FROM catalogo WHERE tipo= 'acceso_sistema'
ORDER BY valor";
   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando)) 
   {
       while (!$rs->EOF) 
       { 
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['Lookup_access_im_'][] = $rs->fields[0];
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
   $access_im__look = ""; 
   $todo = explode("?@?", trim($nmgp_def_dados)) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->access_im__1))
          {
              foreach ($this->access_im__1 as $tmp_access_im_)
              {
                  if (trim($tmp_access_im_) === trim($cadaselect[1])) { $access_im__look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->access_im_) === trim($cadaselect[1])) { $access_im__look .= $cadaselect[0]; } 
          $x++; 
   }

?>
<input type=hidden name="access_im_<?php echo $sc_seq_vert ?>" value="<?php echo NM_encode_input($access_im_) . "\">" . $access_im__look . ""; ?>
<?php } else { ?>
 
<?php  
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['Lookup_access_im_']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['Lookup_access_im_'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['Lookup_access_im_']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['Lookup_access_im_'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['Lookup_access_im_']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['Lookup_access_im_'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['Lookup_access_im_']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['Lookup_access_im_'] = array(); 
    }
   $nm_comando = "SELECT codigo, valor 
FROM catalogo WHERE tipo= 'acceso_sistema'
ORDER BY valor";
   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando)) 
   {
       while (!$rs->EOF) 
       { 
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['Lookup_access_im_'][] = $rs->fields[0];
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
   $x = 0; 
   $access_im__look = ""; 
   $todo = explode("?@?", trim($nmgp_def_dados)) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->access_im__1))
          {
              foreach ($this->access_im__1 as $tmp_access_im_)
              {
                  if (trim($tmp_access_im_) === trim($cadaselect[1])) { $access_im__look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->access_im_) === trim($cadaselect[1])) { $access_im__look .= $cadaselect[0]; } 
          $x++; 
   }
   $x = 0; 
   echo "<span id=\"id_read_on_access_im_" . $sc_seq_vert . "\" style=\";" .  $sStyleReadLab_access_im_ . "\">" . NM_encode_input($access_im__look) . "</span><span id=\"id_read_off_access_im_" . $sc_seq_vert . "\" style=\"" . $sStyleReadInp_access_im_ . "\">";
   $sCheckInsert = "";
   if ('novo' == $this->nmgp_opcao)
   {
      $sCheckInsert = "nm_check_insert(" . $sc_seq_vert . ");";
   }
   echo "<div id=\"idAjaxRadio_access_im_" . $sc_seq_vert . "\">\r\n";
   $y = 0 ; 
   echo "<table border=0>\r\n";
   echo " <tr>\r\n";
   $todo = explode("?@?", $nmgp_def_dados) ; 
   while (!empty($todo[$x])) 
   {
          $cadaradio = explode("?#?", $todo[$x]) ; 
          if ($y == 2)
          {
              echo " </tr>\r\n";
              echo " <tr>\r\n";
              $y = 0;
          }
          echo "  <td class=\"scFormDataFontOddMult\" style=\";\">\r\n";
          echo "    <input type=radio name=\"access_im_" . $sc_seq_vert . "\" value=\"$cadaradio[1]\"";
          if (trim($this->access_im_) === trim($cadaradio[1])) 
          { 
              echo " checked" ; 
          } 
          if (strtoupper($cadaradio[2]) == "S") 
          { 
              if (empty($this->access_im_)) 
              { 
                  echo " checked" ; 
              } 
          } 
          echo "  onClick=\"" . $sCheckInsert . "\" >" ; 
          echo $cadaradio[0] ; 
          $x++ ; 
          $y++ ; 
          echo "  </font></td>\r\n";
   } 
   echo " </tr>\r\n";
   echo "</table>";
   echo "</div>\r\n";
   echo "</span>";
?> 
<?php  }?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_access_im_<?php echo $sc_seq_vert; ?>_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_access_im_<?php echo $sc_seq_vert; ?>_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php if (isset($this->nmgp_cmp_hidden['zona_']) && $this->nmgp_cmp_hidden['zona_'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="zona_<?php echo $sc_seq_vert ?>" value="<?php echo NM_encode_input($this->zona_) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOddMult" id="hidden_field_data_zona_<?php echo $sc_seq_vert; ?>" style="<?php echo $sStyleHidden_zona_; ?>;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOddMult" style=";;vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly_zona_ && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["zona_"]) &&  $this->nmgp_cmp_readonly["zona_"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['Lookup_zona_']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['Lookup_zona_'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['Lookup_zona_']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['Lookup_zona_'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['Lookup_zona_']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['Lookup_zona_'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['Lookup_zona_']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['Lookup_zona_'] = array(); 
    }
   $nm_comando = "select codigo, valor from catalogo where tipo='zona'";
   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando)) 
   {
       while (!$rs->EOF) 
       { 
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['Lookup_zona_'][] = $rs->fields[0];
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
   $zona__look = ""; 
   $todo = explode("?@?", trim($nmgp_def_dados)) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->zona__1))
          {
              foreach ($this->zona__1 as $tmp_zona_)
              {
                  if (trim($tmp_zona_) === trim($cadaselect[1])) { $zona__look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->zona_) === trim($cadaselect[1])) { $zona__look .= $cadaselect[0]; } 
          $x++; 
   }

?>
<input type=hidden name="zona_<?php echo $sc_seq_vert ?>" value="<?php echo NM_encode_input($zona_) . "\">" . $zona__look . ""; ?>
<?php } else { ?>
 
<?php  
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['Lookup_zona_']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['Lookup_zona_'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['Lookup_zona_']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['Lookup_zona_'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['Lookup_zona_']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['Lookup_zona_'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['Lookup_zona_']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['Lookup_zona_'] = array(); 
    }
   $nm_comando = "select codigo, valor from catalogo where tipo='zona'";
   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando)) 
   {
       while (!$rs->EOF) 
       { 
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['Lookup_zona_'][] = $rs->fields[0];
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
   $zona__look = ""; 
   $todo = explode("?@?", trim($nmgp_def_dados)) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->zona__1))
          {
              foreach ($this->zona__1 as $tmp_zona_)
              {
                  if (trim($tmp_zona_) === trim($cadaselect[1])) { $zona__look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->zona_) === trim($cadaselect[1])) { $zona__look .= $cadaselect[0]; } 
          $x++; 
   }
   $x = 0; 
   echo "<span id=\"id_read_on_zona_" . $sc_seq_vert . "\" style=\";" .  $sStyleReadLab_zona_ . "\">" . NM_encode_input($zona__look) . "</span><span id=\"id_read_off_zona_" . $sc_seq_vert . "\" style=\"" . $sStyleReadInp_zona_ . "\">";
   echo " <span id=\"idAjaxSelect_zona_" .  $sc_seq_vert . "\"><select class=\"sc-js-input scFormObjectOddMult\" style=\";\" id=\"id_sc_field_zona_" . $sc_seq_vert . "\" name=\"zona_" . $sc_seq_vert . "\" size=1>" ; 
   echo "\r" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->zona_) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->zona_)) 
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
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_zona_<?php echo $sc_seq_vert; ?>_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_zona_<?php echo $sc_seq_vert; ?>_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php if (isset($this->nmgp_cmp_hidden['cod_provincia_']) && $this->nmgp_cmp_hidden['cod_provincia_'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="cod_provincia_<?php echo $sc_seq_vert ?>" value="<?php echo NM_encode_input($this->cod_provincia_) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOddMult" id="hidden_field_data_cod_provincia_<?php echo $sc_seq_vert; ?>" style="<?php echo $sStyleHidden_cod_provincia_; ?>;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOddMult" style=";;vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly_cod_provincia_ && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["cod_provincia_"]) &&  $this->nmgp_cmp_readonly["cod_provincia_"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['Lookup_cod_provincia_']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['Lookup_cod_provincia_'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['Lookup_cod_provincia_']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['Lookup_cod_provincia_'] = array(); 
}
if ($this->zona_ != "")
{ 
   $this->nm_clear_val("zona_");
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['Lookup_cod_provincia_']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['Lookup_cod_provincia_'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['Lookup_cod_provincia_']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['Lookup_cod_provincia_'] = array(); 
    }
   $nm_comando = "select cod_provincia, provincia from u_provincia where zona= '$this->zona_' order by provincia";
   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando)) 
   {
       while (!$rs->EOF) 
       { 
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['Lookup_cod_provincia_'][] = $rs->fields[0];
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
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['Lookup_cod_provincia_']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['Lookup_cod_provincia_'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['Lookup_cod_provincia_']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['Lookup_cod_provincia_'] = array(); 
}
if ($this->zona_ != "")
{ 
   $this->nm_clear_val("zona_");
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['Lookup_cod_provincia_']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['Lookup_cod_provincia_'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['Lookup_cod_provincia_']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['Lookup_cod_provincia_'] = array(); 
    }
   $nm_comando = "select cod_provincia, provincia from u_provincia where zona= '$this->zona_' order by provincia";
   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando)) 
   {
       while (!$rs->EOF) 
       { 
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['Lookup_cod_provincia_'][] = $rs->fields[0];
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
   $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['Lookup_cod_provincia_'][] = ''; 
   echo "  <option value=\"\">--Selecione--</option>" ; 
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





   </tr>
<?php   
        if (isset($sCheckRead_usr_active_))
       {
           $this->nmgp_cmp_readonly['usr_active_'] = $sCheckRead_usr_active_;
       }
       if ('display: none;' == $sStyleHidden_usr_active_)
       {
           $this->nmgp_cmp_hidden['usr_active_'] = 'off';
       }
       if (isset($sCheckRead_ci_))
       {
           $this->nmgp_cmp_readonly['ci_'] = $sCheckRead_ci_;
       }
       if ('display: none;' == $sStyleHidden_ci_)
       {
           $this->nmgp_cmp_hidden['ci_'] = 'off';
       }
       if (isset($sCheckRead_name_))
       {
           $this->nmgp_cmp_readonly['name_'] = $sCheckRead_name_;
       }
       if ('display: none;' == $sStyleHidden_name_)
       {
           $this->nmgp_cmp_hidden['name_'] = 'off';
       }
       if (isset($sCheckRead_email_))
       {
           $this->nmgp_cmp_readonly['email_'] = $sCheckRead_email_;
       }
       if ('display: none;' == $sStyleHidden_email_)
       {
           $this->nmgp_cmp_hidden['email_'] = 'off';
       }
       if (isset($sCheckRead_login_))
       {
           $this->nmgp_cmp_readonly['login_'] = $sCheckRead_login_;
       }
       if ('display: none;' == $sStyleHidden_login_)
       {
           $this->nmgp_cmp_hidden['login_'] = 'off';
       }
       if (isset($sCheckRead_pswd_))
       {
           $this->nmgp_cmp_readonly['pswd_'] = $sCheckRead_pswd_;
       }
       if ('display: none;' == $sStyleHidden_pswd_)
       {
           $this->nmgp_cmp_hidden['pswd_'] = 'off';
       }
       if (isset($sCheckRead_access_fa_))
       {
           $this->nmgp_cmp_readonly['access_fa_'] = $sCheckRead_access_fa_;
       }
       if ('display: none;' == $sStyleHidden_access_fa_)
       {
           $this->nmgp_cmp_hidden['access_fa_'] = 'off';
       }
       if (isset($sCheckRead_access_fp_))
       {
           $this->nmgp_cmp_readonly['access_fp_'] = $sCheckRead_access_fp_;
       }
       if ('display: none;' == $sStyleHidden_access_fp_)
       {
           $this->nmgp_cmp_hidden['access_fp_'] = 'off';
       }
       if (isset($sCheckRead_access_im_))
       {
           $this->nmgp_cmp_readonly['access_im_'] = $sCheckRead_access_im_;
       }
       if ('display: none;' == $sStyleHidden_access_im_)
       {
           $this->nmgp_cmp_hidden['access_im_'] = 'off';
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

   }
   if ($Line_Add) 
   { 
       $this->New_Line = ob_get_contents();
       ob_end_clean();
       $this->nmgp_opcao = $guarda_nmgp_opcao;
       $this->form_vert_form_sec_users = $guarda_form_vert_form_sec_users;
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
<tr><td class="scFormPageText">
<span class="scFormRequiredOddColorMult">* <?php echo $this->Ini->Nm_lang['lang_othr_reqr']; ?></span>
</td></tr> 
<tr><td>
<?php
if ((!$this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['run_iframe'] != "R")
{
?>
    <table style="border-collapse: collapse; border-width: 0px; width: 100%"><tr><td class="scFormToolbar" style="padding: 0px; spacing: 0px">
    <table style="border-collapse: collapse; border-width: 0px; width: 100%">
    <tr> 
     <td nowrap align="left" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php
}
if ((!$this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['run_iframe'] != "R")
{
    $NM_btn = false;
?> 
     </td> 
     <td nowrap align="center" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php 
    if (($opcao_botoes != "novo") && ('total' != $this->form_paginacao)) {
        $sCondStyle = ($this->nmgp_botoes['first'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "binicio", "nm_move ('inicio'); return false;", "nm_move ('inicio'); return false;", "sc_b_ini_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes != "novo") && ('total' != $this->form_paginacao)) {
        $sCondStyle = ($this->nmgp_botoes['forward'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bavanca", "nm_move ('avanca'); return false;", "nm_move ('avanca'); return false;", "sc_b_avc_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
if ($opcao_botoes != "novo" && $this->nmgp_botoes['navpage'] == "on")
{
?> 
     <span nowrap id="sc_b_navpage_b" class="scFormToolbarPadding"></span> 
<?php 
}
    if (($opcao_botoes != "novo") && ('total' != $this->form_paginacao)) {
        $sCondStyle = ($this->nmgp_botoes['back'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bretorna", "nm_move ('retorna'); return false;", "nm_move ('retorna'); return false;", "sc_b_ret_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes != "novo") && ('total' != $this->form_paginacao)) {
        $sCondStyle = ($this->nmgp_botoes['last'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bfinal", "nm_move ('final'); return false;", "nm_move ('final'); return false;", "sc_b_fim_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
?> 
     </td> 
     <td nowrap align="right" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php 
if ($opcao_botoes != "novo" && $this->nmgp_botoes['summary'] == "on")
{
?> 
     <span nowrap id="sc_b_summary_b" class="scFormToolbarPadding"></span> 
<?php 
}
}
if ((!$this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['run_iframe'] != "R")
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
<?php if (('novo' != $this->nmgp_opcao || $this->Embutida_form) && !$this->nmgp_form_empty && $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['run_iframe'] != "F") { ?><script>summary_atualiza(<?php echo ($_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['reg_start'] + 1). ", " . $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['reg_qtd'] . ", " . ($_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['total'] + 1)?>);</script><?php } ?>
<?php if (('novo' != $this->nmgp_opcao || $this->Embutida_form) && !$this->nmgp_form_empty && $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['run_iframe'] != "F") { ?><script>navpage_atualiza('<?php echo $this->SC_nav_page ?>');</script><?php } ?>
</td></tr> 
<?php
  if (!$this->Embutida_call && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['mostra_cab']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['mostra_cab'] != "N"))
  {
?>
</td></tr> 
<tr><td><table width="100%"> 
<style>
#rod_col1 { margin:0px; padding: 3px 0 0 5px; float:left; overflow:hidden;}
#rod_col2 { margin:0px; padding: 3px 5px 0 0; float:right; overflow:hidden; text-align:right;}

</style>

<table style="width: 100%; height:20px;" cellpadding="0px" cellspacing="0px" class="scFormFooter">
    <tr>
        <td>
            <span class="scFormFooterFont" id="rod_col1"></span>
        </td>
        <td>
            <span class="scFormFooterFont" id="rod_col2"><?php echo date($this->dateDefaultFormat()); ?></span>
        </td>
    </tr>
</table><?php
  }
?>
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
<script>parent.scAjaxDetailStatus("form_sec_users");</script>
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
if ($this->lig_edit_lookup && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['sc_modal']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['sc_modal'])
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
