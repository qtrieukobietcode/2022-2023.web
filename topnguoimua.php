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
    echo $n." khách hàng có số lượng tiền thuê nhiều nhất";
    echo "<table border='1'>";
    echo "<tr>";
    echo "<th>STT</th>";
    echo "<th>Mã khách hàng</th>";
    echo "<th>Tên khách hàng</th>";
    echo "<th>Tổng tiền thuê</th>";
    echo "</tr>";
    while($row=$result->fetch_assoc()){
        echo "<tr>";
        echo "<td>".$i++."</td>";
        echo "<td>".$row['MAKH']."</td>";
        echo "<td>".$row['TENKH']."</td>";
        echo "<td>".$row['TongTienMua']."</td>";
        echo "</tr>";
    }
    echo "</table>";
}
?>