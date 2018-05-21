<?php
/**
 * @version    2.7.x
 * @package    K2
 * @author     JoomlaWorks http://www.joomlaworks.net
 * @copyright  Copyright (c) 2006 - 2016 JoomlaWorks Ltd. All rights reserved.
 * @license    GNU/GPL license: http://www.gnu.org/copyleft/gpl.html
 */

// no direct access
defined('_JEXEC') or die;

// Define default image size (do not change)
K2HelperUtilities::setDefaultImage($this->item, 'itemlist', $this->params);
$extraFields = $this->item->extra_fields;
//print_r($extraFields);
	foreach ($extraFields as $extrafield) {
		//echo $extrafield->value . "<br />";
		if ($extrafield->alias == 'logo') $xImage = $extrafield->value;
	}
?>

<!-- Start K2 Item Layout -->
<div class="cat-ItemView tags <?php if($this->item->params->get('pageclass_sfx')) echo ' ' . $this->item->params->get('pageclass_sfx')?>" data-uk-filter="<?php echo $this->item->tags[0]->name ?>">
	<div class="uk-panel uk-panel-box uk-panel-hover uk-flex uk-flex-column uk-flex-space-between">
		<figure class="uk-overlay uk-overlay-hover brand-logo center">
			<?php if($this->item->params->get('catItemImage') && !empty($this->item->image)){ ?>
				<img src="<?php echo $this->item->image; ?>" alt="<?php if(!empty($this->item->image_caption)) echo K2HelperUtilities::cleanHtml($this->item->image_caption); else echo K2HelperUtilities::cleanHtml($this->item->title); ?>" style="width:<?php echo $this->item->imageWidth; ?>px; height:auto;" />
			<?php } else { ?>
				<a class="center" href="<?php echo $this->item->link; ?>">
					<?php echo $xImage ?>
				</a>
			<?php }
			?>
		</figure>
		</div>
	</div>
<!-- End K2 Item Layout -->
<script>
	jQuery(document).ready(function() {
		jQuery('.brand-logo img').addClass('uk-overlay-scale');
	})
</script>
