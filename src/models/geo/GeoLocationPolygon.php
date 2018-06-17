<?php
namespace linuskohl\phpdatacite\models\geo;

use linuskohl\phpdatacite\models\geo\GeoLocationPoint;

/**
 * Class GeoLocationPolygon
 *
 * A drawn polygon area, defined by a set of points and lines connecting the points in a closed chain.
 * A polygon is delimited by geographic points. Each point is defined by a longitude/latitude pair.
 * The last point should be the same as the first point.
 *
 * @package   linuskohl\phpdatacite
 * @license   https://opensource.org/licenses/GPL-3.0  GPL-3.0
 * @link      https://github.com/linuskohl/php-datacite
 * @copyright 2018-2020 Linus Kohl <linus@munichresearch.com>
 */
class GeoLocationPolygon
{

    /**
     * Point locations in a polygon. (4..n)
     * @var \linuskohl\phpdatacite\models\geo\GeoLocationPoint[]
     */
    public $polygonPoints;

    /**
     * For any bound area that is larger than half the earth, define a (random) point inside.
     * inPolygonPoint is only necessary to indicate the "inside" of the polygon if the polygon is larger
     * than half the earth. Otherwise the smallest of the two areas bounded by the polygon will be used.
     * @var \linuskohl\phpdatacite\models\geo\GeoLocationPoint|null
     */
    public $inPolygonPoint;

    /**
     * @return \linuskohl\phpdatacite\models\geo\GeoLocationPoint[]
     */
    public function getPolygonPoints()
    {
        return $this->polygonPoints;
    }

    /**
     * @param \linuskohl\phpdatacite\models\geo\GeoLocationPoint[] $polygonPoints
     */
    public function setPolygonPoints($polygonPoints)
    {
        $this->polygonPoints = $polygonPoints;
    }

    /**
     * @return \linuskohl\phpdatacite\models\geo\GeoLocationPoint|null
     */
    public function getInPolygonPoint()
    {
        return $this->inPolygonPoint;
    }

    /**
     * @param \linuskohl\phpdatacite\models\geo\GeoLocationPoint $inPolygonPoint
     */
    public function setInPolygonPoint($inPolygonPoint)
    {
        $this->inPolygonPoint = $inPolygonPoint;
    }

}