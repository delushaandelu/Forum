<?php
if(isset($_POST["submit"])){
    include('config/config.php');
    $id = $_POST['id'];
    $answer = $_POST['answer'];
    //query
    $sql= "INSERT INTO answer(q_id, answer) VALUES ('$id','$answer')";
    $result = $con->query($sql);

    if($result){
        echo'<script>';
        echo"document.location.href = 'index.php'";
        echo'</script>';
    }
    else{
        echo'<script>';
        echo"alert('FAILED | Reanswer again!')";
        echo'</script>';
    }
}
?>
