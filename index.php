<?php require_once 'actions/db_conn.php'; ?>
<!DOCTYPE html>
<html>
<head>
   <title>Code Review 10</title>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
   <link rel="stylesheet" type="text/css" href="style.css">
</head>
  <body class="bg-info">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">BIG</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
        <li class="nav-item active">
            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="insert.php">Insert Media</a>
        </li>
        </ul>
    </div>
    </nav>
    <header>
        <div class="jumbotron main_header">
            <h1 class="display-4">The BIG Library</h1>
            <p class="lead">Enjoy a new World!</p>
        </div>
    </header>

  <div class="table">
    
   <!-- <div class="row header green">
      <div class="cell">
        Cover
      </div>
      <div class="cell">
       Type
      </div>
      <div class="cell">
       Title
      </div>
      <div class="cell">
       Author
      </div>
      <div class="cell">
       ISBN
      </div>
           <div class="cell">
       Description
      </div>
           <div class="cell">
       Published
      </div>
           <div class="cell">
       Publisher
      </div>
           <div class="cell">
       Edit
      </div>
           <div class="cell">
       Delete
      </div>
    </div>-->
  <div class='col'>
    <?php
               $sql = "SELECT * FROM media";
           $result = mysqli_query($conn, $sql);
            if($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                   echo
    "<div class='cell row text-center' data-title='Cover'><img src= '" .$row['image']." ' width='120px'></div>
      <div class='cell row text-center' data-title='Type'><p>" .$row["type"]."</p></div>
      <div class='cell row text-center' data-title='Title'><p>" .$row['title']."</p></div>
      <div class='cell row text-center' data-title='Author'><p>" .$row['author']."</p></div>
      <div class='cell row text-center' data-title='ISBN'><p>" .$row['ISBN']."</p></div>
      <div class='cell row text-center' data-title='Description'><p>" .$row['short_description']."</p></div>
       <div class='cell row text-center' data-title='Published'><p>" .$row['publish_date']."</p></div>
       <div class='cell row text-center' data-title='Publisher'><p>" .$row['publisher']."</p></div>
       <div class='cell row text-center' data-title='Update'><a href='update.php?id=" .$row['id']."'><button style='background-color:#F9B105;'class='btn' type='button'>Update Entry</button></a></div>
       <div class='cell row text-center' data-title='Delete'><a href='delete.php?id=" .$row['id']."'><button style='background-color:#8E3735;'class='btn ' type='button'>Delete Entry</button></a></div>
       <br>
       <br>
       " ;
         }
           } else  {
               echo  "<tr><td colspan='5'>No Data Avaliable</td></tr>";
           }
            ?>
   </div>
  </div>
</body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
        <li class="nav-item active">
            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="insert.php">Insert Media</a>
        </li>
        </ul>
    </div>
        <div class="mx-auto order-0">
        <a class="navbar-brand mx-auto" href="#">Anna, 2020</a>
    </div>
    </nav>
</html>