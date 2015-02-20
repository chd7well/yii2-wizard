<?php
/*
 * This file is part of the chd7well project.
 *
 * (c) chd7well project <http://github.com/chd7well/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace chd7well\wizard;
use Yii;
/**
* @author Christian Dumhart <christian.dumhart@chd.at>
*/
class WizardAsset extends \kartik\base\AssetBundle
{
public $depends = [
'yii\web\YiiAsset',
'yii\bootstrap\BootstrapAsset',
'yii\bootstrap\BootstrapPluginAsset',
];

public function init()
{
$this->setSourcePath('@vendor/chd7well/bootstrap-wizard');
//$this->setupAssets('css', ['css/bootstrap-popover-x']);
$this->setupAssets('js', ['jquery.bootstrap.wizard']);
parent::init();
}
}