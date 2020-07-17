<?php 

require_once 'db_conn.php';
?>
<!DOCTYPE html>
<html>
<head>
  <title>Sucess!</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="./style.css">
 
</head>

<?php

if ($_POST) {
   $type = $_POST['type'];
   $title = $_POST['title'];
   $imglk = $_POST['image'];
   $author = $_POST['author'];
   $publisher = $_POST['publisher'];
   $pdate = $_POST['publish_date'];
   $ISBN = $_POST['ISBN'];
   $descritpion = $_POST['short_description'];
};

   $sql = "INSERT INTO media (`type`, title, `image`, author, publisher, ISBN, publish_date, `short_description`) VALUES ('$type', '$title', '$imglk','$author', '$publisher', '$ISBN', '$pdate', '$descritpion')";
    if (mysqli_query($conn, $sql)) {
      echo "

<body style='background-color: #D1C7BE';>";
       echo "<div>
       <h1 style='color:black; text-shadow: 0 -2px 10px rgba(255, 255, 255, 0.8);'>New Book Added!</h1>
       </div>";
       echo "<div>
       <div>
       <a href='../insert.php'><button style='background-color:#8E3735;' class='btn btn-primary  p-5 w-25' type='button'><h2>Add another Book</h2></button></a>
       </div>";
        echo "<div>
        <a href='../index.php'><button style='background-color:#F9B105;' class='btn btn-primary p-5 w-25' type='button'><h2>Return to Home</h2></button></a>
        </div>
        </div>";
        echo "</body>";

   } else  {
       echo "<h1>Record creation error for: </h1>" .
               "<p>"  . $sql . "</p>" .
               mysqli_error($conn);
      }
      mysqli_close($conn);
      
    ?>

</html>