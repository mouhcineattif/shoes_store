<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/home.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Log In</title>
</head>
<body>
    <?php include_once 'ressources/includes/navbar.php';?>
    <?php
    if(isset($_POST['submit'])){
        $username = $_POST['username'] ? $_POST['username'] : false;
        $password = $_POST['password'] ? $_POST['password'] : false;
        if($username&&$password){
          require_once 'C:\xampp\htdocs\back-end\SHOES STORE\DataBase\sql_file\database.php';
          
          $sqlState = $pdo->prepare('SELECT * FROM admin 
                                    WHERE username = ? 
                                    AND password = ?');
          $sqlState->execute([$username,$password]);
          if($sqlState->rowCount()>=1){
            session_start();
            $_SESSION['username'] = $sqlState->fetch();
            header('Location: admin.php');

          }else{
            echo "<div class='alert alert-danger' role='alert'>
            Password or Username Incorrect!
          </div>";
          }
        }else{
            echo "<div class='alert alert-danger' role='alert'>
            Fields Are required!
          </div>";
        }
    };
    
    ?>
    <div class="wrapper">
  <div id="formContent">
    <h2 class="active"> Log In </h2>

    <form method='post'>
      <input type="text" id="login" class=" second" name="username" placeholder="log in">
      <input type="text" id="password" class=" third" name="password" placeholder="password">
      <input type="submit" class="fadeIn fourth" name='submit' value="Log In">
    </form>

  </div>
</div>
    
</body>
</html>