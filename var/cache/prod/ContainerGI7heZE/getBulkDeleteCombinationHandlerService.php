<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'PrestaShop\PrestaShop\Adapter\Product\Combination\CommandHandler\BulkDeleteCombinationHandler' shared service.

return $this->services['PrestaShop\\PrestaShop\\Adapter\\Product\\Combination\\CommandHandler\\BulkDeleteCombinationHandler'] = new \PrestaShop\PrestaShop\Adapter\Product\Combination\CommandHandler\BulkDeleteCombinationHandler(($this->privates['PrestaShop\\PrestaShop\\Adapter\\Product\\Combination\\Update\\CombinationDeleter'] ?? $this->load('getCombinationDeleterService.php')));
