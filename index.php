<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
</head>
<body>
    <?php
    // Проверка авторизации
    if (!isset($_COOKIE['User'])) {
        header('Location: /login.php');
        exit();
    }
    
    $username = htmlspecialchars($_COOKIE['User']);
    ?>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark p-3">
        <div class="container">
            <a href="#" class="navbar-brand d-flex align-items-center">
                <img src="IgJR6fyici024XXZ60Ow.webp" alt="Логотип" class="me-2" style="height: 30px;">
                <span>History</span>
            </a>
            <div class="d-flex align-items-center">
                <span class="text-light me-3"><?php echo $username; ?></span>
                <form action="/logout.php" method="POST">
                    <button class="btn btn-outline-light" type="submit">
                        <i class="bi bi-box-arrow-right"></i> Выйти
                    </button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="profile-container text-center">
                    <h1 class="welcome-title">Добро пожаловать, <?php echo $username; ?>!</h1>
                    <p class="lead mb-4">Вы успешно авторизовались в нашей системе</p>
                    
                    <div class="mb-4">
                        <img src="hack1.webp" alt="Основное изображение" class="hacker-img mb-3">
                        <button id="toggleButton" class="btn btn-outline-custom mt-2">
                            Показать дополнительное изображение
                        </button>
                    </div>
                    
                    <div id="extraImage" class="mt-3 animate__animated animate__fadeIn" style="display: none;">
                        <img src="hack2.webp" alt="Дополнительное изображение" class="hacker-img">
                    </div>
                </div>
            </div>
        </div>
    </div>

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
</body>
</html>
