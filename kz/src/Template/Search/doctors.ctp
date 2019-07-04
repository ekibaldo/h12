<?php
use Cake\ORM\TableRegistry;
$doctors_table = TableRegistry::get('Doctors');
$states_table = TableRegistry::get('States');



if(isset($_GET['search'])){
    $get = $_GET['search'];
}else{
    $get = "";
}


$doctors = $doctors_table->find()->where(['name LIKE'=> "%".$get."%"]);


$title = "Поиск по специалистам";
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


						<h2>Поиск специалиста</h2>

						<div class="row my-search-box">              
                            <form action="/ru/search/doctors/" method="GET">    
                                <input type="search" name="search" value="<?= $get ?>" placeholder="Введите имя специалиста...">
                                <input type="submit" value="Искать">
                        	</form>             
                        </div>

                    </div>
                </div>
				
		
						<div class="hr"></div>

						<div class="doctors">

 						<div class="small_space"></div>     
                        <?php foreach ($doctors as $doctor): ?>
                            <div class="doc_box">
                                <img class="img-thumbnail" src="<?= "../".$doctor->img ?>" /> 
                                <h5><?= $doctor->name ?><h5> 
                                <span><?= $doctor->text ?></span>
                              
                                <?php
                                    $states = $states_table->find()->where(['id'=> $doctor->state_id ])->toList();
                                ?>

                                <h6><a href="/ru/dep/?id=<?= $states[0]['id'] ?>"><?= $states[0]['name'] ?></a></h6>
                            </div>
                        <?php endforeach; ?>                   
                            
                            
                        </div>
		
			
				
				
				<div class="long_space"></div>	
				
			</div>
			
		</div>
	</div>
	
<div class="long_space"></div>				