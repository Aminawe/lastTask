<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $sourcePath = '@app/themes/adminlte/';
    public $css = [
        'css/site.css',
        'dist/css/AdminLTE.css',
        'bower_components/font-awesome/css/font-awesome.min.css',
        'bower_components/ionicons/css/ionicons.min.css',
        'dist/css/skins/_all-skins.min.css',

    ];
    public $js = [
        'dist/js/adminlte.min.js',
        'plugins/iCheck/iCheck.min.js',
        'plugins/jQueryUI/jquery-ui.min.js',
        'dist/js/demo.js',
        
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}
