<?php

/**
 * Extension to Mage_Core_Model_Encryption to improve upon the md5 hash found
 * in Magento CE - using sha512 here but this could be substituted easily (though 
 * will render all passwords useless each time this is changed).
 *
 * @category    Dh
 * @package     Dh_BetterHash
 * @author      Drew Hunter <drewdhunter@gmail.com>
 */
class Dh_BetterHash_Model_Hash extends Mage_Core_Model_Encryption
{
    const HASH_SHA_512  = 'sha512';
    
    protected $_hashMethod;
    
    public function __construct()
    {
        $this->_hashMethod = self::HASH_SHA_512;
    }
    
    /*
     * Override Mage_Core_Model_Encryption->hash()
     *
     * @param string $data
     * @return string
    */
    public function hash($data)
    {
        
        //exit;
        return hash($this->_hashMethod, $data);
    }
}

