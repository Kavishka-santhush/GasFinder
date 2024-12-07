<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GasFinder - Find Gas Cylinders Near You</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="index.php">GasFinder</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="shop_register.php">Register Shop</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="shop_login.php">Shop Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <!-- Map Section -->
            <div class="col-md-8 p-0">
                <div id="map" style="height: calc(100vh - 56px);"></div>
            </div>
            
            <!-- Search and Results Section -->
            <div class="col-md-4 py-4">
                <div class="px-4">
                    <h2 class="mb-4">Find Gas Cylinders</h2>
                    <div class="search-box mb-4">
                        <input type="text" id="shopName" class="form-control form-control-lg" placeholder="Search for shops...">
                    </div>
                    <div id="searchResults" class="shop-results">
                        <!-- Search results will be displayed here -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="bg-dark text-light mt-5">
        <div class="container py-4">
            <div class="row">
                <div class="col-md-6">
                    <h5>GasFinder</h5>
                    <p>Your reliable gas cylinder tracking solution</p>
                </div>
                <div class="col-md-6 text-md-end">
                    <p>&copy; 2024 GasFinder. All rights reserved.</p>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDqwUhD7KEMsSpLYAMgTkTg-45EZOVAcD8&libraries=places"></script>
    <script src="js/main.js"></script>
</body>
</html>
