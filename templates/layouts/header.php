<!DOCTYPE html>
<html dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="/templates/css/style.css">
    <title>PHP test site</title>
  </head>
  <body>
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
        <h5 class="my-0 mr-md-auto font-weight-normal"><a href="/">itZone</a></h5>
      <nav class="my-2 my-md-0 mr-md-3">
        <a class="p-2 text-dark" href="/">Главная</a>
        <a class="p-2 text-dark" href="/about/">Контакты</a>

      </nav>
        <?php if (isset($_SESSION['user'])): ?>
        <?php if($_SERVER['REQUEST_URI'] == '/cabinet/'): ?>
            <a class="btn btn-outline-danger" href="/logout/">Выйти</a>
        <?php else: ?>
        <a class="btn btn-outline-primary" href="/cabinet/">Личный Кабинет</a>
        <?php endif; ?>
        <?php else: ?>
      <a class="btn btn-outline-primary" href="/auth/">Войти</a>
        <?php endif; ?>
    </div>
