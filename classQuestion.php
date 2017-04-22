<?php
    if(isset($_POST["submit"])){
        include('config/config.php');
        $question = $_POST['question'];
        //query
        $sql= "INSERT INTO question(question) VALUES ('$question')";
        $result = $con->query($sql);

        if($result){
            echo'<script>';
            echo"document.location.href = 'index.php';";
            echo'</script>';
        }
        else{
            echo'<script>';
            echo"alert('FAILED | Item Name Not Added')";
            echo'</script>';
        }
    }
?>
