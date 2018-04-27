<?php
//
class form_sec_users_apl
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
                                'navSummary'     => array(),
                                'navPage'        => array(),
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
   var $login_;
   var $pswd_;
   var $name_;
   var $ci_;
   var $email_;
   var $usr_active_;
   var $usr_active__1;
   var $activation_code_;
   var $priv_admin_;
   var $zona_;
   var $zona__1;
   var $fecha_registro_;
   var $fecha_registro__hora;
   var $departamento_;
   var $departamento__1;
   var $cod_provincia_;
   var $cod_provincia__1;
   var $ingreso_;
   var $access_fa_;
   var $access_im_;
   var $access_fp_;
   var $access_siu_;
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
   var $sc_teve_incl = false;
   var $sc_teve_excl = false;
   var $sc_teve_alt  = false;
   var $sc_after_all_insert = false;
   var $sc_after_all_update = false;
   var $sc_max_reg = 50; 
   var $sc_max_reg_incl = 10; 
   var $form_vert_form_sec_users = array();
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
   var $Grid_editavel  = true;
   var $url_webhelp = '';
   var $nm_todas_criticas;
   var $Campos_Mens_erro;
   var $nm_new_label = array();
//
//----- 
   function ini_controle()
   {
        global $nm_url_saida, $teste_validade, $script_case_init, 
               $GLOBALS, $Campos_Crit, $Campos_Falta, $Campos_Erros, $sc_seq_vert, $sc_check_incl, 
               $glo_senha_protect, $nm_apl_dependente, $nm_form_submit, $sc_check_excl, $nm_opc_form_php, $nm_call_php, $nm_opc_lookup;


      if ($this->NM_ajax_flag)
      {
          if (isset($this->NM_ajax_info['param']['access_fa_']))
          {
              $this->access_fa_ = $this->NM_ajax_info['param']['access_fa_'];
          }
          if (isset($this->NM_ajax_info['param']['access_fp_']))
          {
              $this->access_fp_ = $this->NM_ajax_info['param']['access_fp_'];
          }
          if (isset($this->NM_ajax_info['param']['access_im_']))
          {
              $this->access_im_ = $this->NM_ajax_info['param']['access_im_'];
          }
          if (isset($this->NM_ajax_info['param']['ci_']))
          {
              $this->ci_ = $this->NM_ajax_info['param']['ci_'];
          }
          if (isset($this->NM_ajax_info['param']['cod_provincia_']))
          {
              $this->cod_provincia_ = $this->NM_ajax_info['param']['cod_provincia_'];
          }
          if (isset($this->NM_ajax_info['param']['email_']))
          {
              $this->email_ = $this->NM_ajax_info['param']['email_'];
          }
          if (isset($this->NM_ajax_info['param']['login_']))
          {
              $this->login_ = $this->NM_ajax_info['param']['login_'];
          }
          if (isset($this->NM_ajax_info['param']['name_']))
          {
              $this->name_ = $this->NM_ajax_info['param']['name_'];
          }
          if (isset($this->NM_ajax_info['param']['nm_form_submit']))
          {
              $this->nm_form_submit = $this->NM_ajax_info['param']['nm_form_submit'];
          }
          if (isset($this->NM_ajax_info['param']['nmgp_ancora']))
          {
              $this->nmgp_ancora = $this->NM_ajax_info['param']['nmgp_ancora'];
          }
          if (isset($this->NM_ajax_info['param']['nmgp_arg_fast_search']))
          {
              $this->nmgp_arg_fast_search = $this->NM_ajax_info['param']['nmgp_arg_fast_search'];
          }
          if (isset($this->NM_ajax_info['param']['nmgp_cond_fast_search']))
          {
              $this->nmgp_cond_fast_search = $this->NM_ajax_info['param']['nmgp_cond_fast_search'];
          }
          if (isset($this->NM_ajax_info['param']['nmgp_fast_search']))
          {
              $this->nmgp_fast_search = $this->NM_ajax_info['param']['nmgp_fast_search'];
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
          if (isset($this->NM_ajax_info['param']['nmgp_refresh_row']))
          {
              $this->nmgp_refresh_row = $this->NM_ajax_info['param']['nmgp_refresh_row'];
          }
          if (isset($this->NM_ajax_info['param']['nmgp_url_saida']))
          {
              $this->nmgp_url_saida = $this->NM_ajax_info['param']['nmgp_url_saida'];
          }
          if (isset($this->NM_ajax_info['param']['pswd_']))
          {
              $this->pswd_ = $this->NM_ajax_info['param']['pswd_'];
          }
          if (isset($this->NM_ajax_info['param']['sc_clone']))
          {
              $this->sc_clone = $this->NM_ajax_info['param']['sc_clone'];
          }
          if (isset($this->NM_ajax_info['param']['sc_seq_clone']))
          {
              $this->sc_seq_clone = $this->NM_ajax_info['param']['sc_seq_clone'];
          }
          if (isset($this->NM_ajax_info['param']['sc_seq_vert']))
          {
              $this->sc_seq_vert = $this->NM_ajax_info['param']['sc_seq_vert'];
          }
          if (isset($this->NM_ajax_info['param']['script_case_init']))
          {
              $this->script_case_init = $this->NM_ajax_info['param']['script_case_init'];
          }
          if (isset($this->NM_ajax_info['param']['usr_active_']))
          {
              $this->usr_active_ = $this->NM_ajax_info['param']['usr_active_'];
          }
          if (isset($this->NM_ajax_info['param']['zona_']))
          {
              $this->zona_ = $this->NM_ajax_info['param']['zona_'];
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
      $this->sc_conv_var['login'] = "login_";
      $this->sc_conv_var['pswd'] = "pswd_";
      $this->sc_conv_var['name'] = "name_";
      $this->sc_conv_var['ci'] = "ci_";
      $this->sc_conv_var['email'] = "email_";
      $this->sc_conv_var['usr_active'] = "usr_active_";
      $this->sc_conv_var['activation_code'] = "activation_code_";
      $this->sc_conv_var['priv_admin'] = "priv_admin_";
      $this->sc_conv_var['zona'] = "zona_";
      $this->sc_conv_var['fecha_registro'] = "fecha_registro_";
      $this->sc_conv_var['departamento'] = "departamento_";
      $this->sc_conv_var['cod_provincia'] = "cod_provincia_";
      $this->sc_conv_var['ingreso'] = "ingreso_";
      $this->sc_conv_var['access_fa'] = "access_fa_";
      $this->sc_conv_var['access_im'] = "access_im_";
      $this->sc_conv_var['access_fp'] = "access_fp_";
      $this->sc_conv_var['access_siu'] = "access_siu_";
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
      if (isset($_SESSION['sc_session'][$script_case_init]['form_sec_users']['embutida_parms']))
      { 
          $this->nmgp_parms = $_SESSION['sc_session'][$script_case_init]['form_sec_users']['embutida_parms'];
          unset($_SESSION['sc_session'][$script_case_init]['form_sec_users']['embutida_parms']);
      } 
      if (isset($this->nmgp_parms) && !empty($this->nmgp_parms)) 
      { 
          if (isset($_SESSION['nm_aba_bg_color'])) 
          { 
              unset($_SESSION['nm_aba_bg_color']);
          }   
          $this->NM_where_filter = "";
          $tem_where_parms       = false;
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
                 nm_limpa_str_form_sec_users($cadapar[1]);
                 $this->$cadapar[0] = $cadapar[1];
                 if ($cadapar[0] == "login_")
                 {
                     $this->NM_where_filter .= (empty($this->NM_where_filter)) ? "(" : " and ";
                     $this->NM_where_filter .= "login = '" . $this->login_ . "'";
                     $tem_where_parms        = true;
                 }
                 if ($cadapar[0] == "NM_where_filter")
                 {
                     $tem_where_parms = false;
                 }
             }
             $ix++;
          }
          if ($tem_where_parms)
          {
              $this->NM_where_filter .= ")";
          }
          else
          {
              unset($this->NM_where_filter);
          }
          if (isset($this->NM_where_filter_form))
          {
              $_SESSION['sc_session'][$script_case_init]['form_sec_users']['where_filter_form'] = $this->NM_where_filter_form;
          }
          if (isset($this->sc_redir_atualiz))
          {
              $_SESSION['sc_session'][$script_case_init]['form_sec_users']['sc_redir_atualiz'] = $this->sc_redir_atualiz;
          }
          if (isset($this->sc_redir_insert))
          {
              $_SESSION['sc_session'][$script_case_init]['form_sec_users']['sc_redir_insert'] = $this->sc_redir_insert;
          }
      } 
      elseif (isset($script_case_init) && !empty($script_case_init) && isset($_SESSION['sc_session'][$script_case_init]['form_sec_users']['parms']))
      {
          if ((!isset($this->nmgp_opcao) || ($this->nmgp_opcao != "incluir" && $this->nmgp_opcao != "alterar" && $this->nmgp_opcao != "excluir" && $this->nmgp_opcao != "novo" && $this->nmgp_opcao != "recarga" && $this->nmgp_opcao != "muda_form")) && (!isset($this->NM_ajax_opcao) || $this->NM_ajax_opcao == ""))
          {
              $todo = explode("?@?", $_SESSION['sc_session'][$script_case_init]['form_sec_users']['parms']);
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
          $_SESSION['sc_session'][$script_case_init]['form_sec_users']['lig_edit_lookup']     = true;
          $_SESSION['sc_session'][$script_case_init]['form_sec_users']['lig_edit_lookup_cb']  = $this->nm_evt_ret_edit;
          $_SESSION['sc_session'][$script_case_init]['form_sec_users']['lig_edit_lookup_row'] = isset($this->nm_evt_ret_row) ? $this->nm_evt_ret_row : '';
      }
      if (isset($_SESSION['sc_session'][$script_case_init]['form_sec_users']['lig_edit_lookup']) && $_SESSION['sc_session'][$script_case_init]['form_sec_users']['lig_edit_lookup'])
      {
          $this->lig_edit_lookup     = true;
          $this->lig_edit_lookup_cb  = $_SESSION['sc_session'][$script_case_init]['form_sec_users']['lig_edit_lookup_cb'];
          $this->lig_edit_lookup_row = $_SESSION['sc_session'][$script_case_init]['form_sec_users']['lig_edit_lookup_row'];
      }
      if (!$this->Ini)
      { 
          $this->Ini = new form_sec_users_ini(); 
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
      $this->Ini->Img_status_ok   = "" == trim($str_img_status_ok_mult)   ? ""     : $str_img_status_ok_mult;
      $this->Ini->Img_status_err  = "" == trim($str_img_status_err_mult)  ? ""     : $str_img_status_err_mult;
      $this->Ini->Css_status      = "scFormInputErrorMult";
      $this->Ini->Error_icon_span = "" == trim($str_error_icon_span) ? false  : "message" == $str_error_icon_span;
      $this->Ini->Img_qs_search        = "" == trim($img_qs_search)        ? "scriptcase__NM__qs_lupa.png"  : $img_qs_search;
      $this->Ini->Img_qs_clean         = "" == trim($img_qs_clean)         ? "scriptcase__NM__qs_close.png" : $img_qs_clean;
      $this->Ini->Str_qs_image_padding = "" == trim($str_qs_image_padding) ? "0"                            : $str_qs_image_padding;



      $_SESSION['scriptcase']['error_icon']['form_sec_users']  = "<img src=\"" . $this->Ini->path_icones . "/scriptcase__NM__icnMensagemAlerta.png\" style=\"border-width: 0px\" align=\"top\">&nbsp;";
      $_SESSION['scriptcase']['error_close']['form_sec_users'] = "<td>" . nmButtonOutput($this->arr_buttons, "berrm_clse", "document.getElementById('id_error_display_fixed').style.display = 'none'; document.getElementById('id_error_message_fixed').innerHTML = ''; return false", "document.getElementById('id_error_display_fixed').style.display = 'none'; document.getElementById('id_error_message_fixed').innerHTML = ''; return false", "", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "") . "</td>";

      $this->Embutida_proc = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['embutida_proc']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['embutida_proc'] : $this->Embutida_proc;
      $this->Embutida_form = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['embutida_form']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['embutida_form'] : $this->Embutida_form;
      $this->Embutida_call = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['embutida_call']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['embutida_call'] : $this->Embutida_call;

      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['embutida_liga_grid_edit']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['embutida_liga_grid_edit'])
      {
          $this->Grid_editavel = ('on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['embutida_liga_grid_edit']) ? true : false;
      }
      if (isset($this->Grid_editavel) && $this->Grid_editavel)
      {
          $this->Embutida_form  = true;
          $this->Embutida_ronly = true;
      }
      $this->Embutida_multi = false;
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['embutida_multi']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['embutida_multi'])
      {
          $this->Grid_editavel  = false;
          $this->Embutida_form  = false;
          $this->Embutida_ronly = false;
          $this->Embutida_multi = true;
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['embutida_liga_tp_pag']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['embutida_liga_tp_pag'])
      {
          $this->form_paginacao = $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['embutida_liga_tp_pag'];
      }

      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['embutida_form']) || '' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['embutida_form'])
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['embutida_form'] = $this->Embutida_form;
      }
      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['embutida_liga_grid_edit']) || '' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['embutida_liga_grid_edit'])
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['embutida_liga_grid_edit'] = $this->Grid_editavel ? 'on' : 'off';
      }
      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['embutida_liga_grid_edit']) || '' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['embutida_liga_grid_edit'])
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['embutida_liga_grid_edit'] = $this->Embutida_call;
      }

      $this->nm_location = $this->Ini->sc_protocolo . $this->Ini->server . $dir_raiz . "form_sec_users.php"; 
      $this->nmgp_url_saida  = $nm_url_saida;
      $this->nmgp_form_show  = "on";
      $this->nmgp_form_empty = false;
      $this->Ini->sc_Include($this->Ini->path_lib_php . "/nm_valida.php", "C", "NM_Valida") ; 
      $teste_validade = new NM_Valida ;

      $this->loadFieldConfig();

      if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['first_time'])
      {
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_sec_users']['insert']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_sec_users']['new']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_sec_users']['update']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_sec_users']['delete']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_sec_users']['first']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_sec_users']['back']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_sec_users']['forward']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_sec_users']['last']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_sec_users']['qsearch']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_sec_users']['summary']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_sec_users']['navpage']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_sec_users']['goto']);
      }
      if (isset($this->NM_btn_insert) && '' != $this->NM_btn_insert && (!isset($_SESSION['scriptcase']['sc_apl_conf']['form_sec_users']['insert']) || '' == $_SESSION['scriptcase']['sc_apl_conf']['form_sec_users']['insert']))
      {
          if ('N' == $this->NM_btn_insert)
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_sec_users']['insert'] = 'off';
          }
          else
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_sec_users']['insert'] = 'on';
          }
      }
      if (isset($this->NM_btn_new) && 'N' == $this->NM_btn_new)
      {
          $_SESSION['scriptcase']['sc_apl_conf_lig']['form_sec_users']['new'] = 'off';
      }
      if (isset($this->NM_btn_update) && '' != $this->NM_btn_update && (!isset($_SESSION['scriptcase']['sc_apl_conf']['form_sec_users']['update']) || '' == $_SESSION['scriptcase']['sc_apl_conf']['form_sec_users']['update']))
      {
          if ('N' == $this->NM_btn_update)
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_sec_users']['update'] = 'off';
          }
          else
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_sec_users']['update'] = 'on';
          }
      }
      if (isset($this->NM_btn_delete) && '' != $this->NM_btn_delete && (!isset($_SESSION['scriptcase']['sc_apl_conf']['form_sec_users']['delete']) || '' == $_SESSION['scriptcase']['sc_apl_conf']['form_sec_users']['delete']))
      {
          if ('N' == $this->NM_btn_delete)
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_sec_users']['delete'] = 'off';
          }
          else
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_sec_users']['delete'] = 'on';
          }
      }
      if (isset($this->NM_btn_navega) && '' != $this->NM_btn_navega)
      {
          if ('N' == $this->NM_btn_navega)
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_sec_users']['first']   = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_sec_users']['back']    = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_sec_users']['forward'] = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_sec_users']['last']    = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_sec_users']['qsearch'] = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_sec_users']['summary'] = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_sec_users']['navpage'] = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_sec_users']['goto']    = 'off';
          }
          else
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_sec_users']['first']   = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_sec_users']['back']    = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_sec_users']['forward'] = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_sec_users']['last']    = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_sec_users']['qsearch'] = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_sec_users']['summary'] = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_sec_users']['navpage'] = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_sec_users']['goto']    = 'on';
          }
      }

      $this->nmgp_botoes['exit'] = "on";
      $this->nmgp_botoes['qsearch'] = "on";
      $this->nmgp_botoes['new'] = "on";
      $this->nmgp_botoes['insert'] = "on";
      $this->nmgp_botoes['copy'] = "off";
      $this->nmgp_botoes['update'] = "on";
      $this->nmgp_botoes['delete'] = "on";
      if ('total' == $this->form_paginacao)
      {
          $this->nmgp_botoes['first']   = "off";
          $this->nmgp_botoes['back']    = "off";
          $this->nmgp_botoes['forward'] = "off";
          $this->nmgp_botoes['last']    = "off";
          $this->nmgp_botoes['navpage'] = "off";
          $this->nmgp_botoes['goto']    = "off";
          $this->nmgp_botoes['qtline']  = "off";
      }
      else
      {
      $this->nmgp_botoes['first'] = "on";
      $this->nmgp_botoes['back'] = "on";
      $this->nmgp_botoes['forward'] = "on";
      $this->nmgp_botoes['last'] = "on";
      $this->nmgp_botoes['summary'] = "on";
      $this->nmgp_botoes['navpage'] = "on";
      $this->nmgp_botoes['goto'] = "off";
      $this->nmgp_botoes['qtline'] = "off";
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['iframe_filtro']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['iframe_filtro'] == "S")
      {
          $this->nmgp_botoes['exit'] = "off";
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_sec_users']['btn_display']) && !empty($_SESSION['scriptcase']['sc_apl_conf']['form_sec_users']['btn_display']))
      {
          foreach ($_SESSION['scriptcase']['sc_apl_conf']['form_sec_users']['btn_display'] as $NM_cada_btn => $NM_cada_opc)
          {
              $this->nmgp_botoes[$NM_cada_btn] = $NM_cada_opc;
          }
      }

      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_sec_users']['insert']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_sec_users']['insert'] != '')
      {
          $this->nmgp_botoes['new']    = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_sec_users']['insert'];
          $this->nmgp_botoes['insert'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_sec_users']['insert'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_sec_users']['new']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_sec_users']['new'] != '')
      {
          $this->nmgp_botoes['new']    = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_sec_users']['new'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_sec_users']['update']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_sec_users']['update'] != '')
      {
          $this->nmgp_botoes['update'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_sec_users']['update'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_sec_users']['delete']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_sec_users']['delete'] != '')
      {
          $this->nmgp_botoes['delete'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_sec_users']['delete'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_sec_users']['first']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_sec_users']['first'] != '')
      {
          $this->nmgp_botoes['first'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_sec_users']['first'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_sec_users']['back']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_sec_users']['back'] != '')
      {
          $this->nmgp_botoes['back'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_sec_users']['back'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_sec_users']['forward']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_sec_users']['forward'] != '')
      {
          $this->nmgp_botoes['forward'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_sec_users']['forward'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_sec_users']['last']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_sec_users']['last'] != '')
      {
          $this->nmgp_botoes['last'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_sec_users']['last'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_sec_users']['qsearch']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_sec_users']['qsearch'] != '')
      {
          $this->nmgp_botoes['qsearch'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_sec_users']['qsearch'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_sec_users']['summary']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_sec_users']['summary'] != '')
      {
          $this->nmgp_botoes['summary'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_sec_users']['summary'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_sec_users']['navpage']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_sec_users']['navpage'] != '')
      {
          $this->nmgp_botoes['navpage'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_sec_users']['navpage'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_sec_users']['goto']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_sec_users']['goto'] != '')
      {
          $this->nmgp_botoes['goto'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_sec_users']['goto'];
      }

      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['embutida_liga_form_insert']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['embutida_liga_form_insert'] != '')
      {
          $this->nmgp_botoes['new']    = $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['embutida_liga_form_insert'];
          $this->nmgp_botoes['insert'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['embutida_liga_form_insert'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['embutida_liga_form_update']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['embutida_liga_form_update'] != '')
      {
          $this->nmgp_botoes['update'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['embutida_liga_form_update'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['embutida_liga_form_delete']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['embutida_liga_form_delete'] != '')
      {
          $this->nmgp_botoes['delete'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['embutida_liga_form_delete'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['embutida_liga_form_btn_nav']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['embutida_liga_form_btn_nav'] != '')
      {
          $this->nmgp_botoes['first']   = $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['embutida_liga_form_btn_nav'];
          $this->nmgp_botoes['back']    = $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['embutida_liga_form_btn_nav'];
          $this->nmgp_botoes['forward'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['embutida_liga_form_btn_nav'];
          $this->nmgp_botoes['last']    = $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['embutida_liga_form_btn_nav'];
      }

      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_sec_users']['insert']) && $_SESSION['scriptcase']['sc_apl_conf']['form_sec_users']['insert'] != '')
      {
          $this->nmgp_botoes['new']    = $_SESSION['scriptcase']['sc_apl_conf']['form_sec_users']['insert'];
          $this->nmgp_botoes['insert'] = $_SESSION['scriptcase']['sc_apl_conf']['form_sec_users']['insert'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_sec_users']['update']) && $_SESSION['scriptcase']['sc_apl_conf']['form_sec_users']['update'] != '')
      {
          $this->nmgp_botoes['update'] = $_SESSION['scriptcase']['sc_apl_conf']['form_sec_users']['update'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_sec_users']['delete']) && $_SESSION['scriptcase']['sc_apl_conf']['form_sec_users']['delete'] != '')
      {
          $this->nmgp_botoes['delete'] = $_SESSION['scriptcase']['sc_apl_conf']['form_sec_users']['delete'];
      }

      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_sec_users']['field_display']) && !empty($_SESSION['scriptcase']['sc_apl_conf']['form_sec_users']['field_display']))
      {
          foreach ($_SESSION['scriptcase']['sc_apl_conf']['form_sec_users']['field_display'] as $NM_cada_field => $NM_cada_opc)
          {
              $this->nmgp_cmp_hidden[$NM_cada_field] = $NM_cada_opc;
              $this->NM_ajax_info['fieldDisplay'][$NM_cada_field] = $NM_cada_opc;
          }
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_sec_users']['field_readonly']) && !empty($_SESSION['scriptcase']['sc_apl_conf']['form_sec_users']['field_readonly']))
      {
          foreach ($_SESSION['scriptcase']['sc_apl_conf']['form_sec_users']['field_readonly'] as $NM_cada_field => $NM_cada_opc)
          {
              $this->nmgp_cmp_readonly[$NM_cada_field] = "on";
              $this->NM_ajax_info['readOnly'][$NM_cada_field] = $NM_cada_opc;
          }
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_sec_users']['exit']) && $_SESSION['scriptcase']['sc_apl_conf']['form_sec_users']['exit'] != '')
      {
          $_SESSION['scriptcase']['sc_url_saida'][$this->Ini->sc_page] = $_SESSION['scriptcase']['sc_apl_conf']['form_sec_users']['exit'];
      }
      $glo_senha_protect = (isset($_SESSION['scriptcase']['glo_senha_protect'])) ? $_SESSION['scriptcase']['glo_senha_protect'] : "S";
      $this->aba_iframe = false;
      if (isset($_SESSION['scriptcase']['sc_aba_iframe']))
      {
          foreach ($_SESSION['scriptcase']['sc_aba_iframe'] as $aba => $apls_aba)
          {
              if (in_array("form_sec_users", $apls_aba))
              {
                  $this->aba_iframe = true;
                  break;
              }
          }
      }
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['iframe_menu'] && (!isset($_SESSION['scriptcase']['menu_mobile']) || empty($_SESSION['scriptcase']['menu_mobile'])))
      {
          $this->aba_iframe = true;
      }
      $this->Ini->sc_Include($this->Ini->path_lib_php . "/nm_gp_limpa.php", "F", "nm_limpa_valor") ; 
      $this->Ini->sc_Include($this->Ini->path_libs . "/nm_gc.php", "F", "nm_gc") ; 
      if (!function_exists("SC_Mail_Image"))
      {
          include_once("form_sec_users_sc_mail_image.php");
      }
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

      if (is_file($this->Ini->path_aplicacao . 'form_sec_users_help.txt'))
      {
          $arr_link_webhelp = file($this->Ini->path_aplicacao . 'form_sec_users_help.txt');
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
          require_once($this->Ini->path_embutida . 'form_sec_users/form_sec_users_erro.class.php');
      }
      else
      { 
          require_once($this->Ini->path_aplicacao . "form_sec_users_erro.class.php"); 
      }
      $this->Erro      = new form_sec_users_erro();
      $this->Erro->Ini = $this->Ini;
      $this->proc_fast_search = false;
      if ($this->nmgp_opcao == "fast_search")  
      {
          $this->SC_fast_search($this->nmgp_fast_search, $this->nmgp_cond_fast_search, $this->nmgp_arg_fast_search);
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['opcao'] = "inicio";
          $this->nmgp_opcao = "inicio";
          $this->proc_fast_search = true;
      } 
      if ($nm_opc_lookup != "lookup" && $nm_opc_php != "formphp")
      { 
         if (empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['opcao']))
         { 
             if ($this->login_ != "")   
             { 
                 $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['opcao'] = "igual" ;  
             }   
         }   
      } 
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['opcao']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['opcao']) && empty($this->nmgp_refresh_fields))
      {
          $this->nmgp_opcao = $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['opcao'];  
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['opcao'] = "" ;  
          if ($this->nmgp_opcao == "edit_novo")  
          {
             $this->nmgp_opcao = "novo";
             $this->nm_flag_saida_novo = "S";
          }
      } 
      $this->nm_Start_new = false;
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_sec_users']['start']) && $_SESSION['scriptcase']['sc_apl_conf']['form_sec_users']['start'] == 'new')
      {
          $this->nmgp_opcao = "novo";
          $this->nm_Start_new = true;
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['opcao'] = "novo";
          unset($_SESSION['scriptcase']['sc_apl_conf']['form_sec_users']['start']);
      }
      if ($this->nmgp_opcao == "igual")  
      {
          $this->nmgp_opc_ant = $this->nmgp_opcao;
      } 
      else
      {
          $this->nmgp_opc_ant = $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['opc_ant'];
      } 
      if ($this->nmgp_opcao == "recarga" || $this->nmgp_opcao == "muda_form")  
      {
          $this->nmgp_botoes = $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['botoes'];
          $this->Nav_permite_ret = 0 != $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['inicio'];
          $this->Nav_permite_ava = $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['total'] != $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['final'];
      }
      else
      {
      }
      $this->nm_flag_iframe = false;
      if ($this->nmgp_opcao == "edit_novo")  
      {
          $this->nmgp_opcao = "novo";
          $this->nm_flag_saida_novo = "S";
      }
//
      $this->sc_evento = $this->nmgp_opcao;
   }

   function loadFieldConfig()
   {
      $this->field_config = array();
      //-- fecha_registro_
      $this->field_config['fecha_registro_']                 = array();
      $this->field_config['fecha_registro_']['date_format']  = $_SESSION['scriptcase']['reg_conf']['date_format'] . ';' . $_SESSION['scriptcase']['reg_conf']['time_format'];
      $this->field_config['fecha_registro_']['date_sep']     = $_SESSION['scriptcase']['reg_conf']['date_sep'];
      $this->field_config['fecha_registro_']['time_sep']     = $_SESSION['scriptcase']['reg_conf']['time_sep'];
      $this->field_config['fecha_registro_']['date_display'] = "ddmmaaaa;hhiiss";
      $this->new_date_format('DH', 'fecha_registro_');
      //-- ingreso_
      $this->field_config['ingreso_']               = array();
      $this->field_config['ingreso_']['symbol_grp'] = $_SESSION['scriptcase']['reg_conf']['grup_num'];
      $this->field_config['ingreso_']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['ingreso_']['symbol_dec'] = '';
      $this->field_config['ingreso_']['symbol_neg'] = $_SESSION['scriptcase']['reg_conf']['simb_neg'];
      $this->field_config['ingreso_']['format_neg'] = $_SESSION['scriptcase']['reg_conf']['neg_num'];
   }

   function controle()
   {
        global $nm_url_saida, $teste_validade, 
               $GLOBALS, $Campos_Crit, $Campos_Falta, $Campos_Erros, $sc_seq_vert, $sc_check_incl, 
               $glo_senha_protect, $nm_apl_dependente, $nm_form_submit, $sc_check_excl, $nm_opc_form_php, $nm_call_php, $nm_opc_lookup;


      $this->ini_controle();
      if ('' != $_SESSION['scriptcase']['change_regional_old'])
      {
          $_SESSION['scriptcase']['str_conf_reg'] = $_SESSION['scriptcase']['change_regional_old'];
          $this->Ini->regionalDefault($_SESSION['scriptcase']['str_conf_reg']);
          $this->loadFieldConfig();
          $this->nm_tira_formatacao();

          $_SESSION['scriptcase']['str_conf_reg'] = $_SESSION['scriptcase']['change_regional_new'];
          $this->Ini->regionalDefault($_SESSION['scriptcase']['str_conf_reg']);
          $this->loadFieldConfig();
          $guarda_formatado = $this->formatado;
          $this->nm_formatar_campos();
          $this->formatado = $guarda_formatado;

          $_SESSION['scriptcase']['change_regional_old'] = '';
          $_SESSION['scriptcase']['change_regional_new'] = '';
      }

      $Campos_Crit       = "";
      $Campos_erro       = "";
      $Campos_Falta      = array();
      $Campos_Erros      = array();
      $dir_raiz          = strrpos($_SERVER['PHP_SELF'],"/") ;  
      $dir_raiz          =  substr($_SERVER['PHP_SELF'], 0, $dir_raiz + 1) ;  
      $this->nm_location = $this->Ini->sc_protocolo . $this->Ini->server . $dir_raiz . "form_sec_users.php"; 
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['opc_edit'] = true;  
      $sc_contr_vert = $GLOBALS["sc_contr_vert"];
      $sc_seq_vert   = 1; 
      $sc_opc_salva  = $this->nmgp_opcao; 
      $sc_todas_Crit = "";
      $sc_check_excl = array(); 
      $sc_check_incl = array(); 
      if (is_array($GLOBALS["sc_check_vert"])) 
      { 
          if ($this->nmgp_opcao == "incluir" || ($this->nmgp_opcao == "recarga" && $this->nmgp_opc_ant == "novo"))
          {
              $sc_check_incl = $GLOBALS["sc_check_vert"]; 
          }
          elseif ($this->nmgp_opcao == "alterar" || $this->nmgp_opcao == "excluir" || $this->nmgp_opcao == "recarga")
          {
              $sc_check_excl = $GLOBALS["sc_check_vert"]; 
          }
      } 
      elseif ($this->nmgp_opcao == 'incluir' && isset($_POST['upload_file_row']) && '' != $_POST['upload_file_row'])
      {
          $sc_check_incl = array($_POST['upload_file_row']);
      }
      if (empty($this->nmgp_opcao)) 
      { 
          $this->nmgp_opcao = "inicio";
      } 
      if ($this->NM_ajax_flag && 'add_new_line' == $this->NM_ajax_opcao)
      {
         $this->nmgp_opcao = "novo";
         $this->nm_select_banco();
         $this->nm_gera_html();
         $this->NM_ajax_info['newline'] = form_sec_users_pack_protect_string(NM_charset_to_utf8($this->New_Line));
         $this->NM_close_db();
         form_sec_users_pack_ajax_response();
         exit;
      }
      if ($this->NM_ajax_flag && 'backup_line' == $this->NM_ajax_opcao)
      {
         $this->nmgp_opcao = "igual";
         $this->nm_tira_formatacao();
         $this->nm_select_banco();
         $this->ajax_return_values();
         $this->NM_close_db();
         form_sec_users_pack_ajax_response();
         exit;
      }
      if ($this->NM_ajax_flag && 'submit_form' == $this->NM_ajax_opcao)
      {
         if (isset($this->login_)) { $this->nm_limpa_alfa($this->login_); }
         if (isset($this->pswd_)) { $this->nm_limpa_alfa($this->pswd_); }
         if (isset($this->name_)) { $this->nm_limpa_alfa($this->name_); }
         if (isset($this->ci_)) { $this->nm_limpa_alfa($this->ci_); }
         if (isset($this->email_)) { $this->nm_limpa_alfa($this->email_); }
         if (isset($this->usr_active_)) { $this->nm_limpa_alfa($this->usr_active_); }
         if (isset($this->zona_)) { $this->nm_limpa_alfa($this->zona_); }
         if (isset($this->cod_provincia_)) { $this->nm_limpa_alfa($this->cod_provincia_); }
         if (isset($this->access_fa_)) { $this->nm_limpa_alfa($this->access_fa_); }
         if (isset($this->access_im_)) { $this->nm_limpa_alfa($this->access_im_); }
         if (isset($this->access_fp_)) { $this->nm_limpa_alfa($this->access_fp_); }
         if (isset($this->Sc_num_lin_alt) && $this->Sc_num_lin_alt > 0) 
         {
             $sc_seq_vert = $this->Sc_num_lin_alt;
         }
         if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['dados_form'][$sc_seq_vert]))
         {
             $this->nmgp_dados_form = $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['dados_form'][$sc_seq_vert];
             $this->activation_code_ = $this->nmgp_dados_form['activation_code_']; 
             $this->priv_admin_ = $this->nmgp_dados_form['priv_admin_']; 
             $this->fecha_registro_ = $this->nmgp_dados_form['fecha_registro_']; 
             $this->departamento_ = $this->nmgp_dados_form['departamento_']; 
             $this->ingreso_ = $this->nmgp_dados_form['ingreso_']; 
             $this->access_siu_ = $this->nmgp_dados_form['access_siu_']; 
         }
         $this->controle_form_vert();
         if ($Campos_Crit != "" || !empty($Campos_Falta) || $this->Campos_Mens_erro != "")
         {
             $this->NM_rollback_db();
              if ($this->NM_ajax_flag)
              {
                  if (!isset($this->NM_ajax_info['errList']['geral_form_sec_users']) || !is_array($this->NM_ajax_info['errList']['geral_form_sec_users']))
                  {
                      $this->NM_ajax_info['errList']['geral_form_sec_users'] = array();
                  }
                  if ($Campos_Crit != "")
                  {
                      $this->NM_ajax_info['errList']['geral_form_sec_users'][] = $Campos_Crit;
                  }
                  if (!empty($Campos_Falta))
                  {
                      $this->NM_ajax_info['errList']['geral_form_sec_users'][] = $this->Formata_Campos_Falta($Campos_Falta);
                  }
                  if ($this->Campos_Mens_erro != "")
                  {
                      $this->NM_ajax_info['errList']['geral_form_sec_users'][] = $this->Campos_Mens_erro;
                  }
                  $this->NM_gera_nav_page(); 
                  $this->NM_ajax_info['navPage'] = $this->SC_nav_page; 
              }
         }
         else
         {
             $this->NM_commit_db();
         }
         if ($this->nmgp_opcao != "recarga" && $this->nmgp_opcao != "muda_form" && !$this->Apl_com_erro)
         {
             $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['recarga'] = $this->nmgp_opcao;
          $this->nm_mens_form_upd = "Se ha actualizado correctamente la información.";
          $this->nm_mens_form_ins = "Se ha guardado correctamente la información.";
          $this->nm_mens_form_del = "Se ha eliminado correctamente la información.";
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['sc_redir_insert']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['sc_redir_insert'] == "ok")
          {
              if ($this->sc_teve_incl && empty($sc_todas_Crit))
              {
                  $this->NM_close_db(); 
                  $this->nmgp_redireciona(2); 
              }
          }
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['sc_redir_atualiz']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['sc_redir_atualiz'] == "ok")
          {
              if ($this->sc_teve_alt && empty($sc_todas_Crit))
              {
                  $this->NM_close_db(); 
                  $this->nmgp_redireciona(2); 
              }
              if ($this->sc_teve_incl && empty($sc_todas_Crit))
              {
                  $this->NM_close_db(); 
                  $this->nmgp_redireciona(2); 
              }
              if ($this->sc_teve_excl && empty($sc_todas_Crit))
              {
                  $this->NM_close_db(); 
                  $this->nmgp_redireciona(2); 
              }
          }
          if ($this->sc_teve_alt && empty($sc_todas_Crit))
          {
              $this->NM_close_db(); 
              $this->nm_tira_formatacao(); 
              $this->nm_gera_mensagem($this->nm_mens_form_upd, "form_sec_users.php", "", "login_?#?$this->login_?@?"); 
          }
          if ($this->sc_teve_incl && empty($sc_todas_Crit))
          {
              $this->NM_close_db(); 
              $this->nm_tira_formatacao(); 
              $this->nm_gera_mensagem($this->nm_mens_form_ins, "form_sec_users.php", "", "login_?#?$this->login_?@?"); 
          }
          if ($this->sc_teve_excl && empty($sc_todas_Crit))
          {
              $this->NM_close_db(); 
              $this->nm_tira_formatacao(); 
              $this->nm_gera_mensagem($this->nm_mens_form_del, "form_sec_users.php", "", "login_?#?$this->login_?@?nmgp_opcao?#?igual?@?"); 
          }
         }
         $this->NM_close_db();
         form_sec_users_pack_ajax_response();
         exit;
      }
      if ($this->NM_ajax_flag && 'validate_' == substr($this->NM_ajax_opcao, 0, 9))
      {
         $Campos_Crit  = "";
         $Campos_Falta = array();
         $Campos_Erros = array();
          if ('validate_usr_active_' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'usr_active_');
          }
          if ('validate_ci_' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'ci_');
          }
          if ('validate_name_' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'name_');
          }
          if ('validate_email_' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'email_');
          }
          if ('validate_login_' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'login_');
          }
          if ('validate_pswd_' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'pswd_');
          }
          if ('validate_access_fa_' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'access_fa_');
          }
          if ('validate_access_fp_' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'access_fp_');
          }
          if ('validate_access_im_' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'access_im_');
          }
          if ('validate_zona_' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'zona_');
          }
          if ('validate_cod_provincia_' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'cod_provincia_');
          }
          form_sec_users_pack_ajax_response();
          exit;
      }
      while ($sc_contr_vert > $sc_seq_vert) 
      { 
         $Campos_Crit  = "";
         $Campos_Falta = array();
         $Campos_Erros = array();
         $this->usr_active_ = $GLOBALS["usr_active_" . $sc_seq_vert]; 
         $this->ci_ = $GLOBALS["ci_" . $sc_seq_vert]; 
         $this->name_ = $GLOBALS["name_" . $sc_seq_vert]; 
         $this->email_ = $GLOBALS["email_" . $sc_seq_vert]; 
         $this->login_ = $GLOBALS["login_" . $sc_seq_vert]; 
         $this->pswd_ = $GLOBALS["pswd_" . $sc_seq_vert]; 
         $this->access_fa_ = $GLOBALS["access_fa_" . $sc_seq_vert]; 
         $this->access_fp_ = $GLOBALS["access_fp_" . $sc_seq_vert]; 
         $this->access_im_ = $GLOBALS["access_im_" . $sc_seq_vert]; 
         $this->zona_ = $GLOBALS["zona_" . $sc_seq_vert]; 
         $this->cod_provincia_ = $GLOBALS["cod_provincia_" . $sc_seq_vert]; 
         if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['dados_form'][$sc_seq_vert]))
         {
             $this->nmgp_dados_form = $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['dados_form'][$sc_seq_vert];
             $this->activation_code_ = $this->nmgp_dados_form['activation_code_']; 
             $this->priv_admin_ = $this->nmgp_dados_form['priv_admin_']; 
             $this->fecha_registro_ = $this->nmgp_dados_form['fecha_registro_']; 
             $this->departamento_ = $this->nmgp_dados_form['departamento_']; 
             $this->ingreso_ = $this->nmgp_dados_form['ingreso_']; 
             $this->access_siu_ = $this->nmgp_dados_form['access_siu_']; 
         }
         if (isset($this->login_)) { $this->nm_limpa_alfa($this->login_); }
         if (isset($this->pswd_)) { $this->nm_limpa_alfa($this->pswd_); }
         if (isset($this->name_)) { $this->nm_limpa_alfa($this->name_); }
         if (isset($this->ci_)) { $this->nm_limpa_alfa($this->ci_); }
         if (isset($this->email_)) { $this->nm_limpa_alfa($this->email_); }
         if (isset($this->usr_active_)) { $this->nm_limpa_alfa($this->usr_active_); }
         if (isset($this->zona_)) { $this->nm_limpa_alfa($this->zona_); }
         if (isset($this->cod_provincia_)) { $this->nm_limpa_alfa($this->cod_provincia_); }
         if (isset($this->access_fa_)) { $this->nm_limpa_alfa($this->access_fa_); }
         if (isset($this->access_im_)) { $this->nm_limpa_alfa($this->access_im_); }
         if (isset($this->access_fp_)) { $this->nm_limpa_alfa($this->access_fp_); }
         if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['dados_form'])) 
         {
            $this->nmgp_dados_form = $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['dados_form'][$sc_seq_vert];
         }
         if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['dados_select'])) 
         {
            $this->nmgp_dados_select = $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['dados_select'][$sc_seq_vert];
         }
         if ($this->nmgp_opcao != "recarga" && in_array($sc_seq_vert, $sc_check_excl))
         {
             $this->nmgp_opcao = "excluir";
         }
         if ($this->nmgp_opcao == "incluir" && !in_array($sc_seq_vert, $sc_check_incl))
         { }
         else
         {
             $this->controle_form_vert(); 
             $this->nmgp_opcao = $sc_opc_salva; 
             if ($this->nmgp_opcao != "recarga"  && $this->nmgp_opcao != "muda_form" && ($Campos_Crit != "" || !empty($Campos_Falta) || $this->Campos_Mens_erro != ""))
             {
                 $sc_todas_Crit .= (!empty($sc_todas_Crit)) ? "<br>" : ""; 
                 $sc_todas_Crit .= "<B>" . $this->Ini->Nm_lang['lang_errm_line'] . $sc_seq_vert . "</B>: "; 
                 $sc_todas_Crit .= $this->Formata_Erros($Campos_Crit, $Campos_Falta, $Campos_Erros);
                 $this->Campos_Mens_erro = ""; 
             }
             if ($this->nmgp_opcao != "recarga") 
             {
                $this->nm_guardar_campos();
                $this->nm_formatar_campos();
             }
             $this->form_vert_form_sec_users[$sc_seq_vert]['usr_active_'] =  $this->usr_active_; 
             $this->form_vert_form_sec_users[$sc_seq_vert]['ci_'] =  $this->ci_; 
             $this->form_vert_form_sec_users[$sc_seq_vert]['name_'] =  $this->name_; 
             $this->form_vert_form_sec_users[$sc_seq_vert]['email_'] =  $this->email_; 
             $this->form_vert_form_sec_users[$sc_seq_vert]['login_'] =  $this->login_; 
             $this->form_vert_form_sec_users[$sc_seq_vert]['pswd_'] =  $this->pswd_; 
             $this->form_vert_form_sec_users[$sc_seq_vert]['access_fa_'] =  $this->access_fa_; 
             $this->form_vert_form_sec_users[$sc_seq_vert]['access_fp_'] =  $this->access_fp_; 
             $this->form_vert_form_sec_users[$sc_seq_vert]['access_im_'] =  $this->access_im_; 
             $this->form_vert_form_sec_users[$sc_seq_vert]['zona_'] =  $this->zona_; 
             $this->form_vert_form_sec_users[$sc_seq_vert]['cod_provincia_'] =  $this->cod_provincia_; 
             $this->form_vert_form_sec_users[$sc_seq_vert]['activation_code_'] =  $this->activation_code_; 
             $this->form_vert_form_sec_users[$sc_seq_vert]['priv_admin_'] =  $this->priv_admin_; 
             $this->form_vert_form_sec_users[$sc_seq_vert]['fecha_registro_'] =  $this->fecha_registro_; 
             $this->form_vert_form_sec_users[$sc_seq_vert]['fecha_registro__hora'] =  $this->fecha_registro__hora; 
             $this->form_vert_form_sec_users[$sc_seq_vert]['departamento_'] =  $this->departamento_; 
             $this->form_vert_form_sec_users[$sc_seq_vert]['ingreso_'] =  $this->ingreso_; 
             $this->form_vert_form_sec_users[$sc_seq_vert]['access_siu_'] =  $this->access_siu_; 
         }
         $sc_seq_vert++; 
      } 
      if (!empty($sc_todas_Crit)) 
      { 
          $this->Erro->mensagem(__FILE__, __LINE__, "critica", $sc_todas_Crit); 
          if ($this->nmgp_opcao == "incluir")
          { 
              $this->nmgp_opcao = "novo"; 
          }
      } 
      elseif ($this->nmgp_opcao == "incluir")
      { 
          $this->nmgp_opcao = "novo"; 
      }
      if ($this->nmgp_opcao == 'incluir' && isset($_POST['upload_file_row']) && '' != $_POST['upload_file_row'])
      {
          $this->nmgp_opcao = 'igual';
      }
      if ($this->nmgp_opcao != "recarga" && $this->nmgp_opcao != "muda_form") 
      { 
          if ($this->sc_teve_incl) 
          { 
              $this->sc_after_all_insert = true;
          }
          if ($this->sc_teve_alt || $this->sc_teve_excl) 
          { 
              $this->sc_after_all_update = true;
          }
          if (empty($sc_todas_Crit)) 
          { 
              $this->NM_commit_db(); 
              $this->nm_select_banco();
              $sc_check_excl = array(); 
          } 
          else
          { 
              $this->NM_rollback_db(); 
          } 
      } 
      if ($this->nmgp_opcao == "recarga") 
      { 
          $this->NM_gera_nav_page(); 
      } 
      if ($this->NM_ajax_flag && ('navigate_form' == $this->NM_ajax_opcao || !empty($this->nmgp_refresh_fields)))
      {
          $this->ajax_return_values();
          $this->ajax_add_parameters();
          $this->NM_close_db();
          form_sec_users_pack_ajax_response();
          exit;
      }
      if ($this->NM_ajax_flag && 'table_refresh' == $this->NM_ajax_opcao)
      {
          $this->nm_gera_html();
          $this->NM_ajax_info['tableRefresh'] = NM_charset_to_utf8($this->Table_refresh . $this->New_Line) . '</table>';
          $this->NM_ajax_info['navStatus']['ret'] = $this->Nav_permite_ret ? 'S' : 'N';
          $this->NM_ajax_info['navStatus']['ava'] = $this->Nav_permite_ava ? 'S' : 'N';
          $this->NM_ajax_info['rsSize'] = sizeof($this->form_vert_form_sec_users);
          $this->NM_ajax_info['fldList']['login_']['keyVal'] = htmlentities($this->nmgp_dados_form['login_'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);
          $this->NM_close_db();
          form_sec_users_pack_ajax_response();
          exit;
      }
      if ($this->nmgp_opcao != "recarga" && $this->nmgp_opcao != "muda_form" && !$this->Apl_com_erro)
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['recarga'] = $this->nmgp_opcao;
          $this->nm_mens_form_upd = "Se ha actualizado correctamente la información.";
          $this->nm_mens_form_ins = "Se ha guardado correctamente la información.";
          $this->nm_mens_form_del = "Se ha eliminado correctamente la información.";
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['sc_redir_insert']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['sc_redir_insert'] == "ok")
          {
              if ($this->sc_teve_incl && empty($sc_todas_Crit))
              {
                  $this->NM_close_db(); 
                  $this->nmgp_redireciona(2); 
              }
          }
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['sc_redir_atualiz']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['sc_redir_atualiz'] == "ok")
          {
              if ($this->sc_teve_alt && empty($sc_todas_Crit))
              {
                  $this->NM_close_db(); 
                  $this->nmgp_redireciona(2); 
              }
              if ($this->sc_teve_incl && empty($sc_todas_Crit))
              {
                  $this->NM_close_db(); 
                  $this->nmgp_redireciona(2); 
              }
              if ($this->sc_teve_excl && empty($sc_todas_Crit))
              {
                  $this->NM_close_db(); 
                  $this->nmgp_redireciona(2); 
              }
          }
          if ($this->sc_teve_alt && empty($sc_todas_Crit))
          {
              $this->NM_close_db(); 
              $this->nm_tira_formatacao(); 
              $this->nm_gera_mensagem($this->nm_mens_form_upd, "form_sec_users.php", "", "login_?#?$this->login_?@?"); 
          }
          if ($this->sc_teve_incl && empty($sc_todas_Crit))
          {
              $this->NM_close_db(); 
              $this->nm_tira_formatacao(); 
              $this->nm_gera_mensagem($this->nm_mens_form_ins, "form_sec_users.php", "", "login_?#?$this->login_?@?"); 
          }
          if ($this->sc_teve_excl && empty($sc_todas_Crit))
          {
              $this->NM_close_db(); 
              $this->nm_tira_formatacao(); 
              $this->nm_gera_mensagem($this->nm_mens_form_del, "form_sec_users.php", "", "login_?#?$this->login_?@?nmgp_opcao?#?igual?@?"); 
          }
      }
      $this->nm_todas_criticas = $sc_todas_Crit;
      $this->nm_gera_html();
      $this->NM_close_db(); 
   }
   function controle_form_vert()
   {
     global $nm_opc_lookup,$Campos_Crit, $Campos_Falta, $Campos_Erros, 
            $glo_senha_protect, $nm_apl_dependente, $nm_form_submit;

//
//-----> 
//
      if (isset($this->sc_inline_call) && 'Y' == $this->sc_inline_call)
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['inline_form_seq'] = $this->sc_seq_row;
          $this->nm_tira_formatacao();
      }
      if ($this->nmgp_opcao == "recarga" || $this->nmgp_opcao == "muda_form") 
      {
          $this->nm_tira_formatacao();
          $nm_sc_sv_opcao = $this->nmgp_opcao; 
          $this->nmgp_opcao = "nada"; 
          $this->nm_acessa_banco();
          if ($this->NM_ajax_flag)
          {
              $this->ajax_return_values();
              form_sec_users_pack_ajax_response();
              exit;
          }
          $this->nm_formatar_campos();
          $this->nmgp_opcao = $nm_sc_sv_opcao; 
          return; 
      }
      if ($this->nmgp_opcao == "incluir" || $this->nmgp_opcao == "alterar" || $this->nmgp_opcao == "excluir") 
      {
          $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros) ; 
          $_SESSION['scriptcase']['form_sec_users']['contr_erro'] = 'off';
          if ($Campos_Crit != "") 
          {
              $Campos_Crit = $this->Ini->Nm_lang['lang_errm_flds'] . ' ' . $Campos_Crit ; 
          }
          if ($Campos_Crit != "" || !empty($Campos_Falta) || $this->Campos_Mens_erro != "")
          {
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
           case 'usr_active_':
               return "Estado";
               break;
           case 'ci_':
               return "Cédula";
               break;
           case 'name_':
               return "Nombres";
               break;
           case 'email_':
               return "Correo Electrónico";
               break;
           case 'login_':
               return "Usuario";
               break;
           case 'pswd_':
               return "Contraseña";
               break;
           case 'access_fa_':
               return "F.A.";
               break;
           case 'access_fp_':
               return "F.P.";
               break;
           case 'access_im_':
               return "I.M.";
               break;
           case 'zona_':
               return "Zona";
               break;
           case 'cod_provincia_':
               return "Provincia";
               break;
           case 'activation_code_':
               return "" . $this->Ini->Nm_lang['lang_sec_users_fld_activation_code'] . "";
               break;
           case 'priv_admin_':
               return "" . $this->Ini->Nm_lang['lang_sec_users_fld_priv_admin'] . "";
               break;
           case 'fecha_registro_':
               return "Fecha Registro";
               break;
           case 'departamento_':
               return "Departamento";
               break;
           case 'ingreso_':
               return "Ingreso";
               break;
           case 'access_siu_':
               return "Access Siu";
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
      if ('' == $filtro || 'usr_active_' == $filtro)
        $this->ValidateField_usr_active_($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'ci_' == $filtro)
        $this->ValidateField_ci_($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'name_' == $filtro)
        $this->ValidateField_name_($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'email_' == $filtro)
        $this->ValidateField_email_($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'login_' == $filtro)
        $this->ValidateField_login_($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'pswd_' == $filtro)
        $this->ValidateField_pswd_($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'access_fa_' == $filtro)
        $this->ValidateField_access_fa_($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'access_fp_' == $filtro)
        $this->ValidateField_access_fp_($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'access_im_' == $filtro)
        $this->ValidateField_access_im_($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'zona_' == $filtro)
        $this->ValidateField_zona_($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'cod_provincia_' == $filtro)
        $this->ValidateField_cod_provincia_($Campos_Crit, $Campos_Falta, $Campos_Erros);

      if (!isset($this->NM_ajax_flag) || 'validate_' != substr($this->NM_ajax_opcao, 0, 9))
      {
      $_SESSION['scriptcase']['form_sec_users']['contr_erro'] = 'on';
   

	

$_SESSION['scriptcase']['form_sec_users']['contr_erro'] = 'off'; 
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
   }

    function ValidateField_usr_active_(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->usr_active_ == "" && $this->nmgp_opcao != "excluir" && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['php_cmp_required']['usr_active_']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['php_cmp_required']['usr_active_'] == "on"))
      {
          $Campos_Falta[] = "Estado" ; 
          if (!isset($Campos_Erros['usr_active_']))
          {
              $Campos_Erros['usr_active_'] = array();
          }
          $Campos_Erros['usr_active_'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
          if (!isset($this->NM_ajax_info['errList']['usr_active_']) || !is_array($this->NM_ajax_info['errList']['usr_active_']))
          {
              $this->NM_ajax_info['errList']['usr_active_'] = array();
          }
          $this->NM_ajax_info['errList']['usr_active_'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
      }
          if (!empty($this->usr_active_) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['Lookup_usr_active_']) && !in_array($this->usr_active_, $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['Lookup_usr_active_']))
          {
              $Campos_Crit .= $this->Ini->Nm_lang['lang_errm_ajax_data'];
              if (!isset($Campos_Erros['usr_active_']))
              {
                  $Campos_Erros['usr_active_'] = array();
              }
              $Campos_Erros['usr_active_'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
              if (!isset($this->NM_ajax_info['errList']['usr_active_']) || !is_array($this->NM_ajax_info['errList']['usr_active_']))
              {
                  $this->NM_ajax_info['errList']['usr_active_'] = array();
              }
              $this->NM_ajax_info['errList']['usr_active_'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
          }
    } // ValidateField_usr_active_

    function ValidateField_ci_(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir" && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['php_cmp_required']['ci_']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['php_cmp_required']['ci_'] == "on")) 
      { 
          if ($this->ci_ == "")  
          { 
              $Campos_Falta[] =  "Cédula" ; 
              if (!isset($Campos_Erros['ci_']))
              {
                  $Campos_Erros['ci_'] = array();
              }
              $Campos_Erros['ci_'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
                  if (!isset($this->NM_ajax_info['errList']['ci_']) || !is_array($this->NM_ajax_info['errList']['ci_']))
                  {
                      $this->NM_ajax_info['errList']['ci_'] = array();
                  }
                  $this->NM_ajax_info['errList']['ci_'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
          } 
      } 
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->ci_) > 10) 
          { 
              $Campos_Crit .= "Cédula " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 10 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['ci_']))
              {
                  $Campos_Erros['ci_'] = array();
              }
              $Campos_Erros['ci_'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 10 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['ci_']) || !is_array($this->NM_ajax_info['errList']['ci_']))
              {
                  $this->NM_ajax_info['errList']['ci_'] = array();
              }
              $this->NM_ajax_info['errList']['ci_'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 10 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
      $Teste_trab = function_exists('mb_strtoupper') ? mb_strtoupper("0123456789") : strtoupper("0123456789") ;  
      $Teste_trab = $Teste_trab . chr(10) . chr(13) ; 
      $Teste_compara = function_exists('mb_strtoupper') ? mb_strtoupper($this->ci_) : strtoupper($this->ci_) ; 
      if ($this->nmgp_opcao != "excluir") 
      { 
          $Teste_critica = 0 ; 
          for ($x = 0; $x < strlen($this->ci_); $x++) 
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
              $Campos_Crit .= "Cédula " . $this->Ini->Nm_lang['lang_errm_ivch']; 
              if (!isset($Campos_Erros['ci_']))
              {
                  $Campos_Erros['ci_'] = array();
              }
              $Campos_Erros['ci_'][] = $this->Ini->Nm_lang['lang_errm_ivch'];
              if (!isset($this->NM_ajax_info['errList']['ci_']) || !is_array($this->NM_ajax_info['errList']['ci_']))
              {
                  $this->NM_ajax_info['errList']['ci_'] = array();
              }
              $this->NM_ajax_info['errList']['ci_'][] = $this->Ini->Nm_lang['lang_errm_ivch'];
          } 
      } 
    } // ValidateField_ci_

    function ValidateField_name_(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      $this->name_ = function_exists('mb_strtoupper') ? mb_strtoupper($this->name_) : strtoupper($this->name_) ; 
      if ($this->nmgp_opcao != "excluir" && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['php_cmp_required']['name_']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['php_cmp_required']['name_'] == "on")) 
      { 
          if ($this->name_ == "")  
          { 
              $Campos_Falta[] =  "Nombres" ; 
              if (!isset($Campos_Erros['name_']))
              {
                  $Campos_Erros['name_'] = array();
              }
              $Campos_Erros['name_'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
                  if (!isset($this->NM_ajax_info['errList']['name_']) || !is_array($this->NM_ajax_info['errList']['name_']))
                  {
                      $this->NM_ajax_info['errList']['name_'] = array();
                  }
                  $this->NM_ajax_info['errList']['name_'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
          } 
      } 
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->name_) > 32767) 
          { 
              $Campos_Crit .= "Nombres " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 32767 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['name_']))
              {
                  $Campos_Erros['name_'] = array();
              }
              $Campos_Erros['name_'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 32767 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['name_']) || !is_array($this->NM_ajax_info['errList']['name_']))
              {
                  $this->NM_ajax_info['errList']['name_'] = array();
              }
              $this->NM_ajax_info['errList']['name_'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 32767 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
    } // ValidateField_name_

    function ValidateField_email_(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (trim($this->email_) != "")  
          { 
              if ($teste_validade->Email($this->email_) == false)  
              { 
                      $Campos_Crit .= "Correo Electrónico; " ; 
                  if (!isset($Campos_Erros['email_']))
                  {
                      $Campos_Erros['email_'] = array();
                  }
                  $Campos_Erros['email_'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                      if (!isset($this->NM_ajax_info['errList']['email_']) || !is_array($this->NM_ajax_info['errList']['email_']))
                      {
                          $this->NM_ajax_info['errList']['email_'] = array();
                      }
                      $this->NM_ajax_info['errList']['email_'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
           elseif (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['php_cmp_required']['email_']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['php_cmp_required']['email_'] == "on") 
          { 
              $Campos_Falta[] = "Correo Electrónico" ; 
              if (!isset($Campos_Erros['email_']))
              {
                  $Campos_Erros['email_'] = array();
              }
              $Campos_Erros['email_'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
                  if (!isset($this->NM_ajax_info['errList']['email_']) || !is_array($this->NM_ajax_info['errList']['email_']))
                  {
                      $this->NM_ajax_info['errList']['email_'] = array();
                  }
                  $this->NM_ajax_info['errList']['email_'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
          } 
      } 
    } // ValidateField_email_

    function ValidateField_login_(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      $this->login_ = function_exists('mb_strtolower') ? mb_strtolower($this->login_) : strtolower($this->login_) ; 
      if ($this->nmgp_opcao != "excluir" && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['php_cmp_required']['login_']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['php_cmp_required']['login_'] == "on")) 
      { 
          if ($this->login_ == "")  
          { 
              $Campos_Falta[] =  "Usuario" ; 
              if (!isset($Campos_Erros['login_']))
              {
                  $Campos_Erros['login_'] = array();
              }
              $Campos_Erros['login_'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
                  if (!isset($this->NM_ajax_info['errList']['login_']) || !is_array($this->NM_ajax_info['errList']['login_']))
                  {
                      $this->NM_ajax_info['errList']['login_'] = array();
                  }
                  $this->NM_ajax_info['errList']['login_'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
          } 
      } 
      if ($this->nmgp_opcao == "incluir")
      { 
          if (NM_utf8_strlen($this->login_) > 150) 
          { 
              $Campos_Crit .= "Usuario " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 150 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['login_']))
              {
                  $Campos_Erros['login_'] = array();
              }
              $Campos_Erros['login_'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 150 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['login_']) || !is_array($this->NM_ajax_info['errList']['login_']))
              {
                  $this->NM_ajax_info['errList']['login_'] = array();
              }
              $this->NM_ajax_info['errList']['login_'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 150 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
    } // ValidateField_login_

    function ValidateField_pswd_(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      $this->pswd_ = function_exists('mb_strtolower') ? mb_strtolower($this->pswd_) : strtolower($this->pswd_) ; 
      if ($this->nmgp_opcao != "excluir" && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['php_cmp_required']['pswd_']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['php_cmp_required']['pswd_'] == "on")) 
      { 
          if ($this->pswd_ == "")  
          { 
              $Campos_Falta[] =  "Contraseña" ; 
              if (!isset($Campos_Erros['pswd_']))
              {
                  $Campos_Erros['pswd_'] = array();
              }
              $Campos_Erros['pswd_'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
                  if (!isset($this->NM_ajax_info['errList']['pswd_']) || !is_array($this->NM_ajax_info['errList']['pswd_']))
                  {
                      $this->NM_ajax_info['errList']['pswd_'] = array();
                  }
                  $this->NM_ajax_info['errList']['pswd_'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
          } 
      } 
      if ($this->nmgp_opcao == "incluir")
      { 
          if (NM_utf8_strlen($this->pswd_) > 150) 
          { 
              $Campos_Crit .= "Contraseña " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 150 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['pswd_']))
              {
                  $Campos_Erros['pswd_'] = array();
              }
              $Campos_Erros['pswd_'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 150 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['pswd_']) || !is_array($this->NM_ajax_info['errList']['pswd_']))
              {
                  $this->NM_ajax_info['errList']['pswd_'] = array();
              }
              $this->NM_ajax_info['errList']['pswd_'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 150 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
    } // ValidateField_pswd_

    function ValidateField_access_fa_(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->access_fa_ == "" && $this->nmgp_opcao != "excluir")
      { 
      } 
      if ($this->access_fa_ != "")
      { 
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['Lookup_access_fa_']) && !in_array($this->access_fa_, $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['Lookup_access_fa_']))
          {
              $Campos_Crit .= $this->Ini->Nm_lang['lang_errm_ajax_data'];
              if (!isset($Campos_Erros['access_fa_']))
              {
                  $Campos_Erros['access_fa_'] = array();
              }
              $Campos_Erros['access_fa_'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
              if (!isset($this->NM_ajax_info['errList']['access_fa_']) || !is_array($this->NM_ajax_info['errList']['access_fa_']))
              {
                  $this->NM_ajax_info['errList']['access_fa_'] = array();
              }
              $this->NM_ajax_info['errList']['access_fa_'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
          }
      }
    } // ValidateField_access_fa_

    function ValidateField_access_fp_(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->access_fp_ == "" && $this->nmgp_opcao != "excluir")
      { 
      } 
      if ($this->access_fp_ != "")
      { 
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['Lookup_access_fp_']) && !in_array($this->access_fp_, $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['Lookup_access_fp_']))
          {
              $Campos_Crit .= $this->Ini->Nm_lang['lang_errm_ajax_data'];
              if (!isset($Campos_Erros['access_fp_']))
              {
                  $Campos_Erros['access_fp_'] = array();
              }
              $Campos_Erros['access_fp_'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
              if (!isset($this->NM_ajax_info['errList']['access_fp_']) || !is_array($this->NM_ajax_info['errList']['access_fp_']))
              {
                  $this->NM_ajax_info['errList']['access_fp_'] = array();
              }
              $this->NM_ajax_info['errList']['access_fp_'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
          }
      }
    } // ValidateField_access_fp_

    function ValidateField_access_im_(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->access_im_ == "" && $this->nmgp_opcao != "excluir")
      { 
      } 
      if ($this->access_im_ != "")
      { 
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['Lookup_access_im_']) && !in_array($this->access_im_, $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['Lookup_access_im_']))
          {
              $Campos_Crit .= $this->Ini->Nm_lang['lang_errm_ajax_data'];
              if (!isset($Campos_Erros['access_im_']))
              {
                  $Campos_Erros['access_im_'] = array();
              }
              $Campos_Erros['access_im_'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
              if (!isset($this->NM_ajax_info['errList']['access_im_']) || !is_array($this->NM_ajax_info['errList']['access_im_']))
              {
                  $this->NM_ajax_info['errList']['access_im_'] = array();
              }
              $this->NM_ajax_info['errList']['access_im_'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
          }
      }
    } // ValidateField_access_im_

    function ValidateField_zona_(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->zona_ == "" && $this->nmgp_opcao != "excluir" && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['php_cmp_required']['zona_']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['php_cmp_required']['zona_'] == "on"))
      {
          $Campos_Falta[] = "Zona" ; 
          if (!isset($Campos_Erros['zona_']))
          {
              $Campos_Erros['zona_'] = array();
          }
          $Campos_Erros['zona_'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
          if (!isset($this->NM_ajax_info['errList']['zona_']) || !is_array($this->NM_ajax_info['errList']['zona_']))
          {
              $this->NM_ajax_info['errList']['zona_'] = array();
          }
          $this->NM_ajax_info['errList']['zona_'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
      }
          if (!empty($this->zona_) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['Lookup_zona_']) && !in_array($this->zona_, $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['Lookup_zona_']))
          {
              $Campos_Crit .= $this->Ini->Nm_lang['lang_errm_ajax_data'];
              if (!isset($Campos_Erros['zona_']))
              {
                  $Campos_Erros['zona_'] = array();
              }
              $Campos_Erros['zona_'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
              if (!isset($this->NM_ajax_info['errList']['zona_']) || !is_array($this->NM_ajax_info['errList']['zona_']))
              {
                  $this->NM_ajax_info['errList']['zona_'] = array();
              }
              $this->NM_ajax_info['errList']['zona_'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
          }
    } // ValidateField_zona_

    function ValidateField_cod_provincia_(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->cod_provincia_ == "" && $this->nmgp_opcao != "excluir" && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['php_cmp_required']['cod_provincia_']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['php_cmp_required']['cod_provincia_'] == "on"))
      {
          $Campos_Falta[] = "Provincia" ; 
          if (!isset($Campos_Erros['cod_provincia_']))
          {
              $Campos_Erros['cod_provincia_'] = array();
          }
          $Campos_Erros['cod_provincia_'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
          if (!isset($this->NM_ajax_info['errList']['cod_provincia_']) || !is_array($this->NM_ajax_info['errList']['cod_provincia_']))
          {
              $this->NM_ajax_info['errList']['cod_provincia_'] = array();
          }
          $this->NM_ajax_info['errList']['cod_provincia_'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
      }
          if (!empty($this->cod_provincia_) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['Lookup_cod_provincia_']) && !in_array($this->cod_provincia_, $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['Lookup_cod_provincia_']))
          {
              $Campos_Crit .= $this->Ini->Nm_lang['lang_errm_ajax_data'];
              if (!isset($Campos_Erros['cod_provincia_']))
              {
                  $Campos_Erros['cod_provincia_'] = array();
              }
              $Campos_Erros['cod_provincia_'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
              if (!isset($this->NM_ajax_info['errList']['cod_provincia_']) || !is_array($this->NM_ajax_info['errList']['cod_provincia_']))
              {
                  $this->NM_ajax_info['errList']['cod_provincia_'] = array();
              }
              $this->NM_ajax_info['errList']['cod_provincia_'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
          }
    } // ValidateField_cod_provincia_

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
    $this->nmgp_dados_form['usr_active_'] = $this->usr_active_;
    $this->nmgp_dados_form['ci_'] = $this->ci_;
    $this->nmgp_dados_form['name_'] = $this->name_;
    $this->nmgp_dados_form['email_'] = $this->email_;
    $this->nmgp_dados_form['login_'] = $this->login_;
    $this->nmgp_dados_form['pswd_'] = $this->pswd_;
    $this->nmgp_dados_form['access_fa_'] = $this->access_fa_;
    $this->nmgp_dados_form['access_fp_'] = $this->access_fp_;
    $this->nmgp_dados_form['access_im_'] = $this->access_im_;
    $this->nmgp_dados_form['zona_'] = $this->zona_;
    $this->nmgp_dados_form['cod_provincia_'] = $this->cod_provincia_;
    $this->nmgp_dados_form['activation_code_'] = $this->activation_code_;
    $this->nmgp_dados_form['priv_admin_'] = $this->priv_admin_;
    $this->nmgp_dados_form['fecha_registro_'] = $this->fecha_registro_;
    $this->nmgp_dados_form['departamento_'] = $this->departamento_;
    $this->nmgp_dados_form['ingreso_'] = $this->ingreso_;
    $this->nmgp_dados_form['access_siu_'] = $this->access_siu_;
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['dados_form'][$sc_seq_vert] = $this->nmgp_dados_form;
   }
   function nm_tira_formatacao()
   {
      global $nm_form_submit;
         $this->formatado = false;
      nm_limpa_data($this->fecha_registro_, $this->field_config['fecha_registro_']['date_sep']) ; 
      nm_limpa_hora($this->fecha_registro__hora, $this->field_config['fecha_registro_']['time_sep']) ; 
      nm_limpa_numero($this->ingreso_, $this->field_config['ingreso_']['symbol_grp']) ; 
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
      if ($Nome_Campo == "ingreso_")
      {
          nm_limpa_numero($this->ingreso_, $this->field_config['ingreso_']['symbol_grp']) ; 
      }
   }
   function nm_formatar_campos($format_fields = array())
   {
      global $nm_form_submit;
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
          $this->ajax_return_values_all_vert();
          if ('navigate_form' == $this->NM_ajax_opcao)
          {
              $this->NM_ajax_info['clearUpload']      = 'S';
              $this->NM_ajax_info['navStatus']['ret'] = $this->Nav_permite_ret ? 'S' : 'N';
              $this->NM_ajax_info['navStatus']['ava'] = $this->Nav_permite_ava ? 'S' : 'N';
              $this->NM_ajax_info['fldList']['login_']['keyVal'] = form_sec_users_pack_protect_string($this->nmgp_dados_form['login_']);
          }
   } // ajax_return_values
   function ajax_return_values_all_vert()
   {
          if (isset($this->nmgp_refresh_fields) && isset($this->nmgp_refresh_row) && '' != $this->nmgp_refresh_row)
          {
              $this->form_vert_form_sec_users[$this->nmgp_refresh_row] = $this->NM_ajax_info['param'];
              if (isset($this->Embutida_ronly) && $this->Embutida_ronly)
              {
                  if (isset($this->NM_ajax_changed['usr_active_']) && $this->NM_ajax_changed['usr_active_'])
                  {
                      $this->form_vert_form_sec_users[$this->nmgp_refresh_row]['usr_active_'] = $this->usr_active_;
                  }
                  if (isset($this->NM_ajax_changed['ci_']) && $this->NM_ajax_changed['ci_'])
                  {
                      $this->form_vert_form_sec_users[$this->nmgp_refresh_row]['ci_'] = $this->ci_;
                  }
                  if (isset($this->NM_ajax_changed['name_']) && $this->NM_ajax_changed['name_'])
                  {
                      $this->form_vert_form_sec_users[$this->nmgp_refresh_row]['name_'] = $this->name_;
                  }
                  if (isset($this->NM_ajax_changed['email_']) && $this->NM_ajax_changed['email_'])
                  {
                      $this->form_vert_form_sec_users[$this->nmgp_refresh_row]['email_'] = $this->email_;
                  }
                  if (isset($this->NM_ajax_changed['login_']) && $this->NM_ajax_changed['login_'])
                  {
                      $this->form_vert_form_sec_users[$this->nmgp_refresh_row]['login_'] = $this->login_;
                  }
                  if (isset($this->NM_ajax_changed['pswd_']) && $this->NM_ajax_changed['pswd_'])
                  {
                      $this->form_vert_form_sec_users[$this->nmgp_refresh_row]['pswd_'] = $this->pswd_;
                  }
                  if (isset($this->NM_ajax_changed['access_fa_']) && $this->NM_ajax_changed['access_fa_'])
                  {
                      $this->form_vert_form_sec_users[$this->nmgp_refresh_row]['access_fa_'] = $this->access_fa_;
                  }
                  if (isset($this->NM_ajax_changed['access_fp_']) && $this->NM_ajax_changed['access_fp_'])
                  {
                      $this->form_vert_form_sec_users[$this->nmgp_refresh_row]['access_fp_'] = $this->access_fp_;
                  }
                  if (isset($this->NM_ajax_changed['access_im_']) && $this->NM_ajax_changed['access_im_'])
                  {
                      $this->form_vert_form_sec_users[$this->nmgp_refresh_row]['access_im_'] = $this->access_im_;
                  }
                  if (isset($this->NM_ajax_changed['zona_']) && $this->NM_ajax_changed['zona_'])
                  {
                      $this->form_vert_form_sec_users[$this->nmgp_refresh_row]['zona_'] = $this->zona_;
                  }
                  if (isset($this->NM_ajax_changed['cod_provincia_']) && $this->NM_ajax_changed['cod_provincia_'])
                  {
                      $this->form_vert_form_sec_users[$this->nmgp_refresh_row]['cod_provincia_'] = $this->cod_provincia_;
                  }
              }
          }
          if (isset($this->nmgp_refresh_row) && '' != $this->nmgp_refresh_row)
          {
              $this->form_vert_form_sec_users[$this->nmgp_refresh_row]['usr_active_'] = $this->usr_active_;
              $this->form_vert_form_sec_users[$this->nmgp_refresh_row]['ci_'] = $this->ci_;
              $this->form_vert_form_sec_users[$this->nmgp_refresh_row]['name_'] = $this->name_;
              $this->form_vert_form_sec_users[$this->nmgp_refresh_row]['email_'] = $this->email_;
              $this->form_vert_form_sec_users[$this->nmgp_refresh_row]['login_'] = $this->login_;
              $this->form_vert_form_sec_users[$this->nmgp_refresh_row]['pswd_'] = $this->pswd_;
              $this->form_vert_form_sec_users[$this->nmgp_refresh_row]['access_fa_'] = $this->access_fa_;
              $this->form_vert_form_sec_users[$this->nmgp_refresh_row]['access_fp_'] = $this->access_fp_;
              $this->form_vert_form_sec_users[$this->nmgp_refresh_row]['access_im_'] = $this->access_im_;
              $this->form_vert_form_sec_users[$this->nmgp_refresh_row]['cod_provincia_'] = $this->cod_provincia_;
          }
          $this->NM_ajax_info['rsSize'] = sizeof($this->form_vert_form_sec_users);
          foreach($this->form_vert_form_sec_users as $sc_seq_vert => $aRecData)
          {
              if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("usr_active_", $this->nmgp_refresh_fields)))
              {
                  $sTmpValue = NM_charset_to_utf8($aRecData['usr_active_']);
                  $aLookup = array();
 
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
   $nm_comando = "select codigo, valor from catalogo where tipo='estado_usuario'";
   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando)) 
   {
       while (!$rs->EOF) 
       { 
              $aLookup[] = array(form_sec_users_pack_protect_string($rs->fields[0]) => form_sec_users_pack_protect_string(NM_charset_to_utf8($rs->fields[1])));
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
          $aLookupOrig = $aLookup;
          $sSelComp = "name=\"usr_active_\"";
          if (isset($this->NM_ajax_info['select_html']['usr_active_']) && !empty($this->NM_ajax_info['select_html']['usr_active_']))
          {
              eval("\$sSelComp = \"" . $this->NM_ajax_info['select_html']['usr_active_'] . "\";");
          }
          $sLookup = '';
          foreach ($aLookup as $aOption)
          {
              foreach ($aOption as $sValue => $sLabel)
              {
                  $sOpt     = ($sValue !== $sLabel) ? $sValue : $sLabel;
                  $sLookup .= "<option value=\"" . $sOpt . "\">" . $sLabel . "</option>";
              }
          }
          $aLookup  = $sLookup;
                  $this->NM_ajax_info['fldList']['usr_active_' . $sc_seq_vert] = array(
                       'row'    => $sc_seq_vert,
                       'type'    => 'select',
                       'valList' => array($sTmpValue),
               'optList' => $aLookup,
                       );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['usr_active_' . $sc_seq_vert]['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['usr_active_' . $sc_seq_vert]['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['usr_active_' . $sc_seq_vert]['labList'] = $aLabel;
              }
              if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("ci_", $this->nmgp_refresh_fields)))
              {
                  $sTmpValue = NM_charset_to_utf8($aRecData['ci_']);
                  $aLookup = array();
          $aLookupOrig = $aLookup;
                  $this->NM_ajax_info['fldList']['ci_' . $sc_seq_vert] = array(
                       'row'    => $sc_seq_vert,
                       'type'    => 'text',
                       'valList' => array($sTmpValue),
                       );
              }
              if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("name_", $this->nmgp_refresh_fields)))
              {
                  $sTmpValue = NM_charset_to_utf8($aRecData['name_']);
                  $aLookup = array();
          $aLookupOrig = $aLookup;
                  $this->NM_ajax_info['fldList']['name_' . $sc_seq_vert] = array(
                       'row'    => $sc_seq_vert,
                       'type'    => 'text',
                       'valList' => array($sTmpValue),
                       );
              }
              if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("email_", $this->nmgp_refresh_fields)))
              {
                  $sTmpValue = NM_charset_to_utf8($aRecData['email_']);
                  $aLookup = array();
          $aLookupOrig = $aLookup;
                  $this->NM_ajax_info['fldList']['email_' . $sc_seq_vert] = array(
                       'row'    => $sc_seq_vert,
                       'type'    => 'text',
                       'valList' => array($sTmpValue),
                       );
              }
              if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("login_", $this->nmgp_refresh_fields)))
              {
                  $sTmpValue = NM_charset_to_utf8($aRecData['login_']);
                  $aLookup = array();
          $aLookupOrig = $aLookup;
                  $this->NM_ajax_info['fldList']['login_' . $sc_seq_vert] = array(
                       'row'    => $sc_seq_vert,
                       'type'    => 'label',
                       'valList' => array($sTmpValue),
                       );
              }
              if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("pswd_", $this->nmgp_refresh_fields)))
              {
                  $sTmpValue = NM_charset_to_utf8($aRecData['pswd_']);
                  $aLookup = array();
          $aLookupOrig = $aLookup;
                  $this->NM_ajax_info['fldList']['pswd_' . $sc_seq_vert] = array(
                       'row'    => $sc_seq_vert,
                       'type'    => 'label',
                       'valList' => array($sTmpValue),
                       );
              }
              if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("access_fa_", $this->nmgp_refresh_fields)))
              {
                  $sTmpValue = NM_charset_to_utf8($aRecData['access_fa_']);
                  $aLookup = array();
 
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
   $nm_comando = "SELECT codigo, valor 
FROM catalogo WHERE tipo= 'acceso_sistema'
ORDER BY valor";
   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando)) 
   {
       while (!$rs->EOF) 
       { 
              $aLookup[] = array(form_sec_users_pack_protect_string($rs->fields[0]) => form_sec_users_pack_protect_string(NM_charset_to_utf8($rs->fields[1])));
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
          $aLookupOrig = $aLookup;
          $sOptComp = "";
          if (isset($this->NM_ajax_info['select_html']['access_fa_']) && !empty($this->NM_ajax_info['select_html']['access_fa_']))
          {
              eval("\$sOptComp = \"" . $this->NM_ajax_info['select_html']['access_fa_'] . "\";");
          }
                  $this->NM_ajax_info['fldList']['access_fa_' . $sc_seq_vert] = array(
                       'row'    => $sc_seq_vert,
                       'type'    => 'radio',
                       'valList' => array($sTmpValue),
               'optList' => $aLookup,
               'colNum'  => 2,
               'optComp'  => $sOptComp,
                       );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['access_fa_' . $sc_seq_vert]['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['access_fa_' . $sc_seq_vert]['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['access_fa_' . $sc_seq_vert]['labList'] = $aLabel;
              }
              if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("access_fp_", $this->nmgp_refresh_fields)))
              {
                  $sTmpValue = NM_charset_to_utf8($aRecData['access_fp_']);
                  $aLookup = array();
 
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
   $nm_comando = "SELECT codigo, valor 
FROM catalogo WHERE tipo= 'acceso_sistema'
ORDER BY valor";
   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando)) 
   {
       while (!$rs->EOF) 
       { 
              $aLookup[] = array(form_sec_users_pack_protect_string($rs->fields[0]) => form_sec_users_pack_protect_string(NM_charset_to_utf8($rs->fields[1])));
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
          $aLookupOrig = $aLookup;
          $sOptComp = "";
          if (isset($this->NM_ajax_info['select_html']['access_fp_']) && !empty($this->NM_ajax_info['select_html']['access_fp_']))
          {
              eval("\$sOptComp = \"" . $this->NM_ajax_info['select_html']['access_fp_'] . "\";");
          }
                  $this->NM_ajax_info['fldList']['access_fp_' . $sc_seq_vert] = array(
                       'row'    => $sc_seq_vert,
                       'type'    => 'radio',
                       'valList' => array($sTmpValue),
               'optList' => $aLookup,
               'colNum'  => 2,
               'optComp'  => $sOptComp,
                       );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['access_fp_' . $sc_seq_vert]['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['access_fp_' . $sc_seq_vert]['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['access_fp_' . $sc_seq_vert]['labList'] = $aLabel;
              }
              if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("access_im_", $this->nmgp_refresh_fields)))
              {
                  $sTmpValue = NM_charset_to_utf8($aRecData['access_im_']);
                  $aLookup = array();
 
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
   $nm_comando = "SELECT codigo, valor 
FROM catalogo WHERE tipo= 'acceso_sistema'
ORDER BY valor";
   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando)) 
   {
       while (!$rs->EOF) 
       { 
              $aLookup[] = array(form_sec_users_pack_protect_string($rs->fields[0]) => form_sec_users_pack_protect_string(NM_charset_to_utf8($rs->fields[1])));
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
          $aLookupOrig = $aLookup;
          $sOptComp = "";
          if (isset($this->NM_ajax_info['select_html']['access_im_']) && !empty($this->NM_ajax_info['select_html']['access_im_']))
          {
              eval("\$sOptComp = \"" . $this->NM_ajax_info['select_html']['access_im_'] . "\";");
          }
                  $this->NM_ajax_info['fldList']['access_im_' . $sc_seq_vert] = array(
                       'row'    => $sc_seq_vert,
                       'type'    => 'radio',
                       'valList' => array($sTmpValue),
               'optList' => $aLookup,
               'colNum'  => 2,
               'optComp'  => $sOptComp,
                       );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['access_im_' . $sc_seq_vert]['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['access_im_' . $sc_seq_vert]['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['access_im_' . $sc_seq_vert]['labList'] = $aLabel;
              }
              if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("zona_", $this->nmgp_refresh_fields)))
              {
                  $sTmpValue = NM_charset_to_utf8($aRecData['zona_']);
                  $aLookup = array();
 
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
   $nm_comando = "select codigo, valor from catalogo where tipo='zona'";
   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando)) 
   {
       while (!$rs->EOF) 
       { 
              $aLookup[] = array(form_sec_users_pack_protect_string($rs->fields[0]) => form_sec_users_pack_protect_string(NM_charset_to_utf8($rs->fields[1])));
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
          $aLookupOrig = $aLookup;
          $sSelComp = "name=\"zona_\"";
          if (isset($this->NM_ajax_info['select_html']['zona_']) && !empty($this->NM_ajax_info['select_html']['zona_']))
          {
              eval("\$sSelComp = \"" . $this->NM_ajax_info['select_html']['zona_'] . "\";");
          }
          $sLookup = '';
          foreach ($aLookup as $aOption)
          {
              foreach ($aOption as $sValue => $sLabel)
              {
                  $sOpt     = ($sValue !== $sLabel) ? $sValue : $sLabel;
                  $sLookup .= "<option value=\"" . $sOpt . "\">" . $sLabel . "</option>";
              }
          }
          $aLookup  = $sLookup;
                  $this->NM_ajax_info['fldList']['zona_' . $sc_seq_vert] = array(
                       'row'    => $sc_seq_vert,
                       'type'    => 'select',
                       'valList' => array($sTmpValue),
               'optList' => $aLookup,
                       );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['zona_' . $sc_seq_vert]['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['zona_' . $sc_seq_vert]['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['zona_' . $sc_seq_vert]['labList'] = $aLabel;
              }
              if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("cod_provincia_", $this->nmgp_refresh_fields)))
              {
                  $sTmpValue = NM_charset_to_utf8($aRecData['cod_provincia_']);
                  $aLookup = array();
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['Lookup_cod_provincia_']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['Lookup_cod_provincia_'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['Lookup_cod_provincia_']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['Lookup_cod_provincia_'] = array(); 
}
   $this->zona_ = $this->form_vert_form_sec_users[$sc_seq_vert]['zona_'];
$aLookup[] = array(form_sec_users_pack_protect_string('') => form_sec_users_pack_protect_string('--Selecione--'));
$_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['Lookup_cod_provincia_'][] = '';
if ($this->zona_ != "")
{ 
   $this->nm_clear_val("zona_");
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   $nm_comando = "select cod_provincia, provincia from u_provincia where zona= '$this->zona_' order by provincia";
   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando)) 
   {
       while (!$rs->EOF) 
       { 
              $aLookup[] = array(form_sec_users_pack_protect_string($rs->fields[0]) => form_sec_users_pack_protect_string(NM_charset_to_utf8($rs->fields[1])));
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
          $aLookupOrig = $aLookup;
          $sSelComp = "name=\"cod_provincia_\"";
          if (isset($this->NM_ajax_info['select_html']['cod_provincia_']) && !empty($this->NM_ajax_info['select_html']['cod_provincia_']))
          {
              eval("\$sSelComp = \"" . $this->NM_ajax_info['select_html']['cod_provincia_'] . "\";");
          }
          $sLookup = '';
          foreach ($aLookup as $aOption)
          {
              foreach ($aOption as $sValue => $sLabel)
              {
                  $sOpt     = ($sValue !== $sLabel) ? $sValue : $sLabel;
                  $sLookup .= "<option value=\"" . $sOpt . "\">" . $sLabel . "</option>";
              }
          }
          $aLookup  = $sLookup;
                  $this->NM_ajax_info['fldList']['cod_provincia_' . $sc_seq_vert] = array(
                       'row'    => $sc_seq_vert,
                       'type'    => 'select',
                       'valList' => array($sTmpValue),
               'optList' => $aLookup,
                       );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['cod_provincia_' . $sc_seq_vert]['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['cod_provincia_' . $sc_seq_vert]['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['cod_provincia_' . $sc_seq_vert]['labList'] = $aLabel;
              }
          }
   }

   function ajax_add_parameters()
   {
   } // ajax_add_parameters
  function nm_proc_onload_record($sc_seq_vert=0)
  {
  }
  function nm_proc_onload($bFormat = true)
  {
      $this->nm_guardar_campos();
      if ($bFormat) $this->nm_formatar_campos();
  }
