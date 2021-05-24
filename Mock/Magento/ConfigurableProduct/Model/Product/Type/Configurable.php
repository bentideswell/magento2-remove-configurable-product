<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Magento\ConfigurableProduct\Model\Product\Type;

class Configurable extends \Magento\Catalog\Model\Product\Type\AbstractType
{
    /**
     * Product type code
     */
    const TYPE_CODE = 'configurable';
    
    /**
     *
     */
    public function deleteTypeSpecificData(\Magento\Catalog\Model\Product $product)
    {
        return $this;
    }
}
