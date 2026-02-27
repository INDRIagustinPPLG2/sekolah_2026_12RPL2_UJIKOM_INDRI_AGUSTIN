<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>LOGIN</title>
     <style>
     body{
            margin: 0;
            min-height: 100vh;
            diplay: flex;
            justify-content: center;
            background: linear-gradient(to right, #6b9071,  #e3eed4);
            padding: 20px 40px;
          }
     .ibu{
           width: 300px;
           height: 350px;
           margin: 100px auto;
           background: #e3eed4;
           border-bottom: 4px solid #547561;
           padding: 20px;
           border-radius: 20px;     
          }
     button {
            width: 150px; 
            height: 50px;
            border-radius: 20px;
            background-color: #375534;
            border: none;
            border-bottom: 4px solid #547561;
            transition: all 0.3s ease; 
        }
     button:hover {
            background-color: #7da78e;
        }
        a {
            color: black;
            text-decoration: none; 
        }

     </style>
</head>
<body>
    <div class="ibu">
     <a href="HALAMAN-UTAMA.PHP">BACK</a>
     <center>
     <h1>LOGIN</h1>
     <form action="proses-login.php" method="post">
          <p>Username</p>
          <input type="text" name="username"/>
          

          <p>Password</p>
          <input type="password" name="password"/>
          <br><br/>
          
          <button>Login</button>
     </form>
     </center>
     </div>
</body>
</html>