//
//----------------------------------------------------
//-----> 
//----------------------------------------------------
//----------- 


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
      global $sc_seq_vert,  $nm_form_submit, $teste_validade, $sc_where;
 
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
      $_SESSION['scriptcase']['form_sec_users']['contr_erro'] = 'on';
if (isset($this->NM_ajax_flag) && $this->NM_ajax_flag)
{ 
    $original_email_ = $this->email_;
    $original_login_ = $this->login_;
    $original_name_ = $this->name_;
    $original_pswd_ = $this->pswd_;
}
   $login = $this->login_ ;
$pswd = $this->pswd_ ;
$name = $this->name_ ;
$login = $this->login_ ;
$email = $this->email_ ;
$this->pswd_  = md5($this->pswd_ );




if (isset($this->NM_ajax_flag) && $this->NM_ajax_flag)
{ 
    if (($original_email_ != $this->email_ || (isset($bFlagRead_email_) && $bFlagRead_email_))&& isset($this->nmgp_refresh_row))
    { 
        $this->NM_ajax_info['fldList']['email_' . $this->nmgp_refresh_row]['type']    = 'text';
        $this->NM_ajax_info['fldList']['email_' . $this->nmgp_refresh_row]['valList'] = array($this->email_);
        $this->NM_ajax_changed['email_'] = true;
    }
    if (($original_login_ != $this->login_ || (isset($bFlagRead_login_) && $bFlagRead_login_))&& isset($this->nmgp_refresh_row))
    { 
        $this->NM_ajax_info['fldList']['login_' . $this->nmgp_refresh_row]['type']    = 'text';
        $this->NM_ajax_info['fldList']['login_' . $this->nmgp_refresh_row]['valList'] = array($this->login_);
        $this->NM_ajax_changed['login_'] = true;
    }
    if (($original_name_ != $this->name_ || (isset($bFlagRead_name_) && $bFlagRead_name_))&& isset($this->nmgp_refresh_row))
    { 
        $this->NM_ajax_info['fldList']['name_' . $this->nmgp_refresh_row]['type']    = 'text';
        $this->NM_ajax_info['fldList']['name_' . $this->nmgp_refresh_row]['valList'] = array($this->name_);
        $this->NM_ajax_changed['name_'] = true;
    }
    if (($original_pswd_ != $this->pswd_ || (isset($bFlagRead_pswd_) && $bFlagRead_pswd_))&& isset($this->nmgp_refresh_row))
    { 
        $this->NM_ajax_info['fldList']['pswd_' . $this->nmgp_refresh_row]['type']    = 'text';
        $this->NM_ajax_info['fldList']['pswd_' . $this->nmgp_refresh_row]['valList'] = array($this->pswd_);
        $this->NM_ajax_changed['pswd_'] = true;
    }
}
$_SESSION['scriptcase']['form_sec_users']['contr_erro'] = 'off'; 
    }
    if ("alterar" == $this->nmgp_opcao) {
      $this->sc_evento = $this->nmgp_opcao;
      $_SESSION['scriptcase']['form_sec_users']['contr_erro'] = 'on';
   


$_SESSION['scriptcase']['form_sec_users']['contr_erro'] = 'off'; 
    }
      if (!empty($this->Campos_Mens_erro)) 
      {
          return;
      }
      $SC_tem_cmp_update = true; 
      if ($this->nmgp_opcao == "alterar")
      {
          $SC_ex_update = true; 
          $SC_ex_upd_or = true; 
          $this->nmgp_dados_select = $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['dados_select'][$sc_seq_vert];
          if ($this->nmgp_dados_select['usr_active_'] == $this->usr_active_ &&
              $this->nmgp_dados_select['ci_'] == $this->ci_ &&
              $this->nmgp_dados_select['name_'] == $this->name_ &&
              $this->nmgp_dados_select['email_'] == $this->email_ &&
              $this->nmgp_dados_select['login_'] == $this->login_ &&
              $this->nmgp_dados_select['pswd_'] == $this->pswd_ &&
              $this->nmgp_dados_select['access_fa_'] == $this->access_fa_ &&
              $this->nmgp_dados_select['access_fp_'] == $this->access_fp_ &&
              $this->nmgp_dados_select['access_im_'] == $this->access_im_ &&
              $this->nmgp_dados_select['zona_'] == $this->zona_ &&
              $this->nmgp_dados_select['cod_provincia_'] == $this->cod_provincia_)
          {
              $SC_ex_update = false; 
              $SC_ex_upd_or = false; 
          }
          else
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['dados_select'][$sc_seq_vert]['usr_active_'] = $this->usr_active_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['dados_select'][$sc_seq_vert]['ci_'] = $this->ci_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['dados_select'][$sc_seq_vert]['name_'] = $this->name_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['dados_select'][$sc_seq_vert]['email_'] = $this->email_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['dados_select'][$sc_seq_vert]['login_'] = $this->login_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['dados_select'][$sc_seq_vert]['pswd_'] = $this->pswd_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['dados_select'][$sc_seq_vert]['access_fa_'] = $this->access_fa_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['dados_select'][$sc_seq_vert]['access_fp_'] = $this->access_fp_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['dados_select'][$sc_seq_vert]['access_im_'] = $this->access_im_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['dados_select'][$sc_seq_vert]['zona_'] = $this->zona_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['dados_select'][$sc_seq_vert]['cod_provincia_'] = $this->cod_provincia_;
          }
      }
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
      if ('incluir' == $this->nmgp_opcao && empty($this->priv_admin_)) {$this->priv_admin_ = "Y"; $NM_val_null[] = "priv_admin_";}  
      $NM_val_form['usr_active_'] = $this->usr_active_;
      $NM_val_form['ci_'] = $this->ci_;
      $NM_val_form['name_'] = $this->name_;
      $NM_val_form['email_'] = $this->email_;
      $NM_val_form['login_'] = $this->login_;
      $NM_val_form['pswd_'] = $this->pswd_;
      $NM_val_form['access_fa_'] = $this->access_fa_;
      $NM_val_form['access_fp_'] = $this->access_fp_;
      $NM_val_form['access_im_'] = $this->access_im_;
      $NM_val_form['zona_'] = $this->zona_;
      $NM_val_form['cod_provincia_'] = $this->cod_provincia_;
      $NM_val_form['activation_code_'] = $this->activation_code_;
      $NM_val_form['priv_admin_'] = $this->priv_admin_;
      $NM_val_form['fecha_registro_'] = $this->fecha_registro_;
      $NM_val_form['departamento_'] = $this->departamento_;
      $NM_val_form['ingreso_'] = $this->ingreso_;
      $NM_val_form['access_siu_'] = $this->access_siu_;
      if ($this->zona_ == "")  
      { 
          $this->zona_ = 0;
          $this->sc_force_zero[] = 'zona_';
      } 
      if ($this->ingreso_ == "")  
      { 
          $this->ingreso_ = 0;
          $this->sc_force_zero[] = 'ingreso_';
      } 
      $nm_bases_lob_geral = array_merge($this->Ini->nm_bases_oracle, $this->Ini->nm_bases_ibase, $this->Ini->nm_bases_informix);
      if ($this->nmgp_opcao == "alterar" || $this->nmgp_opcao == "incluir") 
      {
          $this->login_ = substr($this->Db->qstr($this->login_), 1, -1); 
          if ($this->login_ == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->login_ = "null"; 
              $NM_val_null[] = "login_";
          } 
          $this->pswd_ = substr($this->Db->qstr($this->pswd_), 1, -1); 
          if ($this->pswd_ == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->pswd_ = "null"; 
              $NM_val_null[] = "pswd_";
          } 
          $this->name_ = substr($this->Db->qstr($this->name_), 1, -1); 
          if ($this->name_ == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->name_ = "null"; 
              $NM_val_null[] = "name_";
          } 
          $this->ci_ = substr($this->Db->qstr($this->ci_), 1, -1); 
          if ($this->ci_ == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->ci_ = "null"; 
              $NM_val_null[] = "ci_";
          } 
          $this->email_ = substr($this->Db->qstr($this->email_), 1, -1); 
          if ($this->email_ == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->email_ = "null"; 
              $NM_val_null[] = "email_";
          } 
          $this->usr_active_ = substr($this->Db->qstr($this->usr_active_), 1, -1); 
          if ($this->usr_active_ == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->usr_active_ = "null"; 
              $NM_val_null[] = "usr_active_";
          } 
          $this->activation_code_ = substr($this->Db->qstr($this->activation_code_), 1, -1); 
          if ($this->activation_code_ == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->activation_code_ = "null"; 
              $NM_val_null[] = "activation_code_";
          } 
          $this->priv_admin_ = substr($this->Db->qstr($this->priv_admin_), 1, -1); 
          if ($this->priv_admin_ == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->priv_admin_ = "null"; 
              $NM_val_null[] = "priv_admin_";
          } 
          if ($this->fecha_registro_ == "")  
          { 
              $this->fecha_registro_ = "null"; 
              $NM_val_null[] = "fecha_registro_";
          } 
          $this->departamento_ = substr($this->Db->qstr($this->departamento_), 1, -1); 
          if ($this->departamento_ == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->departamento_ = "null"; 
              $NM_val_null[] = "departamento_";
          } 
          $this->cod_provincia_ = substr($this->Db->qstr($this->cod_provincia_), 1, -1); 
          if ($this->cod_provincia_ == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->cod_provincia_ = "null"; 
              $NM_val_null[] = "cod_provincia_";
          } 
          $this->access_fa_ = substr($this->Db->qstr($this->access_fa_), 1, -1); 
          if ($this->access_fa_ == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->access_fa_ = "null"; 
              $NM_val_null[] = "access_fa_";
          } 
          $this->access_im_ = substr($this->Db->qstr($this->access_im_), 1, -1); 
          if ($this->access_im_ == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->access_im_ = "null"; 
              $NM_val_null[] = "access_im_";
          } 
          $this->access_fp_ = substr($this->Db->qstr($this->access_fp_), 1, -1); 
          if ($this->access_fp_ == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->access_fp_ = "null"; 
              $NM_val_null[] = "access_fp_";
          } 
          $this->access_siu_ = substr($this->Db->qstr($this->access_siu_), 1, -1); 
          if ($this->access_siu_ == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->access_siu_ = "null"; 
              $NM_val_null[] = "access_siu_";
          } 
      }
      if ($this->nmgp_opcao == "alterar") 
      {
          if (($this->Embutida_form || $this->Embutida_multi) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['foreign_key']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['foreign_key']))
          {
              foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['foreign_key'] as $sFKName => $sFKValue)
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
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) from " . $this->Ini->nm_tabela . " where login = '$this->login_' ";
              $rs1 = $this->Db->Execute("select count(*) from " . $this->Ini->nm_tabela . " where login = '$this->login_' "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) from " . $this->Ini->nm_tabela . " where login = '$this->login_' ";
              $rs1 = $this->Db->Execute("select count(*) from " . $this->Ini->nm_tabela . " where login = '$this->login_' "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) from " . $this->Ini->nm_tabela . " where login = '$this->login_' ";
              $rs1 = $this->Db->Execute("select count(*) from " . $this->Ini->nm_tabela . " where login = '$this->login_' "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) from " . $this->Ini->nm_tabela . " where login = '$this->login_' ";
              $rs1 = $this->Db->Execute("select count(*) from " . $this->Ini->nm_tabela . " where login = '$this->login_' "); 
          }  
          else  
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) from " . $this->Ini->nm_tabela . " where login = '$this->login_' ";
              $rs1 = $this->Db->Execute("select count(*) from " . $this->Ini->nm_tabela . " where login = '$this->login_' "); 
          }  
          if ($rs1 === false)  
          { 
              $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
              if ($this->NM_ajax_flag)
              {
                 form_sec_users_pack_ajax_response();
              }
              exit; 
          }  
          $bUpdateOk = true;
          $tmp_result = (int) $rs1->fields[0]; 
          if ($tmp_result != 1) 
          { 
              $this->Campos_Mens_erro = $this->Ini->Nm_lang['lang_errm_nfnd']; 
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
                  $comando = "UPDATE " . $this->Ini->nm_tabela . " SET name = '$this->name_', ci = '$this->ci_', email = '$this->email_', usr_active = '$this->usr_active_', zona = $this->zona_, cod_provincia = '$this->cod_provincia_', access_fa = '$this->access_fa_', access_im = '$this->access_im_', access_fp = '$this->access_fp_'";  
              } 
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
              { 
                  $comando = "UPDATE " . $this->Ini->nm_tabela . " SET name = '$this->name_', ci = '$this->ci_', email = '$this->email_', usr_active = '$this->usr_active_', zona = $this->zona_, cod_provincia = '$this->cod_provincia_', access_fa = '$this->access_fa_', access_im = '$this->access_im_', access_fp = '$this->access_fp_'";  
              } 
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
              { 
                  $comando_oracle = "UPDATE " . $this->Ini->nm_tabela . " SET name = '$this->name_', ci = '$this->ci_', email = '$this->email_', usr_active = '$this->usr_active_', zona = $this->zona_, cod_provincia = '$this->cod_provincia_', access_fa = '$this->access_fa_', access_im = '$this->access_im_', access_fp = '$this->access_fp_'";  
              } 
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              { 
                  $comando_oracle = "UPDATE " . $this->Ini->nm_tabela . " SET name = '$this->name_', ci = '$this->ci_', email = '$this->email_', usr_active = '$this->usr_active_', zona = $this->zona_, cod_provincia = '$this->cod_provincia_', access_fa = '$this->access_fa_', access_im = '$this->access_im_', access_fp = '$this->access_fp_'";  
              } 
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
              { 
                  $comando_oracle = "UPDATE " . $this->Ini->nm_tabela . " SET name = '$this->name_', ci = '$this->ci_', email = '$this->email_', usr_active = '$this->usr_active_', zona = $this->zona_, cod_provincia = '$this->cod_provincia_', access_fa = '$this->access_fa_', access_im = '$this->access_im_', access_fp = '$this->access_fp_'";  
              } 
              else 
              { 
                  $comando = "UPDATE " . $this->Ini->nm_tabela . " SET name = '$this->name_', ci = '$this->ci_', email = '$this->email_', usr_active = '$this->usr_active_', zona = $this->zona_, cod_provincia = '$this->cod_provincia_', access_fa = '$this->access_fa_', access_im = '$this->access_im_', access_fp = '$this->access_fp_'";  
              } 
              if (isset($NM_val_form['pswd_']) && $NM_val_form['pswd_'] != $this->nmgp_dados_select['pswd_']) 
              { 
                  if ($SC_ex_update || $SC_tem_cmp_update) 
                  { 
                      $comando        .= ","; 
                      $comando_oracle .= ","; 
                  } 
                  $comando        .= " pswd = '$this->pswd_'"; 
                  $comando_oracle        .= " pswd = '$this->pswd_'"; 
                  $SC_ex_update = true; 
                  $SC_ex_upd_or = true; 
              } 
              if (isset($NM_val_form['activation_code_']) && $NM_val_form['activation_code_'] != $this->nmgp_dados_select['activation_code_']) 
              { 
                  if ($SC_ex_update || $SC_tem_cmp_update) 
                  { 
                      $comando        .= ","; 
                      $comando_oracle .= ","; 
                  } 
                  $comando        .= " activation_code = '$this->activation_code_'"; 
                  $comando_oracle        .= " activation_code = '$this->activation_code_'"; 
                  $SC_ex_update = true; 
                  $SC_ex_upd_or = true; 
              } 
              if (isset($NM_val_form['priv_admin_']) && $NM_val_form['priv_admin_'] != $this->nmgp_dados_select['priv_admin_']) 
              { 
                  if ($SC_ex_update || $SC_tem_cmp_update) 
                  { 
                      $comando        .= ","; 
                      $comando_oracle .= ","; 
                  } 
                  $comando        .= " priv_admin = '$this->priv_admin_'"; 
                  $comando_oracle        .= " priv_admin = '$this->priv_admin_'"; 
                  $SC_ex_update = true; 
                  $SC_ex_upd_or = true; 
              } 
              if (isset($NM_val_form['departamento_']) && $NM_val_form['departamento_'] != $this->nmgp_dados_select['departamento_']) 
              { 
                  if ($SC_ex_update || $SC_tem_cmp_update) 
                  { 
                      $comando        .= ","; 
                      $comando_oracle .= ","; 
                  } 
                  $comando        .= " departamento = '$this->departamento_'"; 
                  $comando_oracle        .= " departamento = '$this->departamento_'"; 
                  $SC_ex_update = true; 
                  $SC_ex_upd_or = true; 
              } 
              if (isset($NM_val_form['ingreso_']) && $NM_val_form['ingreso_'] != $this->nmgp_dados_select['ingreso_']) 
              { 
                  if ($SC_ex_update || $SC_tem_cmp_update) 
                  { 
                      $comando        .= ","; 
                      $comando_oracle .= ","; 
                  } 
                  $comando        .= " ingreso = $this->ingreso_"; 
                  $comando_oracle        .= " ingreso = $this->ingreso_"; 
                  $SC_ex_update = true; 
                  $SC_ex_upd_or = true; 
              } 
              if (isset($NM_val_form['access_siu_']) && $NM_val_form['access_siu_'] != $this->nmgp_dados_select['access_siu_']) 
              { 
                  if ($SC_ex_update || $SC_tem_cmp_update) 
                  { 
                      $comando        .= ","; 
                      $comando_oracle .= ","; 
                  } 
                  $comando        .= " access_siu = '$this->access_siu_'"; 
                  $comando_oracle        .= " access_siu = '$this->access_siu_'"; 
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
                  $comando .= " WHERE login = '$this->login_' ";  
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
              {
                  $comando .= " WHERE login = '$this->login_' ";  
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
              {
                  $comando .= " WHERE login = '$this->login_' ";  
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              {
                  $comando .= " WHERE login = '$this->login_' ";  
              }  
              else  
              {
                  $comando .= " WHERE login = '$this->login_' ";  
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
                                  form_sec_users_pack_ajax_response();
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
              $this->NM_gera_nav_page(); 
              $this->NM_ajax_info['navPage'] = $this->SC_nav_page; 

              $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['db_changed'] = true;

              $this->sc_teve_alt = true; 
              if     (isset($NM_val_form) && isset($NM_val_form['login_'])) { $this->login_ = $NM_val_form['login_']; }
              elseif (isset($this->login_)) { $this->nm_limpa_alfa($this->login_); }
              if     (isset($NM_val_form) && isset($NM_val_form['pswd_'])) { $this->pswd_ = $NM_val_form['pswd_']; }
              elseif (isset($this->pswd_)) { $this->nm_limpa_alfa($this->pswd_); }
              if     (isset($NM_val_form) && isset($NM_val_form['name_'])) { $this->name_ = $NM_val_form['name_']; }
              elseif (isset($this->name_)) { $this->nm_limpa_alfa($this->name_); }
              if     (isset($NM_val_form) && isset($NM_val_form['ci_'])) { $this->ci_ = $NM_val_form['ci_']; }
              elseif (isset($this->ci_)) { $this->nm_limpa_alfa($this->ci_); }
              if     (isset($NM_val_form) && isset($NM_val_form['email_'])) { $this->email_ = $NM_val_form['email_']; }
              elseif (isset($this->email_)) { $this->nm_limpa_alfa($this->email_); }
              if     (isset($NM_val_form) && isset($NM_val_form['usr_active_'])) { $this->usr_active_ = $NM_val_form['usr_active_']; }
              elseif (isset($this->usr_active_)) { $this->nm_limpa_alfa($this->usr_active_); }
              if     (isset($NM_val_form) && isset($NM_val_form['zona_'])) { $this->zona_ = $NM_val_form['zona_']; }
              elseif (isset($this->zona_)) { $this->nm_limpa_alfa($this->zona_); }
              if     (isset($NM_val_form) && isset($NM_val_form['cod_provincia_'])) { $this->cod_provincia_ = $NM_val_form['cod_provincia_']; }
              elseif (isset($this->cod_provincia_)) { $this->nm_limpa_alfa($this->cod_provincia_); }
              if     (isset($NM_val_form) && isset($NM_val_form['access_fa_'])) { $this->access_fa_ = $NM_val_form['access_fa_']; }
              elseif (isset($this->access_fa_)) { $this->nm_limpa_alfa($this->access_fa_); }
              if     (isset($NM_val_form) && isset($NM_val_form['access_im_'])) { $this->access_im_ = $NM_val_form['access_im_']; }
              elseif (isset($this->access_im_)) { $this->nm_limpa_alfa($this->access_im_); }
              if     (isset($NM_val_form) && isset($NM_val_form['access_fp_'])) { $this->access_fp_ = $NM_val_form['access_fp_']; }
              elseif (isset($this->access_fp_)) { $this->nm_limpa_alfa($this->access_fp_); }
              $this->nm_proc_onload_record($this->nmgp_refresh_row);

              $this->nm_formatar_campos();
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
              {
              }

              $aOldRefresh               = $this->nmgp_refresh_fields;
              $this->nmgp_refresh_fields = array('usr_active_', 'ci_', 'name_', 'email_', 'login_', 'pswd_', 'access_fa_', 'access_fp_', 'access_im_', 'zona_', 'cod_provincia_');
              $this->ajax_return_values();
              $this->nmgp_refresh_fields = $aOldRefresh;

              if (isset($this->Embutida_ronly) && $this->Embutida_ronly)
              {

                  $this->NM_ajax_info['readOnly']['usr_active_' . $this->nmgp_refresh_row] = 'on';

                  $this->NM_ajax_info['readOnly']['ci_' . $this->nmgp_refresh_row] = 'on';

                  $this->NM_ajax_info['readOnly']['name_' . $this->nmgp_refresh_row] = 'on';

                  $this->NM_ajax_info['readOnly']['email_' . $this->nmgp_refresh_row] = 'on';

                  $this->NM_ajax_info['readOnly']['login_' . $this->nmgp_refresh_row] = 'on';

                  $this->NM_ajax_info['readOnly']['pswd_' . $this->nmgp_refresh_row] = 'on';

                  $this->NM_ajax_info['readOnly']['access_fa_' . $this->nmgp_refresh_row] = 'on';

                  $this->NM_ajax_info['readOnly']['access_fp_' . $this->nmgp_refresh_row] = 'on';

                  $this->NM_ajax_info['readOnly']['access_im_' . $this->nmgp_refresh_row] = 'on';

                  $this->NM_ajax_info['readOnly']['zona_' . $this->nmgp_refresh_row] = 'on';

                  $this->NM_ajax_info['readOnly']['cod_provincia_' . $this->nmgp_refresh_row] = 'on';


                  $this->NM_ajax_info['closeLine'] = $this->nmgp_refresh_row;
              }

              $this->nm_tira_formatacao();
          }  
      }  
      if ($this->nmgp_opcao == "incluir") 
      { 
          $NM_cmp_auto = "";
          $NM_seq_auto = "";
          if (($this->Embutida_form || $this->Embutida_multi) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['foreign_key']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['foreign_key']))
          {
              foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['foreign_key'] as $sFKName => $sFKValue)
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
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) from " . $this->Ini->nm_tabela . " where login = '$this->login_' "; 
              $rs1 = $this->Db->Execute("select count(*) from " . $this->Ini->nm_tabela . " where login = '$this->login_' "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) from " . $this->Ini->nm_tabela . " where login = '$this->login_' "; 
              $rs1 = $this->Db->Execute("select count(*) from " . $this->Ini->nm_tabela . " where login = '$this->login_' "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) from " . $this->Ini->nm_tabela . " where login = '$this->login_' "; 
              $rs1 = $this->Db->Execute("select count(*) from " . $this->Ini->nm_tabela . " where login = '$this->login_' "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) from " . $this->Ini->nm_tabela . " where login = '$this->login_' "; 
              $rs1 = $this->Db->Execute("select count(*) from " . $this->Ini->nm_tabela . " where login = '$this->login_' "); 
          }  
          else  
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) from " . $this->Ini->nm_tabela . " where login = '$this->login_' "; 
              $rs1 = $this->Db->Execute("select count(*) from " . $this->Ini->nm_tabela . " where login = '$this->login_' "); 
          }  
          if ($rs1 === false)  
          { 
              $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
              exit; 
          }  
          $tmp_result = (int) $rs1->fields[0]; 
          if ($tmp_result != 0) 
          { 
              $this->Campos_Mens_erro = $this->Ini->Nm_lang['lang_errm_pkey']; 
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
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (login, pswd, name, ci, email, usr_active, activation_code, priv_admin, zona, departamento, cod_provincia, ingreso, access_fa, access_im, access_fp, access_siu) VALUES ('$this->login_', '$this->pswd_', '$this->name_', '$this->ci_', '$this->email_', '$this->usr_active_', '$this->activation_code_', '$this->priv_admin_', $this->zona_, '$this->departamento_', '$this->cod_provincia_', $this->ingreso_, '$this->access_fa_', '$this->access_im_', '$this->access_fp_', '$this->access_siu_')"; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
              { 
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "login, pswd, name, ci, email, usr_active, activation_code, priv_admin, zona, departamento, cod_provincia, ingreso, access_fa, access_im, access_fp, access_siu) VALUES (" . $NM_seq_auto . "'$this->login_', '$this->pswd_', '$this->name_', '$this->ci_', '$this->email_', '$this->usr_active_', '$this->activation_code_', '$this->priv_admin_', $this->zona_, '$this->departamento_', '$this->cod_provincia_', $this->ingreso_, '$this->access_fa_', '$this->access_im_', '$this->access_fp_', '$this->access_siu_')"; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
              {
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "login, pswd, name, ci, email, usr_active, activation_code, priv_admin, zona, departamento, cod_provincia, ingreso, access_fa, access_im, access_fp, access_siu) VALUES (" . $NM_seq_auto . "'$this->login_', '$this->pswd_', '$this->name_', '$this->ci_', '$this->email_', '$this->usr_active_', '$this->activation_code_', '$this->priv_admin_', $this->zona_, '$this->departamento_', '$this->cod_provincia_', $this->ingreso_, '$this->access_fa_', '$this->access_im_', '$this->access_fp_', '$this->access_siu_')"; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              {
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "login, pswd, name, ci, email, usr_active, activation_code, priv_admin, zona, departamento, cod_provincia, ingreso, access_fa, access_im, access_fp, access_siu) VALUES (" . $NM_seq_auto . "'$this->login_', '$this->pswd_', '$this->name_', '$this->ci_', '$this->email_', '$this->usr_active_', '$this->activation_code_', '$this->priv_admin_', $this->zona_, '$this->departamento_', '$this->cod_provincia_', $this->ingreso_, '$this->access_fa_', '$this->access_im_', '$this->access_fp_', '$this->access_siu_')"; 
              }
              else
              {
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "login, pswd, name, ci, email, usr_active, activation_code, priv_admin, zona, departamento, cod_provincia, ingreso, access_fa, access_im, access_fp, access_siu) VALUES (" . $NM_seq_auto . "'$this->login_', '$this->pswd_', '$this->name_', '$this->ci_', '$this->email_', '$this->usr_active_', '$this->activation_code_', '$this->priv_admin_', $this->zona_, '$this->departamento_', '$this->cod_provincia_', $this->ingreso_, '$this->access_fa_', '$this->access_im_', '$this->access_fp_', '$this->access_siu_')"; 
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
                              form_sec_users_pack_ajax_response();
                              exit; 
                          }
                      }  
                  }  
              }  
              if ('refresh_insert' != $this->nmgp_opcao)
              {
              }

              $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['db_changed'] = true;

              $this->sc_evento = "insert"; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['total']++; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['reg_qtd']++; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['reg_I_E']++; 
              $this->NM_ajax_info['navSummary']['reg_ini'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['reg_start'] + 1; 
              $this->NM_ajax_info['navSummary']['reg_qtd'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['reg_qtd']; 
              $this->NM_ajax_info['navSummary']['reg_tot'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['total'] + 1; 
              $this->NM_gera_nav_page(); 
              $this->NM_ajax_info['navPage'] = $this->SC_nav_page; 
              $this->sc_teve_incl = true; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['dados_select'][$sc_seq_vert]['usr_active_'] = $this->usr_active_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['dados_select'][$sc_seq_vert]['ci_'] = $this->ci_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['dados_select'][$sc_seq_vert]['name_'] = $this->name_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['dados_select'][$sc_seq_vert]['email_'] = $this->email_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['dados_select'][$sc_seq_vert]['login_'] = $this->login_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['dados_select'][$sc_seq_vert]['pswd_'] = $this->pswd_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['dados_select'][$sc_seq_vert]['access_fa_'] = $this->access_fa_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['dados_select'][$sc_seq_vert]['access_fp_'] = $this->access_fp_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['dados_select'][$sc_seq_vert]['access_im_'] = $this->access_im_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['dados_select'][$sc_seq_vert]['zona_'] = $this->zona_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['dados_select'][$sc_seq_vert]['cod_provincia_'] = $this->cod_provincia_;
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
              if (isset($this->login_)) { $this->nm_limpa_alfa($this->login_); }
              if (isset($this->pswd_)) { $this->nm_limpa_alfa($this->pswd_); }
              if (isset($this->name_)) { $this->nm_limpa_alfa($this->name_); }
              if (isset($this->ci_)) { $this->nm_limpa_alfa($this->ci_); }
              if (isset($this->email_)) { $this->nm_limpa_alfa($this->email_); }
              if (isset($this->usr_active_)) { $this->nm_limpa_alfa($this->usr_active_); }
              if (isset($this->zona_)) { $this->nm_limpa_alfa($this->zona_); }
              if (isset($this->cod_provincia_)) { $this->nm_limpa_alfa($this->cod_provincia_); }
              if (isset($this->access_fa_)) { $this->nm_limpa_alfa($this->access_fa_); }
              if (isset($this->access_im_)) { $this->nm_limpa_alfa($this->access_im_); }
              if (isset($this->access_fp_)) { $this->nm_limpa_alfa($this->access_fp_); }
              if (isset($this->Embutida_form) && $this->Embutida_form)
              {
                  $this->nm_guardar_campos();
                  $this->nm_proc_onload_record($this->nmgp_refresh_row);
                  $this->nm_formatar_campos();

                  $aLookup = array();
 
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
   $nm_comando = "select codigo, valor from catalogo where tipo='estado_usuario'";
   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando)) 
   {
       while (!$rs->EOF) 
       { 
              $aLookup[] = array(form_sec_users_pack_protect_string($rs->fields[0]) => form_sec_users_pack_protect_string(NM_charset_to_utf8($rs->fields[1])));
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
          $sLabelTemp = '';
          foreach ($aLookup as $aValData)
          {
              if (key($aValData) == $this->usr_active_)
              {
                  $sLabelTemp = current($aValData);
              }
          }
          $tmpLabel_usr_active_ = $sLabelTemp;
                  $this->NM_ajax_info['fldList']['usr_active_' . $this->nmgp_refresh_row]['type']    = 'select';
                  $this->NM_ajax_info['fldList']['usr_active_' . $this->nmgp_refresh_row]['valList'] = array($this->usr_active_);
                  $this->NM_ajax_info['fldList']['usr_active_' . $this->nmgp_refresh_row]['labList'] = array($tmpLabel_usr_active_);

                  if ((isset($this->Embutida_form) && $this->Embutida_form) && (!isset($this->Embutida_ronly) || !$this->Embutida_ronly))
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['usr_active_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['usr_active_' . $this->nmgp_refresh_row] = "off";
                      }
                  }
                  elseif (isset($this->Embutida_ronly) && $this->Embutida_ronly)
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['usr_active_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['usr_active_' . $this->nmgp_refresh_row] = "on";
                      }
                  }

                  $this->NM_ajax_info['fldList']['ci_' . $this->nmgp_refresh_row]['type']    = 'text';
                  $this->NM_ajax_info['fldList']['ci_' . $this->nmgp_refresh_row]['valList'] = array($this->ci_);
                  $this->NM_ajax_info['fldList']['ci_' . $this->nmgp_refresh_row]['labList'] = array($tmpLabel_ci_);

                  if ((isset($this->Embutida_form) && $this->Embutida_form) && (!isset($this->Embutida_ronly) || !$this->Embutida_ronly))
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['ci_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['ci_' . $this->nmgp_refresh_row] = "off";
                      }
                  }
                  elseif (isset($this->Embutida_ronly) && $this->Embutida_ronly)
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['ci_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['ci_' . $this->nmgp_refresh_row] = "on";
                      }
                  }

                  $this->NM_ajax_info['fldList']['name_' . $this->nmgp_refresh_row]['type']    = 'text';
                  $this->NM_ajax_info['fldList']['name_' . $this->nmgp_refresh_row]['valList'] = array($this->name_);
                  $this->NM_ajax_info['fldList']['name_' . $this->nmgp_refresh_row]['labList'] = array($tmpLabel_name_);

                  if ((isset($this->Embutida_form) && $this->Embutida_form) && (!isset($this->Embutida_ronly) || !$this->Embutida_ronly))
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['name_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['name_' . $this->nmgp_refresh_row] = "off";
                      }
                  }
                  elseif (isset($this->Embutida_ronly) && $this->Embutida_ronly)
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['name_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['name_' . $this->nmgp_refresh_row] = "on";
                      }
                  }

                  $this->NM_ajax_info['fldList']['email_' . $this->nmgp_refresh_row]['type']    = 'text';
                  $this->NM_ajax_info['fldList']['email_' . $this->nmgp_refresh_row]['valList'] = array($this->email_);
                  $this->NM_ajax_info['fldList']['email_' . $this->nmgp_refresh_row]['labList'] = array($tmpLabel_email_);

                  if ((isset($this->Embutida_form) && $this->Embutida_form) && (!isset($this->Embutida_ronly) || !$this->Embutida_ronly))
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['email_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['email_' . $this->nmgp_refresh_row] = "off";
                      }
                  }
                  elseif (isset($this->Embutida_ronly) && $this->Embutida_ronly)
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['email_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['email_' . $this->nmgp_refresh_row] = "on";
                      }
                  }

                  $this->NM_ajax_info['fldList']['login_' . $this->nmgp_refresh_row]['type']    = 'text';
                  $this->NM_ajax_info['fldList']['login_' . $this->nmgp_refresh_row]['valList'] = array($this->login_);
                  $this->NM_ajax_info['fldList']['login_' . $this->nmgp_refresh_row]['labList'] = array($tmpLabel_login_);

                  if ((isset($this->Embutida_form) && $this->Embutida_form) && (!isset($this->Embutida_ronly) || !$this->Embutida_ronly))
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['login_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['login_' . $this->nmgp_refresh_row] = "on";
                      }
                  }
                  elseif (isset($this->Embutida_ronly) && $this->Embutida_ronly)
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['login_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['login_' . $this->nmgp_refresh_row] = "on";
                      }
                  }

                  $this->NM_ajax_info['fldList']['pswd_' . $this->nmgp_refresh_row]['type']    = 'text';
                  $this->NM_ajax_info['fldList']['pswd_' . $this->nmgp_refresh_row]['valList'] = array($this->pswd_);
                  $this->NM_ajax_info['fldList']['pswd_' . $this->nmgp_refresh_row]['labList'] = array($tmpLabel_pswd_);

                  if ((isset($this->Embutida_form) && $this->Embutida_form) && (!isset($this->Embutida_ronly) || !$this->Embutida_ronly))
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['pswd_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['pswd_' . $this->nmgp_refresh_row] = "on";
                      }
                  }
                  elseif (isset($this->Embutida_ronly) && $this->Embutida_ronly)
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['pswd_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['pswd_' . $this->nmgp_refresh_row] = "on";
                      }
                  }

                  $aLookup = array();
 
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
   $nm_comando = "SELECT codigo, valor 
