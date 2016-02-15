<?php

class Komplizierte_JsConfig_Model_Observer
{

    public function fillConfig(Varien_Event_Observer $observer)
    {
        $data = [];
        $collector  = Mage::registry('jsConfig');
        if ($collector) {
            $data = $collector->getData();
        }
        $body = $observer->getFront()->getResponse()->getBody();
        $newBody = str_replace('var jsConfig = {};','var jsConfig = '.json_encode($data).';', $body);
        $observer->getFront()->getResponse()->setBody($newBody);
    }
}
