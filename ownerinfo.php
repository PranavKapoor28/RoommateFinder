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
 <body>

 <h1> THESE PEOPLE ARE IN SEARCH OF ROOMATES<br><h1>
     <h3>Contact details are given. Make a call to start your new journey<br><br></h3>
 <table class="table table-dark table-hover" id="table">
 <tr>
 <th>Email</th>
 <th>Phone number</th>
 <th>Registration number</th>
 <th>No. of beds and block</th>
 <th> Branch</th>
 <th> Comments</th> 
 </tr>

 <?php
$con= mysqli_connect('localhost','root');




mysqli_select_db($con,'phpwebsite');

$Email=$_POST['Email'];
$Password=$_POST['Password'];
$Registration=$_POST['Registration'];
$room=$_POST['room'];
$branch=$_POST['branch'];
$comments=$_POST['comments'];

$query = "insert into room (Email,Password,Registration,room,branch,comments) 
values ('$Email','$Password','$Registration','$room','$branch','$comments')";

mysqli_query($con,$query);
$sql = "SELECT * FROM room;";
$result= $con -> query($sql); 

if( $result -> num_rows > 0) {
    while($row = mysqli_fetch_assoc($result)){
        echo "<tr><td>" . $row["Email"] ."</td><td>" . $row["Password"] ."</td><td>". $row["Registration"] ."</td><td>" . $row["room"] ."</td><td>" . $row["branch"] ."</td><td>" . $row["comments"] ."</td></tr>";

    }
}
$con-> close();
?>
</table>
</body>
</html>