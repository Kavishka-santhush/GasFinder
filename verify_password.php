<?php
require_once 'config.php';

$stmt = $conn->prepare("SELECT email, password FROM shops LIMIT 1");
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();

echo "Testing password verification for first shop:<br>";
echo "Email: " . $row['email'] . "<br>";
echo "Stored Hash: " . $row['password'] . "<br>";
echo "Verifying password '123': " . (password_verify('123', $row['password']) ? 'TRUE' : 'FALSE') . "<br>";

// Generate a new hash for '123'
$new_hash = password_hash('123', PASSWORD_DEFAULT);
echo "<br>New hash for '123': " . $new_hash . "<br>";
echo "Verifying new hash: " . (password_verify('123', $new_hash) ? 'TRUE' : 'FALSE') . "<br>";
?>
