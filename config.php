<?php
// Supabase Postgres connection details
$host = "db.ikfzkicajfgszrrxyrdd.supabase.co";
$port = "5432";
$dbname = "postgres";
$user = "postgres";
$password = "5he:is:th3:legend"; // 🔑 replace with your actual password

try {
    // DSN (Data Source Name)
    $dsn = "pgsql:host=$host;port=$port;dbname=$dbname;";

    // Create a PDO instance
    $conn = new PDO($dsn, $user, $password, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,   // throw exceptions on errors
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC // return rows as assoc arrays
    ]);

    // Uncomment this line if you want a success message for debugging
    // echo "✅ Connected to Supabase!";
} catch (PDOException $e) {
    // Show error if connection fails
    die("❌ Connection failed: " . $e->getMessage());
}
?>
