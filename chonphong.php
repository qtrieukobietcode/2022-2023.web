<?php
    include('connect.php');
    if(isset($_POST['MAPHONG']) &&  isset($_POST['MAHD'])){
        $MAHD=$_POST['MAHD'];
        $MAPHONG = $_POST['MAPHONG'];
        $i=1;
        $sql_thue="insert into thue (MAHD,MAPHONG) values('$MAHD','$MAPHONG')";
        $con->query($sql_thue);
        $sql = "select * from phong where MAPHONG='$MAPHONG'";
        $result=$con->query($sql);
        if($result){
        while($row=$result->fetch_assoc()){
            echo "<tr id='row1_".$row['MAPHONG']."'>";
            echo "<td>".$i++."</td>";
            echo "<td>".$row['MAPHONG']."</td>";
            echo "<td>".$row['TENPHONG']."</td>";
            echo "<td>
                    <button class='del' data-maphong='".$row['MAPHONG']."'>Xóa</button>
                  </td>";
            echo "</tr>";
        }
    }
}
?>
