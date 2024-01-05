<?php
    include('connect.php');
    $sql = "select * from phong where TINHTRANG='trống'";
    $result = $con->query($sql);
    $i=1;
    if($result){
        while($row=$result->fetch_assoc()){
            echo "<tr id='row_".$row['MAPHONG']."'>";
            echo "<td>".$i++."</td>";
            echo "<td>".$row['MAPHONG']."</td>";
            echo "<td>".$row['TENPHONG']."</td>";
            echo "<td>
                    <button class='add' data-maphong='".$row['MAPHONG']."'>Thêm</button>
                  </td>";
            echo "</tr>";
        }
    }
?>
