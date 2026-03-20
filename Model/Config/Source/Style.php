<?php

declare(strict_types=1);

namespace Backentec\ScrollToTop\Model\Config\Source;

use Magento\Framework\Data\OptionSourceInterface;

class Style implements OptionSourceInterface
{
    /**
     * @inheritdoc
     */
    public function toOptionArray(): array
    {
        return [
            ['value' => 'round',  'label' => __('Round')],
            ['value' => 'square', 'label' => __('Square')]
        ];
    }
}
