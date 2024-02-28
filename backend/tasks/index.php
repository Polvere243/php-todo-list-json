<?php

$path = __DIR__ . '/../../database/tasks.json';

$tasks = file_get_contents($path, true);

header('Content_Type: application/json');

echo $tasks;