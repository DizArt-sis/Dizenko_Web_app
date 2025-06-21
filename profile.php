<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <nav class="navbar navbar-dark bg-dark p-3">
        <div class="container-fluid">
          <a href="#" class="navbar-brand d-flex align-items-center">
                <img src="IgJR6fyici024XXZ60Ow.webp" alt="логотип сайта" class="me-2">
                <span class="text-light">History</span>
          </a>
          <?php if (isset($_COOKIE['User'])): ?>
                <form action="/logout.php" method="POST" class="d-flex">
                    <button class="btn btn-outline-danger" type="submit">Logout</button>
                </form>
            <?php endif; ?>
        </div>
    </nav>
    <div class="container mt-5">
        <div class="mt-5">
          <h2 class="text-center mb-4">Welcome, <?php echo $_COOKIE['User']; ?></h2>
          <form action="profile.php" id="postForm" class="d-flex flex-column gap-3" method="POST" enctype="multipart/form-data">
          </form>
        </div>
    </div>
    <script src="js\script.js"></script>
</body>
</html>

<?php

    require_once('db.php');

    if (!isset($_COOKIE['User'])) {
        header('Location: /login.php');
        exit();
    }

    $link=mysqli_connect('db','root','Test123','first');
    $login = mysqli_real_escape_string($link, $_COOKIE['User']);
    $sql = "SELECT * FROM users WHERE username='$login'";
    $result = mysqli_query($link, $sql);

    if (!$result || mysqli_num_rows($result) == 0) {
    setcookie("User", "", time() - 3600);
    header("Location: /login.php");
    exit();
    }
    
    $user = mysqli_fetch_assoc($result);
    mysqli_close($link);

?>
