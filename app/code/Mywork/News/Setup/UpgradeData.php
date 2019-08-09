<?php 
/**
 * Copyright © 2016 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mywork\News\Setup;

use Magento\Framework\Setup\UpgradeDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

/**
 * Upgrade Data script
 */

class UpgradeData implements UpgradeDataInterface
{
    /**
     * {@inheritdoc}
     * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
     */
    public function upgrade(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();
        if ($context->getVersion()
            && version_compare($context->getVersion(), '1.2.0') < 0
        ) {
            $table = $setup->getTable('news');
            $setup->getConnection()
                ->insertForce($table, ['news' => 'news text 3', 'title' => 'title 3']);

            $setup->getConnection()
                ->update($table, ['title' => 'title 1'], 'news_id IN (1)');
				
			$setup->getConnection()
                ->update($table, ['title' => 'title 2'], 'news_id IN (2)');	
        }
        $setup->endSetup();
    }
}