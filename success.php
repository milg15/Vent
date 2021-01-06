<?php 
if($_SERVER['REQUEST_METHOD'] ==='POST'){
    $to = "milg.style@gmail.com"; // this is your Email address
    $from = "vent@mariaisabel.tech"; // this is the sender's Email address
    $subject = $_POST['name'];
    $message = $_POST['problem'];

    $headers = "From:" . $from;
    mail($to,$subject,$message,$headers);
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    <link rel="manifest" href="site.webmanifest">
    <link rel="stylesheet" href="https://unpkg.com/wingcss"/>
    <link rel="stylesheet" href="styles.css">
    <script>
    </script>
    <title>Gracias por compartir!</title>
</head>
<body>
    <script src="events.js"></script>

    <main>
    <div id="myModal" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
        <span class="close">&times;</span>
        <p>Some text in the Modal..</p>
        </div>

        </div>
        <div>
        <h1>Gracias
            <?php 
                if ($_SERVER['REQUEST_METHOD'] ==='POST'){
                    echo htmlspecialchars($_POST['name']); 
                }
            ?>.
        </h1>
        <h2>Quieres conocer que estamos haciendo?</h2>
        <p>Espero que te sientas mejor luego de compartir. Coloca tu correo aqui para que puedas que te compartamos lo que viene.</p>
        <label>
            <input type="text" placeholder="example@mail.com">
        </label>
        <button id="knowMore">
            Tell Me More
        </button>
        <a href="/" class="vent-again">
            I want to Vent Again
        </a>
        </div>
    </main>
    <footer>
        <p>Made with ❤️ by <a href="https://mariaisabel.tech">Maria I.</a></p>
        <p>Simple 🍂 <a href="privacy.html">Privacy Policy</a></p>
    </footer>
</body>
</html>