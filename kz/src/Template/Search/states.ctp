<?php
use Cake\ORM\TableRegistry;
$states_table = TableRegistry::get('States');



if(isset($_GET['search'])){
    $get = $_GET['search'];
}else{
    $get = "";
}


$states = $states_table->find()->where(['name LIKE'=> "%".$get."%"]);

//->orWhere(['text LIKE'=> "%".$get."%"])


$title = "Поиск по отделениям";
$this->assign('title', $title);



?>


<div class="long_space"></div>

<?php include('menu.php'); ?>

    <div class="main-block">

    	<div class="one-whole">
		
		
			<div class="box">
                <div class="col-lg-12">

                    <h3>Поиск</h3> 

                </div>
            </div>
			

	        <div class="box">
			          
				<div class="small_space"></div>
				
				
			     <div class="row">
                    <div class="col-lg-12">


						<h2>Поиск по отделениям</h2>


                        <div class="row my-search-box">              
                            <form action="/ru/search/states/" method="GET">    
                                <input type="search" name="search" value="<?= $get ?>" placeholder="Введите слово или фразу">
                                <input type="submit" value="Искать">
                            </form>             
                        </div>

                    </div>
                </div>
				

                        <div class="hr"></div>
		
                        <div class="my-services">

                            <?php foreach ($states as $state): ?>
                            <div class="services-box">

                                <h5><a href="/ru/dep/?id=<?= $state->id ?>"><?= $state->name ?></a></h5>

                            </div>
                            <? endforeach; ?>
                           

                        </div>

	
				
				<div class="long_space"></div>	
				
			</div>
			
		</div>
	</div>
	
<div class="long_space"></div>				