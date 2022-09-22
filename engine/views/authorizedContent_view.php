<?php
        include_once '../config/role_rules.php';
?>

<div class="overlay fixed">
    <div class="container">
        <div class="greating text-left">
            <div class="custom-btn">
                <a href="?url=secretPage">
                    <button class="the_btn" <?=$btnStatus?>>
                        Ради этой <?=$btnAddText?> кнопки ТЫ авторизовался!
                    </button>
                </a>
                <?php
                    echo '<script language="javascript">';
                    echo <<<END
                        const theBtn = document.querySelector('.the_btn');
                        theBtn.addEventListener('click', function callAlert() {
                            alert('alert message send by PHP using JS');
                        });
                    END;
                    echo '</script>';
                ?>
            </div>
        </div>
    </div>
</div>