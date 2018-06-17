<?php
namespace linuskohl\phpdatacite\models;

use linuskohl\phpdatacite\models\geo\PolygonPoint;
use linuskohl\phpdatacite\models\geo\GeoLocationBox;
use linuskohl\phpdatacite\models\geo\GeoLocationPoint;
use linuskohl\phpdatacite\models\geo\GeoLocationPolygon;

/**
 * Class GeoLocation
 *
 * Spatial region or named place where the data was gathered or about which the data is focused.
 *
 * @package   linuskohl\phpdatacite
 * @license   https://opensource.org/licenses/GPL-3.0  GPL-3.0
 * @link      https://github.com/linuskohl/phpdatacite
 * @copyright 2018-2020 Linus Kohl <linus@munichresearch.com>
 */
class GeoLocation
{

    /**
     * The spatial limits of a box.
     * @var \linuskohl\phpdatacite\models\geo\GeoLocationBox|null
     */
    public $geoLocationBox;

    /**
     * Description of a geographic location
     * @var string|null
     */
    public $geoLocationPlace;

    /**
     * A point location in space.
     * @var \linuskohl\phpdatacite\models\geo\GeoLocationPoint|null
     */
    public $geoLocationPoint;

    /**
     * A drawn polygon area, defined by a set of points and lines connecting the points in a closed chain
     * @var \linuskohl\phpdatacite\models\geo\GeoLocationPolygon[]|null
     */
    public $geoLocationPolygons;

    /**
     * @return \linuskohl\phpdatacite\models\geo\GeoLocationBox|null
     */
    public function getGeoLocationBox()
    {
        return $this->geoLocationBox;
    }

    /**
     * @param \linuskohl\phpdatacite\models\geo\GeoLocationBox $geoLocationBox
     */
    public function setGeoLocationBox($geoLocationBox)
    {
        $this->geoLocationBox = $geoLocationBox;
    }

    /**
     * @return null|string
     */
    public function getGeoLocationPlace()
    {
        return $this->geoLocationPlace;
    }

    /**
     * @param string $geoLocationPlace
     */
    public function setGeoLocationPlace($geoLocationPlace)
    {
        $this->geoLocationPlace = $geoLocationPlace;
    }

    /**
     * @return \linuskohl\phpdatacite\models\geo\GeoLocationPoint|null
     */
    public function getGeoLocationPoint()
    {
        return $this->geoLocationPoint;
    }

    /**
     * @param \linuskohl\phpdatacite\models\geo\GeoLocationPoint  $geoLocationPoint
     */
    public function setGeoLocationPoint($geoLocationPoint)
    {
        $this->geoLocationPoint = $geoLocationPoint;
    }

    /**
     * @return \linuskohl\phpdatacite\models\geo\GeoLocationPolygon[]|null
     */
    public function getGeoLocationPolygons()
    {
        return $this->geoLocationPolygons;
    }

    /**
     * @param \linuskohl\phpdatacite\models\geo\GeoLocationPolygon[]  $geoLocationPolygon
     */
    public function setGeoLocationPolygons($geoLocationPolygons)
    {
        $this->geoLocationPolygons = $geoLocationPolygons;
    }

}