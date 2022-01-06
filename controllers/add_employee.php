<?php
    session_start();
    if(!isset($_SESSION['isLoginOK'])){
        header("location:login.php");
    }
?>
    <main>
    <div class="container">
        <h5 class="text-center">Thêm mới giáo viên</h5>
        <form action="process-add-employee.php" method="post">
            <div class="form-group">
                <label for="txtHoTen">Họ và tên</label>
                <input type="text" class="form-control" id="txtHoTen" name="txtHoTen" placeholder="Nhập họ tên">
            </div>
            
            <div class="form-group">
                <label for="txtNgaysinh">Ngày sinh</label>
                <input type="text" class="form-control" id="txtNgaysinh" name="txtChucVu" placeholder="Nhập Ngày sinh">
            </div>

            <div class="form-group">
                <label for="txtTrinhdo">Trình độ</label>
                <input type="text" class="form-control" id="txtTrinhdo" name="txtTrinhdo" placeholder="Nhập trình độ">
            </div>
            <div class="form-group">
                <label for="txtchuyenmon">Chuyên môn</label>
                <input type="text" class="form-control" id="txtchuyenmon" name="txtchuyenmon" placeholder="Nhập chuyên môn">
                
            </div>
            <div class="form-group">
                <label for="txthocham">Học hàm</label>
                <input type="text" class="form-control" id="txthocham" name="txthocham" placeholder="Nhập học hàm">
               
            </div>
            <div class="form-group">
                <label for="txthocvi">Học vị</label>
                <input type="text" class="form-control" id="txthocvi" name="txthocvi" placeholder="Nhập học vị">
               
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect2">Cơ quan/Đơn vị/</label>
                <select class="form-control" id="cboDonVi" name="cboDonVi">
                    <?php 
                        $conn = mysqli_connect('localhost','root','','1951060600_university');
                        if(!$conn){
                            die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
                        }
                        $sql = "SELECT * FROM db_donvi";

                        $result = mysqli_query($conn,$sql);
                        if(mysqli_num_rows($result)){
                            while($row = mysqli_fetch_assoc($result)){
                    ?>
                                <option value="<?php echo $row['ma_donvi']; ?>"><?php echo $row['ten_donvi']; ?></option>
                    <?php
                            }
                        }
                        mysqli_close($conn);
                    ?>
               
                </select>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Lưu lại</button>
        </form>
    </div>    
    </main>
