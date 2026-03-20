<?php

declare(strict_types=1);

namespace Backentec\ScrollToTop\Helper;

use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Framework\App\Helper\Context;
use Magento\Store\Model\ScopeInterface;

class Data extends AbstractHelper
{
    private const XML_PATH_ENABLED  = 'scrolltotop/general/enabled';
    private const XML_PATH_POSITION = 'scrolltotop/general/position';
    private const XML_PATH_STYLE    = 'scrolltotop/general/style';

    /**
     * @param Context $context
     */
    public function __construct(Context $context)
    {
        parent::__construct($context);
    }

    /**
     * Check if the module is enabled for the current scope.
     */
    public function isModuleEnabled(): bool
    {
        return $this->scopeConfig->isSetFlag(
            self::XML_PATH_ENABLED,
            ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * Get the configured button position (left|right).
     */
    public function getPosition(): string
    {
        return (string) $this->scopeConfig->getValue(
            self::XML_PATH_POSITION,
            ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * Get the configured button style (round|square).
     */
    public function getStyle(): string
    {
        return (string) $this->scopeConfig->getValue(
            self::XML_PATH_STYLE,
            ScopeInterface::SCOPE_STORE
        );
    }
}
