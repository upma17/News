<?php
namespace Mywork\News\Block;


use Magento\Framework\View\Element\Template\Context;
use Mywork\News\Model\Data;
use Magento\Framework\View\Element\Template;


class News extends Template
{
        
	public function __construct(Context $context, Data $model)
	{
                $this->model = $model;
		parent::__construct($context);
                
	}
        
	public function sayHello()
	{
		return __('Hello World');
	}
	public function getNewsCollection()
	{
		$newsCollection = $this->model->getCollection();
		return $newsCollection;
	}
}