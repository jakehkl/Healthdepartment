<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'css/bootstrap.min.css',
        'css/font-awesome.min.css',
        'css/prettyPhoto.css',
        'css/flexslider.css',
        'css/icons.css',
        'css/main.css',
        'css/animate.css',
        'css/yummi-loader.css',
        'css/styleswitcher.css',
    ];
    public $js = [
        'js/modernizr-2.6.2-respond-1.1.0.min.js',
        'js/jquery-1.10.2.min.js',
        'js/jquery-ui.js',
       'js/jquery.queryloader2.js',
   'js/bootstrap.min.js',
   'js/twitter-bootstrap-hover-dropdown.min.js',
   'js/jquery.carouFredSel-6.2.1.js',
   'js/jquery.touchSwipe.min.js' ,
   'js/jquery.prettyPhoto.js',
   'js/jquery.flexslider-min.js',
   'js/waypoints.min.js',
   'js/jquery.stellar.min.js',
    
   'js/imagesloaded.pkgd.min.js' ,
   'js/masonry.pkgd.min.js' ,
   'js/SmoothScroll.js'  ,
    
   'js/main.js',
   'js/styleswitcher.js',
        
        ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
