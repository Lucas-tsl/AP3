<?php

$DB_SERVER = getenv("MVC_SERVER") ?: "127.0.0.1";
$DB_DATABASE = getenv("MVC_DB") ?: "mediatheque";
$DB_USER = getenv("MVC_USER") ?: "root";
$DB_PASSWORD = getenv("MVC_TOKEN") ?: "root";
$DEBUG = getenv("MVC_DEBUG") ?: true;
$URL_VALIDATION = getenv("MVC_URL_VALIDATION") ?: "http://localhost:9000/valider-compte/";
$MAIL_SERVER = getenv("MVC_MAIL_SERVER") ?: "localhost";
$FROM_EMAIL = getenv("MVC_FROM_EMAIL") ?: "contact@localhost.fr";

return array(
    "DB_USER" => $DB_USER,
    "DB_PASSWORD" => $DB_PASSWORD,
    "DB_DSN" => "mysql:host=$DB_SERVER;dbname=$DB_DATABASE;charset=utf8",
    "DEBUG" => $DEBUG,
    "MAIL_SERVER" => $MAIL_SERVER,
    "FROM_EMAIL" => $FROM_EMAIL,
    "URL_VALIDATION" => $URL_VALIDATION
);
