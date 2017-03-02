<?php
include 'dbConnection.php';

$name = $_POST['Name'];
$founders = $_POST['Founders'];
$country = $_POST['Country'];

if (isset($_POST['Brand_id'])) {
    $Brand_id = $_POST['Brand_id'];
    $sql =  "UPDATE Brands SET Name='$name', Founders='$founders', Country= '$country'
             WHERE id = $Brand_id";
}else {
    $sql = "INSERT INTO Brand (Name, Founders, Country)
            VALUES ('$name', '$city', '$state', '$country')";
} 

?>

<!DOCTYPE html>
<html lang="en">
  <?php include 'header.php';  ?>

  <body>
    <?php include 'nav.php' ?>
    <div class="container">
      <div class="starter-template">
      <?php
        if ($conn->query($sql) === TRUE) {
            echo "<h1>New record created successfully</h1> <br>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();
      ?>


      Brand: <?php echo $name ?><br>
   
      Founders: <?php echo $founders ?><br>
      Country of Origin: <?php echo $country ?><br>

    </div>
  </body>
</html>