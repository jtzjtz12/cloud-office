 <?php
include ("bd.php");  
 
//include ("inc/count.php"); 
 //https://v3c.ru/css/knopki-sotssetej-dlya-sajta
 ?> 
  <style>
 
 @import url(https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css);
.social a {
    text-align: center;
    width: 28px;
    height: 28px;
    float: left;
    background: #fff;
    border: 1px solid #ccc;
    box-shadow: 0 2px 4px rgba(0,0,0,0.15), inset 0 0 50px rgba(0,0,0,0.1);
    border-radius: 24px;
    margin: 0 10px 10px 0;
    padding: 6px;
    color: #000;
}

.youtube a:hover {background: #c4302b; color: #fff;}
.google-pluse a:hover {background: #DD4B39; color: #fff;}
.twitter a:hover {background: #00acee; color: #fff;}
.instagram a:hover {background: #3f729b; color: #fff;}
.facebook a:hover {background: #3b5998; color: #fff;}
.vk a:hover {background: #5d84ae; color: #fff;}
.odnoklassniki a:hover {background: #f93; color: #fff;}
.pinterest a:hover {background: #c8232c; color: #fff;}
.telegram a:hover {background: #249bd7; color: #fff;}
.windows a:hover {background: #125acd; color: #fff;}
.whatsapp a:hover {background: #50b154; color: #fff;}

 </style>
<div id='templatemo_footer_wrapper'>
	<div id='templatemo_footer'>
    	<div class='col_4'>
        	<h4>Страницы </h4>
            <ul class='nobullet bottom_list'>
            	<li><a href='index.php'>Главная</a></li>
                <li><a href='services.php'>Кейсы</a></li>
				<li><a href='news.php'>Услуги</a></li>
                <li><a href='gallery.php'>Галерея</a></li>
                <li><a href='contact.php'>Контакты</a></li>
            </ul>
        </div>
        
        <div class='col_4'>
        	<h4>Наши партнеры</h4>
            <ul class='nobullet bottom_list'>
            	<li><a href='https://gigacloud.ua/' target='_blank'>GigaCloud </a></li>
                <li><a href='https://obliksoft.com.ua/' target='_blank'>ОБЛИКСОФТ </a></li>
                <li><a href='https://insidergroup.pro/' target='_blank'>insider </a></li>  
                <li><a href='https://streamtele.com/ru/' target='_blank'>Stream Telecom </a></li> 
            </ul>
        </div>
        
         <div class='col_4'>
        	<h4>Мы в соцсетях</h4>
<div class="social youtube"><a href="https://www.youtube.com/channel/UCW-79CO_S0Gfr-j-1uvWbRw" target="_blank"><i class="fa fa-youtube fa-2x"></i></a></div>
<div class="social facebook"><a href="https://www.facebook.com/Cloud-Office-101591449038404" target="_blank"><i class="fa fa-facebook fa-2x"></i></a></div> 
<div class="social instagram"><a href="https://www.instagram.com/oblachnyio/" target="_blank"><i class="fa fa-instagram fa-2x"></i></a></div>

        </div>
        <div class='col_4 no_margin_right'>
        	<h4>Контакты</h4>
         <!--  Тел. +38 073 1791357 <br>-->
            E-mail: info@cloud-office.site
			<?php include ("inc/show_stats.php"); 

			?>
<br><br><br>			
        </div>
        <div class='clear'></div>
        <div id='templatemo_copyright'>
			Облачный офис © 2021 cloud-office.site  <!-- Credit: www.templatemo.com -->
		</div>
    </div> <!-- END of templatemo_footer -->
</div> <!-- END of templatemo_footer_wrapper -->
