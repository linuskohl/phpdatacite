<?php

namespace linuskohl\phpdatacite\models;

/**
 * Class ResourceType
 *
 * A description of the resource.
 *
 * @package   linuskohl\phpdatacite
 * @license   https://opensource.org/licenses/GPL-3.0  GPL-3.0
 * @link      https://github.com/linuskohl/php-datacite
 * @copyright 2018-2020 Linus Kohl <linus@munichresearch.com>
 */
class ResourceType
{

    const TYPE_RESOURCE_Audiovisual = 'Audiovisual';
    const TYPE_RESOURCE_Collection = 'Collection';
    const TYPE_RESOURCE_DataPaper = 'DataPaper';
    const TYPE_RESOURCE_Dataset = 'Dataset';
    const TYPE_RESOURCE_Event = 'Event';
    const TYPE_RESOURCE_Image = 'Image';
    const TYPE_RESOURCE_InteractiveResource = 'InteractiveResource';
    const TYPE_RESOURCE_Model = 'Model';
    const TYPE_RESOURCE_PhysicalObject = 'PhysicalObject';
    const TYPE_RESOURCE_Service = 'Service';
    const TYPE_RESOURCE_Software = 'Software';
    const TYPE_RESOURCE_Sound = 'Sound';
    const TYPE_RESOURCE_Text = 'Text';
    const TYPE_RESOURCE_Workflow = 'Workflow';
    const TYPE_RESOURCE_Other = 'Other';

    /**
     * The format is open, but the preferred format is a single term of some detail so that a pair can
     * be formed with the sub-property
     * @var string
     */
    public $resourceType;

    /**
     * THe general type of a resource.
     * @var string
     */
    public $resourceTypeGeneral;

    /**
     * @return string
     */
    public function getResourceType()
    {
        return $this->resourceType;
    }

    /**
     * @param string $resourceType
     */
    public function setResourceType($resourceType)
    {
        $this->resourceType = $resourceType;
    }

    /**
     * @return string
     */
    public function getResourceTypeGeneral()
    {
        return $this->resourceTypeGeneral;
    }

    /**
     * @param string $resourceTypeGeneral
     */
    public function setSesourceTypeGeneral($resourceTypeGeneral)
    {
        $this->resourceTypeGeneral = $resourceTypeGeneral;
    }

}