=== Event Codes - Shortcodes that work with other event plugins ===
Contributors: WPdwarves
Tags: event shortcode, event calendar shortcode, shortcodes, event, events, calendar, modern tribe
Requires at least: 4.1
Tested up to: 4.9
Stable tag: 1.0.1
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Event Codes plugin can be used with The Events Calendar to display events list or events summary using shortcodes. This is especially useful since Events Calendar by Modern Tribe does not offer short codes (free) for displaying events. 

== Description ==

<a href="http://wpdwarves.com/event-codes-shortcodes-that-work-with-other-event-plugins">EventCodes plugin</a> provides a shortcode that can be used to display a list of events on home page, sidebar or any other part of the site.

With this plugin you can choose from a set of 4 templates for displaying list of events. Currently the EventCodes plugin works with Event Calendar plugin by Modern Tribe. We will be adding support for other event plugins soon. 

The default code will be [event_codes] which will display the list of 5 most recent Upcoming Events. The short code supports multiple options. 
 
For e.g: If you want to display 3 upcoming events belonging to “music” category.
 
`[event_codes cat=’music’ count=’3’]`


= Shortcode Options: =
* View Type & Style (view, style)
  This is used to select the type of view and style to display the event. The default view is list with basic style.
  `[event_codes view= ‘list’ style= ‘basic’]`
 
  Different types of views:
 
  1)List
	List view has 3 styles: basic, big date and card overlay
            `[event_codes view=‘list’ style=‘basic’]`
            `[event_codes view=‘list’ style=‘big-date’]`
            `[event_codes view=‘list’ style=‘card-overlay’]`
 
  2)Tabular 
	Tabular view has 2 styles: basic and shadow
             `[event_codes view=‘tabular’ style=‘basic’]`
             `[event_codes view=‘tabular’ style=‘shadow’]`
	row value displays alternate gray shade for rows. This can be applied for both styles.
             `[event_codes view=‘tabular’ style=‘shadow’ row=‘alternate-gray’]`
			 
* Show Time (showtime)
  This is used to display the time of the event. Option used is showtime and can have value true/false. Default is false.
	`[event_codes showtime=’true’]`
 
* Description (description)
  This controls whether the description of the event is to be shown or not. The option is description with value true/false. Default is true.
  `[event_codes description=’false’]`
 
* Number of events (count)
  Specifies the total number of events that are to be shown. Default is 5. Option value is count.
  `[event_codes count=’4’]`
 
* Offset (offset)
  Option offset is to skip a given number of events while listing. A good use case is when you want to split your event list into columns with multiple shortcodes. Default is  0.
  `[event_codes offset=’3’]`
 
* Category (cat)
  Displays the events based on the category. Can be used to display events belonging to different categories separated by comma. Option is cat.
 `[event_codes cat=’music,sports’]`

* Tags (tag)
  Filters events based on tags. For multiple tags use commas. Option is tag
 `[event_codes tag=’music,sports’]`
 
* Past Events (past)
  This will display the list of all the past events. Option value is past & default is false.
 `[event_codes past=’true’]`
 
* Featured Events (featured)
  This will display the list of all the featured events. Default is false & option is featured.
  `[event_codes featured=’true’]`
 
* Show View All (show-view-all)
  This will decide if the the “View All” action should be displayed or no. Default is true & option is show-view-all.
 `[event_codes show-view-all=’false’]`
 
* Show Load More (show-load-more)
  This will decide if the the “Load More” action should be displayed or no. Default is true & option is show-load-more.
 `[event_codes show-load-more=’false’]`

* Title (title)
  This will allow to set a heading to the events displayed. If title is not entered as the shortcode option, then default value for future events will be “Upcoming Events” and in case of past and featured events the heading will be “Past Events” and “Upcoming Featured Events” respectively.
  `[event_codes title =’Events this Week’]`
 
== Installation ==

* Install the “Event Codes - Shortcodes that work with other event plugins” plugin from the WordPress.org repository. The other way is to upload event-codes folder to the /wp-content/plugins directory. Please note, you must  install The Event Calendar Plugin by Modern Tribe and add your events to the calendar.

