<?php
  if(isset($_POST["submit"])){
    include ('config/config.php');

    $id = $_POST['qi'];
    $answer = $_POST['ans'];

    $sql= "INSERT INTO answers(q_id, answer) VALUES ('$id','$answer')";
    $result = $con->query($sql);

    $location = "answer.php?id=$id";


    if($result){
      header('Location: '.$location);
    }
    else{
        echo'<script>';
        echo"alert('FAILED | post answer failed !')";
        echo'</script>';
    }
  }
?>
