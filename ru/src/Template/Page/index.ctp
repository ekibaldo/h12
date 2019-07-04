<?php

use Cake\ORM\TableRegistry;
$pages_table = TableRegistry::get('pages');

$id = $_GET['id'];

$pages = $pages_table
			->find()
			->where(['id'=>$id])
			->toList();

$title = $pages[0]['title_ru'];
$text = $pages[0]['text_ru'];

$this->assign('title', $title);


?>
<div class="long_space"></div>
<?php include('menu.php'); ?>


<div class="main-block">
    <div class="one-whole">
				
        <h3><?= $title ?></h3> 
 		<div class="my-box">
		<?= $text ?>        	
        </div>
	
	</div>
</div>

<div class="long_space"></div>