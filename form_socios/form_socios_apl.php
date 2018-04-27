<?php
//
class form_socios_apl
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
   var $cod_socios;
   var $cod_evento;
   var $tipo_evento;
   var $fecha_reporte;
   var $zona;
   var $zona_1;
   var $cod_provincia;
   var $cod_provincia_1;
   var $tipo_servicio;
   var $ruc;
   var $tipo_documento;
   var $cedula;
   var $nombres;
   var $apellidos;
   var $asociacion;
   var $fecha_registro;
   var $fecha_registro_hora;
   var $cod_u_organizaciones;
   var $grupo_etnico;
   var $grupo_etnico_1;
   var $genero;
   var $genero_1;
   var $poblacion;
   var $poblacion_1;
   var $estado_socio;
   var $cod_canton;
   var $cod_canton_1;
   var $cod_parroquia;
   var $cod_parroquia_1;
   var $fecha_nacimiento;
   var $telefono;
   var $celular;
   var $mail;
   var $direccion;
   var $discapacidad;
   var $discapacidad_1;
   var $tipo_discapacidad;
   var $tipo_discapacidad_1;
   var $vinculado_a;
   var $estado;
   var $estado_1;
   var $zona_procedencia;
   var $provincia_procedencia;
   var $nacionalidad;
   var $forma_organizacion;
   var $socio_empleado;
   var $socio_empleado_1;
   var $cod_servicio_im;
   var $fecha_reporte_im;
   var $txt_tipo_documento;
   var $txt_tipo_documento_1;
   var $txt_cedula;
   var $txt_pasaporte;
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
          if (isset($this->NM_ajax_info['param']['apellidos']))
          {
              $this->apellidos = $this->NM_ajax_info['param']['apellidos'];
          }
          if (isset($this->NM_ajax_info['param']['btnbuscar']))
          {
              $this->btnbuscar = $this->NM_ajax_info['param']['btnbuscar'];
          }
          if (isset($this->NM_ajax_info['param']['cedula']))
          {
              $this->cedula = $this->NM_ajax_info['param']['cedula'];
          }
          if (isset($this->NM_ajax_info['param']['celular']))
          {
              $this->celular = $this->NM_ajax_info['param']['celular'];
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
          if (isset($this->NM_ajax_info['param']['cod_socios']))
          {
              $this->cod_socios = $this->NM_ajax_info['param']['cod_socios'];
          }
          if (isset($this->NM_ajax_info['param']['direccion']))
          {
              $this->direccion = $this->NM_ajax_info['param']['direccion'];
          }
          if (isset($this->NM_ajax_info['param']['discapacidad']))
          {
              $this->discapacidad = $this->NM_ajax_info['param']['discapacidad'];
          }
          if (isset($this->NM_ajax_info['param']['estado']))
          {
              $this->estado = $this->NM_ajax_info['param']['estado'];
          }
          if (isset($this->NM_ajax_info['param']['fecha_nacimiento']))
          {
              $this->fecha_nacimiento = $this->NM_ajax_info['param']['fecha_nacimiento'];
          }
          if (isset($this->NM_ajax_info['param']['genero']))
          {
              $this->genero = $this->NM_ajax_info['param']['genero'];
          }
          if (isset($this->NM_ajax_info['param']['grupo_etnico']))
          {
              $this->grupo_etnico = $this->NM_ajax_info['param']['grupo_etnico'];
          }
          if (isset($this->NM_ajax_info['param']['mail']))
          {
              $this->mail = $this->NM_ajax_info['param']['mail'];
          }
          if (isset($this->NM_ajax_info['param']['nacionalidad']))
          {
              $this->nacionalidad = $this->NM_ajax_info['param']['nacionalidad'];
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
          if (isset($this->NM_ajax_info['param']['poblacion']))
          {
              $this->poblacion = $this->NM_ajax_info['param']['poblacion'];
          }
          if (isset($this->NM_ajax_info['param']['script_case_init']))
          {
              $this->script_case_init = $this->NM_ajax_info['param']['script_case_init'];
          }
          if (isset($this->NM_ajax_info['param']['socio_empleado']))
          {
              $this->socio_empleado = $this->NM_ajax_info['param']['socio_empleado'];
          }
          if (isset($this->NM_ajax_info['param']['telefono']))
          {
              $this->telefono = $this->NM_ajax_info['param']['telefono'];
          }
          if (isset($this->NM_ajax_info['param']['tipo_discapacidad']))
          {
              $this->tipo_discapacidad = $this->NM_ajax_info['param']['tipo_discapacidad'];
          }
          if (isset($this->NM_ajax_info['param']['txt_cedula']))
          {
              $this->txt_cedula = $this->NM_ajax_info['param']['txt_cedula'];
          }
          if (isset($this->NM_ajax_info['param']['txt_pasaporte']))
          {
              $this->txt_pasaporte = $this->NM_ajax_info['param']['txt_pasaporte'];
          }
          if (isset($this->NM_ajax_info['param']['txt_tipo_documento']))
          {
              $this->txt_tipo_documento = $this->NM_ajax_info['param']['txt_tipo_documento'];
          }
          if (isset($this->NM_ajax_info['param']['zona']))
          {
              $this->zona = $this->NM_ajax_info['param']['zona'];
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
      if (isset($this->cod_u_organizaciones_aux) && isset($this->NM_contr_var_session) && $this->NM_contr_var_session == "Yes") 
      {
          $_SESSION['cod_u_organizaciones_aux'] = $this->cod_u_organizaciones_aux;
      }
      if (isset($_POST["cod_u_organizaciones_aux"])) 
      {
          $_SESSION['cod_u_organizaciones_aux'] = $this->cod_u_organizaciones_aux;
      }
      if (isset($_GET["cod_u_organizaciones_aux"])) 
      {
          $_SESSION['cod_u_organizaciones_aux'] = $this->cod_u_organizaciones_aux;
      }
      if (isset($_SESSION['sc_session'][$script_case_init]['form_socios']['embutida_parms']))
      { 
          $this->nmgp_parms = $_SESSION['sc_session'][$script_case_init]['form_socios']['embutida_parms'];
          unset($_SESSION['sc_session'][$script_case_init]['form_socios']['embutida_parms']);
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
                 nm_limpa_str_form_socios($cadapar[1]);
                 $this->$cadapar[0] = $cadapar[1];
             }
             $ix++;
          }
          if (isset($this->NM_where_filter_form))
          {
              $_SESSION['sc_session'][$script_case_init]['form_socios']['where_filter_form'] = $this->NM_where_filter_form;
          }
          if (isset($this->sc_redir_atualiz))
          {
              $_SESSION['sc_session'][$script_case_init]['form_socios']['sc_redir_atualiz'] = $this->sc_redir_atualiz;
          }
          if (isset($this->sc_redir_insert))
          {
              $_SESSION['sc_session'][$script_case_init]['form_socios']['sc_redir_insert'] = $this->sc_redir_insert;
          }
          if (isset($this->cod_u_organizaciones_aux)) 
          {
              $_SESSION['cod_u_organizaciones_aux'] = $this->cod_u_organizaciones_aux;
          }
      } 
      elseif (isset($script_case_init) && !empty($script_case_init) && isset($_SESSION['sc_session'][$script_case_init]['form_socios']['parms']))
      {
          if ((!isset($this->nmgp_opcao) || ($this->nmgp_opcao != "incluir" && $this->nmgp_opcao != "alterar" && $this->nmgp_opcao != "excluir" && $this->nmgp_opcao != "novo" && $this->nmgp_opcao != "recarga" && $this->nmgp_opcao != "muda_form")) && (!isset($this->NM_ajax_opcao) || $this->NM_ajax_opcao == ""))
          {
              $todo = explode("?@?", $_SESSION['sc_session'][$script_case_init]['form_socios']['parms']);
              $ix = 0;
              while (!empty($todo[$ix]))
              {
                 $cadapar = explode("?#?", $todo[$ix]);
                 $this->$cadapar[0] = $cadapar[1];
                 $ix++;
              }
          }
      } 

      if (!$this->NM_ajax_flag && 'autocomp_' == substr($this->NM_ajax_opcao, 0, 9))
      {
          $this->NM_ajax_flag = true;
      }

      $dir_raiz          = strrpos($_SERVER['PHP_SELF'],"/") ;  
      $dir_raiz          = substr($_SERVER['PHP_SELF'], 0, $dir_raiz + 1) ;  
      if (isset($this->nm_evt_ret_edit) && '' != $this->nm_evt_ret_edit)
      {
          $_SESSION['sc_session'][$script_case_init]['form_socios']['lig_edit_lookup']     = true;
          $_SESSION['sc_session'][$script_case_init]['form_socios']['lig_edit_lookup_cb']  = $this->nm_evt_ret_edit;
          $_SESSION['sc_session'][$script_case_init]['form_socios']['lig_edit_lookup_row'] = isset($this->nm_evt_ret_row) ? $this->nm_evt_ret_row : '';
      }
      if (isset($_SESSION['sc_session'][$script_case_init]['form_socios']['lig_edit_lookup']) && $_SESSION['sc_session'][$script_case_init]['form_socios']['lig_edit_lookup'])
      {
          $this->lig_edit_lookup     = true;
          $this->lig_edit_lookup_cb  = $_SESSION['sc_session'][$script_case_init]['form_socios']['lig_edit_lookup_cb'];
          $this->lig_edit_lookup_row = $_SESSION['sc_session'][$script_case_init]['form_socios']['lig_edit_lookup_row'];
      }
      if (!$this->Ini)
      { 
          $this->Ini = new form_socios_ini(); 
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


      $this->arr_buttons['btn_salir']['hint']             = "";
      $this->arr_buttons['btn_salir']['type']             = "button";
      $this->arr_buttons['btn_salir']['value']            = "Salir";
      $this->arr_buttons['btn_salir']['display']          = "only_text";
      $this->arr_buttons['btn_salir']['display_position'] = "text_right";
      $this->arr_buttons['btn_salir']['style']            = "default";
      $this->arr_buttons['btn_salir']['image']            = "";


      $_SESSION['scriptcase']['error_icon']['form_socios']  = "<img src=\"" . $this->Ini->path_icones . "/scriptcase__NM__icnMensagemAlerta.png\" style=\"border-width: 0px\" align=\"top\">&nbsp;";
      $_SESSION['scriptcase']['error_close']['form_socios'] = "<td>" . nmButtonOutput($this->arr_buttons, "berrm_clse", "document.getElementById('id_error_display_fixed').style.display = 'none'; document.getElementById('id_error_message_fixed').innerHTML = ''; return false", "document.getElementById('id_error_display_fixed').style.display = 'none'; document.getElementById('id_error_message_fixed').innerHTML = ''; return false", "", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "") . "</td>";

      $this->Embutida_proc = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['embutida_proc']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['embutida_proc'] : $this->Embutida_proc;
      $this->Embutida_form = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['embutida_form']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['embutida_form'] : $this->Embutida_form;
      $this->Embutida_call = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['embutida_call']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['embutida_call'] : $this->Embutida_call;

      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['embutida_liga_grid_edit']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['embutida_liga_grid_edit'])
      {
          $this->Grid_editavel = ('on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['embutida_liga_grid_edit']) ? true : false;
      }
      if (isset($this->Grid_editavel) && $this->Grid_editavel)
      {
          $this->Embutida_form  = true;
          $this->Embutida_ronly = true;
      }
      $this->Embutida_multi = false;
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['embutida_multi']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['embutida_multi'])
      {
          $this->Grid_editavel  = false;
          $this->Embutida_form  = false;
          $this->Embutida_ronly = false;
          $this->Embutida_multi = true;
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['embutida_liga_tp_pag']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['embutida_liga_tp_pag'])
      {
          $this->form_paginacao = $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['embutida_liga_tp_pag'];
      }

      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['embutida_form']) || '' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['embutida_form'])
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['embutida_form'] = $this->Embutida_form;
      }
      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['embutida_liga_grid_edit']) || '' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['embutida_liga_grid_edit'])
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['embutida_liga_grid_edit'] = $this->Grid_editavel ? 'on' : 'off';
      }
      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['embutida_liga_grid_edit']) || '' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['embutida_liga_grid_edit'])
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['embutida_liga_grid_edit'] = $this->Embutida_call;
      }

      $this->Ini->cor_grid_par = $this->Ini->cor_grid_impar;
      $this->nm_location = $this->Ini->sc_protocolo . $this->Ini->server . $dir_raiz . "form_socios.php"; 
      $this->nmgp_url_saida  = $nm_url_saida;
      $this->nmgp_form_show  = "on";
      $this->nmgp_form_empty = false;
      $this->Ini->sc_Include($this->Ini->path_lib_php . "/nm_valida.php", "C", "NM_Valida") ; 
      $teste_validade = new NM_Valida ;

      $this->loadFieldConfig();

      if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['first_time'])
      {
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_socios']['insert']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_socios']['new']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_socios']['update']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_socios']['delete']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_socios']['first']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_socios']['back']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_socios']['forward']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_socios']['last']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_socios']['qsearch']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_socios']['summary']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_socios']['navpage']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_socios']['goto']);
      }
      if (isset($this->NM_btn_insert) && '' != $this->NM_btn_insert && (!isset($_SESSION['scriptcase']['sc_apl_conf']['form_socios']['insert']) || '' == $_SESSION['scriptcase']['sc_apl_conf']['form_socios']['insert']))
      {
          if ('N' == $this->NM_btn_insert)
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_socios']['insert'] = 'off';
          }
          else
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_socios']['insert'] = 'on';
          }
      }
      if (isset($this->NM_btn_new) && 'N' == $this->NM_btn_new)
      {
          $_SESSION['scriptcase']['sc_apl_conf_lig']['form_socios']['new'] = 'off';
      }
      if (isset($this->NM_btn_update) && '' != $this->NM_btn_update && (!isset($_SESSION['scriptcase']['sc_apl_conf']['form_socios']['update']) || '' == $_SESSION['scriptcase']['sc_apl_conf']['form_socios']['update']))
      {
          if ('N' == $this->NM_btn_update)
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_socios']['update'] = 'off';
          }
          else
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_socios']['update'] = 'on';
          }
      }
      if (isset($this->NM_btn_delete) && '' != $this->NM_btn_delete && (!isset($_SESSION['scriptcase']['sc_apl_conf']['form_socios']['delete']) || '' == $_SESSION['scriptcase']['sc_apl_conf']['form_socios']['delete']))
      {
          if ('N' == $this->NM_btn_delete)
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_socios']['delete'] = 'off';
          }
          else
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_socios']['delete'] = 'on';
          }
      }
      if (isset($this->NM_btn_navega) && '' != $this->NM_btn_navega)
      {
          if ('N' == $this->NM_btn_navega)
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_socios']['first']   = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_socios']['back']    = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_socios']['forward'] = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_socios']['last']    = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_socios']['qsearch'] = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_socios']['summary'] = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_socios']['navpage'] = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_socios']['goto']    = 'off';
          }
          else
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_socios']['first']   = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_socios']['back']    = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_socios']['forward'] = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_socios']['last']    = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_socios']['qsearch'] = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_socios']['summary'] = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_socios']['navpage'] = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_socios']['goto']    = 'on';
          }
      }

      $this->nmgp_botoes['exit'] = "off";
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
      $this->nmgp_botoes['btn_Salir'] = "on";
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['iframe_filtro']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['iframe_filtro'] == "S")
      {
          $this->nmgp_botoes['exit'] = "off";
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_socios']['btn_display']) && !empty($_SESSION['scriptcase']['sc_apl_conf']['form_socios']['btn_display']))
      {
          foreach ($_SESSION['scriptcase']['sc_apl_conf']['form_socios']['btn_display'] as $NM_cada_btn => $NM_cada_opc)
          {
              $this->nmgp_botoes[$NM_cada_btn] = $NM_cada_opc;
          }
      }

      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_socios']['insert']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_socios']['insert'] != '')
      {
          $this->nmgp_botoes['new']    = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_socios']['insert'];
          $this->nmgp_botoes['insert'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_socios']['insert'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_socios']['new']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_socios']['new'] != '')
      {
          $this->nmgp_botoes['new']    = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_socios']['new'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_socios']['update']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_socios']['update'] != '')
      {
          $this->nmgp_botoes['update'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_socios']['update'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_socios']['delete']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_socios']['delete'] != '')
      {
          $this->nmgp_botoes['delete'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_socios']['delete'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_socios']['first']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_socios']['first'] != '')
      {
          $this->nmgp_botoes['first'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_socios']['first'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_socios']['back']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_socios']['back'] != '')
      {
          $this->nmgp_botoes['back'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_socios']['back'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_socios']['forward']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_socios']['forward'] != '')
      {
          $this->nmgp_botoes['forward'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_socios']['forward'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_socios']['last']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_socios']['last'] != '')
      {
          $this->nmgp_botoes['last'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_socios']['last'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_socios']['qsearch']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_socios']['qsearch'] != '')
      {
          $this->nmgp_botoes['qsearch'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_socios']['qsearch'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_socios']['summary']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_socios']['summary'] != '')
      {
          $this->nmgp_botoes['summary'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_socios']['summary'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_socios']['navpage']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_socios']['navpage'] != '')
      {
          $this->nmgp_botoes['navpage'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_socios']['navpage'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_socios']['goto']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_socios']['goto'] != '')
      {
          $this->nmgp_botoes['goto'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_socios']['goto'];
      }

      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['embutida_liga_form_insert']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['embutida_liga_form_insert'] != '')
      {
          $this->nmgp_botoes['new']    = $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['embutida_liga_form_insert'];
          $this->nmgp_botoes['insert'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['embutida_liga_form_insert'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['embutida_liga_form_update']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['embutida_liga_form_update'] != '')
      {
          $this->nmgp_botoes['update'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['embutida_liga_form_update'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['embutida_liga_form_delete']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['embutida_liga_form_delete'] != '')
      {
          $this->nmgp_botoes['delete'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['embutida_liga_form_delete'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['embutida_liga_form_btn_nav']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['embutida_liga_form_btn_nav'] != '')
      {
          $this->nmgp_botoes['first']   = $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['embutida_liga_form_btn_nav'];
          $this->nmgp_botoes['back']    = $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['embutida_liga_form_btn_nav'];
          $this->nmgp_botoes['forward'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['embutida_liga_form_btn_nav'];
          $this->nmgp_botoes['last']    = $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['embutida_liga_form_btn_nav'];
      }

      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_socios']['insert']) && $_SESSION['scriptcase']['sc_apl_conf']['form_socios']['insert'] != '')
      {
          $this->nmgp_botoes['new']    = $_SESSION['scriptcase']['sc_apl_conf']['form_socios']['insert'];
          $this->nmgp_botoes['insert'] = $_SESSION['scriptcase']['sc_apl_conf']['form_socios']['insert'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_socios']['update']) && $_SESSION['scriptcase']['sc_apl_conf']['form_socios']['update'] != '')
      {
          $this->nmgp_botoes['update'] = $_SESSION['scriptcase']['sc_apl_conf']['form_socios']['update'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_socios']['delete']) && $_SESSION['scriptcase']['sc_apl_conf']['form_socios']['delete'] != '')
      {
          $this->nmgp_botoes['delete'] = $_SESSION['scriptcase']['sc_apl_conf']['form_socios']['delete'];
      }

      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_socios']['field_display']) && !empty($_SESSION['scriptcase']['sc_apl_conf']['form_socios']['field_display']))
      {
          foreach ($_SESSION['scriptcase']['sc_apl_conf']['form_socios']['field_display'] as $NM_cada_field => $NM_cada_opc)
          {
              $this->nmgp_cmp_hidden[$NM_cada_field] = $NM_cada_opc;
              $this->NM_ajax_info['fieldDisplay'][$NM_cada_field] = $NM_cada_opc;
          }
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_socios']['field_readonly']) && !empty($_SESSION['scriptcase']['sc_apl_conf']['form_socios']['field_readonly']))
      {
          foreach ($_SESSION['scriptcase']['sc_apl_conf']['form_socios']['field_readonly'] as $NM_cada_field => $NM_cada_opc)
          {
              $this->nmgp_cmp_readonly[$NM_cada_field] = "on";
              $this->NM_ajax_info['readOnly'][$NM_cada_field] = $NM_cada_opc;
          }
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_socios']['exit']) && $_SESSION['scriptcase']['sc_apl_conf']['form_socios']['exit'] != '')
      {
          $_SESSION['scriptcase']['sc_url_saida'][$this->Ini->sc_page] = $_SESSION['scriptcase']['sc_apl_conf']['form_socios']['exit'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['dados_form']))
      {
          $this->nmgp_dados_form = $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['dados_form'];
          if (!isset($this->cod_evento)){$this->cod_evento = $this->nmgp_dados_form['cod_evento'];} 
          if (!isset($this->tipo_evento)){$this->tipo_evento = $this->nmgp_dados_form['tipo_evento'];} 
          if (!isset($this->fecha_reporte)){$this->fecha_reporte = $this->nmgp_dados_form['fecha_reporte'];} 
          if (!isset($this->tipo_servicio)){$this->tipo_servicio = $this->nmgp_dados_form['tipo_servicio'];} 
          if (!isset($this->ruc)){$this->ruc = $this->nmgp_dados_form['ruc'];} 
          if (!isset($this->tipo_documento)){$this->tipo_documento = $this->nmgp_dados_form['tipo_documento'];} 
          if (!isset($this->nombres)){$this->nombres = $this->nmgp_dados_form['nombres'];} 
          if (!isset($this->asociacion)){$this->asociacion = $this->nmgp_dados_form['asociacion'];} 
          if (!isset($this->fecha_registro)){$this->fecha_registro = $this->nmgp_dados_form['fecha_registro'];} 
          if (!isset($this->cod_u_organizaciones)){$this->cod_u_organizaciones = $this->nmgp_dados_form['cod_u_organizaciones'];} 
          if (!isset($this->estado_socio)){$this->estado_socio = $this->nmgp_dados_form['estado_socio'];} 
          if (!isset($this->vinculado_a)){$this->vinculado_a = $this->nmgp_dados_form['vinculado_a'];} 
          if (!isset($this->zona_procedencia)){$this->zona_procedencia = $this->nmgp_dados_form['zona_procedencia'];} 
          if (!isset($this->provincia_procedencia)){$this->provincia_procedencia = $this->nmgp_dados_form['provincia_procedencia'];} 
          if (!isset($this->forma_organizacion)){$this->forma_organizacion = $this->nmgp_dados_form['forma_organizacion'];} 
          if (!isset($this->cod_servicio_im)){$this->cod_servicio_im = $this->nmgp_dados_form['cod_servicio_im'];} 
          if (!isset($this->fecha_reporte_im)){$this->fecha_reporte_im = $this->nmgp_dados_form['fecha_reporte_im'];} 
      }
      $glo_senha_protect = (isset($_SESSION['scriptcase']['glo_senha_protect'])) ? $_SESSION['scriptcase']['glo_senha_protect'] : "S";
      $this->aba_iframe = false;
      if (isset($_SESSION['scriptcase']['sc_aba_iframe']))
      {
          foreach ($_SESSION['scriptcase']['sc_aba_iframe'] as $aba => $apls_aba)
          {
              if (in_array("form_socios", $apls_aba))
              {
                  $this->aba_iframe = true;
                  break;
              }
          }
      }
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['iframe_menu'] && (!isset($_SESSION['scriptcase']['menu_mobile']) || empty($_SESSION['scriptcase']['menu_mobile'])))
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
              include_once($this->Ini->path_embutida . 'form_socios/form_socios_calendar.php');
          }
          else
          { 
              include_once($this->Ini->path_aplicacao . 'form_socios_calendar.php');
          }
          exit;
      }

      if (is_file($this->Ini->path_aplicacao . 'form_socios_help.txt'))
      {
          $arr_link_webhelp = file($this->Ini->path_aplicacao . 'form_socios_help.txt');
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
          require_once($this->Ini->path_embutida . 'form_socios/form_socios_erro.class.php');
      }
      else
      { 
          require_once($this->Ini->path_aplicacao . "form_socios_erro.class.php"); 
      }
      $this->Erro      = new form_socios_erro();
      $this->Erro->Ini = $this->Ini;
      if ($nm_opc_lookup != "lookup" && $nm_opc_php != "formphp")
      { 
         if (empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['opcao']))
         { 
             if ($this->cod_socios != "")   
             { 
                 $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['opcao'] = "igual" ;  
             }   
         }   
      } 
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['opcao']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['opcao']) && empty($this->nmgp_refresh_fields))
      {
          $this->nmgp_opcao = $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['opcao'];  
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['opcao'] = "" ;  
          if ($this->nmgp_opcao == "edit_novo")  
          {
             $this->nmgp_opcao = "novo";
             $this->nm_flag_saida_novo = "S";
          }
      } 
      $this->nm_Start_new = false;
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_socios']['start']) && $_SESSION['scriptcase']['sc_apl_conf']['form_socios']['start'] == 'new')
      {
          $this->nmgp_opcao = "novo";
          $this->nm_Start_new = true;
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['opcao'] = "novo";
          unset($_SESSION['scriptcase']['sc_apl_conf']['form_socios']['start']);
      }
      if ($this->nmgp_opcao == "igual")  
      {
          $this->nmgp_opc_ant = $this->nmgp_opcao;
      } 
      else
      {
          $this->nmgp_opc_ant = $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['opc_ant'];
      } 
      if ($this->nmgp_opcao == "novo")  
      {
          $this->nmgp_botoes['btn_Salir'] = "on";
      }
      elseif ($this->nmgp_opcao == "incluir")  
      {
          $this->nmgp_botoes['btn_Salir'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['botoes']['btn_Salir'];
      }
      if ($this->nmgp_opcao == "recarga" || $this->nmgp_opcao == "muda_form")  
      {
          $this->nmgp_botoes = $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['botoes'];
          $this->Nav_permite_ret = 0 != $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['inicio'];
          $this->Nav_permite_ava = $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['total'] != $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['final'];
      }
      else
      {
      }
      $this->nm_flag_iframe = false;
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['dados_form'])) 
      {
         $this->nmgp_dados_form = $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['dados_form'];
      }
      if ($this->nmgp_opcao == "edit_novo")  
      {
          $this->nmgp_opcao = "novo";
          $this->nm_flag_saida_novo = "S";
      }
//
      $this->sc_evento = $this->nmgp_opcao;
      if (isset($this->cod_socios)) { $this->nm_limpa_alfa($this->cod_socios); }
      if (isset($this->zona)) { $this->nm_limpa_alfa($this->zona); }
      if (isset($this->cod_provincia)) { $this->nm_limpa_alfa($this->cod_provincia); }
      if (isset($this->cedula)) { $this->nm_limpa_alfa($this->cedula); }
      if (isset($this->apellidos)) { $this->nm_limpa_alfa($this->apellidos); }
      if (isset($this->grupo_etnico)) { $this->nm_limpa_alfa($this->grupo_etnico); }
      if (isset($this->genero)) { $this->nm_limpa_alfa($this->genero); }
      if (isset($this->poblacion)) { $this->nm_limpa_alfa($this->poblacion); }
      if (isset($this->cod_canton)) { $this->nm_limpa_alfa($this->cod_canton); }
      if (isset($this->cod_parroquia)) { $this->nm_limpa_alfa($this->cod_parroquia); }
      if (isset($this->telefono)) { $this->nm_limpa_alfa($this->telefono); }
      if (isset($this->celular)) { $this->nm_limpa_alfa($this->celular); }
      if (isset($this->mail)) { $this->nm_limpa_alfa($this->mail); }
      if (isset($this->direccion)) { $this->nm_limpa_alfa($this->direccion); }
      if (isset($this->discapacidad)) { $this->nm_limpa_alfa($this->discapacidad); }
      if (isset($this->tipo_discapacidad)) { $this->nm_limpa_alfa($this->tipo_discapacidad); }
      if (isset($this->estado)) { $this->nm_limpa_alfa($this->estado); }
      if (isset($this->nacionalidad)) { $this->nm_limpa_alfa($this->nacionalidad); }
      if (isset($this->socio_empleado)) { $this->nm_limpa_alfa($this->socio_empleado); }
      $Campos_Crit       = "";
      $Campos_erro       = "";
      $Campos_Falta      = array();
      $Campos_Erros      = array();
      $dir_raiz          = strrpos($_SERVER['PHP_SELF'],"/") ;  
      $dir_raiz          =  substr($_SERVER['PHP_SELF'], 0, $dir_raiz + 1) ;  
      $this->nm_location = $this->Ini->sc_protocolo . $this->Ini->server . $dir_raiz . "form_socios.php"; 
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['opc_edit'] = true;  
     if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['dados_select'])) 
     {
        $this->nmgp_dados_select = $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['dados_select'];
     }
   }

   function loadFieldConfig()
   {
      $this->field_config = array();
      //-- fecha_nacimiento
      $this->field_config['fecha_nacimiento']                 = array();
      $this->field_config['fecha_nacimiento']['date_format']  = $_SESSION['scriptcase']['reg_conf']['date_format'];
      $this->field_config['fecha_nacimiento']['date_sep']     = $_SESSION['scriptcase']['reg_conf']['date_sep'];
      $this->field_config['fecha_nacimiento']['date_display'] = "ddmmaaaa";
      $this->new_date_format('DT', 'fecha_nacimiento');
      //-- fecha_reporte
      $this->field_config['fecha_reporte']                 = array();
      $this->field_config['fecha_reporte']['date_format']  = $_SESSION['scriptcase']['reg_conf']['date_format'];
      $this->field_config['fecha_reporte']['date_sep']     = $_SESSION['scriptcase']['reg_conf']['date_sep'];
      $this->field_config['fecha_reporte']['date_display'] = "ddmmaaaa";
      $this->new_date_format('DT', 'fecha_reporte');
      //-- fecha_registro
      $this->field_config['fecha_registro']                 = array();
      $this->field_config['fecha_registro']['date_format']  = $_SESSION['scriptcase']['reg_conf']['date_format'] . ';' . $_SESSION['scriptcase']['reg_conf']['time_format'];
      $this->field_config['fecha_registro']['date_sep']     = $_SESSION['scriptcase']['reg_conf']['date_sep'];
      $this->field_config['fecha_registro']['time_sep']     = $_SESSION['scriptcase']['reg_conf']['time_sep'];
      $this->field_config['fecha_registro']['date_display'] = "ddmmaaaa;hhiiss";
      $this->new_date_format('DH', 'fecha_registro');
      //-- cod_servicio_im
      $this->field_config['cod_servicio_im']               = array();
      $this->field_config['cod_servicio_im']['symbol_grp'] = $_SESSION['scriptcase']['reg_conf']['grup_num'];
      $this->field_config['cod_servicio_im']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['cod_servicio_im']['symbol_dec'] = '';
      $this->field_config['cod_servicio_im']['symbol_neg'] = $_SESSION['scriptcase']['reg_conf']['simb_neg'];
      $this->field_config['cod_servicio_im']['format_neg'] = $_SESSION['scriptcase']['reg_conf']['neg_num'];
      //-- fecha_reporte_im
      $this->field_config['fecha_reporte_im']                 = array();
      $this->field_config['fecha_reporte_im']['date_format']  = $_SESSION['scriptcase']['reg_conf']['date_format'];
      $this->field_config['fecha_reporte_im']['date_sep']     = $_SESSION['scriptcase']['reg_conf']['date_sep'];
      $this->field_config['fecha_reporte_im']['date_display'] = "ddmmaaaa";
      $this->new_date_format('DT', 'fecha_reporte_im');
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
          if ('validate_txt_tipo_documento' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'txt_tipo_documento');
          }
          if ('validate_txt_cedula' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'txt_cedula');
          }
          if ('validate_txt_pasaporte' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'txt_pasaporte');
          }
          if ('validate_btnbuscar' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'btnbuscar');
          }
          if ('validate_cod_socios' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'cod_socios');
          }
          if ('validate_estado' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'estado');
          }
          if ('validate_cedula' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'cedula');
          }
          if ('validate_apellidos' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'apellidos');
          }
          if ('validate_fecha_nacimiento' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'fecha_nacimiento');
          }
          if ('validate_nacionalidad' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'nacionalidad');
          }
          if ('validate_genero' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'genero');
          }
          if ('validate_grupo_etnico' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'grupo_etnico');
          }
          if ('validate_telefono' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'telefono');
          }
          if ('validate_celular' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'celular');
          }
          if ('validate_mail' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'mail');
          }
          if ('validate_direccion' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'direccion');
          }
          if ('validate_poblacion' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'poblacion');
          }
          if ('validate_socio_empleado' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'socio_empleado');
          }
          if ('validate_discapacidad' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'discapacidad');
          }
          if ('validate_tipo_discapacidad' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'tipo_discapacidad');
          }
          if ('validate_zona' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'zona');
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
          form_socios_pack_ajax_response();
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
          if ('event_discapacidad_onchange' == $this->NM_ajax_opcao)
          {
              $this->discapacidad_onChange();
          }
          if ('event_mail_onblur' == $this->NM_ajax_opcao)
          {
              $this->mail_onBlur();
          }
          if ('event_txt_tipo_documento_onchange' == $this->NM_ajax_opcao)
          {
              $this->txt_tipo_documento_onChange();
          }
          form_socios_pack_ajax_response();
          exit;
      }
      if (isset($this->sc_inline_call) && 'Y' == $this->sc_inline_call)
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['inline_form_seq'] = $this->sc_seq_row;
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
              form_socios_pack_ajax_response();
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
          $_SESSION['scriptcase']['form_socios']['contr_erro'] = 'off';
          if ($Campos_Crit != "") 
          {
              $Campos_Crit = $this->Ini->Nm_lang['lang_errm_flds'] . ' ' . $Campos_Crit ; 
          }
          if ($Campos_Crit != "" || !empty($Campos_Falta) || $this->Campos_Mens_erro != "")
          {
              if ($this->NM_ajax_flag)
              {
                  form_socios_pack_ajax_response();
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
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['recarga'] = $this->nmgp_opcao;
          $this->nm_mens_form_upd = "La información ha sido actualizada satisfactoriamente...";
          $this->nm_mens_form_del = "La información ha sido eliminada satisfactoriamente...";
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['sc_redir_insert']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['sc_redir_insert'] == "ok")
          {
              if ($this->sc_evento == "insert" || ($this->nmgp_opc_ant == "novo" && $this->nmgp_opcao == "novo" && $this->sc_evento == "novo"))
              {
                  $this->NM_close_db(); 
                  $this->nmgp_redireciona(2); 
              }
          }
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['sc_redir_atualiz']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['sc_redir_atualiz'] == "ok")
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
              $this->nm_gera_mensagem($this->nm_mens_form_upd, "form_socios.php", "", "cod_socios?#?$this->cod_socios?@?"); 
          }
          if ($this->sc_evento == "insert" || ($this->nmgp_opc_ant == "novo" && $this->nmgp_opcao == "novo" && $this->sc_evento == "novo"))
          {
              $this->NM_close_db(); 
              $this->nm_tira_formatacao(); 
             $this->nm_converte_datas();
              $this->nm_gera_mensagem($this->nm_mens_form_ins, "form_socios.php", "", "cod_socios?#?$this->cod_socios?@?"); 
          }
          if ($this->sc_evento == "delete")
          {
              $this->NM_close_db(); 
              $this->nm_tira_formatacao(); 
             $this->nm_converte_datas();
              $this->nm_gera_mensagem($this->nm_mens_form_del, "form_socios.php", "", "cod_socios?#?$this->cod_socios?@?nmgp_opcao?#?igual?@?"); 
          }
      }
      if ($this->NM_ajax_flag && 'navigate_form' == $this->NM_ajax_opcao)
      {
          $this->ajax_return_values();
          $this->ajax_add_parameters();
          form_socios_pack_ajax_response();
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
          form_socios_pack_ajax_response();
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
           case 'txt_tipo_documento':
               return "";
               break;
           case 'txt_cedula':
               return "Ingresar:";
               break;
           case 'txt_pasaporte':
               return "Ingresar:";
               break;
           case 'btnbuscar':
               return "";
               break;
           case 'cod_socios':
               return "CÓDIGO";
               break;
           case 'estado':
               return "ESTADO";
               break;
           case 'cedula':
               return "CÉDULA / PASAPORTE";
               break;
           case 'apellidos':
               return "NOMBRES";
               break;
           case 'fecha_nacimiento':
               return "FECHA DE NACIMIENTO";
               break;
           case 'nacionalidad':
               return "NACIONALIDAD";
               break;
           case 'genero':
               return "SEXO";
               break;
           case 'grupo_etnico':
               return "GRUPO ÉTNICO";
               break;
           case 'telefono':
               return "TELÉFONO";
               break;
           case 'celular':
               return "CELULAR";
               break;
           case 'mail':
               return "CORREO ELECTRÓNICO";
               break;
           case 'direccion':
               return "DIRECCIÓN";
               break;
           case 'poblacion':
               return "POBLACIÓN";
               break;
           case 'socio_empleado':
               return "SOCIO/EMPLEADO";
               break;
           case 'discapacidad':
               return "DISCAPACIDAD";
               break;
           case 'tipo_discapacidad':
               return "TIPO DISCAPACIDAD";
               break;
           case 'zona':
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
           case 'cod_evento':
               return "Cod Evento";
               break;
           case 'tipo_evento':
               return "Tipo Evento";
               break;
           case 'fecha_reporte':
               return "Fecha Reporte";
               break;
           case 'tipo_servicio':
               return "Tipo Servicio";
               break;
           case 'ruc':
               return "Ruc";
               break;
           case 'tipo_documento':
               return "Tipo Documento";
               break;
           case 'nombres':
               return "Nombres";
               break;
           case 'asociacion':
               return "Asociacion";
               break;
           case 'fecha_registro':
               return "Fecha Registro";
               break;
           case 'cod_u_organizaciones':
               return "Cod U Organizaciones";
               break;
           case 'estado_socio':
               return "Estado Socio";
               break;
           case 'vinculado_a':
               return "Vinculado A";
               break;
           case 'zona_procedencia':
               return "Zona Procedencia";
               break;
           case 'provincia_procedencia':
               return "Provincia Procedencia";
               break;
           case 'forma_organizacion':
               return "Forma Organizacion";
               break;
           case 'cod_servicio_im':
               return "Cod Servicio Im";
               break;
           case 'fecha_reporte_im':
               return "Fecha Reporte Im";
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
      if ('' == $filtro || 'txt_tipo_documento' == $filtro)
        $this->ValidateField_txt_tipo_documento($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'txt_cedula' == $filtro)
        $this->ValidateField_txt_cedula($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'txt_pasaporte' == $filtro)
        $this->ValidateField_txt_pasaporte($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'btnbuscar' == $filtro)
        $this->ValidateField_btnbuscar($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'cod_socios' == $filtro)
        $this->ValidateField_cod_socios($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'estado' == $filtro)
        $this->ValidateField_estado($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'cedula' == $filtro)
        $this->ValidateField_cedula($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'apellidos' == $filtro)
        $this->ValidateField_apellidos($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'fecha_nacimiento' == $filtro)
        $this->ValidateField_fecha_nacimiento($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'nacionalidad' == $filtro)
        $this->ValidateField_nacionalidad($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'genero' == $filtro)
        $this->ValidateField_genero($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'grupo_etnico' == $filtro)
        $this->ValidateField_grupo_etnico($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'telefono' == $filtro)
        $this->ValidateField_telefono($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'celular' == $filtro)
        $this->ValidateField_celular($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'mail' == $filtro)
        $this->ValidateField_mail($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'direccion' == $filtro)
        $this->ValidateField_direccion($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'poblacion' == $filtro)
        $this->ValidateField_poblacion($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'socio_empleado' == $filtro)
        $this->ValidateField_socio_empleado($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'discapacidad' == $filtro)
        $this->ValidateField_discapacidad($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'tipo_discapacidad' == $filtro)
        $this->ValidateField_tipo_discapacidad($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'zona' == $filtro)
        $this->ValidateField_zona($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'cod_provincia' == $filtro)
        $this->ValidateField_cod_provincia($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'cod_canton' == $filtro)
        $this->ValidateField_cod_canton($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'cod_parroquia' == $filtro)
        $this->ValidateField_cod_parroquia($Campos_Crit, $Campos_Falta, $Campos_Erros);
//-- converter datas   
      $this->nm_converte_datas();
//---

      if (!isset($this->NM_ajax_flag) || 'validate_' != substr($this->NM_ajax_opcao, 0, 9))
      {
      $_SESSION['scriptcase']['form_socios']['contr_erro'] = 'on';
                         

$_SESSION['scriptcase']['form_socios']['contr_erro'] = 'off'; 
      }
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

      if (!empty($Campos_Crit) || !empty($Campos_Falta) || !empty($this->Campos_Mens_erro))
      {
          if (!isset($this->NM_ajax_flag) || 'validate_' != substr($this->NM_ajax_opcao, 0, 9))
          {
              $_SESSION['scriptcase']['form_socios']['contr_erro'] = 'on';
                         

$_SESSION['scriptcase']['form_socios']['contr_erro'] = 'off'; 
          }
      }
   }

    function ValidateField_txt_tipo_documento(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
               if (!empty($this->txt_tipo_documento) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_txt_tipo_documento']) && !in_array($this->txt_tipo_documento, $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_txt_tipo_documento']))
               {
                   $Campos_Crit .= $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($Campos_Erros['txt_tipo_documento']))
                   {
                       $Campos_Erros['txt_tipo_documento'] = array();
                   }
                   $Campos_Erros['txt_tipo_documento'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($this->NM_ajax_info['errList']['txt_tipo_documento']) || !is_array($this->NM_ajax_info['errList']['txt_tipo_documento']))
                   {
                       $this->NM_ajax_info['errList']['txt_tipo_documento'] = array();
                   }
                   $this->NM_ajax_info['errList']['txt_tipo_documento'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
               }
    } // ValidateField_txt_tipo_documento

    function ValidateField_txt_cedula(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->txt_cedula) > 10) 
          { 
              $Campos_Crit .= "Ingresar: " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 10 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['txt_cedula']))
              {
                  $Campos_Erros['txt_cedula'] = array();
              }
              $Campos_Erros['txt_cedula'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 10 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['txt_cedula']) || !is_array($this->NM_ajax_info['errList']['txt_cedula']))
              {
                  $this->NM_ajax_info['errList']['txt_cedula'] = array();
              }
              $this->NM_ajax_info['errList']['txt_cedula'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 10 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
      $Teste_trab = function_exists('mb_strtoupper') ? mb_strtoupper("0123456789") : strtoupper("0123456789") ;  
      $Teste_trab = $Teste_trab . chr(10) . chr(13) ; 
      $Teste_compara = function_exists('mb_strtoupper') ? mb_strtoupper($this->txt_cedula) : strtoupper($this->txt_cedula) ; 
      if ($this->nmgp_opcao != "excluir") 
      { 
          $Teste_critica = 0 ; 
          for ($x = 0; $x < strlen($this->txt_cedula); $x++) 
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
              $Campos_Crit .= "Ingresar: " . $this->Ini->Nm_lang['lang_errm_ivch']; 
              if (!isset($Campos_Erros['txt_cedula']))
              {
                  $Campos_Erros['txt_cedula'] = array();
              }
              $Campos_Erros['txt_cedula'][] = $this->Ini->Nm_lang['lang_errm_ivch'];
              if (!isset($this->NM_ajax_info['errList']['txt_cedula']) || !is_array($this->NM_ajax_info['errList']['txt_cedula']))
              {
                  $this->NM_ajax_info['errList']['txt_cedula'] = array();
              }
              $this->NM_ajax_info['errList']['txt_cedula'][] = $this->Ini->Nm_lang['lang_errm_ivch'];
          } 
      } 
    } // ValidateField_txt_cedula

    function ValidateField_txt_pasaporte(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      $this->txt_pasaporte = function_exists('mb_strtoupper') ? mb_strtoupper($this->txt_pasaporte) : strtoupper($this->txt_pasaporte) ; 
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->txt_pasaporte) > 20) 
          { 
              $Campos_Crit .= "Ingresar: " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 20 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['txt_pasaporte']))
              {
                  $Campos_Erros['txt_pasaporte'] = array();
              }
              $Campos_Erros['txt_pasaporte'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 20 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['txt_pasaporte']) || !is_array($this->NM_ajax_info['errList']['txt_pasaporte']))
              {
                  $this->NM_ajax_info['errList']['txt_pasaporte'] = array();
              }
              $this->NM_ajax_info['errList']['txt_pasaporte'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 20 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
      $this->txt_pasaporte = function_exists('mb_strtoupper') ? mb_strtoupper($this->txt_pasaporte) : strtoupper($this->txt_pasaporte) ; 
      $Teste_trab = function_exists('mb_strtoupper') ? mb_strtoupper("abcdefghijklmnopqrstuvwxyz0123456789") : strtoupper("abcdefghijklmnopqrstuvwxyz0123456789") ;  
      $Teste_trab = $Teste_trab . chr(10) . chr(13) ; 
      $Teste_compara = function_exists('mb_strtoupper') ? mb_strtoupper($this->txt_pasaporte) : strtoupper($this->txt_pasaporte) ; 
      if ($this->nmgp_opcao != "excluir") 
      { 
          $Teste_critica = 0 ; 
          for ($x = 0; $x < strlen($this->txt_pasaporte); $x++) 
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
              $Campos_Crit .= "Ingresar: " . $this->Ini->Nm_lang['lang_errm_ivch']; 
              if (!isset($Campos_Erros['txt_pasaporte']))
              {
                  $Campos_Erros['txt_pasaporte'] = array();
              }
              $Campos_Erros['txt_pasaporte'][] = $this->Ini->Nm_lang['lang_errm_ivch'];
              if (!isset($this->NM_ajax_info['errList']['txt_pasaporte']) || !is_array($this->NM_ajax_info['errList']['txt_pasaporte']))
              {
                  $this->NM_ajax_info['errList']['txt_pasaporte'] = array();
              }
              $this->NM_ajax_info['errList']['txt_pasaporte'][] = $this->Ini->Nm_lang['lang_errm_ivch'];
          } 
      } 
    } // ValidateField_txt_pasaporte

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

    function ValidateField_cod_socios(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao == "incluir")
      { 
          if (NM_utf8_strlen($this->cod_socios) > 11) 
          { 
              $Campos_Crit .= "CÓDIGO " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 11 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['cod_socios']))
              {
                  $Campos_Erros['cod_socios'] = array();
              }
              $Campos_Erros['cod_socios'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 11 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['cod_socios']) || !is_array($this->NM_ajax_info['errList']['cod_socios']))
              {
                  $this->NM_ajax_info['errList']['cod_socios'] = array();
              }
              $this->NM_ajax_info['errList']['cod_socios'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 11 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
    } // ValidateField_cod_socios

    function ValidateField_estado(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->estado == "" && $this->nmgp_opcao != "excluir" && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['php_cmp_required']['estado']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['php_cmp_required']['estado'] == "on"))
      {
          $Campos_Falta[] = "ESTADO" ; 
          if (!isset($Campos_Erros['estado']))
          {
              $Campos_Erros['estado'] = array();
          }
          $Campos_Erros['estado'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
          if (!isset($this->NM_ajax_info['errList']['estado']) || !is_array($this->NM_ajax_info['errList']['estado']))
          {
              $this->NM_ajax_info['errList']['estado'] = array();
          }
          $this->NM_ajax_info['errList']['estado'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
      }
          if (!empty($this->estado) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_estado']) && !in_array($this->estado, $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_estado']))
          {
              $Campos_Crit .= $this->Ini->Nm_lang['lang_errm_ajax_data'];
              if (!isset($Campos_Erros['estado']))
              {
                  $Campos_Erros['estado'] = array();
              }
              $Campos_Erros['estado'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
              if (!isset($this->NM_ajax_info['errList']['estado']) || !is_array($this->NM_ajax_info['errList']['estado']))
              {
                  $this->NM_ajax_info['errList']['estado'] = array();
              }
              $this->NM_ajax_info['errList']['estado'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
          }
    } // ValidateField_estado

    function ValidateField_cedula(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      $this->cedula = function_exists('mb_strtoupper') ? mb_strtoupper($this->cedula) : strtoupper($this->cedula) ; 
      if ($this->nmgp_opcao != "excluir" && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['php_cmp_required']['cedula']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['php_cmp_required']['cedula'] == "on")) 
      { 
          if ($this->cedula == "")  
          { 
              $Campos_Falta[] =  "CÉDULA / PASAPORTE" ; 
              if (!isset($Campos_Erros['cedula']))
              {
                  $Campos_Erros['cedula'] = array();
              }
              $Campos_Erros['cedula'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
                  if (!isset($this->NM_ajax_info['errList']['cedula']) || !is_array($this->NM_ajax_info['errList']['cedula']))
                  {
                      $this->NM_ajax_info['errList']['cedula'] = array();
                  }
                  $this->NM_ajax_info['errList']['cedula'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
          } 
      } 
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->cedula) > 20) 
          { 
              $Campos_Crit .= "CÉDULA / PASAPORTE " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 20 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['cedula']))
              {
                  $Campos_Erros['cedula'] = array();
              }
              $Campos_Erros['cedula'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 20 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['cedula']) || !is_array($this->NM_ajax_info['errList']['cedula']))
              {
                  $this->NM_ajax_info['errList']['cedula'] = array();
              }
              $this->NM_ajax_info['errList']['cedula'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 20 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
    } // ValidateField_cedula

    function ValidateField_apellidos(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      $this->apellidos = function_exists('mb_strtoupper') ? mb_strtoupper($this->apellidos) : strtoupper($this->apellidos) ; 
      if ($this->nmgp_opcao != "excluir" && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['php_cmp_required']['apellidos']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['php_cmp_required']['apellidos'] == "on")) 
      { 
          if ($this->apellidos == "")  
          { 
              $Campos_Falta[] =  "NOMBRES" ; 
              if (!isset($Campos_Erros['apellidos']))
              {
                  $Campos_Erros['apellidos'] = array();
              }
              $Campos_Erros['apellidos'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
                  if (!isset($this->NM_ajax_info['errList']['apellidos']) || !is_array($this->NM_ajax_info['errList']['apellidos']))
                  {
                      $this->NM_ajax_info['errList']['apellidos'] = array();
                  }
                  $this->NM_ajax_info['errList']['apellidos'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
          } 
      } 
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->apellidos) > 50) 
          { 
              $Campos_Crit .= "NOMBRES " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['apellidos']))
              {
                  $Campos_Erros['apellidos'] = array();
              }
              $Campos_Erros['apellidos'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['apellidos']) || !is_array($this->NM_ajax_info['errList']['apellidos']))
              {
                  $this->NM_ajax_info['errList']['apellidos'] = array();
              }
              $this->NM_ajax_info['errList']['apellidos'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
      $this->apellidos = function_exists('mb_strtoupper') ? mb_strtoupper($this->apellidos) : strtoupper($this->apellidos) ; 
      $Teste_trab = function_exists('mb_strtoupper') ? mb_strtoupper("abcdefghijklmnopqrstuvwxyzï¿½ï¿½ï¿½ï¿½ï¿½ï¿½ï¿½ï¿½ï¿½ï¿½ï¿½ï¿½ï¿½ ÁÉÍÓÚ") : strtoupper("abcdefghijklmnopqrstuvwxyzï¿½ï¿½ï¿½ï¿½ï¿½ï¿½ï¿½ï¿½ï¿½ï¿½ï¿½ï¿½ï¿½ ÁÉÍÓÚ") ;  
      $Teste_trab = $Teste_trab . chr(10) . chr(13) ; 
      $Teste_compara = function_exists('mb_strtoupper') ? mb_strtoupper($this->apellidos) : strtoupper($this->apellidos) ; 
      if ($this->nmgp_opcao != "excluir") 
      { 
          $Teste_critica = 0 ; 
          for ($x = 0; $x < strlen($this->apellidos); $x++) 
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
              $Campos_Crit .= "NOMBRES " . $this->Ini->Nm_lang['lang_errm_ivch']; 
              if (!isset($Campos_Erros['apellidos']))
              {
                  $Campos_Erros['apellidos'] = array();
              }
              $Campos_Erros['apellidos'][] = $this->Ini->Nm_lang['lang_errm_ivch'];
              if (!isset($this->NM_ajax_info['errList']['apellidos']) || !is_array($this->NM_ajax_info['errList']['apellidos']))
              {
                  $this->NM_ajax_info['errList']['apellidos'] = array();
              }
              $this->NM_ajax_info['errList']['apellidos'][] = $this->Ini->Nm_lang['lang_errm_ivch'];
          } 
      } 
    } // ValidateField_apellidos

    function ValidateField_fecha_nacimiento(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      nm_limpa_data($this->fecha_nacimiento, $this->field_config['fecha_nacimiento']['date_sep']) ; 
      $trab_dt_min = ""; 
      $trab_dt_max = ""; 
      if ($this->nmgp_opcao != "excluir") 
      { 
          $guarda_datahora = $this->field_config['fecha_nacimiento']['date_format']; 
          if (false !== strpos($guarda_datahora, ';')) $this->field_config['fecha_nacimiento']['date_format'] = substr($guarda_datahora, 0, strpos($guarda_datahora, ';'));
          $Format_Data = $this->field_config['fecha_nacimiento']['date_format']; 
          nm_limpa_data($Format_Data, $this->field_config['fecha_nacimiento']['date_sep']) ; 
          if (trim($this->fecha_nacimiento) != "")  
          { 
              if ($teste_validade->Data($this->fecha_nacimiento, $Format_Data, $trab_dt_min, $trab_dt_max) == false)  
              { 
                  $Campos_Crit .= "FECHA DE NACIMIENTO; " ; 
                  if (!isset($Campos_Erros['fecha_nacimiento']))
                  {
                      $Campos_Erros['fecha_nacimiento'] = array();
                  }
                  $Campos_Erros['fecha_nacimiento'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['fecha_nacimiento']) || !is_array($this->NM_ajax_info['errList']['fecha_nacimiento']))
                  {
                      $this->NM_ajax_info['errList']['fecha_nacimiento'] = array();
                  }
                  $this->NM_ajax_info['errList']['fecha_nacimiento'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
           elseif ((!$this->NM_ajax_flag || 'validate_fecha_nacimiento' != $this->NM_ajax_opcao) && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['php_cmp_required']['fecha_nacimiento']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['php_cmp_required']['fecha_nacimiento'] == "on")) 
           { 
              $Campos_Falta[] = "FECHA DE NACIMIENTO" ; 
              if (!isset($Campos_Erros['fecha_nacimiento']))
              {
                  $Campos_Erros['fecha_nacimiento'] = array();
              }
              $Campos_Erros['fecha_nacimiento'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
                  if (!isset($this->NM_ajax_info['errList']['fecha_nacimiento']) || !is_array($this->NM_ajax_info['errList']['fecha_nacimiento']))
                  {
                      $this->NM_ajax_info['errList']['fecha_nacimiento'] = array();
                  }
                  $this->NM_ajax_info['errList']['fecha_nacimiento'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
           } 
          $this->field_config['fecha_nacimiento']['date_format'] = $guarda_datahora; 
       } 
    } // ValidateField_fecha_nacimiento

    function ValidateField_nacionalidad(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      $this->nacionalidad = function_exists('mb_strtoupper') ? mb_strtoupper($this->nacionalidad) : strtoupper($this->nacionalidad) ; 
      if ($this->nmgp_opcao != "excluir" && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['php_cmp_required']['nacionalidad']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['php_cmp_required']['nacionalidad'] == "on")) 
      { 
          if ($this->nacionalidad == "")  
          { 
              $Campos_Falta[] =  "NACIONALIDAD" ; 
              if (!isset($Campos_Erros['nacionalidad']))
              {
                  $Campos_Erros['nacionalidad'] = array();
              }
              $Campos_Erros['nacionalidad'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
                  if (!isset($this->NM_ajax_info['errList']['nacionalidad']) || !is_array($this->NM_ajax_info['errList']['nacionalidad']))
                  {
                      $this->NM_ajax_info['errList']['nacionalidad'] = array();
                  }
                  $this->NM_ajax_info['errList']['nacionalidad'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
          } 
      } 
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->nacionalidad) > 50) 
          { 
              $Campos_Crit .= "NACIONALIDAD " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['nacionalidad']))
              {
                  $Campos_Erros['nacionalidad'] = array();
              }
              $Campos_Erros['nacionalidad'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['nacionalidad']) || !is_array($this->NM_ajax_info['errList']['nacionalidad']))
              {
                  $this->NM_ajax_info['errList']['nacionalidad'] = array();
              }
              $this->NM_ajax_info['errList']['nacionalidad'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
      $this->nacionalidad = function_exists('mb_strtoupper') ? mb_strtoupper($this->nacionalidad) : strtoupper($this->nacionalidad) ; 
      $Teste_trab = function_exists('mb_strtoupper') ? mb_strtoupper("abcdefghijklmnopqrstuvwxyzï¿½ï¿½ï¿½ï¿½ï¿½ï¿½ï¿½ï¿½ï¿½ï¿½ï¿½ï¿½ ÁÉÍÓÚ") : strtoupper("abcdefghijklmnopqrstuvwxyzï¿½ï¿½ï¿½ï¿½ï¿½ï¿½ï¿½ï¿½ï¿½ï¿½ï¿½ï¿½ ÁÉÍÓÚ") ;  
      $Teste_trab = $Teste_trab . chr(10) . chr(13) ; 
      $Teste_compara = function_exists('mb_strtoupper') ? mb_strtoupper($this->nacionalidad) : strtoupper($this->nacionalidad) ; 
      if ($this->nmgp_opcao != "excluir") 
      { 
          $Teste_critica = 0 ; 
          for ($x = 0; $x < strlen($this->nacionalidad); $x++) 
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
              $Campos_Crit .= "NACIONALIDAD " . $this->Ini->Nm_lang['lang_errm_ivch']; 
              if (!isset($Campos_Erros['nacionalidad']))
              {
                  $Campos_Erros['nacionalidad'] = array();
              }
              $Campos_Erros['nacionalidad'][] = $this->Ini->Nm_lang['lang_errm_ivch'];
              if (!isset($this->NM_ajax_info['errList']['nacionalidad']) || !is_array($this->NM_ajax_info['errList']['nacionalidad']))
              {
                  $this->NM_ajax_info['errList']['nacionalidad'] = array();
              }
              $this->NM_ajax_info['errList']['nacionalidad'][] = $this->Ini->Nm_lang['lang_errm_ivch'];
          } 
      } 
    } // ValidateField_nacionalidad

    function ValidateField_genero(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->genero == "" && $this->nmgp_opcao != "excluir" && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['php_cmp_required']['genero']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['php_cmp_required']['genero'] == "on"))
      {
          $Campos_Falta[] = "SEXO" ; 
          if (!isset($Campos_Erros['genero']))
          {
              $Campos_Erros['genero'] = array();
          }
          $Campos_Erros['genero'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
          if (!isset($this->NM_ajax_info['errList']['genero']) || !is_array($this->NM_ajax_info['errList']['genero']))
          {
              $this->NM_ajax_info['errList']['genero'] = array();
          }
          $this->NM_ajax_info['errList']['genero'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
      }
          if (!empty($this->genero) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_genero']) && !in_array($this->genero, $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_genero']))
          {
              $Campos_Crit .= $this->Ini->Nm_lang['lang_errm_ajax_data'];
              if (!isset($Campos_Erros['genero']))
              {
                  $Campos_Erros['genero'] = array();
              }
              $Campos_Erros['genero'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
              if (!isset($this->NM_ajax_info['errList']['genero']) || !is_array($this->NM_ajax_info['errList']['genero']))
              {
                  $this->NM_ajax_info['errList']['genero'] = array();
              }
              $this->NM_ajax_info['errList']['genero'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
          }
    } // ValidateField_genero

    function ValidateField_grupo_etnico(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->grupo_etnico == "" && $this->nmgp_opcao != "excluir" && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['php_cmp_required']['grupo_etnico']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['php_cmp_required']['grupo_etnico'] == "on"))
      {
          $Campos_Falta[] = "GRUPO ÉTNICO" ; 
          if (!isset($Campos_Erros['grupo_etnico']))
          {
              $Campos_Erros['grupo_etnico'] = array();
          }
          $Campos_Erros['grupo_etnico'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
          if (!isset($this->NM_ajax_info['errList']['grupo_etnico']) || !is_array($this->NM_ajax_info['errList']['grupo_etnico']))
          {
              $this->NM_ajax_info['errList']['grupo_etnico'] = array();
          }
          $this->NM_ajax_info['errList']['grupo_etnico'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
      }
          if (!empty($this->grupo_etnico) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_grupo_etnico']) && !in_array($this->grupo_etnico, $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_grupo_etnico']))
          {
              $Campos_Crit .= $this->Ini->Nm_lang['lang_errm_ajax_data'];
              if (!isset($Campos_Erros['grupo_etnico']))
              {
                  $Campos_Erros['grupo_etnico'] = array();
              }
              $Campos_Erros['grupo_etnico'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
              if (!isset($this->NM_ajax_info['errList']['grupo_etnico']) || !is_array($this->NM_ajax_info['errList']['grupo_etnico']))
              {
                  $this->NM_ajax_info['errList']['grupo_etnico'] = array();
              }
              $this->NM_ajax_info['errList']['grupo_etnico'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
          }
    } // ValidateField_grupo_etnico

    function ValidateField_telefono(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir" && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['php_cmp_required']['telefono']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['php_cmp_required']['telefono'] == "on")) 
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
      if ($this->nmgp_opcao != "excluir" && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['php_cmp_required']['celular']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['php_cmp_required']['celular'] == "on")) 
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

    function ValidateField_mail(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (trim($this->mail) != "")  
          { 
              if ($teste_validade->Email($this->mail) == false)  
              { 
                      $Campos_Crit .= "CORREO ELECTRÓNICO; " ; 
                  if (!isset($Campos_Erros['mail']))
                  {
                      $Campos_Erros['mail'] = array();
                  }
                  $Campos_Erros['mail'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                      if (!isset($this->NM_ajax_info['errList']['mail']) || !is_array($this->NM_ajax_info['errList']['mail']))
                      {
                          $this->NM_ajax_info['errList']['mail'] = array();
                      }
                      $this->NM_ajax_info['errList']['mail'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
           elseif (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['php_cmp_required']['mail']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['php_cmp_required']['mail'] == "on") 
          { 
              $Campos_Falta[] = "CORREO ELECTRÓNICO" ; 
              if (!isset($Campos_Erros['mail']))
              {
                  $Campos_Erros['mail'] = array();
              }
              $Campos_Erros['mail'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
                  if (!isset($this->NM_ajax_info['errList']['mail']) || !is_array($this->NM_ajax_info['errList']['mail']))
                  {
                      $this->NM_ajax_info['errList']['mail'] = array();
                  }
                  $this->NM_ajax_info['errList']['mail'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
          } 
      } 
    } // ValidateField_mail

    function ValidateField_direccion(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      $this->direccion = function_exists('mb_strtoupper') ? mb_strtoupper($this->direccion) : strtoupper($this->direccion) ; 
      if ($this->nmgp_opcao != "excluir" && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['php_cmp_required']['direccion']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['php_cmp_required']['direccion'] == "on")) 
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
          if (NM_utf8_strlen($this->direccion) > 500) 
          { 
              $Campos_Crit .= "DIRECCIÓN " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 500 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['direccion']))
              {
                  $Campos_Erros['direccion'] = array();
              }
              $Campos_Erros['direccion'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 500 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['direccion']) || !is_array($this->NM_ajax_info['errList']['direccion']))
              {
                  $this->NM_ajax_info['errList']['direccion'] = array();
              }
              $this->NM_ajax_info['errList']['direccion'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 500 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
    } // ValidateField_direccion

    function ValidateField_poblacion(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->poblacion == "" && $this->nmgp_opcao != "excluir" && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['php_cmp_required']['poblacion']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['php_cmp_required']['poblacion'] == "on"))
      {
          $Campos_Falta[] = "POBLACIÓN" ; 
          if (!isset($Campos_Erros['poblacion']))
          {
              $Campos_Erros['poblacion'] = array();
          }
          $Campos_Erros['poblacion'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
          if (!isset($this->NM_ajax_info['errList']['poblacion']) || !is_array($this->NM_ajax_info['errList']['poblacion']))
          {
              $this->NM_ajax_info['errList']['poblacion'] = array();
          }
          $this->NM_ajax_info['errList']['poblacion'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
      }
          if (!empty($this->poblacion) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_poblacion']) && !in_array($this->poblacion, $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_poblacion']))
          {
              $Campos_Crit .= $this->Ini->Nm_lang['lang_errm_ajax_data'];
              if (!isset($Campos_Erros['poblacion']))
              {
                  $Campos_Erros['poblacion'] = array();
              }
              $Campos_Erros['poblacion'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
              if (!isset($this->NM_ajax_info['errList']['poblacion']) || !is_array($this->NM_ajax_info['errList']['poblacion']))
              {
                  $this->NM_ajax_info['errList']['poblacion'] = array();
              }
              $this->NM_ajax_info['errList']['poblacion'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
          }
    } // ValidateField_poblacion

    function ValidateField_socio_empleado(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->socio_empleado == "" && $this->nmgp_opcao != "excluir" && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['php_cmp_required']['socio_empleado']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['php_cmp_required']['socio_empleado'] == "on"))
      {
          $Campos_Falta[] = "SOCIO/EMPLEADO" ; 
          if (!isset($Campos_Erros['socio_empleado']))
          {
              $Campos_Erros['socio_empleado'] = array();
          }
          $Campos_Erros['socio_empleado'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
          if (!isset($this->NM_ajax_info['errList']['socio_empleado']) || !is_array($this->NM_ajax_info['errList']['socio_empleado']))
          {
              $this->NM_ajax_info['errList']['socio_empleado'] = array();
          }
          $this->NM_ajax_info['errList']['socio_empleado'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
      }
          if (!empty($this->socio_empleado) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_socio_empleado']) && !in_array($this->socio_empleado, $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_socio_empleado']))
          {
              $Campos_Crit .= $this->Ini->Nm_lang['lang_errm_ajax_data'];
              if (!isset($Campos_Erros['socio_empleado']))
              {
                  $Campos_Erros['socio_empleado'] = array();
              }
              $Campos_Erros['socio_empleado'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
              if (!isset($this->NM_ajax_info['errList']['socio_empleado']) || !is_array($this->NM_ajax_info['errList']['socio_empleado']))
              {
                  $this->NM_ajax_info['errList']['socio_empleado'] = array();
              }
              $this->NM_ajax_info['errList']['socio_empleado'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
          }
    } // ValidateField_socio_empleado

    function ValidateField_discapacidad(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->discapacidad == "" && $this->nmgp_opcao != "excluir" && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['php_cmp_required']['discapacidad']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['php_cmp_required']['discapacidad'] == "on"))
      {
          $Campos_Falta[] = "DISCAPACIDAD" ; 
          if (!isset($Campos_Erros['discapacidad']))
          {
              $Campos_Erros['discapacidad'] = array();
          }
          $Campos_Erros['discapacidad'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
          if (!isset($this->NM_ajax_info['errList']['discapacidad']) || !is_array($this->NM_ajax_info['errList']['discapacidad']))
          {
              $this->NM_ajax_info['errList']['discapacidad'] = array();
          }
          $this->NM_ajax_info['errList']['discapacidad'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
      }
          if (!empty($this->discapacidad) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_discapacidad']) && !in_array($this->discapacidad, $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_discapacidad']))
          {
              $Campos_Crit .= $this->Ini->Nm_lang['lang_errm_ajax_data'];
              if (!isset($Campos_Erros['discapacidad']))
              {
                  $Campos_Erros['discapacidad'] = array();
              }
              $Campos_Erros['discapacidad'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
              if (!isset($this->NM_ajax_info['errList']['discapacidad']) || !is_array($this->NM_ajax_info['errList']['discapacidad']))
              {
                  $this->NM_ajax_info['errList']['discapacidad'] = array();
              }
              $this->NM_ajax_info['errList']['discapacidad'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
          }
    } // ValidateField_discapacidad

    function ValidateField_tipo_discapacidad(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
               if (!empty($this->tipo_discapacidad) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_tipo_discapacidad']) && !in_array($this->tipo_discapacidad, $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_tipo_discapacidad']))
               {
                   $Campos_Crit .= $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($Campos_Erros['tipo_discapacidad']))
                   {
                       $Campos_Erros['tipo_discapacidad'] = array();
                   }
                   $Campos_Erros['tipo_discapacidad'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($this->NM_ajax_info['errList']['tipo_discapacidad']) || !is_array($this->NM_ajax_info['errList']['tipo_discapacidad']))
                   {
                       $this->NM_ajax_info['errList']['tipo_discapacidad'] = array();
                   }
                   $this->NM_ajax_info['errList']['tipo_discapacidad'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
               }
    } // ValidateField_tipo_discapacidad

    function ValidateField_zona(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->zona == "" && $this->nmgp_opcao != "excluir" && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['php_cmp_required']['zona']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['php_cmp_required']['zona'] == "on"))
      {
          $Campos_Falta[] = "ZONA" ; 
          if (!isset($Campos_Erros['zona']))
          {
              $Campos_Erros['zona'] = array();
          }
          $Campos_Erros['zona'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
          if (!isset($this->NM_ajax_info['errList']['zona']) || !is_array($this->NM_ajax_info['errList']['zona']))
          {
              $this->NM_ajax_info['errList']['zona'] = array();
          }
          $this->NM_ajax_info['errList']['zona'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
      }
          if (!empty($this->zona) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_zona']) && !in_array($this->zona, $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_zona']))
          {
              $Campos_Crit .= $this->Ini->Nm_lang['lang_errm_ajax_data'];
              if (!isset($Campos_Erros['zona']))
              {
                  $Campos_Erros['zona'] = array();
              }
              $Campos_Erros['zona'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
              if (!isset($this->NM_ajax_info['errList']['zona']) || !is_array($this->NM_ajax_info['errList']['zona']))
              {
                  $this->NM_ajax_info['errList']['zona'] = array();
              }
              $this->NM_ajax_info['errList']['zona'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
          }
    } // ValidateField_zona

    function ValidateField_cod_provincia(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->cod_provincia == "" && $this->nmgp_opcao != "excluir" && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['php_cmp_required']['cod_provincia']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['php_cmp_required']['cod_provincia'] == "on"))
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
          if (!empty($this->cod_provincia) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_cod_provincia']) && !in_array($this->cod_provincia, $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_cod_provincia']))
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
      if ($this->cod_canton == "" && $this->nmgp_opcao != "excluir" && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['php_cmp_required']['cod_canton']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['php_cmp_required']['cod_canton'] == "on"))
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
          if (!empty($this->cod_canton) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_cod_canton']) && !in_array($this->cod_canton, $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_cod_canton']))
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
      if ($this->cod_parroquia == "" && $this->nmgp_opcao != "excluir" && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['php_cmp_required']['cod_parroquia']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['php_cmp_required']['cod_parroquia'] == "on"))
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
          if (!empty($this->cod_parroquia) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_cod_parroquia']) && !in_array($this->cod_parroquia, $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_cod_parroquia']))
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
    $this->nmgp_dados_form['txt_tipo_documento'] = $this->txt_tipo_documento;
    $this->nmgp_dados_form['txt_cedula'] = $this->txt_cedula;
    $this->nmgp_dados_form['txt_pasaporte'] = $this->txt_pasaporte;
    $this->nmgp_dados_form['btnbuscar'] = $this->btnbuscar;
    $this->nmgp_dados_form['cod_socios'] = $this->cod_socios;
    $this->nmgp_dados_form['estado'] = $this->estado;
    $this->nmgp_dados_form['cedula'] = $this->cedula;
    $this->nmgp_dados_form['apellidos'] = $this->apellidos;
    $this->nmgp_dados_form['fecha_nacimiento'] = $this->fecha_nacimiento;
    $this->nmgp_dados_form['nacionalidad'] = $this->nacionalidad;
    $this->nmgp_dados_form['genero'] = $this->genero;
    $this->nmgp_dados_form['grupo_etnico'] = $this->grupo_etnico;
    $this->nmgp_dados_form['telefono'] = $this->telefono;
    $this->nmgp_dados_form['celular'] = $this->celular;
    $this->nmgp_dados_form['mail'] = $this->mail;
    $this->nmgp_dados_form['direccion'] = $this->direccion;
    $this->nmgp_dados_form['poblacion'] = $this->poblacion;
    $this->nmgp_dados_form['socio_empleado'] = $this->socio_empleado;
    $this->nmgp_dados_form['discapacidad'] = $this->discapacidad;
    $this->nmgp_dados_form['tipo_discapacidad'] = $this->tipo_discapacidad;
    $this->nmgp_dados_form['zona'] = $this->zona;
    $this->nmgp_dados_form['cod_provincia'] = $this->cod_provincia;
    $this->nmgp_dados_form['cod_canton'] = $this->cod_canton;
    $this->nmgp_dados_form['cod_parroquia'] = $this->cod_parroquia;
    $this->nmgp_dados_form['cod_evento'] = $this->cod_evento;
    $this->nmgp_dados_form['tipo_evento'] = $this->tipo_evento;
    $this->nmgp_dados_form['fecha_reporte'] = $this->fecha_reporte;
    $this->nmgp_dados_form['tipo_servicio'] = $this->tipo_servicio;
    $this->nmgp_dados_form['ruc'] = $this->ruc;
    $this->nmgp_dados_form['tipo_documento'] = $this->tipo_documento;
    $this->nmgp_dados_form['nombres'] = $this->nombres;
    $this->nmgp_dados_form['asociacion'] = $this->asociacion;
    $this->nmgp_dados_form['fecha_registro'] = $this->fecha_registro;
    $this->nmgp_dados_form['cod_u_organizaciones'] = $this->cod_u_organizaciones;
    $this->nmgp_dados_form['estado_socio'] = $this->estado_socio;
    $this->nmgp_dados_form['vinculado_a'] = $this->vinculado_a;
    $this->nmgp_dados_form['zona_procedencia'] = $this->zona_procedencia;
    $this->nmgp_dados_form['provincia_procedencia'] = $this->provincia_procedencia;
    $this->nmgp_dados_form['forma_organizacion'] = $this->forma_organizacion;
    $this->nmgp_dados_form['cod_servicio_im'] = $this->cod_servicio_im;
    $this->nmgp_dados_form['fecha_reporte_im'] = $this->fecha_reporte_im;
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['dados_form'] = $this->nmgp_dados_form;
   }
   function nm_tira_formatacao()
   {
      global $nm_form_submit;
         $this->formatado = false;
      nm_limpa_data($this->fecha_nacimiento, $this->field_config['fecha_nacimiento']['date_sep']) ; 
      nm_limpa_data($this->fecha_reporte, $this->field_config['fecha_reporte']['date_sep']) ; 
      nm_limpa_data($this->fecha_registro, $this->field_config['fecha_registro']['date_sep']) ; 
      nm_limpa_hora($this->fecha_registro_hora, $this->field_config['fecha_registro']['time_sep']) ; 
      nm_limpa_numero($this->cod_servicio_im, $this->field_config['cod_servicio_im']['symbol_grp']) ; 
      nm_limpa_data($this->fecha_reporte_im, $this->field_config['fecha_reporte_im']['date_sep']) ; 
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
      if ($Nome_Campo == "cod_servicio_im")
      {
          nm_limpa_numero($this->cod_servicio_im, $this->field_config['cod_servicio_im']['symbol_grp']) ; 
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
      if ((!empty($this->fecha_nacimiento) && 'null' != $this->fecha_nacimiento) || (!empty($format_fields) && isset($format_fields['fecha_nacimiento'])))
      {
          nm_volta_data($this->fecha_nacimiento, $this->field_config['fecha_nacimiento']['date_format']) ; 
          nmgp_Form_Datas($this->fecha_nacimiento, $this->field_config['fecha_nacimiento']['date_format'], $this->field_config['fecha_nacimiento']['date_sep']) ;  
      }
      elseif ('null' == $this->fecha_nacimiento || '' == $this->fecha_nacimiento)
      {
          $this->fecha_nacimiento = '';
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
       $guarda_format_hora = $this->field_config['fecha_nacimiento']['date_format'];
      if ($this->fecha_nacimiento != "")  
      { 
          nm_conv_data($this->fecha_nacimiento, $this->field_config['fecha_nacimiento']['date_format']) ; 
          $this->fecha_nacimiento_hora = "00:00:00:000" ; 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres))
          {
              $this->fecha_nacimiento_hora = substr($this->fecha_nacimiento_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->fecha_nacimiento_hora = substr($this->fecha_nacimiento_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
          {
              $this->fecha_nacimiento_hora = substr($this->fecha_nacimiento_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          {
              $this->fecha_nacimiento_hora = substr($this->fecha_nacimiento_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_db2))
          {
              $this->fecha_nacimiento_hora = substr($this->fecha_nacimiento_hora, 0, -4);
          }
      } 
      if ($this->fecha_nacimiento == "" && $use_null)  
      { 
          $this->fecha_nacimiento = "null" ; 
      } 
       $this->field_config['fecha_nacimiento']['date_format'] = $guarda_format_hora;
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
          $this->ajax_return_values_txt_tipo_documento();
          $this->ajax_return_values_txt_cedula();
          $this->ajax_return_values_txt_pasaporte();
          $this->ajax_return_values_btnbuscar();
          $this->ajax_return_values_cod_socios();
          $this->ajax_return_values_estado();
          $this->ajax_return_values_cedula();
          $this->ajax_return_values_apellidos();
          $this->ajax_return_values_fecha_nacimiento();
          $this->ajax_return_values_nacionalidad();
          $this->ajax_return_values_genero();
          $this->ajax_return_values_grupo_etnico();
          $this->ajax_return_values_telefono();
          $this->ajax_return_values_celular();
          $this->ajax_return_values_mail();
          $this->ajax_return_values_direccion();
          $this->ajax_return_values_poblacion();
          $this->ajax_return_values_socio_empleado();
          $this->ajax_return_values_discapacidad();
          $this->ajax_return_values_tipo_discapacidad();
          $this->ajax_return_values_zona();
          $this->ajax_return_values_cod_provincia();
          $this->ajax_return_values_cod_canton();
          $this->ajax_return_values_cod_parroquia();
          if ('navigate_form' == $this->NM_ajax_opcao)
          {
              $this->NM_ajax_info['clearUpload']      = 'S';
              $this->NM_ajax_info['navStatus']['ret'] = $this->Nav_permite_ret ? 'S' : 'N';
              $this->NM_ajax_info['navStatus']['ava'] = $this->Nav_permite_ava ? 'S' : 'N';
              $this->NM_ajax_info['fldList']['cod_socios']['keyVal'] = form_socios_pack_protect_string($this->nmgp_dados_form['cod_socios']);
          }
   } // ajax_return_values

          //----- txt_tipo_documento
   function ajax_return_values_txt_tipo_documento($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("txt_tipo_documento", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->txt_tipo_documento);
              $aLookup = array();
              $this->_tmp_lookup_txt_tipo_documento = $this->txt_tipo_documento;

 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_txt_tipo_documento']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_txt_tipo_documento'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_txt_tipo_documento']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_txt_tipo_documento'] = array(); 
}
$aLookup[] = array(form_socios_pack_protect_string('') => form_socios_pack_protect_string('--Seleccione--'));
$_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_txt_tipo_documento'][] = '';
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 

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
              $aLookup[] = array(form_socios_pack_protect_string($rs->fields[0]) => form_socios_pack_protect_string(NM_charset_to_utf8($rs->fields[1])));
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
          $aLookupOrig = $aLookup;
          $sSelComp = "name=\"txt_tipo_documento\"";
          if (isset($this->NM_ajax_info['select_html']['txt_tipo_documento']) && !empty($this->NM_ajax_info['select_html']['txt_tipo_documento']))
          {
              $sSelComp = $this->NM_ajax_info['select_html']['txt_tipo_documento'];
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

                  if ($this->txt_tipo_documento == $sValue)
                  {
                      $this->_tmp_lookup_txt_tipo_documento = $sLabel;
                  }

                  $sOpt     = ($sValue !== $sLabel) ? $sValue : $sLabel;
                  $sLookup .= "<option value=\"" . $sOpt . "\">" . $sLabel . "</option>";
              }
          }
          $aLookup  = $sLookup;
          $this->NM_ajax_info['fldList']['txt_tipo_documento'] = array(
                       'row'    => '',
               'type'    => 'select',
               'valList' => array($sTmpValue),
               'optList' => $aLookup,
              );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['txt_tipo_documento']['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['txt_tipo_documento']['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['txt_tipo_documento']['labList'] = $aLabel;
          }
   }

          //----- txt_cedula
   function ajax_return_values_txt_cedula($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("txt_cedula", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->txt_cedula);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['txt_cedula'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- txt_pasaporte
   function ajax_return_values_txt_pasaporte($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("txt_pasaporte", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->txt_pasaporte);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['txt_pasaporte'] = array(
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

          //----- cod_socios
   function ajax_return_values_cod_socios($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("cod_socios", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->cod_socios);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['cod_socios'] = array(
                       'row'    => '',
               'type'    => 'label',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- estado
   function ajax_return_values_estado($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("estado", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->estado);
              $aLookup = array();
              $this->_tmp_lookup_estado = $this->estado;

 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_estado']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_estado'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_estado']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_estado'] = array(); 
}
$aLookup[] = array(form_socios_pack_protect_string('') => form_socios_pack_protect_string('--Seleccione--'));
$_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_estado'][] = '';
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 

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
              $aLookup[] = array(form_socios_pack_protect_string($rs->fields[0]) => form_socios_pack_protect_string(NM_charset_to_utf8($rs->fields[1])));
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
          $aLookupOrig = $aLookup;
          $sSelComp = "name=\"estado\"";
          if (isset($this->NM_ajax_info['select_html']['estado']) && !empty($this->NM_ajax_info['select_html']['estado']))
          {
              $sSelComp = $this->NM_ajax_info['select_html']['estado'];
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

                  if ($this->estado == $sValue)
                  {
                      $this->_tmp_lookup_estado = $sLabel;
                  }

                  $sOpt     = ($sValue !== $sLabel) ? $sValue : $sLabel;
                  $sLookup .= "<option value=\"" . $sOpt . "\">" . $sLabel . "</option>";
              }
          }
          $aLookup  = $sLookup;
          $this->NM_ajax_info['fldList']['estado'] = array(
                       'row'    => '',
               'type'    => 'select',
               'valList' => array($sTmpValue),
               'optList' => $aLookup,
              );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['estado']['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['estado']['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['estado']['labList'] = $aLabel;
          }
   }

          //----- cedula
   function ajax_return_values_cedula($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("cedula", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->cedula);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['cedula'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- apellidos
   function ajax_return_values_apellidos($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("apellidos", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->apellidos);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['apellidos'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- fecha_nacimiento
   function ajax_return_values_fecha_nacimiento($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("fecha_nacimiento", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->fecha_nacimiento);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['fecha_nacimiento'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- nacionalidad
   function ajax_return_values_nacionalidad($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("nacionalidad", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->nacionalidad);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['nacionalidad'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- genero
   function ajax_return_values_genero($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("genero", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->genero);
              $aLookup = array();
              $this->_tmp_lookup_genero = $this->genero;

 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_genero']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_genero'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_genero']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_genero'] = array(); 
}
$aLookup[] = array(form_socios_pack_protect_string('') => form_socios_pack_protect_string('--Seleccione--'));
$_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_genero'][] = '';
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 

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
              $aLookup[] = array(form_socios_pack_protect_string($rs->fields[0]) => form_socios_pack_protect_string(NM_charset_to_utf8($rs->fields[1])));
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
          $aLookupOrig = $aLookup;
          $sSelComp = "name=\"genero\"";
          if (isset($this->NM_ajax_info['select_html']['genero']) && !empty($this->NM_ajax_info['select_html']['genero']))
          {
              $sSelComp = $this->NM_ajax_info['select_html']['genero'];
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

                  if ($this->genero == $sValue)
                  {
                      $this->_tmp_lookup_genero = $sLabel;
                  }

                  $sOpt     = ($sValue !== $sLabel) ? $sValue : $sLabel;
                  $sLookup .= "<option value=\"" . $sOpt . "\">" . $sLabel . "</option>";
              }
          }
          $aLookup  = $sLookup;
          $this->NM_ajax_info['fldList']['genero'] = array(
                       'row'    => '',
               'type'    => 'select',
               'valList' => array($sTmpValue),
               'optList' => $aLookup,
              );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['genero']['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['genero']['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['genero']['labList'] = $aLabel;
          }
   }

          //----- grupo_etnico
   function ajax_return_values_grupo_etnico($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("grupo_etnico", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->grupo_etnico);
              $aLookup = array();
              $this->_tmp_lookup_grupo_etnico = $this->grupo_etnico;

 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_grupo_etnico']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_grupo_etnico'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_grupo_etnico']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_grupo_etnico'] = array(); 
}
$aLookup[] = array(form_socios_pack_protect_string('') => form_socios_pack_protect_string('--Seleccione--'));
$_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_grupo_etnico'][] = '';
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 

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
              $aLookup[] = array(form_socios_pack_protect_string($rs->fields[0]) => form_socios_pack_protect_string(NM_charset_to_utf8($rs->fields[1])));
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
          $aLookupOrig = $aLookup;
          $sSelComp = "name=\"grupo_etnico\"";
          if (isset($this->NM_ajax_info['select_html']['grupo_etnico']) && !empty($this->NM_ajax_info['select_html']['grupo_etnico']))
          {
              $sSelComp = $this->NM_ajax_info['select_html']['grupo_etnico'];
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

                  if ($this->grupo_etnico == $sValue)
                  {
                      $this->_tmp_lookup_grupo_etnico = $sLabel;
                  }

                  $sOpt     = ($sValue !== $sLabel) ? $sValue : $sLabel;
                  $sLookup .= "<option value=\"" . $sOpt . "\">" . $sLabel . "</option>";
              }
          }
          $aLookup  = $sLookup;
          $this->NM_ajax_info['fldList']['grupo_etnico'] = array(
                       'row'    => '',
               'type'    => 'select',
               'valList' => array($sTmpValue),
               'optList' => $aLookup,
              );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['grupo_etnico']['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['grupo_etnico']['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['grupo_etnico']['labList'] = $aLabel;
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

          //----- mail
   function ajax_return_values_mail($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("mail", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->mail);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['mail'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
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

          //----- poblacion
   function ajax_return_values_poblacion($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("poblacion", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->poblacion);
              $aLookup = array();
              $this->_tmp_lookup_poblacion = $this->poblacion;

 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_poblacion']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_poblacion'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_poblacion']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_poblacion'] = array(); 
}
$aLookup[] = array(form_socios_pack_protect_string('') => form_socios_pack_protect_string('--Seleccione--'));
$_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_poblacion'][] = '';
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 

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
              $aLookup[] = array(form_socios_pack_protect_string($rs->fields[0]) => form_socios_pack_protect_string(NM_charset_to_utf8($rs->fields[1])));
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
          $aLookupOrig = $aLookup;
          $sSelComp = "name=\"poblacion\"";
          if (isset($this->NM_ajax_info['select_html']['poblacion']) && !empty($this->NM_ajax_info['select_html']['poblacion']))
          {
              $sSelComp = $this->NM_ajax_info['select_html']['poblacion'];
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

                  if ($this->poblacion == $sValue)
                  {
                      $this->_tmp_lookup_poblacion = $sLabel;
                  }

                  $sOpt     = ($sValue !== $sLabel) ? $sValue : $sLabel;
                  $sLookup .= "<option value=\"" . $sOpt . "\">" . $sLabel . "</option>";
              }
          }
          $aLookup  = $sLookup;
          $this->NM_ajax_info['fldList']['poblacion'] = array(
                       'row'    => '',
               'type'    => 'select',
               'valList' => array($sTmpValue),
               'optList' => $aLookup,
              );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['poblacion']['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['poblacion']['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['poblacion']['labList'] = $aLabel;
          }
   }

          //----- socio_empleado
   function ajax_return_values_socio_empleado($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("socio_empleado", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->socio_empleado);
              $aLookup = array();
              $this->_tmp_lookup_socio_empleado = $this->socio_empleado;

 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_socio_empleado']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_socio_empleado'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_socio_empleado']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_socio_empleado'] = array(); 
}
$aLookup[] = array(form_socios_pack_protect_string('') => form_socios_pack_protect_string('--Seleccione--'));
$_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_socio_empleado'][] = '';
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 

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
              $aLookup[] = array(form_socios_pack_protect_string($rs->fields[0]) => form_socios_pack_protect_string(NM_charset_to_utf8($rs->fields[1])));
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
          $aLookupOrig = $aLookup;
          $sSelComp = "name=\"socio_empleado\"";
          if (isset($this->NM_ajax_info['select_html']['socio_empleado']) && !empty($this->NM_ajax_info['select_html']['socio_empleado']))
          {
              $sSelComp = $this->NM_ajax_info['select_html']['socio_empleado'];
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

                  if ($this->socio_empleado == $sValue)
                  {
                      $this->_tmp_lookup_socio_empleado = $sLabel;
                  }

                  $sOpt     = ($sValue !== $sLabel) ? $sValue : $sLabel;
                  $sLookup .= "<option value=\"" . $sOpt . "\">" . $sLabel . "</option>";
              }
          }
          $aLookup  = $sLookup;
          $this->NM_ajax_info['fldList']['socio_empleado'] = array(
                       'row'    => '',
               'type'    => 'select',
               'valList' => array($sTmpValue),
               'optList' => $aLookup,
              );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['socio_empleado']['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['socio_empleado']['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['socio_empleado']['labList'] = $aLabel;
          }
   }

          //----- discapacidad
   function ajax_return_values_discapacidad($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("discapacidad", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->discapacidad);
              $aLookup = array();
              $this->_tmp_lookup_discapacidad = $this->discapacidad;

 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_discapacidad']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_discapacidad'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_discapacidad']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_discapacidad'] = array(); 
}
$aLookup[] = array(form_socios_pack_protect_string('') => form_socios_pack_protect_string('--Seleccione--'));
$_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_discapacidad'][] = '';
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 

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
              $aLookup[] = array(form_socios_pack_protect_string($rs->fields[0]) => form_socios_pack_protect_string(NM_charset_to_utf8($rs->fields[1])));
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
          $aLookupOrig = $aLookup;
          $sSelComp = "name=\"discapacidad\"";
          if (isset($this->NM_ajax_info['select_html']['discapacidad']) && !empty($this->NM_ajax_info['select_html']['discapacidad']))
          {
              $sSelComp = $this->NM_ajax_info['select_html']['discapacidad'];
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

                  if ($this->discapacidad == $sValue)
                  {
                      $this->_tmp_lookup_discapacidad = $sLabel;
                  }

                  $sOpt     = ($sValue !== $sLabel) ? $sValue : $sLabel;
                  $sLookup .= "<option value=\"" . $sOpt . "\">" . $sLabel . "</option>";
              }
          }
          $aLookup  = $sLookup;
          $this->NM_ajax_info['fldList']['discapacidad'] = array(
                       'row'    => '',
               'type'    => 'select',
               'valList' => array($sTmpValue),
               'optList' => $aLookup,
              );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['discapacidad']['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['discapacidad']['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['discapacidad']['labList'] = $aLabel;
          }
   }

          //----- tipo_discapacidad
   function ajax_return_values_tipo_discapacidad($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("tipo_discapacidad", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->tipo_discapacidad);
              $aLookup = array();
              $this->_tmp_lookup_tipo_discapacidad = $this->tipo_discapacidad;

 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_tipo_discapacidad']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_tipo_discapacidad'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_tipo_discapacidad']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_tipo_discapacidad'] = array(); 
}
$aLookup[] = array(form_socios_pack_protect_string('') => form_socios_pack_protect_string('--Seleccione--'));
$_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_tipo_discapacidad'][] = '';
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 

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
              $aLookup[] = array(form_socios_pack_protect_string($rs->fields[0]) => form_socios_pack_protect_string(NM_charset_to_utf8($rs->fields[1])));
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
          $aLookupOrig = $aLookup;
          $sSelComp = "name=\"tipo_discapacidad\"";
          if (isset($this->NM_ajax_info['select_html']['tipo_discapacidad']) && !empty($this->NM_ajax_info['select_html']['tipo_discapacidad']))
          {
              $sSelComp = $this->NM_ajax_info['select_html']['tipo_discapacidad'];
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

                  if ($this->tipo_discapacidad == $sValue)
                  {
                      $this->_tmp_lookup_tipo_discapacidad = $sLabel;
                  }

                  $sOpt     = ($sValue !== $sLabel) ? $sValue : $sLabel;
                  $sLookup .= "<option value=\"" . $sOpt . "\">" . $sLabel . "</option>";
              }
          }
          $aLookup  = $sLookup;
          $this->NM_ajax_info['fldList']['tipo_discapacidad'] = array(
                       'row'    => '',
               'type'    => 'select',
               'valList' => array($sTmpValue),
               'optList' => $aLookup,
              );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['tipo_discapacidad']['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['tipo_discapacidad']['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['tipo_discapacidad']['labList'] = $aLabel;
          }
   }

          //----- zona
   function ajax_return_values_zona($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("zona", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->zona);
              $aLookup = array();
              $this->_tmp_lookup_zona = $this->zona;

 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_zona']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_zona'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_zona']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_zona'] = array(); 
}
$aLookup[] = array(form_socios_pack_protect_string('') => form_socios_pack_protect_string('--Seleccione--'));
$_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_zona'][] = '';
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 

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
              $aLookup[] = array(form_socios_pack_protect_string($rs->fields[0]) => form_socios_pack_protect_string(NM_charset_to_utf8($rs->fields[1])));
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
          $aLookupOrig = $aLookup;
          $sSelComp = "name=\"zona\"";
          if (isset($this->NM_ajax_info['select_html']['zona']) && !empty($this->NM_ajax_info['select_html']['zona']))
          {
              $sSelComp = $this->NM_ajax_info['select_html']['zona'];
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

                  if ($this->zona == $sValue)
                  {
                      $this->_tmp_lookup_zona = $sLabel;
                  }

                  $sOpt     = ($sValue !== $sLabel) ? $sValue : $sLabel;
                  $sLookup .= "<option value=\"" . $sOpt . "\">" . $sLabel . "</option>";
              }
          }
          $aLookup  = $sLookup;
          $this->NM_ajax_info['fldList']['zona'] = array(
                       'row'    => '',
               'type'    => 'select',
               'valList' => array($sTmpValue),
               'optList' => $aLookup,
              );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['zona']['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['zona']['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['zona']['labList'] = $aLabel;
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
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_cod_provincia']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_cod_provincia'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_cod_provincia']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_cod_provincia'] = array(); 
}
$aLookup[] = array(form_socios_pack_protect_string('') => form_socios_pack_protect_string('--Seleccione--'));
$_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_cod_provincia'][] = '';
if ($this->zona != "")
{ 
   $this->nm_clear_val("zona");
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 

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
              $aLookup[] = array(form_socios_pack_protect_string($rs->fields[0]) => form_socios_pack_protect_string(NM_charset_to_utf8($rs->fields[1])));
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
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_cod_canton']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_cod_canton'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_cod_canton']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_cod_canton'] = array(); 
}
$aLookup[] = array(form_socios_pack_protect_string('') => form_socios_pack_protect_string('--Seleccione--'));
$_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_cod_canton'][] = '';
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 

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
              $aLookup[] = array(form_socios_pack_protect_string($rs->fields[0]) => form_socios_pack_protect_string(NM_charset_to_utf8($rs->fields[1])));
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
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_cod_parroquia']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_cod_parroquia'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_cod_parroquia']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_cod_parroquia'] = array(); 
}
$aLookup[] = array(form_socios_pack_protect_string('') => form_socios_pack_protect_string('--Seleccione--'));
$_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['Lookup_cod_parroquia'][] = '';
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 

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
              $aLookup[] = array(form_socios_pack_protect_string($rs->fields[0]) => form_socios_pack_protect_string(NM_charset_to_utf8($rs->fields[1])));
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

   function ajax_add_parameters()
   {
       $this->NM_ajax_info['btnVars']['var_btn_btn_Salir_cod_u_organizaciones_aux'] = $this->nmgp_dados_form['cod_u_organizaciones'];
   } // ajax_add_parameters
  function nm_proc_onload($bFormat = true)
  {
      if (!$this->NM_ajax_flag || !isset($this->nmgp_refresh_fields)) {
      $_SESSION['scriptcase']['form_socios']['contr_erro'] = 'on';
if (isset($this->NM_ajax_flag) && $this->NM_ajax_flag)
{ 
    $original_cedula = $this->cedula;
    $original_txt_pasaporte = $this->txt_pasaporte;
}
if (!isset($this->sc_temp_cod_u_organizaciones_aux)) { $this->sc_temp_cod_u_organizaciones_aux = (isset($_SESSION['cod_u_organizaciones_aux'])) ? $_SESSION['cod_u_organizaciones_aux'] : "";}
                         

	
$this->NM_ajax_info['buttonDisplay']['exit'] = $this->nmgp_botoes["exit"] = "off";;
$this->NM_ajax_info['buttonDisplay']['delete'] = $this->nmgp_botoes["delete"] = "off";;

$this->NM_ajax_info['buttonDisplay']['new'] = $this->nmgp_botoes["new"] = "off";;
$this->NM_ajax_info['buttonDisplay']['insert'] = $this->nmgp_botoes["insert"] = "off";;




$this->nmgp_cmp_hidden["txt_pasaporte"] = "off"; $this->NM_ajax_info['fieldDisplay']['txt_pasaporte'] = 'off';

if($this->cedula  != "")
	{ 
	$this->VisualizarBloquesSocios('on');
		if($this->tipo_documento  == "cedula")
			{ 
			$this->BloquearControlesSocios();
			}
		else
			{ 
			$this->BloquearControlesSociosPasaporte();
			}
	}
else
	{ 
	$this->VisualizarBloquesSocios('off');
		$this->cod_u_organizaciones  = $this->sc_temp_cod_u_organizaciones_aux;
	}
if (isset($this->sc_temp_cod_u_organizaciones_aux)) {  $_SESSION['cod_u_organizaciones_aux'] = $this->sc_temp_cod_u_organizaciones_aux;}
if (isset($this->NM_ajax_flag) && $this->NM_ajax_flag)
{ 
    if (($original_cedula != $this->cedula || (isset($bFlagRead_cedula) && $bFlagRead_cedula)))
    { 
        $this->ajax_return_values_cedula(true);
    }
    if (($original_txt_pasaporte != $this->txt_pasaporte || (isset($bFlagRead_txt_pasaporte) && $bFlagRead_txt_pasaporte)))
    { 
        $this->ajax_return_values_txt_pasaporte(true);
    }
}
$_SESSION['scriptcase']['form_socios']['contr_erro'] = 'off'; 
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

          if (false && !isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['total']))
          {
               $sc_where_pos = " WHERE ((cod_socios < $this->cod_socios))";
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
               $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['total'] = $rsc->fields[0];
               $rsc->Close(); 
               if ('' != $this->cod_socios)
               {
               $nmgp_sel_count = 'SELECT COUNT(*) FROM ' . $this->Ini->nm_tabela . $sc_where_pos;
               $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_sel_count; 
               $rsc = $this->Db->Execute($nmgp_sel_count); 
               if ($rsc === false && !$rsc->EOF)  
               { 
                   $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
                   exit; 
               }  
               $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['inicio'] = $rsc->fields[0];
               if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['inicio'] < 0)
               {
                   $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['inicio'] = 0;
               }
               $rsc->Close(); 
               }
               else
               {
                   $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['inicio'] = 0;
               }
          }
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['qt_reg_grid'] = 1;
          if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['inicio']))
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['inicio'] = 0;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['final']  = 0;
          }
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['opcao'] = $this->NM_ajax_info['param']['nmgp_opcao'];
          if (in_array($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['opcao'], array('incluir', 'alterar', 'excluir')))
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['opcao'] = '';
          }
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['opcao'] == 'inicio')
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['inicio'] = 0;
          }
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['opcao'] == 'retorna')
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['inicio'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['inicio'] - $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['qt_reg_grid'];
              if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['inicio'] < 0)
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['inicio'] = 0 ;
              }
          }
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['opcao'] == 'avanca' && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['total']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['total'] > $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['final']))
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['inicio'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['final'];
          }
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['opcao'] == 'final')
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['inicio'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['total'] - $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['qt_reg_grid'];
              if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['inicio'] < 0)
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['inicio'] = 0;
              }
          }
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['final'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['inicio'] + $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['qt_reg_grid'];
          $this->Nav_permite_ret = 0 != $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['inicio'];
          $this->Nav_permite_ava = $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['total'] != $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['final'];
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['opcao'] = '';

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
    if ("incluir" == $this->nmgp_opcao) {
      $this->sc_evento = $this->nmgp_opcao;
      $_SESSION['scriptcase']['form_socios']['contr_erro'] = 'on';
if (isset($this->NM_ajax_flag) && $this->NM_ajax_flag)
{ 
    $original_txt_tipo_documento = $this->txt_tipo_documento;
}
                         $this->tipo_documento  = $this->txt_tipo_documento ;
if (isset($this->NM_ajax_flag) && $this->NM_ajax_flag)
{ 
    if (($original_txt_tipo_documento != $this->txt_tipo_documento || (isset($bFlagRead_txt_tipo_documento) && $bFlagRead_txt_tipo_documento)))
    { 
        $this->ajax_return_values_txt_tipo_documento(true);
    }
}
$_SESSION['scriptcase']['form_socios']['contr_erro'] = 'off'; 
    }
      if (!empty($this->Campos_Mens_erro)) 
      {
          $this->Erro->mensagem(__FILE__, __LINE__, "critica", $this->Campos_Mens_erro); 
          $this->Campos_Mens_erro = ""; 
          $this->nmgp_opc_ant = $this->nmgp_opcao ; 
          if ($this->nmgp_opcao == "incluir") 
          { 
              $GLOBALS["erro_incl"] = 1; 
          }
          if ($this->nmgp_opcao == "alterar" || $this->nmgp_opcao == "incluir" || $this->nmgp_opcao == "excluir") 
          {
              $this->nmgp_opcao = "nada"; 
          } 
          $this->sc_evento = ""; 
          $this->NM_rollback_db(); 
          $this->Campos_Mens_erro = ""; 
      }
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
      $NM_val_form['txt_tipo_documento'] = $this->txt_tipo_documento;
      $NM_val_form['txt_cedula'] = $this->txt_cedula;
      $NM_val_form['txt_pasaporte'] = $this->txt_pasaporte;
      $NM_val_form['btnbuscar'] = $this->btnbuscar;
      $NM_val_form['cod_socios'] = $this->cod_socios;
      $NM_val_form['estado'] = $this->estado;
      $NM_val_form['cedula'] = $this->cedula;
      $NM_val_form['apellidos'] = $this->apellidos;
      $NM_val_form['fecha_nacimiento'] = $this->fecha_nacimiento;
      $NM_val_form['nacionalidad'] = $this->nacionalidad;
      $NM_val_form['genero'] = $this->genero;
      $NM_val_form['grupo_etnico'] = $this->grupo_etnico;
      $NM_val_form['telefono'] = $this->telefono;
      $NM_val_form['celular'] = $this->celular;
      $NM_val_form['mail'] = $this->mail;
      $NM_val_form['direccion'] = $this->direccion;
      $NM_val_form['poblacion'] = $this->poblacion;
      $NM_val_form['socio_empleado'] = $this->socio_empleado;
      $NM_val_form['discapacidad'] = $this->discapacidad;
      $NM_val_form['tipo_discapacidad'] = $this->tipo_discapacidad;
      $NM_val_form['zona'] = $this->zona;
      $NM_val_form['cod_provincia'] = $this->cod_provincia;
      $NM_val_form['cod_canton'] = $this->cod_canton;
      $NM_val_form['cod_parroquia'] = $this->cod_parroquia;
      $NM_val_form['cod_evento'] = $this->cod_evento;
      $NM_val_form['tipo_evento'] = $this->tipo_evento;
      $NM_val_form['fecha_reporte'] = $this->fecha_reporte;
      $NM_val_form['tipo_servicio'] = $this->tipo_servicio;
      $NM_val_form['ruc'] = $this->ruc;
      $NM_val_form['tipo_documento'] = $this->tipo_documento;
      $NM_val_form['nombres'] = $this->nombres;
      $NM_val_form['asociacion'] = $this->asociacion;
      $NM_val_form['fecha_registro'] = $this->fecha_registro;
      $NM_val_form['cod_u_organizaciones'] = $this->cod_u_organizaciones;
      $NM_val_form['estado_socio'] = $this->estado_socio;
      $NM_val_form['vinculado_a'] = $this->vinculado_a;
      $NM_val_form['zona_procedencia'] = $this->zona_procedencia;
      $NM_val_form['provincia_procedencia'] = $this->provincia_procedencia;
      $NM_val_form['forma_organizacion'] = $this->forma_organizacion;
      $NM_val_form['cod_servicio_im'] = $this->cod_servicio_im;
      $NM_val_form['fecha_reporte_im'] = $this->fecha_reporte_im;
      if ($this->cod_socios == "")  
      { 
          $this->cod_socios = 0;
      } 
      if ($this->zona == "")  
      { 
          $this->zona = 0;
          $this->sc_force_zero[] = 'zona';
      } 
      if ($this->nmgp_opcao == "alterar") 
      {
      }
      if ($this->cod_u_organizaciones == "")  
      { 
          $this->cod_u_organizaciones = 0;
          $this->sc_force_zero[] = 'cod_u_organizaciones';
      } 
      if ($this->estado == "")  
      { 
          $this->estado = 0;
          $this->sc_force_zero[] = 'estado';
      } 
      if ($this->cod_servicio_im == "")  
      { 
          $this->cod_servicio_im = 0;
          $this->sc_force_zero[] = 'cod_servicio_im';
      } 
      if ($this->nmgp_opcao == "alterar") 
      {
      }
      $nm_bases_lob_geral = array_merge($this->Ini->nm_bases_oracle, $this->Ini->nm_bases_ibase, $this->Ini->nm_bases_informix);
      if ($this->nmgp_opcao == "alterar" || $this->nmgp_opcao == "incluir") 
      {
          $this->cod_evento = substr($this->Db->qstr($this->cod_evento), 1, -1); 
          if ($this->cod_evento == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->cod_evento = "null"; 
              $NM_val_null[] = "cod_evento";
          } 
          $this->tipo_evento = substr($this->Db->qstr($this->tipo_evento), 1, -1); 
          if ($this->tipo_evento == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->tipo_evento = "null"; 
              $NM_val_null[] = "tipo_evento";
          } 
          if ($this->fecha_reporte == "")  
          { 
              $this->fecha_reporte = "null"; 
              $NM_val_null[] = "fecha_reporte";
          } 
          $this->cod_provincia = substr($this->Db->qstr($this->cod_provincia), 1, -1); 
          if ($this->cod_provincia == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->cod_provincia = "null"; 
              $NM_val_null[] = "cod_provincia";
          } 
          $this->tipo_servicio = substr($this->Db->qstr($this->tipo_servicio), 1, -1); 
          if ($this->tipo_servicio == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->tipo_servicio = "null"; 
              $NM_val_null[] = "tipo_servicio";
          } 
          $this->ruc = substr($this->Db->qstr($this->ruc), 1, -1); 
          if ($this->ruc == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->ruc = "null"; 
              $NM_val_null[] = "ruc";
          } 
          $this->tipo_documento = substr($this->Db->qstr($this->tipo_documento), 1, -1); 
          if ($this->tipo_documento == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->tipo_documento = "null"; 
              $NM_val_null[] = "tipo_documento";
          } 
          $this->cedula = substr($this->Db->qstr($this->cedula), 1, -1); 
          if ($this->cedula == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->cedula = "null"; 
              $NM_val_null[] = "cedula";
          } 
          $this->nombres = substr($this->Db->qstr($this->nombres), 1, -1); 
          if ($this->nombres == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->nombres = "null"; 
              $NM_val_null[] = "nombres";
          } 
          $this->apellidos = substr($this->Db->qstr($this->apellidos), 1, -1); 
          if ($this->apellidos == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->apellidos = "null"; 
              $NM_val_null[] = "apellidos";
          } 
          $this->asociacion = substr($this->Db->qstr($this->asociacion), 1, -1); 
          if ($this->asociacion == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->asociacion = "null"; 
              $NM_val_null[] = "asociacion";
          } 
          if ($this->nmgp_opcao == "alterar") 
          {
              if ($this->fecha_registro == "")  
              { 
                  $this->fecha_registro = "null"; 
                  $NM_val_null[] = "fecha_registro";
              } 
          }
          $this->grupo_etnico = substr($this->Db->qstr($this->grupo_etnico), 1, -1); 
          if ($this->grupo_etnico == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->grupo_etnico = "null"; 
              $NM_val_null[] = "grupo_etnico";
          } 
          $this->genero = substr($this->Db->qstr($this->genero), 1, -1); 
          if ($this->genero == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->genero = "null"; 
              $NM_val_null[] = "genero";
          } 
          $this->poblacion = substr($this->Db->qstr($this->poblacion), 1, -1); 
          if ($this->poblacion == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->poblacion = "null"; 
              $NM_val_null[] = "poblacion";
          } 
          $this->estado_socio = substr($this->Db->qstr($this->estado_socio), 1, -1); 
          if ($this->estado_socio == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->estado_socio = "null"; 
              $NM_val_null[] = "estado_socio";
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
          if ($this->fecha_nacimiento == "")  
          { 
              $this->fecha_nacimiento = "null"; 
              $NM_val_null[] = "fecha_nacimiento";
          } 
          $this->telefono = substr($this->Db->qstr($this->telefono), 1, -1); 
          if ($this->telefono == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->telefono = "null"; 
              $NM_val_null[] = "telefono";
          } 
          $this->celular = substr($this->Db->qstr($this->celular), 1, -1); 
          if ($this->celular == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->celular = "null"; 
              $NM_val_null[] = "celular";
          } 
          $this->mail = substr($this->Db->qstr($this->mail), 1, -1); 
          if ($this->mail == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->mail = "null"; 
              $NM_val_null[] = "mail";
          } 
          $this->direccion = substr($this->Db->qstr($this->direccion), 1, -1); 
          if ($this->direccion == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->direccion = "null"; 
              $NM_val_null[] = "direccion";
          } 
          $this->discapacidad = substr($this->Db->qstr($this->discapacidad), 1, -1); 
          if ($this->discapacidad == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->discapacidad = "null"; 
              $NM_val_null[] = "discapacidad";
          } 
          $this->tipo_discapacidad = substr($this->Db->qstr($this->tipo_discapacidad), 1, -1); 
          if ($this->tipo_discapacidad == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->tipo_discapacidad = "null"; 
              $NM_val_null[] = "tipo_discapacidad";
          } 
          $this->vinculado_a = substr($this->Db->qstr($this->vinculado_a), 1, -1); 
          if ($this->vinculado_a == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->vinculado_a = "null"; 
              $NM_val_null[] = "vinculado_a";
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
          $this->nacionalidad = substr($this->Db->qstr($this->nacionalidad), 1, -1); 
          if ($this->nacionalidad == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->nacionalidad = "null"; 
              $NM_val_null[] = "nacionalidad";
          } 
          $this->forma_organizacion = substr($this->Db->qstr($this->forma_organizacion), 1, -1); 
          if ($this->forma_organizacion == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->forma_organizacion = "null"; 
              $NM_val_null[] = "forma_organizacion";
          } 
          $this->socio_empleado = substr($this->Db->qstr($this->socio_empleado), 1, -1); 
          if ($this->socio_empleado == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->socio_empleado = "null"; 
              $NM_val_null[] = "socio_empleado";
          } 
          if ($this->nmgp_opcao == "alterar") 
          {
              if ($this->fecha_reporte_im == "")  
              { 
                  $this->fecha_reporte_im = "null"; 
                  $NM_val_null[] = "fecha_reporte_im";
              } 
          }
      }
      if ($this->nmgp_opcao == "alterar") 
      {
          $SC_ex_update = true; 
          $SC_ex_upd_or = true; 
          if (($this->Embutida_form || $this->Embutida_multi) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['foreign_key']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['foreign_key']))
          {
              foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['foreign_key'] as $sFKName => $sFKValue)
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
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) from " . $this->Ini->nm_tabela . " where cod_socios = $this->cod_socios ";
              $rs1 = $this->Db->Execute("select count(*) from " . $this->Ini->nm_tabela . " where cod_socios = $this->cod_socios "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) from " . $this->Ini->nm_tabela . " where cod_socios = $this->cod_socios ";
              $rs1 = $this->Db->Execute("select count(*) from " . $this->Ini->nm_tabela . " where cod_socios = $this->cod_socios "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) from " . $this->Ini->nm_tabela . " where cod_socios = $this->cod_socios ";
              $rs1 = $this->Db->Execute("select count(*) from " . $this->Ini->nm_tabela . " where cod_socios = $this->cod_socios "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) from " . $this->Ini->nm_tabela . " where cod_socios = $this->cod_socios ";
              $rs1 = $this->Db->Execute("select count(*) from " . $this->Ini->nm_tabela . " where cod_socios = $this->cod_socios "); 
          }  
          else  
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) from " . $this->Ini->nm_tabela . " where cod_socios = $this->cod_socios ";
              $rs1 = $this->Db->Execute("select count(*) from " . $this->Ini->nm_tabela . " where cod_socios = $this->cod_socios "); 
          }  
          if ($rs1 === false)  
          { 
              $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
              if ($this->NM_ajax_flag)
              {
                 form_socios_pack_ajax_response();
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
                  $comando = "UPDATE " . $this->Ini->nm_tabela . " SET zona = $this->zona, cod_provincia = '$this->cod_provincia', cedula = '$this->cedula', apellidos = '$this->apellidos', grupo_etnico = '$this->grupo_etnico', genero = '$this->genero', poblacion = '$this->poblacion', cod_canton = '$this->cod_canton', cod_parroquia = '$this->cod_parroquia', fecha_nacimiento = #$this->fecha_nacimiento#, telefono = '$this->telefono', celular = '$this->celular', mail = '$this->mail', direccion = '$this->direccion', discapacidad = '$this->discapacidad', tipo_discapacidad = '$this->tipo_discapacidad', estado = $this->estado, nacionalidad = '$this->nacionalidad', socio_empleado = '$this->socio_empleado'";  
              } 
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
              { 
                  $comando = "UPDATE " . $this->Ini->nm_tabela . " SET zona = $this->zona, cod_provincia = '$this->cod_provincia', cedula = '$this->cedula', apellidos = '$this->apellidos', grupo_etnico = '$this->grupo_etnico', genero = '$this->genero', poblacion = '$this->poblacion', cod_canton = '$this->cod_canton', cod_parroquia = '$this->cod_parroquia', fecha_nacimiento = '$this->fecha_nacimiento', telefono = '$this->telefono', celular = '$this->celular', mail = '$this->mail', direccion = '$this->direccion', discapacidad = '$this->discapacidad', tipo_discapacidad = '$this->tipo_discapacidad', estado = $this->estado, nacionalidad = '$this->nacionalidad', socio_empleado = '$this->socio_empleado'";  
              } 
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
              { 
                  $comando_oracle = "UPDATE " . $this->Ini->nm_tabela . " SET zona = $this->zona, cod_provincia = '$this->cod_provincia', cedula = '$this->cedula', apellidos = '$this->apellidos', grupo_etnico = '$this->grupo_etnico', genero = '$this->genero', poblacion = '$this->poblacion', cod_canton = '$this->cod_canton', cod_parroquia = '$this->cod_parroquia', fecha_nacimiento = '$this->fecha_nacimiento', telefono = '$this->telefono', celular = '$this->celular', mail = '$this->mail', direccion = '$this->direccion', discapacidad = '$this->discapacidad', tipo_discapacidad = '$this->tipo_discapacidad', estado = $this->estado, nacionalidad = '$this->nacionalidad', socio_empleado = '$this->socio_empleado'";  
              } 
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              { 
                  $comando_oracle = "UPDATE " . $this->Ini->nm_tabela . " SET zona = $this->zona, cod_provincia = '$this->cod_provincia', cedula = '$this->cedula', apellidos = '$this->apellidos', grupo_etnico = '$this->grupo_etnico', genero = '$this->genero', poblacion = '$this->poblacion', cod_canton = '$this->cod_canton', cod_parroquia = '$this->cod_parroquia', fecha_nacimiento = EXTEND('$this->fecha_nacimiento', YEAR TO DAY), telefono = '$this->telefono', celular = '$this->celular', mail = '$this->mail', direccion = '$this->direccion', discapacidad = '$this->discapacidad', tipo_discapacidad = '$this->tipo_discapacidad', estado = $this->estado, nacionalidad = '$this->nacionalidad', socio_empleado = '$this->socio_empleado'";  
              } 
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
              { 
                  $comando_oracle = "UPDATE " . $this->Ini->nm_tabela . " SET zona = $this->zona, cod_provincia = '$this->cod_provincia', cedula = '$this->cedula', apellidos = '$this->apellidos', grupo_etnico = '$this->grupo_etnico', genero = '$this->genero', poblacion = '$this->poblacion', cod_canton = '$this->cod_canton', cod_parroquia = '$this->cod_parroquia', fecha_nacimiento = '$this->fecha_nacimiento', telefono = '$this->telefono', celular = '$this->celular', mail = '$this->mail', direccion = '$this->direccion', discapacidad = '$this->discapacidad', tipo_discapacidad = '$this->tipo_discapacidad', estado = $this->estado, nacionalidad = '$this->nacionalidad', socio_empleado = '$this->socio_empleado'";  
              } 
              else 
              { 
                  $comando = "UPDATE " . $this->Ini->nm_tabela . " SET zona = $this->zona, cod_provincia = '$this->cod_provincia', cedula = '$this->cedula', apellidos = '$this->apellidos', grupo_etnico = '$this->grupo_etnico', genero = '$this->genero', poblacion = '$this->poblacion', cod_canton = '$this->cod_canton', cod_parroquia = '$this->cod_parroquia', fecha_nacimiento = '$this->fecha_nacimiento', telefono = '$this->telefono', celular = '$this->celular', mail = '$this->mail', direccion = '$this->direccion', discapacidad = '$this->discapacidad', tipo_discapacidad = '$this->tipo_discapacidad', estado = $this->estado, nacionalidad = '$this->nacionalidad', socio_empleado = '$this->socio_empleado'";  
              } 
              if (isset($NM_val_form['cod_evento']) && $NM_val_form['cod_evento'] != $this->nmgp_dados_select['cod_evento']) 
              { 
                  if ($SC_ex_update || $SC_tem_cmp_update) 
                  { 
                      $comando        .= ","; 
                      $comando_oracle .= ","; 
                  } 
                  $comando        .= " cod_evento = '$this->cod_evento'"; 
                  $comando_oracle        .= " cod_evento = '$this->cod_evento'"; 
                  $SC_ex_update = true; 
                  $SC_ex_upd_or = true; 
              } 
              if (isset($NM_val_form['tipo_evento']) && $NM_val_form['tipo_evento'] != $this->nmgp_dados_select['tipo_evento']) 
              { 
                  if ($SC_ex_update || $SC_tem_cmp_update) 
                  { 
                      $comando        .= ","; 
                      $comando_oracle .= ","; 
                  } 
                  $comando        .= " tipo_evento = '$this->tipo_evento'"; 
                  $comando_oracle        .= " tipo_evento = '$this->tipo_evento'"; 
                  $SC_ex_update = true; 
                  $SC_ex_upd_or = true; 
              } 
              if (isset($NM_val_form['fecha_reporte']) && $NM_val_form['fecha_reporte'] != $this->nmgp_dados_select['fecha_reporte']) 
              { 
                  if ($SC_ex_update || $SC_tem_cmp_update) 
                  { 
                      $comando        .= ","; 
                      $comando_oracle .= ","; 
                  } 
                  if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
                  { 
                      $comando        .= " fecha_reporte = #$this->fecha_reporte#"; 
                  } 
                  else 
                  { 
                      $comando        .= " fecha_reporte = '$this->fecha_reporte'"; 
                  } 
                  if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
                  { 
                      $comando_oracle        .= " fecha_reporte = EXTEND('" . $this->fecha_reporte . "', YEAR TO DAY)"; 
                  } 
                  else
                  { 
                      $comando_oracle        .= " fecha_reporte = '$this->fecha_reporte'"; 
                  } 
                  $SC_ex_update = true; 
                  $SC_ex_upd_or = true; 
              } 
              if (isset($NM_val_form['tipo_servicio']) && $NM_val_form['tipo_servicio'] != $this->nmgp_dados_select['tipo_servicio']) 
              { 
                  if ($SC_ex_update || $SC_tem_cmp_update) 
                  { 
                      $comando        .= ","; 
                      $comando_oracle .= ","; 
                  } 
                  $comando        .= " tipo_servicio = '$this->tipo_servicio'"; 
                  $comando_oracle        .= " tipo_servicio = '$this->tipo_servicio'"; 
                  $SC_ex_update = true; 
                  $SC_ex_upd_or = true; 
              } 
              if (isset($NM_val_form['ruc']) && $NM_val_form['ruc'] != $this->nmgp_dados_select['ruc']) 
              { 
                  if ($SC_ex_update || $SC_tem_cmp_update) 
                  { 
                      $comando        .= ","; 
                      $comando_oracle .= ","; 
                  } 
                  $comando        .= " ruc = '$this->ruc'"; 
                  $comando_oracle        .= " ruc = '$this->ruc'"; 
                  $SC_ex_update = true; 
                  $SC_ex_upd_or = true; 
              } 
              if (isset($NM_val_form['tipo_documento']) && $NM_val_form['tipo_documento'] != $this->nmgp_dados_select['tipo_documento']) 
              { 
                  if ($SC_ex_update || $SC_tem_cmp_update) 
                  { 
                      $comando        .= ","; 
                      $comando_oracle .= ","; 
                  } 
                  $comando        .= " tipo_documento = '$this->tipo_documento'"; 
                  $comando_oracle        .= " tipo_documento = '$this->tipo_documento'"; 
                  $SC_ex_update = true; 
                  $SC_ex_upd_or = true; 
              } 
              if (isset($NM_val_form['nombres']) && $NM_val_form['nombres'] != $this->nmgp_dados_select['nombres']) 
              { 
                  if ($SC_ex_update || $SC_tem_cmp_update) 
                  { 
                      $comando        .= ","; 
                      $comando_oracle .= ","; 
                  } 
                  $comando        .= " nombres = '$this->nombres'"; 
                  $comando_oracle        .= " nombres = '$this->nombres'"; 
                  $SC_ex_update = true; 
                  $SC_ex_upd_or = true; 
              } 
              if (isset($NM_val_form['asociacion']) && $NM_val_form['asociacion'] != $this->nmgp_dados_select['asociacion']) 
              { 
                  if ($SC_ex_update || $SC_tem_cmp_update) 
                  { 
                      $comando        .= ","; 
                      $comando_oracle .= ","; 
                  } 
                  $comando        .= " asociacion = '$this->asociacion'"; 
                  $comando_oracle        .= " asociacion = '$this->asociacion'"; 
                  $SC_ex_update = true; 
                  $SC_ex_upd_or = true; 
              } 
              if (isset($NM_val_form['fecha_registro']) && $NM_val_form['fecha_registro'] != $this->nmgp_dados_select['fecha_registro']) 
              { 
                  if ($SC_ex_update || $SC_tem_cmp_update) 
                  { 
                      $comando        .= ","; 
                      $comando_oracle .= ","; 
                  } 
                  $comando        .= " fecha_registro = '$this->fecha_registro'"; 
                  if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
                  { 
                      $comando_oracle        .= " fecha_registro = TO_DATE('$this->fecha_registro', 'yyyy-mm-dd hh24:mi:ss')"; 
                  } 
                  else
                  { 
                      $comando_oracle        .= " fecha_registro = '$this->fecha_registro'"; 
                  } 
                  $SC_ex_update = true; 
                  $SC_ex_upd_or = true; 
              } 
              if (isset($NM_val_form['cod_u_organizaciones']) && $NM_val_form['cod_u_organizaciones'] != $this->nmgp_dados_select['cod_u_organizaciones']) 
              { 
                  if ($SC_ex_update || $SC_tem_cmp_update) 
                  { 
                      $comando        .= ","; 
                      $comando_oracle .= ","; 
                  } 
                  $comando        .= " cod_u_organizaciones = $this->cod_u_organizaciones"; 
                  $comando_oracle        .= " cod_u_organizaciones = $this->cod_u_organizaciones"; 
                  $SC_ex_update = true; 
                  $SC_ex_upd_or = true; 
              } 
              if (isset($NM_val_form['estado_socio']) && $NM_val_form['estado_socio'] != $this->nmgp_dados_select['estado_socio']) 
              { 
                  if ($SC_ex_update || $SC_tem_cmp_update) 
                  { 
                      $comando        .= ","; 
                      $comando_oracle .= ","; 
                  } 
                  $comando        .= " estado_socio = '$this->estado_socio'"; 
                  $comando_oracle        .= " estado_socio = '$this->estado_socio'"; 
                  $SC_ex_update = true; 
                  $SC_ex_upd_or = true; 
              } 
              if (isset($NM_val_form['vinculado_a']) && $NM_val_form['vinculado_a'] != $this->nmgp_dados_select['vinculado_a']) 
              { 
                  if ($SC_ex_update || $SC_tem_cmp_update) 
                  { 
                      $comando        .= ","; 
                      $comando_oracle .= ","; 
                  } 
                  $comando        .= " vinculado_a = '$this->vinculado_a'"; 
                  $comando_oracle        .= " vinculado_a = '$this->vinculado_a'"; 
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
              if (isset($NM_val_form['forma_organizacion']) && $NM_val_form['forma_organizacion'] != $this->nmgp_dados_select['forma_organizacion']) 
              { 
                  if ($SC_ex_update || $SC_tem_cmp_update) 
                  { 
                      $comando        .= ","; 
                      $comando_oracle .= ","; 
                  } 
                  $comando        .= " forma_organizacion = '$this->forma_organizacion'"; 
                  $comando_oracle        .= " forma_organizacion = '$this->forma_organizacion'"; 
                  $SC_ex_update = true; 
                  $SC_ex_upd_or = true; 
              } 
              if (isset($NM_val_form['cod_servicio_im']) && $NM_val_form['cod_servicio_im'] != $this->nmgp_dados_select['cod_servicio_im']) 
              { 
                  if ($SC_ex_update || $SC_tem_cmp_update) 
                  { 
                      $comando        .= ","; 
                      $comando_oracle .= ","; 
                  } 
                  $comando        .= " cod_servicio_im = $this->cod_servicio_im"; 
                  $comando_oracle        .= " cod_servicio_im = $this->cod_servicio_im"; 
                  $SC_ex_update = true; 
                  $SC_ex_upd_or = true; 
              } 
              if (isset($NM_val_form['fecha_reporte_im']) && $NM_val_form['fecha_reporte_im'] != $this->nmgp_dados_select['fecha_reporte_im']) 
              { 
                  if ($SC_ex_update || $SC_tem_cmp_update) 
                  { 
                      $comando        .= ","; 
                      $comando_oracle .= ","; 
                  } 
                  if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
                  { 
                      $comando        .= " fecha_reporte_im = #$this->fecha_reporte_im#"; 
                  } 
                  else 
                  { 
                      $comando        .= " fecha_reporte_im = '$this->fecha_reporte_im'"; 
                  } 
                  if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
                  { 
                      $comando_oracle        .= " fecha_reporte_im = EXTEND('" . $this->fecha_reporte_im . "', YEAR TO DAY)"; 
                  } 
                  else
                  { 
                      $comando_oracle        .= " fecha_reporte_im = '$this->fecha_reporte_im'"; 
                  } 
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
                  $comando .= " WHERE cod_socios = $this->cod_socios ";  
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
              {
                  $comando .= " WHERE cod_socios = $this->cod_socios ";  
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
              {
                  $comando .= " WHERE cod_socios = $this->cod_socios ";  
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              {
                  $comando .= " WHERE cod_socios = $this->cod_socios ";  
              }  
              else  
              {
                  $comando .= " WHERE cod_socios = $this->cod_socios ";  
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
                                  form_socios_pack_ajax_response();
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

              $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['db_changed'] = true;


              if     (isset($NM_val_form) && isset($NM_val_form['cod_socios'])) { $this->cod_socios = $NM_val_form['cod_socios']; }
              elseif (isset($this->cod_socios)) { $this->nm_limpa_alfa($this->cod_socios); }
              if     (isset($NM_val_form) && isset($NM_val_form['zona'])) { $this->zona = $NM_val_form['zona']; }
              elseif (isset($this->zona)) { $this->nm_limpa_alfa($this->zona); }
              if     (isset($NM_val_form) && isset($NM_val_form['cod_provincia'])) { $this->cod_provincia = $NM_val_form['cod_provincia']; }
              elseif (isset($this->cod_provincia)) { $this->nm_limpa_alfa($this->cod_provincia); }
              if     (isset($NM_val_form) && isset($NM_val_form['cedula'])) { $this->cedula = $NM_val_form['cedula']; }
              elseif (isset($this->cedula)) { $this->nm_limpa_alfa($this->cedula); }
              if     (isset($NM_val_form) && isset($NM_val_form['apellidos'])) { $this->apellidos = $NM_val_form['apellidos']; }
              elseif (isset($this->apellidos)) { $this->nm_limpa_alfa($this->apellidos); }
              if     (isset($NM_val_form) && isset($NM_val_form['grupo_etnico'])) { $this->grupo_etnico = $NM_val_form['grupo_etnico']; }
              elseif (isset($this->grupo_etnico)) { $this->nm_limpa_alfa($this->grupo_etnico); }
              if     (isset($NM_val_form) && isset($NM_val_form['genero'])) { $this->genero = $NM_val_form['genero']; }
              elseif (isset($this->genero)) { $this->nm_limpa_alfa($this->genero); }
              if     (isset($NM_val_form) && isset($NM_val_form['poblacion'])) { $this->poblacion = $NM_val_form['poblacion']; }
              elseif (isset($this->poblacion)) { $this->nm_limpa_alfa($this->poblacion); }
              if     (isset($NM_val_form) && isset($NM_val_form['cod_canton'])) { $this->cod_canton = $NM_val_form['cod_canton']; }
              elseif (isset($this->cod_canton)) { $this->nm_limpa_alfa($this->cod_canton); }
              if     (isset($NM_val_form) && isset($NM_val_form['cod_parroquia'])) { $this->cod_parroquia = $NM_val_form['cod_parroquia']; }
              elseif (isset($this->cod_parroquia)) { $this->nm_limpa_alfa($this->cod_parroquia); }
              if     (isset($NM_val_form) && isset($NM_val_form['telefono'])) { $this->telefono = $NM_val_form['telefono']; }
              elseif (isset($this->telefono)) { $this->nm_limpa_alfa($this->telefono); }
              if     (isset($NM_val_form) && isset($NM_val_form['celular'])) { $this->celular = $NM_val_form['celular']; }
              elseif (isset($this->celular)) { $this->nm_limpa_alfa($this->celular); }
              if     (isset($NM_val_form) && isset($NM_val_form['mail'])) { $this->mail = $NM_val_form['mail']; }
              elseif (isset($this->mail)) { $this->nm_limpa_alfa($this->mail); }
              if     (isset($NM_val_form) && isset($NM_val_form['direccion'])) { $this->direccion = $NM_val_form['direccion']; }
              elseif (isset($this->direccion)) { $this->nm_limpa_alfa($this->direccion); }
              if     (isset($NM_val_form) && isset($NM_val_form['discapacidad'])) { $this->discapacidad = $NM_val_form['discapacidad']; }
              elseif (isset($this->discapacidad)) { $this->nm_limpa_alfa($this->discapacidad); }
              if     (isset($NM_val_form) && isset($NM_val_form['tipo_discapacidad'])) { $this->tipo_discapacidad = $NM_val_form['tipo_discapacidad']; }
              elseif (isset($this->tipo_discapacidad)) { $this->nm_limpa_alfa($this->tipo_discapacidad); }
              if     (isset($NM_val_form) && isset($NM_val_form['estado'])) { $this->estado = $NM_val_form['estado']; }
              elseif (isset($this->estado)) { $this->nm_limpa_alfa($this->estado); }
              if     (isset($NM_val_form) && isset($NM_val_form['nacionalidad'])) { $this->nacionalidad = $NM_val_form['nacionalidad']; }
              elseif (isset($this->nacionalidad)) { $this->nm_limpa_alfa($this->nacionalidad); }
              if     (isset($NM_val_form) && isset($NM_val_form['socio_empleado'])) { $this->socio_empleado = $NM_val_form['socio_empleado']; }
              elseif (isset($this->socio_empleado)) { $this->nm_limpa_alfa($this->socio_empleado); }

              $this->nm_formatar_campos();
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
              {
              }

              $aOldRefresh               = $this->nmgp_refresh_fields;
              $this->nmgp_refresh_fields = array('txt_tipo_documento', 'txt_cedula', 'txt_pasaporte', 'btnbuscar', 'cod_socios', 'estado', 'cedula', 'apellidos', 'fecha_nacimiento', 'nacionalidad', 'genero', 'grupo_etnico', 'telefono', 'celular', 'mail', 'direccion', 'poblacion', 'socio_empleado', 'discapacidad', 'tipo_discapacidad', 'zona', 'cod_provincia', 'cod_canton', 'cod_parroquia');
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
          if (($this->Embutida_form || $this->Embutida_multi) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['foreign_key']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['foreign_key']))
          {
              foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['foreign_key'] as $sFKName => $sFKValue)
              {
                   if (isset($this->sc_conv_var[$sFKName]))
                   {
                       $sFKName = $this->sc_conv_var[$sFKName];
                   }
                  eval("\$this->" . $sFKName . " = \"" . $sFKValue . "\";");
              }
          }
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sqlite))
          { 
              $NM_seq_auto = "NULL, ";
              $NM_cmp_auto = "cod_socios, ";
          } 
          $bInsertOk = true;
          $aInsertOk = array(); 
          $bInsertOk = $bInsertOk && empty($aInsertOk);
          if ($bInsertOk)
          { 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
              { 
                  $compl_insert     = ""; 
                  $compl_insert_val = ""; 
                  if ($this->fecha_registro != "")
                  { 
                       $compl_insert     .= ", fecha_registro";
                       $compl_insert_val .= ", '$this->fecha_registro'";
                  } 
                  if ($this->fecha_reporte_im != "")
                  { 
                       $compl_insert     .= ", fecha_reporte_im";
                       $compl_insert_val .= ", #$this->fecha_reporte_im#";
                  } 
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (cod_evento, tipo_evento, fecha_reporte, zona, cod_provincia, tipo_servicio, ruc, tipo_documento, cedula, nombres, apellidos, asociacion, cod_u_organizaciones, grupo_etnico, genero, poblacion, estado_socio, cod_canton, cod_parroquia, fecha_nacimiento, telefono, celular, mail, direccion, discapacidad, tipo_discapacidad, vinculado_a, estado, zona_procedencia, provincia_procedencia, nacionalidad, forma_organizacion, socio_empleado, cod_servicio_im $compl_insert) VALUES ('$this->cod_evento', '$this->tipo_evento', #$this->fecha_reporte#, $this->zona, '$this->cod_provincia', '$this->tipo_servicio', '$this->ruc', '$this->tipo_documento', '$this->cedula', '$this->nombres', '$this->apellidos', '$this->asociacion', $this->cod_u_organizaciones, '$this->grupo_etnico', '$this->genero', '$this->poblacion', '$this->estado_socio', '$this->cod_canton', '$this->cod_parroquia', #$this->fecha_nacimiento#, '$this->telefono', '$this->celular', '$this->mail', '$this->direccion', '$this->discapacidad', '$this->tipo_discapacidad', '$this->vinculado_a', $this->estado, '$this->zona_procedencia', '$this->provincia_procedencia', '$this->nacionalidad', '$this->forma_organizacion', '$this->socio_empleado', $this->cod_servicio_im $compl_insert_val)"; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
              { 
                  $compl_insert     = ""; 
                  $compl_insert_val = ""; 
                  if ($this->fecha_registro != "")
                  { 
                       $compl_insert     .= ", fecha_registro";
                       $compl_insert_val .= ", '$this->fecha_registro'";
                  } 
                  if ($this->fecha_reporte_im != "")
                  { 
                       $compl_insert     .= ", fecha_reporte_im";
                       $compl_insert_val .= ", '$this->fecha_reporte_im'";
                  } 
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "cod_evento, tipo_evento, fecha_reporte, zona, cod_provincia, tipo_servicio, ruc, tipo_documento, cedula, nombres, apellidos, asociacion, cod_u_organizaciones, grupo_etnico, genero, poblacion, estado_socio, cod_canton, cod_parroquia, fecha_nacimiento, telefono, celular, mail, direccion, discapacidad, tipo_discapacidad, vinculado_a, estado, zona_procedencia, provincia_procedencia, nacionalidad, forma_organizacion, socio_empleado, cod_servicio_im $compl_insert) VALUES (" . $NM_seq_auto . "'$this->cod_evento', '$this->tipo_evento', '$this->fecha_reporte', $this->zona, '$this->cod_provincia', '$this->tipo_servicio', '$this->ruc', '$this->tipo_documento', '$this->cedula', '$this->nombres', '$this->apellidos', '$this->asociacion', $this->cod_u_organizaciones, '$this->grupo_etnico', '$this->genero', '$this->poblacion', '$this->estado_socio', '$this->cod_canton', '$this->cod_parroquia', '$this->fecha_nacimiento', '$this->telefono', '$this->celular', '$this->mail', '$this->direccion', '$this->discapacidad', '$this->tipo_discapacidad', '$this->vinculado_a', $this->estado, '$this->zona_procedencia', '$this->provincia_procedencia', '$this->nacionalidad', '$this->forma_organizacion', '$this->socio_empleado', $this->cod_servicio_im $compl_insert_val)"; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
              {
                  $compl_insert     = ""; 
                  $compl_insert_val = ""; 
                  if ($this->fecha_registro != "")
                  { 
                       $compl_insert     .= ", fecha_registro";
                       $compl_insert_val .= ", TO_DATE('$this->fecha_registro', 'yyyy-mm-dd hh24:mi:ss')";
                  } 
                  if ($this->fecha_reporte_im != "")
                  { 
                       $compl_insert     .= ", fecha_reporte_im";
                       $compl_insert_val .= ", '$this->fecha_reporte_im'";
                  } 
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "cod_evento, tipo_evento, fecha_reporte, zona, cod_provincia, tipo_servicio, ruc, tipo_documento, cedula, nombres, apellidos, asociacion, cod_u_organizaciones, grupo_etnico, genero, poblacion, estado_socio, cod_canton, cod_parroquia, fecha_nacimiento, telefono, celular, mail, direccion, discapacidad, tipo_discapacidad, vinculado_a, estado, zona_procedencia, provincia_procedencia, nacionalidad, forma_organizacion, socio_empleado, cod_servicio_im $compl_insert) VALUES (" . $NM_seq_auto . "'$this->cod_evento', '$this->tipo_evento', '$this->fecha_reporte', $this->zona, '$this->cod_provincia', '$this->tipo_servicio', '$this->ruc', '$this->tipo_documento', '$this->cedula', '$this->nombres', '$this->apellidos', '$this->asociacion', $this->cod_u_organizaciones, '$this->grupo_etnico', '$this->genero', '$this->poblacion', '$this->estado_socio', '$this->cod_canton', '$this->cod_parroquia', '$this->fecha_nacimiento', '$this->telefono', '$this->celular', '$this->mail', '$this->direccion', '$this->discapacidad', '$this->tipo_discapacidad', '$this->vinculado_a', $this->estado, '$this->zona_procedencia', '$this->provincia_procedencia', '$this->nacionalidad', '$this->forma_organizacion', '$this->socio_empleado', $this->cod_servicio_im $compl_insert_val)"; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              {
                  $compl_insert     = ""; 
                  $compl_insert_val = ""; 
                  if ($this->fecha_registro != "")
                  { 
                       $compl_insert     .= ", fecha_registro";
                       $compl_insert_val .= ", '$this->fecha_registro'";
                  } 
                  if ($this->fecha_reporte_im != "")
                  { 
                       $compl_insert     .= ", fecha_reporte_im";
                       $compl_insert_val .= ", EXTEND('$this->fecha_reporte_im', YEAR TO DAY)";
                  } 
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "cod_evento, tipo_evento, fecha_reporte, zona, cod_provincia, tipo_servicio, ruc, tipo_documento, cedula, nombres, apellidos, asociacion, cod_u_organizaciones, grupo_etnico, genero, poblacion, estado_socio, cod_canton, cod_parroquia, fecha_nacimiento, telefono, celular, mail, direccion, discapacidad, tipo_discapacidad, vinculado_a, estado, zona_procedencia, provincia_procedencia, nacionalidad, forma_organizacion, socio_empleado, cod_servicio_im $compl_insert) VALUES (" . $NM_seq_auto . "'$this->cod_evento', '$this->tipo_evento', EXTEND('$this->fecha_reporte', YEAR TO DAY), $this->zona, '$this->cod_provincia', '$this->tipo_servicio', '$this->ruc', '$this->tipo_documento', '$this->cedula', '$this->nombres', '$this->apellidos', '$this->asociacion', $this->cod_u_organizaciones, '$this->grupo_etnico', '$this->genero', '$this->poblacion', '$this->estado_socio', '$this->cod_canton', '$this->cod_parroquia', EXTEND('$this->fecha_nacimiento', YEAR TO DAY), '$this->telefono', '$this->celular', '$this->mail', '$this->direccion', '$this->discapacidad', '$this->tipo_discapacidad', '$this->vinculado_a', $this->estado, '$this->zona_procedencia', '$this->provincia_procedencia', '$this->nacionalidad', '$this->forma_organizacion', '$this->socio_empleado', $this->cod_servicio_im $compl_insert_val)"; 
              }
              else
              {
                  $compl_insert     = ""; 
                  $compl_insert_val = ""; 
                  if ($this->fecha_registro != "")
                  { 
                       $compl_insert     .= ", fecha_registro";
                       $compl_insert_val .= ", '$this->fecha_registro'";
                  } 
                  if ($this->fecha_reporte_im != "")
                  { 
                       $compl_insert     .= ", fecha_reporte_im";
                       $compl_insert_val .= ", '$this->fecha_reporte_im'";
                  } 
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "cod_evento, tipo_evento, fecha_reporte, zona, cod_provincia, tipo_servicio, ruc, tipo_documento, cedula, nombres, apellidos, asociacion, cod_u_organizaciones, grupo_etnico, genero, poblacion, estado_socio, cod_canton, cod_parroquia, fecha_nacimiento, telefono, celular, mail, direccion, discapacidad, tipo_discapacidad, vinculado_a, estado, zona_procedencia, provincia_procedencia, nacionalidad, forma_organizacion, socio_empleado, cod_servicio_im $compl_insert) VALUES (" . $NM_seq_auto . "'$this->cod_evento', '$this->tipo_evento', '$this->fecha_reporte', $this->zona, '$this->cod_provincia', '$this->tipo_servicio', '$this->ruc', '$this->tipo_documento', '$this->cedula', '$this->nombres', '$this->apellidos', '$this->asociacion', $this->cod_u_organizaciones, '$this->grupo_etnico', '$this->genero', '$this->poblacion', '$this->estado_socio', '$this->cod_canton', '$this->cod_parroquia', '$this->fecha_nacimiento', '$this->telefono', '$this->celular', '$this->mail', '$this->direccion', '$this->discapacidad', '$this->tipo_discapacidad', '$this->vinculado_a', $this->estado, '$this->zona_procedencia', '$this->provincia_procedencia', '$this->nacionalidad', '$this->forma_organizacion', '$this->socio_empleado', $this->cod_servicio_im $compl_insert_val)"; 
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
                              form_socios_pack_ajax_response();
                              exit; 
                          }
                      }  
                  }  
              }  
              if ('refresh_insert' != $this->nmgp_opcao)
              {
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql) || in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access) || in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sybase)) 
              { 
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select @@identity"; 
                  $rsy = $this->Db->Execute($_SESSION['scriptcase']['sc_sql_ult_comando']); 
                  if ($rsy === false && !$rsy->EOF)  
                  { 
                      $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
                      $this->NM_rollback_db(); 
                      if ($this->NM_ajax_flag)
                      {
                          form_socios_pack_ajax_response();
                      }
                      exit; 
                  } 
                  $this->cod_socios =  $rsy->fields[0];
                 $rsy->Close(); 
              } 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
              { 
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select last_insert_id()"; 
                  $rsy = $this->Db->Execute($_SESSION['scriptcase']['sc_sql_ult_comando']); 
                  if ($rsy === false && !$rsy->EOF)  
                  { 
                      $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
                      exit; 
                  } 
                  $this->cod_socios = $rsy->fields[0];
                  $rsy->Close(); 
              } 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              { 
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "SELECT dbinfo('sqlca.sqlerrd1') FROM " . $this->Ini->nm_tabela; 
                  $rsy = $this->Db->Execute($_SESSION['scriptcase']['sc_sql_ult_comando']); 
                  if ($rsy === false && !$rsy->EOF)  
                  { 
                      $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
                      exit; 
                  } 
                  $this->cod_socios = $rsy->fields[0];
                  $rsy->Close(); 
              } 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
              { 
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select .currval from dual"; 
                  $rsy = $this->Db->Execute($_SESSION['scriptcase']['sc_sql_ult_comando']); 
                  if ($rsy === false && !$rsy->EOF)  
                  { 
                      $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
                      exit; 
                  } 
                  $this->cod_socios = $rsy->fields[0];
                  $rsy->Close(); 
              } 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_db2))
              { 
                  $str_tabela = "SYSIBM.SYSDUMMY1"; 
                  if($this->Ini->nm_con_use_schema == "N") 
                  { 
                          $str_tabela = "SYSDUMMY1"; 
                  } 
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "SELECT IDENTITY_VAL_LOCAL() FROM " . $str_tabela; 
                  $rsy = $this->Db->Execute($_SESSION['scriptcase']['sc_sql_ult_comando']); 
                  if ($rsy === false && !$rsy->EOF)  
                  { 
                      $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
                      exit; 
                  } 
                  $this->cod_socios = $rsy->fields[0];
                  $rsy->Close(); 
              } 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres))
              { 
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select CURRVAL('')"; 
                  $rsy = $this->Db->Execute($_SESSION['scriptcase']['sc_sql_ult_comando']); 
                  if ($rsy === false && !$rsy->EOF)  
                  { 
                      $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
                      exit; 
                  } 
                  $this->cod_socios = $rsy->fields[0];
                  $rsy->Close(); 
              } 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
              { 
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select gen_id(, 0) from " . $this->Ini->nm_tabela; 
                  $rsy = $this->Db->Execute($_SESSION['scriptcase']['sc_sql_ult_comando']); 
                  if ($rsy === false && !$rsy->EOF)  
                  { 
                      $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
                      exit; 
                  } 
                  $this->cod_socios = $rsy->fields[0];
                  $rsy->Close(); 
              } 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sqlite))
              { 
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select last_insert_rowid()"; 
                  $rsy = $this->Db->Execute($_SESSION['scriptcase']['sc_sql_ult_comando']); 
                  if ($rsy === false && !$rsy->EOF)  
                  { 
                      $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
                      exit; 
                  } 
                  $this->cod_socios = $rsy->fields[0];
                  $rsy->Close(); 
              } 
              }

              $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['db_changed'] = true;

              if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['total']))
              {
                  unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['total']);
              }

              $this->sc_evento = "insert"; 
              if ('refresh_insert' != $this->nmgp_opcao && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['sc_redir_insert']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['sc_redir_insert'] != "S"))
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
          $this->cod_socios = substr($this->Db->qstr($this->cod_socios), 1, -1); 

          $bDelecaoOk = true;
          $sMsgErro   = '';

          if ($bDelecaoOk)
          {

          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) from " . $this->Ini->nm_tabela . " where cod_socios = $this->cod_socios"; 
              $rs1 = $this->Db->Execute("select count(*) from " . $this->Ini->nm_tabela . " where cod_socios = $this->cod_socios "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) from " . $this->Ini->nm_tabela . " where cod_socios = $this->cod_socios"; 
              $rs1 = $this->Db->Execute("select count(*) from " . $this->Ini->nm_tabela . " where cod_socios = $this->cod_socios "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) from " . $this->Ini->nm_tabela . " where cod_socios = $this->cod_socios"; 
              $rs1 = $this->Db->Execute("select count(*) from " . $this->Ini->nm_tabela . " where cod_socios = $this->cod_socios "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) from " . $this->Ini->nm_tabela . " where cod_socios = $this->cod_socios"; 
              $rs1 = $this->Db->Execute("select count(*) from " . $this->Ini->nm_tabela . " where cod_socios = $this->cod_socios "); 
          }  
          else  
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) from " . $this->Ini->nm_tabela . " where cod_socios = $this->cod_socios"; 
              $rs1 = $this->Db->Execute("select count(*) from " . $this->Ini->nm_tabela . " where cod_socios = $this->cod_socios "); 
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
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "DELETE FROM " . $this->Ini->nm_tabela . " where cod_socios = $this->cod_socios "; 
                  $rs = $this->Db->Execute("DELETE FROM " . $this->Ini->nm_tabela . " where cod_socios = $this->cod_socios "); 
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
              {
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "DELETE FROM " . $this->Ini->nm_tabela . " where cod_socios = $this->cod_socios "; 
                  $rs = $this->Db->Execute("DELETE FROM " . $this->Ini->nm_tabela . " where cod_socios = $this->cod_socios "); 
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
              {
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "DELETE FROM " . $this->Ini->nm_tabela . " where cod_socios = $this->cod_socios "; 
                  $rs = $this->Db->Execute("DELETE FROM " . $this->Ini->nm_tabela . " where cod_socios = $this->cod_socios "); 
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              {
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "DELETE FROM " . $this->Ini->nm_tabela . " where cod_socios = $this->cod_socios "; 
                  $rs = $this->Db->Execute("DELETE FROM " . $this->Ini->nm_tabela . " where cod_socios = $this->cod_socios "); 
              }  
              else  
              {
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "DELETE FROM " . $this->Ini->nm_tabela . " where cod_socios = $this->cod_socios "; 
                  $rs = $this->Db->Execute("DELETE FROM " . $this->Ini->nm_tabela . " where cod_socios = $this->cod_socios "); 
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
                          form_socios_pack_ajax_response();
                          exit; 
                      }
                  } 
              } 
              $this->sc_evento = "delete"; 
              $this->nmgp_opcao = "avanca"; 
              $this->nm_flag_iframe = true;

              $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['db_changed'] = true;

              if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['total']))
              {
                  unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['total']);
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
    if ("insert" == $this->sc_evento && $this->nmgp_opcao != "nada") {
        $_SESSION['scriptcase']['form_socios']['contr_erro'] = 'on';
                         $getInfo = 'select count(*) from socios where cod_u_organizaciones='.$this->cod_u_organizaciones ;
	
	 
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

		if ($codigo > 0)
		{ 
			
			$update_sql = 'update u_organizaciones set num_socios = '.$codigo.' where cod_u_organizaciones = '.$this->cod_u_organizaciones ;
			
     $nm_select = $update_sql; 
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
         $rf = $this->Db->Execute($nm_select);
         if ($rf === false)
         { 
             $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg());
             $this->NM_rollback_db(); 
             if ($this->NM_ajax_flag)
             { 
                form_socios_pack_ajax_response();
             }
             exit;
         }
         $rf->Close();
      ;
			
		}
