<?php

use JetBrains\PhpStorm\Internal\PhpStormStubsElementAvailable;

include('include/topbar.php'); ?>

<!-- Begin page -->

<div class="content-page">
    <div class="content">
        <!-- Start Content-->
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12"><br>
                    <div class="card">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-1">
                                    <div class="card p-2" style="width: 100%; height: 100%; padding-bottom: 100%; display: flex; justify-content: center; align-items: center;">
                                        <img src="materials/agenda.png" alt="Farmers Panel" style="max-width: 100%; max-height: 100%;">
                                    </div>
                                </div>
                                <div class="col-11">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h3 class="fpanel" style="font-size: 20px; padding-right: 2rem;">Farmers' Panel</h3>
                                    </div>
                                    <p class="poppins-regular" style="font-size: 15px; margin-top: 1rem;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lobortis neque vel leo luctus aliquet.</p>
                                </div>
                            </div> <!-- end row -->
                        </div> <!-- end card-body -->
                    </div> <!-- end card -->
                </div>
            </div>
            <!-- end page title -->
            <div class="row">
                <div class="col-lg-6 col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <h5 class="text-muted fw-normal mt-0 text-truncate" title="This week">This week <span class="text-success me-2">36%<i class="mdi mdi-arrow-up-bold"></i></span></h5>
                                    <h3 class="my-2 py-1">GH₵ 2,072</h3>
                                </div>
                                <div class="col-6">
                                    <div class="text-end">
                                        <div id="new-leads-chart" data-colors="#727cf5"></div>
                                    </div>
                                </div>
                            </div> <!-- end row-->
                        </div> <!-- end card-body -->
                    </div> <!-- end card -->
                    <div class="card">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <h5 class="text-muted fw-normal mt-0 text-truncate" title="Income">Income</h5>
                                    <h3 class="my-2 py-1">GH₵ 13,000</h3>
                                </div>
                                <div class="col-6">
                                    <div class="text-end">
                                        <span class="text-success">+14%</span>
                                    </div>
                                </div>
                            </div> <!-- end row-->
                        </div> <!-- end card-body -->
                    </div> <!-- end card -->
                </div> <!-- end col -->
                <div class="col-lg-6 col-xl-4">
                    <div class="card card-h-100">
                        <div class="col-12 d-flex justify-content-between align-items-center p-2">
                            <h5 class="mt-0 fw-normal text-mute mb-3">Revenue</h5>
                            <h3 class="my-2 mt-0  py-1 mb-3 text-end">GH₵ 13,000</h3>
                        </div>
                        <div class="card-body">

                            <div class="row align-items-center">
                                <div id="spark1" class="apex-charts mb-3" data-colors="#734CEA"></div>
                            </div> <!-- end row-->
                        </div> <!-- end card-body -->
                    </div> <!-- end card -->
                </div> <!-- end col -->
                <div class="col-lg-6 col-xl-5">
                    <div class="card card-h-100">
                        <div class="card-body h-100">
                            <div class="col-12">
                                <div class="float-end align-items-center">
                                    <a href="#" class="text-dark mb-3 mt-0" data-bs-trigger="focus" tabindex="0" data-bs-toggle="popover" data-bs-placement="bottom" data-bs-content="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam lobortis quam eu tellus suscipit tempor. Morbi scelerisque augue eu eros commodo, ut aliquam nulla imperdiet.">
                                        <i class="mdi mdi-information-outline"></i>
                                    </a>
                                </div>
                                <h5 class="mt-0  fw-normal text-mute mb-3">Total earning</h5>
                                <div dir="ltr h-100">
                                    <div id="high-performing-product" style="max-height:170px; width:100%; ;" class="apex-charts text-truncate" data-colors="#727cf5,#e3eaef"></div>
                                    <!-- <div id="views-min" class="apex-charts mt-2" data-colors="#0acf97"></div> -->
                                </div>
                            </div>
                        </div> <!-- end card-body-->
                    </div> <!-- end card-->
                </div> <!-- end col -->
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div dir="ltr">
                                <div id="area"></div>
                            </div>
                        </div>
                        <!-- end card body-->
                    </div>
                    <!-- end card -->
                </div>
            </div>


        </div> <!-- container -->

    </div> <!-- content -->
    <!-- Footer Start -->
    <!-- <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <script>
                        document.write(new Date().getFullYear())
                    </script> © Russel - Blingyplus Inc.
                </div>
                <div class="col-md-6">
                    <div class="text-md-end footer-links d-none d-md-block">
                        <a href="javascript: void(0);">About</a>
                        <a href="javascript: void(0);">Support</a>
                        <a href="javascript: void(0);">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </footer> -->
    <!-- end Footer -->

</div>
</div>
<!-- END wrapper -->





<!-- bundle -->
<script src="assets/js/vendor.min.js"></script>
<script src="assets/js/app.min.js"></script>

<!-- Apex js -->
<script src="assets/vendors/apexcharts/apexcharts.js"></script>
<script src="assets/js/vendor/apexcharts.min.js"></script>
<script src="assets/js/pages/ui-apexchart.js"></script>

<!-- third party js -->
<script src="assets/js/vendor/jquery-jvectormap-1.2.2.min.js"></script>
<script src="assets/js/vendor/jquery-jvectormap-world-mill-en.js"></script>
<script src="assets/js/vendor/jquery.sparkline.min.js"></script>

<!-- Todo js -->
<script src="assets/js/ui/component.todo.js"></script>

<!-- demo app -->
<script src="assets/js/pages/dashboard.js"></script>
<script src="assets/js/pages/demo.dashboard.js"></script>
<!-- <script src="assets/js/pages/demo.dashboard.analytics.js"></script> -->
<script src="assets/js/pages/demo.widgets.js"></script>
<script src="assets/js/pages/demo.sparkline.js"></script>
<!-- end demo js-->
</body>

</html>