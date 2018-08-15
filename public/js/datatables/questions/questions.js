$(document).ready(function($) {
  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });
  var $table1 = $('#questions-table');
  var $table1_datatable = $table1.DataTable({
    processing: false,
    serverSide: true,
    autoWidth: false,
    ajax: {
      url: window.datatable_url,
      method: "POST"
    },
    createdRow: function(row, data, dataIndex) {
      $(row).attr('data-id', data.id);
    },
    columnDefs: [{
      'targets': 0,
      'searchable': false,
      'orderable': false,
      'className': 'checkbox-td',
      'render': function(data, type, full, meta) {
        return '<input tabindex="5" name="table_rows[]" type="checkbox" class="icheck-1" id="select_one" value="' + full.id + '">';
      }
    }],
    columns: [{
      data: function(data) {
        return data.id;
      },
      name: 'id',
      orderable: false,
      searchable: false,
    }, {
      data: function(data) {
        return data.id;
      },
      name: 'id'
    }, {
      data: function(data) {
      	return makeHTML("a", {
          'href': (window.show_route).replace("data.id", data.id),
        }, $.parseHTML(data.content)[0].nodeValue);
      },
      name: 'content'
    }, {
      data: function(data) {
      	var answers = '';
      	$.each(data.answers, function(index, el){
      		var color;
      		if(el.is_true)
      			color = "background: #c5e1a5";
      		answers += "<span style='padding: 5px; " + color + "; margin-right: 5px; border-radius: 5px; border: 1px solid #DDD; line-height: 34px'>" + el.content + '</span>';
      	})
      	return answers;
      },
      name: 'answers',
      orderable: false,
      searchable: false,
    }, {
      data: function(data) {
        return data.category.title;
      },
      name: 'category_id',
    }, {
      data: function(data) {
        return data.created_at_label;
      },
      name: 'created_at_label',
      orderable: false,
      searchable: false,
    }, {
      data: function(data) {
        return makeHTML('div', {
          'class': 'btn-group pull-left btn-group-datatable dropdown-group-in-datatable',
        }, makeHTML('button', {
          'type': "button",
          'class': "btn btn-xs btn-default dropdown-toggle",
          'data-toggle': "dropdown",
          'aria-expanded': "true",
        }, window.messages_actions + ' ' + makeHTML('span', {
          'class': 'caret',
        }, '')) + makeHTML('div', {
          'class': "dropdown-menu dropdown-blue dropdown-menu-right dropdown-menu-in-datatable",
          'role': "menu",
        }, makeHTML('div', {
          'calss': "dt-buttons"
        }, makeHTML('a', {
          'class': 'dt-button text-default show-edit-modal',
          'href': window.edit_route.replace('data.id', data.id),
          'title': window.messages_edit,
        }, makeHTML("i", {
          'class': 'fa fa-pencil',
        }, '') + ' ' + window.messages_edit) + makeHTML('a', {
          'class': 'dt-button text-default show-delete-modal',
          'href:': 'javascript:;',
          'data-toggle': 'modal',
          'data-target': '#delete-modal',
          'data-id': data.id,
          'data-route': (window.destroy_route).replace("data.id", data.id),
          'data-title': data.content,
          'title': window.messages_delete,
        }, makeHTML("i", {
          'class': 'fa fa-trash',
        }, '') + ' ' + window.messages_delete))));
      },
      name: 'actions',
      orderable: false,
      searchable: false,
    }, ],
    dom: 'Blfrtip',
    buttons: [
      $.extend(true, {}, {
        text: `<span><i class="fa fa-trash fa-fw"> </i> ${window.messages_delete}</span>`,
        className: 'dt-button-delete',
      })
    ],
    'drawCallback': function() {
      $(window).trigger('resize');
      $('input.icheck-1').iCheck({
        checkboxClass: 'icheckbox_' + window.datatables_checkbox_style,
        radioClass: 'iradio_' + window.datatables_checkbox_style
      });
      $('input#select_all').iCheck('uncheck');
    },
    "aLengthMenu": datatable_generate_menu_length(window.datatable_count),
    "bStateSave": false,
    initComplete: function() {
      this.api().columns().every(function() {
        var column = this;
        if ($.inArray(column[0][0], [1, 2]) !== -1) {
          var input = document.createElement("input");
          $(input).appendTo($(column.footer()).empty()).on('keyup', function() {
            column.search($(this).val(), false, false, true).draw();
          }).addClass('form-control');
        }
      });
    },
    "language": window.datatable_language,
    "pageLength": window.datatable_count,
    "order": [1, 'desc'],
  }).buttons().container().appendTo('.dropdown-menu-questions');
  datatable_checkbox_listeners($table1);
  $('body').delegate('a.dt-button-delete', 'click', function(event) {
    event.preventDefault();
    var table_rows = datatable_get_rows($table1);
    if (table_rows.length) {
      let title = `${window.messages_delete} ${table_rows.length} ${window.messages_question}`;
      $('#multiDeleteQuestionTitle').html(title);
      $("button.multi-delete-button").trigger('click');
    } else datatable_no_rows_handler();
    });
  $('#multiDeleteQuestionSubmit').click(function(event) {
    event.preventDefault();
    var table_rows = datatable_get_rows($table1);
    ajax.delete(window.destroy_batch_route, {
      table_rows: table_rows
    }, {
      success: function() {
        $('button[data-dismiss="modal"]').trigger('click');
        $table1.DataTable().ajax.reload();
      }
    });
  });
  $('body').delegate('a.show-delete-modal', 'click', function(event) {
    $('form#deleteQuestionForm').attr('data-route', $(this).attr('data-route'));
    $('form#deleteQuestionForm').attr('data-id', $(this).attr('data-id'));
    var title = $(this).attr('data-title');
    $('#deleteQuestionTitle').html(title);
  });
  $('button#deleteQuestionSubmit').click(function(event) {
    event.preventDefault();
    ajax.delete($('form#deleteQuestionForm').attr('data-route'), $('form#deleteQuestionForm').serialize(), {
      success: function() {
        var id = $('form#deleteQuestionForm').attr('data-id');
        $('button[data-dismiss="modal"]').trigger('click');
        $table1.DataTable().ajax.reload();
      }
    });
  });
});
