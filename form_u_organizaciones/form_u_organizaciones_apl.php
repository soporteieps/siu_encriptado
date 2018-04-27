<?php
//
class form_u_organizaciones_apl
{
   var $NM_is_redirected = false;
   var $NM_non_ajax_info = false;
   var $NM_ajax_flag    = false;
   var $NM_ajax_opcao   = '';
   var $NM_ajax_retorno = '';
   var $NM_ajax_info    = array('result'         => '',
                                'param'          => array(),
                                'autoComp'       => '',
                                'rsSize'         => '',
                                'msgDisplay'     => '',
                                'errList'        => array(),
                                'fldList'        => array(),
                                'focus'          => '',
                                'navStatus'      => array(),
                                'redir'          => array(),
                                'blockDisplay'   => array(),
                                'fieldDisplay'   => array(),
                                'fieldLabel'     => array(),
                                'readOnly'       => array(),
                                'btnVars'        => array(),
                                'ajaxAlert'      => '',
                                'ajaxMessage'    => '',
                                'ajaxJavascript' => array(),
                                'buttonDisplay'  => array(),
                                'calendarReload' => false,
                                'quickSearchRes' => false,
                                'displayMsg'     => false,
                                'displayMsgTxt'  => '',
                               );
   var $Nav_permite_ava = true;
   var $Nav_permite_ret = true;
   var $Apl_com_erro    = false;
   var $Ini;
   var $Erro;
   var $Db;
   var $cod_u_organizaciones;
   var $estado_org;
   var $estado_org_1;
   var $ruc_provisional;
   var $ruc_definitivo;
   var $organizacion;
   var $actividad;
   var $categoria_actividad_mp;
   var $categoria_actividad_mp_1;
   var $identificacion_actividad_mp;
   var $identificacion_actividad_mp_1;
   var $forma_organizacion;
   var $forma_organizacion_1;
   var $estado_organizacion;
   var $estado_organizacion_1;
   var $num_socios;
   var $email;
   var $telefono;
   var $tipo;
   var $tipo_1;
   var $circuito_economico;
   var $circuito_economico_1;
   var $sc_field_0;
   var $sc_field_0_1;
   var $fecha_registro;
   var $fecha_registro_hora;
   var $user;
   var $cedula_representante_legal;
   var $nombre_representante_legal;
   var $cod_zona;
   var $cod_zona_1;
   var $cod_provincia;
   var $cod_provincia_1;
   var $cod_canton;
   var $cod_canton_1;
   var $cod_parroquia;
   var $cod_parroquia_1;
   var $telefono2;
   var $direccion;
   var $registro_sanitario;
   var $celular;
   var $num_resolucion;
   var $estado_juridico;
   var $estado_juridico_1;
   var $producto_servicio;
   var $seps_sector;
   var $seps_nivel;
   var $seps_grupo_organizacion;
   var $seps_clase_organizacion;
   var $legalmente_constituida;
   var $legalmente_constituida_1;
   var $zona_procedencia;
   var $provincia_procedencia;
   var $tipo_registro;
   var $antiguedad_im;
   var $ruc;
   var $btnbuscar;
   var $nm_data;
   var $nmgp_opcao;
   var $nmgp_opc_ant;
   var $sc_evento;
   var $nmgp_clone;
   var $nmgp_return_img = array();
   var $nmgp_dados_form = array();
   var $nmgp_dados_select = array();
   var $nm_location;
   var $nm_flag_iframe;
   var $nm_flag_saida_novo;
   var $nmgp_botoes = array();
   var $nmgp_url_saida;
   var $nmgp_form_show;
   var $nmgp_form_empty;
   var $nmgp_cmp_readonly = array();
   var $nmgp_cmp_hidden = array();
   var $nm_mens_form_ins;
   var $nm_mens_form_upd;
   var $nm_mens_form_del;
   var $form_paginacao = 'parcial';
   var $lig_edit_lookup      = false;
   var $lig_edit_lookup_call = false;
   var $lig_edit_lookup_cb   = '';
   var $lig_edit_lookup_row  = '';
   var $is_calendar_app = false;
   var $Embutida_call  = false;
   var $Embutida_ronly = false;
   var $Embutida_proc  = false;
   var $Embutida_form  = false;
   var $Grid_editavel  = false;
   var $url_webhelp = '';
   var $nm_todas_criticas;
   var $Campos_Mens_erro;
   var $nm_new_label = array();
//
//----- 
   function ini_controle()
   {
        global $nm_url_saida, $teste_validade, $script_case_init, 
               $glo_senha_protect, $nm_apl_dependente, $nm_form_submit, $sc_check_excl, $nm_opc_form_php, $nm_call_php, $nm_opc_lookup;


      if ($this->NM_ajax_flag)
      {
          if (isset($this->NM_ajax_info['param']['actividad']))
          {
              $this->actividad = $this->NM_ajax_info['param']['actividad'];
          }
          if (isset($this->NM_ajax_info['param']['btnbuscar']))
          {
              $this->btnbuscar = $this->NM_ajax_info['param']['btnbuscar'];
          }
          if (isset($this->NM_ajax_info['param']['categoria_actividad_mp']))
          {
              $this->categoria_actividad_mp = $this->NM_ajax_info['param']['categoria_actividad_mp'];
          }
          if (isset($this->NM_ajax_info['param']['cedula_representante_legal']))
          {
              $this->cedula_representante_legal = $this->NM_ajax_info['param']['cedula_representante_legal'];
          }
          if (isset($this->NM_ajax_info['param']['celular']))
          {
              $this->celular = $this->NM_ajax_info['param']['celular'];
          }
          if (isset($this->NM_ajax_info['param']['circuito_economico']))
          {
              $this->circuito_economico = $this->NM_ajax_info['param']['circuito_economico'];
          }
          if (isset($this->NM_ajax_info['param']['cod_canton']))
          {
              $this->cod_canton = $this->NM_ajax_info['param']['cod_canton'];
          }
          if (isset($this->NM_ajax_info['param']['cod_parroquia']))
          {
              $this->cod_parroquia = $this->NM_ajax_info['param']['cod_parroquia'];
          }
          if (isset($this->NM_ajax_info['param']['cod_provincia']))
          {
              $this->cod_provincia = $this->NM_ajax_info['param']['cod_provincia'];
          }
          if (isset($this->NM_ajax_info['param']['cod_u_organizaciones']))
          {
              $this->cod_u_organizaciones = $this->NM_ajax_info['param']['cod_u_organizaciones'];
          }
          if (isset($this->NM_ajax_info['param']['cod_zona']))
          {
              $this->cod_zona = $this->NM_ajax_info['param']['cod_zona'];
          }
          if (isset($this->NM_ajax_info['param']['direccion']))
          {
              $this->direccion = $this->NM_ajax_info['param']['direccion'];
          }
          if (isset($this->NM_ajax_info['param']['email']))
          {
              $this->email = $this->NM_ajax_info['param']['email'];
          }
          if (isset($this->NM_ajax_info['param']['estado_juridico']))
          {
              $this->estado_juridico = $this->NM_ajax_info['param']['estado_juridico'];
          }
          if (isset($this->NM_ajax_info['param']['estado_org']))
          {
              $this->estado_org = $this->NM_ajax_info['param']['estado_org'];
          }
          if (isset($this->NM_ajax_info['param']['estado_organizacion']))
          {
              $this->estado_organizacion = $this->NM_ajax_info['param']['estado_organizacion'];
          }
          if (isset($this->NM_ajax_info['param']['fecha_registro']))
          {
              $this->fecha_registro = $this->NM_ajax_info['param']['fecha_registro'];
          }
          if (isset($this->NM_ajax_info['param']['forma_organizacion']))
          {
              $this->forma_organizacion = $this->NM_ajax_info['param']['forma_organizacion'];
          }
          if (isset($this->NM_ajax_info['param']['identificacion_actividad_mp']))
          {
              $this->identificacion_actividad_mp = $this->NM_ajax_info['param']['identificacion_actividad_mp'];
          }
          if (isset($this->NM_ajax_info['param']['legalmente_constituida']))
          {
              $this->legalmente_constituida = $this->NM_ajax_info['param']['legalmente_constituida'];
          }
          if (isset($this->NM_ajax_info['param']['nm_form_submit']))
          {
              $this->nm_form_submit = $this->NM_ajax_info['param']['nm_form_submit'];
          }
          if (isset($this->NM_ajax_info['param']['nmgp_ancora']))
          {
              $this->nmgp_ancora = $this->NM_ajax_info['param']['nmgp_ancora'];
          }
          if (isset($this->NM_ajax_info['param']['nmgp_num_form']))
          {
              $this->nmgp_num_form = $this->NM_ajax_info['param']['nmgp_num_form'];
          }
          if (isset($this->NM_ajax_info['param']['nmgp_opcao']))
          {
              $this->nmgp_opcao = $this->NM_ajax_info['param']['nmgp_opcao'];
          }
          if (isset($this->NM_ajax_info['param']['nmgp_ordem']))
          {
              $this->nmgp_ordem = $this->NM_ajax_info['param']['nmgp_ordem'];
          }
          if (isset($this->NM_ajax_info['param']['nmgp_parms']))
          {
              $this->nmgp_parms = $this->NM_ajax_info['param']['nmgp_parms'];
          }
          if (isset($this->NM_ajax_info['param']['nmgp_refresh_fields']))
          {
              $this->nmgp_refresh_fields = $this->NM_ajax_info['param']['nmgp_refresh_fields'];
          }
          if (isset($this->NM_ajax_info['param']['nmgp_url_saida']))
          {
              $this->nmgp_url_saida = $this->NM_ajax_info['param']['nmgp_url_saida'];
          }
          if (isset($this->NM_ajax_info['param']['nombre_representante_legal']))
          {
              $this->nombre_representante_legal = $this->NM_ajax_info['param']['nombre_representante_legal'];
          }
          if (isset($this->NM_ajax_info['param']['num_resolucion']))
          {
              $this->num_resolucion = $this->NM_ajax_info['param']['num_resolucion'];
          }
          if (isset($this->NM_ajax_info['param']['num_socios']))
          {
              $this->num_socios = $this->NM_ajax_info['param']['num_socios'];
          }
          if (isset($this->NM_ajax_info['param']['organizacion']))
          {
              $this->organizacion = $this->NM_ajax_info['param']['organizacion'];
          }
          if (isset($this->NM_ajax_info['param']['producto_servicio']))
          {
              $this->producto_servicio = $this->NM_ajax_info['param']['producto_servicio'];
          }
          if (isset($this->NM_ajax_info['param']['ruc']))
          {
              $this->ruc = $this->NM_ajax_info['param']['ruc'];
          }
          if (isset($this->NM_ajax_info['param']['ruc_definitivo']))
          {
              $this->ruc_definitivo = $this->NM_ajax_info['param']['ruc_definitivo'];
          }
          if (isset($this->NM_ajax_info['param']['ruc_provisional']))
          {
              $this->ruc_provisional = $this->NM_ajax_info['param']['ruc_provisional'];
          }
          if (isset($this->NM_ajax_info['param']['script_case_init']))
          {
              $this->script_case_init = $this->NM_ajax_info['param']['script_case_init'];
          }
          if (isset($this->NM_ajax_info['param']['telefono']))
          {
              $this->telefono = $this->NM_ajax_info['param']['telefono'];
          }
          if (isset($this->NM_ajax_info['param']['tipo']))
          {
              $this->tipo = $this->NM_ajax_info['param']['tipo'];
          }
          if (isset($this->NM_ajax_info['param']['tipo_registro']))
          {
              $this->tipo_registro = $this->NM_ajax_info['param']['tipo_registro'];
          }
          if (isset($this->NM_ajax_info['param']['user']))
          {
              $this->user = $this->NM_ajax_info['param']['user'];
          }
          if (isset($this->nmgp_refresh_fields))
          {
              $this->nmgp_refresh_fields = explode('_#fld#_', $this->nmgp_refresh_fields);
              $this->nmgp_opcao          = 'recarga';
          }
          if (!isset($this->nmgp_refresh_row))
          {
              $this->nmgp_refresh_row = '';
          }
      }

      $this->sc_conv_var = array();
      $this->sc_conv_var['120_organizaciones'] = "sc_field_0";
      if (!empty($_FILES))
      {
          foreach ($_FILES as $nmgp_campo => $nmgp_valores)
          {
               if (isset($this->sc_conv_var[$nmgp_campo]))
               {
                   $nmgp_campo = $this->sc_conv_var[$nmgp_campo];
               }
               elseif (isset($this->sc_conv_var[strtolower($nmgp_campo)]))
               {
                   $nmgp_campo = $this->sc_conv_var[strtolower($nmgp_campo)];
               }
               $tmp_scfile_name     = $nmgp_campo . "_scfile_name";
               $tmp_scfile_type     = $nmgp_campo . "_scfile_type";
               $this->$nmgp_campo = is_array($nmgp_valores['tmp_name']) ? $nmgp_valores['tmp_name'][0] : $nmgp_valores['tmp_name'];
               $this->$tmp_scfile_type   = is_array($nmgp_valores['type'])     ? $nmgp_valores['type'][0]     : $nmgp_valores['type'];
               $this->$tmp_scfile_name   = is_array($nmgp_valores['name'])     ? $nmgp_valores['name'][0]     : $nmgp_valores['name'];
          }
      }
      if (!empty($_POST))
      {
          foreach ($_POST as $nmgp_var => $nmgp_val)
          {
               if (isset($this->sc_conv_var[$nmgp_var]))
               {
                   $nmgp_var = $this->sc_conv_var[$nmgp_var];
               }
               elseif (isset($this->sc_conv_var[strtolower($nmgp_var)]))
               {
                   $nmgp_var = $this->sc_conv_var[strtolower($nmgp_var)];
               }
               $this->$nmgp_var = $nmgp_val;
          }
      }
      if (!empty($_GET))
      {
          foreach ($_GET as $nmgp_var => $nmgp_val)
          {
               if (isset($this->sc_conv_var[$nmgp_var]))
               {
                   $nmgp_var = $this->sc_conv_var[$nmgp_var];
               }
               elseif (isset($this->sc_conv_var[strtolower($nmgp_var)]))
               {
                   $nmgp_var = $this->sc_conv_var[strtolower($nmgp_var)];
               }
               $this->$nmgp_var = $nmgp_val;
          }
      }
      if (isset($this->name) && isset($this->NM_contr_var_session) && $this->NM_contr_var_session == "Yes") 
      {
          $_SESSION['name'] = $this->name;
      }
      if (isset($_POST["name"])) 
      {
          $_SESSION['name'] = $this->name;
      }
      if (isset($_GET["name"])) 
      {
          $_SESSION['name'] = $this->name;
      }
      if (isset($_SESSION['sc_session'][$script_case_init]['form_u_organizaciones']['embutida_parms']))
      { 
          $this->nmgp_parms = $_SESSION['sc_session'][$script_case_init]['form_u_organizaciones']['embutida_parms'];
          unset($_SESSION['sc_session'][$script_case_init]['form_u_organizaciones']['embutida_parms']);
      } 
      if (isset($this->nmgp_parms) && !empty($this->nmgp_parms)) 
      { 
          if (isset($_SESSION['nm_aba_bg_color'])) 
          { 
              unset($_SESSION['nm_aba_bg_color']);
          }   
          $nmgp_parms = NM_decode_input($nmgp_parms);
          $nmgp_parms = str_replace("@aspass@", "'", $this->nmgp_parms);
          $nmgp_parms = str_replace("*scout", "?@?", $nmgp_parms);
          $nmgp_parms = str_replace("*scin", "?#?", $nmgp_parms);
          $todo = explode("?@?", $nmgp_parms);
          $ix = 0;
          while (!empty($todo[$ix]))
          {
             $cadapar = explode("?#?", $todo[$ix]);
             if (1 < sizeof($cadapar))
             {
                 if (isset($this->sc_conv_var[$cadapar[0]]))
                 {
                     $cadapar[0] = $this->sc_conv_var[$cadapar[0]];
                 }
                 elseif (isset($this->sc_conv_var[strtolower($cadapar[0])]))
                 {
                     $cadapar[0] = $this->sc_conv_var[strtolower($cadapar[0])];
                 }
                 nm_limpa_str_form_u_organizaciones($cadapar[1]);
                 $this->$cadapar[0] = $cadapar[1];
             }
             $ix++;
          }
          if (isset($this->NM_where_filter_form))
          {
              $_SESSION['sc_session'][$script_case_init]['form_u_organizaciones']['where_filter_form'] = $this->NM_where_filter_form;
          }
          if (isset($this->sc_redir_atualiz))
          {
              $_SESSION['sc_session'][$script_case_init]['form_u_organizaciones']['sc_redir_atualiz'] = $this->sc_redir_atualiz;
          }
          if (isset($this->sc_redir_insert))
          {
              $_SESSION['sc_session'][$script_case_init]['form_u_organizaciones']['sc_redir_insert'] = $this->sc_redir_insert;
          }
          if (isset($this->name)) 
          {
              $_SESSION['name'] = $this->name;
          }
      } 
      elseif (isset($script_case_init) && !empty($script_case_init) && isset($_SESSION['sc_session'][$script_case_init]['form_u_organizaciones']['parms']))
      {
          if ((!isset($this->nmgp_opcao) || ($this->nmgp_opcao != "incluir" && $this->nmgp_opcao != "alterar" && $this->nmgp_opcao != "excluir" && $this->nmgp_opcao != "novo" && $this->nmgp_opcao != "recarga" && $this->nmgp_opcao != "muda_form")) && (!isset($this->NM_ajax_opcao) || $this->NM_ajax_opcao == ""))
          {
              $todo = explode("?@?", $_SESSION['sc_session'][$script_case_init]['form_u_organizaciones']['parms']);
              $ix = 0;
              while (!empty($todo[$ix]))
              {
                 $cadapar = explode("?#?", $todo[$ix]);
                 $this->$cadapar[0] = $cadapar[1];
                 $ix++;
              }
          }
      } 

      if ($this->NM_ajax_flag && 'navigate_form' == $this->NM_ajax_opcao)
      { }
      else
      {
          $aDtParts = explode(' ', $this->fecha_registro);
          $this->fecha_registro      = $aDtParts[0];
          $this->fecha_registro_hora = $aDtParts[1];
      }
      if (!$this->NM_ajax_flag && 'autocomp_' == substr($this->NM_ajax_opcao, 0, 9))
      {
          $this->NM_ajax_flag = true;
      }

      $dir_raiz          = strrpos($_SERVER['PHP_SELF'],"/") ;  
      $dir_raiz          = substr($_SERVER['PHP_SELF'], 0, $dir_raiz + 1) ;  
      if (isset($this->nm_evt_ret_edit) && '' != $this->nm_evt_ret_edit)
      {
          $_SESSION['sc_session'][$script_case_init]['form_u_organizaciones']['lig_edit_lookup']     = true;
          $_SESSION['sc_session'][$script_case_init]['form_u_organizaciones']['lig_edit_lookup_cb']  = $this->nm_evt_ret_edit;
          $_SESSION['sc_session'][$script_case_init]['form_u_organizaciones']['lig_edit_lookup_row'] = isset($this->nm_evt_ret_row) ? $this->nm_evt_ret_row : '';
      }
      if (isset($_SESSION['sc_session'][$script_case_init]['form_u_organizaciones']['lig_edit_lookup']) && $_SESSION['sc_session'][$script_case_init]['form_u_organizaciones']['lig_edit_lookup'])
      {
          $this->lig_edit_lookup     = true;
          $this->lig_edit_lookup_cb  = $_SESSION['sc_session'][$script_case_init]['form_u_organizaciones']['lig_edit_lookup_cb'];
          $this->lig_edit_lookup_row = $_SESSION['sc_session'][$script_case_init]['form_u_organizaciones']['lig_edit_lookup_row'];
      }
      if (!$this->Ini)
      { 
          $this->Ini = new form_u_organizaciones_ini(); 
          $this->Ini->init();
      } 
      if (!function_exists("nmButtonOutput"))
      {
          include_once($this->Ini->path_lib_php . "nm_gp_config_btn.php");
      }
      include("../_lib/css/" . $this->Ini->str_schema_all . "_form.php");
      $this->Ini->Str_btn_form    = trim($str_button);
      include($this->Ini->path_btn . $this->Ini->Str_btn_form . '/' . $this->Ini->Str_btn_form . '.php');
      $this->Db = $this->Ini->Db; 
      $this->Ini->Img_sep_form    = "/" . trim($str_toolbar_separator);
      $this->Ini->Color_bg_ajax   = "" == trim($str_ajax_bg)         ? "#000" : $str_ajax_bg;
      $this->Ini->Border_c_ajax   = "" == trim($str_ajax_border_c)   ? ""     : $str_ajax_border_c;
      $this->Ini->Border_s_ajax   = "" == trim($str_ajax_border_s)   ? ""     : $str_ajax_border_s;
      $this->Ini->Border_w_ajax   = "" == trim($str_ajax_border_w)   ? ""     : $str_ajax_border_w;
      $this->Ini->Block_img_exp   = "" == trim($str_block_exp)       ? ""     : $str_block_exp;
      $this->Ini->Block_img_col   = "" == trim($str_block_col)       ? ""     : $str_block_col;
      $this->Ini->Msg_ico_title   = "" == trim($str_msg_ico_title)   ? ""     : $str_msg_ico_title;
      $this->Ini->Msg_ico_body    = "" == trim($str_msg_ico_body)    ? ""     : $str_msg_ico_body;
      $this->Ini->Err_ico_title   = "" == trim($str_err_ico_title)   ? ""     : $str_err_ico_title;
      $this->Ini->Err_ico_body    = "" == trim($str_err_ico_body)    ? ""     : $str_err_ico_body;
      $this->Ini->Cal_ico_back    = "" == trim($str_cal_ico_back)    ? ""     : $str_cal_ico_back;
      $this->Ini->Cal_ico_for     = "" == trim($str_cal_ico_for)     ? ""     : $str_cal_ico_for;
      $this->Ini->Cal_ico_close   = "" == trim($str_cal_ico_close)   ? ""     : $str_cal_ico_close;
      $this->Ini->Tab_space       = "" == trim($str_tab_space)       ? ""     : $str_tab_space;
      $this->Ini->Bubble_tail     = "" == trim($str_bubble_tail)     ? ""     : $str_bubble_tail;
      $this->Ini->Label_sort_pos  = "" == trim($str_label_sort_pos)  ? ""     : $str_label_sort_pos;
      $this->Ini->Label_sort      = "" == trim($str_label_sort)      ? ""     : $str_label_sort;
      $this->Ini->Label_sort_asc  = "" == trim($str_label_sort_asc)  ? ""     : $str_label_sort_asc;
      $this->Ini->Label_sort_desc = "" == trim($str_label_sort_desc) ? ""     : $str_label_sort_desc;
      $this->Ini->Img_status_ok   = "" == trim($str_img_status_ok)   ? ""     : $str_img_status_ok;
      $this->Ini->Img_status_err  = "" == trim($str_img_status_err)  ? ""     : $str_img_status_err;
      $this->Ini->Css_status      = "scFormInputError";
      $this->Ini->Error_icon_span = "" == trim($str_error_icon_span) ? false  : "message" == $str_error_icon_span;
      $this->Ini->Img_qs_search        = "" == trim($img_qs_search)        ? "scriptcase__NM__qs_lupa.png"  : $img_qs_search;
      $this->Ini->Img_qs_clean         = "" == trim($img_qs_clean)         ? "scriptcase__NM__qs_close.png" : $img_qs_clean;
      $this->Ini->Str_qs_image_padding = "" == trim($str_qs_image_padding) ? "0"                            : $str_qs_image_padding;



      $_SESSION['scriptcase']['error_icon']['form_u_organizaciones']  = "<img src=\"" . $this->Ini->path_icones . "/scriptcase__NM__icnMensagemAlerta.png\" style=\"border-width: 0px\" align=\"top\">&nbsp;";
      $_SESSION['scriptcase']['error_close']['form_u_organizaciones'] = "<td>" . nmButtonOutput($this->arr_buttons, "berrm_clse", "document.getElementById('id_error_display_fixed').style.display = 'none'; document.getElementById('id_error_message_fixed').innerHTML = ''; return false", "document.getElementById('id_error_display_fixed').style.display = 'none'; document.getElementById('id_error_message_fixed').innerHTML = ''; return false", "", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "") . "</td>";

      $this->Embutida_proc = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['embutida_proc']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['embutida_proc'] : $this->Embutida_proc;
      $this->Embutida_form = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['embutida_form']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['embutida_form'] : $this->Embutida_form;
      $this->Embutida_call = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['embutida_call']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['embutida_call'] : $this->Embutida_call;

      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['embutida_liga_grid_edit']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['embutida_liga_grid_edit'])
      {
          $this->Grid_editavel = ('on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['embutida_liga_grid_edit']) ? true : false;
      }
      if (isset($this->Grid_editavel) && $this->Grid_editavel)
      {
          $this->Embutida_form  = true;
          $this->Embutida_ronly = true;
      }
      $this->Embutida_multi = false;
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['embutida_multi']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['embutida_multi'])
      {
          $this->Grid_editavel  = false;
          $this->Embutida_form  = false;
          $this->Embutida_ronly = false;
          $this->Embutida_multi = true;
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['embutida_liga_tp_pag']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['embutida_liga_tp_pag'])
      {
          $this->form_paginacao = $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['embutida_liga_tp_pag'];
      }

      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['embutida_form']) || '' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['embutida_form'])
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['embutida_form'] = $this->Embutida_form;
      }
      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['embutida_liga_grid_edit']) || '' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['embutida_liga_grid_edit'])
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['embutida_liga_grid_edit'] = $this->Grid_editavel ? 'on' : 'off';
      }
      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['embutida_liga_grid_edit']) || '' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['embutida_liga_grid_edit'])
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['embutida_liga_grid_edit'] = $this->Embutida_call;
      }

      $this->Ini->cor_grid_par = $this->Ini->cor_grid_impar;
      $this->nm_location = $this->Ini->sc_protocolo . $this->Ini->server . $dir_raiz . "form_u_organizaciones.php"; 
      $this->nmgp_url_saida  = $nm_url_saida;
      $this->nmgp_form_show  = "on";
      $this->nmgp_form_empty = false;
      $this->Ini->sc_Include($this->Ini->path_lib_php . "/nm_valida.php", "C", "NM_Valida") ; 
      $teste_validade = new NM_Valida ;

      $this->loadFieldConfig();

      if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['first_time'])
      {
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_u_organizaciones']['insert']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_u_organizaciones']['new']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_u_organizaciones']['update']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_u_organizaciones']['delete']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_u_organizaciones']['first']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_u_organizaciones']['back']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_u_organizaciones']['forward']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_u_organizaciones']['last']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_u_organizaciones']['qsearch']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_u_organizaciones']['summary']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_u_organizaciones']['navpage']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_u_organizaciones']['goto']);
      }
      if (isset($this->NM_btn_insert) && '' != $this->NM_btn_insert && (!isset($_SESSION['scriptcase']['sc_apl_conf']['form_u_organizaciones']['insert']) || '' == $_SESSION['scriptcase']['sc_apl_conf']['form_u_organizaciones']['insert']))
      {
          if ('N' == $this->NM_btn_insert)
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_u_organizaciones']['insert'] = 'off';
          }
          else
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_u_organizaciones']['insert'] = 'on';
          }
      }
      if (isset($this->NM_btn_new) && 'N' == $this->NM_btn_new)
      {
          $_SESSION['scriptcase']['sc_apl_conf_lig']['form_u_organizaciones']['new'] = 'off';
      }
      if (isset($this->NM_btn_update) && '' != $this->NM_btn_update && (!isset($_SESSION['scriptcase']['sc_apl_conf']['form_u_organizaciones']['update']) || '' == $_SESSION['scriptcase']['sc_apl_conf']['form_u_organizaciones']['update']))
      {
          if ('N' == $this->NM_btn_update)
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_u_organizaciones']['update'] = 'off';
          }
          else
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_u_organizaciones']['update'] = 'on';
          }
      }
      if (isset($this->NM_btn_delete) && '' != $this->NM_btn_delete && (!isset($_SESSION['scriptcase']['sc_apl_conf']['form_u_organizaciones']['delete']) || '' == $_SESSION['scriptcase']['sc_apl_conf']['form_u_organizaciones']['delete']))
      {
          if ('N' == $this->NM_btn_delete)
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_u_organizaciones']['delete'] = 'off';
          }
          else
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_u_organizaciones']['delete'] = 'on';
          }
      }
      if (isset($this->NM_btn_navega) && '' != $this->NM_btn_navega)
      {
          if ('N' == $this->NM_btn_navega)
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_u_organizaciones']['first']   = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_u_organizaciones']['back']    = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_u_organizaciones']['forward'] = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_u_organizaciones']['last']    = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_u_organizaciones']['qsearch'] = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_u_organizaciones']['summary'] = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_u_organizaciones']['navpage'] = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_u_organizaciones']['goto']    = 'off';
          }
          else
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_u_organizaciones']['first']   = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_u_organizaciones']['back']    = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_u_organizaciones']['forward'] = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_u_organizaciones']['last']    = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_u_organizaciones']['qsearch'] = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_u_organizaciones']['summary'] = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_u_organizaciones']['navpage'] = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_u_organizaciones']['goto']    = 'on';
          }
      }

      $this->nmgp_botoes['exit'] = "on";
      $this->nmgp_botoes['new'] = "on";
      $this->nmgp_botoes['insert'] = "on";
      $this->nmgp_botoes['copy'] = "off";
      $this->nmgp_botoes['update'] = "on";
      $this->nmgp_botoes['delete'] = "off";
      $this->nmgp_botoes['first'] = "off";
      $this->nmgp_botoes['back'] = "off";
      $this->nmgp_botoes['forward'] = "off";
      $this->nmgp_botoes['last'] = "off";
      $this->nmgp_botoes['summary'] = "off";
      $this->nmgp_botoes['navpage'] = "off";
      $this->nmgp_botoes['goto'] = "off";
      $this->nmgp_botoes['qtline'] = "off";
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['iframe_filtro']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['iframe_filtro'] == "S")
      {
          $this->nmgp_botoes['exit'] = "off";
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_u_organizaciones']['btn_display']) && !empty($_SESSION['scriptcase']['sc_apl_conf']['form_u_organizaciones']['btn_display']))
      {
          foreach ($_SESSION['scriptcase']['sc_apl_conf']['form_u_organizaciones']['btn_display'] as $NM_cada_btn => $NM_cada_opc)
          {
              $this->nmgp_botoes[$NM_cada_btn] = $NM_cada_opc;
          }
      }

      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_u_organizaciones']['insert']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_u_organizaciones']['insert'] != '')
      {
          $this->nmgp_botoes['new']    = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_u_organizaciones']['insert'];
          $this->nmgp_botoes['insert'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_u_organizaciones']['insert'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_u_organizaciones']['new']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_u_organizaciones']['new'] != '')
      {
          $this->nmgp_botoes['new']    = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_u_organizaciones']['new'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_u_organizaciones']['update']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_u_organizaciones']['update'] != '')
      {
          $this->nmgp_botoes['update'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_u_organizaciones']['update'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_u_organizaciones']['delete']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_u_organizaciones']['delete'] != '')
      {
          $this->nmgp_botoes['delete'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_u_organizaciones']['delete'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_u_organizaciones']['first']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_u_organizaciones']['first'] != '')
      {
          $this->nmgp_botoes['first'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_u_organizaciones']['first'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_u_organizaciones']['back']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_u_organizaciones']['back'] != '')
      {
          $this->nmgp_botoes['back'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_u_organizaciones']['back'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_u_organizaciones']['forward']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_u_organizaciones']['forward'] != '')
      {
          $this->nmgp_botoes['forward'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_u_organizaciones']['forward'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_u_organizaciones']['last']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_u_organizaciones']['last'] != '')
      {
          $this->nmgp_botoes['last'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_u_organizaciones']['last'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_u_organizaciones']['qsearch']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_u_organizaciones']['qsearch'] != '')
      {
          $this->nmgp_botoes['qsearch'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_u_organizaciones']['qsearch'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_u_organizaciones']['summary']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_u_organizaciones']['summary'] != '')
      {
          $this->nmgp_botoes['summary'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_u_organizaciones']['summary'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_u_organizaciones']['navpage']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_u_organizaciones']['navpage'] != '')
      {
          $this->nmgp_botoes['navpage'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_u_organizaciones']['navpage'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_u_organizaciones']['goto']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_u_organizaciones']['goto'] != '')
      {
          $this->nmgp_botoes['goto'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_u_organizaciones']['goto'];
      }

      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['embutida_liga_form_insert']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['embutida_liga_form_insert'] != '')
      {
          $this->nmgp_botoes['new']    = $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['embutida_liga_form_insert'];
          $this->nmgp_botoes['insert'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['embutida_liga_form_insert'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['embutida_liga_form_update']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['embutida_liga_form_update'] != '')
      {
          $this->nmgp_botoes['update'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['embutida_liga_form_update'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['embutida_liga_form_delete']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['embutida_liga_form_delete'] != '')
      {
          $this->nmgp_botoes['delete'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['embutida_liga_form_delete'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['embutida_liga_form_btn_nav']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['embutida_liga_form_btn_nav'] != '')
      {
          $this->nmgp_botoes['first']   = $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['embutida_liga_form_btn_nav'];
          $this->nmgp_botoes['back']    = $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['embutida_liga_form_btn_nav'];
          $this->nmgp_botoes['forward'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['embutida_liga_form_btn_nav'];
          $this->nmgp_botoes['last']    = $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['embutida_liga_form_btn_nav'];
      }

      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_u_organizaciones']['insert']) && $_SESSION['scriptcase']['sc_apl_conf']['form_u_organizaciones']['insert'] != '')
      {
          $this->nmgp_botoes['new']    = $_SESSION['scriptcase']['sc_apl_conf']['form_u_organizaciones']['insert'];
          $this->nmgp_botoes['insert'] = $_SESSION['scriptcase']['sc_apl_conf']['form_u_organizaciones']['insert'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_u_organizaciones']['update']) && $_SESSION['scriptcase']['sc_apl_conf']['form_u_organizaciones']['update'] != '')
      {
          $this->nmgp_botoes['update'] = $_SESSION['scriptcase']['sc_apl_conf']['form_u_organizaciones']['update'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_u_organizaciones']['delete']) && $_SESSION['scriptcase']['sc_apl_conf']['form_u_organizaciones']['delete'] != '')
      {
          $this->nmgp_botoes['delete'] = $_SESSION['scriptcase']['sc_apl_conf']['form_u_organizaciones']['delete'];
      }

      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_u_organizaciones']['field_display']) && !empty($_SESSION['scriptcase']['sc_apl_conf']['form_u_organizaciones']['field_display']))
      {
          foreach ($_SESSION['scriptcase']['sc_apl_conf']['form_u_organizaciones']['field_display'] as $NM_cada_field => $NM_cada_opc)
          {
              $this->nmgp_cmp_hidden[$NM_cada_field] = $NM_cada_opc;
              $this->NM_ajax_info['fieldDisplay'][$NM_cada_field] = $NM_cada_opc;
          }
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_u_organizaciones']['field_readonly']) && !empty($_SESSION['scriptcase']['sc_apl_conf']['form_u_organizaciones']['field_readonly']))
      {
          foreach ($_SESSION['scriptcase']['sc_apl_conf']['form_u_organizaciones']['field_readonly'] as $NM_cada_field => $NM_cada_opc)
          {
              $this->nmgp_cmp_readonly[$NM_cada_field] = "on";
              $this->NM_ajax_info['readOnly'][$NM_cada_field] = $NM_cada_opc;
          }
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_u_organizaciones']['exit']) && $_SESSION['scriptcase']['sc_apl_conf']['form_u_organizaciones']['exit'] != '')
      {
          $_SESSION['scriptcase']['sc_url_saida'][$this->Ini->sc_page] = $_SESSION['scriptcase']['sc_apl_conf']['form_u_organizaciones']['exit'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['dados_form']))
      {
          $this->nmgp_dados_form = $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['dados_form'];
          if (!isset($this->cod_u_organizaciones)){$this->cod_u_organizaciones = $this->nmgp_dados_form['cod_u_organizaciones'];} 
          if (!isset($this->sc_field_0)){$this->sc_field_0 = $this->nmgp_dados_form['sc_field_0'];} 
          if (!isset($this->telefono2)){$this->telefono2 = $this->nmgp_dados_form['telefono2'];} 
          if (!isset($this->registro_sanitario)){$this->registro_sanitario = $this->nmgp_dados_form['registro_sanitario'];} 
          if (!isset($this->seps_sector)){$this->seps_sector = $this->nmgp_dados_form['seps_sector'];} 
          if (!isset($this->seps_nivel)){$this->seps_nivel = $this->nmgp_dados_form['seps_nivel'];} 
          if (!isset($this->seps_grupo_organizacion)){$this->seps_grupo_organizacion = $this->nmgp_dados_form['seps_grupo_organizacion'];} 
          if (!isset($this->seps_clase_organizacion)){$this->seps_clase_organizacion = $this->nmgp_dados_form['seps_clase_organizacion'];} 
          if (!isset($this->zona_procedencia)){$this->zona_procedencia = $this->nmgp_dados_form['zona_procedencia'];} 
          if (!isset($this->provincia_procedencia)){$this->provincia_procedencia = $this->nmgp_dados_form['provincia_procedencia'];} 
          if (!isset($this->antiguedad_im)){$this->antiguedad_im = $this->nmgp_dados_form['antiguedad_im'];} 
      }
      $glo_senha_protect = (isset($_SESSION['scriptcase']['glo_senha_protect'])) ? $_SESSION['scriptcase']['glo_senha_protect'] : "S";
      $this->aba_iframe = false;
      if (isset($_SESSION['scriptcase']['sc_aba_iframe']))
      {
          foreach ($_SESSION['scriptcase']['sc_aba_iframe'] as $aba => $apls_aba)
          {
              if (in_array("form_u_organizaciones", $apls_aba))
              {
                  $this->aba_iframe = true;
                  break;
              }
          }
      }
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['iframe_menu'] && (!isset($_SESSION['scriptcase']['menu_mobile']) || empty($_SESSION['scriptcase']['menu_mobile'])))
      {
          $this->aba_iframe = true;
      }
      $this->Ini->sc_Include($this->Ini->path_lib_php . "/nm_gp_limpa.php", "F", "nm_limpa_valor") ; 
      $this->Ini->sc_Include($this->Ini->path_libs . "/nm_gc.php", "F", "nm_gc") ; 
      $_SESSION['scriptcase']['sc_tab_meses']['int'] = array(
                                      $this->Ini->Nm_lang['lang_mnth_janu'],
                                      $this->Ini->Nm_lang['lang_mnth_febr'],
                                      $this->Ini->Nm_lang['lang_mnth_marc'],
                                      $this->Ini->Nm_lang['lang_mnth_apri'],
                                      $this->Ini->Nm_lang['lang_mnth_mayy'],
                                      $this->Ini->Nm_lang['lang_mnth_june'],
                                      $this->Ini->Nm_lang['lang_mnth_july'],
                                      $this->Ini->Nm_lang['lang_mnth_augu'],
                                      $this->Ini->Nm_lang['lang_mnth_sept'],
                                      $this->Ini->Nm_lang['lang_mnth_octo'],
                                      $this->Ini->Nm_lang['lang_mnth_nove'],
                                      $this->Ini->Nm_lang['lang_mnth_dece']);
      $_SESSION['scriptcase']['sc_tab_meses']['abr'] = array(
                                      $this->Ini->Nm_lang['lang_shrt_mnth_janu'],
                                      $this->Ini->Nm_lang['lang_shrt_mnth_febr'],
                                      $this->Ini->Nm_lang['lang_shrt_mnth_marc'],
                                      $this->Ini->Nm_lang['lang_shrt_mnth_apri'],
                                      $this->Ini->Nm_lang['lang_shrt_mnth_mayy'],
                                      $this->Ini->Nm_lang['lang_shrt_mnth_june'],
                                      $this->Ini->Nm_lang['lang_shrt_mnth_july'],
                                      $this->Ini->Nm_lang['lang_shrt_mnth_augu'],
                                      $this->Ini->Nm_lang['lang_shrt_mnth_sept'],
                                      $this->Ini->Nm_lang['lang_shrt_mnth_octo'],
                                      $this->Ini->Nm_lang['lang_shrt_mnth_nove'],
                                      $this->Ini->Nm_lang['lang_shrt_mnth_dece']);
      $_SESSION['scriptcase']['sc_tab_dias']['int'] = array(
                                      $this->Ini->Nm_lang['lang_days_sund'],
                                      $this->Ini->Nm_lang['lang_days_mond'],
                                      $this->Ini->Nm_lang['lang_days_tued'],
                                      $this->Ini->Nm_lang['lang_days_wend'],
                                      $this->Ini->Nm_lang['lang_days_thud'],
                                      $this->Ini->Nm_lang['lang_days_frid'],
                                      $this->Ini->Nm_lang['lang_days_satd']);
      $_SESSION['scriptcase']['sc_tab_dias']['abr'] = array(
                                      $this->Ini->Nm_lang['lang_shrt_days_sund'],
                                      $this->Ini->Nm_lang['lang_shrt_days_mond'],
                                      $this->Ini->Nm_lang['lang_shrt_days_tued'],
                                      $this->Ini->Nm_lang['lang_shrt_days_wend'],
                                      $this->Ini->Nm_lang['lang_shrt_days_thud'],
                                      $this->Ini->Nm_lang['lang_shrt_days_frid'],
                                      $this->Ini->Nm_lang['lang_shrt_days_satd']);
      nm_gc($this->Ini->path_libs);
      $this->Ini->Gd_missing  = true;
      if(function_exists("getProdVersion"))
      {
         $_SESSION['scriptcase']['sc_prod_Version'] = str_replace(".", "", getProdVersion($this->Ini->path_libs));
         if(function_exists("gd_info"))
         {
            $this->Ini->Gd_missing = false;
         }
      }
      $this->Ini->sc_Include($this->Ini->path_lib_php . "/nm_trata_img.php", "C", "nm_trata_img") ; 
      $this->nm_data = new nm_data("es");
      if (isset($_GET['nm_cal_display']))
      {
          if ($this->Embutida_proc)
          { 
              include_once($this->Ini->path_embutida . 'form_u_organizaciones/form_u_organizaciones_calendar.php');
          }
          else
          { 
              include_once($this->Ini->path_aplicacao . 'form_u_organizaciones_calendar.php');
          }
          exit;
      }

      if (is_file($this->Ini->path_aplicacao . 'form_u_organizaciones_help.txt'))
      {
          $arr_link_webhelp = file($this->Ini->path_aplicacao . 'form_u_organizaciones_help.txt');
          if ($arr_link_webhelp)
          {
              foreach ($arr_link_webhelp as $str_link_webhelp)
              {
                  $str_link_webhelp = trim($str_link_webhelp);
                  if ('form:' == substr($str_link_webhelp, 0, 5))
                  {
                      $arr_link_parts = explode(':', $str_link_webhelp);
                      if ('' != $arr_link_parts[1] && is_file($this->Ini->root . $this->Ini->path_help . $arr_link_parts[1]))
                      {
                          $this->url_webhelp = $this->Ini->path_help . $arr_link_parts[1];
                      }
                  }
              }
          }
      }

      if (is_dir($this->Ini->path_aplicacao . 'img'))
      {
          $Res_dir_img = @opendir($this->Ini->path_aplicacao . 'img');
          if ($Res_dir_img)
          {
              while (FALSE !== ($Str_arquivo = @readdir($Res_dir_img))) 
              {
                 if (@is_file($this->Ini->path_aplicacao . 'img/' . $Str_arquivo) && '.' != $Str_arquivo && '..' != $this->Ini->path_aplicacao . 'img/' . $Str_arquivo)
                 {
                     @unlink($this->Ini->path_aplicacao . 'img/' . $Str_arquivo);
                 }
              }
          }
          @closedir($Res_dir_img);
          rmdir($this->Ini->path_aplicacao . 'img');
      }

      if ($this->Embutida_proc)
      { 
          require_once($this->Ini->path_embutida . 'form_u_organizaciones/form_u_organizaciones_erro.class.php');
      }
      else
      { 
          require_once($this->Ini->path_aplicacao . "form_u_organizaciones_erro.class.php"); 
      }
      $this->Erro      = new form_u_organizaciones_erro();
      $this->Erro->Ini = $this->Ini;
      if ($nm_opc_lookup != "lookup" && $nm_opc_php != "formphp")
      { 
         if (empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['opcao']))
         { 
             if ($this->cod_u_organizaciones != "")   
             { 
                 $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['opcao'] = "igual" ;  
             }   
         }   
      } 
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['opcao']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['opcao']) && empty($this->nmgp_refresh_fields))
      {
          $this->nmgp_opcao = $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['opcao'];  
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['opcao'] = "" ;  
          if ($this->nmgp_opcao == "edit_novo")  
          {
             $this->nmgp_opcao = "novo";
             $this->nm_flag_saida_novo = "S";
          }
      } 
      $this->nm_Start_new = false;
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_u_organizaciones']['start']) && $_SESSION['scriptcase']['sc_apl_conf']['form_u_organizaciones']['start'] == 'new')
      {
          $this->nmgp_opcao = "novo";
          $this->nm_Start_new = true;
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['opcao'] = "novo";
          unset($_SESSION['scriptcase']['sc_apl_conf']['form_u_organizaciones']['start']);
      }
      if ($this->nmgp_opcao == "igual")  
      {
          $this->nmgp_opc_ant = $this->nmgp_opcao;
      } 
      else
      {
          $this->nmgp_opc_ant = $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['opc_ant'];
      } 
      if ($this->nmgp_opcao == "recarga" || $this->nmgp_opcao == "muda_form")  
      {
          $this->nmgp_botoes = $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['botoes'];
          $this->Nav_permite_ret = 0 != $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['inicio'];
          $this->Nav_permite_ava = $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['total'] != $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['final'];
      }
      else
      {
      }
      $this->nm_flag_iframe = false;
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['dados_form'])) 
      {
         $this->nmgp_dados_form = $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['dados_form'];
      }
      if ($this->nmgp_opcao == "edit_novo")  
      {
          $this->nmgp_opcao = "novo";
          $this->nm_flag_saida_novo = "S";
      }
//
      $this->sc_evento = $this->nmgp_opcao;
      if (isset($this->estado_org)) { $this->nm_limpa_alfa($this->estado_org); }
      if (isset($this->ruc_provisional)) { $this->nm_limpa_alfa($this->ruc_provisional); }
      if (isset($this->ruc_definitivo)) { $this->nm_limpa_alfa($this->ruc_definitivo); }
      if (isset($this->organizacion)) { $this->nm_limpa_alfa($this->organizacion); }
      if (isset($this->actividad)) { $this->nm_limpa_alfa($this->actividad); }
      if (isset($this->categoria_actividad_mp)) { $this->nm_limpa_alfa($this->categoria_actividad_mp); }
      if (isset($this->identificacion_actividad_mp)) { $this->nm_limpa_alfa($this->identificacion_actividad_mp); }
      if (isset($this->forma_organizacion)) { $this->nm_limpa_alfa($this->forma_organizacion); }
      if (isset($this->estado_organizacion)) { $this->nm_limpa_alfa($this->estado_organizacion); }
      if (isset($this->num_socios)) { $this->nm_limpa_alfa($this->num_socios); }
      if (isset($this->email)) { $this->nm_limpa_alfa($this->email); }
      if (isset($this->telefono)) { $this->nm_limpa_alfa($this->telefono); }
      if (isset($this->tipo)) { $this->nm_limpa_alfa($this->tipo); }
      if (isset($this->circuito_economico)) { $this->nm_limpa_alfa($this->circuito_economico); }
      if (isset($this->user)) { $this->nm_limpa_alfa($this->user); }
      if (isset($this->cedula_representante_legal)) { $this->nm_limpa_alfa($this->cedula_representante_legal); }
      if (isset($this->nombre_representante_legal)) { $this->nm_limpa_alfa($this->nombre_representante_legal); }
      if (isset($this->cod_zona)) { $this->nm_limpa_alfa($this->cod_zona); }
      if (isset($this->cod_provincia)) { $this->nm_limpa_alfa($this->cod_provincia); }
      if (isset($this->cod_canton)) { $this->nm_limpa_alfa($this->cod_canton); }
      if (isset($this->cod_parroquia)) { $this->nm_limpa_alfa($this->cod_parroquia); }
      if (isset($this->direccion)) { $this->nm_limpa_alfa($this->direccion); }
      if (isset($this->celular)) { $this->nm_limpa_alfa($this->celular); }
      if (isset($this->num_resolucion)) { $this->nm_limpa_alfa($this->num_resolucion); }
      if (isset($this->estado_juridico)) { $this->nm_limpa_alfa($this->estado_juridico); }
      if (isset($this->producto_servicio)) { $this->nm_limpa_alfa($this->producto_servicio); }
      if (isset($this->legalmente_constituida)) { $this->nm_limpa_alfa($this->legalmente_constituida); }
      if (isset($this->tipo_registro)) { $this->nm_limpa_alfa($this->tipo_registro); }
      $Campos_Crit       = "";
      $Campos_erro       = "";
      $Campos_Falta      = array();
      $Campos_Erros      = array();
      $dir_raiz          = strrpos($_SERVER['PHP_SELF'],"/") ;  
      $dir_raiz          =  substr($_SERVER['PHP_SELF'], 0, $dir_raiz + 1) ;  
      $this->nm_location = $this->Ini->sc_protocolo . $this->Ini->server . $dir_raiz . "form_u_organizaciones.php"; 
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['opc_edit'] = true;  
     if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['dados_select'])) 
     {
        $this->nmgp_dados_select = $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['dados_select'];
     }
   }

   function loadFieldConfig()
   {
      $this->field_config = array();
      //-- num_socios
      $this->field_config['num_socios']               = array();
      $this->field_config['num_socios']['symbol_grp'] = $_SESSION['scriptcase']['reg_conf']['grup_num'];
      $this->field_config['num_socios']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['num_socios']['symbol_dec'] = '';
      $this->field_config['num_socios']['symbol_neg'] = $_SESSION['scriptcase']['reg_conf']['simb_neg'];
      $this->field_config['num_socios']['format_neg'] = $_SESSION['scriptcase']['reg_conf']['neg_num'];
      //-- fecha_registro
      $this->field_config['fecha_registro']                 = array();
      $this->field_config['fecha_registro']['date_format']  = $_SESSION['scriptcase']['reg_conf']['date_format'] . ';' . $_SESSION['scriptcase']['reg_conf']['time_format'];
      $this->field_config['fecha_registro']['date_sep']     = $_SESSION['scriptcase']['reg_conf']['date_sep'];
      $this->field_config['fecha_registro']['time_sep']     = $_SESSION['scriptcase']['reg_conf']['time_sep'];
      $this->field_config['fecha_registro']['date_display'] = "ddmmaaaa;hhiiss";
      $this->new_date_format('DH', 'fecha_registro');
      //-- cod_u_organizaciones
      $this->field_config['cod_u_organizaciones']               = array();
      $this->field_config['cod_u_organizaciones']['symbol_grp'] = $_SESSION['scriptcase']['reg_conf']['grup_num'];
      $this->field_config['cod_u_organizaciones']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['cod_u_organizaciones']['symbol_dec'] = '';
      $this->field_config['cod_u_organizaciones']['symbol_neg'] = $_SESSION['scriptcase']['reg_conf']['simb_neg'];
      $this->field_config['cod_u_organizaciones']['format_neg'] = $_SESSION['scriptcase']['reg_conf']['neg_num'];
      //-- seps_nivel
      $this->field_config['seps_nivel']               = array();
      $this->field_config['seps_nivel']['symbol_grp'] = $_SESSION['scriptcase']['reg_conf']['grup_num'];
      $this->field_config['seps_nivel']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['seps_nivel']['symbol_dec'] = '';
      $this->field_config['seps_nivel']['symbol_neg'] = $_SESSION['scriptcase']['reg_conf']['simb_neg'];
      $this->field_config['seps_nivel']['format_neg'] = $_SESSION['scriptcase']['reg_conf']['neg_num'];
   }

   function controle()
   {
        global $nm_url_saida, $teste_validade, 
               $glo_senha_protect, $nm_apl_dependente, $nm_form_submit, $sc_check_excl, $nm_opc_form_php, $nm_call_php, $nm_opc_lookup;


      $this->ini_controle();

      if ('' != $_SESSION['scriptcase']['change_regional_old'])
      {
          $_SESSION['scriptcase']['str_conf_reg'] = $_SESSION['scriptcase']['change_regional_old'];
          $this->Ini->regionalDefault($_SESSION['scriptcase']['str_conf_reg']);
          $this->loadFieldConfig();
          $this->nm_tira_formatacao();
          $this->nm_converte_datas();

          $_SESSION['scriptcase']['str_conf_reg'] = $_SESSION['scriptcase']['change_regional_new'];
          $this->Ini->regionalDefault($_SESSION['scriptcase']['str_conf_reg']);
          $this->loadFieldConfig();
          $guarda_formatado = $this->formatado;
          $this->nm_formatar_campos();
          $this->formatado = $guarda_formatado;

          $_SESSION['scriptcase']['change_regional_old'] = '';
          $_SESSION['scriptcase']['change_regional_new'] = '';
      }

//
//-----> 
//
      if ($this->NM_ajax_flag && 'validate_' == substr($this->NM_ajax_opcao, 0, 9))
      {
          if ('validate_ruc' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'ruc');
          }
          if ('validate_btnbuscar' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'btnbuscar');
          }
          if ('validate_ruc_definitivo' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'ruc_definitivo');
          }
          if ('validate_ruc_provisional' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'ruc_provisional');
          }
          if ('validate_organizacion' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'organizacion');
          }
          if ('validate_actividad' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'actividad');
          }
          if ('validate_tipo' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'tipo');
          }
          if ('validate_forma_organizacion' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'forma_organizacion');
          }
          if ('validate_estado_org' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'estado_org');
          }
          if ('validate_cod_zona' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'cod_zona');
          }
          if ('validate_cod_provincia' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'cod_provincia');
          }
          if ('validate_cod_canton' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'cod_canton');
          }
          if ('validate_cod_parroquia' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'cod_parroquia');
          }
          if ('validate_direccion' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'direccion');
          }
          if ('validate_telefono' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'telefono');
          }
          if ('validate_celular' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'celular');
          }
          if ('validate_email' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'email');
          }
          if ('validate_circuito_economico' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'circuito_economico');
          }
          if ('validate_categoria_actividad_mp' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'categoria_actividad_mp');
          }
          if ('validate_identificacion_actividad_mp' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'identificacion_actividad_mp');
          }
          if ('validate_producto_servicio' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'producto_servicio');
          }
          if ('validate_cedula_representante_legal' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'cedula_representante_legal');
          }
          if ('validate_nombre_representante_legal' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'nombre_representante_legal');
          }
          if ('validate_estado_organizacion' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'estado_organizacion');
          }
          if ('validate_num_resolucion' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'num_resolucion');
          }
          if ('validate_legalmente_constituida' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'legalmente_constituida');
          }
          if ('validate_estado_juridico' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'estado_juridico');
          }
          if ('validate_num_socios' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'num_socios');
          }
          if ('validate_user' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'user');
          }
          if ('validate_fecha_registro' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'fecha_registro');
          }
          if ('validate_tipo_registro' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'tipo_registro');
          }
          form_u_organizaciones_pack_ajax_response();
          exit;
      }
      if ($this->NM_ajax_flag && 'event_' == substr($this->NM_ajax_opcao, 0, 6))
      {
          $this->nm_tira_formatacao();
          $this->nm_converte_datas();
          if ('event_btnbuscar_onclick' == $this->NM_ajax_opcao)
          {
              $this->btnBuscar_onClick();
          }
          if ('event_email_onblur' == $this->NM_ajax_opcao)
          {
              $this->email_onBlur();
          }
          form_u_organizaciones_pack_ajax_response();
          exit;
      }
      if (isset($this->sc_inline_call) && 'Y' == $this->sc_inline_call)
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['inline_form_seq'] = $this->sc_seq_row;
          $this->nm_tira_formatacao();
          $this->nm_converte_datas();
      }
      if ($this->nmgp_opcao == "recarga" || $this->nmgp_opcao == "muda_form") 
      {
          $this->nm_tira_formatacao();
          $this->nm_converte_datas();
          $nm_sc_sv_opcao = $this->nmgp_opcao; 
          $this->nmgp_opcao = "nada"; 
          $this->nm_acessa_banco();
          if ($this->NM_ajax_flag)
          {
              $this->ajax_return_values();
              form_u_organizaciones_pack_ajax_response();
              exit;
          }
          $this->nm_formatar_campos();
          $this->nmgp_opcao = $nm_sc_sv_opcao; 
          $this->nm_gera_html();
          $this->NM_close_db(); 
          $this->nmgp_opcao = ""; 
          exit; 
      }
      if ($this->nmgp_opcao == "incluir" || $this->nmgp_opcao == "alterar" || $this->nmgp_opcao == "excluir") 
      {
          $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros) ; 
          $_SESSION['scriptcase']['form_u_organizaciones']['contr_erro'] = 'off';
          if ($Campos_Crit != "") 
          {
              $Campos_Crit = $this->Ini->Nm_lang['lang_errm_flds'] . ' ' . $Campos_Crit ; 
          }
          if ($Campos_Crit != "" || !empty($Campos_Falta) || $this->Campos_Mens_erro != "")
          {
              if ($this->NM_ajax_flag)
              {
                  form_u_organizaciones_pack_ajax_response();
                  exit;
              }
              $campos_erro = $this->Formata_Erros($Campos_Crit, $Campos_Falta, $Campos_Erros);
              $this->Campos_Mens_erro = ""; 
              $this->Erro->mensagem(__FILE__, __LINE__, "critica", $campos_erro); 
              $this->nmgp_opc_ant = $this->nmgp_opcao ; 
              if ($this->nmgp_opcao == "incluir" && $nm_apl_dependente == 1) 
              { 
                  $this->nm_flag_saida_novo = "S";; 
              }
              if ($this->nmgp_opcao == "incluir") 
              { 
                  $GLOBALS["erro_incl"] = 1; 
              }
              $this->nmgp_opcao = "nada" ; 
          }
      }
      elseif (isset($nm_form_submit) && $this->nmgp_opcao != "menu_link")
      {
      }
//
      if ($this->nmgp_opcao != "nada")
      {
          $this->nm_acessa_banco();
      }
      else
      {
           if ($this->nmgp_opc_ant == "incluir") 
           { 
               $this->nm_proc_onload(false);
           }
           else
           { 
              $this->nm_guardar_campos();
           }
      }
      if ($this->nmgp_opcao != "recarga" && $this->nmgp_opcao != "muda_form" && !$this->Apl_com_erro)
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['recarga'] = $this->nmgp_opcao;
          $this->nm_mens_form_upd = "La información ha sido actualizada satisfactoriamente...";
          $this->nm_mens_form_del = "La información ha sido eliminada satisfactoriamente...";
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['sc_redir_insert']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['sc_redir_insert'] == "ok")
          {
              if ($this->sc_evento == "insert" || ($this->nmgp_opc_ant == "novo" && $this->nmgp_opcao == "novo" && $this->sc_evento == "novo"))
              {
                  $this->NM_close_db(); 
                  $this->nmgp_redireciona(2); 
              }
          }
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['sc_redir_atualiz']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['sc_redir_atualiz'] == "ok")
          {
              if ($this->sc_evento == "update")
              {
                  $this->NM_close_db(); 
                  $this->nmgp_redireciona(2); 
              }
              if ($this->sc_evento == "insert" || ($this->nmgp_opc_ant == "novo" && $this->nmgp_opcao == "novo" && $this->sc_evento == "novo"))
              {
                  $this->NM_close_db(); 
                  $this->nmgp_redireciona(2); 
              }
              if ($this->sc_evento == "delete")
              {
                  $this->NM_close_db(); 
                  $this->nmgp_redireciona(2); 
              }
          }
          if ($this->sc_evento == "update")
          {
              $this->NM_close_db(); 
              $this->nm_tira_formatacao(); 
             $this->nm_converte_datas();
              $this->nm_gera_mensagem($this->nm_mens_form_upd, "form_u_organizaciones.php", "", "cod_u_organizaciones?#?$this->cod_u_organizaciones?@?"); 
          }
          if ($this->sc_evento == "insert" || ($this->nmgp_opc_ant == "novo" && $this->nmgp_opcao == "novo" && $this->sc_evento == "novo"))
          {
              $this->NM_close_db(); 
              $this->nm_tira_formatacao(); 
             $this->nm_converte_datas();
              $this->nm_gera_mensagem($this->nm_mens_form_ins, "form_u_organizaciones.php", "", "cod_u_organizaciones?#?$this->cod_u_organizaciones?@?"); 
          }
          if ($this->sc_evento == "delete")
          {
              $this->NM_close_db(); 
              $this->nm_tira_formatacao(); 
             $this->nm_converte_datas();
              $this->nm_gera_mensagem($this->nm_mens_form_del, "form_u_organizaciones.php", "", "cod_u_organizaciones?#?$this->cod_u_organizaciones?@?nmgp_opcao?#?igual?@?"); 
          }
      }
      if ($this->NM_ajax_flag && 'navigate_form' == $this->NM_ajax_opcao)
      {
          $this->ajax_return_values();
          $this->ajax_add_parameters();
          form_u_organizaciones_pack_ajax_response();
          exit;
      }
      $this->nm_formatar_campos();
      if ($this->NM_ajax_flag)
      {
          $this->NM_ajax_info['result'] = 'OK';
          if ('alterar' == $this->NM_ajax_info['param']['nmgp_opcao'])
          {
              $this->NM_ajax_info['msgDisplay'] = NM_charset_to_utf8($this->Ini->Nm_lang['lang_othr_ajax_frmu']);
          }
          form_u_organizaciones_pack_ajax_response();
          exit;
      }
      $this->nm_gera_html();
      $this->NM_close_db(); 
      $this->nmgp_opcao = ""; 
   }
//
//--------------------------------------------------------------------------------------
   function NM_has_trans()
   {
       return !in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access);
   }
//
//--------------------------------------------------------------------------------------
   function NM_commit_db()
   {
       if ($this->Ini->sc_tem_trans_banco && !$this->Embutida_proc)
       { 
           $this->Db->CommitTrans(); 
           $this->Ini->sc_tem_trans_banco = false;
       } 
   }
//
//--------------------------------------------------------------------------------------
   function NM_rollback_db()
   {
       if ($this->Ini->sc_tem_trans_banco && !$this->Embutida_proc)
       { 
           $this->Db->RollbackTrans(); 
           $this->Ini->sc_tem_trans_banco = false;
       } 
   }
//
//--------------------------------------------------------------------------------------
   function NM_close_db()
   {
       if ($this->Db && !$this->Embutida_proc)
       { 
           $this->Db->Close(); 
       } 
   }
//
//--------------------------------------------------------------------------------------
   function Formata_Erros($Campos_Crit, $Campos_Falta, $Campos_Erros, $mode = 3) 
   {
       switch ($mode)
       {
           case 1:
               $campos_erro = array();
               if (!empty($Campos_Crit))
               {
                   $campos_erro[] = $Campos_Crit;
               }
               if (!empty($Campos_Falta))
               {
                   $campos_erro[] = $this->Formata_Campos_Falta($Campos_Falta);
               }
               if (!empty($this->Campos_Mens_erro))
               {
                   $campos_erro[] = $this->Campos_Mens_erro;
               }
               return implode('<br />', $campos_erro);
               break;

           case 2:
               $campos_erro = array();
               if (!empty($Campos_Crit))
               {
                   $campos_erro[] = $Campos_Crit;
               }
               if (!empty($Campos_Falta))
               {
                   $campos_erro[] = $this->Formata_Campos_Falta($Campos_Falta, true);
               }
               if (!empty($this->Campos_Mens_erro))
               {
                   $campos_erro[] = $this->Campos_Mens_erro;
               }
               return implode('<br />', $campos_erro);
               break;

           case 3:
               $campos_erro = array();
               if (!empty($Campos_Erros))
               {
                   $campos_erro[] = $this->Formata_Campos_Erros($Campos_Erros);
               }
               if (!empty($this->Campos_Mens_erro))
               {
                   $campos_mens_erro = str_replace(array('<br />', '<br>', '<BR />'), array('<BR>', '<BR>', '<BR>'), $this->Campos_Mens_erro);
                   $campos_mens_erro = explode('<BR>', $campos_mens_erro);
                   foreach ($campos_mens_erro as $msg_erro)
                   {
                       if ('' != $msg_erro && !in_array($msg_erro, $campos_erro))
                       {
                           $campos_erro[] = $msg_erro;
                       }
                   }
               }
               return implode('<br />', $campos_erro);
               break;
       }
   }

   function Formata_Campos_Falta($Campos_Falta, $table = false) 
   {
       $Campos_Falta = array_unique($Campos_Falta);

       if (!$table)
       {
           return $this->Ini->Nm_lang['lang_errm_reqd'] . ' ' . implode('; ', $Campos_Falta);
       }

       $aCols  = array();
       $iTotal = sizeof($Campos_Falta);
       $iCols  = 6 > $iTotal ? 1 : (11 > $iTotal ? 2 : (16 > $iTotal ? 3 : 4));
       $iItems = ceil($iTotal / $iCols);
       $iNowC  = 0;
       $iNowI  = 0;

       foreach ($Campos_Falta as $campo)
       {
           $aCols[$iNowC][] = $campo;
           if ($iItems == ++$iNowI)
           {
               $iNowC++;
               $iNowI = 0;
           }
       }

       $sError  = '<table style="border-collapse: collapse; border-width: 0px">';
       $sError .= '<tr>';
       $sError .= '<td class="scFormErrorMessageFont" style="padding: 0; vertical-align: top; white-space: nowrap">' . $this->Ini->Nm_lang['lang_errm_reqd'] . '</td>';
       foreach ($aCols as $aCol)
       {
           $sError .= '<td class="scFormErrorMessageFont" style="padding: 0 6px; vertical-align: top; white-space: nowrap">' . implode('<br />', $aCol) . '</td>';
       }
       $sError .= '</tr>';
       $sError .= '</table>';

       return $sError;
   }

   function Formata_Campos_Crit($Campos_Crit, $table = false) 
   {
       $Campos_Crit = array_unique($Campos_Crit);

       if (!$table)
       {
           return $this->Ini->Nm_lang['lang_errm_flds'] . ' ' . implode('; ', $Campos_Crit);
       }

       $aCols  = array();
       $iTotal = sizeof($Campos_Crit);
       $iCols  = 6 > $iTotal ? 1 : (11 > $iTotal ? 2 : (16 > $iTotal ? 3 : 4));
       $iItems = ceil($iTotal / $iCols);
       $iNowC  = 0;
       $iNowI  = 0;

       foreach ($Campos_Crit as $campo)
       {
           $aCols[$iNowC][] = $campo;
           if ($iItems == ++$iNowI)
           {
               $iNowC++;
               $iNowI = 0;
           }
       }

       $sError  = '<table style="border-collapse: collapse; border-width: 0px">';
       $sError .= '<tr>';
       $sError .= '<td class="scFormErrorMessageFont" style="padding: 0; vertical-align: top; white-space: nowrap">' . $this->Ini->Nm_lang['lang_errm_flds'] . '</td>';
       foreach ($aCols as $aCol)
       {
           $sError .= '<td class="scFormErrorMessageFont" style="padding: 0 6px; vertical-align: top; white-space: nowrap">' . implode('<br />', $aCol) . '</td>';
       }
       $sError .= '</tr>';
       $sError .= '</table>';

       return $sError;
   }

   function Formata_Campos_Erros($Campos_Erros) 
   {
       $sError  = '<table style="border-collapse: collapse; border-width: 0px">';

       foreach ($Campos_Erros as $campo => $erros)
       {
           $sError .= '<tr>';
           $sError .= '<td class="scFormErrorMessageFont" style="padding: 0; vertical-align: top; white-space: nowrap">' . $this->Recupera_Nome_Campo($campo) . ':</td>';
           $sError .= '<td class="scFormErrorMessageFont" style="padding: 0 6px; vertical-align: top; white-space: nowrap">' . implode('<br />', array_unique($erros)) . '</td>';
           $sError .= '</tr>';
       }

       $sError .= '</table>';

       return $sError;
   }

   function Recupera_Nome_Campo($campo) 
   {
       switch($campo)
       {
           case 'ruc':
               return "REGISTRO ÚNICO DE CONTRIBUYENTE (R.U.C.)";
               break;
           case 'btnbuscar':
               return "";
               break;
           case 'ruc_definitivo':
               return "RUC DEFINITIVO";
               break;
           case 'ruc_provisional':
               return "RUC PROVISIONAL";
               break;
           case 'organizacion':
               return "NOMBRE DE LA ORGANIZACIÓN (según el RUC) ";
               break;
           case 'actividad':
               return "ACTIVIDAD DE LA ORGANIZACIÓN (según el RUC)";
               break;
           case 'tipo':
               return "TIPO";
               break;
           case 'forma_organizacion':
               return "FORMA DE ORGANIZACIÓN DE LA E.P.S.";
               break;
           case 'estado_org':
               return "ESTADO ORGANIZACIÓN";
               break;
           case 'cod_zona':
               return "ZONA";
               break;
           case 'cod_provincia':
               return "PROVINCIA";
               break;
           case 'cod_canton':
               return "CANTÓN";
               break;
           case 'cod_parroquia':
               return "PARROQUIA";
               break;
           case 'direccion':
               return "DIRECCIÓN";
               break;
           case 'telefono':
               return "TELÉFONO";
               break;
           case 'celular':
               return "CELULAR";
               break;
           case 'email':
               return "CORREO ELECTRÓNICO";
               break;
           case 'circuito_economico':
               return "CORRESPONDE A UN CIRCUITO ECONÓMICO";
               break;
           case 'categoria_actividad_mp':
               return "CATEGORÍA DE LA ACTIVIDAD SEGÚN LA M.P.";
               break;
           case 'identificacion_actividad_mp':
               return "ACTIVIDAD DENTRO DE LA ESTRATEGIA DE LA M.P.";
               break;
           case 'producto_servicio':
               return "PRODUCTO / SERVICIO";
               break;
           case 'cedula_representante_legal':
               return "CÉDULA REPRESENTANTE LEGAL";
               break;
           case 'nombre_representante_legal':
               return "NOMBRE REPRESENTANTE LEGAL";
               break;
           case 'estado_organizacion':
               return "ESTADO DE LA ORGANIZACIÓN";
               break;
           case 'num_resolucion':
               return "NÚMERO RESOLUCIÓN";
               break;
           case 'legalmente_constituida':
               return "LEGALMENTE CONSTITUIDO";
               break;
           case 'estado_juridico':
               return "ESTADO JURÍDICO";
               break;
           case 'num_socios':
               return "NÚMERO INTEGRANTES DE LA ORG / U.E.P.";
               break;
           case 'user':
               return "TÉCNICO";
               break;
           case 'fecha_registro':
               return "FECHA REGISTRO";
               break;
           case 'tipo_registro':
               return "TIPO REGISTRO";
               break;
           case 'cod_u_organizaciones':
               return "COD.";
               break;
           case 'sc_field_0':
               return "CORRESPONDEN A LAS 120 ORGANIZACIONES";
               break;
           case 'telefono2':
               return "Telefono 2";
               break;
           case 'registro_sanitario':
               return "Registro Sanitario";
               break;
           case 'seps_sector':
               return "Seps Sector";
               break;
           case 'seps_nivel':
               return "Seps Nivel";
               break;
           case 'seps_grupo_organizacion':
               return "Seps Grupo Organizacion";
               break;
           case 'seps_clase_organizacion':
               return "Seps Clase Organizacion";
               break;
           case 'zona_procedencia':
               return "ZONA";
               break;
           case 'provincia_procedencia':
               return "Provincia Procedencia";
               break;
           case 'antiguedad_im':
               return "Antiguedad Im";
               break;
       }

       return $campo;
   }

   function dateDefaultFormat()
   {
       if (isset($this->Ini->Nm_conf_reg[$this->Ini->str_conf_reg]['data_format']))
       {
           $sDate = str_replace('yyyy', 'Y', $this->Ini->Nm_conf_reg[$this->Ini->str_conf_reg]['data_format']);
           $sDate = str_replace('mm',   'm', $sDate);
           $sDate = str_replace('dd',   'd', $sDate);
           return substr(chunk_split($sDate, 1, $this->Ini->Nm_conf_reg[$this->Ini->str_conf_reg]['data_sep']), 0, -1);
       }
       elseif ('en_us' == $this->Ini->str_lang)
       {
           return 'm/d/Y';
       }
       else
       {
           return 'd/m/Y';
       }
   } // dateDefaultFormat

//
//--------------------------------------------------------------------------------------
   function Valida_campos(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros, $filtro = '') 
   {
     global $nm_browser, $teste_validade;
//---------------------------------------------------------
     $this->sc_force_zero = array();
      if ('' == $filtro || 'ruc' == $filtro)
        $this->ValidateField_ruc($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'btnbuscar' == $filtro)
        $this->ValidateField_btnbuscar($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'ruc_definitivo' == $filtro)
        $this->ValidateField_ruc_definitivo($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'ruc_provisional' == $filtro)
        $this->ValidateField_ruc_provisional($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'organizacion' == $filtro)
        $this->ValidateField_organizacion($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'actividad' == $filtro)
        $this->ValidateField_actividad($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'tipo' == $filtro)
        $this->ValidateField_tipo($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'forma_organizacion' == $filtro)
        $this->ValidateField_forma_organizacion($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'estado_org' == $filtro)
        $this->ValidateField_estado_org($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'cod_zona' == $filtro)
        $this->ValidateField_cod_zona($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'cod_provincia' == $filtro)
        $this->ValidateField_cod_provincia($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'cod_canton' == $filtro)
        $this->ValidateField_cod_canton($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'cod_parroquia' == $filtro)
        $this->ValidateField_cod_parroquia($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'direccion' == $filtro)
        $this->ValidateField_direccion($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'telefono' == $filtro)
        $this->ValidateField_telefono($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'celular' == $filtro)
        $this->ValidateField_celular($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'email' == $filtro)
        $this->ValidateField_email($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'circuito_economico' == $filtro)
        $this->ValidateField_circuito_economico($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'categoria_actividad_mp' == $filtro)
        $this->ValidateField_categoria_actividad_mp($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'identificacion_actividad_mp' == $filtro)
        $this->ValidateField_identificacion_actividad_mp($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'producto_servicio' == $filtro)
        $this->ValidateField_producto_servicio($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'cedula_representante_legal' == $filtro)
        $this->ValidateField_cedula_representante_legal($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'nombre_representante_legal' == $filtro)
        $this->ValidateField_nombre_representante_legal($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'estado_organizacion' == $filtro)
        $this->ValidateField_estado_organizacion($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'num_resolucion' == $filtro)
        $this->ValidateField_num_resolucion($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'legalmente_constituida' == $filtro)
        $this->ValidateField_legalmente_constituida($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'estado_juridico' == $filtro)
        $this->ValidateField_estado_juridico($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'num_socios' == $filtro)
        $this->ValidateField_num_socios($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'user' == $filtro)
        $this->ValidateField_user($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'fecha_registro' == $filtro)
        $this->ValidateField_fecha_registro($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'tipo_registro' == $filtro)
        $this->ValidateField_tipo_registro($Campos_Crit, $Campos_Falta, $Campos_Erros);
//-- converter datas   
      $this->nm_converte_datas();
//---
      if (!empty($Campos_Crit) || !empty($Campos_Falta) || !empty($this->Campos_Mens_erro))
      {
          if (!empty($this->sc_force_zero))
          {
              foreach ($this->sc_force_zero as $i_force_zero => $sc_force_zero_field)
              {
                  eval('$this->' . $sc_force_zero_field . ' = "";');
                  unset($this->sc_force_zero[$i_force_zero]);
              }
          }
      }
   }

    function ValidateField_ruc(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->ruc) > 13) 
          { 
              $Campos_Crit .= "REGISTRO ÚNICO DE CONTRIBUYENTE (R.U.C.) " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 13 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['ruc']))
              {
                  $Campos_Erros['ruc'] = array();
              }
              $Campos_Erros['ruc'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 13 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['ruc']) || !is_array($this->NM_ajax_info['errList']['ruc']))
              {
                  $this->NM_ajax_info['errList']['ruc'] = array();
              }
              $this->NM_ajax_info['errList']['ruc'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 13 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
          if (NM_utf8_strlen($this->ruc) < 13) 
          { 
              $Campos_Crit .= "REGISTRO ÚNICO DE CONTRIBUYENTE (R.U.C.) " . $this->Ini->Nm_lang['lang_errm_mnch'] . " 13 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['ruc']))
              {
                  $Campos_Erros['ruc'] = array();
              }
              $Campos_Erros['ruc'][] = $this->Ini->Nm_lang['lang_errm_mnch'] . " 13 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['ruc']) || !is_array($this->NM_ajax_info['errList']['ruc']))
              {
                  $this->NM_ajax_info['errList']['ruc'] = array();
              }
              $this->NM_ajax_info['errList']['ruc'][] = $this->Ini->Nm_lang['lang_errm_mnch'] . " 13 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
      $Teste_trab = function_exists('mb_strtoupper') ? mb_strtoupper("0123456789") : strtoupper("0123456789") ;  
      $Teste_trab = $Teste_trab . chr(10) . chr(13) ; 
      $Teste_compara = function_exists('mb_strtoupper') ? mb_strtoupper($this->ruc) : strtoupper($this->ruc) ; 
      if ($this->nmgp_opcao != "excluir") 
      { 
          $Teste_critica = 0 ; 
          for ($x = 0; $x < strlen($this->ruc); $x++) 
          { 
               for ($y = 0; $y < strlen($Teste_trab); $y++) 
               { 
                    if (substr($Teste_compara, $x, 1) == substr($Teste_trab, $y, 1) ) 
                    { 
                        break ; 
                    } 
               } 
               if (substr($Teste_compara, $x, 1) != substr($Teste_trab, $y, 1) )  
               { 
                  $Teste_critica = 1 ; 
               } 
          } 
          if ($Teste_critica == 1) 
          { 
              $Campos_Crit .= "REGISTRO ÚNICO DE CONTRIBUYENTE (R.U.C.) " . $this->Ini->Nm_lang['lang_errm_ivch']; 
              if (!isset($Campos_Erros['ruc']))
              {
                  $Campos_Erros['ruc'] = array();
              }
              $Campos_Erros['ruc'][] = $this->Ini->Nm_lang['lang_errm_ivch'];
              if (!isset($this->NM_ajax_info['errList']['ruc']) || !is_array($this->NM_ajax_info['errList']['ruc']))
              {
                  $this->NM_ajax_info['errList']['ruc'] = array();
              }
              $this->NM_ajax_info['errList']['ruc'][] = $this->Ini->Nm_lang['lang_errm_ivch'];
          } 
      } 
    } // ValidateField_ruc

    function ValidateField_btnbuscar(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->btnbuscar) > 20) 
          { 
              $Campos_Crit .= " " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 20 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['btnbuscar']))
              {
                  $Campos_Erros['btnbuscar'] = array();
              }
              $Campos_Erros['btnbuscar'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 20 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['btnbuscar']) || !is_array($this->NM_ajax_info['errList']['btnbuscar']))
              {
                  $this->NM_ajax_info['errList']['btnbuscar'] = array();
              }
              $this->NM_ajax_info['errList']['btnbuscar'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 20 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
    } // ValidateField_btnbuscar

    function ValidateField_ruc_definitivo(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->ruc_definitivo) > 13) 
          { 
              $Campos_Crit .= "RUC DEFINITIVO " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 13 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['ruc_definitivo']))
              {
                  $Campos_Erros['ruc_definitivo'] = array();
              }
              $Campos_Erros['ruc_definitivo'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 13 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['ruc_definitivo']) || !is_array($this->NM_ajax_info['errList']['ruc_definitivo']))
              {
                  $this->NM_ajax_info['errList']['ruc_definitivo'] = array();
              }
              $this->NM_ajax_info['errList']['ruc_definitivo'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 13 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
      $Teste_trab = function_exists('mb_strtoupper') ? mb_strtoupper("0123456789") : strtoupper("0123456789") ;  
      $Teste_trab = $Teste_trab . chr(10) . chr(13) ; 
      $Teste_compara = function_exists('mb_strtoupper') ? mb_strtoupper($this->ruc_definitivo) : strtoupper($this->ruc_definitivo) ; 
      if ($this->nmgp_opcao != "excluir") 
      { 
          $Teste_critica = 0 ; 
          for ($x = 0; $x < strlen($this->ruc_definitivo); $x++) 
          { 
               for ($y = 0; $y < strlen($Teste_trab); $y++) 
               { 
                    if (substr($Teste_compara, $x, 1) == substr($Teste_trab, $y, 1) ) 
                    { 
                        break ; 
                    } 
               } 
               if (substr($Teste_compara, $x, 1) != substr($Teste_trab, $y, 1) )  
               { 
                  $Teste_critica = 1 ; 
               } 
          } 
          if ($Teste_critica == 1) 
          { 
              $Campos_Crit .= "RUC DEFINITIVO " . $this->Ini->Nm_lang['lang_errm_ivch']; 
              if (!isset($Campos_Erros['ruc_definitivo']))
              {
                  $Campos_Erros['ruc_definitivo'] = array();
              }
              $Campos_Erros['ruc_definitivo'][] = $this->Ini->Nm_lang['lang_errm_ivch'];
              if (!isset($this->NM_ajax_info['errList']['ruc_definitivo']) || !is_array($this->NM_ajax_info['errList']['ruc_definitivo']))
              {
                  $this->NM_ajax_info['errList']['ruc_definitivo'] = array();
              }
              $this->NM_ajax_info['errList']['ruc_definitivo'][] = $this->Ini->Nm_lang['lang_errm_ivch'];
          } 
      } 
    } // ValidateField_ruc_definitivo

    function ValidateField_ruc_provisional(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->ruc_provisional) > 13) 
          { 
              $Campos_Crit .= "RUC PROVISIONAL " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 13 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['ruc_provisional']))
              {
                  $Campos_Erros['ruc_provisional'] = array();
              }
              $Campos_Erros['ruc_provisional'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 13 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['ruc_provisional']) || !is_array($this->NM_ajax_info['errList']['ruc_provisional']))
              {
                  $this->NM_ajax_info['errList']['ruc_provisional'] = array();
              }
              $this->NM_ajax_info['errList']['ruc_provisional'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 13 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
      $Teste_trab = function_exists('mb_strtoupper') ? mb_strtoupper("0123456789") : strtoupper("0123456789") ;  
      $Teste_trab = $Teste_trab . chr(10) . chr(13) ; 
      $Teste_compara = function_exists('mb_strtoupper') ? mb_strtoupper($this->ruc_provisional) : strtoupper($this->ruc_provisional) ; 
      if ($this->nmgp_opcao != "excluir") 
      { 
          $Teste_critica = 0 ; 
          for ($x = 0; $x < strlen($this->ruc_provisional); $x++) 
          { 
               for ($y = 0; $y < strlen($Teste_trab); $y++) 
               { 
                    if (substr($Teste_compara, $x, 1) == substr($Teste_trab, $y, 1) ) 
                    { 
                        break ; 
                    } 
               } 
               if (substr($Teste_compara, $x, 1) != substr($Teste_trab, $y, 1) )  
               { 
                  $Teste_critica = 1 ; 
               } 
          } 
          if ($Teste_critica == 1) 
          { 
              $Campos_Crit .= "RUC PROVISIONAL " . $this->Ini->Nm_lang['lang_errm_ivch']; 
              if (!isset($Campos_Erros['ruc_provisional']))
              {
                  $Campos_Erros['ruc_provisional'] = array();
              }
              $Campos_Erros['ruc_provisional'][] = $this->Ini->Nm_lang['lang_errm_ivch'];
              if (!isset($this->NM_ajax_info['errList']['ruc_provisional']) || !is_array($this->NM_ajax_info['errList']['ruc_provisional']))
              {
                  $this->NM_ajax_info['errList']['ruc_provisional'] = array();
              }
              $this->NM_ajax_info['errList']['ruc_provisional'][] = $this->Ini->Nm_lang['lang_errm_ivch'];
          } 
      } 
    } // ValidateField_ruc_provisional

    function ValidateField_organizacion(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      $this->organizacion = function_exists('mb_strtoupper') ? mb_strtoupper($this->organizacion) : strtoupper($this->organizacion) ; 
      if ($this->nmgp_opcao != "excluir" && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['php_cmp_required']['organizacion']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['php_cmp_required']['organizacion'] == "on")) 
      { 
          if ($this->organizacion == "")  
          { 
              $Campos_Falta[] =  "NOMBRE DE LA ORGANIZACIÓN (según el RUC) " ; 
              if (!isset($Campos_Erros['organizacion']))
              {
                  $Campos_Erros['organizacion'] = array();
              }
              $Campos_Erros['organizacion'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
                  if (!isset($this->NM_ajax_info['errList']['organizacion']) || !is_array($this->NM_ajax_info['errList']['organizacion']))
                  {
                      $this->NM_ajax_info['errList']['organizacion'] = array();
                  }
                  $this->NM_ajax_info['errList']['organizacion'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
          } 
      } 
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->organizacion) > 255) 
          { 
              $Campos_Crit .= "NOMBRE DE LA ORGANIZACIÓN (según el RUC)  " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 255 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['organizacion']))
              {
                  $Campos_Erros['organizacion'] = array();
              }
              $Campos_Erros['organizacion'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 255 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['organizacion']) || !is_array($this->NM_ajax_info['errList']['organizacion']))
              {
                  $this->NM_ajax_info['errList']['organizacion'] = array();
              }
              $this->NM_ajax_info['errList']['organizacion'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 255 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
    } // ValidateField_organizacion

    function ValidateField_actividad(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      $this->actividad = function_exists('mb_strtoupper') ? mb_strtoupper($this->actividad) : strtoupper($this->actividad) ; 
      if ($this->nmgp_opcao != "excluir" && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['php_cmp_required']['actividad']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['php_cmp_required']['actividad'] == "on")) 
      { 
          if ($this->actividad == "")  
          { 
              $Campos_Falta[] =  "ACTIVIDAD DE LA ORGANIZACIÓN (según el RUC)" ; 
              if (!isset($Campos_Erros['actividad']))
              {
                  $Campos_Erros['actividad'] = array();
              }
              $Campos_Erros['actividad'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
                  if (!isset($this->NM_ajax_info['errList']['actividad']) || !is_array($this->NM_ajax_info['errList']['actividad']))
                  {
                      $this->NM_ajax_info['errList']['actividad'] = array();
                  }
                  $this->NM_ajax_info['errList']['actividad'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
          } 
      } 
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->actividad) > 1000) 
          { 
              $Campos_Crit .= "ACTIVIDAD DE LA ORGANIZACIÓN (según el RUC) " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 1000 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['actividad']))
              {
                  $Campos_Erros['actividad'] = array();
              }
              $Campos_Erros['actividad'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 1000 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['actividad']) || !is_array($this->NM_ajax_info['errList']['actividad']))
              {
                  $this->NM_ajax_info['errList']['actividad'] = array();
              }
              $this->NM_ajax_info['errList']['actividad'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 1000 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
    } // ValidateField_actividad

    function ValidateField_tipo(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->tipo == "" && $this->nmgp_opcao != "excluir" && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['php_cmp_required']['tipo']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['php_cmp_required']['tipo'] == "on"))
      {
          $Campos_Falta[] = "TIPO" ; 
          if (!isset($Campos_Erros['tipo']))
          {
              $Campos_Erros['tipo'] = array();
          }
          $Campos_Erros['tipo'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
          if (!isset($this->NM_ajax_info['errList']['tipo']) || !is_array($this->NM_ajax_info['errList']['tipo']))
          {
              $this->NM_ajax_info['errList']['tipo'] = array();
          }
          $this->NM_ajax_info['errList']['tipo'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
      }
          if (!empty($this->tipo) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_tipo']) && !in_array($this->tipo, $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_tipo']))
          {
              $Campos_Crit .= $this->Ini->Nm_lang['lang_errm_ajax_data'];
              if (!isset($Campos_Erros['tipo']))
              {
                  $Campos_Erros['tipo'] = array();
              }
              $Campos_Erros['tipo'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
              if (!isset($this->NM_ajax_info['errList']['tipo']) || !is_array($this->NM_ajax_info['errList']['tipo']))
              {
                  $this->NM_ajax_info['errList']['tipo'] = array();
              }
              $this->NM_ajax_info['errList']['tipo'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
          }
    } // ValidateField_tipo

    function ValidateField_forma_organizacion(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->forma_organizacion == "" && $this->nmgp_opcao != "excluir" && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['php_cmp_required']['forma_organizacion']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['php_cmp_required']['forma_organizacion'] == "on"))
      {
          $Campos_Falta[] = "FORMA DE ORGANIZACIÓN DE LA E.P.S." ; 
          if (!isset($Campos_Erros['forma_organizacion']))
          {
              $Campos_Erros['forma_organizacion'] = array();
          }
          $Campos_Erros['forma_organizacion'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
          if (!isset($this->NM_ajax_info['errList']['forma_organizacion']) || !is_array($this->NM_ajax_info['errList']['forma_organizacion']))
          {
              $this->NM_ajax_info['errList']['forma_organizacion'] = array();
          }
          $this->NM_ajax_info['errList']['forma_organizacion'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
      }
          if (!empty($this->forma_organizacion) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_forma_organizacion']) && !in_array($this->forma_organizacion, $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_forma_organizacion']))
          {
              $Campos_Crit .= $this->Ini->Nm_lang['lang_errm_ajax_data'];
              if (!isset($Campos_Erros['forma_organizacion']))
              {
                  $Campos_Erros['forma_organizacion'] = array();
              }
              $Campos_Erros['forma_organizacion'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
              if (!isset($this->NM_ajax_info['errList']['forma_organizacion']) || !is_array($this->NM_ajax_info['errList']['forma_organizacion']))
              {
                  $this->NM_ajax_info['errList']['forma_organizacion'] = array();
              }
              $this->NM_ajax_info['errList']['forma_organizacion'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
          }
    } // ValidateField_forma_organizacion

    function ValidateField_estado_org(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->estado_org == "" && $this->nmgp_opcao != "excluir")
      { 
        if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['php_cmp_required']['estado_org']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['php_cmp_required']['estado_org'] == "on")
        { 
          $Campos_Falta[] = "ESTADO ORGANIZACIÓN" ;
          if (!isset($Campos_Erros['estado_org']))
          {
              $Campos_Erros['estado_org'] = array();
          }
          $Campos_Erros['estado_org'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
                  if (!isset($this->NM_ajax_info['errList']['estado_org']) || !is_array($this->NM_ajax_info['errList']['estado_org']))
                  {
                      $this->NM_ajax_info['errList']['estado_org'] = array();
                  }
                  $this->NM_ajax_info['errList']['estado_org'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
        } 
      } 
    } // ValidateField_estado_org

    function ValidateField_cod_zona(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->cod_zona == "" && $this->nmgp_opcao != "excluir" && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['php_cmp_required']['cod_zona']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['php_cmp_required']['cod_zona'] == "on"))
      {
          $Campos_Falta[] = "ZONA" ; 
          if (!isset($Campos_Erros['cod_zona']))
          {
              $Campos_Erros['cod_zona'] = array();
          }
          $Campos_Erros['cod_zona'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
          if (!isset($this->NM_ajax_info['errList']['cod_zona']) || !is_array($this->NM_ajax_info['errList']['cod_zona']))
          {
              $this->NM_ajax_info['errList']['cod_zona'] = array();
          }
          $this->NM_ajax_info['errList']['cod_zona'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
      }
          if (!empty($this->cod_zona) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_cod_zona']) && !in_array($this->cod_zona, $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_cod_zona']))
          {
              $Campos_Crit .= $this->Ini->Nm_lang['lang_errm_ajax_data'];
              if (!isset($Campos_Erros['cod_zona']))
              {
                  $Campos_Erros['cod_zona'] = array();
              }
              $Campos_Erros['cod_zona'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
              if (!isset($this->NM_ajax_info['errList']['cod_zona']) || !is_array($this->NM_ajax_info['errList']['cod_zona']))
              {
                  $this->NM_ajax_info['errList']['cod_zona'] = array();
              }
              $this->NM_ajax_info['errList']['cod_zona'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
          }
    } // ValidateField_cod_zona

    function ValidateField_cod_provincia(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->cod_provincia == "" && $this->nmgp_opcao != "excluir" && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['php_cmp_required']['cod_provincia']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['php_cmp_required']['cod_provincia'] == "on"))
      {
          $Campos_Falta[] = "PROVINCIA" ; 
          if (!isset($Campos_Erros['cod_provincia']))
          {
              $Campos_Erros['cod_provincia'] = array();
          }
          $Campos_Erros['cod_provincia'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
          if (!isset($this->NM_ajax_info['errList']['cod_provincia']) || !is_array($this->NM_ajax_info['errList']['cod_provincia']))
          {
              $this->NM_ajax_info['errList']['cod_provincia'] = array();
          }
          $this->NM_ajax_info['errList']['cod_provincia'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
      }
          if (!empty($this->cod_provincia) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_cod_provincia']) && !in_array($this->cod_provincia, $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_cod_provincia']))
          {
              $Campos_Crit .= $this->Ini->Nm_lang['lang_errm_ajax_data'];
              if (!isset($Campos_Erros['cod_provincia']))
              {
                  $Campos_Erros['cod_provincia'] = array();
              }
              $Campos_Erros['cod_provincia'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
              if (!isset($this->NM_ajax_info['errList']['cod_provincia']) || !is_array($this->NM_ajax_info['errList']['cod_provincia']))
              {
                  $this->NM_ajax_info['errList']['cod_provincia'] = array();
              }
              $this->NM_ajax_info['errList']['cod_provincia'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
          }
    } // ValidateField_cod_provincia

    function ValidateField_cod_canton(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->cod_canton == "" && $this->nmgp_opcao != "excluir" && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['php_cmp_required']['cod_canton']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['php_cmp_required']['cod_canton'] == "on"))
      {
          $Campos_Falta[] = "CANTÓN" ; 
          if (!isset($Campos_Erros['cod_canton']))
          {
              $Campos_Erros['cod_canton'] = array();
          }
          $Campos_Erros['cod_canton'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
          if (!isset($this->NM_ajax_info['errList']['cod_canton']) || !is_array($this->NM_ajax_info['errList']['cod_canton']))
          {
              $this->NM_ajax_info['errList']['cod_canton'] = array();
          }
          $this->NM_ajax_info['errList']['cod_canton'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
      }
          if (!empty($this->cod_canton) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_cod_canton']) && !in_array($this->cod_canton, $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_cod_canton']))
          {
              $Campos_Crit .= $this->Ini->Nm_lang['lang_errm_ajax_data'];
              if (!isset($Campos_Erros['cod_canton']))
              {
                  $Campos_Erros['cod_canton'] = array();
              }
              $Campos_Erros['cod_canton'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
              if (!isset($this->NM_ajax_info['errList']['cod_canton']) || !is_array($this->NM_ajax_info['errList']['cod_canton']))
              {
                  $this->NM_ajax_info['errList']['cod_canton'] = array();
              }
              $this->NM_ajax_info['errList']['cod_canton'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
          }
    } // ValidateField_cod_canton

    function ValidateField_cod_parroquia(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->cod_parroquia == "" && $this->nmgp_opcao != "excluir" && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['php_cmp_required']['cod_parroquia']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['php_cmp_required']['cod_parroquia'] == "on"))
      {
          $Campos_Falta[] = "PARROQUIA" ; 
          if (!isset($Campos_Erros['cod_parroquia']))
          {
              $Campos_Erros['cod_parroquia'] = array();
          }
          $Campos_Erros['cod_parroquia'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
          if (!isset($this->NM_ajax_info['errList']['cod_parroquia']) || !is_array($this->NM_ajax_info['errList']['cod_parroquia']))
          {
              $this->NM_ajax_info['errList']['cod_parroquia'] = array();
          }
          $this->NM_ajax_info['errList']['cod_parroquia'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
      }
          if (!empty($this->cod_parroquia) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_cod_parroquia']) && !in_array($this->cod_parroquia, $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_cod_parroquia']))
          {
              $Campos_Crit .= $this->Ini->Nm_lang['lang_errm_ajax_data'];
              if (!isset($Campos_Erros['cod_parroquia']))
              {
                  $Campos_Erros['cod_parroquia'] = array();
              }
              $Campos_Erros['cod_parroquia'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
              if (!isset($this->NM_ajax_info['errList']['cod_parroquia']) || !is_array($this->NM_ajax_info['errList']['cod_parroquia']))
              {
                  $this->NM_ajax_info['errList']['cod_parroquia'] = array();
              }
              $this->NM_ajax_info['errList']['cod_parroquia'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
          }
    } // ValidateField_cod_parroquia

    function ValidateField_direccion(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir" && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['php_cmp_required']['direccion']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['php_cmp_required']['direccion'] == "on")) 
      { 
          if ($this->direccion == "")  
          { 
              $Campos_Falta[] =  "DIRECCIÓN" ; 
              if (!isset($Campos_Erros['direccion']))
              {
                  $Campos_Erros['direccion'] = array();
              }
              $Campos_Erros['direccion'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
                  if (!isset($this->NM_ajax_info['errList']['direccion']) || !is_array($this->NM_ajax_info['errList']['direccion']))
                  {
                      $this->NM_ajax_info['errList']['direccion'] = array();
                  }
                  $this->NM_ajax_info['errList']['direccion'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
          } 
      } 
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->direccion) > 255) 
          { 
              $Campos_Crit .= "DIRECCIÓN " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 255 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['direccion']))
              {
                  $Campos_Erros['direccion'] = array();
              }
              $Campos_Erros['direccion'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 255 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['direccion']) || !is_array($this->NM_ajax_info['errList']['direccion']))
              {
                  $this->NM_ajax_info['errList']['direccion'] = array();
              }
              $this->NM_ajax_info['errList']['direccion'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 255 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
    } // ValidateField_direccion

    function ValidateField_telefono(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir" && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['php_cmp_required']['telefono']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['php_cmp_required']['telefono'] == "on")) 
      { 
          if ($this->telefono == "")  
          { 
              $Campos_Falta[] =  "TELÉFONO" ; 
              if (!isset($Campos_Erros['telefono']))
              {
                  $Campos_Erros['telefono'] = array();
              }
              $Campos_Erros['telefono'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
                  if (!isset($this->NM_ajax_info['errList']['telefono']) || !is_array($this->NM_ajax_info['errList']['telefono']))
                  {
                      $this->NM_ajax_info['errList']['telefono'] = array();
                  }
                  $this->NM_ajax_info['errList']['telefono'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
          } 
      } 
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->telefono) > 10) 
          { 
              $Campos_Crit .= "TELÉFONO " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 10 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['telefono']))
              {
                  $Campos_Erros['telefono'] = array();
              }
              $Campos_Erros['telefono'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 10 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['telefono']) || !is_array($this->NM_ajax_info['errList']['telefono']))
              {
                  $this->NM_ajax_info['errList']['telefono'] = array();
              }
              $this->NM_ajax_info['errList']['telefono'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 10 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
      $Teste_trab = function_exists('mb_strtoupper') ? mb_strtoupper("0123456789") : strtoupper("0123456789") ;  
      $Teste_trab = $Teste_trab . chr(10) . chr(13) ; 
      $Teste_compara = function_exists('mb_strtoupper') ? mb_strtoupper($this->telefono) : strtoupper($this->telefono) ; 
      if ($this->nmgp_opcao != "excluir") 
      { 
          $Teste_critica = 0 ; 
          for ($x = 0; $x < strlen($this->telefono); $x++) 
          { 
               for ($y = 0; $y < strlen($Teste_trab); $y++) 
               { 
                    if (substr($Teste_compara, $x, 1) == substr($Teste_trab, $y, 1) ) 
                    { 
                        break ; 
                    } 
               } 
               if (substr($Teste_compara, $x, 1) != substr($Teste_trab, $y, 1) )  
               { 
                  $Teste_critica = 1 ; 
               } 
          } 
          if ($Teste_critica == 1) 
          { 
              $Campos_Crit .= "TELÉFONO " . $this->Ini->Nm_lang['lang_errm_ivch']; 
              if (!isset($Campos_Erros['telefono']))
              {
                  $Campos_Erros['telefono'] = array();
              }
              $Campos_Erros['telefono'][] = $this->Ini->Nm_lang['lang_errm_ivch'];
              if (!isset($this->NM_ajax_info['errList']['telefono']) || !is_array($this->NM_ajax_info['errList']['telefono']))
              {
                  $this->NM_ajax_info['errList']['telefono'] = array();
              }
              $this->NM_ajax_info['errList']['telefono'][] = $this->Ini->Nm_lang['lang_errm_ivch'];
          } 
      } 
    } // ValidateField_telefono

    function ValidateField_celular(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir" && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['php_cmp_required']['celular']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['php_cmp_required']['celular'] == "on")) 
      { 
          if ($this->celular == "")  
          { 
              $Campos_Falta[] =  "CELULAR" ; 
              if (!isset($Campos_Erros['celular']))
              {
                  $Campos_Erros['celular'] = array();
              }
              $Campos_Erros['celular'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
                  if (!isset($this->NM_ajax_info['errList']['celular']) || !is_array($this->NM_ajax_info['errList']['celular']))
                  {
                      $this->NM_ajax_info['errList']['celular'] = array();
                  }
                  $this->NM_ajax_info['errList']['celular'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
          } 
      } 
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->celular) > 10) 
          { 
              $Campos_Crit .= "CELULAR " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 10 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['celular']))
              {
                  $Campos_Erros['celular'] = array();
              }
              $Campos_Erros['celular'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 10 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['celular']) || !is_array($this->NM_ajax_info['errList']['celular']))
              {
                  $this->NM_ajax_info['errList']['celular'] = array();
              }
              $this->NM_ajax_info['errList']['celular'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 10 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
      $Teste_trab = function_exists('mb_strtoupper') ? mb_strtoupper("0123456789") : strtoupper("0123456789") ;  
      $Teste_trab = $Teste_trab . chr(10) . chr(13) ; 
      $Teste_compara = function_exists('mb_strtoupper') ? mb_strtoupper($this->celular) : strtoupper($this->celular) ; 
      if ($this->nmgp_opcao != "excluir") 
      { 
          $Teste_critica = 0 ; 
          for ($x = 0; $x < strlen($this->celular); $x++) 
          { 
               for ($y = 0; $y < strlen($Teste_trab); $y++) 
               { 
                    if (substr($Teste_compara, $x, 1) == substr($Teste_trab, $y, 1) ) 
                    { 
                        break ; 
                    } 
               } 
               if (substr($Teste_compara, $x, 1) != substr($Teste_trab, $y, 1) )  
               { 
                  $Teste_critica = 1 ; 
               } 
          } 
          if ($Teste_critica == 1) 
          { 
              $Campos_Crit .= "CELULAR " . $this->Ini->Nm_lang['lang_errm_ivch']; 
              if (!isset($Campos_Erros['celular']))
              {
                  $Campos_Erros['celular'] = array();
              }
              $Campos_Erros['celular'][] = $this->Ini->Nm_lang['lang_errm_ivch'];
              if (!isset($this->NM_ajax_info['errList']['celular']) || !is_array($this->NM_ajax_info['errList']['celular']))
              {
                  $this->NM_ajax_info['errList']['celular'] = array();
              }
              $this->NM_ajax_info['errList']['celular'][] = $this->Ini->Nm_lang['lang_errm_ivch'];
          } 
      } 
    } // ValidateField_celular

    function ValidateField_email(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (trim($this->email) != "")  
          { 
              if ($teste_validade->Email($this->email) == false)  
              { 
                      $Campos_Crit .= "CORREO ELECTRÓNICO; " ; 
                  if (!isset($Campos_Erros['email']))
                  {
                      $Campos_Erros['email'] = array();
                  }
                  $Campos_Erros['email'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                      if (!isset($this->NM_ajax_info['errList']['email']) || !is_array($this->NM_ajax_info['errList']['email']))
                      {
                          $this->NM_ajax_info['errList']['email'] = array();
                      }
                      $this->NM_ajax_info['errList']['email'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
           elseif (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['php_cmp_required']['email']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['php_cmp_required']['email'] == "on") 
          { 
              $Campos_Falta[] = "CORREO ELECTRÓNICO" ; 
              if (!isset($Campos_Erros['email']))
              {
                  $Campos_Erros['email'] = array();
              }
              $Campos_Erros['email'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
                  if (!isset($this->NM_ajax_info['errList']['email']) || !is_array($this->NM_ajax_info['errList']['email']))
                  {
                      $this->NM_ajax_info['errList']['email'] = array();
                  }
                  $this->NM_ajax_info['errList']['email'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
          } 
      } 
    } // ValidateField_email

    function ValidateField_circuito_economico(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->circuito_economico == "" && $this->nmgp_opcao != "excluir" && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['php_cmp_required']['circuito_economico']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['php_cmp_required']['circuito_economico'] == "on"))
      {
          $Campos_Falta[] = "CORRESPONDE A UN CIRCUITO ECONÓMICO" ; 
          if (!isset($Campos_Erros['circuito_economico']))
          {
              $Campos_Erros['circuito_economico'] = array();
          }
          $Campos_Erros['circuito_economico'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
          if (!isset($this->NM_ajax_info['errList']['circuito_economico']) || !is_array($this->NM_ajax_info['errList']['circuito_economico']))
          {
              $this->NM_ajax_info['errList']['circuito_economico'] = array();
          }
          $this->NM_ajax_info['errList']['circuito_economico'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
      }
          if (!empty($this->circuito_economico) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_circuito_economico']) && !in_array($this->circuito_economico, $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_circuito_economico']))
          {
              $Campos_Crit .= $this->Ini->Nm_lang['lang_errm_ajax_data'];
              if (!isset($Campos_Erros['circuito_economico']))
              {
                  $Campos_Erros['circuito_economico'] = array();
              }
              $Campos_Erros['circuito_economico'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
              if (!isset($this->NM_ajax_info['errList']['circuito_economico']) || !is_array($this->NM_ajax_info['errList']['circuito_economico']))
              {
                  $this->NM_ajax_info['errList']['circuito_economico'] = array();
              }
              $this->NM_ajax_info['errList']['circuito_economico'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
          }
    } // ValidateField_circuito_economico

    function ValidateField_categoria_actividad_mp(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->categoria_actividad_mp == "" && $this->nmgp_opcao != "excluir" && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['php_cmp_required']['categoria_actividad_mp']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['php_cmp_required']['categoria_actividad_mp'] == "on"))
      {
          $Campos_Falta[] = "CATEGORÍA DE LA ACTIVIDAD SEGÚN LA M.P." ; 
          if (!isset($Campos_Erros['categoria_actividad_mp']))
          {
              $Campos_Erros['categoria_actividad_mp'] = array();
          }
          $Campos_Erros['categoria_actividad_mp'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
          if (!isset($this->NM_ajax_info['errList']['categoria_actividad_mp']) || !is_array($this->NM_ajax_info['errList']['categoria_actividad_mp']))
          {
              $this->NM_ajax_info['errList']['categoria_actividad_mp'] = array();
          }
          $this->NM_ajax_info['errList']['categoria_actividad_mp'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
      }
          if (!empty($this->categoria_actividad_mp) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_categoria_actividad_mp']) && !in_array($this->categoria_actividad_mp, $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_categoria_actividad_mp']))
          {
              $Campos_Crit .= $this->Ini->Nm_lang['lang_errm_ajax_data'];
              if (!isset($Campos_Erros['categoria_actividad_mp']))
              {
                  $Campos_Erros['categoria_actividad_mp'] = array();
              }
              $Campos_Erros['categoria_actividad_mp'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
              if (!isset($this->NM_ajax_info['errList']['categoria_actividad_mp']) || !is_array($this->NM_ajax_info['errList']['categoria_actividad_mp']))
              {
                  $this->NM_ajax_info['errList']['categoria_actividad_mp'] = array();
              }
              $this->NM_ajax_info['errList']['categoria_actividad_mp'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
          }
    } // ValidateField_categoria_actividad_mp

    function ValidateField_identificacion_actividad_mp(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->identificacion_actividad_mp == "" && $this->nmgp_opcao != "excluir" && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['php_cmp_required']['identificacion_actividad_mp']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['php_cmp_required']['identificacion_actividad_mp'] == "on"))
      {
          $Campos_Falta[] = "ACTIVIDAD DENTRO DE LA ESTRATEGIA DE LA M.P." ; 
          if (!isset($Campos_Erros['identificacion_actividad_mp']))
          {
              $Campos_Erros['identificacion_actividad_mp'] = array();
          }
          $Campos_Erros['identificacion_actividad_mp'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
          if (!isset($this->NM_ajax_info['errList']['identificacion_actividad_mp']) || !is_array($this->NM_ajax_info['errList']['identificacion_actividad_mp']))
          {
              $this->NM_ajax_info['errList']['identificacion_actividad_mp'] = array();
          }
          $this->NM_ajax_info['errList']['identificacion_actividad_mp'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
      }
          if (!empty($this->identificacion_actividad_mp) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_identificacion_actividad_mp']) && !in_array($this->identificacion_actividad_mp, $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_identificacion_actividad_mp']))
          {
              $Campos_Crit .= $this->Ini->Nm_lang['lang_errm_ajax_data'];
              if (!isset($Campos_Erros['identificacion_actividad_mp']))
              {
                  $Campos_Erros['identificacion_actividad_mp'] = array();
              }
              $Campos_Erros['identificacion_actividad_mp'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
              if (!isset($this->NM_ajax_info['errList']['identificacion_actividad_mp']) || !is_array($this->NM_ajax_info['errList']['identificacion_actividad_mp']))
              {
                  $this->NM_ajax_info['errList']['identificacion_actividad_mp'] = array();
              }
              $this->NM_ajax_info['errList']['identificacion_actividad_mp'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
          }
    } // ValidateField_identificacion_actividad_mp

    function ValidateField_producto_servicio(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      $this->producto_servicio = function_exists('mb_strtoupper') ? mb_strtoupper($this->producto_servicio) : strtoupper($this->producto_servicio) ; 
      if ($this->nmgp_opcao != "excluir" && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['php_cmp_required']['producto_servicio']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['php_cmp_required']['producto_servicio'] == "on")) 
      { 
          if ($this->producto_servicio == "")  
          { 
              $Campos_Falta[] =  "PRODUCTO / SERVICIO" ; 
              if (!isset($Campos_Erros['producto_servicio']))
              {
                  $Campos_Erros['producto_servicio'] = array();
              }
              $Campos_Erros['producto_servicio'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
                  if (!isset($this->NM_ajax_info['errList']['producto_servicio']) || !is_array($this->NM_ajax_info['errList']['producto_servicio']))
                  {
                      $this->NM_ajax_info['errList']['producto_servicio'] = array();
                  }
                  $this->NM_ajax_info['errList']['producto_servicio'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
          } 
      } 
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->producto_servicio) > 100) 
          { 
              $Campos_Crit .= "PRODUCTO / SERVICIO " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 100 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['producto_servicio']))
              {
                  $Campos_Erros['producto_servicio'] = array();
              }
              $Campos_Erros['producto_servicio'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 100 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['producto_servicio']) || !is_array($this->NM_ajax_info['errList']['producto_servicio']))
              {
                  $this->NM_ajax_info['errList']['producto_servicio'] = array();
              }
              $this->NM_ajax_info['errList']['producto_servicio'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 100 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
    } // ValidateField_producto_servicio

    function ValidateField_cedula_representante_legal(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir" && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['php_cmp_required']['cedula_representante_legal']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['php_cmp_required']['cedula_representante_legal'] == "on")) 
      { 
          if ($this->cedula_representante_legal == "")  
          { 
              $Campos_Falta[] =  "CÉDULA REPRESENTANTE LEGAL" ; 
              if (!isset($Campos_Erros['cedula_representante_legal']))
              {
                  $Campos_Erros['cedula_representante_legal'] = array();
              }
              $Campos_Erros['cedula_representante_legal'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
                  if (!isset($this->NM_ajax_info['errList']['cedula_representante_legal']) || !is_array($this->NM_ajax_info['errList']['cedula_representante_legal']))
                  {
                      $this->NM_ajax_info['errList']['cedula_representante_legal'] = array();
                  }
                  $this->NM_ajax_info['errList']['cedula_representante_legal'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
          } 
      } 
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->cedula_representante_legal) > 10) 
          { 
              $Campos_Crit .= "CÉDULA REPRESENTANTE LEGAL " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 10 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['cedula_representante_legal']))
              {
                  $Campos_Erros['cedula_representante_legal'] = array();
              }
              $Campos_Erros['cedula_representante_legal'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 10 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['cedula_representante_legal']) || !is_array($this->NM_ajax_info['errList']['cedula_representante_legal']))
              {
                  $this->NM_ajax_info['errList']['cedula_representante_legal'] = array();
              }
              $this->NM_ajax_info['errList']['cedula_representante_legal'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 10 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
      $Teste_trab = function_exists('mb_strtoupper') ? mb_strtoupper("0123456789") : strtoupper("0123456789") ;  
      $Teste_trab = $Teste_trab . chr(10) . chr(13) ; 
      $Teste_compara = function_exists('mb_strtoupper') ? mb_strtoupper($this->cedula_representante_legal) : strtoupper($this->cedula_representante_legal) ; 
      if ($this->nmgp_opcao != "excluir") 
      { 
          $Teste_critica = 0 ; 
          for ($x = 0; $x < strlen($this->cedula_representante_legal); $x++) 
          { 
               for ($y = 0; $y < strlen($Teste_trab); $y++) 
               { 
                    if (substr($Teste_compara, $x, 1) == substr($Teste_trab, $y, 1) ) 
                    { 
                        break ; 
                    } 
               } 
               if (substr($Teste_compara, $x, 1) != substr($Teste_trab, $y, 1) )  
               { 
                  $Teste_critica = 1 ; 
               } 
          } 
          if ($Teste_critica == 1) 
          { 
              $Campos_Crit .= "CÉDULA REPRESENTANTE LEGAL " . $this->Ini->Nm_lang['lang_errm_ivch']; 
              if (!isset($Campos_Erros['cedula_representante_legal']))
              {
                  $Campos_Erros['cedula_representante_legal'] = array();
              }
              $Campos_Erros['cedula_representante_legal'][] = $this->Ini->Nm_lang['lang_errm_ivch'];
              if (!isset($this->NM_ajax_info['errList']['cedula_representante_legal']) || !is_array($this->NM_ajax_info['errList']['cedula_representante_legal']))
              {
                  $this->NM_ajax_info['errList']['cedula_representante_legal'] = array();
              }
              $this->NM_ajax_info['errList']['cedula_representante_legal'][] = $this->Ini->Nm_lang['lang_errm_ivch'];
          } 
      } 
    } // ValidateField_cedula_representante_legal

    function ValidateField_nombre_representante_legal(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      $this->nombre_representante_legal = function_exists('mb_strtoupper') ? mb_strtoupper($this->nombre_representante_legal) : strtoupper($this->nombre_representante_legal) ; 
      if ($this->nmgp_opcao != "excluir" && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['php_cmp_required']['nombre_representante_legal']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['php_cmp_required']['nombre_representante_legal'] == "on")) 
      { 
          if ($this->nombre_representante_legal == "")  
          { 
              $Campos_Falta[] =  "NOMBRE REPRESENTANTE LEGAL" ; 
              if (!isset($Campos_Erros['nombre_representante_legal']))
              {
                  $Campos_Erros['nombre_representante_legal'] = array();
              }
              $Campos_Erros['nombre_representante_legal'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
                  if (!isset($this->NM_ajax_info['errList']['nombre_representante_legal']) || !is_array($this->NM_ajax_info['errList']['nombre_representante_legal']))
                  {
                      $this->NM_ajax_info['errList']['nombre_representante_legal'] = array();
                  }
                  $this->NM_ajax_info['errList']['nombre_representante_legal'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
          } 
      } 
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->nombre_representante_legal) > 100) 
          { 
              $Campos_Crit .= "NOMBRE REPRESENTANTE LEGAL " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 100 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['nombre_representante_legal']))
              {
                  $Campos_Erros['nombre_representante_legal'] = array();
              }
              $Campos_Erros['nombre_representante_legal'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 100 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['nombre_representante_legal']) || !is_array($this->NM_ajax_info['errList']['nombre_representante_legal']))
              {
                  $this->NM_ajax_info['errList']['nombre_representante_legal'] = array();
              }
              $this->NM_ajax_info['errList']['nombre_representante_legal'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 100 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
      $this->nombre_representante_legal = function_exists('mb_strtoupper') ? mb_strtoupper($this->nombre_representante_legal) : strtoupper($this->nombre_representante_legal) ; 
      $Teste_trab = function_exists('mb_strtoupper') ? mb_strtoupper("abcdefghijklmnopqrstuvwxyz .,ÁÉÍÓÚ") : strtoupper("abcdefghijklmnopqrstuvwxyz .,ÁÉÍÓÚ") ;  
      $Teste_trab = $Teste_trab . chr(10) . chr(13) ; 
      $Teste_compara = function_exists('mb_strtoupper') ? mb_strtoupper($this->nombre_representante_legal) : strtoupper($this->nombre_representante_legal) ; 
      if ($this->nmgp_opcao != "excluir") 
      { 
          $Teste_critica = 0 ; 
          for ($x = 0; $x < strlen($this->nombre_representante_legal); $x++) 
          { 
               for ($y = 0; $y < strlen($Teste_trab); $y++) 
               { 
                    if (substr($Teste_compara, $x, 1) == substr($Teste_trab, $y, 1) ) 
                    { 
                        break ; 
                    } 
               } 
               if (substr($Teste_compara, $x, 1) != substr($Teste_trab, $y, 1) )  
               { 
                  $Teste_critica = 1 ; 
               } 
          } 
          if ($Teste_critica == 1) 
          { 
              $Campos_Crit .= "NOMBRE REPRESENTANTE LEGAL " . $this->Ini->Nm_lang['lang_errm_ivch']; 
              if (!isset($Campos_Erros['nombre_representante_legal']))
              {
                  $Campos_Erros['nombre_representante_legal'] = array();
              }
              $Campos_Erros['nombre_representante_legal'][] = $this->Ini->Nm_lang['lang_errm_ivch'];
              if (!isset($this->NM_ajax_info['errList']['nombre_representante_legal']) || !is_array($this->NM_ajax_info['errList']['nombre_representante_legal']))
              {
                  $this->NM_ajax_info['errList']['nombre_representante_legal'] = array();
              }
              $this->NM_ajax_info['errList']['nombre_representante_legal'][] = $this->Ini->Nm_lang['lang_errm_ivch'];
          } 
      } 
    } // ValidateField_nombre_representante_legal

    function ValidateField_estado_organizacion(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->estado_organizacion == "" && $this->nmgp_opcao != "excluir" && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['php_cmp_required']['estado_organizacion']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['php_cmp_required']['estado_organizacion'] == "on"))
      {
          $Campos_Falta[] = "ESTADO DE LA ORGANIZACIÓN" ; 
          if (!isset($Campos_Erros['estado_organizacion']))
          {
              $Campos_Erros['estado_organizacion'] = array();
          }
          $Campos_Erros['estado_organizacion'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
          if (!isset($this->NM_ajax_info['errList']['estado_organizacion']) || !is_array($this->NM_ajax_info['errList']['estado_organizacion']))
          {
              $this->NM_ajax_info['errList']['estado_organizacion'] = array();
          }
          $this->NM_ajax_info['errList']['estado_organizacion'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
      }
          if (!empty($this->estado_organizacion) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_estado_organizacion']) && !in_array($this->estado_organizacion, $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_estado_organizacion']))
          {
              $Campos_Crit .= $this->Ini->Nm_lang['lang_errm_ajax_data'];
              if (!isset($Campos_Erros['estado_organizacion']))
              {
                  $Campos_Erros['estado_organizacion'] = array();
              }
              $Campos_Erros['estado_organizacion'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
              if (!isset($this->NM_ajax_info['errList']['estado_organizacion']) || !is_array($this->NM_ajax_info['errList']['estado_organizacion']))
              {
                  $this->NM_ajax_info['errList']['estado_organizacion'] = array();
              }
              $this->NM_ajax_info['errList']['estado_organizacion'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
          }
    } // ValidateField_estado_organizacion

    function ValidateField_num_resolucion(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      $this->num_resolucion = function_exists('mb_strtoupper') ? mb_strtoupper($this->num_resolucion) : strtoupper($this->num_resolucion) ; 
      if ($this->nmgp_opcao != "excluir" && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['php_cmp_required']['num_resolucion']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['php_cmp_required']['num_resolucion'] == "on")) 
      { 
          if ($this->num_resolucion == "")  
          { 
              $Campos_Falta[] =  "NÚMERO RESOLUCIÓN" ; 
              if (!isset($Campos_Erros['num_resolucion']))
              {
                  $Campos_Erros['num_resolucion'] = array();
              }
              $Campos_Erros['num_resolucion'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
                  if (!isset($this->NM_ajax_info['errList']['num_resolucion']) || !is_array($this->NM_ajax_info['errList']['num_resolucion']))
                  {
                      $this->NM_ajax_info['errList']['num_resolucion'] = array();
                  }
                  $this->NM_ajax_info['errList']['num_resolucion'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
          } 
      } 
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->num_resolucion) > 40) 
          { 
              $Campos_Crit .= "NÚMERO RESOLUCIÓN " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 40 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['num_resolucion']))
              {
                  $Campos_Erros['num_resolucion'] = array();
              }
              $Campos_Erros['num_resolucion'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 40 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['num_resolucion']) || !is_array($this->NM_ajax_info['errList']['num_resolucion']))
              {
                  $this->NM_ajax_info['errList']['num_resolucion'] = array();
              }
              $this->NM_ajax_info['errList']['num_resolucion'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 40 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
    } // ValidateField_num_resolucion

    function ValidateField_legalmente_constituida(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->legalmente_constituida == "" && $this->nmgp_opcao != "excluir" && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['php_cmp_required']['legalmente_constituida']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['php_cmp_required']['legalmente_constituida'] == "on"))
      {
          $Campos_Falta[] = "LEGALMENTE CONSTITUIDO" ; 
          if (!isset($Campos_Erros['legalmente_constituida']))
          {
              $Campos_Erros['legalmente_constituida'] = array();
          }
          $Campos_Erros['legalmente_constituida'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
          if (!isset($this->NM_ajax_info['errList']['legalmente_constituida']) || !is_array($this->NM_ajax_info['errList']['legalmente_constituida']))
          {
              $this->NM_ajax_info['errList']['legalmente_constituida'] = array();
          }
          $this->NM_ajax_info['errList']['legalmente_constituida'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
      }
          if (!empty($this->legalmente_constituida) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_legalmente_constituida']) && !in_array($this->legalmente_constituida, $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_legalmente_constituida']))
          {
              $Campos_Crit .= $this->Ini->Nm_lang['lang_errm_ajax_data'];
              if (!isset($Campos_Erros['legalmente_constituida']))
              {
                  $Campos_Erros['legalmente_constituida'] = array();
              }
              $Campos_Erros['legalmente_constituida'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
              if (!isset($this->NM_ajax_info['errList']['legalmente_constituida']) || !is_array($this->NM_ajax_info['errList']['legalmente_constituida']))
              {
                  $this->NM_ajax_info['errList']['legalmente_constituida'] = array();
              }
              $this->NM_ajax_info['errList']['legalmente_constituida'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
          }
    } // ValidateField_legalmente_constituida

    function ValidateField_estado_juridico(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->estado_juridico == "" && $this->nmgp_opcao != "excluir" && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['php_cmp_required']['estado_juridico']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['php_cmp_required']['estado_juridico'] == "on"))
      {
          $Campos_Falta[] = "ESTADO JURÍDICO" ; 
          if (!isset($Campos_Erros['estado_juridico']))
          {
              $Campos_Erros['estado_juridico'] = array();
          }
          $Campos_Erros['estado_juridico'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
          if (!isset($this->NM_ajax_info['errList']['estado_juridico']) || !is_array($this->NM_ajax_info['errList']['estado_juridico']))
          {
              $this->NM_ajax_info['errList']['estado_juridico'] = array();
          }
          $this->NM_ajax_info['errList']['estado_juridico'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
      }
          if (!empty($this->estado_juridico) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_estado_juridico']) && !in_array($this->estado_juridico, $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_estado_juridico']))
          {
              $Campos_Crit .= $this->Ini->Nm_lang['lang_errm_ajax_data'];
              if (!isset($Campos_Erros['estado_juridico']))
              {
                  $Campos_Erros['estado_juridico'] = array();
              }
              $Campos_Erros['estado_juridico'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
              if (!isset($this->NM_ajax_info['errList']['estado_juridico']) || !is_array($this->NM_ajax_info['errList']['estado_juridico']))
              {
                  $this->NM_ajax_info['errList']['estado_juridico'] = array();
              }
              $this->NM_ajax_info['errList']['estado_juridico'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
          }
    } // ValidateField_estado_juridico

    function ValidateField_num_socios(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->num_socios == "")  
      { 
          $this->num_socios = 0;
          $this->sc_force_zero[] = 'num_socios';
      } 
      nm_limpa_numero($this->num_socios, $this->field_config['num_socios']['symbol_grp']) ; 
      if ($this->nmgp_opcao != "excluir") 
      { 
          if ($this->num_socios != '')  
          { 
              $iTestSize = 11;
              if (strlen($this->num_socios) > $iTestSize)  
              { 
                  $Campos_Crit .= "NÚMERO INTEGRANTES DE LA ORG / U.E.P.: " . $this->Ini->Nm_lang['lang_errm_size']; 
                  if (!isset($Campos_Erros['num_socios']))
                  {
                      $Campos_Erros['num_socios'] = array();
                  }
                  $Campos_Erros['num_socios'][] = $this->Ini->Nm_lang['lang_errm_size'];
                  if (!isset($this->NM_ajax_info['errList']['num_socios']) || !is_array($this->NM_ajax_info['errList']['num_socios']))
                  {
                      $this->NM_ajax_info['errList']['num_socios'] = array();
                  }
                  $this->NM_ajax_info['errList']['num_socios'][] = $this->Ini->Nm_lang['lang_errm_size'];
              } 
              if ($teste_validade->Valor($this->num_socios, 11, 0, 0, 0, "N") == false)  
              { 
                  $Campos_Crit .= "NÚMERO INTEGRANTES DE LA ORG / U.E.P.; " ; 
                  if (!isset($Campos_Erros['num_socios']))
                  {
                      $Campos_Erros['num_socios'] = array();
                  }
                  $Campos_Erros['num_socios'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['num_socios']) || !is_array($this->NM_ajax_info['errList']['num_socios']))
                  {
                      $this->NM_ajax_info['errList']['num_socios'] = array();
                  }
                  $this->NM_ajax_info['errList']['num_socios'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
    } // ValidateField_num_socios

    function ValidateField_user(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->user) > 20) 
          { 
              $Campos_Crit .= "TÉCNICO " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 20 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['user']))
              {
                  $Campos_Erros['user'] = array();
              }
              $Campos_Erros['user'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 20 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['user']) || !is_array($this->NM_ajax_info['errList']['user']))
              {
                  $this->NM_ajax_info['errList']['user'] = array();
              }
              $this->NM_ajax_info['errList']['user'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 20 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
    } // ValidateField_user

    function ValidateField_fecha_registro(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      nm_limpa_data($this->fecha_registro, $this->field_config['fecha_registro']['date_sep']) ; 
      $trab_dt_min = ""; 
      $trab_dt_max = ""; 
      if ($this->nmgp_opcao != "excluir") 
      { 
          $guarda_datahora = $this->field_config['fecha_registro']['date_format']; 
          if (false !== strpos($guarda_datahora, ';')) $this->field_config['fecha_registro']['date_format'] = substr($guarda_datahora, 0, strpos($guarda_datahora, ';'));
          $Format_Data = $this->field_config['fecha_registro']['date_format']; 
          nm_limpa_data($Format_Data, $this->field_config['fecha_registro']['date_sep']) ; 
          if (trim($this->fecha_registro) != "")  
          { 
              if ($teste_validade->Data($this->fecha_registro, $Format_Data, $trab_dt_min, $trab_dt_max) == false)  
              { 
                  $Campos_Crit .= "FECHA REGISTRO; " ; 
                  if (!isset($Campos_Erros['fecha_registro']))
                  {
                      $Campos_Erros['fecha_registro'] = array();
                  }
                  $Campos_Erros['fecha_registro'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['fecha_registro']) || !is_array($this->NM_ajax_info['errList']['fecha_registro']))
                  {
                      $this->NM_ajax_info['errList']['fecha_registro'] = array();
                  }
                  $this->NM_ajax_info['errList']['fecha_registro'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
          $this->field_config['fecha_registro']['date_format'] = $guarda_datahora; 
       } 
      nm_limpa_hora($this->fecha_registro_hora, $this->field_config['fecha_registro_hora']['time_sep']) ; 
      if ($this->nmgp_opcao != "excluir") 
      {
          $Format_Hora = $this->field_config['fecha_registro_hora']['date_format']; 
          nm_limpa_hora($Format_Hora, $this->field_config['fecha_registro_hora']['time_sep']) ; 
          if (trim($this->fecha_registro_hora) != "")  
          { 
              if ($teste_validade->Hora($this->fecha_registro_hora, $Format_Hora) == false)  
              { 
                  $Campos_Crit .= "FECHA REGISTRO; " ; 
                  if (!isset($Campos_Erros['fecha_registro_hora']))
                  {
                      $Campos_Erros['fecha_registro_hora'] = array();
                  }
                  $Campos_Erros['fecha_registro_hora'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['fecha_registro']) || !is_array($this->NM_ajax_info['errList']['fecha_registro']))
                  {
                      $this->NM_ajax_info['errList']['fecha_registro'] = array();
                  }
                  $this->NM_ajax_info['errList']['fecha_registro'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
      if (isset($Campos_Erros['fecha_registro']) && isset($Campos_Erros['fecha_registro_hora']))
      {
          $this->removeDuplicateDttmError($Campos_Erros['fecha_registro'], $Campos_Erros['fecha_registro_hora']);
          if (empty($Campos_Erros['fecha_registro_hora']))
          {
              unset($Campos_Erros['fecha_registro_hora']);
          }
          if (isset($this->NM_ajax_info['errList']['fecha_registro']))
          {
              $this->NM_ajax_info['errList']['fecha_registro'] = array_unique($this->NM_ajax_info['errList']['fecha_registro']);
          }
      }
    } // ValidateField_fecha_registro_hora

    function ValidateField_tipo_registro(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->tipo_registro) > 6) 
          { 
              $Campos_Crit .= "TIPO REGISTRO " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 6 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['tipo_registro']))
              {
                  $Campos_Erros['tipo_registro'] = array();
              }
              $Campos_Erros['tipo_registro'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 6 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['tipo_registro']) || !is_array($this->NM_ajax_info['errList']['tipo_registro']))
              {
                  $this->NM_ajax_info['errList']['tipo_registro'] = array();
              }
              $this->NM_ajax_info['errList']['tipo_registro'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 6 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
    } // ValidateField_tipo_registro

    function removeDuplicateDttmError($aErrDate, &$aErrTime)
    {
        if (empty($aErrDate) || empty($aErrTime))
        {
            return;
        }

        foreach ($aErrDate as $sErrDate)
        {
            foreach ($aErrTime as $iErrTime => $sErrTime)
            {
                if ($sErrDate == $sErrTime)
                {
                    unset($aErrTime[$iErrTime]);
                }
            }
        }
    } // removeDuplicateDttmError

   function nm_guardar_campos()
   {
    global
           $sc_seq_vert;
    $this->nmgp_dados_form['ruc'] = $this->ruc;
    $this->nmgp_dados_form['btnbuscar'] = $this->btnbuscar;
    $this->nmgp_dados_form['ruc_definitivo'] = $this->ruc_definitivo;
    $this->nmgp_dados_form['ruc_provisional'] = $this->ruc_provisional;
    $this->nmgp_dados_form['organizacion'] = $this->organizacion;
    $this->nmgp_dados_form['actividad'] = $this->actividad;
    $this->nmgp_dados_form['tipo'] = $this->tipo;
    $this->nmgp_dados_form['forma_organizacion'] = $this->forma_organizacion;
    $this->nmgp_dados_form['estado_org'] = $this->estado_org;
    $this->nmgp_dados_form['cod_zona'] = $this->cod_zona;
    $this->nmgp_dados_form['cod_provincia'] = $this->cod_provincia;
    $this->nmgp_dados_form['cod_canton'] = $this->cod_canton;
    $this->nmgp_dados_form['cod_parroquia'] = $this->cod_parroquia;
    $this->nmgp_dados_form['direccion'] = $this->direccion;
    $this->nmgp_dados_form['telefono'] = $this->telefono;
    $this->nmgp_dados_form['celular'] = $this->celular;
    $this->nmgp_dados_form['email'] = $this->email;
    $this->nmgp_dados_form['circuito_economico'] = $this->circuito_economico;
    $this->nmgp_dados_form['categoria_actividad_mp'] = $this->categoria_actividad_mp;
    $this->nmgp_dados_form['identificacion_actividad_mp'] = $this->identificacion_actividad_mp;
    $this->nmgp_dados_form['producto_servicio'] = $this->producto_servicio;
    $this->nmgp_dados_form['cedula_representante_legal'] = $this->cedula_representante_legal;
    $this->nmgp_dados_form['nombre_representante_legal'] = $this->nombre_representante_legal;
    $this->nmgp_dados_form['estado_organizacion'] = $this->estado_organizacion;
    $this->nmgp_dados_form['num_resolucion'] = $this->num_resolucion;
    $this->nmgp_dados_form['legalmente_constituida'] = $this->legalmente_constituida;
    $this->nmgp_dados_form['estado_juridico'] = $this->estado_juridico;
    $this->nmgp_dados_form['num_socios'] = $this->num_socios;
    $this->nmgp_dados_form['user'] = $this->user;
    $this->nmgp_dados_form['fecha_registro'] = $this->fecha_registro;
    $this->nmgp_dados_form['tipo_registro'] = $this->tipo_registro;
    $this->nmgp_dados_form['cod_u_organizaciones'] = $this->cod_u_organizaciones;
    $this->nmgp_dados_form['sc_field_0'] = $this->sc_field_0;
    $this->nmgp_dados_form['telefono2'] = $this->telefono2;
    $this->nmgp_dados_form['registro_sanitario'] = $this->registro_sanitario;
    $this->nmgp_dados_form['seps_sector'] = $this->seps_sector;
    $this->nmgp_dados_form['seps_nivel'] = $this->seps_nivel;
    $this->nmgp_dados_form['seps_grupo_organizacion'] = $this->seps_grupo_organizacion;
    $this->nmgp_dados_form['seps_clase_organizacion'] = $this->seps_clase_organizacion;
    $this->nmgp_dados_form['zona_procedencia'] = $this->zona_procedencia;
    $this->nmgp_dados_form['provincia_procedencia'] = $this->provincia_procedencia;
    $this->nmgp_dados_form['antiguedad_im'] = $this->antiguedad_im;
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['dados_form'] = $this->nmgp_dados_form;
   }
   function nm_tira_formatacao()
   {
      global $nm_form_submit;
         $this->formatado = false;
      nm_limpa_numero($this->num_socios, $this->field_config['num_socios']['symbol_grp']) ; 
      nm_limpa_data($this->fecha_registro, $this->field_config['fecha_registro']['date_sep']) ; 
      nm_limpa_hora($this->fecha_registro_hora, $this->field_config['fecha_registro']['time_sep']) ; 
      nm_limpa_numero($this->cod_u_organizaciones, $this->field_config['cod_u_organizaciones']['symbol_grp']) ; 
      nm_limpa_numero($this->seps_nivel, $this->field_config['seps_nivel']['symbol_grp']) ; 
   }
   function sc_add_currency(&$value, $symbol, $pos)
   {
       if ('' == $value)
       {
           return;
       }
       $value = (1 == $pos || 3 == $pos) ? $symbol . ' ' . $value : $value . ' ' . $symbol;
   }
   function sc_remove_currency(&$value, $symbol_dec, $symbol_tho, $symbol_mon)
   {
       $value = preg_replace('~&#x0*([0-9a-f]+);~ei', '', $value);
       $sNew  = str_replace($symbol_mon, '', $value);
       if ($sNew != $value)
       {
           $value = str_replace(' ', '', $sNew);
           return;
       }
       $aTest = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9', '-', $symbol_dec, $symbol_tho);
       $sNew  = '';
       for ($i = 0; $i < strlen($value); $i++)
       {
           if ($this->sc_test_currency_char($value[$i], $aTest))
           {
               $sNew .= $value[$i];
           }
       }
       $value = $sNew;
   }
   function sc_test_currency_char($char, $test)
   {
       $found = false;
       foreach ($test as $test_char)
       {
           if ($char === $test_char)
           {
               $found = true;
           }
       }
       return $found;
   }
   function nm_clear_val($Nome_Campo)
   {
      if ($Nome_Campo == "num_socios")
      {
          nm_limpa_numero($this->num_socios, $this->field_config['num_socios']['symbol_grp']) ; 
      }
      if ($Nome_Campo == "cod_u_organizaciones")
      {
          nm_limpa_numero($this->cod_u_organizaciones, $this->field_config['cod_u_organizaciones']['symbol_grp']) ; 
      }
      if ($Nome_Campo == "seps_nivel")
      {
          nm_limpa_numero($this->seps_nivel, $this->field_config['seps_nivel']['symbol_grp']) ; 
      }
   }
   function nm_formatar_campos($format_fields = array())
   {
      global $nm_form_submit;
     if (isset($this->formatado) && $this->formatado)
     {
         return;
     }
     $this->formatado = true;
      if (!empty($this->num_socios) || (!empty($format_fields) && isset($format_fields['num_socios'])))
      {
          nmgp_Form_Num_Val($this->num_socios, $this->field_config['num_socios']['symbol_grp'], $this->field_config['num_socios']['symbol_dec'], "0", "S", "", "", "", "-", $this->field_config['num_socios']['symbol_fmt']) ; 
      }
      if ((!empty($this->fecha_registro) && 'null' != $this->fecha_registro) || (!empty($format_fields) && isset($format_fields['fecha_registro'])))
      {
          $nm_separa_data = strpos($this->field_config['fecha_registro']['date_format'], ";") ;
          $guarda_format_hora = $this->field_config['fecha_registro']['date_format'];
          $this->field_config['fecha_registro']['date_format'] = substr($this->field_config['fecha_registro']['date_format'], 0, $nm_separa_data) ;
          $separador = strpos($this->fecha_registro, " ") ; 
          $this->fecha_registro_hora = substr($this->fecha_registro, $separador + 1) ; 
          $this->fecha_registro = substr($this->fecha_registro, 0, $separador) ; 
          nm_volta_data($this->fecha_registro, $this->field_config['fecha_registro']['date_format']) ; 
          nmgp_Form_Datas($this->fecha_registro, $this->field_config['fecha_registro']['date_format'], $this->field_config['fecha_registro']['date_sep']) ;  
          $this->field_config['fecha_registro']['date_format'] = substr($guarda_format_hora, $nm_separa_data + 1) ;
          nm_volta_hora($this->fecha_registro_hora, $this->field_config['fecha_registro']['date_format']) ; 
          nmgp_Form_Hora($this->fecha_registro_hora, $this->field_config['fecha_registro']['date_format'], $this->field_config['fecha_registro']['time_sep']) ;  
          $this->field_config['fecha_registro']['date_format'] = $guarda_format_hora ;
      }
      elseif ('null' == $this->fecha_registro || '' == $this->fecha_registro)
      {
          $this->fecha_registro_hora = '';
          $this->fecha_registro = '';
      }
   }
   function nm_gera_mask(&$nm_campo, $nm_mask)
   { 
      $trab_campo = $nm_campo;
      $trab_mask  = $nm_mask;
      $tam_campo  = strlen($nm_campo);
      $trab_saida = "";

      if (false !== strpos($nm_mask, '9') || false !== strpos($nm_mask, 'a') || false !== strpos($nm_mask, '*'))
      {
          $new_campo = '';
          $a_mask_ord  = array();
          $i_mask_size = -1;

          foreach (explode(';', $nm_mask) as $str_mask)
          {
              $a_mask_ord[ $this->nm_conta_mask_chars($str_mask) ] = $str_mask;
          }
          ksort($a_mask_ord);

          foreach ($a_mask_ord as $i_size => $s_mask)
          {
              if (-1 == $i_mask_size)
              {
                  $i_mask_size = $i_size;
              }
              elseif (strlen($nm_campo) >= $i_size && strlen($nm_campo) > $i_mask_size)
              {
                  $i_mask_size = $i_size;
              }
          }
          $nm_mask = $a_mask_ord[$i_mask_size];

          for ($i = 0; $i < strlen($nm_mask); $i++)
          {
              $test_mask = substr($nm_mask, $i, 1);
              
              if ('9' == $test_mask || 'a' == $test_mask || '*' == $test_mask)
              {
                  $new_campo .= substr($nm_campo, 0, 1);
                  $nm_campo   = substr($nm_campo, 1);
              }
              else
              {
                  $new_campo .= $test_mask;
              }
          }

                  $nm_campo = $new_campo;

          return;
      }

      $mask_num = false;
      for ($x=0; $x < strlen($trab_mask); $x++)
      {
          if (substr($trab_mask, $x, 1) == "#")
          {
              $mask_num = true;
              break;
          }
      }
      if ($mask_num )
      {
          $ver_duas = explode(";", $trab_mask);
          if (isset($ver_duas[1]) && !empty($ver_duas[1]))
          {
              $cont1 = count(explode("#", $ver_duas[0])) - 1;
              $cont2 = count(explode("#", $ver_duas[1])) - 1;
              if ($cont1 < $cont2 && $tam_campo <= $cont2 && $tam_campo > $cont1)
              {
                  $trab_mask = $ver_duas[1];
              }
              elseif ($cont1 > $cont2 && $tam_campo <= $cont2)
              {
                  $trab_mask = $ver_duas[1];
              }
              else
              {
                  $trab_mask = $ver_duas[0];
              }
          }
          $tam_mask = strlen($trab_mask);
          $xdados = 0;
          for ($x=0; $x < $tam_mask; $x++)
          {
              if (substr($trab_mask, $x, 1) == "#" && $xdados < $tam_campo)
              {
                  $trab_saida .= substr($trab_campo, $xdados, 1);
                  $xdados++;
              }
              elseif ($xdados < $tam_campo)
              {
                  $trab_saida .= substr($trab_mask, $x, 1);
              }
          }
          if ($xdados < $tam_campo)
          {
              $trab_saida .= substr($trab_campo, $xdados);
          }
          $nm_campo = $trab_saida;
          return;
      }
      for ($ix = strlen($trab_mask); $ix > 0; $ix--)
      {
           $char_mask = substr($trab_mask, $ix - 1, 1);
           if ($char_mask != "x" && $char_mask != "z")
           {
               $trab_saida = $char_mask . $trab_saida;
           }
           else
           {
               if ($tam_campo != 0)
               {
                   $trab_saida = substr($trab_campo, $tam_campo - 1, 1) . $trab_saida;
                   $tam_campo--;
               }
               else
               {
                   $trab_saida = "0" . $trab_saida;
               }
           }
      }
      if ($tam_campo != 0)
      {
          $trab_saida = substr($trab_campo, 0, $tam_campo) . $trab_saida;
          $trab_mask  = str_repeat("z", $tam_campo) . $trab_mask;
      }
   
      $iz = 0; 
      for ($ix = 0; $ix < strlen($trab_mask); $ix++)
      {
           $char_mask = substr($trab_mask, $ix, 1);
           if ($char_mask != "x" && $char_mask != "z")
           {
               if ($char_mask == "." || $char_mask == ",")
               {
                   $trab_saida = substr($trab_saida, 0, $iz) . substr($trab_saida, $iz + 1);
               }
               else
               {
                   $iz++;
               }
           }
           elseif ($char_mask == "x" || substr($trab_saida, $iz, 1) != "0")
           {
               $ix = strlen($trab_mask) + 1;
           }
           else
           {
               $trab_saida = substr($trab_saida, 0, $iz) . substr($trab_saida, $iz + 1);
           }
      }
      $nm_campo = $trab_saida;
   } 
   function nm_conta_mask_chars($sMask)
   {
       $iLength = 0;

       for ($i = 0; $i < strlen($sMask); $i++)
       {
           if (in_array($sMask[$i], array('9', 'a', '*')))
           {
               $iLength++;
           }
       }

       return $iLength;
   }
   function nm_tira_mask(&$nm_campo, $nm_mask, $nm_chars = '')
   { 
      $mask_dados = $nm_campo;
      $trab_mask  = $nm_mask;
      $tam_campo  = strlen($nm_campo);
      $tam_mask   = strlen($nm_mask);
      $trab_saida = "";

      if (false !== strpos($nm_mask, '9') || false !== strpos($nm_mask, 'a') || false !== strpos($nm_mask, '*'))
      {
          $raw_campo = $this->sc_clear_mask($nm_campo, $nm_chars);
          $raw_mask  = $this->sc_clear_mask($nm_mask, $nm_chars);
          $new_campo = '';

          $test_mask = substr($raw_mask, 0, 1);
          $raw_mask  = substr($raw_mask, 1);

          while ('' != $raw_campo)
          {
              $test_val  = substr($raw_campo, 0, 1);
              $raw_campo = substr($raw_campo, 1);
              $ord       = ord($test_val);
              $found     = false;

              switch ($test_mask)
              {
                  case '9':
                      if (48 <= $ord && 57 >= $ord)
                      {
                          $new_campo .= $test_val;
                          $found      = true;
                      }
                      break;

                  case 'a':
                      if ((65 <= $ord && 90 >= $ord) || (97 <= $ord && 122 >= $ord))
                      {
                          $new_campo .= $test_val;
                          $found      = true;
                      }
                      break;

                  case '*':
                      if ((48 <= $ord && 57 >= $ord) || (65 <= $ord && 90 >= $ord) || (97 <= $ord && 122 >= $ord))
                      {
                          $new_campo .= $test_val;
                          $found      = true;
                      }
                      break;
              }

              if ($found)
              {
                  $test_mask = substr($raw_mask, 0, 1);
                  $raw_mask  = substr($raw_mask, 1);
              }
          }

          $nm_campo = $new_campo;

          return;
      }

      $mask_num = false;
      for ($x=0; $x < strlen($trab_mask); $x++)
      {
          if (substr($trab_mask, $x, 1) == "#")
          {
              $mask_num = true;
              break;
          }
      }
      if ($mask_num )
      {
          for ($x=0; $x < strlen($mask_dados); $x++)
          {
              if (is_numeric(substr($mask_dados, $x, 1)))
              {
                  $trab_saida .= substr($mask_dados, $x, 1);
              }
          }
          $nm_campo = $trab_saida;
          return;
      }
      if ($tam_mask > $tam_campo)
      {
         $mask_desfaz = "";
         for ($mask_ind = 0; $tam_mask > $tam_campo; $mask_ind++)
         {
              $mask_char = substr($trab_mask, $mask_ind, 1);
              if ($mask_char == "z")
              {
                  $tam_mask--;
              }
              else
              {
                  $mask_desfaz .= $mask_char;
              }
              if ($mask_ind == $tam_campo)
              {
                  $tam_mask = $tam_campo;
              }
         }
         $trab_mask = $mask_desfaz . substr($trab_mask, $mask_ind);
      }
      $mask_saida = "";
      for ($mask_ind = strlen($trab_mask); $mask_ind > 0; $mask_ind--)
      {
          $mask_char = substr($trab_mask, $mask_ind - 1, 1);
          if ($mask_char == "x" || $mask_char == "z")
          {
              if ($tam_campo > 0)
              {
                  $mask_saida = substr($mask_dados, $tam_campo - 1, 1) . $mask_saida;
              }
          }
          else
          {
              if ($mask_char != substr($mask_dados, $tam_campo - 1, 1) && $tam_campo > 0)
              {
                  $mask_saida = substr($mask_dados, $tam_campo - 1, 1) . $mask_saida;
                  $mask_ind--;
              }
          }
          $tam_campo--;
      }
      if ($tam_campo > 0)
      {
         $mask_saida = substr($mask_dados, 0, $tam_campo) . $mask_saida;
      }
      $nm_campo = $mask_saida;
   }

   function sc_clear_mask($value, $chars)
   {
       for ($i = 0; $i < strlen($value); $i++)
       {
           if (false === strpos($chars, $value[$i]))
           {
               $new .= $value[$i];
           }
       }

       return $new;
   }
//
   function nm_limpa_alfa(&$str)
   {
       if (get_magic_quotes_gpc())
       {
           if (is_array($str))
           {
               $x = 0;
               foreach ($str as $cada_str)
               {
                   $str[$x] = stripslashes($str[$x]);
                   $x++;
               }
           }
           else
           {
               $str = stripslashes($str);
           }
       }
   }
//
//-- 
   function nm_converte_datas($use_null = true)
   {
       $guarda_format_hora = $this->field_config['fecha_registro']['date_format'];
      if ($this->fecha_registro != "")  
      { 
          $nm_separa_data = strpos($this->field_config['fecha_registro']['date_format'], ";") ;
          $this->field_config['fecha_registro']['date_format'] = substr($this->field_config['fecha_registro']['date_format'], 0, $nm_separa_data) ;
          nm_conv_data($this->fecha_registro, $this->field_config['fecha_registro']['date_format']) ; 
          $this->field_config['fecha_registro']['date_format'] = substr($guarda_format_hora, $nm_separa_data + 1) ;
          nm_conv_hora($this->fecha_registro_hora, $this->field_config['fecha_registro']['date_format']) ; 
          if ($this->fecha_registro_hora == "" )  
          { 
              $this->fecha_registro_hora = "00:00:00:000" ; 
          }
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres))
          {
              $this->fecha_registro_hora = substr($this->fecha_registro_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->fecha_registro_hora = substr($this->fecha_registro_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
          {
              $this->fecha_registro_hora = substr($this->fecha_registro_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          {
              $this->fecha_registro_hora = substr($this->fecha_registro_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_db2))
          {
              $this->fecha_registro_hora = substr($this->fecha_registro_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
          {
              $this->fecha_registro_hora = substr($this->fecha_registro_hora, 0, -4);
          }
          if ($this->fecha_registro != "")  
          { 
              $this->fecha_registro .= " " . $this->fecha_registro_hora ; 
          }
      } 
      if ($this->fecha_registro == "" && $use_null)  
      { 
          $this->fecha_registro = "null" ; 
      } 
       $this->field_config['fecha_registro']['date_format'] = $guarda_format_hora;
   }
   function nm_conv_data_db($dt_in, $form_in, $form_out, $replaces = array())
   {
       $dt_out = $dt_in;
       if (strtoupper($form_in) == "DB_FORMAT")
       {
           if ($dt_out == "null" || $dt_out == "")
           {
               $dt_out = "";
               return $dt_out;
           }
           $form_in = "AAAA-MM-DD";
       }
       if (strtoupper($form_out) == "DB_FORMAT")
       {
           if (empty($dt_out))
           {
               $dt_out = "null";
               return $dt_out;
           }
           $form_out = "AAAA-MM-DD";
       }
       nm_conv_form_data($dt_out, $form_in, $form_out, $replaces);
       return $dt_out;
   }

   function returnWhere($aCond, $sOp = 'AND')
   {
       $aWhere = array();
       foreach ($aCond as $sCond)
       {
           $this->handleWhereCond($sCond);
           if ('' != $sCond)
           {
               $aWhere[] = $sCond;
           }
       }
       if (empty($aWhere))
       {
           return '';
       }
       else
       {
           return ' WHERE (' . implode(') ' . $sOp . ' (', $aWhere) . ')';
       }
   } // returnWhere

   function handleWhereCond(&$sCond)
   {
       $sCond = trim($sCond);
       if ('where' == strtolower(substr($sCond, 0, 5)))
       {
           $sCond = trim(substr($sCond, 5));
       }
   } // handleWhereCond

   function ajax_return_values()
   {
          $this->ajax_return_values_ruc();
          $this->ajax_return_values_btnbuscar();
          $this->ajax_return_values_ruc_definitivo();
          $this->ajax_return_values_ruc_provisional();
          $this->ajax_return_values_organizacion();
          $this->ajax_return_values_actividad();
          $this->ajax_return_values_tipo();
          $this->ajax_return_values_forma_organizacion();
          $this->ajax_return_values_estado_org();
          $this->ajax_return_values_cod_zona();
          $this->ajax_return_values_cod_provincia();
          $this->ajax_return_values_cod_canton();
          $this->ajax_return_values_cod_parroquia();
          $this->ajax_return_values_direccion();
          $this->ajax_return_values_telefono();
          $this->ajax_return_values_celular();
          $this->ajax_return_values_email();
          $this->ajax_return_values_circuito_economico();
          $this->ajax_return_values_categoria_actividad_mp();
          $this->ajax_return_values_identificacion_actividad_mp();
          $this->ajax_return_values_producto_servicio();
          $this->ajax_return_values_cedula_representante_legal();
          $this->ajax_return_values_nombre_representante_legal();
          $this->ajax_return_values_estado_organizacion();
          $this->ajax_return_values_num_resolucion();
          $this->ajax_return_values_legalmente_constituida();
          $this->ajax_return_values_estado_juridico();
          $this->ajax_return_values_num_socios();
          $this->ajax_return_values_user();
          $this->ajax_return_values_fecha_registro();
          $this->ajax_return_values_tipo_registro();
          if ('navigate_form' == $this->NM_ajax_opcao)
          {
              $this->NM_ajax_info['clearUpload']      = 'S';
              $this->NM_ajax_info['navStatus']['ret'] = $this->Nav_permite_ret ? 'S' : 'N';
              $this->NM_ajax_info['navStatus']['ava'] = $this->Nav_permite_ava ? 'S' : 'N';
              $this->NM_ajax_info['fldList']['cod_u_organizaciones']['keyVal'] = form_u_organizaciones_pack_protect_string($this->nmgp_dados_form['cod_u_organizaciones']);
          }
   } // ajax_return_values

          //----- ruc
   function ajax_return_values_ruc($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("ruc", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->ruc);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['ruc'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- btnbuscar
   function ajax_return_values_btnbuscar($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("btnbuscar", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->btnbuscar);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['btnbuscar'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- ruc_definitivo
   function ajax_return_values_ruc_definitivo($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("ruc_definitivo", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->ruc_definitivo);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['ruc_definitivo'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- ruc_provisional
   function ajax_return_values_ruc_provisional($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("ruc_provisional", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->ruc_provisional);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['ruc_provisional'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- organizacion
   function ajax_return_values_organizacion($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("organizacion", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->organizacion);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['organizacion'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- actividad
   function ajax_return_values_actividad($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("actividad", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->actividad);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['actividad'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- tipo
   function ajax_return_values_tipo($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("tipo", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->tipo);
              $aLookup = array();
              $this->_tmp_lookup_tipo = $this->tipo;

 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_tipo']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_tipo'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_tipo']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_tipo'] = array(); 
}
$aLookup[] = array(form_u_organizaciones_pack_protect_string('') => form_u_organizaciones_pack_protect_string('---Seleccione---'));
$_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_tipo'][] = '';
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 

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
              $aLookup[] = array(form_u_organizaciones_pack_protect_string($rs->fields[0]) => form_u_organizaciones_pack_protect_string(NM_charset_to_utf8($rs->fields[1])));
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
          $aLookupOrig = $aLookup;
          $sSelComp = "name=\"tipo\"";
          if (isset($this->NM_ajax_info['select_html']['tipo']) && !empty($this->NM_ajax_info['select_html']['tipo']))
          {
              $sSelComp = $this->NM_ajax_info['select_html']['tipo'];
          }
          $sLookup = '';
          if (empty($aLookup))
          {
              $aLookup[] = array('' => '');
          }
          foreach ($aLookup as $aOption)
          {
              foreach ($aOption as $sValue => $sLabel)
              {

                  if ($this->tipo == $sValue)
                  {
                      $this->_tmp_lookup_tipo = $sLabel;
                  }

                  $sOpt     = ($sValue !== $sLabel) ? $sValue : $sLabel;
                  $sLookup .= "<option value=\"" . $sOpt . "\">" . $sLabel . "</option>";
              }
          }
          $aLookup  = $sLookup;
          $this->NM_ajax_info['fldList']['tipo'] = array(
                       'row'    => '',
               'type'    => 'select',
               'valList' => array($sTmpValue),
               'optList' => $aLookup,
              );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['tipo']['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['tipo']['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['tipo']['labList'] = $aLabel;
          }
   }

          //----- forma_organizacion
   function ajax_return_values_forma_organizacion($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("forma_organizacion", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->forma_organizacion);
              $aLookup = array();
              $this->_tmp_lookup_forma_organizacion = $this->forma_organizacion;

 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_forma_organizacion']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_forma_organizacion'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_forma_organizacion']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_forma_organizacion'] = array(); 
}
$aLookup[] = array(form_u_organizaciones_pack_protect_string('---') => form_u_organizaciones_pack_protect_string('---Seleccione---'));
$_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_forma_organizacion'][] = '---';
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 

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
              $aLookup[] = array(form_u_organizaciones_pack_protect_string($rs->fields[0]) => form_u_organizaciones_pack_protect_string(NM_charset_to_utf8($rs->fields[1])));
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
          $aLookupOrig = $aLookup;
          $sSelComp = "name=\"forma_organizacion\"";
          if (isset($this->NM_ajax_info['select_html']['forma_organizacion']) && !empty($this->NM_ajax_info['select_html']['forma_organizacion']))
          {
              $sSelComp = $this->NM_ajax_info['select_html']['forma_organizacion'];
          }
          $sLookup = '';
          if (empty($aLookup))
          {
              $aLookup[] = array('' => '');
          }
          foreach ($aLookup as $aOption)
          {
              foreach ($aOption as $sValue => $sLabel)
              {

                  if ($this->forma_organizacion == $sValue)
                  {
                      $this->_tmp_lookup_forma_organizacion = $sLabel;
                  }

                  $sOpt     = ($sValue !== $sLabel) ? $sValue : $sLabel;
                  $sLookup .= "<option value=\"" . $sOpt . "\">" . $sLabel . "</option>";
              }
          }
          $aLookup  = $sLookup;
          $this->NM_ajax_info['fldList']['forma_organizacion'] = array(
                       'row'    => '',
               'type'    => 'select',
               'valList' => array($sTmpValue),
               'optList' => $aLookup,
              );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['forma_organizacion']['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['forma_organizacion']['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['forma_organizacion']['labList'] = $aLabel;
          }
   }

          //----- estado_org
   function ajax_return_values_estado_org($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("estado_org", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->estado_org);
              $aLookup = array();
              $this->_tmp_lookup_estado_org = $this->estado_org;

$aLookup[] = array(form_u_organizaciones_pack_protect_string('activa') => form_u_organizaciones_pack_protect_string("ACTIVA"));
$aLookup[] = array(form_u_organizaciones_pack_protect_string('inactiva') => form_u_organizaciones_pack_protect_string("INACTIVA"));
$_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_estado_org'][] = 'activa';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_estado_org'][] = 'inactiva';
          $aLookupOrig = $aLookup;
          $sSelComp = "name=\"estado_org\"";
          if (isset($this->NM_ajax_info['select_html']['estado_org']) && !empty($this->NM_ajax_info['select_html']['estado_org']))
          {
              $sSelComp = $this->NM_ajax_info['select_html']['estado_org'];
          }
          $sLookup = '';
          if (empty($aLookup))
          {
              $aLookup[] = array('' => '');
          }
          foreach ($aLookup as $aOption)
          {
              foreach ($aOption as $sValue => $sLabel)
              {

                  if ($this->estado_org == $sValue)
                  {
                      $this->_tmp_lookup_estado_org = $sLabel;
                  }

                  $sOpt     = ($sValue !== $sLabel) ? $sValue : $sLabel;
                  $sLookup .= "<option value=\"" . $sOpt . "\">" . $sLabel . "</option>";
              }
          }
          $aLookup  = $sLookup;
          $this->NM_ajax_info['fldList']['estado_org'] = array(
                       'row'    => '',
               'type'    => 'select',
               'valList' => array($sTmpValue),
              );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['estado_org']['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['estado_org']['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['estado_org']['labList'] = $aLabel;
          }
   }

          //----- cod_zona
   function ajax_return_values_cod_zona($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("cod_zona", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->cod_zona);
              $aLookup = array();
              $this->_tmp_lookup_cod_zona = $this->cod_zona;

 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_cod_zona']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_cod_zona'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_cod_zona']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_cod_zona'] = array(); 
}
$aLookup[] = array(form_u_organizaciones_pack_protect_string('') => form_u_organizaciones_pack_protect_string('--Seleccione--'));
$_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_cod_zona'][] = '';
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 

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
              $aLookup[] = array(form_u_organizaciones_pack_protect_string($rs->fields[0]) => form_u_organizaciones_pack_protect_string(NM_charset_to_utf8($rs->fields[1])));
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
          $aLookupOrig = $aLookup;
          $sSelComp = "name=\"cod_zona\"";
          if (isset($this->NM_ajax_info['select_html']['cod_zona']) && !empty($this->NM_ajax_info['select_html']['cod_zona']))
          {
              $sSelComp = $this->NM_ajax_info['select_html']['cod_zona'];
          }
          $sLookup = '';
          if (empty($aLookup))
          {
              $aLookup[] = array('' => '');
          }
          foreach ($aLookup as $aOption)
          {
              foreach ($aOption as $sValue => $sLabel)
              {

                  if ($this->cod_zona == $sValue)
                  {
                      $this->_tmp_lookup_cod_zona = $sLabel;
                  }

                  $sOpt     = ($sValue !== $sLabel) ? $sValue : $sLabel;
                  $sLookup .= "<option value=\"" . $sOpt . "\">" . $sLabel . "</option>";
              }
          }
          $aLookup  = $sLookup;
          $this->NM_ajax_info['fldList']['cod_zona'] = array(
                       'row'    => '',
               'type'    => 'select',
               'valList' => array($sTmpValue),
               'optList' => $aLookup,
              );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['cod_zona']['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['cod_zona']['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['cod_zona']['labList'] = $aLabel;
          }
   }

          //----- cod_provincia
   function ajax_return_values_cod_provincia($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("cod_provincia", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->cod_provincia);
              $aLookup = array();
              $this->_tmp_lookup_cod_provincia = $this->cod_provincia;

 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_cod_provincia']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_cod_provincia'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_cod_provincia']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_cod_provincia'] = array(); 
}
$aLookup[] = array(form_u_organizaciones_pack_protect_string('') => form_u_organizaciones_pack_protect_string('--Seleccione--'));
$_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_cod_provincia'][] = '';
if ($this->cod_zona != "")
{ 
   $this->nm_clear_val("cod_zona");
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 

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
              $aLookup[] = array(form_u_organizaciones_pack_protect_string($rs->fields[0]) => form_u_organizaciones_pack_protect_string(NM_charset_to_utf8($rs->fields[1])));
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
          $aLookupOrig = $aLookup;
          $sSelComp = "name=\"cod_provincia\"";
          if (isset($this->NM_ajax_info['select_html']['cod_provincia']) && !empty($this->NM_ajax_info['select_html']['cod_provincia']))
          {
              $sSelComp = $this->NM_ajax_info['select_html']['cod_provincia'];
          }
          $sLookup = '';
          if (empty($aLookup))
          {
              $aLookup[] = array('' => '');
          }
          foreach ($aLookup as $aOption)
          {
              foreach ($aOption as $sValue => $sLabel)
              {

                  if ($this->cod_provincia == $sValue)
                  {
                      $this->_tmp_lookup_cod_provincia = $sLabel;
                  }

                  $sOpt     = ($sValue !== $sLabel) ? $sValue : $sLabel;
                  $sLookup .= "<option value=\"" . $sOpt . "\">" . $sLabel . "</option>";
              }
          }
          $aLookup  = $sLookup;
          $this->NM_ajax_info['fldList']['cod_provincia'] = array(
                       'row'    => '',
               'type'    => 'select',
               'valList' => array($sTmpValue),
               'optList' => $aLookup,
              );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['cod_provincia']['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['cod_provincia']['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['cod_provincia']['labList'] = $aLabel;
          }
   }

          //----- cod_canton
   function ajax_return_values_cod_canton($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("cod_canton", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->cod_canton);
              $aLookup = array();
              $this->_tmp_lookup_cod_canton = $this->cod_canton;

 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_cod_canton']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_cod_canton'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_cod_canton']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_cod_canton'] = array(); 
}
$aLookup[] = array(form_u_organizaciones_pack_protect_string('') => form_u_organizaciones_pack_protect_string('--Seleccione--'));
$_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_cod_canton'][] = '';
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 

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
              $aLookup[] = array(form_u_organizaciones_pack_protect_string($rs->fields[0]) => form_u_organizaciones_pack_protect_string(NM_charset_to_utf8($rs->fields[1])));
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
          $aLookupOrig = $aLookup;
          $sSelComp = "name=\"cod_canton\"";
          if (isset($this->NM_ajax_info['select_html']['cod_canton']) && !empty($this->NM_ajax_info['select_html']['cod_canton']))
          {
              $sSelComp = $this->NM_ajax_info['select_html']['cod_canton'];
          }
          $sLookup = '';
          if (empty($aLookup))
          {
              $aLookup[] = array('' => '');
          }
          foreach ($aLookup as $aOption)
          {
              foreach ($aOption as $sValue => $sLabel)
              {

                  if ($this->cod_canton == $sValue)
                  {
                      $this->_tmp_lookup_cod_canton = $sLabel;
                  }

                  $sOpt     = ($sValue !== $sLabel) ? $sValue : $sLabel;
                  $sLookup .= "<option value=\"" . $sOpt . "\">" . $sLabel . "</option>";
              }
          }
          $aLookup  = $sLookup;
          $this->NM_ajax_info['fldList']['cod_canton'] = array(
                       'row'    => '',
               'type'    => 'select',
               'valList' => array($sTmpValue),
               'optList' => $aLookup,
              );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['cod_canton']['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['cod_canton']['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['cod_canton']['labList'] = $aLabel;
          }
   }

          //----- cod_parroquia
   function ajax_return_values_cod_parroquia($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("cod_parroquia", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->cod_parroquia);
              $aLookup = array();
              $this->_tmp_lookup_cod_parroquia = $this->cod_parroquia;

 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_cod_parroquia']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_cod_parroquia'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_cod_parroquia']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_cod_parroquia'] = array(); 
}
$aLookup[] = array(form_u_organizaciones_pack_protect_string('') => form_u_organizaciones_pack_protect_string('--Seleccione--'));
$_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_cod_parroquia'][] = '';
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 

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
              $aLookup[] = array(form_u_organizaciones_pack_protect_string($rs->fields[0]) => form_u_organizaciones_pack_protect_string(NM_charset_to_utf8($rs->fields[1])));
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
          $aLookupOrig = $aLookup;
          $sSelComp = "name=\"cod_parroquia\"";
          if (isset($this->NM_ajax_info['select_html']['cod_parroquia']) && !empty($this->NM_ajax_info['select_html']['cod_parroquia']))
          {
              $sSelComp = $this->NM_ajax_info['select_html']['cod_parroquia'];
          }
          $sLookup = '';
          if (empty($aLookup))
          {
              $aLookup[] = array('' => '');
          }
          foreach ($aLookup as $aOption)
          {
              foreach ($aOption as $sValue => $sLabel)
              {

                  if ($this->cod_parroquia == $sValue)
                  {
                      $this->_tmp_lookup_cod_parroquia = $sLabel;
                  }

                  $sOpt     = ($sValue !== $sLabel) ? $sValue : $sLabel;
                  $sLookup .= "<option value=\"" . $sOpt . "\">" . $sLabel . "</option>";
              }
          }
          $aLookup  = $sLookup;
          $this->NM_ajax_info['fldList']['cod_parroquia'] = array(
                       'row'    => '',
               'type'    => 'select',
               'valList' => array($sTmpValue),
               'optList' => $aLookup,
              );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['cod_parroquia']['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['cod_parroquia']['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['cod_parroquia']['labList'] = $aLabel;
          }
   }

          //----- direccion
   function ajax_return_values_direccion($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("direccion", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->direccion);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['direccion'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- telefono
   function ajax_return_values_telefono($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("telefono", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->telefono);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['telefono'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- celular
   function ajax_return_values_celular($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("celular", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->celular);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['celular'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- email
   function ajax_return_values_email($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("email", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->email);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['email'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- circuito_economico
   function ajax_return_values_circuito_economico($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("circuito_economico", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->circuito_economico);
              $aLookup = array();
              $this->_tmp_lookup_circuito_economico = $this->circuito_economico;

 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_circuito_economico']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_circuito_economico'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_circuito_economico']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_circuito_economico'] = array(); 
}
$aLookup[] = array(form_u_organizaciones_pack_protect_string('') => form_u_organizaciones_pack_protect_string('---Seleccione---'));
$_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_circuito_economico'][] = '';
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 

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
              $aLookup[] = array(form_u_organizaciones_pack_protect_string($rs->fields[0]) => form_u_organizaciones_pack_protect_string(NM_charset_to_utf8($rs->fields[1])));
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
          $aLookupOrig = $aLookup;
          $sSelComp = "name=\"circuito_economico\"";
          if (isset($this->NM_ajax_info['select_html']['circuito_economico']) && !empty($this->NM_ajax_info['select_html']['circuito_economico']))
          {
              $sSelComp = $this->NM_ajax_info['select_html']['circuito_economico'];
          }
          $sLookup = '';
          if (empty($aLookup))
          {
              $aLookup[] = array('' => '');
          }
          foreach ($aLookup as $aOption)
          {
              foreach ($aOption as $sValue => $sLabel)
              {

                  if ($this->circuito_economico == $sValue)
                  {
                      $this->_tmp_lookup_circuito_economico = $sLabel;
                  }

                  $sOpt     = ($sValue !== $sLabel) ? $sValue : $sLabel;
                  $sLookup .= "<option value=\"" . $sOpt . "\">" . $sLabel . "</option>";
              }
          }
          $aLookup  = $sLookup;
          $this->NM_ajax_info['fldList']['circuito_economico'] = array(
                       'row'    => '',
               'type'    => 'select',
               'valList' => array($sTmpValue),
               'optList' => $aLookup,
              );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['circuito_economico']['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['circuito_economico']['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['circuito_economico']['labList'] = $aLabel;
          }
   }

          //----- categoria_actividad_mp
   function ajax_return_values_categoria_actividad_mp($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("categoria_actividad_mp", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->categoria_actividad_mp);
              $aLookup = array();
              $this->_tmp_lookup_categoria_actividad_mp = $this->categoria_actividad_mp;

 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_categoria_actividad_mp']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_categoria_actividad_mp'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_categoria_actividad_mp']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_categoria_actividad_mp'] = array(); 
}
$aLookup[] = array(form_u_organizaciones_pack_protect_string('') => form_u_organizaciones_pack_protect_string('---Seleccione---'));
$_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_categoria_actividad_mp'][] = '';
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 

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
              $aLookup[] = array(form_u_organizaciones_pack_protect_string($rs->fields[0]) => form_u_organizaciones_pack_protect_string(NM_charset_to_utf8($rs->fields[1])));
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
          $aLookupOrig = $aLookup;
          $sSelComp = "name=\"categoria_actividad_mp\"";
          if (isset($this->NM_ajax_info['select_html']['categoria_actividad_mp']) && !empty($this->NM_ajax_info['select_html']['categoria_actividad_mp']))
          {
              $sSelComp = $this->NM_ajax_info['select_html']['categoria_actividad_mp'];
          }
          $sLookup = '';
          if (empty($aLookup))
          {
              $aLookup[] = array('' => '');
          }
          foreach ($aLookup as $aOption)
          {
              foreach ($aOption as $sValue => $sLabel)
              {

                  if ($this->categoria_actividad_mp == $sValue)
                  {
                      $this->_tmp_lookup_categoria_actividad_mp = $sLabel;
                  }

                  $sOpt     = ($sValue !== $sLabel) ? $sValue : $sLabel;
                  $sLookup .= "<option value=\"" . $sOpt . "\">" . $sLabel . "</option>";
              }
          }
          $aLookup  = $sLookup;
          $this->NM_ajax_info['fldList']['categoria_actividad_mp'] = array(
                       'row'    => '',
               'type'    => 'select',
               'valList' => array($sTmpValue),
               'optList' => $aLookup,
              );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['categoria_actividad_mp']['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['categoria_actividad_mp']['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['categoria_actividad_mp']['labList'] = $aLabel;
          }
   }

          //----- identificacion_actividad_mp
   function ajax_return_values_identificacion_actividad_mp($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("identificacion_actividad_mp", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->identificacion_actividad_mp);
              $aLookup = array();
              $this->_tmp_lookup_identificacion_actividad_mp = $this->identificacion_actividad_mp;

 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_identificacion_actividad_mp']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_identificacion_actividad_mp'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_identificacion_actividad_mp']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_identificacion_actividad_mp'] = array(); 
}
$aLookup[] = array(form_u_organizaciones_pack_protect_string('') => form_u_organizaciones_pack_protect_string('---Seleccione---'));
$_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_identificacion_actividad_mp'][] = '';
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 

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
              $aLookup[] = array(form_u_organizaciones_pack_protect_string($rs->fields[0]) => form_u_organizaciones_pack_protect_string(NM_charset_to_utf8($rs->fields[1])));
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
          $aLookupOrig = $aLookup;
          $sSelComp = "name=\"identificacion_actividad_mp\"";
          if (isset($this->NM_ajax_info['select_html']['identificacion_actividad_mp']) && !empty($this->NM_ajax_info['select_html']['identificacion_actividad_mp']))
          {
              $sSelComp = $this->NM_ajax_info['select_html']['identificacion_actividad_mp'];
          }
          $sLookup = '';
          if (empty($aLookup))
          {
              $aLookup[] = array('' => '');
          }
          foreach ($aLookup as $aOption)
          {
              foreach ($aOption as $sValue => $sLabel)
              {

                  if ($this->identificacion_actividad_mp == $sValue)
                  {
                      $this->_tmp_lookup_identificacion_actividad_mp = $sLabel;
                  }

                  $sOpt     = ($sValue !== $sLabel) ? $sValue : $sLabel;
                  $sLookup .= "<option value=\"" . $sOpt . "\">" . $sLabel . "</option>";
              }
          }
          $aLookup  = $sLookup;
          $this->NM_ajax_info['fldList']['identificacion_actividad_mp'] = array(
                       'row'    => '',
               'type'    => 'select',
               'valList' => array($sTmpValue),
               'optList' => $aLookup,
              );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['identificacion_actividad_mp']['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['identificacion_actividad_mp']['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['identificacion_actividad_mp']['labList'] = $aLabel;
          }
   }

          //----- producto_servicio
   function ajax_return_values_producto_servicio($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("producto_servicio", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->producto_servicio);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['producto_servicio'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- cedula_representante_legal
   function ajax_return_values_cedula_representante_legal($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("cedula_representante_legal", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->cedula_representante_legal);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['cedula_representante_legal'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- nombre_representante_legal
   function ajax_return_values_nombre_representante_legal($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("nombre_representante_legal", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->nombre_representante_legal);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['nombre_representante_legal'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- estado_organizacion
   function ajax_return_values_estado_organizacion($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("estado_organizacion", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->estado_organizacion);
              $aLookup = array();
              $this->_tmp_lookup_estado_organizacion = $this->estado_organizacion;

 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_estado_organizacion']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_estado_organizacion'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_estado_organizacion']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_estado_organizacion'] = array(); 
}
$aLookup[] = array(form_u_organizaciones_pack_protect_string('') => form_u_organizaciones_pack_protect_string('---Seleccione---'));
$_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_estado_organizacion'][] = '';
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 

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
              $aLookup[] = array(form_u_organizaciones_pack_protect_string($rs->fields[0]) => form_u_organizaciones_pack_protect_string(NM_charset_to_utf8($rs->fields[1])));
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
          $aLookupOrig = $aLookup;
          $sSelComp = "name=\"estado_organizacion\"";
          if (isset($this->NM_ajax_info['select_html']['estado_organizacion']) && !empty($this->NM_ajax_info['select_html']['estado_organizacion']))
          {
              $sSelComp = $this->NM_ajax_info['select_html']['estado_organizacion'];
          }
          $sLookup = '';
          if (empty($aLookup))
          {
              $aLookup[] = array('' => '');
          }
          foreach ($aLookup as $aOption)
          {
              foreach ($aOption as $sValue => $sLabel)
              {

                  if ($this->estado_organizacion == $sValue)
                  {
                      $this->_tmp_lookup_estado_organizacion = $sLabel;
                  }

                  $sOpt     = ($sValue !== $sLabel) ? $sValue : $sLabel;
                  $sLookup .= "<option value=\"" . $sOpt . "\">" . $sLabel . "</option>";
              }
          }
          $aLookup  = $sLookup;
          $this->NM_ajax_info['fldList']['estado_organizacion'] = array(
                       'row'    => '',
               'type'    => 'select',
               'valList' => array($sTmpValue),
               'optList' => $aLookup,
              );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['estado_organizacion']['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['estado_organizacion']['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['estado_organizacion']['labList'] = $aLabel;
          }
   }

          //----- num_resolucion
   function ajax_return_values_num_resolucion($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("num_resolucion", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->num_resolucion);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['num_resolucion'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- legalmente_constituida
   function ajax_return_values_legalmente_constituida($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("legalmente_constituida", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->legalmente_constituida);
              $aLookup = array();
              $this->_tmp_lookup_legalmente_constituida = $this->legalmente_constituida;

 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_legalmente_constituida']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_legalmente_constituida'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_legalmente_constituida']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_legalmente_constituida'] = array(); 
}
$aLookup[] = array(form_u_organizaciones_pack_protect_string('') => form_u_organizaciones_pack_protect_string('--Seleccione--'));
$_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_legalmente_constituida'][] = '';
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 

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
              $aLookup[] = array(form_u_organizaciones_pack_protect_string($rs->fields[0]) => form_u_organizaciones_pack_protect_string(NM_charset_to_utf8($rs->fields[1])));
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
          $aLookupOrig = $aLookup;
          $sSelComp = "name=\"legalmente_constituida\"";
          if (isset($this->NM_ajax_info['select_html']['legalmente_constituida']) && !empty($this->NM_ajax_info['select_html']['legalmente_constituida']))
          {
              $sSelComp = $this->NM_ajax_info['select_html']['legalmente_constituida'];
          }
          $sLookup = '';
          if (empty($aLookup))
          {
              $aLookup[] = array('' => '');
          }
          foreach ($aLookup as $aOption)
          {
              foreach ($aOption as $sValue => $sLabel)
              {

                  if ($this->legalmente_constituida == $sValue)
                  {
                      $this->_tmp_lookup_legalmente_constituida = $sLabel;
                  }

                  $sOpt     = ($sValue !== $sLabel) ? $sValue : $sLabel;
                  $sLookup .= "<option value=\"" . $sOpt . "\">" . $sLabel . "</option>";
              }
          }
          $aLookup  = $sLookup;
          $this->NM_ajax_info['fldList']['legalmente_constituida'] = array(
                       'row'    => '',
               'type'    => 'select',
               'valList' => array($sTmpValue),
               'optList' => $aLookup,
              );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['legalmente_constituida']['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['legalmente_constituida']['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['legalmente_constituida']['labList'] = $aLabel;
          }
   }

          //----- estado_juridico
   function ajax_return_values_estado_juridico($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("estado_juridico", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->estado_juridico);
              $aLookup = array();
              $this->_tmp_lookup_estado_juridico = $this->estado_juridico;

 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_estado_juridico']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_estado_juridico'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_estado_juridico']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_estado_juridico'] = array(); 
}
$aLookup[] = array(form_u_organizaciones_pack_protect_string('') => form_u_organizaciones_pack_protect_string('--Seleccione--'));
$_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['Lookup_estado_juridico'][] = '';
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 

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
              $aLookup[] = array(form_u_organizaciones_pack_protect_string($rs->fields[0]) => form_u_organizaciones_pack_protect_string(NM_charset_to_utf8($rs->fields[1])));
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
          $aLookupOrig = $aLookup;
          $sSelComp = "name=\"estado_juridico\"";
          if (isset($this->NM_ajax_info['select_html']['estado_juridico']) && !empty($this->NM_ajax_info['select_html']['estado_juridico']))
          {
              $sSelComp = $this->NM_ajax_info['select_html']['estado_juridico'];
          }
          $sLookup = '';
          if (empty($aLookup))
          {
              $aLookup[] = array('' => '');
          }
          foreach ($aLookup as $aOption)
          {
              foreach ($aOption as $sValue => $sLabel)
              {

                  if ($this->estado_juridico == $sValue)
                  {
                      $this->_tmp_lookup_estado_juridico = $sLabel;
                  }

                  $sOpt     = ($sValue !== $sLabel) ? $sValue : $sLabel;
                  $sLookup .= "<option value=\"" . $sOpt . "\">" . $sLabel . "</option>";
              }
          }
          $aLookup  = $sLookup;
          $this->NM_ajax_info['fldList']['estado_juridico'] = array(
                       'row'    => '',
               'type'    => 'select',
               'valList' => array($sTmpValue),
               'optList' => $aLookup,
              );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['estado_juridico']['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['estado_juridico']['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['estado_juridico']['labList'] = $aLabel;
          }
   }

          //----- num_socios
   function ajax_return_values_num_socios($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("num_socios", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->num_socios);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['num_socios'] = array(
                       'row'    => '',
               'type'    => 'label',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- user
   function ajax_return_values_user($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("user", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->user);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['user'] = array(
                       'row'    => '',
               'type'    => 'label',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- fecha_registro
   function ajax_return_values_fecha_registro($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("fecha_registro", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->fecha_registro);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['fecha_registro'] = array(
                       'row'    => '',
               'type'    => 'label',
               'valList' => array($this->fecha_registro . ' ' . $this->fecha_registro_hora),
              );
          }
   }

          //----- tipo_registro
   function ajax_return_values_tipo_registro($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("tipo_registro", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->tipo_registro);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['tipo_registro'] = array(
                       'row'    => '',
               'type'    => 'label',
               'valList' => array($sTmpValue),
              );
          }
   }

   function ajax_add_parameters()
   {
   } // ajax_add_parameters
  function nm_proc_onload($bFormat = true)
  {
      if (!$this->NM_ajax_flag || !isset($this->nmgp_refresh_fields)) {
      $_SESSION['scriptcase']['form_u_organizaciones']['contr_erro'] = 'on';
if (isset($this->NM_ajax_flag) && $this->NM_ajax_flag)
{ 
    $original_actividad = $this->actividad;
    $original_cod_canton = $this->cod_canton;
    $original_cod_parroquia = $this->cod_parroquia;
    $original_cod_provincia = $this->cod_provincia;
    $original_cod_zona = $this->cod_zona;
    $original_direccion = $this->direccion;
    $original_email = $this->email;
    $original_estado_org = $this->estado_org;
    $original_estado_organizacion = $this->estado_organizacion;
    $original_forma_organizacion = $this->forma_organizacion;
    $original_legalmente_constituida = $this->legalmente_constituida;
    $original_nombre_representante_legal = $this->nombre_representante_legal;
    $original_num_resolucion = $this->num_resolucion;
    $original_organizacion = $this->organizacion;
    $original_ruc = $this->ruc;
    $original_ruc_definitivo = $this->ruc_definitivo;
    $original_ruc_provisional = $this->ruc_provisional;
    $original_telefono = $this->telefono;
    $original_tipo = $this->tipo;
    $original_tipo_registro = $this->tipo_registro;
}
                                       if($this->ruc  != "")
	{ 
	$this->VisualizarBloques('on');		
	}
else
	{ 
	$this->VisualizarBloques('off');
	}


if($this->ruc_definitivo  != '' || $this->ruc_provisional  != '')
	{ 
	$this->VisualizarBloques('on');
		if($this->ruc_definitivo   != '')
			{ $this->ruc  = $this->ruc_definitivo ;}
		else if($this->ruc_provisional   != '')
			{ $this->ruc  = $this->ruc_provisional ;}
		echo "COD=".$this->cod_u_organizaciones ."<br>";
		$urlWs = "http://interoperabilidad.dinardap.gob.ec:7979/interoperador?wsdl";
		$parametros = array();
		$parametros['login'] = "iOpaDRIeps";
		$parametros['password'] = "6Tmq[]3ic}";
		
		$datosSRI  =$this->BuscarDatosSRI ($this->ConectarWsSRI ($urlWs,$parametros), $this->ruc , 186);	
		
		$datosSEPS =$this->BuscarDatosSEPS($this->ConectarWsSEPS($urlWs,$parametros), $this->ruc , 1119);
		
		
		
		if($datosSEPS['ruc'] != "")
		{ 	
			$estado_org_SEPS = strtolower($datosSEPS['estado_org']);
			$ruc_SEPS = $datosSEPS['ruc'];
			$organizacion_SEPS = $datosSEPS['razon_social'];
			$cod_provincia_SEPS =$this->RetornaCodProvincia($datosSEPS['provincia']);
			$cod_zona_SEPS =$this->RetornaCodZona($cod_provincia_SEPS);
			$cod_canton_SEPS =$this->RetornaCodCanton($cod_provincia_SEPS, $datosSEPS['canton']);
			$cod_parroquia_SEPS =$this->RetornaCodParroquia($cod_provincia_SEPS, $cod_canton_SEPS, $datosSEPS['parroquia']);
			$direccion_SEPS = $datosSEPS['calle'].'-'.$datosSEPS['numero'].'-'.$datosSEPS['interseccion'];
			$email_SEPS	= $datosSEPS['correo_org'];
			$telefono_SEPS = $datosSEPS['telefono'];
			$nombre_representante_legal_SEPS = $datosSEPS['nombre_representante_legal_SEPS'];
			$num_resolucion_SEPS = $datosSEPS['num_resolucion_seps'];
			if($num_resolucion_SEPS != "")
			{ 
				$tipo_SEPS = "org";
				$legalmente_constituida_SEPS = "si";
				$estado_organizacion_SEPS = "legalmente_constituida";
			}
			else
			{ 
				$tipo_SEPS = "";
				$legalmente_constituida_SEPS = "";
				$estado_organizacion_SEPS = "";
			}
			
			
			$tipo_organizacion_SEPS = $datosSEPS['tipo_organizacion'];
			
			if($tipo_organizacion_SEPS!= "")
			{ $forma_org_SEPS =$this->RetornaTipoOrganizacion($tipo_organizacion_SEPS);}
			else{ $forma_org_SEPS = -1;}
			
			$this->tipo_registro = "WEBSER";
			
			if($estado_org_SEPS != ""){ $this->estado_org  = $estado_org_SEPS;}
			if($ruc_SEPS != ""){ $this->ruc_definitivo  = $ruc_SEPS;}
			if($ruc_SEPS != ""){ $this->ruc_provisional  = $ruc_SEPS;}
			if($organizacion_SEPS != ""){ $this->organizacion  = $organizacion_SEPS;}
			if($cod_zona_SEPS != ""){ $this->cod_zona  = $cod_zona_SEPS;}
			if($cod_provincia_SEPS != ""){ $this->cod_provincia  = $cod_provincia_SEPS;}
			if($cod_canton_SEPS != ""){ $this->cod_canton  = $cod_canton_SEPS;}
			if($cod_parroquia_SEPS != ""){ $this->cod_parroquia  = $cod_parroquia_SEPS;}
			if($direccion_SEPS != ""){ $this->direccion  = $direccion_SEPS;}
			
			
			
			if($email_SEPS != ""){ $this->email  = $email_SEPS;}
			
			
			if($telefono_SEPS != ""){ $this->telefono  = $telefono_SEPS;}
			
			
			if($nombre_representante_legal_SEPS != "")
			{ $this->nombre_representante_legal  = $nombre_representante_legal_SEPS;}
			if($num_resolucion_SEPS != ""){ $this->num_resolucion  = $num_resolucion_SEPS;}
			
			if($num_resolucion_SEPS != "" or $this->num_resolucion != "")
			{ 
				
				
				if($tipo_SEPS!=""){ $this->tipo  = $tipo_SEPS;}
				if($legalmente_constituida_SEPS!=""){ $this->legalmente_constituida  = $legalmente_constituida_SEPS;}
				if($estado_organizacion_SEPS!=""){ $this->estado_organizacion  = $estado_organizacion_SEPS;}
			}
			
			
			
			if($forma_org_SEPS != "-1"){ $this->forma_organizacion  = $forma_org_SEPS;}
			
			if($this->tipo_registro  != ""){ $this->tipo_registro  = $this->tipo_registro;}
		}
		
		if($datosSRI['persona_sociedad']!="")
		{ 
			$persona_sociedad_SRI = $datosSRI['persona_sociedad'];
			$nombre_organizacion_SRI = $datosSRI['nombre_organizacion'];
			$actividad_economica_SRI = $datosSRI['actividad_economica'];
			$estado_organizacion_SRI = $datosSRI['estado_organizacion'];
			$forma_organizacion_SRI = $datosSRI['forma_organizacion'];
			$ubicacion_SRI = $datosSRI['ubicacion'];
			$direccion_SRI = $datosSRI['calle'].'-'.$datosSRI['numero'].'-'.$datosSRI['interseccion'];
			$datos =$this->CodigoUbicacion($ubicacion_SRI);
			$this->tipo_registro = "WEBSER";
			
			if(count($datos) == 9)
			{ 
				
				$cod_provincia_SRI = $datos[5];
				$cod_canton_SRI = $datos[6];
				$cod_parroquia_SRI = $datos[7];
				$cod_zona_SRI = $datos[8];
			}
						
			if($this->organizacion  == "" and $nombre_organizacion_SRI != "")
				{ $this->organizacion 	= $nombre_organizacion_SRI;}
			
			$this->actividad  = $actividad_economica_SRI;
					
			if($this->direccion  == "--" and $direccion_SRI != "")
				{ $this->direccion  = $direccion_SRI;}
				
			if($this->cod_zona  == "0" and $cod_zona_SRI != "")
				{ $this->cod_zona  = $cod_zona_SRI;}
			
			if($this->cod_provincia  == "0" and $cod_provincia_SRI !="")
				{ $this->cod_provincia  = $cod_provincia_SRI;}
			
			if($this->cod_canton  == "0" and $cod_canton_SRI !="")
				{ $this->cod_canton  = $cod_canton_SRI;}
			
			if($this->cod_parroquia  == "0" and $cod_parroquia_SRI !="")
				{ $this->cod_parroquia  = $cod_parroquia_SRI;}
			
			if($this->tipo_registro  == "" and $this->tipo_registro !="")
			{ $this->tipo_registro  = $this->tipo_registro;}
		}
	}

if (isset($this->NM_ajax_flag) && $this->NM_ajax_flag)
{ 
    if (($original_actividad != $this->actividad || (isset($bFlagRead_actividad) && $bFlagRead_actividad)))
    { 
        $this->ajax_return_values_actividad(true);
    }
    if (($original_cod_canton != $this->cod_canton || (isset($bFlagRead_cod_canton) && $bFlagRead_cod_canton)))
    { 
        $this->ajax_return_values_cod_canton(true);
    }
    if (($original_cod_parroquia != $this->cod_parroquia || (isset($bFlagRead_cod_parroquia) && $bFlagRead_cod_parroquia)))
    { 
        $this->ajax_return_values_cod_parroquia(true);
    }
    if (($original_cod_provincia != $this->cod_provincia || (isset($bFlagRead_cod_provincia) && $bFlagRead_cod_provincia)))
    { 
        $this->ajax_return_values_cod_provincia(true);
    }
    if (($original_cod_zona != $this->cod_zona || (isset($bFlagRead_cod_zona) && $bFlagRead_cod_zona)))
    { 
        $this->ajax_return_values_cod_zona(true);
    }
    if (($original_direccion != $this->direccion || (isset($bFlagRead_direccion) && $bFlagRead_direccion)))
    { 
        $this->ajax_return_values_direccion(true);
    }
    if (($original_email != $this->email || (isset($bFlagRead_email) && $bFlagRead_email)))
    { 
        $this->ajax_return_values_email(true);
    }
    if (($original_estado_org != $this->estado_org || (isset($bFlagRead_estado_org) && $bFlagRead_estado_org)))
    { 
        $this->ajax_return_values_estado_org(true);
    }
    if (($original_estado_organizacion != $this->estado_organizacion || (isset($bFlagRead_estado_organizacion) && $bFlagRead_estado_organizacion)))
    { 
        $this->ajax_return_values_estado_organizacion(true);
    }
    if (($original_forma_organizacion != $this->forma_organizacion || (isset($bFlagRead_forma_organizacion) && $bFlagRead_forma_organizacion)))
    { 
        $this->ajax_return_values_forma_organizacion(true);
    }
    if (($original_legalmente_constituida != $this->legalmente_constituida || (isset($bFlagRead_legalmente_constituida) && $bFlagRead_legalmente_constituida)))
    { 
        $this->ajax_return_values_legalmente_constituida(true);
    }
    if (($original_nombre_representante_legal != $this->nombre_representante_legal || (isset($bFlagRead_nombre_representante_legal) && $bFlagRead_nombre_representante_legal)))
    { 
        $this->ajax_return_values_nombre_representante_legal(true);
    }
    if (($original_num_resolucion != $this->num_resolucion || (isset($bFlagRead_num_resolucion) && $bFlagRead_num_resolucion)))
    { 
        $this->ajax_return_values_num_resolucion(true);
    }
    if (($original_organizacion != $this->organizacion || (isset($bFlagRead_organizacion) && $bFlagRead_organizacion)))
    { 
        $this->ajax_return_values_organizacion(true);
    }
    if (($original_ruc != $this->ruc || (isset($bFlagRead_ruc) && $bFlagRead_ruc)))
    { 
        $this->ajax_return_values_ruc(true);
    }
    if (($original_ruc_definitivo != $this->ruc_definitivo || (isset($bFlagRead_ruc_definitivo) && $bFlagRead_ruc_definitivo)))
    { 
        $this->ajax_return_values_ruc_definitivo(true);
    }
    if (($original_ruc_provisional != $this->ruc_provisional || (isset($bFlagRead_ruc_provisional) && $bFlagRead_ruc_provisional)))
    { 
        $this->ajax_return_values_ruc_provisional(true);
    }
    if (($original_telefono != $this->telefono || (isset($bFlagRead_telefono) && $bFlagRead_telefono)))
    { 
        $this->ajax_return_values_telefono(true);
    }
    if (($original_tipo != $this->tipo || (isset($bFlagRead_tipo) && $bFlagRead_tipo)))
    { 
        $this->ajax_return_values_tipo(true);
    }
    if (($original_tipo_registro != $this->tipo_registro || (isset($bFlagRead_tipo_registro) && $bFlagRead_tipo_registro)))
    { 
        $this->ajax_return_values_tipo_registro(true);
    }
}
$_SESSION['scriptcase']['form_u_organizaciones']['contr_erro'] = 'off'; 
      }
      $this->nm_guardar_campos();
      if ($bFormat) $this->nm_formatar_campos();
  }
//
//----------------------------------------------------
//-----> 
//----------------------------------------------------
//----------- 

   function controle_navegacao()
   {
      global $sc_where;

          if (false && !isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['total']))
          {
               $sc_where_pos = " WHERE ((cod_u_organizaciones < $this->cod_u_organizaciones))";
               if ('' != $sc_where)
               {
                   if ('where ' == strtolower(substr(trim($sc_where), 0, 6)))
                   {
                       $sc_where = substr(trim($sc_where), 6);
                   }
                   if ('and ' == strtolower(substr(trim($sc_where), 0, 4)))
                   {
                       $sc_where = substr(trim($sc_where), 4);
                   }
                   $sc_where_pos .= ' AND (' . $sc_where . ')';
                   $sc_where = ' WHERE ' . $sc_where;
               }
               $nmgp_sel_count = 'SELECT COUNT(*) FROM ' . $this->Ini->nm_tabela . $sc_where;
               $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_sel_count; 
               $rsc = $this->Db->Execute($nmgp_sel_count); 
               if ($rsc === false && !$rsc->EOF)  
               { 
                   $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
                   exit; 
               }  
               $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['total'] = $rsc->fields[0];
               $rsc->Close(); 
               if ('' != $this->cod_u_organizaciones)
               {
               $nmgp_sel_count = 'SELECT COUNT(*) FROM ' . $this->Ini->nm_tabela . $sc_where_pos;
               $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_sel_count; 
               $rsc = $this->Db->Execute($nmgp_sel_count); 
               if ($rsc === false && !$rsc->EOF)  
               { 
                   $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
                   exit; 
               }  
               $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['inicio'] = $rsc->fields[0];
               if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['inicio'] < 0)
               {
                   $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['inicio'] = 0;
               }
               $rsc->Close(); 
               }
               else
               {
                   $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['inicio'] = 0;
               }
          }
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['qt_reg_grid'] = 1;
          if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['inicio']))
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['inicio'] = 0;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['final']  = 0;
          }
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['opcao'] = $this->NM_ajax_info['param']['nmgp_opcao'];
          if (in_array($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['opcao'], array('incluir', 'alterar', 'excluir')))
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['opcao'] = '';
          }
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['opcao'] == 'inicio')
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['inicio'] = 0;
          }
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['opcao'] == 'retorna')
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['inicio'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['inicio'] - $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['qt_reg_grid'];
              if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['inicio'] < 0)
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['inicio'] = 0 ;
              }
          }
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['opcao'] == 'avanca' && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['total']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['total'] > $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['final']))
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['inicio'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['final'];
          }
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['opcao'] == 'final')
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['inicio'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['total'] - $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['qt_reg_grid'];
              if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['inicio'] < 0)
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['inicio'] = 0;
              }
          }
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['final'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['inicio'] + $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['qt_reg_grid'];
          $this->Nav_permite_ret = 0 != $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['inicio'];
          $this->Nav_permite_ava = $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['total'] != $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['final'];
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['opcao'] = '';

   }

   function temRegistros($sWhere)
   {
       if ('' == $sWhere)
       {
           return false;
       }
       $nmgp_sel_count = 'SELECT COUNT(*) FROM ' . $this->Ini->nm_tabela . ' WHERE ' . $sWhere;
       $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_sel_count; 
       $rsc = $this->Db->Execute($nmgp_sel_count); 
       if ($rsc === false && !$rsc->EOF)
       {
           $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg());
           exit; 
       }
       $iTotal = $rsc->fields[0];
       $rsc->Close();
       return 0 < $iTotal;
   } // temRegistros

   function deletaRegistros($sWhere)
   {
       if ('' == $sWhere)
       {
           return false;
       }
       $nmgp_sel_count = 'DELETE FROM ' . $this->Ini->nm_tabela . ' WHERE ' . $sWhere;
       $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_sel_count; 
       $rsc = $this->Db->Execute($nmgp_sel_count); 
       $bResult = $rsc;
       $rsc->Close();
       return $bResult == true;
   } // deletaRegistros

   function nm_acessa_banco() 
   { 
      global  $nm_form_submit, $teste_validade, $sc_where;
 
      $NM_val_null = array();
      $NM_val_form = array();
      $this->sc_erro_insert = "";
      $this->sc_erro_update = "";
      $this->sc_erro_delete = "";
      if (!empty($this->sc_force_zero))
      {
          foreach ($this->sc_force_zero as $i_force_zero => $sc_force_zero_field)
          {
              eval('if ($this->' . $sc_force_zero_field . ' == 0) {$this->' . $sc_force_zero_field . ' = "";}');
          }
      }
      $this->sc_force_zero = array();
      $SC_tem_cmp_update = true; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $salva_opcao = $this->nmgp_opcao; 
      if ($this->sc_evento != "novo") 
      { 
          $this->sc_evento = ""; 
      } 
      if (!in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access) && !$this->Ini->sc_tem_trans_banco && in_array($this->nmgp_opcao, array('excluir', 'incluir', 'alterar')))
      { 
          $this->Db->BeginTrans(); 
          $this->Ini->sc_tem_trans_banco = true; 
      } 
      if ('incluir' == $this->nmgp_opcao && empty($this->user)) {$this->user = "" . $_SESSION['name'] . ""; $NM_val_null[] = "user";}  
      $NM_val_form['ruc'] = $this->ruc;
      $NM_val_form['btnbuscar'] = $this->btnbuscar;
      $NM_val_form['ruc_definitivo'] = $this->ruc_definitivo;
      $NM_val_form['ruc_provisional'] = $this->ruc_provisional;
      $NM_val_form['organizacion'] = $this->organizacion;
      $NM_val_form['actividad'] = $this->actividad;
      $NM_val_form['tipo'] = $this->tipo;
      $NM_val_form['forma_organizacion'] = $this->forma_organizacion;
      $NM_val_form['estado_org'] = $this->estado_org;
      $NM_val_form['cod_zona'] = $this->cod_zona;
      $NM_val_form['cod_provincia'] = $this->cod_provincia;
      $NM_val_form['cod_canton'] = $this->cod_canton;
      $NM_val_form['cod_parroquia'] = $this->cod_parroquia;
      $NM_val_form['direccion'] = $this->direccion;
      $NM_val_form['telefono'] = $this->telefono;
      $NM_val_form['celular'] = $this->celular;
      $NM_val_form['email'] = $this->email;
      $NM_val_form['circuito_economico'] = $this->circuito_economico;
      $NM_val_form['categoria_actividad_mp'] = $this->categoria_actividad_mp;
      $NM_val_form['identificacion_actividad_mp'] = $this->identificacion_actividad_mp;
      $NM_val_form['producto_servicio'] = $this->producto_servicio;
      $NM_val_form['cedula_representante_legal'] = $this->cedula_representante_legal;
      $NM_val_form['nombre_representante_legal'] = $this->nombre_representante_legal;
      $NM_val_form['estado_organizacion'] = $this->estado_organizacion;
      $NM_val_form['num_resolucion'] = $this->num_resolucion;
      $NM_val_form['legalmente_constituida'] = $this->legalmente_constituida;
      $NM_val_form['estado_juridico'] = $this->estado_juridico;
      $NM_val_form['num_socios'] = $this->num_socios;
      $NM_val_form['user'] = $this->user;
      $NM_val_form['fecha_registro'] = $this->fecha_registro;
      $NM_val_form['tipo_registro'] = $this->tipo_registro;
      $NM_val_form['cod_u_organizaciones'] = $this->cod_u_organizaciones;
      $NM_val_form['sc_field_0'] = $this->sc_field_0;
      $NM_val_form['telefono2'] = $this->telefono2;
      $NM_val_form['registro_sanitario'] = $this->registro_sanitario;
      $NM_val_form['seps_sector'] = $this->seps_sector;
      $NM_val_form['seps_nivel'] = $this->seps_nivel;
      $NM_val_form['seps_grupo_organizacion'] = $this->seps_grupo_organizacion;
      $NM_val_form['seps_clase_organizacion'] = $this->seps_clase_organizacion;
      $NM_val_form['zona_procedencia'] = $this->zona_procedencia;
      $NM_val_form['provincia_procedencia'] = $this->provincia_procedencia;
      $NM_val_form['antiguedad_im'] = $this->antiguedad_im;
      if ($this->cod_u_organizaciones == "")  
      { 
          $this->cod_u_organizaciones = 0;
      } 
      if ($this->num_socios == "")  
      { 
          $this->num_socios = 0;
          $this->sc_force_zero[] = 'num_socios';
      } 
      if ($this->cod_zona == "")  
      { 
          $this->cod_zona = 0;
          $this->sc_force_zero[] = 'cod_zona';
      } 
      if ($this->seps_nivel == "")  
      { 
          $this->seps_nivel = 0;
          $this->sc_force_zero[] = 'seps_nivel';
      } 
      $nm_bases_lob_geral = array_merge($this->Ini->nm_bases_oracle, $this->Ini->nm_bases_ibase, $this->Ini->nm_bases_informix);
      if ($this->nmgp_opcao == "alterar" || $this->nmgp_opcao == "incluir") 
      {
          $this->estado_org = substr($this->Db->qstr($this->estado_org), 1, -1); 
          if ($this->estado_org == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->estado_org = "null"; 
              $NM_val_null[] = "estado_org";
          } 
          $this->ruc_provisional = substr($this->Db->qstr($this->ruc_provisional), 1, -1); 
          if ($this->ruc_provisional == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->ruc_provisional = "null"; 
              $NM_val_null[] = "ruc_provisional";
          } 
          $this->ruc_definitivo = substr($this->Db->qstr($this->ruc_definitivo), 1, -1); 
          if ($this->ruc_definitivo == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->ruc_definitivo = "null"; 
              $NM_val_null[] = "ruc_definitivo";
          } 
          $this->organizacion = substr($this->Db->qstr($this->organizacion), 1, -1); 
          if ($this->organizacion == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->organizacion = "null"; 
              $NM_val_null[] = "organizacion";
          } 
          $this->actividad = substr($this->Db->qstr($this->actividad), 1, -1); 
          if ($this->actividad == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->actividad = "null"; 
              $NM_val_null[] = "actividad";
          } 
          $this->categoria_actividad_mp = substr($this->Db->qstr($this->categoria_actividad_mp), 1, -1); 
          if ($this->categoria_actividad_mp == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->categoria_actividad_mp = "null"; 
              $NM_val_null[] = "categoria_actividad_mp";
          } 
          $this->identificacion_actividad_mp = substr($this->Db->qstr($this->identificacion_actividad_mp), 1, -1); 
          if ($this->identificacion_actividad_mp == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->identificacion_actividad_mp = "null"; 
              $NM_val_null[] = "identificacion_actividad_mp";
          } 
          $this->forma_organizacion = substr($this->Db->qstr($this->forma_organizacion), 1, -1); 
          if ($this->forma_organizacion == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->forma_organizacion = "null"; 
              $NM_val_null[] = "forma_organizacion";
          } 
          $this->estado_organizacion = substr($this->Db->qstr($this->estado_organizacion), 1, -1); 
          if ($this->estado_organizacion == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->estado_organizacion = "null"; 
              $NM_val_null[] = "estado_organizacion";
          } 
          $this->email = substr($this->Db->qstr($this->email), 1, -1); 
          if ($this->email == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->email = "null"; 
              $NM_val_null[] = "email";
          } 
          $this->telefono = substr($this->Db->qstr($this->telefono), 1, -1); 
          if ($this->telefono == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->telefono = "null"; 
              $NM_val_null[] = "telefono";
          } 
          $this->tipo = substr($this->Db->qstr($this->tipo), 1, -1); 
          if ($this->tipo == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->tipo = "null"; 
              $NM_val_null[] = "tipo";
          } 
          $this->circuito_economico = substr($this->Db->qstr($this->circuito_economico), 1, -1); 
          if ($this->circuito_economico == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->circuito_economico = "null"; 
              $NM_val_null[] = "circuito_economico";
          } 
          $this->sc_field_0 = substr($this->Db->qstr($this->sc_field_0), 1, -1); 
          if ($this->sc_field_0 == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->sc_field_0 = "null"; 
              $NM_val_null[] = "sc_field_0";
          } 
          if ($this->fecha_registro == "")  
          { 
              $this->fecha_registro = "null"; 
              $NM_val_null[] = "fecha_registro";
          } 
          $this->user = substr($this->Db->qstr($this->user), 1, -1); 
          if ($this->user == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->user = "null"; 
              $NM_val_null[] = "user";
          } 
          $this->cedula_representante_legal = substr($this->Db->qstr($this->cedula_representante_legal), 1, -1); 
          if ($this->cedula_representante_legal == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->cedula_representante_legal = "null"; 
              $NM_val_null[] = "cedula_representante_legal";
          } 
          $this->nombre_representante_legal = substr($this->Db->qstr($this->nombre_representante_legal), 1, -1); 
          if ($this->nombre_representante_legal == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->nombre_representante_legal = "null"; 
              $NM_val_null[] = "nombre_representante_legal";
          } 
          $this->cod_provincia = substr($this->Db->qstr($this->cod_provincia), 1, -1); 
          if ($this->cod_provincia == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->cod_provincia = "null"; 
              $NM_val_null[] = "cod_provincia";
          } 
          $this->cod_canton = substr($this->Db->qstr($this->cod_canton), 1, -1); 
          if ($this->cod_canton == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->cod_canton = "null"; 
              $NM_val_null[] = "cod_canton";
          } 
          $this->cod_parroquia = substr($this->Db->qstr($this->cod_parroquia), 1, -1); 
          if ($this->cod_parroquia == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->cod_parroquia = "null"; 
              $NM_val_null[] = "cod_parroquia";
          } 
          $this->telefono2 = substr($this->Db->qstr($this->telefono2), 1, -1); 
          if ($this->telefono2 == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->telefono2 = "null"; 
              $NM_val_null[] = "telefono2";
          } 
          $this->direccion = substr($this->Db->qstr($this->direccion), 1, -1); 
          if ($this->direccion == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->direccion = "null"; 
              $NM_val_null[] = "direccion";
          } 
          $this->registro_sanitario = substr($this->Db->qstr($this->registro_sanitario), 1, -1); 
          if ($this->registro_sanitario == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->registro_sanitario = "null"; 
              $NM_val_null[] = "registro_sanitario";
          } 
          $this->celular = substr($this->Db->qstr($this->celular), 1, -1); 
          if ($this->celular == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->celular = "null"; 
              $NM_val_null[] = "celular";
          } 
          $this->num_resolucion = substr($this->Db->qstr($this->num_resolucion), 1, -1); 
          if ($this->num_resolucion == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->num_resolucion = "null"; 
              $NM_val_null[] = "num_resolucion";
          } 
          $this->estado_juridico = substr($this->Db->qstr($this->estado_juridico), 1, -1); 
          if ($this->estado_juridico == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->estado_juridico = "null"; 
              $NM_val_null[] = "estado_juridico";
          } 
          $this->producto_servicio = substr($this->Db->qstr($this->producto_servicio), 1, -1); 
          if ($this->producto_servicio == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->producto_servicio = "null"; 
              $NM_val_null[] = "producto_servicio";
          } 
          $this->seps_sector = substr($this->Db->qstr($this->seps_sector), 1, -1); 
          if ($this->seps_sector == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->seps_sector = "null"; 
              $NM_val_null[] = "seps_sector";
          } 
          $this->seps_grupo_organizacion = substr($this->Db->qstr($this->seps_grupo_organizacion), 1, -1); 
          if ($this->seps_grupo_organizacion == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->seps_grupo_organizacion = "null"; 
              $NM_val_null[] = "seps_grupo_organizacion";
          } 
          $this->seps_clase_organizacion = substr($this->Db->qstr($this->seps_clase_organizacion), 1, -1); 
          if ($this->seps_clase_organizacion == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->seps_clase_organizacion = "null"; 
              $NM_val_null[] = "seps_clase_organizacion";
          } 
          $this->legalmente_constituida = substr($this->Db->qstr($this->legalmente_constituida), 1, -1); 
          if ($this->legalmente_constituida == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->legalmente_constituida = "null"; 
              $NM_val_null[] = "legalmente_constituida";
          } 
          $this->zona_procedencia = substr($this->Db->qstr($this->zona_procedencia), 1, -1); 
          if ($this->zona_procedencia == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->zona_procedencia = "null"; 
              $NM_val_null[] = "zona_procedencia";
          } 
          $this->provincia_procedencia = substr($this->Db->qstr($this->provincia_procedencia), 1, -1); 
          if ($this->provincia_procedencia == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->provincia_procedencia = "null"; 
              $NM_val_null[] = "provincia_procedencia";
          } 
          $this->tipo_registro = substr($this->Db->qstr($this->tipo_registro), 1, -1); 
          if ($this->tipo_registro == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->tipo_registro = "null"; 
              $NM_val_null[] = "tipo_registro";
          } 
          $this->antiguedad_im = substr($this->Db->qstr($this->antiguedad_im), 1, -1); 
          if ($this->antiguedad_im == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->antiguedad_im = "null"; 
              $NM_val_null[] = "antiguedad_im";
          } 
      }
      if ($this->nmgp_opcao == "alterar") 
      {
          $SC_ex_update = true; 
          $SC_ex_upd_or = true; 
          if (($this->Embutida_form || $this->Embutida_multi) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['foreign_key']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['foreign_key']))
          {
              foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['foreign_key'] as $sFKName => $sFKValue)
              {
                   if (isset($this->sc_conv_var[$sFKName]))
                   {
                       $sFKName = $this->sc_conv_var[$sFKName];
                   }
                  eval("\$this->" . $sFKName . " = \"" . $sFKValue . "\";");
              }
          }
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) from " . $this->Ini->nm_tabela . " where cod_u_organizaciones = $this->cod_u_organizaciones ";
              $rs1 = $this->Db->Execute("select count(*) from " . $this->Ini->nm_tabela . " where cod_u_organizaciones = $this->cod_u_organizaciones "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) from " . $this->Ini->nm_tabela . " where cod_u_organizaciones = $this->cod_u_organizaciones ";
              $rs1 = $this->Db->Execute("select count(*) from " . $this->Ini->nm_tabela . " where cod_u_organizaciones = $this->cod_u_organizaciones "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) from " . $this->Ini->nm_tabela . " where cod_u_organizaciones = $this->cod_u_organizaciones ";
              $rs1 = $this->Db->Execute("select count(*) from " . $this->Ini->nm_tabela . " where cod_u_organizaciones = $this->cod_u_organizaciones "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) from " . $this->Ini->nm_tabela . " where cod_u_organizaciones = $this->cod_u_organizaciones ";
              $rs1 = $this->Db->Execute("select count(*) from " . $this->Ini->nm_tabela . " where cod_u_organizaciones = $this->cod_u_organizaciones "); 
          }  
          else  
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) from " . $this->Ini->nm_tabela . " where cod_u_organizaciones = $this->cod_u_organizaciones ";
              $rs1 = $this->Db->Execute("select count(*) from " . $this->Ini->nm_tabela . " where cod_u_organizaciones = $this->cod_u_organizaciones "); 
          }  
          if ($rs1 === false)  
          { 
              $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
              if ($this->NM_ajax_flag)
              {
                 form_u_organizaciones_pack_ajax_response();
              }
              exit; 
          }  
          $bUpdateOk = true;
          $tmp_result = (int) $rs1->fields[0]; 
          if ($tmp_result != 1) 
          { 
              $this->Erro->mensagem (__FILE__, __LINE__, "critica", $this->Ini->Nm_lang['lang_errm_nfnd']); 
              $this->nmgp_opcao = "nada"; 
              $bUpdateOk = false;
              $this->sc_evento = 'update';
          } 
          $aUpdateOk = array();
          $bUpdateOk = $bUpdateOk && empty($aUpdateOk);
          if ($bUpdateOk)
          { 
              $rs1->Close(); 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
              { 
                  $comando = "UPDATE " . $this->Ini->nm_tabela . " SET estado_org = '$this->estado_org', ruc_provisional = '$this->ruc_provisional', ruc_definitivo = '$this->ruc_definitivo', organizacion = '$this->organizacion', actividad = '$this->actividad', categoria_actividad_mp = '$this->categoria_actividad_mp', identificacion_actividad_mp = '$this->identificacion_actividad_mp', forma_organizacion = '$this->forma_organizacion', estado_organizacion = '$this->estado_organizacion', num_socios = $this->num_socios, email = '$this->email', telefono = '$this->telefono', tipo = '$this->tipo', circuito_economico = '$this->circuito_economico', user = '$this->user', cedula_representante_legal = '$this->cedula_representante_legal', nombre_representante_legal = '$this->nombre_representante_legal', cod_zona = $this->cod_zona, cod_provincia = '$this->cod_provincia', cod_canton = '$this->cod_canton', cod_parroquia = '$this->cod_parroquia', direccion = '$this->direccion', celular = '$this->celular', num_resolucion = '$this->num_resolucion', estado_juridico = '$this->estado_juridico', producto_servicio = '$this->producto_servicio', legalmente_constituida = '$this->legalmente_constituida', tipo_registro = '$this->tipo_registro'";  
              } 
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
              { 
                  $comando = "UPDATE " . $this->Ini->nm_tabela . " SET estado_org = '$this->estado_org', ruc_provisional = '$this->ruc_provisional', ruc_definitivo = '$this->ruc_definitivo', organizacion = '$this->organizacion', actividad = '$this->actividad', categoria_actividad_mp = '$this->categoria_actividad_mp', identificacion_actividad_mp = '$this->identificacion_actividad_mp', forma_organizacion = '$this->forma_organizacion', estado_organizacion = '$this->estado_organizacion', num_socios = $this->num_socios, email = '$this->email', telefono = '$this->telefono', tipo = '$this->tipo', circuito_economico = '$this->circuito_economico', user = '$this->user', cedula_representante_legal = '$this->cedula_representante_legal', nombre_representante_legal = '$this->nombre_representante_legal', cod_zona = $this->cod_zona, cod_provincia = '$this->cod_provincia', cod_canton = '$this->cod_canton', cod_parroquia = '$this->cod_parroquia', direccion = '$this->direccion', celular = '$this->celular', num_resolucion = '$this->num_resolucion', estado_juridico = '$this->estado_juridico', producto_servicio = '$this->producto_servicio', legalmente_constituida = '$this->legalmente_constituida', tipo_registro = '$this->tipo_registro'";  
              } 
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
              { 
                  $comando_oracle = "UPDATE " . $this->Ini->nm_tabela . " SET estado_org = '$this->estado_org', ruc_provisional = '$this->ruc_provisional', ruc_definitivo = '$this->ruc_definitivo', organizacion = '$this->organizacion', actividad = '$this->actividad', categoria_actividad_mp = '$this->categoria_actividad_mp', identificacion_actividad_mp = '$this->identificacion_actividad_mp', forma_organizacion = '$this->forma_organizacion', estado_organizacion = '$this->estado_organizacion', num_socios = $this->num_socios, email = '$this->email', telefono = '$this->telefono', tipo = '$this->tipo', circuito_economico = '$this->circuito_economico', user = '$this->user', cedula_representante_legal = '$this->cedula_representante_legal', nombre_representante_legal = '$this->nombre_representante_legal', cod_zona = $this->cod_zona, cod_provincia = '$this->cod_provincia', cod_canton = '$this->cod_canton', cod_parroquia = '$this->cod_parroquia', direccion = '$this->direccion', celular = '$this->celular', num_resolucion = '$this->num_resolucion', estado_juridico = '$this->estado_juridico', producto_servicio = '$this->producto_servicio', legalmente_constituida = '$this->legalmente_constituida', tipo_registro = '$this->tipo_registro'";  
              } 
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              { 
                  $comando_oracle = "UPDATE " . $this->Ini->nm_tabela . " SET estado_org = '$this->estado_org', ruc_provisional = '$this->ruc_provisional', ruc_definitivo = '$this->ruc_definitivo', organizacion = '$this->organizacion', actividad = '$this->actividad', categoria_actividad_mp = '$this->categoria_actividad_mp', identificacion_actividad_mp = '$this->identificacion_actividad_mp', forma_organizacion = '$this->forma_organizacion', estado_organizacion = '$this->estado_organizacion', num_socios = $this->num_socios, email = '$this->email', telefono = '$this->telefono', tipo = '$this->tipo', circuito_economico = '$this->circuito_economico', user = '$this->user', cedula_representante_legal = '$this->cedula_representante_legal', nombre_representante_legal = '$this->nombre_representante_legal', cod_zona = $this->cod_zona, cod_provincia = '$this->cod_provincia', cod_canton = '$this->cod_canton', cod_parroquia = '$this->cod_parroquia', direccion = '$this->direccion', celular = '$this->celular', num_resolucion = '$this->num_resolucion', estado_juridico = '$this->estado_juridico', producto_servicio = '$this->producto_servicio', legalmente_constituida = '$this->legalmente_constituida', tipo_registro = '$this->tipo_registro'";  
              } 
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
              { 
                  $comando_oracle = "UPDATE " . $this->Ini->nm_tabela . " SET estado_org = '$this->estado_org', ruc_provisional = '$this->ruc_provisional', ruc_definitivo = '$this->ruc_definitivo', organizacion = '$this->organizacion', actividad = '$this->actividad', categoria_actividad_mp = '$this->categoria_actividad_mp', identificacion_actividad_mp = '$this->identificacion_actividad_mp', forma_organizacion = '$this->forma_organizacion', estado_organizacion = '$this->estado_organizacion', num_socios = $this->num_socios, email = '$this->email', telefono = '$this->telefono', tipo = '$this->tipo', circuito_economico = '$this->circuito_economico', user = '$this->user', cedula_representante_legal = '$this->cedula_representante_legal', nombre_representante_legal = '$this->nombre_representante_legal', cod_zona = $this->cod_zona, cod_provincia = '$this->cod_provincia', cod_canton = '$this->cod_canton', cod_parroquia = '$this->cod_parroquia', direccion = '$this->direccion', celular = '$this->celular', num_resolucion = '$this->num_resolucion', estado_juridico = '$this->estado_juridico', producto_servicio = '$this->producto_servicio', legalmente_constituida = '$this->legalmente_constituida', tipo_registro = '$this->tipo_registro'";  
              } 
              else 
              { 
                  $comando = "UPDATE " . $this->Ini->nm_tabela . " SET estado_org = '$this->estado_org', ruc_provisional = '$this->ruc_provisional', ruc_definitivo = '$this->ruc_definitivo', organizacion = '$this->organizacion', actividad = '$this->actividad', categoria_actividad_mp = '$this->categoria_actividad_mp', identificacion_actividad_mp = '$this->identificacion_actividad_mp', forma_organizacion = '$this->forma_organizacion', estado_organizacion = '$this->estado_organizacion', num_socios = $this->num_socios, email = '$this->email', telefono = '$this->telefono', tipo = '$this->tipo', circuito_economico = '$this->circuito_economico', user = '$this->user', cedula_representante_legal = '$this->cedula_representante_legal', nombre_representante_legal = '$this->nombre_representante_legal', cod_zona = $this->cod_zona, cod_provincia = '$this->cod_provincia', cod_canton = '$this->cod_canton', cod_parroquia = '$this->cod_parroquia', direccion = '$this->direccion', celular = '$this->celular', num_resolucion = '$this->num_resolucion', estado_juridico = '$this->estado_juridico', producto_servicio = '$this->producto_servicio', legalmente_constituida = '$this->legalmente_constituida', tipo_registro = '$this->tipo_registro'";  
              } 
              if (isset($NM_val_form['sc_field_0']) && $NM_val_form['sc_field_0'] != $this->nmgp_dados_select['sc_field_0']) 
              { 
                  if ($SC_ex_update || $SC_tem_cmp_update) 
                  { 
                      $comando        .= ","; 
                      $comando_oracle .= ","; 
                  } 
                  $comando        .= " 120_organizaciones = '$this->sc_field_0'"; 
                  $comando_oracle        .= " 120_organizaciones = '$this->sc_field_0'"; 
                  $SC_ex_update = true; 
                  $SC_ex_upd_or = true; 
              } 
              if (isset($NM_val_form['telefono2']) && $NM_val_form['telefono2'] != $this->nmgp_dados_select['telefono2']) 
              { 
                  if ($SC_ex_update || $SC_tem_cmp_update) 
                  { 
                      $comando        .= ","; 
                      $comando_oracle .= ","; 
                  } 
                  $comando        .= " telefono2 = '$this->telefono2'"; 
                  $comando_oracle        .= " telefono2 = '$this->telefono2'"; 
                  $SC_ex_update = true; 
                  $SC_ex_upd_or = true; 
              } 
              if (isset($NM_val_form['registro_sanitario']) && $NM_val_form['registro_sanitario'] != $this->nmgp_dados_select['registro_sanitario']) 
              { 
                  if ($SC_ex_update || $SC_tem_cmp_update) 
                  { 
                      $comando        .= ","; 
                      $comando_oracle .= ","; 
                  } 
                  $comando        .= " registro_sanitario = '$this->registro_sanitario'"; 
                  $comando_oracle        .= " registro_sanitario = '$this->registro_sanitario'"; 
                  $SC_ex_update = true; 
                  $SC_ex_upd_or = true; 
              } 
              if (isset($NM_val_form['seps_sector']) && $NM_val_form['seps_sector'] != $this->nmgp_dados_select['seps_sector']) 
              { 
                  if ($SC_ex_update || $SC_tem_cmp_update) 
                  { 
                      $comando        .= ","; 
                      $comando_oracle .= ","; 
                  } 
                  $comando        .= " seps_sector = '$this->seps_sector'"; 
                  $comando_oracle        .= " seps_sector = '$this->seps_sector'"; 
                  $SC_ex_update = true; 
                  $SC_ex_upd_or = true; 
              } 
              if (isset($NM_val_form['seps_nivel']) && $NM_val_form['seps_nivel'] != $this->nmgp_dados_select['seps_nivel']) 
              { 
                  if ($SC_ex_update || $SC_tem_cmp_update) 
                  { 
                      $comando        .= ","; 
                      $comando_oracle .= ","; 
                  } 
                  $comando        .= " seps_nivel = $this->seps_nivel"; 
                  $comando_oracle        .= " seps_nivel = $this->seps_nivel"; 
                  $SC_ex_update = true; 
                  $SC_ex_upd_or = true; 
              } 
              if (isset($NM_val_form['seps_grupo_organizacion']) && $NM_val_form['seps_grupo_organizacion'] != $this->nmgp_dados_select['seps_grupo_organizacion']) 
              { 
                  if ($SC_ex_update || $SC_tem_cmp_update) 
                  { 
                      $comando        .= ","; 
                      $comando_oracle .= ","; 
                  } 
                  $comando        .= " seps_grupo_organizacion = '$this->seps_grupo_organizacion'"; 
                  $comando_oracle        .= " seps_grupo_organizacion = '$this->seps_grupo_organizacion'"; 
                  $SC_ex_update = true; 
                  $SC_ex_upd_or = true; 
              } 
              if (isset($NM_val_form['seps_clase_organizacion']) && $NM_val_form['seps_clase_organizacion'] != $this->nmgp_dados_select['seps_clase_organizacion']) 
              { 
                  if ($SC_ex_update || $SC_tem_cmp_update) 
                  { 
                      $comando        .= ","; 
                      $comando_oracle .= ","; 
                  } 
                  $comando        .= " seps_clase_organizacion = '$this->seps_clase_organizacion'"; 
                  $comando_oracle        .= " seps_clase_organizacion = '$this->seps_clase_organizacion'"; 
                  $SC_ex_update = true; 
                  $SC_ex_upd_or = true; 
              } 
              if (isset($NM_val_form['zona_procedencia']) && $NM_val_form['zona_procedencia'] != $this->nmgp_dados_select['zona_procedencia']) 
              { 
                  if ($SC_ex_update || $SC_tem_cmp_update) 
                  { 
                      $comando        .= ","; 
                      $comando_oracle .= ","; 
                  } 
                  $comando        .= " zona_procedencia = '$this->zona_procedencia'"; 
                  $comando_oracle        .= " zona_procedencia = '$this->zona_procedencia'"; 
                  $SC_ex_update = true; 
                  $SC_ex_upd_or = true; 
              } 
              if (isset($NM_val_form['provincia_procedencia']) && $NM_val_form['provincia_procedencia'] != $this->nmgp_dados_select['provincia_procedencia']) 
              { 
                  if ($SC_ex_update || $SC_tem_cmp_update) 
                  { 
                      $comando        .= ","; 
                      $comando_oracle .= ","; 
                  } 
                  $comando        .= " provincia_procedencia = '$this->provincia_procedencia'"; 
                  $comando_oracle        .= " provincia_procedencia = '$this->provincia_procedencia'"; 
                  $SC_ex_update = true; 
                  $SC_ex_upd_or = true; 
              } 
              if (isset($NM_val_form['antiguedad_im']) && $NM_val_form['antiguedad_im'] != $this->nmgp_dados_select['antiguedad_im']) 
              { 
                  if ($SC_ex_update || $SC_tem_cmp_update) 
                  { 
                      $comando        .= ","; 
                      $comando_oracle .= ","; 
                  } 
                  $comando        .= " antiguedad_im = '$this->antiguedad_im'"; 
                  $comando_oracle        .= " antiguedad_im = '$this->antiguedad_im'"; 
                  $SC_ex_update = true; 
                  $SC_ex_upd_or = true; 
              } 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $nm_bases_lob_geral))
              { 
                  $comando = $comando_oracle;  
                  $SC_ex_update = $SC_ex_upd_or;
              }   
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
              {
                  $comando .= " WHERE cod_u_organizaciones = $this->cod_u_organizaciones ";  
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
              {
                  $comando .= " WHERE cod_u_organizaciones = $this->cod_u_organizaciones ";  
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
              {
                  $comando .= " WHERE cod_u_organizaciones = $this->cod_u_organizaciones ";  
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              {
                  $comando .= " WHERE cod_u_organizaciones = $this->cod_u_organizaciones ";  
              }  
              else  
              {
                  $comando .= " WHERE cod_u_organizaciones = $this->cod_u_organizaciones ";  
              }  
              $comando = str_replace("'null'", "null", $comando) ; 
              $comando = str_replace("#null#", "null", $comando) ; 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              {
                $comando = str_replace("EXTEND('', YEAR TO FRACTION)", "null", $comando) ; 
                $comando = str_replace("EXTEND(null, YEAR TO FRACTION)", "null", $comando) ; 
                $comando = str_replace("EXTEND('', YEAR TO DAY)", "null", $comando) ; 
                $comando = str_replace("EXTEND(null, YEAR TO DAY)", "null", $comando) ; 
              }  
              if ($SC_ex_update || $SC_tem_cmp_update)
              { 
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = $comando; 
                  $rs = $this->Db->Execute($comando);  
                  if ($rs === false) 
                  { 
                      if (FALSE === strpos(strtoupper($this->Db->ErrorMsg()), "MAIL SENT") && FALSE === strpos(strtoupper($this->Db->ErrorMsg()), "WARNING"))
                      {
                          $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_updt'], $this->Db->ErrorMsg(), true); 
                          if (isset($_SESSION['scriptcase']['erro_handler']) && $_SESSION['scriptcase']['erro_handler']) 
                          { 
                              $this->sc_erro_update = $this->Db->ErrorMsg();  
                              $this->NM_rollback_db(); 
                              if ($this->NM_ajax_flag)
                              {
                                  form_u_organizaciones_pack_ajax_response();
                              }
                              exit;  
                          }   
                      }   
                  }   
              }   
              if (in_array(strtolower($this->Ini->nm_tpbanco), $nm_bases_lob_geral))
              { 
              }   
              $this->sc_evento = "update"; 
              $this->nmgp_opcao = "igual"; 
              $this->nm_flag_iframe = true;
              if ($this->lig_edit_lookup)
              {
                  $this->lig_edit_lookup_call = true;
              }

              $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['db_changed'] = true;


              if     (isset($NM_val_form) && isset($NM_val_form['estado_org'])) { $this->estado_org = $NM_val_form['estado_org']; }
              elseif (isset($this->estado_org)) { $this->nm_limpa_alfa($this->estado_org); }
              if     (isset($NM_val_form) && isset($NM_val_form['ruc_provisional'])) { $this->ruc_provisional = $NM_val_form['ruc_provisional']; }
              elseif (isset($this->ruc_provisional)) { $this->nm_limpa_alfa($this->ruc_provisional); }
              if     (isset($NM_val_form) && isset($NM_val_form['ruc_definitivo'])) { $this->ruc_definitivo = $NM_val_form['ruc_definitivo']; }
              elseif (isset($this->ruc_definitivo)) { $this->nm_limpa_alfa($this->ruc_definitivo); }
              if     (isset($NM_val_form) && isset($NM_val_form['organizacion'])) { $this->organizacion = $NM_val_form['organizacion']; }
              elseif (isset($this->organizacion)) { $this->nm_limpa_alfa($this->organizacion); }
              if     (isset($NM_val_form) && isset($NM_val_form['actividad'])) { $this->actividad = $NM_val_form['actividad']; }
              elseif (isset($this->actividad)) { $this->nm_limpa_alfa($this->actividad); }
              if     (isset($NM_val_form) && isset($NM_val_form['categoria_actividad_mp'])) { $this->categoria_actividad_mp = $NM_val_form['categoria_actividad_mp']; }
              elseif (isset($this->categoria_actividad_mp)) { $this->nm_limpa_alfa($this->categoria_actividad_mp); }
              if     (isset($NM_val_form) && isset($NM_val_form['identificacion_actividad_mp'])) { $this->identificacion_actividad_mp = $NM_val_form['identificacion_actividad_mp']; }
              elseif (isset($this->identificacion_actividad_mp)) { $this->nm_limpa_alfa($this->identificacion_actividad_mp); }
              if     (isset($NM_val_form) && isset($NM_val_form['forma_organizacion'])) { $this->forma_organizacion = $NM_val_form['forma_organizacion']; }
              elseif (isset($this->forma_organizacion)) { $this->nm_limpa_alfa($this->forma_organizacion); }
              if     (isset($NM_val_form) && isset($NM_val_form['estado_organizacion'])) { $this->estado_organizacion = $NM_val_form['estado_organizacion']; }
              elseif (isset($this->estado_organizacion)) { $this->nm_limpa_alfa($this->estado_organizacion); }
              if     (isset($NM_val_form) && isset($NM_val_form['num_socios'])) { $this->num_socios = $NM_val_form['num_socios']; }
              elseif (isset($this->num_socios)) { $this->nm_limpa_alfa($this->num_socios); }
              if     (isset($NM_val_form) && isset($NM_val_form['email'])) { $this->email = $NM_val_form['email']; }
              elseif (isset($this->email)) { $this->nm_limpa_alfa($this->email); }
              if     (isset($NM_val_form) && isset($NM_val_form['telefono'])) { $this->telefono = $NM_val_form['telefono']; }
              elseif (isset($this->telefono)) { $this->nm_limpa_alfa($this->telefono); }
              if     (isset($NM_val_form) && isset($NM_val_form['tipo'])) { $this->tipo = $NM_val_form['tipo']; }
              elseif (isset($this->tipo)) { $this->nm_limpa_alfa($this->tipo); }
              if     (isset($NM_val_form) && isset($NM_val_form['circuito_economico'])) { $this->circuito_economico = $NM_val_form['circuito_economico']; }
              elseif (isset($this->circuito_economico)) { $this->nm_limpa_alfa($this->circuito_economico); }
              if     (isset($NM_val_form) && isset($NM_val_form['user'])) { $this->user = $NM_val_form['user']; }
              elseif (isset($this->user)) { $this->nm_limpa_alfa($this->user); }
              if     (isset($NM_val_form) && isset($NM_val_form['cedula_representante_legal'])) { $this->cedula_representante_legal = $NM_val_form['cedula_representante_legal']; }
              elseif (isset($this->cedula_representante_legal)) { $this->nm_limpa_alfa($this->cedula_representante_legal); }
              if     (isset($NM_val_form) && isset($NM_val_form['nombre_representante_legal'])) { $this->nombre_representante_legal = $NM_val_form['nombre_representante_legal']; }
              elseif (isset($this->nombre_representante_legal)) { $this->nm_limpa_alfa($this->nombre_representante_legal); }
              if     (isset($NM_val_form) && isset($NM_val_form['cod_zona'])) { $this->cod_zona = $NM_val_form['cod_zona']; }
              elseif (isset($this->cod_zona)) { $this->nm_limpa_alfa($this->cod_zona); }
              if     (isset($NM_val_form) && isset($NM_val_form['cod_provincia'])) { $this->cod_provincia = $NM_val_form['cod_provincia']; }
              elseif (isset($this->cod_provincia)) { $this->nm_limpa_alfa($this->cod_provincia); }
              if     (isset($NM_val_form) && isset($NM_val_form['cod_canton'])) { $this->cod_canton = $NM_val_form['cod_canton']; }
              elseif (isset($this->cod_canton)) { $this->nm_limpa_alfa($this->cod_canton); }
              if     (isset($NM_val_form) && isset($NM_val_form['cod_parroquia'])) { $this->cod_parroquia = $NM_val_form['cod_parroquia']; }
              elseif (isset($this->cod_parroquia)) { $this->nm_limpa_alfa($this->cod_parroquia); }
              if     (isset($NM_val_form) && isset($NM_val_form['direccion'])) { $this->direccion = $NM_val_form['direccion']; }
              elseif (isset($this->direccion)) { $this->nm_limpa_alfa($this->direccion); }
              if     (isset($NM_val_form) && isset($NM_val_form['celular'])) { $this->celular = $NM_val_form['celular']; }
              elseif (isset($this->celular)) { $this->nm_limpa_alfa($this->celular); }
              if     (isset($NM_val_form) && isset($NM_val_form['num_resolucion'])) { $this->num_resolucion = $NM_val_form['num_resolucion']; }
              elseif (isset($this->num_resolucion)) { $this->nm_limpa_alfa($this->num_resolucion); }
              if     (isset($NM_val_form) && isset($NM_val_form['estado_juridico'])) { $this->estado_juridico = $NM_val_form['estado_juridico']; }
              elseif (isset($this->estado_juridico)) { $this->nm_limpa_alfa($this->estado_juridico); }
              if     (isset($NM_val_form) && isset($NM_val_form['producto_servicio'])) { $this->producto_servicio = $NM_val_form['producto_servicio']; }
              elseif (isset($this->producto_servicio)) { $this->nm_limpa_alfa($this->producto_servicio); }
              if     (isset($NM_val_form) && isset($NM_val_form['legalmente_constituida'])) { $this->legalmente_constituida = $NM_val_form['legalmente_constituida']; }
              elseif (isset($this->legalmente_constituida)) { $this->nm_limpa_alfa($this->legalmente_constituida); }
              if     (isset($NM_val_form) && isset($NM_val_form['tipo_registro'])) { $this->tipo_registro = $NM_val_form['tipo_registro']; }
              elseif (isset($this->tipo_registro)) { $this->nm_limpa_alfa($this->tipo_registro); }

              $this->nm_formatar_campos();
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
              {
              }

              $aOldRefresh               = $this->nmgp_refresh_fields;
              $this->nmgp_refresh_fields = array('ruc', 'btnbuscar', 'ruc_definitivo', 'ruc_provisional', 'organizacion', 'actividad', 'tipo', 'forma_organizacion', 'estado_org', 'cod_zona', 'cod_provincia', 'cod_canton', 'cod_parroquia', 'direccion', 'telefono', 'celular', 'email', 'circuito_economico', 'categoria_actividad_mp', 'identificacion_actividad_mp', 'producto_servicio', 'cedula_representante_legal', 'nombre_representante_legal', 'estado_organizacion', 'num_resolucion', 'legalmente_constituida', 'estado_juridico', 'num_socios', 'user', 'fecha_registro', 'tipo_registro');
              $this->ajax_return_values();
              $this->nmgp_refresh_fields = $aOldRefresh;

              $this->nm_tira_formatacao();
              $this->nm_converte_datas();
          }  
      }  
      if ($this->nmgp_opcao == "incluir") 
      { 
          $NM_cmp_auto = "";
          $NM_seq_auto = "";
          if (($this->Embutida_form || $this->Embutida_multi) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['foreign_key']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['foreign_key']))
          {
              foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['foreign_key'] as $sFKName => $sFKValue)
              {
                   if (isset($this->sc_conv_var[$sFKName]))
                   {
                       $sFKName = $this->sc_conv_var[$sFKName];
                   }
                  eval("\$this->" . $sFKName . " = \"" . $sFKValue . "\";");
              }
          }
          $bInsertOk = true;
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) from " . $this->Ini->nm_tabela . " where cod_u_organizaciones = $this->cod_u_organizaciones "; 
              $rs1 = $this->Db->Execute("select count(*) from " . $this->Ini->nm_tabela . " where cod_u_organizaciones = $this->cod_u_organizaciones "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) from " . $this->Ini->nm_tabela . " where cod_u_organizaciones = $this->cod_u_organizaciones "; 
              $rs1 = $this->Db->Execute("select count(*) from " . $this->Ini->nm_tabela . " where cod_u_organizaciones = $this->cod_u_organizaciones "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) from " . $this->Ini->nm_tabela . " where cod_u_organizaciones = $this->cod_u_organizaciones "; 
              $rs1 = $this->Db->Execute("select count(*) from " . $this->Ini->nm_tabela . " where cod_u_organizaciones = $this->cod_u_organizaciones "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) from " . $this->Ini->nm_tabela . " where cod_u_organizaciones = $this->cod_u_organizaciones "; 
              $rs1 = $this->Db->Execute("select count(*) from " . $this->Ini->nm_tabela . " where cod_u_organizaciones = $this->cod_u_organizaciones "); 
          }  
          else  
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) from " . $this->Ini->nm_tabela . " where cod_u_organizaciones = $this->cod_u_organizaciones "; 
              $rs1 = $this->Db->Execute("select count(*) from " . $this->Ini->nm_tabela . " where cod_u_organizaciones = $this->cod_u_organizaciones "); 
          }  
          if ($rs1 === false)  
          { 
              $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
              exit; 
          }  
          $tmp_result = (int) $rs1->fields[0]; 
          if ($tmp_result != 0) 
          { 
              $this->Erro->mensagem (__FILE__, __LINE__, "critica", $this->Ini->Nm_lang['lang_errm_pkey']); 
              $this->nmgp_opcao = "nada"; 
              $GLOBALS["erro_incl"] = 1; 
              $bInsertOk = false;
              $this->sc_evento = 'insert';
          } 
          $rs1->Close(); 
          $aInsertOk = array(); 
          $bInsertOk = $bInsertOk && empty($aInsertOk);
          if ($bInsertOk)
          { 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
              { 
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (estado_org, ruc_provisional, ruc_definitivo, organizacion, actividad, categoria_actividad_mp, identificacion_actividad_mp, forma_organizacion, estado_organizacion, num_socios, email, telefono, tipo, circuito_economico, 120_organizaciones, user, cedula_representante_legal, nombre_representante_legal, cod_zona, cod_provincia, cod_canton, cod_parroquia, telefono2, direccion, registro_sanitario, celular, num_resolucion, estado_juridico, producto_servicio, seps_sector, seps_nivel, seps_grupo_organizacion, seps_clase_organizacion, legalmente_constituida, zona_procedencia, provincia_procedencia, tipo_registro, antiguedad_im) VALUES ('$this->estado_org', '$this->ruc_provisional', '$this->ruc_definitivo', '$this->organizacion', '$this->actividad', '$this->categoria_actividad_mp', '$this->identificacion_actividad_mp', '$this->forma_organizacion', '$this->estado_organizacion', $this->num_socios, '$this->email', '$this->telefono', '$this->tipo', '$this->circuito_economico', '$this->sc_field_0', '$this->user', '$this->cedula_representante_legal', '$this->nombre_representante_legal', $this->cod_zona, '$this->cod_provincia', '$this->cod_canton', '$this->cod_parroquia', '$this->telefono2', '$this->direccion', '$this->registro_sanitario', '$this->celular', '$this->num_resolucion', '$this->estado_juridico', '$this->producto_servicio', '$this->seps_sector', $this->seps_nivel, '$this->seps_grupo_organizacion', '$this->seps_clase_organizacion', '$this->legalmente_constituida', '$this->zona_procedencia', '$this->provincia_procedencia', '$this->tipo_registro', '$this->antiguedad_im')"; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
              { 
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "estado_org, ruc_provisional, ruc_definitivo, organizacion, actividad, categoria_actividad_mp, identificacion_actividad_mp, forma_organizacion, estado_organizacion, num_socios, email, telefono, tipo, circuito_economico, 120_organizaciones, user, cedula_representante_legal, nombre_representante_legal, cod_zona, cod_provincia, cod_canton, cod_parroquia, telefono2, direccion, registro_sanitario, celular, num_resolucion, estado_juridico, producto_servicio, seps_sector, seps_nivel, seps_grupo_organizacion, seps_clase_organizacion, legalmente_constituida, zona_procedencia, provincia_procedencia, tipo_registro, antiguedad_im) VALUES (" . $NM_seq_auto . "'$this->estado_org', '$this->ruc_provisional', '$this->ruc_definitivo', '$this->organizacion', '$this->actividad', '$this->categoria_actividad_mp', '$this->identificacion_actividad_mp', '$this->forma_organizacion', '$this->estado_organizacion', $this->num_socios, '$this->email', '$this->telefono', '$this->tipo', '$this->circuito_economico', '$this->sc_field_0', '$this->user', '$this->cedula_representante_legal', '$this->nombre_representante_legal', $this->cod_zona, '$this->cod_provincia', '$this->cod_canton', '$this->cod_parroquia', '$this->telefono2', '$this->direccion', '$this->registro_sanitario', '$this->celular', '$this->num_resolucion', '$this->estado_juridico', '$this->producto_servicio', '$this->seps_sector', $this->seps_nivel, '$this->seps_grupo_organizacion', '$this->seps_clase_organizacion', '$this->legalmente_constituida', '$this->zona_procedencia', '$this->provincia_procedencia', '$this->tipo_registro', '$this->antiguedad_im')"; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
              {
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "estado_org, ruc_provisional, ruc_definitivo, organizacion, actividad, categoria_actividad_mp, identificacion_actividad_mp, forma_organizacion, estado_organizacion, num_socios, email, telefono, tipo, circuito_economico, 120_organizaciones, user, cedula_representante_legal, nombre_representante_legal, cod_zona, cod_provincia, cod_canton, cod_parroquia, telefono2, direccion, registro_sanitario, celular, num_resolucion, estado_juridico, producto_servicio, seps_sector, seps_nivel, seps_grupo_organizacion, seps_clase_organizacion, legalmente_constituida, zona_procedencia, provincia_procedencia, tipo_registro, antiguedad_im) VALUES (" . $NM_seq_auto . "'$this->estado_org', '$this->ruc_provisional', '$this->ruc_definitivo', '$this->organizacion', '$this->actividad', '$this->categoria_actividad_mp', '$this->identificacion_actividad_mp', '$this->forma_organizacion', '$this->estado_organizacion', $this->num_socios, '$this->email', '$this->telefono', '$this->tipo', '$this->circuito_economico', '$this->sc_field_0', '$this->user', '$this->cedula_representante_legal', '$this->nombre_representante_legal', $this->cod_zona, '$this->cod_provincia', '$this->cod_canton', '$this->cod_parroquia', '$this->telefono2', '$this->direccion', '$this->registro_sanitario', '$this->celular', '$this->num_resolucion', '$this->estado_juridico', '$this->producto_servicio', '$this->seps_sector', $this->seps_nivel, '$this->seps_grupo_organizacion', '$this->seps_clase_organizacion', '$this->legalmente_constituida', '$this->zona_procedencia', '$this->provincia_procedencia', '$this->tipo_registro', '$this->antiguedad_im')"; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              {
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "estado_org, ruc_provisional, ruc_definitivo, organizacion, actividad, categoria_actividad_mp, identificacion_actividad_mp, forma_organizacion, estado_organizacion, num_socios, email, telefono, tipo, circuito_economico, 120_organizaciones, user, cedula_representante_legal, nombre_representante_legal, cod_zona, cod_provincia, cod_canton, cod_parroquia, telefono2, direccion, registro_sanitario, celular, num_resolucion, estado_juridico, producto_servicio, seps_sector, seps_nivel, seps_grupo_organizacion, seps_clase_organizacion, legalmente_constituida, zona_procedencia, provincia_procedencia, tipo_registro, antiguedad_im) VALUES (" . $NM_seq_auto . "'$this->estado_org', '$this->ruc_provisional', '$this->ruc_definitivo', '$this->organizacion', '$this->actividad', '$this->categoria_actividad_mp', '$this->identificacion_actividad_mp', '$this->forma_organizacion', '$this->estado_organizacion', $this->num_socios, '$this->email', '$this->telefono', '$this->tipo', '$this->circuito_economico', '$this->sc_field_0', '$this->user', '$this->cedula_representante_legal', '$this->nombre_representante_legal', $this->cod_zona, '$this->cod_provincia', '$this->cod_canton', '$this->cod_parroquia', '$this->telefono2', '$this->direccion', '$this->registro_sanitario', '$this->celular', '$this->num_resolucion', '$this->estado_juridico', '$this->producto_servicio', '$this->seps_sector', $this->seps_nivel, '$this->seps_grupo_organizacion', '$this->seps_clase_organizacion', '$this->legalmente_constituida', '$this->zona_procedencia', '$this->provincia_procedencia', '$this->tipo_registro', '$this->antiguedad_im')"; 
              }
              else
              {
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "estado_org, ruc_provisional, ruc_definitivo, organizacion, actividad, categoria_actividad_mp, identificacion_actividad_mp, forma_organizacion, estado_organizacion, num_socios, email, telefono, tipo, circuito_economico, 120_organizaciones, user, cedula_representante_legal, nombre_representante_legal, cod_zona, cod_provincia, cod_canton, cod_parroquia, telefono2, direccion, registro_sanitario, celular, num_resolucion, estado_juridico, producto_servicio, seps_sector, seps_nivel, seps_grupo_organizacion, seps_clase_organizacion, legalmente_constituida, zona_procedencia, provincia_procedencia, tipo_registro, antiguedad_im) VALUES (" . $NM_seq_auto . "'$this->estado_org', '$this->ruc_provisional', '$this->ruc_definitivo', '$this->organizacion', '$this->actividad', '$this->categoria_actividad_mp', '$this->identificacion_actividad_mp', '$this->forma_organizacion', '$this->estado_organizacion', $this->num_socios, '$this->email', '$this->telefono', '$this->tipo', '$this->circuito_economico', '$this->sc_field_0', '$this->user', '$this->cedula_representante_legal', '$this->nombre_representante_legal', $this->cod_zona, '$this->cod_provincia', '$this->cod_canton', '$this->cod_parroquia', '$this->telefono2', '$this->direccion', '$this->registro_sanitario', '$this->celular', '$this->num_resolucion', '$this->estado_juridico', '$this->producto_servicio', '$this->seps_sector', $this->seps_nivel, '$this->seps_grupo_organizacion', '$this->seps_clase_organizacion', '$this->legalmente_constituida', '$this->zona_procedencia', '$this->provincia_procedencia', '$this->tipo_registro', '$this->antiguedad_im')"; 
              }
              $comando = str_replace("'null'", "null", $comando) ; 
              $comando = str_replace("#null#", "null", $comando) ; 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              {
                $comando = str_replace("EXTEND('', YEAR TO FRACTION)", "null", $comando) ; 
                $comando = str_replace("EXTEND(null, YEAR TO FRACTION)", "null", $comando) ; 
                $comando = str_replace("EXTEND('', YEAR TO DAY)", "null", $comando) ; 
                $comando = str_replace("EXTEND(null, YEAR TO DAY)", "null", $comando) ; 
              }  
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = $comando; 
              $rs = $this->Db->Execute($comando); 
              if ($rs === false)  
              { 
                  if (FALSE === strpos(strtoupper($this->Db->ErrorMsg()), "MAIL SENT") && FALSE === strpos(strtoupper($this->Db->ErrorMsg()), "WARNING"))
                  {
                      $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_inst'], $this->Db->ErrorMsg(), true); 
                      if (isset($_SESSION['scriptcase']['erro_handler']) && $_SESSION['scriptcase']['erro_handler']) 
                      { 
                          $this->sc_erro_insert = $this->Db->ErrorMsg();  
                          $this->nmgp_opcao     = 'refresh_insert';
                          $this->NM_rollback_db(); 
                          if ($this->NM_ajax_flag)
                          {
                              form_u_organizaciones_pack_ajax_response();
                              exit; 
                          }
                      }  
                  }  
              }  
              if ('refresh_insert' != $this->nmgp_opcao)
              {
              }

              $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['db_changed'] = true;

              if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['total']))
              {
                  unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['total']);
              }

              $this->sc_evento = "insert"; 
              if ('refresh_insert' != $this->nmgp_opcao && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['sc_redir_insert']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['sc_redir_insert'] != "S"))
              {
              $this->nmgp_opcao = "novo"; 
              }
              $this->nm_flag_iframe = true;
          } 
          if ($this->lig_edit_lookup)
          {
              $this->lig_edit_lookup_call = true;
          }
      } 
      if ($this->nmgp_opcao == "excluir") 
      { 
          $this->cod_u_organizaciones = substr($this->Db->qstr($this->cod_u_organizaciones), 1, -1); 

          $bDelecaoOk = true;
          $sMsgErro   = '';

          if ($bDelecaoOk)
          {

          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) from " . $this->Ini->nm_tabela . " where cod_u_organizaciones = $this->cod_u_organizaciones"; 
              $rs1 = $this->Db->Execute("select count(*) from " . $this->Ini->nm_tabela . " where cod_u_organizaciones = $this->cod_u_organizaciones "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) from " . $this->Ini->nm_tabela . " where cod_u_organizaciones = $this->cod_u_organizaciones"; 
              $rs1 = $this->Db->Execute("select count(*) from " . $this->Ini->nm_tabela . " where cod_u_organizaciones = $this->cod_u_organizaciones "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) from " . $this->Ini->nm_tabela . " where cod_u_organizaciones = $this->cod_u_organizaciones"; 
              $rs1 = $this->Db->Execute("select count(*) from " . $this->Ini->nm_tabela . " where cod_u_organizaciones = $this->cod_u_organizaciones "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) from " . $this->Ini->nm_tabela . " where cod_u_organizaciones = $this->cod_u_organizaciones"; 
              $rs1 = $this->Db->Execute("select count(*) from " . $this->Ini->nm_tabela . " where cod_u_organizaciones = $this->cod_u_organizaciones "); 
          }  
          else  
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) from " . $this->Ini->nm_tabela . " where cod_u_organizaciones = $this->cod_u_organizaciones"; 
              $rs1 = $this->Db->Execute("select count(*) from " . $this->Ini->nm_tabela . " where cod_u_organizaciones = $this->cod_u_organizaciones "); 
          }  
          if ($rs1 === false)  
          { 
              $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
              exit; 
          }  
          if ($rs1 === false)  
          { 
              $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
              exit; 
          }  
          $tmp_result = (int) $rs1->fields[0]; 
          if ($tmp_result != 1) 
          { 
              $this->Erro->mensagem (__FILE__, __LINE__, "critica", $this->Ini->Nm_lang['lang_errm_dele_nfnd']); 
              $this->nmgp_opcao = "nada"; 
              $this->sc_evento = 'delete';
          } 
          else 
          { 
              $rs1->Close(); 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
              {
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "DELETE FROM " . $this->Ini->nm_tabela . " where cod_u_organizaciones = $this->cod_u_organizaciones "; 
                  $rs = $this->Db->Execute("DELETE FROM " . $this->Ini->nm_tabela . " where cod_u_organizaciones = $this->cod_u_organizaciones "); 
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
              {
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "DELETE FROM " . $this->Ini->nm_tabela . " where cod_u_organizaciones = $this->cod_u_organizaciones "; 
                  $rs = $this->Db->Execute("DELETE FROM " . $this->Ini->nm_tabela . " where cod_u_organizaciones = $this->cod_u_organizaciones "); 
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
              {
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "DELETE FROM " . $this->Ini->nm_tabela . " where cod_u_organizaciones = $this->cod_u_organizaciones "; 
                  $rs = $this->Db->Execute("DELETE FROM " . $this->Ini->nm_tabela . " where cod_u_organizaciones = $this->cod_u_organizaciones "); 
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              {
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "DELETE FROM " . $this->Ini->nm_tabela . " where cod_u_organizaciones = $this->cod_u_organizaciones "; 
                  $rs = $this->Db->Execute("DELETE FROM " . $this->Ini->nm_tabela . " where cod_u_organizaciones = $this->cod_u_organizaciones "); 
              }  
              else  
              {
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "DELETE FROM " . $this->Ini->nm_tabela . " where cod_u_organizaciones = $this->cod_u_organizaciones "; 
                  $rs = $this->Db->Execute("DELETE FROM " . $this->Ini->nm_tabela . " where cod_u_organizaciones = $this->cod_u_organizaciones "); 
              }  
              if ($rs === false) 
              { 
                  $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dele'], $this->Db->ErrorMsg(), true); 
                  if (isset($_SESSION['scriptcase']['erro_handler']) && $_SESSION['scriptcase']['erro_handler']) 
                  { 
                      $this->sc_erro_delete = $this->Db->ErrorMsg();  
                      $this->NM_rollback_db(); 
                      if ($this->NM_ajax_flag)
                      {
                          form_u_organizaciones_pack_ajax_response();
                          exit; 
                      }
                  } 
              } 
              $this->sc_evento = "delete"; 
              $this->nmgp_opcao = "avanca"; 
              $this->nm_flag_iframe = true;

              $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['db_changed'] = true;

              if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['total']))
              {
                  unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['total']);
              }

              if ($this->lig_edit_lookup)
              {
                  $this->lig_edit_lookup_call = true;
              }
          }

          }
          else
          {
              $this->sc_evento = "delete"; 
              $this->nmgp_opcao = "igual"; 
              $this->Erro->mensagem(__FILE__, __LINE__, "critica", $sMsgErro); 
          }

      }  
      if (!empty($this->sc_force_zero))
      {
          foreach ($this->sc_force_zero as $i_force_zero => $sc_force_zero_field)
          {
              eval('if ($this->' . $sc_force_zero_field . ' == 0) {$this->' . $sc_force_zero_field . ' = "";}');
          }
      }
      $this->sc_force_zero = array();
      if (!empty($NM_val_null))
      {
          foreach ($NM_val_null as $i_val_null => $sc_val_null_field)
          {
              eval('$this->' . $sc_val_null_field . ' = "";');
          }
      }
      if ($salva_opcao == "incluir" && $GLOBALS["erro_incl"] != 1) 
      { 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['parms'] = "cod_u_organizaciones?#?$this->cod_u_organizaciones?@?"; 
      }
      $this->NM_commit_db(); 
      if ($this->sc_evento != "insert" && $this->sc_evento != "update" && $this->sc_evento != "delete")
      { 
          $this->cod_u_organizaciones = substr($this->Db->qstr($this->cod_u_organizaciones), 1, -1); 
      } 
      if (isset($this->NM_where_filter))
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['where_filter'] = trim($this->NM_where_filter);
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['total']))
          {
              unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['total']);
          }
      }
      $sc_where_filter = '';
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['where_filter_form']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['where_filter_form'])
      {
          $sc_where_filter = $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['where_filter_form'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['where_filter']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['where_filter'])
      {
          if (empty($sc_where_filter))
          {
              $sc_where_filter = $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['where_filter'];
          }
          else
          {
              $sc_where_filter .= " and (" . $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['where_filter'] . ")";
          }
      }
      if ($this->nmgp_opcao != "novo" && $this->nmgp_opcao != "nada" && $this->nmgp_opcao != "inicio")
      { 
          $this->nmgp_opcao = "igual"; 
      } 
      $GLOBALS["NM_ERRO_IBASE"] = 0;  
//---------- 
      if ($this->nmgp_opcao != "novo" && $this->nmgp_opcao != "nada" && $this->nmgp_opcao != "refresh_insert") 
      { 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['parms'] = ""; 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
          { 
              $GLOBALS["NM_ERRO_IBASE"] = 1;  
          } 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sybase))
          { 
              $nmgp_select = "SELECT cod_u_organizaciones, estado_org, ruc_provisional, ruc_definitivo, organizacion, actividad, categoria_actividad_mp, identificacion_actividad_mp, forma_organizacion, estado_organizacion, num_socios, email, telefono, tipo, circuito_economico, 120_organizaciones, fecha_registro, user, cedula_representante_legal, nombre_representante_legal, cod_zona, cod_provincia, cod_canton, cod_parroquia, telefono2, direccion, registro_sanitario, celular, num_resolucion, estado_juridico, producto_servicio, seps_sector, seps_nivel, seps_grupo_organizacion, seps_clase_organizacion, legalmente_constituida, zona_procedencia, provincia_procedencia, tipo_registro, antiguedad_im from " . $this->Ini->nm_tabela ; 
          } 
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
          { 
              $nmgp_select = "SELECT cod_u_organizaciones, estado_org, ruc_provisional, ruc_definitivo, organizacion, actividad, categoria_actividad_mp, identificacion_actividad_mp, forma_organizacion, estado_organizacion, num_socios, email, telefono, tipo, circuito_economico, 120_organizaciones, fecha_registro, user, cedula_representante_legal, nombre_representante_legal, cod_zona, cod_provincia, cod_canton, cod_parroquia, telefono2, direccion, registro_sanitario, celular, num_resolucion, estado_juridico, producto_servicio, seps_sector, seps_nivel, seps_grupo_organizacion, seps_clase_organizacion, legalmente_constituida, zona_procedencia, provincia_procedencia, tipo_registro, antiguedad_im from " . $this->Ini->nm_tabela ; 
          } 
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          { 
              $nmgp_select = "SELECT cod_u_organizaciones, estado_org, ruc_provisional, ruc_definitivo, organizacion, actividad, categoria_actividad_mp, identificacion_actividad_mp, forma_organizacion, estado_organizacion, num_socios, email, telefono, tipo, circuito_economico, 120_organizaciones, TO_DATE(TO_CHAR(fecha_registro, 'yyyy-mm-dd hh24:mi:ss'), 'yyyy-mm-dd hh24:mi:ss'), user, cedula_representante_legal, nombre_representante_legal, cod_zona, cod_provincia, cod_canton, cod_parroquia, telefono2, direccion, registro_sanitario, celular, num_resolucion, estado_juridico, producto_servicio, seps_sector, seps_nivel, seps_grupo_organizacion, seps_clase_organizacion, legalmente_constituida, zona_procedencia, provincia_procedencia, tipo_registro, antiguedad_im from " . $this->Ini->nm_tabela ; 
          } 
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
          { 
              $nmgp_select = "SELECT cod_u_organizaciones, estado_org, ruc_provisional, ruc_definitivo, organizacion, actividad, categoria_actividad_mp, identificacion_actividad_mp, forma_organizacion, estado_organizacion, num_socios, email, telefono, tipo, circuito_economico, 120_organizaciones, fecha_registro, user, cedula_representante_legal, nombre_representante_legal, cod_zona, cod_provincia, cod_canton, cod_parroquia, telefono2, direccion, registro_sanitario, celular, num_resolucion, estado_juridico, producto_servicio, seps_sector, seps_nivel, seps_grupo_organizacion, seps_clase_organizacion, legalmente_constituida, zona_procedencia, provincia_procedencia, tipo_registro, antiguedad_im from " . $this->Ini->nm_tabela ; 
          } 
          else 
          { 
              $nmgp_select = "SELECT cod_u_organizaciones, estado_org, ruc_provisional, ruc_definitivo, organizacion, actividad, categoria_actividad_mp, identificacion_actividad_mp, forma_organizacion, estado_organizacion, num_socios, email, telefono, tipo, circuito_economico, 120_organizaciones, fecha_registro, user, cedula_representante_legal, nombre_representante_legal, cod_zona, cod_provincia, cod_canton, cod_parroquia, telefono2, direccion, registro_sanitario, celular, num_resolucion, estado_juridico, producto_servicio, seps_sector, seps_nivel, seps_grupo_organizacion, seps_clase_organizacion, legalmente_constituida, zona_procedencia, provincia_procedencia, tipo_registro, antiguedad_im from " . $this->Ini->nm_tabela ; 
          } 
          $aWhere = array();
          $aWhere[] = $sc_where_filter;
          if ($this->nmgp_opcao == "igual" || (($_SESSION['sc_session'][$this->Ini->sc_page]['form_adm_clientes']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_adm_clientes']['run_iframe'] == "R") && ($this->sc_evento == "insert" || $this->sc_evento == "update")) )
          { 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
              {
                  $aWhere[] = "cod_u_organizaciones = $this->cod_u_organizaciones"; 
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
              {
                  $aWhere[] = "cod_u_organizaciones = $this->cod_u_organizaciones"; 
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
              {
                  $aWhere[] = "cod_u_organizaciones = $this->cod_u_organizaciones"; 
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              {
                  $aWhere[] = "cod_u_organizaciones = $this->cod_u_organizaciones"; 
              }  
              else  
              {
                  $aWhere[] = "cod_u_organizaciones = $this->cod_u_organizaciones"; 
              }  
              if (!empty($sc_where_filter))  
              {
                  $teste_select = $nmgp_select . $this->returnWhere($aWhere);
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = $teste_select; 
                  $rs = $this->Db->Execute($teste_select); 
                  if ($rs->EOF)
                  {
                     $aWhere = array($sc_where_filter);
                  }  
                  $rs->Close(); 
              }  
          } 
          $nmgp_select .= $this->returnWhere($aWhere) . ' ';
          $sc_order_by = "";
          $sc_order_by = "cod_u_organizaciones";
          $sc_order_by = str_replace("order by ", "", $sc_order_by);
          $sc_order_by = str_replace("ORDER BY ", "", trim($sc_order_by));
          if (!empty($sc_order_by))
          {
              $nmgp_select .= " order by $sc_order_by "; 
          }
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['run_iframe'] == "R")
          {
              if ($this->sc_evento == "update")
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['select'] = $nmgp_select;
                  $this->nm_gera_html();
              } 
              elseif (!empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['select']))
              { 
                  $nmgp_select = $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['select'];
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['select'] = ""; 
              } 
          } 
          $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_select; 
          $rs = $this->Db->Execute($nmgp_select) ; 
          if ($rs === false && !$rs->EOF && $GLOBALS["NM_ERRO_IBASE"] != 1) 
          { 
              $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
              exit ; 
          }  
          if ($rs === false && $GLOBALS["NM_ERRO_IBASE"] == 1) 
          { 
              $GLOBALS["NM_ERRO_IBASE"] = 0; 
              $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_nfnd_extr'], $this->Db->ErrorMsg()); 
              exit ; 
          }  
          if ($rs->EOF) 
          { 
              if ($this->nmgp_botoes['insert'] != "on")
              {
                  $this->nmgp_form_empty        = true;
                  $this->nmgp_botoes['first']   = "off";
                  $this->nmgp_botoes['back']    = "off";
                  $this->nmgp_botoes['forward'] = "off";
                  $this->nmgp_botoes['last']    = "off";
              }
              $this->nmgp_opcao = "novo"; 
              $this->nm_flag_saida_novo = "S"; 
              $rs->Close(); 
              if ($this->aba_iframe)
              {
                  $this->nmgp_botoes['exit'] = 'off';
              }
          } 
          if ($rs === false && $GLOBALS["NM_ERRO_IBASE"] == 1) 
          { 
              $GLOBALS["NM_ERRO_IBASE"] = 0; 
              $this->Erro->mensagem (__FILE__, __LINE__, "critica", $this->Ini->Nm_lang['lang_errm_nfnd_extr']); 
              $this->nmgp_opcao = "novo"; 
          }  
          if ($this->nmgp_opcao != "novo") 
          { 
              $this->cod_u_organizaciones = $rs->fields[0] ; 
              $this->nmgp_dados_select['cod_u_organizaciones'] = $this->cod_u_organizaciones;
              $this->estado_org = $rs->fields[1] ; 
              $this->nmgp_dados_select['estado_org'] = $this->estado_org;
              $this->ruc_provisional = $rs->fields[2] ; 
              $this->nmgp_dados_select['ruc_provisional'] = $this->ruc_provisional;
              $this->ruc_definitivo = $rs->fields[3] ; 
              $this->nmgp_dados_select['ruc_definitivo'] = $this->ruc_definitivo;
              $this->organizacion = $rs->fields[4] ; 
              $this->nmgp_dados_select['organizacion'] = $this->organizacion;
              $this->actividad = $rs->fields[5] ; 
              $this->nmgp_dados_select['actividad'] = $this->actividad;
              $this->categoria_actividad_mp = $rs->fields[6] ; 
              $this->nmgp_dados_select['categoria_actividad_mp'] = $this->categoria_actividad_mp;
              $this->identificacion_actividad_mp = $rs->fields[7] ; 
              $this->nmgp_dados_select['identificacion_actividad_mp'] = $this->identificacion_actividad_mp;
              $this->forma_organizacion = $rs->fields[8] ; 
              $this->nmgp_dados_select['forma_organizacion'] = $this->forma_organizacion;
              $this->estado_organizacion = $rs->fields[9] ; 
              $this->nmgp_dados_select['estado_organizacion'] = $this->estado_organizacion;
              $this->num_socios = $rs->fields[10] ; 
              $this->nmgp_dados_select['num_socios'] = $this->num_socios;
              $this->email = $rs->fields[11] ; 
              $this->nmgp_dados_select['email'] = $this->email;
              $this->telefono = $rs->fields[12] ; 
              $this->nmgp_dados_select['telefono'] = $this->telefono;
              $this->tipo = $rs->fields[13] ; 
              $this->nmgp_dados_select['tipo'] = $this->tipo;
              $this->circuito_economico = $rs->fields[14] ; 
              $this->nmgp_dados_select['circuito_economico'] = $this->circuito_economico;
              $this->sc_field_0 = $rs->fields[15] ; 
              $this->nmgp_dados_select['sc_field_0'] = $this->sc_field_0;
              $this->fecha_registro = $rs->fields[16] ; 
              if (substr($this->fecha_registro, 10, 1) == "-") 
              { 
                 $this->fecha_registro = substr($this->fecha_registro, 0, 10) . " " . substr($this->fecha_registro, 11);
              } 
              if (substr($this->fecha_registro, 13, 1) == ".") 
              { 
                 $this->fecha_registro = substr($this->fecha_registro, 0, 13) . ":" . substr($this->fecha_registro, 14, 2) . ":" . substr($this->fecha_registro, 17);
              } 
              $this->nmgp_dados_select['fecha_registro'] = $this->fecha_registro;
              $this->user = $rs->fields[17] ; 
              $this->nmgp_dados_select['user'] = $this->user;
              $this->cedula_representante_legal = $rs->fields[18] ; 
              $this->nmgp_dados_select['cedula_representante_legal'] = $this->cedula_representante_legal;
              $this->nombre_representante_legal = $rs->fields[19] ; 
              $this->nmgp_dados_select['nombre_representante_legal'] = $this->nombre_representante_legal;
              $this->cod_zona = $rs->fields[20] ; 
              $this->nmgp_dados_select['cod_zona'] = $this->cod_zona;
              $this->cod_provincia = $rs->fields[21] ; 
              $this->nmgp_dados_select['cod_provincia'] = $this->cod_provincia;
              $this->cod_canton = $rs->fields[22] ; 
              $this->nmgp_dados_select['cod_canton'] = $this->cod_canton;
              $this->cod_parroquia = $rs->fields[23] ; 
              $this->nmgp_dados_select['cod_parroquia'] = $this->cod_parroquia;
              $this->telefono2 = $rs->fields[24] ; 
              $this->nmgp_dados_select['telefono2'] = $this->telefono2;
              $this->direccion = $rs->fields[25] ; 
              $this->nmgp_dados_select['direccion'] = $this->direccion;
              $this->registro_sanitario = $rs->fields[26] ; 
              $this->nmgp_dados_select['registro_sanitario'] = $this->registro_sanitario;
              $this->celular = $rs->fields[27] ; 
              $this->nmgp_dados_select['celular'] = $this->celular;
              $this->num_resolucion = $rs->fields[28] ; 
              $this->nmgp_dados_select['num_resolucion'] = $this->num_resolucion;
              $this->estado_juridico = $rs->fields[29] ; 
              $this->nmgp_dados_select['estado_juridico'] = $this->estado_juridico;
              $this->producto_servicio = $rs->fields[30] ; 
              $this->nmgp_dados_select['producto_servicio'] = $this->producto_servicio;
              $this->seps_sector = $rs->fields[31] ; 
              $this->nmgp_dados_select['seps_sector'] = $this->seps_sector;
              $this->seps_nivel = $rs->fields[32] ; 
              $this->nmgp_dados_select['seps_nivel'] = $this->seps_nivel;
              $this->seps_grupo_organizacion = $rs->fields[33] ; 
              $this->nmgp_dados_select['seps_grupo_organizacion'] = $this->seps_grupo_organizacion;
              $this->seps_clase_organizacion = $rs->fields[34] ; 
              $this->nmgp_dados_select['seps_clase_organizacion'] = $this->seps_clase_organizacion;
              $this->legalmente_constituida = $rs->fields[35] ; 
              $this->nmgp_dados_select['legalmente_constituida'] = $this->legalmente_constituida;
              $this->zona_procedencia = $rs->fields[36] ; 
              $this->nmgp_dados_select['zona_procedencia'] = $this->zona_procedencia;
              $this->provincia_procedencia = $rs->fields[37] ; 
              $this->nmgp_dados_select['provincia_procedencia'] = $this->provincia_procedencia;
              $this->tipo_registro = $rs->fields[38] ; 
              $this->nmgp_dados_select['tipo_registro'] = $this->tipo_registro;
              $this->antiguedad_im = $rs->fields[39] ; 
              $this->nmgp_dados_select['antiguedad_im'] = $this->antiguedad_im;
          $GLOBALS["NM_ERRO_IBASE"] = 0; 
              $this->cod_u_organizaciones = (string)$this->cod_u_organizaciones; 
              $this->num_socios = (string)$this->num_socios; 
              $this->cod_zona = (string)$this->cod_zona; 
              $this->seps_nivel = (string)$this->seps_nivel; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['parms'] = "cod_u_organizaciones?#?$this->cod_u_organizaciones?@?";
          } 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['dados_select'] = $this->nmgp_dados_select;
          if (!$this->NM_ajax_flag || 'backup_line' != $this->NM_ajax_opcao)
          {
              $this->controle_navegacao();
          }
      } 
      if ($this->nmgp_opcao == "novo" || $this->nmgp_opcao == "refresh_insert") 
      { 
          $this->sc_evento_old = $this->sc_evento;
          $this->sc_evento = "novo";
          if ('refresh_insert' == $this->nmgp_opcao)
          {
              $this->nmgp_opcao = 'novo';
          }
          else
          {
              $this->nm_formatar_campos();
              $this->nm_mens_form_ins = "La información ha sido almacenada satisfactoriamente...";
              $this->cod_u_organizaciones = "" ;  
              $this->estado_org = "" ;  
              $this->ruc_provisional = "" ;  
              $this->ruc_definitivo = "" ;  
              $this->organizacion = "" ;  
              $this->actividad = "" ;  
              $this->categoria_actividad_mp = "" ;  
              $this->identificacion_actividad_mp = "" ;  
              $this->forma_organizacion = "" ;  
              $this->estado_organizacion = "" ;  
              $this->num_socios = "" ;  
              $this->email = "" ;  
              $this->telefono = "" ;  
              $this->tipo = "" ;  
              $this->circuito_economico = "" ;  
              $this->sc_field_0 = "" ;  
              $this->fecha_registro = "" ;  
              $this->fecha_registro_hora = "" ;  
              $this->user = "" ;  
              $this->cedula_representante_legal = "" ;  
              $this->nombre_representante_legal = "" ;  
              $this->cod_zona = "" ;  
              $this->cod_provincia = "" ;  
              $this->cod_canton = "" ;  
              $this->cod_parroquia = "" ;  
              $this->telefono2 = "" ;  
              $this->direccion = "" ;  
              $this->registro_sanitario = "" ;  
              $this->celular = "" ;  
              $this->num_resolucion = "" ;  
              $this->estado_juridico = "" ;  
              $this->producto_servicio = "" ;  
              $this->seps_sector = "" ;  
              $this->seps_nivel = "" ;  
              $this->seps_grupo_organizacion = "" ;  
              $this->seps_clase_organizacion = "" ;  
              $this->legalmente_constituida = "" ;  
              $this->zona_procedencia = "" ;  
              $this->provincia_procedencia = "" ;  
              $this->tipo_registro = "" ;  
              $this->antiguedad_im = "" ;  
              $this->ruc = "" ;  
              $this->btnbuscar = "Buscar" ;  
              $this->formatado = false;
          }
          if (($this->Embutida_form || $this->Embutida_multi) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['foreign_key']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['foreign_key']))
          {
              foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['foreign_key'] as $sFKName => $sFKValue)
              {
                   if (isset($this->sc_conv_var[$sFKName]))
                   {
                       $sFKName = $this->sc_conv_var[$sFKName];
                   }
                  eval("\$this->" . $sFKName . " = \"" . $sFKValue . "\";");
              }
          }
      }  
//
//
//-- 
      if ($this->nmgp_opcao != "novo") 
      {
      }
      $this->nm_proc_onload();
  }
//
function btnBuscar_onClick()
{
$_SESSION['scriptcase']['form_u_organizaciones']['contr_erro'] = 'on';
                                       
$original_ruc = $this->ruc;
$original_num_socios = $this->num_socios;
$original_cedula_representante_legal = $this->cedula_representante_legal;
$original_nombre_representante_legal = $this->nombre_representante_legal;
$original_tipo_registro = $this->tipo_registro;
$original_estado_org = $this->estado_org;
$original_ruc_definitivo = $this->ruc_definitivo;
$original_ruc_provisional = $this->ruc_provisional;
$original_organizacion = $this->organizacion;
$original_cod_zona = $this->cod_zona;
$original_cod_provincia = $this->cod_provincia;
$original_cod_canton = $this->cod_canton;
$original_cod_parroquia = $this->cod_parroquia;
$original_direccion = $this->direccion;
$original_email = $this->email;
$original_telefono = $this->telefono;
$original_num_resolucion = $this->num_resolucion;
$original_tipo = $this->tipo;
$original_legalmente_constituida = $this->legalmente_constituida;
$original_estado_organizacion = $this->estado_organizacion;
$original_forma_organizacion = $this->forma_organizacion;
$original_actividad = $this->actividad;

$res001 = substr($this->ruc , -3);
$reslongitud = strlen($this->ruc );
if($res001 != "001") 
	{ 
		$error_message = 'El RUC debe terminar en 001.'; 
		
 if (!isset($this->Campos_Mens_erro)){ $this->Campos_Mens_erro = "";}
 if (!empty($this->Campos_Mens_erro)){ $this->Campos_Mens_erro .= "<br>";}$this->Campos_Mens_erro .= $error_message;
 if ('submit_form' == $this->NM_ajax_opcao || 'event_' == substr($this->NM_ajax_opcao, 0, 6))
 { 
  $sErrorIndex = ('submit_form' == $this->NM_ajax_opcao) ? 'geral_form_u_organizaciones' : substr(substr($this->NM_ajax_opcao, 0, strrpos($this->NM_ajax_opcao, '_')), 6);
  $this->NM_ajax_info['errList'][$sErrorIndex][] = $error_message;
 }
;
		if (isset($this->Campos_Mens_erro) && !empty($this->Campos_Mens_erro))
{ 
    if ($this->NM_ajax_flag)
    { 
        $_SESSION['scriptcase']['form_u_organizaciones']['contr_erro'] = 'off';
        form_u_organizaciones_pack_ajax_response();
        exit;
    }
    $this->Erro->mensagem(__FILE__, __LINE__, "critica", $this->Campos_Mens_erro);
    $_SESSION['scriptcase']['form_u_organizaciones']['contr_erro'] = 'off';
    $this->Campos_Mens_erro = "";
    $this->nm_formatar_campos();
    $this->nm_gera_html();
    $this->NM_close_db();
    exit;
}
}
	


if($res001 == "001" and $reslongitud == 13 )
{ 
	$getInfo = 'select count(*),cod_u_organizaciones from u_organizaciones where ruc_provisional ="'.$this->ruc .'" and ruc_definitivo = "'.$this->ruc .'"';
	 
      $nm_select = $getInfo; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $this->rs = array();
      if ($rx = $this->Db->Execute($nm_select)) 
      {  
          $y = 0; 
          $nm_count = $rx->FieldCount();
          while (!$rx->EOF)
          {  
                 for ($x = 0; $x < $nm_count; $x++)
                 {  
                      $this->rs[$y] [$x] = $rx->fields[$x];
                 }
                 $y++; 
                 $rx->MoveNext();
          } 
          $rx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      {  
          $this->rs = false;
          $this->rs_erro = $this->Db->ErrorMsg();
      } 
;
	if (isset($this->rs[0][0]))     
	{ $codigo = $this->rs[0][0];$cod_u_organizaciones_aux = $this->rs[0][1];}
	else
	{ $codigo = 0;}
	
	if ($codigo > 0)
	{ 
		 if (!isset($this->Campos_Mens_erro) || empty($this->Campos_Mens_erro))
 { 
$this->nmgp_redireciona_form($this->Ini->path_link . "form_u_organizaciones/form_u_organizaciones.php", $this->nm_location, "cod_u_organizaciones?#?" . $cod_u_organizaciones_aux . "?@?", "_self", "ret_self", 440, 630);
 };
		$error_message = 'El RUC ya se encuentra registrado.'; 
		
 if (!isset($this->Campos_Mens_erro)){ $this->Campos_Mens_erro = "";}
 if (!empty($this->Campos_Mens_erro)){ $this->Campos_Mens_erro .= "<br>";}$this->Campos_Mens_erro .= $error_message;
 if ('submit_form' == $this->NM_ajax_opcao || 'event_' == substr($this->NM_ajax_opcao, 0, 6))
 { 
  $sErrorIndex = ('submit_form' == $this->NM_ajax_opcao) ? 'geral_form_u_organizaciones' : substr(substr($this->NM_ajax_opcao, 0, strrpos($this->NM_ajax_opcao, '_')), 6);
  $this->NM_ajax_info['errList'][$sErrorIndex][] = $error_message;
 }
;
		
		if (isset($this->Campos_Mens_erro) && !empty($this->Campos_Mens_erro))
{ 
    if ($this->NM_ajax_flag)
    { 
        $_SESSION['scriptcase']['form_u_organizaciones']['contr_erro'] = 'off';
        form_u_organizaciones_pack_ajax_response();
        exit;
    }
    $this->Erro->mensagem(__FILE__, __LINE__, "critica", $this->Campos_Mens_erro);
    $_SESSION['scriptcase']['form_u_organizaciones']['contr_erro'] = 'off';
    $this->Campos_Mens_erro = "";
    $this->nm_formatar_campos();
    $this->nm_gera_html();
    $this->NM_close_db();
    exit;
}
}
	else
	{ 
		
		$urlWs = "http://interoperabilidad.dinardap.gob.ec:7979/interoperador?wsdl";
		$parametros = array();
		$parametros['login'] = "iOpaDRIeps";
		$parametros['password'] = "6Tmq[]3ic}";
		
		
		$datosSEPS =$this->BuscarDatosSEPS($this->ConectarWsSEPS($urlWs,$parametros), $this->ruc , 1119);
		
		
		$datosSRI  =$this->BuscarDatosSRI ($this->ConectarWsSRI ($urlWs,$parametros), $this->ruc , 186);	
		
	$this->EncerarControles();
		
		
		$this->num_socios = 0;
		$this->cedula_representante_legal = '0000000000';
		$this->nombre_representante_legal = 'NO TIENE REPRESENTANTE LEGAL';
		$this->tipo_registro = 'MANUAL';
		
		$this->num_socios  = $this->num_socios;
		$this->cedula_representante_legal  = $this->cedula_representante_legal;
		$this->nombre_representante_legal  = $this->nombre_representante_legal;
		$this->tipo_registro  = $this->tipo_registro;
		
		
		
		if($datosSEPS['ruc'] != "")
		{ 	
			$estado_org_SEPS = strtolower($datosSEPS['estado_org']);
			$ruc_SEPS = $datosSEPS['ruc'];
			$organizacion_SEPS = $datosSEPS['razon_social'];
			$cod_provincia_SEPS =$this->RetornaCodProvincia($datosSEPS['provincia']);
			$cod_zona_SEPS =$this->RetornaCodZona($cod_provincia_SEPS);
			$cod_canton_SEPS =$this->RetornaCodCanton($cod_provincia_SEPS, $datosSEPS['canton']);
			$cod_parroquia_SEPS =$this->RetornaCodParroquia($cod_provincia_SEPS, $cod_canton_SEPS, $datosSEPS['parroquia']);
			$direccion_SEPS = $datosSEPS['calle'].'-'.$datosSEPS['numero'].'-'.$datosSEPS['interseccion'];
			$email_SEPS	= $datosSEPS['correo_org'];
			$telefono_SEPS = $datosSEPS['telefono'];
			$nombre_representante_legal_SEPS = $datosSEPS['nombre_representante_legal_SEPS'];
			$num_resolucion_SEPS = $datosSEPS['num_resolucion_seps'];
			if($num_resolucion_SEPS != "")
			{ 
				$tipo_SEPS = "org";
				$legalmente_constituida_SEPS = "si";
				$estado_organizacion_SEPS = "legalmente_constituida";
			}
			
			$tipo_organizacion_SEPS = $datosSEPS['tipo_organizacion'];
			$forma_org_SEPS =$this->RetornaTipoOrganizacion($tipo_organizacion_SEPS);
			
			$this->tipo_registro = "WEBSER";
			
			
			$this->estado_org  = $estado_org_SEPS;
			$this->ruc_definitivo  = $ruc_SEPS;
			$this->ruc_provisional  = $ruc_SEPS;
			$this->organizacion  = $organizacion_SEPS;
			$this->cod_zona  = $cod_zona_SEPS; 
			$this->cod_provincia  = $cod_provincia_SEPS;
			$this->cod_canton  = $cod_canton_SEPS;
			$this->cod_parroquia  = $cod_parroquia_SEPS;
			$this->direccion  = $direccion_SEPS;
			
			$this->email  = $email_SEPS;
			$this->telefono  = $telefono_SEPS;
			
			
			if($nombre_representante_legal_SEPS != "")
			{ $this->nombre_representante_legal  = $nombre_representante_legal_SEPS;}
			$this->num_resolucion  = $num_resolucion_SEPS;
			if($num_resolucion_SEPS != "")
			{ 
				$this->tipo  = $tipo_SEPS;
				$this->legalmente_constituida  = $legalmente_constituida_SEPS;
				$this->estado_organizacion  = $estado_organizacion_SEPS;
			}
			
			
			$this->forma_organizacion  = $forma_org_SEPS;
			
			$this->tipo_registro  = $this->tipo_registro;
		$this->VisualizarBloques('on');
		}
		
		if($datosSRI['persona_sociedad']!="")
		{ 
			$persona_sociedad_SRI = $datosSRI['persona_sociedad'];
			$nombre_organizacion_SRI = $datosSRI['nombre_organizacion'];
			$actividad_economica_SRI = $datosSRI['actividad_economica'];
			$estado_organizacion_SRI = $datosSRI['estado_organizacion'];
			$forma_organizacion_SRI = $datosSRI['forma_organizacion'];
			$ubicacion_SRI = $datosSRI['ubicacion'];
			$direccion_SRI = $datosSRI['calle'].'-'.$datosSRI['numero'].'-'.$datosSRI['interseccion'];
			$datos =$this->CodigoUbicacion($ubicacion_SRI);
			$this->tipo_registro = "WEBSER";
			
			if(count($datos) == 9)
			{ 
				
				$cod_provincia_SRI = $datos[5];
				$cod_canton_SRI = $datos[6];
				$cod_parroquia_SRI = $datos[7];
				$cod_zona_SRI = $datos[8];
			}
			
			if($this->organizacion  == "")
			{ $this->organizacion 	= $nombre_organizacion_SRI;}
			
			$this->actividad  = $actividad_economica_SRI;
			
			if($this->direccion  == "--")
			{ $this->direccion  = $direccion_SRI;}
			
			if($this->cod_zona  == "0")
			{ $this->cod_zona  = $cod_zona_SRI;}
			
			if($this->cod_provincia  == "0")
			{ $this->cod_provincia  = $cod_provincia_SRI;}
			
			if($this->cod_canton  == "0")
			{ $this->cod_canton  = $cod_canton_SRI;}
			
			if($this->cod_parroquia  == "0")
			{ $this->cod_parroquia  = $cod_parroquia_SRI;}
			
			if($this->tipo_registro  == "")
			{ $this->tipo_registro  = $this->tipo_registro;}
		$this->VisualizarBloques('on');
		}
	}		
}


$modificado_ruc = $this->ruc;
$modificado_num_socios = $this->num_socios;
$modificado_cedula_representante_legal = $this->cedula_representante_legal;
$modificado_nombre_representante_legal = $this->nombre_representante_legal;
$modificado_tipo_registro = $this->tipo_registro;
$modificado_estado_org = $this->estado_org;
$modificado_ruc_definitivo = $this->ruc_definitivo;
$modificado_ruc_provisional = $this->ruc_provisional;
$modificado_organizacion = $this->organizacion;
$modificado_cod_zona = $this->cod_zona;
$modificado_cod_provincia = $this->cod_provincia;
$modificado_cod_canton = $this->cod_canton;
$modificado_cod_parroquia = $this->cod_parroquia;
$modificado_direccion = $this->direccion;
$modificado_email = $this->email;
$modificado_telefono = $this->telefono;
$modificado_num_resolucion = $this->num_resolucion;
$modificado_tipo = $this->tipo;
$modificado_legalmente_constituida = $this->legalmente_constituida;
$modificado_estado_organizacion = $this->estado_organizacion;
$modificado_forma_organizacion = $this->forma_organizacion;
$modificado_actividad = $this->actividad;
$this->nm_formatar_campos('ruc', 'num_socios', 'cedula_representante_legal', 'nombre_representante_legal', 'tipo_registro', 'estado_org', 'ruc_definitivo', 'ruc_provisional', 'organizacion', 'cod_zona', 'cod_provincia', 'cod_canton', 'cod_parroquia', 'direccion', 'email', 'telefono', 'num_resolucion', 'tipo', 'legalmente_constituida', 'estado_organizacion', 'forma_organizacion', 'actividad');
if ($original_ruc != $modificado_ruc || (isset($bFlagRead_ruc) && $bFlagRead_ruc))
{ 
    $this->ajax_return_values_ruc(true);
}
if ($original_num_socios != $modificado_num_socios || (isset($bFlagRead_num_socios) && $bFlagRead_num_socios))
{ 
    $this->ajax_return_values_num_socios(true);
}
if ($original_cedula_representante_legal != $modificado_cedula_representante_legal || (isset($bFlagRead_cedula_representante_legal) && $bFlagRead_cedula_representante_legal))
{ 
    $this->ajax_return_values_cedula_representante_legal(true);
}
if ($original_nombre_representante_legal != $modificado_nombre_representante_legal || (isset($bFlagRead_nombre_representante_legal) && $bFlagRead_nombre_representante_legal))
{ 
    $this->ajax_return_values_nombre_representante_legal(true);
}
if ($original_tipo_registro != $modificado_tipo_registro || (isset($bFlagRead_tipo_registro) && $bFlagRead_tipo_registro))
{ 
    $this->ajax_return_values_tipo_registro(true);
}
if ($original_estado_org != $modificado_estado_org || (isset($bFlagRead_estado_org) && $bFlagRead_estado_org))
{ 
    $this->ajax_return_values_estado_org(true);
}
if ($original_ruc_definitivo != $modificado_ruc_definitivo || (isset($bFlagRead_ruc_definitivo) && $bFlagRead_ruc_definitivo))
{ 
    $this->ajax_return_values_ruc_definitivo(true);
}
if ($original_ruc_provisional != $modificado_ruc_provisional || (isset($bFlagRead_ruc_provisional) && $bFlagRead_ruc_provisional))
{ 
    $this->ajax_return_values_ruc_provisional(true);
}
if ($original_organizacion != $modificado_organizacion || (isset($bFlagRead_organizacion) && $bFlagRead_organizacion))
{ 
    $this->ajax_return_values_organizacion(true);
}
if ($original_cod_zona != $modificado_cod_zona || (isset($bFlagRead_cod_zona) && $bFlagRead_cod_zona))
{ 
    $this->ajax_return_values_cod_zona(true);
}
if ($original_cod_provincia != $modificado_cod_provincia || (isset($bFlagRead_cod_provincia) && $bFlagRead_cod_provincia))
{ 
    $this->ajax_return_values_cod_provincia(true);
}
if ($original_cod_canton != $modificado_cod_canton || (isset($bFlagRead_cod_canton) && $bFlagRead_cod_canton))
{ 
    $this->ajax_return_values_cod_canton(true);
}
if ($original_cod_parroquia != $modificado_cod_parroquia || (isset($bFlagRead_cod_parroquia) && $bFlagRead_cod_parroquia))
{ 
    $this->ajax_return_values_cod_parroquia(true);
}
if ($original_direccion != $modificado_direccion || (isset($bFlagRead_direccion) && $bFlagRead_direccion))
{ 
    $this->ajax_return_values_direccion(true);
}
if ($original_email != $modificado_email || (isset($bFlagRead_email) && $bFlagRead_email))
{ 
    $this->ajax_return_values_email(true);
}
if ($original_telefono != $modificado_telefono || (isset($bFlagRead_telefono) && $bFlagRead_telefono))
{ 
    $this->ajax_return_values_telefono(true);
}
if ($original_num_resolucion != $modificado_num_resolucion || (isset($bFlagRead_num_resolucion) && $bFlagRead_num_resolucion))
{ 
    $this->ajax_return_values_num_resolucion(true);
}
if ($original_tipo != $modificado_tipo || (isset($bFlagRead_tipo) && $bFlagRead_tipo))
{ 
    $this->ajax_return_values_tipo(true);
}
if ($original_legalmente_constituida != $modificado_legalmente_constituida || (isset($bFlagRead_legalmente_constituida) && $bFlagRead_legalmente_constituida))
{ 
    $this->ajax_return_values_legalmente_constituida(true);
}
if ($original_estado_organizacion != $modificado_estado_organizacion || (isset($bFlagRead_estado_organizacion) && $bFlagRead_estado_organizacion))
{ 
    $this->ajax_return_values_estado_organizacion(true);
}
if ($original_forma_organizacion != $modificado_forma_organizacion || (isset($bFlagRead_forma_organizacion) && $bFlagRead_forma_organizacion))
{ 
    $this->ajax_return_values_forma_organizacion(true);
}
if ($original_actividad != $modificado_actividad || (isset($bFlagRead_actividad) && $bFlagRead_actividad))
{ 
    $this->ajax_return_values_actividad(true);
}
form_u_organizaciones_pack_ajax_response();
exit;
$_SESSION['scriptcase']['form_u_organizaciones']['contr_erro'] = 'off';
}
function email_onBlur()
{
$_SESSION['scriptcase']['form_u_organizaciones']['contr_erro'] = 'on';
                                       
$original_email = $this->email;

$this->email  = strtolower($this->email );

$modificado_email = $this->email;
$this->nm_formatar_campos('email');
if ($original_email != $modificado_email || (isset($bFlagRead_email) && $bFlagRead_email))
{ 
    $this->ajax_return_values_email(true);
}
form_u_organizaciones_pack_ajax_response();
exit;


$_SESSION['scriptcase']['form_u_organizaciones']['contr_erro'] = 'off';
}
function control_session()
{
$_SESSION['scriptcase']['form_u_organizaciones']['contr_erro'] = 'on';
                                       
	
	if(isset($_SESSION['nw']))
		{ 
			
			if($_SESSION['nw'] < time())
				{ 
					unset($_SESSION['nw']);
					echo"<script>
							alert('Estimad@ usuari@, su sesión ha sobrepasado el tiempo de inactividad permitido. Por favor ingrese nuevamente.');
						</script>";
					 if (!isset($this->Campos_Mens_erro) || empty($this->Campos_Mens_erro))
 { 
$this->nmgp_redireciona_form($this->Ini->path_link . "control_usuarios/control_usuarios.php", $this->nm_location, "", "_parent", "ret_self", 440, 630);
 };
				}
			else
				{ 
					$_SESSION['nw'] = time() + 900;
				}
		}
$_SESSION['scriptcase']['form_u_organizaciones']['contr_erro'] = 'off';
}
function RetornaCodZona($codigo)
{
$_SESSION['scriptcase']['form_u_organizaciones']['contr_erro'] = 'on';
                                       	
	$getInfo = 'select zona from u_provincia where cod_provincia ="'.$codigo.'"';
	 
      $nm_select = $getInfo; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $this->rs = array();
      if ($rx = $this->Db->Execute($nm_select)) 
      {  
          $y = 0; 
          $nm_count = $rx->FieldCount();
          while (!$rx->EOF)
          {  
                 for ($x = 0; $x < $nm_count; $x++)
                 {  
                      $this->rs[$y] [$x] = $rx->fields[$x];
                 }
                 $y++; 
                 $rx->MoveNext();
          } 
          $rx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      {  
          $this->rs = false;
          $this->rs_erro = $this->Db->ErrorMsg();
      } 
;
	if (isset($this->rs[0][0]))     
		{ $codigo = $this->rs[0][0];}
	else
		{ $codigo = 0;}
	return $codigo;
$_SESSION['scriptcase']['form_u_organizaciones']['contr_erro'] = 'off';
}
function RetornaCodProvincia($codigo)
{
$_SESSION['scriptcase']['form_u_organizaciones']['contr_erro'] = 'on';
                                       
	$getInfo = 'select cod_provincia from u_provincia where provincia ="'.$codigo.'"';
	 
      $nm_select = $getInfo; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $this->rs = array();
      if ($rx = $this->Db->Execute($nm_select)) 
      {  
          $y = 0; 
          $nm_count = $rx->FieldCount();
          while (!$rx->EOF)
          {  
                 for ($x = 0; $x < $nm_count; $x++)
                 {  
                      $this->rs[$y] [$x] = $rx->fields[$x];
                 }
                 $y++; 
                 $rx->MoveNext();
          } 
          $rx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      {  
          $this->rs = false;
          $this->rs_erro = $this->Db->ErrorMsg();
      } 
;
	if (isset($this->rs[0][0]))     
		{ $codigo = $this->rs[0][0];}
	else
		{ $codigo = 0;}
	return $codigo;
$_SESSION['scriptcase']['form_u_organizaciones']['contr_erro'] = 'off';
}
function RetornaCodCanton($cod_provincia, $codigo)
{
$_SESSION['scriptcase']['form_u_organizaciones']['contr_erro'] = 'on';
                                       
	$getInfo = 'select cod_canton from u_canton where cod_provincia='.$cod_provincia.' and canton ="'.$codigo.'"';
	 
      $nm_select = $getInfo; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $this->rs = array();
      if ($rx = $this->Db->Execute($nm_select)) 
      {  
          $y = 0; 
          $nm_count = $rx->FieldCount();
          while (!$rx->EOF)
          {  
                 for ($x = 0; $x < $nm_count; $x++)
                 {  
                      $this->rs[$y] [$x] = $rx->fields[$x];
                 }
                 $y++; 
                 $rx->MoveNext();
          } 
          $rx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      {  
          $this->rs = false;
          $this->rs_erro = $this->Db->ErrorMsg();
      } 
;
	if (isset($this->rs[0][0]))     
		{ $codigo = $this->rs[0][0];}
	else
		{ $codigo = 0;}
	return $codigo;
$_SESSION['scriptcase']['form_u_organizaciones']['contr_erro'] = 'off';
}
function RetornaCodParroquia($cod_provincia, $cod_canton, $codigo)
{
$_SESSION['scriptcase']['form_u_organizaciones']['contr_erro'] = 'on';
                                       
	$getInfo = 'select cod_parroquia from u_parroquia where cod_provincia='.$cod_provincia.' and cod_canton ='.$cod_canton.' and parroquia ="'.$codigo.'"';
	 
      $nm_select = $getInfo; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $this->rs = array();
      if ($rx = $this->Db->Execute($nm_select)) 
      {  
          $y = 0; 
          $nm_count = $rx->FieldCount();
          while (!$rx->EOF)
          {  
                 for ($x = 0; $x < $nm_count; $x++)
                 {  
                      $this->rs[$y] [$x] = $rx->fields[$x];
                 }
                 $y++; 
                 $rx->MoveNext();
          } 
          $rx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      {  
          $this->rs = false;
          $this->rs_erro = $this->Db->ErrorMsg();
      } 
;
	if (isset($this->rs[0][0]))     
		{ $codigo = $this->rs[0][0];}
	else
		{ $codigo = 0;}
	return $codigo;
$_SESSION['scriptcase']['form_u_organizaciones']['contr_erro'] = 'off';
}
function RetornaTipoOrganizacion($tipo_organizacion_aux)
{
$_SESSION['scriptcase']['form_u_organizaciones']['contr_erro'] = 'on';
                                       
	
	switch($tipo_organizacion_aux) 
	{ 			
		case 'ASOCIACION':
			$tipo_aux = 'asociativo';
		break;
		
		case 'ASOCIATIVO':
			$tipo_aux = 'asociativo';
		break;
		
		case 'COOPERATIVA':
			$tipo_aux = 'cooperativo';
		break;	
		
			
		default:
			$tipo_aux = '-1';
		break;
	}
	
	return $tipo_aux;

$_SESSION['scriptcase']['form_u_organizaciones']['contr_erro'] = 'off';
}
function EncerarControles()
	{
$_SESSION['scriptcase']['form_u_organizaciones']['contr_erro'] = 'on';
                                       
		$this->estado_org  = "";
		$this->ruc_definitivo  = "";
		$this->ruc_provisional  = "";
		$this->organizacion  = "";
		$this->cod_zona  = "-1";
		$this->cod_provincia  = "-1";
		$this->cod_canton  = "-1";
		$this->cod_parroquia  = "-1";
		$this->direccion  = "";
		$this->email  = "";
		$this->telefono  = "";
		$this->nombre_representante_legal  = "";
		$this->num_resolucion  = "";
		$this->tipo  = "-1"; 
		$this->legalmente_constituida  = "-1";
		$this->estado_organizacion  = "-1";
		$this->forma_organizacion  = "-1";
		
		$this->actividad  = "";
	
$_SESSION['scriptcase']['form_u_organizaciones']['contr_erro'] = 'off';
}
function CodigoUbicacion($txtUbicacion)
{
$_SESSION['scriptcase']['form_u_organizaciones']['contr_erro'] = 'on';
                                       
	
	
	$auxUbicacion = trim($txtUbicacion, " ");
	

	$datosUbicacion = explode("\ ", $auxUbicacion);
	$codZona = 0;
	$codProv = 0;
	$codCanton = 0;
	$codParroquia = 0;
	if(count($datosUbicacion) == 5)
	{ 
		$sqlProv = "select * from u_provincia where provincia like '%" . $datosUbicacion[2] . "%' order by provincia asc limit 1";
		 
      $nm_select = $sqlProv; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $this->rs = array();
      if ($rx = $this->Db->Execute($nm_select)) 
      {  
          $y = 0; 
          $nm_count = $rx->FieldCount();
          while (!$rx->EOF)
          {  
                 for ($x = 0; $x < $nm_count; $x++)
                 {  
                      $this->rs[$y] [$x] = $rx->fields[$x];
                 }
                 $y++; 
                 $rx->MoveNext();
          } 
          $rx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      {  
          $this->rs = false;
          $this->rs_erro = $this->Db->ErrorMsg();
      } 
;
		if (isset($this->rs[0][0]))   
		{ 
			$codProv = $this->rs[0][0];
			$codZona = $this->rs[0][3];
		}
		if($codProv > 0)
		{ 
			if($codZona == 9)
			{ 
				$sqlCanton = "select * from u_canton where cod_provincia in (17,71) and canton = '" . $datosUbicacion[3] . "'";	
			}else
			{ 
				$sqlCanton = "select * from u_canton where cod_provincia = " . $codProv . " and canton = '" . $datosUbicacion[3] . "'";
			}
			 
      $nm_select = $sqlCanton; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $this->rs = array();
      if ($rx = $this->Db->Execute($nm_select)) 
      {  
          $y = 0; 
          $nm_count = $rx->FieldCount();
          while (!$rx->EOF)
          {  
                 for ($x = 0; $x < $nm_count; $x++)
                 {  
                      $this->rs[$y] [$x] = $rx->fields[$x];
                 }
                 $y++; 
                 $rx->MoveNext();
          } 
          $rx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      {  
          $this->rs = false;
          $this->rs_erro = $this->Db->ErrorMsg();
      } 
;
			if (isset($this->rs[0][0]))   
			{ 
				$codCanton = $this->rs[0][1];
				if($codZona == 9)
				{ 
					$codProv = $this->rs[0][0];
				}
			}
		}

		if($codProv > 0 && $codCanton > 0)
		{ 
			$sqlParroquia = "select * from u_parroquia where cod_provincia = " . $codProv . " and cod_canton = " . $codCanton . " and parroquia = '" . $datosUbicacion[4] . "'";
			 
      $nm_select = $sqlParroquia; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $this->rs = array();
      if ($rx = $this->Db->Execute($nm_select)) 
      {  
          $y = 0; 
          $nm_count = $rx->FieldCount();
          while (!$rx->EOF)
          {  
                 for ($x = 0; $x < $nm_count; $x++)
                 {  
                      $this->rs[$y] [$x] = $rx->fields[$x];
                 }
                 $y++; 
                 $rx->MoveNext();
          } 
          $rx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      {  
          $this->rs = false;
          $this->rs_erro = $this->Db->ErrorMsg();
      } 
;
			if (isset($this->rs[0][0]))   
			{ 
				$codParroquia = $this->rs[0][2];
			}
		}
	}

	if(count($datosUbicacion) == 3)
	{ 

		$sqlProv = "select * from u_provincia where provincia like '%" . $datosUbicacion[2] . "%' order by provincia asc limit 1";
		 
      $nm_select = $sqlProv; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $this->rs = array();
      if ($rx = $this->Db->Execute($nm_select)) 
      {  
          $y = 0; 
          $nm_count = $rx->FieldCount();
          while (!$rx->EOF)
          {  
                 for ($x = 0; $x < $nm_count; $x++)
                 {  
                      $this->rs[$y] [$x] = $rx->fields[$x];
                 }
                 $y++; 
                 $rx->MoveNext();
          } 
          $rx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      {  
          $this->rs = false;
          $this->rs_erro = $this->Db->ErrorMsg();
      } 
;
		if (isset($this->rs[0][0]))   
		{ 
			$codProv = $this->rs[0][0];
		}	
	}
	
	array_push($datosUbicacion, $codProv);
	array_push($datosUbicacion, $codCanton);
	array_push($datosUbicacion, $codParroquia);	
	array_push($datosUbicacion, $codZona);	
	return $datosUbicacion;
$_SESSION['scriptcase']['form_u_organizaciones']['contr_erro'] = 'off';
}
function BloquearControles()
	{
$_SESSION['scriptcase']['form_u_organizaciones']['contr_erro'] = 'on';
                                       
		$this->sc_ajax_javascript('nm_field_disabled', array("estado_org=disabled", ""));
;
		$this->sc_ajax_javascript('nm_field_disabled', array("ruc_definitivo=disabled", ""));
;
		$this->sc_ajax_javascript('nm_field_disabled', array("ruc_provisional=disabled", ""));
;
		$this->sc_ajax_javascript('nm_field_disabled', array("organizacion=disabled", ""));
;
		$this->sc_ajax_javascript('nm_field_disabled', array("actividad=disabled", ""));
;
		$this->sc_ajax_javascript('nm_field_disabled', array("cod_zona=disabled", ""));
;
		$this->sc_ajax_javascript('nm_field_disabled', array("cod_provincia=disabled", ""));
;
		$this->sc_ajax_javascript('nm_field_disabled', array("cod_canton=disabled", ""));
;
		$this->sc_ajax_javascript('nm_field_disabled', array("cod_parroquia=disabled", ""));
;
		$this->sc_ajax_javascript('nm_field_disabled', array("direccion=disabled", ""));
;
		
	
$_SESSION['scriptcase']['form_u_organizaciones']['contr_erro'] = 'off';
}
function VisualizarBloques($variable)
	{
$_SESSION['scriptcase']['form_u_organizaciones']['contr_erro'] = 'on';
                                       
		if($variable == 'on') 
		{ 
			$this->Ini->nm_hidden_blocos[0] = "off"; $this->NM_ajax_info['blockDisplay']['0'] = 'off';
		}
		else
		{ 
			$this->Ini->nm_hidden_blocos[0] = "on"; $this->NM_ajax_info['blockDisplay']['0'] = 'on';
		}
		$this->Ini->nm_hidden_blocos[1] = "$variable"; $this->NM_ajax_info['blockDisplay']['1'] = '$variable';
		$this->Ini->nm_hidden_blocos[2] = "$variable"; $this->NM_ajax_info['blockDisplay']['2'] = '$variable';
		$this->Ini->nm_hidden_blocos[3] = "$variable"; $this->NM_ajax_info['blockDisplay']['3'] = '$variable';
		$this->Ini->nm_hidden_blocos[4] = "$variable"; $this->NM_ajax_info['blockDisplay']['4'] = '$variable';
		$this->Ini->nm_hidden_blocos[5] = "$variable"; $this->NM_ajax_info['blockDisplay']['5'] = '$variable';
		$this->Ini->nm_hidden_blocos[6] = "$variable"; $this->NM_ajax_info['blockDisplay']['6'] = '$variable';
		$this->Ini->nm_hidden_blocos[7] = "$variable"; $this->NM_ajax_info['blockDisplay']['7'] = '$variable';
		$this->NM_ajax_info['buttonDisplay']['insert'] = $this->nmgp_botoes["insert"] = "$variable";;
$_SESSION['scriptcase']['form_u_organizaciones']['contr_erro'] = 'off';
}
function ConectarWsSEPS($urlWs,$parametros)
	{
$_SESSION['scriptcase']['form_u_organizaciones']['contr_erro'] = 'on';
                                       
		$client = new SoapClient($urlWs, $parametros);	
		return $client;
	
$_SESSION['scriptcase']['form_u_organizaciones']['contr_erro'] = 'off';
}
function BuscarDatosSEPS($client, $numeroIdentificacion, $codPaquete)
	{
$_SESSION['scriptcase']['form_u_organizaciones']['contr_erro'] = 'on';
                                       
		
		$valoresBuscarSEPS = array();
		$valoresBuscarSEPS['numeroIdentificacion'] = $numeroIdentificacion;
		$valoresBuscarSEPS['codigoPaquete'] = $codPaquete;
		$valoresDevueltosSEPS = array();
		try
		{ 
			
			
			$valoresDevueltosSEPS =$this->ConectarWS($client->__soapCall("getFichaGeneral", array($valoresBuscarSEPS)));
			return $valoresDevueltosSEPS;
		}
		catch(SoapFault $exception)
		{ 
			if($codPaquete == 1119) 
				{ 
					$error = $exception->getMessage().",Información de la SEPS CON PROBLEMAS, REVISE LA INFORMACIÓN.<br>";
					 if (!isset($this->Campos_Mens_erro) || empty($this->Campos_Mens_erro))
 { 
$this->nmgp_redireciona_form($this->Ini->path_link . "reconexionWS/reconexionWS.php", $this->nm_location, "mensaje?#?" . $error . "?@?" . "tipo?#?" . "org" . "?@?", "_self", "ret_self", 440, 630);
 };
				}
			
			if($codPaquete == 186) 
				{ 	
					$error = $exception->getMessage().",Información del SRI CON PROBLEMAS, REVISE LA INFORMACIÓN.<br>";
					 if (!isset($this->Campos_Mens_erro) || empty($this->Campos_Mens_erro))
 { 
$this->nmgp_redireciona_form($this->Ini->path_link . "reconexionWS/reconexionWS.php", $this->nm_location, "mensaje?#?" . $error . "?@?" . "tipo?#?" . "org" . "?@?", "_self", "ret_self", 440, 630);
 };
				} 
		}
$_SESSION['scriptcase']['form_u_organizaciones']['contr_erro'] = 'off';
}
function ConectarWS($res_aux)
	{
$_SESSION['scriptcase']['form_u_organizaciones']['contr_erro'] = 'on';
                                       
		$valoresDevueltos =$this->SetearValoresSEPS($res_aux);
		return $valoresDevueltos;
	
$_SESSION['scriptcase']['form_u_organizaciones']['contr_erro'] = 'off';
}
function SetearValoresSEPS($resultadoSEPS)
	{
$_SESSION['scriptcase']['form_u_organizaciones']['contr_erro'] = 'on';
                                       
		$consultaSEPS = array();
		$consultaSEPS['calle'] = $resultadoSEPS->return->instituciones->datosPrincipales->registros[0]->valor;
		$consultaSEPS['canton'] = $resultadoSEPS->return->instituciones->datosPrincipales->registros[1]->valor;
		$consultaSEPS['clase_org'] = $resultadoSEPS->return->instituciones->datosPrincipales->registros[2]->valor;
		$consultaSEPS['correo_org'] = $resultadoSEPS->return->instituciones->datosPrincipales->registros[3]->valor;
		$consultaSEPS['estado_org'] = $resultadoSEPS->return->instituciones->datosPrincipales->registros[4]->valor;
		$consultaSEPS['fecha_registro_seps'] = $resultadoSEPS->return->instituciones->datosPrincipales->registros[5]->valor;
		$consultaSEPS['grupo_org'] = $resultadoSEPS->return->instituciones->datosPrincipales->registros[6]->valor;
		$consultaSEPS['interseccion'] = $resultadoSEPS->return->instituciones->datosPrincipales->registros[7]->valor;
		$consultaSEPS['nombre_representante_legal_SEPS'] = $resultadoSEPS->return->instituciones->datosPrincipales->registros[8]->valor;
		$consultaSEPS['numero'] = $resultadoSEPS->return->instituciones->datosPrincipales->registros[9]->valor;
		$consultaSEPS['num_resolucion_seps'] = $resultadoSEPS->return->instituciones->datosPrincipales->registros[10]->valor;
		$consultaSEPS['parroquia'] = $resultadoSEPS->return->instituciones->datosPrincipales->registros[11]->valor;
		$consultaSEPS['provincia'] = $resultadoSEPS->return->instituciones->datosPrincipales->registros[12]->valor;
		$consultaSEPS['razon_social'] = $resultadoSEPS->return->instituciones->datosPrincipales->registros[13]->valor;
		$consultaSEPS['ruc'] = $resultadoSEPS->return->instituciones->datosPrincipales->registros[14]->valor;
		$consultaSEPS['telefono'] = $resultadoSEPS->return->instituciones->datosPrincipales->registros[15]->valor;
		$consultaSEPS['tipo_organizacion'] = $resultadoSEPS->return->instituciones->datosPrincipales->registros[16]->valor;
		return $consultaSEPS;
	
$_SESSION['scriptcase']['form_u_organizaciones']['contr_erro'] = 'off';
}
function ConectarWsSRI($urlWs,$parametros)
	{
$_SESSION['scriptcase']['form_u_organizaciones']['contr_erro'] = 'on';
                                       
		$client = new SoapClient($urlWs, $parametros);	
		return $client;
	
$_SESSION['scriptcase']['form_u_organizaciones']['contr_erro'] = 'off';
}
function BuscarDatosSRI($client, $numeroIdentificacion, $codPaquete)
	{
$_SESSION['scriptcase']['form_u_organizaciones']['contr_erro'] = 'on';
                                       
		$valoresBuscarSRI = array();
		$valoresBuscarSRI['numeroIdentificacion'] = $numeroIdentificacion;
		$valoresBuscarSRI['codigoPaquete'] = $codPaquete;
		$valoresDevueltosSRI = array();
		try
		{ 
			$res = $client->__soapCall("getFichaGeneral", array($valoresBuscarSRI));
			$valoresDevueltosSRI =$this->SetearValoresSRI($res);
			return $valoresDevueltosSRI;
		}
		catch(SoapFault $exception)
		{ 
			$error= $exception->getMessage().",Información del SRI CON PROBLEMAS, REVISE LA INFORMACIÓN.<br>";
			 if (!isset($this->Campos_Mens_erro) || empty($this->Campos_Mens_erro))
 { 
$this->nmgp_redireciona_form($this->Ini->path_link . "reconexionWS/reconexionWS.php", $this->nm_location, "mensaje?#?" . $error . "?@?" . "tipo?#?" . "org" . "?@?", "_self", "ret_self", 440, 630);
 };
		}
$_SESSION['scriptcase']['form_u_organizaciones']['contr_erro'] = 'off';
}
function SetearValoresSRI($resultadoSRI)
	{
$_SESSION['scriptcase']['form_u_organizaciones']['contr_erro'] = 'on';
                                       
		$consultaSRI = array();
		$consultaSRI['persona_sociedad'] = $resultadoSRI->return->instituciones->datosPrincipales->registros[0]->valor;
		$consultaSRI['nombre_organizacion'] = $resultadoSRI->return->instituciones->datosPrincipales->registros[1]->valor;
		$consultaSRI['actividad_economica'] = $resultadoSRI->return->instituciones->datosPrincipales->registros[2]->valor;
		$consultaSRI['estado_organizacion'] = $resultadoSRI->return->instituciones->datosPrincipales->registros[3]->valor;
		$consultaSRI['forma_organizacion'] = $resultadoSRI->return->instituciones->datosPrincipales->registros[4]->valor;
		$consultaSRI['ubicacion'] = $resultadoSRI->return->instituciones->datosPrincipales->registros[5]->valor;
		
		
		$consultaSRI['calle'] = $resultadoSRI->return->instituciones->detalle->items[0]->registros[3]->valor;
		$consultaSRI['interseccion'] = $resultadoSRI->return->instituciones->detalle->items[0]->registros[4]->valor;
		$consultaSRI['numero'] = $resultadoSRI->return->instituciones->detalle->items[0]->registros[5]->valor;
		
		
		
		
		
		
		
		return $consultaSRI;
	
$_SESSION['scriptcase']['form_u_organizaciones']['contr_erro'] = 'off';
}
//
 function nm_gera_html()
 {
    global
           $nm_url_saida, $nmgp_url_saida, $nm_saida_global, $nm_apl_dependente, $glo_subst, $sc_check_excl, $sc_check_incl, $nmgp_num_form, $NM_run_iframe;
     if ($this->Embutida_proc)
     {
         return;
     }
     if ($this->nmgp_form_show == 'off')
     {
         exit;
     }
     $HTTP_REFERER = (isset($_SERVER['HTTP_REFERER'])) ? $_SERVER['HTTP_REFERER'] : ""; 
     $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
     $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['botoes'] = $this->nmgp_botoes;
     if ($this->nmgp_opcao != "recarga" && $this->nmgp_opcao != "muda_form")
     {
         $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['opc_ant'] = $this->nmgp_opcao;
     }
     else
     {
         $this->nmgp_opcao = $this->nmgp_opc_ant;
     }
     if (!empty($this->Campos_Mens_erro)) 
     {
         $this->Erro->mensagem(__FILE__, __LINE__, "critica", $this->Campos_Mens_erro); 
         $this->Campos_Mens_erro = "";
     }
     if (($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['run_iframe'] == "R") && $this->nm_flag_iframe && empty($this->nm_todas_criticas))
     {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['run_iframe_ajax']))
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['retorno_edit'] = array("edit", "");
          }
          else
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['retorno_edit'] .= "&nmgp_opcao=edit";
          }
          if ($this->sc_evento == "insert" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['run_iframe'] == "F")
          {
              if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['run_iframe_ajax']))
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['retorno_edit'] = array("edit", "fim");
              }
              else
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['retorno_edit'] .= "&rec=fim";
              }
          }
          $this->NM_close_db(); 
          if ($this->sc_evento == "insert")
          {
              $this->nm_gera_mensagem("La información ha sido almacenada satisfactoriamente...", $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['retorno_edit'], "parent"); 
          }
          if ($this->sc_evento == "update")
          {
              $this->nm_gera_mensagem("La información ha sido actualizada satisfactoriamente...", $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['retorno_edit'], "parent"); 
          }
          if ($this->sc_evento == "delete")
          {
              $this->nm_gera_mensagem("La información ha sido eliminada satisfactoriamente...", $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['retorno_edit'], "parent"); 
          }
          $sJsParent = '';
          if ($this->NM_ajax_flag && isset($this->NM_ajax_info['param']['buffer_output']) && $this->NM_ajax_info['param']['buffer_output'])
          {
              if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['run_iframe_ajax']))
              {
                  $this->NM_ajax_info['ajaxJavascript'][] = array("parent.ajax_navigate", $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['retorno_edit']);
              }
              else
              {
                  $sJsParent .= 'parent';
                  $this->NM_ajax_info['redir']['metodo'] = 'location';
                  $this->NM_ajax_info['redir']['action'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['retorno_edit'];
                  $this->NM_ajax_info['redir']['target'] = $sJsParent;
              }
              form_u_organizaciones_pack_ajax_response();
              exit;
          }
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
            "http://www.w3.org/TR/1999/REC-html401-19991224/loose.dtd">

         <html><body>
         <script type="text/javascript">
<?php
    
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['run_iframe_ajax']))
    {
        $opc = ($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['run_iframe'] == "F" && $this->sc_evento == "insert") ? "fim" : "";
        echo "parent.ajax_navigate('edit', '" .$opc . "');";
    }
    else
    {
        echo $sJsParent . "parent.location = '" . $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['retorno_edit'] . "';";
    }
?>
         </script>
         </body></html>
<?php
         exit;
     }
    include_once("form_u_organizaciones_form0.php");
 }
   function jqueryCalendarDtFormat($sFormat, $sSep)
   {
       $sFormat = chunk_split(str_replace('yyyy', 'yy', $sFormat), 2, $sSep);

       if ($sSep == substr($sFormat, -1))
       {
           $sFormat = substr($sFormat, 0, -1);
       }

       return $sFormat;
   } // jqueryCalendarDtFormat

   function jqueryCalendarTimeStart($sFormat)
   {
       $aDateParts = explode(';', $sFormat);

       if (2 == sizeof($aDateParts))
       {
           $sTime = $aDateParts[1];
       }
       else
       {
           $sTime = 'hh:mm:ss';
       }

       return str_replace(array('h', 'm', 'i', 's'), array('0', '0', '0', '0'), $sTime);
   } // jqueryCalendarTimeStart

   function jqueryCalendarWeekInit($sDay)
   {
       switch ($sDay) {
           case 'MO': return 1; break;
           case 'TU': return 2; break;
           case 'WE': return 3; break;
           case 'TH': return 4; break;
           case 'FR': return 5; break;
           case 'SA': return 6; break;
           default  : return 7; break;
       }
   } // jqueryCalendarWeekInit

   function jqueryIconFile($sModule)
   {
       if ('calendar' == $sModule)
       {
           if (isset($this->arr_buttons['bcalendario']) && isset($this->arr_buttons['bcalendario']['type']) && 'image' == $this->arr_buttons['bcalendario']['type'])
           {
               $sImage = $this->arr_buttons['bcalendario']['image'];
           }
       }
       elseif ('calculator' == $sModule)
       {
           if (isset($this->arr_buttons['bcalculadora']) && isset($this->arr_buttons['bcalculadora']['type']) && 'image' == $this->arr_buttons['bcalculadora']['type'])
           {
               $sImage = $this->arr_buttons['bcalculadora']['image'];
           }
       }

       return $this->Ini->path_icones . '/' . $sImage;
   } // jqueryIconFile


 function new_date_format($type, $field)
 {
     $new_date_format = '';

     if ('DT' == $type)
     {
         $date_format  = $this->field_config[$field]['date_format'];
         $date_sep     = $this->field_config[$field]['date_sep'];
         $date_display = $this->field_config[$field]['date_display'];
         $time_format  = '';
         $time_sep     = '';
         $time_display = '';
     }
     elseif ('DH' == $type)
     {
         $date_format  = false !== strpos($this->field_config[$field]['date_format'] , ';') ? substr($this->field_config[$field]['date_format'] , 0, strpos($this->field_config[$field]['date_format'] , ';')) : $this->field_config[$field]['date_format'];
         $date_sep     = $this->field_config[$field]['date_sep'];
         $date_display = false !== strpos($this->field_config[$field]['date_display'], ';') ? substr($this->field_config[$field]['date_display'], 0, strpos($this->field_config[$field]['date_display'], ';')) : $this->field_config[$field]['date_display'];
         $time_format  = false !== strpos($this->field_config[$field]['date_format'] , ';') ? substr($this->field_config[$field]['date_format'] , strpos($this->field_config[$field]['date_format'] , ';') + 1) : '';
         $time_sep     = $this->field_config[$field]['time_sep'];
         $time_display = false !== strpos($this->field_config[$field]['date_display'], ';') ? substr($this->field_config[$field]['date_display'], strpos($this->field_config[$field]['date_display'], ';') + 1) : '';
     }
     elseif ('HH' == $type)
     {
         $date_format  = '';
         $date_sep     = '';
         $date_display = '';
         $time_format  = $this->field_config[$field]['date_format'];
         $time_sep     = $this->field_config[$field]['time_sep'];
         $time_display = $this->field_config[$field]['date_display'];
     }

     if ('DT' == $type || 'DH' == $type)
     {
         $date_array = array();
         $date_index = 0;
         $date_ult   = '';
         for ($i = 0; $i < strlen($date_format); $i++)
         {
             $char = strtolower(substr($date_format, $i, 1));
             if (in_array($char, array('d', 'm', 'y', 'a')))
             {
                 if ('a' == $char)
                 {
                     $char = 'y';
                 }
                 if ($char == $date_ult)
                 {
                     $date_array[$date_index] .= $char;
                 }
                 else
                 {
                     if ('' != $date_ult)
                     {
                         $date_index++;
                     }
                     $date_array[$date_index] = $char;
                 }
             }
             $date_ult = $char;
         }

         $disp_array = array();
         $date_index = 0;
         $date_ult   = '';
         for ($i = 0; $i < strlen($date_display); $i++)
         {
             $char = strtolower(substr($date_display, $i, 1));
             if (in_array($char, array('d', 'm', 'y', 'a')))
             {
                 if ('a' == $char)
                 {
                     $char = 'y';
                 }
                 if ($char == $date_ult)
                 {
                     $disp_array[$date_index] .= $char;
                 }
                 else
                 {
                     if ('' != $date_ult)
                     {
                         $date_index++;
                     }
                     $disp_array[$date_index] = $char;
                 }
             }
             $date_ult = $char;
         }

         $date_final = array();
         foreach ($date_array as $date_part)
         {
             if (in_array($date_part, $disp_array))
             {
                 $date_final[] = $date_part;
             }
         }

         $date_format = implode($date_sep, $date_final);
     }
     if ('HH' == $type || 'DH' == $type)
     {
         $time_array = array();
         $time_index = 0;
         $time_ult   = '';
         for ($i = 0; $i < strlen($time_format); $i++)
         {
             $char = strtolower(substr($time_format, $i, 1));
             if (in_array($char, array('h', 'i', 's')))
             {
                 if ($char == $time_ult)
                 {
                     $time_array[$time_index] .= $char;
                 }
                 else
                 {
                     if ('' != $time_ult)
                     {
                         $time_index++;
                     }
                     $time_array[$time_index] = $char;
                 }
             }
             $time_ult = $char;
         }

         $disp_array = array();
         $time_index = 0;
         $time_ult   = '';
         for ($i = 0; $i < strlen($time_display); $i++)
         {
             $char = strtolower(substr($time_display, $i, 1));
             if (in_array($char, array('h', 'i', 's')))
             {
                 if ($char == $time_ult)
                 {
                     $disp_array[$time_index] .= $char;
                 }
                 else
                 {
                     if ('' != $time_ult)
                     {
                         $time_index++;
                     }
                     $disp_array[$time_index] = $char;
                 }
             }
             $time_ult = $char;
         }

         $time_final = array();
         foreach ($time_array as $time_part)
         {
             if (in_array($time_part, $disp_array))
             {
                 $time_final[] = $time_part;
             }
         }

         $time_format = implode($time_sep, $time_final);
     }

     if ('DT' == $type)
     {
         $old_date_format = $date_format;
     }
     elseif ('DH' == $type)
     {
         $old_date_format = $date_format . ';' . $time_format;
     }
     elseif ('HH' == $type)
     {
         $old_date_format = $time_format;
     }

     for ($i = 0; $i < strlen($old_date_format); $i++)
     {
         $char = substr($old_date_format, $i, 1);
         if ('/' == $char)
         {
             $new_date_format .= $date_sep;
         }
         elseif (':' == $char)
         {
             $new_date_format .= $time_sep;
         }
         else
         {
             $new_date_format .= $char;
         }
     }

     $this->field_config[$field]['date_format'] = $new_date_format;
     if ('DH' == $type)
     {
         $new_date_format                                      = explode(';', $new_date_format);
         $this->field_config[$field]['date_format_js']        = $new_date_format[0];
         $this->field_config[$field . '_hora']['date_format'] = $new_date_format[1];
         $this->field_config[$field . '_hora']['time_sep']    = $this->field_config[$field]['time_sep'];
     }
 } // new_date_format

   function SC_fast_search($field, $arg_search, $data_search)
   {
      if (empty($data_search)) 
      {
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['where_filter']);
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['total']);
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['fast_search']);
          return;
      }
      $comando = "";
      $sv_data = $data_search;
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "ruc_definitivo", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "ruc_provisional", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "organizacion", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "actividad", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $data_lookup = $this->SC_lookup_tipo($arg_search, $data_search);
          if (is_array($data_lookup) && !empty($data_lookup)) 
          {
              $this->SC_monta_condicao($comando, "tipo", $arg_search, $data_lookup);
          }
      }
      if ($field == "SC_all_Cmp") 
      {
          $data_lookup = $this->SC_lookup_forma_organizacion($arg_search, $data_search);
          if (is_array($data_lookup) && !empty($data_lookup)) 
          {
              $this->SC_monta_condicao($comando, "forma_organizacion", $arg_search, $data_lookup);
          }
      }
      if ($field == "SC_all_Cmp") 
      {
          $data_lookup = $this->SC_lookup_estado_org($arg_search, $data_search);
          if (is_array($data_lookup) && !empty($data_lookup)) 
          {
              $this->SC_monta_condicao($comando, "estado_org", $arg_search, $data_lookup);
          }
      }
      if ($field == "SC_all_Cmp") 
      {
          $data_lookup = $this->SC_lookup_cod_zona($arg_search, $data_search);
          if (is_array($data_lookup) && !empty($data_lookup)) 
          {
              $this->SC_monta_condicao($comando, "cod_zona", $arg_search, $data_lookup);
          }
      }
      if ($field == "SC_all_Cmp") 
      {
          $data_lookup = $this->SC_lookup_cod_provincia($arg_search, $data_search);
          if (is_array($data_lookup) && !empty($data_lookup)) 
          {
              $this->SC_monta_condicao($comando, "cod_provincia", $arg_search, $data_lookup);
          }
      }
      if ($field == "SC_all_Cmp") 
      {
          $data_lookup = $this->SC_lookup_cod_canton($arg_search, $data_search);
          if (is_array($data_lookup) && !empty($data_lookup)) 
          {
              $this->SC_monta_condicao($comando, "cod_canton", $arg_search, $data_lookup);
          }
      }
      if ($field == "SC_all_Cmp") 
      {
          $data_lookup = $this->SC_lookup_cod_parroquia($arg_search, $data_search);
          if (is_array($data_lookup) && !empty($data_lookup)) 
          {
              $this->SC_monta_condicao($comando, "cod_parroquia", $arg_search, $data_lookup);
          }
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "direccion", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "telefono", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "celular", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "email", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $data_lookup = $this->SC_lookup_circuito_economico($arg_search, $data_search);
          if (is_array($data_lookup) && !empty($data_lookup)) 
          {
              $this->SC_monta_condicao($comando, "circuito_economico", $arg_search, $data_lookup);
          }
      }
      if ($field == "SC_all_Cmp") 
      {
          $data_lookup = $this->SC_lookup_categoria_actividad_mp($arg_search, $data_search);
          if (is_array($data_lookup) && !empty($data_lookup)) 
          {
              $this->SC_monta_condicao($comando, "categoria_actividad_mp", $arg_search, $data_lookup);
          }
      }
      if ($field == "SC_all_Cmp") 
      {
          $data_lookup = $this->SC_lookup_identificacion_actividad_mp($arg_search, $data_search);
          if (is_array($data_lookup) && !empty($data_lookup)) 
          {
              $this->SC_monta_condicao($comando, "identificacion_actividad_mp", $arg_search, $data_lookup);
          }
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "producto_servicio", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "cedula_representante_legal", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "nombre_representante_legal", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $data_lookup = $this->SC_lookup_estado_organizacion($arg_search, $data_search);
          if (is_array($data_lookup) && !empty($data_lookup)) 
          {
              $this->SC_monta_condicao($comando, "estado_organizacion", $arg_search, $data_lookup);
          }
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "num_resolucion", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $data_lookup = $this->SC_lookup_legalmente_constituida($arg_search, $data_search);
          if (is_array($data_lookup) && !empty($data_lookup)) 
          {
              $this->SC_monta_condicao($comando, "legalmente_constituida", $arg_search, $data_lookup);
          }
      }
      if ($field == "SC_all_Cmp") 
      {
          $data_lookup = $this->SC_lookup_estado_juridico($arg_search, $data_search);
          if (is_array($data_lookup) && !empty($data_lookup)) 
          {
              $this->SC_monta_condicao($comando, "estado_juridico", $arg_search, $data_lookup);
          }
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "num_socios", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "user", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "tipo_registro", $arg_search, $data_search);
      }
      if (empty($comando)) 
      {
          $comando = " 1 <> 1 "; 
      }
      $sc_where = " where " . $comando;
      $nmgp_select = "SELECT count(*) from " . $this->Ini->nm_tabela . $sc_where; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_select; 
      $rt = $this->Db->Execute($nmgp_select) ; 
      if ($rt === false && !$rt->EOF && $GLOBALS["NM_ERRO_IBASE"] != 1) 
      { 
          $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
          exit ; 
      }  
     $qt_geral_reg_form_u_organizaciones = isset($rt->fields[0]) ? $rt->fields[0] - 1 : 0; 
     $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['total'] = $qt_geral_reg_form_u_organizaciones;
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['where_filter'] = $comando;
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['fast_search'][0] = $field;
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['fast_search'][1] = $arg_search;
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['fast_search'][2] = $sv_data;
      $rt->Close(); 
   }
   function SC_monta_condicao(&$comando, $nome, $condicao, $campo, $tp_campo="")
   {
      $nm_aspas   = "'";
      $nm_numeric = array();
      $campo_join = strtolower(str_replace(".", "_", $nome));
      $nm_ini_lower = "";
      $nm_fim_lower = "";
      $nm_numeric[] = "cod_u_organizaciones";$nm_numeric[] = "num_socios";$nm_numeric[] = "cod_zona";$nm_numeric[] = "seps_nivel";
      if (in_array($campo_join, $nm_numeric))
      {
         if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['decimal_db'] == ".")
         {
             $nm_aspas = "";
         }
         if (is_array($campo))
         {
             foreach ($campo as $Ind => $Cmp)
             {
                if (!is_numeric($Cmp))
                {
                    return;
                }
                if ($Cmp == "")
                {
                    $campo[$Ind] = 0;
                }
             }
         }
         else
         {
             if (!is_numeric($campo))
             {
                 return;
             }
             if ($campo == "")
             {
                $campo = 0;
             }
         }
      }
         if (substr($tp_campo, 0, 4) == "DATE" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sybase))
         {
             $nome     = "str_replace (convert(char(10),$nome,102), '.', '-') + ' ' + convert(char(8),$nome,20)";
         }
         if (substr($tp_campo, 0, 4) == "DATE" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
         {
             $nome     = "convert(char(23),$nome,121)";
         }
         if (substr($tp_campo, 0, 5) == "TIMES" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
         {
             $nome     = "TO_DATE(TO_CHAR($nome, 'yyyy-mm-dd hh24:mi:ss'), 'yyyy-mm-dd hh24:mi:ss')";
             $tp_campo = "DATE" . substr($tp_campo, 4);
         }
         $comando .= (!empty($comando) ? " or " : "");
         if (is_array($campo))
         {
             $prep = "";
             foreach ($campo as $Ind => $Cmp)
             {
                 $prep .= (!empty($prep)) ? "," : "";
                 $Cmp   = substr($this->Db->qstr($Cmp), 1, -1);
                 $prep .= $nm_aspas . $Cmp . $nm_aspas;
             }
             $prep .= (empty($prep)) ? $nm_aspas . $nm_aspas : "";
             $comando .= $nm_ini_lower . $nome . $nm_fim_lower . " in (" . $prep . ")";
             return;
         }
         $campo  = substr($this->Db->qstr($campo), 1, -1);
         switch (strtoupper($condicao))
         {
            case "EQ":     // 
               $comando        .= $nm_ini_lower . $nome . $nm_fim_lower . " = " . $nm_aspas . $campo . $nm_aspas;
            break;
            case "II":     // 
               $comando        .= $nm_ini_lower . $nome . $nm_fim_lower . " like '" . $campo . "%'";
            break;
            case "QP":     // 
               if (substr($tp_campo, 0, 4) == "DATE")
               {
                   $NM_cmd     = "";
                   if ($this->NM_data_qp['ano'] != "____")
                   {
                       $NM_cmd     .= (empty($NM_cmd)) ? "" : " and ";
                       $NM_cmd     .= "year($nome) = " . $this->NM_data_qp['ano'];
                   }
                   if ($this->NM_data_qp['mes'] != "__")
                   {
                       $NM_cmd     .= (empty($NM_cmd)) ? "" : " and ";
                       $NM_cmd     .= "month($nome) = " . $this->NM_data_qp['mes'];
                   }
                   if ($this->NM_data_qp['dia'] != "__")
                   {
                       $NM_cmd     .= (empty($NM_cmd)) ? "" : " and ";
                       $NM_cmd     .= "day($nome) = " . $this->NM_data_qp['dia'];
                   }
                   if (!empty($NM_cmd))
                   {
                       $NM_cmd     = " (" . $NM_cmd . ")";
                       $comando        .= $NM_cmd;
                   }
               }
               else
               {
                   $comando        .= $nm_ini_lower . $nome . $nm_fim_lower ." like '%" . $campo . "%'";
               }
            break;
            case "DF":     // 
               if ($tp_campo == "DTDF" || $tp_campo == "DATEDF")
               {
                   $comando        .= $nm_ini_lower . $nome . $nm_fim_lower . " not like '%" . $campo . "%'";
               }
               else
               {
                   $comando        .= $nm_ini_lower . $nome . $nm_fim_lower . " <> " . $nm_aspas . $campo . $nm_aspas;
               }
            break;
            case "GT":     // 
               $comando        .= " $nome > " . $nm_aspas . $campo . $nm_aspas;
            break;
            case "GE":     // 
               $comando        .= " $nome >= " . $nm_aspas . $campo . $nm_aspas;
            break;
            case "LT":     // 
               $comando        .= " $nome < " . $nm_aspas . $campo . $nm_aspas;
            break;
            case "LE":     // 
               $comando        .= " $nome <= " . $nm_aspas . $campo . $nm_aspas;
            break;
         }
   }
   function SC_lookup_tipo($condicao, $campo)
   {
       return false;
   }
   function SC_lookup_forma_organizacion($condicao, $campo)
   {
       $result = array();
       $nm_comando = "SELECT codigo, padre FROM catalogo WHERE (codigo LIKE '%$campo%') AND (tipo = 'tipo_institucion')" ; 
       if ($condicao == "ii")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", "LIKE '$campo%'", $nm_comando);
       }
       if ($condicao == "df")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", "NOT LIKE '%$campo%'", $nm_comando);
       }
       if ($condicao == "gt")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", "> '$campo'", $nm_comando);
       }
       if ($condicao == "ge")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", ">= '$campo'", $nm_comando);
       }
       if ($condicao == "lt")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", "< '$campo'", $nm_comando);
       }
       if ($condicao == "le")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", "<= '$campo'", $nm_comando);
       }
       $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
       $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
       if ($rx = $this->Db->Execute($nm_comando)) 
       { 
           while (!$rx->EOF) 
           { 
               $chave = $rx->fields[1];
               $label = $rx->fields[0];
               if ($condicao == "eq" && $campo == $label)
               {
                   $result[] = $chave;
               }
               if ($condicao == "ii" && $campo == substr($label, 0, strlen($campo)))
               {
                   $result[] = $chave;
               }
               if ($condicao == "qp" && strstr($label, $campo))
               {
                   $result[] = $chave;
               }
               if ($condicao == "df" && $campo != $label)
               {
                   $result[] = $chave;
               }
               if ($condicao == "gt" && $label > $campo )
               {
                   $result[] = $chave;
               }
               if ($condicao == "ge" && $label >= $campo)
               {
                   $result[] = $chave;
               }
               if ($condicao == "lt" && $label < $campo)
               {
                   $result[] = $chave;
               }
               if ($condicao == "le" && $label <= $campo)
               {
                   $result[] = $chave;
               }
               $rx->MoveNext() ;
           }  
           return $result;
       }  
       elseif ($GLOBALS["NM_ERRO_IBASE"] != 1)  
       { 
           $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
           exit; 
       } 
   }
   function SC_lookup_estado_org($condicao, $campo)
   {
       $data_look = array();
       $data_look['activa'] = "ACTIVA";
       $data_look['inactiva'] = "INACTIVA";
       $result = array();
       foreach ($data_look as $chave => $label) 
       {
           if ($condicao == "eq" && $campo == $label)
           {
               $result[] = $chave;
           }
           if ($condicao == "ii" && $campo == substr($label, 0, strlen($campo)))
           {
               $result[] = $chave;
           }
           if ($condicao == "qp" && strstr($label, $campo))
           {
               $result[] = $chave;
           }
           if ($condicao == "df" && $campo != $label)
           {
               $result[] = $chave;
           }
           if ($condicao == "gt" && $label > $campo )
           {
               $result[] = $chave;
           }
           if ($condicao == "ge" && $label >= $campo)
            {
               $result[] = $chave;
           }
           if ($condicao == "lt" && $label < $campo)
           {
               $result[] = $chave;
           }
           if ($condicao == "le" && $label <= $campo)
           {
               $result[] = $chave;
           }
          
       }
       return $result;
   }
   function SC_lookup_cod_zona($condicao, $campo)
   {
       return false;
   }
   function SC_lookup_cod_provincia($condicao, $campo)
   {
       $result = array();
       $nm_comando = "SELECT cod_provincia, zona FROM u_provincia WHERE (cod_provincia LIKE '%$campo%')" ; 
       if ($condicao == "ii")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", "LIKE '$campo%'", $nm_comando);
       }
       if ($condicao == "df")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", "NOT LIKE '%$campo%'", $nm_comando);
       }
       if ($condicao == "gt")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", "> '$campo'", $nm_comando);
       }
       if ($condicao == "ge")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", ">= '$campo'", $nm_comando);
       }
       if ($condicao == "lt")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", "< '$campo'", $nm_comando);
       }
       if ($condicao == "le")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", "<= '$campo'", $nm_comando);
       }
       $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
       $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
       if ($rx = $this->Db->Execute($nm_comando)) 
       { 
           while (!$rx->EOF) 
           { 
               $chave = $rx->fields[1];
               $label = $rx->fields[0];
               if ($condicao == "eq" && $campo == $label)
               {
                   $result[] = $chave;
               }
               if ($condicao == "ii" && $campo == substr($label, 0, strlen($campo)))
               {
                   $result[] = $chave;
               }
               if ($condicao == "qp" && strstr($label, $campo))
               {
                   $result[] = $chave;
               }
               if ($condicao == "df" && $campo != $label)
               {
                   $result[] = $chave;
               }
               if ($condicao == "gt" && $label > $campo )
               {
                   $result[] = $chave;
               }
               if ($condicao == "ge" && $label >= $campo)
               {
                   $result[] = $chave;
               }
               if ($condicao == "lt" && $label < $campo)
               {
                   $result[] = $chave;
               }
               if ($condicao == "le" && $label <= $campo)
               {
                   $result[] = $chave;
               }
               $rx->MoveNext() ;
           }  
           return $result;
       }  
       elseif ($GLOBALS["NM_ERRO_IBASE"] != 1)  
       { 
           $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
           exit; 
       } 
   }
   function SC_lookup_cod_canton($condicao, $campo)
   {
       $result = array();
       $nm_comando = "SELECT cod_canton, cod_provincia FROM u_canton WHERE (cod_canton LIKE '%$campo%')" ; 
       if ($condicao == "ii")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", "LIKE '$campo%'", $nm_comando);
       }
       if ($condicao == "df")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", "NOT LIKE '%$campo%'", $nm_comando);
       }
       if ($condicao == "gt")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", "> '$campo'", $nm_comando);
       }
       if ($condicao == "ge")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", ">= '$campo'", $nm_comando);
       }
       if ($condicao == "lt")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", "< '$campo'", $nm_comando);
       }
       if ($condicao == "le")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", "<= '$campo'", $nm_comando);
       }
       $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
       $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
       if ($rx = $this->Db->Execute($nm_comando)) 
       { 
           while (!$rx->EOF) 
           { 
               $chave = $rx->fields[1];
               $label = $rx->fields[0];
               if ($condicao == "eq" && $campo == $label)
               {
                   $result[] = $chave;
               }
               if ($condicao == "ii" && $campo == substr($label, 0, strlen($campo)))
               {
                   $result[] = $chave;
               }
               if ($condicao == "qp" && strstr($label, $campo))
               {
                   $result[] = $chave;
               }
               if ($condicao == "df" && $campo != $label)
               {
                   $result[] = $chave;
               }
               if ($condicao == "gt" && $label > $campo )
               {
                   $result[] = $chave;
               }
               if ($condicao == "ge" && $label >= $campo)
               {
                   $result[] = $chave;
               }
               if ($condicao == "lt" && $label < $campo)
               {
                   $result[] = $chave;
               }
               if ($condicao == "le" && $label <= $campo)
               {
                   $result[] = $chave;
               }
               $rx->MoveNext() ;
           }  
           return $result;
       }  
       elseif ($GLOBALS["NM_ERRO_IBASE"] != 1)  
       { 
           $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
           exit; 
       } 
   }
   function SC_lookup_cod_parroquia($condicao, $campo)
   {
       $result = array();
       $nm_comando = "SELECT cod_parroquia, cod_provincia, cod_canton FROM u_parroquia WHERE (cod_parroquia LIKE '%$campo%')" ; 
       if ($condicao == "ii")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", "LIKE '$campo%'", $nm_comando);
       }
       if ($condicao == "df")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", "NOT LIKE '%$campo%'", $nm_comando);
       }
       if ($condicao == "gt")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", "> '$campo'", $nm_comando);
       }
       if ($condicao == "ge")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", ">= '$campo'", $nm_comando);
       }
       if ($condicao == "lt")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", "< '$campo'", $nm_comando);
       }
       if ($condicao == "le")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", "<= '$campo'", $nm_comando);
       }
       $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
       $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
       if ($rx = $this->Db->Execute($nm_comando)) 
       { 
           while (!$rx->EOF) 
           { 
               $chave = $rx->fields[1];
               $label = $rx->fields[0];
               if ($condicao == "eq" && $campo == $label)
               {
                   $result[] = $chave;
               }
               if ($condicao == "ii" && $campo == substr($label, 0, strlen($campo)))
               {
                   $result[] = $chave;
               }
               if ($condicao == "qp" && strstr($label, $campo))
               {
                   $result[] = $chave;
               }
               if ($condicao == "df" && $campo != $label)
               {
                   $result[] = $chave;
               }
               if ($condicao == "gt" && $label > $campo )
               {
                   $result[] = $chave;
               }
               if ($condicao == "ge" && $label >= $campo)
               {
                   $result[] = $chave;
               }
               if ($condicao == "lt" && $label < $campo)
               {
                   $result[] = $chave;
               }
               if ($condicao == "le" && $label <= $campo)
               {
                   $result[] = $chave;
               }
               $rx->MoveNext() ;
           }  
           return $result;
       }  
       elseif ($GLOBALS["NM_ERRO_IBASE"] != 1)  
       { 
           $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
           exit; 
       } 
   }
   function SC_lookup_circuito_economico($condicao, $campo)
   {
       return false;
   }
   function SC_lookup_categoria_actividad_mp($condicao, $campo)
   {
       return false;
   }
   function SC_lookup_identificacion_actividad_mp($condicao, $campo)
   {
       $result = array();
       $nm_comando = "SELECT codigo, PADRE FROM catalogo WHERE (codigo LIKE '%$campo%') AND (tipo = 'identificacion_categoria_actividad')" ; 
       if ($condicao == "ii")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", "LIKE '$campo%'", $nm_comando);
       }
       if ($condicao == "df")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", "NOT LIKE '%$campo%'", $nm_comando);
       }
       if ($condicao == "gt")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", "> '$campo'", $nm_comando);
       }
       if ($condicao == "ge")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", ">= '$campo'", $nm_comando);
       }
       if ($condicao == "lt")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", "< '$campo'", $nm_comando);
       }
       if ($condicao == "le")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", "<= '$campo'", $nm_comando);
       }
       $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
       $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
       if ($rx = $this->Db->Execute($nm_comando)) 
       { 
           while (!$rx->EOF) 
           { 
               $chave = $rx->fields[1];
               $label = $rx->fields[0];
               if ($condicao == "eq" && $campo == $label)
               {
                   $result[] = $chave;
               }
               if ($condicao == "ii" && $campo == substr($label, 0, strlen($campo)))
               {
                   $result[] = $chave;
               }
               if ($condicao == "qp" && strstr($label, $campo))
               {
                   $result[] = $chave;
               }
               if ($condicao == "df" && $campo != $label)
               {
                   $result[] = $chave;
               }
               if ($condicao == "gt" && $label > $campo )
               {
                   $result[] = $chave;
               }
               if ($condicao == "ge" && $label >= $campo)
               {
                   $result[] = $chave;
               }
               if ($condicao == "lt" && $label < $campo)
               {
                   $result[] = $chave;
               }
               if ($condicao == "le" && $label <= $campo)
               {
                   $result[] = $chave;
               }
               $rx->MoveNext() ;
           }  
           return $result;
       }  
       elseif ($GLOBALS["NM_ERRO_IBASE"] != 1)  
       { 
           $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
           exit; 
       } 
   }
   function SC_lookup_estado_organizacion($condicao, $campo)
   {
       return false;
   }
   function SC_lookup_legalmente_constituida($condicao, $campo)
   {
       $result = array();
       $nm_comando = "SELECT codigo, significado_direccion FROM catalogo WHERE (codigo LIKE '%$campo%') AND (tipo = 'constitucion')" ; 
       if ($condicao == "ii")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", "LIKE '$campo%'", $nm_comando);
       }
       if ($condicao == "df")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", "NOT LIKE '%$campo%'", $nm_comando);
       }
       if ($condicao == "gt")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", "> '$campo'", $nm_comando);
       }
       if ($condicao == "ge")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", ">= '$campo'", $nm_comando);
       }
       if ($condicao == "lt")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", "< '$campo'", $nm_comando);
       }
       if ($condicao == "le")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", "<= '$campo'", $nm_comando);
       }
       $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
       $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
       if ($rx = $this->Db->Execute($nm_comando)) 
       { 
           while (!$rx->EOF) 
           { 
               $chave = $rx->fields[1];
               $label = $rx->fields[0];
               if ($condicao == "eq" && $campo == $label)
               {
                   $result[] = $chave;
               }
               if ($condicao == "ii" && $campo == substr($label, 0, strlen($campo)))
               {
                   $result[] = $chave;
               }
               if ($condicao == "qp" && strstr($label, $campo))
               {
                   $result[] = $chave;
               }
               if ($condicao == "df" && $campo != $label)
               {
                   $result[] = $chave;
               }
               if ($condicao == "gt" && $label > $campo )
               {
                   $result[] = $chave;
               }
               if ($condicao == "ge" && $label >= $campo)
               {
                   $result[] = $chave;
               }
               if ($condicao == "lt" && $label < $campo)
               {
                   $result[] = $chave;
               }
               if ($condicao == "le" && $label <= $campo)
               {
                   $result[] = $chave;
               }
               $rx->MoveNext() ;
           }  
           return $result;
       }  
       elseif ($GLOBALS["NM_ERRO_IBASE"] != 1)  
       { 
           $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
           exit; 
       } 
   }
   function SC_lookup_estado_juridico($condicao, $campo)
   {
       return false;
   }
   function SC_lookup_sc_field_0($condicao, $campo)
   {
       return false;
   }
function nmgp_redireciona($tipo=0)
{
   global $nm_apl_dependente;
   if (isset($_SESSION['scriptcase']['nm_sc_retorno']) && !empty($_SESSION['scriptcase']['nm_sc_retorno']) && $_SESSION['scriptcase']['sc_tp_saida'] != "D" && $nm_apl_dependente != 1) 
   {
       $nmgp_saida_form = $_SESSION['scriptcase']['nm_sc_retorno'];
   }
   else
   {
       $nmgp_saida_form = $_SESSION['scriptcase']['sc_url_saida'][$this->Ini->sc_page];
   }
   if ($tipo == 2 && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['sc_outra_jan']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['sc_outra_jan'])
   {
       $nmgp_saida_form = "form_u_organizaciones_fim.php";
   }
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['redir']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['redir'] == 'redir')
   {
       unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']);
   }
   unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['opc_ant']);
   $diretorio = explode("/", $nmgp_saida_form);
   $cont = count($diretorio);
   $apl = $diretorio[$cont - 1];
   $apl = str_replace(".php", "", $apl);
   $pos = strpos($apl, "?");
   if ($pos !== false)
   {
       $apl = substr($apl, 0, $pos);
   }
   if ($tipo != 1 && $tipo != 2)
   {
       unset($_SESSION['sc_session'][$this->Ini->sc_page][$apl]['where_orig']);
   }
   if ($this->NM_ajax_flag)
   {
       $this->NM_ajax_info['redir']['metodo']              = 'post';
       $this->NM_ajax_info['redir']['action']              = $nmgp_saida_form;
       $this->NM_ajax_info['redir']['target']              = '_self';
       $this->NM_ajax_info['redir']['script_case_init']    = $this->Ini->sc_page;
       $this->NM_ajax_info['redir']['script_case_session'] = session_id();
       if (0 == $tipo)
       {
           $this->NM_ajax_info['redir']['nmgp_url_saida'] = $this->nm_location;
       }
       form_u_organizaciones_pack_ajax_response();
       exit;
   }
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
            "http://www.w3.org/TR/1999/REC-html401-19991224/loose.dtd">

   <HTML>
   <HEAD>
    <META http-equiv="Content-Type" content="text/html; charset=<?php echo $_SESSION['scriptcase']['charset_html'] ?>" />
    <META http-equiv="Expires" content="Fri, Jan 01 1900 00:00:00 GMT"/>
    <META http-equiv="Last-Modified" content="<?php echo gmdate("D, d M Y H:i:s"); ?> GMT"/>
    <META http-equiv="Cache-Control" content="no-store, no-cache, must-revalidate"/>
    <META http-equiv="Cache-Control" content="post-check=0, pre-check=0"/>
    <META http-equiv="Pragma" content="no-cache"/>
   </HEAD>
   <BODY>
   <FORM name="form_ok" method="POST" action="<?php echo NM_encode_input($nmgp_saida_form); ?>" target="_self">
<?php
   if ($tipo == 0)
   {
?>
     <INPUT type="hidden" name="nmgp_url_saida" value="<?php echo NM_encode_input($this->nm_location); ?>"> 
<?php
   }
?>
     <INPUT type="hidden" name="script_case_init" value="<?php echo NM_encode_input($this->Ini->sc_page); ?>"> 
     <INPUT type="hidden" name="script_case_session" value="<?php echo NM_encode_input(session_id()); ?>"> 
   </FORM>
   <SCRIPT type="text/javascript">
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
      document.form_ok.submit();
   </SCRIPT>
   </BODY>
   </HTML>
<?php
  exit;
}
function nmgp_redireciona_form($nm_apl_dest, $nm_apl_retorno, $nm_apl_parms, $nm_target="", $opc="", $alt_modal=430, $larg_modal=630)
{
   if (isset($this->NM_is_redirected) && $this->NM_is_redirected)
   {
       return;
   }
   if (is_array($nm_apl_parms))
   {
       $tmp_parms = "";
       foreach ($nm_apl_parms as $par => $val)
       {
           $par = trim($par);
           $val = trim($val);
           $tmp_parms .= str_replace(".", "_", $par) . "?#?";
           if (substr($val, 0, 1) == "$")
           {
               $tmp_parms .= $$val;
           }
           elseif (substr($val, 0, 1) == "{")
           {
               $val        = substr($val, 1, -1);
               $tmp_parms .= $this->$val;
           }
           elseif (substr($val, 0, 1) == "[")
           {
               $tmp_parms .= $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones'][substr($val, 1, -1)];
           }
           else
           {
               $tmp_parms .= $val;
           }
           $tmp_parms .= "?@?";
       }
       $nm_apl_parms = $tmp_parms;
   }
   if (empty($opc))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['opcao'] = "";
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['retorno_edit'] = "";
   }
   $nm_target_form = (empty($nm_target)) ? "_self" : $nm_target;
   if (strtolower(substr($nm_apl_dest, -4)) != ".php" && (strtolower(substr($nm_apl_dest, 0, 7)) == "http://" || strtolower(substr($nm_apl_dest, 0, 8)) == "https://" || strtolower(substr($nm_apl_dest, 0, 3)) == "../"))
   {
       if ($this->NM_ajax_flag)
       {
           $this->NM_ajax_info['redir']['metodo'] = 'location';
           $this->NM_ajax_info['redir']['action'] = $nm_apl_dest;
           $this->NM_ajax_info['redir']['target'] = $nm_target_form;
           form_u_organizaciones_pack_ajax_response();
           exit;
       }
       echo "<SCRIPT language=\"javascript\">";
       if (strtolower($nm_target) == "_blank")
       {
           echo "window.open ('" . $nm_apl_dest . "');";
           echo "</SCRIPT>";
           return;
       }
       else
       {
           echo "window.location='" . $nm_apl_dest . "';";
           echo "</SCRIPT>";
           $this->NM_close_db();
           exit;
       }
   }
   $dir = explode("/", $nm_apl_dest);
   if (count($dir) == 1)
   {
       $nm_apl_dest = str_replace(".php", "", $nm_apl_dest);
       $nm_apl_dest = $this->Ini->path_link . $nm_apl_dest . "/" . $nm_apl_dest . ".php";
   }
   if ($this->NM_ajax_flag)
   {
       $nm_apl_parms = str_replace("?#?", "*scin", $nm_apl_parms);
       $nm_apl_parms = str_replace("?@?", "*scout", $nm_apl_parms);
       $this->NM_ajax_info['redir']['metodo']     = 'post';
       $this->NM_ajax_info['redir']['action']     = $nm_apl_dest;
       $this->NM_ajax_info['redir']['nmgp_parms'] = $nm_apl_parms;
       $this->NM_ajax_info['redir']['target']     = $nm_target_form;
       $this->NM_ajax_info['redir']['h_modal']    = $alt_modal;
       $this->NM_ajax_info['redir']['w_modal']    = $larg_modal;
       if ($nm_target_form == "_blank")
       {
           $this->NM_ajax_info['redir']['nmgp_outra_jan'] = 'true';
       }
       else
       {
           $this->NM_ajax_info['redir']['nmgp_url_saida']      = $nm_apl_retorno;
           $this->NM_ajax_info['redir']['script_case_init']    = $this->Ini->sc_page;
           $this->NM_ajax_info['redir']['script_case_session'] = session_id();
       }
       form_u_organizaciones_pack_ajax_response();
       exit;
   }
   if ($nm_target == "modal")
   {
       if (!empty($nm_apl_parms))
       {
           $nm_apl_parms = str_replace("?#?", "*scin", $nm_apl_parms);
           $nm_apl_parms = str_replace("?@?", "*scout", $nm_apl_parms);
           $nm_apl_parms = "nmgp_parms=" . $nm_apl_parms . "&";
       }
       $par_modal = "?script_case_init=" . $this->Ini->sc_page . "&script_case_session=" . session_id() . "&nmgp_outra_jan=true&nmgp_url_saida=modal&NMSC_modal=ok&";
       $this->redir_modal = "$(function() { tb_show('', '" . $nm_apl_dest . $par_modal . $nm_apl_parms . "TB_iframe=true&modal=true&height=" . $alt_modal . "&width=" . $larg_modal . "', '') })";
       $this->NM_is_redirected = true;
       return;
   }
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
            "http://www.w3.org/TR/1999/REC-html401-19991224/loose.dtd">

   <HTML>
   <HEAD>
    <META http-equiv="Content-Type" content="text/html; charset=<?php echo $_SESSION['scriptcase']['charset_html'] ?>" />
    <META http-equiv="Expires" content="Fri, Jan 01 1900 00:00:00 GMT"/>
    <META http-equiv="Last-Modified" content="<?php echo gmdate("D, d M Y H:i:s"); ?> GMT"/>
    <META http-equiv="Cache-Control" content="no-store, no-cache, must-revalidate"/>
    <META http-equiv="Cache-Control" content="post-check=0, pre-check=0"/>
    <META http-equiv="Pragma" content="no-cache"/>
   </HEAD>
   <BODY>
<form name="Fredir" method="post" 
                  target="_self"> 
  <input type="hidden" name="nmgp_parms" value="<?php echo NM_encode_input($nm_apl_parms); ?>"/>
<?php
   if ($nm_target_form == "_blank")
   {
?>
  <input type="hidden" name="nmgp_outra_jan" value="true"/> 
<?php
   }
   else
   {
?>
  <input type="hidden" name="nmgp_url_saida" value="<?php echo NM_encode_input($nm_apl_retorno) ?>">
  <input type="hidden" name="script_case_init" value="<?php echo NM_encode_input($this->Ini->sc_page); ?>"/> 
  <input type="hidden" name="script_case_session" value="<?php echo NM_encode_input(session_id()); ?>"> 
<?php
   }
?>
</form> 
   <SCRIPT type="text/javascript">
<?php
   if ($nm_target_form == "modal")
   {
?>
       $(document).ready(function(){
           tb_show('', '<?php echo $nm_apl_dest ?>?script_case_init=<?php echo $this->Ini->sc_page; ?>&script_case_session=<?php echo session_id() ?> &nmgp_url_saida=modal&nmgp_parms=<?php echo NM_encode_input($nm_apl_parms); ?>&nmgp_outra_jan=true&TB_iframe=true&height=<?php echo $alt_modal; ?>&width=<?php echo $larg_modal; ?>&modal=true', '');
       });
<?php
   }
   else
   {
?>
       document.Fredir.target = "<?php echo $nm_target_form ?>"; 
       document.Fredir.action = "<?php echo $nm_apl_dest ?>";
       document.Fredir.submit();
<?php
   }
?>
   </SCRIPT>
   </BODY>
   </HTML>
<?php
   if ($nm_target_form != "_blank" && $nm_target_form != "modal")
   {
       $this->NM_close_db();
       exit;
   }
}
 function nm_gera_mensagem($nm_mensagem, $nm_apl_dest, $nm_apl_retorno="", $nm_apl_parms="")
 {
    $nm_tp_saida = "post";
    if ($nm_apl_dest == "form_u_organizaciones.php")
    {
        $form_submit = 1;
        $form_opcao  = $this->nmgp_opcao;
    }
    if ("novo" == $this->nmgp_opcao || "insert" == $this->sc_evento)
    {
        $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['opc_ant'] = "";
    }
    if ($nm_apl_retorno == 'parent')
    {
        $nm_apl_retorno = "";
        $nm_tp_saida = "parent";
    }
    elseif (strtolower(substr($nm_apl_dest, 0, 5)) == "http:" || strtolower(substr($nm_apl_dest, 0, 6)) == "https:" || strtolower(substr($nm_apl_dest, 0, 3)) == "../")
    {
        $nm_tp_saida = "get";
    }
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['sc_outra_jan']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['sc_outra_jan'] && $nm_apl_retorno == 'sc_sai')
    {
        $nm_tp_saida    = "close";
    }
    if ($nm_apl_retorno == 'sc_sai')
    {
        $nm_apl_retorno = "";
    }
    if ($this->NM_ajax_flag && isset($this->NM_ajax_info['param']['buffer_output']) && $this->NM_ajax_info['param']['buffer_output'])
    {
        $sOldBuffer = ob_get_contents();
        ob_end_clean();
        $this->NM_ajax_info['redir']['metodo'] = 'html';
        $this->NM_ajax_info['redir']['action'] = '';
        ob_start();
    }
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
            "http://www.w3.org/TR/1999/REC-html401-19991224/loose.dtd">

<html<?php echo $_SESSION['scriptcase']['reg_conf']['html_dir'] ?>>
<HEAD>
 <META http-equiv="Content-Type" content="text/html; charset=<?php echo $_SESSION['scriptcase']['charset_html'] ?>" />
 <META http-equiv="Expires" content="Fri, Jan 01 1900 00:00:00 GMT"/>
 <META http-equiv="Last-Modified" content="<?php echo gmdate("D, d M Y H:i:s"); ?> GMT"/>
 <META http-equiv="Cache-Control" content="no-store, no-cache, must-revalidate"/>
 <META http-equiv="Cache-Control" content="post-check=0, pre-check=0"/>
 <META http-equiv="Pragma" content="no-cache"/>
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_form.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_tab.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/buttons/<?php echo $this->Ini->Str_btn_form . '/' . $this->Ini->Str_btn_form ?>.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_calendar.css" />
</HEAD>
<body class="scFormPage">
<form name="Fmens" method=post 
             target="_self"> 
<input type=hidden name="nm_form_submit" value="<?php echo NM_encode_input($form_submit); ?>">
<input type=hidden name="nmgp_opcao" value="<?php echo NM_encode_input($form_opcao); ?>">
<input type="hidden" name="nmgp_parms" value="<?php echo NM_encode_input($nm_apl_parms); ?>"/>
<input type="hidden" name="nmgp_url_saida" value="<?php echo NM_encode_input($nm_apl_retorno); ?>">
<input type=hidden name="script_case_init" value="<?php echo NM_encode_input($this->Ini->sc_page); ?>"> 
<input type=hidden name="script_case_session" value="<?php echo NM_encode_input(session_id()); ?>"> 
<table align="center"> 
<tr><td> 
<TABLE  class="scFormTable">
  <TR>
    <TD  class="scFormDataOdd"><?php echo $nm_mensagem; ?></TD>
  </TR>
</TABLE></td></tr> 
<tr><td align="center">
<?php
?>
       <input type="button" name="Bmens" onclick="nm_saida_mens('<?php echo $nm_tp_saida; ?>')" class="scButton1" value="<?php echo $this->Ini->Nm_lang['lang_btns_cfrm'] ?>" align="absmiddle"> 
<?php
 
?>
</td></tr> 
</table> 
</form> 
<script type="text/javascript"> 
function nm_saida_mens(tp_saida) 
{ 
   if (tp_saida == "close") 
   { 
       window.close();  
   } 
   if (tp_saida == "parent") 
   { 
<?php
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['run_iframe_ajax']))
        {
            echo "parent.ajax_navigate('edit', '" . $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['retorno_edit'][1] . "');";
        }
        else
        {
            echo "parent.location = '" . $_SESSION['sc_session'][$this->Ini->sc_page]['form_u_organizaciones']['retorno_edit'] . "';"; 
        }
?>
   } 
   if (tp_saida == "post") 
   { 
       document.Fmens.target  = "_self"; 
       document.Fmens.action  = "<?php echo $nm_apl_dest; ?>";
       document.Fmens.submit(); 
   } 
   if (tp_saida == "get") 
   { 
       window.location = "<?php echo $nm_apl_dest; ?>";  
   } 
} 
<?php
if ($this->lig_edit_lookup)
{
?>
  opener.<?php echo $this->lig_edit_lookup_cb; ?>(<?php echo $this->lig_edit_lookup_row; ?>);
<?php
}
?>
</script> 
</body>
</html>
<?php
    if ($this->NM_ajax_flag && isset($this->NM_ajax_info['param']['buffer_output']) && $this->NM_ajax_info['param']['buffer_output'])
    {
        $this->NM_ajax_info['redir']['action'] = form_u_organizaciones_pack_protect_string(ob_get_contents());
        ob_end_clean();
        ob_start();
        form_u_organizaciones_pack_ajax_response();
    }
    exit;
 }
    function sc_ajax_javascript($sJsFunc, $aParam = array())
    {
        if ($this->NM_ajax_flag)
        {
            $this->NM_ajax_info['ajaxJavascript'][] = array($sJsFunc, $aParam);
        }
        else
        {
            foreach ($aParam as $i => $v)
            {
                $aParam[$i] = '"' . str_replace('"', '\"', $v) . '"';
            }
            $this->NM_non_ajax_info['ajaxJavascript'][] = array($sJsFunc, $aParam);
        }
    } // sc_ajax_javascript
}
?>
