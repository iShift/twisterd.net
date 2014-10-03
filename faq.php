<?php
echo '
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">
    <title>Twister - FAQ</title>
    <link href="bootstrap.min.css" rel="stylesheet">
    <link href="navbar.css" rel="stylesheet">
  </head>

  <body>

    <div class="container">

      <!-- Static navbar -->
      <div class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Twister<b>d</b>.net</a>
          </div>
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li ><a href="/">Главная</a></li>
              <li class="active"><a href="faq.php">В чем отличие от Twittera?</a></li>
              <li><a href="screenshots.php">Скриншоты</a></li>
              <li><a href="http://cjdroute.ru/forum/viewforum.php?f=11">Форум</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
               <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Разработчикам <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="https://github.com/miguelfreitas/twister-core">Помочь на GitHub (Ядро)</a></li>
				  <li><a href="https://github.com/miguelfreitas/twister-html">Помочь на GitHub (Web интерфейс)</a></li>
                  <li class="divider"></li>
                  <li class="dropdown-header">Google Groups</li>
                  <li><a href="https://groups.google.com/forum/#!forum/twister-users">Для пользователей</a></li>
                  <li><a href="https://groups.google.com/forum/#!forum/twister-dev">Для разработчиков</a></li>
                </ul>
              </li>
			  <li><a href="https://github.com/iShift/twister-webkit/releases/latest">Скачать для Windows</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </div>

      <!-- Main component for a primary marketing message or call to action -->
      <div class="jumbotron">

 <h1>Коротко:</h1><br>
<table class="table table-bordered">
<tr><td></td><td><div><b>Twister P2P</b></div></td><td><div>Twitter</div></tr></td>
<tr><td class="info">Может ли государство запросить удаление <b>аккаунта?</b></td><td class="success"> Нет</td><td class="danger"> Да</td></tr>
<tr><td class="info">Может ли государство запросить удаление <b>поста/твита?</b></td><td class="success"> Нет</td><td class="danger"> Да</td></tr>
<tr><td class="info">Может ли кто-то читать вашу <b>личную переписку</b> в сервисе?</td><td class="success"> Нет, никто кроме вас и человека, которому вы отправили соощение</td><td class="danger"> Да, может: Государства, администрация сервиса, любые службы безопасности</td></tr>
<tr><td class="info">Можно ли заблокировать сервис?</td><td class="success"> Нет, так, как что бы произвести блокировку - требуется заблокировать всех участников данной сети</td><td class="danger"> Да, можно, в Турции, Китае и в других странах сервис уже блокировали</td></tr>		
<tr><td class="info">Есть ли в сети <b>Аватары</b>?</td><td class="success">Да</td><td class="success">Да</td></tr>
<tr><td class="info">Есть ли в сети <b>Личные сообщения</b>?</td><td class="success">Да</td><td class="success">Да</td></tr>
<tr><td class="info">Есть ли в сети возможность <b>загрузки файлов</b>?</td><td class="warning">Нет, но в будет в будущем</td><td class="success">Да</td></tr>
<tr><td class="info">Есть ли в сети <b>Приватные блоги</b>?</td><td class="warning">Нет, но в будет в будущем</td><td class="success">Да</td></tr></table>
	
        <h1>Twister - FAQ</h1>
        <p>
	        <b>1) Что такое децентрализация у твистера? <br></b>
	        - У твистера нет серверов, он не принадлежит никакой компании - это означает, что никто не может купить его и закрыть информация в нем храниться не в едином месте (как у твиттера) а у всех пользователей
	        <br><b>2) Кому он принадлежит ? Кто за него отвечает ?<br></b>
	        - Никто, обычные люди, любой может принять участие в разработке и сделать свой аналог - как с Bitcoin (существует огромное количество валют от энтузиастов, например dogecoin)
	        <br><b>3) Вы хотите сказать, что не к кому обратиться для удаления "неправомерного" контента? <br></b>
	        - Именно так
	        <br><b> 4) А что насчет личных сообщений? кто-то кроме меня может их прочитать? разработчик то точно может?<br></b>
	        - Нет, кроме вас и того человека кому вы отправили сообщение больше никто не может его прочитать.
			<br><b> 5) А где гарантии что личные сообщения никто не может прочитать?<br></b>
			- Сообщения подписываются ключом шифрования того человека, кому вы отправляете сообщение, кроме него больше никто не может его прочитать.
			<br><b> 6) А что умеет твистер?<br></b>
			- Вы можете отправлять сообщения на свою стену<br>
			- Вы можете отправлять личные сообщения<br>
			- Имеется глобальный Top популярных хэштегов<br>
			- Вы можете искать интересные сообщения по хэштегам, впрочем как и писать сообщения с хештегами<br>
			- Поддерживаются реплаи - упоминания как в твиттере через знак @			
			<br><b> 7)  Какие платформы поддерживаются?<br></b>			
			- Windows<br>
			- Linux<br>
			- OS X <br>
			- Android
			<br><b> 8) А что нужно сделать, что бы закрыть твистер?<br></b>	
			- Что бы закрыть твистер нужно заблокировать <b>всех</b> участников сети во всем мире 
			<br><b> 9) Можно ли пользоваться твистером с нескольких устройств?<br></b>									
			- Да, нужно скопировать ваш секретный ключ
			<br><b> 10) Можно ли удалить пользователя/личное сообщение/твиcт из твистера?<br></b>
			- Нет						
<!--			<br><b> 11) Вообще никак?<br></b>															
			- Что бы сеть забыла о существовании сообщения, оно должно быть удалено у в
			<br><b> 4) <br></b>																	-->	
        </p>
      </div>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="bootstrap.min.js"></script>
    <footer align="center">Сообщество любителей Twister <br>
	    Официальный сайт: <a href="http://twister.net.co">http://twister.net.co</a>
    </footer>
  </body>
</html>';