<?php 
/**
 * @package     Joomshopping Clothes Fitting
 *
 * @copyright   Copyright (C) 2019 Joomcar extensions. All rights reserved.
 * @license     GNU General Public License version 2 or later.
 */

// no direct access
defined('_JEXEC') or die('Restricted access');

JHtml::_('jquery.framework');

$path = JURI::root(true) . '/modules/mod_jshopping_clothes_fitting/assets/';

$document = JFactory::getDocument();
$document->addStyleSheet(JURI::root(true)."/modules/mod_jshopping_clothes_fitting/tmpl/{$getTemplate}/assets/filter.css?t=".time());
$document->addScript(JURI::root(true)."/modules/mod_jshopping_clothes_fitting/tmpl/{$getTemplate}/assets/clothes.js?t=".time());

$categories = $helper->buildTreeCategory();

?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" integrity="sha256-UK1EiopXIL+KVhfbFa8xrmAWPeBjMVdvYMYkTAEv/HI=" crossorigin="anonymous" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css" integrity="sha256-4hqlsNP9KM6+2eA8VUT0kk4RsMRTeS7QGHIM+MZ5sLY=" crossorigin="anonymous" />

<div id="JsClothesFittingContainer<?php echo $module->id; ?>" class="JsClothesFittingContainer <?php echo $moduleclass_sfx; ?>">
	<div class="clothes-select clothes-select-top">
		<label>
			<?php echo JText::_("MOD_JSHOP_CLOTHES_CHOOSE_TOP"); ?>
			<select name="category[]">
				<option value=""> - </option>
				<?php foreach($categories as $category) { ?>
				<option value="<?php echo $category->category_id; ?>"><?php echo $category->name; ?></option>
				<?php } ?>
			</select>
		</label>
		<div class="clothes-list clothes-list-top">
			<div class="slider-container">
				<div class="slider-wrapper"></div>
			</div>
			<div class="loading"><img src="<?php echo JURI::root(true)."/modules/mod_jshopping_clothes_fitting/tmpl/{$getTemplate}/assets/img/loading.png"; ?>" alt="loading" /></div>
		</div>
	</div>
	
	<div class="human-figure">
		<div class="clothes-place-top"></div>
		<img src="<?php echo JURI::root(true)."/modules/mod_jshopping_clothes_fitting/tmpl/{$getTemplate}/assets/img/women1.png"; ?>" alt="human figure" />
		<div class="clothes-place-bottom"></div>
	</div>
	
	<div class="clothes-select clothes-select-bottom">
		<label>
			<?php echo JText::_("MOD_JSHOP_CLOTHES_CHOOSE_BOTTOM"); ?>
			<select name="category[]">
				<option value=""> - </option>
				<?php foreach($categories as $category) { ?>
				<option value="<?php echo $category->category_id; ?>"><?php echo $category->name; ?></option>
				<?php } ?>
			</select>
		</label>
		<div class="clothes-list clothes-list-bottom">
			<div class="slider-container">
				<div class="slider-wrapper"></div>
			</div>
			<div class="loading"><img src="<?php echo JURI::root(true)."/modules/mod_jshopping_clothes_fitting/tmpl/{$getTemplate}/assets/img/loading.png"; ?>" alt="loading" /></div>
		</div>
	</div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js" integrity="sha256-NXRS8qVcmZ3dOv3LziwznUHPegFhPZ1F/4inU7uC8h0=" crossorigin="anonymous"></script>
