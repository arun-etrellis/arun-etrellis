<?php

namespace Testrepository\FrontendCrud\Api\Data;

use Magento\Framework\Api\SearchResultsInterface;
use Testrepository\FrontendCrud\Api\Data\ItemInterface;

interface ItemSearchResultInterface extends SearchResultsInterface
{

    public function getItems();

    
    public function setItems(array $items);
}
