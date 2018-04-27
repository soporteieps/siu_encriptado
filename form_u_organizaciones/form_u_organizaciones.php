<?php
//
   include_once('form_u_organizaciones_session.php');
   @session_start() ;
   $_SESSION['scriptcase']['form_u_organizaciones']['glo_nm_perfil']          = "conn_mysql";
   $_SESSION['scriptcase']['form_u_organizaciones']['glo_nm_path_prod']       = "";
   $_SESSION['scriptcase']['form_u_organizaciones']['glo_nm_path_imagens']    = "";
   $_SESSION['scriptcase']['form_u_organizaciones']['glo_nm_path_imag_temp']  = "";
   $_SESSION['scriptcase']['form_u_organizaciones']['glo_nm_path_doc']        = "";
//
class form_u_organizaciones_ini
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
      $_SESSION['sc_session'][$this->sc_page]['form_u_organizaciones']['decimal_db'] = "."; 

      $this->nm_cod_apl      = "form_u_organizaciones"; 
      $this->nm_nome_apl     = ""; 
      $this->nm_seguranca    = ""; 
      $this->nm_grupo        = "SIU"; 
      $this->nm_grupo_versao = "1"; 
      $this->nm_autor        = "admin"; 
      $this->nm_versao_sc    = "v7"; 
      $this->nm_tp_lic_sc    = "ep_bronze"; 
      $this->nm_dt_criacao   = "20150828"; 
      $this->nm_hr_criacao   = "193234"; 
      $this->nm_autor_alt    = "admin"; 
      $this->nm_dt_ult_alt   = "20180409"; 
      $this->nm_hr_ult_alt   = "163405"; 
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
      if(empty($_SESSION['scriptcase']['form_u_organizaciones']['glo_nm_path_prod']))
      {
              /*check prod*/$_SESSION['scriptcase']['form_u_organizaciones']['glo_nm_path_prod'] = $str_path_apl_url . "_lib/prod";
      }
      //check img
      if(empty($_SESSION['scriptcase']['form_u_organizaciones']['glo_nm_path_imagens']))
      {
              /*check img*/$_SESSION['scriptcase']['form_u_organizaciones']['glo_nm_path_imagens'] = $str_path_apl_url . "_lib/file/img";
      }
      //check tmp
      if(empty($_SESSION['scriptcase']['form_u_organizaciones']['glo_nm_path_imag_temp']))
      {
              /*check tmp*/$_SESSION['scriptcase']['form_u_organizaciones']['glo_nm_path_imag_temp'] = $str_path_apl_url . "_lib/tmp";
      }
      //check doc
      if(empty($_SESSION['scriptcase']['form_u_organizaciones']['glo_nm_path_doc']))
      {
              /*check doc*/$_SESSION['scriptcase']['form_u_organizaciones']['glo_nm_path_doc'] = $str_path_apl_dir . "_lib/file/doc";
      }
      //end check publication with the prod
