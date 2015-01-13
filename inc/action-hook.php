<?php
/**
 * Name: Media Assembly Kit Action hook
 * Description: Action hook
 * Author: DigitalCube Co., Ltd
 * Version: 0.1.0
 * @package Media Assembly Kit
 *
 * 1. wp_head
 * 2. mak_before_body
 * 3. mak_before_page
 * 4. mak_header
 * 5. mak_header_content
 * 6. mak_before_content
 * 8. mak_before_main
 * 9. mak_before_archive_entry
 * 10. mak_archive_entry_header
 * 11. mak_archive_entry_content
 * 12. mak_archive_entry_footer
 * 13. mak_after_archive_entry
 * 14. mak_before_single_entry
 * 15. mak_single_entry_header
 * 16. mak_single_entry_content
 * 17. mak_single_entry_footer
 * 18. mak_after_single_entry
 * 19. mak_before_page_entry
 * 20. mak_page_entry_header
 * 21. mak_page_entry_content
 * 22. mak_page_entry_footer
 * 23. mak_after_page_entry
 * 24. mak_before_no_results
 * 25. mak_no_results_header
 * 26. mak_no_results_content
 * 27. mak_no_results_footer
 * 28. mak_after_no_results
 * 29. mak_before_404
 * 30. mak_404_header
 * 31. mak_404_content
 * 32. mak_404_footer
 * 33. mak_after_404
 * 34. mak_after_main
 * 36. mak_secondary
 * 37. mak_after_content
 * 38. mak_content_footer
 * 39. mak_footer_before
 * 40. mak_footer
 * 41. mak_after_page
 * 42. wp_footer
 * 43. Other
**/

/* ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
# 1. wp_head
/* ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
add_action( 'wp_head', function(){
	if ( ! function_exists( 'mak_ad_code' ) )
		return;

	if ( is_child_theme() ) {
		mak_ad_code( array( 'code' => 'mak_ad_general_mobile_header', 'tag' => false ) );
	} else {
		mak_ad_code( array( 'code' => 'mak_ad_general_pc_header', 'tag' => false ) );
	}
}, 9999 );

/* ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
#  2. mak_before_body
/* ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */

/* ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
#  3. mak_before_page
/* ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */

/* ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
#  4. mak_header
/* ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */

/* ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
#  5. mak_header_content
/* ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */

/* ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
#  6. mak_before_content
/* ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */

/* ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
#  7. mak_before_primary
/* ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */

/* ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
#  8. mak_before_main
/* ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
add_action( 'mak_before_main', function(){
	if ( ! is_child_theme() ) {
		mak_khm_15();
	}
}, 9999 );

/* ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
#  9. mak_before_archive_entry
/* ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */

/* ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
#  10. mak_archive_entry_header
/* ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */

/* ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
#  11. mak_archive_entry_content
/* ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */

/* ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
#  12. mak_archive_entry_meta
/* ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */

/* ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
#  13. mak_after_archive_entry
/* ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */

/* ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
#  14. mak_before_single_entry
/* ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */

/* ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
#  15. mak_single_entry_header
/* ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */

/* ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
#  16. mak_single_entry_content
/* ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */

/* ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
#  17. mak_single_entry_meta
/* ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */

/* ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
#  18. mak_after_single_entry
/* ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */

/* ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
#  19. mak_before_page_entry
/* ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */

/* ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
#  20. mak_page_entry_header
/* ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */

/* ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
#  21. mak_page_entry_content
/* ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */

/* ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
#  22. mak_page_entry_meta
/* ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */

/* ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
#  23. mak_after_page_entry
/* ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */

/* ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
#  24. mak_before_no_results
/* ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */

/* ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
#  25. mak_no_results_header
/* ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */

/* ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
#  26. mak_no_results_content
/* ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */

/* ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
#  27. mak_no_results_meta
/* ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */

/* ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
#  28. mak_after_no_results
/* ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */

/* ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
#  29. mak_before_404
/* ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */

/* ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
#  30. mak_404_header
/* ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */

/* ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
#  31. mak_404_content
/* ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */

/* ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
#  32. mak_404_meta
/* ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */

/* ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
#  33. mak_after_404
/* ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */

/* ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
#  34. mak_after_main
/* ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */

/* ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
#  35. mak_after_primary
/* ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */

/* ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
#  36. mak_secondary
/* ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */

/* ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
#  37. mak_after_content
/* ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */

/* ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
#  38. mak_content_footer
/* ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */

/* ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
#  39. mak_footer_before
/* ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
add_action( 'mak_footer_before', function(){
	if ( ! function_exists( 'mak_ad_code' ) )
		return;

	mak_ad_code( array( 'code' => 'mak_ad_pc_before_footer', 'class' => 'mad mad-before-footer' ) );

}, 9999 );

/* ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
#  40. mak_footer
/* ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */

/* ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
#  41. mak_after_page
/* ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */

/* ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
#  42. wp_footer
/* ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
add_action( 'wp_footer', function(){
	if ( ! function_exists( 'mak_ad_code' ) )
		return;

	if ( is_child_theme() ) {
		mak_ad_code( array( 'code' => 'mak_ad_general_mobile_footer', 'tag' => false ) );
	} else {
		mak_ad_code( array( 'code' => 'mak_ad_general_pc_footer', 'tag' => false ) );
	}
}, 9999 );

add_action( 'wp_footer', 'mak_footer_scripts', 9999 );
function mak_footer_scripts() {
	if ( is_child_theme() ) {
?>
<script>
(function($) {
	// Common

	// trunk8Set
	trunk8Set();

	// ranking
	rankingNavSet();

	// searchFieldResize
	searchFieldResizeSet();

	// colophonSocial
	searchFieldResizeSet();

	// HOME
	// categoryPostsTab
	categoryInductionBoxSet();

	// single, page, summary
	// imagePopup
	imagePopupSet();

	// entryContentiflame
	entryContentiflameSet();

	// SNS count
	twitterCount();
	facebookCount();
})(jQuery);
</script>
<?php
	} else { // pc
?>
<script>
(function($) {
	// Common

	// trunk8Set
	trunk8Set();

	// Background
	backgroundLinkSet();

	// globalNavBox
	globalNavBoxSet();

	// ranking
	rankingNavSet();

	// HOME

	// slideBoxSet
	slideBoxSet();

	// single, page, summary

	// imagePopup
	imagePopupSet();

	// entryContentiflame
	entryContentiflameSet();

	// SNS count
	twitterCount();
	facebookCount();
})(jQuery);
</script>
<?php
	}
}

/* ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
#  43. Other
/* ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
