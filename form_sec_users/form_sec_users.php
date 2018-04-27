<?php
//
   include_once('form_sec_users_session.php');
   @session_start() ;
   $_SESSION['scriptcase']['form_sec_users']['glo_nm_perfil']          = "conn_mysql";
   $_SESSION['scriptcase']['form_sec_users']['glo_nm_path_prod']       = "";
   $_SESSION['scriptcase']['form_sec_users']['glo_nm_path_imagens']    = "";
   $_SESSION['scriptcase']['form_sec_users']['glo_nm_path_imag_temp']  = "";
   $_SESSION['scriptcase']['form_sec_users']['glo_nm_path_doc']        = "";
//
class form_sec_users_ini
{
   var $nm_cod_apl;
   var $nm_nome_apl;
   var $nm_seguranca;
   var $nm_grupo;
   var $nm_grupo_versao;
   var $nm_autor;
   var $nm_versao_sc;
   var $nm_tp_lic_sc;
   var $nm_dt_criacao;
   var $nm_hr_criacao;
   var $nm_autor_alt;
   var $nm_dt_ult_alt;
   var $nm_hr_ult_alt;
   var $nm_timestamp;
   var $cor_bg_table;
   var $border_grid;
   var $cor_bg_grid;
   var $cor_cab_grid;
   var $cor_borda;
   var $cor_txt_cab_grid;
   var $cab_fonte_tipo;
   var $cab_fonte_tamanho;
   var $rod_fonte_tipo;
   var $rod_fonte_tamanho;
   var $cor_rod_grid;
   var $cor_txt_rod_grid;
   var $cor_barra_nav;
   var $cor_titulo;
   var $cor_txt_titulo;
   var $titulo_fonte_tipo;
   var $titulo_fonte_tamanho;
   var $cor_grid_impar;
   var $cor_grid_par;
   var $cor_txt_grid;
   var $texto_fonte_tipo;
   var $texto_fonte_tamanho;
   var $cor_lin_grupo;
   var $cor_txt_grupo;
   var $grupo_fonte_tipo;
   var $grupo_fonte_tamanho;
   var $cor_lin_sub_tot;
   var $cor_txt_sub_tot;
   var $sub_tot_fonte_tipo;
   var $sub_tot_fonte_tamanho;
   var $cor_lin_tot;
   var $cor_txt_tot;
   var $tot_fonte_tipo;
   var $tot_fonte_tamanho;
   var $cor_link_cab;
   var $cor_link_dados;
   var $img_fun_pag;
   var $img_fun_cab;
   var $img_fun_rod;
   var $img_fun_tit;
   var $img_fun_gru;
   var $img_fun_tot;
   var $img_fun_sub;
   var $img_fun_imp;
   var $img_fun_par;
   var $root;
   var $server;
   var $sc_protocolo;
   var $path_prod;
   var $path_link;
   var $path_aplicacao;
   var $path_embutida;
   var $path_botoes;
   var $path_img_global;
   var $path_img_modelo;
   var $path_icones;
   var $path_imagens;
   var $path_imag_cab;
   var $path_imag_temp;
   var $path_libs;
   var $path_doc;
   var $str_lang;
   var $str_schema_all;
   var $str_conf_reg;
   var $path_cep;
   var $path_secure;
   var $path_js;
   var $path_adodb;
   var $path_grafico;
   var $path_atual;
   var $Gd_missing;
   var $sc_site_ssl;
   var $nm_cont_lin;
   var $nm_limite_lin;
   var $nm_limite_lin_prt;
   var $nm_falta_var;
   var $nm_falta_var_db;
   var $nm_tpbanco;
   var $nm_servidor;
   var $nm_usuario;
   var $nm_senha;
   var $nm_database_encoding;
   var $nm_con_db2 = array();
   var $nm_con_persistente;
   var $nm_con_use_schema;
   var $nm_tabela;
   var $nm_col_dinamica   = array();
   var $nm_order_dinamico = array();
   var $nm_hidden_blocos  = array();
   var $sc_tem_trans_banco;
   var $nm_bases_all;
   var $nm_bases_access;
   var $nm_bases_db2;
   var $nm_bases_ibase;
   var $nm_bases_informix;
   var $nm_bases_mssql;
   var $nm_bases_mysql;
   var $nm_bases_postgres;
   var $nm_bases_oracle;
   var $nm_bases_sqlite;
   var $nm_bases_sybase;
   var $nm_bases_vfp;
   var $nm_bases_odbc;
   var $sc_page;
//
   function init()
   {
       global
             $nm_url_saida, $nm_apl_dependente, $script_case_init;

      @ini_set('magic_quotes_runtime', 0);
      $this->sc_page = $script_case_init;
      $_SESSION['scriptcase']['sc_num_page'] = $script_case_init;
      $_SESSION['scriptcase']['sc_ctl_ajax'] = 'part';
      $_SESSION['scriptcase']['sc_cnt_sql']  = 0;
      $this->sc_charset['UTF-8'] = 'utf-8';
      $this->sc_charset['ISO-8859-1'] = 'iso-8859-1';
      $this->sc_charset['SJIS'] = 'shift-jis';
      $this->sc_charset['ISO-8859-14'] = 'iso-8859-14';
      $this->sc_charset['ISO-8859-7'] = 'iso-8859-7';
      $this->sc_charset['ISO-8859-10'] = 'iso-8859-10';
      $this->sc_charset['ISO-8859-3'] = 'iso-8859-3';
      $this->sc_charset['ISO-8859-15'] = 'iso-8859-15';
      $this->sc_charset['WINDOWS-1252'] = 'windows-1252';
      $this->sc_charset['ISO-8859-13'] = 'iso-8859-13';
      $this->sc_charset['ISO-8859-4'] = 'iso-8859-4';
      $this->sc_charset['ISO-8859-2'] = 'iso-8859-2';
      $this->sc_charset['ISO-8859-5'] = 'iso-8859-5';
      $this->sc_charset['KOI8-R'] = 'koi8-r';
      $this->sc_charset['WINDOWS-1251'] = 'windows-1251';
      $this->sc_charset['BIG-5'] = 'big5';
      $this->sc_charset['EUC-CN'] = 'EUC-CN';
      $this->sc_charset['EUC-JP'] = 'euc-jp';
      $this->sc_charset['ISO-2022-JP'] = 'iso-2022-jp';
      $this->sc_charset['EUC-KR'] = 'euc-kr';
      $this->sc_charset['ISO-2022-KR'] = 'iso-2022-kr';
      $this->sc_charset['ISO-8859-9'] = 'iso-8859-9';
      $this->sc_charset['ISO-8859-6'] = 'iso-8859-6';
      $this->sc_charset['ISO-8859-8'] = 'iso-8859-8';
      $this->sc_charset['ISO-8859-8-I'] = 'iso-8859-8-i';
      $_SESSION['scriptcase']['trial_version'] = 'N';
      $_SESSION['sc_session'][$this->sc_page]['form_sec_users']['decimal_db'] = "."; 

      $this->nm_cod_apl      = "form_sec_users"; 
      $this->nm_nome_apl     = ""; 
      $this->nm_seguranca    = ""; 
      $this->nm_grupo        = "SIU"; 
      $this->nm_grupo_versao = "1"; 
      $this->nm_autor        = "admin"; 
      $this->nm_versao_sc    = "v7"; 
      $this->nm_tp_lic_sc    = "ep_bronze"; 
      $this->nm_dt_criacao   = "20140108"; 
      $this->nm_hr_criacao   = "130835"; 
      $this->nm_autor_alt    = "admin"; 
      $this->nm_dt_ult_alt   = "20180406"; 
      $this->nm_hr_ult_alt   = "143513"; 
      list($NM_usec, $NM_sec) = explode(" ", microtime()); 
      $this->nm_timestamp    = (float) $NM_sec; 
      $this->nm_app_version  = "1.0.0"; 
// 
      $this->border_grid           = ""; 
      $this->cor_bg_grid           = ""; 
      $this->cor_bg_table          = ""; 
      $this->cor_borda             = ""; 
      $this->cor_cab_grid          = ""; 
      $this->cor_txt_pag           = ""; 
      $this->cor_link_pag          = ""; 
      $this->pag_fonte_tipo        = ""; 
      $this->pag_fonte_tamanho     = ""; 
      $this->cor_txt_cab_grid      = ""; 
      $this->cab_fonte_tipo        = ""; 
      $this->cab_fonte_tamanho     = ""; 
      $this->rod_fonte_tipo        = ""; 
      $this->rod_fonte_tamanho     = ""; 
      $this->cor_rod_grid          = ""; 
      $this->cor_txt_rod_grid      = ""; 
      $this->cor_barra_nav         = ""; 
      $this->cor_titulo            = ""; 
      $this->cor_txt_titulo        = ""; 
      $this->titulo_fonte_tipo     = ""; 
      $this->titulo_fonte_tamanho  = ""; 
      $this->cor_grid_impar        = ""; 
      $this->cor_grid_par          = ""; 
      $this->cor_txt_grid          = ""; 
      $this->texto_fonte_tipo      = ""; 
      $this->texto_fonte_tamanho   = ""; 
      $this->cor_lin_grupo         = ""; 
      $this->cor_txt_grupo         = ""; 
      $this->grupo_fonte_tipo      = ""; 
      $this->grupo_fonte_tamanho   = ""; 
      $this->cor_lin_sub_tot       = ""; 
      $this->cor_txt_sub_tot       = ""; 
      $this->sub_tot_fonte_tipo    = ""; 
      $this->sub_tot_fonte_tamanho = ""; 
      $this->cor_lin_tot           = ""; 
      $this->cor_txt_tot           = ""; 
      $this->tot_fonte_tipo        = ""; 
      $this->tot_fonte_tamanho     = ""; 
      $this->cor_link_cab          = ""; 
      $this->cor_link_dados        = ""; 
      $this->img_fun_pag           = ""; 
      $this->img_fun_cab           = ""; 
      $this->img_fun_rod           = ""; 
      $this->img_fun_tit           = ""; 
      $this->img_fun_gru           = ""; 
      $this->img_fun_tot           = ""; 
      $this->img_fun_sub           = ""; 
      $this->img_fun_imp           = ""; 
      $this->img_fun_par           = ""; 
// 
      $NM_dir_atual = getcwd();
      if (empty($NM_dir_atual))
      {
          $str_path_sys          = (isset($_SERVER['SCRIPT_FILENAME'])) ? $_SERVER['SCRIPT_FILENAME'] : $_SERVER['ORIG_PATH_TRANSLATED'];
          $str_path_sys          = str_replace("\\", '/', $str_path_sys);
          $str_path_sys          = str_replace('//', '/', $str_path_sys);
      }
      else
      {
          $sc_nm_arquivo         = explode("/", $_SERVER['PHP_SELF']);
          $str_path_sys          = str_replace("\\", "/", str_replace("\\\\", "\\", getcwd())) . "/" . $sc_nm_arquivo[count($sc_nm_arquivo)-1];
      }
      //check publication with the prod
      $str_path_apl_url = $_SERVER['PHP_SELF'];
      $str_path_apl_url = str_replace("\\", '/', $str_path_apl_url);
      $str_path_apl_url = str_replace('//', '/', $str_path_apl_url);
      $str_path_apl_url = substr($str_path_apl_url, 0, strrpos($str_path_apl_url, "/"));
      $str_path_apl_url = substr($str_path_apl_url, 0, strrpos($str_path_apl_url, "/")+1);
      $str_path_apl_dir = substr($str_path_sys, 0, strrpos($str_path_sys, "/"));
      $str_path_apl_dir = substr($str_path_apl_dir, 0, strrpos($str_path_apl_dir, "/")+1);
      //check prod
      if(empty($_SESSION['scriptcase']['form_sec_users']['glo_nm_path_prod']))
      {
              /*check prod*/$_SESSION['scriptcase']['form_sec_users']['glo_nm_path_prod'] = $str_path_apl_url . "_lib/prod";
      }
      //check img
      if(empty($_SESSION['scriptcase']['form_sec_users']['glo_nm_path_imagens']))
      {
              /*check img*/$_SESSION['scriptcase']['form_sec_users']['glo_nm_path_imagens'] = $str_path_apl_url . "_lib/file/img";
      }
      //check tmp
      if(empty($_SESSION['scriptcase']['form_sec_users']['glo_nm_path_imag_temp']))
      {
              /*check tmp*/$_SESSION['scriptcase']['form_sec_users']['glo_nm_path_imag_temp'] = $str_path_apl_url . "_lib/tmp";
      }
      //check doc
      if(empty($_SESSION['scriptcase']['form_sec_users']['glo_nm_path_doc']))
      {
              /*check doc*/$_SESSION['scriptcase']['form_sec_users']['glo_nm_path_doc'] = $str_path_apl_dir . "_lib/file/doc";
      }
      //end check publication with the prod
// 
      $this->sc_site_ssl     = (isset($_SERVER['HTTPS']) && strtolower($_SERVER['HTTPS']) == 'on') ? true : false;
      $this->sc_protocolo    = ($this->sc_site_ssl) ? 'https://' : 'http://';
      $this->sc_protocolo    = "";
      $this->path_prod       = $_SESSION['scriptcase']['form_sec_users']['glo_nm_path_prod'];
      $this->path_imagens    = $_SESSION['scriptcase']['form_sec_users']['glo_nm_path_imagens'];
      $this->path_imag_temp  = $_SESSION['scriptcase']['form_sec_users']['glo_nm_path_imag_temp'];
      $this->path_doc        = $_SESSION['scriptcase']['form_sec_users']['glo_nm_path_doc'];
      if (!isset($_SESSION['scriptcase']['str_lang']) || empty($_SESSION['scriptcase']['str_lang']))
      {
          $_SESSION['scriptcase']['str_lang'] = "es";
      }
      if (!isset($_SESSION['scriptcase']['str_conf_reg']) || empty($_SESSION['scriptcase']['str_conf_reg']))
      {
          $_SESSION['scriptcase']['str_conf_reg'] = "es_ec";
      }
      $this->str_lang        = $_SESSION['scriptcase']['str_lang'];
      $this->str_conf_reg    = $_SESSION['scriptcase']['str_conf_reg'];
      $this->str_schema_all  = (isset($_SESSION['scriptcase']['str_schema_all']) && !empty($_SESSION['scriptcase']['str_schema_all'])) ? $_SESSION['scriptcase']['str_schema_all'] : "Scriptcase7_BlueSky/Scriptcase7_BlueSky";
      $this->server          = (isset($_SERVER['SERVER_NAME'])) ? $_SERVER['SERVER_NAME'] : $_SERVER['HTTP_HOST'];
      if (isset($_SERVER['SERVER_PORT']) && $_SERVER['SERVER_PORT'] != 80 && !$this->sc_site_ssl )
      {
          $this->server         .= ":" . $_SERVER['SERVER_PORT'];
      }
      $this->server_pdf      = $this->server;
      $this->server          = "";
      $str_path_web          = $_SERVER['PHP_SELF'];
      $str_path_web          = str_replace("\\", '/', $str_path_web);
      $str_path_web          = str_replace('//', '/', $str_path_web);
      $this->root            = substr($str_path_sys, 0, -1 * strlen($str_path_web));
      $this->path_aplicacao  = substr($str_path_sys, 0, strrpos($str_path_sys, '/'));
      $this->path_aplicacao  = substr($this->path_aplicacao, 0, strrpos($this->path_aplicacao, '/')) . '/form_sec_users';
      $this->path_embutida   = substr($this->path_aplicacao, 0, strrpos($this->path_aplicacao, '/') + 1);
      $this->path_aplicacao .= '/';
      $this->path_link       = substr($str_path_web, 0, strrpos($str_path_web, '/'));
      $this->path_link       = substr($this->path_link, 0, strrpos($this->path_link, '/')) . '/';
      $this->path_help       = $this->path_link . "_lib/webhelp/";
      $this->path_lang       = "../_lib/lang/";
      $this->path_lang_js    = "../_lib/js/";
      $this->path_botoes     = $this->path_link . "_lib/img";
      $this->path_img_global = $this->path_link . "_lib/img";
      $this->path_img_modelo = $this->path_link . "_lib/img";
      $this->path_icones     = $this->path_link . "_lib/img";
      $this->path_imag_cab   = $this->path_link . "_lib/img";
      $this->path_btn        = $this->root . $this->path_link . "_lib/buttons/";
      $this->path_css        = $this->root . $this->path_link . "_lib/css/";
      $this->path_lib_php    = $this->root . $this->path_link . "_lib/lib/php/";
      $this->url_lib_js      = $this->path_link . "_lib/lib/js/";
      $this->url_lib         = $this->path_link . '/_lib/';
      $this->url_third       = $this->path_prod . '/third/';
      $this->path_cep        = $this->path_prod . "/cep";
      $this->path_cor        = $this->path_prod . "/cor";
      $this->path_js         = $this->path_prod . "/lib/js";
      $this->path_libs       = $this->root . $this->path_prod . "/lib/php";
      $this->path_third      = $this->root . $this->path_prod . "/third";
      $this->path_secure     = $this->root . $this->path_prod . "/secure";
      $this->path_adodb      = $this->root . $this->path_prod . "/third/adodb";

      global $inicial_form_sec_users;
      if (isset($_SESSION['scriptcase']['user_logout']))
      {
          foreach ($_SESSION['scriptcase']['user_logout'] as $ind => $parms)
          {
              if (isset($_SESSION[$parms['V']]) && $_SESSION[$parms['V']] == $parms['U'])
              {
                  $nm_apl_dest = $parms['R'];
                  $dir = explode("/", $nm_apl_dest);
                  if (count($dir) == 1)
                  {
                      $nm_apl_dest = str_replace(".php", "", $nm_apl_dest);
                      $nm_apl_dest = $this->path_link . $nm_apl_dest . "/" . $nm_apl_dest . ".php";
                  }
                  unset($_SESSION['scriptcase']['user_logout'][$ind]);
                  if (isset($inicial_form_sec_users->contr_form_sec_users->NM_ajax_flag) && $inicial_form_sec_users->contr_form_sec_users->NM_ajax_flag)
                  {
                      $inicial_form_sec_users->contr_->NM_ajax_info['redir']['action']  = $nm_apl_dest;
                      $inicial_form_sec_users->contr_form_sec_users->NM_ajax_info['redir']['target']  = $parms['T'];
                      $inicial_form_sec_users->contr_form_sec_users->NM_ajax_info['redir']['metodo']  = "post";
                      $inicial_form_sec_users->contr_form_sec_users->NM_ajax_info['redir']['script_case_init']  = $this->sc_page;
                      $inicial_form_sec_users->contr_form_sec_users->NM_ajax_info['redir']['script_case_session']  = session_id();
                      form_sec_users_pack_ajax_response();
                      exit;
                  }
?>
                  <html>
                  <body>
                  <form name="FRedirect" method="POST" action="<?php echo $nm_apl_dest; ?>" target="<?php echo $parms['T']; ?>">
                  </form>
                  <script>
                   document.FRedirect.submit();
                  </script>
                  </body>
                  </html>
<?php
                  exit;
              }
          }
      }
      $str_path = substr($this->path_prod, 0, strrpos($this->path_prod, '/') + 1); 
      if (!is_file($this->root . $str_path . 'devel/class/xmlparser/nmXmlparserIniSys.class.php'))
      {
          unset($_SESSION['scriptcase']['nm_sc_retorno']);
          unset($_SESSION['scriptcase']['form_sec_users']['glo_nm_conexao']);
      }
      include($this->path_lang . $this->str_lang . ".lang.php");
      include($this->path_lang . "config_region.php");
      include($this->path_lang . "lang_config_region.php");
      asort($this->Nm_lang_conf_region);
      $aLangLabel = array();
      foreach ($this->Nm_lang_conf_region as $sLocale => $sLabel) {
          $iPos = strpos($sLabel, '(');
          if (false !== $iPos) {
              $sLabel                = trim(substr($sLabel, 0, $iPos));
              $aLangLabel[$sLabel][] = $sLocale;
          }
      }
      foreach ($aLangLabel as $sLabel => $aLangList) {
          if (1 == sizeof($aLangList) && isset($this->Nm_lang_conf_region[$aLangList[0]])) {
              $this->Nm_lang_conf_region[$aLangList[0]] = $sLabel;
          }
      }

      if (isset($this->Nm_lang['lang_errm_dbcn_conn']))
      {
          $_SESSION['scriptcase']['db_conn_error'] = $this->Nm_lang['lang_errm_dbcn_conn'];
      }
      if (!function_exists("mb_convert_encoding"))
      {
          echo "<div><font size=6>" . $this->Nm_lang['lang_othr_prod_xtmb'] . "</font></div>";exit;
      } 
      $_SESSION['scriptcase']['charset'] = (isset($this->Nm_lang['Nm_charset']) && !empty($this->Nm_lang['Nm_charset'])) ? $this->Nm_lang['Nm_charset'] : "ISO-8859-15";
      $_SESSION['scriptcase']['charset_html']  = (isset($this->sc_charset[$_SESSION['scriptcase']['charset']])) ? $this->sc_charset[$_SESSION['scriptcase']['charset']] : $_SESSION['scriptcase']['charset'];
      foreach ($this->Nm_conf_reg[$this->str_conf_reg] as $ind => $dados)
      {
          if ($_SESSION['scriptcase']['charset'] != "UTF-8" && NM_is_utf8($dados))
          {
              $this->Nm_conf_reg[$this->str_conf_reg][$ind] = mb_convert_encoding($dados, $_SESSION['scriptcase']['charset'], "UTF-8");
          }
      }
      foreach ($this->Nm_lang as $ind => $dados)
      {
          if ($_SESSION['scriptcase']['charset'] != "UTF-8" && NM_is_utf8($ind))
          {
              $ind = mb_convert_encoding($ind, $_SESSION['scriptcase']['charset'], "UTF-8");
              $this->Nm_lang[$ind] = $dados;
          }
          if ($_SESSION['scriptcase']['charset'] != "UTF-8" && NM_is_utf8($dados))
          {
              $this->Nm_lang[$ind] = mb_convert_encoding($dados, $_SESSION['scriptcase']['charset'], "UTF-8");
          }
      }
      $PHP_ver = str_replace(".", "", phpversion()); 
      if (substr($PHP_ver, 0, 3) < 434)
      {
          echo "<div><font size=6>" . $this->Nm_lang['lang_othr_prod_phpv'] . "</font></div>";exit;
      }
      if (file_exists($this->path_libs . "/ver.dat"))
      {
          $SC_ver = file($this->path_libs . "/ver.dat"); 
          $SC_ver = str_replace(".", "", $SC_ver[0]); 
          if (substr($SC_ver, 0, 5) < 40015)
          {
              echo "<div><font size=6>" . $this->Nm_lang['lang_othr_prod_incp'] . "</font></div>";exit;
          } 
      } 
      if (-1 != version_compare(phpversion(), '5.0.0'))
      {
         $this->path_grafico    = $this->root . $this->path_prod . "/third/jpgraph5/src";
      }
      else
      {
          $this->path_grafico    = $this->root . $this->path_prod . "/third/jpgraph4/src";
      }
      $_SESSION['sc_session'][$this->sc_page]['form_sec_users']['path_doc'] = $this->path_doc; 
      $_SESSION['scriptcase']['nm_path_prod'] = $this->root . $this->path_prod . "/"; 
      $_SESSION['scriptcase']['nm_root_cep']  = $this->root; 
      $_SESSION['scriptcase']['nm_path_cep']  = $this->path_cep; 
      if (empty($this->path_imag_cab))
      {
          $this->path_imag_cab = $this->path_img_global;
      }
      if (!is_dir($this->root . $this->path_prod))
      {
          echo "<style type=\"text/css\">";
          echo ".scButton_default { font-family: Arial, sans-serif; font-size: 11px; color: #444444; font-weight: bold; border-style: none; border-width: 1px; padding: 3px 14px; background-image: url(" . $this->path_img_modelo . "/V7buttonskyblue.jpg); }";
          echo ".scButton_disabled { font-family: Arial, sans-serif; font-size: 11px; color: #333; font-weight: bold; background-color: #FFFFFF; border-style: solid; border-width: 1px; padding: 3px 14px;  }";
          echo ".scButton_onmousedown { font-family: Arial, sans-serif; font-size: 11px; color: #666666; font-weight: bold; background-color: #D5E1E8; border-style: none; border-width: 1px; padding: 3px 14px;  }";
          echo ".scButton_onmouseover { font-family: Arial, sans-serif; font-size: 11px; color: #555555; font-weight: bold; background-color: #E7EEF4; border-style: none; border-width: 1px; padding: 3px 14px;  }";
          echo ".scLink_default { text-decoration: underline; font-size: 12px; color: #0000AA;  }";
          echo ".scLink_default:visited { text-decoration: underline; font-size: 12px; color: #0000AA;  }";
          echo ".scLink_default:active { text-decoration: underline; font-size: 12px; color: #0000AA;  }";
          echo ".scLink_default:hover { text-decoration: none; font-size: 12px; color: #0000AA;  }";
          echo "</style>";
          echo "<table width=\"80%\" border=\"1\" height=\"117\">";
          echo "<tr>";
          echo "   <td bgcolor=\"\">";
          echo "       <b><font size=\"4\">" . $this->Nm_lang['lang_errm_cmlb_nfnd'] . "</font>";
          echo "  " . $this->root . $this->path_prod;
          echo "   </b></td>";
          echo " </tr>";
          echo "</table>";
          if (!$_SESSION['sc_session'][$script_case_init]['form_sec_users']['iframe_menu'] && (!isset($_SESSION['sc_session'][$script_case_init]['form_sec_users']['sc_outra_jan']) || $_SESSION['sc_session'][$script_case_init]['form_sec_users']['sc_outra_jan'] != 'form_sec_users')) 
          { 
              if (isset($_SESSION['scriptcase']['nm_sc_retorno']) && !empty($_SESSION['scriptcase']['nm_sc_retorno'])) 
              { 
?>
                  <input type="button" id="sai" onClick="window.location='<?php echo $_SESSION['scriptcase']['nm_sc_retorno'] ?>'; return false" class="scButton_default" value="<?php echo $this->Nm_lang['lang_btns_back'] ?>" title="<?php echo $this->Nm_lang['lang_btns_back_hint'] ?>" style="<?php echo $sCondStyle; ?>vertical-align: middle;display: ''">

<?php
              } 
              else 
              { 
?>
                  <input type="button" id="sai" onClick="window.location='<?php echo $nm_url_saida ?>'; return false" class="scButton_default" value="<?php echo $this->Nm_lang['lang_btns_exit'] ?>" title="<?php echo $this->Nm_lang['lang_btns_exit_hint'] ?>" style="<?php echo $sCondStyle; ?>vertical-align: middle;display: ''">

<?php
              } 
          } 
          exit ;
      }

      $this->path_atual  = getcwd();
      $opsys = strtolower(php_uname());

      $this->nm_cont_lin       = 0;
      $this->nm_limite_lin     = 0;
      $this->nm_limite_lin_prt = 0;
// 
      include_once($this->path_adodb . "/adodb.inc.php"); 
      $this->sc_Include($this->path_libs . "/nm_sec_prod.php", "F", "nm_reg_prod") ; 
      $this->sc_Include($this->path_libs . "/nm_ini_perfil.php", "F", "perfil_lib") ; 
      $this->sc_Include($this->path_lib_php . "/nm_data.class.php", "C", "nm_data") ; 
      $this->sc_Include($this->path_lib_php . "/nm_edit.php", "F", "nmgp_Form_Num_Val") ; 
      $this->sc_Include($this->path_lib_php . "/nm_conv_dados.php", "F", "nm_conv_limpa_dado") ; 
      $this->nm_data = new nm_data("es");
      global $inicial_form_sec_users, $NM_run_iframe;
      if ((isset($inicial_form_sec_users->contr_form_sec_users->NM_ajax_flag) && $inicial_form_sec_users->contr_form_sec_users->NM_ajax_flag) || (isset($_SESSION['sc_session'][$this->sc_page]['form_sec_users']['embutida_call']) && $_SESSION['sc_session'][$this->sc_page]['form_sec_users']['embutida_call']) || $NM_run_iframe == 1)
      {
           $_SESSION['scriptcase']['sc_ctl_ajax'] = 'part';
      }
      perfil_lib($this->path_libs);
      if (!isset($_SESSION['sc_session'][$this->sc_page]['SC_Check_Perfil']))
      {
          if(function_exists("nm_check_perfil_exists")) nm_check_perfil_exists($this->path_libs, $this->path_prod);
          $_SESSION['sc_session'][$this->sc_page]['SC_Check_Perfil'] = true;
      }
      if (!isset($_SESSION['scriptcase']['sc_num_img']) || empty($_SESSION['scriptcase']['sc_num_img']))
      { 
          $_SESSION['scriptcase']['sc_num_img'] = 1; 
      } 
      $this->regionalDefault();
      $this->sc_tem_trans_banco = false;
      $this->nm_bases_access     = array("access", "ado_access");
      $this->nm_bases_db2        = array("db2", "db2_odbc", "odbc_db2", "odbc_db2v6");
      $this->nm_bases_ibase      = array("ibase", "firebird", "borland_ibase");
      $this->nm_bases_informix   = array("informix", "informix72", "pdo_informix");
      $this->nm_bases_mssql      = array("mssql", "ado_mssql", "odbc_mssql", "mssqlnative", "pdo_sqlsrv");
      $this->nm_bases_mysql      = array("mysql", "mysqlt", "maxsql", "pdo_mysql");
      $this->nm_bases_postgres   = array("postgres", "postgres64", "postgres7", "pdo_pgsql");
      $this->nm_bases_oracle     = array("oci8", "oci805", "oci8po", "odbc_oracle", "oracle");
      $this->nm_bases_sqlite     = array("sqlite", "pdosqlite");
      $this->nm_bases_sybase     = array("sybase");
      $this->nm_bases_vfp        = array("vfp");
      $this->nm_bases_odbc       = array("odbc");
      $this->nm_bases_all        = array_merge($this->nm_bases_access, $this->nm_bases_db2, $this->nm_bases_ibase, $this->nm_bases_informix, $this->nm_bases_mssql, $this->nm_bases_mysql, $this->nm_bases_postgres, $this->nm_bases_oracle, $this->nm_bases_sqlite, $this->nm_bases_sybase, $this->nm_bases_vfp, $this->nm_bases_odbc);
      $_SESSION['scriptcase']['nm_bases_security']  = "enc_nm_enc_v1DcJeH9BiHAN7VWJeDMvOVcB/DWFYHINUD9JmH9BOHAvmZMJeDEvsHErCV5FqHIJsD9XsZ9JeD1BeD5F7DMvmVcBUDWJeHMBiD9BsVIraD1rwV5X7HgBeHEBUDuJeHMFGD9NwH9X7HAvOV5JeDMzGV9BUDWF/DoBiHQJmZkFGHIveHQNUDEBeHErCDWF/VoBiDcJUZSX7Z1BYHuFaHgrKVcFCDWXCVoJwDcBqZSFaHAN7D5FaDEBOVkJGHEXCVoB/HQJKDQJsZ1vCV5FGHuNOV9FeDWB3VoraDcJUZSB/Z1BeD5XGDEBOHEJqV5FaDoXGDcBwDQX7D1BeV5raHuBYVcFCH5FqDoraD9XOZSFaD1NaV5FUDErKHEFiDuJeDoBOHQJKDQJsZ1vCV5FGHuNOV9FeDWXCDoF7D9XGZ1FGHIBeHuFaHgrKHENiH5F/HMB/HQNmDQBqHIrwHuBqDMvsVcFeHEBmVEraHQNwZkFGHArKV5FUDMrYZSXeV5FqHIJsHQNmDuBqDSN7HurqDMNOV9BUDur/HMJwHQNwVIJwZ1rYHQBqDMvCHEJqDWF/HIB/HQXOZ9JeZ1BYHuraDMvmVcB/DWBmVEF7HQXOVIraZ1vOD5XGHgrKDkB/HEFqHMBOHQXsZ9rqD1BeD5rqHuvmVcBOH5B7VoBqHQXOZ1BiDSNOHQX7HgrKDkXKH5F/HMX7HQXODuBOZ1zGVWXGDMBYVIBsH5FqHIBiHQNwZ1FUZ1vOZMBOHgNOHArCHEFaHIJwHQJeDQBOZ1BYHQrqDMvmDkB/HEFYHMFGHQXOVIJwD1rwV5FGDEBeHEXeH5X/DoF7HQNwDuBqDSN7HuraHgrwZSJqDWrmVErqDcNmZ1FUZ1rYHQX7DMvCVkJqHEFqHIFGHQXsDuBOZ1BYHQXGDMNODkBsDurGVoFGDcFYZkFUZ1vOZMBqHgveDkB/DWrGZuXGHQXsDQBOD1BeD5rqHuvmVcBOH5B7VoBqD9XOH9B/D1rwD5BiDErKHEFiDWX7ZuFaD9JKDQB/Z1rwHuF7DMvsZSrCV5X7HIBiD9XOZSB/Z1BeV5BODErKVkXeDWX7VoFGDcJUDQFaHAN7D5BqHuNOVcFKDWFYVoFGDcBwZ1FUHIveZMXGHgBYHErsDWB3VoXGHQXGZSBiZ1N7D5JwHuBYVcFeV5FYVoB/D9JmH9B/D1zGD5FaDEvsDkXKDuXKDoB/D9NmZSFGHIrwVWXGHuzGVIBOV5X7VoraD9BiZ1FUZ1BeD5JeDMBYZSJGDWr/VoXGD9NwDQJwD1veV5FGHgvsVcFCH5FqDoraHQFYVIJwD1rwV5FGDEBeHEXeH5X/DoF7D9NwZSX7D1BeV5raHuvmVcFKV5X7VoFGD9BiZ1X7Z1BeD5NUDErKZSXeHEFqVoBqD9NwZSX7DSBYHuFaHuNOZSrCH5FqDoXGHQJmZ1BiHAvCD5BqHgveHArsDurmDoBOHQXODQBqHANKVWBqDMvmVcFKV5BmVoBqD9BsZkFGHArKV5BODMvCHArCDuFaHMBOHQNwH9BiZ1BYV5FGDMvsVcFeV5FGVENUDcNmZ1FGZ1rYHQX7HgBeHArCV5FaHIJsD9XsZ9JeD1BeD5F7DMvmVcFeHEFYDoJsD9XOH9FaD1rKV5JeDEvsHEBUDWFqZuFaD9XsZ9rqHAveHQBOHgvsVcBOH5FqDoFGD9BsH9B/Z1NOD5NUDEBOHEFKDWF/VoFaDcBwDuBOHAveHuraHgvsDkBOV5X7DoJsD9BsH9B/Z1rYV5JeDMBYHAFKDWF/HMJsD9XsZSFGHAveVWJwHuNOVcFKDWFaVoX7DcBwZ1rqDSvOD5raHgNOZSXeV5FaVoX7D9JKDQX7D1veV5FUHuzGVIBOHEFYVoB/HQJmZ1F7Z1vmD5rqDEBOHArCDWBmZuBqHQXGZ9XGHANKVWFU";
      $this->prep_conect();
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['ordem_cmp'] = "zona,cod_provincia,usr_active"; 
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_sec_users']['ordem_ord'] = ""; 
      $this->conectDB();
      if (!in_array(strtolower($this->nm_tpbanco), $this->nm_bases_all))
      {
          echo "<tr>";
          echo "   <td bgcolor=\"\">";
          echo "       <b><font size=\"4\">" . $this->Nm_lang['lang_errm_dbcn_nspt'] . "</font>";
          echo "  " . $perfil_trab;
          echo "   </b></td>";
          echo " </tr>";
          echo "</table>";
          if (!$_SESSION['sc_session'][$script_case_init]['form_sec_users']['iframe_menu'] && (!isset($_SESSION['sc_session'][$script_case_init]['form_sec_users']['sc_outra_jan']) || $_SESSION['sc_session'][$script_case_init]['form_sec_users']['sc_outra_jan'] != 'form_sec_users')) 
          { 
              if (isset($_SESSION['scriptcase']['nm_sc_retorno']) && !empty($_SESSION['scriptcase']['nm_sc_retorno'])) 
              { 
                  echo "<a href='" . $_SESSION['scriptcase']['nm_sc_retorno'] . "' target='_self'><img border='0' src='" . $this->path_botoes . "/nm_Scriptcase7_BlueSky_bvoltar.gif' title='" . $this->Nm_lang['lang_btns_rtrn_scrp_hint'] . "' align=absmiddle></a> \n" ; 
              } 
              else 
              { 
                  echo "<a href='$nm_url_saida' target='_self'><img border='0' src='" . $this->path_botoes . "/nm_Scriptcase7_BlueSky_bsair.gif' title='" . $this->Nm_lang['lang_btns_exit_appl_hint'] . "' align=absmiddle></a> \n" ; 
              } 
          } 
          exit ;
      } 
   }
   function prep_conect()
   {
      $con_devel             =  (isset($_SESSION['scriptcase']['form_sec_users']['glo_nm_conexao'])) ? $_SESSION['scriptcase']['form_sec_users']['glo_nm_conexao'] : ""; 
      $perfil_trab           = ""; 
      $this->nm_falta_var    = ""; 
      $this->nm_falta_var_db = ""; 
      $nm_crit_perfil        = false;
      if (isset($_SESSION['scriptcase']['sc_connection']) && !empty($_SESSION['scriptcase']['sc_connection']))
      {
          foreach ($_SESSION['scriptcase']['sc_connection'] as $NM_con_orig => $NM_con_dest)
          {
              if (isset($_SESSION['scriptcase']['form_sec_users']['glo_nm_conexao']) && $_SESSION['scriptcase']['form_sec_users']['glo_nm_conexao'] == $NM_con_orig)
              {
/*NM*/            $_SESSION['scriptcase']['form_sec_users']['glo_nm_conexao'] = $NM_con_dest;
              }
              if (isset($_SESSION['scriptcase']['form_sec_users']['glo_nm_perfil']) && $_SESSION['scriptcase']['form_sec_users']['glo_nm_perfil'] == $NM_con_orig)
              {
/*NM*/            $_SESSION['scriptcase']['form_sec_users']['glo_nm_perfil'] = $NM_con_dest;
              }
              if (isset($_SESSION['scriptcase']['form_sec_users']['glo_con_' . $NM_con_orig]))
              {
                  $_SESSION['scriptcase']['form_sec_users']['glo_con_' . $NM_con_orig] = $NM_con_dest;
              }
          }
      }
      if (isset($_SESSION['scriptcase']['form_sec_users']['glo_nm_conexao']) && !empty($_SESSION['scriptcase']['form_sec_users']['glo_nm_conexao']))
      {
          db_conect_devel($con_devel, $this->root . $this->path_prod, 'SIU', 2); 
          if (empty($_SESSION['scriptcase']['glo_tpbanco']) && empty($_SESSION['scriptcase']['glo_banco']))
          {
              $nm_crit_perfil = true;
          }
      }
      if (isset($_SESSION['scriptcase']['form_sec_users']['glo_nm_perfil']) && !empty($_SESSION['scriptcase']['form_sec_users']['glo_nm_perfil']))
      {
          $perfil_trab = $_SESSION['scriptcase']['form_sec_users']['glo_nm_perfil'];
      }
      elseif (isset($_SESSION['scriptcase']['glo_perfil']) && !empty($_SESSION['scriptcase']['glo_perfil']))
      {
          $perfil_trab = $_SESSION['scriptcase']['glo_perfil'];
      }
      if (!empty($perfil_trab))
      {
          $_SESSION['scriptcase']['glo_senha_protect'] = "";
          carrega_perfil($perfil_trab, $this->path_libs, "S");
          if (empty($_SESSION['scriptcase']['glo_senha_protect']))
          {
              $nm_crit_perfil = true;
          }
      }
      else
      {
          $perfil_trab = $con_devel;
      }
// 
      if (isset($_SESSION['scriptcase']['glo_decimal_db']) && !empty($_SESSION['scriptcase']['glo_decimal_db']))
      {
         $_SESSION['sc_session'][$this->sc_page]['form_sec_users']['decimal_db'] = $_SESSION['scriptcase']['glo_decimal_db']; 
      }
      if (!isset($_SESSION['scriptcase']['glo_tpbanco']))
      {
          if (!$nm_crit_perfil)
          {
              $this->nm_falta_var_db .= "glo_tpbanco; ";
          }
      }
      else
      {
          $this->nm_tpbanco = $_SESSION['scriptcase']['glo_tpbanco']; 
      }
      if (!isset($_SESSION['scriptcase']['glo_servidor']))
      {
          if (!$nm_crit_perfil)
          {
              $this->nm_falta_var_db .= "glo_servidor; ";
          }
      }
      else
      {
          $this->nm_servidor = $_SESSION['scriptcase']['glo_servidor']; 
      }
      if (!isset($_SESSION['scriptcase']['glo_banco']))
      {
          if (!$nm_crit_perfil)
          {
              $this->nm_falta_var_db .= "glo_banco; ";
          }
      }
      else
      {
          $this->nm_banco = $_SESSION['scriptcase']['glo_banco']; 
      }
      if (!isset($_SESSION['scriptcase']['glo_usuario']))
      {
          if (!$nm_crit_perfil)
          {
              $this->nm_falta_var_db .= "glo_usuario; ";
          }
      }
      else
      {
          $this->nm_usuario = $_SESSION['scriptcase']['glo_usuario']; 
      }
      if (!isset($_SESSION['scriptcase']['glo_senha']))
      {
          if (!$nm_crit_perfil)
          {
              $this->nm_falta_var_db .= "glo_senha; ";
          }
      }
      else
      {
          $this->nm_senha = $_SESSION['scriptcase']['glo_senha']; 
      }
      if (isset($_SESSION['scriptcase']['glo_db2_autocommit']))
      {
          $this->nm_con_db2['db2_autocommit'] = $_SESSION['scriptcase']['glo_db2_autocommit']; 
      }
      if (isset($_SESSION['scriptcase']['glo_database_encoding']))
      {
          $this->nm_database_encoding = $_SESSION['scriptcase']['glo_database_encoding']; 
      }
      if (isset($_SESSION['scriptcase']['glo_db2_i5_lib']))
      {
          $this->nm_con_db2['db2_i5_lib'] = $_SESSION['scriptcase']['glo_db2_i5_lib']; 
      }
      if (isset($_SESSION['scriptcase']['glo_db2_i5_naming']))
      {
          $this->nm_con_db2['db2_i5_naming'] = $_SESSION['scriptcase']['glo_db2_i5_naming']; 
      }
      if (isset($_SESSION['scriptcase']['glo_db2_i5_commit']))
      {
          $this->nm_con_db2['db2_i5_commit'] = $_SESSION['scriptcase']['glo_db2_i5_commit']; 
      }
      if (isset($_SESSION['scriptcase']['glo_db2_i5_query_optimize']))
      {
          $this->nm_con_db2['db2_i5_query_optimize'] = $_SESSION['scriptcase']['glo_db2_i5_query_optimize']; 
      }
      if (isset($_SESSION['scriptcase']['glo_use_persistent']))
      {
          $this->nm_con_persistente = $_SESSION['scriptcase']['glo_use_persistent']; 
      }
      if (isset($_SESSION['scriptcase']['glo_use_schema']))
      {
          $this->nm_con_use_schema = $_SESSION['scriptcase']['glo_use_schema']; 
      }
      if (empty($this->nm_tabela))
      {
          $this->nm_tabela = "sec_users"; 
      }
// 
      if (!empty($this->nm_falta_var) || !empty($this->nm_falta_var_db) || $nm_crit_perfil)
      {
          echo "<style type=\"text/css\">";
          echo ".scButton_default { font-family: Arial, sans-serif; font-size: 11px; color: #444444; font-weight: bold; border-style: none; border-width: 1px; padding: 3px 14px; background-image: url(" . $this->path_img_modelo . "/V7buttonskyblue.jpg); }";
          echo ".scButton_disabled { font-family: Arial, sans-serif; font-size: 11px; color: #333; font-weight: bold; background-color: #FFFFFF; border-style: solid; border-width: 1px; padding: 3px 14px;  }";
          echo ".scButton_onmousedown { font-family: Arial, sans-serif; font-size: 11px; color: #666666; font-weight: bold; background-color: #D5E1E8; border-style: none; border-width: 1px; padding: 3px 14px;  }";
          echo ".scButton_onmouseover { font-family: Arial, sans-serif; font-size: 11px; color: #555555; font-weight: bold; background-color: #E7EEF4; border-style: none; border-width: 1px; padding: 3px 14px;  }";
          echo ".scLink_default { text-decoration: underline; font-size: 12px; color: #0000AA;  }";
          echo ".scLink_default:visited { text-decoration: underline; font-size: 12px; color: #0000AA;  }";
          echo ".scLink_default:active { text-decoration: underline; font-size: 12px; color: #0000AA;  }";
          echo ".scLink_default:hover { text-decoration: none; font-size: 12px; color: #0000AA;  }";
          echo "</style>";
          echo "<table width=\"80%\" border=\"1\" height=\"117\">";
          if (empty($this->nm_falta_var_db))
          {
              if (!empty($this->nm_falta_var))
              {
                  echo "<tr>";
                  echo "   <td bgcolor=\"\">";
                  echo "       <b><font size=\"4\">" . $this->Nm_lang['lang_errm_glob'] . "</font>";
                  echo "  " . $this->nm_falta_var;
                  echo "   </b></td>";
                  echo " </tr>";
              }
              if ($nm_crit_perfil)
              {
                  echo "<tr>";
                  echo "   <td bgcolor=\"\">";
                  echo "       <b><font size=\"4\">" . $this->Nm_lang['lang_errm_dbcn_nfnd'] . "</font>";
                  echo "  " . $perfil_trab;
                  echo "   </b></td>";
                  echo " </tr>";
              }
          }
          else
          {
              echo "<tr>";
              echo "   <td bgcolor=\"\">";
              echo "       <b><font size=\"4\">" . $this->Nm_lang['lang_errm_dbcn_data'] . "</font></b>";
              echo "   </td>";
              echo " </tr>";
          }
          echo "</table>";
          if (!$_SESSION['sc_session'][$this->sc_page]['form_sec_users']['iframe_menu'] && (!isset($_SESSION['sc_session'][$this->sc_page]['form_sec_users']['sc_outra_jan']) || $_SESSION['sc_session'][$this->sc_page]['form_sec_users']['sc_outra_jan'] != 'form_sec_users')) 
          { 
              if (isset($_SESSION['scriptcase']['nm_sc_retorno']) && !empty($_SESSION['scriptcase']['nm_sc_retorno'])) 
              { 
?>
                  <input type="button" id="sai" onClick="window.location='<?php echo $_SESSION['scriptcase']['nm_sc_retorno'] ?>'; return false" class="scButton_default" value="<?php echo $this->Nm_lang['lang_btns_back'] ?>" title="<?php echo $this->Nm_lang['lang_btns_back_hint'] ?>" style="<?php echo $sCondStyle; ?>vertical-align: middle;display: ''">

<?php
              } 
              else 
              { 
?>
                  <input type="button" id="sai" onClick="window.location='<?php echo $nm_url_saida ?>'; return false" class="scButton_default" value="<?php echo $this->Nm_lang['lang_btns_exit'] ?>" title="<?php echo $this->Nm_lang['lang_btns_exit_hint'] ?>" style="<?php echo $sCondStyle; ?>vertical-align: middle;display: ''">

<?php
              } 
          } 
          exit ;
      }
      if (isset($_SESSION['scriptcase']['glo_db_master_usr']) && !empty($_SESSION['scriptcase']['glo_db_master_usr']))
      {
          $this->nm_usuario = $_SESSION['scriptcase']['glo_db_master_usr']; 
      }
      if (isset($_SESSION['scriptcase']['glo_db_master_pass']) && !empty($_SESSION['scriptcase']['glo_db_master_pass']))
      {
          $this->nm_senha = $_SESSION['scriptcase']['glo_db_master_pass']; 
      }
      if (isset($_SESSION['scriptcase']['glo_db_master_cript']) && !empty($_SESSION['scriptcase']['glo_db_master_cript']))
      {
          $_SESSION['scriptcase']['glo_senha_protect'] = $_SESSION['scriptcase']['glo_db_master_cript']; 
      }
  } 
// 
  function conectDB()
  {
      $glo_senha_protect = (isset($_SESSION['scriptcase']['glo_senha_protect'])) ? $_SESSION['scriptcase']['glo_senha_protect'] : "S";
      if (isset($_SESSION['scriptcase']['nm_sc_retorno']) && !empty($_SESSION['scriptcase']['nm_sc_retorno']) && isset($_SESSION['scriptcase']['form_sec_users']['glo_nm_conexao']) && !empty($_SESSION['scriptcase']['form_sec_users']['glo_nm_conexao']))
      { 
          $this->Db = db_conect_devel($_SESSION['scriptcase']['form_sec_users']['glo_nm_conexao'], $this->root . $this->path_prod, 'SIU'); 
      } 
      else 
      { 
         $this->Db = db_conect($this->nm_tpbanco, $this->nm_servidor, $this->nm_usuario, $this->nm_senha, $this->nm_banco, $glo_senha_protect, "S", $this->nm_con_persistente, $this->nm_con_db2, $this->nm_database_encoding); 
      } 
      if (in_array(strtolower($this->nm_tpbanco), $this->nm_bases_ibase))
      {
          if (function_exists('ibase_timefmt'))
          {
              ibase_timefmt('%Y-%m-%d %H:%M:%S');
          } 
      } 
      if (in_array(strtolower($this->nm_tpbanco), $this->nm_bases_sybase))
      {
          $this->Db->fetchMode = ADODB_FETCH_BOTH;
          $this->Db->Execute("set dateformat ymd");
      } 
      if (in_array(strtolower($this->nm_tpbanco), $this->nm_bases_mssql))
      {
          $this->Db->Execute("set dateformat ymd");
      } 
      if (in_array(strtolower($this->nm_tpbanco), $this->nm_bases_oracle))
      {
          $this->Db->Execute("alter session set nls_date_format = 'yyyy-mm-dd hh24:mi:ss'");
          $this->Db->Execute("alter session set nls_numeric_characters = '.,'");
          $_SESSION['sc_session'][$this->sc_page]['form_sec_users']['decimal_db'] = "."; 
      } 
  }
// 

