<?php
/**
 * Mail Inliner plugin for Craft CMS 3.x
 *
 * Takes us back to 1999
 *
 * @link      https://www.brainpink.nl
 * @copyright Copyright (c) 2018 Brainpink
 */

namespace brainpink\craft\mailinliner\services;

use brainpink\craft\mailinliner\MailInliner;

use Craft;
use craft\base\Component;
use TijsVerkoyen\CssToInlineStyles\CssToInlineStyles;

/**
 * @author    Brainpink
 * @package   MailInliner
 * @since     0.1.0
 */
class MailInlinerService extends Component
{
    // Public Methods
    // =========================================================================

    /*
     * @return mixed
     */
    public function compile($body, $options = array())
    {
        $body = "<!-- body -->\n" . $body . "\n<!-- /body -->";
        $converter = new CssToInlineStyles();

        return (string) $converter->convert($body);
    }
}
