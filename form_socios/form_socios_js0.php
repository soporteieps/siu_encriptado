<form name="F2" method=post 
               action="form_socios.php" 
               target="_self"> 
<input type=hidden name="cod_socios" value="<?php echo NM_encode_input($this->nmgp_dados_form['cod_socios']); ?>">
<input type=hidden name="nm_form_submit" value="1">
<input type=hidden name="nmgp_opcao" value="">
<input type=hidden name="master_nav" value="off">
<input type="hidden" name="nmgp_parms" value=""/>
<input type="hidden" name="nmgp_ordem" value=""/>
<input type="hidden" name="nmgp_clone" value=""/>
<input type=hidden name="script_case_init" value="<?php echo NM_encode_input($this->Ini->sc_page); ?>"> 
<input type=hidden name="script_case_session" value="<?php echo NM_encode_input(session_id()); ?>"> 
</form> 
<form name="F3" method="post" 
                  target="_self"> 
  <input type="hidden" name="nmgp_chave" value=""/>
  <input type="hidden" name="nmgp_opcao" value=""/>
  <input type="hidden" name="nmgp_ordem" value=""/>
  <input type="hidden" name="nmgp_chave_det" value=""/>
  <input type="hidden" name="nmgp_quant_linhas" value=""/>
  <input type="hidden" name="nmgp_url_saida" value=""/>
  <input type="hidden" name="nmgp_parms" value=""/>
  <input type="hidden" name="nmgp_outra_jan" value=""/>
  <input type="hidden" name="script_case_init" value="<?php echo NM_encode_input($this->Ini->sc_page); ?>"/> 
  <input type="hidden" name="script_case_session" value="<?php echo NM_encode_input(session_id()); ?>"> 
</form> 
<form name="F5" method="post" 
                  action="form_socios.php" 
                  target="_self"> 
  <input type="hidden" name="nmgp_opcao" value="<?php if ($this->nm_Start_new) {echo "ini";} else {echo "igual";}?>"/>
  <input type="hidden" name="nmgp_parms" value="<?php echo NM_encode_input($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['parms']); ?>"/>
  <input type="hidden" name="script_case_init" value="<?php echo NM_encode_input($this->Ini->sc_page); ?>"/> 
  <input type="hidden" name="script_case_session" value="<?php echo NM_encode_input(session_id()); ?>"> 
</form> 
<form name="F6" method="post" 
                  action="form_socios.php" 
                  target="_self"> 
  <input type="hidden" name="script_case_init" value="<?php echo NM_encode_input($this->Ini->sc_page); ?>"/> 
  <input type="hidden" name="script_case_session" value="<?php echo NM_encode_input(session_id()); ?>"> 
</form> 
<div id="id_div_process" style="display: none; margin: 10px; whitespace: nowrap" class="scFormProcessFixed"><span class="scFormProcess"><img border="0" src="<?php echo $this->Ini->path_icones; ?>/scriptcase__NM__ajax_load.gif" align="absmiddle" />&nbsp;<?php echo $this->Ini->Nm_lang['lang_othr_prcs']; ?>...</span></div>
<div id="id_div_process_block" style="display: none; margin: 10px; whitespace: nowrap"><span class="scFormProcess"><img border="0" src="<?php echo $this->Ini->path_icones; ?>/scriptcase__NM__ajax_load.gif" align="absmiddle" />&nbsp;<?php echo $this->Ini->Nm_lang['lang_othr_prcs']; ?>...</span></div>
<div id="id_fatal_error" class="scFormLabelOdd" style="display: none; position: absolute"></div>
<script type="text/javascript"> 
var var_btn_btn_Salir_cod_u_organizaciones_aux = "<?php echo $this->nmgp_dados_form['cod_u_organizaciones']; ?>";
function sc_btn_btn_Salir()
{
  nm_gp_submit('<?php echo $this->Ini->link_salir_socios; ?>', '<?php echo $this->nm_location; ?>', '<?php echo "cod_u_organizaciones_aux?#?' + var_btn_btn_Salir_cod_u_organizaciones_aux + '?@?"; ?>', '', '_self');
}
 NM_tp_critica(1);
