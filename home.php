<?php 
session_start();
$id=$_SESSION['id'];
if($id=="")
{
include("logout.php");
}
$f_name=$_SESSION['f_name'];
$l_name=$_SESSION['l_name'];
$username=$_SESSION['username'];
$session_key=$_SESSION['session_key'];
$note=$_SESSION['note'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
  <title>Home Page</title>
  <style>
    body {
      background-color: #f8f9fa;
    }

    .login-container {
      max-width: 400px;
      margin: 0 auto;
      padding: 40px;
      margin-top: 100px;
      background-color: #fff;
      border-radius: 4px;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }

    .login-container h2 {
      text-align: center;
      margin-bottom: 30px;
    }
    body {
      height: 100vh;
      display: flex;
      align-items: center;
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-xl-12 text-end mb-3">
        <a href="logout.php" class="btn btn-outline-danger ">LogOut</a>
      </div>
      <div class="col-xl-12">
      <table class="table table-bordered border-success shadow">
  <thead>
    <tr>
      <th scope="col">Key</th>
      <th scope="col">Response</th>
    </tr>
  </thead>
  <tbody>

    <tr>
      <th scope="row">Note</th>
      <td><?php echo $note; ?></td>
    </tr>
  
    <tr>
      <th scope="row">ID</th>
      <td><?php echo $id; ?></td>
    </tr>

    <tr>
      <th scope="row">f_name</th>
      <td><?php echo $f_name; ?></td>
    </tr>

    <tr>
      <th scope="row">l_name</th>
      <td><?php echo $l_name; ?></td>
    </tr>

    <tr>
      <th scope="row">user</th>
      <td><?php echo $username; ?></td>
    </tr>

    <tr>
      <th scope="row">Session_key</th>
      <td><?php echo $session_key; ?></td>
    </tr>

  </tbody>
</table>
      </div>
    </div>
  
  </div>
</body>

</html>
