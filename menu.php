<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="yandex-verification" content="5cc2aa0d30f97f27" />
<?php  
  $p1 = $_SERVER['REQUEST_URI'];
		if (stripos($p1, 'index') !== false){ $in='selected home';$ser='services';$ne='news';$gal='gallery';$con='contact';
		$keywords='Организация компании,Доподготовка сотрудников,Системная аналитика,Администрирование системы Битрикс 24,
		Облачная инфраструктура,Разработка проектов,Бизнес в онлайне';
        $description='Cистематизация бизнес-процессов.Перевод компаний на удаленку.
		Подготовка, обучение и администрирование работы на «удалёнке».Управление командой.';
		$tit='Облачный офис';
		}
    	if (stripos($p1, 'services') !== false){ $in='home';$ser='selected services';$ne='news';$gal='gallery';$con='contact';
		$keywords='Переход на удаленку,Настройка процессов под компанию,Для руководителя,Доподготовка сотрудников,
		Системная аналитика,Облачная инфраструктура,Быстрый старт,Минимальные вложения,Маштабируемость';
        $description='Эффективное сопровождение процесса работы. Избавить сотрудника от выполнения рядовых операций.';
		$tit='Облачный офис: Кейсы';
		}
    	if (stripos($p1, 'news') !== false){ $in='home';$ser='services';$ne='selected news';$gal='gallery';$con='contact';
		$keywords='Организация компании в онлайне,Доподготовка сотрудников к онлайн-работе,Системная аналитика: Power BI Desktop,
		Cквозная аналитика: Roistat,Администрирование системы (Битрикс24),Создание и поддержка облачной инфраструктуры компании,
		Разработка проектов,Бизнес в онлайне';
        $description='Создание и поддержка облачной инфраструктуры компании.Организация компании в онлайне:';
		$tit='Облачный офис: Услуги';
		}
    	if (stripos($p1, 'gallery') !== false){ $in='home';$ser='services';$ne='news';$gal='selected gallery';$con='contact';
		$keywords='Серверная виртуализация,Корпоративная почта,Zoom,Power BI Desktop,Roistat,Шаблоны задач,Роботы в задачах,Эффективность и отчеты,
		Голосовые помощники,Задачи на e-mail,Роли и права доступа,Удобный механизм интеграции';
        $description='Работать в онлайне это тоже технология.';
		$tit='Облачный офис: Галерея';
		}
    	if (stripos($p1, 'contact') !== false){ $in='home';$ser='services';$ne='news';$gal='gallery';$con='selected contact';
		$keywords='Форма обратной связи,Имя,Почта,Телефон,Тема,Сообщение,Предварительная консультация';
        $description='Предварительная консультация: Тел. +38 073 1791357 E-mail: info@cloud-office.pro';
		$tit='Облачный офис: Контакты';
		}
printf("<title>%s</title>
<meta name='keywords' content='%s' />
<meta name='description' content='%s' /> 
	",$tit,$keywords,$description); 
?> 
<link rel="shortcut icon" href="/images/favicon.png" type="image/png">

<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
<link href="css/button.css" rel="stylesheet" type="text/css" />	
<link rel="stylesheet" href="css/slimbox2.css" type="text/css" media="screen" /> 

<style>
.rig{display: inline-block; float: left; padding-right: 15px}
 #btn1{cursor: pointer;text-align: center; }   
.center-img {display: block;margin: 0 auto;} 
</style>

<script type="text/javascript" src="js/jquery-1.6.3.min.js"></script>
<script type="text/javascript" src="js/jquery.nivo.slider.pack.js"></script>
<script type="text/JavaScript" src="js/slimbox2.js"></script>
<!-- Google Analytics -->
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-XXXXX-Y', 'auto');
ga('send', 'pageview');
</script>
<!-- End Google Analytics -->
<script type="text/JavaScript">
$(document).ready(function() {
	$('#gallery li').hover(
		function(){$('span',this).slideToggle('slow');},
		function(){$('span',this).slideToggle('slow');
     });
});

$(document).ready(function(){
	$(".divClass").hide();
    $("#btn1").click(function(){
    $(".divClass").slideToggle("slow",function()
    {
    
    });
  });});
  
function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}  
</script>

</head>

<body>
<div id="templatemo_wrapper">
<?php  
  

			 printf("<style> body { background: #c7b39b url(images/vp.jpg);}p { text-indent: 15px; } </style>  
         			 <div id='templatemo_header'>
    	<div id='site_title'><a href='index.php'>Облачный офис</a></div>
        <div id='templatemo_menu'>
            <ul>
                <li><a href='index.php' class='%s'>Главная</a></li>
                <li><a href='services.php' class='%s'>Кейсы</a></li>	
                <li><a href='news.php' class='%s'>Услуги</a></li>					
                <li><a href='gallery.php' class='%s'>Галерея</a></li>
                <li class='last'><a href='contact.php' class='%s'>Контакты</a></li>
            </ul>
        </div> <!-- end of templatemo_menu -->
    </div>  
	",$in,$ser,$ne,$gal,$con);
	?> 
	