<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>PHP Dischi</title>
</head>
<body>
  <header>
    <div>
      <img class="logo" src="img/logo.png" alt="Logo">
    </div>
  </header>

  <main>
    <div class="container">
      
        <?php 
        
        require "./data.php";

        foreach ($records as $record) {
        
        ?>
        <div class="card">

        <img class="cover" src=" <?= $record['poster'] ?>">
           
        </img>

        <h2>
            <?= $record['author'] ?>
        </h2>

        <p> <?= $record['genre'] ?></p>

        <p> <?= $record['title'] ?></p>

        <p> <?= $record['year'] ?></p>
        </div>

        <?php 
        }
        ?>
      
    </div>
  </main>

</body>
</html>