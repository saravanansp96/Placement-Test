<html>
<body>
  adfbajbvdj

<?php
 //insert.php
 $servername = "localhost";
 $username = "root";
 $password = "root";
 $dbname = "Saravanan";

 // Create connection
 $connect = new mysqli($servername, $username, $password, $dbname);
 if ($connect->connect_error) {
     die("Connection failed: " . $conn->connect_error);
 }
 else
 echo "Connected successfully:Pghg";
 /*$data = json_decode(file_get_contents("php://input"),true);
 if(count($data) > 0){
   echo "sabjkfasj";
      $rollno = $data->rollno;
      $score = $data->score;
      //$rollno=$_POST['rollno'];
      //$score=$_POST['score'];
      $query = "INSERT INTO tbl_user VALUES (''".$rollno."','". $score."')";
      if($connect->query($query))
      {
           //echo "Data Inserted...";
      }
      else
      {
           //echo 'Error';
      }

    }
    else {
    echo "not inside";
  }*/
  $postdata = file_get_contents("php://input");
$request = json_decode($_POST['email']);
$email = $request->email;
//$pass = $request->password;
echo $email;
 ?>
 </body>
</html>
