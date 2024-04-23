
    <!-- LOGOUT -->
    <div class="container-fluid text-light p-3 d-flex align-items-center justify-content-between sticky-top" style="background:#03254c">
        <img src="images/logo/D-LOGO.png" alt="logo" width="120" height="90">
        <a href="logout.php" class="btn btn-primary shadow-none me-lg-2 me-3">LOG OUT</a>          
    </div>

    <!-- MENU -->
    <div class="col-lg-2 border-top border-3 border-secondary" style="background:#03254c" id="dashboard-menu">
        <nav class="navbar navbar-expand-lg" style="background:#03254c">
            <div class="container-fluid flex-lg-column align-items-stretch">
                <h4 class="mt-2 text-light">Admin Panel</h4>
                <button class="navbar-toggler shadow-none bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#adminDropdown" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon fa-6x"></span>
                </button>
                <div class="collapse navbar-collapse flex-column align-items-stretch mt-2" id="adminDropdown">
                    <ul class="nav nav-pills flex-column">
                        <li class="nav-item">
                            <a class="nav-link text-white" href="dashboard.php">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="rooms.php">Rooms</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="features_facilities.php">Features & Facilities</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="user_queries.php">User Queries</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="setting.php">Settings</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>