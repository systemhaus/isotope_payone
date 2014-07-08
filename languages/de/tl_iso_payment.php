<?php

/**
 * isotope-payone extension for Contao Open Source CMS
 * 
 * Copyright © 2014 ETES GmbH
 * 
 * @package isotope-payone
 * @author  Sebastian Leitz <sebastian.leitz@etes.de>
 * @license LGPLv3
 */


/**
 * Legends
 */
$GLOBALS['TL_LANG']['tl_iso_payment']['payone_legend'] = 'PAYONE-Zahlungsarten';


/**
 * Fields
 */
$GLOBALS['TL_LANG']['tl_iso_payment']['payone_activate_creditcard'] = array('Kreditkarte aktivieren', 'Wenn Sie für Ihr PAYONE-Gateway die Zahlungart Kreditkarte gebucht haben, sollten Sie diesen Haken setzen.');
$GLOBALS['TL_LANG']['tl_iso_payment']['payone_creditcard_types'] = array('Unterstützte Kreditkartenanbieter', 'Welche Kreditkarten sollen Kunden verwenden können, um die Zahlung durchzuführen?');
$GLOBALS['TL_LANG']['tl_iso_payment']['payone_creditcard_types_labels'] = array(
	'V' => 'VISA',
	'M' => 'MasterCard',
	'A' => 'American Express',
	'B' => 'Carte Bleue',
	'D' => 'Diners Club',
	'C' => 'Discover',
	'J' => 'Japan Credit Bureau',
	'O' => 'Maestro International',
        'U' => 'Maestro UK'
);
$GLOBALS['TL_LANG']['tl_iso_payment']['payone_creditcard_cvc'] = array('Kartenprüfnummer abfragen', 'Die Kartenprüfnummer sollte zur Erhöhung der Sicherheit bei der Eingabe abgefragen werden.');
