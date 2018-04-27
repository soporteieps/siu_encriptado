
function scJQGeneralAdd() {
  $('input:text.sc-js-input').listen();
  $('input:password.sc-js-input').listen();
  $('textarea.sc-js-input').listen();

} // scJQGeneralAdd

function scFocusField(sField) {
  var $oField = $('#id_sc_field_' + sField);

  if (0 == $oField.length) {
    $oField = $('input[name=' + sField + ']');
  }

  if (0 == $oField.length && document.F1.elements[sField]) {
    $oField = $(document.F1.elements[sField]);
  }

  if (0 < $oField.length && 0 < $oField[0].offsetHeight && 0 < $oField[0].offsetWidth && !$oField[0].disabled) {
    $oField[0].focus();
  }
} // scFocusField

function scJQEventsAdd(iSeqRow) {
  $('#id_sc_field_login_' + iSeqRow).bind('blur', function() { sc_form_sec_users_login__onblur(this, iSeqRow) })
                                    .bind('change', function() { sc_form_sec_users_login__onchange(this, iSeqRow) })
                                    .bind('focus', function() { sc_form_sec_users_login__onfocus(this, iSeqRow) });
  $('#id_sc_field_pswd_' + iSeqRow).bind('blur', function() { sc_form_sec_users_pswd__onblur(this, iSeqRow) })
                                   .bind('change', function() { sc_form_sec_users_pswd__onchange(this, iSeqRow) })
                                   .bind('focus', function() { sc_form_sec_users_pswd__onfocus(this, iSeqRow) });
  $('#id_sc_field_name_' + iSeqRow).bind('blur', function() { sc_form_sec_users_name__onblur(this, iSeqRow) })
                                   .bind('change', function() { sc_form_sec_users_name__onchange(this, iSeqRow) })
                                   .bind('focus', function() { sc_form_sec_users_name__onfocus(this, iSeqRow) });
  $('#id_sc_field_ci_' + iSeqRow).bind('blur', function() { sc_form_sec_users_ci__onblur(this, iSeqRow) })
                                 .bind('change', function() { sc_form_sec_users_ci__onchange(this, iSeqRow) })
                                 .bind('focus', function() { sc_form_sec_users_ci__onfocus(this, iSeqRow) });
  $('#id_sc_field_email_' + iSeqRow).bind('blur', function() { sc_form_sec_users_email__onblur(this, iSeqRow) })
                                    .bind('change', function() { sc_form_sec_users_email__onchange(this, iSeqRow) })
                                    .bind('focus', function() { sc_form_sec_users_email__onfocus(this, iSeqRow) });
  $('#id_sc_field_usr_active_' + iSeqRow).bind('blur', function() { sc_form_sec_users_usr_active__onblur(this, iSeqRow) })
                                         .bind('change', function() { sc_form_sec_users_usr_active__onchange(this, iSeqRow) })
                                         .bind('focus', function() { sc_form_sec_users_usr_active__onfocus(this, iSeqRow) });
  $('#id_sc_field_zona_' + iSeqRow).bind('blur', function() { sc_form_sec_users_zona__onblur(this, iSeqRow) })
                                   .bind('change', function() { sc_form_sec_users_zona__onchange(this, iSeqRow) })
                                   .bind('focus', function() { sc_form_sec_users_zona__onfocus(this, iSeqRow) });
  $('#id_sc_field_cod_provincia_' + iSeqRow).bind('blur', function() { sc_form_sec_users_cod_provincia__onblur(this, iSeqRow) })
                                            .bind('change', function() { sc_form_sec_users_cod_provincia__onchange(this, iSeqRow) })
                                            .bind('focus', function() { sc_form_sec_users_cod_provincia__onfocus(this, iSeqRow) });
  $('#id_sc_field_access_fa_' + iSeqRow).bind('blur', function() { sc_form_sec_users_access_fa__onblur(this, iSeqRow) })
                                        .bind('change', function() { sc_form_sec_users_access_fa__onchange(this, iSeqRow) })
                                        .bind('focus', function() { sc_form_sec_users_access_fa__onfocus(this, iSeqRow) });
  $('#id_sc_field_access_im_' + iSeqRow).bind('blur', function() { sc_form_sec_users_access_im__onblur(this, iSeqRow) })
                                        .bind('change', function() { sc_form_sec_users_access_im__onchange(this, iSeqRow) })
                                        .bind('focus', function() { sc_form_sec_users_access_im__onfocus(this, iSeqRow) });
  $('#id_sc_field_access_fp_' + iSeqRow).bind('blur', function() { sc_form_sec_users_access_fp__onblur(this, iSeqRow) })
                                        .bind('change', function() { sc_form_sec_users_access_fp__onchange(this, iSeqRow) })
                                        .bind('focus', function() { sc_form_sec_users_access_fp__onfocus(this, iSeqRow) });
} // scJQEventsAdd

