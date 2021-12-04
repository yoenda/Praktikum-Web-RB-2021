<?php
    session_start();
    if (!isset($_SESSION['userID'])){
        header("location: index.php");
        die();
    }
?>
<?php require_once('app/db/Koneksi.php');
$db = new Koneksi();
$conn = $db->connect();

$posts = $conn->query("SELECT * FROM post")->fetch_all(MYSQLI_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
        .base {
            display: flex;

        }

        main {
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            align-content: center;
            justify-content: center;
            width: 75%;

        }

        aside {
            width: 25%;
        }

        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            transition: 0.3s;
            margin: 10px;
            min-height: 235px;
        }

        .card:hover {
            box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
        }

        .container {
            padding: 2px 16px;
        }

        .card-head,
        .card-body {
            overflow: hidden;
            line-height: 2rem;
            max-height: 8rem;
            -webkit-box-orient: vertical;
            display: block;
            display: -webkit-box;
            overflow: hidden !important;
            text-overflow: ellipsis;
            -webkit-line-clamp: 4;
        }

        .card-head {
            margin: 0;
            /* height: 75px; */
        }

        aside {
            min-height: 100%;
            border: solid 1px #a18f8f29;
            padding: 10px;
        }
    </style>
    <!-- modal iklan styling -->
    <link rel="stylesheet" href="./assets/iklan/iklan.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Minggu8</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php">Logout</a>
        </li>        
      </ul>
    </div>
  </div>
</nav>
<body>
    <section class="base">
        <main>
            <?php foreach ($posts as $item) { ?>

                <div style="width: 50%;">
                    <div class="card">
                        <div class="container">
                            <h3 class="card-head"><?= $item['judul']; ?></h3>
                            <p class="card-body"><?= $item['isi']; ?></p>
                        </div>
                    </div>
                </div>

            <?php } ?>
        </main>

        <aside>
            <h2>History</h2>
            <div id="history_buck"></div>
        </aside>
    </section>
    <?php
        if(!isset($_COOKIE['tolak']) || $_COOKIE['tolak'] !== 'yes'){
            echo '<script src="./assets/iklan/iklan.js"></script>';
        }
    ?>
    <script src="home.js"></script>
</body>

</html>