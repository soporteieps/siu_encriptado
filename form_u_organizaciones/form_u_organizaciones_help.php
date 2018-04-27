<?php
include_once('form_u_organizaciones_session.php');
@session_start() ;
class form_u_organizaciones_help
{
    function form_u_organizaciones_help()
    {
        global $language, $nm_cod_campo;
        include($language . ".lang.php");
        if (!function_exists("NM_is_utf8"))
        {
            include_once("form_u_organizaciones_nmutf8.php");
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
        if ($nm_cod_campo ==  "btnbuscar")
        {
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
            "http://www.w3.org/TR/1999/REC-html401-19991224/loose.dtd">

<html>
<head>
 <META http-equiv="Content-Type" content="text/html; charset=<?php echo $_SESSION['scriptcase']['charset_html'] ?>" />
 <link rel="stylesheet" href="<?php echo $_GET['help_css'] ?>" type="text/css" media="screen" />
</head>
<body class="scFormHelpPage">
<?php echo "<b></b><br>" . nl2br("De un click aqui luego de ingresar el RUC."); ?>
</body>
</html>
<?php
        }
    }
}
if (!empty($_GET))
{
    foreach ($_GET as $nmgp_var => $nmgp_val)
    {
        $$nmgp_var = $nmgp_val;
    }
}
$exec_help = new form_u_organizaciones_help();
?>
