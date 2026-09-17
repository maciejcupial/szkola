# Conventions for this repository

Public starter templates for technikum students (classes 2TI, 3TI, 4Ti). Students download a folder,
copy it into their own repository and change the places marked `TU ZMIEŃ`.

## Language

- Code is English: identifiers, comments, CSS classes and ids, form field names, `data-*` attributes,
  localStorage keys, database, table and column names.
- Everything a student sees on screen is Polish, written natively: page text, labels, buttons, prompts,
  error and status messages, README files. Polish quotes are „…”. No em-dashes anywhere.
- Folder and file names are English too (kebab-case folders, `snake_case.py`, `kebab-case.html`).
  Class folders `2TI`, `3TI`, `4Ti` are group ids and stay.

## Comments

Every file reads top to bottom like a guided tour: a header comment saying what the file does and how it
connects to the other files, then a comment on every line or block a student could wonder about, with
each concept explained once at its first use. No comments that restate obvious code, no history, no
dates, no names.

## Shared vocabulary

CSS custom properties `--background`, `--text`, `--muted`, `--accent`, `--border`, `--card`; classes
`.active`, `.button`, `.card`, `.error`, `.invalid`, `.ok`, `.meta`; form field ids `name`, `email`,
`age`, `subject`, `message`, `consent`, error spans `error-<field id>`; JS helpers `showError(fieldId,
text)` and `validate()`.

## Quality bar

Modern, minimal, correct: `const`/`let`, strict equality, `textContent` for user text, `type="button"`
on non-submit buttons, viewport meta and `lang="pl"` on every page, labels bound to inputs, no external
network resources (local SVG images), PHP 8 with `htmlspecialchars()` on every output and PDO prepared
statements only. Indentation: 2 spaces in HTML/CSS/JS, 4 in PHP and Python. CSS: one declaration per
line. Lines at most 110 characters.

Each template README: what it is, `## Jak uruchomić`, `## Co jest w plikach`, `## Co zmienić`,
`## Częste błędy`, plus one sentence saying the comments are in English on purpose.

## Checks before a push

`node --check` on every JS file, `php -l` on every PHP file, `ast.parse` on every Python file, every HTML
page loaded in headless Chrome with zero console errors and zero failed requests, `grep` for surnames and
the school name (none allowed), no `__pycache__`.

## Demo code

`demo/<class>/<topic>/` holds the live-coding files and model solutions for lessons, moved here from the
Drive teaching notes so students can download them. Same rules as templates: English code, file names and
comments, Polish output; a header comment names the lesson and the slides; the expected output of every
line sits in a comment next to it. Lines meant to fail on the projector stay commented out with a note.
The teaching notes on Drive (`tematy/<topic>/prowadzenie*.md`) link to the folder; keep both in step.

## Windows check

The PHP and Python templates are also run on a Windows 11 test machine with XAMPP, the same stack the
students use. The harness for that is private and lives outside this repo (`~/Projects/priv/szkola-szablony-tests/windows/`
on the maintainer's machine); run it before publishing changes to `4Ti/php-*` or `2TI/python-start`.