$_SESSION['scriptcase']['form_socios']['contr_erro'] = 'off'; 
    }
      if (!empty($this->Campos_Mens_erro)) 
      {
          $this->Erro->mensagem(__FILE__, __LINE__, "critica", $this->Campos_Mens_erro); 
          $this->Campos_Mens_erro = ""; 
          $this->nmgp_opc_ant = $salva_opcao ; 
          if ($salva_opcao == "incluir") 
          { 
              $GLOBALS["erro_incl"] = 1; 
          }
          if ($this->nmgp_opcao == "alterar" || $this->nmgp_opcao == "incluir" || $this->nmgp_opcao == "excluir") 
          {
              $this->nmgp_opcao = "nada"; 
          } 
          $this->sc_evento = ""; 
          $this->NM_rollback_db(); 
          return; 
      }
      if ($salva_opcao == "incluir" && $GLOBALS["erro_incl"] != 1) 
      { 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['parms'] = "cod_socios?#?$this->cod_socios?@?"; 
      }
      $this->NM_commit_db(); 
      if ($this->sc_evento != "insert" && $this->sc_evento != "update" && $this->sc_evento != "delete")
      { 
          $this->cod_socios = substr($this->Db->qstr($this->cod_socios), 1, -1); 
      } 
      if (isset($this->NM_where_filter))
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['where_filter'] = trim($this->NM_where_filter);
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['total']))
          {
              unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['total']);
          }
      }
      $sc_where_filter = '';
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['where_filter_form']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['where_filter_form'])
      {
          $sc_where_filter = $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['where_filter_form'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['where_filter']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['where_filter'])
      {
          if (empty($sc_where_filter))
          {
              $sc_where_filter = $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['where_filter'];
          }
          else
          {
              $sc_where_filter .= " and (" . $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['where_filter'] . ")";
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
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['parms'] = ""; 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
          { 
              $GLOBALS["NM_ERRO_IBASE"] = 1;  
          } 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sybase))
          { 
              $nmgp_select = "SELECT cod_socios, cod_evento, tipo_evento, str_replace (convert(char(10),fecha_reporte,102), '.', '-') + ' ' + convert(char(8),fecha_reporte,20), zona, cod_provincia, tipo_servicio, ruc, tipo_documento, cedula, nombres, apellidos, asociacion, fecha_registro, cod_u_organizaciones, grupo_etnico, genero, poblacion, estado_socio, cod_canton, cod_parroquia, str_replace (convert(char(10),fecha_nacimiento,102), '.', '-') + ' ' + convert(char(8),fecha_nacimiento,20), telefono, celular, mail, direccion, discapacidad, tipo_discapacidad, vinculado_a, estado, zona_procedencia, provincia_procedencia, nacionalidad, forma_organizacion, socio_empleado, cod_servicio_im, str_replace (convert(char(10),fecha_reporte_im,102), '.', '-') + ' ' + convert(char(8),fecha_reporte_im,20) from " . $this->Ini->nm_tabela ; 
          } 
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
          { 
              $nmgp_select = "SELECT cod_socios, cod_evento, tipo_evento, convert(char(23),fecha_reporte,121), zona, cod_provincia, tipo_servicio, ruc, tipo_documento, cedula, nombres, apellidos, asociacion, fecha_registro, cod_u_organizaciones, grupo_etnico, genero, poblacion, estado_socio, cod_canton, cod_parroquia, convert(char(23),fecha_nacimiento,121), telefono, celular, mail, direccion, discapacidad, tipo_discapacidad, vinculado_a, estado, zona_procedencia, provincia_procedencia, nacionalidad, forma_organizacion, socio_empleado, cod_servicio_im, convert(char(23),fecha_reporte_im,121) from " . $this->Ini->nm_tabela ; 
          } 
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          { 
              $nmgp_select = "SELECT cod_socios, cod_evento, tipo_evento, fecha_reporte, zona, cod_provincia, tipo_servicio, ruc, tipo_documento, cedula, nombres, apellidos, asociacion, TO_DATE(TO_CHAR(fecha_registro, 'yyyy-mm-dd hh24:mi:ss'), 'yyyy-mm-dd hh24:mi:ss'), cod_u_organizaciones, grupo_etnico, genero, poblacion, estado_socio, cod_canton, cod_parroquia, fecha_nacimiento, telefono, celular, mail, direccion, discapacidad, tipo_discapacidad, vinculado_a, estado, zona_procedencia, provincia_procedencia, nacionalidad, forma_organizacion, socio_empleado, cod_servicio_im, fecha_reporte_im from " . $this->Ini->nm_tabela ; 
          } 
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
          { 
              $nmgp_select = "SELECT cod_socios, cod_evento, tipo_evento, EXTEND(fecha_reporte, YEAR TO DAY), zona, cod_provincia, tipo_servicio, ruc, tipo_documento, cedula, nombres, apellidos, asociacion, fecha_registro, cod_u_organizaciones, grupo_etnico, genero, poblacion, estado_socio, cod_canton, cod_parroquia, EXTEND(fecha_nacimiento, YEAR TO DAY), telefono, celular, mail, direccion, discapacidad, tipo_discapacidad, vinculado_a, estado, zona_procedencia, provincia_procedencia, nacionalidad, forma_organizacion, socio_empleado, cod_servicio_im, EXTEND(fecha_reporte_im, YEAR TO DAY) from " . $this->Ini->nm_tabela ; 
          } 
          else 
          { 
              $nmgp_select = "SELECT cod_socios, cod_evento, tipo_evento, fecha_reporte, zona, cod_provincia, tipo_servicio, ruc, tipo_documento, cedula, nombres, apellidos, asociacion, fecha_registro, cod_u_organizaciones, grupo_etnico, genero, poblacion, estado_socio, cod_canton, cod_parroquia, fecha_nacimiento, telefono, celular, mail, direccion, discapacidad, tipo_discapacidad, vinculado_a, estado, zona_procedencia, provincia_procedencia, nacionalidad, forma_organizacion, socio_empleado, cod_servicio_im, fecha_reporte_im from " . $this->Ini->nm_tabela ; 
          } 
          $aWhere = array();
          $aWhere[] = $sc_where_filter;
          if ($this->nmgp_opcao == "igual" || (($_SESSION['sc_session'][$this->Ini->sc_page]['form_adm_clientes']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_adm_clientes']['run_iframe'] == "R") && ($this->sc_evento == "insert" || $this->sc_evento == "update")) )
          { 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
              {
                  $aWhere[] = "cod_socios = $this->cod_socios"; 
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
              {
                  $aWhere[] = "cod_socios = $this->cod_socios"; 
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
              {
                  $aWhere[] = "cod_socios = $this->cod_socios"; 
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              {
                  $aWhere[] = "cod_socios = $this->cod_socios"; 
              }  
              else  
              {
                  $aWhere[] = "cod_socios = $this->cod_socios"; 
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
          $sc_order_by = "cod_socios";
          $sc_order_by = str_replace("order by ", "", $sc_order_by);
          $sc_order_by = str_replace("ORDER BY ", "", trim($sc_order_by));
          if (!empty($sc_order_by))
          {
              $nmgp_select .= " order by $sc_order_by "; 
          }
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['run_iframe'] == "R")
          {
              if ($this->sc_evento == "update")
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['select'] = $nmgp_select;
                  $this->nm_gera_html();
              } 
              elseif (!empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['select']))
              { 
                  $nmgp_select = $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['select'];
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['select'] = ""; 
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
              $this->nmgp_botoes['btn_Salir'] = "on";
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
              $this->cod_socios = $rs->fields[0] ; 
              $this->nmgp_dados_select['cod_socios'] = $this->cod_socios;
              $this->cod_evento = $rs->fields[1] ; 
              $this->nmgp_dados_select['cod_evento'] = $this->cod_evento;
              $this->tipo_evento = $rs->fields[2] ; 
              $this->nmgp_dados_select['tipo_evento'] = $this->tipo_evento;
              $this->fecha_reporte = $rs->fields[3] ; 
              $this->nmgp_dados_select['fecha_reporte'] = $this->fecha_reporte;
              $this->zona = $rs->fields[4] ; 
              $this->nmgp_dados_select['zona'] = $this->zona;
              $this->cod_provincia = $rs->fields[5] ; 
              $this->nmgp_dados_select['cod_provincia'] = $this->cod_provincia;
              $this->tipo_servicio = $rs->fields[6] ; 
              $this->nmgp_dados_select['tipo_servicio'] = $this->tipo_servicio;
              $this->ruc = $rs->fields[7] ; 
              $this->nmgp_dados_select['ruc'] = $this->ruc;
              $this->tipo_documento = $rs->fields[8] ; 
              $this->nmgp_dados_select['tipo_documento'] = $this->tipo_documento;
              $this->cedula = $rs->fields[9] ; 
              $this->nmgp_dados_select['cedula'] = $this->cedula;
              $this->nombres = $rs->fields[10] ; 
              $this->nmgp_dados_select['nombres'] = $this->nombres;
              $this->apellidos = $rs->fields[11] ; 
              $this->nmgp_dados_select['apellidos'] = $this->apellidos;
              $this->asociacion = $rs->fields[12] ; 
              $this->nmgp_dados_select['asociacion'] = $this->asociacion;
              $this->fecha_registro = $rs->fields[13] ; 
              if (substr($this->fecha_registro, 10, 1) == "-") 
              { 
                 $this->fecha_registro = substr($this->fecha_registro, 0, 10) . " " . substr($this->fecha_registro, 11);
              } 
              if (substr($this->fecha_registro, 13, 1) == ".") 
              { 
                 $this->fecha_registro = substr($this->fecha_registro, 0, 13) . ":" . substr($this->fecha_registro, 14, 2) . ":" . substr($this->fecha_registro, 17);
              } 
              $this->nmgp_dados_select['fecha_registro'] = $this->fecha_registro;
              $this->cod_u_organizaciones = $rs->fields[14] ; 
              $this->nmgp_dados_select['cod_u_organizaciones'] = $this->cod_u_organizaciones;
              $this->grupo_etnico = $rs->fields[15] ; 
              $this->nmgp_dados_select['grupo_etnico'] = $this->grupo_etnico;
              $this->genero = $rs->fields[16] ; 
              $this->nmgp_dados_select['genero'] = $this->genero;
              $this->poblacion = $rs->fields[17] ; 
              $this->nmgp_dados_select['poblacion'] = $this->poblacion;
              $this->estado_socio = $rs->fields[18] ; 
              $this->nmgp_dados_select['estado_socio'] = $this->estado_socio;
              $this->cod_canton = $rs->fields[19] ; 
              $this->nmgp_dados_select['cod_canton'] = $this->cod_canton;
              $this->cod_parroquia = $rs->fields[20] ; 
              $this->nmgp_dados_select['cod_parroquia'] = $this->cod_parroquia;
              $this->fecha_nacimiento = $rs->fields[21] ; 
              $this->nmgp_dados_select['fecha_nacimiento'] = $this->fecha_nacimiento;
              $this->telefono = $rs->fields[22] ; 
              $this->nmgp_dados_select['telefono'] = $this->telefono;
              $this->celular = $rs->fields[23] ; 
              $this->nmgp_dados_select['celular'] = $this->celular;
              $this->mail = $rs->fields[24] ; 
              $this->nmgp_dados_select['mail'] = $this->mail;
              $this->direccion = $rs->fields[25] ; 
              $this->nmgp_dados_select['direccion'] = $this->direccion;
              $this->discapacidad = $rs->fields[26] ; 
              $this->nmgp_dados_select['discapacidad'] = $this->discapacidad;
              $this->tipo_discapacidad = $rs->fields[27] ; 
              $this->nmgp_dados_select['tipo_discapacidad'] = $this->tipo_discapacidad;
              $this->vinculado_a = $rs->fields[28] ; 
              $this->nmgp_dados_select['vinculado_a'] = $this->vinculado_a;
              $this->estado = $rs->fields[29] ; 
              $this->nmgp_dados_select['estado'] = $this->estado;
              $this->zona_procedencia = $rs->fields[30] ; 
              $this->nmgp_dados_select['zona_procedencia'] = $this->zona_procedencia;
              $this->provincia_procedencia = $rs->fields[31] ; 
              $this->nmgp_dados_select['provincia_procedencia'] = $this->provincia_procedencia;
              $this->nacionalidad = $rs->fields[32] ; 
              $this->nmgp_dados_select['nacionalidad'] = $this->nacionalidad;
              $this->forma_organizacion = $rs->fields[33] ; 
              $this->nmgp_dados_select['forma_organizacion'] = $this->forma_organizacion;
              $this->socio_empleado = $rs->fields[34] ; 
              $this->nmgp_dados_select['socio_empleado'] = $this->socio_empleado;
              $this->cod_servicio_im = $rs->fields[35] ; 
              $this->nmgp_dados_select['cod_servicio_im'] = $this->cod_servicio_im;
              $this->fecha_reporte_im = $rs->fields[36] ; 
              $this->nmgp_dados_select['fecha_reporte_im'] = $this->fecha_reporte_im;
          $GLOBALS["NM_ERRO_IBASE"] = 0; 
              $this->cod_socios = (string)$this->cod_socios; 
              $this->zona = (string)$this->zona; 
              $this->cod_u_organizaciones = (string)$this->cod_u_organizaciones; 
              $this->estado = (string)$this->estado; 
              $this->cod_servicio_im = (string)$this->cod_servicio_im; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['parms'] = "cod_socios?#?$this->cod_socios?@?";
          } 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['dados_select'] = $this->nmgp_dados_select;
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
              $this->cod_socios = "" ;  
              $this->cod_evento = "" ;  
              $this->tipo_evento = "" ;  
              $this->fecha_reporte = "" ;  
              $this->fecha_reporte_hora = "" ;  
              $this->zona = "" ;  
              $this->cod_provincia = "" ;  
              $this->tipo_servicio = "" ;  
              $this->ruc = "" ;  
              $this->tipo_documento = "" ;  
              $this->cedula = "" ;  
              $this->nombres = "" ;  
              $this->apellidos = "" ;  
              $this->asociacion = "" ;  
              $this->fecha_registro = "" ;  
              $this->fecha_registro_hora = "" ;  
              $this->cod_u_organizaciones = "" ;  
              $this->grupo_etnico = "" ;  
              $this->genero = "" ;  
              $this->poblacion = "" ;  
              $this->estado_socio = "" ;  
              $this->cod_canton = "" ;  
              $this->cod_parroquia = "" ;  
              $this->fecha_nacimiento = "" ;  
              $this->fecha_nacimiento_hora = "" ;  
              $this->telefono = "" ;  
              $this->celular = "" ;  
              $this->mail = "" ;  
              $this->direccion = "" ;  
              $this->discapacidad = "" ;  
              $this->tipo_discapacidad = "" ;  
              $this->vinculado_a = "" ;  
              $this->estado = "" ;  
              $this->zona_procedencia = "" ;  
              $this->provincia_procedencia = "" ;  
              $this->nacionalidad = "" ;  
              $this->forma_organizacion = "" ;  
              $this->socio_empleado = "" ;  
              $this->cod_servicio_im = "" ;  
              $this->fecha_reporte_im = "" ;  
              $this->fecha_reporte_im_hora = "" ;  
              $this->txt_tipo_documento = "" ;  
              $this->txt_cedula = "" ;  
              $this->txt_pasaporte = "" ;  
              $this->btnbuscar = "Buscar" ;  
              $this->formatado = false;
          }
          if (($this->Embutida_form || $this->Embutida_multi) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['foreign_key']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['foreign_key']))
          {
              foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['foreign_key'] as $sFKName => $sFKValue)
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
$_SESSION['scriptcase']['form_socios']['contr_erro'] = 'on';
if (!isset($this->sc_temp_cod_u_organizaciones_aux)) { $this->sc_temp_cod_u_organizaciones_aux = (isset($_SESSION['cod_u_organizaciones_aux'])) ? $_SESSION['cod_u_organizaciones_aux'] : "";}
                         
$original_txt_tipo_documento = $this->txt_tipo_documento;
$original_txt_cedula = $this->txt_cedula;
$original_cedula = $this->cedula;
$original_estado = $this->estado;
$original_apellidos = $this->apellidos;
$original_fecha_nacimiento = $this->fecha_nacimiento;
$original_nacionalidad = $this->nacionalidad;
$original_txt_pasaporte = $this->txt_pasaporte;

if ($this->txt_tipo_documento  == 'cedula')
	{ 
		$reslongitud = strlen($this->txt_cedula );
		if($reslongitud != 10)	
			{ 
				$error_message = 'El CÉDULA debe tener 10 dígitos.'; 
				
 if (!isset($this->Campos_Mens_erro)){ $this->Campos_Mens_erro = "";}
 if (!empty($this->Campos_Mens_erro)){ $this->Campos_Mens_erro .= "<br>";}$this->Campos_Mens_erro .= $error_message;
 if ('submit_form' == $this->NM_ajax_opcao || 'event_' == substr($this->NM_ajax_opcao, 0, 6))
 { 
  $sErrorIndex = ('submit_form' == $this->NM_ajax_opcao) ? 'geral_form_socios' : substr(substr($this->NM_ajax_opcao, 0, strrpos($this->NM_ajax_opcao, '_')), 6);
  $this->NM_ajax_info['errList'][$sErrorIndex][] = $error_message;
 }
;
				if (isset($this->Campos_Mens_erro) && !empty($this->Campos_Mens_erro))
{ 
    if ($this->NM_ajax_flag)
    { 
        $_SESSION['scriptcase']['form_socios']['contr_erro'] = 'off';
        form_socios_pack_ajax_response();
        exit;
    }
    $this->Erro->mensagem(__FILE__, __LINE__, "critica", $this->Campos_Mens_erro);
    $_SESSION['scriptcase']['form_socios']['contr_erro'] = 'off';
    $this->Campos_Mens_erro = "";
    $this->nm_formatar_campos();
    $this->nm_gera_html();
    $this->NM_close_db();
    exit;
}
}
		if($reslongitud == 10 )
		{ 
			
			$getInfo = 'select count(*) from socios where cedula = "'.$this->txt_cedula .'" and cod_u_organizaciones='.$this->sc_temp_cod_u_organizaciones_aux;
			
			
			
			 
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
			
			if ($codigo > 0)
			{ 
				$error_message = 'La CÉDULA ya se encuentra registrada.'; 
				
 if (!isset($this->Campos_Mens_erro)){ $this->Campos_Mens_erro = "";}
 if (!empty($this->Campos_Mens_erro)){ $this->Campos_Mens_erro .= "<br>";}$this->Campos_Mens_erro .= $error_message;
 if ('submit_form' == $this->NM_ajax_opcao || 'event_' == substr($this->NM_ajax_opcao, 0, 6))
 { 
  $sErrorIndex = ('submit_form' == $this->NM_ajax_opcao) ? 'geral_form_socios' : substr(substr($this->NM_ajax_opcao, 0, strrpos($this->NM_ajax_opcao, '_')), 6);
  $this->NM_ajax_info['errList'][$sErrorIndex][] = $error_message;
 }
;
				if (isset($this->Campos_Mens_erro) && !empty($this->Campos_Mens_erro))
{ 
    if ($this->NM_ajax_flag)
    { 
        $_SESSION['scriptcase']['form_socios']['contr_erro'] = 'off';
        form_socios_pack_ajax_response();
        exit;
    }
    $this->Erro->mensagem(__FILE__, __LINE__, "critica", $this->Campos_Mens_erro);
    $_SESSION['scriptcase']['form_socios']['contr_erro'] = 'off';
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
				
				
				$datosRC =$this->BuscarDatosRC($this->ConectarWsRC($urlWs,$parametros), $this->txt_cedula , 185);
				
			$this->EncerarControlesSocios();
			$this->BloquearControlesSocios();
				
			
				
				$this->cedula = $this->txt_cedula ;
				$this->tipo_documento = $this->txt_tipo_documento ;	
				$this->estado = 1;
				
				$this->cedula  = $this->cedula;
				$this->tipo_documento  = $this->tipo_documento;
				$this->estado  = $this->estado;
				
				
				if($datosRC['condicionCiudadano'] != "")
				{ 	
					$nombre_RC = $datosRC['nombre'];
					$condicionCiudadano_RC = $datosRC['condicionCiudadano'];
					$fechaNacimiento_RC = $datosRC['fechaNacimiento'];
					$lugarNacimiento_RC = $datosRC['lugarNacimiento'];
					$nacionalidad_RC = $datosRC['nacionalidad'];		
				}
				$this->apellidos  = $nombre_RC;
				$this->fecha_nacimiento  = $fechaNacimiento_RC;
				$this->nacionalidad  = $nacionalidad_RC;
			$this->VisualizarBloquesSocios('on');
			}	
		}
	}
else
	{ 
		$getInfo = 'select count(*) from socios where cedula = "'.$this->txt_pasaporte .'" and cod_u_organizaciones='.$this->sc_temp_cod_u_organizaciones_aux;
		
		 
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
		
		if ($codigo > 0)
		{ 
			$error_message = 'El PASAPORTE ya se encuentra registrado.'; 
			
 if (!isset($this->Campos_Mens_erro)){ $this->Campos_Mens_erro = "";}
 if (!empty($this->Campos_Mens_erro)){ $this->Campos_Mens_erro .= "<br>";}$this->Campos_Mens_erro .= $error_message;
 if ('submit_form' == $this->NM_ajax_opcao || 'event_' == substr($this->NM_ajax_opcao, 0, 6))
 { 
  $sErrorIndex = ('submit_form' == $this->NM_ajax_opcao) ? 'geral_form_socios' : substr(substr($this->NM_ajax_opcao, 0, strrpos($this->NM_ajax_opcao, '_')), 6);
  $this->NM_ajax_info['errList'][$sErrorIndex][] = $error_message;
 }
;
			if (isset($this->Campos_Mens_erro) && !empty($this->Campos_Mens_erro))
{ 
    if ($this->NM_ajax_flag)
    { 
        $_SESSION['scriptcase']['form_socios']['contr_erro'] = 'off';
        form_socios_pack_ajax_response();
        exit;
    }
    $this->Erro->mensagem(__FILE__, __LINE__, "critica", $this->Campos_Mens_erro);
    $_SESSION['scriptcase']['form_socios']['contr_erro'] = 'off';
    $this->Campos_Mens_erro = "";
    $this->nm_formatar_campos();
    $this->nm_gera_html();
    $this->NM_close_db();
    exit;
}
}
		else
		{ 
		$this->BloquearControlesSociosPasaporte();
		$this->EncerarControlesSocios();
		$this->VisualizarBloquesSocios('on');
			$this->estado = 1;
			$this->cedula  = $this->txt_pasaporte ;	
			
		}
	}




if (isset($this->sc_temp_cod_u_organizaciones_aux)) {  $_SESSION['cod_u_organizaciones_aux'] = $this->sc_temp_cod_u_organizaciones_aux;}
$_SESSION['scriptcase']['form_socios']['contr_erro'] = 'off';
$modificado_txt_tipo_documento = $this->txt_tipo_documento;
$modificado_txt_cedula = $this->txt_cedula;
$modificado_cedula = $this->cedula;
$modificado_estado = $this->estado;
$modificado_apellidos = $this->apellidos;
$modificado_fecha_nacimiento = $this->fecha_nacimiento;
$modificado_nacionalidad = $this->nacionalidad;
$modificado_txt_pasaporte = $this->txt_pasaporte;
$this->nm_formatar_campos('txt_tipo_documento', 'txt_cedula', 'cedula', 'estado', 'apellidos', 'fecha_nacimiento', 'nacionalidad', 'txt_pasaporte');
if ($original_txt_tipo_documento != $modificado_txt_tipo_documento || (isset($bFlagRead_txt_tipo_documento) && $bFlagRead_txt_tipo_documento))
{ 
    $this->ajax_return_values_txt_tipo_documento(true);
}
if ($original_txt_cedula != $modificado_txt_cedula || (isset($bFlagRead_txt_cedula) && $bFlagRead_txt_cedula))
{ 
    $this->ajax_return_values_txt_cedula(true);
}
if ($original_cedula != $modificado_cedula || (isset($bFlagRead_cedula) && $bFlagRead_cedula))
{ 
    $this->ajax_return_values_cedula(true);
}
if ($original_estado != $modificado_estado || (isset($bFlagRead_estado) && $bFlagRead_estado))
{ 
    $this->ajax_return_values_estado(true);
}
if ($original_apellidos != $modificado_apellidos || (isset($bFlagRead_apellidos) && $bFlagRead_apellidos))
{ 
    $this->ajax_return_values_apellidos(true);
}
if ($original_fecha_nacimiento != $modificado_fecha_nacimiento || (isset($bFlagRead_fecha_nacimiento) && $bFlagRead_fecha_nacimiento))
{ 
    $this->ajax_return_values_fecha_nacimiento(true);
}
if ($original_nacionalidad != $modificado_nacionalidad || (isset($bFlagRead_nacionalidad) && $bFlagRead_nacionalidad))
{ 
    $this->ajax_return_values_nacionalidad(true);
}
if ($original_txt_pasaporte != $modificado_txt_pasaporte || (isset($bFlagRead_txt_pasaporte) && $bFlagRead_txt_pasaporte))
{ 
    $this->ajax_return_values_txt_pasaporte(true);
}
form_socios_pack_ajax_response();
exit;
}
function discapacidad_onChange()
{
$_SESSION['scriptcase']['form_socios']['contr_erro'] = 'on';
                         
$original_discapacidad = $this->discapacidad;
$original_tipo_discapacidad = $this->tipo_discapacidad;

if($this->discapacidad  == 'si')
	{ 
		$bFlagRead_tipo_discapacidad = false;
$this->NM_ajax_info['readOnly']['tipo_discapacidad'] = $this->nmgp_cmp_readonly["tipo_discapacidad"] = "off";
;
	}
else
	{ 
		$this->tipo_discapacidad ='';
		$bFlagRead_tipo_discapacidad = false;
$this->NM_ajax_info['readOnly']['tipo_discapacidad'] = $this->nmgp_cmp_readonly["tipo_discapacidad"] = "on";
;
	}

$modificado_discapacidad = $this->discapacidad;
$modificado_tipo_discapacidad = $this->tipo_discapacidad;
$this->nm_formatar_campos('discapacidad', 'tipo_discapacidad');
if ($original_discapacidad != $modificado_discapacidad || (isset($bFlagRead_discapacidad) && $bFlagRead_discapacidad))
{ 
    $this->ajax_return_values_discapacidad(true);
}
if ($original_tipo_discapacidad != $modificado_tipo_discapacidad || (isset($bFlagRead_tipo_discapacidad) && $bFlagRead_tipo_discapacidad))
{ 
    $this->ajax_return_values_tipo_discapacidad(true);
}
form_socios_pack_ajax_response();
exit;
$_SESSION['scriptcase']['form_socios']['contr_erro'] = 'off';
}
function mail_onBlur()
{
$_SESSION['scriptcase']['form_socios']['contr_erro'] = 'on';
                         
$original_mail = $this->mail;

$this->mail  = strtolower($this->mail );

$modificado_mail = $this->mail;
$this->nm_formatar_campos('mail');
if ($original_mail != $modificado_mail || (isset($bFlagRead_mail) && $bFlagRead_mail))
{ 
    $this->ajax_return_values_mail(true);
}
form_socios_pack_ajax_response();
exit;


$_SESSION['scriptcase']['form_socios']['contr_erro'] = 'off';
}
function txt_tipo_documento_onChange()
{
$_SESSION['scriptcase']['form_socios']['contr_erro'] = 'on';
                         
$original_txt_tipo_documento = $this->txt_tipo_documento;
$original_txt_cedula = $this->txt_cedula;
$original_txt_pasaporte = $this->txt_pasaporte;

if($this->txt_tipo_documento  == 'cedula') 
	{ 
		$this->txt_cedula  = "";
		$this->txt_pasaporte  = "";
		$this->nmgp_cmp_hidden["txt_cedula"] = "on"; $this->NM_ajax_info['fieldDisplay']['txt_cedula'] = 'on';
		$this->nmgp_cmp_hidden["txt_pasaporte"] = "off"; $this->NM_ajax_info['fieldDisplay']['txt_pasaporte'] = 'off';
	}
else
	{ 
		$this->txt_cedula  = "";
		$this->txt_pasaporte  = "";
  		$this->nmgp_cmp_hidden["txt_cedula"] = "off"; $this->NM_ajax_info['fieldDisplay']['txt_cedula'] = 'off';
		$this->nmgp_cmp_hidden["txt_pasaporte"] = "on"; $this->NM_ajax_info['fieldDisplay']['txt_pasaporte'] = 'on';
	}
$this->tipo_documento  = $this->txt_tipo_documento ;

$modificado_txt_tipo_documento = $this->txt_tipo_documento;
$modificado_txt_cedula = $this->txt_cedula;
$modificado_txt_pasaporte = $this->txt_pasaporte;
$this->nm_formatar_campos('txt_tipo_documento', 'txt_cedula', 'txt_pasaporte');
if ($original_txt_tipo_documento != $modificado_txt_tipo_documento || (isset($bFlagRead_txt_tipo_documento) && $bFlagRead_txt_tipo_documento))
{ 
    $this->ajax_return_values_txt_tipo_documento(true);
}
if ($original_txt_cedula != $modificado_txt_cedula || (isset($bFlagRead_txt_cedula) && $bFlagRead_txt_cedula))
{ 
    $this->ajax_return_values_txt_cedula(true);
}
if ($original_txt_pasaporte != $modificado_txt_pasaporte || (isset($bFlagRead_txt_pasaporte) && $bFlagRead_txt_pasaporte))
{ 
    $this->ajax_return_values_txt_pasaporte(true);
}
form_socios_pack_ajax_response();
exit;
$_SESSION['scriptcase']['form_socios']['contr_erro'] = 'off';
}
function control_session()
{
$_SESSION['scriptcase']['form_socios']['contr_erro'] = 'on';
                         
	
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
$_SESSION['scriptcase']['form_socios']['contr_erro'] = 'off';
}
function ConectarWsRC($urlWs,$parametros)
	{
$_SESSION['scriptcase']['form_socios']['contr_erro'] = 'on';
                         
		$client = new SoapClient($urlWs, $parametros);	
		return $client;
	
$_SESSION['scriptcase']['form_socios']['contr_erro'] = 'off';
}
function BuscarDatosRC($client, $numeroIdentificacion, $codPaquete)
	{
$_SESSION['scriptcase']['form_socios']['contr_erro'] = 'on';
                         
		$valoresBuscarRC = array();
		$valoresBuscarRC['numeroIdentificacion'] = $numeroIdentificacion;
		$valoresBuscarRC['codigoPaquete'] = $codPaquete;
		$valoresDevueltosRC = array();
		try
		{ 
			$res = $client->__soapCall("getFichaGeneral", array($valoresBuscarRC));
			$valoresDevueltosRC =$this->SetearValoresRC($res);
			return $valoresDevueltosRC;
		}
		catch(SoapFault $exception)
		{ 
			
			
			
					$error= $exception->getMessage().",Información del REGISTRO CIVIL CON PROBLEMAS, REVISE LA INFORMACIÓN.";
					 if (!isset($this->Campos_Mens_erro) || empty($this->Campos_Mens_erro))
 { 
$this->nmgp_redireciona_form($this->Ini->path_link . "reconexionWS/reconexionWS.php", $this->nm_location, "mensaje?#?" . $error . "?@?" . "tipo?#?" . "socio" . "?@?", "_self", "ret_self", 440, 630);
 };
				
		}
$_SESSION['scriptcase']['form_socios']['contr_erro'] = 'off';
}
function SetearValoresRC($resultadoRC)
	{
$_SESSION['scriptcase']['form_socios']['contr_erro'] = 'on';
                         
		$consultaRC = array();
		$consultaRC['nombre'] = $resultadoRC->return->instituciones->datosPrincipales->registros[0]->valor;
		$consultaRC['condicionCiudadano'] = $resultadoRC->return->instituciones->datosPrincipales->registros[1]->valor;
		
		$fechaNacimiento = explode("/", $resultadoRC->return->instituciones->datosPrincipales->registros[2]->valor);
		$dia = $fechaNacimiento[0]; 
		$mes = $fechaNacimiento[1];
		$anio = $fechaNacimiento[2];
		$consultaRC['fechaNacimiento'] = $anio . "-". $mes ."-".$dia; 
		
		$consultaRC['lugarNacimiento'] = $resultadoRC->return->instituciones->datosPrincipales->registros[3]->valor;
		$consultaRC['nacionalidad'] = $resultadoRC->return->instituciones->datosPrincipales->registros[4]->valor;
		return $consultaRC;
	
$_SESSION['scriptcase']['form_socios']['contr_erro'] = 'off';
}
function EncerarControlesSocios()
	{
$_SESSION['scriptcase']['form_socios']['contr_erro'] = 'on';
                         
		$this->estado  = "";
		$this->tipo_documento  = "";
		$this->cedula  = "";
		$this->apellidos  = "";
		$this->nacionalidad  = "";
		$this->fecha_nacimiento  = "";
		$this->genero  = "";
		$this->grupo_etnico  = "";
		$this->telefono  = "";
		$this->celular  = "";
		$this->mail  = "";
		$this->direccion  = "";
		$this->poblacion  = "";
		$this->socio_empleado  = "";
		$this->discapacidad  = "";
		$this->tipo_discapacidad  = "";
		$this->zona  = "";
		$this->cod_provincia  = "";
		$this->cod_canton  = "";
		$this->cod_parroquia  = "";
	
$_SESSION['scriptcase']['form_socios']['contr_erro'] = 'off';
}
function BloquearControlesSocios()
	{
$_SESSION['scriptcase']['form_socios']['contr_erro'] = 'on';
                         	
		$bFlagRead_cedula = false;
$this->NM_ajax_info['readOnly']['cedula'] = $this->nmgp_cmp_readonly["cedula"] = "on";
;
		$bFlagRead_apellidos = false;
$this->NM_ajax_info['readOnly']['apellidos'] = $this->nmgp_cmp_readonly["apellidos"] = "on";
;
		$bFlagRead_nacionalidad = false;
$this->NM_ajax_info['readOnly']['nacionalidad'] = $this->nmgp_cmp_readonly["nacionalidad"] = "on";
;
		$bFlagRead_fecha_nacimiento = false;
$this->NM_ajax_info['readOnly']['fecha_nacimiento'] = $this->nmgp_cmp_readonly["fecha_nacimiento"] = "on";
;
$_SESSION['scriptcase']['form_socios']['contr_erro'] = 'off';
}
function BloquearControlesSociosPasaporte()
	{
$_SESSION['scriptcase']['form_socios']['contr_erro'] = 'on';
                         	
		$bFlagRead_cedula = false;
$this->NM_ajax_info['readOnly']['cedula'] = $this->nmgp_cmp_readonly["cedula"] = "on";
;
$_SESSION['scriptcase']['form_socios']['contr_erro'] = 'off';
}
function VisualizarBloquesSocios($variable)
	{
$_SESSION['scriptcase']['form_socios']['contr_erro'] = 'on';
                         
		if($variable == 'on') 
		{ 
			$this->Ini->nm_hidden_blocos[0] = "off"; $this->NM_ajax_info['blockDisplay']['0'] = 'off';
		}
		else
		{ 
			$this->Ini->nm_hidden_blocos[0] = "on"; $this->NM_ajax_info['blockDisplay']['0'] = 'on';
		}
		$this->Ini->nm_hidden_blocos[1] = "$variable"; $this->NM_ajax_info['blockDisplay']['1'] = '$variable';
		$this->NM_ajax_info['buttonDisplay']['insert'] = $this->nmgp_botoes["insert"] = "$variable";;
		
		if($this->discapacidad  == 'si')
		{ 
			$bFlagRead_tipo_discapacidad = false;
$this->NM_ajax_info['readOnly']['tipo_discapacidad'] = $this->nmgp_cmp_readonly["tipo_discapacidad"] = "off";
;
		}
		else
		{ 
			$this->tipo_discapacidad ='';
			$bFlagRead_tipo_discapacidad = false;
$this->NM_ajax_info['readOnly']['tipo_discapacidad'] = $this->nmgp_cmp_readonly["tipo_discapacidad"] = "on";
;
		}
$_SESSION['scriptcase']['form_socios']['contr_erro'] = 'off';
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
     $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['botoes'] = $this->nmgp_botoes;
     if ($this->nmgp_opcao != "recarga" && $this->nmgp_opcao != "muda_form")
     {
         $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['opc_ant'] = $this->nmgp_opcao;
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
     if (($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['run_iframe'] == "R") && $this->nm_flag_iframe && empty($this->nm_todas_criticas))
     {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['run_iframe_ajax']))
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['retorno_edit'] = array("edit", "");
          }
          else
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['retorno_edit'] .= "&nmgp_opcao=edit";
          }
          if ($this->sc_evento == "insert" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['run_iframe'] == "F")
          {
              if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['run_iframe_ajax']))
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['retorno_edit'] = array("edit", "fim");
              }
              else
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['retorno_edit'] .= "&rec=fim";
              }
          }
          $this->NM_close_db(); 
          if ($this->sc_evento == "insert")
          {
              $this->nm_gera_mensagem("La información ha sido almacenada satisfactoriamente...", $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['retorno_edit'], "parent"); 
          }
          if ($this->sc_evento == "update")
          {
              $this->nm_gera_mensagem("La información ha sido actualizada satisfactoriamente...", $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['retorno_edit'], "parent"); 
          }
          if ($this->sc_evento == "delete")
          {
              $this->nm_gera_mensagem("La información ha sido eliminada satisfactoriamente...", $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['retorno_edit'], "parent"); 
          }
          $sJsParent = '';
          if ($this->NM_ajax_flag && isset($this->NM_ajax_info['param']['buffer_output']) && $this->NM_ajax_info['param']['buffer_output'])
          {
              if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['run_iframe_ajax']))
              {
                  $this->NM_ajax_info['ajaxJavascript'][] = array("parent.ajax_navigate", $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['retorno_edit']);
              }
              else
              {
                  $sJsParent .= 'parent';
                  $this->NM_ajax_info['redir']['metodo'] = 'location';
                  $this->NM_ajax_info['redir']['action'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['retorno_edit'];
                  $this->NM_ajax_info['redir']['target'] = $sJsParent;
              }
              form_socios_pack_ajax_response();
              exit;
          }
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
            "http://www.w3.org/TR/1999/REC-html401-19991224/loose.dtd">

         <html><body>
         <script type="text/javascript">
