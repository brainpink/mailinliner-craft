<?php
/**
 * Mail Inliner plugin for Craft CMS 3.x
 *
 * Takes us back to 1999
 *
 * @link      https://www.brainpink.nl
 * @copyright Copyright (c) 2018 Brainpink
 */

namespace brainpink\craft\mailinliner\twigextensions;

use brainpink\craft\mailinliner\MailInliner;

use Craft;
use brainpink\craft\mailinliner\twigextensions\TokenParser\MailInliner_TokenParser;
use Twig\Extension\AbstractExtension;

/**
 * @author    Brainpink
 * @package   MailInliner
 * @since     0.1.0
 */
class MailInlinerTwigExtension extends AbstractExtension
{
    /**
     * @inheritdoc
     */
    public function getName()
    {
        return 'mailinliner';
    }

    /**
     * @inheritdoc
     */
    public function getTokenParsers()
    {
        return array(
            new MailInliner_TokenParser()
        );
    }
}
