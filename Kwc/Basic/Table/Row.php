<?php
class Kwc_Basic_Table_Row extends Kwf_Model_Proxy_Row
{
    public function __get($name)
    {
        if ($name == 'columns') {
            throw new Kwf_Exception("Theres no field named 'columns' anymore. Getting the column count is implemented in Kwc_Basic_Table_Component->getColumnCount()");
        } else {
            return parent::__get($name);
        }
    }
}
