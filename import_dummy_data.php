<?php
require_once 'config.php';

echo "Starting data import...\n";

// Read the SQL file
$sql = file_get_contents('dummy_data.sql');

// Split into individual queries
$queries = explode(';', $sql);

// Execute each query
foreach ($queries as $query) {
    $query = trim($query);
    if (!empty($query)) {
        if ($conn->query($query)) {
            echo "Query executed successfully\n";
        } else {
            echo "Error executing query: " . $conn->error . "\n";
        }
    }
}

echo "Data import completed!\n";
echo "You can now log in to any shop using their email and password '123'\n";

$conn->close();
?>
