<?php

/**
 * Disable maintenance and settings
 */
unset(
    $GLOBALS['BE_MOD']['design']['tpl_editor'],
    $GLOBALS['BE_MOD']['system']['settings'],
    $GLOBALS['BE_MOD']['system']['maintenance']
);

/**
 * Content elements
 */
$GLOBALS['TL_CTE']['includes']['xing_tickets'] = 'AppBundle\ContentElement\XingTicketsElement';
