<?php
/**
 * 検索フォーム
 *
 * @link https://haruharuharukichi.github.io/
 *
 * @package WordPress
 * @subpackage smartLine
 * @since 1.0
 * @version 1.0
 */
?>

<?php $unique_id = esc_attr( uniqid( 'search-form-' ) ); ?>

<form role="search" method="get" class="search_form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<span class="search_field">
		<input type="search" id="<?php echo $unique_id; ?>" placeholder="サイト内を検索" value="<?php echo get_search_query(); ?>" name="s" />
	</span>
	<button type="submit" class="search_submit"><span class="screen_reader_text">SEARCH</span></button>
</form>
