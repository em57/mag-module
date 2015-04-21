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
 * Creating table magenteloper_paymentsettings
 */


/*
$table = $installer->getConnection()
   ->newTable($installer->getTable('magenteloper_paymentsettings/paymentsettings'))
   ->addColumn();
*/

//TODO : add more columns here


// here are the table creation for this module e.g.:
$this->startSetup();
//$this->run("HERE YOUR SQL");
$this->endSetup();