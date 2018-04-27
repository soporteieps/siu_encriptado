
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
  $('#id_sc_field_estado_org' + iSeqRow).bind('blur', function() { sc_form_u_organizaciones_estado_org_onblur(this, iSeqRow) })
                                        .bind('focus', function() { sc_form_u_organizaciones_estado_org_onfocus(this, iSeqRow) });
  $('#id_sc_field_ruc_provisional' + iSeqRow).bind('blur', function() { sc_form_u_organizaciones_ruc_provisional_onblur(this, iSeqRow) })
                                             .bind('focus', function() { sc_form_u_organizaciones_ruc_provisional_onfocus(this, iSeqRow) });
  $('#id_sc_field_ruc_definitivo' + iSeqRow).bind('blur', function() { sc_form_u_organizaciones_ruc_definitivo_onblur(this, iSeqRow) })
                                            .bind('focus', function() { sc_form_u_organizaciones_ruc_definitivo_onfocus(this, iSeqRow) });
  $('#id_sc_field_organizacion' + iSeqRow).bind('blur', function() { sc_form_u_organizaciones_organizacion_onblur(this, iSeqRow) })
                                          .bind('focus', function() { sc_form_u_organizaciones_organizacion_onfocus(this, iSeqRow) });
  $('#id_sc_field_actividad' + iSeqRow).bind('blur', function() { sc_form_u_organizaciones_actividad_onblur(this, iSeqRow) })
                                       .bind('focus', function() { sc_form_u_organizaciones_actividad_onfocus(this, iSeqRow) });
  $('#id_sc_field_categoria_actividad_mp' + iSeqRow).bind('blur', function() { sc_form_u_organizaciones_categoria_actividad_mp_onblur(this, iSeqRow) })
                                                    .bind('change', function() { sc_form_u_organizaciones_categoria_actividad_mp_onchange(this, iSeqRow) })
                                                    .bind('focus', function() { sc_form_u_organizaciones_categoria_actividad_mp_onfocus(this, iSeqRow) });
  $('#id_sc_field_identificacion_actividad_mp' + iSeqRow).bind('blur', function() { sc_form_u_organizaciones_identificacion_actividad_mp_onblur(this, iSeqRow) })
                                                         .bind('focus', function() { sc_form_u_organizaciones_identificacion_actividad_mp_onfocus(this, iSeqRow) });
  $('#id_sc_field_forma_organizacion' + iSeqRow).bind('blur', function() { sc_form_u_organizaciones_forma_organizacion_onblur(this, iSeqRow) })
                                                .bind('focus', function() { sc_form_u_organizaciones_forma_organizacion_onfocus(this, iSeqRow) });
  $('#id_sc_field_estado_organizacion' + iSeqRow).bind('blur', function() { sc_form_u_organizaciones_estado_organizacion_onblur(this, iSeqRow) })
                                                 .bind('change', function() { sc_form_u_organizaciones_estado_organizacion_onchange(this, iSeqRow) })
                                                 .bind('focus', function() { sc_form_u_organizaciones_estado_organizacion_onfocus(this, iSeqRow) });
  $('#id_sc_field_num_socios' + iSeqRow).bind('blur', function() { sc_form_u_organizaciones_num_socios_onblur(this, iSeqRow) })
                                        .bind('focus', function() { sc_form_u_organizaciones_num_socios_onfocus(this, iSeqRow) });
  $('#id_sc_field_email' + iSeqRow).bind('blur', function() { sc_form_u_organizaciones_email_onblur(this, iSeqRow) })
                                   .bind('focus', function() { sc_form_u_organizaciones_email_onfocus(this, iSeqRow) });
  $('#id_sc_field_telefono' + iSeqRow).bind('blur', function() { sc_form_u_organizaciones_telefono_onblur(this, iSeqRow) })
                                      .bind('focus', function() { sc_form_u_organizaciones_telefono_onfocus(this, iSeqRow) });
  $('#id_sc_field_tipo' + iSeqRow).bind('blur', function() { sc_form_u_organizaciones_tipo_onblur(this, iSeqRow) })
                                  .bind('change', function() { sc_form_u_organizaciones_tipo_onchange(this, iSeqRow) })
                                  .bind('focus', function() { sc_form_u_organizaciones_tipo_onfocus(this, iSeqRow) });
  $('#id_sc_field_circuito_economico' + iSeqRow).bind('blur', function() { sc_form_u_organizaciones_circuito_economico_onblur(this, iSeqRow) })
                                                .bind('focus', function() { sc_form_u_organizaciones_circuito_economico_onfocus(this, iSeqRow) });
  $('#id_sc_field_fecha_registro' + iSeqRow).bind('blur', function() { sc_form_u_organizaciones_fecha_registro_onblur(this, iSeqRow) })
                                            .bind('focus', function() { sc_form_u_organizaciones_fecha_registro_onfocus(this, iSeqRow) });
  $('#id_sc_field_fecha_registro_hora' + iSeqRow).bind('blur', function() { sc_form_u_organizaciones_fecha_registro_hora_onblur(this, iSeqRow) })
                                                 .bind('focus', function() { sc_form_u_organizaciones_fecha_registro_hora_onfocus(this, iSeqRow) });
  $('#id_sc_field_user' + iSeqRow).bind('blur', function() { sc_form_u_organizaciones_user_onblur(this, iSeqRow) })
                                  .bind('focus', function() { sc_form_u_organizaciones_user_onfocus(this, iSeqRow) });
  $('#id_sc_field_cedula_representante_legal' + iSeqRow).bind('blur', function() { sc_form_u_organizaciones_cedula_representante_legal_onblur(this, iSeqRow) })
                                                        .bind('focus', function() { sc_form_u_organizaciones_cedula_representante_legal_onfocus(this, iSeqRow) });
  $('#id_sc_field_nombre_representante_legal' + iSeqRow).bind('blur', function() { sc_form_u_organizaciones_nombre_representante_legal_onblur(this, iSeqRow) })
                                                        .bind('focus', function() { sc_form_u_organizaciones_nombre_representante_legal_onfocus(this, iSeqRow) });
  $('#id_sc_field_cod_zona' + iSeqRow).bind('blur', function() { sc_form_u_organizaciones_cod_zona_onblur(this, iSeqRow) })
                                      .bind('change', function() { sc_form_u_organizaciones_cod_zona_onchange(this, iSeqRow) })
                                      .bind('focus', function() { sc_form_u_organizaciones_cod_zona_onfocus(this, iSeqRow) });
  $('#id_sc_field_cod_provincia' + iSeqRow).bind('blur', function() { sc_form_u_organizaciones_cod_provincia_onblur(this, iSeqRow) })
                                           .bind('change', function() { sc_form_u_organizaciones_cod_provincia_onchange(this, iSeqRow) })
                                           .bind('focus', function() { sc_form_u_organizaciones_cod_provincia_onfocus(this, iSeqRow) });
  $('#id_sc_field_cod_canton' + iSeqRow).bind('blur', function() { sc_form_u_organizaciones_cod_canton_onblur(this, iSeqRow) })
                                        .bind('change', function() { sc_form_u_organizaciones_cod_canton_onchange(this, iSeqRow) })
                                        .bind('focus', function() { sc_form_u_organizaciones_cod_canton_onfocus(this, iSeqRow) });
  $('#id_sc_field_cod_parroquia' + iSeqRow).bind('blur', function() { sc_form_u_organizaciones_cod_parroquia_onblur(this, iSeqRow) })
                                           .bind('focus', function() { sc_form_u_organizaciones_cod_parroquia_onfocus(this, iSeqRow) });
  $('#id_sc_field_direccion' + iSeqRow).bind('blur', function() { sc_form_u_organizaciones_direccion_onblur(this, iSeqRow) })
                                       .bind('focus', function() { sc_form_u_organizaciones_direccion_onfocus(this, iSeqRow) });
  $('#id_sc_field_celular' + iSeqRow).bind('blur', function() { sc_form_u_organizaciones_celular_onblur(this, iSeqRow) })
                                     .bind('focus', function() { sc_form_u_organizaciones_celular_onfocus(this, iSeqRow) });
  $('#id_sc_field_num_resolucion' + iSeqRow).bind('blur', function() { sc_form_u_organizaciones_num_resolucion_onblur(this, iSeqRow) })
                                            .bind('focus', function() { sc_form_u_organizaciones_num_resolucion_onfocus(this, iSeqRow) });
  $('#id_sc_field_estado_juridico' + iSeqRow).bind('blur', function() { sc_form_u_organizaciones_estado_juridico_onblur(this, iSeqRow) })
                                             .bind('focus', function() { sc_form_u_organizaciones_estado_juridico_onfocus(this, iSeqRow) });
  $('#id_sc_field_producto_servicio' + iSeqRow).bind('blur', function() { sc_form_u_organizaciones_producto_servicio_onblur(this, iSeqRow) })
                                               .bind('focus', function() { sc_form_u_organizaciones_producto_servicio_onfocus(this, iSeqRow) });
  $('#id_sc_field_legalmente_constituida' + iSeqRow).bind('blur', function() { sc_form_u_organizaciones_legalmente_constituida_onblur(this, iSeqRow) })
                                                    .bind('focus', function() { sc_form_u_organizaciones_legalmente_constituida_onfocus(this, iSeqRow) });
  $('#id_sc_field_tipo_registro' + iSeqRow).bind('blur', function() { sc_form_u_organizaciones_tipo_registro_onblur(this, iSeqRow) })
                                           .bind('focus', function() { sc_form_u_organizaciones_tipo_registro_onfocus(this, iSeqRow) });
  $('#id_sc_field_ruc' + iSeqRow).bind('blur', function() { sc_form_u_organizaciones_ruc_onblur(this, iSeqRow) })
                                 .bind('focus', function() { sc_form_u_organizaciones_ruc_onfocus(this, iSeqRow) });
  $('#id_sc_field_btnbuscar' + iSeqRow).bind('blur', function() { sc_form_u_organizaciones_btnbuscar_onblur(this, iSeqRow) })
                                       .bind('click', function() { sc_form_u_organizaciones_btnbuscar_onclick(this, iSeqRow) })
                                       .bind('focus', function() { sc_form_u_organizaciones_btnbuscar_onfocus(this, iSeqRow) });
} // scJQEventsAdd

