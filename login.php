<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN | WEB PKI</title>
</head>
<body>
    <h1 class="login">LOGIN</h1>
    <form action="login.php" method="post" enctype="multipart/form-data" id="loginForm">
        <label for="email">Email: </label> 
        <input type="email" name="email">   
        <label for="password">Password: </label>    
        <input type="password" name="password"> 
        <label for="remember">Ingatkan saya!</label>
         <input type="checkbox" name="remember" value="1"> 
        <input type="submit" value="login"> 
    </form>
    <p>Belum punya akun? <a href="register.html">Daftar di sini</a></p>
    <script>
        document.getElementById('loginForm').addEventListener('submit', function(e) {
          const email = document.getElementById('email').value.trim();
          const password = document.getElementById('password').value.trim();
      
          if (!email || !password) {
            e.preventDefault(); // cegah form dikirim
            alert('Email dan password harus diisi!');
          }
        });
      </script>
</body>
</html>