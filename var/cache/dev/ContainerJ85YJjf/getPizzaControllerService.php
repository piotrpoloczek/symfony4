<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'App\Controller\PizzaController' shared autowired service.

$this->services['App\Controller\PizzaController'] = $instance = new \App\Controller\PizzaController();

$instance->setContainer((new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'doctrine' => ['services', 'doctrine', 'getDoctrineService', false],
    'form.factory' => ['services', 'form.factory', 'getForm_FactoryService.php', true],
    'http_kernel' => ['services', 'http_kernel', 'getHttpKernelService', false],
    'parameter_bag' => ['privates', 'parameter_bag', 'getParameterBagService', false],
    'request_stack' => ['services', 'request_stack', 'getRequestStackService', false],
    'router' => ['services', 'router', 'getRouterService', false],
    'session' => ['services', 'session', 'getSessionService.php', true],
    'twig' => ['services', 'twig', 'getTwigService', false],
]))->withContext('App\\Controller\\PizzaController', $this));

return $instance;