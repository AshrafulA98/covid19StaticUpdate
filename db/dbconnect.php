<?php 

$serverName = 'localhost';
$userName = 'root';
$password = "";
$databaseName = 'coviddb';

$conn = mysqli_connect($serverName, $userName, $password, $databaseName);

/*
To test the database connection 

if($conn){
    ?>

    <script type="text/javascript">
    alert('DataConnection Successful');
    </script>

    <?php
}else{
    ?>

    <script type="text/javascript">
    alert('No Connection');
    </script>

    <?php
}

*/


?>