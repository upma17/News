<?php
namespace Mywork\News\Block\Adminhtml;

/**
 * Admin news 
 */
class News extends \Magento\Backend\Block\Widget\Grid\Container
{
    /**
     * Constructor
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_controller = 'adminhtml_news';
        $this->_blockGroup = 'Mywork_News';
        $this->_headerText = __('News');
        $this->_addButtonLabel = __('Add New News');

        parent::_construct();
    }

    /**
     * @return $this
     */
    protected function _prepareLayout()
    {

        $onClick = "setLocation('" . $this->getUrl('*/import') . "')";

        $this->getToolbar()->addChild(
            'options_button',
            \Magento\Backend\Block\Widget\Button::class,
            ['label' => __('Import News'), 'onclick' => $onClick]
        );

        return parent::_prepareLayout();
    }
}
