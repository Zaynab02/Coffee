<?php 
session_start();
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome Icons  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
        integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
        crossorigin="anonymous" />

    <!-- Google Fonts  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

    <title>Forgot Password</title>

    <!-- PHP CONNECTION FILE -->
	<?php include 'connect.php' ?>

    <!-- CSS File -->
    <style>
    * {
    margin: 0;
    padding: 0;
    font-family: 'Poppins', sans-serif;
}

body {
    background: url(./img/home-img.jpeg);
    background-repeat: no-repeat;
    background-size: cover;
    background-attachment: fixed;
    margin: 0 auto;
    overflow: hidden;
    color: black;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 15rem 0;
}

.card {
    backdrop-filter: blur(16px) saturate(180%);
    -webkit-backdrop-filter: blur(16px) saturate(180%);
    background-color: #f8f8ff ;
    border-radius: 12px;
    border: 1px solid rgba(255, 255, 255, 0.125);
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 30px 40px;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}

.lock-icon {
    font-size: 3rem;
}

h2 {
    font-size: 1.5rem;
    margin-top: 10px;
    text-transform: uppercase;
}

p {
    font-size: 12px;
}

.passInput {
    margin-top: 15px;
    width: 80%;
    background: transparent;
    border: none;
    border-bottom: 2px solid #4f3228;
    font-size: 15px;
    color: black;
    outline: none;
}

button {
    margin-top: 15px;
    width: 80%;
    background-color: #4f3228;
    color: #FFF;
    padding: 10px;
    text-transform: uppercase;
    cursor:pointer; 
}

button[type='submit']:hover{
    background-color:#94695c; 
    transform: scale(.95); 
}

/* Media Queries */
@media only screen and (max-width : 600px) { 
    body{font-size:14px;}  
    .card {width:90%} 
}
</style>

</head>

<?php

if(isset($_POST['login']))
{
    $email = $_POST['memail'];

    $email_search = "SELECT * FROM signup WHERE email = '$email'";
    $query = mysqli_query($conn, $email_search);
    $count = mysqli_num_rows($query);
    if($count == 1)
    {
        // Generate a random password
        $newPassword = substr(md5(uniqid(mt_rand(), true)), 0, 8); // Generate an 8-character random password

        // Encrypt the new password with MD5
        $hashedPassword = md5($newPassword);

        // Update the password in the database
        $sql = "UPDATE signup SET password = '$hashedPassword', cpassword = '$hashedPassword' WHERE email = '$email'";

        // Check if the password update was successful
        if(mysqli_query($conn, $sql))
        {
            ?>
            <script>
                alert("Successfull");
            </script>
            <?php
        }
        else
        {
            ?>
            <script>
                alert("Failed");
            </script>
            <?php
        }
        ?>
        <script>
            var variableData = "<?php echo $newPassword; ?>";
            alert(variableData);
        </script>
        <?php
    }
    else
    {
        ?>
        <script>
            alert("Inavlid Email-ID")
        </script>
        <?php
    }
}
?>

<body>
<div class="card">
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <p class="lock-icon"><i class="fas fa-lock"></i></p>
        <h2>Forgot Password?</h2>
        <p>YOU CAN RESET YOUR PASSWORD HERE.</p>
        <input class="passInput" name="memail" type="email" placeholder="Email-ID"  required>
        <button type="login" name="login">Show My Password</button>
    </form>
</div>
</body>

</html>