function sc_form_u_organizaciones_estado_org_onblur(oThis, iSeqRow) {
  do_ajax_form_u_organizaciones_validate_estado_org();
  scCssBlur(oThis);
}

function sc_form_u_organizaciones_estado_org_onfocus(oThis, iSeqRow) {
  scCssFocus(oThis);
}

function sc_form_u_organizaciones_ruc_provisional_onblur(oThis, iSeqRow) {
  do_ajax_form_u_organizaciones_validate_ruc_provisional();
  scCssBlur(oThis);
}

function sc_form_u_organizaciones_ruc_provisional_onfocus(oThis, iSeqRow) {
  scCssFocus(oThis);
}

function sc_form_u_organizaciones_ruc_definitivo_onblur(oThis, iSeqRow) {
  do_ajax_form_u_organizaciones_validate_ruc_definitivo();
  scCssBlur(oThis);
}

function sc_form_u_organizaciones_ruc_definitivo_onfocus(oThis, iSeqRow) {
  scCssFocus(oThis);
}

function sc_form_u_organizaciones_organizacion_onblur(oThis, iSeqRow) {
  do_ajax_form_u_organizaciones_validate_organizacion();
  scCssBlur(oThis);
}

function sc_form_u_organizaciones_organizacion_onfocus(oThis, iSeqRow) {
  scCssFocus(oThis);
}

