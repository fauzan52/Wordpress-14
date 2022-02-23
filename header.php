<?php
    global $fauzanredux;
?>
<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="./assets//font-awesome/all.min.css">
    <marquee>ALAMAT TOKO : TAMAN BUKIT CIBOGO, CIMAHI</marquee>
	<meta charset="utf-8">
    <link rel="icon" type="image/x-icon" href="<?php echo $fauzanredux['favicon']; ?>">
	<title><?php bloginfo('name'); ?></title>
	<?php wp_head(); ?>
</head>
<body>
<header>
    <br>
    <div class="container-fluid">
        <div class="row">
            <div>
                <?php if($fauzanredux['logo-switch-button'] == 1): ?>
                <a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo $fauzanredux['logo']['url']; ?>" width="72" height="72"></a>
                <?php endif; ?>

                <?php if($fauzanredux['header-logo-switch-button'] == 1): ?>
                <a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo $fauzanredux['header-logo']['url']; ?>" width="288" height="72"></a>
                <?php endif; ?>

                <?php if($fauzanredux['iklan-logo-switch-button'] == 1): ?>
                <a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo $fauzanredux['iklan-logo']['url']; ?>" width="360" height="72"></a>
                <?php endif; ?>
<!--                <div class="clear">--><?php //get_search_form(); ?><!--</div>-->
                <br>
                <br>
            </div>
        </div>
    </div>
		<nav>
		<?php
			$args = array ('theme_location' => 'main_menu');
			wp_nav_menu($args);
		?>

<!--            <ul class="navbar-nav ms-auto">-->
<!--                <li class="nav-item">-->
<!--                   BUAT BIKIN MENU LOGIN-->
<!--                </li>-->
<!--            </ul>-->
		</nav>
</header>

</body>
</html>