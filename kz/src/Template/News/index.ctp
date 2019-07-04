<?php
use Cake\ORM\TableRegistry;
$news_table = TableRegistry::get('AdNews');



$items_count = $news_table->find()->count();
$news = $news_table
    ->find()
    ->order(['date' => 'DESC']);


$title = "Новости";
$this->assign('title', $title);


?>

<div class="long_space"></div>

<?php include('menu.php'); ?>
    

<div class="main-block">

            <div class="one-whole">
                
                <div class="box">
                    
                    <span><a href="/kz/">Басты бет</a> / <a href="/kz/news/">Жаңалықтар</a> </span>

                </div>


                <div class="box my-news">

                    <?php foreach ($news as $new): ?>
                    <div class="news-box">

                        <div class="news-img">
                            <img src="<?= $new->img ?>" />
                        </div>

                        <div class="news-block">
                        <data><?= $new->date ?></data>
                        <h5><a href="page?id=<?= $new->id ?>"><?= $new->title_kz ?></a></h5>
                          <div class="my-newprev"> <? $clear = trim(preg_replace('/ +/', ' ', urldecode(html_entity_decode(strip_tags(mb_substr($new->text_kz, 0,2500,'UTF-8')."..."))))) ?></div>

                        </div>

                    </div>
                    <?php endforeach; ?>
                    

                </div>

                <div class="long_space"></div>


<!--
                <div class="box">

                       <ul class="pagination">
                            <li class=""><a href="?offset=<?= $back_p ?>">&laquo;</a></li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="?offset=<?= $next_p ?>">&raquo;</a></li>
                        </ul>

                </div>        
-->


            </div>

      
            

        </div>
        
    
    

    <div class="long_space hide-in-mobile"></div>
        