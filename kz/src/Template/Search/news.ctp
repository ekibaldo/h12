<?php
use Cake\ORM\TableRegistry;
$news_table = TableRegistry::get('Ad_news');



if(isset($_GET['search'])){
    $get = $_GET['search'];
}else{
    $get = "";
}


$news = $news_table->find()->where(['title_ru LIKE'=> "%".$get."%"]);

//->orWhere(['text LIKE'=> "%".$get."%"])


$title = "Поиско по новостям";
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


						<h2>Поиск по новостному разделу</h2>

                        <div class="row my-search-box">              
                            <form action="/ru/search/news/" method="GET">    
                                <input type="search" name="search" value="<?= $get ?>" placeholder="Введите слово или фразу">
                                <input type="submit" value="Искать">
                            </form>             
                        </div>

                    </div>
                </div>
				

                        <div class="hr"></div>
<? foreach ($news as $new): ?>		
                        <div class="my-news clear">
                            <div class="news-box">
                                <div class="news-img">
                                    <img src="../<?= $new->img ?>" />
                                </div>
                                <div class="news-block">
                                    <h5><a href="/ru/news/page?id=<?= $new->id ?>"><?= $new->title_ru ?></a></h5>
                                    <data><?= $new->date ?></data>                                
                                    <p><?= mb_substr($new->text_ru,0, 250, "UTF-8") ?>   </p>
                                </div>
                            </div>
<?php endforeach; ?>
  
                                        

                         </div>

	
				
				<div class="long_space"></div>	
				
			</div>
			
		</div>
	</div>
	
<div class="long_space"></div>				