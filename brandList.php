<?php

include 'dbConnection.php';

$sql = "SELECT
        ID, Name, Country, Founders
        FROM Brands;";

$result = $conn->query($sql);
include 'nav.php'; 
include 'header.php'; 


?>
<div class="container">
<h1>Brands</h1>

<li><a href="brandForm.php">Add Brand</a></li>


<table class = "table table-hover">
   <thead>
      <tr>
         <th>Name</th>
         <th>Country of Origin</th>
         <th>Founders</th>
      </tr>
   </thead>
   <tbody>

<?php
 while($row = $result->fetch_assoc()) {
      echo 
      "</td><td>" . $row['Name'] . "</td><td>" . $row['Country'] . "</td><td>" . $row['Founders'] .
      "</td><td> <a href=deleteBrand.php?Brand_id=" . $row['ID']  ."> delete brand</a>" . 
      "</td><td> <a href=brandForm.php?Brand_id=" . $row['ID']  . "> update beer</a>". "</td></tr>";
      }
        ?>
               </tbody>
            </table>
        </div>
        <?php include 'footer.php';  ?>
    </body>
</html>            
