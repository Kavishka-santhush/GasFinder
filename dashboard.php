<?php
session_start();
require_once 'config.php';

if (!isset($_SESSION['shop_id'])) {
    header("Location: shop_login.php");
    exit();
}

// Get current cylinder count
$stmt = $conn->prepare("SELECT cylinder_count FROM gas_inventory WHERE shop_id = ?");
$stmt->bind_param("i", $_SESSION['shop_id']);
$stmt->execute();
$result = $stmt->get_result();
$inventory = $result->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $new_count = $_POST['cylinder_count'];
    
    $stmt = $conn->prepare("UPDATE gas_inventory SET cylinder_count = ? WHERE shop_id = ?");
    $stmt->bind_param("ii", $new_count, $_SESSION['shop_id']);
    
    if ($stmt->execute()) {
        $success = "Inventory updated successfully!";
        $inventory['cylinder_count'] = $new_count;
    } else {
        $error = "Failed to update inventory.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop Dashboard - GasFinder</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="dashboard.php">GasFinder</a>
            <div class="navbar-nav ms-auto">
                <a href="logout.php" class="nav-link">Logout</a>
            </div>
        </div>
    </nav>

    <div class="container py-5">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card shadow">
                    <div class="card-body p-5">
                        <h2 class="text-center mb-4">Welcome, <?php echo htmlspecialchars($_SESSION['shop_name']); ?>!</h2>
                        
                        <?php if(isset($success)) echo '<div class="alert alert-success">'.$success.'</div>'; ?>
                        <?php if(isset($error)) echo '<div class="alert alert-danger">'.$error.'</div>'; ?>

                        <div class="text-center mb-4">
                            <h3>Current Inventory</h3>
                            <div class="display-4 text-primary"><?php echo $inventory['cylinder_count']; ?></div>
                            <p class="text-muted">Gas Cylinders Available</p>
                        </div>

                        <form method="POST" action="" class="mt-4">
                            <div class="mb-3">
                                <label class="form-label">Update Cylinder Count</label>
                                <input type="number" name="cylinder_count" class="form-control form-control-lg" 
                                       value="<?php echo $inventory['cylinder_count']; ?>" min="0" required>
                            </div>

                            <button type="submit" class="btn btn-primary btn-lg w-100">Update Inventory</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
