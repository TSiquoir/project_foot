<?php

require('models/teams.php');

function showTeams() {
    $teams = getTeams();
    require('views/teams.php');
}