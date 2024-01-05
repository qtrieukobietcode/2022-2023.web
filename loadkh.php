<?php
    include('connect.php');
    $sql= "select MAKH,TENKH from khachhang";
    $result=$con->query($sql);
    while($row=$result->fetch_assoc()){
        echo "<option value='".$row['MAKH']."'>".$row['TENKH']."</option>";
    }
?>