<?php
class Kwf_Component_Event_ViewCache_ClearFullPage extends Kwf_Events_Event_Abstract
{
    public $domainComponentId;
    public $urls;

    public function __construct($componentClass, $domainComponentId, array $urls)
    {
        parent::__construct($componentClass);
        $this->domainComponentId = $domainComponentId;
        $this->urls = $urls;
    }
}
