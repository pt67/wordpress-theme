<!DOCTYPE html>
<html>
<head>
<title>
<?php bloginfo(); ?>
</title>
<?php wp_head(); ?>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light px-5">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><?php bloginfo(); ?></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <?php
wp_nav_menu(
array(
menu_class=>'navbar-nav me-auto mb-2 mb-lg-0',
menu_id=>'',
container=>'',
container_class=>''
)

);
?>
      <?php get_search_form(); ?>
    </div>
  </div>
</nav>


