<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.WpbYFxo' shared service.

return $this->privates['.service_locator.WpbYFxo'] = new \Symfony\Component\DependencyInjection\ServiceLocator(array('etape' => function (): \App\Entity\Etape {
    return ($this->privates['.errored..service_locator.WpbYFxo.App\Entity\Etape'] ?? $this->load('getEtapeService.php'));
}));