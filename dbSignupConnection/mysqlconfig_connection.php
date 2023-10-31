<?php
    Define('DB_USER', 'root');
    Define('DB_PASSWORD','root');
    Define('DB_HOST','localhost');
    Define('DB_NAME','db');

    $dbc= @mysql_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) OR 
    dies('Could not connect to Mysql: '. ,mysql_connect_error());
?>