<?php
// Database connection parameters
$host = "db.ikfzkicajfgszrrxyrdd.supabase.co";
$port = "5432";
$dbname = "postgres";
$user = "postgres";
$password = "5he:is:th3:legend"; // <- replace with actual password

try {
    // Using PDO for PostgreSQL connection
    $dsn = "pgsql:host=$host;port=$port;dbname=$dbname;";
    $pdo = new PDO($dsn, $user, $password, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // Show errors
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC // Fetch as array
    ]);

    echo "✅ Connected to Supabase PostgreSQL successfully!<br>";

    // Example query
    $stmt = $pdo->query("SELECT NOW()");
    $row = $stmt->fetch();
    echo "Server time: " . $row['now'];

} catch (PDOException $e) {
    echo "❌ Connection failed: " . $e->getMessage();
}
?>
