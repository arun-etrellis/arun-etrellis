<?php

namespace Testrepository\CustomTable\Controller\Adminhtml\Table;

class Delete extends \Testrepository\CustomTable\Controller\Adminhtml\Table
{

    /**
     * Delete action
     *
     * @return \Magento\Framework\Controller\ResultInterface
     */
    public function execute()
    {
        /** @var \Magento\Backend\Model\View\Result\Redirect $resultRedirect */
        $resultRedirect = $this->resultRedirectFactory->create();
        // check if we know what should be deleted
        $id = $this->getRequest()->getParam('table_id');
        if ($id) {
            try {
                // init model and delete
                $model = $this->_objectManager->create(\Testrepository\CustomTable\Model\Table::class);
                $model->load($id);
                $model->delete();
                // display success message
                $this->messageManager->addSuccessMessage(__('You deleted the Table.'));
                // go to grid
                return $resultRedirect->setPath('*/*/');
            } catch (\Exception $e) {
                // display error message
                $this->messageManager->addErrorMessage($e->getMessage());
                // go back to edit form
                return $resultRedirect->setPath('*/*/edit', ['table_id' => $id]);
            }
        }
        // display error message
        $this->messageManager->addErrorMessage(__('We can\'t find a Table to delete.'));
        // go to grid
        return $resultRedirect->setPath('*/*/');
    }
}

