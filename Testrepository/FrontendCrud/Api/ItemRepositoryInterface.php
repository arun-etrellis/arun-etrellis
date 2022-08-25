<?php

namespace Testrepository\FrontendCrud\Api;

use Testrepository\FrontendCrud\Api\Data\ItemInterface;
use Testrepository\FrontendCrud\Api\Data\ItemSearchResultInterface;
use Magento\Framework\Api\SearchCriteriaInterface;
use Magento\Framework\Exception\NoSuchEntityException;

interface ItemRepositoryInterface
{


    public function getById($id);

    
    public function save(ItemInterface $item);

    
    public function delete(ItemInterface $item);

    
    public function getList(SearchCriteriaInterface $searchCriteria);
}
