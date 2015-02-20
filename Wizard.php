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
use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use chd7well\wizard\WizardAsset;

class Wizard extends \kartik\base\Widget
{

/**
* @inherit doc
*/
protected $_pluginName = 'wizard';


public $enableNavbar = true;
public $enableProgressbar = true;
public $tabs = [];
/**
* Initializes the widget
*/
public function init()
{
parent::init();
}
/**
* Renders the widget.
*/
public function run()
{
	$id = $this->id;
	echo $this->render('wizard', ['aid'=>$id, 'tabs'=>$this->tabs]);
	$this->registerAssets();
	
}

/**
* Registers the needed assets
*/
public function registerAssets()
{
	$id = $this->id;
$view = $this->getView();
$view->registerJs("jQuery('#rootwizard$id').bootstrapWizard({onTabShow: function(tab, navigation, index) {" . '
			var $total = navigation.find(\'li\').length;
			var $current = index+1;
			var $percent = ($current/$total) * 100;' . "
			$('#rootwizard$id').find('#bar$id').css({width:" . '$percent+\'%\'});
		}});');
WizardAsset::register($view);

}

}