<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:700|Noto+Serif" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> <!--BOOTSTRAP-->
        <link rel="stylesheet" type="text/css" href="style.css"> <!--STYLE-->
        
        <title>What's Ben's Major?</title>
        <link href="favicon.ico" rel="icon" type="image/x-icon" />

    </head>
    <body>
        <div class = "cornericons">
            <a style = "color:white;" href = "/"><span class="glyphicon glyphicon-home"></span></a>
            <a style = "color:white;" href = "ideas.php"><span class="glyphicon glyphicon-envelope"></span></a>
            <a style = "color:white;" href="submit.php"><span class="glyphicon glyphicon-pencil"></span></a>
            <a style = "color:white;" href="about.html"><span class="glyphicon glyphicon-question-sign"></span></a>
        </div>
        
        <?php 
            if($_POST['pwd'] == "iamben") {
                include("submitform.php");
            }
            else { ?>
            <div class = "box">
                <div class = "title">Please prove that you are Ben.</div>
                <form action = "submit.php" id="form" method="POST">
                    <input type="password" name="pwd" autofocus class="password">
                    <div class="line"></div>
                    <br />
                    <input type="submit" name="submit" value="GO FORTH" style="font-family:'Montserrat',sans-serif;">
                </form>
                
            </div>
            <?}
        ?>
    </body>
</html>