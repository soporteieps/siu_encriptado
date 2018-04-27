
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
  $('#id_sc_field_cod_socios' + iSeqRow).bind('blur', function() { sc_form_socios_cod_socios_onblur(this, iSeqRow) })
                                        .bind('focus', function() { sc_form_socios_cod_socios_onfocus(this, iSeqRow) });
  $('#id_sc_field_zona' + iSeqRow).bind('blur', function() { sc_form_socios_zona_onblur(this, iSeqRow) })
                                  .bind('change', function() { sc_form_socios_zona_onchange(this, iSeqRow) })
                                  .bind('focus', function() { sc_form_socios_zona_onfocus(this, iSeqRow) });
  $('#id_sc_field_cod_provincia' + iSeqRow).bind('blur', function() { sc_form_socios_cod_provincia_onblur(this, iSeqRow) })
                                           .bind('change', function() { sc_form_socios_cod_provincia_onchange(this, iSeqRow) })
                                           .bind('focus', function() { sc_form_socios_cod_provincia_onfocus(this, iSeqRow) });
  $('#id_sc_field_cedula' + iSeqRow).bind('blur', function() { sc_form_socios_cedula_onblur(this, iSeqRow) })
                                    .bind('focus', function() { sc_form_socios_cedula_onfocus(this, iSeqRow) });
  $('#id_sc_field_apellidos' + iSeqRow).bind('blur', function() { sc_form_socios_apellidos_onblur(this, iSeqRow) })
                                       .bind('focus', function() { sc_form_socios_apellidos_onfocus(this, iSeqRow) });
  $('#id_sc_field_grupo_etnico' + iSeqRow).bind('blur', function() { sc_form_socios_grupo_etnico_onblur(this, iSeqRow) })
                                          .bind('focus', function() { sc_form_socios_grupo_etnico_onfocus(this, iSeqRow) });
  $('#id_sc_field_genero' + iSeqRow).bind('blur', function() { sc_form_socios_genero_onblur(this, iSeqRow) })
                                    .bind('focus', function() { sc_form_socios_genero_onfocus(this, iSeqRow) });
  $('#id_sc_field_poblacion' + iSeqRow).bind('blur', function() { sc_form_socios_poblacion_onblur(this, iSeqRow) })
                                       .bind('focus', function() { sc_form_socios_poblacion_onfocus(this, iSeqRow) });
  $('#id_sc_field_cod_canton' + iSeqRow).bind('blur', function() { sc_form_socios_cod_canton_onblur(this, iSeqRow) })
                                        .bind('change', function() { sc_form_socios_cod_canton_onchange(this, iSeqRow) })
                                        .bind('focus', function() { sc_form_socios_cod_canton_onfocus(this, iSeqRow) });
  $('#id_sc_field_cod_parroquia' + iSeqRow).bind('blur', function() { sc_form_socios_cod_parroquia_onblur(this, iSeqRow) })
                                           .bind('focus', function() { sc_form_socios_cod_parroquia_onfocus(this, iSeqRow) });
  $('#id_sc_field_fecha_nacimiento' + iSeqRow).bind('blur', function() { sc_form_socios_fecha_nacimiento_onblur(this, iSeqRow) })
                                              .bind('focus', function() { sc_form_socios_fecha_nacimiento_onfocus(this, iSeqRow) });
  $('#id_sc_field_telefono' + iSeqRow).bind('blur', function() { sc_form_socios_telefono_onblur(this, iSeqRow) })
                                      .bind('focus', function() { sc_form_socios_telefono_onfocus(this, iSeqRow) });
  $('#id_sc_field_celular' + iSeqRow).bind('blur', function() { sc_form_socios_celular_onblur(this, iSeqRow) })
                                     .bind('focus', function() { sc_form_socios_celular_onfocus(this, iSeqRow) });
  $('#id_sc_field_mail' + iSeqRow).bind('blur', function() { sc_form_socios_mail_onblur(this, iSeqRow) })
                                  .bind('focus', function() { sc_form_socios_mail_onfocus(this, iSeqRow) });
  $('#id_sc_field_direccion' + iSeqRow).bind('blur', function() { sc_form_socios_direccion_onblur(this, iSeqRow) })
                                       .bind('focus', function() { sc_form_socios_direccion_onfocus(this, iSeqRow) });
  $('#id_sc_field_discapacidad' + iSeqRow).bind('blur', function() { sc_form_socios_discapacidad_onblur(this, iSeqRow) })
                                          .bind('change', function() { sc_form_socios_discapacidad_onchange(this, iSeqRow) })
                                          .bind('focus', function() { sc_form_socios_discapacidad_onfocus(this, iSeqRow) });
  $('#id_sc_field_tipo_discapacidad' + iSeqRow).bind('blur', function() { sc_form_socios_tipo_discapacidad_onblur(this, iSeqRow) })
                                               .bind('focus', function() { sc_form_socios_tipo_discapacidad_onfocus(this, iSeqRow) });
  $('#id_sc_field_estado' + iSeqRow).bind('blur', function() { sc_form_socios_estado_onblur(this, iSeqRow) })
                                    .bind('focus', function() { sc_form_socios_estado_onfocus(this, iSeqRow) });
  $('#id_sc_field_nacionalidad' + iSeqRow).bind('blur', function() { sc_form_socios_nacionalidad_onblur(this, iSeqRow) })
                                          .bind('focus', function() { sc_form_socios_nacionalidad_onfocus(this, iSeqRow) });
  $('#id_sc_field_socio_empleado' + iSeqRow).bind('blur', function() { sc_form_socios_socio_empleado_onblur(this, iSeqRow) })
                                            .bind('focus', function() { sc_form_socios_socio_empleado_onfocus(this, iSeqRow) });
  $('#id_sc_field_txt_tipo_documento' + iSeqRow).bind('blur', function() { sc_form_socios_txt_tipo_documento_onblur(this, iSeqRow) })
                                                .bind('change', function() { sc_form_socios_txt_tipo_documento_onchange(this, iSeqRow) })
                                                .bind('focus', function() { sc_form_socios_txt_tipo_documento_onfocus(this, iSeqRow) });
  $('#id_sc_field_txt_cedula' + iSeqRow).bind('blur', function() { sc_form_socios_txt_cedula_onblur(this, iSeqRow) })
                                        .bind('focus', function() { sc_form_socios_txt_cedula_onfocus(this, iSeqRow) });
  $('#id_sc_field_txt_pasaporte' + iSeqRow).bind('blur', function() { sc_form_socios_txt_pasaporte_onblur(this, iSeqRow) })
                                           .bind('focus', function() { sc_form_socios_txt_pasaporte_onfocus(this, iSeqRow) });
  $('#id_sc_field_btnbuscar' + iSeqRow).bind('blur', function() { sc_form_socios_btnbuscar_onblur(this, iSeqRow) })
                                       .bind('click', function() { sc_form_socios_btnbuscar_onclick(this, iSeqRow) })
                                       .bind('focus', function() { sc_form_socios_btnbuscar_onfocus(this, iSeqRow) });
} // scJQEventsAdd

