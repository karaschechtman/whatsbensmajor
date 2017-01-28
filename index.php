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
            $HOST = getenv('DB_HOST');
            $NAME = getenv('DB_NAME');
            $USER = getenv('DB_USERNAME');
            $PASS = getenv('DB_PASS');
            $dbconn = pg_connect("hostaddr=$HOST port=5432 dbname=$NAME user=$USER password=$PASS");
            echo $dbconn;
            $result = pg_query($dbconn, "SELECT * FROM benmajor;");
            if (!$result) {
                echo "An error occurred.\n";
                exit;
            }

            while ($row = pg_fetch_row($result)) {
                echo "Date: $row[0]  Major: $row[1]";
                echo "<br />\n";
            }
        ?>

        <div class = "cornericons">
            <span class="glyphicon glyphicon-envelope"></span>
            <span class="glyphicon glyphicon-pencil"></span>
            <span class="glyphicon glyphicon-question-sign"></span>
        </div>
        
        <div class = "box">
            <div class = "title">What is Ben's Major?</div>
            <div class = "text">Ben most recently switched his major to Economics and Philosophy on 01/27/17. </div>
        </div>
	</body>
</html>
