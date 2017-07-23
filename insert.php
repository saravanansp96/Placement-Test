<html>
<body>
<?php

function console_log( $data ){
  echo '<script>';
  echo 'console.log('. json_encode( $data ) .')';
  echo '</script>';
}


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
 else{
   //echo ("<script>console.log("inside php")</script>");
 //echo "Connected successfully:Pghg";
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
$request = json_decode($postdata,true);
$roll = mysqli_real_escape_string($connect,$request->roll);
$score =mysqli_real_escape_string($connect,$request->score);
//$rollno = $request->rollno;
//$score = $request->score;
//console.log("insert ".$roll.":".$score);
//$roll=11;
//$score=11;
$roll=$request['rollno'];
$score=$request['score'];
console_log($roll);
console_log($score);
$query = "INSERT INTO tbl_user VALUES (".$roll.",". $score.")";
mysqli_query($connect,$query);
}
//console.log("insert "+$roll+":"+$score);
 ?>
 </body>
</html>
