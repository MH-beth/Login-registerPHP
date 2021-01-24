<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='src/css/style.css'>
    <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css'>
    <title>Login</title>
</head>
<body>
    <div class="container">
        <div class="login-box">
        <div class="rows">
            <div class="col-md-6 login-left">
                <h2>Login here</h2>
                <form action="src/php/validation.php" method = "post">
                    <div class="form-group">
                        <label for="username">username</label>
                        <input type='text' style='color:#fff;' name="user" class="form-control" required> 
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" style='color:#fff;' name='password' class='form-control' required>
                    </div>
                    <button type='submit' class='btn btn-primary'>Login</button>
                    
                </form>
            </div>
        </div>
        <br/><br/>
        <div class="col-md-6 login-right">
                <h2>Register here</h2>
                <form action="src/php/registration.php" method = "post">
                    <div class="form-group">
                        <label for="username">username</label>
                        <input style='color:#fff;' type='text' name="user" class="form-control" required> 
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" style='color:#fff;' name='password' class='form-control' required>
                    </div>
                    <button type='submit' class='btn btn-primary'>Register</button>
                    
                </form>
            </div>
            </div>
        </div>
    </div>

    
</body>
</html>