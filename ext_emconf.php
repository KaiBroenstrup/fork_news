<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "fork_news".
 *
 * Auto generated 15-05-2015 21:08
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array (
	'title' => 'Fork News',
	'description' => 'Extends the Extension news with additional fields',
	'category' => 'fe',
	'version' => '1.0.0',
	'state' => 'stable',
	'uploadfolder' => true,
	'createDirs' => '',
	'clearcacheonload' => true,
	'author' => 'Kai Broenstrup',
	'author_email' => 'me@kaibroenstrup.com',
	'author_company' => '',
	'constraints' =>
	array (
		'depends' =>
		array (
			'typo3' => '7.6.0-8.7.99',
			'news' => '5.0.0-6.9.99',
		),
		'conflicts' =>
		array (
		),
		'suggests' =>
		array (
		),
	),
);

