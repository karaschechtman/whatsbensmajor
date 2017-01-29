<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:700|Noto+Serif" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> <!--BOOTSTRAP-->
        <link rel = "stylesheet" href="style.css">
    </head>
    <body>
        <?php
        function pg_connection_string_from_database_url() {
                extract(parse_url($_ENV["DATABASE_URL"]));
                return "user=$user password=$pass host=$host dbname=" . substr($path, 1); 
        }
        $pg_conn = pg_connect(pg_connection_string_from_database_url());
        $timezone = date_default_timezone_set("America/New_York");
        $today = pg_escape_string(date('m/d/Y'));
        $major = pg_escape_string($_POST['newmajor']);
        $query = "INSERT INTO benmajor VALUES($today,$major)";
        $result = pg_query($query);
        if (!$result) { ?>  <div class = "cornericons">
                <a style = "color:white;" href = "/"><span class="glyphicon glyphicon-home"></span></a>
                <a style = "color:white;" href = "ideas.php"><span class="glyphicon glyphicon-envelope"></span></a>
                <a style = "color:white;" href="submit.php"><span class="glyphicon glyphicon-pencil"></span></a>
                <a style = "color:white;" href="about.html"><span class="glyphicon glyphicon-question-sign"></span></a>
            </div>
            <div class = "box">
                <div class = "text">Your major request did not go through.</div>
            </div>
    </body>
</html>
            <?
            exit();
        } 
        ?>
            <div class = "cornericons">
                <a style = "color:white;" href = "/"><span class="glyphicon glyphicon-home"></span></a>
                <a style = "color:white;" href = "ideas.php"><span class="glyphicon glyphicon-envelope"></span></a>
                <a style = "color:white;" href="submit.php"><span class="glyphicon glyphicon-pencil"></span></a>
                <a style = "color:white;" href="about.html"><span class="glyphicon glyphicon-question-sign"></span></a>
            </div>
            <div class = "box">
                <div class = "text">Thank you for submitting your major!</div>
            </div>
        <?
            pg_close();
        ?>
    </body>
</html>

