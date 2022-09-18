<!-- loged in user menu -->

<li class="nav-item dropdown">
    <a class="nav-link auth" href="" data-bs-toggle="dropdown" aria-expanded="false">авка</a>
    <ul class="dropdown-menu" wfd-invisible="true">
        <li>
            <?php    
                session_start();
                $greating = $_SESSION['message'];
                echo $greating;
            ?>
        </li>
        <li><a href='#'>Профиль</a></li>
        <li><a href='?url=logout'>Выйти</a></li>
    </ul>
</li>