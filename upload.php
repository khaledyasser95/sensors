<?php include('Database.php');
   // $db =  mysqli_dbect(DB_SERVER, DB_USER, DB_PASSWORD,DB_NAME) or die("Unable to dbect to MySQL");
    //0: temperature
    //1: humidity
    //2: pressure
    //3: light

    if (mysqli_real_escape_string($db,$_POST['id']) ==NULL ||mysqli_real_escape_string($db,$_POST['id']) ==NAN){
        $ID="NULL";
    }else{
        $ID=mysqli_real_escape_string($db,$_POST['id']);
    }
    if (mysqli_real_escape_string($db,$_POST['location']) ==NULL){
        $Location="NULL";
    }else{
        $Location=mysqli_real_escape_string($db,$_POST['location']);
    }
    if (mysqli_real_escape_string($db,$_POST['temp']) ==NULL){
        $temp="NULL";
    }else{
        $temp=mysqli_real_escape_string($db,$_POST['temp']);
    }
    
    $logdate= date("Y-m-d H:i:s");

    $insertSQL="INSERT into temp (temp_ID,Location,Time,Temp) values ('".$ID."','".$Location."','".$logdate."','".$temp."')";
    mysqli_query($db,$insertSQL) or die("INSERT Query has Failed - ".$insertSQL );
    //include 'test.php';
     //data($ID,$Location,$logdate,$temp); //returns omg lol

?>

