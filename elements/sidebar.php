
<div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Tools</div>
                            <a class="nav-link" href="dashboard.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <a class="nav-link" href="members.php">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-users"></i></div>
                                Add new Member
                            </a>
                            <a class="nav-link" href="logout.php">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-arrow-right-from-bracket"></i></div>
                                Log Off
                            </a>
                    </div>
                    <div class="sb-sidenav-footer sidebar-bottom">
                        <div class="small">Logged in as:</div>
                        <?php echo $_SESSION["username"]; ?>
                        <div class="small">Active Plan :</div>
                        <?php echo $_SESSION['plan']; if($_SESSION['plan'] === 'Free'): ?>
                            <a href="./">Upgrade</a>
                        <?php endif ; ?>
                    </div>
                </nav>
            </div>