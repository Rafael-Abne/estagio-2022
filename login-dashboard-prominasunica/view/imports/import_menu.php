<!-- CRIAÇÃO DO MENU -->
<nav class="sidebar fadeInMenu">
    <ul class="sidebar-menu">
        <li><span class="nav-section-title"></span></li>
        <li <?php echo ($pag == 'dashboard') ? 'class="active"' : ''; ?>><a href="dashboard.php"><span
                    class="fa fa-dashboard"></span>Dashboard</a></li>

                    <li><a href="logout.php"><span class="fa fa-sign-out"></span>Sair</a></li>
    </ul>
</nav>