<?php 
include 'dbConnection.php';

if (isset($_GET['Brand_id'])) {
  
    
    $Brand_id = $_GET['Brand_id'];
    
    //Query DB for details on that beer
    $BrandSQL = "SELECT * FROM Brands where id = $Brand_id";
    $Brand =  $conn->query($BrandSQL)->fetch_assoc();
    
}

?>

<!DOCTYPE html>
<html lang="en">
  <?php include 'header.php';  ?>
    <body>
      
        <?php include 'nav.php' ?>
        <div class="container">
          
      <form action="addBrand.php" method="post" class="form-signin">
        
        <h1 class="form-signin-heading">Enter Brand</h1>

        <label for="name">Name:</label>
        <input type="text" name="name" class="form-control" <?php if (isset($Brand['Name'])) echo "value='" . $Brand['Name'] . "'"; ?> />

        <label for="founders">Founders:</label>
        <input type="text" name="founders" class="form-control" <?php if (isset($Brand['Founders'])) echo "value='" . $Brand['Founders'] . "'"; ?> />

        <label for="country">Country of Origin:</label>
        <input type="text" name="country" class="form-control" <?php if (isset($Brand['Country'])) echo "value='" . $Brand['Country'] . "'"; ?> />

        <button type="submit" class="btn btn-lg btn-primary btn-block">Submit</button>

      </form>
    </div>
    <?php include 'footer.php';  ?>
  </body>
</html>