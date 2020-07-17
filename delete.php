<?php 

require_once 'actions/db_conn.php';

if ($_GET['id']) {
   $id = $_GET['id'];

   $sql = "SELECT * FROM media WHERE id = {$id}" ;
   $result = mysqli_query($conn, $sql);
   $data = $result->fetch_assoc();

mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
<head>
   <title>Are you sure?</title>
</head>
<body style="background-color:#8E3735;"> 
<div class="d-flex justify-content-center text-white p-5">
</div>
<fieldset>
  <legend class="d-flex justify-content-center text-white p-5"><h1 style="color:black; text-shadow: 0 -2px 10px rgba(255, 255, 255, 0.8);">Delete this book?</h1></legend>
<form action ="actions/a_delete.php" method="post" class="justify-content-center">
   <input type="hidden" name= "id" value="<?php echo $data['id'] ?>">
   <div>
   <button style='background-color:red;'class="btn btn-danger d-flex justify-content-center p-5" type="submit"><h2>Delete Entry</h2></button>
   </div>
   <div>
   <a href="index.php"><button  class="btn btn-primary d-flex justify-content-center p-5" type="button"><h2>Return to Home</h2></button ></a>
   </div>
</form>
</fieldset>
</body>
</html>

<?php
}
?>