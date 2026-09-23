<?php
// Top of every page. Set $pageTitle before require "header.php".
?>
<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= htmlspecialchars($pageTitle) ?></title>
  <style>
    /* Colors */
    :root {
      --background: #f8fafc;
      --text: #0f172a;
      --muted: #64748b;
      --accent: #1d4ed8;
      --border: #cbd5e1;
      --card: #ffffff;
    }

    * {
      box-sizing: border-box;
    }

    body {
      font-family: Arial, Helvetica, sans-serif;
      max-width: 760px;
      margin: 40px auto;
      padding: 0 20px;
      background: var(--background);
      color: var(--text);
      line-height: 1.6;
    }

    h1 {
      font-size: 1.6rem;
      margin-bottom: 20px;
    }

    /* Table */
    table {
      border-collapse: collapse;
      width: 100%;
      background: var(--card);
    }

    th,
    td {
      border: 1px solid var(--border);
      padding: 8px;
      text-align: left;
      vertical-align: top;
    }

    /* Forms */
    form {
      display: grid;
      gap: 6px;
      max-width: 480px;
    }

    label {
      font-weight: bold;
      margin-top: 10px;
    }

    input,
    textarea {
      padding: 8px;
      font: inherit;
      border: 1px solid var(--border);
      border-radius: 6px;
    }

    /* Buttons */
    button,
    .button {
      padding: 8px 14px;
      font: inherit;
      cursor: pointer;
      border: 1px solid var(--accent);
      border-radius: 6px;
      background: var(--accent);
      color: var(--card);
      text-decoration: none;
      display: inline-block;
    }

    .delete {
      border-color: #b91c1c;
      background: #b91c1c;
    }

    .error {
      color: #b91c1c;
      font-weight: bold;
    }

    .meta {
      color: var(--muted);
      font-size: 0.9rem;
    }

    /* Phones */
    @media (max-width: 480px) {
      body {
        margin: 20px auto;
      }

      th,
      td {
        padding: 6px;
      }
    }
  </style>
</head>
<body>
  <header>
    <h1><?= htmlspecialchars($pageTitle) ?></h1>
  </header>
  <!-- footer.php closes <main> -->
  <main>
