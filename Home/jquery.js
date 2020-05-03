$(document).ready(function() {
    $('#HieuKhauTrang').on('change', function() {
        var HieuKhauTrangID = $(this).val();
        $.ajax({
            method: "POST",
            url: "ajax.php",
            data: { id: HieuKhauTrangID },
            dataType: "html",
            success: function(data) {
                $("#TenKhauTrang").html(data);

            },
            error: function() {
                console.writle('Lỗi');
            }
        });
    });
    $('#HieuKhauTrang1').on('change', function() {
        var HieuKhauTrangID1 = $(this).val();
        $.ajax({
            method: "POST",
            url: "ajax.php",
            data: { hktid: HieuKhauTrangID1 },
            dataType: "html",
            success: function(data) {
                $("tbody").html(data);

            },
            error: function() {
                console.writle('Lỗi');
            }
        });
    });
    //click thêm sản phẩm vào giỏ
    $('#them').click(function(e) {
        e.preventDefault();
        var sl = $("#sl").val();
        var KTID = $("#TenKhauTrang").val();
        $.ajax({
            method: "POST",
            url: "ajax.php",
            data: { tkt: KTID, sl: sl },
            dataType: "html",
            success: function(data) {
                $("#Gia").append(data);
            },
            error: function() {
                console.writle('Lỗi');
            }
        });
    });

    //click thanh toán
    $("#bt_thanhtoan").click(function() {
        var idhd = $("#idhd").val();
        // var idkh = $("#idkh").val();
        // var idnv = $("#idnv").val();

        var data1 = $("#frmhd").serialize();
        $.ajax({
            type: "POST",
            url: "ihd.php",
            data: data1,
            success: function (data1) {
                if (data1 == "loi") {
                    alert("ID Hóa Đơn Đã Tồn Tại");
                } else {
                    var table = document.getElementById("tb_hoadon");
                    for (var i = 1; i < table.rows.length; i++) {
                        $kt = table.rows[i].cells[1].innerHTML;
                        $sl = table.rows[i].cells[2].innerHTML;
                        $.ajax({
                            type: "POST",
                            url: "icthd.php",
                            data: {idhd:idhd,kt:$kt,sl:$sl},
                            success: function (data) {
                                if (data == "loi") {
                                    console.log("lỗi");
                                    
                                }
                            }
                        });
                    }
                    var sum = 0;
                    for (var i = 1; i < table.rows.length; i++) {
                        sum = sum + parseInt(table.rows[i].cells[4].innerHTML);
                    }
                    if(confirm("Tổng tiền hóa đơn: " + sum) == true){
                        location.reload();
                    }else{
                        location.reload();
                    }
                    console.log(sum);
                            }
                        }
                    });


    });

});