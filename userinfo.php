<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="table.css">
<title>table</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
 </head>
 <body >
 <h1> THESE PEOPLE ARE IN SEARCH OF ROOMS<br><h1>
     <h3>Contact details are given. Make a call to start your new journey<br><br></h3>
 <table class="table table-dark table-hover" id="table">
 <tr>
 <th>Email</th>
 <th>Phone number</th>
 <th>Registration number</th>
 <th>No. of beds</th>
 <th> Block</th>
 <th> Roommate branch</th> 
 </tr>
<?php

$con= mysqli_connect('localhost','root');



mysqli_select_db($con,'phpwebsite');

$email=$_POST['email'];
$pwd=$_POST['pwd'];
$reg=$_POST['reg'];
$bedded=$_POST['bedded'];
$block=$_POST['block'];
$branch=$_POST['branch'];

$query = "insert into phpwebsite (email,pwd,reg,bedded,block,branch) 
values ('$email','$pwd','$reg','$bedded','$block','$branch')";


mysqli_query($con,$query);
$sql = "SELECT * FROM phpwebsite;";
$result= $con -> query($sql); 

if( $result -> num_rows > 0) {
    while($row = mysqli_fetch_assoc($result)){
        echo "<tr><td>" . $row["email"] ."</td><td>" . $row["pwd"] ."</td><td>". $row["reg"] ."</td><td>" . $row["bedded"] ."</td><td>" . $row["block"] ."</td><td>" . $row["branch"] ."</td></tr>";

    }
}
$con-> close();
?>
</table>
</body>
</html>