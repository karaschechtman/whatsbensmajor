<head>
    <body>
        <?php
            function pg_connection_string_from_database_url() {
                extract(parse_url($_ENV["DATABASE_URL"]));
                return "user=$user password=$pass host=$host dbname=" . substr($path, 1); 
            }
            $pg_conn = pg_connect(pg_connection_string_from_database_url());
            $timezone = date_default_timezone_set("America/New_York");
            $date = pg_escape_string(('m/d/Y',date())); 
            $major = pg_escape_string($_POST['newmajor']);
            $query = "INSERT INTO benmajor VALUES($date,$major)";
            $result = pg_query($query); 
            if (!$result) { 
                echo "Error. Unable to submit major.";
                exit(); 
            } 
            echo "Thank you for submitting your major.";
            pg_close(); 
        ?>
    </body>
</head>

