<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
    <link href="css/fonts/font.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="css/responsiveslides.css">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
  <script src="mod_includes/js/responsiveslides.min.js"></script>
  <script>
    // You can also use "$(window).load(function() {"
    $(function () {
      // Slideshow 2
      $("#slider2").responsiveSlides({
        auto: true,
        pager: true,
        speed: 300,
        maxwidth:1300,
      });

    });
  </script>
</head>
<body>
  <div id="wrapper">
    <ul class="rslides" id="slider2">
      <li><img src="imagens/banner.png"></li>
      <li><img src="imagens/banner2.png"></li>
    </ul>
  </div>
</body>
</html>
