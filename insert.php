<!DOCTYPE html>
<html>
<head>
   <title>Add a Book!</title>
</head>
<body style="background-color: #D1C7BE"> 

<div>
   <fieldset>
    <legend class="d-flex justify-content-center"><h1 style="color:black; text-shadow: 0 -2px 10px rgba(255, 255, 255, 0.8);">Add a Book!</h1></legend>
   <form action="actions/a_insert.php" method="post">
       <table>
        <tbody>
           <tr>
               <th style="color:white;">Cover</th>
                <td><input class="m-3 text-center" type="text" name="image"  placeholder="Add.."></td>
           </tr>    
           <tr>
               <th style="color:white;">Type</th>
               <td><input class="m-3 text-center" type="text" name= "type" placeholder="Add.."></td>
           </tr>
               <th style="color:white;">Title</th>
               <td><input class="m-3 text-center" type="text" name= "title" placeholder="Add.."></td>
           </tr>
           <tr>
           <tr>
               <th style="color:white;">Author</th>
               <td><input class="m-3 text-center" type="text" name= "author" placeholder="Add.."></td>
           </tr>
            <tr>
               <th style="color:white;">ISBN</th>
               <td><input class="m-3 text-center" type="text" name= "ISBN" placeholder="Add.."></td>
           </tr>
           <tr>
               <th style="color:white;">Description</th>
               <td ><input class="m-3 text-center" type="text" name= "short_description" placeholder="Add.."></td>
           </tr>
          <tr>
               <th style="color:white;">First Published</th>
               <td><input class="m-3 text-center" type="text" name= "publish_date" placeholder="Add.."></td>
           </tr>
           <tr>
               <th style="color:white;">Publisher</th>
               <td><input class="m-3 text-center" type="text" name="publisher" placeholder="Add.."></td>
           </tr>
           <tr class="d-flex justify-content-between m-3">
               <td><button class="btn btn-primary" type="submit">Add Book!</button></td>
               <td><a href= "index.php"><button class="btn btn-primary" type="button">Return to Home!</button></a></td>
           </tr>
        </tbody>
       </table>
   </form>
   </fieldset>
</div>
</body>
</html>