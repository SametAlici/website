<?php
session_start();

// Başlangıçta hata mesajı boş olarak tanımlanır
$error = '';

// Kullanıcı adı ve şifre kontrolü
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Formdan gelen verileri al
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // Kullanıcı adı ve şifre doğrulaması yap
    if ($username == 'g221210004@sakarya.edu.tr' && $password == 'g221210004') {
        $_SESSION['username'] = $username;
        // Başarılı giriş yapıldığında yönlendirme yapılır
        header("Location: index.html");
        exit;
    } else {
        // Hatalı giriş durumunda hata mesajı oluşturulur
        $error = "Kullanıcı adı veya şifre hatalı.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giriş Yap</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: #f5f5f5;
            font-family: 'Roboto', sans-serif;
        }
        .wrapper {
            width: 100%;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        #formContent {
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
            padding: 50px;
            width: 300px;
        }
        .fadeIn {
            animation: fadeIn 1s;
        }
        @keyframes fadeIn {
            0% {opacity: 0;}
            100% {opacity: 1;}
        }
        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 15px;
            margin: 10px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
            border-radius: 5px;
        }
        input[type="submit"] {
            background-color: #007bff;
            color: white;
            padding: 15px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
        .underlineHover {
            color: #007bff;
        }
    </style>
</head>
<body>
    <div class="wrapper fadeInDown">
        <div id="formContent">
            <!-- Icon -->
            <div class="fadeIn first">
                <img src="./resimler/profile-icon-login-head-icon-vector.jpg" id="icon" alt="User Icon" />
            </div>

            <!-- Login Form -->
            <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <input type="text" id="username" class="fadeIn second" name="username" placeholder="Username" required>
                <input type="password" id="password" class="fadeIn third" name="password" placeholder="Password" required>
                <input type="submit" class="fadeIn fourth" value="Giriş Yap">
            </form>

            <!-- Hata mesajı -->
            <?php if($error !== '') { ?>
                <div class="alert alert-danger mt-3" role="alert">
                    <?php echo $error; ?>
                </div>
            <?php } ?>

                       
        </div>
    </div>
</body>
</html>
