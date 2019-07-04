<?php
use Cake\ORM\TableRegistry;
$servs_table = TableRegistry::get('Servs');

$servs = $servs_table->find();

$title = "Поиск услуги в прейскуранте";
$this->assign('title', $title);

?>

<div class="long_space"></div>

<?php include('menu.php'); ?>

    <div class="main-block">

    	<div class="one-whole">
		
		
			<div class="box">
                <div class="col-lg-12">

                    <h3>Прейскурант</h3> 

                </div>
            </div>
			

	        <div class="box">
			          
				<div class="small_space"></div>
				
				
			     <div class="row">
                    <div class="col-lg-12">


						<h2>Поиск услуги в прейскуранте:</h2>
                        <?php
                        if(isset($_GET['search'])){
                            $get = $_GET['search'];
                        }else{
                            $get = "";
                        }

                        ?>

                        <input type="search" id="search" value="<?= $get ?>" class="form-control" placeholder="Введите наименование услуги...">
                    </div>
                </div>
				
						<div class="row">
                            <div class="col-lg-12">
                                <table class="table" id="table">
                                    <thead>
                                        <tr>
                                            <th>Наименование услуг</th>
                                            <th>Единица измерения</th>
                                            <th>Сумма (тг.)</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    <?php foreach ($servs as $serv): ?>     
                                      <tr>
                                            <td><?= $serv->name ?></td>
                                            <td style="width: 16%;"><?= $serv->type ?></td>
                                            <td style="width: 10%;"><?= $serv->price ?></td>
                                        </tr>
                                    <?php endforeach; ?>    

                                    </tbody>
                                </table>
                                <hr>
                            </div>
                        </div>
			
				
				
				
				
				<div class="long_space"></div>	
				
			</div>
			
		</div>
	</div>
	
<div class="long_space"></div>				