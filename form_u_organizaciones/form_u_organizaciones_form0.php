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
 <TITLE><?php if ('novo' == $this->nmgp_opcao) { echo strip_tags("Registrar de Información"); } else { echo strip_tags("Actualización de Información"); } ?></TITLE>
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
  var sc_ajaxMsgTime = 5;
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
include_once("form_u_organizaciones_sajax_js.php");
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

 function nm_field_disabled(Fields, Opt) {
  opcao = "<?php if ($GLOBALS["erro_incl"] == 1) {echo "novo";} else {echo $this->nmgp_opcao;} ?>";
  if (opcao == "novo" && Opt == "U") {
      return;
  }
  if (opcao != "novo" && Opt == "I") {
      return;
  }
  Field = Fields.split(";");
  for (i=0; i < Field.length; i++)
  {
     F_temp = Field[i].split("=");
     F_name = F_temp[0];
     F_opc  = (F_temp[1] && ("disabled" == F_temp[1] || "true" == F_temp[1])) ? true : false;
     if (F_name == "estado_org")
     {
        $('select[name="estado_org"]').prop("disabled", F_opc);
        if (F_opc == "disabled") {
            $('select[name="estado_org"]').addClass("scFormInputDisabled");
        }
        else {
            $('select[name="estado_org"]').removeClass("scFormInputDisabled");
        }
     }
     if (F_name == "ruc_definitivo")
     {
        $('input[name="ruc_definitivo"]').prop("disabled", F_opc);
        if (F_opc == "disabled") {
            $('input[name="ruc_definitivo"]').addClass("scFormInputDisabled");
        }
        else {
            $('input[name="ruc_definitivo"]').removeClass("scFormInputDisabled");
        }
     }
     if (F_name == "ruc_provisional")
     {
        $('input[name="ruc_provisional"]').prop("disabled", F_opc);
        if (F_opc == "disabled") {
            $('input[name="ruc_provisional"]').addClass("scFormInputDisabled");
        }
        else {
            $('input[name="ruc_provisional"]').removeClass("scFormInputDisabled");
        }
     }
     if (F_name == "organizacion")
     {
        $('textarea[name="organizacion"]').prop("disabled", F_opc);
        if (F_opc == "disabled") {
            $('textarea[name="organizacion"]').addClass("scFormInputDisabled");
        }
        else {
            $('textarea[name="organizacion"]').removeClass("scFormInputDisabled");
        }
     }
     if (F_name == "actividad")
     {
        $('textarea[name="actividad"]').prop("disabled", F_opc);
        if (F_opc == "disabled") {
            $('textarea[name="actividad"]').addClass("scFormInputDisabled");
        }
        else {
            $('textarea[name="actividad"]').removeClass("scFormInputDisabled");
        }
     }
     if (F_name == "cod_zona")
     {
        $('select[name="cod_zona"]').prop("disabled", F_opc);
        if (F_opc == "disabled") {
            $('select[name="cod_zona"]').addClass("scFormInputDisabled");
        }
        else {
            $('select[name="cod_zona"]').removeClass("scFormInputDisabled");
        }
     }
     if (F_name == "cod_provincia")
     {
        $('select[name="cod_provincia"]').prop("disabled", F_opc);
        if (F_opc == "disabled") {
            $('select[name="cod_provincia"]').addClass("scFormInputDisabled");
        }
        else {
            $('select[name="cod_provincia"]').removeClass("scFormInputDisabled");
        }
     }
     if (F_name == "cod_canton")
     {
        $('select[name="cod_canton"]').prop("disabled", F_opc);
        if (F_opc == "disabled") {
            $('select[name="cod_canton"]').addClass("scFormInputDisabled");
        }
        else {
            $('select[name="cod_canton"]').removeClass("scFormInputDisabled");
        }
     }
     if (F_name == "cod_parroquia")
     {
        $('select[name="cod_parroquia"]').prop("disabled", F_opc);
        if (F_opc == "disabled") {
            $('select[name="cod_parroquia"]').addClass("scFormInputDisabled");
        }
        else {
            $('select[name="cod_parroquia"]').removeClass("scFormInputDisabled");
        }
     }
     if (F_name == "direccion")
     {
        $('textarea[name="direccion"]').prop("disabled", F_opc);
        if (F_opc == "disabled") {
            $('textarea[name="direccion"]').addClass("scFormInputDisabled");
        }
        else {
            $('textarea[name="direccion"]').removeClass("scFormInputDisabled");
        }
     }
  }
 } // nm_field_disabled
<?php

include_once('form_u_organizaciones_jquery.php');

?>

 var scQSInit = true;
 var scQSPos = {};
 $(function() {

  scJQElementsAdd('');

  scJQGeneralAdd();

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
$str_iframe_body = ('F' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['run_iframe'] || 'R' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['run_iframe']) ? 'margin: 2px;' : '';
 if (isset($_SESSION['nm_aba_bg_color']))
 {
     $this->Ini->cor_bg_grid = $_SESSION['nm_aba_bg_color'];
     $this->Ini->img_fun_pag = $_SESSION['nm_aba_bg_img'];
 }
if ($GLOBALS["erro_incl"] == 1)
{
    $this->nmgp_opcao = "novo";
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['opc_ant'] = "novo";
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['recarga'] = "novo";
}
if (empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['recarga']))
{
    $opcao_botoes = $this->nmgp_opcao;
}
else
{
    $opcao_botoes = $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['recarga'];
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
 include_once("form_u_organizaciones_js0.php");
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
               action="form_u_organizaciones.php" 
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
$int_iframe_padding = ('F' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['run_iframe'] || 'R' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['run_iframe']) ? 0 : "0px";
?>
<?php
$_SESSION['scriptcase']['error_span_title']['form_u_organizaciones'] = $this->Ini->Error_icon_span;
$_SESSION['scriptcase']['error_icon_title']['form_u_organizaciones'] = '' != $this->Ini->Err_ico_title ? $this->Ini->path_icones . '/' . $this->Ini->Err_ico_title : '';
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
       <TD align="center" valign="bottom" class="scFormBlockFont" style="font-size: 14px; color: #FFFFFF">BÚSQUEDA DE ORGANIZACIÓN / UNIDAD ECONÓMICA POPULAR</TD>
       
      </TR>
     </TABLE>
    </TD>
   </tr>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['ruc']))
    {
        $this->nm_new_label['ruc'] = "REGISTRO ÚNICO DE CONTRIBUYENTE (R.U.C.)";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $ruc = $this->ruc;
   $sStyleHidden_ruc = '';
   if (isset($this->nmgp_cmp_hidden['ruc']) && $this->nmgp_cmp_hidden['ruc'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['ruc']);
       $sStyleHidden_ruc = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_ruc = 'display: none;';
   $sStyleReadInp_ruc = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['ruc']) && $this->nmgp_cmp_readonly['ruc'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['ruc']);
       $sStyleReadLab_ruc = '';
       $sStyleReadInp_ruc = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['ruc']) && $this->nmgp_cmp_hidden['ruc'] == 'off') { $sc_hidden_yes++;  ?>
<input type=hidden name="ruc" value="<?php echo NM_encode_input($ruc) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix" id="hidden_field_label_ruc" style="<?php echo $sStyleHidden_ruc; ?>;"><span id="id_label_ruc"><?php echo $this->nm_new_label['ruc']; ?></span></TD>
    <TD class="scFormDataOdd" id="hidden_field_data_ruc" style="<?php echo $sStyleHidden_ruc; ?>;"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd" style=";;vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["ruc"]) &&  $this->nmgp_cmp_readonly["ruc"] == "on") { 

 ?>
<input type=hidden name="ruc" value="<?php echo NM_encode_input($ruc) . "\">" . $ruc . ""; ?>
<?php } else { ?>
<span id="id_read_on_ruc" class="sc-ui-readonly-ruc" style=";<?php echo $sStyleReadLab_ruc; ?>"><?php echo NM_encode_input($this->ruc); ?></span><span id="id_read_off_ruc" style="white-space: nowrap;<?php echo $sStyleReadInp_ruc; ?>">
 <input class="sc-js-input scFormObjectOdd" style=";" id="id_sc_field_ruc" type=text name="ruc" value="<?php echo NM_encode_input($ruc) ?>"
 size=20 maxlength=13 alt="{datatype: 'text', maxLength: 13, allowedChars: '0123456789', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}"></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_ruc_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_ruc_text"></span></td></tr></table></td></tr></table></TD>
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

    <TD class="scFormLabelOdd scUiLabelWidthFix" id="hidden_field_label_btnbuscar" style="<?php echo $sStyleHidden_btnbuscar; ?>;"><span id="id_label_btnbuscar"><?php echo $this->nm_new_label['btnbuscar']; ?></span></TD>
    <TD class="scFormDataOdd" id="hidden_field_data_btnbuscar" style="<?php echo $sStyleHidden_btnbuscar; ?>;"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd" style=";;vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["btnbuscar"]) &&  $this->nmgp_cmp_readonly["btnbuscar"] == "on") { 

 ?>
<input type=hidden name="btnbuscar" value="<?php echo NM_encode_input($btnbuscar) . "\">" . $btnbuscar . ""; ?>
<?php } else { ?>
<span id="id_read_on_btnbuscar" class="sc-ui-readonly-btnbuscar" style=";<?php echo $sStyleReadLab_btnbuscar; ?>"><?php echo NM_encode_input($this->btnbuscar); ?></span><span id="id_read_off_btnbuscar" style="white-space: nowrap;<?php echo $sStyleReadInp_btnbuscar; ?>">
 <input class="sc-js-input scFormObjectOdd" style="background-color:#CCCCCC;font-weight:bold;border-width:1px;border-color:#000000;text-align:center;vertical-align:middle;" id="id_sc_field_btnbuscar" type=text name="btnbuscar" value="<?php echo NM_encode_input($btnbuscar) ?>"
 size=6 maxlength=20 alt="{datatype: 'text', maxLength: 20, allowedChars: '', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: 'Buscar', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}"></span><?php } ?>
<?php echo nmButtonOutput($this->arr_buttons, "bfieldhelp", "nm_mostra_mens('btnbuscar')", "nm_mostra_mens('btnbuscar')", "", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "");?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_btnbuscar_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_btnbuscar_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
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


    <TD colspan="2" height="45" class="scFormBlock" style="background-color: #006699; text-align: center; vertical-align: bottom">
     <TABLE style="padding: 0px; spacing: 0px; border-width: 0px;" width="100%" height="100%">
      <TR>
       <TD align="center" valign="bottom" class="scFormBlockFont" style="font-size: 16px; color: #FFFFFF">REGISTRO DE ORGANIZACIONES / UNIDAD ECONÓMICA POPULAR</TD>
       
      </TR>
     </TABLE>
    </TD>




   </tr>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['ruc_definitivo']))
    {
        $this->nm_new_label['ruc_definitivo'] = "RUC DEFINITIVO";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $ruc_definitivo = $this->ruc_definitivo;
   $sStyleHidden_ruc_definitivo = '';
   if (isset($this->nmgp_cmp_hidden['ruc_definitivo']) && $this->nmgp_cmp_hidden['ruc_definitivo'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['ruc_definitivo']);
       $sStyleHidden_ruc_definitivo = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_ruc_definitivo = 'display: none;';
   $sStyleReadInp_ruc_definitivo = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['ruc_definitivo']) && $this->nmgp_cmp_readonly['ruc_definitivo'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['ruc_definitivo']);
       $sStyleReadLab_ruc_definitivo = '';
       $sStyleReadInp_ruc_definitivo = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['ruc_definitivo']) && $this->nmgp_cmp_hidden['ruc_definitivo'] == 'off') { $sc_hidden_yes++;  ?>
<input type=hidden name="ruc_definitivo" value="<?php echo NM_encode_input($ruc_definitivo) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd" id="hidden_field_data_ruc_definitivo" style="<?php echo $sStyleHidden_ruc_definitivo; ?>text-align:center;vertical-align:middle;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd" style="text-align:center;vertical-align:middle;padding: 0px"><span class="scFormLabelOddFormat" style="font-weight:bold;text-decoration:;text-align:center;vertical-align:middle;" ><span id="id_label_ruc_definitivo"><?php echo $this->nm_new_label['ruc_definitivo']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["ruc_definitivo"]) &&  $this->nmgp_cmp_readonly["ruc_definitivo"] == "on") { 

 ?>
<input type=hidden name="ruc_definitivo" value="<?php echo NM_encode_input($ruc_definitivo) . "\">" . $ruc_definitivo . ""; ?>
<?php } else { ?>
<span id="id_read_on_ruc_definitivo" class="sc-ui-readonly-ruc_definitivo" style="text-align:center;vertical-align:middle;<?php echo $sStyleReadLab_ruc_definitivo; ?>"><?php echo NM_encode_input($this->ruc_definitivo); ?></span><span id="id_read_off_ruc_definitivo" style="white-space: nowrap;<?php echo $sStyleReadInp_ruc_definitivo; ?>">
 <input class="sc-js-input scFormObjectOdd" style="width:100px;" id="id_sc_field_ruc_definitivo" type=text name="ruc_definitivo" value="<?php echo NM_encode_input($ruc_definitivo) ?>"
 size=14 maxlength=13 alt="{datatype: 'text', maxLength: 13, allowedChars: '0123456789', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}"></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_ruc_definitivo_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_ruc_definitivo_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php
    if (!isset($this->nm_new_label['ruc_provisional']))
    {
        $this->nm_new_label['ruc_provisional'] = "RUC PROVISIONAL";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $ruc_provisional = $this->ruc_provisional;
   $sStyleHidden_ruc_provisional = '';
   if (isset($this->nmgp_cmp_hidden['ruc_provisional']) && $this->nmgp_cmp_hidden['ruc_provisional'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['ruc_provisional']);
       $sStyleHidden_ruc_provisional = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_ruc_provisional = 'display: none;';
   $sStyleReadInp_ruc_provisional = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['ruc_provisional']) && $this->nmgp_cmp_readonly['ruc_provisional'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['ruc_provisional']);
       $sStyleReadLab_ruc_provisional = '';
       $sStyleReadInp_ruc_provisional = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['ruc_provisional']) && $this->nmgp_cmp_hidden['ruc_provisional'] == 'off') { $sc_hidden_yes++;  ?>
<input type=hidden name="ruc_provisional" value="<?php echo NM_encode_input($ruc_provisional) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd" id="hidden_field_data_ruc_provisional" style="<?php echo $sStyleHidden_ruc_provisional; ?>text-align:center;vertical-align:middle;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd" style="text-align:center;vertical-align:middle;padding: 0px"><span class="scFormLabelOddFormat" style="font-weight:bold;text-decoration:;text-align:center;vertical-align:middle;" ><span id="id_label_ruc_provisional"><?php echo $this->nm_new_label['ruc_provisional']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["ruc_provisional"]) &&  $this->nmgp_cmp_readonly["ruc_provisional"] == "on") { 

 ?>
<input type=hidden name="ruc_provisional" value="<?php echo NM_encode_input($ruc_provisional) . "\">" . $ruc_provisional . ""; ?>
<?php } else { ?>
<span id="id_read_on_ruc_provisional" class="sc-ui-readonly-ruc_provisional" style="text-align:center;vertical-align:middle;<?php echo $sStyleReadLab_ruc_provisional; ?>"><?php echo NM_encode_input($this->ruc_provisional); ?></span><span id="id_read_off_ruc_provisional" style="white-space: nowrap;<?php echo $sStyleReadInp_ruc_provisional; ?>">
 <input class="sc-js-input scFormObjectOdd" style="width:100px;" id="id_sc_field_ruc_provisional" type=text name="ruc_provisional" value="<?php echo NM_encode_input($ruc_provisional) ?>"
 size=14 maxlength=13 alt="{datatype: 'text', maxLength: 13, allowedChars: '0123456789', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}"></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_ruc_provisional_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_ruc_provisional_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php $sStyleHidden_ruc_definitivo_dumb = ('' == $sStyleHidden_ruc_definitivo) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_ruc_definitivo_dumb" style="<?php echo $sStyleHidden_ruc_definitivo_dumb; ?>"></TD>
<?php $sStyleHidden_ruc_provisional_dumb = ('' == $sStyleHidden_ruc_provisional) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_ruc_provisional_dumb" style="<?php echo $sStyleHidden_ruc_provisional_dumb; ?>"></TD>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['organizacion']))
    {
        $this->nm_new_label['organizacion'] = "NOMBRE DE LA ORGANIZACIÓN (según el RUC) ";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $organizacion = $this->organizacion;
   $sStyleHidden_organizacion = '';
   if (isset($this->nmgp_cmp_hidden['organizacion']) && $this->nmgp_cmp_hidden['organizacion'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['organizacion']);
       $sStyleHidden_organizacion = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_organizacion = 'display: none;';
   $sStyleReadInp_organizacion = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['organizacion']) && $this->nmgp_cmp_readonly['organizacion'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['organizacion']);
       $sStyleReadLab_organizacion = '';
       $sStyleReadInp_organizacion = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['organizacion']) && $this->nmgp_cmp_hidden['organizacion'] == 'off') { $sc_hidden_yes++;  ?>
<input type=hidden name="organizacion" value="<?php echo NM_encode_input($organizacion) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd" id="hidden_field_data_organizacion" style="<?php echo $sStyleHidden_organizacion; ?>width:300px;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd" style="width:300px;;vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat" style="font-weight:bold;" ><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['php_cmp_required']['organizacion']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['php_cmp_required']['organizacion'] == "on") { ?><span class="scFormRequiredOdd">*</span> <?php }?> <span id="id_label_organizacion"><?php echo $this->nm_new_label['organizacion']; ?></span></span><br>
<?php
$organizacion_val = str_replace('<br />', '__SC_BREAK_LINE__', nl2br($organizacion));

