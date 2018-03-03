<?php

namespace GergeFreeman\alight;

use yii\web\AssetBundle;

/**
 * Class AngularAnimateAsset
 * @package m00nlighter\angular
 */
class AngularLightAsset extends AssetBundle
{
    /**
     * @var string
     */
    public $sourcePath = '@bower';

    /**
     * @var array
     */
    public $js = [
        'alight/alight.js'
    ];
}
