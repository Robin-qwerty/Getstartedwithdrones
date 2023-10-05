<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    require_once '../private/dbconnect.php';
    session_start();

    // Check if all required fields are filled in
    $requiredFields = ['email', 'password'];
    foreach ($requiredFields as $field) {
        if (empty($_POST[$field])) {
            $_SESSION['error'] = 'Please fill in all required fields.';
            header('Location: ../index.php?page=login');
            exit;
        }
    }

    // Check for illegal characters in user input
    $illegalCharacters = ['<', '>', '{', '}', '(', ')', '[', ']', '*', '$', '^', '`', '~', '|', '\\', '\'', '"', ':', ';', ',', '/'];
    $inputFields = ['email'];
    foreach ($inputFields as $field) {
        if (strpbrk($_POST[$field], implode('', $illegalCharacters))) {
            $_SESSION['error'] = 'Illegal character used.';
            header('Location: ../index.php?page=login');
            exit;
        }
    }

    // try {
        // Get the user from the database
        $sql = 'SELECT role, userid, password, username FROM users WHERE email=:email AND archive=0';
        $sth = $conn->prepare($sql);
        $sth->bindValue(':email', $_POST[email]);
        $sth->execute();
        $user = $sth->fetch(PDO::FETCH_OBJ);
    
        if (!$user || !password_verify($password, $user->password)) {
            $_SESSION['error'] = 'password or email incorect.';
            header('Location: ../index.php?page=login');
            exit();
        }

        $_SESSION['userid'] = $user->userid;

        // Set the session variables based on the user role
        if ($user->role == 2) {
            $_SESSION['userrole'] = 'superuser';
            header('Location: ../index.php?page=admindashboard');
            exit();
        } elseif ($user->role == 1) {
            $_SESSION['userrole'] = 'admin';
            header('Location: ../index.php?page=admindashboard');
            exit();
        } else {
            $_SESSION['userrole'] = 'user';
            header('Location: ../index.php?page=profile');
            exit();
        }

        exit;
    // } catch (Exception $e) {
    //     $_SESSION['error'] = 'An error occurred. Please try again or contact an admin if this issue persists.';
    //     header('Location: ../index.php?page=login');
    //     exit;
    // }    
?>