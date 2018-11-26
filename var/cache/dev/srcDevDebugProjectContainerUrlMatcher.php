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
                    '/login' => array(array('_route' => 'fos_user_security_login', '_controller' => 'fos_user.security.controller:loginAction'), null, array('GET' => 0, 'POST' => 1), null),
                    '/login_check' => array(array('_route' => 'fos_user_security_check', '_controller' => 'fos_user.security.controller:checkAction'), null, array('POST' => 0), null),
                    '/logout' => array(array('_route' => 'fos_user_security_logout', '_controller' => 'fos_user.security.controller:logoutAction'), null, array('GET' => 0, 'POST' => 1), null),
                    '/profile/' => array(array('_route' => 'fos_user_profile_show', '_controller' => 'fos_user.profile.controller:showAction'), null, array('GET' => 0), null),
                    '/profile/edit' => array(array('_route' => 'fos_user_profile_edit', '_controller' => 'fos_user.profile.controller:editAction'), null, array('GET' => 0, 'POST' => 1), null),
                    '/register/' => array(array('_route' => 'fos_user_registration_register', '_controller' => 'fos_user.registration.controller:registerAction'), null, array('GET' => 0, 'POST' => 1), null),
                    '/register/check-email' => array(array('_route' => 'fos_user_registration_check_email', '_controller' => 'fos_user.registration.controller:checkEmailAction'), null, array('GET' => 0), null),
                    '/register/confirmed' => array(array('_route' => 'fos_user_registration_confirmed', '_controller' => 'fos_user.registration.controller:confirmedAction'), null, array('GET' => 0), null),
                    '/resetting/request' => array(array('_route' => 'fos_user_resetting_request', '_controller' => 'fos_user.resetting.controller:requestAction'), null, array('GET' => 0), null),
                    '/resetting/send-email' => array(array('_route' => 'fos_user_resetting_send_email', '_controller' => 'fos_user.resetting.controller:sendEmailAction'), null, array('POST' => 0), null),
                    '/resetting/check-email' => array(array('_route' => 'fos_user_resetting_check_email', '_controller' => 'fos_user.resetting.controller:checkEmailAction'), null, array('GET' => 0), null),
                    '/profile/change-password' => array(array('_route' => 'fos_user_change_password', '_controller' => 'fos_user.change_password.controller:changePasswordAction'), null, array('GET' => 0, 'POST' => 1), null),
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
                    .'|/home/like/([^/]++)(*:152)'
                    .'|/re(?'
                        .'|gister/confirm/([^/]++)(*:189)'
                        .'|setting/reset/([^/]++)(*:219)'
                    .')'
                    .'|/_(?'
                        .'|error/(\\d+)(?:\\.([^/]++))?(*:259)'
                        .'|wdt/([^/]++)(*:279)'
                        .'|profiler/([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:325)'
                                .'|router(*:339)'
                                .'|exception(?'
                                    .'|(*:359)'
                                    .'|\\.css(*:372)'
                                .')'
                            .')'
                            .'|(*:382)'
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
                            152 => array(array('_route' => 'front_circuit_like', '_controller' => 'App\\Controller\\FrontofficeHomeController::circuitLike'), array('id'), array('GET' => 0), null),
                            189 => array(array('_route' => 'fos_user_registration_confirm', '_controller' => 'fos_user.registration.controller:confirmAction'), array('token'), array('GET' => 0), null),
                            219 => array(array('_route' => 'fos_user_resetting_reset', '_controller' => 'fos_user.resetting.controller:resetAction'), array('token'), array('GET' => 0, 'POST' => 1), null),
                            259 => array(array('_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'), array('code', '_format'), null, null),
                            279 => array(array('_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'), array('token'), null, null),
                            325 => array(array('_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'), array('token'), null, null),
                            339 => array(array('_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'), array('token'), null, null),
                            359 => array(array('_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'), array('token'), null, null),
                            372 => array(array('_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'), array('token'), null, null),
                            382 => array(array('_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'), array('token'), null, null),
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

                if (382 === $m) {
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
