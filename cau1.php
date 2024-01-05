<!DOCTYPE html>
<html lang="en">
<body>
    <form method="get">
    <label for="">Mã khách hàng</label>
    <input type="text" name='MAKH' placeholder="Mã khách hàng"><br>
    <label for="">Tên khách hàng</label>
    <input type="text" name='TENKH' placeholder="Tên khách hàng"><br>
    <label for="">Số điện thoại</label>
    <input type="text" name='SDT' placeholder="Số điện thoại"><br>
    <label for="">Căn cước công nhân</label>
    <input type="text" name='CCCN' placeholder="Căn cước công nhân"><br>
    <input type='submit'name='submit' value='Thêm'>
    </form>
    <a href="trangchu.html">về trang chủ</a>
    <?php
        include('connect.php');
        if(isset($_GET['submit']) && $_GET['submit']=='Thêm'){
            $makh = $_GET['MAKH'];
            $tenkh = $_GET['TENKH'];
            $sdt = $_GET['SDT'];
            $cccn = $_GET['CCCN'];
            $sql ="insert into khachhang(MAKH, TENKH, SDT, CCCN) values ('$makh','$tenkh','$sdt','$cccn')";
            $con->query($sql);
        }
    ?>
</body>
</html>