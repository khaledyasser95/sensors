<?php include('Database.php');
header('Refresh: 6'); 
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
  if (mysqli_num_rows($result) > 0)
  {
        while($rs = $result->fetch_assoc() )
        {

            ?>
            <tr>
            <td><?php echo $rs['temp_ID']?></td>
            <?php
             ?>
             <td><?php echo $rs['Location']?></td>
             <?php
              ?>
              <td><?php echo $rs['Time']?></td>
              <?php
             ?>
             <td><?php echo $rs['Temp']?></td>
              </tr>
              <?php
          
        }
      }
  ?>
    

</table>

</body>
</html>
