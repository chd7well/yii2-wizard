<?php

/*
 * This file is part of the 7well project.
 *
 * (c) 7well project <http://github.com/chd7well>
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

use yii\widgets\ActiveForm;
use yii\helpers\Html;

/**
 * @var yii\web\View $this
 */
?>
              	<div id="rootwizard<?=$aid?>">
					<div class="navbar">
					  <div class="navbar-inner">
					    <div class="container">
					<ul>
						<?php 
						$i = 1;
						foreach($tabs as $tab)
						{
							echo "<li><a href=\"#tab$i\" data-toggle=\"tab\">" . $tab['tabtitle'] . "</a></li>";
							$i++;
						}
						?>
					</ul>
					 </div>
					  </div>
					</div>
					<!-- <div id="bar" class="progress progress-striped active">
					  <div class="bar"></div>
					</div>-->
					<div  class="progress xs">
						<div id="bar<?=$aid?>" class="progress-bar progress-bar-green" style="width: 70%;"></div>
					</div>
					<div class="tab-content">
					<?php 
						$i = 1;
						foreach($tabs as $tab)
						{
							echo "<div class=\"tab-pane\" id=\"tab$i\">" . $tab['tabcontent'] . "</div>";
							$i++;
						}
						?>
						<ul class="pager wizard">
							<li class="previous first" style="display:none;"><a href="javascript:;">First</a></li>
							<li class="previous"><a href="javascript:;">Previous</a></li>
							<li class="next last" style="display:none;"><a href="javascript:;">Last</a></li>
						  	<li class="next"><a href="javascript:;">Next</a></li>
						</ul>
					</div>	
				</div>
				
				