?>

<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["organizacion"]) &&  $this->nmgp_cmp_readonly["organizacion"] == "on") { 

 ?>
<input type=hidden name="organizacion" value="<?php echo NM_encode_input($organizacion) . "\">" . $organizacion_val . ""; ?>
<?php } else { ?>
<span id="id_read_on_organizacion" class="sc-ui-readonly-organizacion" style="width:300px;<?php echo $sStyleReadLab_organizacion; ?>"><?php echo NM_encode_input($organizacion_val); ?></span><span id="id_read_off_organizacion" style="white-space: nowrap;<?php echo $sStyleReadInp_organizacion; ?>">
 <textarea  class="sc-js-input scFormObjectOdd" style="width:300px;" name="organizacion" id="id_sc_field_organizacion" rows=3 cols=80
 alt="{datatype: 'text', maxLength: 255, allowedChars: '', lettersCase: 'upper', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}">
<?php echo str_replace(array('\r\n', '\n\r', '\n', '\r'), array("\r\n", "\n\r", "\n", "\r"), $organizacion); ?>
</textarea>
</span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_organizacion_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_organizacion_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php
    if (!isset($this->nm_new_label['actividad']))
    {
        $this->nm_new_label['actividad'] = "ACTIVIDAD DE LA ORGANIZACIÓN (según el RUC)";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $actividad = $this->actividad;
   $sStyleHidden_actividad = '';
   if (isset($this->nmgp_cmp_hidden['actividad']) && $this->nmgp_cmp_hidden['actividad'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['actividad']);
       $sStyleHidden_actividad = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_actividad = 'display: none;';
   $sStyleReadInp_actividad = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['actividad']) && $this->nmgp_cmp_readonly['actividad'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['actividad']);
       $sStyleReadLab_actividad = '';
       $sStyleReadInp_actividad = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['actividad']) && $this->nmgp_cmp_hidden['actividad'] == 'off') { $sc_hidden_yes++;  ?>
<input type=hidden name="actividad" value="<?php echo NM_encode_input($actividad) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd" id="hidden_field_data_actividad" style="<?php echo $sStyleHidden_actividad; ?>width:300px;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd" style="width:300px;;vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat" style="font-weight:bold;width:300px;" ><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['php_cmp_required']['actividad']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['php_cmp_required']['actividad'] == "on") { ?><span class="scFormRequiredOdd">*</span> <?php }?> <span id="id_label_actividad"><?php echo $this->nm_new_label['actividad']; ?></span></span><br>
<?php
$actividad_val = str_replace('<br />', '__SC_BREAK_LINE__', nl2br($actividad));

?>

<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["actividad"]) &&  $this->nmgp_cmp_readonly["actividad"] == "on") { 

 ?>
<input type=hidden name="actividad" value="<?php echo NM_encode_input($actividad) . "\">" . $actividad_val . ""; ?>
<?php } else { ?>
<span id="id_read_on_actividad" class="sc-ui-readonly-actividad" style="width:300px;<?php echo $sStyleReadLab_actividad; ?>"><?php echo NM_encode_input($actividad_val); ?></span><span id="id_read_off_actividad" style="white-space: nowrap;<?php echo $sStyleReadInp_actividad; ?>">
 <textarea  class="sc-js-input scFormObjectOdd" style="width:300px;" name="actividad" id="id_sc_field_actividad" rows=3 cols=60
 alt="{datatype: 'text', maxLength: 1000, allowedChars: '', lettersCase: 'upper', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}">
<?php echo str_replace(array('\r\n', '\n\r', '\n', '\r'), array("\r\n", "\n\r", "\n", "\r"), $actividad); ?>
</textarea>
</span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_actividad_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_actividad_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php $sStyleHidden_organizacion_dumb = ('' == $sStyleHidden_organizacion) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_organizacion_dumb" style="<?php echo $sStyleHidden_organizacion_dumb; ?>"></TD>
<?php $sStyleHidden_actividad_dumb = ('' == $sStyleHidden_actividad) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_actividad_dumb" style="<?php echo $sStyleHidden_actividad_dumb; ?>"></TD>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['tipo']))
   {
       $this->nm_new_label['tipo'] = "TIPO";
   }
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $tipo = $this->tipo;
   $sStyleHidden_tipo = '';
   if (isset($this->nmgp_cmp_hidden['tipo']) && $this->nmgp_cmp_hidden['tipo'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['tipo']);
       $sStyleHidden_tipo = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_tipo = 'display: none;';
   $sStyleReadInp_tipo = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['tipo']) && $this->nmgp_cmp_readonly['tipo'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['tipo']);
       $sStyleReadLab_tipo = '';
       $sStyleReadInp_tipo = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['tipo']) && $this->nmgp_cmp_hidden['tipo'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="tipo" value="<?php echo NM_encode_input($this->tipo) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd" id="hidden_field_data_tipo" style="<?php echo $sStyleHidden_tipo; ?>;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd" style=";;vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat" style="font-weight:bold;" ><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['php_cmp_required']['tipo']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['php_cmp_required']['tipo'] == "on") { ?><span class="scFormRequiredOdd">*</span> <?php }?> <span id="id_label_tipo"><?php echo $this->nm_new_label['tipo']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["tipo"]) &&  $this->nmgp_cmp_readonly["tipo"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_tipo']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_tipo'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_tipo']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_tipo'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_tipo']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_tipo'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_tipo']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_tipo'] = array(); 
    }

   $old_value_num_socios = $this->num_socios;
   $old_value_fecha_registro = $this->fecha_registro;
   $old_value_fecha_registro_hora = $this->fecha_registro_hora;
   $this->nm_tira_formatacao();
   $this->nm_converte_datas(false);


   $unformatted_value_num_socios = $this->num_socios;
   $unformatted_value_fecha_registro = $this->fecha_registro;
   $unformatted_value_fecha_registro_hora = $this->fecha_registro_hora;

   $nm_comando = "SELECT codigo, valor 
FROM catalogo WHERE tipo = 'tipo'
ORDER BY valor";

   $this->num_socios = $old_value_num_socios;
   $this->fecha_registro = $old_value_fecha_registro;
   $this->fecha_registro_hora = $old_value_fecha_registro_hora;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando)) 
   {
       while (!$rs->EOF) 
       { 
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_tipo'][] = $rs->fields[0];
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
   $tipo_look = ""; 
   $todo = explode("?@?", trim($nmgp_def_dados)) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->tipo_1))
          {
              foreach ($this->tipo_1 as $tmp_tipo)
              {
                  if (trim($tmp_tipo) === trim($cadaselect[1])) { $tipo_look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->tipo) === trim($cadaselect[1])) { $tipo_look .= $cadaselect[0]; } 
          $x++; 
   }

?>
<input type=hidden name="tipo" value="<?php echo NM_encode_input($tipo) . "\">" . $tipo_look . ""; ?>
<?php } else { ?>
 
<?php  
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_tipo']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_tipo'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_tipo']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_tipo'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_tipo']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_tipo'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_tipo']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_tipo'] = array(); 
    }

   $old_value_num_socios = $this->num_socios;
   $old_value_fecha_registro = $this->fecha_registro;
   $old_value_fecha_registro_hora = $this->fecha_registro_hora;
   $this->nm_tira_formatacao();
   $this->nm_converte_datas(false);


   $unformatted_value_num_socios = $this->num_socios;
   $unformatted_value_fecha_registro = $this->fecha_registro;
   $unformatted_value_fecha_registro_hora = $this->fecha_registro_hora;

   $nm_comando = "SELECT codigo, valor 
FROM catalogo WHERE tipo = 'tipo'
ORDER BY valor";

   $this->num_socios = $old_value_num_socios;
   $this->fecha_registro = $old_value_fecha_registro;
   $this->fecha_registro_hora = $old_value_fecha_registro_hora;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando)) 
   {
       while (!$rs->EOF) 
       { 
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_tipo'][] = $rs->fields[0];
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
   $tipo_look = ""; 
   $todo = explode("?@?", trim($nmgp_def_dados)) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->tipo_1))
          {
              foreach ($this->tipo_1 as $tmp_tipo)
              {
                  if (trim($tmp_tipo) === trim($cadaselect[1])) { $tipo_look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->tipo) === trim($cadaselect[1])) { $tipo_look .= $cadaselect[0]; } 
          $x++; 
   }
   $x = 0; 
   echo "<span id=\"id_read_on_tipo\" style=\";" .  $sStyleReadLab_tipo . "\">" . NM_encode_input($tipo_look) . "</span><span id=\"id_read_off_tipo\" style=\"" . $sStyleReadInp_tipo . "\">";
   echo " <span id=\"idAjaxSelect_tipo\"><select class=\"sc-js-input scFormObjectOdd\" style=\";\" id=\"id_sc_field_tipo\" name=\"tipo\" size=1>" ; 
   echo "\r" ; 
   $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_tipo'][] = ''; 
   echo "  <option value=\"\">---Seleccione---</option>" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->tipo) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->tipo)) 
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
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_tipo_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_tipo_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php
   if (!isset($this->nm_new_label['forma_organizacion']))
   {
       $this->nm_new_label['forma_organizacion'] = "FORMA DE ORGANIZACIÓN DE LA E.P.S.";
   }
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $forma_organizacion = $this->forma_organizacion;
   $sStyleHidden_forma_organizacion = '';
   if (isset($this->nmgp_cmp_hidden['forma_organizacion']) && $this->nmgp_cmp_hidden['forma_organizacion'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['forma_organizacion']);
       $sStyleHidden_forma_organizacion = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_forma_organizacion = 'display: none;';
   $sStyleReadInp_forma_organizacion = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['forma_organizacion']) && $this->nmgp_cmp_readonly['forma_organizacion'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['forma_organizacion']);
       $sStyleReadLab_forma_organizacion = '';
       $sStyleReadInp_forma_organizacion = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['forma_organizacion']) && $this->nmgp_cmp_hidden['forma_organizacion'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="forma_organizacion" value="<?php echo NM_encode_input($this->forma_organizacion) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd" id="hidden_field_data_forma_organizacion" style="<?php echo $sStyleHidden_forma_organizacion; ?>vertical-align:middle;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd" style="vertical-align:middle;padding: 0px"><span class="scFormLabelOddFormat" style="font-weight:bold;vertical-align:middle;" ><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['php_cmp_required']['forma_organizacion']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['php_cmp_required']['forma_organizacion'] == "on") { ?><span class="scFormRequiredOdd">*</span> <?php }?> <span id="id_label_forma_organizacion"><?php echo $this->nm_new_label['forma_organizacion']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["forma_organizacion"]) &&  $this->nmgp_cmp_readonly["forma_organizacion"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_forma_organizacion']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_forma_organizacion'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_forma_organizacion']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_forma_organizacion'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_forma_organizacion']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_forma_organizacion'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_forma_organizacion']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_forma_organizacion'] = array(); 
    }

   $old_value_num_socios = $this->num_socios;
   $old_value_fecha_registro = $this->fecha_registro;
   $old_value_fecha_registro_hora = $this->fecha_registro_hora;
   $this->nm_tira_formatacao();
   $this->nm_converte_datas(false);


   $unformatted_value_num_socios = $this->num_socios;
   $unformatted_value_fecha_registro = $this->fecha_registro;
   $unformatted_value_fecha_registro_hora = $this->fecha_registro_hora;

   $nm_comando = "SELECT codigo, valor 
FROM catalogo WHERE tipo = 'tipo_institucion'  and padre = '$this->tipo'
ORDER BY valor";

   $this->num_socios = $old_value_num_socios;
   $this->fecha_registro = $old_value_fecha_registro;
   $this->fecha_registro_hora = $old_value_fecha_registro_hora;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando)) 
   {
       while (!$rs->EOF) 
       { 
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_forma_organizacion'][] = $rs->fields[0];
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
   $forma_organizacion_look = ""; 
   $todo = explode("?@?", trim($nmgp_def_dados)) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->forma_organizacion_1))
          {
              foreach ($this->forma_organizacion_1 as $tmp_forma_organizacion)
              {
                  if (trim($tmp_forma_organizacion) === trim($cadaselect[1])) { $forma_organizacion_look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->forma_organizacion) === trim($cadaselect[1])) { $forma_organizacion_look .= $cadaselect[0]; } 
          $x++; 
   }

?>
<input type=hidden name="forma_organizacion" value="<?php echo NM_encode_input($forma_organizacion) . "\">" . $forma_organizacion_look . ""; ?>
<?php } else { ?>
 
<?php  
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_forma_organizacion']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_forma_organizacion'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_forma_organizacion']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_forma_organizacion'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_forma_organizacion']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_forma_organizacion'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_forma_organizacion']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_forma_organizacion'] = array(); 
    }

   $old_value_num_socios = $this->num_socios;
   $old_value_fecha_registro = $this->fecha_registro;
   $old_value_fecha_registro_hora = $this->fecha_registro_hora;
   $this->nm_tira_formatacao();
   $this->nm_converte_datas(false);


   $unformatted_value_num_socios = $this->num_socios;
   $unformatted_value_fecha_registro = $this->fecha_registro;
   $unformatted_value_fecha_registro_hora = $this->fecha_registro_hora;

   $nm_comando = "SELECT codigo, valor 
