<div class="long_space"></div>

<?php include('menu.php'); ?>        

<div class="main-block">
    <div class="one-whole">

		<div class="box">
                <div class="col-lg-12">

                    <h3>Письмо</h3> 

                </div>
            </div>
			

	        <div class="box">
			          
				<div class="small_space"></div>
				
				
			     <div class="row">
                    <div class="col-lg-12">	
						<p style="font-size: 1.2em; margin: 15% auto; text-align: center;">



<?php

$qname = $_POST['Qname'];
$qemail = $_POST['Qemail'];
$qtext = $_POST['Qtext'];

$subject = "Вопрос Директору.";
$text = "

Имя: ".$qname."
Телефон: ".$qemail."

Вопрос: ".$qtext."
";


				
if(send_email($subject, $text, "expert@almaty-cgkb.kz")) {
	echo "
	
	Спасибо! Ваш вопрос отправлен. В ближайшее время Директор даст ответ, пожалуйста ожидайте.
	
	";
header( "refresh:5;url=/" );

}else{
	echo "

	Внимание! Что-то пошло не так, Ваше сообщение не удалось отправить. Пожалуйста, продублируйте ваш вопрос, имя и e-mail на expert@almaty-cgkb.kz или напишите нам в Whatsapp / Telegram. Спасибо. 
	
	";
}



  



?>

						</p>
                  </div>
                </div>
						
				<div class="long_space"></div>	
				
			</div>
	</div>
</div>