function sc_form_u_organizaciones_actividad_onblur(oThis, iSeqRow) {
  do_ajax_form_u_organizaciones_validate_actividad();
  scCssBlur(oThis);
}

function sc_form_u_organizaciones_actividad_onfocus(oThis, iSeqRow) {
  scCssFocus(oThis);
}

function sc_form_u_organizaciones_categoria_actividad_mp_onblur(oThis, iSeqRow) {
  do_ajax_form_u_organizaciones_validate_categoria_actividad_mp();
  scCssBlur(oThis);
}

function sc_form_u_organizaciones_categoria_actividad_mp_onchange(oThis, iSeqRow) {
  do_ajax_form_u_organizaciones_refresh_categoria_actividad_mp();
}

function sc_form_u_organizaciones_categoria_actividad_mp_onfocus(oThis, iSeqRow) {
  scCssFocus(oThis);
}

function sc_form_u_organizaciones_identificacion_actividad_mp_onblur(oThis, iSeqRow) {
  do_ajax_form_u_organizaciones_validate_identificacion_actividad_mp();
  scCssBlur(oThis);
}

function sc_form_u_organizaciones_identificacion_actividad_mp_onfocus(oThis, iSeqRow) {
  scCssFocus(oThis);
}

function sc_form_u_organizaciones_forma_organizacion_onblur(oThis, iSeqRow) {
  do_ajax_form_u_organizaciones_validate_forma_organizacion();
  scCssBlur(oThis);
}

function sc_form_u_organizaciones_forma_organizacion_onfocus(oThis, iSeqRow) {
  scCssFocus(oThis);
}

function sc_form_u_organizaciones_estado_organizacion_onblur(oThis, iSeqRow) {
  do_ajax_form_u_organizaciones_validate_estado_organizacion();
  scCssBlur(oThis);
}

function sc_form_u_organizaciones_estado_organizacion_onchange(oThis, iSeqRow) {
  do_ajax_form_u_organizaciones_refresh_estado_organizacion();
}

