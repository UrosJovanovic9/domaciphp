<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="css/style.css">
    <a href='https://pngtree.com/so/red'></a>
    <title>Stranica za prijavu</title>
    <!-- <link rel="icon" type="image/x-icon" href="/img/logo.png"> -->
    <link rel="icon" href="img/logo.png" type="image/png">
</head>
<body>


    <!-- <div class = "navbar-header">
        <a class="navbar-brand" href="#"> <img src="img/logo.png" alt="" class = "img-responsive"></a>
    </div> -->

    



<div class="login-form">
        <div class="main-div">
            <form method="POST" action="#">
                <div class="container">
                   <h2>DOBRO DOSLI!</h2>
                    <!-- <label class="username">Korisnicko ime</label> -->
                    <input placeholder = "Korisnicko ime"type="text" name="username" class="form-control" required>
                    <br>
                    <!-- <label for="password">Lozinka</label> -->
                    <input placeholder = "Lozinka" type="password" name="password" class="form-control" required>
                    <button type="submit" class="btn btn-primary" name="submit">PRIJAVI SE</button>
                    <button onclick="location.href = 'registracija.php';" type="submit" class="btn btn-primary" name="submit">REGISTRUJ SE</button>
                </div>

            </form>
        </div>

        
</div>
    
</body>
</html>