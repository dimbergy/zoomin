<?php

// Media Width
$media_width = '{wk}-width-' . $settings['media_breakpoint'] . '-' . $settings['media_width'];

switch ($settings['media_width']) {
    case '1-5':
        $content_width = '4-5';
        break;
    case '1-4':
        $content_width = '3-4';
        break;
    case '3-10':
        $content_width = '7-10';
        break;
    case '1-3':
        $content_width = '2-3';
        break;
    case '2-5':
        $content_width = '3-5';
        break;
    case '1-2':
        $content_width = '1-2';
        break;
}

$content_width = '{wk}-width-' . $settings['media_breakpoint'] . '-' . $content_width;

// Content Align
$content_align  = $settings['content_align'] ? '{wk}-flex-middle' : '';

// Title Size
switch ($settings['title_size']) {
    case 'panel':
        $title_size = '{wk}-panel-title';
        break;
    case 'large':
        $title_size = '{wk}-heading-large {wk}-margin-top-remove';
        break;
    default:
        $title_size = '{wk}-' . $settings['title_size'] . ' {wk}-margin-top-remove';
}

// Link Style
switch ($settings['link_style']) {
    case 'button':
        $link_style = '{wk}-button';
        break;
    case 'primary':
        $link_style = '{wk}-button {wk}-button-primary';
        break;
    case 'button-large':
        $link_style = '{wk}-button {wk}-button-large';
        break;
    case 'primary-large':
        $link_style = '{wk}-button {wk}-button-large {wk}-button-primary';
        break;
    case 'button-link':
        $link_style = '{wk}-button {wk}-button-link';
        break;
    default:
        $link_style = '';
}

// Media Border
$border = ($settings['media_border'] != 'none') ? '{wk}-border-' . $settings['media_border'] : '';

// Link Target
$link_target = ($settings['link_target']) ? ' target="_blank"' : '';

?>

