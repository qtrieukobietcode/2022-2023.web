<?php
include('connect.php');
$n= $_POST['n'];
$sql = "SELECT khachhang.MAKH, khachhang.TENKH, SUM(hoadon.TONGTIEN) AS TongTienMua
FROM khachhang
JOIN hoadon ON khachhang.MAKH = hoadon.MAKH
GROUP BY khachhang.MAKH, khachhang.TENKH
ORDER BY TongTienMua DESC
LIMIT $n";
$i=1;
$result= $con->query($sql);
if($result){
    echo $n." khách hàng có số lượng tiền thuê nhiều nhất
        <table border='1'>
        <tr>
        <th>STT</th>
        <th>Mã khách hàng</th>
        <th>Tên khách hàng</th>
        <th>Tổng tiền thuê</th>
        </tr>";
    while($row=$result->fetch_assoc()){
        echo "<tr>
            <td>".$i++."</td>
            <td>".$row['MAKH']."</td>
            <td>".$row['TENKH']."</td>
            <td>".$row['TongTienMua']."</td>
            </tr>";
    }
    echo "</table>";
}
?>