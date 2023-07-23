<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Admin - Carrent</title>
        <link href="<?= base_url('') ?>/admin/css/styles.css" rel="stylesheet" />

        <!-- CSS -->
<link rel="stylesheet" href="path/to/lightbox.css">

<!-- JavaScript -->
<script src="path/to/lightbox.js"></script>

        <!-- CSS -->
<style>
    /* Overlay */
    .overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.7);
        display: none;
        justify-content: center;
        align-items: center;
        z-index: 9999;
    }

    /* Zoomed-in Image */
    .overlay img {
        max-width: 90%;
        max-height: 90%;
        object-fit: contain;
        cursor: pointer;
    }

    /* Zoomable Image */
    .zoomable {
        cursor: pointer;
    }
</style>

        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="<?= base_url('admin/index') ?>">Hi, <?php echo session('nama'); ?> !<a><button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button
            ><!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
            </form>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            
                            <?php
                            // Set the current page based on the actual page you are on
                            $currentPage = 'dashboard'; // Set the value according to the current page

                            ?>

                            <a class="nav-link <?php if ($currentPage === 'index') echo 'active'; ?>" href="<?= base_url('admin/index') ?>">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>

                            <a class="nav-link <?php if ($currentPage === 'services') echo 'active'; ?>" href="<?= base_url('admin/services') ?>">
                                <div class="sb-nav-link-icon"><i class="fas fa-list-alt"></i></div>
                                Services List
                            </a>

                            <a class="nav-link <?php if ($currentPage === 'orders') echo 'active'; ?>" href="<?= base_url('admin/orders') ?>">
                                <div class="sb-nav-link-icon"><i class="fas fa-shopping-cart"></i></div>
                                Orders
                            </a>

                            <a class="nav-link <?php if ($currentPage === 'logout') echo 'active'; ?>" href="<?= base_url('admin/logout') ?>">
                                <div class="sb-nav-link-icon"><i class="fas fa-sign-out-alt"></i></div>
                                Logout
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        <?php echo session('username'); ?>
                    </div>
                </nav>
            </div>