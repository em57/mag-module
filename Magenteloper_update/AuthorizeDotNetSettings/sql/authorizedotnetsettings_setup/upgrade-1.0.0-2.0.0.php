<?php




$installer = $this;
$connection = $installer->getConnection();

$installer->startSetup();



$installer->getConnection()
    ->addColumn($installer->getTable('magenteloper_authorizedotnetsettings/authorizedotnetsettings'));

//TODO: update exsiting table with new columns




$installer->endSetup();