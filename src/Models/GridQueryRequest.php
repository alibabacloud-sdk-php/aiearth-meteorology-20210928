<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIEarthMeteorology\V20210928\Models;

use AlibabaCloud\Tea\Model;

class GridQueryRequest extends Model
{
    /**
     * @example RADAR_CR（雷达组合反射率）、 PRECIPITATION（降水） 、RELATIVE_HUMIDITY（相对湿度）、TEMPERATURE（气温）、 WIND_U（U风） 、WIND_V（V风）
     *
     * @var string
     */
    public $element;

    /**
     * @example yyyyMMdd_HHmmss
     *
     * @var string
     */
    public $forecastTimestamp;

    /**
     * @example 37.5
     *
     * @var float
     */
    public $latitude;

    /**
     * @example 113
     *
     * @var float
     */
    public $longitude;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNo;

    /**
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example TEN_MINUTES_FORECAST（逐十分钟预报）、 HOURLY_FORECAST（逐小时预报）  、THREE_HOURS_FORECAST（逐三小时预报）
     *
     * @var string
     */
    public $product;

    /**
     * @example yyyyMMdd_HHmmss
     *
     * @var string
     */
    public $reportTimestamp;
    protected $_name = [
        'element'           => 'element',
        'forecastTimestamp' => 'forecastTimestamp',
        'latitude'          => 'latitude',
        'longitude'         => 'longitude',
        'pageNo'            => 'pageNo',
        'pageSize'          => 'pageSize',
        'product'           => 'product',
        'reportTimestamp'   => 'reportTimestamp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->element) {
            $res['element'] = $this->element;
        }
        if (null !== $this->forecastTimestamp) {
            $res['forecastTimestamp'] = $this->forecastTimestamp;
        }
        if (null !== $this->latitude) {
            $res['latitude'] = $this->latitude;
        }
        if (null !== $this->longitude) {
            $res['longitude'] = $this->longitude;
        }
        if (null !== $this->pageNo) {
            $res['pageNo'] = $this->pageNo;
        }
        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }
        if (null !== $this->product) {
            $res['product'] = $this->product;
        }
        if (null !== $this->reportTimestamp) {
            $res['reportTimestamp'] = $this->reportTimestamp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GridQueryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['element'])) {
            $model->element = $map['element'];
        }
        if (isset($map['forecastTimestamp'])) {
            $model->forecastTimestamp = $map['forecastTimestamp'];
        }
        if (isset($map['latitude'])) {
            $model->latitude = $map['latitude'];
        }
        if (isset($map['longitude'])) {
            $model->longitude = $map['longitude'];
        }
        if (isset($map['pageNo'])) {
            $model->pageNo = $map['pageNo'];
        }
        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }
        if (isset($map['product'])) {
            $model->product = $map['product'];
        }
        if (isset($map['reportTimestamp'])) {
            $model->reportTimestamp = $map['reportTimestamp'];
        }

        return $model;
    }
}
