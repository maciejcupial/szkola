<?php
// Top of every page. $pageTitle is set in index.php before the include.
?>
<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= htmlspecialchars($pageTitle) ?></title>
  <style>
    body {
      font-family: Arial, Helvetica, sans-serif;
      max-width: 640px;
      margin: 40px auto;
      padding: 0 16px;
      line-height: 1.5;
    }
    header,
    footer {
      border-bottom: 1px solid #ccc;
    }
    footer {
      border-top: 1px solid #ccc;
      border-bottom: none;
      margin-top: 32px;
    }
    .error {
      color: #b00020;
    }
  </style>
</head>
<body>
  <header>
    <h1><?= htmlspecialchars($pageTitle) ?></h1>
  </header>
  <main>
