<?php

//declare(strict_types=1);

namespace Testrepository\CustomTable\Api\Data;

interface TableSearchResultsInterface extends \Magento\Framework\Api\SearchResultsInterface
{

    /**
     * Get Table list.
     * @return \Testrepository\CustomTable\Api\Data\TableInterface[]
     */
    public function getItems();

    /**
     * Set title list.
     * @param \Testrepository\CustomTable\Api\Data\TableInterface[] $items
     * @return $this
     */
    public function setItems(array $items);
}

