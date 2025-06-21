<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<<<<<<< HEAD
    <title>Index</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
=======
    <title>Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        :root {
            --primary-color: #2c3e50;
            --secondary-color: #3498db;
        }
        
        body {
            background-color: #f8f9fa;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        .navbar {
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        
        .profile-container {
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            padding: 2rem;
            margin-top: 2rem;
        }
        
        .hacker-img {
            max-width: 100%;
            border-radius: 8px;
            transition: transform 0.3s ease;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        
        .hacker-img:hover {
            transform: scale(1.02);
        }
        
        .welcome-title {
            color: var(--primary-color);
            position: relative;
            padding-bottom: 15px;
            margin-bottom: 20px;
        }
        
        .welcome-title:after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 3px;
            background: var(--secondary-color);
        }
        
        .btn-outline-custom {
            color: var(--secondary-color);
            border-color: var(--secondary-color);
        }
        
        .btn-outline-custom:hover {
            background: var(--secondary-color);
            color: white;
        }
    </style>
>>>>>>> 44a6d8f5644cb99c2615f1466ca5ea4daf3d6754
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="'mb-4">Login In!</h1>
                <?php 
                if (!isset($_COOKIE['User'])){
                ?>
                <div class="d-flex justify-content-center gap-3">
                    <a href="/registration.php" class="btn btn-primary">Registration</a>
                    <a href="/login.php" class="btn btn-primary">Login</a>
                </div>
                <?php
                } else{
                    $link = mysqli_connect('127.0.0.1', 'root', 'kali','first');
                    $sql = "SELECT * FROM posts";
                    $res = mysqli_query($link,$sql);
                    if (mysqli_num_rows($res) > 0){
                        while ($post = mysqli_fetch_array($res)){
                            echo "<a href='/posts.php?id=" . $post["id"] . "'>" . $post["title"] . "</a><br>";
                    }
                }else {
                    echo("No posts");
                }
            }
            ?>
            </div>
        </div>
    </div>
<<<<<<< HEAD
=======

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>

        document.getElementById('toggleButton').addEventListener('click', function() {
            const extraImage = document.getElementById('extraImage');
            const isHidden = extraImage.style.display === 'none';
            
            extraImage.style.display = isHidden ? 'block' : 'none';
            this.textContent = isHidden ? 
                'Скрыть изображение' : 'Показать дополнительное изображение';
            

            if (isHidden) {
                extraImage.classList.add('animate__fadeIn');
            }
        });
    </script>
>>>>>>> 44a6d8f5644cb99c2615f1466ca5ea4daf3d6754
</body>
</html>
