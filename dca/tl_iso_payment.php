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
 * Insert new palettes and subpaletts into tl_iso_payment
 */
$GLOBALS['TL_DCA']['tl_iso_payment']['palettes']['__selector__'][] = 'payone_activate_creditcard';
$GLOBALS['TL_DCA']['tl_iso_payment']['palettes']['payone_client'] = '{type_legend},name,label,type;{note_legend:hide},note;{config_legend},new_order_status,minimum_total,maximum_total,countries,shipping_modules,product_types;{gateway_legend},trans_type,payone_aid,payone_portalid,payone_key;{payone_legend},payone_activate_creditcard;{price_legend:hide},price,tax_class;{enabled_legend},debug,enabled';
$GLOBALS['TL_DCA']['tl_iso_payment']['subpalettes']['payone_activate_creditcard'] = 'payone_creditcard_types,payone_creditcard_cvc';

/**
 * Fields for credit card payment
 */
$GLOBALS['TL_DCA']['tl_iso_payment']['fields']['payone_activate_creditcard'] = array
(
        'label'                 => &$GLOBALS['TL_LANG']['tl_iso_payment']['payone_activate_creditcard'],
        'inputType'             => 'checkbox',
        'eval'                  => array('submitOnChange' => true),
        'sql'                   => "char(1) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_iso_payment']['fields']['payone_creditcard_types'] = array
(
        'label'                 => &$GLOBALS['TL_LANG']['tl_iso_payment']['payone_creditcard_types'],
        'inputType'             => 'checkbox',
        'options'               => array('V', 'M', 'A', 'B', 'D', 'C', 'J', 'O', 'U'),
        'reference'             => &$GLOBALS['TL_LANG']['tl_iso_payment']['payone_creditcard_types_labels'],
        'eval'                  => array('mandatory'=>true, 'multiple'=>true, 'tl_class'=>'clr w50 w50h'),
        'sql'                   => "blob NULL"
);
$GLOBALS['TL_DCA']['tl_iso_payment']['fields']['payone_creditcard_cvc'] = array
(
        'label'                 => &$GLOBALS['TL_LANG']['tl_iso_payment']['payone_creditcard_cvc'],
        'inputType'             => 'checkbox',
        'default'               => true,
        'eval'                  => array('tl_class'=>'w50'),
        'sql'                   => "char(1) NOT NULL default ''"
);

/**
 * Fields for online transfer payment
 */
/*$GLOBALS['TL_DCA']['tl_iso_payment']['fields']['payone_activate_transfer'] = array
(
        'label'                 => &$GLOBALS['TL_LANG']['tl_iso_payment']['payone_activate_transfer'],
        'inputType'             => 'checkbox',
        'eval'                  => array('tl_class'=>'clr'),
        'disabled'               => true,
        'sql'                   => "char(1) NOT NULL default ''"
);*/
/*
$GLOBALS['TL_DCA']['tl_iso_payment']['fields']['payone_activate_'] = array
(
        'label'                 => &$GLOBALS['TL_LANG']['tl_iso_payment']['payone_activate_'],
        'inputType'             => 'checkbox',
        'eval'                  => array('tl_class'=>'clr'),
        'sql'                   => "char(1) NOT NULL default ''"
);
*/

