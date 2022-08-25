<?php

namespace Ak\ModulesList\ViewModel;

use Magento\Cms\Api\PageRepositoryInterface;
use Magento\Framework\Api\SearchCriteriaBuilder;
use Magento\Framework\View\Element\Block\ArgumentInterface;

class CmsPagesList implements ArgumentInterface
{
    /**
     * @var PageRepositoryInterface
     */
    private $pageRepository;

    /**
     * @var SearchCriteriaBuilder
     */
    private $searchCriteriaBuilder;


    protected $moduleList;

    protected $moduleReader;

    /**
     * List constructor.
     * @param PageRepositoryInterface $pageRepository
     * @param SearchCriteriaBuilder $searchCriteriaBuilder
     */
    public function __construct(
        PageRepositoryInterface $pageRepository,
        SearchCriteriaBuilder $searchCriteriaBuilder,
        \Magento\Framework\Module\ModuleList $moduleList,
        \Magento\Framework\Module\Dir\Reader $moduleReader
    ) {
        $this->pageRepository = $pageRepository;
        $this->searchCriteriaBuilder = $searchCriteriaBuilder;
        $this->moduleList = $moduleList;
        $this->moduleReader = $moduleReader;
    }

    /**
     * @return \Magento\Cms\Api\Data\PageInterface[]
     */
    public function getItems()
    {
        $searchCriteria = $this->searchCriteriaBuilder->create();
        $pageSearchResult = $this->pageRepository->getList($searchCriteria);

        return $pageSearchResult->getItems();
    }

    public function getCustomModules()
    {
        $result = [];

        $modules = $this->moduleList->getNames();
        foreach ($modules as $_module) {
            $dir = $this->moduleReader->getModuleDir(null, $_module);
            if (strpos($dir, 'app/code') !== false) {
                $result[] = $_module;
            }
        }

        //print_r($result); exit();

        return $result;
    }
}

