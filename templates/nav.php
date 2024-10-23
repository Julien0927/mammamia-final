<body>
<header class="d-flex justify-content-between align-items-center">
    <div class="d-flex  justify-content-start align-items-center ms-3">
        <a href="index.php" class="logo"><img src="/assets/img/LOGO M-64.png" alt="logo Mammamia"></a>
    </div>

    <nav class="justify-content-center navbar navbar-expand-lg centerText mx-auto ">
        <div class="container-fluid ">
            <div class="navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link <?= ($current_page == 'menu.php') ? 'active' : '' ?>" href="menu.php">Le Mamma</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  <?= ($current_page == 'infos.php') ? 'active' : '' ?>" href="infos.php" >Infos pratiques/Évènements</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

</body>
</html>