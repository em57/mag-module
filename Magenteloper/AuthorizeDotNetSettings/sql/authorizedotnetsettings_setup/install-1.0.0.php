<?php

/*
 *  Magenteloper installation script
 *
 * @author Magenteloper
 */

/*
 * @var install Mage_Core_Model_Resource_Setup
 */

$installer = $this;

/**
 * Creating table magenteloper_authorizedotnetsettings
 */


/*
$table = $installer->getConnection()
   ->newTable($installer->getTable('magenteloper_authorizedotnetsettings/authorizedotnetsettings'))
   ->addColumn();
*/

//TODO : add more columns here


// here are the table creation for this module e.g.:
$this->startSetup();
//$this->run("HERE YOUR SQL");
$this->endSetup();
