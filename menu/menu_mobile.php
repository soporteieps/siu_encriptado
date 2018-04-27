<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>
    <head>
        <META http-equiv="Content-Type" content="text/html; charset=<?php echo $_SESSION['scriptcase']['charset_html'] ?>" />
        <title>S.I.U. (Sistema de Inscripción Universal)</title>
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet"  href="<?php echo $_SESSION["scriptcase"]["menu"]["glo_nm_path_prod"]; ?>/third/jquery.mobile/jquery.mobile-1.2.0.min.css" />
        <link rel="stylesheet"  href="<?php echo $this->url_css; ?>ScriptCase7_Black/ScriptCase7_Black_menuMobile.css" />
        <script src="<?php echo $_SESSION["scriptcase"]["menu"]["glo_nm_path_prod"]; ?>/third/jquery/js/jquery.js"></script>
        <script type="text/javascript">
            $(document).bind("mobileinit", function() {
                $.mobile.page.prototype.options.backBtnText = "<?php echo $this->Nm_lang["lang_btns_prev"]; ?>";
                $.mobile.page.prototype.options.addBackBtn = true;
            });
        </script>
        <script src="<?php echo $_SESSION["scriptcase"]["menu"]["glo_nm_path_prod"]; ?>/third/jquery.mobile/jquery.mobile-1.2.0.min.js"></script>
    </head>
    <body>
<style>
#lin1_col1 { font-size:22px; width:500px; color: #FFFFFF; }
#lin1_col2 { font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:right; color: #FFFFFF;  }
#lin2_col1 { font-family:Arial, Helvetica, sans-serif; font-weight:bold; font-size:15px; }
#lin2_col2 { font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:right; color: #FFFFFF;  }

</style>

<table width="100%" height="67px" class="scMenuHHeader">
        <tr>
                <td width="5px"></td>
        <td width="67px" class="scMenuHHeaderFont">   <IMG SRC="<?php echo $path_imag_cab ?>/sys__NM__ieps_logo.png" BORDER="0"/></td>
               <td class="scMenuHHeaderFont"><span id="lin1_col1"><?php echo "S.I.U. (Sistema de Inscripción Universal)" ?></span><br /><span id="lin2_col1"></span></td>
               <td align="right" class="scMenuHHeaderFont"><span  id="lin1_col2"></span><br /><span id="lin2_col2"></span></td>
        <td width="5px"></td>
    </tr>
</table>

        <ul data-role='listview' data-theme='a'>
            <li title="<?php echo "" . $nm_var_hint[0] . ""; ?>">
                <a href="<?php echo "menu_form_php.php?sc_item_menu=item_32&sc_apl_menu=grid_u_organizaciones&sc_apl_link=" . urlencode($menu_menuData['url']['link']) . "&sc_usa_grupo=" . $_SESSION['scriptcase']['menu']['glo_nm_usa_grupo'] . ""?>" target="_self"><?php echo "" . $nm_var_lab[0] . ""; ?></a>
            </li>
            <li title="<?php echo "" . $nm_var_hint[1] . ""; ?>">
                <a href="<?php echo "menu_form_php.php?sc_item_menu=item_34&sc_apl_menu=cambiar_contrasena&sc_apl_link=" . urlencode($menu_menuData['url']['link']) . "&sc_usa_grupo=" . $_SESSION['scriptcase']['menu']['glo_nm_usa_grupo'] . ""?>" target="_self"><?php echo "" . $nm_var_lab[1] . ""; ?></a>
            </li>
            <li title="<?php echo "" . $nm_var_hint[2] . ""; ?>">
                <a href="<?php echo "#"?>" target="_self"><?php echo "" . $nm_var_lab[2] . ""; ?></a>
                <ul>
                    <li title="<?php echo "" . $nm_var_hint[3] . ""; ?>">
                        <a href="<?php echo "menu_form_php.php?sc_item_menu=item_17&sc_apl_menu=form_sec_users&sc_apl_link=" . urlencode($menu_menuData['url']['link']) . "&sc_usa_grupo=" . $_SESSION['scriptcase']['menu']['glo_nm_usa_grupo'] . ""?>" target="_self"><?php echo "" . $nm_var_lab[3] . ""; ?></a>
                    </li>
                    <li title="<?php echo "" . $nm_var_hint[4] . ""; ?>">
                        <a href="<?php echo "menu_form_php.php?sc_item_menu=item_18&sc_apl_menu=form_sec_users_groups&sc_apl_link=" . urlencode($menu_menuData['url']['link']) . "&sc_usa_grupo=" . $_SESSION['scriptcase']['menu']['glo_nm_usa_grupo'] . ""?>" target="_self"><?php echo "" . $nm_var_lab[4] . ""; ?></a>
                    </li>
                </ul>
            </li>
            <li title="<?php echo "" . $nm_var_hint[5] . ""; ?>">
                <a href="<?php echo "menu_form_php.php?sc_item_menu=item_5&sc_apl_menu=salir&sc_apl_link=" . urlencode($menu_menuData['url']['link']) . "&sc_usa_grupo=" . $_SESSION['scriptcase']['menu']['glo_nm_usa_grupo'] . ""?>" target="_parent"><?php echo "" . $nm_var_lab[5] . ""; ?></a>
            </li>
        </ul>

    </body>
</html>
