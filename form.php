<?php

    require_once "dbconnect.php";
    
    if($_GET){
        $catName = $_GET['name'];
        $catStatus = $_GET['status'];

        $sql = "insert into category (name , status) values ('$catName', '$catStatus')";
        $result = $conn->query($sql);

        if($result)
            header("Location: list.php");
        else
            echo "Failed";
    }

?>

<form action="saveMeToDB.php" method="get">
    <input type="text" placeholder="Enter Category name" name="name">
    <br>
    <input type="text" placeholder="Enter category status" name="status">
    <br>
    <input type="submit">
</form>