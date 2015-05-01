<?php
/**
 *
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Magento\Tax\Api\Data;

use Magento\Framework\Api\SearchResultsInterface;

interface TaxRateSearchResultsInterface extends SearchResultsInterface
{
    /**
     * Get items
     *
     * @api
     * @return \Magento\Tax\Api\Data\TaxRateInterface[]
     */
    public function getItems();

    /**
     * Set items
     *
     * @api
     * @param \Magento\Tax\Api\Data\TaxRateInterface[] $items
     * @return $this
     */
    public function setItems(array $items = null);
}
