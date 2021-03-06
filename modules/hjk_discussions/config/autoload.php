<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2016 Leo Feyer
 *
 * @license LGPL-3.0+
 */


/**
 * Register the namespaces
 */
ClassLoader::addNamespaces(array
(
	'HJK',
	'HJK\\Discussions',
));


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Classes
    //'DC_HJK_Applications'                           => 'system/modules/hjk_bookings/classes/DC_HJK_Applications.php',

    // Models
    'HJK\\Discussions\\HjkDiscussionsGroupModel'    => 'system/modules/hjk_discussions/models/HjkDiscussionsGroupModel.php',
    'HJK\\Discussions\\HjkDiscussionsPostModel'     => 'system/modules/hjk_discussions/models/HjkDiscussionsPostModel.php',
    
    // BE-Modules
    //'HJK\\Bookings\\BEBookings'  => 'system/modules/hjk_bookings/modules/BEBookings.php',

    
    // FE-Modules
    'HJK\\Discussions\\FEDiscussion' => 'system/modules/hjk_discussions/modules/FEDiscussion.php',

    // other
    //'HJK\\Bookings\\DateHelpers' => 'system/modules/hjk_bookings/classes/DateHelpers.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array(
	 'mod_hjk_discussion'         => 'system/modules/hjk_discussions/templates',
	 'mod_hjk_post'               => 'system/modules/hjk_discussions/templates',
));
