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
      <img src="" alt="">
    </div>
  </header>

  <main>
    <div class="container">
      <div class="card">
        <?php 
        
        include "./data.php";

        foreach ($records as $record) {
        
        ?>

        <h3>
            <?= $record['author'] ?>
        </h3>


        <?php 
        }
        ?>
      </div>
    </div>
  </main>

</body>
</html>