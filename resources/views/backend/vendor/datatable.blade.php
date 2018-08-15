@section('scripts.datatable')
  <script type="text/javascript" src="{{ asset('assets/js/datatables/datatables.js') }}"></script>
  <script type="text/javascript">
    // Variables
    window.datatables_checkbox_style = window.checkbox_style;
    window.messages_add = 'add';
    window.messages_edit = 'edit';
    window.messages_show = 'show';
    window.messages_delete = 'delete';
    window.messages_actions = 'actions';
    window.messages_advanced_search = 'advanced search';
    function datatable_no_rows_handler() {
      alert("NO ROWS SELECTED");
    }
  </script>
  <script src="{{ asset('assets/js/icheck/icheck.min.js') }}"></script>
  <script src="{{ asset('js/datatables/datatable.js') }}"></script>
@append
