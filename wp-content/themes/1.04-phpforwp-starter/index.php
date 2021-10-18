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
    
      // Create an array of post titles
      
      $post_titles = [
        "First Title",
        "Second Title",
        "Third Title"
      ];

      // Loop through array of posts

      foreach($post_titles as $post_title) {
        // //-Here we can put the echo directly
        // echo"<h3>$title</h3>";
        //-But we are going to use a function instead
        display_title( $post_title);
      }

        // Call the display_post function and pass it the post title


        /**
         * Display the title for a post
         * 
         * @param string $title the title to be displayed
         */
        function display_title( $title ) {
          //Echo an <h3> tag with the $title inside
          //-Here we are going to add what we want to do inside the function
          echo"<h3>$title</h3>";
        }

      // // -Here there is another example of how to use functions
      // // -to get the same result
      // // -First we create a function to iterate through the array
      //   function logic() {
      //   $post_titles = [
      //     "Title number 1",
      //     "Title number 2",
      //     "Title number 3",
      //     "Title number 4",
      //     "Another title"
      //   ];  
        
      //   foreach($post_titles as $post_title) {
      //    display_title($post_title);
      //   }
      // }      
      
      // //-Then we create the disply function
      // function display_title($title) {
      //   echo "<h3>$title</h3>";
      // }

      // //-Finally we call the function
      // logic();     

    ?>    

  </div>

</body>
</html>
