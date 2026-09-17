<?php
// Top half of every page: doctype, head, styles, the opening body and the heading.
// A page sets $pageTitle first and then calls require "header.php", so the browser tab
// and the <h1> on screen always say the same thing.
// The closing tags are in footer.php, which every page requires at the end.
?>
<!DOCTYPE html>
<!-- lang="pl" tells the browser and screen readers that the text on the page is Polish -->
<html lang="pl">
<head>
  <!-- UTF-8 is the encoding that covers Polish letters, without it ą, ę and ż break -->
  <meta charset="UTF-8">
  <!-- viewport makes a phone use its real width instead of pretending to be a wide desktop -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- htmlspecialchars() turns < > " & into harmless entities, so text can never become markup -->
  <title><?= htmlspecialchars($pageTitle) ?></title>
  <style>
    /* Custom properties: every colour gets a name here once and is reused below with var(...) */
    :root {
      --background: #f8fafc;
      --text: #0f172a;
      --muted: #64748b;
      --accent: #1d4ed8;
      --border: #cbd5e1;
      --card: #ffffff;
    }

    /* box-sizing: border-box counts padding and border inside the declared width,
       so a field with padding no longer sticks out of its column */
    * {
      box-sizing: border-box;
    }

    /* Page frame: readable width, centered, with the background and text colour */
    body {
      font-family: Arial, Helvetica, sans-serif;
      max-width: 760px;
      /* auto on the left and right splits the free space evenly, which centers the page */
      margin: 40px auto;
      padding: 0 20px;
      background: var(--background);
      color: var(--text);
      line-height: 1.6;
    }

    /* Page heading, the same text as the browser tab */
    h1 {
      font-size: 1.6rem;
      margin-bottom: 20px;
    }

    /* Table of records on list.php */
    table {
      /* collapse draws one shared line between two cells instead of two lines side by side */
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

    /* Forms on add.php, edit.php and delete.php: one column, label above its field */
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
      /* font: inherit copies the page font, because fields use a browser font of their own */
      font: inherit;
      border: 1px solid var(--border);
      border-radius: 6px;
    }

    /* One look for real buttons and for links that should look like buttons */
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
      /* inline-block lets a link accept padding, which a plain inline link ignores */
      display: inline-block;
    }

    /* .delete marks the one action that destroys data, so it never looks like the safe one */
    .delete {
      border-color: #b91c1c;
      background: #b91c1c;
    }

    /* .error is the message shown above a form that was sent with an empty field */
    .error {
      color: #b91c1c;
      font-weight: bold;
    }

    /* .meta is small grey text, here the date of a record */
    .meta {
      color: var(--muted);
      font-size: 0.9rem;
    }

    /* @media runs the rules inside only when the condition is true, here on a narrow screen */
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
  <!-- Page heading, printed from the same variable as the title above -->
  <header>
    <h1><?= htmlspecialchars($pageTitle) ?></h1>
  </header>
  <!-- <main> holds what is different on each page, footer.php closes it -->
  <main>
