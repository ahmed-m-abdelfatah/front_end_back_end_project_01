<?php

$sql = 'SELECT * FROM users';
$result = mysqli_query($connection, $sql);
$users = mysqli_fetch_all($result, MYSQLI_ASSOC); // get table from database and convert it to array

// print_r() executes the scripts in database
// echo '<pre>';
// htmlspecialchars(print_r($users));
// echo '</pre>';

// foreach ($users as $key => $user) {
//     // script out database as a htmlspecialchars (string)
//     echo htmlspecialchars("$key => {$user['firstName']}") . "<br/>";
// }

// get winner
$sql = 'SELECT * FROM users ORDER BY RAND() LIMIT 1';
$result = mysqli_query($connection, $sql);
$winners = mysqli_fetch_all($result, MYSQLI_ASSOC);
