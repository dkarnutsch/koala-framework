<?php
class Kwc_Trl_TextImage_Root extends Kwc_Root_TrlRoot_Component
{
    public static function getSettings()
    {
        $ret = parent::getSettings();
        unset($ret['generators']['title']);
        $ret['childModel'] = new Kwc_Trl_RootModel(array(
            'de' => 'Deutsch',
            'en' => 'English'
        ));
        $ret['generators']['master']['component'] = 'Kwc_Trl_TextImage_German';
        $ret['generators']['chained']['component'] = 'Kwc_Trl_TextImage_English.Kwc_Trl_TextImage_German';
        return $ret;
    }
}
