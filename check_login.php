<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checking Login</title>
</head>
<body>
    <div class="Isi">
        <?php
            // include 'database.php';

            $success = "https://exzteknologi.ikmallmal.repl.co/";
            $failed = "form_login.php";
            // echo($email);

            // $conn = OpenCon();

            $user_admin = ["Lanz","Malz","Triz","Ramz","Fifiz"];
            $email_lenght = count($user_admin);
            $pass_admin = ["11111", "22222", "33333", "44444", "55555" ];
            $email=$_POST['User'];
            $password=$_POST['Password']; 

            // CHecing Pass and Email;
            for($i = 0; $i <= $email_lenght - 1; $i++){
                if ($email == $user_admin[$i]){
                    if ($password == $pass_admin[$i]){
                        echo "<a href='$success'>Success Login</a>";
                        header("Location: https://exzteknologi.ikmallmal.repl.co/");
                        break;
                    }else{
                        echo "<a href='$failed'>Wrong Password</a>";
                        header("Location: form_login.php");
                        break;
                    }
                }else{
                    if ($i == $email_lenght - 1){
                        echo "<a href='$failed'>Failed Login, Try Again</br></br></a>";
                        foreach($user_admin as $email){
                            echo "$email </br>";
                        };
                    };
                };
            };
        ?>
    </div>
</body>
</html>