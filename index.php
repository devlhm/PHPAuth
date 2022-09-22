<?php
include "config.php";

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];


    if ($username != "" && $password != "") {
        var_dump($username);
        var_dump($password);
        $sql_query = "SELECT COUNT(*) AS userCount FROM users WHERE username='". $username . "'" . "AND password=" ."'" . $password . "'";
        var_dump($sql_query);
        $result = mysqli_query($con, $sql_query);
        $row = mysqli_fetch_array($result);

        $count = $row['userCount'];

        if ($count > 0) {
            $_SESSION['username'] = $username;
            header('Location: home.php');
        } else {
            echo '<h1>Falha na autenticação</h1>';
        }
    } else {
        echo '<h1>Certifique-se de que todos os campos estão preenchidos</h1>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <div>
        <form method="post">
            <div>
                <h1>Login</h1>
                <input type="text" name="username"/>
                <input type="password" name="password"/>
                <div>
                    <input type="submit" value="Login" name="submit"/>
                </div>
            </div>
        </form>
    </div>
</body>

</html>