function sc_form_u_organizaciones_estado_organizacion_onfocus(oThis, iSeqRow) {
  scCssFocus(oThis);
}

function sc_form_u_organizaciones_num_socios_onblur(oThis, iSeqRow) {
  do_ajax_form_u_organizaciones_validate_num_socios();
  scCssBlur(oThis);
}

function sc_form_u_organizaciones_num_socios_onfocus(oThis, iSeqRow) {
  scCssFocus(oThis);
}

function sc_form_u_organizaciones_email_onblur(oThis, iSeqRow) {
  do_ajax_form_u_organizaciones_validate_email();
  scCssBlur(oThis);
  do_ajax_form_u_organizaciones_event_email_onblur();
}

function sc_form_u_organizaciones_email_onfocus(oThis, iSeqRow) {
  scCssFocus(oThis);
}

function sc_form_u_organizaciones_telefono_onblur(oThis, iSeqRow) {
  do_ajax_form_u_organizaciones_validate_telefono();
  scCssBlur(oThis);
}

function sc_form_u_organizaciones_telefono_onfocus(oThis, iSeqRow) {
  scCssFocus(oThis);
}

function sc_form_u_organizaciones_tipo_onblur(oThis, iSeqRow) {
  do_ajax_form_u_organizaciones_validate_tipo();
  scCssBlur(oThis);
}

function sc_form_u_organizaciones_tipo_onchange(oThis, iSeqRow) {
  do_ajax_form_u_organizaciones_refresh_tipo();
}

function sc_form_u_organizaciones_tipo_onfocus(oThis, iSeqRow) {
  scCssFocus(oThis);
}

function sc_form_u_organizaciones_circuito_economico_onblur(oThis, iSeqRow) {
  do_ajax_form_u_organizaciones_validate_circuito_economico();
  scCssBlur(oThis);
}

function sc_form_u_organizaciones_circuito_economico_onfocus(oThis, iSeqRow) {
  scCssFocus(oThis);
}

function sc_form_u_organizaciones_fecha_registro_onblur(oThis, iSeqRow) {
  do_ajax_form_u_organizaciones_validate_fecha_registro();
  scCssBlur(oThis);
}

function sc_form_u_organizaciones_fecha_registro_hora_onblur(oThis, iSeqRow) {
  do_ajax_form_u_organizaciones_validate_fecha_registro();
  scCssBlur(oThis);
}

function sc_form_u_organizaciones_fecha_registro_onfocus(oThis, iSeqRow) {
  scCssFocus(oThis);
}

function sc_form_u_organizaciones_fecha_registro_hora_onfocus(oThis, iSeqRow) {
  scCssFocus(oThis);
}

function sc_form_u_organizaciones_user_onblur(oThis, iSeqRow) {
  do_ajax_form_u_organizaciones_validate_user();
  scCssBlur(oThis);
}

function sc_form_u_organizaciones_user_onfocus(oThis, iSeqRow) {
  scCssFocus(oThis);
}

function sc_form_u_organizaciones_cedula_representante_legal_onblur(oThis, iSeqRow) {
  do_ajax_form_u_organizaciones_validate_cedula_representante_legal();
  scCssBlur(oThis);
}

function sc_form_u_organizaciones_cedula_representante_legal_onfocus(oThis, iSeqRow) {
  scCssFocus(oThis);
}

function sc_form_u_organizaciones_nombre_representante_legal_onblur(oThis, iSeqRow) {
  do_ajax_form_u_organizaciones_validate_nombre_representante_legal();
  scCssBlur(oThis);
}

function sc_form_u_organizaciones_nombre_representante_legal_onfocus(oThis, iSeqRow) {
  scCssFocus(oThis);
}

function sc_form_u_organizaciones_cod_zona_onblur(oThis, iSeqRow) {
  do_ajax_form_u_organizaciones_validate_cod_zona();
  scCssBlur(oThis);
}

function sc_form_u_organizaciones_cod_zona_onchange(oThis, iSeqRow) {
  do_ajax_form_u_organizaciones_refresh_cod_zona();
}

function sc_form_u_organizaciones_cod_zona_onfocus(oThis, iSeqRow) {
  scCssFocus(oThis);
}

function sc_form_u_organizaciones_cod_provincia_onblur(oThis, iSeqRow) {
  do_ajax_form_u_organizaciones_validate_cod_provincia();
  scCssBlur(oThis);
}

function sc_form_u_organizaciones_cod_provincia_onchange(oThis, iSeqRow) {
  do_ajax_form_u_organizaciones_refresh_cod_provincia();
}

