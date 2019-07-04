<?php

use Cake\ORM\TableRegistry;
$admins_table = TableRegistry::get('Admins');

$admins = $admins_table->find();
?>


<div class="long_space"></div>

<?php include('menu.php'); ?>

    <div class="main-block">

    	<div class="one-whole">
		
		
			<div class="box">
                <div class="col-lg-12">

                    <h3>Администрация</h3> 

                </div>
            </div>


	        <div class="box">
		
					<div class="long_space"></div>	
					
					<h4>Администрация ГКП на ПХВ «Центральная городская клиническая больница»</h4>		
					
					<div class="long_space"></div>					
							
                        <div class="admin_block">
                        <?php 
                        foreach ($admins as $admin):
                        ?>                   
                            <div class="admin_box">
                                <img class="img-thumbnail" alt="" src="<?= $admin->img ?>" />
								<h5><?= $admin->name ?></h5>
								<span><?= $admin->text ?></span>
								
							</div>
						<?php endforeach; ?>	
				
				</div>
					
			</div>
			
		</div>
	</div>
	
<div class="long_space"></div>