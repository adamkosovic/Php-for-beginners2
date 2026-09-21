<?php

use Core\Session;

view('session/create.view.php', [
    'errors' => SESSION::get('errors')
]);