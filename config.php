<?php
// Direct Supabase Postgres connection (no .env file)
$host     = "https://ikfzkicajfgszrrxyrdd.supabase.co/rest/v1/contact_messages";
$port     = "5432";
$dbname   = "postgres";
$user     = "postgres";
$password = "5he:is:th3:legend"; // use the one from Supabase project settings

try {
    $conn = new PDO("pgsql:host=$host;port=$port;dbname=$dbname", $user, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>
