<?php
    //Tạo kết nối 
    $coon = mysqli_connect("localhost","root","123456789","thongtin") or ("Không thể kết nối");
    //Câu truy vân
    $sql = "select * from formkqdk where masv = '".$ma."'";
    //
    $result = mysqli_query($coon, $sql) or ("Không thể kết nối");
    $search = $_POST['search'];
    if($search == $ma)
    if($row = mysqli_fetch_array($result)){
        echo 'Mã sinh viên'.$row['masv'];
        echo '<br/>Họ tên: '.$row['hoten'];
        echo '<br/>Lớp:'.$row['lop'];
        echo '<br/>Khoa:'.$row['khoa'];
        echo '<br/>Nơi ở:'.$row['noio'];
        echo '<br/>Quê quán:'.$row['quequan'];
        echo '<br/>Số điện thoại:'.$row['phone'];
        echo '<br/>Email:'.$row['email'];
        echo '<br/>Ngày đăng ký:'.$row['ngaydangky'];
    }
?>