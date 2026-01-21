<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
    <h1>login</h1>
    <form action="index.php" method="POST">
        <div>
        <label for="">username</label> <br/>
        <input type="text" name="username" />
        </div>
         <div>
        <label for="">password</label> <br/>
        <input type="text" name="password"/>
        </div>
        <div>
        <label for="">role</label> <br/>
        <select name="role">
            <option VALUES="siswa" >siswa</option>
            <option VALUES="admin" >admin</option>
        </select>
        </div>
         <div>
        <label for="">NIS</label> <br/>
        <input type="text" name="nis"/>
        </div>
         <div>
        <label for="">kelas</label> <br/>
        <input type="text" name="kelas" />
        </div>
        <div>
        <button>submit</button>
        </div>
    </form>
    </center>
</body>
</html>

   
