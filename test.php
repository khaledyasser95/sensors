<?php include('Database.php');

header('Refresh: 2'); 
$sql="SELECT * FROM temp";
$result=mysqli_query($db,$sql);
$num = 0;

?> 

<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<h2>Temperature Table</h2>
<table>
  <tr>

    <th>ID</th>
    <th>Location</th>
    <th>Time</th>
    <th>Temperature</th>
  </tr>
  
  <?php
  $ID1;
  function data($id, $location,$time,$temp) {
    $ID1=$id;
 }

           
            
            ?>
            <tr>
            <td><?php echo $ID1?></td>
            
             <td><?php echo $Location1?></td>
            
              <td><?php echo $logdate1?></td>
            
             <td><?php echo $temp1?></td>
              </tr>
              <?php
          
        
      
  ?>
    

</table>

</body>
</html>
