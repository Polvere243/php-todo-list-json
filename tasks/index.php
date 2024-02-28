<?php

$path = __DIR__ . '/../database/tasks.json';

$tasks = file_get_contents($path);
/* $tasks = [
    {
      "id": 1,
      "text": "HTML",
      "done": false
    },
    {
      "id": 2,
      "text": "CSS",
      "done": false
    },
    {
      "id": 3,
      "text": "Responsive design",
      "done": false
    },
    {
      "id": 4,
      "text": "Javascript",
      "done": false
    }
  ] */

header('Content-Type: application/json');

echo json_encode($tasks);