function sc_form_sec_users_login__onblur(oThis, iSeqRow) {
  do_ajax_form_sec_users_validate_login_(iSeqRow);
  scCssBlur(oThis, iSeqRow);
}

function sc_form_sec_users_login__onchange(oThis, iSeqRow) {
  nm_check_insert(iSeqRow);
}

function sc_form_sec_users_login__onfocus(oThis, iSeqRow) {
  scCssFocus(oThis, iSeqRow);
}

function sc_form_sec_users_pswd__onblur(oThis, iSeqRow) {
  do_ajax_form_sec_users_validate_pswd_(iSeqRow);
  scCssBlur(oThis, iSeqRow);
}

function sc_form_sec_users_pswd__onchange(oThis, iSeqRow) {
  nm_check_insert(iSeqRow);
}

function sc_form_sec_users_pswd__onfocus(oThis, iSeqRow) {
  scCssFocus(oThis, iSeqRow);
}

function sc_form_sec_users_name__onblur(oThis, iSeqRow) {
  do_ajax_form_sec_users_validate_name_(iSeqRow);
  scCssBlur(oThis, iSeqRow);
}

function sc_form_sec_users_name__onchange(oThis, iSeqRow) {
  nm_check_insert(iSeqRow);
}

function sc_form_sec_users_name__onfocus(oThis, iSeqRow) {
  scCssFocus(oThis, iSeqRow);
}

function sc_form_sec_users_ci__onblur(oThis, iSeqRow) {
  do_ajax_form_sec_users_validate_ci_(iSeqRow);
  scCssBlur(oThis, iSeqRow);
}

function sc_form_sec_users_ci__onchange(oThis, iSeqRow) {
  nm_check_insert(iSeqRow);
}

function sc_form_sec_users_ci__onfocus(oThis, iSeqRow) {
  scCssFocus(oThis, iSeqRow);
}

function sc_form_sec_users_email__onblur(oThis, iSeqRow) {
  do_ajax_form_sec_users_validate_email_(iSeqRow);
  scCssBlur(oThis, iSeqRow);
}

function sc_form_sec_users_email__onchange(oThis, iSeqRow) {
  nm_check_insert(iSeqRow);
}

function sc_form_sec_users_email__onfocus(oThis, iSeqRow) {
  scCssFocus(oThis, iSeqRow);
}

function sc_form_sec_users_usr_active__onblur(oThis, iSeqRow) {
  do_ajax_form_sec_users_validate_usr_active_(iSeqRow);
  scCssBlur(oThis, iSeqRow);
}

function sc_form_sec_users_usr_active__onchange(oThis, iSeqRow) {
  nm_check_insert(iSeqRow);
}

function sc_form_sec_users_usr_active__onfocus(oThis, iSeqRow) {
  scCssFocus(oThis, iSeqRow);
}

function sc_form_sec_users_zona__onblur(oThis, iSeqRow) {
  do_ajax_form_sec_users_validate_zona_(iSeqRow);
  scCssBlur(oThis, iSeqRow);
}

function sc_form_sec_users_zona__onchange(oThis, iSeqRow) {
  do_ajax_form_sec_users_refresh_zona_(iSeqRow);
  nm_check_insert(iSeqRow);
}

function sc_form_sec_users_zona__onfocus(oThis, iSeqRow) {
  scCssFocus(oThis, iSeqRow);
}

function sc_form_sec_users_cod_provincia__onblur(oThis, iSeqRow) {
  do_ajax_form_sec_users_validate_cod_provincia_(iSeqRow);
  scCssBlur(oThis, iSeqRow);
}

function sc_form_sec_users_cod_provincia__onchange(oThis, iSeqRow) {
  nm_check_insert(iSeqRow);
}

function sc_form_sec_users_cod_provincia__onfocus(oThis, iSeqRow) {
  scCssFocus(oThis, iSeqRow);
}

function sc_form_sec_users_access_fa__onblur(oThis, iSeqRow) {
  do_ajax_form_sec_users_validate_access_fa_(iSeqRow);
  scCssBlur(oThis, iSeqRow);
}

function sc_form_sec_users_access_fa__onchange(oThis, iSeqRow) {
  nm_check_insert(iSeqRow);
}

function sc_form_sec_users_access_fa__onfocus(oThis, iSeqRow) {
  scCssFocus(oThis, iSeqRow);
}

