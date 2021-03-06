<?php
// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
    die;
}
?>
<!--
			L I S T
			styles: basic / big-date / overlay
			===================================
			Add/replace the beolow classes to the div with class "aj-list"
			===================================
			class for layout: aj-list--basic / aj-list--bigdate / aj-list--overlay / aj-list--complete
			class for price: aj--hasprice
			class for time: aj--hastime
			class for desc: aj--hasdesc
		-->

<?php
if($atts['style'] == 'big-date') {
    $atts['style'] = 'bigdate';
} else if($atts['style'] == 'card-overlay') {
    $atts['style'] = 'overlay';
} else if($atts['style'] == 'complete-overlay') {
    $atts['style'] = 'complete';
}
?>
<div class="aj">
    <h3 class="aj__title"><?php echo ($atts['title']=='Events')? $event_data->event_range_lbl.' '.$atts['title'] : $atts['title']; ?></h3>
    <div id="data-<?php echo $shortcode_id; ?>" class="aj-list aj-list--<?php echo $atts['style']; ?> <?php echo $atts['description'] ? 'aj--hasdesc':'' ?> <?php echo $atts['showtime'] ? 'aj--hastime':'' ?> aj--hasprice">
        <?php foreach($event_data->events as $event) : ?>
            <?php include(dirname( __FILE__ )  . '/list-view-item.php' ); ?>
        <?php endforeach; ?>
    </div>
    <div class="text-center aj__navi">
        <?php if($atts['show-load-more'] && $atts['count'] < $event_data->count) : ?>
            <a id="<?php echo $shortcode_id; ?>" href="" class="aj__link aj--loadmore"><?php echo sprintf(esc_html(__('Load More','event-codes'))); ?></a>
        <?php endif; ?>
        <?php if($atts['show-view-all']) : ?>
            <a href="<?php echo esc_url( tribe_get_events_link() ); ?>" class="aj__button aj--viewall"><?php echo sprintf(esc_html(__('View All','event-codes'))); ?></a>
        <?php endif; ?>
    </div>
    <?php if($atts['show-load-more'] && $atts['count'] < $event_data->count) : ?>
        <script type="text/javascript">
            /* <![CDATA[ */
            var event_codes_sc_atts_<?php echo $shortcode_id; ?> = <?php print json_encode($atts); ?>;
            /* ]]> */
        </script>
    <?php endif; ?>
</div>
<!--
    / E N D
    L I S T
-->