FROM catalogo WHERE tipo= 'acceso_sistema'
ORDER BY valor";
   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando)) 
   {
       while (!$rs->EOF) 
       { 
              $aLookup[] = array(form_sec_users_pack_protect_string($rs->fields[0]) => form_sec_users_pack_protect_string(NM_charset_to_utf8($rs->fields[1])));
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
          $sLabelTemp = '';
          foreach ($aLookup as $aValData)
          {
              if (key($aValData) == $this->access_fa_)
              {
                  $sLabelTemp = current($aValData);
              }
          }
          $tmpLabel_access_fa_ = $sLabelTemp;
                  $this->NM_ajax_info['fldList']['access_fa_' . $this->nmgp_refresh_row]['type']    = 'radio';
                  $this->NM_ajax_info['fldList']['access_fa_' . $this->nmgp_refresh_row]['valList'] = array($this->access_fa_);
                  $this->NM_ajax_info['fldList']['access_fa_' . $this->nmgp_refresh_row]['labList'] = array($tmpLabel_access_fa_);

                  if ((isset($this->Embutida_form) && $this->Embutida_form) && (!isset($this->Embutida_ronly) || !$this->Embutida_ronly))
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['access_fa_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['access_fa_' . $this->nmgp_refresh_row] = "off";
                      }
                  }
                  elseif (isset($this->Embutida_ronly) && $this->Embutida_ronly)
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['access_fa_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['access_fa_' . $this->nmgp_refresh_row] = "on";
                      }
                  }

                  $aLookup = array();
 
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
   $nm_comando = "SELECT codigo, valor 
