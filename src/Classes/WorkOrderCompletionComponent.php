<?php
/**
 * This file is part of the netsuitephp/netsuite-php library
 * AND originally from the NetSuite PHP Toolkit.
 *
 * New content:
 * @package    ryanwinchester/netsuite-php
 * @copyright  Copyright (c) Ryan Winchester
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache-2.0
 * @link       https://github.com/netsuitephp/netsuite-php
 *
 * Original content:
 * @copyright  Copyright (c) NetSuite Inc.
 * @license    https://raw.githubusercontent.com/netsuitephp/netsuite-php/master/original/NetSuite%20Application%20Developer%20License%20Agreement.txt
 * @link       http://www.netsuite.com/portal/developers/resources/suitetalk-sample-applications.shtml
 */

namespace NetSuite\Classes;

class WorkOrderCompletionComponent {
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $item;
    /**
     * @var integer
     */
    public $operationSequenceNumber;
    /**
     * @var float
     */
    public $quantityPer;
    /**
     * @var float
     */
    public $quantity;
    /**
     * @var \NetSuite\Classes\InventoryDetail
     */
    public $componentInventoryDetail;
    /**
     * @var integer
     */
    public $lineNumber;
    static $paramtypesmap = array(
        "item" => "RecordRef",
        "operationSequenceNumber" => "integer",
        "quantityPer" => "float",
        "quantity" => "float",
        "componentInventoryDetail" => "InventoryDetail",
        "lineNumber" => "integer",
    );
}
