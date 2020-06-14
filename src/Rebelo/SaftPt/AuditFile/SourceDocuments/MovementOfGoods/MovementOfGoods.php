<?php
/*
 * The MIT License
 *
 * Copyright 2020 João Rebelo.
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 */
declare(strict_types=1);

namespace Rebelo\SaftPt\AuditFile\SourceDocuments\MovementOfGoods;

use Rebelo\SaftPt\AuditFile\SourceDocuments\ADocument;

/**
 * MovementOfGoods
 *
 * @author João Rebelo
 * @since 1.0.0
 */
class MovementOfGoods extends ADocument
{
    /**
     * Node Name
     * @since 1.0.0
     */
    const N_MOVEMENTOFGOODS = "MovementOfGoods";
    const N_DOCUMENTNUMBER  = "DocumentNumber";
////<xs:element name = "DocumentStatus">
    const N_MOVEMENTDATE      = "MovementDate";
    const N_MOVEMENTTYPE      = "MovementType";
    const N_SUPPLIERID        = "SupplierID";
    const N_MOVEMENTCOMMENTS  = "MovementComments";
    const N_SHIPTO            = "ShipTo";
    const N_SHIPFROM          = "ShipFrom";
    const N_MOVEMENTENDTIME   = "MovementEndTime";
    const N_MOVEMENTSTARTTIME = "MovementStartTime";
    const N_ATDOCCODEID       = "ATDocCodeID";

////<xs:element name = "Line" maxOccurs = "unbounded">
////"DocumentTotals">

    /**
     *
     * @since 1.0.0
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     *
     * @param \SimpleXMLElement $node
     * @return \SimpleXMLElement
     * @since 1.0.0
     */
    public function createXmlNode(\SimpleXMLElement $node): \SimpleXMLElement
    {

    }

    /**
     *
     * @param \SimpleXMLElement $node
     * @return void
     * @since 1.0.0
     */
    public function parseXmlNode(\SimpleXMLElement $node): void
    {

    }
}