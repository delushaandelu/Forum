<html>
<head>
  <title>Forum</title>
  <script src="assets/plugin/dist/sweetalert.min.js"></script>
  <link rel="stylesheet" type="text/css" href="assets/plugin/dist/sweetalert.css">
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
  <div class="row">
    <center>
    <div class="col-md-12">
      <form action="classQuestion.php" method="post">
        <table>
          <tr>
            <td><input class="form-control" type="text" name="question"></td>
            <td>   </td>
            <td><button class="btn btn-primary" type="submit" name="submit">Post This Question</button></td>
          </tr>
        </table>
      </form>
    </div>
  </center>
  </div>

  <div class="row">
    <div class="col-md-12">
      <table class="table table-hover">
        <?php
          include("config/config.php");

          $sql= "SELECT * FROM question ";
          $result = $con->query($sql);
          while($row = $result->fetch_assoc()) {
        ?>
        <tr>
          <td><?php echo $row['id'] ?></td>
          <td><?php echo $row['question'] ?></td>
          <td><button class="btn btn-success" aria-hidden="true" onclick="location.href='answer.php?id=<?php echo $row['id'] ?>'">Reply Answer</button></td>
      </tr>
      <?php } ?>
      </table>
    </div>
  </div>

</body>
</html>
