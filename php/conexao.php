<?php
$host = 'localhost';
$db = 'site_batman';
$user = 'postgres';
$pass = '@Dj62282';
$charset = 'utf8mb4';

$dsn = "pgsql:host=localhost;port=5432;dbname=postgres;charset=$charset";

$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}
?>
