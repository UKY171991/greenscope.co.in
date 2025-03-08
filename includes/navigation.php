<!-- Navbar Start -->

<div class="container">
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">

        <a href="<?= $bu ?>" class="navbar-brand d-flex align-items-center px-4 px-lg-5">

            <img src="<?= $bu ?>img/logo.png" alt="GreenScope - Logo" style="height:100px; width:auto;">

        </a>

        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">

            <span class="navbar-toggler-icon"></span>

        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">

            <div class="navbar-nav ms-auto p-4 p-lg-0" style="margin-right:20px;">

                <a href="<?= $bu ?>" class="nav-item nav-link active">Home</a>

                <a href="<?= $bu ?>about.php" class="nav-item nav-link">About</a>

                

                <!-- Services Dropdown -->

                <div class="nav-item dropdown">

                    <a href="<?= $bu ?>services.php" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Services</a>

                    <div class="dropdown-menu">
                        <a href="<?= $bu ?>garden-and-landscape-design-services.php" class="dropdown-item">Garden & Landscape Design</a>
                        <a href="<?= $bu ?>garden-maintenance-services.php" class="dropdown-item">Garden Maintenance Services</a>
                        <a href="<?= $bu ?>terrace-garden-design-services.php" class="dropdown-item">Terrace Garden Design</a>
                        <a href="<?= $bu ?>vertical-gardening-design-services.php" class="dropdown-item">Vertical Gardening Design</a>
                        <a href="<?= $bu ?>butterfly-garden-development-services.php" class="dropdown-item">Butterfly Garden Development</a>
                        <a href="<?= $bu ?>outdoor-home-plants-service.php" class="dropdown-item">Outdoor Home Plants</a>
                        <a href="<?= $bu ?>miyawaki-plantation-services.php" class="dropdown-item">Miyawaki Plantation</a>
                        <a href="<?= $bu ?>pest-control-services.php" class="dropdown-item">Pest Control Services</a>
                        <a href="<?= $bu ?>drip-irrigation-services.php" class="dropdown-item">Drip Irrigation Services</a>
                        <a href="<?= $bu ?>land-valuation-services.php" class="dropdown-item">Land Valuation Services</a>
                    </div>

                </div>



                <a href="<?= $bu ?>gallery.php" class="nav-item nav-link">Gallery</a>

                <a href="<?= $bu ?>contact.php" class="nav-item nav-link">Contact</a>

            </div>        

        </div>

    </nav>

    <!-- Navbar End -->
</div>


