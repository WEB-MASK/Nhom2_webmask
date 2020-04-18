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
        var data = $("#frm-sp").serialize();
        $.ajax({
            type: "POST",
            url: "./php/add-sp.php",
            data: data,
            success: function (data) {
                alert(data);
                location.reload();
            }
        });
    });
});

//edit san pham
$(document).ready(function () {
    $("#editSP").click(function (e) { 
        e.preventDefault();
        $('#formEdit').css('display','none');
        var data = $("#frm-edit").serialize();
        $.ajax({
            type: "POST",
            url: "./php/edit-sp.php",
            data: data,
            success: function (data) {
                alert(data);
                location.reload();
            }
        });
    });
});
function ab(x){
    $(".idsp-en").html("ID :"+x[0].toString());
    $(".idsp").val(x[0].toString());
    $(".ten").val(x[1].toString());
    $(".xs").val(x[5].toString());
    $(".gia").val(x[2].toString());
    $(".sl").val(x[3].toString());
    $(".idncc").val(x[4].toString());
};
$(document).ready(function () {
    $(function () {
        $("#huyEdit").click(function (e) { 
            e.preventDefault();
            $('#formEdit').css('display','none');
        });
    });

});
//click thẻ a sửa sp
$(document).ready(function () {
    $("#tb-sp .sua").click(function (e) { 
        e.preventDefault();
        var x =[];
        var i;
        for (i = 0; i < 6; i++) {
            x.push($(this).closest('tr').find('td').eq(i).html());
        }
        $('#formEdit').css('display','block');
        //gọi hàm ab Truyền x
        ab(x);
    });
   
});
//change loc san pham

$(document).ready(function(){  
    $('#show-ncc').change(function(){  
        var id = $(this).val();  
        $.ajax({  
            url:"./php/locSP.php",  
            method:"POST",  
            data:{idncc:id},  
            success:function(data){  
                $('#tb-sp').html(data);  
            }  
        });  
    });  
});  
