<?php

namespace Testrepository\FrontendCrud\Api\Data;

use Magento\Framework\Api\ExtensibleDataInterface;

interface ItemInterface extends ExtensibleDataInterface
{
    
    public function getId();

    
    public function setId($id);

    
    public function getName();

    
    public function setName($name);

    public function getEmail();

    
    public function setEmail($email);
    
    public function getTelephone();

    
    public function setTelephone($telephone);

    
    public function getComment();

   
    public function setComment($comment);

}
