# php-tuts

Learning notes from the sandbox PHP exercises.

## Fundamentals
- PHP syntax basics, comments, variables, constants, and scalar types
- String concatenation and interpolation
- Arrays: indexed, associative, multidimensional, and common helpers (`count`, `print_r`, `var_dump`)
- Control flow: `if/elseif/else`, `switch`, comparisons (loose vs strict), and logical operators
- Loops: `for`, `while`, `do...while`, `foreach`, plus `break`/`continue`
- Functions: parameters, default values, return values, recursion, and pass-by-reference

## Strings and Dates
- String utilities: case conversion, trimming, length, replace, substrings, and reverse
- Dates/times: timezones, formatting, timestamps, `strtotime`, date arithmetic, and `DateTime::diff`

## Web and Forms
- Superglobals: `$_GET`, `$_POST`, `$_REQUEST`, `$_SERVER`
- Form handling and validation (required fields, email validation)
- Output escaping with `htmlspecialchars` to avoid XSS
- Filtering input with `filter_var`/`filter_has_var`

## Cookies and Sessions
- Setting, reading, and deleting cookies
- Starting sessions, setting/unsetting session values, and session destruction

## Filesystem
- File checks with `file_exists`
- Reading/writing files with `file_get_contents`, `file_put_contents`, and `file`

## OOP
- Classes, constructors, properties, and methods
- Visibility: `public`, `private`, `protected`
- Static properties
- Inheritance and method overriding

## Databases (MySQL)
- MySQLi connection, querying, fetching results, inserts, deletes, and escaping
- PDO connection with error modes and prepared statements

## Mini Projects in This Repo
- `todo-app/`: CRUD basics using MySQLi
- `todo-app-pdo/`: CRUD basics using PDO prepared statements
- `contact-us/`: form handling + PHPMailer SMTP email sending
- `website1/`: simple page templating with `include`/`require`
