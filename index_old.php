<!doctype html>
<html lang="ru">
  <head>
    <meta charset="UTF-8">
    <title>Моя страница</title>
    <style>
    @media (min-width: 1000px){
      .container{
        width: 1000px;
        border: 2px solid black;
        background: green;
        margin: auto;
        text-align:center;
      }
      .block{
        width: 400px;
        height: 200px;
        font-size: 32px;
        background: navy;
        color: white;
        border: 2px solid black;
        margin:10px;
        display: inline-block;
      }
    }
    @media (max-width: 1000px){
      .container{
        width: 100%;
        border: 2px solid black;
        background: green;
        margin: auto;
        text-align:center;
      }
      .block{
        width: 80%;
        height: 200px;
        font-size: 50px;
        background: navy;
        color: white;
        border: 2px solid black;
        margin: 10px auto;
      }
    }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="block">1</div>
      <div class="block">2</div>
      <div class="block">3</div>
      <div class="block">4</div>
    </div>
  </body>
</html>