function sc_form_socios_cod_socios_onblur(oThis, iSeqRow) {
  do_ajax_form_socios_validate_cod_socios();
  scCssBlur(oThis);
}

function sc_form_socios_cod_socios_onfocus(oThis, iSeqRow) {
  scCssFocus(oThis);
}

function sc_form_socios_zona_onblur(oThis, iSeqRow) {
  do_ajax_form_socios_validate_zona();
  scCssBlur(oThis);
}

function sc_form_socios_zona_onchange(oThis, iSeqRow) {
  do_ajax_form_socios_refresh_zona();
}

function sc_form_socios_zona_onfocus(oThis, iSeqRow) {
  scCssFocus(oThis);
}

function sc_form_socios_cod_provincia_onblur(oThis, iSeqRow) {
  do_ajax_form_socios_validate_cod_provincia();
  scCssBlur(oThis);
}

function sc_form_socios_cod_provincia_onchange(oThis, iSeqRow) {
  do_ajax_form_socios_refresh_cod_provincia();
}

function sc_form_socios_cod_provincia_onfocus(oThis, iSeqRow) {
  scCssFocus(oThis);
}

function sc_form_socios_cedula_onblur(oThis, iSeqRow) {
  do_ajax_form_socios_validate_cedula();
  scCssBlur(oThis);
}

function sc_form_socios_cedula_onfocus(oThis, iSeqRow) {
  scCssFocus(oThis);
}

function sc_form_socios_apellidos_onblur(oThis, iSeqRow) {
  do_ajax_form_socios_validate_apellidos();
  scCssBlur(oThis);
}

function sc_form_socios_apellidos_onfocus(oThis, iSeqRow) {
  scCssFocus(oThis);
}

function sc_form_socios_grupo_etnico_onblur(oThis, iSeqRow) {
  do_ajax_form_socios_validate_grupo_etnico();
  scCssBlur(oThis);
}

function sc_form_socios_grupo_etnico_onfocus(oThis, iSeqRow) {
  scCssFocus(oThis);
}