FROM catalogo WHERE tipo= 'acceso_sistema'
ORDER BY valor";
   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando)) 
   {
       while (!$rs->EOF) 
       { 
              $aLookup[] = array(form_sec_users_pack_protect_string($rs->fields[0]) => form_sec_users_pack_protect_string(NM_charset_to_utf8($rs->fields[1])));
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
          $sLabelTemp = '';
          foreach ($aLookup as $aValData)
          {
              if (key($aValData) == $this->access_fp_)
              {
                  $sLabelTemp = current($aValData);
              }
          }
          $tmpLabel_access_fp_ = $sLabelTemp;
                  $this->NM_ajax_info['fldList']['access_fp_' . $this->nmgp_refresh_row]['type']    = 'radio';
                  $this->NM_ajax_info['fldList']['access_fp_' . $this->nmgp_refresh_row]['valList'] = array($this->access_fp_);
                  $this->NM_ajax_info['fldList']['access_fp_' . $this->nmgp_refresh_row]['labList'] = array($tmpLabel_access_fp_);

                  if ((isset($this->Embutida_form) && $this->Embutida_form) && (!isset($this->Embutida_ronly) || !$this->Embutida_ronly))
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['access_fp_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['access_fp_' . $this->nmgp_refresh_row] = "off";
                      }
                  }
                  elseif (isset($this->Embutida_ronly) && $this->Embutida_ronly)
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['access_fp_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['access_fp_' . $this->nmgp_refresh_row] = "on";
                      }
                  }

                  $aLookup = array();
 
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
   $nm_comando = "SELECT codigo, valor 