FROM catalogo WHERE tipo = 'tipo_institucion'  and padre = '$this->tipo'
ORDER BY valor";

   $this->num_socios = $old_value_num_socios;
   $this->fecha_registro = $old_value_fecha_registro;
   $this->fecha_registro_hora = $old_value_fecha_registro_hora;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando)) 
   {
       while (!$rs->EOF) 
       { 
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_forma_organizacion'][] = $rs->fields[0];
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
   $forma_organizacion_look = ""; 
   $todo = explode("?@?", trim($nmgp_def_dados)) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->forma_organizacion_1))
          {
              foreach ($this->forma_organizacion_1 as $tmp_forma_organizacion)
              {
                  if (trim($tmp_forma_organizacion) === trim($cadaselect[1])) { $forma_organizacion_look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->forma_organizacion) === trim($cadaselect[1])) { $forma_organizacion_look .= $cadaselect[0]; } 
          $x++; 
   }
   $x = 0; 
   echo "<span id=\"id_read_on_forma_organizacion\" style=\"vertical-align:middle;" .  $sStyleReadLab_forma_organizacion . "\">" . NM_encode_input($forma_organizacion_look) . "</span><span id=\"id_read_off_forma_organizacion\" style=\"" . $sStyleReadInp_forma_organizacion . "\">";
   echo " <span id=\"idAjaxSelect_forma_organizacion\"><select class=\"sc-js-input scFormObjectOdd\" style=\"vertical-align:middle;width:300px;\" id=\"id_sc_field_forma_organizacion\" name=\"forma_organizacion\" size=1>" ; 
   echo "\r" ; 
   $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_forma_organizacion'][] = '---'; 
   echo "  <option value=\"---\">---Seleccione---</option>" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->forma_organizacion) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->forma_organizacion)) 
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
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_forma_organizacion_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_forma_organizacion_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php $sStyleHidden_tipo_dumb = ('' == $sStyleHidden_tipo) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_tipo_dumb" style="<?php echo $sStyleHidden_tipo_dumb; ?>"></TD>
<?php $sStyleHidden_forma_organizacion_dumb = ('' == $sStyleHidden_forma_organizacion) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_forma_organizacion_dumb" style="<?php echo $sStyleHidden_forma_organizacion_dumb; ?>"></TD>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['estado_org']))
   {
       $this->nm_new_label['estado_org'] = "ESTADO ORGANIZACIÓN";
   }
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $estado_org = $this->estado_org;
   $sStyleHidden_estado_org = '';
   if (isset($this->nmgp_cmp_hidden['estado_org']) && $this->nmgp_cmp_hidden['estado_org'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['estado_org']);
       $sStyleHidden_estado_org = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_estado_org = 'display: none;';
   $sStyleReadInp_estado_org = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['estado_org']) && $this->nmgp_cmp_readonly['estado_org'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['estado_org']);
       $sStyleReadLab_estado_org = '';
       $sStyleReadInp_estado_org = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['estado_org']) && $this->nmgp_cmp_hidden['estado_org'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="estado_org" value="<?php echo NM_encode_input($this->estado_org) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd" id="hidden_field_data_estado_org" style="<?php echo $sStyleHidden_estado_org; ?>;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd" style=";;vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat" style="font-weight:bold;" ><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['php_cmp_required']['estado_org']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['php_cmp_required']['estado_org'] == "on") { ?><span class="scFormRequiredOdd">*</span> <?php }?> <span id="id_label_estado_org"><?php echo $this->nm_new_label['estado_org']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["estado_org"]) &&  $this->nmgp_cmp_readonly["estado_org"] == "on") { 

$estado_org_look = "";
 if ($this->estado_org == "activa") { $estado_org_look .= "ACTIVA" ;} 
 if ($this->estado_org == "inactiva") { $estado_org_look .= "INACTIVA" ;} 
?>
<input type=hidden name="estado_org" value="<?php echo NM_encode_input($estado_org) . "\">" . $estado_org_look . ""; ?>
<?php } else { ?>
<?php

$estado_org_look = "";
 if ($this->estado_org == "activa") { $estado_org_look .= "ACTIVA" ;} 
 if ($this->estado_org == "inactiva") { $estado_org_look .= "INACTIVA" ;} 
?>
<span id="id_read_on_estado_org" style=";<?php echo $sStyleReadLab_estado_org; ?>"><?php echo NM_encode_input($estado_org_look); ?></span><span id="id_read_off_estado_org" style="<?php echo $sStyleReadInp_estado_org; ?>">
 <span id="idAjaxSelect_estado_org"><select class="sc-js-input scFormObjectOdd" style=";" id="id_sc_field_estado_org" name="estado_org" size=1>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_estado_org'][] = ''; ?>
 <option value="">--Seleccione--</option>
 <option value="activa" <?php  if ($this->estado_org == "activa") { echo " selected" ;} ?>>ACTIVA</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_estado_org'][] = 'activa'; ?>
 <option value="inactiva" <?php  if ($this->estado_org == "inactiva") { echo " selected" ;} ?>>INACTIVA</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_estado_org'][] = 'inactiva'; ?>
 </select></span>
</span><?php  }?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_estado_org_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_estado_org_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

    <TD class="scFormDataOdd" colspan="1" >&nbsp;</TD>




<?php if ($sc_hidden_yes > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } ?>
<?php $sStyleHidden_estado_org_dumb = ('' == $sStyleHidden_estado_org) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_estado_org_dumb" style="<?php echo $sStyleHidden_estado_org_dumb; ?>"></TD>
   </tr>
<?php $sc_hidden_no = 1; ?>
</TABLE></div><!-- bloco_f -->
   </td>
   </tr></table>
   <a name="bloco_2"></a>
   <table width="100%" height="100%" cellpadding="0"><tr valign="top"><td width="100%" height="">
<div id="div_hidden_bloco_2"><!-- bloco_c -->
<TABLE align="center" id="hidden_bloco_2" class="scFormTable" width="100%" style="height: 100%;">   <tr>


    <TD colspan="4" height="40" class="scFormBlock" style="background-color: #006699; vertical-align: bottom">
     <TABLE style="padding: 0px; spacing: 0px; border-width: 0px;" width="100%" height="100%">
      <TR>
       <TD align="" valign="bottom" class="scFormBlockFont" style="font-size: 14px; color: #FFFFFF">UBICACIÓN</TD>
       
      </TR>
     </TABLE>
    </TD>




   </tr>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['cod_zona']))
   {
       $this->nm_new_label['cod_zona'] = "ZONA";
   }
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $cod_zona = $this->cod_zona;
   $sStyleHidden_cod_zona = '';
   if (isset($this->nmgp_cmp_hidden['cod_zona']) && $this->nmgp_cmp_hidden['cod_zona'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['cod_zona']);
       $sStyleHidden_cod_zona = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_cod_zona = 'display: none;';
   $sStyleReadInp_cod_zona = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['cod_zona']) && $this->nmgp_cmp_readonly['cod_zona'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['cod_zona']);
       $sStyleReadLab_cod_zona = '';
       $sStyleReadInp_cod_zona = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['cod_zona']) && $this->nmgp_cmp_hidden['cod_zona'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="cod_zona" value="<?php echo NM_encode_input($this->cod_zona) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd" id="hidden_field_data_cod_zona" style="<?php echo $sStyleHidden_cod_zona; ?>text-align:center;vertical-align:middle;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd" style="text-align:center;vertical-align:middle;padding: 0px"><span class="scFormLabelOddFormat" style="font-weight:bold;text-align:center;vertical-align:middle;" ><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['php_cmp_required']['cod_zona']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['php_cmp_required']['cod_zona'] == "on") { ?><span class="scFormRequiredOdd">*</span> <?php }?> <span id="id_label_cod_zona"><?php echo $this->nm_new_label['cod_zona']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["cod_zona"]) &&  $this->nmgp_cmp_readonly["cod_zona"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_cod_zona']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_cod_zona'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_cod_zona']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_cod_zona'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_cod_zona']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_cod_zona'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_cod_zona']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_cod_zona'] = array(); 
    }

   $old_value_num_socios = $this->num_socios;
   $old_value_fecha_registro = $this->fecha_registro;
   $old_value_fecha_registro_hora = $this->fecha_registro_hora;
   $this->nm_tira_formatacao();
   $this->nm_converte_datas(false);


   $unformatted_value_num_socios = $this->num_socios;
   $unformatted_value_fecha_registro = $this->fecha_registro;
   $unformatted_value_fecha_registro_hora = $this->fecha_registro_hora;

   $nm_comando = "SELECT codigo, valor 
FROM catalogo WHERE tipo = 'zona'
ORDER BY valor";

   $this->num_socios = $old_value_num_socios;
   $this->fecha_registro = $old_value_fecha_registro;
   $this->fecha_registro_hora = $old_value_fecha_registro_hora;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando)) 
   {
       while (!$rs->EOF) 
       { 
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_cod_zona'][] = $rs->fields[0];
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
   $cod_zona_look = ""; 
   $todo = explode("?@?", trim($nmgp_def_dados)) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->cod_zona_1))
          {
              foreach ($this->cod_zona_1 as $tmp_cod_zona)
              {
                  if (trim($tmp_cod_zona) === trim($cadaselect[1])) { $cod_zona_look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->cod_zona) === trim($cadaselect[1])) { $cod_zona_look .= $cadaselect[0]; } 
          $x++; 
   }

?>
<input type=hidden name="cod_zona" value="<?php echo NM_encode_input($cod_zona) . "\">" . $cod_zona_look . ""; ?>
<?php } else { ?>
 
<?php  
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_cod_zona']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_cod_zona'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_cod_zona']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_cod_zona'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_cod_zona']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_cod_zona'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_cod_zona']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_cod_zona'] = array(); 
    }

   $old_value_num_socios = $this->num_socios;
   $old_value_fecha_registro = $this->fecha_registro;
   $old_value_fecha_registro_hora = $this->fecha_registro_hora;
   $this->nm_tira_formatacao();
   $this->nm_converte_datas(false);


   $unformatted_value_num_socios = $this->num_socios;
   $unformatted_value_fecha_registro = $this->fecha_registro;
   $unformatted_value_fecha_registro_hora = $this->fecha_registro_hora;

   $nm_comando = "SELECT codigo, valor 
FROM catalogo WHERE tipo = 'zona'
ORDER BY valor";

   $this->num_socios = $old_value_num_socios;
   $this->fecha_registro = $old_value_fecha_registro;
   $this->fecha_registro_hora = $old_value_fecha_registro_hora;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando)) 
   {
       while (!$rs->EOF) 
       { 
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_cod_zona'][] = $rs->fields[0];
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
   $cod_zona_look = ""; 
   $todo = explode("?@?", trim($nmgp_def_dados)) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->cod_zona_1))
          {
              foreach ($this->cod_zona_1 as $tmp_cod_zona)
              {
                  if (trim($tmp_cod_zona) === trim($cadaselect[1])) { $cod_zona_look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->cod_zona) === trim($cadaselect[1])) { $cod_zona_look .= $cadaselect[0]; } 
          $x++; 
   }
   $x = 0; 
   echo "<span id=\"id_read_on_cod_zona\" style=\"text-align:center;vertical-align:middle;" .  $sStyleReadLab_cod_zona . "\">" . NM_encode_input($cod_zona_look) . "</span><span id=\"id_read_off_cod_zona\" style=\"" . $sStyleReadInp_cod_zona . "\">";
   echo " <span id=\"idAjaxSelect_cod_zona\"><select class=\"sc-js-input scFormObjectOdd\" style=\"text-align:center;vertical-align:middle;width:160px;\" id=\"id_sc_field_cod_zona\" name=\"cod_zona\" size=1>" ; 
   echo "\r" ; 
   $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_cod_zona'][] = ''; 
   echo "  <option value=\"\">--Seleccione--</option>" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->cod_zona) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->cod_zona)) 
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
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_cod_zona_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_cod_zona_text"></span></td></tr></table></td></tr></table> </TD>
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

    <TD class="scFormDataOdd" id="hidden_field_data_cod_provincia" style="<?php echo $sStyleHidden_cod_provincia; ?>text-align:center;vertical-align:middle;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd" style="text-align:center;vertical-align:middle;padding: 0px"><span class="scFormLabelOddFormat" style="font-weight:bold;text-align:center;vertical-align:middle;" ><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['php_cmp_required']['cod_provincia']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['php_cmp_required']['cod_provincia'] == "on") { ?><span class="scFormRequiredOdd">*</span> <?php }?> <span id="id_label_cod_provincia"><?php echo $this->nm_new_label['cod_provincia']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["cod_provincia"]) &&  $this->nmgp_cmp_readonly["cod_provincia"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_cod_provincia']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_cod_provincia'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_cod_provincia']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_cod_provincia'] = array(); 
}
if ($this->cod_zona != "")
{ 
   $this->nm_clear_val("cod_zona");
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_cod_provincia']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_cod_provincia'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_cod_provincia']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_cod_provincia'] = array(); 
    }

   $old_value_num_socios = $this->num_socios;
   $old_value_fecha_registro = $this->fecha_registro;
   $old_value_fecha_registro_hora = $this->fecha_registro_hora;
   $this->nm_tira_formatacao();
   $this->nm_converte_datas(false);


   $unformatted_value_num_socios = $this->num_socios;
   $unformatted_value_fecha_registro = $this->fecha_registro;
   $unformatted_value_fecha_registro_hora = $this->fecha_registro_hora;

   $nm_comando = "select cod_provincia, provincia from u_provincia where zona= $this->cod_zona order by provincia";

   $this->num_socios = $old_value_num_socios;
   $this->fecha_registro = $old_value_fecha_registro;
   $this->fecha_registro_hora = $old_value_fecha_registro_hora;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando)) 
   {
       while (!$rs->EOF) 
       { 
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_cod_provincia'][] = $rs->fields[0];
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
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_cod_provincia']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_cod_provincia'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_cod_provincia']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_cod_provincia'] = array(); 
}
if ($this->cod_zona != "")
{ 
   $this->nm_clear_val("cod_zona");
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_cod_provincia']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_cod_provincia'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_cod_provincia']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_cod_provincia'] = array(); 
    }

   $old_value_num_socios = $this->num_socios;
   $old_value_fecha_registro = $this->fecha_registro;
   $old_value_fecha_registro_hora = $this->fecha_registro_hora;
   $this->nm_tira_formatacao();
   $this->nm_converte_datas(false);


   $unformatted_value_num_socios = $this->num_socios;
   $unformatted_value_fecha_registro = $this->fecha_registro;
   $unformatted_value_fecha_registro_hora = $this->fecha_registro_hora;

   $nm_comando = "select cod_provincia, provincia from u_provincia where zona= $this->cod_zona order by provincia";

   $this->num_socios = $old_value_num_socios;
   $this->fecha_registro = $old_value_fecha_registro;
   $this->fecha_registro_hora = $old_value_fecha_registro_hora;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando)) 
   {
       while (!$rs->EOF) 
       { 
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_cod_provincia'][] = $rs->fields[0];
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
   echo "<span id=\"id_read_on_cod_provincia\" style=\"text-align:center;vertical-align:middle;" .  $sStyleReadLab_cod_provincia . "\">" . NM_encode_input($cod_provincia_look) . "</span><span id=\"id_read_off_cod_provincia\" style=\"" . $sStyleReadInp_cod_provincia . "\">";
   echo " <span id=\"idAjaxSelect_cod_provincia\"><select class=\"sc-js-input scFormObjectOdd\" style=\"text-align:center;vertical-align:middle;width:160px;\" id=\"id_sc_field_cod_provincia\" name=\"cod_provincia\" size=1>" ; 
   echo "\r" ; 
   $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_cod_provincia'][] = ''; 
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

    <TD class="scFormDataOdd" id="hidden_field_data_cod_canton" style="<?php echo $sStyleHidden_cod_canton; ?>text-align:center;vertical-align:middle;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd" style="text-align:center;vertical-align:middle;padding: 0px"><span class="scFormLabelOddFormat" style="font-weight:bold;text-align:center;vertical-align:middle;" ><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['php_cmp_required']['cod_canton']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['php_cmp_required']['cod_canton'] == "on") { ?><span class="scFormRequiredOdd">*</span> <?php }?> <span id="id_label_cod_canton"><?php echo $this->nm_new_label['cod_canton']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["cod_canton"]) &&  $this->nmgp_cmp_readonly["cod_canton"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_cod_canton']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_cod_canton'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_cod_canton']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_cod_canton'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_cod_canton']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_cod_canton'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_cod_canton']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_cod_canton'] = array(); 
    }

   $old_value_num_socios = $this->num_socios;
   $old_value_fecha_registro = $this->fecha_registro;
   $old_value_fecha_registro_hora = $this->fecha_registro_hora;
   $this->nm_tira_formatacao();
   $this->nm_converte_datas(false);


   $unformatted_value_num_socios = $this->num_socios;
   $unformatted_value_fecha_registro = $this->fecha_registro;
   $unformatted_value_fecha_registro_hora = $this->fecha_registro_hora;

   $nm_comando = "SELECT cod_canton, canton 
