<?php
$login = "admin";
$pass = "IOWw9qPQ";

if(isset($_POST['login'])){
	if($_POST['login'] == $login AND $_POST['pass'] == $pass) {
		setcookie("admin","welcome");
		header("Location: /ru/admin/");
	}
}


?>



        <div class="main-block">

            <div class="one-whole">

			     <div class="box">
                    <div class="col-lg-12">

                        <h3>Авторизация</h3> 

                    </div>
                </div>


                <div class="my-box">

					<title>Вход на сайт</title>

					<form action="login.php" method="POST">
						<label><b>Логин:</b></label><br>
						<input type="text" name="login">
					<br><br>

						<label><b>Пароль:</b></label><br>
						<input type="text" name="pass">
						<br><br>
						<input type="submit">
					</form>

 				</div>


            </div>            
			
		
        </div>
