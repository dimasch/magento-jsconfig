<?php
class Komplizierte_JsConfig_Helper_Data extends Mage_Core_Helper_Abstract {

    public function addData($data) {
        if(!Mage::registry('jsConfig')) return false;
        $currentData = Mage::registry('jsConfig')->getData();
        $newData = array_replace_recursive($currentData, $data);
        Mage::registry('jsConfig')->setData($newData);
    }
}