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
    <?php include_once 'ressources/includes/navbar.php';
    if(isset($_POST['submit'])){
        $username = $_POST['username'] ? $_POST['username'] : false;
        $password = $_POST['password'] ? $_POST['password'] : false;
        if($username&&$password){
            echo "<div class='alert alert-success' role='alert'>
            User Created Successfully!
          </div>";
          require_once 'C:\xampp\htdocs\back-end\SHOES STORE\DataBase\sql_file\database.php';
          $date_creation = date('Y-m-d');
          $sqlState = $pdo->prepare('INSERT INTO admin VALUES (null,?,?,?)');
          $sqlState->execute([$username,$password,$date_creation]);
          header('Location:login.php');
        }else{
            echo "<div class='alert alert-danger' role='alert'>
            Fields Are required!
          </div>";
        }
    };
    
    ?>
    
    <div class="wrapper">
  <div id="formContent">
    <h2 class="active"> Sign In </h2>

    <form method='post'>
      <input type="text" id="login" class=" second" name="username" placeholder="username">
      <input type="text" id="password" class=" third" name="password" placeholder="password">
      <input type="submit" class="fadeIn fourth" name='submit' value="Sign In">
    </form>

  </div>
</div>
    
</body>
</html>