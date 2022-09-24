<?php
    require_once "dbconnect.php";
?>
<style>
    table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
    }
</style>

<h4>list</h4>

<table>
    <tr>
        <th>id</th>
        <th>Category name</th>
        <th>Category stats</th>
        <th>action</th>
    </tr>
    
    <?php
        $sql = "select * from category";
        $result = $conn->query($sql);
        
        while($row = mysqli_fetch_object($result)){
            echo "<tr>";
            echo "<td>$row->id</td>";
            echo "<td>$row->name</td>";
            echo "<td>$row->status</td>";
            echo "<td><a href=\"#\">Delete</a></td>";
            echo "</tr>";
        }
    
    ?>

</table>