FROM u_canton 
where cod_provincia = '$this->cod_provincia'
ORDER BY canton";

   $this->num_socios = $old_value_num_socios;
   $this->fecha_registro = $old_value_fecha_registro;
   $this->fecha_registro_hora = $old_value_fecha_registro_hora;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando)) 
   {
       while (!$rs->EOF) 
       { 
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_cod_canton'][] = $rs->fields[0];
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
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_cod_canton']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_cod_canton'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_cod_canton']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_cod_canton'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_cod_canton']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_cod_canton'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_cod_canton']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_cod_canton'] = array(); 
    }

   $old_value_num_socios = $this->num_socios;
   $old_value_fecha_registro = $this->fecha_registro;
   $old_value_fecha_registro_hora = $this->fecha_registro_hora;
   $this->nm_tira_formatacao();
   $this->nm_converte_datas(false);


   $unformatted_value_num_socios = $this->num_socios;
   $unformatted_value_fecha_registro = $this->fecha_registro;
   $unformatted_value_fecha_registro_hora = $this->fecha_registro_hora;

   $nm_comando = "SELECT cod_canton, canton 
FROM u_canton 
where cod_provincia = '$this->cod_provincia'
ORDER BY canton";

   $this->num_socios = $old_value_num_socios;
   $this->fecha_registro = $old_value_fecha_registro;
   $this->fecha_registro_hora = $old_value_fecha_registro_hora;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando)) 
   {
       while (!$rs->EOF) 
       { 
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_cod_canton'][] = $rs->fields[0];
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
   echo "<span id=\"id_read_on_cod_canton\" style=\"text-align:center;vertical-align:middle;" .  $sStyleReadLab_cod_canton . "\">" . NM_encode_input($cod_canton_look) . "</span><span id=\"id_read_off_cod_canton\" style=\"" . $sStyleReadInp_cod_canton . "\">";
   echo " <span id=\"idAjaxSelect_cod_canton\"><select class=\"sc-js-input scFormObjectOdd\" style=\"text-align:center;vertical-align:middle;width:160px;\" id=\"id_sc_field_cod_canton\" name=\"cod_canton\" size=1>" ; 
   echo "\r" ; 
   $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_cod_canton'][] = ''; 
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

    <TD class="scFormDataOdd" id="hidden_field_data_cod_parroquia" style="<?php echo $sStyleHidden_cod_parroquia; ?>text-align:center;vertical-align:middle;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd" style="text-align:center;vertical-align:middle;padding: 0px"><span class="scFormLabelOddFormat" style="font-weight:bold;text-align:center;vertical-align:middle;" ><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['php_cmp_required']['cod_parroquia']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['php_cmp_required']['cod_parroquia'] == "on") { ?><span class="scFormRequiredOdd">*</span> <?php }?> <span id="id_label_cod_parroquia"><?php echo $this->nm_new_label['cod_parroquia']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["cod_parroquia"]) &&  $this->nmgp_cmp_readonly["cod_parroquia"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_cod_parroquia']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_cod_parroquia'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_cod_parroquia']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_cod_parroquia'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_cod_parroquia']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_cod_parroquia'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_cod_parroquia']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_cod_parroquia'] = array(); 
    }

   $old_value_num_socios = $this->num_socios;
   $old_value_fecha_registro = $this->fecha_registro;
   $old_value_fecha_registro_hora = $this->fecha_registro_hora;
   $this->nm_tira_formatacao();
   $this->nm_converte_datas(false);


   $unformatted_value_num_socios = $this->num_socios;
   $unformatted_value_fecha_registro = $this->fecha_registro;
   $unformatted_value_fecha_registro_hora = $this->fecha_registro_hora;

   $nm_comando = "SELECT cod_parroquia, parroquia FROM u_parroquia
where cod_provincia = '$this->cod_provincia' and cod_canton = '$this->cod_canton'
ORDER BY parroquia";

   $this->num_socios = $old_value_num_socios;
   $this->fecha_registro = $old_value_fecha_registro;
   $this->fecha_registro_hora = $old_value_fecha_registro_hora;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando)) 
   {
       while (!$rs->EOF) 
       { 
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_cod_parroquia'][] = $rs->fields[0];
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
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_cod_parroquia']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_cod_parroquia'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_cod_parroquia']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_cod_parroquia'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_cod_parroquia']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_cod_parroquia'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_cod_parroquia']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_cod_parroquia'] = array(); 
    }

   $old_value_num_socios = $this->num_socios;
   $old_value_fecha_registro = $this->fecha_registro;
   $old_value_fecha_registro_hora = $this->fecha_registro_hora;
   $this->nm_tira_formatacao();
   $this->nm_converte_datas(false);


   $unformatted_value_num_socios = $this->num_socios;
   $unformatted_value_fecha_registro = $this->fecha_registro;
   $unformatted_value_fecha_registro_hora = $this->fecha_registro_hora;

   $nm_comando = "SELECT cod_parroquia, parroquia FROM u_parroquia
where cod_provincia = '$this->cod_provincia' and cod_canton = '$this->cod_canton'
ORDER BY parroquia";

   $this->num_socios = $old_value_num_socios;
   $this->fecha_registro = $old_value_fecha_registro;
   $this->fecha_registro_hora = $old_value_fecha_registro_hora;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando)) 
   {
       while (!$rs->EOF) 
       { 
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_cod_parroquia'][] = $rs->fields[0];
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
   echo "<span id=\"id_read_on_cod_parroquia\" style=\"text-align:center;vertical-align:middle;" .  $sStyleReadLab_cod_parroquia . "\">" . NM_encode_input($cod_parroquia_look) . "</span><span id=\"id_read_off_cod_parroquia\" style=\"" . $sStyleReadInp_cod_parroquia . "\">";
   echo " <span id=\"idAjaxSelect_cod_parroquia\"><select class=\"sc-js-input scFormObjectOdd\" style=\"text-align:center;vertical-align:middle;width:160px;\" id=\"id_sc_field_cod_parroquia\" name=\"cod_parroquia\" size=1>" ; 
   echo "\r" ; 
   $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_cod_parroquia'][] = ''; 
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






<?php $sStyleHidden_cod_zona_dumb = ('' == $sStyleHidden_cod_zona) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_cod_zona_dumb" style="<?php echo $sStyleHidden_cod_zona_dumb; ?>"></TD>
<?php $sStyleHidden_cod_provincia_dumb = ('' == $sStyleHidden_cod_provincia) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_cod_provincia_dumb" style="<?php echo $sStyleHidden_cod_provincia_dumb; ?>"></TD>
<?php $sStyleHidden_cod_canton_dumb = ('' == $sStyleHidden_cod_canton) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_cod_canton_dumb" style="<?php echo $sStyleHidden_cod_canton_dumb; ?>"></TD>
<?php $sStyleHidden_cod_parroquia_dumb = ('' == $sStyleHidden_cod_parroquia) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_cod_parroquia_dumb" style="<?php echo $sStyleHidden_cod_parroquia_dumb; ?>"></TD>
   </tr>
<?php $sc_hidden_no = 1; ?>
</TABLE></div><!-- bloco_f -->
   </td>
   </tr></table>
   <a name="bloco_3"></a>
   <table width="100%" height="100%" cellpadding="0"><tr valign="top"><td width="100%" height="">
<div id="div_hidden_bloco_3"><!-- bloco_c -->
<TABLE align="center" id="hidden_bloco_3" class="scFormTable" width="100%" style="height: 100%;"><?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


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

    <TD class="scFormDataOdd" id="hidden_field_data_direccion" style="<?php echo $sStyleHidden_direccion; ?>width:650px;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd" style="width:650px;;vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat" style="font-weight:bold;" ><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['php_cmp_required']['direccion']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['php_cmp_required']['direccion'] == "on") { ?><span class="scFormRequiredOdd">*</span> <?php }?> <span id="id_label_direccion"><?php echo $this->nm_new_label['direccion']; ?></span></span><br>
<?php
$direccion_val = str_replace('<br />', '__SC_BREAK_LINE__', nl2br($direccion));

?>

<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["direccion"]) &&  $this->nmgp_cmp_readonly["direccion"] == "on") { 

 ?>
<input type=hidden name="direccion" value="<?php echo NM_encode_input($direccion) . "\">" . $direccion_val . ""; ?>
<?php } else { ?>
<span id="id_read_on_direccion" class="sc-ui-readonly-direccion" style="width:650px;<?php echo $sStyleReadLab_direccion; ?>"><?php echo NM_encode_input($direccion_val); ?></span><span id="id_read_off_direccion" style="white-space: nowrap;<?php echo $sStyleReadInp_direccion; ?>">
 <textarea  class="sc-js-input scFormObjectOdd" style="width:650px;" name="direccion" id="id_sc_field_direccion" rows=2 cols=50
 alt="{datatype: 'text', maxLength: 255, allowedChars: '', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}">
<?php echo str_replace(array('\r\n', '\n\r', '\n', '\r'), array("\r\n", "\n\r", "\n", "\r"), $direccion); ?>
</textarea>
</span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_direccion_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_direccion_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 






<?php $sStyleHidden_direccion_dumb = ('' == $sStyleHidden_direccion) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_direccion_dumb" style="<?php echo $sStyleHidden_direccion_dumb; ?>"></TD>
   </tr>
<?php $sc_hidden_no = 1; ?>
</TABLE></div><!-- bloco_f -->
   </td>
   </tr></table>
   <a name="bloco_4"></a>
   <table width="100%" height="100%" cellpadding="0"><tr valign="top"><td width="100%" height="">
<div id="div_hidden_bloco_4"><!-- bloco_c -->
<TABLE align="center" id="hidden_bloco_4" class="scFormTable" width="100%" style="height: 100%;">   <tr>


    <TD colspan="3" height="40" class="scFormBlock" style="background-color: #006699; vertical-align: bottom">
     <TABLE style="padding: 0px; spacing: 0px; border-width: 0px;" width="100%" height="100%">
      <TR>
       <TD align="" valign="bottom" class="scFormBlockFont" style="font-size: 14px; color: #FFFFFF">CONTACTOS</TD>
       
      </TR>
     </TABLE>
    </TD>




   </tr>
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

    <TD class="scFormDataOdd" id="hidden_field_data_telefono" style="<?php echo $sStyleHidden_telefono; ?>;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd" style=";;vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat" style="font-weight:bold;" ><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['php_cmp_required']['telefono']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['php_cmp_required']['telefono'] == "on") { ?><span class="scFormRequiredOdd">*</span> <?php }?> <span id="id_label_telefono"><?php echo $this->nm_new_label['telefono']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["telefono"]) &&  $this->nmgp_cmp_readonly["telefono"] == "on") { 

 ?>
<input type=hidden name="telefono" value="<?php echo NM_encode_input($telefono) . "\">" . $telefono . ""; ?>
<?php } else { ?>
<span id="id_read_on_telefono" class="sc-ui-readonly-telefono" style=";<?php echo $sStyleReadLab_telefono; ?>"><?php echo NM_encode_input($this->telefono); ?></span><span id="id_read_off_telefono" style="white-space: nowrap;<?php echo $sStyleReadInp_telefono; ?>">
 <input class="sc-js-input scFormObjectOdd" style=";" id="id_sc_field_telefono" type=text name="telefono" value="<?php echo NM_encode_input($telefono) ?>"
 size=11 maxlength=10 alt="{datatype: 'text', maxLength: 10, allowedChars: '0123456789', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}"></span><?php } ?>
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

    <TD class="scFormDataOdd" id="hidden_field_data_celular" style="<?php echo $sStyleHidden_celular; ?>vertical-align:middle;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd" style="vertical-align:middle;padding: 0px"><span class="scFormLabelOddFormat" style="font-weight:bold;vertical-align:middle;" ><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['php_cmp_required']['celular']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['php_cmp_required']['celular'] == "on") { ?><span class="scFormRequiredOdd">*</span> <?php }?> <span id="id_label_celular"><?php echo $this->nm_new_label['celular']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["celular"]) &&  $this->nmgp_cmp_readonly["celular"] == "on") { 

 ?>
<input type=hidden name="celular" value="<?php echo NM_encode_input($celular) . "\">" . $celular . ""; ?>
<?php } else { ?>
<span id="id_read_on_celular" class="sc-ui-readonly-celular" style="vertical-align:middle;<?php echo $sStyleReadLab_celular; ?>"><?php echo NM_encode_input($this->celular); ?></span><span id="id_read_off_celular" style="white-space: nowrap;<?php echo $sStyleReadInp_celular; ?>">
 <input class="sc-js-input scFormObjectOdd" style="vertical-align:middle;width:100px;" id="id_sc_field_celular" type=text name="celular" value="<?php echo NM_encode_input($celular) ?>"
 size=10 maxlength=10 alt="{datatype: 'text', maxLength: 10, allowedChars: '0123456789', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}"></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_celular_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_celular_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php
    if (!isset($this->nm_new_label['email']))
    {
        $this->nm_new_label['email'] = "CORREO ELECTRÓNICO";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $email = $this->email;
   $sStyleHidden_email = '';
   if (isset($this->nmgp_cmp_hidden['email']) && $this->nmgp_cmp_hidden['email'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['email']);
       $sStyleHidden_email = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_email = 'display: none;';
   $sStyleReadInp_email = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['email']) && $this->nmgp_cmp_readonly['email'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['email']);
       $sStyleReadLab_email = '';
       $sStyleReadInp_email = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['email']) && $this->nmgp_cmp_hidden['email'] == 'off') { $sc_hidden_yes++;  ?>
<input type=hidden name="email" value="<?php echo NM_encode_input($email) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd" id="hidden_field_data_email" style="<?php echo $sStyleHidden_email; ?>;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd" style=";;vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat" style=";" ><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['php_cmp_required']['email']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['php_cmp_required']['email'] == "on") { ?><span class="scFormRequiredOdd">*</span> <?php }?> <span id="id_label_email"><?php echo $this->nm_new_label['email']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["email"]) &&  $this->nmgp_cmp_readonly["email"] == "on") { 

 ?>
<input type=hidden name="email" value="<?php echo NM_encode_input($email) . "\">" . $email . ""; ?>
<?php } else { ?>
<span id="id_read_on_email" class="sc-ui-readonly-email" style=";<?php echo $sStyleReadLab_email; ?>"><?php echo NM_encode_input($this->email); ?></span><span id="id_read_off_email" style="white-space: nowrap;<?php echo $sStyleReadInp_email; ?>">
 <input class="sc-js-input scFormObjectOdd" style=";" id="id_sc_field_email" type=text name="email" value="<?php echo NM_encode_input($email) ?>"
 size=50 maxlength=50 alt="{enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}">&nbsp;<span style="display: none"><?php echo nmButtonOutput($this->arr_buttons, "bemail", "if (document.F1.email.value != '') {window.open('mailto:' + document.F1.email.value); }", "if (document.F1.email.value != '') {window.open('mailto:' + document.F1.email.value); }", "email_mail", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "");?>
</span>
</span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_email_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_email_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 






<?php $sStyleHidden_telefono_dumb = ('' == $sStyleHidden_telefono) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_telefono_dumb" style="<?php echo $sStyleHidden_telefono_dumb; ?>"></TD>
<?php $sStyleHidden_celular_dumb = ('' == $sStyleHidden_celular) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_celular_dumb" style="<?php echo $sStyleHidden_celular_dumb; ?>"></TD>
<?php $sStyleHidden_email_dumb = ('' == $sStyleHidden_email) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_email_dumb" style="<?php echo $sStyleHidden_email_dumb; ?>"></TD>
   </tr>
<?php $sc_hidden_no = 1; ?>
</TABLE></div><!-- bloco_f -->
   </td>
   </tr></table>
   <a name="bloco_5"></a>
   <table width="100%" height="100%" cellpadding="0"><tr valign="top"><td width="100%" height="">
<div id="div_hidden_bloco_5"><!-- bloco_c -->
<TABLE align="center" id="hidden_bloco_5" class="scFormTable" width="100%" style="height: 100%;">   <tr>


    <TD colspan="2" height="40" class="scFormBlock" style="background-color: #006699; vertical-align: bottom">
     <TABLE style="padding: 0px; spacing: 0px; border-width: 0px;" width="100%" height="100%">
      <TR>
       <TD align="" valign="bottom" class="scFormBlockFont" style="font-size: 14px; color: #FFFFFF">MATRIZ PRODUCTIVA (M.P.)</TD>
       
      </TR>
     </TABLE>
    </TD>




   </tr>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['circuito_economico']))
   {
       $this->nm_new_label['circuito_economico'] = "CORRESPONDE A UN CIRCUITO ECONÓMICO";
   }
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $circuito_economico = $this->circuito_economico;
   $sStyleHidden_circuito_economico = '';
   if (isset($this->nmgp_cmp_hidden['circuito_economico']) && $this->nmgp_cmp_hidden['circuito_economico'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['circuito_economico']);
       $sStyleHidden_circuito_economico = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_circuito_economico = 'display: none;';
   $sStyleReadInp_circuito_economico = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['circuito_economico']) && $this->nmgp_cmp_readonly['circuito_economico'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['circuito_economico']);
       $sStyleReadLab_circuito_economico = '';
       $sStyleReadInp_circuito_economico = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['circuito_economico']) && $this->nmgp_cmp_hidden['circuito_economico'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="circuito_economico" value="<?php echo NM_encode_input($this->circuito_economico) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd" id="hidden_field_data_circuito_economico" style="<?php echo $sStyleHidden_circuito_economico; ?>vertical-align:middle;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd" style="vertical-align:middle;padding: 0px"><span class="scFormLabelOddFormat" style="font-weight:bold;vertical-align:middle;" ><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['php_cmp_required']['circuito_economico']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['php_cmp_required']['circuito_economico'] == "on") { ?><span class="scFormRequiredOdd">*</span> <?php }?> <span id="id_label_circuito_economico"><?php echo $this->nm_new_label['circuito_economico']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["circuito_economico"]) &&  $this->nmgp_cmp_readonly["circuito_economico"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_circuito_economico']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_circuito_economico'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_circuito_economico']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_circuito_economico'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_circuito_economico']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_circuito_economico'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_circuito_economico']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_circuito_economico'] = array(); 
    }

   $old_value_num_socios = $this->num_socios;
   $old_value_fecha_registro = $this->fecha_registro;
   $old_value_fecha_registro_hora = $this->fecha_registro_hora;
   $this->nm_tira_formatacao();
   $this->nm_converte_datas(false);


   $unformatted_value_num_socios = $this->num_socios;
   $unformatted_value_fecha_registro = $this->fecha_registro;
   $unformatted_value_fecha_registro_hora = $this->fecha_registro_hora;

   $nm_comando = "SELECT codigo, valor 
