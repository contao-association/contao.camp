<?php

namespace App\ContentElement;

use Contao\BackendTemplate;
use Contao\ContentElement;
use Patchwork\Utf8;

class XingTicketsElement extends ContentElement
{
    /**
     * Template
     * @var string
     */
    protected $strTemplate = 'ce_xing_tickets';

    /**
     * @inheritdoc
     */
    public function generate()
    {
        if ('BE' === TL_MODE) {
            /** @var BackendTemplate|object $objTemplate */
            $objTemplate = new \BackendTemplate('be_wildcard');

            $objTemplate->wildcard = '### ' . Utf8::strtoupper($GLOBALS['TL_LANG']['CTE'][$this->type][0]) . ' ###';
            $objTemplate->title = $this->headline;

            return $objTemplate->parse();
        }

        return parent::generate();
    }

    /**
     * @inheritdoc
     */
    protected function compile()
    {
    }
}
