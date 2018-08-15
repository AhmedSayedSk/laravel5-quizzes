/**
 *
 *  @response conatins
 *  -------------------------------------------------------------------------------------------
 *  | KEY                                                 | Available VALUES                  |
 *  -------------------------------------------------------------------------------------------
 *  | success (required)                                  | true, false                       |
 *  -------------------------------------------------------------------------------------------
 *  | toastr (optional when need to display toastr)       | true, false                       |
 *  |   type (required if toastr is true)                 | success, info, error, warning     |
 *  |   msg (required if toastr is true)                  | string, text                      |
 *  -------------------------------------------------------------------------------------------
 *  | redirect (optional when need to display redirect)   | true, false                       |
 *  |   url (required if redirect is true)                | URL                               |
 *  -------------------------------------------------------------------------------------------
 *
 *
 *  ***NOTE***:
 *    when success is false you should send "fields" key.
 *      which is an array contain error messages for each field.
 *      therefore there is always toastr ENABLED with success: false,
 *      there is no need to send toastr when success: false.
 *      Toastr's type is error.
 *      IF YOU WANT TO DISABLE IT send toastr: false. e.g. LoginController.php
 *
 *
 *  @param  _opts {
 *     success: run when request is done and status is success and toastr is enabled.
 *     error: run when request is done and status is error
 *     always: run always
 *  }
 */


class ajax {
  static get(url, data, opts) {
    this.run("GET", url, data, opts);
  }
  static post(url, data, opts) {
    this.run("POST", url, data, opts);
  }
  static put(url, data, opts) {
    this.run("PUT", url, data, opts);
  }
  static patch(url, data, opts) {
    this.run("PATCH", url, data, opts);
  }
  static delete(url, data, opts) {
    this.run("DELETE", url, data, opts);
  }
  static noty(text, type, _opts) {
    noty($.extend({
      text: text,
      type: type,
    }, _opts));
  }
  static overlay(show) {
    let overlay = $('div#general_loading');
    if(show) overlay.fadeIn();
    else overlay.fadeOut();
  }
  static run(_type, _url, _data, _opts) {
    var multipart = {},
      _response;
    if (_data instanceof FormData) multipart = {
      enctype: 'multipart/form-data',
      processData: false,
      contentType: false,
      cache: false,
    };
    $("span.help-block").html('&nbsp;');
    $('div.form-group.has-error').removeClass('has-error');
    let that = this;
    if((_opts != undefined && (_opts.overlay == undefined || (_opts.overlay != undefined && _opts.overlay))) || _opts == undefined)
      that.overlay(true);
    $.ajax($.extend({
      url: _url,
      type: _type,
      dataType: 'JSON',
      data: _data,
    }, multipart))
    .done(function(response) {
      console.log("AJAX RESPONSE", response);
      if (response.success == true) {
        if(response.toastr !== undefined && response.toastr == true)
          that.noty(response.msg, response.type, window.noty_opts);
        if(response.redirect !== undefined && response.redirect == true)
          setTimeout(function() {
            window.location = response.url;
          }, 500);
        that.overlay(false);
        if (_opts != undefined && _opts.success != undefined) _opts.success(response);
      } else if (response.success == false) {
        if(response.toastr === undefined || response.toastr !== false)
          that.noty(window.messages_form_has_error, 'error', window.noty_opts);
        $.each(response['fields'], function(index, el) {
          $('span[data="' + index + '"]').html(el).parent('div.form-group').addClass('has-error');
        });
        that.overlay(false);
        if (_opts != undefined && _opts.error != undefined) _opts.error(response);
      } else that.overlay(false);
    }).fail(function(error) {
      console.log("AJAX ERROR", error);
      if (_opts != undefined && _opts.error != undefined) _opts.error(error);
      if(error.status === 401)
        ajax.noty("401 (Unauthorized)", 'error');
      that.overlay(false);
    }).always(function(response) {
      if (_opts != undefined && _opts.always != undefined) _opts.always(response);
      $('button[data-dismiss="modal"]').trigger('click');
    });
  }
}
