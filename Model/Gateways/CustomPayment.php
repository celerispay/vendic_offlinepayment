<?php
declare(strict_types=1);

/**
 * @author Tjitse (Vendic)
 * Created on 23-08-18 09:31
 */

namespace Vendic\OfflinePayments\Model\Gateways;

use Vendic\OfflinePayments\Model\Method;

class CustomPayment extends Method
{
    public $_code = 'custompayment';
    public $_gatewayCode = 'custompayment';
}