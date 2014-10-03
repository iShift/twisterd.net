<?php
$lang = $_COOKIE['lang'];
if (!empty($lang)){

}else{

$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
setcookie ("lang",$lang,time()+3600*24*62,"/");
	
}



if ($lang == 'ru') {
// Russian language
// index.php
$head_title = 'Twister - Микроблогинг без цензуры';
$menu_main = 'Главная';
$menu_diff = 'В чем отличие от Twitter?';
$menu_screenshots = 'Скриншоты';
$menu_forum = 'Форум';
$menu_for_developers = 'Разработчикам';
$menu_for_developers_core = 'Помочь на GitHub (Ядро)';
$menu_for_developers_webui = 'Помочь на GitHub (Web интерфейс)';
$menu_for_users = 'Для пользователей';
$menu_for_developers2 = 'Для разработчиков';
$menu_download_for_windows = 'Скачать для Windows';
$h2_microblog_service = 'Это сервис микроблогов, он даст вам:';
$h3_no_spy = '1. Полноценную свободу слова<br> 2. Отсутствие слежки<br> 3. Отсутствие логирования';
$p_text_1 = 'Twister в корне отличается от твиттера, в нем нельзя никого заблокировать, удалить уже написанное, запретить доступ к информации из определенной страны. Он построен на P2P архитектуре и сочетает в себе все лучшее от Bitcoin и Bittorrent';        
$btn_another_dif = 'В чем еще отличия?';
$active_develop = 'Внимание ! Twister находится в активной разработке, могут не работать некоторые функции, учтите это!';
$twister_community = 'Сообщество любителей Twister';
$official_site_link = 'Официальный сайт';
// index.php  

// screenshots.php
$main_windows = 'Ваша лента';
$main_settings = 'Основные настройки';
$profile_settings = 'Настройки профиля';
$users_profile = 'Просмотр профиля пользователя';
$personal_messages = 'Личные сообщения';
$mentions = 'Реплаи (упоминания @)';
$menu = 'Меню';
$sign_in_sign_up = 'Вход в аккаунт или регистрация нового';
$post_for_hashtag = 'Просмотр постов с хэштегом #ru';
// screenshots.php


}else{
	// English language
// index.php
$head_title = 'Twister - Uncensored Microblogging';
$menu_main = 'Main';
$menu_diff = 'What is the difference from Twitter?';
$menu_screenshots = 'Screenshots';
$menu_forum = 'Forum';
$menu_for_developers = 'Developers';
$menu_for_developers_core = 'Help on GitHub (Core)';
$menu_for_developers_webui = 'Help on GitHub (Web UI)';
$menu_for_users = 'For Users';
$menu_for_developers2 = 'For developers';
$menu_download_for_windows = 'Download for Windows';
$h2_microblog_service = 'This micro-blogging service, it will give you:';
$h3_no_spy = '1. Full freedom of speech<br> 2. Lack of spying<br> 3. Lack of action logging';
$p_text_1 = 'Twister is fundamentally different from Twitter, in twister no one can not be blocked or remove the already written or deny access to information from a particular country. It is based on P2P architecture and combines the best of Bitcoin and Bittorrent';        
$btn_another_dif = 'In what other differences?';
$active_develop = 'Attention! Twister is in active development, may not operate some functions, keep this in mind!';
$twister_community = 'Twister community';
$official_site_link = 'Official Site';
// index.php  

// screenshots.php
$main_windows = 'Feed';
$main_settings = 'Main settings';
$profile_settings = 'Profile settings';
$users_profile = 'User profile';
$personal_messages = 'Direct Missages';
$mentions = 'Mentions @';
$menu = 'Menu';
$sign_in_sign_up = 'Login / Sign up';
$post_for_hashtag = 'Search for posts with hashtag #ru';
// screenshots.php
}      

?>