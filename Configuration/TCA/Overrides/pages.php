<?php
$tmp_cr_seitenattribute_columns = array(
	'meta_robots' => array(
		'exclude' => 1,
		'label' => 'Robots',
		'config' => array(
			'type' => 'select',
			'items' => array(
                array('index, follow', 0),
                array('index, nofollow', 1),
                array('noindex, follow', 2),
                array('noindex, nofollow', 3),
            ),
			'size' => 1,
			'maxitems' => 1,
			'eval' => ''
		),
	),
	'canonical' => array (
		'exclude' => 1,
		'label' => 'Canonical',
		'config' => array (
				'type' => 'input',
				'size' => '45',
				'max' => '255',
				'eval' => 'trim',
		)
	),
	'titletag' => array (
		'exclude' => 1,
		'label' => 'Title-Tag',
		'config' => array (
			'type' => 'input',
			'size' => '45',
			'max' => '255',
			'eval' => 'trim',
		)
	),
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('pages', $tmp_cr_seitenattribute_columns, 1);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette('pages', 'metatags', '--linebreak--,titletag,--linebreak--,meta_robots,--linebreak--,canonical', 'after:description');