FROM catalogo WHERE tipo= 'acceso_sistema'
ORDER BY valor";
   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando)) 
   {
       while (!$rs->EOF) 
       { 
              $aLookup[] = array(form_sec_users_pack_protect_string($rs->fields[0]) => form_sec_users_pack_protect_string(NM_charset_to_utf8($rs->fields[1])));
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
          $sLabelTemp = '';
          foreach ($aLookup as $aValData)
          {
              if (key($aValData) == $this->access_im_)
              {
                  $sLabelTemp = current($aValData);
              }
          }
          $tmpLabel_access_im_ = $sLabelTemp;
                  $this->NM_ajax_info['fldList']['access_im_' . $this->nmgp_refresh_row]['type']    = 'radio';
                  $this->NM_ajax_info['fldList']['access_im_' . $this->nmgp_refresh_row]['valList'] = array($this->access_im_);
                  $this->NM_ajax_info['fldList']['access_im_' . $this->nmgp_refresh_row]['labList'] = array($tmpLabel_access_im_);

                  if ((isset($this->Embutida_form) && $this->Embutida_form) && (!isset($this->Embutida_ronly) || !$this->Embutida_ronly))
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['access_im_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['access_im_' . $this->nmgp_refresh_row] = "off";
                      }
                  }
                  elseif (isset($this->Embutida_ronly) && $this->Embutida_ronly)
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['access_im_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['access_im_' . $this->nmgp_refresh_row] = "on";
                      }
                  }

                  $aLookup = array();
 
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
   $nm_comando = "select codigo, valor from catalogo where tipo='zona'";
   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando)) 
   {
       while (!$rs->EOF) 
       { 
              $aLookup[] = array(form_sec_users_pack_protect_string($rs->fields[0]) => form_sec_users_pack_protect_string(NM_charset_to_utf8($rs->fields[1])));
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
          $sLabelTemp = '';
          foreach ($aLookup as $aValData)
          {
              if (key($aValData) == $this->zona_)
              {
                  $sLabelTemp = current($aValData);
              }
          }
          $tmpLabel_zona_ = $sLabelTemp;
                  $this->NM_ajax_info['fldList']['zona_' . $this->nmgp_refresh_row]['type']    = 'select';
                  $this->NM_ajax_info['fldList']['zona_' . $this->nmgp_refresh_row]['valList'] = array($this->zona_);
                  $this->NM_ajax_info['fldList']['zona_' . $this->nmgp_refresh_row]['labList'] = array($tmpLabel_zona_);

                  if ((isset($this->Embutida_form) && $this->Embutida_form) && (!isset($this->Embutida_ronly) || !$this->Embutida_ronly))
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['zona_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['zona_' . $this->nmgp_refresh_row] = "off";
                      }
                  }
                  elseif (isset($this->Embutida_ronly) && $this->Embutida_ronly)
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['zona_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['zona_' . $this->nmgp_refresh_row] = "on";
                      }
                  }

                  $aLookup = array();
 
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
   $nm_comando = "select cod_provincia, provincia from u_provincia where zona= '$this->zona_' order by provincia";
   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando)) 
   {
       while (!$rs->EOF) 
       { 
              $aLookup[] = array(form_sec_users_pack_protect_string($rs->fields[0]) => form_sec_users_pack_protect_string(NM_charset_to_utf8($rs->fields[1])));
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
          $sLabelTemp = '';
          foreach ($aLookup as $aValData)
          {
              if (key($aValData) == $this->cod_provincia_)
              {
                  $sLabelTemp = current($aValData);
              }
          }
          $tmpLabel_cod_provincia_ = $sLabelTemp;
                  $this->NM_ajax_info['fldList']['cod_provincia_' . $this->nmgp_refresh_row]['type']    = 'select';
                  $this->NM_ajax_info['fldList']['cod_provincia_' . $this->nmgp_refresh_row]['valList'] = array($this->cod_provincia_);
                  $this->NM_ajax_info['fldList']['cod_provincia_' . $this->nmgp_refresh_row]['labList'] = array($tmpLabel_cod_provincia_);

                  if ((isset($this->Embutida_form) && $this->Embutida_form) && (!isset($this->Embutida_ronly) || !$this->Embutida_ronly))
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['cod_provincia_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['cod_provincia_' . $this->nmgp_refresh_row] = "off";
                      }
                  }
                  elseif (isset($this->Embutida_ronly) && $this->Embutida_ronly)
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['cod_provincia_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['cod_provincia_' . $this->nmgp_refresh_row] = "on";
                      }
                  }


                  $this->nm_tira_formatacao();

                  $this->NM_ajax_info['closeLine'] = $this->nmgp_refresh_row;
              }
              if ('refresh_insert' != $this->nmgp_opcao && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['sc_redir_insert']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['sc_redir_insert'] != "S"))
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
          $this->login_ = substr($this->Db->qstr($this->login_), 1, -1); 

          $bDelecaoOk = true;
          $sMsgErro   = '';

          if ($bDelecaoOk)
          {

          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) from " . $this->Ini->nm_tabela . " where login = '$this->login_'"; 
              $rs1 = $this->Db->Execute("select count(*) from " . $this->Ini->nm_tabela . " where login = '$this->login_' "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) from " . $this->Ini->nm_tabela . " where login = '$this->login_'"; 
              $rs1 = $this->Db->Execute("select count(*) from " . $this->Ini->nm_tabela . " where login = '$this->login_' "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) from " . $this->Ini->nm_tabela . " where login = '$this->login_'"; 
              $rs1 = $this->Db->Execute("select count(*) from " . $this->Ini->nm_tabela . " where login = '$this->login_' "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) from " . $this->Ini->nm_tabela . " where login = '$this->login_'"; 
              $rs1 = $this->Db->Execute("select count(*) from " . $this->Ini->nm_tabela . " where login = '$this->login_' "); 
          }  
          else  
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) from " . $this->Ini->nm_tabela . " where login = '$this->login_'"; 
              $rs1 = $this->Db->Execute("select count(*) from " . $this->Ini->nm_tabela . " where login = '$this->login_' "); 
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
              $this->Campos_Mens_erro = $this->Ini->Nm_lang['lang_errm_dele_nfnd']; 
              $this->nmgp_opcao = "nada"; 
              $this->sc_evento = 'delete';
          } 
          else 
          { 
              $rs1->Close(); 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
              {
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "DELETE FROM " . $this->Ini->nm_tabela . " where login = '$this->login_' "; 
                  $rs = $this->Db->Execute("DELETE FROM " . $this->Ini->nm_tabela . " where login = '$this->login_' "); 
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
              {
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "DELETE FROM " . $this->Ini->nm_tabela . " where login = '$this->login_' "; 
                  $rs = $this->Db->Execute("DELETE FROM " . $this->Ini->nm_tabela . " where login = '$this->login_' "); 
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
              {
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "DELETE FROM " . $this->Ini->nm_tabela . " where login = '$this->login_' "; 
                  $rs = $this->Db->Execute("DELETE FROM " . $this->Ini->nm_tabela . " where login = '$this->login_' "); 
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              {
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "DELETE FROM " . $this->Ini->nm_tabela . " where login = '$this->login_' "; 
                  $rs = $this->Db->Execute("DELETE FROM " . $this->Ini->nm_tabela . " where login = '$this->login_' "); 
              }  
              else  
              {
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "DELETE FROM " . $this->Ini->nm_tabela . " where login = '$this->login_' "; 
                  $rs = $this->Db->Execute("DELETE FROM " . $this->Ini->nm_tabela . " where login = '$this->login_' "); 
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
                          form_sec_users_pack_ajax_response();
                          exit; 
                      }
                  } 
              } 
              $this->sc_evento = "delete"; 
              $this->nmgp_opcao = "avanca"; 
              $this->nm_flag_iframe = true;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['reg_start']--; 
              if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['reg_start'] < 0)
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['reg_start'] = 0; 
              }

              $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['db_changed'] = true;

              $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['reg_qtd']--; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['total']--; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['reg_I_E']--; 
              $this->NM_ajax_info['navSummary']['reg_ini'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['reg_start'] + 1; 
              $this->NM_ajax_info['navSummary']['reg_qtd'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['reg_qtd']; 
              $this->NM_ajax_info['navSummary']['reg_tot'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['total'] + 1; 
              $this->NM_gera_nav_page(); 
              $this->NM_ajax_info['navPage'] = $this->SC_nav_page; 
              $this->sc_teve_excl = true; 
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
        $_SESSION['scriptcase']['form_sec_users']['contr_erro'] = 'on';
   
$mail_smtp_server = 'mail.ieps.gob.ec';                  
$mail_smtp_user   = 'soporteieps@ieps.gob.ec';           
$mail_smtp_pass   = 'namd0gma1';                         
$mail_from        = 'soporteieps@ieps.gob.ec';           
$mail_to          = $email;                      	     
$mail_subject     = 'Creación Usuario Sistema CMI de FA';
$mail_message     = 'Estimado '.$name. ', ha sido creado como usuario en el Sistema	de Registro de Actores (SIU-CMI). <br><br>'; 
$mail_message     = $mail_message.'Las credenciales para su ingreso son las siguientes:<br><br> <b>Usuario</b>: '.$login.'<br><br><b>Contraseña</b>: '.$pswd.'<br><br>';
$mail_message     = $mail_message.'Muy pronto recibirá un correo electrónico con la activación de su cuenta.';

$mail_format      = 'H';                       


    include_once($this->Ini->path_third . "/swift/swift_required.php");
    $sc_mail_port     = "";
    $sc_mail_tp_port  = "N";
    $sc_mail_tp_mens  = "$mail_format";
    $sc_mail_tp_copy  = "Bcc";
    $this->sc_mail_count = 0;
    $this->sc_mail_erro  = "";
    $this->sc_mail_ok    = true;
    if ($sc_mail_tp_port == "S")
    { 
        $sc_mail_port = (!empty($sc_mail_port)) ? $sc_mail_port : 465;
        $Con_Mail = Swift_SmtpTransport::newInstance($mail_smtp_server, $sc_mail_port, 'ssl');
    }
    else
    { 
        $sc_mail_port = (!empty($sc_mail_port)) ? $sc_mail_port : 25;
        $Con_Mail = Swift_SmtpTransport::newInstance($mail_smtp_server, $sc_mail_port);
    }
    $Con_Mail->setUsername($mail_smtp_user);
    $Con_Mail->setpassword($mail_smtp_pass);
    $Send_Mail = Swift_Mailer::newInstance($Con_Mail);
    if ($sc_mail_tp_mens == "H")
    { 
        $Mens_Mail = Swift_Message::newInstance($mail_subject);
        $Mens_Mail->setBody(SC_Mail_Image($mail_message, $Mens_Mail))->setContentType("text/html");
    }
    else
    { 
        $Mens_Mail = Swift_Message::newInstance($mail_subject)->setBody($mail_message);
    }
    if (!empty($_SESSION['scriptcase']['charset']))
    { 
        $Mens_Mail->setCharset($_SESSION['scriptcase']['charset']);
    }
    $Temp_mail = $mail_to;
    if (!is_array($Temp_mail))
    { 
        $Temp_mail = explode(";", $mail_to);
    }
    foreach ($Temp_mail as $NM_dest)
    { 
        if (!empty($NM_dest))
        { 
            $Arr_addr = SC_Mail_Address($NM_dest);
            $Mens_Mail->addTo($Arr_addr[0], $Arr_addr[1]);
        }
    }
    $Arr_addr = SC_Mail_Address($mail_from);
    $this->sc_mail_count = $Send_Mail->send($Mens_Mail->setFrom($Arr_addr[0], $Arr_addr[1]), $Err_mail);
    if (!empty($Err_mail))
    { 
        $this->sc_mail_erro = $Err_mail;
        $this->sc_mail_ok   = false;
    }
;
$_SESSION['scriptcase']['form_sec_users']['contr_erro'] = 'off'; 
    }
      if (!empty($this->Campos_Mens_erro)) 
      {
          return;
      }
      if ($salva_opcao == "incluir" && $GLOBALS["erro_incl"] != 1) 
      { 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['parms'] = "login_?#?$this->login_?@?"; 
      }
      if ($this->sc_evento != "insert" && $this->sc_evento != "update" && $this->sc_evento != "delete")
      { 
          $this->login_ = substr($this->Db->qstr($this->login_), 1, -1); 
      } 
   }
//---------- 
   function nm_select_banco() 
   { 
      global $nm_form_submit, $sc_seq_vert, $sc_check_incl, $teste_validade, $sc_where;
 
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_sec_users']['rows']) && !empty($_SESSION['scriptcase']['sc_apl_conf']['form_sec_users']['rows']))
      {
          $this->sc_max_reg = $_SESSION['scriptcase']['sc_apl_conf']['form_sec_users']['rows'];
      } 
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_sec_users']['rows_ins']) && !empty($_SESSION['scriptcase']['sc_apl_conf']['form_sec_users']['rows_ins']))
      {
          $this->sc_max_reg_incl = $_SESSION['scriptcase']['sc_apl_conf']['form_sec_users']['rows_ins'];
      } 
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['embutida_liga_qtd_reg']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['embutida_liga_qtd_reg'])
      {
          $this->sc_max_reg = $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['embutida_liga_qtd_reg'];
      }
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $GLOBALS["NM_ERRO_IBASE"] = 0;  
      $this->form_vert_form_sec_users = array();
      if ($this->nmgp_opcao != "novo") 
      { 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['parms'] = ""; 
      } 
      if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
      { 
          $GLOBALS["NM_ERRO_IBASE"] = 1;  
      } 
      if ($this->sc_teve_excl)
      {
          $this->nmgp_opcao = "avanca";
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['reg_start'] -= $this->sc_max_reg;
      }
      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['reg_start']) || empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['reg_start']))
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['reg_start'] = 0;
      }
      if (isset($this->NM_where_filter))
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['where_filter'] = trim($this->NM_where_filter);
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['total']))
          {
              unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['total']);
          }
      }
      $sc_where_filter = '';
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['where_filter_form']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['where_filter_form'])
      {
          $sc_where_filter = $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['where_filter_form'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['where_filter']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['where_filter'])
      {
          if (empty($sc_where_filter))
          {
              $sc_where_filter = $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['where_filter'];
          }
          else
          {
              $sc_where_filter .= " and (" . $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['where_filter'] . ")";
          }
      }
      $sc_where = "";
      if ('' != $sc_where_filter)
      {
          $sc_where = (isset($sc_where) && '' != $sc_where) ? $sc_where . ' and ' . $sc_where_filter : ' where ' . $sc_where_filter;
      }
      if (isset($this->NM_ajax_opcao) && 'backup_line' == $this->NM_ajax_opcao)
      {
          if ('' == $sc_where)
          {
              $sc_where = " where (";
          }
          else
          {
              $sc_where .= " and (";
          }
          $sc_where .= "login_ = '" . $this->login_ . "'";
          $sc_where .= ")";
      }
      if ('total' != $this->form_paginacao)
      {
      if ((isset($_POST['master_nav']) && 'on' == $_POST['master_nav']) || !isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['total']))
      { 
          $nmgp_select = "SELECT count(*) from " . $this->Ini->nm_tabela . $sc_where; 
          $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_select; 
          $rt = $this->Db->Execute($nmgp_select) ; 
          if ($rt === false && !$rt->EOF && $GLOBALS["NM_ERRO_IBASE"] != 1) 
          { 
              $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
              exit ; 
          }  
          $qt_geral_reg_form_sec_users = isset($rt->fields[0]) ? $rt->fields[0] - 1 : 0; 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['total'] = $qt_geral_reg_form_sec_users;
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['reg_I_E'] = 0; 
          if (!$this->sc_teve_excl && !$this->sc_teve_incl) 
          { 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['reg_start'] = 0; 
          } 
          $rt->Close(); 
          if ($this->nmgp_opcao == "igual" && isset($this->NM_btn_navega) && 'S' == $this->NM_btn_navega && !empty($this->login_))
          {
              $Reg_OK      = false;
              $Count_start = -1;
              $sc_order_by = "";
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
              {
                  $Sel_Chave = "login"; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
              {
                  $Sel_Chave = "login"; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              {
                  $Sel_Chave = "login"; 
              }
              else  
              {
                  $Sel_Chave = "login"; 
              }
              $nmgp_select = "SELECT " . $Sel_Chave . " from " . $this->Ini->nm_tabela . $sc_where; 
              $sc_order_by = "zona,cod_provincia,usr_active";
              $sc_order_by = str_replace("order by ", "", $sc_order_by);
              $sc_order_by = str_replace("ORDER BY ", "", trim($sc_order_by));
              if (!empty($sc_order_by))
              {
                  $nmgp_select .= " order by $sc_order_by "; 
              }
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_select; 
              $rt = $this->Db->Execute($nmgp_select) ; 
              if ($rt === false && !$rt->EOF && $GLOBALS["NM_ERRO_IBASE"] != 1) 
              { 
                  $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
                  exit ; 
              }  
              while (!$rt->EOF && !$Reg_OK)
              { 
                  if ($rt->fields[0] == $this->login_)
                  { 
                      $Reg_OK = true;
                  }  
                  $Count_start++;
                  $rt->MoveNext();
              }  
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['reg_start'] = $Count_start;
              $rt->Close(); 
          }
      } 
      else 
      { 
          $qt_geral_reg_form_sec_users = $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['total'];
      } 
      if ($this->nmgp_opcao == "inicio" || $this->nmgp_opcao == "ordem") 
      { 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['reg_start'] = 0; 
      } 
      if ($this->nmgp_opcao == "navpage") 
      { 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['reg_start'] = $this->nmgp_ordem - 1; 
      } 
      if ($this->nmgp_opcao == "avanca")  
      { 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['reg_start'] += ($this->sc_max_reg + $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['reg_I_E']); 
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['reg_start'] > $qt_geral_reg_form_sec_users)
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['reg_start'] = $qt_geral_reg_form_sec_users - $this->sc_max_reg; 
              if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['reg_start'] < 0)
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['reg_start'] = 0; 
              }
          }
      } 
      if ($this->nmgp_opcao == "retorna") 
      { 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['reg_start'] -= $this->sc_max_reg; 
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['reg_start'] < 0)
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['reg_start'] = 0; 
          }
      } 
      if ($this->nmgp_opcao == "final") 
      { 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['reg_start'] = ($qt_geral_reg_form_sec_users + 1) - $this->sc_max_reg; 
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['reg_start'] < 0)
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['reg_start'] = 0; 
          }
      } 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['reg_I_E'] = 0; 
      }
      $sc_order_by = "";
      $sc_order_by = "zona,cod_provincia,usr_active";
      $sc_order_by = str_replace("order by ", "", $sc_order_by);
      $sc_order_by = str_replace("ORDER BY ", "", trim($sc_order_by));
      if (!empty($sc_order_by))
      {
          $sc_order_by = " order by $sc_order_by "; 
      }
      if ($this->nmgp_opcao == "ordem") 
      { 
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['ordem_cmp'] != $this->nmgp_ordem)
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['ordem_cmp'] = $this->nmgp_ordem; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['ordem_ord'] = ' asc'; 
          }
          elseif ($_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['ordem_ord'] == ' asc')
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['ordem_ord'] = ' desc'; 
          }
          else
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['ordem_ord'] = ' asc'; 
          }
      } 
      if (!empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['ordem_cmp'])) 
      { 
          $sc_order_by = " order by " . $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['ordem_cmp'] . $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['ordem_ord']; 
      } 
      if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sybase))
      { 
          $nmgp_select = "SELECT login, pswd, name, ci, email, usr_active, activation_code, priv_admin, zona, fecha_registro, departamento, cod_provincia, ingreso, access_fa, access_im, access_fp, access_siu from " . $this->Ini->nm_tabela . $sc_where . $sc_order_by; 
      } 
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
      { 
          $nmgp_select = "SELECT login, pswd, name, ci, email, usr_active, activation_code, priv_admin, zona, fecha_registro, departamento, cod_provincia, ingreso, access_fa, access_im, access_fp, access_siu from " . $this->Ini->nm_tabela . $sc_where . $sc_order_by; 
      } 
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
      { 
          $nmgp_select = "SELECT login, pswd, name, ci, email, usr_active, activation_code, priv_admin, zona, TO_DATE(TO_CHAR(fecha_registro, 'yyyy-mm-dd hh24:mi:ss'), 'yyyy-mm-dd hh24:mi:ss'), departamento, cod_provincia, ingreso, access_fa, access_im, access_fp, access_siu from " . $this->Ini->nm_tabela . $sc_where . $sc_order_by; 
      } 
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
      { 
          $nmgp_select = "SELECT login, pswd, name, ci, email, usr_active, activation_code, priv_admin, zona, fecha_registro, departamento, cod_provincia, ingreso, access_fa, access_im, access_fp, access_siu from " . $this->Ini->nm_tabela . $sc_where . $sc_order_by; 
      } 
      else 
      { 
          $nmgp_select = "SELECT login, pswd, name, ci, email, usr_active, activation_code, priv_admin, zona, fecha_registro, departamento, cod_provincia, ingreso, access_fa, access_im, access_fp, access_siu from " . $this->Ini->nm_tabela . $sc_where . $sc_order_by; 
      } 
      if ($this->nmgp_opcao != "novo") 
      { 
      if (isset($this->NM_ajax_opcao) && 'backup_line' == $this->NM_ajax_opcao)
      {
          $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_select;
          $rs = $this->Db->Execute($nmgp_select) ;
      }
      elseif ('total' == $this->form_paginacao)
      {
          $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_select; 
          $rs = $this->Db->Execute($nmgp_select) ; 
      }
      else
      {
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['run_iframe'] == "R")
          { 
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_select; 
              $rs = $this->Db->Execute($nmgp_select) ; 
          } 
          else 
          { 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql) || in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres) || in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle) || in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase) || in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_db2))
              { 
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "SelectLimit($nmgp_select, $this->sc_max_reg, " . $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['reg_start'] . ")" ; 
                  $rs = $this->Db->SelectLimit($nmgp_select, $this->sc_max_reg, $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['reg_start']) ; 
              } 
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
              { 
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "SelectLimit($nmgp_select, $this->sc_max_reg, " . $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['reg_start'] . ")" ; 
                  $rs = $this->Db->SelectLimit($nmgp_select, $this->sc_max_reg, $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['reg_start']) ; 
              } 
              else  
              { 
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_select; 
                  $rs = $this->Db->Execute($nmgp_select) ; 
                  if (!$rs === false && !$rs->EOF) 
                  { 
                      $rs->Move($_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['reg_start']) ;  
                  } 
              } 
          } 
      }
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
          if ($rs->EOF && !$this->proc_fast_search) 
          { 
              $this->nm_flag_saida_novo = "S"; 
              $this->nmgp_opcao = "novo"; 
              $this->sc_evento  = "novo"; 
              if ($this->aba_iframe)
              {
                  $this->nmgp_botoes['exit'] = 'off';
              }
          } 
          if ($rs->EOF && $this->nmgp_botoes['new'] != "on" && !$this->proc_fast_search)
          {
              $this->nmgp_form_empty = true;
          }
          if ($rs->EOF)
          {
              $sc_seq_vert = 0; 
          }
          else
          {
              $sc_seq_vert = 1; 
          }
          if ('total' == $this->form_paginacao)
          {
              $bPagTest = true;
          }
          else
          {
              $bPagTest = $sc_seq_vert <= $this->sc_max_reg;
          }
          while (!$rs->EOF && $bPagTest)
          { 
              if (isset($this->NM_ajax_opcao) && 'backup_line' == $this->NM_ajax_opcao)
              {
                  $guard_seq_vert = $sc_seq_vert;
                  $sc_seq_vert    = $this->nmgp_refresh_row;
              }
              if ('total' != $this->form_paginacao)
              {
              if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['run_iframe'] == "R")
              { 
                  $this->sc_max_reg++;
              } 
              }
              $this->login_ = $rs->fields[0] ; 
              $this->nmgp_dados_select['login_'] = $this->login_;
              $this->pswd_ = $rs->fields[1] ; 
              $this->nmgp_dados_select['pswd_'] = $this->pswd_;
              $this->name_ = $rs->fields[2] ; 
              $this->nmgp_dados_select['name_'] = $this->name_;
              $this->ci_ = $rs->fields[3] ; 
              $this->nmgp_dados_select['ci_'] = $this->ci_;
              $this->email_ = $rs->fields[4] ; 
              $this->nmgp_dados_select['email_'] = $this->email_;
              $this->usr_active_ = $rs->fields[5] ; 
              $this->nmgp_dados_select['usr_active_'] = $this->usr_active_;
              $this->activation_code_ = $rs->fields[6] ; 
              $this->nmgp_dados_select['activation_code_'] = $this->activation_code_;
              $this->priv_admin_ = $rs->fields[7] ; 
              $this->nmgp_dados_select['priv_admin_'] = $this->priv_admin_;
              $this->zona_ = $rs->fields[8] ; 
              $this->nmgp_dados_select['zona_'] = $this->zona_;
              $this->fecha_registro_ = $rs->fields[9] ; 
              if (substr($this->fecha_registro_, 10, 1) == "-") 
              { 
                 $this->fecha_registro_ = substr($this->fecha_registro_, 0, 10) . " " . substr($this->fecha_registro_, 11);
              } 
              if (substr($this->fecha_registro_, 13, 1) == ".") 
              { 
                 $this->fecha_registro_ = substr($this->fecha_registro_, 0, 13) . ":" . substr($this->fecha_registro_, 14, 2) . ":" . substr($this->fecha_registro_, 17);
              } 
              $this->nmgp_dados_select['fecha_registro_'] = $this->fecha_registro_;
              $this->departamento_ = $rs->fields[10] ; 
              $this->nmgp_dados_select['departamento_'] = $this->departamento_;
              $this->cod_provincia_ = $rs->fields[11] ; 
              $this->nmgp_dados_select['cod_provincia_'] = $this->cod_provincia_;
              $this->ingreso_ = $rs->fields[12] ; 
              $this->nmgp_dados_select['ingreso_'] = $this->ingreso_;
              $this->access_fa_ = $rs->fields[13] ; 
              $this->nmgp_dados_select['access_fa_'] = $this->access_fa_;
              $this->access_im_ = $rs->fields[14] ; 
              $this->nmgp_dados_select['access_im_'] = $this->access_im_;
              $this->access_fp_ = $rs->fields[15] ; 
              $this->nmgp_dados_select['access_fp_'] = $this->access_fp_;
              $this->access_siu_ = $rs->fields[16] ; 
              $this->nmgp_dados_select['access_siu_'] = $this->access_siu_;
              $GLOBALS["NM_ERRO_IBASE"] = 0; 
              $this->zona_ = (string)$this->zona_; 
              $this->ingreso_ = (string)$this->ingreso_; 
              if (empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['parms'])) 
              { 
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['parms'] = "login_?#?$this->login_?@?";
              } 
              $this->nm_proc_onload_record($sc_seq_vert);
