<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>PHP for WordPress</title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans|Varela+Round" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
</head>
<body>

  <header id="masthead">
    <h1><a href="#">PHP for WordPress</a></h1>
  </header>

  <div id="content">    

    <?php    

      function logic() {
        $post_titles = [
          "Title number 1",
          "Title number 2",
          "Title number 3",
          "Title number 4",
          "Another title"
        ];  
        
        foreach($post_titles as $post_title) {
         display_title($post_title);
        }
      }      
      
      function display_title($title) {
        echo "<h3>$title</h3>";
      }

      logic();

    ?>    

  </div>

</body>
</html>
