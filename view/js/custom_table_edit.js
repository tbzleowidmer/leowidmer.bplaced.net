$(document).ready(function(){
  $('#data_table').Tabledit({
    url: 'control/live_edit.php',
    columns: {
      identifier: [0, 'user_id'],
      editable: [[1, 'email'], [2, 'short'], [3, 'usrgroup']]
    },
    buttons: {
      edit: {
        html: '<span class="glyphicon glyphicon-pencil">Edit</span>',
        action: 'edit'

      },
      delete: {
        html: '<span class="glyphicon glyphicon-pencil">Delete</span>',
        action: 'delete'
      }
    }
  });
});