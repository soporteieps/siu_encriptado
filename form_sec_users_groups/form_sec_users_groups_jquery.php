
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
  $('#id_sc_field_login' + iSeqRow).bind('blur', function() { sc_form_sec_users_groups_login_onblur(this, iSeqRow) })
                                   .bind('focus', function() { sc_form_sec_users_groups_login_onfocus(this, iSeqRow) });
  $('#id_sc_field_group_id' + iSeqRow).bind('blur', function() { sc_form_sec_users_groups_group_id_onblur(this, iSeqRow) })
                                      .bind('focus', function() { sc_form_sec_users_groups_group_id_onfocus(this, iSeqRow) });
  $('#id_sc_field_usuario' + iSeqRow).bind('blur', function() { sc_form_sec_users_groups_usuario_onblur(this, iSeqRow) })
                                     .bind('change', function() { sc_form_sec_users_groups_usuario_onchange(this, iSeqRow) })
                                     .bind('focus', function() { sc_form_sec_users_groups_usuario_onfocus(this, iSeqRow) });
} // scJQEventsAdd

function sc_form_sec_users_groups_login_onblur(oThis, iSeqRow) {
  do_ajax_form_sec_users_groups_validate_login();
  scCssBlur(oThis);
}

function sc_form_sec_users_groups_login_onfocus(oThis, iSeqRow) {
  scCssFocus(oThis);
}

function sc_form_sec_users_groups_group_id_onblur(oThis, iSeqRow) {
  do_ajax_form_sec_users_groups_validate_group_id();
  scCssBlur(oThis);
}

function sc_form_sec_users_groups_group_id_onfocus(oThis, iSeqRow) {
  scCssFocus(oThis);
}

function sc_form_sec_users_groups_usuario_onblur(oThis, iSeqRow) {
  do_ajax_form_sec_users_groups_validate_usuario();
  scCssBlur(oThis);
}

function sc_form_sec_users_groups_usuario_onchange(oThis, iSeqRow) {
  do_ajax_form_sec_users_groups_event_usuario_onchange();
}

function sc_form_sec_users_groups_usuario_onfocus(oThis, iSeqRow) {
  scCssFocus(oThis);
}

function scJQUploadAdd(iSeqRow) {
} // scJQUploadAdd


function scJQElementsAdd(iLine) {
  scJQEventsAdd(iLine);
  scJQUploadAdd(iLine);
} // scJQElementsAdd

