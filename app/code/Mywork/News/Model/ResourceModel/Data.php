<?php
	 
namespace Mywork\News\Model\ResourceModel;


use \Magento\Framework\Model\ResourceModel\Db\AbstractDb;
	 
class Data extends AbstractDb
{
    protected function _construct()
    {
        $this->_init('news', 'news_id');
    }
}