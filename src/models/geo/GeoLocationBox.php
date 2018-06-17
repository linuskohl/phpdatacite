<?php
namespace linuskohl\phpdatacite\models\geo;

/**
 * Class GeoLocationBox
 *
 * The spatial limits of a box.
 *
 * @package   linuskohl\phpdatacite
 * @license   https://opensource.org/licenses/GPL-3.0  GPL-3.0
 * @link      https://github.com/linuskohl/php-datacite
 * @copyright 2018-2020 Linus Kohl <linus@munichresearch.com>
 */
class GeoLocationBox
{
    /**
     * Easter longitudinal dimension of box
     * @var string
     */
    public $eastBoundLongitude;

    /**
     * Northern longitudinal dimension of box
     * @var string
     */
    public $northBoundLatitude;

    /**
     * Southern longitudinal dimension of box
     * @var string
     */
    public $southBoundLatitude;

    /**
     * Western longitudinal dimension of box
     * @var string
     */
    public $westBoundLongitude;

    /**
     * @return string
     */
    public function getEastBoundLongitude()
    {
        return $this->eastBoundLongitude;
    }

    /**
     * @param string $eastBoundLongitude
     */
    public function setEastBoundLongitude($eastBoundLongitude)
    {
        $this->eastBoundLongitude = $eastBoundLongitude;
    }

    /**
     * @return string
     */
    public function getNorthBoundLatitude()
    {
        return $this->northBoundLatitude;
    }

    /**
     * @param string $northBoundLatitude
     */
    public function setNorthBoundLatitude($northBoundLatitude)
    {
        $this->northBoundLatitude = $northBoundLatitude;
    }

    /**
     * @return string
     */
    public function getSouthBoundLatitude()
    {
        return $this->southBoundLatitude;
    }

    /**
     * @param string $southBoundLatitude
     */
    public function setSouthBoundLatitude($southBoundLatitude)
    {
        $this->southBoundLatitude = $southBoundLatitude;
    }

    /**
     * @return string
     */
    public function getWestBoundLongitude()
    {
        return $this->westBoundLongitude;
    }

    /**
     * @param string $westBoundLongitude
     */
    public function setWestBoundLongitude($westBoundLongitude)
    {
        $this->westBoundLongitude = $westBoundLongitude;
    }

}