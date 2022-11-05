<?php 
$db = mysqli_connect('localhost', 'root', '', 'transient_house_db');
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">  
  </head>
  <body>
    <div class="container">
      <button class="btn btn-primary my-5">Add admin</button>
    </div>
    <table class="table">
  <thead>
  <tr>
      <th scope="col">Id no</th>
      <th scope="col">Username</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th scope="col">Operation</th>
    </tr>
  </thead>
  <tbody>
  <?php
  $query ="select * from admin";
  $result = mysqli_query($db, $query);
  if($result){
    while($row=mysqli_fetch_assoc($result)){
        $id=$row['id'];
        $username=$row['username'];
        $email=$row['email'];
        $password=$row['password'];
        echo '<tr>
      <th scope="row">'.$id.'</th>
      <td>'.$username.'</td>
      <td>'.$email.'</td>
      <td>'.$password.'</td>
      <td>
      <button class="btn btn-primary"><a href="" class="text-light">Update</a></button>
      <button class="btn btn-danger"><a href="" class="text-light">Delete</a></button>
      </td>
    </tr>';
        
    }
}
  


?>


</table>
  </body>
</html>