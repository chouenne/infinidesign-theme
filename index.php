<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>infini Design - xuan huang</title>
  <?php wp_head(); ?>
</head>

<body>
  <h1>Welcome to:
    <?php bloginfo('name'); ?>
  </h1>
  <h2>Infini Design Studio</h2>
  <p>
    <?php bloginfo('description'); ?>
  </p>

  <?php wp_footer(); ?>
  <footer>
    <h6>copyright
      <?php echo date('Y'); ?> by
      <?php bloginfo('name'); ?>
    </h6>
  </footer>

</body>

</html>