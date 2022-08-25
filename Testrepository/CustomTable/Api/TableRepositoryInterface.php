<?php
declare(strict_types=1);

namespace Testrepository\CustomTable\Api;

use Magento\Framework\Api\SearchCriteriaInterface;

interface TableRepositoryInterface
{

    /**
     * Save Table
     * @param \Testrepository\CustomTable\Api\Data\TableInterface $table
     * @return \Testrepository\CustomTable\Api\Data\TableInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function save(
        \Testrepository\CustomTable\Api\Data\TableInterface $table
    );

    /**
     * Retrieve Table
     * @param string $tableId
     * @return \Testrepository\CustomTable\Api\Data\TableInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function get($tableId);

    /**
     * Retrieve Table matching the specified criteria.
     * @param \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
     * @return \Testrepository\CustomTable\Api\Data\TableSearchResultsInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getList(
        \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
    );

    /**
     * Delete Table
     * @param \Testrepository\CustomTable\Api\Data\TableInterface $table
     * @return bool true on success
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function delete(
        \Testrepository\CustomTable\Api\Data\TableInterface $table
    );

    /**
     * Delete Table by ID
     * @param string $tableId
     * @return bool true on success
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function deleteById($tableId);
}

