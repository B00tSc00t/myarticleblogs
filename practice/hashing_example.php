<?php

$password = 'rick';

// $hash = password_hash($password, PASSWORD_DEFAULT);

// echo $hash;

$hash = '$2y$10$vWExJUm2p.1xjaEWWCVD6.8k82a5vY0gR9UTILsAvlMb9hJG1QK/y';

var_dump(password_verify($password, $hash));