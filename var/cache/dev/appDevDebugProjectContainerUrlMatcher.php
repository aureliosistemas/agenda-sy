<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // aurelio_agenda_default_index
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'aurelio_agenda_default_index');
            }

            return array (  '_controller' => 'Aurelio\\AgendaBundle\\Controller\\DefaultController::indexAction',  '_route' => 'aurelio_agenda_default_index',);
        }

        if (0 === strpos($pathinfo, '/reuniao')) {
            // reuniao_index
            if ('/reuniao' === $trimmedPathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_reuniao_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'reuniao_index');
                }

                return array (  '_controller' => 'Aurelio\\AgendaBundle\\Controller\\ReuniaoController::indexAction',  '_route' => 'reuniao_index',);
            }
            not_reuniao_index:

            // reuniao_new
            if ('/reuniao/new' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_reuniao_new;
                }

                return array (  '_controller' => 'Aurelio\\AgendaBundle\\Controller\\ReuniaoController::newAction',  '_route' => 'reuniao_new',);
            }
            not_reuniao_new:

            // reuniao_show
            if (preg_match('#^/reuniao/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_reuniao_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'reuniao_show')), array (  '_controller' => 'Aurelio\\AgendaBundle\\Controller\\ReuniaoController::showAction',));
            }
            not_reuniao_show:

            // reuniao_edit
            if (preg_match('#^/reuniao/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_reuniao_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'reuniao_edit')), array (  '_controller' => 'Aurelio\\AgendaBundle\\Controller\\ReuniaoController::editAction',));
            }
            not_reuniao_edit:

            // reuniao_delete
            if (preg_match('#^/reuniao/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('DELETE' !== $canonicalMethod) {
                    $allow[] = 'DELETE';
                    goto not_reuniao_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'reuniao_delete')), array (  '_controller' => 'Aurelio\\AgendaBundle\\Controller\\ReuniaoController::deleteAction',));
            }
            not_reuniao_delete:

            if (0 === strpos($pathinfo, '/reuniaodia')) {
                // reuniaodia_index
                if (preg_match('#^/reuniaodia/(?P<reuniao>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_reuniaodia_index;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'reuniaodia_index')), array (  '_controller' => 'Aurelio\\AgendaBundle\\Controller\\ReuniaoDiaController::indexAction',));
                }
                not_reuniaodia_index:

                // reuniaodia_new
                if (preg_match('#^/reuniaodia/(?P<reuniao>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not_reuniaodia_new;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'reuniaodia_new')), array (  '_controller' => 'Aurelio\\AgendaBundle\\Controller\\ReuniaoDiaController::newAction',));
                }
                not_reuniaodia_new:

                // reuniaodia_show
                if (preg_match('#^/reuniaodia/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_reuniaodia_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'reuniaodia_show')), array (  '_controller' => 'Aurelio\\AgendaBundle\\Controller\\ReuniaoDiaController::showAction',));
                }
                not_reuniaodia_show:

                // reuniaodia_edit
                if (preg_match('#^/reuniaodia/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_reuniaodia_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'reuniaodia_edit')), array (  '_controller' => 'Aurelio\\AgendaBundle\\Controller\\ReuniaoDiaController::editAction',));
                }
                not_reuniaodia_edit:

                // reuniaodia_delete
                if (0 === strpos($pathinfo, '/reuniaodia/remove') && preg_match('#^/reuniaodia/remove/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_reuniaodia_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'reuniaodia_delete')), array (  '_controller' => 'Aurelio\\AgendaBundle\\Controller\\ReuniaoDiaController::deleteAction',));
                }
                not_reuniaodia_delete:

            }

            elseif (0 === strpos($pathinfo, '/reuniaopessoa')) {
                // reuniaopessoa_index
                if ('/reuniaopessoa' === $trimmedPathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_reuniaopessoa_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'reuniaopessoa_index');
                    }

                    return array (  '_controller' => 'Aurelio\\AgendaBundle\\Controller\\ReuniaoPessoaController::indexAction',  '_route' => 'reuniaopessoa_index',);
                }
                not_reuniaopessoa_index:

                // reuniaopessoa_new
                if (preg_match('#^/reuniaopessoa/(?P<reuniao>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not_reuniaopessoa_new;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'reuniaopessoa_new')), array (  '_controller' => 'Aurelio\\AgendaBundle\\Controller\\ReuniaoPessoaController::newAction',));
                }
                not_reuniaopessoa_new:

                // reuniaopessoa_dias
                if (0 === strpos($pathinfo, '/reuniaopessoa/dias') && preg_match('#^/reuniaopessoa/dias/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_reuniaopessoa_dias;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'reuniaopessoa_dias')), array (  '_controller' => 'Aurelio\\AgendaBundle\\Controller\\ReuniaoPessoaController::editAction',));
                }
                not_reuniaopessoa_dias:

                // reuniaopessoa_delete
                if (preg_match('#^/reuniaopessoa/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('DELETE' !== $canonicalMethod) {
                        $allow[] = 'DELETE';
                        goto not_reuniaopessoa_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'reuniaopessoa_delete')), array (  '_controller' => 'Aurelio\\AgendaBundle\\Controller\\ReuniaoPessoaController::deleteAction',));
                }
                not_reuniaopessoa_delete:

            }

        }

        // homepage
        if ('/teste' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
