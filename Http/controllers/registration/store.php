<?php

use Core\Validator;
use Core\Database;
use Core\App;
use Core\Authenticator;

$email = $_POST['email'];
$password = $_POST['password']; 

$errors = [];

if(!Validator::email($email)){
  $errors['email'] = 'Please provide a valid email address.';  
}

if(!Validator::string($password, 7, 255)){
  $errors['password'] = 'Please provide a password of at least seven characters.';  
}

if( !empty($errors)){
  return view('registration/create.view.php', [
    'errors' => $errors
  ]);
}


$db = App::resolve(Database::class);

$result = $db->query('select * from users where email = :email', [
  'email' => $email
])->find();


if($result){
  return view('registration/create.view.php', [
    'errors' => [
        'email' => 'An account with this email already exists.'
    ]
  ]);
} else {
  $db->query('INSERT INTO users (email, password) VALUES (:email, :password)', [
    'email' => $email,
    'password' => password_hash($password, PASSWORD_BCRYPT)
  ]);

  $userId = $db->connection->lastInsertId();

  $auth = new Authenticator();

  $auth->login([
    'id' => $userId,
    'email' => $email
  ]);

  header('location: /');
  exit(); 
}
