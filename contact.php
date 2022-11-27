
	<?php include("menu.php"); ?>   
	
	<!-- END of header -->
   
    <div id="templatemo_main">
    	<div id="templatemo_content" class="left">
            <div class="content_wrapper content_mb_30">
            
            	<h2>Контакт </h2>
                <div id="contact_form" class="col_2 left">
                
                    <h3>Форма обратной связи</h3>
                    <form method="post" name="contact" action="#">
                    
                        <div class="col_3">
                            <label for="name">Имя:</label>
                            <input name="Имя:" type="text" class="required input_field" id="name" maxlength="30" />
                        </div>
                        
                        <div class="col_3 no_margin_right">
                          <label for="email">Почта:</label>
                            <input name="Почта:" type="text" class="validate-email required input_field" id="email" maxlength="30" />
                        </div>
                        
                        <div class="clear h10"></div>
                        
                     	 <div class="col_3 left">
                        <label for="phone">Телефон:</label>
                          <input name="Телефон:" type="text" class="required input_field" id="phone" maxlength="20" />
                        </div>
                        
                  		<div class="col_3 no_margin_right">
                            <label for="email">Тема:</label>
                      	<input name="Тема:" type="text" class="validate-email required input_field" id="subject" maxlength="40" />
                    	</div>
                        
                        <div class="clear"></div>
                        <label for="text">Сообщение:</label> <textarea id="text" name="Сообщение:" rows="0" cols="0" class="required"></textarea>
                       
        <!-- Hidden Required Fields -->
		<input type="hidden" name="project_name" value="Сloud-Office">
		<input type="hidden" name="admin_email" value="info@cloud-office.pro">
		<input type="hidden" name="form_subject" value="Контакт">
		<!-- END Hidden Required Fields -->

					   <input type="submit" name="Submit" value="Передать" class="left" />
                       <input type="reset" name="Reset" value="Очистить" class="right" />
                    
					
					</form>
                    
                </div> 
            </div>
            
            
		</div>
        <div id="templatemo_sidebar" class="right">
       		
                <h3>Предварительная консультация</h3>
                <br />                              
              <!--  Тел. +38 073 1791357<br /> -->
				E-mail: info@cloud-office.pro
 
                
				
                
						
            
      </div>
        <div class="clear"></div>
    </div>
</div> <!-- END of templatemo_wrapper -->
<?php include("footer.php"); ?> 
</body>
</html>