<ul id="wk-<?php echo $settings['id']; ?>" class="{wk}-switcher {wk}-margin-top {wk}-text-<?php echo $settings['text_align']; ?>" data-{wk}-check-display>
<?php foreach ($items as $item) : ?>

    <?php

        // Social Buttons
        $socials = '';
        if ($settings['social_buttons']) {
            $socials .= $item['twitter'] ? '<div><a class="{wk}-icon-button {wk}-icon-twitter" href="'. $item->escape('twitter') .'"></a></div>': '';
            $socials .= $item['facebook'] ? '<div><a class="{wk}-icon-button {wk}-icon-facebook" href="'. $item->escape('facebook') .'"></a></div>': '';
            $socials .= $item['google-plus'] ? '<div><a class="{wk}-icon-button {wk}-icon-google-plus" href="'. $item->escape('google-plus') .'"></a></div>': '';
            $socials .= $item['email'] ? '<div><a class="{wk}-icon-button {wk}-icon-envelope-o" href="mailto:'. $item->escape('email') .'"></a></div>': '';
        }

        // Second Image as Overlay
        $media2 = '';
        if ($settings['media_overlay'] == 'image') {
            foreach ($item as $field) {
                if ($field != 'media' && $item->type($field) == 'image') {
                    $media2 = $field;
                    break;
                }
            }
        }

        // Media Type
        $attrs  = array('class' => '');
        $width  = $item['media.width'];
        $height = $item['media.height'];

        if ($item->type('media') == 'image') {
            $attrs['alt'] = strip_tags($item['title']);

            $attrs['class'] .= ($border) ? $border : '';
            $attrs['class'] .= ($settings['media_animation'] != 'none' && !$media2) ? ' {wk}-overlay-' . $settings['media_animation'] : '';

            $width  = ($settings['image_width'] != 'auto') ? $settings['image_width'] : '';
            $height = ($settings['image_height'] != 'auto') ? $settings['image_height'] : '';
        }

        if ($item->type('media') == 'video') {
            $attrs['class'] = '{wk}-responsive-width';
            $attrs['controls'] = true;
        }

        if ($item->type('media') == 'iframe') {
            $attrs['class'] = '{wk}-responsive-width';
        }

        $attrs['width']  = ($width) ? $width : '';
        $attrs['height'] = ($height) ? $height : '';

        if (($item->type('media') == 'image') && ($settings['image_width'] != 'auto' || $settings['image_height'] != 'auto')) {
            $media = $item->thumbnail('media', $width, $height, $attrs);
        } else {
            $media = $item->media('media', $attrs);
        }

        // Second Image as Overlay
        if ($media2) {

            $attrs['class'] .= ' {wk}-overlay-panel {wk}-overlay-image';
            $attrs['class'] .= ($settings['media_animation'] != 'none') ? ' {wk}-overlay-' . $settings['media_animation'] : '';

            $media2 = $item->thumbnail($media2, $width, $height, $attrs);
        }

        // Link and Overlay
        if ($item['link'] && ($settings['media_overlay'] == 'link' || $settings['media_overlay'] == 'icon' || $settings['media_overlay'] == 'image')) {

            $media = '<div class="{wk}-overlay {wk}-overlay-hover ' . $border . '">' . $media;

            if ($media2) {
                $media .= $media2;
            }

            if ($settings['media_overlay'] == 'icon') {
                $media .= '<div class="{wk}-overlay-panel {wk}-overlay-background {wk}-overlay-icon {wk}-overlay-' . $settings['overlay_animation'] . '"></div>';
            }

            $media .= '<a class="{wk}-position-cover" href="' . $item->escape('link') . '"' . $link_target . '></a>';
            $media .= '</div>';
        }

        if ($socials && $settings['media_overlay'] == 'social-buttons') {
            $media  = '<div class="{wk}-overlay {wk}-overlay-hover ' . $border . '">' . $media;
            $media .= '<div class="{wk}-overlay-panel {wk}-overlay-background {wk}-overlay-' . $settings['overlay_animation'] . ' {wk}-flex {wk}-flex-center {wk}-flex-middle {wk}-text-center"><div>';
            $media .= '<div class="{wk}-grid {wk}-grid-small" data-{wk}-grid-margin>' . $socials . '</div>';
            $media .= '</div></div>';
            $media .= '</div>';
        }

        // Panel Title last
        if ($settings['title_size'] == 'panel' &&
            !($item['media'] && $settings['media'] && $settings['media_align'] == 'bottom') &&
            !($item['content'] && $settings['content']) &&
            !($socials && ($settings['media_overlay'] != 'social-buttons')) &&
            !($item['link'] && $settings['link']) &&
            !($item['media'] && $settings['media'] && $settings['media_align'] == 'last')) {
                $title_size .= ' {wk}-margin-bottom-remove';
        }

    ?>

    <li>

        <?php if ($item['media'] && $settings['media'] && $settings['media_align'] == 'top') : ?>
        <div class="{wk}-margin {wk}-text-center"><?php echo $media; ?></div>
        <?php endif; ?>

        <?php if ($item['media'] && $settings['media'] && in_array($settings['media_align'], array('left', 'right'))) : ?>
        <div class="{wk}-grid <?php echo $content_align; ?>" data-{wk}-grid-margin>
            <div class="<?php echo $media_width ?><?php if ($settings['media_align'] == 'right') echo ' {wk}-float-right {wk}-flex-order-last-' . $settings['media_breakpoint'] ?>">
                <?php echo $media; ?>
            </div>
            <div class="<?php echo $content_width ?>">
                <div class="{wk}-panel">
        <?php endif; ?>

        <?php if ($item['title'] && $settings['title']) : ?>
        <h3 class="<?php echo $title_size; ?>"><?php echo $item['title']; ?></h3>
        <?php endif; ?>

        <?php if ($item['media'] && $settings['media'] && $settings['media_align'] == 'bottom') : ?>
        <div class="{wk}-margin {wk}-text-center"><?php echo $media; ?></div>
        <?php endif; ?>

        <?php if ($item['content'] && $settings['content']) : ?>
        <div class="{wk}-margin-top"><?php echo $item['content']; ?></div>

        <table class="contact-info">
        <?php if ($item['contact']): ?>
        <tr class="list-item"><td class="center"><i class="fa fa-user-circle-o fa-lg"></i></td><td><?php echo $item['contact']; ?></td></tr>
      <?php endif;  ?>
      <?php if ($item['address']): ?>
        <tr class="list-item"><td class="center"><i class="fa fa-map-marker fa-lg"></i></td><td><?php echo $item['address']; ?></td></tr>
      <?php endif; ?>
      <?php if ($item['phone']): ?>
        <tr class="list-item"><td class="center"><i class="fa fa-phone fa-lg"></i></td><td><?php echo $item['phone']; ?></td></tr>
      <?php endif;?>
      <?php if ($item['mail']): ?>
        <tr class="list-item"><td class="center"><i class="fa fa-envelope fa-lg"></i></td><td><a href="mailto:<?= $item['mail']; ?>"><?php echo $item['mail']; ?></a>
      <?php endif; ?>
      <?php if ($item['mail2']): ?>
         | <a href="mailto:<?= $item['mail2']; ?>"><?php echo $item['mail2']; ?></a></td></tr>
      <?php endif; ?>
      <?php if ($item['website']): ?>
        <tr class="list-item"><td class="center last-row"><i class="fa fa-globe fa-lg"></i></td><td class="last-row"><a href="<?= $item['website']; ?>" target="_blank"><?php echo $item['website']; ?></a></td></tr>
      <?php endif; ?>
    </table>
        <?php endif; ?>

        <?php if ($socials && ($settings['media_overlay'] != 'social-buttons')) : ?>
        <div class="{wk}-grid {wk}-grid-small {wk}-flex-<?php echo $settings['text_align']; ?> {wk}-margin-top" data-{wk}-grid-margin><?php echo $socials; ?></div>
        <?php endif; ?>

        <?php if ($item['link'] && $settings['link']) : ?>
        <p class="{wk}-margin-bottom-remove"><a<?php if($link_style) echo ' class="' . $link_style . '"'; ?> href="<?php echo $item->escape('link'); ?>"<?php echo $link_target; ?>><?php echo $app['translator']->trans($settings['link_text']); ?></a></p>
        <?php endif; ?>

        <?php if ($item['media'] && $settings['media'] && $settings['media_align'] == 'last') : ?>
        <div class="{wk}-margin-top {wk}-text-center"><?php echo $media; ?></div>
        <?php endif; ?>

        <?php if ($item['media'] && $settings['media'] && in_array($settings['media_align'], array('left', 'right'))) : ?>



                </div>
            </div>
        </div>
        <?php endif; ?>

    </li>

<?php endforeach; ?>
</ul>
