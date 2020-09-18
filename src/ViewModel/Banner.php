<?php
/**
 * Banner
 *
 * @copyright Copyright © 2020 Skywire Studios. All rights reserved.
 * @author    tech@skywire.co.uk
 */

namespace Skywire\OutdatedBrowserBanner\ViewModel;


use Magento\Framework\View\Element\Block\ArgumentInterface;

class Banner implements ArgumentInterface
{
    protected $_assetRepo;

    public function __construct(
        \Magento\Framework\View\Asset\Repository $assetRepo
    ) {
        $this->_assetRepo = $assetRepo;
    }

    public function getBannerUrl()
    {
        return $this->_assetRepo->getUrl("Skywire_OutdatedBrowserBanner::images/ie11warn.jpg");
    }
}
