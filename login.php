<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nageby.se - Administration</title>
    <link rel="stylesheet" href="http://bootswatch.com/superhero/bootstrap.css">
    <style>
    /*
Inspired by http://dribbble.com/shots/917819-iPad-Calendar-Login?list=shots&sort=views&timeframe=ever&offset=461
*/
body {
    background: url(http://habrastorage.org/files/c9c/191/f22/c9c191f226c643eabcce6debfe76049d.jpg);
}

.jumbotron {
    text-align: center;
    width: 30rem;
    height: 350px;
    border-radius: 0.5rem;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    position: absolute;
    margin: 4rem auto;
    background-color: #fff;
    padding: 2rem;
}

.container .glyphicon-list-alt {
    font-size: 10rem;
    margin-top: 3rem;
    color: #f96145;
}

input {
    width: 100%;
    margin-bottom: 1.4rem;
    padding: 1rem;
    background-color: #ecf2f4;
    border-radius: 0.2rem;
    border: none;
}
h2 {
    margin-bottom: 3rem;
    font-weight: bold;
    color: #ababab;
}
.btn {
    border-radius: 0.2rem;
}
.btn .glyphicon {
    font-size: 3rem;
    color: #fff;
}
.full-width {
    background-color: #8eb5e2;
    width: 100%;
    -webkit-border-top-right-radius: 0;
    -webkit-border-bottom-right-radius: 0;
    -moz-border-radius-topright: 0;
    -moz-border-radius-bottomright: 0;
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
}

.box {
    position: absolute;
    bottom: 0;
    left: 0;
    margin-bottom: 3rem;
    margin-left: 3rem;
    margin-right: 3rem;
}
    </style>

    </head>
    <body>
        <div class="jumbotron">
            <div class="container">
                <h2>Administration</h2>
                <div class="box">
                    <form action="do/auth.php" method="post">
                        <input type="text" name="username" placeholder="Emailadress">
                        <input type="password" name="password" placeholder="Lösenord">
                        <input type="submit" class="btn btn-default full-width" value="Logga in">
                    </form>
                </div>
            </div>
        </div>
        <!-- Javascript and shit -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  
    </body>
</html>