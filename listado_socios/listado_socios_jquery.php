
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
  $('#id_sc_field_zona_' + iSeqRow).bind('blur', function() { sc_listado_socios_zona__onblur(this, iSeqRow) })
                                   .bind('focus', function() { sc_listado_socios_zona__onfocus(this, iSeqRow) });
  $('#id_sc_field_cod_provincia_' + iSeqRow).bind('blur', function() { sc_listado_socios_cod_provincia__onblur(this, iSeqRow) })
                                            .bind('focus', function() { sc_listado_socios_cod_provincia__onfocus(this, iSeqRow) });
  $('#id_sc_field_cedula_' + iSeqRow).bind('blur', function() { sc_listado_socios_cedula__onblur(this, iSeqRow) })
                                     .bind('focus', function() { sc_listado_socios_cedula__onfocus(this, iSeqRow) });
  $('#id_sc_field_apellidos_' + iSeqRow).bind('blur', function() { sc_listado_socios_apellidos__onblur(this, iSeqRow) })
                                        .bind('focus', function() { sc_listado_socios_apellidos__onfocus(this, iSeqRow) });
  $('#id_sc_field_cod_u_organizaciones_' + iSeqRow).bind('blur', function() { sc_listado_socios_cod_u_organizaciones__onblur(this, iSeqRow) })
                                                   .bind('focus', function() { sc_listado_socios_cod_u_organizaciones__onfocus(this, iSeqRow) });
  $('#id_sc_field_cod_canton_' + iSeqRow).bind('blur', function() { sc_listado_socios_cod_canton__onblur(this, iSeqRow) })
                                         .bind('focus', function() { sc_listado_socios_cod_canton__onfocus(this, iSeqRow) });
  $('#id_sc_field_cod_parroquia_' + iSeqRow).bind('blur', function() { sc_listado_socios_cod_parroquia__onblur(this, iSeqRow) })
                                            .bind('focus', function() { sc_listado_socios_cod_parroquia__onfocus(this, iSeqRow) });
  $('#id_sc_field_estado_' + iSeqRow).bind('blur', function() { sc_listado_socios_estado__onblur(this, iSeqRow) })
                                     .bind('focus', function() { sc_listado_socios_estado__onfocus(this, iSeqRow) });
  $('#id_sc_field_nacionalidad_' + iSeqRow).bind('blur', function() { sc_listado_socios_nacionalidad__onblur(this, iSeqRow) })
                                           .bind('focus', function() { sc_listado_socios_nacionalidad__onfocus(this, iSeqRow) });
  $('#id_sc_field_btn_editar_' + iSeqRow).bind('blur', function() { sc_listado_socios_btn_editar__onblur(this, iSeqRow) })
                                         .bind('focus', function() { sc_listado_socios_btn_editar__onfocus(this, iSeqRow) });
  $('#id_sc_field_btn_eliminar_' + iSeqRow).bind('blur', function() { sc_listado_socios_btn_eliminar__onblur(this, iSeqRow) })
                                           .bind('focus', function() { sc_listado_socios_btn_eliminar__onfocus(this, iSeqRow) });
} // scJQEventsAdd

function sc_listado_socios_zona__onblur(oThis, iSeqRow) {
  do_ajax_listado_socios_validate_zona_(iSeqRow);
  scCssBlur(oThis, iSeqRow);
}

function sc_listado_socios_zona__onfocus(oThis, iSeqRow) {
  scCssFocus(oThis, iSeqRow);
}

function sc_listado_socios_cod_provincia__onblur(oThis, iSeqRow) {
  do_ajax_listado_socios_validate_cod_provincia_(iSeqRow);
  scCssBlur(oThis, iSeqRow);
}

function sc_listado_socios_cod_provincia__onfocus(oThis, iSeqRow) {
  scCssFocus(oThis, iSeqRow);
}

function sc_listado_socios_cedula__onblur(oThis, iSeqRow) {
  do_ajax_listado_socios_validate_cedula_(iSeqRow);
  scCssBlur(oThis, iSeqRow);
}

function sc_listado_socios_cedula__onfocus(oThis, iSeqRow) {
  scCssFocus(oThis, iSeqRow);
}

function sc_listado_socios_apellidos__onblur(oThis, iSeqRow) {
  do_ajax_listado_socios_validate_apellidos_(iSeqRow);
  scCssBlur(oThis, iSeqRow);
}

function sc_listado_socios_apellidos__onfocus(oThis, iSeqRow) {
  scCssFocus(oThis, iSeqRow);
}

function sc_listado_socios_cod_u_organizaciones__onblur(oThis, iSeqRow) {
  do_ajax_listado_socios_validate_cod_u_organizaciones_(iSeqRow);
  scCssBlur(oThis, iSeqRow);
}

function sc_listado_socios_cod_u_organizaciones__onfocus(oThis, iSeqRow) {
  scCssFocus(oThis, iSeqRow);
}

