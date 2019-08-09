<?php
namespace Mywork\News\Model;
	 
use Magento\Framework\Model\AbstractModel;
	 
	class Data extends AbstractModel
	{	
	    protected function _construct()
	    {
	        $this->_init('Mywork\News\Model\ResourceModel\Data');
	    }
	}