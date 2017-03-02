<?php
include 'dbConnection.php';

$Brand_id = $_POST['Brand_id'];

$model = $_POST['model'];
$year = $_POST['year'];
$horsepower = $_POST['horsepower'];
$drivetrain = $_POST['drivetrain'];

if (isset($_POST['model_id'])) {
    $model_id = $_POST['model_id'];
    $sql =  "UPDATE models SET model='$model', year ='$year', 
             horsepower='$horsepower', drivetrain = '$drivetrain'
             WHERE id = $model_id";
}

else{ 
    $sql = "INSERT INTO models (Brand_id, model, year, horsepower, drivetrain)
    VALUES ('$Brand_id', '$model', '$year', '$horsepower', '$drivetrain')";
}


if ($conn->query($sql) === TRUE) {
          echo "<h2 class='form-signin-heading''>New record created successfully</h2> <br>";
      } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
      }
      $conn->close();
        
include 'header.php';


?>

<!DOCTYPE html>
<html lang="en">
  


  <body>
    <?php include 'nav.php' ?>
    <div class="container">
      <div class="starter-template">
        
      


      Model: <?php echo $model ?><br>
      Year: <?php echo $year ?><br>
      Horsepower: <?php echo $horsepower ?><br>
      Drivetrain: <?php echo $drivetrain ?><br>

    </div>
  </body>
</html>