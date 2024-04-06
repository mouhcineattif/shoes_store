<div class="container-fluid">
    <div class="row flex-nowrap">
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                    <span class="fs-5 d-none d-sm-inline">Admin Panel</span>
                </a>
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                    <li class="nav-item">
                        <a href="admin.php" class="nav-link align-middle px-0">
                        <i class="fa-solid fa-house"></i> <span class="ms-1 d-none d-sm-inline">Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="dashboard.php"  class="nav-link px-0 align-middle">
                        <i class="fa-solid fa-gauge"></i> <span class="ms-1 d-none d-sm-inline">Dashboard</span> </a>
                    </li>
                    <!-- <li>
                        <a href="#" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline">Orders</span></a>
                    </li> -->
                    <li>
                        <a href="products.php"  class="nav-link px-0 align-middle">
                        <i class="fa-brands fa-product-hunt"></i><span class="ms-1 d-none d-sm-inline">Products</span> </a>
                    </li>
                    <!-- <li>
                        <a href="#" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline">Customers</span> </a>
                    </li> -->
                </ul>
                <hr>
                <div class="dropdown pb-4">
                    <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="https://github.com/user.png" alt="hugenerd" width="30" height="30" class="rounded-circle">
                        <span class="d-none d-sm-inline mx-1"><?php echo $_SESSION['username']['username'] ?></span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                        <li><a class="dropdown-item" href="settings.php">Settings</a></li>
                        <li><a class="dropdown-item" href="profile.php">Profile</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <form  method="post">
                        <li><input class="dropdown-item btn btn-danger" type='submit'name='signout' value='Sign Out'></li>
                        </form>
                    </ul>
                </div>
            </div>
        </div>