function sc_form_u_organizaciones_cod_provincia_onfocus(oThis, iSeqRow) {
  scCssFocus(oThis);
}

function sc_form_u_organizaciones_cod_canton_onblur(oThis, iSeqRow) {
  do_ajax_form_u_organizaciones_validate_cod_canton();
  scCssBlur(oThis);
}

function sc_form_u_organizaciones_cod_canton_onchange(oThis, iSeqRow) {
  do_ajax_form_u_organizaciones_refresh_cod_canton();
}

function sc_form_u_organizaciones_cod_canton_onfocus(oThis, iSeqRow) {
  scCssFocus(oThis);
}

function sc_form_u_organizaciones_cod_parroquia_onblur(oThis, iSeqRow) {
  do_ajax_form_u_organizaciones_validate_cod_parroquia();
  scCssBlur(oThis);
}

function sc_form_u_organizaciones_cod_parroquia_onfocus(oThis, iSeqRow) {
  scCssFocus(oThis);
}

function sc_form_u_organizaciones_direccion_onblur(oThis, iSeqRow) {
  do_ajax_form_u_organizaciones_validate_direccion();
  scCssBlur(oThis);
}

function sc_form_u_organizaciones_direccion_onfocus(oThis, iSeqRow) {
  scCssFocus(oThis);
}

function sc_form_u_organizaciones_celular_onblur(oThis, iSeqRow) {
  do_ajax_form_u_organizaciones_validate_celular();
  scCssBlur(oThis);
}

function sc_form_u_organizaciones_celular_onfocus(oThis, iSeqRow) {
  scCssFocus(oThis);
}

function sc_form_u_organizaciones_num_resolucion_onblur(oThis, iSeqRow) {
  do_ajax_form_u_organizaciones_validate_num_resolucion();
  scCssBlur(oThis);
}

function sc_form_u_organizaciones_num_resolucion_onfocus(oThis, iSeqRow) {
  scCssFocus(oThis);
}

function sc_form_u_organizaciones_estado_juridico_onblur(oThis, iSeqRow) {
  do_ajax_form_u_organizaciones_validate_estado_juridico();
  scCssBlur(oThis);
}

function sc_form_u_organizaciones_estado_juridico_onfocus(oThis, iSeqRow) {
  scCssFocus(oThis);
}

function sc_form_u_organizaciones_producto_servicio_onblur(oThis, iSeqRow) {
  do_ajax_form_u_organizaciones_validate_producto_servicio();
  scCssBlur(oThis);
}

function sc_form_u_organizaciones_producto_servicio_onfocus(oThis, iSeqRow) {
  scCssFocus(oThis);
}

function sc_form_u_organizaciones_legalmente_constituida_onblur(oThis, iSeqRow) {
  do_ajax_form_u_organizaciones_validate_legalmente_constituida();
  scCssBlur(oThis);
}

function sc_form_u_organizaciones_legalmente_constituida_onfocus(oThis, iSeqRow) {
  scCssFocus(oThis);
}

function sc_form_u_organizaciones_tipo_registro_onblur(oThis, iSeqRow) {
  do_ajax_form_u_organizaciones_validate_tipo_registro();
  scCssBlur(oThis);
}

function sc_form_u_organizaciones_tipo_registro_onfocus(oThis, iSeqRow) {
  scCssFocus(oThis);
}

function sc_form_u_organizaciones_ruc_onblur(oThis, iSeqRow) {
  do_ajax_form_u_organizaciones_validate_ruc();
  scCssBlur(oThis);
}

function sc_form_u_organizaciones_ruc_onfocus(oThis, iSeqRow) {
  scCssFocus(oThis);
}

function sc_form_u_organizaciones_btnbuscar_onblur(oThis, iSeqRow) {
  do_ajax_form_u_organizaciones_validate_btnbuscar();
  scCssBlur(oThis);
}

function sc_form_u_organizaciones_btnbuscar_onclick(oThis, iSeqRow) {
  do_ajax_form_u_organizaciones_event_btnbuscar_onclick();
}

function sc_form_u_organizaciones_btnbuscar_onfocus(oThis, iSeqRow) {
  scCssFocus(oThis);
}

var sc_jq_calendar_value = {};

function scJQCalendarAdd(iSeqRow) {
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
    yearRange: 'c-1:c+1',
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

} // scJQCalendarAdd

function scJQUploadAdd(iSeqRow) {
} // scJQUploadAdd


function scJQElementsAdd(iLine) {
  scJQEventsAdd(iLine);
  scJQCalendarAdd(iLine);
  scJQUploadAdd(iLine);
} // scJQElementsAdd

