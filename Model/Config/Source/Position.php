<?php

declare(strict_types=1);

namespace Backentec\ScrollToTop\Model\Config\Source;

use Magento\Framework\Data\OptionSourceInterface;

class Position implements OptionSourceInterface
{
    /**
     * @inheritdoc
     */
    public function toOptionArray(): array
    {
        return [
            ['value' => 'left',  'label' => __('Left')],
            ['value' => 'right', 'label' => __('Right')]
        ];
    }
}
