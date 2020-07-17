<?php 

require_once 'db_conn.php';

if ($_POST) {
    $tit = $_POST['title'];
    $image = $_POST['image'];
    $auth = $_POST[ 'author'];
    $isbn = $_POST[ 'ISBN'];
    $desc = $_POST[ 'short_description'];
    $puda = $_POST[ 'publish_date'];
    $pub = $_POST[ 'publisher'];
    $type = $_POST[ 'type'];

   $id = $_POST['id'];

   $sql = "UPDATE media SET title = '$tit', `image` = '$image', author = '$auth', ISBN = '$isbn', short_description = '$desc', 
   publish_date = '$puda', publisher = '$pub', `type` = '$type'  WHERE id = {$id}" ;
   if(mysqli_query($conn, $sql) === TRUE) {
       echo "<!DOCTYPE html>
<html>
<head>
   <title>Successfully Updated!</title>
</head>
<body style='background-color:#F9B105;'>";
       echo "<div>
       <h1 style='color:black; text-shadow: 0 -2px 10px rgba(255, 255, 255, 0.8);'>Successfully Updated</h1>
       </div>";
       echo "<div>
       <a href='../index.php?id=" .$id."'><button class='btn btn-primary p-5 w-100' type='button'><h2>Home</h2></button></a>";
   }else {
            echo "Error while updating : ". mysqli_error($conn);
        }

        mysqli_close($conn);
      }
       
?>