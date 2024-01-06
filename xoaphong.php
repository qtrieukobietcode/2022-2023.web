<?php
    include('connect.php');
    if(isset($_POST['MAPHONG']) &&  isset($_POST['MAHD'])){
        $MAHD=$_POST['MAHD'];
        $MAPHONG = $_POST['MAPHONG'];
        $i=1;
        $sql_thue="delete from thue where MAHD='$MAHD' and MAPHONG='$MAPHONG'";
        $con->query($sql_thue);
        $sql = "select * from phong where MAPHONG='$MAPHONG'";
        $result=$con->query($sql);
        if($result){
            while($row=$result->fetch_assoc()){
                echo "<tr id='row_".$row['MAPHONG']."'>
                    <td>".$i++."</td>
                    <td>".$row['MAPHONG']."</td>
                    <td>".$row['TENPHONG']."</td>
                    <td>
                        <button class='add' data-maphong='".$row['MAPHONG']."'>Thêm</button>
                      </td>
                    </tr>";
            }
        }
    }

?>