//
//-- 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['dados_select'][$sc_seq_vert] = $this->nmgp_dados_select;
              $this->nm_guardar_campos();
              $this->nm_formatar_campos();
             $this->form_vert_form_sec_users[$sc_seq_vert]['usr_active_'] =  $this->usr_active_; 
             $this->form_vert_form_sec_users[$sc_seq_vert]['ci_'] =  $this->ci_; 
             $this->form_vert_form_sec_users[$sc_seq_vert]['name_'] =  $this->name_; 
             $this->form_vert_form_sec_users[$sc_seq_vert]['email_'] =  $this->email_; 
             $this->form_vert_form_sec_users[$sc_seq_vert]['login_'] =  $this->login_; 
             $this->form_vert_form_sec_users[$sc_seq_vert]['pswd_'] =  $this->pswd_; 
             $this->form_vert_form_sec_users[$sc_seq_vert]['access_fa_'] =  $this->access_fa_; 
             $this->form_vert_form_sec_users[$sc_seq_vert]['access_fp_'] =  $this->access_fp_; 
             $this->form_vert_form_sec_users[$sc_seq_vert]['access_im_'] =  $this->access_im_; 
             $this->form_vert_form_sec_users[$sc_seq_vert]['zona_'] =  $this->zona_; 
             $this->form_vert_form_sec_users[$sc_seq_vert]['cod_provincia_'] =  $this->cod_provincia_; 
             $this->form_vert_form_sec_users[$sc_seq_vert]['activation_code_'] =  $this->activation_code_; 
             $this->form_vert_form_sec_users[$sc_seq_vert]['priv_admin_'] =  $this->priv_admin_; 
             $this->form_vert_form_sec_users[$sc_seq_vert]['fecha_registro_'] =  $this->fecha_registro_; 
             $this->form_vert_form_sec_users[$sc_seq_vert]['fecha_registro__hora'] =  $this->fecha_registro__hora; 
             $this->form_vert_form_sec_users[$sc_seq_vert]['departamento_'] =  $this->departamento_; 
             $this->form_vert_form_sec_users[$sc_seq_vert]['ingreso_'] =  $this->ingreso_; 
             $this->form_vert_form_sec_users[$sc_seq_vert]['access_siu_'] =  $this->access_siu_; 
              $sc_seq_vert++; 
              $rs->MoveNext() ; 
              if (isset($this->NM_ajax_opcao) && 'backup_line' == $this->NM_ajax_opcao)
              {
                  $sc_seq_vert = $guard_seq_vert;
              }
              if ('total' != $this->form_paginacao)
              {
                  $bPagTest = $sc_seq_vert <= $this->sc_max_reg;
              }
          } 
          ksort ($this->form_vert_form_sec_users); 
          $rs->Close(); 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['reg_qtd'] = $sc_seq_vert + $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['reg_start'] - 1;
          $this->NM_ajax_info['navSummary']['reg_ini'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['reg_start'] + 1; 
          $this->NM_ajax_info['navSummary']['reg_qtd'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['reg_qtd']; 
          $this->NM_ajax_info['navSummary']['reg_tot'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['total'] + 1; 
          $this->NM_gera_nav_page(); 
          $this->NM_ajax_info['navPage'] = $this->SC_nav_page; 
          if (!$this->NM_ajax_flag || 'backup_line' != $this->NM_ajax_opcao)
          {
              $this->Nav_permite_ret = 0 != $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['reg_start'];
              $this->Nav_permite_ava = $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['reg_start'] < (($qt_geral_reg_form_sec_users + 1) - $this->sc_max_reg);
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['opcao'] = '';
          }
      } 
      if ($this->nmgp_opcao == "novo") 
      { 
          $sc_seq_vert = 1; 
          $sc_check_incl = array(); 
          if ($this->NM_ajax_flag && 'add_new_line' == $this->NM_ajax_opcao) 
          { 
              $sc_seq_vert = $this->sc_seq_vert; 
              $this->sc_evento = "novo"; 
              $this->sc_max_reg_incl = $this->sc_seq_vert; 
          } 
          else 
          { 
              $this->sc_max_reg_incl = 0; 
          } 
          while ($sc_seq_vert <= $this->sc_max_reg_incl) 
          { 
              $this->login_ = "";  
              $this->pswd_ = "";  
              $this->name_ = "";  
              $this->ci_ = "";  
              $this->email_ = "";  
              $this->usr_active_ = "";  
              $this->zona_ = "";  
              $this->cod_provincia_ = "";  
              $this->access_fa_ = "";  
              $this->access_im_ = "";  
              $this->access_fp_ = "";  
              $this->nm_proc_onload_record($sc_seq_vert);
              if (($this->Embutida_form || $this->Embutida_multi) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['foreign_key']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['foreign_key']))
              {
                  foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['foreign_key'] as $sFKName => $sFKValue)
                  {
                      if (isset($this->sc_conv_var[$sFKName]))
                      {
                          $sFKName = $this->sc_conv_var[$sFKName];
                      }
                      eval("\$this->" . $sFKName . " = \"" . $sFKValue . "\";");
                  }
              }
              $this->nm_guardar_campos();
              $this->nm_formatar_campos();
             $this->form_vert_form_sec_users[$sc_seq_vert]['usr_active_'] =  $this->usr_active_; 
             $this->form_vert_form_sec_users[$sc_seq_vert]['ci_'] =  $this->ci_; 
             $this->form_vert_form_sec_users[$sc_seq_vert]['name_'] =  $this->name_; 
             $this->form_vert_form_sec_users[$sc_seq_vert]['email_'] =  $this->email_; 
             $this->form_vert_form_sec_users[$sc_seq_vert]['login_'] =  $this->login_; 
             $this->form_vert_form_sec_users[$sc_seq_vert]['pswd_'] =  $this->pswd_; 
             $this->form_vert_form_sec_users[$sc_seq_vert]['access_fa_'] =  $this->access_fa_; 
             $this->form_vert_form_sec_users[$sc_seq_vert]['access_fp_'] =  $this->access_fp_; 
             $this->form_vert_form_sec_users[$sc_seq_vert]['access_im_'] =  $this->access_im_; 
             $this->form_vert_form_sec_users[$sc_seq_vert]['zona_'] =  $this->zona_; 
             $this->form_vert_form_sec_users[$sc_seq_vert]['cod_provincia_'] =  $this->cod_provincia_; 
             $this->form_vert_form_sec_users[$sc_seq_vert]['activation_code_'] =  $this->activation_code_; 
             $this->form_vert_form_sec_users[$sc_seq_vert]['priv_admin_'] =  $this->priv_admin_; 
             $this->form_vert_form_sec_users[$sc_seq_vert]['fecha_registro_'] =  $this->fecha_registro_; 
             $this->form_vert_form_sec_users[$sc_seq_vert]['fecha_registro__hora'] =  $this->fecha_registro__hora; 
             $this->form_vert_form_sec_users[$sc_seq_vert]['departamento_'] =  $this->departamento_; 
             $this->form_vert_form_sec_users[$sc_seq_vert]['ingreso_'] =  $this->ingreso_; 
             $this->form_vert_form_sec_users[$sc_seq_vert]['access_siu_'] =  $this->access_siu_; 
              $sc_seq_vert++; 
          } 
      }  
  }
   function NM_gera_nav_page() 
   {
       $this->SC_nav_page = "";
       $Reg_Page   = $this->sc_max_reg;
       $Max_link   = 5;
       $Mid_link   = ceil($Max_link / 2);
       $Corr_link  = (($Max_link % 2) == 0) ? 0 : 1;
       $rec_tot    = $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['total'] + 1;
       $rec_fim    = $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['reg_start'] + $this->sc_max_reg;
       $rec_fim    = ($rec_fim > $rec_tot) ? $rec_tot : $rec_fim;
       if ($rec_tot == 0)
       {
           return;
       }
       $Qtd_Pages  = ceil($rec_tot / $Reg_Page);
       $Page_Atu   = ceil($rec_fim / $Reg_Page);
       $Link_ini   = 1;
       if ($Page_Atu > $Max_link)
       {
           $Link_ini = $Page_Atu - $Mid_link + $Corr_link;
       }
       elseif ($Page_Atu > $Mid_link)
       {
           $Link_ini = $Page_Atu - $Mid_link + $Corr_link;
       }
       if (($Qtd_Pages - $Link_ini) < $Max_link)
       {
           $Link_ini = ($Qtd_Pages - $Max_link) + 1;
       }
       if ($Link_ini < 1)
       {
           $Link_ini = 1;
       }
       for ($x = 0; $x < $Max_link && $Link_ini <= $Qtd_Pages; $x++)
       {
           $rec = (($Link_ini - 1) * $Reg_Page) + 1;
           if ($Link_ini == $Page_Atu)
           {
               $this->SC_nav_page .= '<span class="scFormToolbarNavOpen" style="vertical-align: middle;">' . $Link_ini . '</span>';
           }
           else
           {
               $this->SC_nav_page .= '<a class="scFormToolbarNav" style="vertical-align: middle;" href="javascript: nm_navpage(' . $rec . ')">' . $Link_ini . '</a>';
           }
           $Link_ini++;
           if (($x + 1) < $Max_link && $Link_ini <= $Qtd_Pages && '' != $this->Ini->Str_toolbarnav_separator && @is_file($this->Ini->root . $this->Ini->path_img_global . $this->Ini->Str_toolbarnav_separator))
           {
               $this->SC_nav_page .= '<img src="' . $this->Ini->path_img_global . $this->Ini->Str_toolbarnav_separator . '" align="absmiddle" style="vertical-align: middle;">';
           }
       }
   }
