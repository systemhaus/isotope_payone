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
 * Payment methods
 */
\Isotope\Model\Payment::registerModelType('payone_client', 'Isotope\Model\Payment\PayoneClient');
