<!-- loged in user menu -->

<li class="nav-item dropdown">
    <a class="nav-link user-icon" href="" data-bs-toggle="dropdown" aria-expanded="false">
        <svg xmlns="http://www.w3.org/2000/svg" width="1.5rem" height="1.5rem" fill="#a61300" class="bi bi-person-circle" viewBox="0 0 16 16">
            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
        </svg>
    </a>
    <ul class="dropdown-menu user-menu" wfd-invisible="true">
        <li class="nav-item">
            <?php    
                session_start();
                $greating = $_SESSION['message'];
                echo $greating;
            ?>
        </li>
        <li class="nav-item"><a class="nav-link" href='#'>Профиль</a></li>
        <li class="nav-item"><a class="nav-link custom-btn-red" href='?url=logout'>Выйти</a></li>
    </ul>
</li>