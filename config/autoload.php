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
 * Register PSR-0 namespace
 */
NamespaceClassLoader::add('Isotope', 'system/modules/isotope_payone/library');

/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
    'iso_payment_payone' => 'system/modules/isotope_payone/templates/payment',
    'iso_payment_payone_cc' => 'system/modules/isotope_payone/templates/payment'
));

//echo TemplateLoader::getPath('iso_payment_payone', 'html5');
