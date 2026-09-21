<?php

use Core\Database;
use Core\App;
use Core\Validator;

$db = App::resolve(Database::class);

$validator = new Validator();

$currentUserId = 1;

$note = $db -> query('SELECT * FROM notes WHERE id = :id', [
  'id' => $_POST['id']
])-> findOrFail();

authorize($note['user_id'] === $currentUserId);


$errors = [];

if (! $validator->string($_POST['body'], 1, 1000)) {
  $errors['body'] = "A body of no more than 1000 characters is required";
}


if(count($errors)) {
  return view ("notes/edit.view.php", [
    'heading' => 'Edit Note',
    'errors' => $errors,
    'note' => $note
  ]);
}

$db->query('UPDATE notes SET body = :body WHERE id = :id', [
  'body' => $_POST['body'],
  'id' => $_POST['id']
]);


header('location: /notes');
die();