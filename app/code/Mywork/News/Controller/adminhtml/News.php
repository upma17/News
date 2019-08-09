<?php
namespace Mywork\News\Controller\Adminhtml;

/**
 * Admin News news edit controller
 */
class News extends Actions
{
    /**
     * Form session key
     * @var string
     */
    protected $_formSessionKey  = 'news_post_form_data';

    /**
     * Allowed Key
     * @var string
     */
    protected $_allowedKey      = 'Mywork_News::post';

    /**
     * Model class name
     * @var string
     */
    protected $_modelClass      = 'Mywork\News\Model\Post';

    /**
     * Active menu key
     * @var string
     */
    protected $_activeMenu      = 'Mywork_News::post';

    /**
     * Status field name
     * @var string
     */
    protected $_statusField     = 'is_active';
}
