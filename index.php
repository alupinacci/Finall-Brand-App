<?php

include 'dbConnection.php';

    $sql = "SELECT 
            models.ID as Model_id, Name, Country, Founders, Model, Year, Horsepower, Drivetrain
            FROM models
            JOIN Brands ON models.Brand_id = Brands.ID";

$result = $conn->query($sql); 
?>

<!DOCTYPE html>
<html lang="en">
  <?php include 'header.php';  ?>

    <body>
        <?php include 'nav.php';  ?>
        
        <div class="container">
            <h1> Brands & Cars </h1>
              <table class = "table table-hover">
   
   <thead>
      <tr>
         <th>Brand</th>
         <th>Country</th>
         <th>Founders</th>
         <th>Model</th>
         <th>Year</th>
         <th>Horsepower</th>
         <th>Drivetrain</th>
      </tr>
   </thead>
   
   <tbody>
        <tbody>
            
<?php 
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo "<tr><td>" . $row['Name'] . "</td><td>" . $row['Country'] . "</td><td>" . $row['Founders'] .
              "</td><td>" . $row['Model'] . "</td><td>" . $row['Year'] . "</td><td>" . $row['Horsepower'] .
              "</td><td>" . $row['Drivetrain'] . 
              "</td><td> <a href=deleteModel.php?Model_id=" . $row['Model_id']  ."> delete model</a>" . 
              "</td><td> <a href=modelForm.php?Model_id=" . $row['Model_id']  . "> update model</a>". "</td></tr>";
              }

?>
       </tbody>
    </tbody>
	
</table>
        </div>
    <?php include 'footer.php';  ?>

    </body>
    

    
</html> 