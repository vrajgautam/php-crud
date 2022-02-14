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

if(!$conn) {
    echo("unable to connect to the database".mysqli_connect_error());
}

if(isset($_POST['submit']))
{
    
    $name=$_POST['name'];
    $email=$_POST['email'];
    $city=$_POST['city'];
    $country=$_POST['country'];
    


    /*echo*/   $sql="INSERT INTO user_details(name, email, city, country) VALUES('$name','$email','$city','$country')"; //exit(); 


    if($conn->query($sql)==TRUE)
    {
        echo "record successfully inserted";
        header("Location:success_msg.php"); //header function along with location:(exact name of the page) redirects to the page we want after submit

    }
    else
    {
        echo "something went wrong";
    }
}
?>

<h2>User Data insertion page</h2>
<div class="container">
<form method="POST">

<table>
   
    <tr>
        <td>User Name:</td>
        <td><input type="text" name="name" id="uname"></td>
    </tr>
    <tr>
        <td>E-mail:</td>
        <td><input type="text" name="email" id="email"></td>
    </tr>
    <tr>
        <td>City:</td>
        <td><input type="text" name="city" id="city"></td>
    </tr>

    <tr>
        <td>Country:</td>
        <td><input type="text" name="country" id="country"></td>
    </tr>

    <tr>
        <td>
        <button type="submit" class="btn btn-success btn-lg btn-block" name="submit">Submit</button>
        <td>
        
    </tr>

</table>
</form>
</div>

<a href="index.php">View Index</a>
</body>
</html>
