<?php
// add content
function Viet_share_add_content($content) {
global $vietshare_options;
if(is_singular('post')) {
ob_start();
?>
<div class="share">
<div class="iconshare <?php echo $vietshare_options['hover']; ?>">
<?php if($vietshare_options['facebook'] == false) { ?>
<a title="Facebook" class="share-f <?php echo $vietshare_options['theme']; ?> <?php echo $vietshare_options['bovien']; ?>" href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" onclick='window.open(this.href,&quot;popupwindow&quot;,&quot;status=0,height=500,width=500,resizable=0,top=50,left=100&quot;);return false;' rel='nofollow' target="_blank"><img title="Facebook" style="margin:0px;padding:0px;border:0px;display:initial;max-width:35px;" src="<?php echo plugins_url('img/icon-f.svg', __FILE__); ?>" width="35" /></a>
<?php } if($vietshare_options['twitter'] == false) { ?>
<a title="Twitter" class="share-t <?php echo $vietshare_options['theme']; ?> <?php echo $vietshare_options['bovien']; ?>" href="https://twitter.com/intent/tweet?url=<?php the_permalink(); ?>" onclick='window.open(this.href,&quot;popupwindow&quot;,&quot;status=0,height=500,width=500,resizable=0,top=50,left=100&quot;);return false;' rel='nofollow' target="_blank"><img title="Twitter" style="margin:0px;padding:0px;border:0px;display:initial;max-width:35px;" src="<?php echo plugins_url('img/icon-t.svg', __FILE__); ?>" width="35" /></a>
<?php } if($vietshare_options['pinterest'] == false) { ?>
<a title="Pinterest" class="share-p <?php echo $vietshare_options['theme']; ?> <?php echo $vietshare_options['bovien']; ?>" href="https://www.pinterest.com/pin/create/link/?url=<?php the_permalink(); ?>&media=<?php echo the_post_thumbnail_url('large'); ?>&description=<?php echo get_the_title(get_the_ID()); ?>" onclick='window.open(this.href,&quot;popupwindow&quot;,&quot;status=0,height=500,width=500,resizable=0,top=50,left=100&quot;);return false;' rel='nofollow' target="_blank"><img title="Pinterest" style="margin:0px;padding:0px;border:0px;display:initial;max-width:35px;" src="<?php echo plugins_url('img/icon-p.svg', __FILE__); ?>" width="35" /></a>
<?php } if($vietshare_options['zalo'] == false) { ?>
<a title="Zalo" class="zalo-share-button <?php echo $vietshare_options['theme']; ?> <?php echo $vietshare_options['bovien']; ?>" data-href="<?php the_permalink();?>" data-oaid="<?php echo $vietshare_options['oaid']; ?>" data-layout="2" data-customize=true><img title="Zalo" style="margin:0px;padding:0px;border:0px;display:initial;max-width:35px;" src="<?php echo plugins_url('img/icon-z.svg', __FILE__); ?>" width="35" /></a>
<?php } ?>
</div>
<?php
global $vietshare_shortcode;
$vietshare_shortcode = $vietshare_shortcodes  = ob_get_clean();
if($vietshare_options['enable'] == true) {$vietshare_shortcodes = "";} 
if ($vietshare_options['loca'] == "Bottom"){
	$vietshare_out = $vietshare_shortcodes;
	$vietshare_top = ""; 
	} 
elseif ($vietshare_options['loca'] == "Top"){
    $vietshare_top = $vietshare_shortcodes; 
    $vietshare_out = ""; 
	echo "<style>.share{margin-top:0px !important}</style>";
    } 
return $vietshare_top . $content . $vietshare_out;
}else {
return $content;
}
}
add_filter('the_content', 'Viet_share_add_content');

//add shortcode

function Viet_share_add_shortcode() {
	global $vietshare_shortcode;
	return $vietshare_shortcode;
}
add_shortcode( 'vietshare', 'Viet_share_add_shortcode');

