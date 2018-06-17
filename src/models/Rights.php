<?php
namespace linuskohl\phpdatacite\models;

/**
 * Class Rights
 *
 * Any rights information for this resource.
 *
 * @package   linuskohl\phpdatacite
 * @license   https://opensource.org/licenses/GPL-3.0  GPL-3.0
 * @link      https://github.com/linuskohl/phpdatacite
 * @copyright 2018-2020 Linus Kohl <linus@munichresearch.com>
 */
class Rights
{
    /**
     * Provide a rights management statement for the resource or reference a service providing such information.
     * Include embargo information if applicable. Use the complete title of a license and include version
     * information if applicable.
     * @var string
     */
    public $rights;

    /**
     * The URI of the license.
     * @var string|null
     */
    public $rightsURI;

    /**
     * Language of the right.
     * @var string|null
     */
    public $lang;

    /**
     * @return string
     */
    public function getRights()
    {
        return $this->rights;
    }

    /**
     * @param string $rights
     */
    public function setRights($rights)
    {
        $this->rights = $rights;
    }

    /**
     * @return string|null
     */
    public function getRightsURI()
    {
        return $this->rightsURI;
    }

    /**
     * @param string $rightsURI
     */
    public function setRightsURI($rightsURI)
    {
        $this->rightsURI = $rightsURI;
    }

    /**
     * @return null|string
     */
    public function getLang()
    {
        return $this->lang;
    }

    /**
     * @param string $lang
     */
    public function setLang($lang)
    {
        $this->lang = $lang;
    }
}