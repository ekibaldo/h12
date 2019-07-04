<?php

use Cake\ORM\TableRegistry;
$categories_table = TableRegistry::get('Categories');
$pages_table = TableRegistry::get('Pages');

$categories = $categories_table->find()->order(['position'=>'ASC']);


?>


<div class="row">           
  <div class="main-navbar hide-in-mobile">   
      <ul>
                                     
<?php

foreach ($categories as $category):

$pages = $pages_table
        ->find()
        ->where(['category_id'=>$category->id])
        ->order(['position'=>'ASC'])
        ->toList();

if(count($pages) > 0){
  $class = "dropdown";
}else{
  $class = "";
}



?>        

        <li class="<?= $class ?>">
          <a href="<?= $category->link_ru ?>" class="dropbtn"><?= $category->title_ru ?></a>
          <div class="dropdown-content">
          
          <?php foreach ($pages as $page):?>
            <a href="/ru/page?id=<?= $page->id ?>"><?= $page->title_ru ?></a>
          <?php endforeach; ?>
          </div>
        </li>
<?php  

endforeach;

?>                 
      

      </ul>          
     

  </div>
</div>
        



<div class="overlay">
    <div class="wrap">
        <ul class="wrap-nav">
            <li>
        <a class="my-logo" href="/"><img src="/images/logo.png" height="80"></a>
      </li>
            
            <?php foreach ($categories as $category): 
            $pages = $pages_table
                ->find()
                ->where(['category_id'=>$category->id])
                ->order(['position'=>'ASC'])
                ->toList();

            ?>

            <li><a class="mainpoint"><?= $category->title_ru ?></a>
            <?php if(count($pages) > 0){ ?>  

            <ul>
                <?php foreach ($pages as $page):?>
                <li><a href="/ru/page?id=<?= $page->id ?>"><?= $page->title_ru ?></a></li>  
                <?php endforeach; ?>
            </ul>
            
            <? } ?>
            <?php endforeach; ?>           
    </div>
</div>
      





<div class="long_space"></div>
        