function nm_gp_submit(apl_lig, apl_saida, parms, opc, target, modal_h, modal_w) 
{ 
   if (target == 'modal') 
   {
       par_modal = '?script_case_init=<?php echo $this->Ini->sc_page ?>&script_case_session=<?php echo session_id() ?>&nmgp_outra_jan=true&nmgp_url_saida=modal';
       if (opc != null && opc != '') 
       {
           par_modal += '&nmgp_opcao=grid';
       }
       if (parms != null && parms != '') 
       {
           par_modal += '&nmgp_parms=' + parms;
       }
       tb_show('', apl_lig + par_modal + '&TB_iframe=true&modal=true&height=' + modal_h + '&width=' + modal_w, '');
       return;
   }
   document.F3.target               = "_self"; 
   document.F3.action               = apl_lig  ;
   if (opc != null && opc != "") 
   {
       document.F3.nmgp_opcao.value = "grid" ;
   }
   else
   {
       document.F3.nmgp_opcao.value = "" ;
   }
   if (target != null && target == '_blank') 
   {
       document.F3.nmgp_outra_jan.value = "true" ;
       document.F3.target           = target; 
   }
   document.F3.nmgp_url_saida.value = apl_saida ;
   document.F3.nmgp_parms.value     = parms ;
   document.F3.submit() ;
} 

function scInlineFormSend()
{
  return false;
}

