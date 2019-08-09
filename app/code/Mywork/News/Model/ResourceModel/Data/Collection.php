<?php
namespace Mywork\News\Model\ResourceModel\Data;


use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;


class Collection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init(
	    'Mywork\News\Model\Data',
	    'Mywork\News\Model\ResourceModel\Data'
	);
    }
}