function sc_listado_socios_cod_canton__onblur(oThis, iSeqRow) {
  do_ajax_listado_socios_validate_cod_canton_(iSeqRow);
  scCssBlur(oThis, iSeqRow);
}

function sc_listado_socios_cod_canton__onfocus(oThis, iSeqRow) {
  scCssFocus(oThis, iSeqRow);
}

function sc_listado_socios_cod_parroquia__onblur(oThis, iSeqRow) {
  do_ajax_listado_socios_validate_cod_parroquia_(iSeqRow);
  scCssBlur(oThis, iSeqRow);
}

function sc_listado_socios_cod_parroquia__onfocus(oThis, iSeqRow) {
  scCssFocus(oThis, iSeqRow);
}

function sc_listado_socios_estado__onblur(oThis, iSeqRow) {
  do_ajax_listado_socios_validate_estado_(iSeqRow);
  scCssBlur(oThis, iSeqRow);
}

function sc_listado_socios_estado__onfocus(oThis, iSeqRow) {
  scCssFocus(oThis, iSeqRow);
}

function sc_listado_socios_nacionalidad__onblur(oThis, iSeqRow) {
  do_ajax_listado_socios_validate_nacionalidad_(iSeqRow);
  scCssBlur(oThis, iSeqRow);
}

function sc_listado_socios_nacionalidad__onfocus(oThis, iSeqRow) {
  scCssFocus(oThis, iSeqRow);
}

function sc_listado_socios_btn_editar__onblur(oThis, iSeqRow) {
  do_ajax_listado_socios_validate_btn_editar_(iSeqRow);
  scCssBlur(oThis, iSeqRow);
}

function sc_listado_socios_btn_editar__onfocus(oThis, iSeqRow) {
  scCssFocus(oThis, iSeqRow);
}

function sc_listado_socios_btn_eliminar__onblur(oThis, iSeqRow) {
  do_ajax_listado_socios_validate_btn_eliminar_(iSeqRow);
  scCssBlur(oThis, iSeqRow);
}

function sc_listado_socios_btn_eliminar__onfocus(oThis, iSeqRow) {
  scCssFocus(oThis, iSeqRow);
}

var sc_jq_calendar_value = {};

function scJQCalendarAdd(iSeqRow) {
  $("#id_sc_field_fecha_reporte_" + iSeqRow).datepicker({
    beforeShow: function(input, inst) {
      var $oField = $(this),
          aParts  = $oField.val().split(" "),
          sTime   = "";
      sc_jq_calendar_value["#id_sc_field_fecha_reporte_" + iSeqRow] = $oField.val();
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
    dateFormat: "<?php echo $this->jqueryCalendarDtFormat("" . str_replace(array('/', 'aaaa', $_SESSION['scriptcase']['reg_conf']['date_sep']), array('', 'yyyy', ''), $this->field_config['fecha_reporte_']['date_format']) . "", "" . $_SESSION['scriptcase']['reg_conf']['date_sep'] . ""); ?>",
    showOtherMonths: true,
    showOn: "button",
    buttonImage: "<?php echo $this->jqueryIconFile('calendar'); ?>",
    buttonImageOnly: true
  });

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

  $("#id_sc_field_fecha_nacimiento_" + iSeqRow).datepicker({
    beforeShow: function(input, inst) {
      var $oField = $(this),
          aParts  = $oField.val().split(" "),
          sTime   = "";
      sc_jq_calendar_value["#id_sc_field_fecha_nacimiento_" + iSeqRow] = $oField.val();
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
    dateFormat: "<?php echo $this->jqueryCalendarDtFormat("" . str_replace(array('/', 'aaaa', $_SESSION['scriptcase']['reg_conf']['date_sep']), array('', 'yyyy', ''), $this->field_config['fecha_nacimiento_']['date_format']) . "", "" . $_SESSION['scriptcase']['reg_conf']['date_sep'] . ""); ?>",
    showOtherMonths: true,
    showOn: "button",
    buttonImage: "<?php echo $this->jqueryIconFile('calendar'); ?>",
    buttonImageOnly: true
  });

  $("#id_sc_field_fecha_reporte_im_" + iSeqRow).datepicker({
    beforeShow: function(input, inst) {
      var $oField = $(this),
          aParts  = $oField.val().split(" "),
          sTime   = "";
      sc_jq_calendar_value["#id_sc_field_fecha_reporte_im_" + iSeqRow] = $oField.val();
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
    dateFormat: "<?php echo $this->jqueryCalendarDtFormat("" . str_replace(array('/', 'aaaa', $_SESSION['scriptcase']['reg_conf']['date_sep']), array('', 'yyyy', ''), $this->field_config['fecha_reporte_im_']['date_format']) . "", "" . $_SESSION['scriptcase']['reg_conf']['date_sep'] . ""); ?>",
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

