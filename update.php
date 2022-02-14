<html>
<head>
    <style>

* {
    text-align: center;
  box-sizing: border-box;
}
        label {
                 padding: 12px 12px 12px 0;
                 display: inline-block;
            }

            

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}
input[type=password], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

input[type=button], input[type=submit], input[type=reset] {
  
  border: solid;
  border-radius: 12px;
  padding: 16px 25px;
  text-decoration: none;
  margin: 4px 2px;

}



    </style>
    </head>
<body>
<?php

$conn=mysqli_connect("localhost","root","","crud");


$id = $_GET['id'];
$query = "SELECT * FROM user_details WHERE id = '$id'";
$data = mysqli_query($conn, $query);
$row = mysqli_fetch_array($data);

if(isset($_POST['submit']))
{
   

    //$id=$_POST['uid'];
    $name=$_POST['uname'];
    $email=$_POST['uemail'];
    $city=$_POST['ucity'];
    $country=$_POST['ucountry'];


    $sql="UPDATE user_details SET name='$name' WHERE id='$id'";
    


    if($conn->query($sql)==TRUE)
    {
        echo "record successfully updated";
        header("Location:index.php");
    }
    else
    {
        echo "something went wrong";
    }
}

?>

<h2>User update page</h2>

<div class="container">
<form method="POST">


<table>
    <tr>
        <td>User id:</td>
        <!-- <td><input type="text" name="uid" id="uid"></td> -->
        <?php echo "<td>". $row['id']."</td>";?>
    </tr>
    <tr>
        <td>User Name:</td>
        <td><input type="text" name="uname" id="uname"></td>
        <?php echo "<td>". $row['name']."</td>";?>
    </tr>
    <tr>
        <td>E-mail:</td>
        <td><input type="text" name="uemail" id="email"></td>
        <?php echo "<td>". $row['email']."</td>";?>
    </tr>
    <tr>
        <td>city:</td>
        <td><input type="password" name="ucity" id="pwd"></td>
        <?php echo "<td>". $row['city']."</td>";?>
    </tr>

    <tr>
        <td>Country:</td>
        <td><input type="text" name="ucountry" id="flag"></td>
        <?php echo "<td>". $row['country']."</td>";?>
    </tr>

    <tr>
        <td>
    <button type="submit" class="btn btn-success btn-lg btn-block" name="submit">Submit</button>
    <td>
        
    </tr>
</table>
</form>
</div>
</body>
</html>
