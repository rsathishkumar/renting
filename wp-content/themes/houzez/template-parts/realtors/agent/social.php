<?php
$agent_facebook = get_post_meta( get_the_ID(), 'fave_agent_facebook', true );
$agent_twitter = get_post_meta( get_the_ID(), 'fave_agent_twitter', true );
$agent_linkedin = get_post_meta( get_the_ID(), 'fave_agent_linkedin', true );
$agent_googleplus = get_post_meta( get_the_ID(), 'fave_agent_googleplus', true );
$agent_youtube = get_post_meta( get_the_ID(), 'fave_agent_youtube', true );
$agent_pinterest = get_post_meta( get_the_ID(), 'fave_agent_pinterest', true );
$agent_instagram = get_post_meta( get_the_ID(), 'fave_agent_instagram', true );
$agent_vimeo = get_post_meta( get_the_ID(), 'fave_agent_vimeo', true );
$agent_skype = get_post_meta( get_the_ID(), 'fave_agent_skype', true );

if(is_author()) {
	global $current_author_meta;

	$agent_facebook = $current_author_meta['fave_author_facebook'][0];
	$agent_twitter = $current_author_meta['fave_author_twitter'][0];
	$agent_linkedin = $current_author_meta['fave_author_linkedin'][0];
	$agent_googleplus = $current_author_meta['fave_author_googleplus'][0];
	$agent_youtube = $current_author_meta['fave_author_youtube'][0];
	$agent_pinterest = $current_author_meta['fave_author_pinterest'][0];
	$agent_instagram = $current_author_meta['fave_author_instagram'][0];
	$agent_vimeo = $current_author_meta['fave_author_vimeo'][0];
	$agent_skype = $current_author_meta['fave_author_skype'][0];
}
?>

<?php if( !empty( $agent_skype ) ) { ?>
<span>
	<a class="btn-skype" target="_blank" href="skype:<?php echo esc_attr( $agent_skype ); ?>?chat">
		<i class="houzez-icon icon-video-meeting-skype mr-2"></i>
	</a>
</span>
<?php } ?>

<?php if( !empty( $agent_facebook ) ) { ?>
<span>
	<a class="btn-facebook" target="_blank" href="<?php echo esc_url( $agent_facebook ); ?>">
		<i class="houzez-icon icon-social-media-facebook mr-2"></i>
	</a>
</span>
<?php } ?>

 <?php if( !empty( $agent_instagram ) ) { ?>
<span>
	<a class="btn-instagram" target="_blank" href="<?php echo esc_url( $agent_instagram ); ?>">
		<i class="houzez-icon icon-social-instagram mr-2"></i>
	</a>
</span>
<?php } ?>

<?php if( !empty( $agent_twitter ) ) { ?>
<span>
	<a class="btn-twitter" target="_blank" href="<?php echo esc_url( $agent_twitter ); ?>">
		<i class="houzez-icon icon-social-media-twitter mr-2"></i>
	</a>
</span>
<?php } ?>

<?php if( !empty( $agent_linkedin ) ) { ?>
<span>
	<a class="btn-linkedin" target="_blank" href="<?php echo esc_url( $agent_linkedin ); ?>">
		<i class="houzez-icon icon-professional-network-linkedin mr-2"></i>
	</a>
</span>
<?php } ?>

<?php if( !empty( $agent_googleplus ) ) { ?>
<span>
	<a class="btn-googleplus" target="_blank" href="<?php echo esc_url( $agent_googleplus ); ?>">
		<i class="houzez-icon icon-social-media-google-plus-1 mr-2"></i>
	</a>
</span>
<?php } ?>

<?php if( !empty( $agent_youtube ) ) { ?>
<span>
	<a class="btn-youtube" target="_blank" href="<?php echo esc_url( $agent_youtube ); ?>">
		<i class="houzez-icon icon-social-video-youtube-clip mr-2"></i>
	</a>
</span>
<?php } ?>

<?php if( !empty( $agent_pinterest ) ) { ?>
<span>
	<a class="btn-pinterest" target="_blank" href="<?php echo esc_url( $agent_pinterest ); ?>">
		<i class="houzez-icon icon-social-pinterest mr-2"></i>
	</a>
</span>
<?php } ?>

<?php if( !empty( $agent_vimeo ) ) { ?>
<span>
	<a class="btn-vimeo" target="_blank" href="<?php echo esc_url( $agent_vimeo ); ?>">
		<i class="houzez-icon icon-social-video-vimeo mr-2"></i>
	</a>
</span>
<?php } ?>