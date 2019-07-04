<?php

use Cake\ORM\TableRegistry;
$Ad_slider1 = TableRegistry::get('Ad_slider1');
$slides1 = $Ad_slider1->find()->order(['position'=>'ASC']);

$url = "http://".$_SERVER['SERVER_NAME']."/";

$Ad_slider3 = TableRegistry::get('Ad_slider3');
$slides3 = $Ad_slider3
            ->find()
            ->order(['position'=>'ASC']);


$news_table = TableRegistry::get('AdNews');
$news = $news_table
    ->find()
    ->Limit(4)
    ->order(['date' => 'DESC']);


$states_table = TableRegistry::get('States');
$states = $states_table
            ->find()
            ->order(['position'=>"ASC"]);    

$states_table2 = TableRegistry::get('States2');
$states2 = $states_table2
            ->find()
            ->order(['position'=>"ASC"]);    




$url = "http://".$_SERVER['SERVER_NAME']."/";
$title = file_get_contents($url."/globals/title_ru.txt");

$this->assign('title', $title);


?>


        <div class="row">
            <div class="slider-border hide-in-mobile bvi-hide"></div>
            <div class="slider bvi-hide">
                      <!-- Swiper -->
                  <div class="swiper-container">

                    <div class="swiper-wrapper">
                      
                      <?php foreach ($slides1 as $slide1): ?>
                      <div class="swiper-slide" style="background-image: url(<?= $slide1->img ?>); background-size: cover; "></div>
                      <?php endforeach; ?>  


                    </div>
                    <!-- Add Pagination -->
                    <div class="swiper-pagination"></div>
                    <!-- Add Arrows -->
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                  </div>
            </div>
            <div class="slider-border bottom hide-in-mobile"></div>
        </div>




        <?php
            include('menu.php');

        ?>

    
    <script type="text/javascript">
        var kostil = 740;
    </script>



















    <div class="main-block row" >

            <div class="two-thirds" id="my-states">

                <div class="box">


                    <div class="small_space"></div>

                        <div class="box-wrap">


                            <!-- New -->
                            <? foreach ($states as $state):  ?> 
                            <? if($state->block == 0 AND $state->img<>"") { ?> 
            
                                <div class="block">
                                    <a href="dep/?id=<?= $state->id ?>">
                                    <img src="<?= $state->img ?>" alt="image" tile="image" />
                                    <b><?= $state->name ?></b>
                                    </a>
                                </div>
                            
                            <? } ?>
                            <? endforeach; ?>

                            <!-- / New -->
























                            <h4>Бюджетные отделения</h4>

                  
                            <? foreach ($states as $state):  ?> 
                            <? if($state->block == 1 AND $state->img<>"") { ?> 
            
                                <div class="block">
                                    <a href="dep/?id=<?= $state->id ?>">
                                    <img src="<?= $state->img ?>" alt="image" tile="image" />
                                    <b><?= $state->name ?></b>
                                    </a>
                                </div>
                            
                            <? } ?>
                            <? endforeach; ?>

                       



                        <h4>Хозрасчётные отделения</h4>

                            <? foreach ($states as $state):  ?> 
                            <? if($state->block == 2 AND $state->img<>"") { ?> 
            
                                <div class="block">
                                    <a href="dep/?id=<?= $state->id ?>">
                                    <img src="<?= $state->img ?>" alt="image" tile="image" />
                                    <b><?= $state->name ?></b>
                                    </a>
                                </div>
                            
                            <? } ?>
                            <? endforeach; ?>



                     </div>
                </div>

                <div class="hr"></div>

                <div class="box">

                    <div class="box-wrap">

                        <h4>Платные услуги</h4>

                        <div class="small_space"></div>

                        		<? foreach ($states2 as $state2):  ?>         
            
            					<div class="block-c">
                                	<a href="<?= $state2->link ?>">
                                        <img src="<?= $state2->icon_link ?>" alt="image" tile="image" />
                                        <b><?= $state2->name_ru ?></b>
                                    </a>
                                </div>

                          
                        <? endforeach; ?>


                    </div>


                </div>
            </div>

            <div class="one-third">



                <div class="box">

                    <div class="long_space"></div>


                        <?= file_get_contents($url."/globals/contacts_ru.txt"); ?>

                </div>

                <div class="hr"></div>
              
                <div class="box">
					<!--
                    <a href="/ru/medser/price/?search=" title="Цены на медицинские услуги" alt="Цены на медицинские услуги"><img class="cost" src="/images/invoice.svg" alt="image" tile="image" /></a>

                    <a href="/ru/medser/price/?search=" title="Цены на медицинские услуги" alt="Цены на медицинские услуги"><h4>Цены на медицинские услуги</h4></a>
					-->
					<a href="http://almaty-cgkb.kz/uploads/fm/images/pricelist_2019.xlsx" title="Цены на медицинские услуги" alt="Цены на медицинские услуги"><img class="cost" src="/images/invoice.svg" alt="image" tile="image" /></a>
					<a href="http://almaty-cgkb.kz/uploads/fm/images/pricelist_2019.xlsx" title="Цены на медицинские услуги" alt="Цены на медицинские услуги"><h4>Цены на медицинские услуги</h4></a>

                </div>

                <div class="hr"></div>


  

                <div class="box">


                    <section>



                    <?php foreach ($news as $new): ?>
                    <div class="new">
                        <article>
                            <h6><a href="news/page?id=<?= $new->id ?>"><?= $new->title_ru ?></a></h6>
                            <div class="date"> 
                                <time><span><?= $new->date ?></span></time>
                            </div>                            
							<div class="my-newbox"><?= strip_tags(mb_substr($new->text_ru, 0,280,'UTF-8'))."..." ?></div>
                        </article> 
                    </div>
                    <?php endforeach; ?>



                    

                    <div class="show-more">
                       <a href="news/"> Открыть новостной раздел <img class="next" src="/images/next.svg"></a>
                    </div>               

                    </section>
                </div>

                <div class="hr"></div>

                <div class="box">
                    <h4>Руководитель больницы </h4>
                    <img class="cost" src="/uploads/fm/images/photo.jpg">
                    <h3>Джувашев Алмаз Болатович</h3>

                    <div class="small_space"></div>

                    <h6><a href="/ru/page?id=3" title="Биография" alt="Биография">Биография</a> &nbsp; | &nbsp; <a href="/ru/page?id=25" title="Задать вопрос" alt="Задать вопрос">Задать вопрос</a></h6>


                    <div class="small_space"></div>

                </div>
				
               <div class="hr hide-in-mobile bvi-hide"></div>	
				
                <div class="box hide-in-mobile" style="align-items: center;">
					
					<!-- InstaWidget -->
					<a href="https://instawidget.net/v/user/almaty.cgkb" id="link-7d89bf2f94041e902c35bb7c720331d2474e1103967573113cc8dfde0a6d3d43">@almaty.cgkb</a>
					<script src="https://instawidget.net/js/instawidget.js?u=7d89bf2f94041e902c35bb7c720331d2474e1103967573113cc8dfde0a6d3d43&width=360px"></script>
	
					<div class="fb-page" style="margin-left: -30px;" data-href="https://www.facebook.com/almaty.cgkb"  data-width="360" data-hide-cover="false" data-show-facepile="true"></div>				
	
                </div>				
				
				
				
            </div>
        </div>
        <div class="long_space"></div>
        
        <div class="slider-border hide-in-mobile"></div>

    <div class="row bvi-hide">

        <div id="Carousel" class="carousel slide hide-in-mobile">
            
                <!-- Carousel items -->
                <div class="carousel-inner">                   
                <?php 

                $slide_count = 0;
                $slide_step = 0;
                foreach ($slides3 as $slide3):            
                   if($slide_count == 0) {
                        $active_item = "active";
                    }else{
                        $active_item = "";
                    } 
                
                    $slid_new3 = preg_replace('/\.\.\//', '', $slide3->img);


                    if($slide_step == 0) echo "<div class='item ".$active_item."'><div class='slide-partners'>";
                ?>                                   
                    <a href="<?= $slide3->link_ru ?>" title = "<?= $slide3->text_ru ?>">
                        <img   src="<?= "../".$slid_new3 ?>" alt="Image">
                    </a>



                <?php 
                    $slide_count++;
                    $slide_step++;
                    if($slide_step>3){
                        echo "</div></div>";
                        $slide_step=0;
                    }
                    endforeach;
                   
                    if($slide_step<>0){
                        echo "</div></div>";              
                    }
                    //АХТУНГ!
                    //$slide_step - отвечает за кол- во выводимых записей в условие if($slide_step>4), выводится по 5
                ?> 
                
                </div><!--.carousel-inner-->
                  <a data-slide="prev" href="#Carousel" class="b-next"></a>
                  <a data-slide="next" href="#Carousel" class="b-prev"></a>
                </div><!--.Carousel-->
    </div>

    <div class="slider-border bottom hide-in-mobile"></div>


    <div class="long_space hide-in-mobile"></div>

	<div id="fb-root"></div>

	<script>
		
	(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = 'https://connect.facebook.net/ru_RU/sdk.js#xfbml=1&version=v2.12';
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));


     $(function () {
       $('[data-toggle="tooltip"]').tooltip()
     })


        kostil = 740;
    </script>
