<table class = "table table-hover">
   
   <thead>
      <tr>
         <th>Brand</th>
         <th>Country of Origin</th>
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
        echo '<tr>
                  <td scope="row">' . $row["Name"]. '</td>
                  <td>' . $row["Country"] .'</td>
                  <td>'.$row["Founders"] .'</td>
                  <td>'. $row["Model"] .'</td>
                  <td>'.$row["Year"] .'</td>
                  <td>'. $row["Horsepower"] .'</td>
                  <td>'.$row["Drivetrain"] .'</td>
                  <td> <a href=deleteModel.php?Model_id= . $row["Model_id"] .  > delete model</a> </td>
                  <td> <a href=modelForm.php?Model_id=  $row["Model_id"]  > update model</a> </td>
                </tr>';
    }
?>
       </tbody>
    </tbody>
	
</table>