// 
      $this->sc_site_ssl     = (isset($_SERVER['HTTPS']) && strtolower($_SERVER['HTTPS']) == 'on') ? true : false;
      $this->sc_protocolo    = ($this->sc_site_ssl) ? 'https://' : 'http://';
      $this->sc_protocolo    = "";
      $this->path_prod       = $_SESSION['scriptcase']['form_u_organizaciones']['glo_nm_path_prod'];
      $this->path_imagens    = $_SESSION['scriptcase']['form_u_organizaciones']['glo_nm_path_imagens'];
      $this->path_imag_temp  = $_SESSION['scriptcase']['form_u_organizaciones']['glo_nm_path_imag_temp'];
      $this->path_doc        = $_SESSION['scriptcase']['form_u_organizaciones']['glo_nm_path_doc'];
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
      $this->path_aplicacao  = substr($this->path_aplicacao, 0, strrpos($this->path_aplicacao, '/')) . '/form_u_organizaciones';
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

      global $inicial_form_u_organizaciones;
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
                  if (isset($inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_flag) && $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_flag)
                  {
                      $inicial_form_u_organizaciones->contr_->NM_ajax_info['redir']['action']  = $nm_apl_dest;
                      $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['redir']['target']  = $parms['T'];
                      $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['redir']['metodo']  = "post";
                      $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['redir']['script_case_init']  = $this->sc_page;
                      $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['redir']['script_case_session']  = session_id();
                      form_u_organizaciones_pack_ajax_response();
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
          unset($_SESSION['scriptcase']['form_u_organizaciones']['glo_nm_conexao']);
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
      $_SESSION['sc_session'][$this->sc_page]['form_u_organizaciones']['path_doc'] = $this->path_doc; 
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
          if (!$_SESSION['sc_session'][$script_case_init]['form_u_organizaciones']['iframe_menu'] && (!isset($_SESSION['sc_session'][$script_case_init]['form_u_organizaciones']['sc_outra_jan']) || $_SESSION['sc_session'][$script_case_init]['form_u_organizaciones']['sc_outra_jan'] != 'form_u_organizaciones')) 
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
      global $inicial_form_u_organizaciones, $NM_run_iframe;
      if ((isset($inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_flag) && $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_flag) || (isset($_SESSION['sc_session'][$this->sc_page]['form_u_organizaciones']['embutida_call']) && $_SESSION['sc_session'][$this->sc_page]['form_u_organizaciones']['embutida_call']) || $NM_run_iframe == 1)
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
      $_SESSION['scriptcase']['nm_bases_security']  = "enc_nm_enc_v1DcXGH9BiD1NKV5XGDMrYVcFKDWFaHINUD9XOZ1rqD1rwHQJwDEBODkFeH5FYVoFGHQJKDQBqHArYHQXGDMvsVIBsDWJeHMJwHQBqZ1FGD1zGZMBOHgvCHEJqDWXCHIB/HQFYDQB/D1vOVWJeDMrwV9FeDWFYHMFUDcFYVINUHIBeHuB/HgvCHArsDWr/HMB/HQJeDuFaHIBeHuFUHgNKDkBODuFqDoFGDcBqVIJwD1rwHQF7HgBYVkJ3H5FYHMFaHQXODQB/HAvmVWJwDMrwV9BUDuX7HIX7HQJmH9BOHAvsZMB/HgvCHArsDuFaHMJwHQNwZSBiHAvOVWBODMrwVcB/DWJeHMXGDcNmZ1BODSrYHuFaDMrYZSXeDuFYVoXGDcJeZ9rqD1BeHuFGDMvsVIBsDWFYHMF7HQNmVINUHANOHQXGHgvCHArCH5FYHIBODcBiDuFaD1BeHuraDMrwV9FeV5FYHMB/HQXOZ1BiD1rwHQFaHgvCHArsDWB3DoXGHQBiZ9XGDSBYHuNUHgNKDkBODuFqDoFGDcBqVIJwD1rwD5JeDMBYZSJqV5FaDoBODcJeDQFGD1veD5BOHgrYDkBsH5B7VEBiHQFYH9BOHArKD5XGDEBOZSXeDuFaDoJeDcJeDQX7Z1zGV5BiDMNOVIBOHEFYDoJeDcJUZ1FaD1NaD5raHgN7HEBUDurmZuJeHQXOZ9JeDSzGV5JwDMBYVIBODWFYVENUHQBiZ1B/HABYV5JsDMzGHAFKV5FaZuBOHQXOZ9rqZ1rwVWXGHuBYDkFCDuX7VoX7D9BsH9B/Z1BeZMB/HgvCZSJGH5FYDoF7D9NwH9X7DSBYV5JeHuBYVcFKH5FqVoB/D9XOH9B/D1zGD5FaDMrYZSXeDuFYVoXGDcJeZ9rqD1BeV5BqHgvsDkB/V5X7DoX7D9BsH9FaD1rwZMB/DMNKZSXeDWX7DoXGD9JKDQX7HIrwV5BqHuvmV9FeDWXCDoJsDcBwH9B/Z1rYHQJwHgrKHArsH5FGZuB/D9JKDQB/HAveHQB/DMNOVcFKDWFYDoXGHQXGH9FaHArKD5NUHgNKZSJqDWr/VoBqHQBiDuFaHAveD5NUHgNKDkBOV5FYHMBiHQFYH9B/HANOD5FaDErKVkXeV5FqDoFUD9NmDQFUZ1rwV5JwHuzGVIBODuX7VoB/D9BsZSB/DSrYZMJwDMBYHEXeH5FYVoXGD9XsZSX7Z1N7D5JwHuzGZSJ3V5F/VorqD9JmZ1rqHArKHQJwDEBODkFeH5FYVoFGHQJKDQFaHAveD5NUHgNKDkBOV5FYHMBiHQBsZ1F7Z1BOZMJeDENOHEJGH5FYZuJsD9JKZSBiHArYHQrqHgrwDkFCDWF/HMBiD9BsVIraD1rwV5X7HgBeHEFiDWFqDoBODcXOZSX7HANOV5BOHuNODkBOV5F/VEBiDcJUZkFGHArKV5FUDMrYZSXeV5FqHIJsHQBiZ9XGHANKV5XGDMvsVcBUDWB3VENUHQNmZkBiHAN7HQJwDEBODkFeH5FYVoFGHQJKDQJwHIvsV5JeDMBYVIBsDur/HMJwD9JmZ1FGHIveHQFGDMBYDkXKH5FYHIJsD9XsZ9JeD1BeD5F7DMvmVcFeHEFYDoJsD9XOH9FaD1rKV5JeDEvsHEBUDWFqZuFaD9XsZ9rqHAveHQBOHgvsVcBOH5FqDoFGD9BsH9B/Z1NOD5NUDEBOHEFKDWF/VoFaDcBwDuBOHAveHuraHgvsDkBOV5X7DoJsD9BsH9B/Z1rYV5JeDMBYHAFKDWF/HMJsD9XsZSFGHAveVWJwHuNOVcFKDWFaVoX7DcBwZ1rqDSvOD5raHgNOZSXeV5FaVoX7D9JKDQX7D1veV5FUHuzGVIBOHEFYVoB/HQJmZ1F7Z1vmD5rqDEBOHArCDWBmZuBqHQXGZ9XGHANKVWFU";
      $this->prep_conect();
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
          if (!$_SESSION['sc_session'][$script_case_init]['form_u_organizaciones']['iframe_menu'] && (!isset($_SESSION['sc_session'][$script_case_init]['form_u_organizaciones']['sc_outra_jan']) || $_SESSION['sc_session'][$script_case_init]['form_u_organizaciones']['sc_outra_jan'] != 'form_u_organizaciones')) 
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
      $con_devel             =  (isset($_SESSION['scriptcase']['form_u_organizaciones']['glo_nm_conexao'])) ? $_SESSION['scriptcase']['form_u_organizaciones']['glo_nm_conexao'] : ""; 
      $perfil_trab           = ""; 
      $this->nm_falta_var    = ""; 
      $this->nm_falta_var_db = ""; 
      $nm_crit_perfil        = false;
      if (isset($_SESSION['scriptcase']['sc_connection']) && !empty($_SESSION['scriptcase']['sc_connection']))
      {
          foreach ($_SESSION['scriptcase']['sc_connection'] as $NM_con_orig => $NM_con_dest)
          {
              if (isset($_SESSION['scriptcase']['form_u_organizaciones']['glo_nm_conexao']) && $_SESSION['scriptcase']['form_u_organizaciones']['glo_nm_conexao'] == $NM_con_orig)
              {
/*NM*/            $_SESSION['scriptcase']['form_u_organizaciones']['glo_nm_conexao'] = $NM_con_dest;
              }
              if (isset($_SESSION['scriptcase']['form_u_organizaciones']['glo_nm_perfil']) && $_SESSION['scriptcase']['form_u_organizaciones']['glo_nm_perfil'] == $NM_con_orig)
              {
/*NM*/            $_SESSION['scriptcase']['form_u_organizaciones']['glo_nm_perfil'] = $NM_con_dest;
              }
              if (isset($_SESSION['scriptcase']['form_u_organizaciones']['glo_con_' . $NM_con_orig]))
              {
                  $_SESSION['scriptcase']['form_u_organizaciones']['glo_con_' . $NM_con_orig] = $NM_con_dest;
              }
          }
      }
      if (isset($_SESSION['scriptcase']['form_u_organizaciones']['glo_nm_conexao']) && !empty($_SESSION['scriptcase']['form_u_organizaciones']['glo_nm_conexao']))
      {
          db_conect_devel($con_devel, $this->root . $this->path_prod, 'SIU', 2); 
          if (empty($_SESSION['scriptcase']['glo_tpbanco']) && empty($_SESSION['scriptcase']['glo_banco']))
          {
              $nm_crit_perfil = true;
          }
      }
      if (isset($_SESSION['scriptcase']['form_u_organizaciones']['glo_nm_perfil']) && !empty($_SESSION['scriptcase']['form_u_organizaciones']['glo_nm_perfil']))
      {
          $perfil_trab = $_SESSION['scriptcase']['form_u_organizaciones']['glo_nm_perfil'];
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
      if (!$_SESSION['sc_session'][$this->sc_page]['form_u_organizaciones']['embutida_form'] || !$_SESSION['sc_session'][$this->sc_page]['form_u_organizaciones']['embutida_proc']) 
      {
          if (!isset($_SESSION['name'])) 
          {
              $this->nm_falta_var .= "name; ";
          }
      }
// 
      if (isset($_SESSION['scriptcase']['glo_decimal_db']) && !empty($_SESSION['scriptcase']['glo_decimal_db']))
      {
         $_SESSION['sc_session'][$this->sc_page]['form_u_organizaciones']['decimal_db'] = $_SESSION['scriptcase']['glo_decimal_db']; 
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
          $this->nm_tabela = "u_organizaciones"; 
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
          if (!$_SESSION['sc_session'][$this->sc_page]['form_u_organizaciones']['iframe_menu'] && (!isset($_SESSION['sc_session'][$this->sc_page]['form_u_organizaciones']['sc_outra_jan']) || $_SESSION['sc_session'][$this->sc_page]['form_u_organizaciones']['sc_outra_jan'] != 'form_u_organizaciones')) 
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
      if (isset($_SESSION['scriptcase']['nm_sc_retorno']) && !empty($_SESSION['scriptcase']['nm_sc_retorno']) && isset($_SESSION['scriptcase']['form_u_organizaciones']['glo_nm_conexao']) && !empty($_SESSION['scriptcase']['form_u_organizaciones']['glo_nm_conexao']))
      { 
          $this->Db = db_conect_devel($_SESSION['scriptcase']['form_u_organizaciones']['glo_nm_conexao'], $this->root . $this->path_prod, 'SIU'); 
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
          $_SESSION['sc_session'][$this->sc_page]['form_u_organizaciones']['decimal_db'] = "."; 
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
class form_u_organizaciones_edit
{
    var $contr_form_u_organizaciones;
    function inicializa()
    {
        global $nm_opc_lookup, $nm_opc_php, $script_case_init;
        require_once("form_u_organizaciones_apl.php");
        $this->contr_form_u_organizaciones = new form_u_organizaciones_apl();
    }
}
if (!function_exists("NM_is_utf8"))
{
    include_once("form_u_organizaciones_nmutf8.php");
}
ob_start();
//
//----------------  
//
    $_SESSION['scriptcase']['form_u_organizaciones']['contr_erro'] = 'off';
    if (!function_exists("NM_is_utf8"))
    {
        include_once("form_u_organizaciones_nmutf8.php");
    }
    $sc_conv_var = array();
    $sc_conv_var['120_organizaciones'] = "sc_field_0";
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
             nm_limpa_str_form_u_organizaciones($nmgp_val);
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
             nm_limpa_str_form_u_organizaciones($nmgp_val);
             $$nmgp_var = $nmgp_val;
        }
    }

    if (isset($_POST['rs']) && 'ajax_' == substr($_POST['rs'], 0, 5) && isset($_POST['rsargs']) && !empty($_POST['rsargs']))
    {
        if ('ajax_form_u_organizaciones_validate_ruc' == $_POST['rs'])
        {
            $ruc = NM_utf8_urldecode($_POST['rsargs'][0]);
            $script_case_init = NM_utf8_urldecode($_POST['rsargs'][1]);
        }
        if ('ajax_form_u_organizaciones_validate_btnbuscar' == $_POST['rs'])
        {
            $btnbuscar = NM_utf8_urldecode($_POST['rsargs'][0]);
            $script_case_init = NM_utf8_urldecode($_POST['rsargs'][1]);
        }
        if ('ajax_form_u_organizaciones_validate_ruc_definitivo' == $_POST['rs'])
        {
            $ruc_definitivo = NM_utf8_urldecode($_POST['rsargs'][0]);
            $script_case_init = NM_utf8_urldecode($_POST['rsargs'][1]);
        }
        if ('ajax_form_u_organizaciones_validate_ruc_provisional' == $_POST['rs'])
        {
            $ruc_provisional = NM_utf8_urldecode($_POST['rsargs'][0]);
            $script_case_init = NM_utf8_urldecode($_POST['rsargs'][1]);
        }
        if ('ajax_form_u_organizaciones_validate_organizacion' == $_POST['rs'])
        {
            $organizacion = NM_utf8_urldecode($_POST['rsargs'][0]);
            $script_case_init = NM_utf8_urldecode($_POST['rsargs'][1]);
        }
        if ('ajax_form_u_organizaciones_validate_actividad' == $_POST['rs'])
        {
            $actividad = NM_utf8_urldecode($_POST['rsargs'][0]);
            $script_case_init = NM_utf8_urldecode($_POST['rsargs'][1]);
        }
        if ('ajax_form_u_organizaciones_validate_tipo' == $_POST['rs'])
        {
            $tipo = NM_utf8_urldecode($_POST['rsargs'][0]);
            $script_case_init = NM_utf8_urldecode($_POST['rsargs'][1]);
        }
        if ('ajax_form_u_organizaciones_validate_forma_organizacion' == $_POST['rs'])
        {
            $forma_organizacion = NM_utf8_urldecode($_POST['rsargs'][0]);
            $script_case_init = NM_utf8_urldecode($_POST['rsargs'][1]);
        }
        if ('ajax_form_u_organizaciones_validate_estado_org' == $_POST['rs'])
        {
            $estado_org = NM_utf8_urldecode($_POST['rsargs'][0]);
            $script_case_init = NM_utf8_urldecode($_POST['rsargs'][1]);
        }
        if ('ajax_form_u_organizaciones_validate_cod_zona' == $_POST['rs'])
        {
            $cod_zona = NM_utf8_urldecode($_POST['rsargs'][0]);
            $script_case_init = NM_utf8_urldecode($_POST['rsargs'][1]);
        }
        if ('ajax_form_u_organizaciones_validate_cod_provincia' == $_POST['rs'])
        {
            $cod_provincia = NM_utf8_urldecode($_POST['rsargs'][0]);
            $script_case_init = NM_utf8_urldecode($_POST['rsargs'][1]);
        }
        if ('ajax_form_u_organizaciones_validate_cod_canton' == $_POST['rs'])
        {
            $cod_canton = NM_utf8_urldecode($_POST['rsargs'][0]);
            $script_case_init = NM_utf8_urldecode($_POST['rsargs'][1]);
        }
        if ('ajax_form_u_organizaciones_validate_cod_parroquia' == $_POST['rs'])
        {
            $cod_parroquia = NM_utf8_urldecode($_POST['rsargs'][0]);
            $script_case_init = NM_utf8_urldecode($_POST['rsargs'][1]);
        }
        if ('ajax_form_u_organizaciones_validate_direccion' == $_POST['rs'])
        {
            $direccion = NM_utf8_urldecode($_POST['rsargs'][0]);
            $script_case_init = NM_utf8_urldecode($_POST['rsargs'][1]);
        }
        if ('ajax_form_u_organizaciones_validate_telefono' == $_POST['rs'])
        {
            $telefono = NM_utf8_urldecode($_POST['rsargs'][0]);
            $script_case_init = NM_utf8_urldecode($_POST['rsargs'][1]);
        }
        if ('ajax_form_u_organizaciones_validate_celular' == $_POST['rs'])
        {
            $celular = NM_utf8_urldecode($_POST['rsargs'][0]);
            $script_case_init = NM_utf8_urldecode($_POST['rsargs'][1]);
        }
        if ('ajax_form_u_organizaciones_validate_email' == $_POST['rs'])
        {
            $email = NM_utf8_urldecode($_POST['rsargs'][0]);
            $script_case_init = NM_utf8_urldecode($_POST['rsargs'][1]);
        }
        if ('ajax_form_u_organizaciones_validate_circuito_economico' == $_POST['rs'])
        {
            $circuito_economico = NM_utf8_urldecode($_POST['rsargs'][0]);
            $script_case_init = NM_utf8_urldecode($_POST['rsargs'][1]);
        }
        if ('ajax_form_u_organizaciones_validate_categoria_actividad_mp' == $_POST['rs'])
        {
            $categoria_actividad_mp = NM_utf8_urldecode($_POST['rsargs'][0]);
            $script_case_init = NM_utf8_urldecode($_POST['rsargs'][1]);
        }
        if ('ajax_form_u_organizaciones_validate_identificacion_actividad_mp' == $_POST['rs'])
        {
            $identificacion_actividad_mp = NM_utf8_urldecode($_POST['rsargs'][0]);
            $script_case_init = NM_utf8_urldecode($_POST['rsargs'][1]);
        }
        if ('ajax_form_u_organizaciones_validate_producto_servicio' == $_POST['rs'])
        {
            $producto_servicio = NM_utf8_urldecode($_POST['rsargs'][0]);
            $script_case_init = NM_utf8_urldecode($_POST['rsargs'][1]);
        }
        if ('ajax_form_u_organizaciones_validate_cedula_representante_legal' == $_POST['rs'])
        {
            $cedula_representante_legal = NM_utf8_urldecode($_POST['rsargs'][0]);
            $script_case_init = NM_utf8_urldecode($_POST['rsargs'][1]);
        }
        if ('ajax_form_u_organizaciones_validate_nombre_representante_legal' == $_POST['rs'])
        {
            $nombre_representante_legal = NM_utf8_urldecode($_POST['rsargs'][0]);
            $script_case_init = NM_utf8_urldecode($_POST['rsargs'][1]);
        }
        if ('ajax_form_u_organizaciones_validate_estado_organizacion' == $_POST['rs'])
        {
            $estado_organizacion = NM_utf8_urldecode($_POST['rsargs'][0]);
            $script_case_init = NM_utf8_urldecode($_POST['rsargs'][1]);
        }
        if ('ajax_form_u_organizaciones_validate_num_resolucion' == $_POST['rs'])
        {
            $num_resolucion = NM_utf8_urldecode($_POST['rsargs'][0]);
            $script_case_init = NM_utf8_urldecode($_POST['rsargs'][1]);
        }
        if ('ajax_form_u_organizaciones_validate_legalmente_constituida' == $_POST['rs'])
        {
            $legalmente_constituida = NM_utf8_urldecode($_POST['rsargs'][0]);
            $script_case_init = NM_utf8_urldecode($_POST['rsargs'][1]);
        }
        if ('ajax_form_u_organizaciones_validate_estado_juridico' == $_POST['rs'])
        {
            $estado_juridico = NM_utf8_urldecode($_POST['rsargs'][0]);
            $script_case_init = NM_utf8_urldecode($_POST['rsargs'][1]);
        }
        if ('ajax_form_u_organizaciones_validate_num_socios' == $_POST['rs'])
        {
            $num_socios = NM_utf8_urldecode($_POST['rsargs'][0]);
            $script_case_init = NM_utf8_urldecode($_POST['rsargs'][1]);
        }
        if ('ajax_form_u_organizaciones_validate_user' == $_POST['rs'])
        {
            $user = NM_utf8_urldecode($_POST['rsargs'][0]);
            $script_case_init = NM_utf8_urldecode($_POST['rsargs'][1]);
        }
        if ('ajax_form_u_organizaciones_validate_fecha_registro' == $_POST['rs'])
        {
            $fecha_registro = NM_utf8_urldecode($_POST['rsargs'][0]);
            $script_case_init = NM_utf8_urldecode($_POST['rsargs'][1]);
        }
        if ('ajax_form_u_organizaciones_validate_tipo_registro' == $_POST['rs'])
        {
            $tipo_registro = NM_utf8_urldecode($_POST['rsargs'][0]);
            $script_case_init = NM_utf8_urldecode($_POST['rsargs'][1]);
        }
        if ('ajax_form_u_organizaciones_refresh_tipo' == $_POST['rs'])
        {
            $tipo = NM_utf8_urldecode($_POST['rsargs'][0]);
            $nmgp_refresh_fields = NM_utf8_urldecode($_POST['rsargs'][1]);
            $script_case_init = NM_utf8_urldecode($_POST['rsargs'][2]);
        }
        if ('ajax_form_u_organizaciones_refresh_cod_zona' == $_POST['rs'])
        {
            $cod_zona = NM_utf8_urldecode($_POST['rsargs'][0]);
            $nmgp_refresh_fields = NM_utf8_urldecode($_POST['rsargs'][1]);
            $script_case_init = NM_utf8_urldecode($_POST['rsargs'][2]);
        }
        if ('ajax_form_u_organizaciones_refresh_cod_provincia' == $_POST['rs'])
        {
            $cod_provincia = NM_utf8_urldecode($_POST['rsargs'][0]);
            $nmgp_refresh_fields = NM_utf8_urldecode($_POST['rsargs'][1]);
            $script_case_init = NM_utf8_urldecode($_POST['rsargs'][2]);
        }
        if ('ajax_form_u_organizaciones_refresh_cod_canton' == $_POST['rs'])
        {
            $cod_canton = NM_utf8_urldecode($_POST['rsargs'][0]);
            $cod_provincia = NM_utf8_urldecode($_POST['rsargs'][1]);
            $nmgp_refresh_fields = NM_utf8_urldecode($_POST['rsargs'][2]);
            $script_case_init = NM_utf8_urldecode($_POST['rsargs'][3]);
        }
        if ('ajax_form_u_organizaciones_refresh_categoria_actividad_mp' == $_POST['rs'])
        {
            $categoria_actividad_mp = NM_utf8_urldecode($_POST['rsargs'][0]);
            $nmgp_refresh_fields = NM_utf8_urldecode($_POST['rsargs'][1]);
            $script_case_init = NM_utf8_urldecode($_POST['rsargs'][2]);
        }
        if ('ajax_form_u_organizaciones_refresh_estado_organizacion' == $_POST['rs'])
        {
            $estado_organizacion = NM_utf8_urldecode($_POST['rsargs'][0]);
            $nmgp_refresh_fields = NM_utf8_urldecode($_POST['rsargs'][1]);
            $script_case_init = NM_utf8_urldecode($_POST['rsargs'][2]);
        }
        if ('ajax_form_u_organizaciones_event_btnbuscar_onclick' == $_POST['rs'])
        {
            $ruc = NM_utf8_urldecode($_POST['rsargs'][0]);
            $num_socios = NM_utf8_urldecode($_POST['rsargs'][1]);
            $cedula_representante_legal = NM_utf8_urldecode($_POST['rsargs'][2]);
            $nombre_representante_legal = NM_utf8_urldecode($_POST['rsargs'][3]);
            $tipo_registro = NM_utf8_urldecode($_POST['rsargs'][4]);
            $estado_org = NM_utf8_urldecode($_POST['rsargs'][5]);
            $ruc_definitivo = NM_utf8_urldecode($_POST['rsargs'][6]);
            $ruc_provisional = NM_utf8_urldecode($_POST['rsargs'][7]);
            $organizacion = NM_utf8_urldecode($_POST['rsargs'][8]);
            $cod_zona = NM_utf8_urldecode($_POST['rsargs'][9]);
            $cod_provincia = NM_utf8_urldecode($_POST['rsargs'][10]);
            $cod_canton = NM_utf8_urldecode($_POST['rsargs'][11]);
            $cod_parroquia = NM_utf8_urldecode($_POST['rsargs'][12]);
            $direccion = NM_utf8_urldecode($_POST['rsargs'][13]);
            $email = NM_utf8_urldecode($_POST['rsargs'][14]);
            $telefono = NM_utf8_urldecode($_POST['rsargs'][15]);
            $num_resolucion = NM_utf8_urldecode($_POST['rsargs'][16]);
            $tipo = NM_utf8_urldecode($_POST['rsargs'][17]);
            $legalmente_constituida = NM_utf8_urldecode($_POST['rsargs'][18]);
            $estado_organizacion = NM_utf8_urldecode($_POST['rsargs'][19]);
            $forma_organizacion = NM_utf8_urldecode($_POST['rsargs'][20]);
            $actividad = NM_utf8_urldecode($_POST['rsargs'][21]);
            $script_case_init = NM_utf8_urldecode($_POST['rsargs'][22]);
        }
        if ('ajax_form_u_organizaciones_event_email_onblur' == $_POST['rs'])
        {
            $email = NM_utf8_urldecode($_POST['rsargs'][0]);
            $script_case_init = NM_utf8_urldecode($_POST['rsargs'][1]);
        }
        if ('ajax_form_u_organizaciones_submit_form' == $_POST['rs'])
        {
            $ruc = NM_utf8_urldecode($_POST['rsargs'][0]);
            $btnbuscar = NM_utf8_urldecode($_POST['rsargs'][1]);
            $ruc_definitivo = NM_utf8_urldecode($_POST['rsargs'][2]);
            $ruc_provisional = NM_utf8_urldecode($_POST['rsargs'][3]);
            $organizacion = NM_utf8_urldecode($_POST['rsargs'][4]);
            $actividad = NM_utf8_urldecode($_POST['rsargs'][5]);
            $tipo = NM_utf8_urldecode($_POST['rsargs'][6]);
            $forma_organizacion = NM_utf8_urldecode($_POST['rsargs'][7]);
            $estado_org = NM_utf8_urldecode($_POST['rsargs'][8]);
            $cod_zona = NM_utf8_urldecode($_POST['rsargs'][9]);
            $cod_provincia = NM_utf8_urldecode($_POST['rsargs'][10]);
            $cod_canton = NM_utf8_urldecode($_POST['rsargs'][11]);
            $cod_parroquia = NM_utf8_urldecode($_POST['rsargs'][12]);
            $direccion = NM_utf8_urldecode($_POST['rsargs'][13]);
            $telefono = NM_utf8_urldecode($_POST['rsargs'][14]);
            $celular = NM_utf8_urldecode($_POST['rsargs'][15]);
            $email = NM_utf8_urldecode($_POST['rsargs'][16]);
            $circuito_economico = NM_utf8_urldecode($_POST['rsargs'][17]);
            $categoria_actividad_mp = NM_utf8_urldecode($_POST['rsargs'][18]);
            $identificacion_actividad_mp = NM_utf8_urldecode($_POST['rsargs'][19]);
            $producto_servicio = NM_utf8_urldecode($_POST['rsargs'][20]);
            $cedula_representante_legal = NM_utf8_urldecode($_POST['rsargs'][21]);
            $nombre_representante_legal = NM_utf8_urldecode($_POST['rsargs'][22]);
            $estado_organizacion = NM_utf8_urldecode($_POST['rsargs'][23]);
            $num_resolucion = NM_utf8_urldecode($_POST['rsargs'][24]);
            $legalmente_constituida = NM_utf8_urldecode($_POST['rsargs'][25]);
            $estado_juridico = NM_utf8_urldecode($_POST['rsargs'][26]);
            $num_socios = NM_utf8_urldecode($_POST['rsargs'][27]);
            $user = NM_utf8_urldecode($_POST['rsargs'][28]);
            $fecha_registro = NM_utf8_urldecode($_POST['rsargs'][29]);
            $tipo_registro = NM_utf8_urldecode($_POST['rsargs'][30]);
            $nm_form_submit = NM_utf8_urldecode($_POST['rsargs'][31]);
            $nmgp_url_saida = NM_utf8_urldecode($_POST['rsargs'][32]);
            $nmgp_opcao = NM_utf8_urldecode($_POST['rsargs'][33]);
            $nmgp_ancora = NM_utf8_urldecode($_POST['rsargs'][34]);
            $nmgp_num_form = NM_utf8_urldecode($_POST['rsargs'][35]);
            $nmgp_parms = NM_utf8_urldecode($_POST['rsargs'][36]);
            $script_case_init = NM_utf8_urldecode($_POST['rsargs'][37]);
        }
        if ('ajax_form_u_organizaciones_navigate_form' == $_POST['rs'])
        {
            $cod_u_organizaciones = NM_utf8_urldecode($_POST['rsargs'][0]);
            $nm_form_submit = NM_utf8_urldecode($_POST['rsargs'][1]);
            $nmgp_opcao = NM_utf8_urldecode($_POST['rsargs'][2]);
            $nmgp_ordem = NM_utf8_urldecode($_POST['rsargs'][3]);
            $script_case_init = NM_utf8_urldecode($_POST['rsargs'][4]);
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
    if (isset($script_case_init) && !isset($_SESSION['sc_session'][$script_case_init]['form_u_organizaciones']['lig_edit_lookup']))
    { 
        $_SESSION['sc_session'][$script_case_init]['form_u_organizaciones']['lig_edit_lookup']     = false;
        $_SESSION['sc_session'][$script_case_init]['form_u_organizaciones']['lig_edit_lookup_cb']  = '';
        $_SESSION['sc_session'][$script_case_init]['form_u_organizaciones']['lig_edit_lookup_row'] = '';
    } 
    if (isset($script_case_init) && !isset($_SESSION['sc_session'][$script_case_init]['form_u_organizaciones']['embutida_call']))
    { 
        $_SESSION['sc_session'][$script_case_init]['form_u_organizaciones']['embutida_call'] = false;
    } 
    if (isset($script_case_init) && !isset($_SESSION['sc_session'][$script_case_init]['form_u_organizaciones']['embutida_proc']))
    { 
        $_SESSION['sc_session'][$script_case_init]['form_u_organizaciones']['embutida_proc'] = false;
    } 
    if (isset($script_case_init) && !isset($_SESSION['sc_session'][$script_case_init]['form_u_organizaciones']['embutida_liga_form_insert']))
    { 
        $_SESSION['sc_session'][$script_case_init]['form_u_organizaciones']['embutida_liga_form_insert'] = '';
    } 
    if (isset($script_case_init) && !isset($_SESSION['sc_session'][$script_case_init]['form_u_organizaciones']['embutida_liga_form_update']))
    { 
        $_SESSION['sc_session'][$script_case_init]['form_u_organizaciones']['embutida_liga_form_update'] = '';
    } 
    if (isset($script_case_init) && !isset($_SESSION['sc_session'][$script_case_init]['form_u_organizaciones']['embutida_liga_form_delete']))
    { 
        $_SESSION['sc_session'][$script_case_init]['form_u_organizaciones']['embutida_liga_form_delete'] = '';
    } 
    if (isset($script_case_init) && !isset($_SESSION['sc_session'][$script_case_init]['form_u_organizaciones']['embutida_liga_form_btn_nav']))
    { 
        $_SESSION['sc_session'][$script_case_init]['form_u_organizaciones']['embutida_liga_form_btn_nav'] = '';
    } 
    if (isset($script_case_init) && !isset($_SESSION['sc_session'][$script_case_init]['form_u_organizaciones']['embutida_liga_grid_edit']))
    { 
        $_SESSION['sc_session'][$script_case_init]['form_u_organizaciones']['embutida_liga_grid_edit'] = '';
    } 
    if (isset($script_case_init) && !isset($_SESSION['sc_session'][$script_case_init]['form_u_organizaciones']['embutida_liga_grid_edit_link']))
    { 
        $_SESSION['sc_session'][$script_case_init]['form_u_organizaciones']['embutida_liga_grid_edit_link'] = '';
    } 
    if (isset($script_case_init) && !isset($_SESSION['sc_session'][$script_case_init]['form_u_organizaciones']['embutida_liga_qtd_reg']))
    { 
        $_SESSION['sc_session'][$script_case_init]['form_u_organizaciones']['embutida_liga_qtd_reg'] = '';
    } 
    if (isset($script_case_init) && !isset($_SESSION['sc_session'][$script_case_init]['form_u_organizaciones']['embutida_liga_tp_pag']))
    { 
        $_SESSION['sc_session'][$script_case_init]['form_u_organizaciones']['embutida_liga_tp_pag'] = '';
    } 
    if (isset($script_case_init) && $_SESSION['sc_session'][$script_case_init]['form_u_organizaciones']['embutida_proc'])
    {
        return;
    }
    if (isset($script_case_init) && isset($_SESSION['sc_session'][$script_case_init]['form_u_organizaciones']['embutida_parms']))
    { 
        $nmgp_parms = $_SESSION['sc_session'][$script_case_init]['form_u_organizaciones']['embutida_parms'];
        unset($_SESSION['sc_session'][$script_case_init]['form_u_organizaciones']['embutida_parms']);
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
               nm_limpa_str_form_u_organizaciones($cadapar[1]);
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
        if (isset($name)) 
        {
            $_SESSION['name'] = $name;
        }
    } 
    elseif (isset($script_case_init) && !empty($script_case_init) && isset($_SESSION['sc_session'][$script_case_init]['form_u_organizaciones']['parms']))
    {
        if (!isset($nmgp_opcao) || ($nmgp_opcao != "incluir" && $nmgp_opcao != "novo" && $nmgp_opcao != "recarga" && $nmgp_opcao != "muda_form"))
        {
            $todo = explode("?@?", $_SESSION['sc_session'][$script_case_init]['form_u_organizaciones']['parms']);
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
    if (isset($_SESSION['sc_session'][$script_case_init]['form_u_organizaciones']['iframe_menu']))
    {
        $salva_iframe = $_SESSION['sc_session'][$script_case_init]['form_u_organizaciones']['iframe_menu'];
        unset($_SESSION['sc_session'][$script_case_init]['form_u_organizaciones']['iframe_menu']);
    }
    if (isset($_SESSION['sc_session'][$script_case_init]['form_u_organizaciones']['run_iframe']))
    {
        $salva_run = $_SESSION['sc_session'][$script_case_init]['form_u_organizaciones']['run_iframe'];
        unset($_SESSION['sc_session'][$script_case_init]['form_u_organizaciones']['run_iframe']);
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
            $_SESSION['scriptcase']['sc_apl_menu_atual'] = "form_u_organizaciones";
        }
        $achou = false;
        if (isset($_SESSION['sc_session'][$script_case_init]))
        {
            foreach ($_SESSION['sc_session'][$script_case_init] as $nome_apl => $resto)
            {
                if ($nome_apl == 'form_u_organizaciones' || $achou)
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
        $_SESSION['sc_session'][$script_case_init]['form_u_organizaciones']['iframe_menu']  = true;
        $_SESSION['sc_session'][$script_case_init]['form_u_organizaciones']['mostra_cab']   = "S";
        $_SESSION['sc_session'][$script_case_init]['form_u_organizaciones']['run_iframe']   = "N";
        $_SESSION['sc_session'][$script_case_init]['form_u_organizaciones']['retorno_edit'] = "";
    }
    else
    {
        $_SESSION['sc_session'][$script_case_init]['form_u_organizaciones']['run_iframe']  = $salva_run;
        $_SESSION['sc_session'][$script_case_init]['form_u_organizaciones']['iframe_menu'] = $salva_iframe;
    }

    if (!isset($_SESSION['sc_session'][$script_case_init]['form_u_organizaciones']['db_changed']))
    {
        $_SESSION['sc_session'][$script_case_init]['form_u_organizaciones']['db_changed'] = false;
    }
    if (isset($_GET['nmgp_outra_jan']) && 'true' == $_GET['nmgp_outra_jan'] && isset($_GET['nmgp_url_saida']) && 'modal' == $_GET['nmgp_url_saida'])
    {
        $_SESSION['sc_session'][$script_case_init]['form_u_organizaciones']['db_changed'] = false;
    }

    if (isset($_SESSION['scriptcase']['sc_outra_jan']) && $_SESSION['scriptcase']['sc_outra_jan'] == 'form_u_organizaciones')
    {
        $_SESSION['sc_session'][$script_case_init]['form_u_organizaciones']['sc_outra_jan'] = true;
         unset($_SESSION['scriptcase']['sc_outra_jan']);
    }
    if (isset($nmgp_outra_jan) && $nmgp_outra_jan == 'true')
    {
        if (isset($nmgp_url_saida) && $nmgp_url_saida == "modal")
        {
            $_SESSION['sc_session'][$script_case_init]['form_u_organizaciones']['sc_modal'] = true;
            $nm_url_saida = "form_u_organizaciones_fim.php"; 
        }
        $nm_apl_dependente = 0;
        $_SESSION['sc_session'][$script_case_init]['form_u_organizaciones']['sc_outra_jan'] = true;
    }

    if (!isset($_SESSION['sc_session'][$script_case_init]['form_u_organizaciones']['initialize']))
    {
        $_SESSION['sc_session'][$script_case_init]['form_u_organizaciones']['initialize'] = true;
    }
    elseif (!isset($_SERVER['HTTP_REFERER']))
    {
        $_SESSION['sc_session'][$script_case_init]['form_u_organizaciones']['initialize'] = false;
    }
    elseif (false === strpos($_SERVER['HTTP_REFERER'], '.php'))
    {
        $_SESSION['sc_session'][$script_case_init]['form_u_organizaciones']['initialize'] = true;
    }
    else
    {
        $sReferer = substr($_SERVER['HTTP_REFERER'], 0, strpos($_SERVER['HTTP_REFERER'], '.php'));
        $sReferer = substr($sReferer, strrpos($sReferer, '/') + 1);
        if ('form_u_organizaciones' == $sReferer || 'form_u_organizaciones_' == substr($sReferer, 0, 22))
        {
            $_SESSION['sc_session'][$script_case_init]['form_u_organizaciones']['initialize'] = false;
        }
        else
        {
            $_SESSION['sc_session'][$script_case_init]['form_u_organizaciones']['initialize'] = true;
        }
    }

    if (isset($_SESSION['sc_session'][$script_case_init]['form_u_organizaciones']['first_time']))
    {
        $_SESSION['sc_session'][$script_case_init]['form_u_organizaciones']['first_time'] = false;
    }
    else
    {
        $_SESSION['sc_session'][$script_case_init]['form_u_organizaciones']['first_time'] = true;
    }

    $_SESSION['sc_session'][$script_case_init]['form_u_organizaciones']['menu_desenv'] = false;   
    if (!defined("SC_ERROR_HANDLER"))
    {
        define("SC_ERROR_HANDLER", 1);
    }
    include_once(dirname(__FILE__) . "/form_u_organizaciones_erro.php");
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
            $_SESSION['sc_session'][$script_case_init]['form_u_organizaciones']['opcao'] = $nmgp_opcao ; 
        }
        if (isset($_POST["name"])) 
        {
            $_SESSION['name'] = $_POST["name"];
             nm_limpa_str_form_u_organizaciones($_SESSION['name']);
        }
        if (isset($_GET["name"])) 
        {
            $_SESSION['name'] = $_GET["name"];
             nm_limpa_str_form_u_organizaciones($_SESSION['name']);
        }
        if (!empty($_SESSION['sc_session'][$script_case_init]['form_u_organizaciones']['volta_redirect_apl']))
        {
            $_SESSION['scriptcase']['sc_url_saida'][$script_case_init] = $_SESSION['sc_session'][$script_case_init]['form_u_organizaciones']['volta_redirect_apl']; 
            $nm_apl_dependente = $_SESSION['sc_session'][$script_case_init]['form_u_organizaciones']['volta_redirect_tp']; 
            $_SESSION['sc_session'][$script_case_init]['form_u_organizaciones']['volta_redirect_apl'] = "";
            $_SESSION['sc_session'][$script_case_init]['form_u_organizaciones']['volta_redirect_tp'] = "";
            $nm_url_saida = "form_u_organizaciones_fim.php"; 
        }
        elseif (isset($_SESSION['sc_session'][$script_case_init]['form_u_organizaciones']['sc_outra_jan']) && $_SESSION['sc_session'][$script_case_init]['form_u_organizaciones']['sc_outra_jan'] == 'true')
        {
               $nm_url_saida = "form_u_organizaciones_fim.php"; 
        }
        elseif ($_SESSION['sc_session'][$script_case_init]['form_u_organizaciones']['run_iframe'] != "F" && $_SESSION['sc_session'][$script_case_init]['form_u_organizaciones']['run_iframe'] != "R")
        {
           $nm_url_saida = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : ""; 
           $nm_url_saida = str_replace("_fim.php", ".php", $nm_url_saida); 
            $nm_saida_global = $nm_url_saida;
            if (!empty($nmgp_url_saida) && empty($_SESSION['sc_session'][$script_case_init]['form_u_organizaciones']['retorno_edit'])) 
            {
                $_SESSION['sc_session'][$script_case_init]['form_u_organizaciones']['retorno_edit'] = $nmgp_url_saida ; 
            } 
            if (!empty($_SESSION['sc_session'][$script_case_init]['form_u_organizaciones']['retorno_edit'])) 
            {
                $nm_url_saida = $_SESSION['sc_session'][$script_case_init]['form_u_organizaciones']['retorno_edit'] . "?script_case_init=" . $script_case_init . "&script_case_session=" . session_id();  
                $nm_apl_dependente = 1 ; 
                $nm_saida_global = $nm_url_saida;
            } 
            if ($nm_apl_dependente != 1) 
            { 
                $_SESSION['sc_session'][$script_case_init]['form_u_organizaciones']['run_iframe'] = "N"; 
            } 
            if ($_SESSION['sc_session'][$script_case_init]['form_u_organizaciones']['run_iframe'] != "F" && $_SESSION['sc_session'][$script_case_init]['form_u_organizaciones']['run_iframe'] != "R" && (!isset($_SESSION['sc_session'][$script_case_init]['form_u_organizaciones']['embutida_call']) || !$_SESSION['sc_session'][$script_case_init]['form_u_organizaciones']['embutida_call']))
            { 
                $_SESSION['scriptcase']['sc_url_saida'][$script_case_init] = $nm_url_saida; 
                $nm_url_saida = "form_u_organizaciones_fim.php"; 
                $_SESSION['scriptcase']['sc_tp_saida'] = "P"; 
                if ($nm_apl_dependente == 1) 
                { 
                    $_SESSION['scriptcase']['sc_tp_saida'] = "D"; 
                } 
            } 
        }
        if (empty($_SESSION['sc_session'][$script_case_init]['form_u_organizaciones']['volta_tp']) && $_SESSION['sc_session'][$script_case_init]['form_u_organizaciones']['run_iframe'] != "F" && $_SESSION['sc_session'][$script_case_init]['form_u_organizaciones']['run_iframe'] != "R")
        {
            $_SESSION['sc_session'][$script_case_init]['form_u_organizaciones']['volta_php'] = $nm_url_saida;
            $_SESSION['sc_session'][$script_case_init]['form_u_organizaciones']['volta_apl'] = $nm_saida_global;
            $_SESSION['sc_session'][$script_case_init]['form_u_organizaciones']['volta_ss']  = (isset($_SESSION['scriptcase']['sc_url_saida'][$script_case_init])) ? $_SESSION['scriptcase']['sc_url_saida'][$script_case_init] : "";
            $_SESSION['sc_session'][$script_case_init]['form_u_organizaciones']['volta_dep'] = $nm_apl_dependente;
            $_SESSION['sc_session'][$script_case_init]['form_u_organizaciones']['volta_tp']  = (isset($_SESSION['scriptcase']['sc_tp_saida'])) ? $_SESSION['scriptcase']['sc_tp_saida'] : "";
        }
        $nm_url_saida = $_SESSION['sc_session'][$script_case_init]['form_u_organizaciones']['volta_php'];
        $nm_saida_global = $_SESSION['sc_session'][$script_case_init]['form_u_organizaciones']['volta_php'];
        $nm_apl_dependente = $_SESSION['sc_session'][$script_case_init]['form_u_organizaciones']['volta_dep'];
        if ($_SESSION['sc_session'][$script_case_init]['form_u_organizaciones']['run_iframe'] != "F" && $_SESSION['sc_session'][$script_case_init]['form_u_organizaciones']['run_iframe'] != "R" && !empty($_SESSION['sc_session'][$script_case_init]['form_u_organizaciones']['volta_ss'])) 
        { 
            $_SESSION['scriptcase']['sc_url_saida'][$script_case_init] = $_SESSION['sc_session'][$script_case_init]['form_u_organizaciones']['volta_ss'];
            $_SESSION['scriptcase']['sc_tp_saida']  = $_SESSION['sc_session'][$script_case_init]['form_u_organizaciones']['volta_tp'];
        } 
        if ($_SESSION['sc_session'][$script_case_init]['form_u_organizaciones']['run_iframe'] == "F" || $_SESSION['sc_session'][$script_case_init]['form_u_organizaciones']['run_iframe'] == "R") 
        { 
            if (!empty($nmgp_url_saida) && empty($_SESSION['sc_session'][$script_case_init]['form_u_organizaciones']['retorno_edit'])) 
            {
                $_SESSION['sc_session'][$script_case_init]['form_u_organizaciones']['retorno_edit'] = $nmgp_url_saida . "?script_case_init=" . $script_case_init . "&script_case_session=" . session_id(); 
            } 
        } 
        if (isset($_SESSION['scriptcase']['nm_sc_retorno']) && !empty($_SESSION['scriptcase']['nm_sc_retorno']) && $_SESSION['sc_session'][$script_case_init]['form_u_organizaciones']['run_iframe'] != "F" && $_SESSION['sc_session'][$script_case_init]['form_u_organizaciones']['run_iframe'] != "R") 
        { 
            $_SESSION['sc_session'][$script_case_init]['form_u_organizaciones']['menu_desenv'] = true;   
        } 
    }
    if (isset($nmgp_redir)) 
    { 
        $_SESSION['sc_session'][$script_case_init]['form_u_organizaciones']['redir'] = $nmgp_redir;   
    } 
    if (isset($nmgp_outra_jan) && $nmgp_outra_jan == 'true')
    {
        $_SESSION['sc_session'][$script_case_init]['form_u_organizaciones']['sc_outra_jan'] = true;
         if ($nmgp_url_saida == "modal")
         {
             $_SESSION['sc_session'][$script_case_init]['form_u_organizaciones']['sc_modal'] = true;
             $nm_url_saida = "form_u_organizaciones_fim.php"; 
         }
    }
    if (isset($_SESSION['sc_session'][$script_case_init]['form_u_organizaciones']['sc_outra_jan']) && $_SESSION['sc_session'][$script_case_init]['form_u_organizaciones']['sc_outra_jan'])
    {
        $nm_apl_dependente = 0;
    }
    $GLOBALS["NM_ERRO_IBASE"] = 0;  
    $inicial_form_u_organizaciones = new form_u_organizaciones_edit();
    $inicial_form_u_organizaciones->inicializa();

    $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['select_html'] = array();
    $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['select_html']['tipo'] = "class=\"sc-js-input scFormObjectOdd\" style=\";\" id=\"id_sc_field_tipo\" name=\"tipo\" size=1";
    $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['select_html']['forma_organizacion'] = "class=\"sc-js-input scFormObjectOdd\" style=\"vertical-align:middle;width:300px;\" id=\"id_sc_field_forma_organizacion\" name=\"forma_organizacion\" size=1";
    $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['select_html']['estado_org'] = "class=\"sc-js-input scFormObjectOdd\" style=\";\" id=\"id_sc_field_estado_org\" name=\"estado_org\" size=1";
    $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['select_html']['cod_zona'] = "class=\"sc-js-input scFormObjectOdd\" style=\"text-align:center;vertical-align:middle;width:160px;\" id=\"id_sc_field_cod_zona\" name=\"cod_zona\" size=1";
    $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['select_html']['cod_provincia'] = "class=\"sc-js-input scFormObjectOdd\" style=\"text-align:center;vertical-align:middle;width:160px;\" id=\"id_sc_field_cod_provincia\" name=\"cod_provincia\" size=1";
    $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['select_html']['cod_canton'] = "class=\"sc-js-input scFormObjectOdd\" style=\"text-align:center;vertical-align:middle;width:160px;\" id=\"id_sc_field_cod_canton\" name=\"cod_canton\" size=1";
    $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['select_html']['cod_parroquia'] = "class=\"sc-js-input scFormObjectOdd\" style=\"text-align:center;vertical-align:middle;width:160px;\" id=\"id_sc_field_cod_parroquia\" name=\"cod_parroquia\" size=1";
    $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['select_html']['circuito_economico'] = "class=\"sc-js-input scFormObjectOdd\" style=\"vertical-align:middle;width:280px;\" id=\"id_sc_field_circuito_economico\" name=\"circuito_economico\" size=1";
    $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['select_html']['categoria_actividad_mp'] = "class=\"sc-js-input scFormObjectOdd\" style=\"vertical-align:middle;width:280px;\" id=\"id_sc_field_categoria_actividad_mp\" name=\"categoria_actividad_mp\" size=1";
    $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['select_html']['identificacion_actividad_mp'] = "class=\"sc-js-input scFormObjectOdd\" style=\"vertical-align:middle;width:280px;\" id=\"id_sc_field_identificacion_actividad_mp\" name=\"identificacion_actividad_mp\" size=1";
    $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['select_html']['estado_organizacion'] = "class=\"sc-js-input scFormObjectOdd\" style=\";\" id=\"id_sc_field_estado_organizacion\" name=\"estado_organizacion\" size=1";
    $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['select_html']['legalmente_constituida'] = "class=\"sc-js-input scFormObjectOdd\" style=\";\" id=\"id_sc_field_legalmente_constituida\" name=\"legalmente_constituida\" size=1";
    $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['select_html']['estado_juridico'] = "class=\"sc-js-input scFormObjectOdd\" style=\";\" id=\"id_sc_field_estado_juridico\" name=\"estado_juridico\" size=1";

    if (!defined('SC_SAJAX_LOADED'))
    {
        include_once(dirname(__FILE__) . '/form_u_organizaciones_sajax.php');
        define('SC_SAJAX_LOADED', 'YES');
    }
    if (!class_exists('Services_JSON'))
    {
        include_once(dirname(__FILE__) . '/form_u_organizaciones_json.php');
    }
    $sajax_request_type = "POST";
    sajax_init();
    //$sajax_debug_mode = 1;
    sajax_export("ajax_form_u_organizaciones_validate_ruc");
    sajax_export("ajax_form_u_organizaciones_validate_btnbuscar");
    sajax_export("ajax_form_u_organizaciones_validate_ruc_definitivo");
    sajax_export("ajax_form_u_organizaciones_validate_ruc_provisional");
    sajax_export("ajax_form_u_organizaciones_validate_organizacion");
    sajax_export("ajax_form_u_organizaciones_validate_actividad");
    sajax_export("ajax_form_u_organizaciones_validate_tipo");
    sajax_export("ajax_form_u_organizaciones_validate_forma_organizacion");
    sajax_export("ajax_form_u_organizaciones_validate_estado_org");
    sajax_export("ajax_form_u_organizaciones_validate_cod_zona");
    sajax_export("ajax_form_u_organizaciones_validate_cod_provincia");
    sajax_export("ajax_form_u_organizaciones_validate_cod_canton");
    sajax_export("ajax_form_u_organizaciones_validate_cod_parroquia");
    sajax_export("ajax_form_u_organizaciones_validate_direccion");
    sajax_export("ajax_form_u_organizaciones_validate_telefono");
    sajax_export("ajax_form_u_organizaciones_validate_celular");
    sajax_export("ajax_form_u_organizaciones_validate_email");
    sajax_export("ajax_form_u_organizaciones_validate_circuito_economico");
    sajax_export("ajax_form_u_organizaciones_validate_categoria_actividad_mp");
    sajax_export("ajax_form_u_organizaciones_validate_identificacion_actividad_mp");
    sajax_export("ajax_form_u_organizaciones_validate_producto_servicio");
    sajax_export("ajax_form_u_organizaciones_validate_cedula_representante_legal");
    sajax_export("ajax_form_u_organizaciones_validate_nombre_representante_legal");
    sajax_export("ajax_form_u_organizaciones_validate_estado_organizacion");
    sajax_export("ajax_form_u_organizaciones_validate_num_resolucion");
    sajax_export("ajax_form_u_organizaciones_validate_legalmente_constituida");
    sajax_export("ajax_form_u_organizaciones_validate_estado_juridico");
    sajax_export("ajax_form_u_organizaciones_validate_num_socios");
    sajax_export("ajax_form_u_organizaciones_validate_user");
    sajax_export("ajax_form_u_organizaciones_validate_fecha_registro");
    sajax_export("ajax_form_u_organizaciones_validate_tipo_registro");
    sajax_export("ajax_form_u_organizaciones_refresh_tipo");
    sajax_export("ajax_form_u_organizaciones_refresh_cod_zona");
    sajax_export("ajax_form_u_organizaciones_refresh_cod_provincia");
    sajax_export("ajax_form_u_organizaciones_refresh_cod_canton");
    sajax_export("ajax_form_u_organizaciones_refresh_categoria_actividad_mp");
    sajax_export("ajax_form_u_organizaciones_refresh_estado_organizacion");
    sajax_export("ajax_form_u_organizaciones_event_btnbuscar_onclick");
    sajax_export("ajax_form_u_organizaciones_event_email_onblur");
    sajax_export("ajax_form_u_organizaciones_submit_form");
    sajax_export("ajax_form_u_organizaciones_navigate_form");
    sajax_handle_client_request();

    $inicial_form_u_organizaciones->contr_form_u_organizaciones->controle();
//
    function nm_limpa_str_form_u_organizaciones(&$str)
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

    function ajax_form_u_organizaciones_validate_ruc($ruc, $script_case_init)
    {
        global $inicial_form_u_organizaciones;
        //register_shutdown_function("form_u_organizaciones_pack_ajax_response");
        $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_flag          = true;
        $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_opcao         = 'validate_ruc';
        $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['param'] = array(
                  'ruc' => NM_utf8_urldecode($ruc),
                  'script_case_init' => NM_utf8_urldecode($script_case_init),
                  'buffer_output' => true,
                 );
        if ($inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['param']['buffer_output'])
        {
            ob_start();
        }
        $inicial_form_u_organizaciones->contr_form_u_organizaciones->controle();
        exit;
    } // ajax_validate_ruc

    function ajax_form_u_organizaciones_validate_btnbuscar($btnbuscar, $script_case_init)
    {
        global $inicial_form_u_organizaciones;
        //register_shutdown_function("form_u_organizaciones_pack_ajax_response");
        $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_flag          = true;
        $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_opcao         = 'validate_btnbuscar';
        $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['param'] = array(
                  'btnbuscar' => NM_utf8_urldecode($btnbuscar),
                  'script_case_init' => NM_utf8_urldecode($script_case_init),
                  'buffer_output' => true,
                 );
        if ($inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['param']['buffer_output'])
        {
            ob_start();
        }
        $inicial_form_u_organizaciones->contr_form_u_organizaciones->controle();
        exit;
    } // ajax_validate_btnbuscar

    function ajax_form_u_organizaciones_validate_ruc_definitivo($ruc_definitivo, $script_case_init)
    {
        global $inicial_form_u_organizaciones;
        //register_shutdown_function("form_u_organizaciones_pack_ajax_response");
        $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_flag          = true;
        $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_opcao         = 'validate_ruc_definitivo';
        $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['param'] = array(
                  'ruc_definitivo' => NM_utf8_urldecode($ruc_definitivo),
                  'script_case_init' => NM_utf8_urldecode($script_case_init),
                  'buffer_output' => true,
                 );
        if ($inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['param']['buffer_output'])
        {
            ob_start();
        }
        $inicial_form_u_organizaciones->contr_form_u_organizaciones->controle();
        exit;
    } // ajax_validate_ruc_definitivo

    function ajax_form_u_organizaciones_validate_ruc_provisional($ruc_provisional, $script_case_init)
    {
        global $inicial_form_u_organizaciones;
        //register_shutdown_function("form_u_organizaciones_pack_ajax_response");
        $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_flag          = true;
        $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_opcao         = 'validate_ruc_provisional';
        $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['param'] = array(
                  'ruc_provisional' => NM_utf8_urldecode($ruc_provisional),
                  'script_case_init' => NM_utf8_urldecode($script_case_init),
                  'buffer_output' => true,
                 );
        if ($inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['param']['buffer_output'])
        {
            ob_start();
        }
        $inicial_form_u_organizaciones->contr_form_u_organizaciones->controle();
        exit;
    } // ajax_validate_ruc_provisional

    function ajax_form_u_organizaciones_validate_organizacion($organizacion, $script_case_init)
    {
        global $inicial_form_u_organizaciones;
        //register_shutdown_function("form_u_organizaciones_pack_ajax_response");
        $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_flag          = true;
        $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_opcao         = 'validate_organizacion';
        $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['param'] = array(
                  'organizacion' => NM_utf8_urldecode($organizacion),
                  'script_case_init' => NM_utf8_urldecode($script_case_init),
                  'buffer_output' => true,
                 );
        if ($inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['param']['buffer_output'])
        {
            ob_start();
        }
        $inicial_form_u_organizaciones->contr_form_u_organizaciones->controle();
        exit;
    } // ajax_validate_organizacion

    function ajax_form_u_organizaciones_validate_actividad($actividad, $script_case_init)
    {
        global $inicial_form_u_organizaciones;
        //register_shutdown_function("form_u_organizaciones_pack_ajax_response");
        $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_flag          = true;
        $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_opcao         = 'validate_actividad';
        $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['param'] = array(
                  'actividad' => NM_utf8_urldecode($actividad),
                  'script_case_init' => NM_utf8_urldecode($script_case_init),
                  'buffer_output' => true,
                 );
        if ($inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['param']['buffer_output'])
        {
            ob_start();
        }
        $inicial_form_u_organizaciones->contr_form_u_organizaciones->controle();
        exit;
    } // ajax_validate_actividad

    function ajax_form_u_organizaciones_validate_tipo($tipo, $script_case_init)
    {
        global $inicial_form_u_organizaciones;
        //register_shutdown_function("form_u_organizaciones_pack_ajax_response");
        $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_flag          = true;
        $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_opcao         = 'validate_tipo';
        $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['param'] = array(
                  'tipo' => NM_utf8_urldecode($tipo),
                  'script_case_init' => NM_utf8_urldecode($script_case_init),
                  'buffer_output' => true,
                 );
        if ($inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['param']['buffer_output'])
        {
            ob_start();
        }
        $inicial_form_u_organizaciones->contr_form_u_organizaciones->controle();
        exit;
    } // ajax_validate_tipo

    function ajax_form_u_organizaciones_validate_forma_organizacion($forma_organizacion, $script_case_init)
    {
        global $inicial_form_u_organizaciones;
        //register_shutdown_function("form_u_organizaciones_pack_ajax_response");
        $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_flag          = true;
        $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_opcao         = 'validate_forma_organizacion';
        $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['param'] = array(
                  'forma_organizacion' => NM_utf8_urldecode($forma_organizacion),
                  'script_case_init' => NM_utf8_urldecode($script_case_init),
                  'buffer_output' => true,
                 );
        if ($inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['param']['buffer_output'])
        {
            ob_start();
        }
        $inicial_form_u_organizaciones->contr_form_u_organizaciones->controle();
        exit;
    } // ajax_validate_forma_organizacion

    function ajax_form_u_organizaciones_validate_estado_org($estado_org, $script_case_init)
    {
        global $inicial_form_u_organizaciones;
        //register_shutdown_function("form_u_organizaciones_pack_ajax_response");
        $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_flag          = true;
        $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_opcao         = 'validate_estado_org';
        $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['param'] = array(
                  'estado_org' => NM_utf8_urldecode($estado_org),
                  'script_case_init' => NM_utf8_urldecode($script_case_init),
                  'buffer_output' => true,
                 );
        if ($inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['param']['buffer_output'])
        {
            ob_start();
        }
        $inicial_form_u_organizaciones->contr_form_u_organizaciones->controle();
        exit;
    } // ajax_validate_estado_org

    function ajax_form_u_organizaciones_validate_cod_zona($cod_zona, $script_case_init)
    {
        global $inicial_form_u_organizaciones;
        //register_shutdown_function("form_u_organizaciones_pack_ajax_response");
        $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_flag          = true;
        $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_opcao         = 'validate_cod_zona';
        $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['param'] = array(
                  'cod_zona' => NM_utf8_urldecode($cod_zona),
                  'script_case_init' => NM_utf8_urldecode($script_case_init),
                  'buffer_output' => true,
                 );
        if ($inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['param']['buffer_output'])
        {
            ob_start();
        }
        $inicial_form_u_organizaciones->contr_form_u_organizaciones->controle();
        exit;
    } // ajax_validate_cod_zona

    function ajax_form_u_organizaciones_validate_cod_provincia($cod_provincia, $script_case_init)
    {
        global $inicial_form_u_organizaciones;
        //register_shutdown_function("form_u_organizaciones_pack_ajax_response");
        $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_flag          = true;
        $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_opcao         = 'validate_cod_provincia';
        $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['param'] = array(
                  'cod_provincia' => NM_utf8_urldecode($cod_provincia),
                  'script_case_init' => NM_utf8_urldecode($script_case_init),
                  'buffer_output' => true,
                 );
        if ($inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['param']['buffer_output'])
        {
            ob_start();
        }
        $inicial_form_u_organizaciones->contr_form_u_organizaciones->controle();
        exit;
    } // ajax_validate_cod_provincia

    function ajax_form_u_organizaciones_validate_cod_canton($cod_canton, $script_case_init)
    {
        global $inicial_form_u_organizaciones;
        //register_shutdown_function("form_u_organizaciones_pack_ajax_response");
        $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_flag          = true;
        $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_opcao         = 'validate_cod_canton';
        $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['param'] = array(
                  'cod_canton' => NM_utf8_urldecode($cod_canton),
                  'script_case_init' => NM_utf8_urldecode($script_case_init),
                  'buffer_output' => true,
                 );
        if ($inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['param']['buffer_output'])
        {
            ob_start();
        }
        $inicial_form_u_organizaciones->contr_form_u_organizaciones->controle();
        exit;
    } // ajax_validate_cod_canton

    function ajax_form_u_organizaciones_validate_cod_parroquia($cod_parroquia, $script_case_init)
    {
        global $inicial_form_u_organizaciones;
        //register_shutdown_function("form_u_organizaciones_pack_ajax_response");
        $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_flag          = true;
        $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_opcao         = 'validate_cod_parroquia';
        $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['param'] = array(
                  'cod_parroquia' => NM_utf8_urldecode($cod_parroquia),
                  'script_case_init' => NM_utf8_urldecode($script_case_init),
                  'buffer_output' => true,
                 );
        if ($inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['param']['buffer_output'])
        {
            ob_start();
        }
        $inicial_form_u_organizaciones->contr_form_u_organizaciones->controle();
        exit;
    } // ajax_validate_cod_parroquia

    function ajax_form_u_organizaciones_validate_direccion($direccion, $script_case_init)
    {
        global $inicial_form_u_organizaciones;
        //register_shutdown_function("form_u_organizaciones_pack_ajax_response");
        $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_flag          = true;
        $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_opcao         = 'validate_direccion';
        $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['param'] = array(
                  'direccion' => NM_utf8_urldecode($direccion),
                  'script_case_init' => NM_utf8_urldecode($script_case_init),
                  'buffer_output' => true,
                 );
        if ($inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['param']['buffer_output'])
        {
            ob_start();
        }
        $inicial_form_u_organizaciones->contr_form_u_organizaciones->controle();
        exit;
    } // ajax_validate_direccion

    function ajax_form_u_organizaciones_validate_telefono($telefono, $script_case_init)
    {
        global $inicial_form_u_organizaciones;
        //register_shutdown_function("form_u_organizaciones_pack_ajax_response");
        $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_flag          = true;
        $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_opcao         = 'validate_telefono';
        $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['param'] = array(
                  'telefono' => NM_utf8_urldecode($telefono),
                  'script_case_init' => NM_utf8_urldecode($script_case_init),
                  'buffer_output' => true,
                 );
        if ($inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['param']['buffer_output'])
        {
            ob_start();
        }
        $inicial_form_u_organizaciones->contr_form_u_organizaciones->controle();
        exit;
    } // ajax_validate_telefono

    function ajax_form_u_organizaciones_validate_celular($celular, $script_case_init)
    {
        global $inicial_form_u_organizaciones;
        //register_shutdown_function("form_u_organizaciones_pack_ajax_response");
        $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_flag          = true;
        $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_opcao         = 'validate_celular';
        $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['param'] = array(
                  'celular' => NM_utf8_urldecode($celular),
                  'script_case_init' => NM_utf8_urldecode($script_case_init),
                  'buffer_output' => true,
                 );
        if ($inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['param']['buffer_output'])
        {
            ob_start();
        }
        $inicial_form_u_organizaciones->contr_form_u_organizaciones->controle();
        exit;
    } // ajax_validate_celular

    function ajax_form_u_organizaciones_validate_email($email, $script_case_init)
    {
        global $inicial_form_u_organizaciones;
        //register_shutdown_function("form_u_organizaciones_pack_ajax_response");
        $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_flag          = true;
        $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_opcao         = 'validate_email';
        $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['param'] = array(
                  'email' => NM_utf8_urldecode($email),
                  'script_case_init' => NM_utf8_urldecode($script_case_init),
                  'buffer_output' => true,
                 );
        if ($inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['param']['buffer_output'])
        {
            ob_start();
        }
        $inicial_form_u_organizaciones->contr_form_u_organizaciones->controle();
        exit;
    } // ajax_validate_email

    function ajax_form_u_organizaciones_validate_circuito_economico($circuito_economico, $script_case_init)
    {
        global $inicial_form_u_organizaciones;
        //register_shutdown_function("form_u_organizaciones_pack_ajax_response");
        $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_flag          = true;
        $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_opcao         = 'validate_circuito_economico';
        $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['param'] = array(
                  'circuito_economico' => NM_utf8_urldecode($circuito_economico),
                  'script_case_init' => NM_utf8_urldecode($script_case_init),
                  'buffer_output' => true,
                 );
        if ($inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['param']['buffer_output'])
        {
            ob_start();
        }
        $inicial_form_u_organizaciones->contr_form_u_organizaciones->controle();
        exit;
    } // ajax_validate_circuito_economico

    function ajax_form_u_organizaciones_validate_categoria_actividad_mp($categoria_actividad_mp, $script_case_init)
    {
        global $inicial_form_u_organizaciones;
        //register_shutdown_function("form_u_organizaciones_pack_ajax_response");
        $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_flag          = true;
        $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_opcao         = 'validate_categoria_actividad_mp';
        $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['param'] = array(
                  'categoria_actividad_mp' => NM_utf8_urldecode($categoria_actividad_mp),
                  'script_case_init' => NM_utf8_urldecode($script_case_init),
                  'buffer_output' => true,
                 );
        if ($inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['param']['buffer_output'])
        {
            ob_start();
        }
        $inicial_form_u_organizaciones->contr_form_u_organizaciones->controle();
        exit;
    } // ajax_validate_categoria_actividad_mp

    function ajax_form_u_organizaciones_validate_identificacion_actividad_mp($identificacion_actividad_mp, $script_case_init)
    {
        global $inicial_form_u_organizaciones;
        //register_shutdown_function("form_u_organizaciones_pack_ajax_response");
        $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_flag          = true;
        $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_opcao         = 'validate_identificacion_actividad_mp';
        $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['param'] = array(
                  'identificacion_actividad_mp' => NM_utf8_urldecode($identificacion_actividad_mp),
                  'script_case_init' => NM_utf8_urldecode($script_case_init),
                  'buffer_output' => true,
                 );
        if ($inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['param']['buffer_output'])
        {
            ob_start();
        }
        $inicial_form_u_organizaciones->contr_form_u_organizaciones->controle();
        exit;
    } // ajax_validate_identificacion_actividad_mp

    function ajax_form_u_organizaciones_validate_producto_servicio($producto_servicio, $script_case_init)
    {
        global $inicial_form_u_organizaciones;
        //register_shutdown_function("form_u_organizaciones_pack_ajax_response");
        $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_flag          = true;
        $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_opcao         = 'validate_producto_servicio';
        $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['param'] = array(
                  'producto_servicio' => NM_utf8_urldecode($producto_servicio),
                  'script_case_init' => NM_utf8_urldecode($script_case_init),
                  'buffer_output' => true,
                 );
        if ($inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['param']['buffer_output'])
        {
            ob_start();
        }
        $inicial_form_u_organizaciones->contr_form_u_organizaciones->controle();
        exit;
    } // ajax_validate_producto_servicio

    function ajax_form_u_organizaciones_validate_cedula_representante_legal($cedula_representante_legal, $script_case_init)
    {
        global $inicial_form_u_organizaciones;
        //register_shutdown_function("form_u_organizaciones_pack_ajax_response");
        $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_flag          = true;
        $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_opcao         = 'validate_cedula_representante_legal';
        $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['param'] = array(
                  'cedula_representante_legal' => NM_utf8_urldecode($cedula_representante_legal),
                  'script_case_init' => NM_utf8_urldecode($script_case_init),
                  'buffer_output' => true,
                 );
        if ($inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['param']['buffer_output'])
        {
            ob_start();
        }
        $inicial_form_u_organizaciones->contr_form_u_organizaciones->controle();
        exit;
    } // ajax_validate_cedula_representante_legal

    function ajax_form_u_organizaciones_validate_nombre_representante_legal($nombre_representante_legal, $script_case_init)
    {
        global $inicial_form_u_organizaciones;
        //register_shutdown_function("form_u_organizaciones_pack_ajax_response");
        $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_flag          = true;
        $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_opcao         = 'validate_nombre_representante_legal';
        $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['param'] = array(
                  'nombre_representante_legal' => NM_utf8_urldecode($nombre_representante_legal),
                  'script_case_init' => NM_utf8_urldecode($script_case_init),
                  'buffer_output' => true,
                 );
        if ($inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['param']['buffer_output'])
        {
            ob_start();
        }
        $inicial_form_u_organizaciones->contr_form_u_organizaciones->controle();
        exit;
    } // ajax_validate_nombre_representante_legal

    function ajax_form_u_organizaciones_validate_estado_organizacion($estado_organizacion, $script_case_init)
    {
        global $inicial_form_u_organizaciones;
        //register_shutdown_function("form_u_organizaciones_pack_ajax_response");
        $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_flag          = true;
        $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_opcao         = 'validate_estado_organizacion';
        $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['param'] = array(
                  'estado_organizacion' => NM_utf8_urldecode($estado_organizacion),
                  'script_case_init' => NM_utf8_urldecode($script_case_init),
                  'buffer_output' => true,
                 );
        if ($inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['param']['buffer_output'])
        {
            ob_start();
        }
        $inicial_form_u_organizaciones->contr_form_u_organizaciones->controle();
        exit;
    } // ajax_validate_estado_organizacion

    function ajax_form_u_organizaciones_validate_num_resolucion($num_resolucion, $script_case_init)
    {
        global $inicial_form_u_organizaciones;
        //register_shutdown_function("form_u_organizaciones_pack_ajax_response");
        $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_flag          = true;
        $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_opcao         = 'validate_num_resolucion';
        $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['param'] = array(
                  'num_resolucion' => NM_utf8_urldecode($num_resolucion),
                  'script_case_init' => NM_utf8_urldecode($script_case_init),
                  'buffer_output' => true,
                 );
        if ($inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['param']['buffer_output'])
        {
            ob_start();
        }
        $inicial_form_u_organizaciones->contr_form_u_organizaciones->controle();
        exit;
    } // ajax_validate_num_resolucion

    function ajax_form_u_organizaciones_validate_legalmente_constituida($legalmente_constituida, $script_case_init)
    {
        global $inicial_form_u_organizaciones;
        //register_shutdown_function("form_u_organizaciones_pack_ajax_response");
        $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_flag          = true;
        $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_opcao         = 'validate_legalmente_constituida';
        $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['param'] = array(
                  'legalmente_constituida' => NM_utf8_urldecode($legalmente_constituida),
                  'script_case_init' => NM_utf8_urldecode($script_case_init),
                  'buffer_output' => true,
                 );
        if ($inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['param']['buffer_output'])
        {
            ob_start();
        }
        $inicial_form_u_organizaciones->contr_form_u_organizaciones->controle();
        exit;
    } // ajax_validate_legalmente_constituida

    function ajax_form_u_organizaciones_validate_estado_juridico($estado_juridico, $script_case_init)
    {
        global $inicial_form_u_organizaciones;
        //register_shutdown_function("form_u_organizaciones_pack_ajax_response");
        $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_flag          = true;
        $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_opcao         = 'validate_estado_juridico';
        $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['param'] = array(
                  'estado_juridico' => NM_utf8_urldecode($estado_juridico),
                  'script_case_init' => NM_utf8_urldecode($script_case_init),
                  'buffer_output' => true,
                 );
        if ($inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['param']['buffer_output'])
        {
            ob_start();
        }
        $inicial_form_u_organizaciones->contr_form_u_organizaciones->controle();
        exit;
    } // ajax_validate_estado_juridico

    function ajax_form_u_organizaciones_validate_num_socios($num_socios, $script_case_init)
    {
        global $inicial_form_u_organizaciones;
        //register_shutdown_function("form_u_organizaciones_pack_ajax_response");
        $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_flag          = true;
        $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_opcao         = 'validate_num_socios';
        $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['param'] = array(
                  'num_socios' => NM_utf8_urldecode($num_socios),
                  'script_case_init' => NM_utf8_urldecode($script_case_init),
                  'buffer_output' => true,
                 );
        if ($inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['param']['buffer_output'])
        {
            ob_start();
        }
        $inicial_form_u_organizaciones->contr_form_u_organizaciones->controle();
        exit;
    } // ajax_validate_num_socios

    function ajax_form_u_organizaciones_validate_user($user, $script_case_init)
    {
        global $inicial_form_u_organizaciones;
        //register_shutdown_function("form_u_organizaciones_pack_ajax_response");
        $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_flag          = true;
        $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_opcao         = 'validate_user';
        $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['param'] = array(
                  'user' => NM_utf8_urldecode($user),
                  'script_case_init' => NM_utf8_urldecode($script_case_init),
                  'buffer_output' => true,
                 );
        if ($inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['param']['buffer_output'])
        {
            ob_start();
        }
        $inicial_form_u_organizaciones->contr_form_u_organizaciones->controle();
        exit;
    } // ajax_validate_user

    function ajax_form_u_organizaciones_validate_fecha_registro($fecha_registro, $script_case_init)
    {
        global $inicial_form_u_organizaciones;
        //register_shutdown_function("form_u_organizaciones_pack_ajax_response");
        $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_flag          = true;
        $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_opcao         = 'validate_fecha_registro';
        $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['param'] = array(
                  'fecha_registro' => NM_utf8_urldecode($fecha_registro),
                  'script_case_init' => NM_utf8_urldecode($script_case_init),
                  'buffer_output' => true,
                 );
        if ($inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['param']['buffer_output'])
        {
            ob_start();
        }
        $inicial_form_u_organizaciones->contr_form_u_organizaciones->controle();
        exit;
    } // ajax_validate_fecha_registro

    function ajax_form_u_organizaciones_validate_tipo_registro($tipo_registro, $script_case_init)
    {
        global $inicial_form_u_organizaciones;
        //register_shutdown_function("form_u_organizaciones_pack_ajax_response");
        $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_flag          = true;
        $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_opcao         = 'validate_tipo_registro';
        $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['param'] = array(
                  'tipo_registro' => NM_utf8_urldecode($tipo_registro),
                  'script_case_init' => NM_utf8_urldecode($script_case_init),
                  'buffer_output' => true,
                 );
        if ($inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['param']['buffer_output'])
        {
            ob_start();
        }
        $inicial_form_u_organizaciones->contr_form_u_organizaciones->controle();
        exit;
    } // ajax_validate_tipo_registro

    function ajax_form_u_organizaciones_refresh_tipo($tipo, $nmgp_refresh_fields, $script_case_init)
    {
        global $inicial_form_u_organizaciones;
        //register_shutdown_function("form_u_organizaciones_pack_ajax_response");
        $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_flag          = true;
        $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_opcao         = 'refresh_tipo';
        $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['param'] = array(
                  'tipo' => NM_utf8_urldecode($tipo),
                  'nmgp_refresh_fields' => NM_utf8_urldecode($nmgp_refresh_fields),
                  'script_case_init' => NM_utf8_urldecode($script_case_init),
                  'buffer_output' => true,
                 );
        if ($inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['param']['buffer_output'])
        {
            ob_start();
        }
        $inicial_form_u_organizaciones->contr_form_u_organizaciones->controle();
        exit;
    } // ajax_refresh_tipo

    function ajax_form_u_organizaciones_refresh_cod_zona($cod_zona, $nmgp_refresh_fields, $script_case_init)
    {
        global $inicial_form_u_organizaciones;
        //register_shutdown_function("form_u_organizaciones_pack_ajax_response");
        $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_flag          = true;
        $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_opcao         = 'refresh_cod_zona';
        $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['param'] = array(
                  'cod_zona' => NM_utf8_urldecode($cod_zona),
                  'nmgp_refresh_fields' => NM_utf8_urldecode($nmgp_refresh_fields),
                  'script_case_init' => NM_utf8_urldecode($script_case_init),
                  'buffer_output' => true,
                 );
        if ($inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['param']['buffer_output'])
        {
            ob_start();
        }
        $inicial_form_u_organizaciones->contr_form_u_organizaciones->controle();
        exit;
    } // ajax_refresh_cod_zona

    function ajax_form_u_organizaciones_refresh_cod_provincia($cod_provincia, $nmgp_refresh_fields, $script_case_init)
    {
        global $inicial_form_u_organizaciones;
        //register_shutdown_function("form_u_organizaciones_pack_ajax_response");
        $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_flag          = true;
        $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_opcao         = 'refresh_cod_provincia';
        $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['param'] = array(
                  'cod_provincia' => NM_utf8_urldecode($cod_provincia),
                  'nmgp_refresh_fields' => NM_utf8_urldecode($nmgp_refresh_fields),
                  'script_case_init' => NM_utf8_urldecode($script_case_init),
                  'buffer_output' => true,
                 );
        if ($inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['param']['buffer_output'])
        {
            ob_start();
        }
        $inicial_form_u_organizaciones->contr_form_u_organizaciones->controle();
        exit;
    } // ajax_refresh_cod_provincia

    function ajax_form_u_organizaciones_refresh_cod_canton($cod_canton, $cod_provincia, $nmgp_refresh_fields, $script_case_init)
    {
        global $inicial_form_u_organizaciones;
        //register_shutdown_function("form_u_organizaciones_pack_ajax_response");
        $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_flag          = true;
        $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_opcao         = 'refresh_cod_canton';
        $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['param'] = array(
                  'cod_canton' => NM_utf8_urldecode($cod_canton),
                  'cod_provincia' => NM_utf8_urldecode($cod_provincia),
                  'nmgp_refresh_fields' => NM_utf8_urldecode($nmgp_refresh_fields),
                  'script_case_init' => NM_utf8_urldecode($script_case_init),
                  'buffer_output' => true,
                 );
        if ($inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['param']['buffer_output'])
        {
            ob_start();
        }
        $inicial_form_u_organizaciones->contr_form_u_organizaciones->controle();
        exit;
    } // ajax_refresh_cod_canton

    function ajax_form_u_organizaciones_refresh_categoria_actividad_mp($categoria_actividad_mp, $nmgp_refresh_fields, $script_case_init)
    {
        global $inicial_form_u_organizaciones;
        //register_shutdown_function("form_u_organizaciones_pack_ajax_response");
        $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_flag          = true;
        $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_opcao         = 'refresh_categoria_actividad_mp';
        $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['param'] = array(
                  'categoria_actividad_mp' => NM_utf8_urldecode($categoria_actividad_mp),
                  'nmgp_refresh_fields' => NM_utf8_urldecode($nmgp_refresh_fields),
                  'script_case_init' => NM_utf8_urldecode($script_case_init),
                  'buffer_output' => true,
                 );
        if ($inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['param']['buffer_output'])
        {
            ob_start();
        }
        $inicial_form_u_organizaciones->contr_form_u_organizaciones->controle();
        exit;
    } // ajax_refresh_categoria_actividad_mp

    function ajax_form_u_organizaciones_refresh_estado_organizacion($estado_organizacion, $nmgp_refresh_fields, $script_case_init)
    {
        global $inicial_form_u_organizaciones;
        //register_shutdown_function("form_u_organizaciones_pack_ajax_response");
        $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_flag          = true;
        $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_opcao         = 'refresh_estado_organizacion';
        $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['param'] = array(
                  'estado_organizacion' => NM_utf8_urldecode($estado_organizacion),
                  'nmgp_refresh_fields' => NM_utf8_urldecode($nmgp_refresh_fields),
                  'script_case_init' => NM_utf8_urldecode($script_case_init),
                  'buffer_output' => true,
                 );
        if ($inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['param']['buffer_output'])
        {
            ob_start();
        }
        $inicial_form_u_organizaciones->contr_form_u_organizaciones->controle();
        exit;
    } // ajax_refresh_estado_organizacion

    function ajax_form_u_organizaciones_event_btnbuscar_onclick($ruc, $num_socios, $cedula_representante_legal, $nombre_representante_legal, $tipo_registro, $estado_org, $ruc_definitivo, $ruc_provisional, $organizacion, $cod_zona, $cod_provincia, $cod_canton, $cod_parroquia, $direccion, $email, $telefono, $num_resolucion, $tipo, $legalmente_constituida, $estado_organizacion, $forma_organizacion, $actividad, $script_case_init)
    {
        global $inicial_form_u_organizaciones;
        //register_shutdown_function("form_u_organizaciones_pack_ajax_response");
        $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_flag          = true;
        $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_opcao         = 'event_btnbuscar_onclick';
        $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['param'] = array(
                  'ruc' => NM_utf8_urldecode($ruc),
                  'num_socios' => NM_utf8_urldecode($num_socios),
                  'cedula_representante_legal' => NM_utf8_urldecode($cedula_representante_legal),
                  'nombre_representante_legal' => NM_utf8_urldecode($nombre_representante_legal),
                  'tipo_registro' => NM_utf8_urldecode($tipo_registro),
                  'estado_org' => NM_utf8_urldecode($estado_org),
                  'ruc_definitivo' => NM_utf8_urldecode($ruc_definitivo),
                  'ruc_provisional' => NM_utf8_urldecode($ruc_provisional),
                  'organizacion' => NM_utf8_urldecode($organizacion),
                  'cod_zona' => NM_utf8_urldecode($cod_zona),
                  'cod_provincia' => NM_utf8_urldecode($cod_provincia),
                  'cod_canton' => NM_utf8_urldecode($cod_canton),
                  'cod_parroquia' => NM_utf8_urldecode($cod_parroquia),
                  'direccion' => NM_utf8_urldecode($direccion),
                  'email' => NM_utf8_urldecode($email),
                  'telefono' => NM_utf8_urldecode($telefono),
                  'num_resolucion' => NM_utf8_urldecode($num_resolucion),
                  'tipo' => NM_utf8_urldecode($tipo),
                  'legalmente_constituida' => NM_utf8_urldecode($legalmente_constituida),
                  'estado_organizacion' => NM_utf8_urldecode($estado_organizacion),
                  'forma_organizacion' => NM_utf8_urldecode($forma_organizacion),
                  'actividad' => NM_utf8_urldecode($actividad),
                  'script_case_init' => NM_utf8_urldecode($script_case_init),
                  'buffer_output' => true,
                 );
        if ($inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['param']['buffer_output'])
        {
            ob_start();
        }
        $inicial_form_u_organizaciones->contr_form_u_organizaciones->controle();
        exit;
    } // ajax_event_btnbuscar_onclick

    function ajax_form_u_organizaciones_event_email_onblur($email, $script_case_init)
    {
        global $inicial_form_u_organizaciones;
        //register_shutdown_function("form_u_organizaciones_pack_ajax_response");
        $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_flag          = true;
        $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_opcao         = 'event_email_onblur';
        $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['param'] = array(
                  'email' => NM_utf8_urldecode($email),
                  'script_case_init' => NM_utf8_urldecode($script_case_init),
                  'buffer_output' => true,
                 );
        if ($inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['param']['buffer_output'])
        {
            ob_start();
        }
        $inicial_form_u_organizaciones->contr_form_u_organizaciones->controle();
        exit;
    } // ajax_event_email_onblur

    function ajax_form_u_organizaciones_submit_form($ruc, $btnbuscar, $ruc_definitivo, $ruc_provisional, $organizacion, $actividad, $tipo, $forma_organizacion, $estado_org, $cod_zona, $cod_provincia, $cod_canton, $cod_parroquia, $direccion, $telefono, $celular, $email, $circuito_economico, $categoria_actividad_mp, $identificacion_actividad_mp, $producto_servicio, $cedula_representante_legal, $nombre_representante_legal, $estado_organizacion, $num_resolucion, $legalmente_constituida, $estado_juridico, $num_socios, $user, $fecha_registro, $tipo_registro, $nm_form_submit, $nmgp_url_saida, $nmgp_opcao, $nmgp_ancora, $nmgp_num_form, $nmgp_parms, $script_case_init)
    {
        global $inicial_form_u_organizaciones;
        //register_shutdown_function("form_u_organizaciones_pack_ajax_response");
        $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_flag          = true;
        $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_opcao         = 'submit_form';
        $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['param'] = array(
                  'ruc' => NM_utf8_urldecode($ruc),
                  'btnbuscar' => NM_utf8_urldecode($btnbuscar),
                  'ruc_definitivo' => NM_utf8_urldecode($ruc_definitivo),
                  'ruc_provisional' => NM_utf8_urldecode($ruc_provisional),
                  'organizacion' => NM_utf8_urldecode($organizacion),
                  'actividad' => NM_utf8_urldecode($actividad),
                  'tipo' => NM_utf8_urldecode($tipo),
                  'forma_organizacion' => NM_utf8_urldecode($forma_organizacion),
                  'estado_org' => NM_utf8_urldecode($estado_org),
                  'cod_zona' => NM_utf8_urldecode($cod_zona),
                  'cod_provincia' => NM_utf8_urldecode($cod_provincia),
                  'cod_canton' => NM_utf8_urldecode($cod_canton),
                  'cod_parroquia' => NM_utf8_urldecode($cod_parroquia),
                  'direccion' => NM_utf8_urldecode($direccion),
                  'telefono' => NM_utf8_urldecode($telefono),
                  'celular' => NM_utf8_urldecode($celular),
                  'email' => NM_utf8_urldecode($email),
                  'circuito_economico' => NM_utf8_urldecode($circuito_economico),
                  'categoria_actividad_mp' => NM_utf8_urldecode($categoria_actividad_mp),
                  'identificacion_actividad_mp' => NM_utf8_urldecode($identificacion_actividad_mp),
                  'producto_servicio' => NM_utf8_urldecode($producto_servicio),
                  'cedula_representante_legal' => NM_utf8_urldecode($cedula_representante_legal),
                  'nombre_representante_legal' => NM_utf8_urldecode($nombre_representante_legal),
                  'estado_organizacion' => NM_utf8_urldecode($estado_organizacion),
                  'num_resolucion' => NM_utf8_urldecode($num_resolucion),
                  'legalmente_constituida' => NM_utf8_urldecode($legalmente_constituida),
                  'estado_juridico' => NM_utf8_urldecode($estado_juridico),
                  'num_socios' => NM_utf8_urldecode($num_socios),
                  'user' => NM_utf8_urldecode($user),
                  'fecha_registro' => NM_utf8_urldecode($fecha_registro),
                  'tipo_registro' => NM_utf8_urldecode($tipo_registro),
                  'nm_form_submit' => NM_utf8_urldecode($nm_form_submit),
                  'nmgp_url_saida' => NM_utf8_urldecode($nmgp_url_saida),
                  'nmgp_opcao' => NM_utf8_urldecode($nmgp_opcao),
                  'nmgp_ancora' => NM_utf8_urldecode($nmgp_ancora),
                  'nmgp_num_form' => NM_utf8_urldecode($nmgp_num_form),
                  'nmgp_parms' => NM_utf8_urldecode($nmgp_parms),
                  'script_case_init' => NM_utf8_urldecode($script_case_init),
                  'buffer_output' => true,
                 );
        if ($inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['param']['buffer_output'])
        {
            ob_start();
        }
        $inicial_form_u_organizaciones->contr_form_u_organizaciones->controle();
        exit;
    } // ajax_submit_form

    function ajax_form_u_organizaciones_navigate_form($cod_u_organizaciones, $nm_form_submit, $nmgp_opcao, $nmgp_ordem, $script_case_init)
    {
        global $inicial_form_u_organizaciones;
        //register_shutdown_function("form_u_organizaciones_pack_ajax_response");
        $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_flag          = true;
        $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_opcao         = 'navigate_form';
        $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['param'] = array(
                  'cod_u_organizaciones' => NM_utf8_urldecode($cod_u_organizaciones),
                  'nm_form_submit' => NM_utf8_urldecode($nm_form_submit),
                  'nmgp_opcao' => NM_utf8_urldecode($nmgp_opcao),
                  'nmgp_ordem' => NM_utf8_urldecode($nmgp_ordem),
                  'script_case_init' => NM_utf8_urldecode($script_case_init),
                  'buffer_output' => true,
                 );
        if ($inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['param']['buffer_output'])
        {
            ob_start();
        }
        $inicial_form_u_organizaciones->contr_form_u_organizaciones->controle();
        exit;
    } // ajax_navigate_form


   function form_u_organizaciones_pack_ajax_response()
   {
      global $inicial_form_u_organizaciones;
      $aResp = array();
      if ($inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['calendarReload'])
      {
         $aResp['result'] = 'CALENDARRELOAD';
      }
      elseif ('' != $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['autoComp'])
      {
         $aResp['result'] = 'AUTOCOMP';
      }
//mestre_detalhe
      elseif (!empty($inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['newline']))
      {
         $aResp['result'] = 'NEWLINE';
         ob_end_clean();
      }
      elseif (!empty($inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['tableRefresh']))
      {
         $aResp['result'] = 'TABLEREFRESH';
      }
//-----
      elseif (!empty($inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['errList']))
      {
         $aResp['result'] = 'ERROR';
      }
      elseif (!empty($inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['fldList']))
      {
         $aResp['result'] = 'SET';
      }
      else
      {
         $aResp['result'] = 'OK';
      }
      if ('AUTOCOMP' == $aResp['result'])
      {
         $aResp = $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['autoComp'];
      }
//mestre_detalhe
      elseif ('NEWLINE' == $aResp['result'])
      {
         $aResp = $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['newline'];
      }
      else
//-----
      {
         if ('CALENDARRELOAD' == $aResp['result'])
         {
            form_u_organizaciones_pack_calendar_reload($aResp);
         }
         elseif ('ERROR' == $aResp['result'])
         {
            form_u_organizaciones_pack_ajax_errors($aResp);
         }
         elseif ('SET' == $aResp['result'])
         {
            form_u_organizaciones_pack_ajax_set_fields($aResp);
         }
         elseif ('TABLEREFRESH' == $aResp['result'])
         {
            form_u_organizaciones_pack_ajax_set_fields($aResp);
            $aResp['tableRefresh'] = form_u_organizaciones_pack_protect_string($inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['tableRefresh']);
         }
         if ('OK' == $aResp['result'] || 'SET' == $aResp['result'])
         {
            form_u_organizaciones_pack_ajax_ok($aResp);
         }
         if (isset($inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['focus']) && '' != $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['focus'])
         {
            $aResp['setFocus'] = $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['focus'];
         }
         if (isset($inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['closeLine']) && '' != $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['closeLine'])
         {
            $aResp['closeLine'] = $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['closeLine'];
         }
         else
         {
            $aResp['closeLine'] = 'N';
         }
         if (isset($inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['clearUpload']) && '' != $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['clearUpload'])
         {
            $aResp['clearUpload'] = $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['clearUpload'];
         }
         else
         {
            $aResp['clearUpload'] = 'N';
         }
         if (isset($inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['masterValue']) && '' != $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['masterValue'])
         {
            form_u_organizaciones_pack_master_value($aResp);
         }
         if (isset($inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['ajaxAlert']) && '' != $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['ajaxAlert'])
         {
            form_u_organizaciones_pack_ajax_alert($aResp);
         }
         if (isset($inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['ajaxMessage']) && '' != $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['ajaxMessage'])
         {
            form_u_organizaciones_pack_ajax_message($aResp);
         }
         if (isset($inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['ajaxJavascript']) && '' != $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['ajaxJavascript'])
         {
            form_u_organizaciones_pack_ajax_javascript($aResp);
         }
         if (isset($inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['redir']) && !empty($inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['redir']))
         {
            form_u_organizaciones_pack_ajax_redir($aResp);
         }
         if (isset($inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['redirExit']) && !empty($inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['redirExit']))
         {
            form_u_organizaciones_pack_ajax_redir_exit($aResp);
         }
         if (isset($inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['blockDisplay']) && !empty($inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['blockDisplay']))
         {
            form_u_organizaciones_pack_ajax_block_display($aResp);
         }
         if (isset($inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['fieldDisplay']) && !empty($inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['fieldDisplay']))
         {
            form_u_organizaciones_pack_ajax_field_display($aResp);
         }
         if (isset($inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['buttonDisplay']) && !empty($inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['buttonDisplay']))
         {
            $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['buttonDisplay'] = $inicial_form_u_organizaciones->contr_form_u_organizaciones->nmgp_botoes;
            form_u_organizaciones_pack_ajax_button_display($aResp);
         }
         if (isset($inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['fieldLabel']) && !empty($inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['fieldLabel']))
         {
            form_u_organizaciones_pack_ajax_field_label($aResp);
         }
         if (isset($inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['readOnly']) && !empty($inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['readOnly']))
         {
            form_u_organizaciones_pack_ajax_readonly($aResp);
         }
         if (isset($inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['navStatus']) && !empty($inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['navStatus']))
         {
            form_u_organizaciones_pack_ajax_nav_status($aResp);
         }
         if (isset($inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['navSummary']) && !empty($inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['navSummary']))
         {
            form_u_organizaciones_pack_ajax_nav_Summary($aResp);
         }
         if (isset($inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['navPage']))
         {
            form_u_organizaciones_pack_ajax_navPage($aResp);
         }
         if (isset($inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['btnVars']) && !empty($inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['btnVars']))
         {
            form_u_organizaciones_pack_ajax_btn_vars($aResp);
         }
         if (isset($inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['quickSearchRes']) && $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['quickSearchRes'])
         {
            $aResp['quickSearchRes'] = 'Y';
         }
         else
         {
            $aResp['quickSearchRes'] = 'N';
         }
         $aResp['htmOutput'] = '';
    
         if (isset($inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['param']['buffer_output']) && $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['param']['buffer_output'])
         {
            $aResp['htmOutput'] = ob_get_contents();
            if (false === $aResp['htmOutput'])
            {
               $aResp['htmOutput'] = '';
            }
            else
            {
               $aResp['htmOutput'] = form_u_organizaciones_pack_protect_string(NM_charset_to_utf8($aResp['htmOutput']));
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
   } // form_u_organizaciones_pack_ajax_response

   function form_u_organizaciones_pack_calendar_reload(&$aResp)
   {
      global $inicial_form_u_organizaciones;
      $aResp['calendarReload'] = 'OK';
   } // form_u_organizaciones_pack_calendar_reload

   function form_u_organizaciones_pack_ajax_errors(&$aResp)
   {
      global $inicial_form_u_organizaciones;
      $aResp['errList'] = array();
      foreach ($inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['errList'] as $sField => $aMsg)
      {
         if ('geral_form_u_organizaciones' == $sField)
         {
             $aMsg = form_u_organizaciones_pack_ajax_remove_erros($aMsg);
         }
         foreach ($aMsg as $sMsg)
         {
            $iNumLinha = (isset($inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['param']['nmgp_refresh_row']) && 'geral_form_u_organizaciones' != $sField)
                       ? $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['param']['nmgp_refresh_row'] : "";
            $aResp['errList'][] = array('fldName'  => $sField,
                                        'msgText'  => form_u_organizaciones_pack_protect_string(NM_charset_to_utf8($sMsg)),
                                        'numLinha' => $iNumLinha);
         }
      }
   } // form_u_organizaciones_pack_ajax_errors

   function form_u_organizaciones_pack_ajax_remove_erros($aErrors)
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
   } // form_u_organizaciones_pack_ajax_remove_erros

   function form_u_organizaciones_pack_ajax_ok(&$aResp)
   {
      global $inicial_form_u_organizaciones;
      $iNumLinha = (isset($inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['param']['nmgp_refresh_row']))
                 ? $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['param']['nmgp_refresh_row'] : "";
      $aResp['msgDisplay'] = array('msgText'  => form_u_organizaciones_pack_protect_string($inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['msgDisplay']),
                                   'numLinha' => $iNumLinha);
   } // form_u_organizaciones_pack_ajax_ok

   function form_u_organizaciones_pack_ajax_set_fields(&$aResp)
   {
      global $inicial_form_u_organizaciones;
      $iNumLinha = (isset($inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['param']['nmgp_refresh_row']))
                 ? $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['param']['nmgp_refresh_row'] : "";
      if ('' != $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['rsSize'])
      {
         $aResp['rsSize'] = $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['rsSize'];
      }
      $aResp['fldList'] = array();
      foreach ($inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['fldList'] as $sField => $aData)
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
            $aField['imgFile'] = form_u_organizaciones_pack_protect_string($aData['imgFile']);
         }
         if (isset($aData['imgOrig']))
         {
            $aField['imgOrig'] = form_u_organizaciones_pack_protect_string($aData['imgOrig']);
         }
         if (isset($aData['imgLink']))
         {
            $aField['imgLink'] = form_u_organizaciones_pack_protect_string($aData['imgLink']);
         }
         if (isset($aData['keepImg']))
         {
            $aField['keepImg'] = $aData['keepImg'];
         }
         if (isset($aData['docLink']))
         {
            $aField['docLink'] = form_u_organizaciones_pack_protect_string($aData['docLink']);
         }
         if (isset($aData['docIcon']))
         {
            $aField['docIcon'] = form_u_organizaciones_pack_protect_string($aData['docIcon']);
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
            $aField['imgHtml'] = form_u_organizaciones_pack_protect_string($aData['imgHtml']);
         }
         if (isset($aData['mulHtml']))
         {
            $aField['mulHtml'] = form_u_organizaciones_pack_protect_string($aData['mulHtml']);
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
               $aValue['label'] = form_u_organizaciones_pack_protect_string($aData['labList'][$iIndex]);
            }
            $aValue['value']     = ('_autocomp' != substr($sField, -9)) ? form_u_organizaciones_pack_protect_string($sValue) : $sValue;
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
                     $aField['optList'][] = array('value' => form_u_organizaciones_pack_protect_string($sOpt),
                                                  'label' => form_u_organizaciones_pack_protect_string($sLabel));
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
   } // form_u_organizaciones_pack_ajax_set_fields

   function form_u_organizaciones_pack_ajax_redir(&$aResp)
   {
      global $inicial_form_u_organizaciones;
      $aInfo              = array('metodo', 'action', 'target', 'nmgp_parms', 'nmgp_outra_jan', 'nmgp_url_saida', 'script_case_init', 'script_case_session', 'h_modal', 'w_modal');
      $aResp['redirInfo'] = array();
      foreach ($aInfo as $sTag)
      {
         if (isset($inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['redir'][$sTag]))
         {
            $aResp['redirInfo'][$sTag] = $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['redir'][$sTag];
         }
      }
   } // form_u_organizaciones_pack_ajax_redir

   function form_u_organizaciones_pack_ajax_redir_exit(&$aResp)
   {
      global $inicial_form_u_organizaciones;
      $aInfo                  = array('metodo', 'action', 'target', 'nmgp_parms', 'nmgp_outra_jan', 'nmgp_url_saida', 'script_case_init', 'script_case_session');
      $aResp['redirExitInfo'] = array();
      foreach ($aInfo as $sTag)
      {
         if (isset($inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['redirExit'][$sTag]))
         {
            $aResp['redirExitInfo'][$sTag] = $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['redirExit'][$sTag];
         }
      }
   } // form_u_organizaciones_pack_ajax_redir_exit

   function form_u_organizaciones_pack_master_value(&$aResp)
   {
      global $inicial_form_u_organizaciones;
      foreach ($inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['masterValue'] as $sIndex => $sValue)
      {
         $aResp['masterValue'][] = array('index' => $sIndex,
                                         'value' => $sValue);
      }
   } // form_u_organizaciones_pack_master_value

   function form_u_organizaciones_pack_ajax_alert(&$aResp)
   {
      global $inicial_form_u_organizaciones;
      $aResp['ajaxAlert'] = array('message' => $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['ajaxAlert']['message']);
   } // form_u_organizaciones_pack_ajax_alert

   function form_u_organizaciones_pack_ajax_message(&$aResp)
   {
      global $inicial_form_u_organizaciones;
      $aResp['ajaxMessage'] = array('message'      => form_u_organizaciones_pack_protect_string($inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['ajaxMessage']['message']),
                                    'title'        => form_u_organizaciones_pack_protect_string($inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['ajaxMessage']['title']),
                                    'modal'        => isset($inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['ajaxMessage']['modal'])        ? $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['ajaxMessage']['modal']        : 'N',
                                    'timeout'      => isset($inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['ajaxMessage']['timeout'])      ? $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['ajaxMessage']['timeout']      : '',
                                    'button'       => isset($inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['ajaxMessage']['button'])       ? $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['ajaxMessage']['button']       : '',
                                    'button_label' => isset($inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['ajaxMessage']['button_label']) ? $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['ajaxMessage']['button_label'] : 'Ok',
                                    'top'          => isset($inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['ajaxMessage']['top'])          ? $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['ajaxMessage']['top']          : '',
                                    'left'         => isset($inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['ajaxMessage']['left'])         ? $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['ajaxMessage']['left']         : '',
                                    'width'        => isset($inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['ajaxMessage']['width'])        ? $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['ajaxMessage']['width']        : '',
                                    'height'       => isset($inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['ajaxMessage']['height'])       ? $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['ajaxMessage']['height']       : '',
                                    'redir'        => isset($inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['ajaxMessage']['redir'])        ? $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['ajaxMessage']['redir']        : '',
                                    'show_close'   => isset($inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['ajaxMessage']['show_close'])   ? $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['ajaxMessage']['show_close']   : 'Y',
                                    'body_icon'    => isset($inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['ajaxMessage']['body_icon'])    ? $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['ajaxMessage']['body_icon']    : 'Y',
                                    'redir_target' => isset($inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['ajaxMessage']['redir_target']) ? $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['ajaxMessage']['redir_target'] : '',
                                    'redir_par'    => isset($inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['ajaxMessage']['redir_par'])    ? $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['ajaxMessage']['redir_par']    : '');
   } // form_u_organizaciones_pack_ajax_message

   function form_u_organizaciones_pack_ajax_javascript(&$aResp)
   {
      global $inicial_form_u_organizaciones;
      foreach ($inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['ajaxJavascript'] as $aJsFunc)
      {
         $aResp['ajaxJavascript'][] = $aJsFunc;
      }
   } // form_u_organizaciones_pack_ajax_javascript

   function form_u_organizaciones_pack_ajax_block_display(&$aResp)
   {
      global $inicial_form_u_organizaciones;
      $aResp['blockDisplay'] = array();
      foreach ($inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['blockDisplay'] as $sBlockName => $sBlockStatus)
      {
        $aResp['blockDisplay'][] = array($sBlockName, $sBlockStatus);
      }
   } // form_u_organizaciones_pack_ajax_block_display

   function form_u_organizaciones_pack_ajax_field_display(&$aResp)
   {
      global $inicial_form_u_organizaciones;
      $aResp['fieldDisplay'] = array();
      foreach ($inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['fieldDisplay'] as $sFieldName => $sFieldStatus)
      {
        $aResp['fieldDisplay'][] = array($sFieldName, $sFieldStatus);
      }
   } // form_u_organizaciones_pack_ajax_field_display

   function form_u_organizaciones_pack_ajax_button_display(&$aResp)
   {
      global $inicial_form_u_organizaciones;
      $aResp['buttonDisplay'] = array();
      foreach ($inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['buttonDisplay'] as $sButtonName => $sButtonStatus)
      {
        $aResp['buttonDisplay'][] = array($sButtonName, $sButtonStatus);
      }
   } // form_u_organizaciones_pack_ajax_button_display

   function form_u_organizaciones_pack_ajax_field_label(&$aResp)
   {
      global $inicial_form_u_organizaciones;
      $aResp['fieldLabel'] = array();
      foreach ($inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['fieldLabel'] as $sFieldName => $sFieldLabel)
      {
        $aResp['fieldLabel'][] = array($sFieldName, form_u_organizaciones_pack_protect_string($sFieldLabel));
      }
   } // form_u_organizaciones_pack_ajax_field_label

   function form_u_organizaciones_pack_ajax_readonly(&$aResp)
   {
      global $inicial_form_u_organizaciones;
      $aResp['readOnly'] = array();
      foreach ($inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['readOnly'] as $sFieldName => $sFieldStatus)
      {
        $aResp['readOnly'][] = array($sFieldName, $sFieldStatus);
      }
   } // form_u_organizaciones_pack_ajax_readonly

   function form_u_organizaciones_pack_ajax_nav_status(&$aResp)
   {
      global $inicial_form_u_organizaciones;
      $aResp['navStatus'] = array();
      if (isset($inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['navStatus']['ret']) && '' != $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['navStatus']['ret'])
      {
         $aResp['navStatus']['ret'] = $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['navStatus']['ret'];
      }
      if (isset($inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['navStatus']['ava']) && '' != $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['navStatus']['ava'])
      {
         $aResp['navStatus']['ava'] = $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['navStatus']['ava'];
      }
   } // form_u_organizaciones_pack_ajax_nav_status

   function form_u_organizaciones_pack_ajax_nav_Summary(&$aResp)
   {
      global $inicial_form_u_organizaciones;
      $aResp['navSummary'] = array();
      $aResp['navSummary']['reg_ini'] = $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['navSummary']['reg_ini'];
      $aResp['navSummary']['reg_qtd'] = $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['navSummary']['reg_qtd'];
      $aResp['navSummary']['reg_tot'] = $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['navSummary']['reg_tot'];
   } // form_u_organizaciones_pack_ajax_nav_Summary

   function form_u_organizaciones_pack_ajax_navPage(&$aResp)
   {
      global $inicial_form_u_organizaciones;
      $aResp['navPage'] = $inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['navPage'];
   } // form_u_organizaciones_pack_ajax_navPage


   function form_u_organizaciones_pack_ajax_btn_vars(&$aResp)
   {
      global $inicial_form_u_organizaciones;
      $aResp['btnVars'] = array();
      foreach ($inicial_form_u_organizaciones->contr_form_u_organizaciones->NM_ajax_info['btnVars'] as $sBtnName => $sBtnValue)
      {
        $aResp['btnVars'][] = array($sBtnName, form_u_organizaciones_pack_protect_string($sBtnValue));
      }
   } // form_u_organizaciones_pack_ajax_btn_vars

   function form_u_organizaciones_pack_protect_string($sString)
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
   } // form_u_organizaciones_pack_protect_string
?>
