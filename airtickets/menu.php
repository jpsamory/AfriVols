<?php $_page = basename($_SERVER['PHP_SELF']); ?>

<header class="site-header">
    <div class="header-inner">

        <div class="logo">
            <span class="logo-icon">✈</span>
            <span class="logo-text">AfriVols</span>
            <span class="logo-tag">Billets pas chers en Afrique</span>
        </div>

        <nav class="main-nav">
            <ul>
                <li>
                    <a href="index.php" class="nav-link <?php if ($_page == 'index.php') echo 'active'; ?>">
                        <span class="nav-icon">🏠</span> Accueil
                    </a>
                </li>
                <li>
                    <a href="page1.php" class="nav-link <?php if ($_page == 'page1.php') echo 'active'; ?>">
                        <span class="nav-icon">🔍</span> Rechercher
                    </a>
                </li>
                <li>
                    <a href="page2.php" class="nav-link <?php if ($_page == 'page2.php') echo 'active'; ?>">
                        <span class="nav-icon">📋</span> Mes Réservations
                    </a>
                </li>
            </ul>
        </nav>

        <div class="header-cta">
            <a href="page1.php" class="btn-header">Réserver maintenant</a>
        </div>

    </div>
</header>
