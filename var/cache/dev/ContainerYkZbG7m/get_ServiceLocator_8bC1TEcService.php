<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.8bC1TEc' shared service.

return $this->privates['.service_locator.8bC1TEc'] = new \Symfony\Component\DependencyInjection\ServiceLocator(array('circuitRepository' => function (): \App\Repository\CircuitRepository {
    return ($this->privates['App\Repository\CircuitRepository'] ?? $this->load('getCircuitRepositoryService.php'));
}));
