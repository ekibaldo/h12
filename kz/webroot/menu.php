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
          <a href="<?= $category->link_kz ?>" class="dropbtn"><?= $category->title_kz ?></a>
          <div class="dropdown-content">
          
          <?php foreach ($pages as $page):?>
            <?php if($page->link_kz<>""){ ?>
            <a href="<?= $page->link_kz ?>"><?= $page->title_kz ?></a>
            <? }else{ ?>
            <a href="/kz/page?id=<?= $page->id ?>"><?= $page->title_kz ?></a>
            <? } ?>
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

            <li><a href="<?= $category->link_kz ?>"><?= $category->title_kz ?></a>
            <?php if(count($pages) > 0){ ?>  

            <ul>
                <?php foreach ($pages as $page):?>
                <?php if($page->link_kz<>""){ ?>
                <li><a href="<?= $page->link_kz ?>"><?= $page->title_kz ?></a></li>
                <? }else{ ?>
                <li><a href="/kz/page?id=<?= $page->id ?>"><?= $page->title_kz ?></a></li>
                <? } ?> 
                <?php endforeach; ?>
            </ul>
            
            <? } ?>
            <?php endforeach; ?>           
    </div>
</div>
      





<div class="long_space"></div>
        