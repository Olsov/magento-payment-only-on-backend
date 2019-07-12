<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Mteam\Businesscus\Block\Form;

/**
 * Block for Bank Transfer payment method form
 */
class Businesscus extends \Mteam\Businesscus\Block\Form\AbstractInstruction
{
    /**
     * Bank transfer template
     *
     * @var string
     */
    protected $_template = 'Mteam_Businesscus::form/banktransfer.phtml';
}
