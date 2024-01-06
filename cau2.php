<!DOCTYPE html>
<html lang="en">
<body>
    <form method="get">
    <label for="">Tên khách hàng</label>
    <select name="MAKH">
        <?php
            include('connect.php');
            $sql='select MAKH,TENKH from khachhang';
            $result=$con->query($sql);
            while($row=$result->fetch_assoc()){
                echo "<option value='".$row['MAKH']."'>".$row['TENKH']."</option>";
            }
        ?>
    </select><br>
    <label for="">Mã hóa đơn</label>
    <input type="text" name='MAHD' placeholder="Mã hóa đơn"><br>
    <label for="">Tên hóa đơn</label>
    <input type="text" name='TENHD' placeholder="Tên hóa đơn"><br>
    <label for="">Tổng tiền</label>
    <input type="text" name='TONGTIEN' placeholder="Tổng tiền"><br>
    <input type='submit'name='submit' value='Thêm'>
    </form>
    <?php
        include('connect.php');
        if(isset($_GET['submit']) && $_GET['submit']=='Thêm'){
            $MAKD = $_GET['MAKH'];
            $MAHD = $_GET['MAHD'];
            $TENHD = $_GET['TENHD'];
            $TONGTIEN = $_GET['TONGTIEN'];
            $sql ="insert into hoadon values ('$MAKH','$MAHD','$TENHD','$TONGTIEN')";
            $con->query($sql);
        }
    ?>
</body>
</html>