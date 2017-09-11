<?php

/**
 * Palettes
 */
$GLOBALS['TL_DCA']['tl_content']['palettes']['xing_tickets'] = '{type_legend},type,headline;{include_legend},xing_alias;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID;{invisible_legend:hide},invisible,start,stop';

/**
 * Fields
 */
$GLOBALS['TL_DCA']['tl_content']['fields']['xing_alias'] = [
    'label'     => &$GLOBALS['TL_LANG']['tl_content']['xing_alias'],
    'exclude'   => true,
    'inputType' => 'text',
    'eval'      => ['mandatory' => true, 'maxlength' => 64, 'tl_class' => 'w50'],
    'sql'       => "varchar(64) NOT NULL default ''",
];