function NM_critica (form, campo, label, mask, tipo, intr, dec, min, max)
{
    this.form = form;
    this.campo = campo;
    this.label = label;
    this.mask = mask;
    this.tipo = tipo;
    this.intr = intr;
    this.dec = dec;
    this.min = min;
    this.max = max;
}
 NM_tab_crit = new NM_critica(12);
 NM_tab_crit[1] = new NM_critica('F1', 'txt_cedula', 'Ingresar:', 'naomask', 'lista', 'cxab', 10, '0123456789');
 NM_tab_crit[2] = new NM_critica('F1', 'txt_pasaporte', 'Ingresar:', 'naomask', 'lista', 'CXA', 20, 'abcdefghijklmnopqrstuvwxyz0123456789');
 NM_tab_crit[3] = new NM_critica('F1', 'btnbuscar', '', 'naomask', 'lista', 'cxab', 20, 'TUDO');
 NM_tab_crit[4] = new NM_critica('F1', 'cedula', 'CÉDULA / PASAPORTE', 'naomask', 'lista', 'CXA', 20, 'TUDO');
 NM_tab_crit[5] = new NM_critica('F1', 'apellidos', 'NOMBRES', 'naomask', 'lista', 'CXA', 50, 'abcdefghijklmnopqrstuvwxyzï¿½ï¿½ï¿½ï¿½ï¿½ï¿½ï¿½ï¿½ï¿½ï¿½ï¿½ï¿½ï¿½ ÁÉÍÓÚ');
 NM_tab_crit[6] = new NM_critica('F1', 'fecha_nacimiento', 'FECHA DE NACIMIENTO', 'naomask', 'data', '<?php echo $this->field_config['fecha_nacimiento']['date_format']; ?>'<?php echo ", '', ''"; ?>, '<?php echo $this->field_config['fecha_nacimiento']['date_sep']; ?>');
 NM_tab_crit[7] = new NM_critica('F1', 'nacionalidad', 'NACIONALIDAD', 'naomask', 'lista', 'CXA', 50, 'abcdefghijklmnopqrstuvwxyzï¿½ï¿½ï¿½ï¿½ï¿½ï¿½ï¿½ï¿½ï¿½ï¿½ï¿½ï¿½ ÁÉÍÓÚ');
 NM_tab_crit[8] = new NM_critica('F1', 'telefono', 'TELÉFONO', 'naomask', 'lista', 'cxab', 10, '0123456789');
 NM_tab_crit[9] = new NM_critica('F1', 'celular', 'CELULAR', 'naomask', 'lista', 'cxab', 10, '0123456789');
 NM_tab_crit[10] = new NM_critica('F1', 'mail', 'CORREO ELECTRÓNICO', 'naomask', 'email', 100);
 NM_tab_crit[11] = new NM_critica('F1', 'direccion', 'DIRECCIÓN', 'naomask', 'lista', 'CXA', 500, 'TUDO');
 NM_tab_crit[12] = new NM_critica('NM_final');
 NM_tab_crit_1 = new NM_critica(12);
 NM_tab_crit_1[1] = new NM_critica('F1', 'txt_cedula', 'Ingresar:', 'naomask', 'lista', 'cxab', 10, '0123456789');
 NM_tab_crit_1[2] = new NM_critica('F1', 'txt_pasaporte', 'Ingresar:', 'naomask', 'lista', 'CXA', 20, 'abcdefghijklmnopqrstuvwxyz0123456789');
 NM_tab_crit_1[3] = new NM_critica('F1', 'btnbuscar', '', 'naomask', 'lista', 'cxab', 20, 'TUDO');
 NM_tab_crit_1[4] = new NM_critica('F1', 'cedula', 'CÉDULA / PASAPORTE', 'naomask', 'lista', 'CXA', 20, 'TUDO');
 NM_tab_crit_1[5] = new NM_critica('F1', 'apellidos', 'NOMBRES', 'naomask', 'lista', 'CXA', 50, 'abcdefghijklmnopqrstuvwxyzï¿½ï¿½ï¿½ï¿½ï¿½ï¿½ï¿½ï¿½ï¿½ï¿½ï¿½ï¿½ï¿½ ÁÉÍÓÚ');
 NM_tab_crit_1[6] = new NM_critica('F1', 'fecha_nacimiento', 'FECHA DE NACIMIENTO', 'naomask', 'data', '<?php echo $this->field_config['fecha_nacimiento']['date_format']; ?>'<?php echo ", '', ''"; ?>, '<?php echo $this->field_config['fecha_nacimiento']['date_sep']; ?>');
 NM_tab_crit_1[7] = new NM_critica('F1', 'nacionalidad', 'NACIONALIDAD', 'naomask', 'lista', 'CXA', 50, 'abcdefghijklmnopqrstuvwxyzï¿½ï¿½ï¿½ï¿½ï¿½ï¿½ï¿½ï¿½ï¿½ï¿½ï¿½ï¿½ ÁÉÍÓÚ');
 NM_tab_crit_1[8] = new NM_critica('F1', 'telefono', 'TELÉFONO', 'naomask', 'lista', 'cxab', 10, '0123456789');
 NM_tab_crit_1[9] = new NM_critica('F1', 'celular', 'CELULAR', 'naomask', 'lista', 'cxab', 10, '0123456789');
 NM_tab_crit_1[10] = new NM_critica('F1', 'mail', 'CORREO ELECTRÓNICO', 'naomask', 'email', 100);
 NM_tab_crit_1[11] = new NM_critica('F1', 'direccion', 'DIRECCIÓN', 'naomask', 'lista', 'CXA', 500, 'TUDO');
 NM_tab_crit_1[12] = new NM_critica('NM_final');

