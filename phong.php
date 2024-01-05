<?php
include('connect.php');
$MAHD = $_POST['MAHD'];
$i = 1;
$sql = "SELECT phong.MAPHONG, phong.TENPHONG FROM phong JOIN thue ON thue.MAPHONG = phong.MAPHONG WHERE thue.MAHD = '$MAHD'";
$result = $con->query($sql);

echo "<table border='1'>";
echo "<tr>";
echo "<th>STT</th>";
echo "<th>Mã phòng</th>";
echo "<th>Tên phòng</th>";
echo "</tr>";

while ($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . $i++ . "</td>";
    echo "<td>" . $row['MAPHONG'] . "</td>";
    echo "<td>" . $row['TENPHONG'] . "</td>";
    echo "</tr>";
}

echo "</table>";
?>
