<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Global supervariables</title>
</head>
<body class="bg-success w-100 h-100">
 <div class="jumbotron bg-success text-white">
  <h1 class="display-3">Global supervariables</h1>
  <p class="lead">Welcome to the section about Global Supervariables. If this sounds like the avengers of the variables, then you're right!</p>
  <hr class="my-2">
  <p>Global supervariables are variables that PHP instantiates itself and makes available to you, the user at all times. Here are two of them: $_GET, $_POST</p>
  <p class="lead"></p>

  <form method="post" class="m-3" action="result.php">
    Top 5 movies: <input type="text" name="movie1">
                  <input type="text" name="movie2">
                  <input type="text" name="movie3">
                  <input type="text" name="movie4">
                  <input type="text" name="movie5">
      <input type="submit" class="bg-white text-success m-3">
  </form>

  <form method="post" class="m-3" action="result.php">
    Top 5 tv shows: <input type="text" name="tvshow1">
                    <input type="text" name="tvshow2">
                    <input type="text" name="tvshow3">
                    <input type="text" name="tvshow4">
                    <input type="text" name="tvshow5">
      <input type="submit" class="bg-white text-success m-3">
  </form>

  <form action="result.php" class="m-3" method="get">
    Favourite country: <input type="text" class="m-3" name="favouritecountry">
    <input type="submit"class="bg-white text-success m-3"><br>
    Worst movie ever seen: <input type="text" class="m-3" name="worstmovie">
    <input type="submit"class="bg-white text-success m-3"><br>
  </form>
</div>
</body>
</html>