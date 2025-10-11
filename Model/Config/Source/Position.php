<?php
declare(strict_types=1);

namespace Backendorf\ScrollToTop\Model\Config\Source;

use Magento\Framework\Option\ArrayInterface;

class Position implements ArrayInterface
{

    public function toOptionArray(): array
    {
        return [
            [
                'value' => 'left',
                'label' => __('Left')
            ],
            [
                'value' => 'right',
                'label' => __('Right')
            ]
        ];
    }

    public function toArray(): array
    {
        return [
            'left' => __('Left'),
            'right' => __('Right')
        ];
    }
}
