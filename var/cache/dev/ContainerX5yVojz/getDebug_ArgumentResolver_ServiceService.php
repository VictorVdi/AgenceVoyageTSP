<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'debug.argument_resolver.service' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/Controller/ArgumentValueResolverInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/Controller/ArgumentResolver/TraceableValueResolver.php';
include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/Controller/ArgumentResolver/ServiceValueResolver.php';

return $this->privates['debug.argument_resolver.service'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver(new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver(new \Symfony\Component\DependencyInjection\ServiceLocator(array('App\\Controller\\BackofficeCircuitController::delete' => function () {
    return ($this->privates['.service_locator.w9i1Olv'] ?? $this->load('get_ServiceLocator_W9i1OlvService.php'));
}, 'App\\Controller\\BackofficeCircuitController::edit' => function () {
    return ($this->privates['.service_locator.w9i1Olv'] ?? $this->load('get_ServiceLocator_W9i1OlvService.php'));
}, 'App\\Controller\\BackofficeCircuitController::index' => function () {
    return ($this->privates['.service_locator.8bC1TEc'] ?? $this->load('get_ServiceLocator_8bC1TEcService.php'));
}, 'App\\Controller\\BackofficeCircuitController::show' => function () {
    return ($this->privates['.service_locator.w9i1Olv'] ?? $this->load('get_ServiceLocator_W9i1OlvService.php'));
}, 'App\\Controller\\BackofficeEtapeController::delete' => function () {
    return ($this->privates['.service_locator.WpbYFxo'] ?? $this->load('get_ServiceLocator_WpbYFxoService.php'));
}, 'App\\Controller\\BackofficeEtapeController::edit' => function () {
    return ($this->privates['.service_locator.WpbYFxo'] ?? $this->load('get_ServiceLocator_WpbYFxoService.php'));
}, 'App\\Controller\\BackofficeEtapeController::index' => function () {
    return ($this->privates['.service_locator.dTFn.OP'] ?? $this->load('get_ServiceLocator_DTFn_OPService.php'));
}, 'App\\Controller\\BackofficeEtapeController::show' => function () {
    return ($this->privates['.service_locator.WpbYFxo'] ?? $this->load('get_ServiceLocator_WpbYFxoService.php'));
}, 'App\\Controller\\BackofficeCircuitController:delete' => function () {
    return ($this->privates['.service_locator.w9i1Olv'] ?? $this->load('get_ServiceLocator_W9i1OlvService.php'));
}, 'App\\Controller\\BackofficeCircuitController:edit' => function () {
    return ($this->privates['.service_locator.w9i1Olv'] ?? $this->load('get_ServiceLocator_W9i1OlvService.php'));
}, 'App\\Controller\\BackofficeCircuitController:index' => function () {
    return ($this->privates['.service_locator.8bC1TEc'] ?? $this->load('get_ServiceLocator_8bC1TEcService.php'));
}, 'App\\Controller\\BackofficeCircuitController:show' => function () {
    return ($this->privates['.service_locator.w9i1Olv'] ?? $this->load('get_ServiceLocator_W9i1OlvService.php'));
}, 'App\\Controller\\BackofficeEtapeController:delete' => function () {
    return ($this->privates['.service_locator.WpbYFxo'] ?? $this->load('get_ServiceLocator_WpbYFxoService.php'));
}, 'App\\Controller\\BackofficeEtapeController:edit' => function () {
    return ($this->privates['.service_locator.WpbYFxo'] ?? $this->load('get_ServiceLocator_WpbYFxoService.php'));
}, 'App\\Controller\\BackofficeEtapeController:index' => function () {
    return ($this->privates['.service_locator.dTFn.OP'] ?? $this->load('get_ServiceLocator_DTFn_OPService.php'));
}, 'App\\Controller\\BackofficeEtapeController:show' => function () {
    return ($this->privates['.service_locator.WpbYFxo'] ?? $this->load('get_ServiceLocator_WpbYFxoService.php'));
}))), ($this->privates['debug.stopwatch'] ?? $this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true)));