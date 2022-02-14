<?php
$conn = mysqli_connect("localhost", "root", "", "crud");

if(!$conn) {
    echo("unable to connect to the database".mysqli_connect_error());
}

$sql = "SELECT * FROM user_details";
$data = mysqli_query($conn, $sql);
?>

<table border="1" cellspacing="">
    <tr>
        <th>id</th>
        <th>name</th>
        <th>email</th>
        <th>city</th>
        <th>country</th>
        <th colspan=2>action</th>
    </tr>

    <?php 
    
        while($row = mysqli_fetch_array($data)){
            echo "<tr>";
            echo "<td>". $row['id']."</td>";
            echo "<td>". $row['name']."</td>";
            echo "<td>". $row['email']."</td>";
            echo "<td>". $row['city']."</td>";
            echo "<td>". $row['country']."</td>";
            echo "<td><a href=update.php?id=".$row['id'].">Update</a></td>";
            echo "<td><a href=delete.php?id=".$row['id'].">Delete</a></td>";
            echo "</tr>";
        }
    ?>
</table>

<a href="insert.php">insert new-user's data</a>
