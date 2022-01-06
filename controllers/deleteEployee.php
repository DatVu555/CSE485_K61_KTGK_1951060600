<?php
     $conn = mysqli_connect('localhost','root','','1951060600_university');
    if(!$conn){
      die("Kết nối thất bại. Vui lòng kiểm tra lại");
    }
    $sql = "DELETE * FROM db.GIANGVIEN WHERE magv = '$magv";
    $number = mysqli_query($conn,$sql);

    if($number > 0){
        header("location: admin.php");
    }
    else{
        header("location: error.php");
    }
?>