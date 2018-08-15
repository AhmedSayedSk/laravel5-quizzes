/**
 *
 *
 *
 *
 */
function datatable_generate_menu_length(datatable_count) {
  var datatable_menu_lengths = [10, 50, 100, 200, 400, 1000, 2000];
  if ($.inArray(datatable_count, datatable_menu_lengths) === -1) datatable_menu_lengths.push(datatable_count);
  datatable_menu_lengths.sort(function(a, b) {
    return a > b;
  });
  return [datatable_menu_lengths, datatable_menu_lengths];
}
/**
 *
 *
 *
 *
 */
function datatable_get_rows(table) {
  var rows = table.DataTable().rows({
    'page': 'current'
  }).nodes();
  var table_rows = [];
  $('input[type="checkbox"]', rows).each(function(index, el) {
    if ($(el).iCheck('update')[0].checked) table_rows.push(Number($(el).iCheck('update')[0].value));
  });
  return table_rows;
}
/**
 *
 *
 *
 *
 */
function datatable_checkbox_listeners(table) {
  /* Select All Checked? */
  $('body').delegate('input#select_all', 'ifChecked', function(event) {
    var rows = table.DataTable().rows({
      'page': 'current'
    }).nodes();
    $('input[type="checkbox"]', rows).iCheck('check');
  });
  /* Select All UnChecked? */
  $('body').delegate('input#select_all', 'ifUnchecked', function(event) {
    var rows = table.DataTable().rows({
      'page': 'current'
    }).nodes();
    $('input[type="checkbox"]', rows).iCheck('uncheck');
  });
  /* Select One Toggled? */
  $('body').delegate('input#select_one', 'ifToggled', function() {
    var rows = table.DataTable().rows({
      'page': 'current'
    }).nodes();
    var checked = true;
    $('input[type="checkbox"]', rows).each(function(index, el) {
      if (!$(el).iCheck('update')[0].checked) {
        checked = false;
        $(el).parent('div').parent('td').parent('tr').removeClass('highlight')
      } else $(el).parent('div').parent('td').parent('tr').addClass('highlight');
    });
    $('input#select_all').prop('checked', checked).iCheck('update');
  });
}
