<?php
use Cake\ORM\TableRegistry;
$news_table = TableRegistry::get('AdNews');

$id = $_GET['id'];

$news = $news_table
    ->find()
    ->where(['id'=>$id]);



?>

<div class="long_space hide-in-mobile"></div>

<?php include('menu.php'); ?>
        

<div class="main-block">

	<?php foreach ($news as $new): ?>
    <?php
        $title = $new->title_kz;
        $this->assign('title', $title);
    ?>

    <div class="one-whole">
        
        <div class="box">
            
            <span><a href="/kz/">Басты бет</a> / <a href="/kz/news/">Жаңалықтар</a> / <?= $new->title_kz ?></span>

        </div>


        <div class="box my-news">

            <div class="box">
                <h2><?= $new->title_kz ?></h2>
            </div>

            <div class="new-box">


                <div class="news-img">
                    <img src="<?= $new->img ?>" />
                </div>

                <div class="new-block">
                	<data><?= $new->date ?></data>	
                </div>

            </div>

            <div class="new-box-more">

            	<?= $new->text_kz ?>

            </div>
        	<? endforeach; ?>


            <div class="long_space"></div>


            <!--
            <div class="box">

                <ul class="pager">
                    <li class="previous"><a href="#">&larr; Предыдущая новость</a></li>
                    <li class="next"><a href="#">Следующая новость &rarr;</a></li>
                </ul>

            </div>
    		-->

        </div>

  
        

    </div>
	

</div>

<div class="long_space hide-in-mobile"></div>
