<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Buku Tamu | Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css"rel="stylesheet"integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<style>
    .main {
        height: 100vh;
        box-sizing: border-box;
    }
    .login-box {
        width: 500px;
        border:solid 1px;
        padding: 30px;
     
     }
     form div {
        margin-bottom: 30px;
     }
</style>
<body>
    <div class="main d-flex justify-content-center align-items-center">
        
        <div class="'alert alert-danger">
           
        </div>
        <div class="login-box">
            <form action="action" method="post">
                <div>
                    <label for="username" class="form-label">Username</label>
                    <input type="text" name="username" id="username" class="form-control" required>
                </div>
                <div>
                    <label for="password" class="form-label">Password</label>
                    <input type="text" name="password" id="password" class="form-control" required>
                </div>
                <div><button type="submit" class="btn btn-primary form-control">login</button>
            </div>
            <div class="text-center">
                <a href="register">sign up</a>
            </div>
          
            </form>

        </div>
    </div>
    

    
   
    
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>