<?php
    $ten = $_POST['ten'];
    $pas = $_POST['mk'];
    //Tạo kết nối đến CSDL
   $conn = mysqli_connect("localhost","root","123456789","thongtin"); 
    //Câu truy vấn
   $kt = "select * from quantri where username = '".$ten."'";
   $result = mysqli_query($conn,$kt) or die ("Không thể kết nối được !");
   //Note người dùng phải nhập thông tin
   $kt1 = "select * from nguoidung where username = '".$ten."'";
   $result1 = mysqli_query($conn,$kt1) or die ("Không thể kết nối được !");
   if($row = mysqli_fetch_array($result))
   {
     if($ten == $row['username'])
     {
       if($pas == $row['password'])
       {
         //Hiển thị nội dung thông tin trong sesction
         //Kiểm tra có tồn tại không trước khi nó chuyển trang 
         $_SESSION['ten'] = $_POST['pas'];
         //Sử dụng header location để điều hướng trang và chuyển trang
         header('location:bait03/trangchugiaodien.php');
       }    
       else
       {
         echo "Mật khẩu không hợp lệ !";
       }
     } 
   }
   elseif ($row1 = mysqli_fetch_array($result1)) 
   {
     if($ten == $row1['username'])
     {
       if($pas == $row1['password'])
       {
         //Hiển thị nội dung thông tin trong sesction
         //Kiểm tra có tồn tại không trước khi nó chuyển trang 
         $_SESSION['ten'] = $_POST['pas'];
         //Sử dụng header location để điều hướng trang và chuyển trang
         header('location:bait03/bait04/trangchugiaodien.php');
       }    
       else
       {
         echo "Mật khẩu không hợp lệ !";
       }
     }   
   }
   else 
     {
       echo "Tên đăng nhập không hợp lệ !";
     }
?>
<p align="left"><a href="trangdangnhap.php">Quay lại tra