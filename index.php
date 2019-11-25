<?php

// Inclure que des controller

if (isset($_GET['route'])) {
    $route = $_GET['route'];
} else {
    $route = 'teams';
}

if ($route === 'teams') {
    require('controllers/teams.php');
    showTeams();
}