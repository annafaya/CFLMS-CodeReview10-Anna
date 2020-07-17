<?php 

require_once 'db_conn.php';

if ($_POST) {
   $id = $_POST['id'];

   $sql = "DELETE FROM media WHERE id = {$id}";
   if(mysqli_query($conn, $sql) === TRUE) {
       echo "<!DOCTYPE html>
<html>
<head>
   <title>Deleted!</title>
</head>
<body style='background-color: #8E3735;'>";
       echo "<div>
       <h1 style='color:black; text-shadow: 0 -2px 10px rgba(255, 255, 255, 0.1)';>Deleted!</h1>
       </div>";
       echo "<div>
       <a href='../index.php'><button class='btn btn-primary p-5 w-100' type='button'><h2>Return to Home</h2></button></a>";
   }else {
            echo "Error while updating : ". mysqli_error($conn);
        }

        mysqli_close($conn);
      }
       
?>