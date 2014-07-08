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

namespace Isotope\Model\Payment;
use Isotope\Interfaces\IsotopeProductCollection;
use Isotope\Interfaces\IsotopePayment;
use Isotope\Model\ProductCollection\Order;

/**
 * Class PayoneClient
 * 
 * Provide integration for the PAYONE Client API in Isotope
 */
class PayoneClient extends Postsale implements IsotopePayment
{
    
    /**
     * Process postsale request by PAYONE
     * @param IsotopeProductCollection
     */
    public function processPostSale(IsotopeProductCollection $objOrder)
    {
        
    }
    
    /**
     * Get the order referenced by the postsale request
     * @return Order
     */
    public function getPostsaleOrder()
    {
//        return Order::findByPk(\Input::post('tr_crc'));
    }
    
    /**
     * HTML form for payment data
     * @param   IsotopeProductCollection    The order being places
     * @param   Module                      The checkout module instance
     * @return  string
     */
    public function checkoutForm(IsotopeProductCollection $objOrder, \Module $objModule)
    {
        $objTemplate = new \Isotope\Template('iso_payment_payone');
        $objTemplate->id = $this->id;
        
        // Methods are equivalent to PAYONE clearing types
        $arrMethods = array();
        if ($this->payone_activate_creditcard)
        {
            $arrMethods[] = 'cc';
            $objTemplate->template_cc = $this->creditCardForm();
        }
        $objTemplate->methods = $arrMethods;
        
        $objTemplate->lang = $GLOBALS['TL_LANG']['MSC']['payone'];
        
        return $objTemplate->parse();
    }
    
    protected function creditCardForm()
    {
        $objTemplate = new \Isotope\Template('iso_payment_payone_cc');
        
        // Form fields
        $arrFields = array
        (
             'cardholder' => array(
                 'name'      => 'cardholder',
                 'label'     => $GLOBALS['TL_LANG']['MSC']['payone']['method_cc']['fields']['cardholder']['label'],
                 'inputType' => 'text',
                 'required'  => true
             ),
             'cardtype' => array(
                 'name'      => 'cardtype',
                 'label'     => $GLOBALS['TL_LANG']['MSC']['payone']['method_cc']['fields']['cardtype']['label'],
                 'inputType' => 'select',
                 'required'  => true
             ),
             'cardpan' => array(
                 'name'      => 'cardpan',
                 'label'     => $GLOBALS['TL_LANG']['MSC']['payone']['method_cc']['fields']['cardpan']['label'],
                 'inputType' => 'text',
                 'required'  => true
             ),
             'cardexpiredate' => array(
                 'name'      => 'cardexpiredate',
                 'label'     => $GLOBALS['TL_LANG']['MSC']['payone']['method_cc']['fields']['cardexpiredate']['label'],
                 'inputType' => 'ccdate',
                 'names'     => true,
                 'required'  => true
             ),
             'cardcvc2' => array(
                 'name'      => 'cardcvc2',
                 'label'     => $GLOBALS['TL_LANG']['MSC']['payone']['method_cc']['fields']['cardcvc2']['label'],
                 'inputType' => 'text',
                 'class'     => 'cardcvc',
                 'maxlength' => 3,
                 'required'  => true
             )
        );
        
        $arrCcTypes = array();
        foreach (deserialize($this->payone_creditcard_types) as $type)
        {
            $arrCcTypes[] = array(
                'value' => $type,
                'label' => $GLOBALS['TL_LANG']['MSC']['payone']['method_cc']['types'][$type]
            );
        }
        $arrFields['cardtype']['options'] = $arrCcTypes;
        
        $arrWidgets = array();
        // Initialize the widgets
        foreach ($arrFields as $arrField)
        {
            $strClass = $GLOBALS['TL_FFL'][$arrField['inputType']];
            
            // Continue if the class is not defined
            if (!class_exists($strClass))
            {
                continue;
            }
            
            $objWidget = new $strClass($arrField);
            $objWidget->id = $arrField['name'];
            
            $arrWidgets[$arrField['name']] = $objWidget;
        }
        $objTemplate->fields = $arrWidgets;
        
        return $objTemplate->parse();
    }

}















