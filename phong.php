<?php
include('connect.php');
$MAHD = $_POST['MAHD'];
$i = 1;
$sql = "SELECT phong.MAPHONG, phong.TENPHONG FROM phong JOIN thue ON thue.MAPHONG = phong.MAPHONG WHERE thue.MAHD = '$MAHD'";
$result = $con->query($sql);

echo "<table border='1'>
    <tr>
    <th>STT</th>
    <th>Mã phòng</th>
    <th>Tên phòng</th>
    </tr>";

while ($row = $result->fetch_assoc()) {
    echo "<tr>
        <td>" . $i++ . "</td>
        <td>" . $row['MAPHONG'] . "</td>
        <td>" . $row['TENPHONG'] . "</td>
        </tr>";
}

echo "</table>";
?>
