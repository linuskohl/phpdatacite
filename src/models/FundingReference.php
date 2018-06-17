<?php

namespace linuskohl\phpdatacite\models;

use linuskohl\phpdatacite\models\identifiers\FunderIdentifier;
use linuskohl\phpdatacite\models\AwardNumber;

/**
 * Class FundingReference
 *
 * Information about financial support (funding) for the resource being registered.
 *
 * @package   linuskohl\phpdatacite
 * @license   https://opensource.org/licenses/GPL-3.0  GPL-3.0
 * @link      https://github.com/linuskohl/php-datacite
 * @copyright 2018-2020 Linus Kohl <linus@munichresearch.com>
 */
class FundingReference
{

    const TYPE_IDENTIFIER_ISNI = 'ISNI';
    const TYPE_IDENTIFIER_GRID = 'GRID';
    const TYPE_IDENTIFIER_CROSSREF_FUNDER = 'Crossref Funder';
    const TYPE_IDENTIFIER_Other = 'Other';

    /**
     * Name of the funding provider.
     * @var string
     */
    public $funderName;

    /**
     * Uniquely identifies a funding entity, according to various types
     * @var \linuskohl\phpdatacite\models\identifiers\FunderIdentifier|null
     */
    public $funderIdentifier;

    /**
     * The code assigned by the funder to a sponsored award (grant).
     * @var \linuskohl\phpdatacite\models\AwardNumber|null
     */
    public $awardNumber;

    /**
     * The human readable title or name of the award (grant).
     * @var string|null
     */
    public $awardTitle;

    /**
     * @return string
     */
    public function getFunderName()
    {
        return $this->funderName;
    }

    /**
     * @param string $funderName
     */
    public function setFunderName($funderName)
    {
        $this->funderName = $funderName;
    }

    /**
     * @return \linuskohl\phpdatacite\models\identifiers\FunderIdentifier|null
     */
    public function getFunderIdentifier()
    {
        return $this->funderIdentifier;
    }

    /**
     * @param \linuskohl\phpdatacite\models\identifiers\FunderIdentifier $funderIdentifier
     */
    public function setFunderIdentifier($funderIdentifier)
    {
        $this->funderIdentifier = $funderIdentifier;
    }

    /**
     * @return \linuskohl\phpdatacite\models\AwardNumber|null
     */
    public function getAwardNumber()
    {
        return $this->awardNumber;
    }

    /**
     * @param \linuskohl\phpdatacite\models\AwardNumber $awardNumber
     */
    public function setAwardNumber($awardNumber)
    {
        $this->awardNumber = $awardNumber;
    }

    /**
     * @return string|null
     */
    public function getAwardTitle()
    {
        return $this->awardTitle;
    }

    /**
     * @param string $awardTitle
     */
    public function setAwardTitle($awardTitle)
    {
        $this->awardTitle = $awardTitle;
    }


}