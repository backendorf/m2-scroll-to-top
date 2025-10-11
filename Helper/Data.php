<?php
declare(strict_types=1);

namespace Backendorf\ScrollToTop\Helper;

use \Magento\Framework\App\Helper\AbstractHelper;
use \Magento\Framework\App\Helper\Context;

class Data extends AbstractHelper
{

    /**
     * @param Context $context
     */
    function __construct(Context $context)
    {
        parent::__construct($context);
    }

    /**
     * @return bool
     */
    function isModuleEnabled(): bool
    {
        return $this->scopeConfig->isSetFlag("scrolltotop/general/enabled");
    }

    /**
     * @return mixed
     */
    function getPosition()
    {
        return $this->scopeConfig->getValue("scrolltotop/general/position");
    }

    /**
     * @return mixed
     */
    function getStyle()
    {
        return $this->scopeConfig->getValue("scrolltotop/general/style");
    }
}
