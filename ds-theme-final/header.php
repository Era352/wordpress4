<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width initial-scale=1.0">>
    <?php wp_head();?>
    </head>
    <body<?php body_class?>>
    <header>

        <section class="top-bar">
            <div class="logo">
                Logo
            </div>
            <div class="searchbox">
                Search
            </div>
        </section>
        <section class="menu-area">
            <nav class="main-menu">
                Menu

                <?php wp_nav_menu(
                    array('theme_location'=>'wp_devs_main_menu','depth'=>2)
                )?>
            </nav>
        </section>
    </header>

    
</body>
</html>