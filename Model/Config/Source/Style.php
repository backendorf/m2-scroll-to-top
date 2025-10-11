<?php
declare(strict_types=1);

namespace Backendorf\ScrollToTop\Model\Config\Source;

use Magento\Framework\Option\ArrayInterface;

class Style implements ArrayInterface
{
    public function toOptionArray(): array
    {
        return [
            [
                'value' => 'round',
                'label' => __('Round')
            ],
            [
                'value' => 'square',
                'label' => __('Square')
            ]
        ];
    }

    public function toArray(): array
    {
        return [
            'round' => __('Round'),
            'square' => __('Square')
        ];
    }
}