FROM catalogo 
WHERE tipo = 'pregunta'
ORDER BY valor";

   $this->num_socios = $old_value_num_socios;
   $this->fecha_registro = $old_value_fecha_registro;
   $this->fecha_registro_hora = $old_value_fecha_registro_hora;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando)) 
   {
       while (!$rs->EOF) 
       { 
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_circuito_economico'][] = $rs->fields[0];
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
   $circuito_economico_look = ""; 
   $todo = explode("?@?", trim($nmgp_def_dados)) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->circuito_economico_1))
          {
              foreach ($this->circuito_economico_1 as $tmp_circuito_economico)
              {
                  if (trim($tmp_circuito_economico) === trim($cadaselect[1])) { $circuito_economico_look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->circuito_economico) === trim($cadaselect[1])) { $circuito_economico_look .= $cadaselect[0]; } 
          $x++; 
   }

?>
<input type=hidden name="circuito_economico" value="<?php echo NM_encode_input($circuito_economico) . "\">" . $circuito_economico_look . ""; ?>
<?php } else { ?>
 
<?php  
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_circuito_economico']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_circuito_economico'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_circuito_economico']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_circuito_economico'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_circuito_economico']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_circuito_economico'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_circuito_economico']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_circuito_economico'] = array(); 
    }

   $old_value_num_socios = $this->num_socios;
   $old_value_fecha_registro = $this->fecha_registro;
   $old_value_fecha_registro_hora = $this->fecha_registro_hora;
   $this->nm_tira_formatacao();
   $this->nm_converte_datas(false);


   $unformatted_value_num_socios = $this->num_socios;
   $unformatted_value_fecha_registro = $this->fecha_registro;
   $unformatted_value_fecha_registro_hora = $this->fecha_registro_hora;

   $nm_comando = "SELECT codigo, valor 
FROM catalogo 
WHERE tipo = 'pregunta'
ORDER BY valor";

   $this->num_socios = $old_value_num_socios;
   $this->fecha_registro = $old_value_fecha_registro;
   $this->fecha_registro_hora = $old_value_fecha_registro_hora;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando)) 
   {
       while (!$rs->EOF) 
       { 
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_circuito_economico'][] = $rs->fields[0];
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
   $circuito_economico_look = ""; 
   $todo = explode("?@?", trim($nmgp_def_dados)) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->circuito_economico_1))
          {
              foreach ($this->circuito_economico_1 as $tmp_circuito_economico)
              {
                  if (trim($tmp_circuito_economico) === trim($cadaselect[1])) { $circuito_economico_look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->circuito_economico) === trim($cadaselect[1])) { $circuito_economico_look .= $cadaselect[0]; } 
          $x++; 
   }
   $x = 0; 
   echo "<span id=\"id_read_on_circuito_economico\" style=\"vertical-align:middle;" .  $sStyleReadLab_circuito_economico . "\">" . NM_encode_input($circuito_economico_look) . "</span><span id=\"id_read_off_circuito_economico\" style=\"" . $sStyleReadInp_circuito_economico . "\">";
   echo " <span id=\"idAjaxSelect_circuito_economico\"><select class=\"sc-js-input scFormObjectOdd\" style=\"vertical-align:middle;width:280px;\" id=\"id_sc_field_circuito_economico\" name=\"circuito_economico\" size=1>" ; 
   echo "\r" ; 
   $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_circuito_economico'][] = ''; 
   echo "  <option value=\"\">---Seleccione---</option>" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->circuito_economico) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->circuito_economico)) 
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
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_circuito_economico_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_circuito_economico_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php
   if (!isset($this->nm_new_label['categoria_actividad_mp']))
   {
       $this->nm_new_label['categoria_actividad_mp'] = "CATEGORÍA DE LA ACTIVIDAD SEGÚN LA M.P.";
   }
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $categoria_actividad_mp = $this->categoria_actividad_mp;
   $sStyleHidden_categoria_actividad_mp = '';
   if (isset($this->nmgp_cmp_hidden['categoria_actividad_mp']) && $this->nmgp_cmp_hidden['categoria_actividad_mp'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['categoria_actividad_mp']);
       $sStyleHidden_categoria_actividad_mp = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_categoria_actividad_mp = 'display: none;';
   $sStyleReadInp_categoria_actividad_mp = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['categoria_actividad_mp']) && $this->nmgp_cmp_readonly['categoria_actividad_mp'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['categoria_actividad_mp']);
       $sStyleReadLab_categoria_actividad_mp = '';
       $sStyleReadInp_categoria_actividad_mp = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['categoria_actividad_mp']) && $this->nmgp_cmp_hidden['categoria_actividad_mp'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="categoria_actividad_mp" value="<?php echo NM_encode_input($this->categoria_actividad_mp) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd" id="hidden_field_data_categoria_actividad_mp" style="<?php echo $sStyleHidden_categoria_actividad_mp; ?>vertical-align:middle;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd" style="vertical-align:middle;padding: 0px"><span class="scFormLabelOddFormat" style="font-weight:bold;vertical-align:middle;" ><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['php_cmp_required']['categoria_actividad_mp']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['php_cmp_required']['categoria_actividad_mp'] == "on") { ?><span class="scFormRequiredOdd">*</span> <?php }?> <span id="id_label_categoria_actividad_mp"><?php echo $this->nm_new_label['categoria_actividad_mp']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["categoria_actividad_mp"]) &&  $this->nmgp_cmp_readonly["categoria_actividad_mp"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_categoria_actividad_mp']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_categoria_actividad_mp'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_categoria_actividad_mp']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_categoria_actividad_mp'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_categoria_actividad_mp']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_categoria_actividad_mp'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_categoria_actividad_mp']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_categoria_actividad_mp'] = array(); 
    }

   $old_value_num_socios = $this->num_socios;
   $old_value_fecha_registro = $this->fecha_registro;
   $old_value_fecha_registro_hora = $this->fecha_registro_hora;
   $this->nm_tira_formatacao();
   $this->nm_converte_datas(false);


   $unformatted_value_num_socios = $this->num_socios;
   $unformatted_value_fecha_registro = $this->fecha_registro;
   $unformatted_value_fecha_registro_hora = $this->fecha_registro_hora;

   $nm_comando = "SELECT codigo, valor 
FROM catalogo WHERE tipo = 'categoria_actividad' 
ORDER BY valor";

   $this->num_socios = $old_value_num_socios;
   $this->fecha_registro = $old_value_fecha_registro;
   $this->fecha_registro_hora = $old_value_fecha_registro_hora;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando)) 
   {
       while (!$rs->EOF) 
       { 
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_categoria_actividad_mp'][] = $rs->fields[0];
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
   $categoria_actividad_mp_look = ""; 
   $todo = explode("?@?", trim($nmgp_def_dados)) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->categoria_actividad_mp_1))
          {
              foreach ($this->categoria_actividad_mp_1 as $tmp_categoria_actividad_mp)
              {
                  if (trim($tmp_categoria_actividad_mp) === trim($cadaselect[1])) { $categoria_actividad_mp_look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->categoria_actividad_mp) === trim($cadaselect[1])) { $categoria_actividad_mp_look .= $cadaselect[0]; } 
          $x++; 
   }

?>
<input type=hidden name="categoria_actividad_mp" value="<?php echo NM_encode_input($categoria_actividad_mp) . "\">" . $categoria_actividad_mp_look . ""; ?>
<?php } else { ?>
 
<?php  
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_categoria_actividad_mp']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_categoria_actividad_mp'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_categoria_actividad_mp']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_categoria_actividad_mp'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_categoria_actividad_mp']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_categoria_actividad_mp'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_categoria_actividad_mp']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_categoria_actividad_mp'] = array(); 
    }

   $old_value_num_socios = $this->num_socios;
   $old_value_fecha_registro = $this->fecha_registro;
   $old_value_fecha_registro_hora = $this->fecha_registro_hora;
   $this->nm_tira_formatacao();
   $this->nm_converte_datas(false);


   $unformatted_value_num_socios = $this->num_socios;
   $unformatted_value_fecha_registro = $this->fecha_registro;
   $unformatted_value_fecha_registro_hora = $this->fecha_registro_hora;

   $nm_comando = "SELECT codigo, valor 
FROM catalogo WHERE tipo = 'categoria_actividad' 
ORDER BY valor";

   $this->num_socios = $old_value_num_socios;
   $this->fecha_registro = $old_value_fecha_registro;
   $this->fecha_registro_hora = $old_value_fecha_registro_hora;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando)) 
   {
       while (!$rs->EOF) 
       { 
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_categoria_actividad_mp'][] = $rs->fields[0];
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
   $categoria_actividad_mp_look = ""; 
   $todo = explode("?@?", trim($nmgp_def_dados)) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->categoria_actividad_mp_1))
          {
              foreach ($this->categoria_actividad_mp_1 as $tmp_categoria_actividad_mp)
              {
                  if (trim($tmp_categoria_actividad_mp) === trim($cadaselect[1])) { $categoria_actividad_mp_look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->categoria_actividad_mp) === trim($cadaselect[1])) { $categoria_actividad_mp_look .= $cadaselect[0]; } 
          $x++; 
   }
   $x = 0; 
   echo "<span id=\"id_read_on_categoria_actividad_mp\" style=\"vertical-align:middle;" .  $sStyleReadLab_categoria_actividad_mp . "\">" . NM_encode_input($categoria_actividad_mp_look) . "</span><span id=\"id_read_off_categoria_actividad_mp\" style=\"" . $sStyleReadInp_categoria_actividad_mp . "\">";
   echo " <span id=\"idAjaxSelect_categoria_actividad_mp\"><select class=\"sc-js-input scFormObjectOdd\" style=\"vertical-align:middle;width:280px;\" id=\"id_sc_field_categoria_actividad_mp\" name=\"categoria_actividad_mp\" size=1>" ; 
   echo "\r" ; 
   $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_categoria_actividad_mp'][] = ''; 
   echo "  <option value=\"\">---Seleccione---</option>" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->categoria_actividad_mp) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->categoria_actividad_mp)) 
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
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_categoria_actividad_mp_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_categoria_actividad_mp_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php $sStyleHidden_circuito_economico_dumb = ('' == $sStyleHidden_circuito_economico) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_circuito_economico_dumb" style="<?php echo $sStyleHidden_circuito_economico_dumb; ?>"></TD>
<?php $sStyleHidden_categoria_actividad_mp_dumb = ('' == $sStyleHidden_categoria_actividad_mp) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_categoria_actividad_mp_dumb" style="<?php echo $sStyleHidden_categoria_actividad_mp_dumb; ?>"></TD>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['identificacion_actividad_mp']))
   {
       $this->nm_new_label['identificacion_actividad_mp'] = "ACTIVIDAD DENTRO DE LA ESTRATEGIA DE LA M.P.";
   }
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $identificacion_actividad_mp = $this->identificacion_actividad_mp;
   $sStyleHidden_identificacion_actividad_mp = '';
   if (isset($this->nmgp_cmp_hidden['identificacion_actividad_mp']) && $this->nmgp_cmp_hidden['identificacion_actividad_mp'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['identificacion_actividad_mp']);
       $sStyleHidden_identificacion_actividad_mp = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_identificacion_actividad_mp = 'display: none;';
   $sStyleReadInp_identificacion_actividad_mp = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['identificacion_actividad_mp']) && $this->nmgp_cmp_readonly['identificacion_actividad_mp'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['identificacion_actividad_mp']);
       $sStyleReadLab_identificacion_actividad_mp = '';
       $sStyleReadInp_identificacion_actividad_mp = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['identificacion_actividad_mp']) && $this->nmgp_cmp_hidden['identificacion_actividad_mp'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="identificacion_actividad_mp" value="<?php echo NM_encode_input($this->identificacion_actividad_mp) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd" id="hidden_field_data_identificacion_actividad_mp" style="<?php echo $sStyleHidden_identificacion_actividad_mp; ?>vertical-align:middle;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd" style="vertical-align:middle;padding: 0px"><span class="scFormLabelOddFormat" style="font-weight:bold;vertical-align:middle;" ><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['php_cmp_required']['identificacion_actividad_mp']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['php_cmp_required']['identificacion_actividad_mp'] == "on") { ?><span class="scFormRequiredOdd">*</span> <?php }?> <span id="id_label_identificacion_actividad_mp"><?php echo $this->nm_new_label['identificacion_actividad_mp']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["identificacion_actividad_mp"]) &&  $this->nmgp_cmp_readonly["identificacion_actividad_mp"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_identificacion_actividad_mp']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_identificacion_actividad_mp'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_identificacion_actividad_mp']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_identificacion_actividad_mp'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_identificacion_actividad_mp']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_identificacion_actividad_mp'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_identificacion_actividad_mp']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_identificacion_actividad_mp'] = array(); 
    }

   $old_value_num_socios = $this->num_socios;
   $old_value_fecha_registro = $this->fecha_registro;
   $old_value_fecha_registro_hora = $this->fecha_registro_hora;
   $this->nm_tira_formatacao();
   $this->nm_converte_datas(false);


   $unformatted_value_num_socios = $this->num_socios;
   $unformatted_value_fecha_registro = $this->fecha_registro;
   $unformatted_value_fecha_registro_hora = $this->fecha_registro_hora;

   $nm_comando = "SELECT codigo, valor 
