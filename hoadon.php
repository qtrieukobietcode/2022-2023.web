<?php
    include('connect.php');
    if(isset($_POST['MAKH'])){
        $MAKH=$_POST['MAKH'];
        $sql= "select MAHD from hoadon where MAKH ='$MAKH'";
        $result=$con->query($sql);
        while($row=$result->fetch_assoc()){
            echo "<option value='".$row['MAHD']."'>".$row['MAHD']."</option>";
            print_r($row['MAHD']);
        }
    }
    // else{echo "chưa nhận data";}
?>
<script>

</script>