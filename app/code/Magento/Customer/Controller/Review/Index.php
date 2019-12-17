<?php
/**
 *
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\Customer\Controller\Review;

use Magento\Framework\App\Action\HttpGetActionInterface;

/**
 * Deprecated class which was in use as main page in Customer Account "My Product Reviews" tab.
 *
 * @deprecated Remove Customer module's dependency on Review. Non-used class.
 * @see \Magento\Review\Controller\Customer\Index
 */
class Index extends \Magento\Customer\Controller\Review implements HttpGetActionInterface
{
}
