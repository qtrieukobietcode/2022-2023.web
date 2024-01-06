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
            echo "<tr id='row1_".$row['MAPHONG']."'>
                <td>".$i++."</td>
                <td>".$row['MAPHONG']."</td>
                <td>".$row['TENPHONG']."</td>
                <td>
                    <button class='del' data-maphong='".$row['MAPHONG']."'>Xóa</button>
                  </td>
                </tr>";
        }
    }
}
?>
