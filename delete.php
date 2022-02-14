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
    $sql="DELETE FROM user_details WHERE id='$id' ";

    if($conn->query($sql)===TRUE)
    {
        echo "record successfully deleted";
        header("Location:index.php");
    }
    else
    {
        echo "something went wrong";
    }

    mysqli_close($conn);
}
?>
<h2>User delete record page</h2>

<div class="container">

<form method="POST">

<table >
    <tr>
        <td style="text-align: left;">User id:</td>
        <!-- <td><input type="text" name="uid" id="uid"></td> -->
        <?php echo "<td>". $row['id']."</td>";?>
    </tr>

    <tr>
        <td style="text-align: left;"> are you sure you want to delete all the details of the user?! <br> along with user </td>
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
