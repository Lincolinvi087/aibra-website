<?php
$host = "db.ikfzkicajfgszrrxyrdd.supabase.co";
$port = "5432";
$dbname = "postgres";
$user = "postgres";
$password = "5he:is:th3:legend";

$conn = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password");

if (!$conn) {
    die("❌ Connection failed: " . pg_last_error());
}

// Example: escaping a string safely
$data = "some input";
$safe = pg_escape_string($conn, $data);

echo "✅ Connected and escaped: " . $safe;
?>
