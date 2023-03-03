    <!-- Topbar Start -->
    <?php include "sidebar.php"; ?>

    <div class="navbar-custom">
        <ul class="list-unstyled topbar-menu float-end mb-0">
            <li class="dropdown notification-list d-lg">
                <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                    <i class="dripicons-search noti-icon text-success"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-animated dropdown-lg p-0">
                    <form class="p-3">
                        <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                    </form>
                </div>
            </li>
            <li class="dropdown notification-list d d-sm-inline-block">
                <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                    <i class="dripicons-lightbulb noti-icon text-secondary"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated dropdown-lg p-0">
                    <div class="p-2">
                        <div class="row g-0">
                            <h5 class="mt-1">Appearance Mode</h5>
                            <hr class="mt-1">

                            <div class="form-check form-switch mb-1">
                                <input class="form-check-input" type="checkbox" name="color-scheme-mode" value="light" id="light-mode-check" checked="">
                                <label class="form-check-label" for="light-mode-check">Light Mode</label>
                            </div>

                            <div class="form-check form-switch mb-3">
                                <input class="form-check-input" type="checkbox" name="color-scheme-mode" value="dark" id="dark-mode-check">
                                <label class="form-check-label" for="dark-mode-check">Dark Mode</label>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="dropdown notification-list topbar-dropdown">
                <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#language" role="button" aria-haspopup="false" aria-expanded="false">
                    <img src="materials/language.png" alt="Language" class="me-0 me-sm-1" height="20" width="20">
                    <span class="align-middle d-none d-sm-inline-block"></span> <i class="mdi mdi-chevron-down d-none d-sm-inline-block align-middle"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated topbar-dropdown-menu">
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <img src="assets/images/flags/germany.jpg" alt="German" class="me-1" height="12"> <span class="align-middle">German</span>
                    </a>
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <img src="assets/images/flags/italy.jpg" alt="Italian" class="me-1" height="12"> <span class="align-middle">Italian</span>
                    </a>
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <img src="assets/images/flags/spain.jpg" alt="Spanish" class="me-1" height="12"> <span class="align-middle">Spanish</span>
                    </a>
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <img src="assets/images/flags/russia.jpg" alt="Russian" class="me-1" height="12"> <span class="align-middle">Russian</span>
                    </a>

                </div>
            </li>



            <!-- <li class="notification-list">
                <a class="nav-link end-bar-toggle" href="javascript: void(0);">
                    <i class="dripicons-gear noti-icon"></i>
                </a>
            </li> -->

            <li class="dropdown notification-list">
                <a class="nav-link dropdown-toggle nav-user arrow-none me-0" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                    <span class="account-user-avatar">
                        <img src="materials/annie-spratt-QYcSeY7vuZM-unsplash 1.svg" alt="user-image" class="rounded-circle">
                    </span>
                    <span>
                        <span class="account-user-name">Kwame Anim</span>
                        <span class="account-position">Farmer</span>
                    </span>
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated topbar-dropdown-menu profile-dropdown">

                    <div class=" dropdown-header noti-title">
                        <h6 class="text-overflow m-0">Welcome, Kwame.</h6>
                    </div>
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="mdi mdi-account-circle me-1"></i>
                        <span>My Account</span>
                    </a>
                    <a href="javascript:void(0);" class="dropdown-item notify-item">

                        <i class="mdi mdi-account-edit me-1"></i>
                        <span>Settings</span>
                    </a>

                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="mdi mdi-lifebuoy me-1"></i>
                        <span>Support</span>
                    </a>

                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="mdi mdi-logout me-1"></i>
                        <span>Logout</span>
                    </a>
                </div>
            </li>

        </ul>
        <button class="button-menu-mobile open-left d-block d-md-none">
            <i class="mdi mdi-menu"></i>
        </button>

        <div class="logo d-none d-lg-block">
            <div class="input-group">
                <a href="index.php" class="logo">
                    <img src="materials/3sdclTHE 2.png" alt="" width="20%">

                </a>

            </div>
        </div>

    </div>
    <!-- end Topbar -->