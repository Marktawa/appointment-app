PHP is a framework for building websites. SQLite is a light RDBMS. Railway is a platform for hosting web apps. Learn how to host a PHP SQLite site on Railway.

## Prerequisites
- Railway Account
- PHP
- SQLite

## Create Home Page
On your local machine, create a `index.php` file.
```php
<h1>Hello World</h1>
```

Test your site.
```sh
php -S localhost:8000
```

## Deploy to Railway
Install the Railway CLI tool:
```sh
npm i -g @railway/cli
```

Login to your Railway account:
```sh
railway login --browserless
```

Create a new Railway project:
```sh
railway init
```

Link your folder to your Railway project.
```sh
railway link
```

Deploy your app.
```sh
railway up --detach
```

When the site is ready, generate a domain.
```sh
railway domain
```

## Update Site and Redeploy
<!--
Update home page, `index.php`:
```php
<h1>Hello World!</h1>
<p>Happy to be here</p>
```
-->
Create a SQLite database
```sh
sqlite3 data.db
```

Create a TABLE named `global` with a COLUMN named `message` with of TEXT type.
```sql
CREATE TABLE global (
    message TEXT
);
```

Insert a row with the value `Hello World`.
```sql
INSERT INTO global (message) VALUES ('Hello World');
```

Verify the insertion.
```sql
SELECT * FROM global;
```

Connect to the database in by updating `index.php`
```php
<?php
$conn = new SQLite3('data.db');

$result = $conn->query("SELECT message FROM global");

$row = $result->fetchArray();
echo "<h1>".$row['message']."</h1>";
?>
```

Test update locally:
```sh
php -S localhost:8000
```

Redeploy to Railway.
```sh
railway up --detach
```