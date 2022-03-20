$(document).ready(function() {
  $('#addAdmin').on('submit', function() {
    var name = $("#idc221").val().trim();

    if (name == "") {
      alert("Введите id учителя!")
      return false;
    }

    $.ajax({
      url: '../module/addadmin.php',
      method: 'post',
      dataType: 'html',
      data: $(this).serialize(),
      success: function(data) {
        alert("Администратор назначен!")
      }
    })
  })


  $('#deleteTeacher').on('submit', function() {
    var name = $("#idc22").val().trim();

    if (name == "") {
      alert("Введите id учителя!")
      return false;
    }

    $.ajax({
      url: '../module/deletet.php',
      method: 'post',
      dataType: 'html',
      data: $(this).serialize(),
      success: function(data) {
        alert("Учитель удалён!")
      }
    })
  })


  $('#deleteWork').on('submit', function() {
    var name = $("#idc2").val().trim();

    if (name == "") {
      alert("Введите id работы!")
      return false;
    }

    $.ajax({
      url: '../module/delete.php',
      method: 'post',
      dataType: 'html',
      data: $(this).serialize(),
      success: function(data) {
        alert("Работа удалена!")
      }
    })
  })
});