//
function control_session()
{
$_SESSION['scriptcase']['form_sec_users']['contr_erro'] = 'on';
   
	
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
$_SESSION['scriptcase']['form_sec_users']['contr_erro'] = 'off';
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
     $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['botoes'] = $this->nmgp_botoes;
     if ($this->nmgp_opcao != "recarga" && $this->nmgp_opcao != "muda_form")
     {
         $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['opc_ant'] = $this->nmgp_opcao;
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
     if (($_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['run_iframe'] == "R") && $this->nm_flag_iframe && empty($this->nm_todas_criticas))
     {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['run_iframe_ajax']))
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['retorno_edit'] = array("edit", "");
          }
          else
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['retorno_edit'] .= "&nmgp_opcao=edit";
          }
          if ($this->sc_evento == "insert" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['run_iframe'] == "F")
          {
              if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['run_iframe_ajax']))
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['retorno_edit'] = array("edit", "fim");
              }
              else
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['retorno_edit'] .= "&rec=fim";
              }
          }
          $this->NM_close_db(); 
          if ($this->sc_evento == "insert")
          {
              $this->nm_gera_mensagem("Se ha guardado correctamente la información.", $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['retorno_edit'], "parent"); 
          }
          if ($this->sc_evento == "update")
          {
              $this->nm_gera_mensagem("Se ha actualizado correctamente la información.", $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['retorno_edit'], "parent"); 
          }
          if ($this->sc_evento == "delete")
          {
              $this->nm_gera_mensagem("Se ha eliminado correctamente la información.", $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['retorno_edit'], "parent"); 
          }
          $sJsParent = '';
          if ($this->NM_ajax_flag && isset($this->NM_ajax_info['param']['buffer_output']) && $this->NM_ajax_info['param']['buffer_output'])
          {
              if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['run_iframe_ajax']))
              {
                  $this->NM_ajax_info['ajaxJavascript'][] = array("parent.ajax_navigate", $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['retorno_edit']);
              }
              else
              {
                  $sJsParent .= 'parent';
                  $this->NM_ajax_info['redir']['metodo'] = 'location';
                  $this->NM_ajax_info['redir']['action'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['retorno_edit'];
                  $this->NM_ajax_info['redir']['target'] = $sJsParent;
              }
              form_sec_users_pack_ajax_response();
              exit;
          }
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
            "http://www.w3.org/TR/1999/REC-html401-19991224/loose.dtd">

         <html><body>
         <script type="text/javascript">
