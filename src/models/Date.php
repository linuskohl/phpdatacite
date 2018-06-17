<?php
namespace linuskohl\phpdatacite\models;


/**
 * Class Date
 *
 * Different dates relevant to the work.
 *
 * @package   linuskohl\phpdatacite
 * @license   https://opensource.org/licenses/GPL-3.0  GPL-3.0
 * @link      https://github.com/linuskohl/phpdatacite
 * @copyright 2018-2020 Linus Kohl <linus@munichresearch.com>
 */
class Date
{

    const TYPE_Accepted = 'Accepted';
    const TYPE_Available = 'Available';
    const TYPE_Copyrighted = 'Copyrighted';
    const TYPE_Collected = 'Collected';
    const TYPE_Created = 'Created';
    const TYPE_Issued = 'Issued';
    const TYPE_Submitted = 'Submitted';
    const TYPE_Updated = 'Updated';
    const TYPE_Valid = 'Valid';
    const TYPE_Other = 'Other';

    /**
     * YYYY,YYYY-MM-DD, YYYYMM-DDThh:mm:ssTZD or any other format or level of granularity described in
     * W3CDTF.22 Use RKMSISO860123 standard for depicting date ranges.
     * @var \DateTime
     */
    public $date;

    /**
     * The type of date.
     * @var string
     */
    public $dateType;

    /**
     * Specific information about the date, if appropriate.
     * @var string|null
     */
    public $dateInformation; //String

    /**
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param \DateTime $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * @return string
     */
    public function getDateType()
    {
        return $this->dateType;
    }

    /**
     * @param string $dateType
     */
    public function setDateType($dateType)
    {
        $this->dateType = $dateType;
    }

    /**
     * @return string|null
     */
    public function getDateInformation()
    {
        return $this->dateInformation;
    }

    /**
     * @param string $dateInformation
     */
    public function setDateInformation($dateInformation)
    {
        $this->dateInformation = $dateInformation;
    }

}