
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
  $('#id_sc_field_pswd' + iSeqRow).bind('blur', function() { sc_cambiar_contrasena_pswd_onblur(this, iSeqRow) })
                                  .bind('focus', function() { sc_cambiar_contrasena_pswd_onfocus(this, iSeqRow) });
  $('#id_sc_field_confirm_pswd' + iSeqRow).bind('blur', function() { sc_cambiar_contrasena_confirm_pswd_onblur(this, iSeqRow) })
                                          .bind('focus', function() { sc_cambiar_contrasena_confirm_pswd_onfocus(this, iSeqRow) });
  $('#id_sc_field_old_pswd' + iSeqRow).bind('blur', function() { sc_cambiar_contrasena_old_pswd_onblur(this, iSeqRow) })
                                      .bind('focus', function() { sc_cambiar_contrasena_old_pswd_onfocus(this, iSeqRow) });
} // scJQEventsAdd

function sc_cambiar_contrasena_pswd_onblur(oThis, iSeqRow) {
  do_ajax_cambiar_contrasena_validate_pswd();
  scCssBlur(oThis);
}

function sc_cambiar_contrasena_pswd_onfocus(oThis, iSeqRow) {
  scCssFocus(oThis);
}

function sc_cambiar_contrasena_confirm_pswd_onblur(oThis, iSeqRow) {
  do_ajax_cambiar_contrasena_validate_confirm_pswd();
  scCssBlur(oThis);
}

function sc_cambiar_contrasena_confirm_pswd_onfocus(oThis, iSeqRow) {
  scCssFocus(oThis);
}

function sc_cambiar_contrasena_old_pswd_onblur(oThis, iSeqRow) {
  do_ajax_cambiar_contrasena_validate_old_pswd();
  scCssBlur(oThis);
}

function sc_cambiar_contrasena_old_pswd_onfocus(oThis, iSeqRow) {
  scCssFocus(oThis);
}

function scJQUploadAdd(iSeqRow) {
} // scJQUploadAdd


function scJQElementsAdd(iLine) {
  scJQEventsAdd(iLine);
  scJQUploadAdd(iLine);
} // scJQElementsAdd

