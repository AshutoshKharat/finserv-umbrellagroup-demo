<nav class="navbar navbar-expand-lg py-3">
    <div class="container-xl">

        <!-- Logo -->
        <a class="navbar-brand d-flex align-items-center gap-2" href="index.php">
            <div class="logo-icon">
                <img src="assets/images/logo.jpg" alt="VUSoInTe Logo" width="32" height="32">
            </div>
            <span class="logo-text">VUSoInTe</span>
        </a>

        <!-- Right Controls: Theme Toggle + Hamburger -->
        <div class="d-flex align-items-center gap-2 ms-auto ms-lg-0 order-lg-last">
            <button class="theme-toggle-switch" id="themeToggle"
                    type="button" aria-label="Toggle dark mode" title="Toggle dark / light mode">
                <span class="theme-toggle-thumb">
                    <i class="bi bi-sun-fill theme-toggle-sun"></i>
                    <i class="bi bi-moon-fill theme-toggle-moon"></i>
                </span>
            </button>
            <button class="navbar-toggler border-0 shadow-none" type="button"
                    data-bs-toggle="collapse" data-bs-target="#mainNav"
                    aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>

        <!-- Nav Links -->
        <div class="collapse navbar-collapse" id="mainNav">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0 gap-lg-1">
                <!-- <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                </li> -->

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        About Us
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark border-0 shadow-lg">
                        <li><a class="dropdown-item" href="about.php" target="_blank">About</a></li>
                        <li><a class="dropdown-item" href="career.php" target="_blank">Career</a></li>
                        <li><a class="dropdown-item" href="contact.php" target="_blank">Contact</a></li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="https://insurance.incorp-umbrellagroup.com" target="_blank">Insurance</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="https://fintax.incorp-umbrellagroup.com/index.php" target="_blank">FinTax</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="https://investment.incorp-umbrellagroup.com/" target="_blank">Investment</a>
                </li>
            </ul>
        </div>

    </div>
</nav>
