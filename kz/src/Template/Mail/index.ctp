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

$name = $_POST['name'];
$phone = $_POST['phone'];

$subject = "Заказали звонок!";
$text = "

Имя: ".$name."
Телефон: ".$phone."

";

//cgkb-almaty@mail.ru
				
if(send_email($subject, $text, "cgkb-almaty@mail.ru")) {
	echo "
	
	Спасибо! Ваше сообщение отправлено. В ближайшее время мы с Вами свяжемся.
	
	";
header( "refresh:5;url=/" );

}else{
	echo "

	Внимание! Что-то пошло не так, Ваше сообщение не удалось отправить. Пожалуйста, продублируйте ваши данные на expert@almaty-cgkb.kz
	или напишите нам в Whatsapp / Telegram. Спасибо. 
	
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