<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Quản lý đại học</title>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">TLU -admin</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled">Disabled</a>
          </li>
        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
  <h3 class="text-center">Quản lý thông tin Giảng viên</h3>
  <div> <button class="btn btn-primary">Thêm</button></div>
  <table class="table">
  <thead>
      <tr>
        <th scope="col">Mã giảng viên</th>
        <th scope="col">Họ và tên</th>
        <th scope="col">Ngày sinh</th>
        <th scope="col">Giới tính</th>
        <th scope="col">Trình độ</th>
        <th scope="col">Chuyên môn</th>
        <th scope="col">Học hàm</th>
        <th scope="col">Học vị</th>
        <th scope="col">Cơ quan/Đơn vị</th>
        <th scope="col">Sửa</th>
        <th scope="col">Xóa</th>
      </tr>
  </thead>
  <tbody>
    <?php
        $conn = mysqli_connect('localhost','root','','1951060600_university');
        if(!$conn){
          die("Kết nối thất bại. Vui lòng kiểm tra lại");
        }
        $sql = "SELECT * FROM db.giangvien";
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result) > 0){
          while($row = mysqli_fetch_assoc($result)){
    ?>
            <tr>
                <th scope="row"><?php echo $row[''];?></th>
                <td><?php echo $row['magv'];?></td>
                <td><?php echo $row['hovaten'];?></td>
                <td><?php echo $row['ngaysinh'];?></td>
                <th><?php echo $row['gioitinh'];?></th>
                <td><?php echo $row['trinhdo'];?></td>
                <td><?php echo $row['chuyenmon'];?></td>
                <td><?php echo $row['hocham'];?></td>
                <td><?php echo $row['hocvi'];?></td>
                <td><?php echo $row['coquan'];?></td>
                <td><a href=""><i class="bi bi-pencil-square"></i></a></td>
                <td><a href="deleteEployee.php?id=<?php echo $row['magv'];?>"><i class="bi bi-trash"></i></a></td>
            </tr>
      <?php
          }
        }
      ?>
  </tbody>
</table>
</body>
</html>