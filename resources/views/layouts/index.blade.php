<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
  @yield('cabecalho')
  <div id="app">
    <teste-vue></teste-vue>
  </div>
</body>
  <script src="{{ asset('js/app.js') }}"></script>
</html>