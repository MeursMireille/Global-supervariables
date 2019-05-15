<?php


  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $movies = $_POST['movie1, movie2, movie3, movie4, movie5'];
    if (empty($movies)) {
        echo "Top 5 movies is empty";
    } else {
        echo $movies;
    }
  }
  print_r($_POST[$movies]);


 if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $tvshows = $_POST['tvshow1, tvshow2, tvshow3, tvshow4, tvshow5'];
    if (empty($tvshows)) {
        echo "Top 5 tv shows is empty";
    } else {
        echo $tvshows;
    }
  }
  print_r($_POST[$tvshows]);


 /* if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $tvshows = $_POST['tvshow1', 'tvshow2', 'tvshow3', 'tvshow4', 'tvshow5'];
    if (empty($tvshows)) {
        echo "Top 5 tv shows is empty";
    } else {
        echo $tvshows;
    }
  }*/
  echo "Favourite country " . $_GET . ['favouritecountry'];
  echo "Worst movie ever seen " . $_GET . ['worstmovie'];

  //print_r($_GET[]);

?>