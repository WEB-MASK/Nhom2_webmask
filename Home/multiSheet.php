
<?php
require_once('funconnect.php');
db_connect();
global $conn;
require_once('Classes/PHPExcel.php');

if(isset($_POST['btnGui'])){
   
        $file=$_FILES['file']['tmp_name'];
        if($file !=''){
           
    // tmp_name là tên tạm của file
    $objReader =PHPExcel_IOFactory::createReaderForFile($file);// tạo đối tượng reader
    $listWorkSheets=$objReader->listWorksheetNames($file);
    // print_r($listWorkSheets);die;
    foreach($listWorkSheets as $name){
        $objReader->setLoadSheetsOnly('$name');
        $objExcel=$objReader ->load($file);
        $sheetData=$objExcel->getActiveSheet()->toArray('null',true,true,true);
        // print_r($sheetData);
        // Lấy số dòng cao nhất trong Execl
        $highestRow=$objExcel->setActiveSheetIndex()->getHighestRow();
       
     
        for($row=2; $row<= $highestRow;$row++){
           
            $mkt=$sheetData[$row]['A'];
            $tkt=$sheetData[$row]['B'];
            $nuoc=$sheetData[$row]['C'];
            $gia=$sheetData[$row]['D'];
            $soluong=$sheetData[$row]['E'];
            $sql="INSERT INTO khautrang(KhauTrangID,TenKhauTrang,HieuKhauTrangID,NUOCSX,Gia,SoLuong)
            VALUES('$mkt','$tkt','$name','$nuoc',$gia,$soluong)";
            // $mysqli->query($sql);
            mysqli_query($conn,$sql);
           
         }
        
         echo 'Inserted';}
    
    }
   
     else{
         echo'Chưa chọn';
     }
   
     
}
?>

<form action="" method="POST" enctype="multipart/form-data">
        <input type="file" name="file">
        <button type="submit" name="btnGui">Import</button> 
</form>