FROM catalogo WHERE tipo = 'identificacion_categoria_actividad' 
and PADRE = '$this->categoria_actividad_mp'
ORDER BY valor";

   $this->num_socios = $old_value_num_socios;
   $this->fecha_registro = $old_value_fecha_registro;
   $this->fecha_registro_hora = $old_value_fecha_registro_hora;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando)) 
   {
       while (!$rs->EOF) 
       { 
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_identificacion_actividad_mp'][] = $rs->fields[0];
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
   $identificacion_actividad_mp_look = ""; 
   $todo = explode("?@?", trim($nmgp_def_dados)) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->identificacion_actividad_mp_1))
          {
              foreach ($this->identificacion_actividad_mp_1 as $tmp_identificacion_actividad_mp)
              {
                  if (trim($tmp_identificacion_actividad_mp) === trim($cadaselect[1])) { $identificacion_actividad_mp_look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->identificacion_actividad_mp) === trim($cadaselect[1])) { $identificacion_actividad_mp_look .= $cadaselect[0]; } 
          $x++; 
   }

?>
<input type=hidden name="identificacion_actividad_mp" value="<?php echo NM_encode_input($identificacion_actividad_mp) . "\">" . $identificacion_actividad_mp_look . ""; ?>
<?php } else { ?>
 
<?php  
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_identificacion_actividad_mp']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_identificacion_actividad_mp'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_identificacion_actividad_mp']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_identificacion_actividad_mp'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_identificacion_actividad_mp']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_identificacion_actividad_mp'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_identificacion_actividad_mp']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_identificacion_actividad_mp'] = array(); 
    }

   $old_value_num_socios = $this->num_socios;
   $old_value_fecha_registro = $this->fecha_registro;
   $old_value_fecha_registro_hora = $this->fecha_registro_hora;
   $this->nm_tira_formatacao();
   $this->nm_converte_datas(false);


   $unformatted_value_num_socios = $this->num_socios;
   $unformatted_value_fecha_registro = $this->fecha_registro;
   $unformatted_value_fecha_registro_hora = $this->fecha_registro_hora;

   $nm_comando = "SELECT codigo, valor 
FROM catalogo WHERE tipo = 'identificacion_categoria_actividad' 
and PADRE = '$this->categoria_actividad_mp'
ORDER BY valor";

   $this->num_socios = $old_value_num_socios;
   $this->fecha_registro = $old_value_fecha_registro;
   $this->fecha_registro_hora = $old_value_fecha_registro_hora;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando)) 
   {
       while (!$rs->EOF) 
       { 
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_identificacion_actividad_mp'][] = $rs->fields[0];
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
   $identificacion_actividad_mp_look = ""; 
   $todo = explode("?@?", trim($nmgp_def_dados)) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->identificacion_actividad_mp_1))
          {
              foreach ($this->identificacion_actividad_mp_1 as $tmp_identificacion_actividad_mp)
              {
                  if (trim($tmp_identificacion_actividad_mp) === trim($cadaselect[1])) { $identificacion_actividad_mp_look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->identificacion_actividad_mp) === trim($cadaselect[1])) { $identificacion_actividad_mp_look .= $cadaselect[0]; } 
          $x++; 
   }
   $x = 0; 
   echo "<span id=\"id_read_on_identificacion_actividad_mp\" style=\"vertical-align:middle;" .  $sStyleReadLab_identificacion_actividad_mp . "\">" . NM_encode_input($identificacion_actividad_mp_look) . "</span><span id=\"id_read_off_identificacion_actividad_mp\" style=\"" . $sStyleReadInp_identificacion_actividad_mp . "\">";
   echo " <span id=\"idAjaxSelect_identificacion_actividad_mp\"><select class=\"sc-js-input scFormObjectOdd\" style=\"vertical-align:middle;width:280px;\" id=\"id_sc_field_identificacion_actividad_mp\" name=\"identificacion_actividad_mp\" size=1>" ; 
   echo "\r" ; 
   $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_identificacion_actividad_mp'][] = ''; 
   echo "  <option value=\"\">---Seleccione---</option>" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->identificacion_actividad_mp) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->identificacion_actividad_mp)) 
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
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_identificacion_actividad_mp_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_identificacion_actividad_mp_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php
    if (!isset($this->nm_new_label['producto_servicio']))
    {
        $this->nm_new_label['producto_servicio'] = "PRODUCTO / SERVICIO";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $producto_servicio = $this->producto_servicio;
   $sStyleHidden_producto_servicio = '';
   if (isset($this->nmgp_cmp_hidden['producto_servicio']) && $this->nmgp_cmp_hidden['producto_servicio'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['producto_servicio']);
       $sStyleHidden_producto_servicio = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_producto_servicio = 'display: none;';
   $sStyleReadInp_producto_servicio = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['producto_servicio']) && $this->nmgp_cmp_readonly['producto_servicio'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['producto_servicio']);
       $sStyleReadLab_producto_servicio = '';
       $sStyleReadInp_producto_servicio = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['producto_servicio']) && $this->nmgp_cmp_hidden['producto_servicio'] == 'off') { $sc_hidden_yes++;  ?>
<input type=hidden name="producto_servicio" value="<?php echo NM_encode_input($producto_servicio) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd" id="hidden_field_data_producto_servicio" style="<?php echo $sStyleHidden_producto_servicio; ?>;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd" style=";;vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat" style="font-weight:bold;" ><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['php_cmp_required']['producto_servicio']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['php_cmp_required']['producto_servicio'] == "on") { ?><span class="scFormRequiredOdd">*</span> <?php }?> <span id="id_label_producto_servicio"><?php echo $this->nm_new_label['producto_servicio']; ?></span></span><br>
<?php
$producto_servicio_val = str_replace('<br />', '__SC_BREAK_LINE__', nl2br($producto_servicio));

?>

<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["producto_servicio"]) &&  $this->nmgp_cmp_readonly["producto_servicio"] == "on") { 

 ?>
<input type=hidden name="producto_servicio" value="<?php echo NM_encode_input($producto_servicio) . "\">" . $producto_servicio_val . ""; ?>
<?php } else { ?>
<span id="id_read_on_producto_servicio" class="sc-ui-readonly-producto_servicio" style=";<?php echo $sStyleReadLab_producto_servicio; ?>"><?php echo NM_encode_input($producto_servicio_val); ?></span><span id="id_read_off_producto_servicio" style="white-space: nowrap;<?php echo $sStyleReadInp_producto_servicio; ?>">
 <textarea  class="sc-js-input scFormObjectOdd" style=";" name="producto_servicio" id="id_sc_field_producto_servicio" rows=2 cols=50
 alt="{datatype: 'text', maxLength: 100, allowedChars: '', lettersCase: 'upper', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: 'Producto o servicio de la ORG/UEP', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}">
<?php echo str_replace(array('\r\n', '\n\r', '\n', '\r'), array("\r\n", "\n\r", "\n", "\r"), $producto_servicio); ?>
</textarea>
</span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_producto_servicio_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_producto_servicio_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 






<?php $sStyleHidden_identificacion_actividad_mp_dumb = ('' == $sStyleHidden_identificacion_actividad_mp) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_identificacion_actividad_mp_dumb" style="<?php echo $sStyleHidden_identificacion_actividad_mp_dumb; ?>"></TD>
<?php $sStyleHidden_producto_servicio_dumb = ('' == $sStyleHidden_producto_servicio) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_producto_servicio_dumb" style="<?php echo $sStyleHidden_producto_servicio_dumb; ?>"></TD>
   </tr>
<?php $sc_hidden_no = 1; ?>
</TABLE></div><!-- bloco_f -->
   </td>
   </tr></table>
   <a name="bloco_6"></a>
   <table width="100%" height="100%" cellpadding="0"><tr valign="top"><td width="100%" height="">
<div id="div_hidden_bloco_6"><!-- bloco_c -->
<TABLE align="center" id="hidden_bloco_6" class="scFormTable" width="100%" style="height: 100%;">   <tr>


    <TD colspan="2" height="40" class="scFormBlock" style="background-color: #006699; vertical-align: bottom">
     <TABLE style="padding: 0px; spacing: 0px; border-width: 0px;" width="100%" height="100%">
      <TR>
       <TD align="" valign="bottom" class="scFormBlockFont" style="font-size: 14px; color: #FFFFFF">INFORMACIÓN LEGAL ORG / U.E.P.</TD>
       
      </TR>
     </TABLE>
    </TD>




   </tr>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['cedula_representante_legal']))
    {
        $this->nm_new_label['cedula_representante_legal'] = "CÉDULA REPRESENTANTE LEGAL";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $cedula_representante_legal = $this->cedula_representante_legal;
   $sStyleHidden_cedula_representante_legal = '';
   if (isset($this->nmgp_cmp_hidden['cedula_representante_legal']) && $this->nmgp_cmp_hidden['cedula_representante_legal'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['cedula_representante_legal']);
       $sStyleHidden_cedula_representante_legal = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_cedula_representante_legal = 'display: none;';
   $sStyleReadInp_cedula_representante_legal = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['cedula_representante_legal']) && $this->nmgp_cmp_readonly['cedula_representante_legal'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['cedula_representante_legal']);
       $sStyleReadLab_cedula_representante_legal = '';
       $sStyleReadInp_cedula_representante_legal = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['cedula_representante_legal']) && $this->nmgp_cmp_hidden['cedula_representante_legal'] == 'off') { $sc_hidden_yes++;  ?>
<input type=hidden name="cedula_representante_legal" value="<?php echo NM_encode_input($cedula_representante_legal) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd" id="hidden_field_data_cedula_representante_legal" style="<?php echo $sStyleHidden_cedula_representante_legal; ?>;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd" style=";;vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat" style="font-weight:bold;" ><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['php_cmp_required']['cedula_representante_legal']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['php_cmp_required']['cedula_representante_legal'] == "on") { ?><span class="scFormRequiredOdd">*</span> <?php }?> <span id="id_label_cedula_representante_legal"><?php echo $this->nm_new_label['cedula_representante_legal']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["cedula_representante_legal"]) &&  $this->nmgp_cmp_readonly["cedula_representante_legal"] == "on") { 

 ?>
<input type=hidden name="cedula_representante_legal" value="<?php echo NM_encode_input($cedula_representante_legal) . "\">" . $cedula_representante_legal . ""; ?>
<?php } else { ?>
<span id="id_read_on_cedula_representante_legal" class="sc-ui-readonly-cedula_representante_legal" style=";<?php echo $sStyleReadLab_cedula_representante_legal; ?>"><?php echo NM_encode_input($this->cedula_representante_legal); ?></span><span id="id_read_off_cedula_representante_legal" style="white-space: nowrap;<?php echo $sStyleReadInp_cedula_representante_legal; ?>">
 <input class="sc-js-input scFormObjectOdd" style=";" id="id_sc_field_cedula_representante_legal" type=text name="cedula_representante_legal" value="<?php echo NM_encode_input($cedula_representante_legal) ?>"
 size=10 maxlength=10 alt="{datatype: 'text', maxLength: 10, allowedChars: '0123456789', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}"></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_cedula_representante_legal_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_cedula_representante_legal_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php
    if (!isset($this->nm_new_label['nombre_representante_legal']))
    {
        $this->nm_new_label['nombre_representante_legal'] = "NOMBRE REPRESENTANTE LEGAL";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $nombre_representante_legal = $this->nombre_representante_legal;
   $sStyleHidden_nombre_representante_legal = '';
   if (isset($this->nmgp_cmp_hidden['nombre_representante_legal']) && $this->nmgp_cmp_hidden['nombre_representante_legal'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['nombre_representante_legal']);
       $sStyleHidden_nombre_representante_legal = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_nombre_representante_legal = 'display: none;';
   $sStyleReadInp_nombre_representante_legal = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['nombre_representante_legal']) && $this->nmgp_cmp_readonly['nombre_representante_legal'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['nombre_representante_legal']);
       $sStyleReadLab_nombre_representante_legal = '';
       $sStyleReadInp_nombre_representante_legal = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['nombre_representante_legal']) && $this->nmgp_cmp_hidden['nombre_representante_legal'] == 'off') { $sc_hidden_yes++;  ?>
<input type=hidden name="nombre_representante_legal" value="<?php echo NM_encode_input($nombre_representante_legal) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd" id="hidden_field_data_nombre_representante_legal" style="<?php echo $sStyleHidden_nombre_representante_legal; ?>vertical-align:middle;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd" style="vertical-align:middle;padding: 0px"><span class="scFormLabelOddFormat" style="font-weight:bold;vertical-align:middle;" ><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['php_cmp_required']['nombre_representante_legal']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['php_cmp_required']['nombre_representante_legal'] == "on") { ?><span class="scFormRequiredOdd">*</span> <?php }?> <span id="id_label_nombre_representante_legal"><?php echo $this->nm_new_label['nombre_representante_legal']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["nombre_representante_legal"]) &&  $this->nmgp_cmp_readonly["nombre_representante_legal"] == "on") { 

 ?>
<input type=hidden name="nombre_representante_legal" value="<?php echo NM_encode_input($nombre_representante_legal) . "\">" . $nombre_representante_legal . ""; ?>
<?php } else { ?>
<span id="id_read_on_nombre_representante_legal" class="sc-ui-readonly-nombre_representante_legal" style="vertical-align:middle;<?php echo $sStyleReadLab_nombre_representante_legal; ?>"><?php echo NM_encode_input($this->nombre_representante_legal); ?></span><span id="id_read_off_nombre_representante_legal" style="white-space: nowrap;<?php echo $sStyleReadInp_nombre_representante_legal; ?>">
 <input class="sc-js-input scFormObjectOdd" style=";" id="id_sc_field_nombre_representante_legal" type=text name="nombre_representante_legal" value="<?php echo NM_encode_input($nombre_representante_legal) ?>"
 size=50 maxlength=100 alt="{datatype: 'text', maxLength: 100, allowedChars: 'abcdefghijklmnopqrstuvwxyz .,ÁÉÍÓÚ', lettersCase: 'upper', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}"></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_nombre_representante_legal_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_nombre_representante_legal_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php $sStyleHidden_cedula_representante_legal_dumb = ('' == $sStyleHidden_cedula_representante_legal) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_cedula_representante_legal_dumb" style="<?php echo $sStyleHidden_cedula_representante_legal_dumb; ?>"></TD>
<?php $sStyleHidden_nombre_representante_legal_dumb = ('' == $sStyleHidden_nombre_representante_legal) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_nombre_representante_legal_dumb" style="<?php echo $sStyleHidden_nombre_representante_legal_dumb; ?>"></TD>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['estado_organizacion']))
   {
       $this->nm_new_label['estado_organizacion'] = "ESTADO DE LA ORGANIZACIÓN";
   }
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $estado_organizacion = $this->estado_organizacion;
   $sStyleHidden_estado_organizacion = '';
   if (isset($this->nmgp_cmp_hidden['estado_organizacion']) && $this->nmgp_cmp_hidden['estado_organizacion'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['estado_organizacion']);
       $sStyleHidden_estado_organizacion = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_estado_organizacion = 'display: none;';
   $sStyleReadInp_estado_organizacion = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['estado_organizacion']) && $this->nmgp_cmp_readonly['estado_organizacion'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['estado_organizacion']);
       $sStyleReadLab_estado_organizacion = '';
       $sStyleReadInp_estado_organizacion = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['estado_organizacion']) && $this->nmgp_cmp_hidden['estado_organizacion'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="estado_organizacion" value="<?php echo NM_encode_input($this->estado_organizacion) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd" id="hidden_field_data_estado_organizacion" style="<?php echo $sStyleHidden_estado_organizacion; ?>;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd" style=";;vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat" style="font-weight:bold;" ><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['php_cmp_required']['estado_organizacion']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['php_cmp_required']['estado_organizacion'] == "on") { ?><span class="scFormRequiredOdd">*</span> <?php }?> <span id="id_label_estado_organizacion"><?php echo $this->nm_new_label['estado_organizacion']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["estado_organizacion"]) &&  $this->nmgp_cmp_readonly["estado_organizacion"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_estado_organizacion']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_estado_organizacion'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_estado_organizacion']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_estado_organizacion'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_estado_organizacion']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_estado_organizacion'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_estado_organizacion']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_estado_organizacion'] = array(); 
    }

   $old_value_num_socios = $this->num_socios;
   $old_value_fecha_registro = $this->fecha_registro;
   $old_value_fecha_registro_hora = $this->fecha_registro_hora;
   $this->nm_tira_formatacao();
   $this->nm_converte_datas(false);


   $unformatted_value_num_socios = $this->num_socios;
   $unformatted_value_fecha_registro = $this->fecha_registro;
   $unformatted_value_fecha_registro_hora = $this->fecha_registro_hora;

   $nm_comando = "SELECT codigo, valor 
