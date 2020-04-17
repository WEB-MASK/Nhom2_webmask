//add user

$(document).ready(function () {
    $("#themtaokhoan").click(function () { 
      var data = $("#frm-newtk").serialize();
          $.ajax({
              type: "POST",
              url: "./php/add-user.php",
              data: data,
              success: function (data) {
                  $('.thongbao').html(data);
              }
          });
  });
});
//add sản phẩm
$(document).ready(function () {
    $("#themsp").click(function (e) { 
        e.preventDefault();
        var data = $("#frm-newtk").serialize();
        $.ajax({
            type: "POST",
            url: "./php/add-sp.php",
            data: data,
            success: function (data) {
                $('.thongbao').html(data);
            }
        });
    });
});