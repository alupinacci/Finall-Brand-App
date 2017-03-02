<?php
include 'dbConnection.php';

//Brewery Query for Related data dropdown
$sql = "SELECT ID, name FROM Brands";

$Brands = $conn->query($sql);

//Check if a beer_id was supplied in the URL Query Parameter
if (isset($_GET['Model_id'])) {
    
    $Model_id = $_GET['Model_id'];
    
    //Query DB for details on that beer
    $ModelSQL = "SELECT * FROM models where id = $Model_id";
    $Model =  $conn->query($ModelSQL)->fetch_assoc();
    
}

include 'header.php';
?>
    
    
    <body>
        <?php include 'nav.php';  ?>
        
        
        <div class="container">
            <form action="addModel.php" method="post" class="form-signin">
                 <?php if(isset($Model_id)) echo "<input type='hidden' name='model_id' value=" . $odel_id ." >"; ?>
                 
                <h1 class="form-signin-heading">Enter Model</h1>

                <label for="Brand_id">Brands:</label>
                
                <select name="Brand_id">
                <?php
                if ($Brands->num_rows > 0) {
                    // output data of each row
                    while($Brand = $Brands->fetch_assoc()) {
                        echo "<option value='" . $Brand["ID"] ."'";
                        echo ">" . $Brand["name"] . "</option>";
                    }
                }
                ?>
                </select>
                

                    <div><label for="model">Model:</label>
                    <input type="text" name="model" class="form-control" <?php if (isset($Model['Model'])) echo "value='" . $Model['Model'] . "'"; ?> />
                    </div> 
                    
                    <div>
                    <label for="year">Year:</label>
                    <input type="text" name="year" class="form-control" <?php if (isset($Model['Year'])) echo "value='" . $Model['Year'] . "'"; ?> />
                    </div> 
                    
                    <div>
                    <label for="horsepower">Horsepower:</label>
                    <input type="text" name="horsepower" class="form-control" <?php if (isset($Model['Horsepower'])) echo "value='" . $Model['Horsepower'] . "'"; ?> />
                    </div>
                    
                    <div>    
                    <label for="drivetrain">Drivetrain:</label>
                    <input type="text" name="drivetrain" class="form-control" <?php if (isset($Model['Drivetrain'])) echo "value='" . $Model['Drivetrain'] . "'"; ?> />
                    </div>
                    
                    <div class="button">
                      <button type="submit" class="btn btn-lg btn-primary btn-block">Submit</button>
                    </div>
                
            </form>    
        </div> 
        <?php include 'footer.php';  ?>
    </body>
</html>