<?php

namespace xutl\cropper;

use yii\web\AssetBundle;

/**
 * TypeAheadAsset
 *
 * @author Alexander Kochetov <creocoder@gmail.com>
 */
class CropperAsset extends AssetBundle
{
    public $sourcePath = '@vendor/xutl/yii2-cropper-asset/assets';

    public $css = [
        'cropper.min.css',
    ];

    public $js = [
        'cropper.min.js',
    ];

    public $depends = [
		'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];

}