<?php
    
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['run_iframe_ajax']))
    {
        $opc = ($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['run_iframe'] == "F" && $this->sc_evento == "insert") ? "fim" : "";
        echo "parent.ajax_navigate('edit', '" .$opc . "');";
    }
    else
    {
        echo $sJsParent . "parent.location = '" . $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['retorno_edit'] . "';";
    }
?>
         </script>
         </body></html>
<?php
         exit;
     }
    include_once("form_socios_form0.php");
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
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['where_filter']);
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['total']);
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['fast_search']);
          return;
      }
      $comando = "";
      $sv_data = $data_search;
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "cod_socios", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $data_lookup = $this->SC_lookup_estado($arg_search, $data_search);
          if (is_array($data_lookup) && !empty($data_lookup)) 
          {
              $this->SC_monta_condicao($comando, "estado", $arg_search, $data_lookup);
          }
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "cedula", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "apellidos", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "nacionalidad", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $data_lookup = $this->SC_lookup_genero($arg_search, $data_search);
          if (is_array($data_lookup) && !empty($data_lookup)) 
          {
              $this->SC_monta_condicao($comando, "genero", $arg_search, $data_lookup);
          }
      }
      if ($field == "SC_all_Cmp") 
      {
          $data_lookup = $this->SC_lookup_grupo_etnico($arg_search, $data_search);
          if (is_array($data_lookup) && !empty($data_lookup)) 
          {
              $this->SC_monta_condicao($comando, "grupo_etnico", $arg_search, $data_lookup);
          }
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
          $this->SC_monta_condicao($comando, "mail", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "direccion", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $data_lookup = $this->SC_lookup_poblacion($arg_search, $data_search);
          if (is_array($data_lookup) && !empty($data_lookup)) 
          {
              $this->SC_monta_condicao($comando, "poblacion", $arg_search, $data_lookup);
          }
      }
      if ($field == "SC_all_Cmp") 
      {
          $data_lookup = $this->SC_lookup_socio_empleado($arg_search, $data_search);
          if (is_array($data_lookup) && !empty($data_lookup)) 
          {
              $this->SC_monta_condicao($comando, "socio_empleado", $arg_search, $data_lookup);
          }
      }
      if ($field == "SC_all_Cmp") 
      {
          $data_lookup = $this->SC_lookup_discapacidad($arg_search, $data_search);
          if (is_array($data_lookup) && !empty($data_lookup)) 
          {
              $this->SC_monta_condicao($comando, "discapacidad", $arg_search, $data_lookup);
          }
      }
      if ($field == "SC_all_Cmp") 
      {
          $data_lookup = $this->SC_lookup_tipo_discapacidad($arg_search, $data_search);
          if (is_array($data_lookup) && !empty($data_lookup)) 
          {
              $this->SC_monta_condicao($comando, "tipo_discapacidad", $arg_search, $data_lookup);
          }
      }
      if ($field == "SC_all_Cmp") 
      {
          $data_lookup = $this->SC_lookup_zona($arg_search, $data_search);
          if (is_array($data_lookup) && !empty($data_lookup)) 
          {
              $this->SC_monta_condicao($comando, "zona", $arg_search, $data_lookup);
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
     $qt_geral_reg_form_socios = isset($rt->fields[0]) ? $rt->fields[0] - 1 : 0; 
     $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['total'] = $qt_geral_reg_form_socios;
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['where_filter'] = $comando;
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['fast_search'][0] = $field;
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['fast_search'][1] = $arg_search;
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['fast_search'][2] = $sv_data;
      $rt->Close(); 
   }
   function SC_monta_condicao(&$comando, $nome, $condicao, $campo, $tp_campo="")
   {
      $nm_aspas   = "'";
      $nm_numeric = array();
      $campo_join = strtolower(str_replace(".", "_", $nome));
      $nm_ini_lower = "";
      $nm_fim_lower = "";
      $nm_numeric[] = "cod_socios";$nm_numeric[] = "zona";$nm_numeric[] = "cod_u_organizaciones";$nm_numeric[] = "estado";$nm_numeric[] = "cod_servicio_im";
      if (in_array($campo_join, $nm_numeric))
      {
         if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['decimal_db'] == ".")
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
      $Nm_datas[] = "fecha_reporte";$Nm_datas[] = "fecha_nacimiento";$Nm_datas[] = "fecha_reporte_im";
      if (in_array($campo_join, $Nm_datas) && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
      {
         $nm_aspas = "#";
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
   function SC_lookup_txt_tipo_documento($condicao, $campo)
   {
       return false;
   }
   function SC_lookup_estado($condicao, $campo)
   {
       return false;
   }
   function SC_lookup_genero($condicao, $campo)
   {
       return false;
   }
   function SC_lookup_grupo_etnico($condicao, $campo)
   {
       return false;
   }
   function SC_lookup_poblacion($condicao, $campo)
   {
       return false;
   }
   function SC_lookup_socio_empleado($condicao, $campo)
   {
       return false;
   }
   function SC_lookup_discapacidad($condicao, $campo)
   {
       return false;
   }
   function SC_lookup_tipo_discapacidad($condicao, $campo)
   {
       return false;
   }
   function SC_lookup_zona($condicao, $campo)
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
   if ($tipo == 2 && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['sc_outra_jan']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['sc_outra_jan'])
   {
       $nmgp_saida_form = "form_socios_fim.php";
   }
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['redir']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['redir'] == 'redir')
   {
       unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']);
   }
   unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['opc_ant']);
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
       form_socios_pack_ajax_response();
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
               $tmp_parms .= $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios'][substr($val, 1, -1)];
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
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['opcao'] = "";
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['retorno_edit'] = "";
   }
   $nm_target_form = (empty($nm_target)) ? "_self" : $nm_target;
   if (strtolower(substr($nm_apl_dest, -4)) != ".php" && (strtolower(substr($nm_apl_dest, 0, 7)) == "http://" || strtolower(substr($nm_apl_dest, 0, 8)) == "https://" || strtolower(substr($nm_apl_dest, 0, 3)) == "../"))
   {
       if ($this->NM_ajax_flag)
       {
           $this->NM_ajax_info['redir']['metodo'] = 'location';
           $this->NM_ajax_info['redir']['action'] = $nm_apl_dest;
           $this->NM_ajax_info['redir']['target'] = $nm_target_form;
           form_socios_pack_ajax_response();
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
       form_socios_pack_ajax_response();
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
    if ($nm_apl_dest == "form_socios.php")
    {
        $form_submit = 1;
        $form_opcao  = $this->nmgp_opcao;
    }
    if ("novo" == $this->nmgp_opcao || "insert" == $this->sc_evento)
    {
        $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['opc_ant'] = "";
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
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['sc_outra_jan']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['sc_outra_jan'] && $nm_apl_retorno == 'sc_sai')
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
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['run_iframe_ajax']))
        {
            echo "parent.ajax_navigate('edit', '" . $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['retorno_edit'][1] . "');";
        }
        else
        {
            echo "parent.location = '" . $_SESSION['sc_session'][$this->Ini->sc_page]['form_socios']['retorno_edit'] . "';"; 
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
        $this->NM_ajax_info['redir']['action'] = form_socios_pack_protect_string(ob_get_contents());
        ob_end_clean();
        ob_start();
        form_socios_pack_ajax_response();
    }
    exit;
 }
}
?>
