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
   <title>Update this Book!</title>
</head>
<body style="background-color:#F9B105;"> 

<fieldset>
   <legend class="d-flex justify-content-center text-white p-5"><h1 style="color:black; text-shadow: 0 -2px 10px rgba(255, 255, 255, 0.8);">Update a Book!</h1></legend>

   <form action="actions/a_update.php"  method="post">
       <table class="d-flex justify-content-center" cellspacing="0" cellpadding= "0">
        <tbody class="p-3 bg-success">
           <tr>
               <th style="color:white;">Cover</th>
               <td><input class="m-3 text-center" type= "text" name="image"  placeholder="add.." value ="<?php echo $data['image'] ?>"></td >
           </tr>
           <tr>
               <th style="color:white;">Genre</th>
               <td><input class="m-3 text-center" type ="text" name= "type" placeholder= "add.." value= "<?php echo $data['type'] ?>"></td>
           <tr>
               <th style="color:white;">Title</th>
               <td><input class="m-3 text-center" type="text"  name="title" placeholder ="add.." value="<?php echo $data['title'] ?>"></td>
           </tr >   
           </tr>
           <tr>
               <th style="color:white;">Author</th>
               <td><input class="m-3 text-center" type ="text" name= "author" placeholder= "add.." value= "<?php echo $data['author'] ?>"></td>
           </tr>
           <tr>
               <th style="color:white;">ISBN</th>
               <td><input class="m-3 text-center" type ="number" name= "ISBN" placeholder= "add.." value= "<?php echo $data['ISBN'] ?>"></td>
           </tr>
           <tr>
               <th style="color:white;">Description</th>
               <td><input class="m-3 text-center" type ="text" name= "short_description" placeholder= "add.." value= "<?php echo $data['short_description'] ?>"></td>
           </tr>
           <tr>
               <th style="color:white;">First Published</th>
               <td><input class="m-3 text-center" type ="text" name= "publish_date" placeholder= "add.." value= "<?php echo $data['publish_date'] ?>"></td>
           </tr>
           <tr>
               <th style="color:white;">Publisher</th>
               <td><input class="m-3 text-center" type ="text" name= "publisher" placeholder= "add.." value= "<?php echo $data['publisher'] ?>"></td>
           </tr>          
           <tr class="d-flex justify-content-between m-3">
               <input type= "hidden" name= "id" value= "<?php echo $data['id']?>" />
               <td><button class="btn btn-primary" type= "submit">Save Changes</button ></td>
               <td><a href= "index.php"><button class="btn btn-primary"  type="button">Back</button></a></td >
           </tr>
         </tbody>
       </table>
   </form >

</fieldset >

</body >
</html >

<?php
}
?>