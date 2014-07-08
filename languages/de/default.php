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


$GLOBALS['TL_LANG']['MODEL']['tl_iso_payment.payone_client'] = array('PAYONE Client API', 'Die PAYONE Client API bietet die Abwicklung vieler verschiedener Zahlungsarten über ein Formular an.');

/**
 * Miscellaneous
 */
$GLOBALS['TL_LANG']['MSC']['payone']['headline'] = 'Zahlungsdaten eingeben';
$GLOBALS['TL_LANG']['MSC']['payone']['message'] = 'Bitte wählen Sie die Zahlungsart aus. Im nächsten Schritt werden Ihre Daten überprüft und Sie werden gegebenenfalls auf eine Seite Ihrer Bank oder eines externen Zahlungsdienstleisters weitergeleitet.';
$GLOBALS['TL_LANG']['MSC']['payone']['method_label'] = 'Zahlungsart wählen';
$GLOBALS['TL_LANG']['MSC']['payone']['button_label'] = 'Zahlungsdaten prüfen';

/**
 * Payment method credit card
 */
$GLOBALS['TL_LANG']['MSC']['payone']['method_cc']['label'] = 'Kreditkarte';
$GLOBALS['TL_LANG']['MSC']['payone']['method_cc']['legend'] = 'Kreditkartendaten';
$GLOBALS['TL_LANG']['MSC']['payone']['method_cc']['types'] = array(
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
$GLOBALS['TL_LANG']['MSC']['payone']['method_cc']['fields']['cardtype']['label'] = 'Kartentyp';
$GLOBALS['TL_LANG']['MSC']['payone']['method_cc']['fields']['cardholder']['label'] = 'Karteninhaber';
$GLOBALS['TL_LANG']['MSC']['payone']['method_cc']['fields']['cardpan']['label'] = 'Kreditkartennummer';
$GLOBALS['TL_LANG']['MSC']['payone']['method_cc']['fields']['cardexpiredate']['label'] = 'Gültig bis';
$GLOBALS['TL_LANG']['MSC']['payone']['method_cc']['fields']['cardcvc2']['label'] = 'Prüfziffer';
