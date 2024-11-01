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
Update home page, `index.php`:
```php
<h1>Hello World!</h1>
<p>Happy to be here</p>
```

Test update locally:
```sh
php -S localhost:8000
```

Redeploy to Railway.
```sh
railway up --detach
```