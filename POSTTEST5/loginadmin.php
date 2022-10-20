<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible"
    content="IE=edge">
    <meta name="viewport" 
    content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="login.css">
    <link href="https://fonts.googleapis.com/css2?family=Sora&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <title>Login</title>
</head>

<?php
if(isset($_POST['login'])){
    $user= $_POST['username'];
    $pass=$_POST['password'];

    if($user == 'Admin' AND $pass == '123'){
      header("Location: index.php");  
    } else {
        echo "<script>
        alert('Maaf, Username atau Password yang anda masukkan salah')
        </script>";
    }
}



 ?>
<body>    

    <div class="container">
        <div class="login">
            <h1>Login</h1>
            
            <form action="" method="post">
                
                <p>Mercle Devices</p>
                <label for="">Username</label>
                <input type="text" name="username" placeholder="username" required=""/>
                <label for="">password</label>
                <input type="password" name="password" placeholder="password" required=""/>
                <button type="submit" name="login"><a href="index.php"></a> Login </a></button>

            </form>
            </div>
           </div>
        

    
    
</body>

</html>
  