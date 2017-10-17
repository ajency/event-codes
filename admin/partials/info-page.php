<?php
// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
    die;
}
?>
<div class="wrap">
    <h3><?php echo esc_html( __( 'Event Codes - Shortcodes that work with other event plugins', 'event-codes' ) ); ?></h3>
    <h4><?php echo esc_html( __( 'Description:', 'event-codes' ) ); ?></h4>

    <p><a target="_blank" href="http://wpdwarves.com/event-codes-shortcodes-that-work-with-other-event-plugins">EventCodes plugin</a> provides a shortcode that can be used to display a list of events on home page, sidebar or any other part of the site.</p>

    <p>With this plugin you can choose from a set of 4 templates for displaying list of events. Currently the EventCodes plugin works with Event Calendar plugin by Modern Tribe. We will be adding support for other event plugins soon.</p>

    <p>The default code will be [event_codes] which will display the list of 5 most recent Upcoming Events. The short code supports multiple options.</p>

    <p>For e.g: If you want to display 3 upcoming events belonging to “music” category.</p>
    <blockquote>[event_codes cat='music' count='3']</blockquote>
    <table style="width:100%;">
        <tr>
            <td  style="vertical-align:top;border-right:1px solid #000;">
                <table>
                    <tr><th style="text-align:left"><b>Shortcode Options:</b></th></tr>
                    <tr><td><b>View Type & Style (view, style)</b></td></tr>
                    <tr><td>This is used to select the type of view and style to display the event. The default view is list with basic style.</td></tr>
                    <tr><td>[event_codes view='list' style='basic']</td></tr>
                    <tr><td></td></tr>
                    <tr><td></td></tr>
                    <tr><td>Different types of views:</td></tr>
                    <tr><td>1) List</td></tr>
                    <tr><td>List view has 3 styles: basic, big date and card overlay.</td></tr>
                    <tr><td>[event_codes view='list' style='basic']</td></tr>
                    <tr><td>[event_codes view='list' style='big-date']</td></tr>
                    <tr><td>[event_codes view='list' style='card-overlay']</td></tr>
                    <tr><td></td></tr>
                    <tr><td>2)   Tabular</td></tr>
                    <tr><td>Tabular view has 2 styles: basic and shadow</td></tr>
                    <tr><td>[event_codes view='tabular' style='basic']</td></tr>
                    <tr><td>[event_codes view='tabular' style='shadow']</td></tr>
                    <tr><td>[event_codes view='tabular' style='shadow' row='alternate-gray'] - row
                            value displays alternate gray shade for rows. This can be applied for both styles.</td></tr>
                    <tr><td></td></tr>
                    <tr><td><b>Show Time (showtime)</b></td></tr>
                    <tr><td>This is used to display the time of the event. Option used is showtime and can have value true/false. Default is false.</td></tr>
                    <tr><td></td></tr>
                    <tr><td></td></tr>
                    <tr><td>[event_codes showtime='true']</td></tr>
                    <tr><td></td></tr>
                    <tr><td></td></tr>
                    <tr><td><b>Description (description)</b></td></tr>
                    <tr><td>This controls whether the description of the event is to be shown or not. The option is description with value true/false. Default is true.</td></tr>
                    <tr><td></td></tr>
                    <tr><td></td></tr>
                    <tr><td>[event_codes description='false']</td></tr>
                    <tr><td></td></tr>
                    <tr><td></td></tr>
                    <tr><td><b>Number of events (count)</b></td></tr>
                    <tr><td>Specifies the total number of events that are to be shown. Default is 5. Option value is count.</td></tr>
                    <tr><td></td></tr>
                    <tr><td></td></tr>
                    <tr><td>[event_codes count='4']</td></tr>
                    <tr><td></td></tr>
                    <tr><td></td></tr>
                    <tr><td><b>Offset (offset)</b></td></tr>
                    <tr><td>Option offset is to skip a given number of events while listing. A good use case is when you want to split your event list into columns with multiple shortcodes. Default is  0.</td></tr>
                    <tr><td></td></tr>
                    <tr><td></td></tr>
                    <tr><td>[event_codes offset='3']</td></tr>
                    <tr><td></td></tr>
                    <tr><td></td></tr>
                    <tr><td><b>Category (cat)</b></td></tr>
                    <tr><td>Displays the events based on the category. Can be used to display events belonging to different categories separated by comma. Option is cat.</td></tr>
                    <tr><td></td></tr>
                    <tr><td></td></tr>
                    <tr><td>[event_codes cat='music,sports']</td></tr>
                    <tr><td></td></tr>
                    <tr><td></td></tr>
                    <tr><td><b>Tags (tag)</b></td></tr>
                    <tr><td>Filters events based on tags. For multiple tags use commas. Option is tag</td></tr>
                    <tr><td></td></tr>
                    <tr><td></td></tr>
                    <tr><td>[event_codes tag='music,sports']</td></tr>
                    <tr><td></td></tr>
                    <tr><td></td></tr>
                    <tr><td><b>Past Events (past)</b></td></tr>
                    <tr><td>This will display the list of all the past events. Option value is past & default is false.</td></tr>
                    <tr><td></td></tr>
                    <tr><td></td></tr>
                    <tr><td>[event_codes past='true']</td></tr>
                    <tr><td></td></tr>
                    <tr><td></td></tr>
                    <tr><td><b>Featured Events (featured)</b></td></tr>
                    <tr><td>This will display the list of all the featured events. Default is false & option is featured.</td></tr>
                    <tr><td></td></tr>
                    <tr><td></td></tr>
                    <tr><td>[event_codes featured='true']</td></tr>
                    <tr><td></td></tr>
                    <tr><td></td></tr>
                    <tr><td><b>Show View All (show-view-all)</b></td></tr>
                    <tr><td>This will decide if the the “View All” action should be displayed or no. Default is true & option is show-view-all.</td></tr>
                    <tr><td></td></tr>
                    <tr><td></td></tr>
                    <tr><td>[event_codes show-view-all='false']</td></tr>
                    <tr><td></td></tr>
                    <tr><td></td></tr>
                    <tr><td><b>Show Load More (show-load-more)</b></td></tr>
                    <tr><td>This will decide if the the “Load More” action should be displayed or no. Default is true & option is show-load-more.</td></tr>
                    <tr><td></td></tr>
                    <tr><td></td></tr>
                    <tr><td>[event_codes show-load-more='false']</td></tr>
                    <tr><td></td></tr>
                    <tr><td></td></tr>
                    <tr><td><b>Title (title)<b></td></tr>
                    <tr><td>This will allow to set a title to the events displayed.</td></tr>
                    <tr><td> If the title is not entered, then default values for future events will be “Upcoming Events” and in case of past and featured events the title will be “Past Events” and “Upcoming Featured Events” respectively.</td></tr>
                    <tr><td></td></tr>
                    <tr><td></td></tr>
                    <tr><td>[event_codes title =’Events this Week’]</td></tr>

                </table>
            </td>
            <td  style="vertical-align:top">
                <table>
                    <tr><th style="text-align:left"><b>Some Examples:</b></th></tr>
                    <tr><td>List of events in "basic" style belonging to category "food" and "health".</td></tr>
                    <tr><td> [event_codes view= 'list' style='basic' cat= 'food, health'   show-view-all='false']</td></tr>
                    <tr><td><a target="_blank" href="http://wpdwarves.com/event-codes-shortcodes-that-work-with-other-event-plugins/list-basic/">Click to view the example</a></td></tr>
                    <tr><td><img src="<?php echo plugins_url( '/public/img/ex1.png', EVENT_CODES_FILE ); ?>"></td></tr>
                    <tr><td></td></tr>
                    <tr><td></td></tr>
                    <tr><td>Events displayed in "tabular" view, "shadow" style. Time of the event is displayed, description and load more action hidden.</td></tr>
                    <tr><td> [event_codes view='tabular' style='shadow' showtime='true' description='false' show-load-more='false']</td></tr>
                    <tr><td><a target="_blank" href="http://wpdwarves.com/event-codes-shortcodes-that-work-with-other-event-plugins/tabular-shadow/">Click to view the example</a></td></tr>
                    <tr><td><img src="<?php echo plugins_url( '/public/img/ex2.png', EVENT_CODES_FILE ); ?>"></td></tr>
                    <tr><td></td></tr>
                    <tr><td></td></tr>
                    <tr><td>Events in "tabular" view, "basic" style with alternate gray rows showing 6 events. Time and description not displayed.</td></tr>
                    <tr><td> [event_codes view='tabular' style='basic' row='alternate-gray' showtime='false' description='false' count='6']</td></tr>
                    <tr><td><a target="_blank" href="http://wpdwarves.com/event-codes-shortcodes-that-work-with-other-event-plugins/tabular-basic-alternate-gray/">Click to view the example</a></td></tr>
                    <tr><td><img src="<?php echo plugins_url( '/public/img/ex3.png', EVENT_CODES_FILE ); ?>"></td></tr>
                    <tr><td></td></tr>
                    <tr><td></td></tr>
                    <tr><td>List of "featured" events in "card overlay" style.</td></tr>
                    <tr><td> [event_codes view='list' style='card-overlay' featured='true']</td></tr>
                    <tr><td><a target="_blank" href="http://wpdwarves.com/event-codes-shortcodes-that-work-with-other-event-plugins/featured-events/">Click to view the example</a></td></tr>
                    <tr><td><img src="<?php echo plugins_url( '/public/img/ex4.png', EVENT_CODES_FILE ); ?>"></td></tr>
                    <tr><td>List of past events in "big date" style.</td></tr>
                    <tr><td> [event_codes view='list' style='big-date' past='true']</td></tr>
                    <tr><td><a target="_blank" href="http://wpdwarves.com/event-codes-shortcodes-that-work-with-other-event-plugins/past-events/">Click to view the example</a></td></tr>
                    <tr><td><img src="<?php echo plugins_url( '/public/img/ex5.png', EVENT_CODES_FILE ); ?>"></td></tr>
                </table>
            </td>
        </tr>
    </table>
</div>