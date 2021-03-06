<?php
/**
 * The MetaModels extension allows the creation of multiple collections of custom items,
 * each with its own unique set of selectable attributes, with attribute extendability.
 * The Front-End modules allow you to build powerful listing and filtering of the
 * data in each collection.
 *
 * PHP version 5
 * 
 * @package     MetaModels
 * @subpackage  AttributeCountry
 * @author      Oliver Hoff <oliver@hofff.com>
 * @author      Andreas Isaak <andy.jared@googlemail.com>
 * @author      Christian Schiffler <c.schiffler@cyberspectrum.de>
 * @author      Cliff Parnitzky <github@cliff-parnitzky.de>
 * @copyright   The MetaModels team.
 * @license     LGPL.
 * @filesource
 */

$GLOBALS['TL_DCA']['tl_metamodel_dcasetting']['metasubselectpalettes']['attr_id']['country'] = array
(
    'presentation' => array
    (
        'tl_class'
    ),
    'functions' => array
    (
        'mandatory',
        'includeBlankOption'
    ),
    'overview' => array
    (
        'filterable',
        'searchable',
    )
);
