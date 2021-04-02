<?php
session_start();
if(empty($_SESSION['id'])){
  header('Location: http://korp9000.beget.tech/');
  exit;
}
?>
<!doctype html>
<html lang="ru" xmlns="http://www.w3.org/1999/html">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <link rel="shortcut icon" type="image/x-icon" href="https://cdn.icrypto.media/images/455100ed_3aff_4e2a_b843_d91c932062ea.jpeg" />
        <!-- Bootstrap CSS -->
            <link rel="stylesheet" href="css/bootstrap.css">
            <link rel="stylesheet" href="css/bootstrap-reboot.css">
            <link rel="stylesheet" href="css/bootstrap-grid.css">
            <link rel="stylesheet" href="css/bootstrap-grid.min.css">
            <link rel="stylesheet" href="css/bootstrap.min.css">
            <link rel="stylesheet" href="css/bootstrap.css.map">
            <link rel="stylesheet" href="css/bootstrap-reboot.css.map">
            <link rel="stylesheet" href="css/bootstrap-grid.css.map">
            <link rel="stylesheet" href="css/bootstrap-grid.min.css.map">
            <link rel="stylesheet" href="css/bootstrap.min.css.map">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
            <script src="https://kit.fontawesome.com/05a1b08970.js" crossorigin="anonymous"></script>

        <title>korobkov workgroup 201 </title>

          
    </head>
      
    <body>
        <!-- menu -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <a class="navbar-brand" href="index3.html">Workgroup 201 Korobkov </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="index3.html">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://vozhzhaev.ru/auth">go to login vozhzhaev</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact-us.php">Contact</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="http://201.vozhzhaev.ru">Vozhzhaev</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="position.php">Position</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="scripts.php">Script </a>
              </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
              <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
          </div>
        </nav>
        <!--menu end -->
            
        <div class="container my-5">
      <div class="col-6 mx-auto">
        <p>Имя: <span><?= $_SESSION['name']?></span> 
          <span class="change-btn">[изменить]</span>
          <span class="save-btn" hidden data-item="name">[сохранить]</span>
          <span class="cancel-btn" hidden>[отменить]</span>
        </p>
        <p>Фамилия: <span><?= $_SESSION['lastname']?></span>
          <span class="change-btn">[изменить]</span>
          <span class="save-btn" hidden data-item="lastname">[сохранить]</span>
          <span class="cancel-btn" hidden>[отменить]</span>
        </p>
        <p>ID: <?= $_SESSION['id']?></p>
      </div>
    </div>
    
    <script>
      let changeBtn = document.getElementsByClassName('change-btn');
      let saveBtn = document.getElementsByClassName('save-btn');
      let cancelBtn = document.getElementsByClassName('cancel-btn');
      for(let i=0; i<changeBtn.length; i++){
        changeBtn[i].addEventListener('click',()=>{
          let value = changeBtn[i].previousElementSibling.innerText;
          changeBtn[i].previousElementSibling.innerHTML = `<input type="text" value="${value}">`;
          changeBtn[i].hidden = true;
          saveBtn[i].hidden = false;
          cancelBtn[i].hidden = false;
        });
        saveBtn[i].addEventListener('click',()=>{
          let value = changeBtn[i].previousElementSibling.firstChild.value;
          let item = saveBtn[i].dataset.item;
          let formData = new FormData();
          formData.append("value",value);
          formData.append("item",item);
          fetch('php/handlerChangeUserData.php',{
            method: "POST",
            body: formData
          }).then(response=>response.json())
            .then(result=>{
              if(result.result == "success"){ // С сервера приходит "success"
                changeBtn[i].hidden = false; // Отображаем кнопку изменить
                saveBtn[i].hidden = true; // Скрываем кнопку сохранить
                cancelBtn[i].hidden = true; // Скрываем кнопку отменить
                changeBtn[i].previousElementSibling.innerHTML = value; //Удаляем инпут, а вместо него пишем то, что ввёл пользователь
              }
            })
        });
      }
    </script>
        
        
       <!-- container forma -->
        <!-- container forma end-->
        <!-- footer -->
        <footer class="container-fluid bg-dark bg-gradiebt text-white py-3">
            <p class="text-center">&copy; 2021 Korobkov  workgroup 201</p>
        </footer>
        <!-- footer end -->
        
        
            

        <!-- Optional JavaScript -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
        
    </body>
</html>