<?php
    
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['run_iframe_ajax']))
    {
        $opc = ($_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['run_iframe'] == "F" && $this->sc_evento == "insert") ? "fim" : "";
        echo "parent.ajax_navigate('edit', '" .$opc . "');";
    }
    else
    {
        echo $sJsParent . "parent.location = '" . $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['retorno_edit'] . "';";
    }
?>
         </script>
         </body></html>
<?php
         exit;
     }
   if ($this->NM_ajax_flag && 'add_new_line' == $this->NM_ajax_opcao)
   {
        $this->Form_Corpo(true);
   }
   elseif ($this->NM_ajax_flag && 'table_refresh' == $this->NM_ajax_opcao)
   {
        $this->Form_Table(true);
        $this->Form_Corpo(false, true);
   }
   else
   {
        $this->Form_Init();
        $this->Form_Table();
        $this->Form_Corpo();
        $this->Form_Fim();
   }
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
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['where_filter']);
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['total']);
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['fast_search']);
          return;
      }
      $comando = "";
      $sv_data = $data_search;
      if ($field == "SC_all_Cmp") 
      {
          $data_lookup = $this->SC_lookup_usr_active_($arg_search, $data_search);
          if (is_array($data_lookup) && !empty($data_lookup)) 
          {
              $this->SC_monta_condicao($comando, "usr_active", $arg_search, $data_lookup);
          }
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "ci", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "name", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "email", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "login", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "pswd", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $data_lookup = $this->SC_lookup_access_fa_($arg_search, $data_search);
          if (is_array($data_lookup) && !empty($data_lookup)) 
          {
              $this->SC_monta_condicao($comando, "access_fa", $arg_search, $data_lookup);
          }
      }
      if ($field == "SC_all_Cmp") 
      {
          $data_lookup = $this->SC_lookup_access_fp_($arg_search, $data_search);
          if (is_array($data_lookup) && !empty($data_lookup)) 
          {
              $this->SC_monta_condicao($comando, "access_fp", $arg_search, $data_lookup);
          }
      }
      if ($field == "SC_all_Cmp") 
      {
          $data_lookup = $this->SC_lookup_access_im_($arg_search, $data_search);
          if (is_array($data_lookup) && !empty($data_lookup)) 
          {
              $this->SC_monta_condicao($comando, "access_im", $arg_search, $data_lookup);
          }
      }
      if ($field == "SC_all_Cmp") 
      {
          $data_lookup = $this->SC_lookup_zona_($arg_search, $data_search);
          if (is_array($data_lookup) && !empty($data_lookup)) 
          {
              $this->SC_monta_condicao($comando, "zona", $arg_search, $data_lookup);
          }
      }
      if ($field == "SC_all_Cmp") 
      {
          $data_lookup = $this->SC_lookup_cod_provincia_($arg_search, $data_search);
          if (is_array($data_lookup) && !empty($data_lookup)) 
          {
              $this->SC_monta_condicao($comando, "cod_provincia", $arg_search, $data_lookup);
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
     $qt_geral_reg_form_sec_users = isset($rt->fields[0]) ? $rt->fields[0] - 1 : 0; 
     $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['total'] = $qt_geral_reg_form_sec_users;
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['where_filter'] = $comando;
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['fast_search'][0] = $field;
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['fast_search'][1] = $arg_search;
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['fast_search'][2] = $sv_data;
      $rt->Close(); 
   }
   function SC_monta_condicao(&$comando, $nome, $condicao, $campo, $tp_campo="")
   {
      $nm_aspas   = "'";
      $nm_numeric = array();
      $campo_join = strtolower(str_replace(".", "_", $nome));
      $nm_ini_lower = "";
      $nm_fim_lower = "";
      $nm_numeric[] = "zona";$nm_numeric[] = "ingreso";
      if (in_array($campo_join, $nm_numeric))
      {
         if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['decimal_db'] == ".")
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
   function SC_lookup_usr_active_($condicao, $campo)
   {
       return false;
   }
   function SC_lookup_access_fa_($condicao, $campo)
   {
       return false;
   }
   function SC_lookup_access_fp_($condicao, $campo)
   {
       return false;
   }
   function SC_lookup_access_im_($condicao, $campo)
   {
       return false;
   }
   function SC_lookup_zona_($condicao, $campo)
   {
       return false;
   }
   function SC_lookup_cod_provincia_($condicao, $campo)
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
   function SC_lookup_departamento_($condicao, $campo)
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
   if ($tipo == 2 && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['sc_outra_jan']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['sc_outra_jan'])
   {
       $nmgp_saida_form = "form_sec_users_fim.php";
   }
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['redir']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['redir'] == 'redir')
   {
       unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']);
   }
   unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['opc_ant']);
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
       form_sec_users_pack_ajax_response();
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
               $tmp_parms .= $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users'][substr($val, 1, -1)];
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
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['opcao'] = "";
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['retorno_edit'] = "";
   }
   $nm_target_form = (empty($nm_target)) ? "_self" : $nm_target;
   if (strtolower(substr($nm_apl_dest, -4)) != ".php" && (strtolower(substr($nm_apl_dest, 0, 7)) == "http://" || strtolower(substr($nm_apl_dest, 0, 8)) == "https://" || strtolower(substr($nm_apl_dest, 0, 3)) == "../"))
   {
       if ($this->NM_ajax_flag)
       {
           $this->NM_ajax_info['redir']['metodo'] = 'location';
           $this->NM_ajax_info['redir']['action'] = $nm_apl_dest;
           $this->NM_ajax_info['redir']['target'] = $nm_target_form;
           form_sec_users_pack_ajax_response();
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
       form_sec_users_pack_ajax_response();
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
    if ($nm_apl_dest == "form_sec_users.php")
    {
        $form_submit = 1;
        $form_opcao  = $this->nmgp_opcao;
    }
    if ("novo" == $this->nmgp_opcao || "insert" == $this->sc_evento)
    {
        $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['opc_ant'] = "";
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
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['sc_outra_jan']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['sc_outra_jan'] && $nm_apl_retorno == 'sc_sai')
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
<input type=hidden name="nmgp_opcao" value="igual">
<input type="hidden" name="nmgp_parms" value=""/>
<input type="hidden" name="nmgp_url_saida" value="<?php echo NM_encode_input($nm_apl_retorno); ?>">
<input type=hidden name="script_case_init" value="<?php echo NM_encode_input($this->Ini->sc_page); ?>"> 
<input type=hidden name="script_case_session" value="<?php echo NM_encode_input(session_id()); ?>"> 
<table align="center"> 
<tr><td> 
<TABLE  class="scFormTable">
  <TR>
    <TD  class="scFormDataOddMult"><?php echo $nm_mensagem; ?></TD>
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
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['run_iframe_ajax']))
        {
            echo "parent.ajax_navigate('edit', '" . $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['retorno_edit'][1] . "');";
        }
        else
        {
            echo "parent.location = '" . $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['retorno_edit'] . "';"; 
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
        $this->NM_ajax_info['redir']['action'] = form_sec_users_pack_protect_string(ob_get_contents());
        ob_end_clean();
        ob_start();
        form_sec_users_pack_ajax_response();
    }
    exit;
 }
}
?>
