<?php

namespace Checkoutcustom\Salesman\Ui\Component\Listing\Column;

class JobActions extends \Magento\Ui\Component\Listing\Columns\Column
{
    protected $urlBuilder;

    const URL_EDIT_PATH = 'salesman/index/edit';
    const URL_DELETE_PATH = 'salesman/index/delete';

    public function __construct(
        \Magento\Framework\UrlInterface $urlBuilder,
        \Magento\Framework\View\Element\UiComponent\ContextInterface $context,
        \Magento\Framework\View\Element\UiComponentFactory $uiComponentFactory,
        array $components = [],
        array $data = []
    ) {
        $this->urlBuilder = $urlBuilder;
        parent::__construct($context, $uiComponentFactory, $components, $data);
    }

    public function prepareDataSource(array $dataSource)
    {
        if (isset($dataSource['data']['items'])) {
            foreach ($dataSource['data']['items'] as & $item) {
                if (isset($item['job_id'])) {
                    $item[$this->getData('name')] = [
                        'edit' => [
                            'href' => $this->urlBuilder->getUrl(
                                static::URL_EDIT_PATH,
                                [
                                    'job_id' => $item['job_id']
                                ]
                            ),
                            'label' => __('Edit')
                        ],
                        'delete' => [
                            'href' => $this->urlBuilder->getUrl(
                                static::URL_DELETE_PATH,
                                [
                                    'job_id' => $item['job_id']
                                ]
                            ),
                            'label' => __('Delete')
                        ],
                    ];
                }
            }
        }
        return $dataSource;
    }
}
