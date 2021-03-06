<?php
/**
 * @author : Edwin Jacobs, email: ejacobs@emico.nl.
 * @copyright : Copyright Emico B.V. 2019.
 */

namespace Emico\Tweakwise\Model\Observer;

use Magento\Framework\Event\Observer;

class CatalogNavigationLastPageRedirect extends CatalogLastPageRedirect
{
    /**
     * @param Observer $observer
     */
    public function execute(Observer $observer)
    {
        if ($this->config->isLayeredEnabled()) {
            parent::execute($observer);
        }
    }
}