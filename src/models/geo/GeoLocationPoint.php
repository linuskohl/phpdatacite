<?php
namespace linuskohl\phpdatacite\models\geo;

/**
 * Class GeoLocationPoint
 *
 * A point location in space.
 *
 * @package   linuskohl\phpdatacite
 * @license   https://opensource.org/licenses/GPL-3.0  GPL-3.0
 * @link      https://github.com/linuskohl/php-datacite
 * @copyright 2018-2020 Linus Kohl <linus@munichresearch.com>
 */
class GeoLocationPoint
{

    /**
     * Latitudinal dimension of point.
     * @var string
     */
    public $pointLatitude;

    /**
     * Longitudinal dimension of point.
     * @var string
     */
    public $pointLongitude;

    /**
     * @return string
     */
    public function getPointLatitude()
    {
        return $this->pointLatitude;
    }

    /**
     * @param string $pointLatitude
     */
    public function setPointLatitude($pointLatitude)
    {
        $this->pointLatitude = $pointLatitude;
    }

    /**
     * @return string
     */
    public function getPointLongitude()
    {
        return $this->pointLongitude;
    }

    /**
     * @param string $pointLongitude
     */
    public function setPointLongitude($pointLongitude)
    {
        $this->pointLongitude = $pointLongitude;
    }

}