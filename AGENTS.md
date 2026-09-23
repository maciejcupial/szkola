# Conventions for this repository

Public starter templates and lesson code for technikum students (classes 2TI, 3TI, 4Ti). Students download a
folder, copy it into their own repository and change the places marked `TU ZMIEŃ`.

## Layout

One top-level folder per technology: `html-css/`, `js/`, `php/`, `python/`. Never a folder per class: the
README table „Znajdź swoją klasę” maps classes to folders.

- `<tech>/NN-<topic>/` is one topic of the public course, numbered in course order: `README.md`, a working
  example (`index.php`, `index.html` + `script.js`, `main.py`), `lesson/` with the lesson code, and `tasks/`
  with scaffolds that run without errors as delivered and state the expected output in their header. Tasks go
  from the slide exercise to a combined one to a harder one marked „dla chętnych”, and use only what the
  course has taught by then. No solutions of `tasks/` here: model solutions live privately with the teaching
  notes.
- `<tech>/projects/<name>/` holds larger starter templates for class projects.
- `html-css/<topic>/` (no number) holds HTML/CSS lesson code; there is no public HTML course yet.

## Language

- Code is English: identifiers, comments, CSS classes and ids, form field names, `data-*` attributes,
  localStorage keys, database, table and column names.
- Everything a student sees on screen is Polish, written natively: page text, labels, buttons, prompts, error
  and status messages, README files. Polish quotes are „…”. No em-dashes anywhere.
- Naming follows the language: Python `snake_case` (PEP 8), JavaScript and PHP `camelCase`, classes
  `PascalCase`, constants `UPPER_CASE`, CSS classes and ids `kebab-case`, SQL `snake_case`.
- Folder and file names are English too (kebab-case folders, `snake_case.py`, `kebab-case.html`).

## Comments

Few and short: the code must read cleanly. A file header of at most two lines; a one-line comment only where a
student would really get stuck (a trap, a trick, a function not seen before). No comments that restate the
code or explain a concept from the slides, no history, no dates, no names. Lesson code keeps expected output
in the shortest form next to the line (`// 25`); task scaffolds keep „Task N of M”, the expected output and
the `TU ZMIEŃ` markers.

## PHP structure

Logic and HTML are separated. Up to the include lesson (`php/01`-`php/10`): one `<?php` block on top holds all
logic (data, form handling, queries, fetched rows into arrays), below it plain HTML that only uses `<?=
htmlspecialchars($x) ?>`, `foreach (): endforeach;` and `if (): endif;`. No `echo` with HTML tags, no queries
and no function definitions in the view. From `php/11` on: controller (`index.php`), model (`functions.php`,
`db.php`) and views (`templates/`). `php/13-laravel-comparison` shows the same split in a framework;
`js/09-fetch-json` shows PHP as a JSON API with JavaScript building the page.

## Shared vocabulary

CSS custom properties `--background`, `--text`, `--muted`, `--accent`, `--border`, `--card`; classes
`.active`, `.button`, `.card`, `.error`, `.invalid`, `.ok`, `.meta`; form field ids `name`, `email`, `age`,
`subject`, `message`, `consent`, error spans `error-<field id>`; JS helpers `showError(fieldId, text)` and
`validate()`.

## Quality bar

Modern, minimal, correct: `const`/`let`, strict equality, `textContent` for user text, `type="button"` on
non-submit buttons, viewport meta and `lang="pl"` on every page, labels bound to inputs, no external network
resources (local SVG images), PHP 8 with `htmlspecialchars()` on every output and PDO prepared statements
only. Exception: `php/10-mysql-database`, `php/11-include-errors/lesson` and `js/09-fetch-json` use procedural
mysqli like the INF.03 exam, with `mysqli_prepare` for every query that takes user input; lesson code may show
the slide's glued query only next to its prepared version, with a comment on why it is unsafe. Indentation: 2
spaces in HTML/CSS/JS, 4 in PHP and Python. CSS: one declaration per line. Lines at most 110 characters.

Each template README: what it is, `## Jak uruchomić`, `## Co jest w plikach`, `## Co zmienić`, `## Częste
błędy`, plus the sentence „Komentarze w kodzie są po angielsku i tylko tam, gdzie coś może być niejasne.”

## Checks before a push

`node --check` on every JS file, `php -l` on every PHP file, `ast.parse` on every Python file, every HTML page
loaded in headless Chrome with zero console errors and zero failed requests, `grep` for surnames and the
school name (none allowed), no `__pycache__`.

## Lesson code

`lesson/` inside a topic (and the unnumbered `html-css/<topic>/` folders) holds the live-coding files and
model solutions of the exercises shown on the slides. Same rules as templates: English code, file names and
comments, Polish output; a header comment names the lesson and the slides; the expected output of every line
sits in a comment next to it. Lines meant to fail on the projector stay commented out with a note. The
teaching notes on Drive (`kursy/<course>/prowadzenie/*.md`, `tematy/<topic>/prowadzenie*.md`) link to the
folder; keep both in step when a folder moves.

## Windows check

The PHP and Python templates are also run on a Windows 11 test machine with XAMPP, the same stack the students
use. The harness for that is private and lives outside this repo
(`~/Projects/priv/szkola-szablony-tests/windows/` on the maintainer's machine); run it before publishing
changes to `php/` or `python/projects/start`. The numbered `python/` and `php/` topics are not in that harness
yet: they were checked on macOS only (syntax, a run of every file with sample input, line length); add them to
the harness when the VM is next up.
