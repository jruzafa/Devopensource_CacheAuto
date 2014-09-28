<?php
/**
 * Clean Cache
 *
 * @category   Devopensource
 * @package    Devopensource_CacheAuto
 * @author     Devopensource Team <info@devopensource.com>
 */
class Devopensource_CacheAuto_Model_Observer {

    public function refreshCache() {
        try {

            $allTypes = Mage::app()->useCache();

            foreach($allTypes as $type) {
                Mage::app()->getCacheInstance()->cleanType($type);
            }
        } catch (Exception $e) {
            // do something
            error_log($e->getMessage());
        }
    }
}