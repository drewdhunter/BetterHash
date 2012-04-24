<?php

/* 
 * @var $installer Mage_Core_Model_Resource_Setup 
 */
$installer = $this;

$installer->startSetup();

/**
 * Update the admin user password length to 131 - enough to cover sha512 hashes and their salt
 */
$installer->getConnection()->modifyColumn($installer->getTable('admin/user'), 'password', array(
        'type' => Varien_Db_Ddl_Table::TYPE_TEXT,
        'length' => '131'
));