FROM catalogo WHERE tipo = 'estado_institucion'  and significado_direccion = 'SIU'
ORDER BY valor";

   $this->num_socios = $old_value_num_socios;
   $this->fecha_registro = $old_value_fecha_registro;
   $this->fecha_registro_hora = $old_value_fecha_registro_hora;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando)) 
   {
       while (!$rs->EOF) 
       { 
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_estado_organizacion'][] = $rs->fields[0];
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
   $estado_organizacion_look = ""; 
   $todo = explode("?@?", trim($nmgp_def_dados)) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->estado_organizacion_1))
          {
              foreach ($this->estado_organizacion_1 as $tmp_estado_organizacion)
              {
                  if (trim($tmp_estado_organizacion) === trim($cadaselect[1])) { $estado_organizacion_look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->estado_organizacion) === trim($cadaselect[1])) { $estado_organizacion_look .= $cadaselect[0]; } 
          $x++; 
   }

?>
<input type=hidden name="estado_organizacion" value="<?php echo NM_encode_input($estado_organizacion) . "\">" . $estado_organizacion_look . ""; ?>
<?php } else { ?>
 
<?php  
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_estado_organizacion']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_estado_organizacion'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_estado_organizacion']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_estado_organizacion'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_estado_organizacion']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_estado_organizacion'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_estado_organizacion']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_estado_organizacion'] = array(); 
    }

   $old_value_num_socios = $this->num_socios;
   $old_value_fecha_registro = $this->fecha_registro;
   $old_value_fecha_registro_hora = $this->fecha_registro_hora;
   $this->nm_tira_formatacao();
   $this->nm_converte_datas(false);


   $unformatted_value_num_socios = $this->num_socios;
   $unformatted_value_fecha_registro = $this->fecha_registro;
   $unformatted_value_fecha_registro_hora = $this->fecha_registro_hora;

   $nm_comando = "SELECT codigo, valor 
FROM catalogo WHERE tipo = 'estado_institucion'  and significado_direccion = 'SIU'
ORDER BY valor";

   $this->num_socios = $old_value_num_socios;
   $this->fecha_registro = $old_value_fecha_registro;
   $this->fecha_registro_hora = $old_value_fecha_registro_hora;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando)) 
   {
       while (!$rs->EOF) 
       { 
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_estado_organizacion'][] = $rs->fields[0];
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
   $estado_organizacion_look = ""; 
   $todo = explode("?@?", trim($nmgp_def_dados)) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->estado_organizacion_1))
          {
              foreach ($this->estado_organizacion_1 as $tmp_estado_organizacion)
              {
                  if (trim($tmp_estado_organizacion) === trim($cadaselect[1])) { $estado_organizacion_look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->estado_organizacion) === trim($cadaselect[1])) { $estado_organizacion_look .= $cadaselect[0]; } 
          $x++; 
   }
   $x = 0; 
   echo "<span id=\"id_read_on_estado_organizacion\" style=\";" .  $sStyleReadLab_estado_organizacion . "\">" . NM_encode_input($estado_organizacion_look) . "</span><span id=\"id_read_off_estado_organizacion\" style=\"" . $sStyleReadInp_estado_organizacion . "\">";
   echo " <span id=\"idAjaxSelect_estado_organizacion\"><select class=\"sc-js-input scFormObjectOdd\" style=\";\" id=\"id_sc_field_estado_organizacion\" name=\"estado_organizacion\" size=1>" ; 
   echo "\r" ; 
   $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_estado_organizacion'][] = ''; 
   echo "  <option value=\"\">---Seleccione---</option>" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->estado_organizacion) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->estado_organizacion)) 
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
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_estado_organizacion_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_estado_organizacion_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php
    if (!isset($this->nm_new_label['num_resolucion']))
    {
        $this->nm_new_label['num_resolucion'] = "NÚMERO RESOLUCIÓN";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $num_resolucion = $this->num_resolucion;
   $sStyleHidden_num_resolucion = '';
   if (isset($this->nmgp_cmp_hidden['num_resolucion']) && $this->nmgp_cmp_hidden['num_resolucion'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['num_resolucion']);
       $sStyleHidden_num_resolucion = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_num_resolucion = 'display: none;';
   $sStyleReadInp_num_resolucion = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['num_resolucion']) && $this->nmgp_cmp_readonly['num_resolucion'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['num_resolucion']);
       $sStyleReadLab_num_resolucion = '';
       $sStyleReadInp_num_resolucion = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['num_resolucion']) && $this->nmgp_cmp_hidden['num_resolucion'] == 'off') { $sc_hidden_yes++;  ?>
<input type=hidden name="num_resolucion" value="<?php echo NM_encode_input($num_resolucion) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd" id="hidden_field_data_num_resolucion" style="<?php echo $sStyleHidden_num_resolucion; ?>;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd" style=";;vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat" style="font-weight:bold;" ><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['php_cmp_required']['num_resolucion']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['php_cmp_required']['num_resolucion'] == "on") { ?><span class="scFormRequiredOdd">*</span> <?php }?> <span id="id_label_num_resolucion"><?php echo $this->nm_new_label['num_resolucion']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["num_resolucion"]) &&  $this->nmgp_cmp_readonly["num_resolucion"] == "on") { 

 ?>
<input type=hidden name="num_resolucion" value="<?php echo NM_encode_input($num_resolucion) . "\">" . $num_resolucion . ""; ?>
<?php } else { ?>
<span id="id_read_on_num_resolucion" class="sc-ui-readonly-num_resolucion" style=";<?php echo $sStyleReadLab_num_resolucion; ?>"><?php echo NM_encode_input($this->num_resolucion); ?></span><span id="id_read_off_num_resolucion" style="white-space: nowrap;<?php echo $sStyleReadInp_num_resolucion; ?>">
 <input class="sc-js-input scFormObjectOdd" style=";" id="id_sc_field_num_resolucion" type=text name="num_resolucion" value="<?php echo NM_encode_input($num_resolucion) ?>"
 size=50 maxlength=40 alt="{datatype: 'text', maxLength: 40, allowedChars: '', lettersCase: 'upper', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}"></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_num_resolucion_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_num_resolucion_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php $sStyleHidden_estado_organizacion_dumb = ('' == $sStyleHidden_estado_organizacion) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_estado_organizacion_dumb" style="<?php echo $sStyleHidden_estado_organizacion_dumb; ?>"></TD>
<?php $sStyleHidden_num_resolucion_dumb = ('' == $sStyleHidden_num_resolucion) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_num_resolucion_dumb" style="<?php echo $sStyleHidden_num_resolucion_dumb; ?>"></TD>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['legalmente_constituida']))
   {
       $this->nm_new_label['legalmente_constituida'] = "LEGALMENTE CONSTITUIDO";
   }
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $legalmente_constituida = $this->legalmente_constituida;
   $sStyleHidden_legalmente_constituida = '';
   if (isset($this->nmgp_cmp_hidden['legalmente_constituida']) && $this->nmgp_cmp_hidden['legalmente_constituida'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['legalmente_constituida']);
       $sStyleHidden_legalmente_constituida = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_legalmente_constituida = 'display: none;';
   $sStyleReadInp_legalmente_constituida = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['legalmente_constituida']) && $this->nmgp_cmp_readonly['legalmente_constituida'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['legalmente_constituida']);
       $sStyleReadLab_legalmente_constituida = '';
       $sStyleReadInp_legalmente_constituida = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['legalmente_constituida']) && $this->nmgp_cmp_hidden['legalmente_constituida'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="legalmente_constituida" value="<?php echo NM_encode_input($this->legalmente_constituida) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd" id="hidden_field_data_legalmente_constituida" style="<?php echo $sStyleHidden_legalmente_constituida; ?>;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd" style=";;vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat" style="font-weight:bold;" ><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['php_cmp_required']['legalmente_constituida']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['php_cmp_required']['legalmente_constituida'] == "on") { ?><span class="scFormRequiredOdd">*</span> <?php }?> <span id="id_label_legalmente_constituida"><?php echo $this->nm_new_label['legalmente_constituida']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["legalmente_constituida"]) &&  $this->nmgp_cmp_readonly["legalmente_constituida"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_legalmente_constituida']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_legalmente_constituida'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_legalmente_constituida']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_legalmente_constituida'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_legalmente_constituida']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_legalmente_constituida'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_legalmente_constituida']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_legalmente_constituida'] = array(); 
    }

   $old_value_num_socios = $this->num_socios;
   $old_value_fecha_registro = $this->fecha_registro;
   $old_value_fecha_registro_hora = $this->fecha_registro_hora;
   $this->nm_tira_formatacao();
   $this->nm_converte_datas(false);


   $unformatted_value_num_socios = $this->num_socios;
   $unformatted_value_fecha_registro = $this->fecha_registro;
   $unformatted_value_fecha_registro_hora = $this->fecha_registro_hora;

   $nm_comando = "SELECT codigo, valor 
FROM catalogo WHERE tipo = 'constitucion' and significado_direccion = '$this->estado_organizacion'
ORDER BY valor";

   $this->num_socios = $old_value_num_socios;
   $this->fecha_registro = $old_value_fecha_registro;
   $this->fecha_registro_hora = $old_value_fecha_registro_hora;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando)) 
   {
       while (!$rs->EOF) 
       { 
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_legalmente_constituida'][] = $rs->fields[0];
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
   $legalmente_constituida_look = ""; 
   $todo = explode("?@?", trim($nmgp_def_dados)) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->legalmente_constituida_1))
          {
              foreach ($this->legalmente_constituida_1 as $tmp_legalmente_constituida)
              {
                  if (trim($tmp_legalmente_constituida) === trim($cadaselect[1])) { $legalmente_constituida_look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->legalmente_constituida) === trim($cadaselect[1])) { $legalmente_constituida_look .= $cadaselect[0]; } 
          $x++; 
   }

?>
<input type=hidden name="legalmente_constituida" value="<?php echo NM_encode_input($legalmente_constituida) . "\">" . $legalmente_constituida_look . ""; ?>
<?php } else { ?>
 
<?php  
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_legalmente_constituida']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_legalmente_constituida'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_legalmente_constituida']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_legalmente_constituida'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_legalmente_constituida']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_legalmente_constituida'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_legalmente_constituida']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_legalmente_constituida'] = array(); 
    }

   $old_value_num_socios = $this->num_socios;
   $old_value_fecha_registro = $this->fecha_registro;
   $old_value_fecha_registro_hora = $this->fecha_registro_hora;
   $this->nm_tira_formatacao();
   $this->nm_converte_datas(false);


   $unformatted_value_num_socios = $this->num_socios;
   $unformatted_value_fecha_registro = $this->fecha_registro;
   $unformatted_value_fecha_registro_hora = $this->fecha_registro_hora;

   $nm_comando = "SELECT codigo, valor 
FROM catalogo WHERE tipo = 'constitucion' and significado_direccion = '$this->estado_organizacion'
ORDER BY valor";

   $this->num_socios = $old_value_num_socios;
   $this->fecha_registro = $old_value_fecha_registro;
   $this->fecha_registro_hora = $old_value_fecha_registro_hora;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando)) 
   {
       while (!$rs->EOF) 
       { 
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_legalmente_constituida'][] = $rs->fields[0];
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
   $legalmente_constituida_look = ""; 
   $todo = explode("?@?", trim($nmgp_def_dados)) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->legalmente_constituida_1))
          {
              foreach ($this->legalmente_constituida_1 as $tmp_legalmente_constituida)
              {
                  if (trim($tmp_legalmente_constituida) === trim($cadaselect[1])) { $legalmente_constituida_look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->legalmente_constituida) === trim($cadaselect[1])) { $legalmente_constituida_look .= $cadaselect[0]; } 
          $x++; 
   }
   $x = 0; 
   echo "<span id=\"id_read_on_legalmente_constituida\" style=\";" .  $sStyleReadLab_legalmente_constituida . "\">" . NM_encode_input($legalmente_constituida_look) . "</span><span id=\"id_read_off_legalmente_constituida\" style=\"" . $sStyleReadInp_legalmente_constituida . "\">";
   echo " <span id=\"idAjaxSelect_legalmente_constituida\"><select class=\"sc-js-input scFormObjectOdd\" style=\";\" id=\"id_sc_field_legalmente_constituida\" name=\"legalmente_constituida\" size=1>" ; 
   echo "\r" ; 
   $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_legalmente_constituida'][] = ''; 
   echo "  <option value=\"\">--Seleccione--</option>" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->legalmente_constituida) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->legalmente_constituida)) 
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
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_legalmente_constituida_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_legalmente_constituida_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php
   if (!isset($this->nm_new_label['estado_juridico']))
   {
       $this->nm_new_label['estado_juridico'] = "ESTADO JURÍDICO";
   }
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $estado_juridico = $this->estado_juridico;
   $sStyleHidden_estado_juridico = '';
   if (isset($this->nmgp_cmp_hidden['estado_juridico']) && $this->nmgp_cmp_hidden['estado_juridico'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['estado_juridico']);
       $sStyleHidden_estado_juridico = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_estado_juridico = 'display: none;';
   $sStyleReadInp_estado_juridico = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['estado_juridico']) && $this->nmgp_cmp_readonly['estado_juridico'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['estado_juridico']);
       $sStyleReadLab_estado_juridico = '';
       $sStyleReadInp_estado_juridico = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['estado_juridico']) && $this->nmgp_cmp_hidden['estado_juridico'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="estado_juridico" value="<?php echo NM_encode_input($this->estado_juridico) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd" id="hidden_field_data_estado_juridico" style="<?php echo $sStyleHidden_estado_juridico; ?>;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd" style=";;vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat" style="font-weight:bold;" ><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['php_cmp_required']['estado_juridico']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['php_cmp_required']['estado_juridico'] == "on") { ?><span class="scFormRequiredOdd">*</span> <?php }?> <span id="id_label_estado_juridico"><?php echo $this->nm_new_label['estado_juridico']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["estado_juridico"]) &&  $this->nmgp_cmp_readonly["estado_juridico"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_estado_juridico']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_estado_juridico'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_estado_juridico']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_estado_juridico'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_estado_juridico']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_estado_juridico'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_estado_juridico']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_estado_juridico'] = array(); 
    }

   $old_value_num_socios = $this->num_socios;
   $old_value_fecha_registro = $this->fecha_registro;
   $old_value_fecha_registro_hora = $this->fecha_registro_hora;
   $this->nm_tira_formatacao();
   $this->nm_converte_datas(false);


   $unformatted_value_num_socios = $this->num_socios;
   $unformatted_value_fecha_registro = $this->fecha_registro;
   $unformatted_value_fecha_registro_hora = $this->fecha_registro_hora;

   $nm_comando = "SELECT codigo, valor 
