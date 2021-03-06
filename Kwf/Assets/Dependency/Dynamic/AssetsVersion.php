<?php
class Kwf_Assets_Dependency_Dynamic_AssetsVersion extends Kwf_Assets_Dependency_Abstract
{
    public function getMimeType()
    {
        return 'text/javascript';
    }

    public function getContentsPacked()
    {
        $ret = "if (typeof Kwf == 'undefined') Kwf = {};".
            "Kwf.application = { assetsVersion: '".Kwf_Assets_Dispatcher::getInstance()
                ->getAssetsVersion()."' };\n";
        return Kwf_SourceMaps_SourceMap::createEmptyMap($ret);
    }

    public function getIdentifier()
    {
        return 'AssetsVersion';
    }

    public function getCacheId()
    {
        return false;
    }
}
