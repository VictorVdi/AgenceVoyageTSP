<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = $allowSchemes = array();
        if ($ret = $this->doMatch($pathinfo, $allow, $allowSchemes)) {
            return $ret;
        }
        if ($allow) {
            throw new MethodNotAllowedException(array_keys($allow));
        }
        if (!in_array($this->context->getMethod(), array('HEAD', 'GET'), true)) {
            // no-op
        } elseif ($allowSchemes) {
            redirect_scheme:
            $scheme = $this->context->getScheme();
            $this->context->setScheme(key($allowSchemes));
            try {
                if ($ret = $this->doMatch($pathinfo)) {
                    return $this->redirect($pathinfo, $ret['_route'], $this->context->getScheme()) + $ret;
                }
            } finally {
                $this->context->setScheme($scheme);
            }
        } elseif ('/' !== $pathinfo) {
            $pathinfo = '/' !== $pathinfo[-1] ? $pathinfo.'/' : substr($pathinfo, 0, -1);
            if ($ret = $this->doMatch($pathinfo, $allow, $allowSchemes)) {
                return $this->redirect($pathinfo, $ret['_route']) + $ret;
            }
            if ($allowSchemes) {
                goto redirect_scheme;
            }
        }

        throw new ResourceNotFoundException();
    }

    private function doMatch(string $rawPathinfo, array &$allow = array(), array &$allowSchemes = array()): ?array
    {
        $allow = $allowSchemes = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $context = $this->context;
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        switch ($pathinfo) {
            default:
                $routes = array(
                    '/admin/circuit/' => array(array('_route' => 'admin_circuit_index', '_controller' => 'App\\Controller\\BackofficeCircuitController::index'), null, array('GET' => 0), null),
                    '/admin/circuit/new' => array(array('_route' => 'admin_circuit_new', '_controller' => 'App\\Controller\\BackofficeCircuitController::new'), null, array('GET' => 0, 'POST' => 1), null),
                    '/admin/etape/' => array(array('_route' => 'admin_etape_index', '_controller' => 'App\\Controller\\BackofficeEtapeController::index'), null, array('GET' => 0), null),
                    '/admin/etape/new' => array(array('_route' => 'admin_etape_new', '_controller' => 'App\\Controller\\BackofficeEtapeController::new'), null, array('GET' => 0, 'POST' => 1), null),
                    '/home' => array(array('_route' => 'front', '_controller' => 'App\\Controller\\FrontofficeHomeController::index'), null, array('GET' => 0), null),
                    '/' => array(array('_route' => 'home', '_controller' => 'App\\Controller\\IndexController::indexAction'), null, array('GET' => 0), null),
                    '/_profiler/' => array(array('_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'), null, null, null),
                    '/_profiler/search' => array(array('_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'), null, null, null),
                    '/_profiler/search_bar' => array(array('_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'), null, null, null),
                    '/_profiler/phpinfo' => array(array('_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'), null, null, null),
                    '/_profiler/open' => array(array('_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'), null, null, null),
                );

                if (!isset($routes[$pathinfo])) {
                    break;
                }
                list($ret, $requiredHost, $requiredMethods, $requiredSchemes) = $routes[$pathinfo];

                $hasRequiredScheme = !$requiredSchemes || isset($requiredSchemes[$context->getScheme()]);
                if ($requiredMethods && !isset($requiredMethods[$canonicalMethod]) && !isset($requiredMethods[$requestMethod])) {
                    if ($hasRequiredScheme) {
                        $allow += $requiredMethods;
                    }
                    break;
                }
                if (!$hasRequiredScheme) {
                    $allowSchemes += $requiredSchemes;
                    break;
                }

                return $ret;
        }

        $matchedPathinfo = $pathinfo;
        $regexList = array(
            0 => '{^(?'
                    .'|/admin/(?'
                        .'|circuit/([^/]++)(?'
                            .'|(*:36)'
                            .'|/edit(*:48)'
                            .'|(*:55)'
                        .')'
                        .'|etape/([^/]++)(?'
                            .'|(*:80)'
                            .'|/edit(*:92)'
                            .'|(*:99)'
                        .')'
                    .')'
                    .'|/circuit/([^/]++)(*:125)'
                    .'|/_(?'
                        .'|error/(\\d+)(?:\\.([^/]++))?(*:164)'
                        .'|wdt/([^/]++)(*:184)'
                        .'|profiler/([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:230)'
                                .'|router(*:244)'
                                .'|exception(?'
                                    .'|(*:264)'
                                    .'|\\.css(*:277)'
                                .')'
                            .')'
                            .'|(*:287)'
                        .')'
                    .')'
                .')$}sD',
        );

        foreach ($regexList as $offset => $regex) {
            while (preg_match($regex, $matchedPathinfo, $matches)) {
                switch ($m = (int) $matches['MARK']) {
                    default:
                        $routes = array(
                            36 => array(array('_route' => 'admin_circuit_show', '_controller' => 'App\\Controller\\BackofficeCircuitController::show'), array('id'), array('GET' => 0), null),
                            48 => array(array('_route' => 'admin_circuit_edit', '_controller' => 'App\\Controller\\BackofficeCircuitController::edit'), array('id'), array('GET' => 0, 'POST' => 1), null),
                            55 => array(array('_route' => 'admin_circuit_delete', '_controller' => 'App\\Controller\\BackofficeCircuitController::delete'), array('id'), array('DELETE' => 0), null),
                            80 => array(array('_route' => 'admin_etape_show', '_controller' => 'App\\Controller\\BackofficeEtapeController::show'), array('id'), array('GET' => 0), null),
                            92 => array(array('_route' => 'admin_etape_edit', '_controller' => 'App\\Controller\\BackofficeEtapeController::edit'), array('id'), array('GET' => 0, 'POST' => 1), null),
                            99 => array(array('_route' => 'admin_etape_delete', '_controller' => 'App\\Controller\\BackofficeEtapeController::delete'), array('id'), array('DELETE' => 0), null),
                            125 => array(array('_route' => 'front_circuit_show', '_controller' => 'App\\Controller\\FrontofficeHomeController::circuitShow'), array('id'), array('GET' => 0), null),
                            164 => array(array('_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'), array('code', '_format'), null, null),
                            184 => array(array('_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'), array('token'), null, null),
                            230 => array(array('_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'), array('token'), null, null),
                            244 => array(array('_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'), array('token'), null, null),
                            264 => array(array('_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'), array('token'), null, null),
                            277 => array(array('_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'), array('token'), null, null),
                            287 => array(array('_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'), array('token'), null, null),
                        );

                        list($ret, $vars, $requiredMethods, $requiredSchemes) = $routes[$m];

                        foreach ($vars as $i => $v) {
                            if (isset($matches[1 + $i])) {
                                $ret[$v] = $matches[1 + $i];
                            }
                        }

                        $hasRequiredScheme = !$requiredSchemes || isset($requiredSchemes[$context->getScheme()]);
                        if ($requiredMethods && !isset($requiredMethods[$canonicalMethod]) && !isset($requiredMethods[$requestMethod])) {
                            if ($hasRequiredScheme) {
                                $allow += $requiredMethods;
                            }
                            break;
                        }
                        if (!$hasRequiredScheme) {
                            $allowSchemes += $requiredSchemes;
                            break;
                        }

                        return $ret;
                }

                if (287 === $m) {
                    break;
                }
                $regex = substr_replace($regex, 'F', $m - $offset, 1 + strlen($m));
                $offset += strlen($m);
            }
        }
        if ('/' === $pathinfo && !$allow && !$allowSchemes) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        return null;
    }
}
