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
            $dbhost = getenv('DB_HOST');
            $dbuser = getenv('DB_USERNAME');
            $dbpass = getenv('DB_PASS');
            $conn = new mysqli($dbhost, $dbuser, $dbpass);
            if($conn->connect_error) {
                die('Could not connect: ' . $conn->connect_error);
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