* Activate the plugin through the Plugins menu in WordPress
 
* If The Event Calendar Plugin by Modern Tribe is not installed, you will be prompted to install it.

== Frequently Asked Questions ==

= How do I install the plugin? =

* Install the “Event Codes - Shortcodes that work with other event plugins” plugin from the WordPress.org repository. The other way is to upload event-codes folder to the /wp-content/plugins directory. Please note, you must  install The Event Calendar Plugin by Modern Tribe and add your events to the calendar.

* Activate the plugin through the Plugins menu in WordPress
 
* If The Event Calendar Plugin by Modern Tribe is not installed, you will be prompted to install it.

= What are the shortcode options? =

* View Type & Style (view, style)
  This is used to select the type of view and style to display the event. The default view is list with basic style.
  `[event_codes view= ‘list’ style= ‘basic’]`
 
  Different types of views:
 
  1)List
	List view has 3 styles: basic, big date and card overlay
            `[event_codes view=‘list’ style=‘basic’]`
            `[event_codes view=‘list’ style=‘big-date’]`
            `[event_codes view=‘list’ style=‘card-overlay’]`
 
  2)Tabular 
	Tabular view has 2 styles: basic and shadow
             `[event_codes view=‘tabular’ style=‘basic’]`
             `[event_codes view=‘tabular’ style=‘shadow’]`
	row value displays alternate gray shade for rows. This can be applied for both styles.
             `[event_codes view=‘tabular’ style=‘shadow’ row=‘alternate-gray’]`
			 
* Show Time (showtime)
  This is used to display the time of the event. Option used is showtime and can have value true/false. Default is false.
	`[event_codes showtime=’true’]`
 
* Description (description)
  This controls whether the description of the event is to be shown or not. The option is description with value true/false. Default is true.
  `[event_codes description=’false’]`
 
* Number of events (count)
  Specifies the total number of events that are to be shown. Default is 5. Option value is count.
  `[event_codes count=’4’]`
 
* Offset (offset)
  Option offset is to skip a given number of events while listing. A good use case is when you want to split your event list into columns with multiple shortcodes. Default is  0.
  `[event_codes offset=’3’]`
 
* Category (cat)
  Displays the events based on the category. Can be used to display events belonging to different categories separated by comma. Option is cat.
 `[event_codes cat=’music,sports’]`

* Tags (tag)
  Filters events based on tags. For multiple tags use commas. Option is tag
 `[event_codes tag=’music,sports’]`
 
* Past Events (past)
  This will display the list of all the past events. Option value is past & default is false.
 `[event_codes past=’true’]`
 
* Featured Events (featured)
  This will display the list of all the featured events. Default is false & option is featured.
  `[event_codes featured=’true’]`
 
* Show View All (show-view-all)
  This will decide if the the “View All” action should be displayed or no. Default is true & option is show-view-all.
 `[event_codes show-view-all=’false’]`
 
* Show Load More (show-load-more)
  This will decide if the the “Load More” action should be displayed or no. Default is true & option is show-load-more.
 `[event_codes show-load-more=’false’]`

* Title (title)
  This will allow to set a heading to the events displayed. If title is not entered as the shortcode option, then default value for future events will be “Upcoming Events” and in case of past and featured events the heading will be “Past Events” and “Upcoming Featured Events” respectively.
  `[event_codes title =’Events this Week’]`

= Do you have some problems with plugin installation? =

You can visit our plugin page(http://wpdwarves.com/event-codes-shortcodes-that-work-with-other-event-plugins) and contact us.
We are always ready to help everyone.

== Screenshots ==

1. Once the plugin is installed and activated, add the shortcode option to the page where you want to display the events.
2. To display events in a tabular view. 
3. List of options for shortcodes can be viewed from the Event Codes page.


== Changelog ==

= 1.0.1 =
* Feature - New shortcode option "title" added

= 1.0.0 =
* Initial Release
