<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <link rel='stylesheet' href='/css/main.css'>
    <script src='/js/jquery-2.1.4.min.js'></script>
  </head>
  <body>
  <ul>
  @foreach($todos as $todo)
  <li>{{ $todo->content }}</li>
  @endforeach
  </ul>
  <img src='/images/01.jpg' />
  <img src='/images/02.jpg' />
  <img src='/images/03.jpg' />
  <img src='/images/04.jpg' />
  <img src='/images/05.jpg' />
  <img src='/images/06.jpg' />
  <img src='/images/07.jpg' />
  <img src='/images/08.jpg' />
  <img src='/images/09.jpg' />
  <img src='/images/10.jpg' />
  <img src='/images/11.jpg' />
  <img src='/images/12.jpg' />
  </body>

</html>
