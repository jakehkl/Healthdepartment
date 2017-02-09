<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use frontend\wiget\header;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body  class="off" style="font-family:Phetsarath OT">
<?php $this->beginBody() ?>
     <div id="mukam-layout">

         
        <section class="mukam-waypoint" data-animate-down="mukam-header-small header-1" data-animate-up="mukam-header-large header-1">
     <div>
  <div class="bg-color grey fadein scaleInv anim_2">
      <div class="container">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
    
      <!-- Wrapper for slides -->
      <div class="carousel-inner">
      
        <div class="item active">
            <img src="img/Image/Office/b1.JPG" style="width: 100%;height: 350px">
           
        </div><!-- End Item -->
 
         <div class="item">
             <img src="img/Image/All/2.JPG" style="width: 100%;height: 350px">
           
        </div><!-- End Item -->
        
        <div class="item">
            <img src="img/Image/All/b2.png" style="width: 100%;height: 350px">
           
        </div><!-- End Item -->
        
        <div class="item">
            <img src="img/Image/Baby/ll1.png" style="width: 100%;height: 350px">
          
        </div><!-- End Item -->
                
      </div><!-- End Carousel Inner -->


    	<ul class="nav nav-pills ">
          <li data-target="#myCarousel" data-slide-to="0" class="active"><a href="#">1</a></li>
          <li data-target="#myCarousel" data-slide-to="1"><a href="#">2</a></li>
          <li data-target="#myCarousel" data-slide-to="2"><a href="#">3</a></li>
          <li data-target="#myCarousel" data-slide-to="3"><a href="#">4</a></li>
        </ul>


    </div>
   
  </div>
         <div class="container" style="font-family:Phetsarath OT">
             <div class="row">
                 
                 <br>
  
           
                 
                 <div class="col-md-12">
                     
                     
                          
                     <div class="row" style="padding-left: 0px">
                         <h3 class="fadeInLeft-1 blind animated"> <span>Activities</span></h3>
                         <div class=" blog-wrapper">
                         <div class="blog-style-3">
						<div class="blog-sizer"></div>
                                                <article class="blog-item">
							<div class="blog-thumbnail">
                                                            <img src="img/Image/Office/SAM_0821.JPG" alt="mukam">
							<div class="blog-date"><p class="day">26</p><p class="monthyear">FEB 2014</p></div>
							<div class="blog-type-logo"><div class="half-round"><i class="mukam-image"></i></div></div>
							</div>
							<div class="blog-content">
							<h4 class="blog-title"><a href="#">Simple Post</a></h4>
							<p class="blog-meta">By: <a href="#">admin</a> </p>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nec eros eget nisl fringilla commodo. Maecenas ornare, augue ut ultricies tristique, enim lectus pretium quam, quis bibendum metus tellus sed magna. Donec eu dolor [...]</p>
							<span class="buton b_inherit buton-2 buton-mini"><a href="blog-single.html">READ MORE</a></span>
							</div>
						</article>
                                                  <article class="blog-item">
							<div class="blog-thumbnail">
                                                            <img src="img/Image/fever/IMG_2479.JPG" alt="mukam">
							<div class="blog-date"><p class="day">26</p><p class="monthyear">FEB 2014</p></div>
							<div class="blog-type-logo"><div class="half-round"><i class="mukam-image"></i></div></div>
							</div>
							<div class="blog-content">
							<h4 class="blog-title"><a href="#">Simple Post</a></h4>
							<p class="blog-meta">By: <a href="#">admin</a> </p>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nec eros eget nisl fringilla commodo. Maecenas ornare, augue ut ultricies tristique, enim lectus pretium quam, quis bibendum metus tellus sed magna. Donec eu dolor [...]</p>
							<span class="buton b_inherit buton-2 buton-mini"><a href="blog-single.html">READ MORE</a></span>
							</div>
						</article>
                                                  <article class="blog-item">
							<div class="blog-thumbnail">
                                                            <img src="img/Image/All/2.JPG" alt="mukam">
							<div class="blog-date"><p class="day">26</p><p class="monthyear">FEB 2014</p></div>
							<div class="blog-type-logo"><div class="half-round"><i class="mukam-image"></i></div></div>
							</div>
							<div class="blog-content">
							<h4 class="blog-title"><a href="#">Simple Post</a></h4>
							<p class="blog-meta">By: <a href="#">admin</a> </p>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nec eros eget nisl fringilla commodo. Maecenas ornare, augue ut ultricies tristique, enim lectus pretium quam, quis bibendum metus tellus sed magna. Donec eu dolor [...]</p>
							<span class="buton b_inherit buton-2 buton-mini"><a href="blog-single.html">READ MORE</a></span>
							</div>
						</article>
                                                 <article class="blog-item">
							<div class="blog-thumbnail">
                                                            <img src="img/Image/Office/b1.JPG" alt="mukam">
							<div class="blog-date"><p class="day">26</p><p class="monthyear">FEB 2014</p></div>
							<div class="blog-type-logo"><div class="half-round"><i class="mukam-image"></i></div></div>
							</div>
							<div class="blog-content">
							<h4 class="blog-title"><a href="#">Simple Post</a></h4>
							<p class="blog-meta">By: <a href="#">admin</a> </p>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nec eros eget nisl fringilla commodo. Maecenas ornare, augue ut ultricies tristique, enim lectus pretium quam, quis bibendum metus tellus sed magna. Donec eu dolor [...]</p>
							<span class="buton b_inherit buton-2 buton-mini"><a href="blog-single.html">READ MORE</a></span>
							</div>
						</article>
                                               
				  </div>
                             <p style="text-align: right"><a>View All</a></p>
                              
                         </div>
                         
                         </div>
                      <div class="col-md-9">
            <div class="blog-widget ">
              <h3 class="fadeInLeft-1 blind animated">Latest <span>News</span></h3>
              <article class="fadeInLeft-1 blind latest-post animated">
                <div class="post-date">
  <p class="post-day">21</p>
                  <p class="post-month">May</p>
                </div>
                <div class="post-content">
                  <h3>Lipsum is Simply Dummy Text</h3>
                  <i class="mukam-comments pull-left"></i><p class="comments">11 Comments</p>
                  <p class="post-intro">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry. it to make a type specimen book. It has survived into electronic typesetting Graphic Design Power of all web design. <a href="#">Read more</a></p>
                </div>
              </article><div class="clearfix"></div>
              <article class="fadeInLeft-1 blind latest-post animated">
                <div class="post-date">
                 <p class="post-day">13</p>
                  <p class="post-month">May</p>
                </div>
                <div class="post-content">
                  <h3>Lipsum is Simply Dummy Text</h3>
                  <i class="mukam-comments pull-left"></i><p class="comments">23 Comments</p>
                  <p class="post-intro">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry. it to make a type specimen book. It has survived into electronic typesetting Graphic Design Power of all web design. <a href="#">Read more</a></p>
                </div>
              </article><div class="clearfix"></div>
              <article class="fadeInLeft-1 blind latest-post animated">
                <div class="post-date">
                 <p class="post-day">12</p>
                  <p class="post-month">May</p>
                </div>
                <div class="post-content">
                  <h3>Lipsum is Simply Dummy Text</h3>
                  <i class="mukam-comments pull-left"></i><p class="comments">6 Comments</p>
                  <p class="post-intro">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry. it to make a type specimen book. It has survived into electronic typesetting Graphic Design Power of all web design. <a href="#">Read more</a></p>
                </div>
              </article><div class="clearfix"></div>
            </div>
                          <span class="buton b_inherit buton-2 buton-mini"><a href="blog-single.html">View All</a></span>
          </div>
                     <div class="col-md-3">
                          <div class="sidebar-widget">
                <h3><span>Recent</span> Posts</h3>
                <div class="popular-post-widget">
                <article class="popular-post">
                    <img src="img/Image/Office/SAM_0846.JPG" alt="mukam">
                <h6><a href="#">Sample Post with Standard Image & Video</a></h6>
                <p class="popular-date">Posted 13 September 2013</p>
                <p class="popular-author">By: <a href="#">Admin</a></p>
                </article>
                <article class="popular-post">
                    <img src="img/Image/Office/SAM_0834.JPG" alt="mukam">
                <h6><a href="#">Sample Post with Standard Image & Video</a></h6>
                <p class="popular-date">Posted 13 September 2013</p>
                <p class="popular-author">By: <a href="#">Admin</a></p>
                </article>
                <article class="popular-post">
                    <img src="img/Image/Office/SAM_0827.JPG" alt="mukam">
                <h6><a href="#">Sample Post with Standard Image & Video</a></h6>
                <p class="popular-date">Posted 13 September 2013</p>
                <p class="popular-author">By: <a href="#">Admin</a></p>
                </article>
                     <article class="popular-post">
                         <img src="img/Image/fever/IMG_2479.JPG" alt="mukam">
                <h6><a href="#">Sample Post with Standard Image & Video</a></h6>
                <p class="popular-date">Posted 13 September 2013</p>
                <p class="popular-author">By: <a href="#">Admin</a></p>
                </article> 
                     <article class="popular-post">
                         <img src="img/Image/fever/IMG_2470.JPG" alt="mukam">
                <h6><a href="#">Sample Post with Standard Image & Video</a></h6>
                <p class="popular-date">Posted 13 September 2013</p>
                <p class="popular-author">By: <a href="#">Admin</a></p>
                </article> 
                </div>            
            </div>
                 </div>
                 
                 
                 
                 
                  
                 
             </div>
         </div>
    
    
    
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="latestwork">
              <h3>Our <span>Gallery</span></h3>
              <div class="carousel-container">
                <ul id="carousellatest">
                  <li>
                    <div class="latest-item">
                        <div class="widget-thumb">
                            <img src="img/Image/fever/IMG_2479.JPG" alt="work">
                        <span class="overthumb"></span>
                        <div class="carousel-icon">
                            <a href="img/Image/fever/IMG_2479.JPG" data-rel="prettyPhoto" class="prettyPhoto lightzoom">
                            <i class="mukam-search"></i>
                            </a>
                            <a href="portfolio-detail.html" class="postlink">
                            <i class="mukam-link"></i>
                            </a>
                            </div>
                        </div>
                        <h4>System Admin</h4>
                        <p>and scrambled it to make a type It has Powerinto electronic typesetting.</p>
                    </div>
                  </li>
                  <li>
                    <div class="latest-item">
                        <div class="widget-thumb">
                            <img src="img/Image/Office/b1.JPG" alt="work">
                        <span class="overthumb"></span>
                        <div class="carousel-icon">
                            <a href="img/Image/Office/b1.JPG"" data-rel="prettyPhoto" class="prettyPhoto lightzoom">
                            <i class="mukam-search"></i>
                            </a>
                            <a href="portfolio-detail.html" class="postlink">
                            <i class="mukam-link"></i>
                            </a>
                            </div>
                        </div>
                        <h4>System Admin</h4>
                        <p>and scrambled it to make a type It has Powerinto electronic typesetting.</p>
                    </div>
                  </li>
                  <li>
                    <div class="latest-item">
                        <div class="widget-thumb">
                            <img src="img/Image/fever/IMG_2476.JPG" alt="work">
                        <span class="overthumb"></span>
                        <div class="carousel-icon">
                            <a href="img/Image/fever/IMG_2476.JPG" data-rel="prettyPhoto" class="prettyPhoto lightzoom">
                            <i class="mukam-search"></i>
                            </a>
                            <a href="portfolio-detail.html" class="postlink">
                            <i class="mukam-link"></i>
                            </a>
                            </div>
                        </div>
                        <h4>System Admin</h4>
                        <p>and scrambled it to make a type It has Powerinto electronic typesetting.</p>
                    </div>
                  </li>
                  <li>
                    <div class="latest-item">
                        <div class="widget-thumb">
                            <img src="img/Image/Baby/Presentation10.jpg" alt="work">
                        <span class="overthumb"></span>
                        <div class="carousel-icon">
                            <a href="img/Image/Baby/Presentation10.jpg" data-rel="prettyPhoto" class="prettyPhoto lightzoom">
                            <i class="mukam-search"></i>
                            </a>
                            <a href="portfolio-detail.html" class="postlink">
                            <i class="mukam-link"></i>
                            </a>
                            </div>
                        </div>
                        <h4>System Admin</h4>
                        <p>and scrambled it to make a type It has Powerinto electronic typesetting.</p>
                    </div>
                  </li>
                </ul>
                <div class="clearfix"></div>
                <a class="prev" href="#"><span><i class="icon-angle-left icon-3x"></i></span></a>
                <a class="next" href="#"><span><i class="icon-angle-right icon-3x"></i></span></a>
      
              </div>
            </div>
              
              
             
    <div class="full-image-gallery">
    <ul id="full-carousel">
        <li><img src="img/Image/Office/SAM_0819.JPG" alt="mukam"></li>
        <li><img src="img/Image/Office/SAM_0821.JPG" alt="mukam"></li>
        <li><img src="img/Image/Office/SAM_0824.JPG" alt="mukam"></li>
        <li><img src="img/Image/Office/SAM_0850.JPG" alt="mukam"></li>
        <li><img src="img/Image/Office/SAM_0830.JPG" alt="mukam"></li>
        <li><img src="img/Image/Office/SAM_0836.JPG" alt="mukam"></li>
        <li><img src="img/Image/Office/SAM_0833.JPG" alt="mukam"></li>
        <li><img src="img/Image/Office/SAM_0835.JPG" alt="mukam"></li>
        <li><img src="img/Image/Office/SAM_0828.JPG" alt="mukam"></li>
        <li><img src="img/Image/Office/SAM_0827.JPG" alt="mukam"></li>
    </ul>
  </div>
          </div>
        </div>
          
          
      </div>
   

    
</div>   
    


</section>
      
     </div>


<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
