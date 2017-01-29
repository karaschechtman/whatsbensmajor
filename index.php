<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:700|Noto+Serif" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> <!--BOOTSTRAP-->
        <link rel="stylesheet" type="text/css" href="style.css"> <!--STYLE-->
        
        <title>What's Ben's Major?</title>

    </head>
	<body>
            <?php
            function pg_connection_string_from_database_url() {
                extract(parse_url($_ENV["DATABASE_URL"]));
                return "user=$user password=$pass host=$host dbname=" . substr($path, 1); # <- you may want to add sslmode=require there                too
            }

            echo "<div class = \"cornericons\">
                <span class=\"glyphicon glyphicon-envelope\"></span>
                <span class=\"glyphicon glyphicon-pencil\"></span>
                <span class=\"glyphicon glyphicon-question-sign\"></span>
            </div>
            ";
            $pg_conn = pg_connect(pg_connection_string_from_database_url());
            $result = pg_query($pg_conn, "SELECT * FROM benmajor");
            if (!pg_num_rows($result)) {
                echo 'The database is empty!';
            }   
            else {
            $row = pg_fetch_row($result);
            echo "
            <div class = \"box\">
                <div class = \"title\">What is Ben's Major?</div>
                <div class = \"text\">Ben most recently switched his major to $row[1] on $row[0].</div>
            </div>";
        }
        ?>

        
	</body>
</html>
