<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
    <center>
    <h1>data siswa</h1>
    <form action="" method="POST">
         <div>
        <label for="">NIS</label> <br/>
        <input type="text" name="nis"/>
        </div>
        <div>
        <label for="">NAMA</label> <br/>
        <input type="text" name="username" />
        </div>
        <div>
        <label for="">KELAS</label> <br/>
        <input type="text" name="kelas" />
        </div> 
        <div>
        <label for="">PASSWORD</label> <br/>
        <input type="text" name="password"/>
        </div>
        <div>
        <label for="">ROLE</label> <br/>
        <select name="role">
            <option VALUES="siswa" >siswa</option>
            <option VALUES="admin" >admin</option>
        </select>
        </div>
        
         <br>
        <div>
        <button>submit</button>
        </div>
    </form>
    </center>
</body>
</html>
