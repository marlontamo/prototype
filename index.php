<?php include 'headerPlain.php';?>
<body class="antialiased">

    <!-- Hero Section: Mimics the dark header/sidebar of AdminLTE -->
    <header class="jumbotron-bg text-center">
        <div class="container">
            <h1 class="display-5 fw-bold mb-4">
                <span class="jhmc-text-info">SEZRIS</span> 
            </h1>
            <p class="lead mb-5">
                SPECIAL ECONOMIC ZONE REGULATORY INFORMATION SYSTEM
            </p>
            <div class="d-flex justify-content-center">
                <!-- Button 1 with a margin to its right -->
                                <a href="<?php echo $basePath;?>pages/login.php" class="btn btn-primary btn-lg rounded-pill shadow-sm me-2">
            Start Application
        </a>                 <!-- Button 2 -->
                            </div>
        </div>
    </header>

    <main class="py-5">

        <!-- Features Section: Mimics the info boxes and cards -->
        <section id="features" class="container mb-5">
            <h2 class="text-center mb-4 fw-bold text-secondary">Key Features</h2>
            <div class="row g-4">

                <!-- Feature Card 1 (Mimics info box - primary) -->
                <div class="col-md-6 col-lg-3 ">
                    <div class="info-box bg-danger text-white">
                        <span class="info-box-icon"><i class="fas fa-chart-line"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Real-time Analytics</span>
                            <span class="info-box-number">
                                <small>Instant insights into your operations</small>
                            </span>
                        </div>
                    </div>
                </div>

                <!-- Feature Card 2 (Mimics info box - info) -->
                <div class="col-md-6 col-lg-3 ">
                    <div class="info-box bg-primary text-white">
                        <span class="info-box-icon"><i class="fas fa-database"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Secure Storage</span>
                            <span class="info-box-number">
                                <small>Advanced encryption and cloud infrastructure</small>
                            </span>
                        </div>
                    </div>
                </div>

                <!-- Feature Card 3 (Mimics info box - success) -->
                <div class="col-md-6 col-lg-3 ">
                    <div class="info-box bg-secondary text-white">
                        <span class="info-box-icon"><i class="fas fa-file-invoice"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Data Management</span>
                            <span class="info-box-number">
                                <small>Scheduled reports delivered to your inbox</small>
                            </span>
                        </div>
                    </div>
                </div>

                <!-- Feature Card 4 (Mimics info box - warning) -->
                <div class="col-md-6 col-lg-3">
                    <div class="info-box bg-warning text-white">
                        <span class="info-box-icon"><i class="fas fa-users"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">User Management</span>
                            <span class="info-box-number">
                                <small>Intuitive control over roles and permissions</small>
                            </span>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <!-- About Section: Mimics a general content card -->
        <section id="about" class="container mb-5">
            <div class="card shadow-sm border-0">
                <div class="card-header card-header-primary fw-bold">
                    About SEZRIS
                </div>
                <div class="card-body">
                    <p class="card-text">
                        SEZRIS is a powerful and intuitive system designed to streamline your business processes. Built with the user in mind, it provides a clean, responsive, and robust platform for managing your most critical data and operations. From comprehensive analytics
                        to seamless team collaboration, SEZRIS puts the tools you need right at your fingertips.
                    </p>
                    <p class="card-text">
                        Our goal is to help you make smarter decisions, faster. With a unified dashboard that consolidates all your key metrics, you can spend less time searching for information and more time focusing on what truly matters.
                    </p>
                </div>
            </div>
        </section>

        <!-- CTA Section: A bold, simple call-to-action block -->
        <section class="bg-sezris-danger py-5 text-white text-center d-none">
            <div class="container">
                <h2 class="mb-4 fw-bold">Ready to elevate your system?</h2>
                <p class="lead mb-4">Join countless professionals who are transforming their work with SEZRIS.</p>
                <a href="#" class="btn btn-light btn-lg rounded-pill shadow-sm text-dark">
                    Request a Demo
                </a>
            </div>
        </section>

    </main>

    <!-- Simple Footer -->
    <footer class="bg-dark text-secondary py-3 d-none">
        <div class="container text-center">
            <small>&copy; 2024 SEZRIS. All rights reserved.</small>
        </div>
    </footer>

<?php include 'footer.php';?>