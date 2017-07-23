<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <title>DATA BASE DATA</title>
<style>
.table1 {
  border-collapse: collapse;
  width: 50%;
}

th, td {
  padding: 2%;
  text-align: left;
  border-bottom: 1px solid #ddd;
}
</style>
</head>
<body>
  <h1 align ="center">PLACEMENT TEST RESULTS</h2><br>

  <h4>
    <table align="center" class="table table-hover table1"><tr><th>SNO</th><th>ROLL NO</th><th>SCORE</th></tr>
<?php
$servername="localhost";
$username="root";
$password="root";
$dbname="Saravanan";

$conn= new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
  die("Connection failed:". $conn->conncet_error);
}
//echo "Connection success<br><br><table><tr><th>ROLL NO</th><th>SCORE</th></tr>";
$sql="select * from tbl_user";
$result=$conn->query($sql);
$i=1;
if($result->num_rows >0)
{
  while($row = $result->fetch_assoc()) {
    if(i%2!=0){
      echo "<tr><td>".$i."</td><td>".$row["rollno"]."</td><td>".$row["score"]."</td></tr>";
    }
    else {
      echo "<tr><td>".$i."</td><td>".$row["rollno"]."</td><td>".$row["score"]."</td></tr>";
    }
    $i++;
  }
  echo "</table>";
}
$conn->close();
?>
</h4>
</body>
</html>
