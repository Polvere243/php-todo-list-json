<?php

$tasks = file_get_contents($tasks.json, true);

header('Content_Type: application/json');

echo json_encode($tasks);