function sc_form_socios_genero_onblur(oThis, iSeqRow) {
  do_ajax_form_socios_validate_genero();
  scCssBlur(oThis);
}

function sc_form_socios_genero_onfocus(oThis, iSeqRow) {
  scCssFocus(oThis);
}

function sc_form_socios_poblacion_onblur(oThis, iSeqRow) {
  do_ajax_form_socios_validate_poblacion();
  scCssBlur(oThis);
}

function sc_form_socios_poblacion_onfocus(oThis, iSeqRow) {
  scCssFocus(oThis);
}

function sc_form_socios_cod_canton_onblur(oThis, iSeqRow) {
  do_ajax_form_socios_validate_cod_canton();
  scCssBlur(oThis);
}

function sc_form_socios_cod_canton_onchange(oThis, iSeqRow) {
  do_ajax_form_socios_refresh_cod_canton();
}

function sc_form_socios_cod_canton_onfocus(oThis, iSeqRow) {
  scCssFocus(oThis);
}

function sc_form_socios_cod_parroquia_onblur(oThis, iSeqRow) {
  do_ajax_form_socios_validate_cod_parroquia();
  scCssBlur(oThis);
}

function sc_form_socios_cod_parroquia_onfocus(oThis, iSeqRow) {
  scCssFocus(oThis);
}

function sc_form_socios_fecha_nacimiento_onblur(oThis, iSeqRow) {
  do_ajax_form_socios_validate_fecha_nacimiento();
  scCssBlur(oThis);
}

function sc_form_socios_fecha_nacimiento_onfocus(oThis, iSeqRow) {
  scCssFocus(oThis);
}

function sc_form_socios_telefono_onblur(oThis, iSeqRow) {
  do_ajax_form_socios_validate_telefono();
  scCssBlur(oThis);
}

function sc_form_socios_telefono_onfocus(oThis, iSeqRow) {
  scCssFocus(oThis);
}

function sc_form_socios_celular_onblur(oThis, iSeqRow) {
  do_ajax_form_socios_validate_celular();
  scCssBlur(oThis);
}

function sc_form_socios_celular_onfocus(oThis, iSeqRow) {
  scCssFocus(oThis);
}

function sc_form_socios_mail_onblur(oThis, iSeqRow) {
  do_ajax_form_socios_validate_mail();
  scCssBlur(oThis);
  do_ajax_form_socios_event_mail_onblur();
}

function sc_form_socios_mail_onfocus(oThis, iSeqRow) {
  scCssFocus(oThis);
}

function sc_form_socios_direccion_onblur(oThis, iSeqRow) {
  do_ajax_form_socios_validate_direccion();
  scCssBlur(oThis);
}

function sc_form_socios_direccion_onfocus(oThis, iSeqRow) {
  scCssFocus(oThis);
}

function sc_form_socios_discapacidad_onblur(oThis, iSeqRow) {
  do_ajax_form_socios_validate_discapacidad();
  scCssBlur(oThis);
}

function sc_form_socios_discapacidad_onchange(oThis, iSeqRow) {
  do_ajax_form_socios_event_discapacidad_onchange();
}

function sc_form_socios_discapacidad_onfocus(oThis, iSeqRow) {
  scCssFocus(oThis);
}

function sc_form_socios_tipo_discapacidad_onblur(oThis, iSeqRow) {
  do_ajax_form_socios_validate_tipo_discapacidad();
  scCssBlur(oThis);
}

function sc_form_socios_tipo_discapacidad_onfocus(oThis, iSeqRow) {
  scCssFocus(oThis);
}

function sc_form_socios_estado_onblur(oThis, iSeqRow) {
  do_ajax_form_socios_validate_estado();
  scCssBlur(oThis);
}

function sc_form_socios_estado_onfocus(oThis, iSeqRow) {
  scCssFocus(oThis);
}

function sc_form_socios_nacionalidad_onblur(oThis, iSeqRow) {
  do_ajax_form_socios_validate_nacionalidad();
  scCssBlur(oThis);
}

function sc_form_socios_nacionalidad_onfocus(oThis, iSeqRow) {
  scCssFocus(oThis);
}

function sc_form_socios_socio_empleado_onblur(oThis, iSeqRow) {
  do_ajax_form_socios_validate_socio_empleado();
  scCssBlur(oThis);
}

function sc_form_socios_socio_empleado_onfocus(oThis, iSeqRow) {
  scCssFocus(oThis);
}

function sc_form_socios_txt_tipo_documento_onblur(oThis, iSeqRow) {
  do_ajax_form_socios_validate_txt_tipo_documento();
  scCssBlur(oThis);
}