   function regionalDefault($sConfReg = '')
   {
      if ('' == $sConfReg)
      {
         $sConfReg = $this->str_conf_reg;
      }

      $_SESSION['scriptcase']['reg_conf']['date_format']           = (isset($this->Nm_conf_reg[$sConfReg]['data_format']))              ?  $this->Nm_conf_reg[$sConfReg]['data_format']                  : "ddmmyyyy";
      $_SESSION['scriptcase']['reg_conf']['date_sep']              = (isset($this->Nm_conf_reg[$sConfReg]['data_sep']))                 ?  $this->Nm_conf_reg[$sConfReg]['data_sep']                     : "/";
      $_SESSION['scriptcase']['reg_conf']['date_week_ini']         = (isset($this->Nm_conf_reg[$sConfReg]['prim_dia_sema']))            ?  $this->Nm_conf_reg[$sConfReg]['prim_dia_sema']                : "SU";
      $_SESSION['scriptcase']['reg_conf']['time_format']           = (isset($this->Nm_conf_reg[$sConfReg]['hora_format']))              ?  $this->Nm_conf_reg[$sConfReg]['hora_format']                  : "hhiiss";
      $_SESSION['scriptcase']['reg_conf']['time_sep']              = (isset($this->Nm_conf_reg[$sConfReg]['hora_sep']))                 ?  $this->Nm_conf_reg[$sConfReg]['hora_sep']                     : ":";
      $_SESSION['scriptcase']['reg_conf']['time_pos_ampm']         = (isset($this->Nm_conf_reg[$sConfReg]['hora_pos_ampm']))            ?  $this->Nm_conf_reg[$sConfReg]['hora_pos_ampm']                : "right_without_space";
      $_SESSION['scriptcase']['reg_conf']['time_simb_am']          = (isset($this->Nm_conf_reg[$sConfReg]['hora_simbolo_am']))          ?  $this->Nm_conf_reg[$sConfReg]['hora_simbolo_am']              : "am";
      $_SESSION['scriptcase']['reg_conf']['time_simb_pm']          = (isset($this->Nm_conf_reg[$sConfReg]['hora_simbolo_pm']))          ?  $this->Nm_conf_reg[$sConfReg]['hora_simbolo_pm']              : "pm";
      $_SESSION['scriptcase']['reg_conf']['simb_neg']              = (isset($this->Nm_conf_reg[$sConfReg]['num_sinal_neg']))            ?  $this->Nm_conf_reg[$sConfReg]['num_sinal_neg']                : "-";
      $_SESSION['scriptcase']['reg_conf']['grup_num']              = (isset($this->Nm_conf_reg[$sConfReg]['num_sep_agr']))              ?  $this->Nm_conf_reg[$sConfReg]['num_sep_agr']                  : ".";
      $_SESSION['scriptcase']['reg_conf']['dec_num']               = (isset($this->Nm_conf_reg[$sConfReg]['num_sep_dec']))              ?  $this->Nm_conf_reg[$sConfReg]['num_sep_dec']                  : ",";
      $_SESSION['scriptcase']['reg_conf']['neg_num']               = (isset($this->Nm_conf_reg[$sConfReg]['num_format_num_neg']))       ?  $this->Nm_conf_reg[$sConfReg]['num_format_num_neg']           : 2;
      $_SESSION['scriptcase']['reg_conf']['monet_simb']            = (isset($this->Nm_conf_reg[$sConfReg]['unid_mont_simbolo']))        ?  $this->Nm_conf_reg[$sConfReg]['unid_mont_simbolo']            : "$";
      $_SESSION['scriptcase']['reg_conf']['monet_f_pos']           = (isset($this->Nm_conf_reg[$sConfReg]['unid_mont_format_num_pos'])) ?  $this->Nm_conf_reg[$sConfReg]['unid_mont_format_num_pos']     : 3;
      $_SESSION['scriptcase']['reg_conf']['monet_f_neg']           = (isset($this->Nm_conf_reg[$sConfReg]['unid_mont_format_num_neg'])) ?  $this->Nm_conf_reg[$sConfReg]['unid_mont_format_num_neg']     : 13;
      $_SESSION['scriptcase']['reg_conf']['grup_val']              = (isset($this->Nm_conf_reg[$sConfReg]['unid_mont_sep_agr']))        ?  $this->Nm_conf_reg[$sConfReg]['unid_mont_sep_agr']            : ".";
      $_SESSION['scriptcase']['reg_conf']['dec_val']               = (isset($this->Nm_conf_reg[$sConfReg]['unid_mont_sep_dec']))        ?  $this->Nm_conf_reg[$sConfReg]['unid_mont_sep_dec']            : ",";
      $_SESSION['scriptcase']['reg_conf']['num_group_digit']       = (isset($this->Nm_conf_reg[$sConfReg]['num_group_digit']))          ?  $this->Nm_conf_reg[$sConfReg]['num_group_digit']              : "1";
      $_SESSION['scriptcase']['reg_conf']['unid_mont_group_digit'] = (isset($this->Nm_conf_reg[$sConfReg]['unid_mont_group_digit']))    ?  $this->Nm_conf_reg[$sConfReg]['unid_mont_group_digit']        : "1";
      $_SESSION['scriptcase']['reg_conf']['html_dir']              = (isset($this->Nm_conf_reg[$sConfReg]['ger_ltr_rtl']))              ?  " DIR='" . $this->Nm_conf_reg[$sConfReg]['ger_ltr_rtl'] . "'" : "";
      if ('' == $_SESSION['scriptcase']['reg_conf']['num_group_digit'])
      {
          $_SESSION['scriptcase']['reg_conf']['num_group_digit'] = '1';
      }
      if ('' == $_SESSION['scriptcase']['reg_conf']['unid_mont_group_digit'])
      {
          $_SESSION['scriptcase']['reg_conf']['unid_mont_group_digit'] = '1';
      }
   }
   function sc_Include($path, $tp, $name)
   {
       if (($tp == "F" && !function_exists($name)) || ($tp == "C" && !class_exists($name)))
       {
           include_once($path);
       }
   } // sc_Include
   function sc_Sql_Protect($var, $tp, $conex="")
   {
       if (empty($conex) || $conex == "conn_mysql")
       {
           $TP_banco = $_SESSION['scriptcase']['glo_tpbanco'];
       }
       else
       {
           eval ("\$TP_banco = \$this->nm_con_" . $conex . "['tpbanco'];");
       }
       if ($tp == "date")
       {
           if (in_array(strtolower($TP_banco), $this->nm_bases_access))
           {
               return "#" . $var . "#";
           }
           else
           {
               return "'" . $var . "'";
           }
       }
       else
       {
           return $var;
       }
   } // sc_Sql_Protect
}
//===============================================================================
class form_sec_users_edit
{
    var $contr_form_sec_users;
    function inicializa()
    {
        global $nm_opc_lookup, $nm_opc_php, $script_case_init;
        require_once("form_sec_users_apl.php");
        require_once("form_sec_users_form0.php");
        $this->contr_form_sec_users = new form_sec_users_form();
    }
}
if (!function_exists("NM_is_utf8"))
{
    include_once("form_sec_users_nmutf8.php");
}
ob_start();
//
//----------------  
//
    $_SESSION['scriptcase']['form_sec_users']['contr_erro'] = 'off';
    if (!function_exists("NM_is_utf8"))
    {
        include_once("form_sec_users_nmutf8.php");
    }
    $sc_conv_var = array();
    $sc_conv_var['login'] = "login_";
    $sc_conv_var['pswd'] = "pswd_";
    $sc_conv_var['name'] = "name_";
    $sc_conv_var['ci'] = "ci_";
    $sc_conv_var['email'] = "email_";
    $sc_conv_var['usr_active'] = "usr_active_";
    $sc_conv_var['activation_code'] = "activation_code_";
    $sc_conv_var['priv_admin'] = "priv_admin_";
    $sc_conv_var['zona'] = "zona_";
    $sc_conv_var['fecha_registro'] = "fecha_registro_";
    $sc_conv_var['departamento'] = "departamento_";
    $sc_conv_var['cod_provincia'] = "cod_provincia_";
    $sc_conv_var['ingreso'] = "ingreso_";
    $sc_conv_var['access_fa'] = "access_fa_";
    $sc_conv_var['access_im'] = "access_im_";
    $sc_conv_var['access_fp'] = "access_fp_";
    $sc_conv_var['access_siu'] = "access_siu_";
    if (!empty($_FILES))
    {
        foreach ($_FILES as $nmgp_campo => $nmgp_valores)
        {
             if (isset($sc_conv_var[$nmgp_campo]))
             {
                 $nmgp_campo = $sc_conv_var[$nmgp_campo];
             }
             elseif (isset($sc_conv_var[strtolower($nmgp_campo)]))
             {
                 $nmgp_campo = $sc_conv_var[strtolower($nmgp_campo)];
             }
             $tmp_scfile_name     = $nmgp_campo . "_scfile_name";
             $tmp_scfile_type     = $nmgp_campo . "_scfile_type";
             $$nmgp_campo = is_array($nmgp_valores['tmp_name']) ? $nmgp_valores['tmp_name'][0] : $nmgp_valores['tmp_name'];
             $$tmp_scfile_type   = is_array($nmgp_valores['type'])     ? $nmgp_valores['type'][0]     : $nmgp_valores['type'];
             $$tmp_scfile_name   = is_array($nmgp_valores['name'])     ? $nmgp_valores['name'][0]     : $nmgp_valores['name'];
        }
    }
    if (!empty($_POST))
    {
        foreach ($_POST as $nmgp_var => $nmgp_val)
        {
             if (isset($sc_conv_var[$nmgp_var]))
             {
                 $nmgp_var = $sc_conv_var[$nmgp_var];
             }
             elseif (isset($sc_conv_var[strtolower($nmgp_var)]))
             {
                 $nmgp_var = $sc_conv_var[strtolower($nmgp_var)];
             }
             nm_limpa_str_form_sec_users($nmgp_val);
             $$nmgp_var = $nmgp_val;
        }
    }
    if (!empty($_GET))
    {
        foreach ($_GET as $nmgp_var => $nmgp_val)
        {
             if (isset($sc_conv_var[$nmgp_var]))
             {
                 $nmgp_var = $sc_conv_var[$nmgp_var];
             }
             elseif (isset($sc_conv_var[strtolower($nmgp_var)]))
             {
                 $nmgp_var = $sc_conv_var[strtolower($nmgp_var)];
             }
             nm_limpa_str_form_sec_users($nmgp_val);
             $$nmgp_var = $nmgp_val;
        }
    }

    if (isset($_POST['rs']) && 'ajax_' == substr($_POST['rs'], 0, 5) && isset($_POST['rsargs']) && !empty($_POST['rsargs']))
    {
        if ('ajax_form_sec_users_validate_usr_active_' == $_POST['rs'])
        {
            $usr_active_ = NM_utf8_urldecode($_POST['rsargs'][0]);
            $nmgp_refresh_row = NM_utf8_urldecode($_POST['rsargs'][1]);
            $script_case_init = NM_utf8_urldecode($_POST['rsargs'][2]);
        }
        if ('ajax_form_sec_users_validate_ci_' == $_POST['rs'])
        {
            $ci_ = NM_utf8_urldecode($_POST['rsargs'][0]);
            $nmgp_refresh_row = NM_utf8_urldecode($_POST['rsargs'][1]);
            $script_case_init = NM_utf8_urldecode($_POST['rsargs'][2]);
        }
        if ('ajax_form_sec_users_validate_name_' == $_POST['rs'])
        {
            $name_ = NM_utf8_urldecode($_POST['rsargs'][0]);
            $nmgp_refresh_row = NM_utf8_urldecode($_POST['rsargs'][1]);
            $script_case_init = NM_utf8_urldecode($_POST['rsargs'][2]);
        }
        if ('ajax_form_sec_users_validate_email_' == $_POST['rs'])
        {
            $email_ = NM_utf8_urldecode($_POST['rsargs'][0]);
            $nmgp_refresh_row = NM_utf8_urldecode($_POST['rsargs'][1]);
            $script_case_init = NM_utf8_urldecode($_POST['rsargs'][2]);
        }
        if ('ajax_form_sec_users_validate_login_' == $_POST['rs'])
        {
            $login_ = NM_utf8_urldecode($_POST['rsargs'][0]);
            $nmgp_refresh_row = NM_utf8_urldecode($_POST['rsargs'][1]);
            $script_case_init = NM_utf8_urldecode($_POST['rsargs'][2]);
        }
        if ('ajax_form_sec_users_validate_pswd_' == $_POST['rs'])
        {
            $pswd_ = NM_utf8_urldecode($_POST['rsargs'][0]);
            $nmgp_refresh_row = NM_utf8_urldecode($_POST['rsargs'][1]);
            $script_case_init = NM_utf8_urldecode($_POST['rsargs'][2]);
        }
        if ('ajax_form_sec_users_validate_access_fa_' == $_POST['rs'])
        {
            $access_fa_ = NM_utf8_urldecode($_POST['rsargs'][0]);
            $nmgp_refresh_row = NM_utf8_urldecode($_POST['rsargs'][1]);
            $script_case_init = NM_utf8_urldecode($_POST['rsargs'][2]);
        }
        if ('ajax_form_sec_users_validate_access_fp_' == $_POST['rs'])
        {
            $access_fp_ = NM_utf8_urldecode($_POST['rsargs'][0]);
            $nmgp_refresh_row = NM_utf8_urldecode($_POST['rsargs'][1]);
            $script_case_init = NM_utf8_urldecode($_POST['rsargs'][2]);
        }
        if ('ajax_form_sec_users_validate_access_im_' == $_POST['rs'])
        {
            $access_im_ = NM_utf8_urldecode($_POST['rsargs'][0]);
            $nmgp_refresh_row = NM_utf8_urldecode($_POST['rsargs'][1]);
            $script_case_init = NM_utf8_urldecode($_POST['rsargs'][2]);
        }
        if ('ajax_form_sec_users_validate_zona_' == $_POST['rs'])
        {
            $zona_ = NM_utf8_urldecode($_POST['rsargs'][0]);
            $nmgp_refresh_row = NM_utf8_urldecode($_POST['rsargs'][1]);
            $script_case_init = NM_utf8_urldecode($_POST['rsargs'][2]);
        }
        if ('ajax_form_sec_users_validate_cod_provincia_' == $_POST['rs'])
        {
            $cod_provincia_ = NM_utf8_urldecode($_POST['rsargs'][0]);
            $nmgp_refresh_row = NM_utf8_urldecode($_POST['rsargs'][1]);
            $script_case_init = NM_utf8_urldecode($_POST['rsargs'][2]);
        }
        if ('ajax_form_sec_users_refresh_zona_' == $_POST['rs'])
        {
            $zona_ = NM_utf8_urldecode($_POST['rsargs'][0]);
            $nmgp_refresh_row = NM_utf8_urldecode($_POST['rsargs'][1]);
            $nmgp_refresh_fields = NM_utf8_urldecode($_POST['rsargs'][2]);
            $script_case_init = NM_utf8_urldecode($_POST['rsargs'][3]);
        }
        if ('ajax_form_sec_users_submit_form' == $_POST['rs'])
        {
            $usr_active_ = NM_utf8_urldecode($_POST['rsargs'][0]);
            $ci_ = NM_utf8_urldecode($_POST['rsargs'][1]);
            $name_ = NM_utf8_urldecode($_POST['rsargs'][2]);
            $email_ = NM_utf8_urldecode($_POST['rsargs'][3]);
            $login_ = NM_utf8_urldecode($_POST['rsargs'][4]);
            $pswd_ = NM_utf8_urldecode($_POST['rsargs'][5]);
            $access_fa_ = NM_utf8_urldecode($_POST['rsargs'][6]);
            $access_fp_ = NM_utf8_urldecode($_POST['rsargs'][7]);
            $access_im_ = NM_utf8_urldecode($_POST['rsargs'][8]);
            $zona_ = NM_utf8_urldecode($_POST['rsargs'][9]);
            $cod_provincia_ = NM_utf8_urldecode($_POST['rsargs'][10]);
            $nmgp_refresh_row = NM_utf8_urldecode($_POST['rsargs'][11]);
            $nm_form_submit = NM_utf8_urldecode($_POST['rsargs'][12]);
            $nmgp_url_saida = NM_utf8_urldecode($_POST['rsargs'][13]);
            $nmgp_opcao = NM_utf8_urldecode($_POST['rsargs'][14]);
            $nmgp_ancora = NM_utf8_urldecode($_POST['rsargs'][15]);
            $nmgp_num_form = NM_utf8_urldecode($_POST['rsargs'][16]);
            $nmgp_parms = NM_utf8_urldecode($_POST['rsargs'][17]);
            $script_case_init = NM_utf8_urldecode($_POST['rsargs'][18]);
        }
        if ('ajax_form_sec_users_navigate_form' == $_POST['rs'])
        {
            $login_ = NM_utf8_urldecode($_POST['rsargs'][0]);
            $nm_form_submit = NM_utf8_urldecode($_POST['rsargs'][1]);
            $nmgp_opcao = NM_utf8_urldecode($_POST['rsargs'][2]);
            $nmgp_ordem = NM_utf8_urldecode($_POST['rsargs'][3]);
            $script_case_init = NM_utf8_urldecode($_POST['rsargs'][4]);
        }
        if ('ajax_form_sec_users_add_new_line' == $_POST['rs'])
        {
            $sc_clone = NM_utf8_urldecode($_POST['rsargs'][0]);
            $sc_seq_clone = NM_utf8_urldecode($_POST['rsargs'][1]);
            $sc_seq_vert = NM_utf8_urldecode($_POST['rsargs'][2]);
            $script_case_init = NM_utf8_urldecode($_POST['rsargs'][3]);
        }
        if ('ajax_form_sec_users_backup_line' == $_POST['rs'])
        {
            $login_ = NM_utf8_urldecode($_POST['rsargs'][0]);
            $nmgp_refresh_row = NM_utf8_urldecode($_POST['rsargs'][1]);
            $nm_form_submit = NM_utf8_urldecode($_POST['rsargs'][2]);
            $script_case_init = NM_utf8_urldecode($_POST['rsargs'][3]);
        }
        if ('ajax_form_sec_users_table_refresh' == $_POST['rs'])
        {
            $login_ = NM_utf8_urldecode($_POST['rsargs'][0]);
            $nm_form_submit = NM_utf8_urldecode($_POST['rsargs'][1]);
            $nmgp_opcao = NM_utf8_urldecode($_POST['rsargs'][2]);
            $nmgp_ordem = NM_utf8_urldecode($_POST['rsargs'][3]);
            $nmgp_fast_search = NM_utf8_urldecode($_POST['rsargs'][4]);
            $nmgp_cond_fast_search = NM_utf8_urldecode($_POST['rsargs'][5]);
            $nmgp_arg_fast_search = NM_utf8_urldecode($_POST['rsargs'][6]);
            $script_case_init = NM_utf8_urldecode($_POST['rsargs'][7]);
        }
    }

    if (!empty($glo_perfil))  
    { 
        $_SESSION['scriptcase']['glo_perfil'] = $glo_perfil;
    }   
    if (isset($glo_servidor)) 
    {
        $_SESSION['scriptcase']['glo_servidor'] = $glo_servidor;
    }
    if (isset($glo_banco)) 
    {
        $_SESSION['scriptcase']['glo_banco'] = $glo_banco;
    }
    if (isset($glo_tpbanco)) 
    {
        $_SESSION['scriptcase']['glo_tpbanco'] = $glo_tpbanco;
    }
    if (isset($glo_usuario)) 
    {
        $_SESSION['scriptcase']['glo_usuario'] = $glo_usuario;
    }
    if (isset($glo_senha)) 
    {
        $_SESSION['scriptcase']['glo_senha'] = $glo_senha;
    }
    if (isset($glo_senha_protect)) 
    {
        $_SESSION['scriptcase']['glo_senha_protect'] = $glo_senha_protect;
    }
    if (isset($script_case_init) && !isset($_SESSION['sc_session'][$script_case_init]['form_sec_users']['lig_edit_lookup']))
    { 
        $_SESSION['sc_session'][$script_case_init]['form_sec_users']['lig_edit_lookup']     = false;
        $_SESSION['sc_session'][$script_case_init]['form_sec_users']['lig_edit_lookup_cb']  = '';
        $_SESSION['sc_session'][$script_case_init]['form_sec_users']['lig_edit_lookup_row'] = '';
    } 
    if (isset($script_case_init) && !isset($_SESSION['sc_session'][$script_case_init]['form_sec_users']['embutida_call']))
    { 
        $_SESSION['sc_session'][$script_case_init]['form_sec_users']['embutida_call'] = false;
    } 
    if (isset($script_case_init) && !isset($_SESSION['sc_session'][$script_case_init]['form_sec_users']['embutida_proc']))
    { 
        $_SESSION['sc_session'][$script_case_init]['form_sec_users']['embutida_proc'] = false;
    } 
    if (isset($script_case_init) && !isset($_SESSION['sc_session'][$script_case_init]['form_sec_users']['embutida_liga_form_insert']))
    { 
        $_SESSION['sc_session'][$script_case_init]['form_sec_users']['embutida_liga_form_insert'] = '';
    } 
    if (isset($script_case_init) && !isset($_SESSION['sc_session'][$script_case_init]['form_sec_users']['embutida_liga_form_update']))
    { 
        $_SESSION['sc_session'][$script_case_init]['form_sec_users']['embutida_liga_form_update'] = '';
    } 
    if (isset($script_case_init) && !isset($_SESSION['sc_session'][$script_case_init]['form_sec_users']['embutida_liga_form_delete']))
    { 
        $_SESSION['sc_session'][$script_case_init]['form_sec_users']['embutida_liga_form_delete'] = '';
    } 
    if (isset($script_case_init) && !isset($_SESSION['sc_session'][$script_case_init]['form_sec_users']['embutida_liga_form_btn_nav']))
    { 
        $_SESSION['sc_session'][$script_case_init]['form_sec_users']['embutida_liga_form_btn_nav'] = '';
    } 
    if (isset($script_case_init) && !isset($_SESSION['sc_session'][$script_case_init]['form_sec_users']['embutida_liga_grid_edit']))
    { 
        $_SESSION['sc_session'][$script_case_init]['form_sec_users']['embutida_liga_grid_edit'] = '';
    } 
    if (isset($script_case_init) && !isset($_SESSION['sc_session'][$script_case_init]['form_sec_users']['embutida_liga_grid_edit_link']))
    { 
        $_SESSION['sc_session'][$script_case_init]['form_sec_users']['embutida_liga_grid_edit_link'] = '';
    } 
    if (isset($script_case_init) && !isset($_SESSION['sc_session'][$script_case_init]['form_sec_users']['embutida_liga_qtd_reg']))
    { 
        $_SESSION['sc_session'][$script_case_init]['form_sec_users']['embutida_liga_qtd_reg'] = '';
    } 
    if (isset($script_case_init) && !isset($_SESSION['sc_session'][$script_case_init]['form_sec_users']['embutida_liga_tp_pag']))
    { 
        $_SESSION['sc_session'][$script_case_init]['form_sec_users']['embutida_liga_tp_pag'] = '';
    } 
    if (isset($script_case_init) && $_SESSION['sc_session'][$script_case_init]['form_sec_users']['embutida_proc'])
    {
        return;
    }
    if (isset($script_case_init) && isset($_SESSION['sc_session'][$script_case_init]['form_sec_users']['embutida_parms']))
    { 
        $nmgp_parms = $_SESSION['sc_session'][$script_case_init]['form_sec_users']['embutida_parms'];
        unset($_SESSION['sc_session'][$script_case_init]['form_sec_users']['embutida_parms']);
    } 
    if (isset($nmgp_parms) && !empty($nmgp_parms)) 
    { 
        if (isset($_SESSION['nm_aba_bg_color'])) 
        { 
            unset($_SESSION['nm_aba_bg_color']);
        }   
        $nmgp_parms = NM_decode_input($nmgp_parms);
        $nmgp_parms = str_replace("@aspass@", "'", $nmgp_parms);
        $nmgp_parms = str_replace("*scout", "?@?", $nmgp_parms);
        $nmgp_parms = str_replace("*scin", "?#?", $nmgp_parms);
        $todo = explode("?@?", $nmgp_parms);
        $ix = 0;
        while (!empty($todo[$ix]))
        {
           $cadapar = explode("?#?", $todo[$ix]);
           if (1 < sizeof($cadapar))
           {
               nm_limpa_str_form_sec_users($cadapar[1]);
               if (isset($sc_conv_var[$cadapar[0]]))
               {
                   $cadapar[0] = $sc_conv_var[$cadapar[0]];
               }
               elseif (isset($sc_conv_var[strtolower($cadapar[0])]))
               {
                   $cadapar[0] = $sc_conv_var[strtolower($cadapar[0])];
               }
               $$cadapar[0] = $cadapar[1];
           }
           $ix++;
        }
    } 
    elseif (isset($script_case_init) && !empty($script_case_init) && isset($_SESSION['sc_session'][$script_case_init]['form_sec_users']['parms']))
    {
        if (!isset($nmgp_opcao) || ($nmgp_opcao != "incluir" && $nmgp_opcao != "novo" && $nmgp_opcao != "recarga" && $nmgp_opcao != "muda_form"))
        {
            $todo = explode("?@?", $_SESSION['sc_session'][$script_case_init]['form_sec_users']['parms']);
            $ix = 0;
            while (!empty($todo[$ix]))
            {
               $cadapar = explode("?#?", $todo[$ix]);
               $$cadapar[0] = $cadapar[1];
               $ix++;
            }
        }
    } 
    if (!isset($script_case_init) || empty($script_case_init))
    {
        $script_case_init = rand(2, 1000);
    }
    $salva_run = "N";
    $salva_iframe = false;
    if (isset($_SESSION['sc_session'][$script_case_init]['form_sec_users']['iframe_menu']))
    {
        $salva_iframe = $_SESSION['sc_session'][$script_case_init]['form_sec_users']['iframe_menu'];
        unset($_SESSION['sc_session'][$script_case_init]['form_sec_users']['iframe_menu']);
    }
    if (isset($_SESSION['sc_session'][$script_case_init]['form_sec_users']['run_iframe']))
    {
        $salva_run = $_SESSION['sc_session'][$script_case_init]['form_sec_users']['run_iframe'];
        unset($_SESSION['sc_session'][$script_case_init]['form_sec_users']['run_iframe']);
    }
    if (isset($nm_run_menu) && $nm_run_menu == 1)
    {
        if (isset($_SESSION['scriptcase']['sc_aba_iframe']) && isset($_SESSION['scriptcase']['sc_apl_menu_atual']) && $script_case_init == 1)
        {
            foreach ($_SESSION['scriptcase']['sc_aba_iframe'] as $aba => $apls_aba)
            {
                if ($aba == $_SESSION['scriptcase']['sc_apl_menu_atual'])
                {
                    unset($_SESSION['scriptcase']['sc_aba_iframe'][$aba]);
                    break;
                }
            }
        }
        if ($script_case_init == 1)
        {
            $_SESSION['scriptcase']['sc_apl_menu_atual'] = "form_sec_users";
        }
        $achou = false;
        if (isset($_SESSION['sc_session'][$script_case_init]))
        {
            foreach ($_SESSION['sc_session'][$script_case_init] as $nome_apl => $resto)
            {
                if ($nome_apl == 'form_sec_users' || $achou)
                {
                    unset($_SESSION['sc_session'][$script_case_init][$nome_apl]);
                    if (!empty($_SESSION['sc_session'][$script_case_init][$nome_apl]))
                    {
                        $achou = true;
                    }
                }
            }
            if (!$achou && isset($nm_apl_menu))
            {
                foreach ($_SESSION['sc_session'][$script_case_init] as $nome_apl => $resto)
                {
                    if ($nome_apl == $nm_apl_menu || $achou)
                    {
                        $achou = true;
                        if ($nome_apl != $nm_apl_menu)
                        {
                            unset($_SESSION['sc_session'][$script_case_init][$nome_apl]);
                        }
                    }
                }
            }
        }
        $_SESSION['sc_session'][$script_case_init]['form_sec_users']['iframe_menu']  = true;
        $_SESSION['sc_session'][$script_case_init]['form_sec_users']['mostra_cab']   = "S";
        $_SESSION['sc_session'][$script_case_init]['form_sec_users']['run_iframe']   = "N";
        $_SESSION['sc_session'][$script_case_init]['form_sec_users']['retorno_edit'] = "";
    }
    else
    {
        $_SESSION['sc_session'][$script_case_init]['form_sec_users']['run_iframe']  = $salva_run;
        $_SESSION['sc_session'][$script_case_init]['form_sec_users']['iframe_menu'] = $salva_iframe;
    }

    if (!isset($_SESSION['sc_session'][$script_case_init]['form_sec_users']['db_changed']))
    {
        $_SESSION['sc_session'][$script_case_init]['form_sec_users']['db_changed'] = false;
    }
    if (isset($_GET['nmgp_outra_jan']) && 'true' == $_GET['nmgp_outra_jan'] && isset($_GET['nmgp_url_saida']) && 'modal' == $_GET['nmgp_url_saida'])
    {
        $_SESSION['sc_session'][$script_case_init]['form_sec_users']['db_changed'] = false;
    }

    if (isset($_SESSION['scriptcase']['sc_outra_jan']) && $_SESSION['scriptcase']['sc_outra_jan'] == 'form_sec_users')
    {
        $_SESSION['sc_session'][$script_case_init]['form_sec_users']['sc_outra_jan'] = true;
         unset($_SESSION['scriptcase']['sc_outra_jan']);
    }
    if (isset($nmgp_outra_jan) && $nmgp_outra_jan == 'true')
    {
        if (isset($nmgp_url_saida) && $nmgp_url_saida == "modal")
        {
            $_SESSION['sc_session'][$script_case_init]['form_sec_users']['sc_modal'] = true;
            $nm_url_saida = "form_sec_users_fim.php"; 
        }
        $nm_apl_dependente = 0;
        $_SESSION['sc_session'][$script_case_init]['form_sec_users']['sc_outra_jan'] = true;
    }

    if (!isset($_SESSION['sc_session'][$script_case_init]['form_sec_users']['initialize']))
    {
        $_SESSION['sc_session'][$script_case_init]['form_sec_users']['initialize'] = true;
    }
    elseif (!isset($_SERVER['HTTP_REFERER']))
    {
        $_SESSION['sc_session'][$script_case_init]['form_sec_users']['initialize'] = false;
    }
    elseif (false === strpos($_SERVER['HTTP_REFERER'], '.php'))
    {
        $_SESSION['sc_session'][$script_case_init]['form_sec_users']['initialize'] = true;
    }
    else
    {
        $sReferer = substr($_SERVER['HTTP_REFERER'], 0, strpos($_SERVER['HTTP_REFERER'], '.php'));
        $sReferer = substr($sReferer, strrpos($sReferer, '/') + 1);
        if ('form_sec_users' == $sReferer || 'form_sec_users_' == substr($sReferer, 0, 15))
        {
            $_SESSION['sc_session'][$script_case_init]['form_sec_users']['initialize'] = false;
        }
        else
        {
            $_SESSION['sc_session'][$script_case_init]['form_sec_users']['initialize'] = true;
        }
    }

    if (isset($_SESSION['sc_session'][$script_case_init]['form_sec_users']['first_time']))
    {
        $_SESSION['sc_session'][$script_case_init]['form_sec_users']['first_time'] = false;
    }
    else
    {
        $_SESSION['sc_session'][$script_case_init]['form_sec_users']['first_time'] = true;
    }

    $_SESSION['sc_session'][$script_case_init]['form_sec_users']['menu_desenv'] = false;   
    if (!defined("SC_ERROR_HANDLER"))
    {
        define("SC_ERROR_HANDLER", 1);
    }
    include_once(dirname(__FILE__) . "/form_sec_users_erro.php");
    $nm_browser = strpos($_SERVER['HTTP_USER_AGENT'], "Konqueror") ;
    if (is_int($nm_browser))   
    {
        $nm_browser = "Konqueror"; 
    } 
    else  
    {
        $nm_browser = strpos($_SERVER['HTTP_USER_AGENT'], "Opera") ;
        if (is_int($nm_browser))   
        {
            $nm_browser = "Opera"; 
        }
    } 
    $_SESSION['scriptcase']['change_regional_old'] = '';
    $_SESSION['scriptcase']['change_regional_new'] = '';
    if (!empty($nmgp_opcao) && ($nmgp_opcao == "change_lang_t" || $nmgp_opcao == "change_lang_b" || $nmgp_opcao == "change_lang_f"))  
    {
        $Temp_lang = explode(";" , $nmgp_idioma_novo);  
        if (isset($Temp_lang[0]) && !empty($Temp_lang[0]))  
        { 
            $_SESSION['scriptcase']['str_lang'] = $Temp_lang[0];
        } 
        if (isset($Temp_lang[1]) && !empty($Temp_lang[1])) 
        { 
            $_SESSION['scriptcase']['change_regional_old'] = (isset($_SESSION['scriptcase']['str_conf_reg']) && !empty($_SESSION['scriptcase']['str_conf_reg'])) ? $_SESSION['scriptcase']['str_conf_reg'] : "es_ec";
            $_SESSION['scriptcase']['str_conf_reg']        = $Temp_lang[1];
            $_SESSION['scriptcase']['change_regional_new'] = $_SESSION['scriptcase']['str_conf_reg'];
        } 
        $nmgp_opcao = "recarga";  
    } 
    if (!empty($nmgp_opcao) && ($nmgp_opcao == "change_schema_t" || $nmgp_opcao == "change_schema_b" || $nmgp_opcao == "change_schema_f"))  
    {
        if ($nmgp_opcao == "change_schema_t")  
        {
            $nmgp_schema = $nmgp_schema_t . "/" . $nmgp_schema_t;  
        } 
        elseif ($nmgp_opcao == "change_schema_b")  
        {
            $nmgp_schema = $nmgp_schema_b . "/" . $nmgp_schema_b;  
        } 
        else 
        {
            $nmgp_schema = $nmgp_schema_f . "/" . $nmgp_schema_f;  
        } 
        $_SESSION['scriptcase']['str_schema_all'] = $nmgp_schema;
        $nmgp_opcao = "recarga";  
    } 
    if (!empty($nmgp_opcao) && $nmgp_opcao == "lookup")  
    {
        $nm_opc_lookup = $nmgp_opcao;
    }
    elseif (!empty($nmgp_opcao) && $nmgp_opcao == "formphp")  
    {
        $nm_opc_form_php = $nmgp_opcao;
    }
    else
    {
        if (!empty($nmgp_opcao))  
        {
            $_SESSION['sc_session'][$script_case_init]['form_sec_users']['opcao'] = $nmgp_opcao ; 
        }
        if (!empty($_SESSION['sc_session'][$script_case_init]['form_sec_users']['volta_redirect_apl']))
        {
            $_SESSION['scriptcase']['sc_url_saida'][$script_case_init] = $_SESSION['sc_session'][$script_case_init]['form_sec_users']['volta_redirect_apl']; 
            $nm_apl_dependente = $_SESSION['sc_session'][$script_case_init]['form_sec_users']['volta_redirect_tp']; 
            $_SESSION['sc_session'][$script_case_init]['form_sec_users']['volta_redirect_apl'] = "";
            $_SESSION['sc_session'][$script_case_init]['form_sec_users']['volta_redirect_tp'] = "";
            $nm_url_saida = "form_sec_users_fim.php"; 
        }
        elseif (isset($_SESSION['sc_session'][$script_case_init]['form_sec_users']['sc_outra_jan']) && $_SESSION['sc_session'][$script_case_init]['form_sec_users']['sc_outra_jan'] == 'true')
        {
               $nm_url_saida = "form_sec_users_fim.php"; 
        }
        elseif ($_SESSION['sc_session'][$script_case_init]['form_sec_users']['run_iframe'] != "F" && $_SESSION['sc_session'][$script_case_init]['form_sec_users']['run_iframe'] != "R")
        {
           $nm_url_saida = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : ""; 
           $nm_url_saida = str_replace("_fim.php", ".php", $nm_url_saida); 
            $nm_saida_global = $nm_url_saida;
            if (!empty($nmgp_url_saida) && empty($_SESSION['sc_session'][$script_case_init]['form_sec_users']['retorno_edit'])) 
            {
                $_SESSION['sc_session'][$script_case_init]['form_sec_users']['retorno_edit'] = $nmgp_url_saida ; 
            } 
            if (!empty($_SESSION['sc_session'][$script_case_init]['form_sec_users']['retorno_edit'])) 
            {
                $nm_url_saida = $_SESSION['sc_session'][$script_case_init]['form_sec_users']['retorno_edit'] . "?script_case_init=" . $script_case_init . "&script_case_session=" . session_id();  
                $nm_apl_dependente = 1 ; 
                $nm_saida_global = $nm_url_saida;
            } 
            if ($nm_apl_dependente != 1) 
            { 
                $_SESSION['sc_session'][$script_case_init]['form_sec_users']['run_iframe'] = "N"; 
            } 
            if ($_SESSION['sc_session'][$script_case_init]['form_sec_users']['run_iframe'] != "F" && $_SESSION['sc_session'][$script_case_init]['form_sec_users']['run_iframe'] != "R" && (!isset($_SESSION['sc_session'][$script_case_init]['form_sec_users']['embutida_call']) || !$_SESSION['sc_session'][$script_case_init]['form_sec_users']['embutida_call']))
            { 
                $_SESSION['scriptcase']['sc_url_saida'][$script_case_init] = $nm_url_saida; 
                $nm_url_saida = "form_sec_users_fim.php"; 
                $_SESSION['scriptcase']['sc_tp_saida'] = "P"; 
                if ($nm_apl_dependente == 1) 
                { 
                    $_SESSION['scriptcase']['sc_tp_saida'] = "D"; 
                } 
            } 
        }
        if (empty($_SESSION['sc_session'][$script_case_init]['form_sec_users']['volta_tp']) && $_SESSION['sc_session'][$script_case_init]['form_sec_users']['run_iframe'] != "F" && $_SESSION['sc_session'][$script_case_init]['form_sec_users']['run_iframe'] != "R")
        {
            $_SESSION['sc_session'][$script_case_init]['form_sec_users']['volta_php'] = $nm_url_saida;
            $_SESSION['sc_session'][$script_case_init]['form_sec_users']['volta_apl'] = $nm_saida_global;
            $_SESSION['sc_session'][$script_case_init]['form_sec_users']['volta_ss']  = (isset($_SESSION['scriptcase']['sc_url_saida'][$script_case_init])) ? $_SESSION['scriptcase']['sc_url_saida'][$script_case_init] : "";
            $_SESSION['sc_session'][$script_case_init]['form_sec_users']['volta_dep'] = $nm_apl_dependente;
            $_SESSION['sc_session'][$script_case_init]['form_sec_users']['volta_tp']  = (isset($_SESSION['scriptcase']['sc_tp_saida'])) ? $_SESSION['scriptcase']['sc_tp_saida'] : "";
        }
        $nm_url_saida = $_SESSION['sc_session'][$script_case_init]['form_sec_users']['volta_php'];
        $nm_saida_global = $_SESSION['sc_session'][$script_case_init]['form_sec_users']['volta_php'];
        $nm_apl_dependente = $_SESSION['sc_session'][$script_case_init]['form_sec_users']['volta_dep'];
        if ($_SESSION['sc_session'][$script_case_init]['form_sec_users']['run_iframe'] != "F" && $_SESSION['sc_session'][$script_case_init]['form_sec_users']['run_iframe'] != "R" && !empty($_SESSION['sc_session'][$script_case_init]['form_sec_users']['volta_ss'])) 
        { 
            $_SESSION['scriptcase']['sc_url_saida'][$script_case_init] = $_SESSION['sc_session'][$script_case_init]['form_sec_users']['volta_ss'];
            $_SESSION['scriptcase']['sc_tp_saida']  = $_SESSION['sc_session'][$script_case_init]['form_sec_users']['volta_tp'];
        } 
        if ($_SESSION['sc_session'][$script_case_init]['form_sec_users']['run_iframe'] == "F" || $_SESSION['sc_session'][$script_case_init]['form_sec_users']['run_iframe'] == "R") 
        { 
            if (!empty($nmgp_url_saida) && empty($_SESSION['sc_session'][$script_case_init]['form_sec_users']['retorno_edit'])) 
            {
                $_SESSION['sc_session'][$script_case_init]['form_sec_users']['retorno_edit'] = $nmgp_url_saida . "?script_case_init=" . $script_case_init . "&script_case_session=" . session_id(); 
            } 
        } 
        if (isset($_SESSION['scriptcase']['nm_sc_retorno']) && !empty($_SESSION['scriptcase']['nm_sc_retorno']) && $_SESSION['sc_session'][$script_case_init]['form_sec_users']['run_iframe'] != "F" && $_SESSION['sc_session'][$script_case_init]['form_sec_users']['run_iframe'] != "R") 
        { 
            $_SESSION['sc_session'][$script_case_init]['form_sec_users']['menu_desenv'] = true;   
        } 
    }
    if (isset($nmgp_redir)) 
    { 
        $_SESSION['sc_session'][$script_case_init]['form_sec_users']['redir'] = $nmgp_redir;   
    } 
    if (isset($nmgp_outra_jan) && $nmgp_outra_jan == 'true')
    {
        $_SESSION['sc_session'][$script_case_init]['form_sec_users']['sc_outra_jan'] = true;
         if ($nmgp_url_saida == "modal")
         {
             $_SESSION['sc_session'][$script_case_init]['form_sec_users']['sc_modal'] = true;
             $nm_url_saida = "form_sec_users_fim.php"; 
         }
    }
    if (isset($_SESSION['sc_session'][$script_case_init]['form_sec_users']['sc_outra_jan']) && $_SESSION['sc_session'][$script_case_init]['form_sec_users']['sc_outra_jan'])
    {
        $nm_apl_dependente = 0;
    }
    $GLOBALS["NM_ERRO_IBASE"] = 0;  
    $inicial_form_sec_users = new form_sec_users_edit();
    $inicial_form_sec_users->inicializa();

    $inicial_form_sec_users->contr_form_sec_users->NM_ajax_info['select_html'] = array();
    $inicial_form_sec_users->contr_form_sec_users->NM_ajax_info['select_html']['usr_active_'] = "class=\\\"sc-js-input scFormObjectOddMult\\\" style=\\\";\\\" id=\\\"id_sc_field_usr_active_\" . \$sc_seq_vert . \"\\\" name=\\\"usr_active_\" . \$sc_seq_vert . \"\\\" size=1";
    $inicial_form_sec_users->contr_form_sec_users->NM_ajax_info['select_html']['access_fa_'] = " onClick=\\\"\\\" ";
    $inicial_form_sec_users->contr_form_sec_users->NM_ajax_info['select_html']['access_fp_'] = " onClick=\\\"\\\" ";
    $inicial_form_sec_users->contr_form_sec_users->NM_ajax_info['select_html']['access_im_'] = " onClick=\\\"\\\" ";
    $inicial_form_sec_users->contr_form_sec_users->NM_ajax_info['select_html']['zona_'] = "class=\\\"sc-js-input scFormObjectOddMult\\\" style=\\\";\\\" id=\\\"id_sc_field_zona_\" . \$sc_seq_vert . \"\\\" name=\\\"zona_\" . \$sc_seq_vert . \"\\\" size=1";
    $inicial_form_sec_users->contr_form_sec_users->NM_ajax_info['select_html']['cod_provincia_'] = "class=\\\"sc-js-input scFormObjectOddMult\\\" style=\\\";\\\" id=\\\"id_sc_field_cod_provincia_\" . \$sc_seq_vert . \"\\\" name=\\\"cod_provincia_\" . \$sc_seq_vert . \"\\\" size=1";

    if (!defined('SC_SAJAX_LOADED'))
    {
        include_once(dirname(__FILE__) . '/form_sec_users_sajax.php');
        define('SC_SAJAX_LOADED', 'YES');
    }
    if (!class_exists('Services_JSON'))
    {
        include_once(dirname(__FILE__) . '/form_sec_users_json.php');
    }
    $sajax_request_type = "POST";
    sajax_init();
    //$sajax_debug_mode = 1;
    sajax_export("ajax_form_sec_users_validate_usr_active_");
    sajax_export("ajax_form_sec_users_validate_ci_");
    sajax_export("ajax_form_sec_users_validate_name_");
    sajax_export("ajax_form_sec_users_validate_email_");
    sajax_export("ajax_form_sec_users_validate_login_");
    sajax_export("ajax_form_sec_users_validate_pswd_");
    sajax_export("ajax_form_sec_users_validate_access_fa_");
    sajax_export("ajax_form_sec_users_validate_access_fp_");
    sajax_export("ajax_form_sec_users_validate_access_im_");
    sajax_export("ajax_form_sec_users_validate_zona_");
    sajax_export("ajax_form_sec_users_validate_cod_provincia_");
    sajax_export("ajax_form_sec_users_refresh_zona_");
    sajax_export("ajax_form_sec_users_submit_form");
    sajax_export("ajax_form_sec_users_navigate_form");
    sajax_export("ajax_form_sec_users_add_new_line");
    sajax_export("ajax_form_sec_users_backup_line");
    sajax_export("ajax_form_sec_users_table_refresh");
    sajax_handle_client_request();

    $inicial_form_sec_users->contr_form_sec_users->controle();