function sc_form_sec_users_access_im__onblur(oThis, iSeqRow) {
  do_ajax_form_sec_users_validate_access_im_(iSeqRow);
  scCssBlur(oThis, iSeqRow);
}

function sc_form_sec_users_access_im__onchange(oThis, iSeqRow) {
  nm_check_insert(iSeqRow);
}

function sc_form_sec_users_access_im__onfocus(oThis, iSeqRow) {
  scCssFocus(oThis, iSeqRow);
}

function sc_form_sec_users_access_fp__onblur(oThis, iSeqRow) {
  do_ajax_form_sec_users_validate_access_fp_(iSeqRow);
  scCssBlur(oThis, iSeqRow);
}

function sc_form_sec_users_access_fp__onchange(oThis, iSeqRow) {
  nm_check_insert(iSeqRow);
}

function sc_form_sec_users_access_fp__onfocus(oThis, iSeqRow) {
  scCssFocus(oThis, iSeqRow);
}

var sc_jq_calendar_value = {};

function scJQCalendarAdd(iSeqRow) {
  $("#id_sc_field_fecha_registro_" + iSeqRow).datepicker({
    beforeShow: function(input, inst) {
      var $oField = $(this),
          aParts  = $oField.val().split(" "),
          sTime   = "";
      sc_jq_calendar_value["#id_sc_field_fecha_registro_" + iSeqRow] = $oField.val();
      if (2 == aParts.length) {
        sTime = " " + aParts[1];
      }
      if ('' == sTime || ' ' == sTime) {
        sTime = ' <?php echo $this->jqueryCalendarTimeStart($this->field_config['fecha_registro_']['date_format']); ?>';
      }
      $oField.datepicker("option", "dateFormat", "<?php echo $this->jqueryCalendarDtFormat("" . str_replace(array('/', 'aaaa', 'hh', 'ii', 'ss', ':', ';', $_SESSION['scriptcase']['reg_conf']['date_sep'], $_SESSION['scriptcase']['reg_conf']['time_sep']), array('', 'yyyy', '','','', '', '', '', ''), $this->field_config['fecha_registro_']['date_format']) . "", "" . $_SESSION['scriptcase']['reg_conf']['date_sep'] . ""); ?>" + sTime);
    },
    onClose: function(dateText, inst) {
    },
    showWeek: true,
    numberOfMonths: 1,
    changeMonth: true,
    changeYear: true,
    yearRange: 'c-5:c+5',
    dayNames: ['<?php        echo html_entity_decode($this->Ini->Nm_lang['lang_days_sund']);        ?>','<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_mond']);        ?>','<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_tued']);        ?>','<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_wend']);        ?>','<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_thud']);        ?>','<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_frid']);        ?>','<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_satd']);        ?>'],
    dayNamesMin: ['<?php     echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_sund']); ?>','<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_mond']); ?>','<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_tued']); ?>','<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_wend']); ?>','<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_thud']); ?>','<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_frid']); ?>','<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_satd']); ?>'],
    monthNamesShort: ['<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_janu']);   ?>','<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_febr']);   ?>','<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_marc']);   ?>','<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_apri']);   ?>','<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_mayy']);   ?>','<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_june']);   ?>','<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_july']);   ?>','<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_augu']); ?>','<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_sept']); ?>','<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_octo']); ?>','<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_nove']); ?>','<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_dece']); ?>'],
    weekHeader: "<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_days_sem']); ?>",
    firstDay: <?php echo $this->jqueryCalendarWeekInit("" . $_SESSION['scriptcase']['reg_conf']['date_week_ini'] . ""); ?>,
    dateFormat: "<?php echo $this->jqueryCalendarDtFormat("" . str_replace(array('/', 'aaaa', 'hh', 'ii', 'ss', ':', ';', $_SESSION['scriptcase']['reg_conf']['date_sep'], $_SESSION['scriptcase']['reg_conf']['time_sep']), array('', 'yyyy', '','','', '', '', '', ''), $this->field_config['fecha_registro_']['date_format']) . "", "" . $_SESSION['scriptcase']['reg_conf']['date_sep'] . ""); ?>",
    showOtherMonths: true,
    showOn: "button",
    buttonImage: "<?php echo $this->jqueryIconFile('calendar'); ?>",
    buttonImageOnly: true
  });

} // scJQCalendarAdd

function scJQUploadAdd(iSeqRow) {
} // scJQUploadAdd


function scJQElementsAdd(iLine) {
  scJQEventsAdd(iLine);
  scJQCalendarAdd(iLine);
  scJQUploadAdd(iLine);
} // scJQElementsAdd

