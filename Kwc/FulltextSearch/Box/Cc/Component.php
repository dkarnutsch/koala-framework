<?php
class Kwc_FulltextSearch_Box_Cc_Component extends Kwc_Chained_Cc_Component
{
    public static function getSettings($masterComponentClass = null)
    {
        $ret = parent::getSettings($masterComponentClass);
        $ret['flags']['forwardProcessInput'] = true;
        return $ret;
    }


    public function getForwardProcessInputComponents()
    {
        return array(
            $this->_getSearchDirectory()->getChildComponent('-view')->getChildComponent('-searchForm')
        );
    }

    protected function _getSearchDirectory()
    {
        $ret = $this->getData()->chained->getComponent()->getSearchDirectory();
        $ret = Kwc_Chained_Cc_Component::getChainedByMaster($ret, $this->getData(), array('ignoreVisible' => true));
        return $ret;
    }

    public function getTemplateVars(Kwf_Component_Renderer_Abstract $renderer)
    {
        $ret = parent::getTemplateVars($renderer);
        $searchPage = $this->_getSearchDirectory();
        $ret['searchForm'] = $searchPage->getChildComponent('-view')->getChildComponent('-searchForm');
        $ret['config']['searchTitle'] = $searchPage->getTitle();
        $ret['config']['searchUrl'] = $searchPage->url;
        return $ret;
    }
}