FROM catalogo WHERE tipo = 'estado_juridico'
ORDER BY valor";

   $this->num_socios = $old_value_num_socios;
   $this->fecha_registro = $old_value_fecha_registro;
   $this->fecha_registro_hora = $old_value_fecha_registro_hora;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando)) 
   {
       while (!$rs->EOF) 
       { 
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_estado_juridico'][] = $rs->fields[0];
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
   $estado_juridico_look = ""; 
   $todo = explode("?@?", trim($nmgp_def_dados)) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->estado_juridico_1))
          {
              foreach ($this->estado_juridico_1 as $tmp_estado_juridico)
              {
                  if (trim($tmp_estado_juridico) === trim($cadaselect[1])) { $estado_juridico_look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->estado_juridico) === trim($cadaselect[1])) { $estado_juridico_look .= $cadaselect[0]; } 
          $x++; 
   }

?>
<input type=hidden name="estado_juridico" value="<?php echo NM_encode_input($estado_juridico) . "\">" . $estado_juridico_look . ""; ?>
<?php } else { ?>
 
<?php  
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_estado_juridico']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_estado_juridico'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_estado_juridico']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_estado_juridico'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_estado_juridico']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_estado_juridico'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_estado_juridico']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_estado_juridico'] = array(); 
    }

   $old_value_num_socios = $this->num_socios;
   $old_value_fecha_registro = $this->fecha_registro;
   $old_value_fecha_registro_hora = $this->fecha_registro_hora;
   $this->nm_tira_formatacao();
   $this->nm_converte_datas(false);


   $unformatted_value_num_socios = $this->num_socios;
   $unformatted_value_fecha_registro = $this->fecha_registro;
   $unformatted_value_fecha_registro_hora = $this->fecha_registro_hora;

   $nm_comando = "SELECT codigo, valor 
FROM catalogo WHERE tipo = 'estado_juridico'
ORDER BY valor";

   $this->num_socios = $old_value_num_socios;
   $this->fecha_registro = $old_value_fecha_registro;
   $this->fecha_registro_hora = $old_value_fecha_registro_hora;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando)) 
   {
       while (!$rs->EOF) 
       { 
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_estado_juridico'][] = $rs->fields[0];
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
   $estado_juridico_look = ""; 
   $todo = explode("?@?", trim($nmgp_def_dados)) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->estado_juridico_1))
          {
              foreach ($this->estado_juridico_1 as $tmp_estado_juridico)
              {
                  if (trim($tmp_estado_juridico) === trim($cadaselect[1])) { $estado_juridico_look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->estado_juridico) === trim($cadaselect[1])) { $estado_juridico_look .= $cadaselect[0]; } 
          $x++; 
   }
   $x = 0; 
   echo "<span id=\"id_read_on_estado_juridico\" style=\";" .  $sStyleReadLab_estado_juridico . "\">" . NM_encode_input($estado_juridico_look) . "</span><span id=\"id_read_off_estado_juridico\" style=\"" . $sStyleReadInp_estado_juridico . "\">";
   echo " <span id=\"idAjaxSelect_estado_juridico\"><select class=\"sc-js-input scFormObjectOdd\" style=\";\" id=\"id_sc_field_estado_juridico\" name=\"estado_juridico\" size=1>" ; 
   echo "\r" ; 
   $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_estado_juridico'][] = ''; 
   echo "  <option value=\"\">--Seleccione--</option>" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->estado_juridico) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->estado_juridico)) 
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
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_estado_juridico_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_estado_juridico_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php $sStyleHidden_legalmente_constituida_dumb = ('' == $sStyleHidden_legalmente_constituida) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_legalmente_constituida_dumb" style="<?php echo $sStyleHidden_legalmente_constituida_dumb; ?>"></TD>
<?php $sStyleHidden_estado_juridico_dumb = ('' == $sStyleHidden_estado_juridico) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_estado_juridico_dumb" style="<?php echo $sStyleHidden_estado_juridico_dumb; ?>"></TD>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['num_socios']))
    {
        $this->nm_new_label['num_socios'] = "NÚMERO INTEGRANTES DE LA ORG / U.E.P.";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $num_socios = $this->num_socios;
   $sStyleHidden_num_socios = '';
   if (isset($this->nmgp_cmp_hidden['num_socios']) && $this->nmgp_cmp_hidden['num_socios'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['num_socios']);
       $sStyleHidden_num_socios = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_num_socios = 'display: none;';
   $sStyleReadInp_num_socios = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['num_socios']) && $this->nmgp_cmp_readonly['num_socios'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['num_socios']);
       $sStyleReadLab_num_socios = '';
       $sStyleReadInp_num_socios = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['num_socios']) && $this->nmgp_cmp_hidden['num_socios'] == 'off') { $sc_hidden_yes++;  ?>
<input type=hidden name="num_socios" value="<?php echo NM_encode_input($num_socios) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd" id="hidden_field_data_num_socios" style="<?php echo $sStyleHidden_num_socios; ?>;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd" style=";;vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat" style="font-weight:bold;" ><span id="id_label_num_socios"><?php echo $this->nm_new_label['num_socios']; ?></span></span><br><input type=hidden name="num_socios" value="<?php echo NM_encode_input($num_socios); ?>"><span id="id_ajax_label_num_socios"><?php echo nl2br($num_socios); ?></span>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_num_socios_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_num_socios_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

    <TD class="scFormDataOdd" colspan="1" >&nbsp;</TD>




<?php if ($sc_hidden_yes > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } ?>
<?php $sStyleHidden_num_socios_dumb = ('' == $sStyleHidden_num_socios) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_num_socios_dumb" style="<?php echo $sStyleHidden_num_socios_dumb; ?>"></TD>
   </tr>
<?php $sc_hidden_no = 1; ?>
</TABLE></div><!-- bloco_f -->
   </td>
   </tr></table>
   <a name="bloco_7"></a>
   <table width="100%" height="100%" cellpadding="0"><tr valign="top"><td width="100%" height="">
<div id="div_hidden_bloco_7"><!-- bloco_c -->
<TABLE align="center" id="hidden_bloco_7" class="scFormTable" width="100%" style="height: 100%;">   <tr>


    <TD colspan="3" height="40" class="scFormBlock" style="background-color: #006699; vertical-align: bottom">
     <TABLE style="padding: 0px; spacing: 0px; border-width: 0px;" width="100%" height="100%">
      <TR>
       <TD align="" valign="bottom" class="scFormBlockFont" style="font-size: 14px; color: #FFFFFF">INFORMACIÓN GENERAL</TD>
       
      </TR>
     </TABLE>
    </TD>




   </tr>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['user']))
    {
        $this->nm_new_label['user'] = "TÉCNICO";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $user = $this->user;
   $sStyleHidden_user = '';
   if (isset($this->nmgp_cmp_hidden['user']) && $this->nmgp_cmp_hidden['user'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['user']);
       $sStyleHidden_user = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_user = 'display: none;';
   $sStyleReadInp_user = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['user']) && $this->nmgp_cmp_readonly['user'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['user']);
       $sStyleReadLab_user = '';
       $sStyleReadInp_user = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['user']) && $this->nmgp_cmp_hidden['user'] == 'off') { $sc_hidden_yes++;  ?>
<input type=hidden name="user" value="<?php echo NM_encode_input($user) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd" id="hidden_field_data_user" style="<?php echo $sStyleHidden_user; ?>;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd" style=";;vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat" style="font-weight:bold;" ><span id="id_label_user"><?php echo $this->nm_new_label['user']; ?></span></span><br><input type=hidden name="user" value="<?php echo NM_encode_input($user); ?>"><span id="id_ajax_label_user"><?php echo nl2br($user); ?></span>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_user_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_user_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php
    if (!isset($this->nm_new_label['fecha_registro']))
    {
        $this->nm_new_label['fecha_registro'] = "FECHA REGISTRO";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $old_dt_fecha_registro = $this->fecha_registro;
   $this->fecha_registro .= ' ' . $this->fecha_registro_hora;
   $fecha_registro = $this->fecha_registro;
   $sStyleHidden_fecha_registro = '';
   if (isset($this->nmgp_cmp_hidden['fecha_registro']) && $this->nmgp_cmp_hidden['fecha_registro'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['fecha_registro']);
       $sStyleHidden_fecha_registro = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_fecha_registro = 'display: none;';
   $sStyleReadInp_fecha_registro = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['fecha_registro']) && $this->nmgp_cmp_readonly['fecha_registro'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['fecha_registro']);
       $sStyleReadLab_fecha_registro = '';
       $sStyleReadInp_fecha_registro = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['fecha_registro']) && $this->nmgp_cmp_hidden['fecha_registro'] == 'off') { $sc_hidden_yes++;  ?>
<input type=hidden name="fecha_registro" value="<?php echo NM_encode_input($fecha_registro) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd" id="hidden_field_data_fecha_registro" style="<?php echo $sStyleHidden_fecha_registro; ?>;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd" style=";;vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat" style="font-weight:bold;" ><span id="id_label_fecha_registro"><?php echo $this->nm_new_label['fecha_registro']; ?></span></span><br><input type=hidden name="fecha_registro" value="<?php echo NM_encode_input($fecha_registro); ?>"><span id="id_ajax_label_fecha_registro"><?php echo nl2br($fecha_registro); ?></span>
<?php
$tmp_form_data = $this->field_config['fecha_registro']['date_format'];
$tmp_form_data = str_replace('aaaa', 'yyyy', $tmp_form_data);
$tmp_form_data = str_replace('dd'  , $this->Ini->Nm_lang['lang_othr_date_days'], $tmp_form_data);
$tmp_form_data = str_replace('mm'  , $this->Ini->Nm_lang['lang_othr_date_mnth'], $tmp_form_data);
$tmp_form_data = str_replace('yyyy', $this->Ini->Nm_lang['lang_othr_date_year'], $tmp_form_data);
$tmp_form_data = str_replace('hh'  , $this->Ini->Nm_lang['lang_othr_date_hour'], $tmp_form_data);
$tmp_form_data = str_replace('ii'  , $this->Ini->Nm_lang['lang_othr_date_mint'], $tmp_form_data);
$tmp_form_data = str_replace('ss'  , $this->Ini->Nm_lang['lang_othr_date_scnd'], $tmp_form_data);
$tmp_form_data = str_replace(';'   , ' '                                       , $tmp_form_data);
?>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_fecha_registro_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_fecha_registro_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>
<?php
   $this->fecha_registro = $old_dt_fecha_registro;
?>

   <?php
    if (!isset($this->nm_new_label['tipo_registro']))
    {
        $this->nm_new_label['tipo_registro'] = "TIPO REGISTRO";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $tipo_registro = $this->tipo_registro;
   $sStyleHidden_tipo_registro = '';
   if (isset($this->nmgp_cmp_hidden['tipo_registro']) && $this->nmgp_cmp_hidden['tipo_registro'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['tipo_registro']);
       $sStyleHidden_tipo_registro = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_tipo_registro = 'display: none;';
   $sStyleReadInp_tipo_registro = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['tipo_registro']) && $this->nmgp_cmp_readonly['tipo_registro'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['tipo_registro']);
       $sStyleReadLab_tipo_registro = '';
       $sStyleReadInp_tipo_registro = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['tipo_registro']) && $this->nmgp_cmp_hidden['tipo_registro'] == 'off') { $sc_hidden_yes++;  ?>
<input type=hidden name="tipo_registro" value="<?php echo NM_encode_input($tipo_registro) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd" id="hidden_field_data_tipo_registro" style="<?php echo $sStyleHidden_tipo_registro; ?>;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd" style=";;vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat" style="font-weight:bold;" ><span id="id_label_tipo_registro"><?php echo $this->nm_new_label['tipo_registro']; ?></span></span><br><input type=hidden name="tipo_registro" value="<?php echo NM_encode_input($tipo_registro); ?>"><span id="id_ajax_label_tipo_registro"><?php echo nl2br($tipo_registro); ?></span>
</td></tr><tr><td style="vertical-align: top; padding: 1px 0px 0px 0px"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_tipo_registro_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_tipo_registro_text"></span></td></tr></table></td></tr></table> </TD>
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
if ((!$this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['run_iframe'] != "R")
{
?>
    <table style="border-collapse: collapse; border-width: 0px; width: 100%"><tr><td class="scFormToolbar" style="padding: 0px; spacing: 0px">
    <table style="border-collapse: collapse; border-width: 0px; width: 100%">
    <tr> 
     <td nowrap align="left" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php
}
if ((!$this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['run_iframe'] != "R")
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
    if ('' != $this->url_webhelp) {
        $sCondStyle = '';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bhelp", "window.open('" . $this->url_webhelp. "', '', 'resizable, scrollbars'); ", "window.open('" . $this->url_webhelp. "', '', 'resizable, scrollbars'); ", "", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (!$this->Embutida_call) {
        $sCondStyle = (isset($_SESSION['scriptcase']['nm_sc_retorno']) && !empty($_SESSION['scriptcase']['nm_sc_retorno']) && $nm_apl_dependente != 1 && $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['run_iframe'] != "R" && (!$this->aba_iframe || $this->is_calendar_app) && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bsair", "document.F6.action='" . $nm_url_saida. "'; document.F6.submit(); return false;", "document.F6.action='" . $nm_url_saida. "'; document.F6.submit(); return false;", "sc_b_sai_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (!$this->Embutida_call) {
        $sCondStyle = (!isset($_SESSION['scriptcase']['nm_sc_retorno']) || empty($_SESSION['scriptcase']['nm_sc_retorno']) || $nm_apl_dependente == 1 || $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['run_iframe'] == "R" || $this->aba_iframe || $this->nmgp_botoes['exit'] != "on") && ($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['run_iframe'] != "F" && $this->nmgp_botoes['exit'] == "on") && ($nm_apl_dependente == 1 && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bvoltar", "document.F6.action='" . $nm_url_saida. "'; document.F6.submit(); return false;", "document.F6.action='" . $nm_url_saida. "'; document.F6.submit(); return false;", "sc_b_sai_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (!$this->Embutida_call) {
        $sCondStyle = (!isset($_SESSION['scriptcase']['nm_sc_retorno']) || empty($_SESSION['scriptcase']['nm_sc_retorno']) || $nm_apl_dependente == 1 || $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['run_iframe'] == "R" || $this->aba_iframe || $this->nmgp_botoes['exit'] != "on") && ($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['run_iframe'] != "F" && $this->nmgp_botoes['exit'] == "on") && ($nm_apl_dependente != 1 || $this->nmgp_botoes['exit'] != "on") && (!$this->aba_iframe && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bsair", "document.F6.action='" . $nm_url_saida. "'; document.F6.submit(); return false;", "document.F6.action='" . $nm_url_saida. "'; document.F6.submit(); return false;", "sc_b_sai_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
}
if ((!$this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['run_iframe'] != "R")
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
  $nm_sc_blocos_da_pag = array(0,1,2,3,4,5,6,7);

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
<script>parent.scAjaxDetailStatus("form_u_organizaciones");</script>
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
if ($this->lig_edit_lookup && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['sc_modal']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['sc_modal'])
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
