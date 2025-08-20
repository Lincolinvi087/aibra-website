<?php
// contact.php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $data = [
        "full_name" => $_POST['full_name'] ?? '',
        "email"     => $_POST['email'] ?? '',
        "message"   => $_POST['message'] ?? ''
    ];

    $url  = "https://ikfzkicajfgszrrxyrdd.supabase.co/rest/v1/contact_messages";
    $apikey = "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJzdXBhYmFzZSIsInJlZiI6ImlrZnpraWNhamZnc3pycnh5cmRkIiwicm9sZSI6ImFub24iLCJpYXQiOjE3NTU1OTA3NDQsImV4cCI6MjA3MTE2Njc0NH0.-G96bqN4xbieasmiPUHMekW24-0egAps1GyuAdY-Qv0";  // replace with your anon key

    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        "apikey: $apikey",
        "Authorization: Bearer $apikey",
        "Content-Type: application/json"
    ]);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($ch);
    if ($response === false) {
        echo "cURL Error: " . curl_error($ch);
    } else {
        echo "Message sent successfully!";
    }
    curl_close($ch);
}
?>
