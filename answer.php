<html>
<head>
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
  <div class="row">
    <div class="col-md-8">
      </table>
        <?php
        $id = $_GET['id'];
        include("config/config.php");

        $sql= "SELECT * FROM question where id='$id' ";
        $result = $con->query($sql);
        while($row = $result->fetch_assoc()) {
          ?>
        <tr>
          <td><?php echo $row['id'] ?></td>
          <td><?php echo $row['question'] ?></td>
        <tr>
          <?php } ?>
      </table>

      </br></br></br>

      </table>
        <?php
        $id = $_GET['id'];
        include("config/config.php");

        $sql= "SELECT * FROM answers where q_id='$id' ";
        $result = $con->query($sql);
        while($row = $result->fetch_assoc()) {
          ?>
        <tr>
          <td><?php echo $row['q_id'] ?></td>
          <td><?php echo $row['answer'] ?></td>
        </br>
        <tr>
          <?php } ?>
          <tr>
            <td>
              <form method="post" action="postAnswer.php">
                <input type="text" value="<?php $id = $_GET['id']; echo $id ?>" name="id">
                <input type="text" class="form-control" placeholder="Text input" name="answer">
                <center><button class="btn btn-default" name="submit">Post an Answer</button>
                <center>
              </form>
              </td>
          </tr>
      </table>
    </div>
  </div>
</body>
</html>