function nm_move(x, y) 
{ 
    if (Nm_Proc_Atualiz)
    {
        return;
    }
    if (("inicio" == x || "retorna" == x) && "S" != Nav_permite_ret)
    {
        return;
    }
    if (("avanca" == x || "final" == x) && "S" != Nav_permite_ava)
    {
        return;
    }
    document.F2.nmgp_opcao.value = x; 
    document.F2.nmgp_ordem.value = y; 
    document.F2.nmgp_clone.value = "";
    if ("apl_detalhe" == x)
    {
        document.F2.nmgp_opcao.value = 'igual'; 
        document.F2.master_nav.value = 'on'; 
        document.F2.submit();
        return;
    }
    if ("clone" == x)
    {
        x = "novo";
        document.F2.nmgp_clone.value = "S";
        document.F2.nmgp_opcao.value = x; 
    }
    if ("novo" == x || "edit_novo" == x)
    {
<?php
       $NM_parm_ifr = ($NM_run_iframe == 1) ? "NM_run_iframe?#?1?@?" : "";
?>
        document.F2.nmgp_parms.value = "<?php echo $NM_parm_ifr ?>";
        document.F2.submit();
    }
    else
    {
        do_ajax_form_socios_navigate_form();
    }
} 
var sc_mupload_ok = true;
function nm_atualiza(x, y) 
{ 
    if (!sc_mupload_ok)
    {
        if (!confirm("<?php echo $this->Ini->Nm_lang['lang_errm_muok'] ?>"))
        {
            return;
        }
        sc_mupload_ok = true;
    }
    var Nm_submit_ok = true; 
    if (Nm_Proc_Atualiz)
    {
        return;
    }
    if (!scAjaxDetailProc())
    {
        return;
    }
<?php
    $NM_parm_ifr = ($NM_run_iframe == 1) ? "NM_run_iframe?#?1?@?" : "";
?>
    document.F1.nmgp_parms.value = "<?php echo $NM_parm_ifr ?>";
    document.F1.target = "_self";
    if (x == "muda_form") 
    { 
       document.F1.nmgp_num_form.value = y; 
    } 
    if (x == "incluir") 
    { 
       if (confirm ("¿Está segur@ de guardar la información...?"))  
       { }
       else 
       { 
          return; 
       } 
    } 
    if (x == "alterar") 
    { 
       if (confirm ("¿Está segur@ de actualizar la información...?"))  
       { }
       else 
       { 
          return; 
       } 
    } 
    if (x == "excluir") 
    { 
       if (confirm ("¿Está segur@ de eliminar la información...?"))  
       { 
           document.F1.nmgp_opcao.value = x; 
           document.F1.submit(); 
       } 
       else 
       { 
          return; 
       } 
    } 
    else 
    { 
       document.F1.nmgp_opcao.value = x; 
       if ("incluir" == x || "muda_form" == x)
       {
           Nm_Proc_Atualiz = true;
           document.F1.submit();
       }
       else
       {
           Nm_Proc_Atualiz = true;
           do_ajax_form_socios_submit_form();
       }
    } 
    if (Nm_submit_ok)
    { 
        Nm_Proc_Atualiz = true;
    } 
} 
function nm_mostra_img(imagem, altura, largura)
{
    tb_show('', imagem, '');
}
function nm_recarga_form(nm_ult_ancora, nm_ult_page) 
{ 
    document.F1.target = "_self";
    document.F1.nmgp_parms.value = "";
    document.F1.nmgp_ancora.value= nm_ult_page; 
    document.F1.nmgp_ancora.value= nm_ult_page; 
    document.F1.nmgp_opcao.value= "recarga"; 
    document.F1.action += "#" +  nm_ult_ancora;
    document.F1.submit(); 
} 
function nm_link_url(Sc_url)
{
    if (Sc_url.substr(0, 7) != 'http://' && Sc_url.substr(0, 8) != 'https://')
    {
        Sc_url = 'http://' + Sc_url;
    }
    return Sc_url;
}
function sc_trim(str, chars) {
        return sc_ltrim(sc_rtrim(str, chars), chars);
}
function sc_ltrim(str, chars) {
        chars = chars || "\\s";
        return str.replace(new RegExp("^[" + chars + "]+", "g"), "");
}
function sc_rtrim(str, chars) {
        chars = chars || "\\s";
        return str.replace(new RegExp("[" + chars + "]+$", "g"), "");
}
var hasJsFormOnload = true;
function sc_form_onload()
{
   document.getElementById('sc_b_sai_b').style.display= "none";
}

function scCssFocus(oHtmlObj)
{
  if (navigator.userAgent && 0 < navigator.userAgent.indexOf("MSIE") && "select" == oHtmlObj.type.substr(0, 6))
    return;
  $(oHtmlObj).addClass('scFormObjectFocusOdd')
             .removeClass('scFormObjectOdd');
}

function scCssBlur(oHtmlObj)
{
  if (navigator.userAgent && 0 < navigator.userAgent.indexOf("MSIE") && "select" == oHtmlObj.type.substr(0, 6))
    return;
  $(oHtmlObj).addClass('scFormObjectOdd')
             .removeClass('scFormObjectFocusOdd');
}

</script> 
