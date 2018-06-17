<?php
namespace linuskohl\phpdatacite\models;


/**
 * Class AwardNumber
 *
 * The code assigned by the funder to a sponsored award (grant).
 *
 * @package   linuskohl\phpdatacite
 * @license   https://opensource.org/licenses/GPL-3.0  GPL-3.0
 * @link      https://github.com/linuskohl/php-datacite
 * @copyright 2018-2020 Linus Kohl <linus@munichresearch.com>
 */
class AwardNumber
{

    /**
     * Award number.
     * @var string
     */
    public $awardNumber;

    /**
     * The URI leading to a page provided by the funder for more information about the award (grant).
     * @var string
     */
    public $awardURI;

    /**
     * @return string
     */
    public function getAwardNumber()
    {
        return $this->awardNumber;
    }

    /**
     * @param string $awardNumber
     */
    public function setAwardNumber($awardNumber)
    {
        $this->awardNumber = $awardNumber;
    }

    /**
     * @return string
     */
    public function getAwardURI()
    {
        return $this->awardURI;
    }

    /**
     * @param string $awardURI
     */
    public function setAwardURI($awardURI)
    {
        $this->awardURI = $awardURI;
    }

}