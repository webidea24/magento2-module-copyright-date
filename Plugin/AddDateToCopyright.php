<?php

namespace Webidea24\CopyrightDate\Plugin;

use Magento\Theme\Block\Html\Footer;

class AddDateToCopyright
{
    /**
     * @param Footer $subject
     * @param callable $proceed
     * @return string
     */
    public function aroundGetCopyright(Footer $subject, callable $proceed): string
    {
        $copyright = (string)$proceed();

        return str_replace('{{year}}', date('Y'), $copyright);
    }
}
