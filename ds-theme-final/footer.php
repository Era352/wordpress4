<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<footer class="site-footer">
        <div class="contianer">
            <div class="copyright">
                <p>Copyright DS Team- All Rights Deserved</p>
            </div>
            <?php wp_nav_menu(array('theme_loaction'=>'wp_devs_footer_menu', 'depth'=>1))?>
        </div>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maiores sed quae totam, expedita provident deserunt iure facilis officiis quos odit voluptatum, dolores corrupti voluptates blanditiis tempora rem? Temporibus, eaque modi.</p>
    </footer>
    <?php wp_footer();?>
</body>
</html>

    