function sc_form_socios_txt_tipo_documento_onchange(oThis, iSeqRow) {
  do_ajax_form_socios_event_txt_tipo_documento_onchange();
}

function sc_form_socios_txt_tipo_documento_onfocus(oThis, iSeqRow) {
  scCssFocus(oThis);
}

function sc_form_socios_txt_cedula_onblur(oThis, iSeqRow) {
  do_ajax_form_socios_validate_txt_cedula();
  scCssBlur(oThis);
}

function sc_form_socios_txt_cedula_onfocus(oThis, iSeqRow) {
  scCssFocus(oThis);
}

function sc_form_socios_txt_pasaporte_onblur(oThis, iSeqRow) {
  do_ajax_form_socios_validate_txt_pasaporte();
  scCssBlur(oThis);
}

function sc_form_socios_txt_pasaporte_onfocus(oThis, iSeqRow) {
  scCssFocus(oThis);
}

function sc_form_socios_btnbuscar_onblur(oThis, iSeqRow) {
  do_ajax_form_socios_validate_btnbuscar();
  scCssBlur(oThis);
}

function sc_form_socios_btnbuscar_onclick(oThis, iSeqRow) {
  do_ajax_form_socios_event_btnbuscar_onclick();
}

function sc_form_socios_btnbuscar_onfocus(oThis, iSeqRow) {
  scCssFocus(oThis);
}

var sc_jq_calendar_value = {};