//
    function nm_limpa_str_form_sec_users(&$str)
    {
        if (get_magic_quotes_gpc())
        {
            if (is_array($str))
            {
                foreach ($str as $x => $cada_str)
                {
                    $str[$x] = str_replace("@aspasd@", '"', $str[$x]);
                    $str[$x] = stripslashes($str[$x]);
                }
            }
            else
            {
                $str = str_replace("@aspasd@", '"', $str);
                $str = stripslashes($str);
            }
        }
    }

    function ajax_form_sec_users_validate_usr_active_($usr_active_, $nmgp_refresh_row, $script_case_init)
    {
        global $inicial_form_sec_users;
        //register_shutdown_function("form_sec_users_pack_ajax_response");
        $inicial_form_sec_users->contr_form_sec_users->NM_ajax_flag          = true;
        $inicial_form_sec_users->contr_form_sec_users->NM_ajax_opcao         = 'validate_usr_active_';
        $inicial_form_sec_users->contr_form_sec_users->NM_ajax_info['param'] = array(
                  'usr_active_' => NM_utf8_urldecode($usr_active_),
                  'nmgp_refresh_row' => NM_utf8_urldecode($nmgp_refresh_row),
                  'script_case_init' => NM_utf8_urldecode($script_case_init),
                  'buffer_output' => true,
                 );
        if ($inicial_form_sec_users->contr_form_sec_users->NM_ajax_info['param']['buffer_output'])
        {
            ob_start();
        }
        $inicial_form_sec_users->contr_form_sec_users->controle();
        exit;
    } // ajax_validate_usr_active_

    function ajax_form_sec_users_validate_ci_($ci_, $nmgp_refresh_row, $script_case_init)
    {
        global $inicial_form_sec_users;
        //register_shutdown_function("form_sec_users_pack_ajax_response");
        $inicial_form_sec_users->contr_form_sec_users->NM_ajax_flag          = true;
        $inicial_form_sec_users->contr_form_sec_users->NM_ajax_opcao         = 'validate_ci_';
        $inicial_form_sec_users->contr_form_sec_users->NM_ajax_info['param'] = array(
                  'ci_' => NM_utf8_urldecode($ci_),
                  'nmgp_refresh_row' => NM_utf8_urldecode($nmgp_refresh_row),
                  'script_case_init' => NM_utf8_urldecode($script_case_init),
                  'buffer_output' => true,
                 );
        if ($inicial_form_sec_users->contr_form_sec_users->NM_ajax_info['param']['buffer_output'])
        {
            ob_start();
        }
        $inicial_form_sec_users->contr_form_sec_users->controle();
        exit;
    } // ajax_validate_ci_

    function ajax_form_sec_users_validate_name_($name_, $nmgp_refresh_row, $script_case_init)
    {
        global $inicial_form_sec_users;
        //register_shutdown_function("form_sec_users_pack_ajax_response");
        $inicial_form_sec_users->contr_form_sec_users->NM_ajax_flag          = true;
        $inicial_form_sec_users->contr_form_sec_users->NM_ajax_opcao         = 'validate_name_';
        $inicial_form_sec_users->contr_form_sec_users->NM_ajax_info['param'] = array(
                  'name_' => NM_utf8_urldecode($name_),
                  'nmgp_refresh_row' => NM_utf8_urldecode($nmgp_refresh_row),
                  'script_case_init' => NM_utf8_urldecode($script_case_init),
                  'buffer_output' => true,
                 );
        if ($inicial_form_sec_users->contr_form_sec_users->NM_ajax_info['param']['buffer_output'])
        {
            ob_start();
        }
        $inicial_form_sec_users->contr_form_sec_users->controle();
        exit;
    } // ajax_validate_name_

    function ajax_form_sec_users_validate_email_($email_, $nmgp_refresh_row, $script_case_init)
    {
        global $inicial_form_sec_users;
        //register_shutdown_function("form_sec_users_pack_ajax_response");
        $inicial_form_sec_users->contr_form_sec_users->NM_ajax_flag          = true;
        $inicial_form_sec_users->contr_form_sec_users->NM_ajax_opcao         = 'validate_email_';
        $inicial_form_sec_users->contr_form_sec_users->NM_ajax_info['param'] = array(
                  'email_' => NM_utf8_urldecode($email_),
                  'nmgp_refresh_row' => NM_utf8_urldecode($nmgp_refresh_row),
                  'script_case_init' => NM_utf8_urldecode($script_case_init),
                  'buffer_output' => true,
                 );
        if ($inicial_form_sec_users->contr_form_sec_users->NM_ajax_info['param']['buffer_output'])
        {
            ob_start();
        }
        $inicial_form_sec_users->contr_form_sec_users->controle();
        exit;
    } // ajax_validate_email_

    function ajax_form_sec_users_validate_login_($login_, $nmgp_refresh_row, $script_case_init)
    {
        global $inicial_form_sec_users;
        //register_shutdown_function("form_sec_users_pack_ajax_response");
        $inicial_form_sec_users->contr_form_sec_users->NM_ajax_flag          = true;
        $inicial_form_sec_users->contr_form_sec_users->NM_ajax_opcao         = 'validate_login_';
        $inicial_form_sec_users->contr_form_sec_users->NM_ajax_info['param'] = array(
                  'login_' => NM_utf8_urldecode($login_),
                  'nmgp_refresh_row' => NM_utf8_urldecode($nmgp_refresh_row),
                  'script_case_init' => NM_utf8_urldecode($script_case_init),
                  'buffer_output' => true,
                 );
        if ($inicial_form_sec_users->contr_form_sec_users->NM_ajax_info['param']['buffer_output'])
        {
            ob_start();
        }
        $inicial_form_sec_users->contr_form_sec_users->controle();
        exit;
    } // ajax_validate_login_

    function ajax_form_sec_users_validate_pswd_($pswd_, $nmgp_refresh_row, $script_case_init)
    {
        global $inicial_form_sec_users;
        //register_shutdown_function("form_sec_users_pack_ajax_response");
        $inicial_form_sec_users->contr_form_sec_users->NM_ajax_flag          = true;
        $inicial_form_sec_users->contr_form_sec_users->NM_ajax_opcao         = 'validate_pswd_';
        $inicial_form_sec_users->contr_form_sec_users->NM_ajax_info['param'] = array(
                  'pswd_' => NM_utf8_urldecode($pswd_),
                  'nmgp_refresh_row' => NM_utf8_urldecode($nmgp_refresh_row),
                  'script_case_init' => NM_utf8_urldecode($script_case_init),
                  'buffer_output' => true,
                 );
        if ($inicial_form_sec_users->contr_form_sec_users->NM_ajax_info['param']['buffer_output'])
        {
            ob_start();
        }
        $inicial_form_sec_users->contr_form_sec_users->controle();
        exit;
    } // ajax_validate_pswd_

    function ajax_form_sec_users_validate_access_fa_($access_fa_, $nmgp_refresh_row, $script_case_init)
    {
        global $inicial_form_sec_users;
        //register_shutdown_function("form_sec_users_pack_ajax_response");
        $inicial_form_sec_users->contr_form_sec_users->NM_ajax_flag          = true;
        $inicial_form_sec_users->contr_form_sec_users->NM_ajax_opcao         = 'validate_access_fa_';
        $inicial_form_sec_users->contr_form_sec_users->NM_ajax_info['param'] = array(
                  'access_fa_' => NM_utf8_urldecode($access_fa_),
                  'nmgp_refresh_row' => NM_utf8_urldecode($nmgp_refresh_row),
                  'script_case_init' => NM_utf8_urldecode($script_case_init),
                  'buffer_output' => true,
                 );
        if ($inicial_form_sec_users->contr_form_sec_users->NM_ajax_info['param']['buffer_output'])
        {
            ob_start();
        }
        $inicial_form_sec_users->contr_form_sec_users->controle();
        exit;
    } // ajax_validate_access_fa_

    function ajax_form_sec_users_validate_access_fp_($access_fp_, $nmgp_refresh_row, $script_case_init)
    {
        global $inicial_form_sec_users;
        //register_shutdown_function("form_sec_users_pack_ajax_response");
        $inicial_form_sec_users->contr_form_sec_users->NM_ajax_flag          = true;
        $inicial_form_sec_users->contr_form_sec_users->NM_ajax_opcao         = 'validate_access_fp_';
        $inicial_form_sec_users->contr_form_sec_users->NM_ajax_info['param'] = array(
                  'access_fp_' => NM_utf8_urldecode($access_fp_),
                  'nmgp_refresh_row' => NM_utf8_urldecode($nmgp_refresh_row),
                  'script_case_init' => NM_utf8_urldecode($script_case_init),
                  'buffer_output' => true,
                 );
        if ($inicial_form_sec_users->contr_form_sec_users->NM_ajax_info['param']['buffer_output'])
        {
            ob_start();
        }
        $inicial_form_sec_users->contr_form_sec_users->controle();
        exit;
    } // ajax_validate_access_fp_

    function ajax_form_sec_users_validate_access_im_($access_im_, $nmgp_refresh_row, $script_case_init)
    {
        global $inicial_form_sec_users;
        //register_shutdown_function("form_sec_users_pack_ajax_response");
        $inicial_form_sec_users->contr_form_sec_users->NM_ajax_flag          = true;
        $inicial_form_sec_users->contr_form_sec_users->NM_ajax_opcao         = 'validate_access_im_';
        $inicial_form_sec_users->contr_form_sec_users->NM_ajax_info['param'] = array(
                  'access_im_' => NM_utf8_urldecode($access_im_),
                  'nmgp_refresh_row' => NM_utf8_urldecode($nmgp_refresh_row),
                  'script_case_init' => NM_utf8_urldecode($script_case_init),
                  'buffer_output' => true,
                 );
        if ($inicial_form_sec_users->contr_form_sec_users->NM_ajax_info['param']['buffer_output'])
        {
            ob_start();
        }
        $inicial_form_sec_users->contr_form_sec_users->controle();
        exit;
    } // ajax_validate_access_im_

    function ajax_form_sec_users_validate_zona_($zona_, $nmgp_refresh_row, $script_case_init)
    {
        global $inicial_form_sec_users;
        //register_shutdown_function("form_sec_users_pack_ajax_response");
        $inicial_form_sec_users->contr_form_sec_users->NM_ajax_flag          = true;
        $inicial_form_sec_users->contr_form_sec_users->NM_ajax_opcao         = 'validate_zona_';
        $inicial_form_sec_users->contr_form_sec_users->NM_ajax_info['param'] = array(
                  'zona_' => NM_utf8_urldecode($zona_),
                  'nmgp_refresh_row' => NM_utf8_urldecode($nmgp_refresh_row),
                  'script_case_init' => NM_utf8_urldecode($script_case_init),
                  'buffer_output' => true,
                 );
        if ($inicial_form_sec_users->contr_form_sec_users->NM_ajax_info['param']['buffer_output'])
        {
            ob_start();
        }
        $inicial_form_sec_users->contr_form_sec_users->controle();
        exit;
    } // ajax_validate_zona_

    function ajax_form_sec_users_validate_cod_provincia_($cod_provincia_, $nmgp_refresh_row, $script_case_init)
    {
        global $inicial_form_sec_users;
        //register_shutdown_function("form_sec_users_pack_ajax_response");
        $inicial_form_sec_users->contr_form_sec_users->NM_ajax_flag          = true;
        $inicial_form_sec_users->contr_form_sec_users->NM_ajax_opcao         = 'validate_cod_provincia_';
        $inicial_form_sec_users->contr_form_sec_users->NM_ajax_info['param'] = array(
                  'cod_provincia_' => NM_utf8_urldecode($cod_provincia_),
                  'nmgp_refresh_row' => NM_utf8_urldecode($nmgp_refresh_row),
                  'script_case_init' => NM_utf8_urldecode($script_case_init),
                  'buffer_output' => true,
                 );
        if ($inicial_form_sec_users->contr_form_sec_users->NM_ajax_info['param']['buffer_output'])
        {
            ob_start();
        }
        $inicial_form_sec_users->contr_form_sec_users->controle();
        exit;
    } // ajax_validate_cod_provincia_

    function ajax_form_sec_users_refresh_zona_($zona_, $nmgp_refresh_row, $nmgp_refresh_fields, $script_case_init)
    {
        global $inicial_form_sec_users;
        //register_shutdown_function("form_sec_users_pack_ajax_response");
        $inicial_form_sec_users->contr_form_sec_users->NM_ajax_flag          = true;
        $inicial_form_sec_users->contr_form_sec_users->NM_ajax_opcao         = 'refresh_zona_';
        $inicial_form_sec_users->contr_form_sec_users->NM_ajax_info['param'] = array(
                  'zona_' => NM_utf8_urldecode($zona_),
                  'nmgp_refresh_row' => NM_utf8_urldecode($nmgp_refresh_row),
                  'nmgp_refresh_fields' => NM_utf8_urldecode($nmgp_refresh_fields),
                  'script_case_init' => NM_utf8_urldecode($script_case_init),
                  'buffer_output' => true,
                 );
        if ($inicial_form_sec_users->contr_form_sec_users->NM_ajax_info['param']['buffer_output'])
        {
            ob_start();
        }
        $inicial_form_sec_users->contr_form_sec_users->controle();
        exit;
    } // ajax_refresh_zona_

    function ajax_form_sec_users_submit_form($usr_active_, $ci_, $name_, $email_, $login_, $pswd_, $access_fa_, $access_fp_, $access_im_, $zona_, $cod_provincia_, $nmgp_refresh_row, $nm_form_submit, $nmgp_url_saida, $nmgp_opcao, $nmgp_ancora, $nmgp_num_form, $nmgp_parms, $script_case_init)
    {
        global $inicial_form_sec_users;
        //register_shutdown_function("form_sec_users_pack_ajax_response");
        $inicial_form_sec_users->contr_form_sec_users->NM_ajax_flag          = true;
        $inicial_form_sec_users->contr_form_sec_users->NM_ajax_opcao         = 'submit_form';
        $inicial_form_sec_users->contr_form_sec_users->NM_ajax_info['param'] = array(
                  'usr_active_' => NM_utf8_urldecode($usr_active_),
                  'ci_' => NM_utf8_urldecode($ci_),
                  'name_' => NM_utf8_urldecode($name_),
                  'email_' => NM_utf8_urldecode($email_),
                  'login_' => NM_utf8_urldecode($login_),
                  'pswd_' => NM_utf8_urldecode($pswd_),
                  'access_fa_' => NM_utf8_urldecode($access_fa_),
                  'access_fp_' => NM_utf8_urldecode($access_fp_),
                  'access_im_' => NM_utf8_urldecode($access_im_),
                  'zona_' => NM_utf8_urldecode($zona_),
                  'cod_provincia_' => NM_utf8_urldecode($cod_provincia_),
                  'nmgp_refresh_row' => NM_utf8_urldecode($nmgp_refresh_row),
                  'nm_form_submit' => NM_utf8_urldecode($nm_form_submit),
                  'nmgp_url_saida' => NM_utf8_urldecode($nmgp_url_saida),
                  'nmgp_opcao' => NM_utf8_urldecode($nmgp_opcao),
                  'nmgp_ancora' => NM_utf8_urldecode($nmgp_ancora),
                  'nmgp_num_form' => NM_utf8_urldecode($nmgp_num_form),
                  'nmgp_parms' => NM_utf8_urldecode($nmgp_parms),
                  'script_case_init' => NM_utf8_urldecode($script_case_init),
                  'buffer_output' => true,
                 );
        if ($inicial_form_sec_users->contr_form_sec_users->NM_ajax_info['param']['buffer_output'])
        {
            ob_start();
        }
        $inicial_form_sec_users->contr_form_sec_users->controle();
        exit;
    } // ajax_submit_form

    function ajax_form_sec_users_navigate_form($login_, $nm_form_submit, $nmgp_opcao, $nmgp_ordem, $script_case_init)
    {
        global $inicial_form_sec_users;
        //register_shutdown_function("form_sec_users_pack_ajax_response");
        $inicial_form_sec_users->contr_form_sec_users->NM_ajax_flag          = true;
        $inicial_form_sec_users->contr_form_sec_users->NM_ajax_opcao         = 'navigate_form';
        $inicial_form_sec_users->contr_form_sec_users->NM_ajax_info['param'] = array(
                  'login_' => NM_utf8_urldecode($login_),
                  'nm_form_submit' => NM_utf8_urldecode($nm_form_submit),
                  'nmgp_opcao' => NM_utf8_urldecode($nmgp_opcao),
                  'nmgp_ordem' => NM_utf8_urldecode($nmgp_ordem),
                  'script_case_init' => NM_utf8_urldecode($script_case_init),
                  'buffer_output' => true,
                 );
        if ($inicial_form_sec_users->contr_form_sec_users->NM_ajax_info['param']['buffer_output'])
        {
            ob_start();
        }
        $inicial_form_sec_users->contr_form_sec_users->controle();
        exit;
    } // ajax_navigate_form

    function ajax_form_sec_users_add_new_line($sc_clone, $sc_seq_clone, $sc_seq_vert, $script_case_init)
    {
        global $inicial_form_sec_users;
        //register_shutdown_function("form_sec_users_pack_ajax_response");
        $inicial_form_sec_users->contr_form_sec_users->NM_ajax_flag          = true;
        $inicial_form_sec_users->contr_form_sec_users->NM_ajax_opcao         = 'add_new_line';
        $inicial_form_sec_users->contr_form_sec_users->NM_ajax_info['param'] = array(
                  'sc_clone' => NM_utf8_urldecode($sc_clone),
                  'sc_seq_clone' => NM_utf8_urldecode($sc_seq_clone),
                  'sc_seq_vert' => NM_utf8_urldecode($sc_seq_vert),
                  'script_case_init' => NM_utf8_urldecode($script_case_init),
                  'buffer_output' => true,
                 );
        if ($inicial_form_sec_users->contr_form_sec_users->NM_ajax_info['param']['buffer_output'])
        {
            ob_start();
        }
        $inicial_form_sec_users->contr_form_sec_users->controle();
        exit;
    } // ajax_add_new_line

    function ajax_form_sec_users_backup_line($login_, $nmgp_refresh_row, $nm_form_submit, $script_case_init)
    {
        global $inicial_form_sec_users;
        //register_shutdown_function("form_sec_users_pack_ajax_response");
        $inicial_form_sec_users->contr_form_sec_users->NM_ajax_flag          = true;
        $inicial_form_sec_users->contr_form_sec_users->NM_ajax_opcao         = 'backup_line';
        $inicial_form_sec_users->contr_form_sec_users->NM_ajax_info['param'] = array(
                  'login_' => NM_utf8_urldecode($login_),
                  'nmgp_refresh_row' => NM_utf8_urldecode($nmgp_refresh_row),
                  'nm_form_submit' => NM_utf8_urldecode($nm_form_submit),
                  'script_case_init' => NM_utf8_urldecode($script_case_init),
                  'buffer_output' => true,
                 );
        if ($inicial_form_sec_users->contr_form_sec_users->NM_ajax_info['param']['buffer_output'])
        {
            ob_start();
        }
        $inicial_form_sec_users->contr_form_sec_users->controle();
        exit;
    } // ajax_backup_line

    function ajax_form_sec_users_table_refresh($login_, $nm_form_submit, $nmgp_opcao, $nmgp_ordem, $nmgp_fast_search, $nmgp_cond_fast_search, $nmgp_arg_fast_search, $script_case_init)
    {
        global $inicial_form_sec_users;
        //register_shutdown_function("form_sec_users_pack_ajax_response");
        $inicial_form_sec_users->contr_form_sec_users->NM_ajax_flag          = true;
        $inicial_form_sec_users->contr_form_sec_users->NM_ajax_opcao         = 'table_refresh';
        $inicial_form_sec_users->contr_form_sec_users->NM_ajax_info['param'] = array(
                  'login_' => NM_utf8_urldecode($login_),
                  'nm_form_submit' => NM_utf8_urldecode($nm_form_submit),
                  'nmgp_opcao' => NM_utf8_urldecode($nmgp_opcao),
                  'nmgp_ordem' => NM_utf8_urldecode($nmgp_ordem),
                  'nmgp_fast_search' => NM_utf8_urldecode($nmgp_fast_search),
                  'nmgp_cond_fast_search' => NM_utf8_urldecode($nmgp_cond_fast_search),
                  'nmgp_arg_fast_search' => NM_utf8_urldecode($nmgp_arg_fast_search),
                  'script_case_init' => NM_utf8_urldecode($script_case_init),
                  'buffer_output' => true,
                 );
        if ($inicial_form_sec_users->contr_form_sec_users->NM_ajax_info['param']['buffer_output'])
        {
            ob_start();
        }
        $inicial_form_sec_users->contr_form_sec_users->controle();
        exit;
    } // ajax_table_refresh


   function form_sec_users_pack_ajax_response()
   {
      global $inicial_form_sec_users;
      $aResp = array();
      if ($inicial_form_sec_users->contr_form_sec_users->NM_ajax_info['calendarReload'])
      {
         $aResp['result'] = 'CALENDARRELOAD';
      }
      elseif ('' != $inicial_form_sec_users->contr_form_sec_users->NM_ajax_info['autoComp'])
      {
         $aResp['result'] = 'AUTOCOMP';
      }
//mestre_detalhe
      elseif (!empty($inicial_form_sec_users->contr_form_sec_users->NM_ajax_info['newline']))
      {
         $aResp['result'] = 'NEWLINE';
         ob_end_clean();
      }
      elseif (!empty($inicial_form_sec_users->contr_form_sec_users->NM_ajax_info['tableRefresh']))
      {
         $aResp['result'] = 'TABLEREFRESH';
      }
//-----
      elseif (!empty($inicial_form_sec_users->contr_form_sec_users->NM_ajax_info['errList']))
      {
         $aResp['result'] = 'ERROR';
      }
      elseif (!empty($inicial_form_sec_users->contr_form_sec_users->NM_ajax_info['fldList']))
      {
         $aResp['result'] = 'SET';
      }
      else
      {
         $aResp['result'] = 'OK';
      }
      if ('AUTOCOMP' == $aResp['result'])
      {
         $aResp = $inicial_form_sec_users->contr_form_sec_users->NM_ajax_info['autoComp'];
      }
//mestre_detalhe
      elseif ('NEWLINE' == $aResp['result'])
      {
         $aResp = $inicial_form_sec_users->contr_form_sec_users->NM_ajax_info['newline'];
      }
      else
//-----
      {
         if ('CALENDARRELOAD' == $aResp['result'])
         {
            form_sec_users_pack_calendar_reload($aResp);
         }
         elseif ('ERROR' == $aResp['result'])
         {
            form_sec_users_pack_ajax_errors($aResp);
         }
         elseif ('SET' == $aResp['result'])
         {
            form_sec_users_pack_ajax_set_fields($aResp);
         }
         elseif ('TABLEREFRESH' == $aResp['result'])
         {
            form_sec_users_pack_ajax_set_fields($aResp);
            $aResp['tableRefresh'] = form_sec_users_pack_protect_string($inicial_form_sec_users->contr_form_sec_users->NM_ajax_info['tableRefresh']);
         }
         if ('OK' == $aResp['result'] || 'SET' == $aResp['result'])
         {
            form_sec_users_pack_ajax_ok($aResp);
         }
         if (isset($inicial_form_sec_users->contr_form_sec_users->NM_ajax_info['focus']) && '' != $inicial_form_sec_users->contr_form_sec_users->NM_ajax_info['focus'])
         {
            $aResp['setFocus'] = $inicial_form_sec_users->contr_form_sec_users->NM_ajax_info['focus'];
         }
         if (isset($inicial_form_sec_users->contr_form_sec_users->NM_ajax_info['closeLine']) && '' != $inicial_form_sec_users->contr_form_sec_users->NM_ajax_info['closeLine'])
         {
            $aResp['closeLine'] = $inicial_form_sec_users->contr_form_sec_users->NM_ajax_info['closeLine'];
         }
         else
         {
            $aResp['closeLine'] = 'N';
         }
         if (isset($inicial_form_sec_users->contr_form_sec_users->NM_ajax_info['clearUpload']) && '' != $inicial_form_sec_users->contr_form_sec_users->NM_ajax_info['clearUpload'])
         {
            $aResp['clearUpload'] = $inicial_form_sec_users->contr_form_sec_users->NM_ajax_info['clearUpload'];
         }
         else
         {
            $aResp['clearUpload'] = 'N';
         }
         if (isset($inicial_form_sec_users->contr_form_sec_users->NM_ajax_info['masterValue']) && '' != $inicial_form_sec_users->contr_form_sec_users->NM_ajax_info['masterValue'])
         {
            form_sec_users_pack_master_value($aResp);
         }
         if (isset($inicial_form_sec_users->contr_form_sec_users->NM_ajax_info['ajaxAlert']) && '' != $inicial_form_sec_users->contr_form_sec_users->NM_ajax_info['ajaxAlert'])
         {
            form_sec_users_pack_ajax_alert($aResp);
         }
         if (isset($inicial_form_sec_users->contr_form_sec_users->NM_ajax_info['ajaxMessage']) && '' != $inicial_form_sec_users->contr_form_sec_users->NM_ajax_info['ajaxMessage'])
         {
            form_sec_users_pack_ajax_message($aResp);
         }
         if (isset($inicial_form_sec_users->contr_form_sec_users->NM_ajax_info['ajaxJavascript']) && '' != $inicial_form_sec_users->contr_form_sec_users->NM_ajax_info['ajaxJavascript'])
         {
            form_sec_users_pack_ajax_javascript($aResp);
         }
         if (isset($inicial_form_sec_users->contr_form_sec_users->NM_ajax_info['redir']) && !empty($inicial_form_sec_users->contr_form_sec_users->NM_ajax_info['redir']))
         {
            form_sec_users_pack_ajax_redir($aResp);
         }
         if (isset($inicial_form_sec_users->contr_form_sec_users->NM_ajax_info['redirExit']) && !empty($inicial_form_sec_users->contr_form_sec_users->NM_ajax_info['redirExit']))
         {
            form_sec_users_pack_ajax_redir_exit($aResp);
         }
         if (isset($inicial_form_sec_users->contr_form_sec_users->NM_ajax_info['blockDisplay']) && !empty($inicial_form_sec_users->contr_form_sec_users->NM_ajax_info['blockDisplay']))
         {
            form_sec_users_pack_ajax_block_display($aResp);
         }
         if (isset($inicial_form_sec_users->contr_form_sec_users->NM_ajax_info['fieldDisplay']) && !empty($inicial_form_sec_users->contr_form_sec_users->NM_ajax_info['fieldDisplay']))
         {
            form_sec_users_pack_ajax_field_display($aResp);
         }
         if (isset($inicial_form_sec_users->contr_form_sec_users->NM_ajax_info['buttonDisplay']) && !empty($inicial_form_sec_users->contr_form_sec_users->NM_ajax_info['buttonDisplay']))
         {
            $inicial_form_sec_users->contr_form_sec_users->NM_ajax_info['buttonDisplay'] = $inicial_form_sec_users->contr_form_sec_users->nmgp_botoes;
            form_sec_users_pack_ajax_button_display($aResp);
         }
         if (isset($inicial_form_sec_users->contr_form_sec_users->NM_ajax_info['fieldLabel']) && !empty($inicial_form_sec_users->contr_form_sec_users->NM_ajax_info['fieldLabel']))
         {
            form_sec_users_pack_ajax_field_label($aResp);
         }
         if (isset($inicial_form_sec_users->contr_form_sec_users->NM_ajax_info['readOnly']) && !empty($inicial_form_sec_users->contr_form_sec_users->NM_ajax_info['readOnly']))
         {
            form_sec_users_pack_ajax_readonly($aResp);
         }
         if (isset($inicial_form_sec_users->contr_form_sec_users->NM_ajax_info['navStatus']) && !empty($inicial_form_sec_users->contr_form_sec_users->NM_ajax_info['navStatus']))
         {
            form_sec_users_pack_ajax_nav_status($aResp);
         }
         if (isset($inicial_form_sec_users->contr_form_sec_users->NM_ajax_info['navSummary']) && !empty($inicial_form_sec_users->contr_form_sec_users->NM_ajax_info['navSummary']))
         {
            form_sec_users_pack_ajax_nav_Summary($aResp);
         }
         if (isset($inicial_form_sec_users->contr_form_sec_users->NM_ajax_info['navPage']))
         {
            form_sec_users_pack_ajax_navPage($aResp);
         }
         if (isset($inicial_form_sec_users->contr_form_sec_users->NM_ajax_info['btnVars']) && !empty($inicial_form_sec_users->contr_form_sec_users->NM_ajax_info['btnVars']))
         {
            form_sec_users_pack_ajax_btn_vars($aResp);
         }
         if (isset($inicial_form_sec_users->contr_form_sec_users->NM_ajax_info['quickSearchRes']) && $inicial_form_sec_users->contr_form_sec_users->NM_ajax_info['quickSearchRes'])
         {
            $aResp['quickSearchRes'] = 'Y';
         }
         else
         {
            $aResp['quickSearchRes'] = 'N';
         }
         $aResp['htmOutput'] = '';
    
         if (isset($inicial_form_sec_users->contr_form_sec_users->NM_ajax_info['param']['buffer_output']) && $inicial_form_sec_users->contr_form_sec_users->NM_ajax_info['param']['buffer_output'])
         {
            $aResp['htmOutput'] = ob_get_contents();
            if (false === $aResp['htmOutput'])
            {
               $aResp['htmOutput'] = '';
            }
            else
            {
               $aResp['htmOutput'] = form_sec_users_pack_protect_string(NM_charset_to_utf8($aResp['htmOutput']));
               ob_end_clean();
            }
         }
      }
      if (is_array($aResp))
      {
          $oJson = new Services_JSON();
          echo "var res = " . trim(sajax_get_js_repr($oJson->encode($aResp))) . "; res;";
      }
      else
      {
          echo "var res = " . trim(sajax_get_js_repr($aResp)) . "; res;";
      }
      exit;
   } // form_sec_users_pack_ajax_response

   function form_sec_users_pack_calendar_reload(&$aResp)
   {
      global $inicial_form_sec_users;
      $aResp['calendarReload'] = 'OK';
   } // form_sec_users_pack_calendar_reload

   function form_sec_users_pack_ajax_errors(&$aResp)
   {
      global $inicial_form_sec_users;
      $aResp['errList'] = array();
      foreach ($inicial_form_sec_users->contr_form_sec_users->NM_ajax_info['errList'] as $sField => $aMsg)
      {
         if ('geral_form_sec_users' == $sField)
         {
             $aMsg = form_sec_users_pack_ajax_remove_erros($aMsg);
         }
         foreach ($aMsg as $sMsg)
         {
            $iNumLinha = (isset($inicial_form_sec_users->contr_form_sec_users->NM_ajax_info['param']['nmgp_refresh_row']) && 'geral_form_sec_users' != $sField)
                       ? $inicial_form_sec_users->contr_form_sec_users->NM_ajax_info['param']['nmgp_refresh_row'] : "";
            $aResp['errList'][] = array('fldName'  => $sField,
                                        'msgText'  => form_sec_users_pack_protect_string(NM_charset_to_utf8($sMsg)),
                                        'numLinha' => $iNumLinha);
         }
      }
   } // form_sec_users_pack_ajax_errors

   function form_sec_users_pack_ajax_remove_erros($aErrors)
   {
       $aNewErrors = array();
       if (!empty($aErrors))
       {
           $sErrorMsgs = str_replace(array('<br />', '<br>', '<BR />'), array('<BR>', '<BR>', '<BR>'), implode('<br />', $aErrors));
           $aErrorMsgs = explode('<BR>', $sErrorMsgs);
           foreach ($aErrorMsgs as $sErrorMsg)
           {
               $sErrorMsg = trim($sErrorMsg);
               if ('' != $sErrorMsg && !in_array($sErrorMsg, $aNewErrors))
               {
                   $aNewErrors[] = $sErrorMsg;
               }
           }
       }
       return $aNewErrors;
   } // form_sec_users_pack_ajax_remove_erros

   function form_sec_users_pack_ajax_ok(&$aResp)
   {
      global $inicial_form_sec_users;
      $iNumLinha = (isset($inicial_form_sec_users->contr_form_sec_users->NM_ajax_info['param']['nmgp_refresh_row']))
                 ? $inicial_form_sec_users->contr_form_sec_users->NM_ajax_info['param']['nmgp_refresh_row'] : "";
      $aResp['msgDisplay'] = array('msgText'  => form_sec_users_pack_protect_string($inicial_form_sec_users->contr_form_sec_users->NM_ajax_info['msgDisplay']),
                                   'numLinha' => $iNumLinha);
   } // form_sec_users_pack_ajax_ok

   function form_sec_users_pack_ajax_set_fields(&$aResp)
   {
      global $inicial_form_sec_users;
      $iNumLinha = (isset($inicial_form_sec_users->contr_form_sec_users->NM_ajax_info['param']['nmgp_refresh_row']))
                 ? $inicial_form_sec_users->contr_form_sec_users->NM_ajax_info['param']['nmgp_refresh_row'] : "";
      if ('' != $inicial_form_sec_users->contr_form_sec_users->NM_ajax_info['rsSize'])
      {
         $aResp['rsSize'] = $inicial_form_sec_users->contr_form_sec_users->NM_ajax_info['rsSize'];
      }
      $aResp['fldList'] = array();
      foreach ($inicial_form_sec_users->contr_form_sec_users->NM_ajax_info['fldList'] as $sField => $aData)
      {
         $aField = array();
         if (isset($aData['colNum']))
         {
            $aField['colNum'] = $aData['colNum'];
         }
         if (isset($aData['row']))
         {
            $aField['row'] = $aData['row'];
         }
         if (isset($aData['imgFile']))
         {
            $aField['imgFile'] = form_sec_users_pack_protect_string($aData['imgFile']);
         }
         if (isset($aData['imgOrig']))
         {
            $aField['imgOrig'] = form_sec_users_pack_protect_string($aData['imgOrig']);
         }
         if (isset($aData['imgLink']))
         {
            $aField['imgLink'] = form_sec_users_pack_protect_string($aData['imgLink']);
         }
         if (isset($aData['keepImg']))
         {
            $aField['keepImg'] = $aData['keepImg'];
         }
         if (isset($aData['docLink']))
         {
            $aField['docLink'] = form_sec_users_pack_protect_string($aData['docLink']);
         }
         if (isset($aData['docIcon']))
         {
            $aField['docIcon'] = form_sec_users_pack_protect_string($aData['docIcon']);
         }
         if (isset($aData['keyVal']))
         {
            $aField['keyVal'] = $aData['keyVal'];
         }
         if (isset($aData['optComp']))
         {
            $aField['optComp'] = $aData['optComp'];
         }
         if (isset($aData['optClass']))
         {
            $aField['optClass'] = $aData['optClass'];
         }
         if (isset($aData['optMulti']))
         {
            $aField['optMulti'] = $aData['optMulti'];
         }
         if (isset($aData['lookupCons']))
         {
            $aField['lookupCons'] = $aData['lookupCons'];
         }
         if (isset($aData['imgHtml']))
         {
            $aField['imgHtml'] = form_sec_users_pack_protect_string($aData['imgHtml']);
         }
         if (isset($aData['mulHtml']))
         {
            $aField['mulHtml'] = form_sec_users_pack_protect_string($aData['mulHtml']);
         }
         if (isset($aData['updInnerHtml']))
         {
            $aField['updInnerHtml'] = $aData['updInnerHtml'];
         }
         if (isset($aData['htmComp']))
         {
            $aField['htmComp'] = str_replace("'", '__AS__', str_replace('"', '__AD__', $aData['htmComp']));
         }
         $aField['fldName']  = $sField;
         $aField['fldType']  = $aData['type'];
         $aField['numLinha'] = $iNumLinha;
         $aField['valList']  = array();
         foreach ($aData['valList'] as $iIndex => $sValue)
         {
            $aValue = array();
            if (isset($aData['labList'][$iIndex]))
            {
               $aValue['label'] = form_sec_users_pack_protect_string($aData['labList'][$iIndex]);
            }
            $aValue['value']     = ('_autocomp' != substr($sField, -9)) ? form_sec_users_pack_protect_string($sValue) : $sValue;
            $aField['valList'][] = $aValue;
         }
         foreach ($aField['valList'] as $iIndex => $aFieldData)
         {
             if ("null" == $aFieldData['value'])
             {
                 $aField['valList'][$iIndex]['value'] = '';
             }
         }
         if (isset($aData['optList']) && false !== $aData['optList'])
         {
            if (is_array($aData['optList']))
            {
               $aField['optList'] = array();
               foreach ($aData['optList'] as $aOptList)
               {
                  foreach ($aOptList as $sValue => $sLabel)
                  {
                     $sOpt = ($sValue !== $sLabel) ? $sValue : $sLabel;
                     $aField['optList'][] = array('value' => form_sec_users_pack_protect_string($sOpt),
                                                  'label' => form_sec_users_pack_protect_string($sLabel));
                  }
               }
            }
            else
            {
               $aField['optList'] = $aData['optList'];
            }
         }
         $aResp['fldList'][] = $aField;
      }
   } // form_sec_users_pack_ajax_set_fields

   function form_sec_users_pack_ajax_redir(&$aResp)
   {
      global $inicial_form_sec_users;
      $aInfo              = array('metodo', 'action', 'target', 'nmgp_parms', 'nmgp_outra_jan', 'nmgp_url_saida', 'script_case_init', 'script_case_session', 'h_modal', 'w_modal');
      $aResp['redirInfo'] = array();
      foreach ($aInfo as $sTag)
      {
         if (isset($inicial_form_sec_users->contr_form_sec_users->NM_ajax_info['redir'][$sTag]))
         {
            $aResp['redirInfo'][$sTag] = $inicial_form_sec_users->contr_form_sec_users->NM_ajax_info['redir'][$sTag];
         }
      }
   } // form_sec_users_pack_ajax_redir

   function form_sec_users_pack_ajax_redir_exit(&$aResp)
   {
      global $inicial_form_sec_users;
      $aInfo                  = array('metodo', 'action', 'target', 'nmgp_parms', 'nmgp_outra_jan', 'nmgp_url_saida', 'script_case_init', 'script_case_session');
      $aResp['redirExitInfo'] = array();
      foreach ($aInfo as $sTag)
      {
         if (isset($inicial_form_sec_users->contr_form_sec_users->NM_ajax_info['redirExit'][$sTag]))
         {
            $aResp['redirExitInfo'][$sTag] = $inicial_form_sec_users->contr_form_sec_users->NM_ajax_info['redirExit'][$sTag];
         }
      }
   } // form_sec_users_pack_ajax_redir_exit

   function form_sec_users_pack_master_value(&$aResp)
   {
      global $inicial_form_sec_users;
      foreach ($inicial_form_sec_users->contr_form_sec_users->NM_ajax_info['masterValue'] as $sIndex => $sValue)
      {
         $aResp['masterValue'][] = array('index' => $sIndex,
                                         'value' => $sValue);
      }
   } // form_sec_users_pack_master_value

   function form_sec_users_pack_ajax_alert(&$aResp)
   {
      global $inicial_form_sec_users;
      $aResp['ajaxAlert'] = array('message' => $inicial_form_sec_users->contr_form_sec_users->NM_ajax_info['ajaxAlert']['message']);
   } // form_sec_users_pack_ajax_alert

   function form_sec_users_pack_ajax_message(&$aResp)
   {
      global $inicial_form_sec_users;
      $aResp['ajaxMessage'] = array('message'      => form_sec_users_pack_protect_string($inicial_form_sec_users->contr_form_sec_users->NM_ajax_info['ajaxMessage']['message']),
                                    'title'        => form_sec_users_pack_protect_string($inicial_form_sec_users->contr_form_sec_users->NM_ajax_info['ajaxMessage']['title']),
                                    'modal'        => isset($inicial_form_sec_users->contr_form_sec_users->NM_ajax_info['ajaxMessage']['modal'])        ? $inicial_form_sec_users->contr_form_sec_users->NM_ajax_info['ajaxMessage']['modal']        : 'N',
                                    'timeout'      => isset($inicial_form_sec_users->contr_form_sec_users->NM_ajax_info['ajaxMessage']['timeout'])      ? $inicial_form_sec_users->contr_form_sec_users->NM_ajax_info['ajaxMessage']['timeout']      : '',
                                    'button'       => isset($inicial_form_sec_users->contr_form_sec_users->NM_ajax_info['ajaxMessage']['button'])       ? $inicial_form_sec_users->contr_form_sec_users->NM_ajax_info['ajaxMessage']['button']       : '',
                                    'button_label' => isset($inicial_form_sec_users->contr_form_sec_users->NM_ajax_info['ajaxMessage']['button_label']) ? $inicial_form_sec_users->contr_form_sec_users->NM_ajax_info['ajaxMessage']['button_label'] : 'Ok',
                                    'top'          => isset($inicial_form_sec_users->contr_form_sec_users->NM_ajax_info['ajaxMessage']['top'])          ? $inicial_form_sec_users->contr_form_sec_users->NM_ajax_info['ajaxMessage']['top']          : '',
                                    'left'         => isset($inicial_form_sec_users->contr_form_sec_users->NM_ajax_info['ajaxMessage']['left'])         ? $inicial_form_sec_users->contr_form_sec_users->NM_ajax_info['ajaxMessage']['left']         : '',
                                    'width'        => isset($inicial_form_sec_users->contr_form_sec_users->NM_ajax_info['ajaxMessage']['width'])        ? $inicial_form_sec_users->contr_form_sec_users->NM_ajax_info['ajaxMessage']['width']        : '',
                                    'height'       => isset($inicial_form_sec_users->contr_form_sec_users->NM_ajax_info['ajaxMessage']['height'])       ? $inicial_form_sec_users->contr_form_sec_users->NM_ajax_info['ajaxMessage']['height']       : '',
                                    'redir'        => isset($inicial_form_sec_users->contr_form_sec_users->NM_ajax_info['ajaxMessage']['redir'])        ? $inicial_form_sec_users->contr_form_sec_users->NM_ajax_info['ajaxMessage']['redir']        : '',
                                    'show_close'   => isset($inicial_form_sec_users->contr_form_sec_users->NM_ajax_info['ajaxMessage']['show_close'])   ? $inicial_form_sec_users->contr_form_sec_users->NM_ajax_info['ajaxMessage']['show_close']   : 'Y',
                                    'body_icon'    => isset($inicial_form_sec_users->contr_form_sec_users->NM_ajax_info['ajaxMessage']['body_icon'])    ? $inicial_form_sec_users->contr_form_sec_users->NM_ajax_info['ajaxMessage']['body_icon']    : 'Y',
                                    'redir_target' => isset($inicial_form_sec_users->contr_form_sec_users->NM_ajax_info['ajaxMessage']['redir_target']) ? $inicial_form_sec_users->contr_form_sec_users->NM_ajax_info['ajaxMessage']['redir_target'] : '',
                                    'redir_par'    => isset($inicial_form_sec_users->contr_form_sec_users->NM_ajax_info['ajaxMessage']['redir_par'])    ? $inicial_form_sec_users->contr_form_sec_users->NM_ajax_info['ajaxMessage']['redir_par']    : '');
   } // form_sec_users_pack_ajax_message

   function form_sec_users_pack_ajax_javascript(&$aResp)
   {
      global $inicial_form_sec_users;
      foreach ($inicial_form_sec_users->contr_form_sec_users->NM_ajax_info['ajaxJavascript'] as $aJsFunc)
      {
         $aResp['ajaxJavascript'][] = $aJsFunc;
      }
   } // form_sec_users_pack_ajax_javascript

   function form_sec_users_pack_ajax_block_display(&$aResp)
   {
      global $inicial_form_sec_users;
      $aResp['blockDisplay'] = array();
      foreach ($inicial_form_sec_users->contr_form_sec_users->NM_ajax_info['blockDisplay'] as $sBlockName => $sBlockStatus)
      {
        $aResp['blockDisplay'][] = array($sBlockName, $sBlockStatus);
      }
   } // form_sec_users_pack_ajax_block_display

   function form_sec_users_pack_ajax_field_display(&$aResp)
   {
      global $inicial_form_sec_users;
      $aResp['fieldDisplay'] = array();
      foreach ($inicial_form_sec_users->contr_form_sec_users->NM_ajax_info['fieldDisplay'] as $sFieldName => $sFieldStatus)
      {
        $aResp['fieldDisplay'][] = array($sFieldName, $sFieldStatus);
      }
   } // form_sec_users_pack_ajax_field_display

   function form_sec_users_pack_ajax_button_display(&$aResp)
   {
      global $inicial_form_sec_users;
      $aResp['buttonDisplay'] = array();
      foreach ($inicial_form_sec_users->contr_form_sec_users->NM_ajax_info['buttonDisplay'] as $sButtonName => $sButtonStatus)
      {
        $aResp['buttonDisplay'][] = array($sButtonName, $sButtonStatus);
      }
   } // form_sec_users_pack_ajax_button_display

   function form_sec_users_pack_ajax_field_label(&$aResp)
   {
      global $inicial_form_sec_users;
      $aResp['fieldLabel'] = array();
      foreach ($inicial_form_sec_users->contr_form_sec_users->NM_ajax_info['fieldLabel'] as $sFieldName => $sFieldLabel)
      {
        $aResp['fieldLabel'][] = array($sFieldName, form_sec_users_pack_protect_string($sFieldLabel));
      }
   } // form_sec_users_pack_ajax_field_label

   function form_sec_users_pack_ajax_readonly(&$aResp)
   {
      global $inicial_form_sec_users;
      $aResp['readOnly'] = array();
      foreach ($inicial_form_sec_users->contr_form_sec_users->NM_ajax_info['readOnly'] as $sFieldName => $sFieldStatus)
      {
        $aResp['readOnly'][] = array($sFieldName, $sFieldStatus);
      }
   } // form_sec_users_pack_ajax_readonly

   function form_sec_users_pack_ajax_nav_status(&$aResp)
   {
      global $inicial_form_sec_users;
      $aResp['navStatus'] = array();
      if (isset($inicial_form_sec_users->contr_form_sec_users->NM_ajax_info['navStatus']['ret']) && '' != $inicial_form_sec_users->contr_form_sec_users->NM_ajax_info['navStatus']['ret'])
      {
         $aResp['navStatus']['ret'] = $inicial_form_sec_users->contr_form_sec_users->NM_ajax_info['navStatus']['ret'];
      }
      if (isset($inicial_form_sec_users->contr_form_sec_users->NM_ajax_info['navStatus']['ava']) && '' != $inicial_form_sec_users->contr_form_sec_users->NM_ajax_info['navStatus']['ava'])
      {
         $aResp['navStatus']['ava'] = $inicial_form_sec_users->contr_form_sec_users->NM_ajax_info['navStatus']['ava'];
      }
   } // form_sec_users_pack_ajax_nav_status

   function form_sec_users_pack_ajax_nav_Summary(&$aResp)
   {
      global $inicial_form_sec_users;
      $aResp['navSummary'] = array();
      $aResp['navSummary']['reg_ini'] = $inicial_form_sec_users->contr_form_sec_users->NM_ajax_info['navSummary']['reg_ini'];
      $aResp['navSummary']['reg_qtd'] = $inicial_form_sec_users->contr_form_sec_users->NM_ajax_info['navSummary']['reg_qtd'];
      $aResp['navSummary']['reg_tot'] = $inicial_form_sec_users->contr_form_sec_users->NM_ajax_info['navSummary']['reg_tot'];
   } // form_sec_users_pack_ajax_nav_Summary

   function form_sec_users_pack_ajax_navPage(&$aResp)
   {
      global $inicial_form_sec_users;
      $aResp['navPage'] = $inicial_form_sec_users->contr_form_sec_users->NM_ajax_info['navPage'];
   } // form_sec_users_pack_ajax_navPage


   function form_sec_users_pack_ajax_btn_vars(&$aResp)
   {
      global $inicial_form_sec_users;
      $aResp['btnVars'] = array();
      foreach ($inicial_form_sec_users->contr_form_sec_users->NM_ajax_info['btnVars'] as $sBtnName => $sBtnValue)
      {
        $aResp['btnVars'][] = array($sBtnName, form_sec_users_pack_protect_string($sBtnValue));
      }
   } // form_sec_users_pack_ajax_btn_vars

   function form_sec_users_pack_protect_string($sString)
   {
      $sString = (string) $sString;

      if (!empty($sString))
      {
         if (function_exists('NM_is_utf8') && NM_is_utf8($sString))
         {
             return $sString;
         }
         else
         {
             return htmlentities($sString);
         }
      }
      elseif ('0' === $sString || 0 === $sString)
      {
         return '0';
      }
      else
      {
         return '';
      }
   } // form_sec_users_pack_protect_string
?>
