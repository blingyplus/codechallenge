<?php include "assets.php"; ?>
<div class="wrapper">
    <!-- ========== Left Sidebar Start ========== -->
    <div class="leftside-menu">
        <a href="index.php" class="logo text-center d-none d-md-block">
            <img src="materials/e-ADAPP logo 23.png" alt="e-ADAPP logo" class="img-fluid d-block mx-auto logo-img">
        </a>



        <div class="h-100" id="leftside-menu-container" data-simplebar="">

            <!--- Sidemenu -->
            <ul class="side-nav">

                <li class="side-nav-title"> Main Navigation</li>
                <style>

                </style>
                <li class="side-nav-item">
                    <a href="index.php" class="side-nav-link">
                        <i class="uil-home-alt"></i>
                        <span> Dashboard </span>
                    </a>
                </li>


                <li class="side-nav-item">
                    <a href="farmers.php" class="side-nav-link">
                        <i class="uil-users-alt"></i>
                        <span> Farmers</span>
                    </a>
                </li>

                <li class="side-nav-item">
                    <a href="staff.php" class="side-nav-link">
                        <i class="uil-user"></i>
                        <span> Staff </span>
                    </a>
                </li>
                <li class="side-nav-item">
                    <a href="sync.php" class="side-nav-link">
                        <i class="uil-sync"></i>
                        <span> Synchronization </span>
                    </a>
                </li>
                <li class="side-nav-item">
                    <a href="settings.php" class="side-nav-link">
                        <i class="uil-cog"></i>
                        <span> Settings </span>
                    </a>
                </li>
                <li class="side-nav-item">
                    <a href="report.php" class="side-nav-link">
                        <i class="uil-graph-bar"></i>
                        <span> Report </span>
                    </a>
                </li>
                <div class="collapse" id="sidebarThirdLevel">
                    <ul class="side-nav-third-level">
                        <li>
                            <a href="javascript: void(0);">Item 1</a>
                        </li>
                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarFourthLevel" aria-expanded="false" aria-controls="sidebarFourthLevel">
                                <span> Item 2 </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarFourthLevel">
                                <ul class="side-nav-forth-level">
                                    <li>
                                        <a href="javascript: void(0);">Item 2.1</a>
                                    </li>
                                    <li>
                                        <a href="javascript: void(0);">Item 2.2</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
                </li>
            </ul>
        </div>

        <!-- End Sidebar -->

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->


    <!-- Left Sidebar End -->