function scJQCalendarAdd(iSeqRow) {
  $("#id_sc_field_fecha_nacimiento" + iSeqRow).datepicker({
    beforeShow: function(input, inst) {
      var $oField = $(this),
          aParts  = $oField.val().split(" "),
          sTime   = "";
      sc_jq_calendar_value["#id_sc_field_fecha_nacimiento" + iSeqRow] = $oField.val();
    },
    onClose: function(dateText, inst) {
    },
    showWeek: true,
    numberOfMonths: 1,
    changeMonth: true,
    changeYear: true,
    yearRange: 'c-15:c+15',
    dayNames: ['<?php        echo html_entity_decode($this->Ini->Nm_lang['lang_days_sund']);        ?>','<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_mond']);        ?>','<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_tued']);        ?>','<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_wend']);        ?>','<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_thud']);        ?>','<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_frid']);        ?>','<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_satd']);        ?>'],
    dayNamesMin: ['<?php     echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_sund']); ?>','<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_mond']); ?>','<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_tued']); ?>','<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_wend']); ?>','<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_thud']); ?>','<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_frid']); ?>','<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_satd']); ?>'],
    monthNamesShort: ['<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_janu']);   ?>','<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_febr']);   ?>','<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_marc']);   ?>','<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_apri']);   ?>','<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_mayy']);   ?>','<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_june']);   ?>','<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_july']);   ?>','<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_augu']); ?>','<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_sept']); ?>','<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_octo']); ?>','<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_nove']); ?>','<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_dece']); ?>'],
    weekHeader: "<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_days_sem']); ?>",
    firstDay: <?php echo $this->jqueryCalendarWeekInit("" . $_SESSION['scriptcase']['reg_conf']['date_week_ini'] . ""); ?>,
    dateFormat: "<?php echo $this->jqueryCalendarDtFormat("" . str_replace(array('/', 'aaaa', $_SESSION['scriptcase']['reg_conf']['date_sep']), array('', 'yyyy', ''), $this->field_config['fecha_nacimiento']['date_format']) . "", "" . $_SESSION['scriptcase']['reg_conf']['date_sep'] . ""); ?>",
    showOtherMonths: true,
    showOn: "button",
    buttonImage: "<?php echo $this->jqueryIconFile('calendar'); ?>",
    buttonImageOnly: true
  });

  $("#id_sc_field_fecha_reporte" + iSeqRow).datepicker({
    beforeShow: function(input, inst) {
      var $oField = $(this),
          aParts  = $oField.val().split(" "),
          sTime   = "";
      sc_jq_calendar_value["#id_sc_field_fecha_reporte" + iSeqRow] = $oField.val();
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
    dateFormat: "<?php echo $this->jqueryCalendarDtFormat("" . str_replace(array('/', 'aaaa', $_SESSION['scriptcase']['reg_conf']['date_sep']), array('', 'yyyy', ''), $this->field_config['fecha_reporte']['date_format']) . "", "" . $_SESSION['scriptcase']['reg_conf']['date_sep'] . ""); ?>",
    showOtherMonths: true,
    showOn: "button",
    buttonImage: "<?php echo $this->jqueryIconFile('calendar'); ?>",
    buttonImageOnly: true
  });

  $("#id_sc_field_fecha_registro" + iSeqRow).datepicker({
    beforeShow: function(input, inst) {
      var $oField = $(this),
          aParts  = $oField.val().split(" "),
          sTime   = "";
      sc_jq_calendar_value["#id_sc_field_fecha_registro" + iSeqRow] = $oField.val();
      if (2 == aParts.length) {
        sTime = " " + aParts[1];
      }
      if ('' == sTime || ' ' == sTime) {
        sTime = ' <?php echo $this->jqueryCalendarTimeStart($this->field_config['fecha_registro']['date_format']); ?>';
      }
      $oField.datepicker("option", "dateFormat", "<?php echo $this->jqueryCalendarDtFormat("" . str_replace(array('/', 'aaaa', 'hh', 'ii', 'ss', ':', ';', $_SESSION['scriptcase']['reg_conf']['date_sep'], $_SESSION['scriptcase']['reg_conf']['time_sep']), array('', 'yyyy', '','','', '', '', '', ''), $this->field_config['fecha_registro']['date_format']) . "", "" . $_SESSION['scriptcase']['reg_conf']['date_sep'] . ""); ?>" + sTime);
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
    dateFormat: "<?php echo $this->jqueryCalendarDtFormat("" . str_replace(array('/', 'aaaa', 'hh', 'ii', 'ss', ':', ';', $_SESSION['scriptcase']['reg_conf']['date_sep'], $_SESSION['scriptcase']['reg_conf']['time_sep']), array('', 'yyyy', '','','', '', '', '', ''), $this->field_config['fecha_registro']['date_format']) . "", "" . $_SESSION['scriptcase']['reg_conf']['date_sep'] . ""); ?>",
    showOtherMonths: true,
    showOn: "button",
    buttonImage: "<?php echo $this->jqueryIconFile('calendar'); ?>",
    buttonImageOnly: true
  });

  $("#id_sc_field_fecha_reporte_im" + iSeqRow).datepicker({
    beforeShow: function(input, inst) {
      var $oField = $(this),
          aParts  = $oField.val().split(" "),
          sTime   = "";
      sc_jq_calendar_value["#id_sc_field_fecha_reporte_im" + iSeqRow] = $oField.val();
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
    dateFormat: "<?php echo $this->jqueryCalendarDtFormat("" . str_replace(array('/', 'aaaa', $_SESSION['scriptcase']['reg_conf']['date_sep']), array('', 'yyyy', ''), $this->field_config['fecha_reporte_im']['date_format']) . "", "" . $_SESSION['scriptcase']['reg_conf']['date_sep'] . ""); ?>",
    showOtherMonths: true,
    showOn: "button",
    buttonImage: "<?php echo $this->jqueryIconFile('calendar'); ?>",
    buttonImageOnly: true
  });

} // scJQCalendarAdd

function scJQPopupAdd(iSeqRow) {
  $('.scFormPopupBubble' + iSeqRow).each(function() {
    var distance = 10;
    var time = 250;
    var hideDelay = 500;
    var hideDelayTimer = null;
    var beingShown = false;
    var shown = false;
    var trigger = $('.scFormPopupTrigger', this);
    var info = $('.scFormPopup', this).css('opacity', 0);
    $([trigger.get(0), info.get(0)]).mouseover(function() {
      if (hideDelayTimer) clearTimeout(hideDelayTimer);
      if (beingShown || shown) {
        // don't trigger the animation again
        return;
      } else {
        // reset position of info box
        beingShown = true;
        info.css({
          top: trigger.position().top - (info.height() - trigger.height()),
          left: trigger.position().left - ((info.width() - trigger.width()) / 2),
          display: 'block'
        }).animate({
          top: '-=' + distance + 'px',
          opacity: 1
        }, time, 'swing', function() {
          beingShown = false;
          shown = true;
        });
      }
      return false;
      }).mouseout(function() {
      if (hideDelayTimer) clearTimeout(hideDelayTimer);
      hideDelayTimer = setTimeout(function() {
        hideDelayTimer = null;
        info.animate({
          top: '-=' + distance + 'px',
          opacity: 0
        }, time, 'swing', function() {
          shown = false;
          info.css('display', 'none');
        });
      }, hideDelay);
      return false;
    });
  });
} // scJQPopupAdd

function scJQUploadAdd(iSeqRow) {
} // scJQUploadAdd


function scJQElementsAdd(iLine) {
  scJQEventsAdd(iLine);
  scJQCalendarAdd(iLine);
  scJQPopupAdd(iLine);
  scJQUploadAdd(iLine);
} // scJQElementsAdd

