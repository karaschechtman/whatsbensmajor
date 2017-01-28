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
            $dbopts = parse_url(getenv('DATABASE_URL'));
            $app->register(new Herrera\Pdo\PdoServiceProvider(),
               array(
                   'pdo.dsn' => 'pgsql:dbname='.ltrim($dbopts["path"],'/').';host='.$dbopts["host"] . ';port=' . $dbopts["port"],
                   'pdo.username' => $dbopts["user"],
                   'pdo.password' => $dbopts["pass"]
               )
            );

            $app->get('/db/', function() use($app) {
            $st = $app['pdo']->prepare('SELECT major FROM benmajor');
            $st->execute();

            $majors = array();
            while ($row = $st->fetch(PDO::FETCH_ASSOC)) {
                $app['monolog']->addDebug('Row ' . $row['major']);
                $majors[] = $row;
            }

  return $app['twig']->render('database.twig', array(
    'names' => $names
  ));
});
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
