<?php
use Cake\ORM\TableRegistry;
$states_table = TableRegistry::get('States');
$doctors_table = TableRegistry::get('Doctors');
$servs_table = TableRegistry::get('Servs');

$this->assign('title', "Отделения");

if(isset($_GET['id'])){
    $id = $_GET['id'];
}else{

    $states = $states_table
        ->find()
        ->order(['position' => 'ASC'])
        ->Limit(1)
        ->toList();
   
    $id = $states[0]->id;

}


$states = $states_table
    ->find()
    ->where(['id'=>$id])
    ->order(['position' => 'ASC']);


$states_all = $states_table
    ->find()
    ->order(['position' => 'ASC']);


$doctors = $doctors_table
    ->find()
    ->where(['state_id'=>$id])
    ->order(['position' => 'ASC']);

$servs = $servs_table
    ->find()
    ->where(['state_id'=>$id]);

?>

<div class="long_space"></div>

<?php include('menu.php'); ?>

    <div class="main-block">

    	<div class="one-quarter">

            <div class="box">
                
                <h3>Отделения</h3>

            <div class="long_space"></div>

            </div>

            <div class="box column">
                <?php foreach ($states_all as $state):?>
                <?php
                
                if($id == $state->id) {
                    $active_state = "style='color:#DC4C39;'";
                    $bread_bump = $state->name_kz;
                    $stat_text = $state->text_kz;
                }else{
                    $active_state = "";
                }

                ?>    

                <b><a href="?id=<?= $state->id ?>" <?= $active_state ?>><?= $state->name_kz ?></a></b>

                <?php endforeach; ?>
            </div>
    	 
    	
    	</div>

        <div class="three-quarters">
            
            <div class="box">
                
                <span><a href="/kz/">Главная</a> / Отделения / <?= $bread_bump ?></span>
                <?php $this->assign('title', $bread_bump); ?>
            </div>

            <div class="box my-tabs">
                <ul class="nav-tab md-pills nav-justified pills-secondary">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#panel11" role="tab">Об отделении</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#panel12" role="tab">Специалисты</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#panel13" role="tab">Прейскурант</a>
                    </li>
                </ul>

                 <!-- Tab panels -->
                <div class="tab-content">

                    <!--Panel 1-->
                    <div class="tab-pane fade in active" id="panel11" role="tabpanel">
                        <br>

                        <?= $stat_text ?>

                    </div>
                    <!--/.Panel 1-->

                    <!--Panel 2-->
                    <div class="tab-pane fade" id="panel12" role="tabpanel">
                        <br>

                        <div class="doctors">
                        <?php foreach ($doctors as $doctor): ?>                   
                            <div class="doc_box">
                                <img class="img-thumbnail" src="<?= $doctor->img ?>" alt="doc-1" /> 
                                <h5><?= $doctor->name_kz ?><h5> 
                                <span><?= $doctor->text_kz ?></span>
                            </div>
                        <?php endforeach; ?>    
                        </div>

                    </div>
                    <!--/.Panel 2-->

                    <!--Panel 3-->
                    <div class="tab-pane fade" id="panel13" role="tabpanel">
                        <br>

                    <div class="row">
                        <div class="col-lg-12">
                            <label>Поиск услуги в прейскуранте:</label> <input type="search" id="search" value="" class="form-control" placeholder="Введите наименование услуги...">
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
                                    <td><?= $serv->name_kz ?></td>
                                    <td><?= $serv->type ?></td>
                                    <td><?= $serv->price ?></td>
                                </tr>

                                <?php endforeach; ?>

                                </tbody>
                            </table>
                            <hr>
                        </div>
                    </div>

                    </div>
                    <!--/.Panel 3-->

                </div>
      
            </div>

        </div>
    	

</div>

<div class="long_space"></div>
