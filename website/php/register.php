<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    require_once '../private/dbconnect.php';
    session_start();

    // Check if all required fields are filled in
    $requiredFields = ['username', 'email', 'password'];
    foreach ($requiredFields as $field) {
        if (empty($_POST[$field])) {
            $_SESSION['error'] = 'Please fill in all required fields.';
            header('Location: ../index.php?page=registration');
            exit;
        }
    }

    // Check for illegal characters in user input
    $illegalCharacters = ['<', '>', '{', '}', '(', ')', '[', ']', '*', '$', '^', '`', '~', '|', '\\', '\'', '"', ':', ';', ',', '/'];
    $inputFields = ['username', 'email'];
    foreach ($inputFields as $field) {
        if (strpbrk($_POST[$field], implode('', $illegalCharacters))) {
            $_SESSION['error'] = 'Illegal character used.';
            header('Location: ../index.php?page=registration');
            exit;
        }
    }

    // try {
        // Check if the email is already in use
        $email = $_POST['email'];
        $sqlEmailCount = 'SELECT COUNT(*) AS count FROM users WHERE email = :email';
        $stmtEmailCount = $conn->prepare($sqlEmailCount);
        $stmtEmailCount->bindValue(':email', $email);
        $stmtEmailCount->execute();
        $emailCount = $stmtEmailCount->fetchColumn();
    
        if ($emailCount > 0) {
            $_SESSION['error'] = 'Email is already in use. Please use a different email address.';
            header('Location: ../index.php?page=registration');
            exit;
        }
    
        $date_time = date('Y-m-d H:i:s', $timestamp);

        $sql = "INSERT INTO `users` (`username`, `email`, `password`, `role`, `created_at`, `created_by`)
        VALUES (:username, :email, :password, '0', :created_at, '0')";
        $sth = $conn->prepare($sql);
        $sth->bindValue(':username', $_POST['username']);
        $sth->bindValue(':email', $_POST['email']);
        $sth->bindValue(':password', password_hash($_POST['password'], PASSWORD_DEFAULT));
        $sth->bindValue(':created_at', $date_time);
        $sth->execute();

        $userId = $conn->lastInsertId();

        if ($userId) {
            $_SESSION['info'] = 'Account created.';
         
            $_SESSION['userid'] = $user->userid;

            $_SESSION['userrole'] = 'user';
            header('Location: ../index.php?page=profile');
            exit();
        } else {
            $_SESSION['error'] = 'Failed to retrieve the last inserted ID.';
            header('Location: ../index.php?page=registration');
            exit;
        }
    // } catch (Exception $e) {
    //     $_SESSION['error'] = 'An error occurred. Please try again or contact an admin if this issue persists.';
    //     header('Location: ../index.php?page=registration');
    //     exit;
    // }    
?>