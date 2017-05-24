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
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ($pathinfo === '/_profiler/open') {
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

        // esf_esf_espace_abonne_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'esf_esf_espace_abonne_homepage');
            }

            return array (  '_controller' => 'ESF\\EspaceAbonneBundle\\Controller\\DefaultController::indexAction',  '_route' => 'esf_esf_espace_abonne_homepage',);
        }

        // esf_espace_abonne_home
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'esf_espace_abonne_home');
            }

            return array (  '_controller' => 'ESF\\EspaceAbonneBundle\\Controller\\DefaultController::indexAction',  '_route' => 'esf_espace_abonne_home',);
        }

        if (0 === strpos($pathinfo, '/Default')) {
            if (0 === strpos($pathinfo, '/Default/m')) {
                // esf_espace_abonne_monProfil
                if (rtrim($pathinfo, '/') === '/Default/monprofil') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'esf_espace_abonne_monProfil');
                    }

                    return array (  '_controller' => 'ESF\\EspaceAbonneBundle\\Controller\\DefaultController::monprofilAction',  '_route' => 'esf_espace_abonne_monProfil',);
                }

                if (0 === strpos($pathinfo, '/Default/mes')) {
                    if (0 === strpos($pathinfo, '/Default/mesparametres')) {
                        // esf_espace_abonne_mesParametres
                        if ($pathinfo === '/Default/mesparametres') {
                            return array (  '_controller' => 'ESF\\EspaceAbonneBundle\\Controller\\DefaultController::mesparametresAction',  '_route' => 'esf_espace_abonne_mesParametres',);
                        }

                        if (0 === strpos($pathinfo, '/Default/mesparametresM')) {
                            // esf_espace_abonne_mesParametresMDP
                            if ($pathinfo === '/Default/mesparametresMDP') {
                                return array (  '_controller' => 'ESF\\EspaceAbonneBundle\\Controller\\DefaultController::mesparametresMDPAction',  '_route' => 'esf_espace_abonne_mesParametresMDP',);
                            }

                            // esf_espace_abonne_mesParametresMAIL
                            if ($pathinfo === '/Default/mesparametresMAIL') {
                                return array (  '_controller' => 'ESF\\EspaceAbonneBundle\\Controller\\DefaultController::mesparametresMAILAction',  '_route' => 'esf_espace_abonne_mesParametresMAIL',);
                            }

                        }

                    }

                    // esf_espace_abonne_mesDemandes
                    if ($pathinfo === '/Default/mesdemandes') {
                        return array (  '_controller' => 'ESF\\EspaceAbonneBundle\\Controller\\DefaultController::mesdemandesAction',  '_route' => 'esf_espace_abonne_mesDemandes',);
                    }

                }

            }

            // esf_espace_abonne_detailsDemandes
            if (0 === strpos($pathinfo, '/Default/detailsdemandes') && preg_match('#^/Default/detailsdemandes/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'esf_espace_abonne_detailsDemandes')), array (  '_controller' => 'ESF\\EspaceAbonneBundle\\Controller\\DefaultController::detailsdemandesAction',));
            }

            if (0 === strpos($pathinfo, '/Default/m')) {
                // esf_espace_abonne_modifierDemandes
                if (0 === strpos($pathinfo, '/Default/modifierdemandes') && preg_match('#^/Default/modifierdemandes/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_esf_espace_abonne_modifierDemandes;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'esf_espace_abonne_modifierDemandes')), array (  '_controller' => 'ESF\\EspaceAbonneBundle\\Controller\\DefaultController::modifierdemandesAction',));
                }
                not_esf_espace_abonne_modifierDemandes:

                // esf_espace_abonne_mesDocuments
                if ($pathinfo === '/Default/mesdocuments') {
                    return array (  '_controller' => 'ESF\\EspaceAbonneBundle\\Controller\\DefaultController::mesdocumentsAction',  '_route' => 'esf_espace_abonne_mesDocuments',);
                }

            }

            // esf_espace_abonne_aide
            if ($pathinfo === '/Default/aide') {
                return array (  '_controller' => 'ESF\\EspaceAbonneBundle\\Controller\\DefaultController::aideAction',  '_route' => 'esf_espace_abonne_aide',);
            }

            // esf_espace_abonne_contact
            if ($pathinfo === '/Default/contact') {
                if (!in_array($this->context->getMethod(), array('POST', 'GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('POST', 'GET', 'HEAD'));
                    goto not_esf_espace_abonne_contact;
                }

                return array (  '_controller' => 'ESF\\EspaceAbonneBundle\\Controller\\DefaultController::contactAction',  '_route' => 'esf_espace_abonne_contact',);
            }
            not_esf_espace_abonne_contact:

            if (0 === strpos($pathinfo, '/Default/universite')) {
                // esf_espace_abonne_universiteStepsOne
                if ($pathinfo === '/Default/universiteOne') {
                    return array (  '_controller' => 'ESF\\EspaceAbonneBundle\\Controller\\DefaultController::universiteOneAction',  '_route' => 'esf_espace_abonne_universiteStepsOne',);
                }

                if (0 === strpos($pathinfo, '/Default/universiteT')) {
                    // esf_espace_abonne_universiteStepsTwo
                    if ($pathinfo === '/Default/universiteTwo') {
                        return array (  '_controller' => 'ESF\\EspaceAbonneBundle\\Controller\\DefaultController::universiteTwoAction',  '_route' => 'esf_espace_abonne_universiteStepsTwo',);
                    }

                    // esf_espace_abonne_universiteStepsThree
                    if ($pathinfo === '/Default/universiteThree') {
                        return array (  '_controller' => 'ESF\\EspaceAbonneBundle\\Controller\\DefaultController::universiteTwoAction',  '_route' => 'esf_espace_abonne_universiteStepsThree',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/Default/l')) {
                if (0 === strpos($pathinfo, '/Default/langue')) {
                    // esf_espace_abonne_langueStepsOne
                    if ($pathinfo === '/Default/langueOne') {
                        return array (  '_controller' => 'ESF\\EspaceAbonneBundle\\Controller\\DefaultController::langueOneAction',  '_route' => 'esf_espace_abonne_langueStepsOne',);
                    }

                    if (0 === strpos($pathinfo, '/Default/langueT')) {
                        // esf_espace_abonne_langueStepsTwo
                        if ($pathinfo === '/Default/langueTwo') {
                            return array (  '_controller' => 'ESF\\EspaceAbonneBundle\\Controller\\DefaultController::langueTwoAction',  '_route' => 'esf_espace_abonne_langueStepsTwo',);
                        }

                        // esf_espace_abonne_langueStepsThree
                        if ($pathinfo === '/Default/langueThree') {
                            return array (  '_controller' => 'ESF\\EspaceAbonneBundle\\Controller\\DefaultController::langueTwoAction',  '_route' => 'esf_espace_abonne_langueStepsThree',);
                        }

                    }

                }

                if (0 === strpos($pathinfo, '/Default/logement')) {
                    // esf_espace_abonne_logementStepsOne
                    if ($pathinfo === '/Default/logementOne') {
                        return array (  '_controller' => 'ESF\\EspaceAbonneBundle\\Controller\\DefaultController::logementOneAction',  '_route' => 'esf_espace_abonne_logementStepsOne',);
                    }

                    if (0 === strpos($pathinfo, '/Default/logementT')) {
                        // esf_espace_abonne_logementStepsTwo
                        if ($pathinfo === '/Default/logementTwo') {
                            return array (  '_controller' => 'ESF\\EspaceAbonneBundle\\Controller\\DefaultController::logementTwoAction',  '_route' => 'esf_espace_abonne_logementStepsTwo',);
                        }

                        // esf_espace_abonne_logementStepsThree
                        if ($pathinfo === '/Default/logementThree') {
                            return array (  '_controller' => 'ESF\\EspaceAbonneBundle\\Controller\\DefaultController::logementTwoAction',  '_route' => 'esf_espace_abonne_logementStepsThree',);
                        }

                    }

                }

            }

            if (0 === strpos($pathinfo, '/Default/preparation')) {
                // esf_espace_abonne_preparationStepsOne
                if ($pathinfo === '/Default/preparationOne') {
                    return array (  '_controller' => 'ESF\\EspaceAbonneBundle\\Controller\\DefaultController::preparationOneAction',  '_route' => 'esf_espace_abonne_preparationStepsOne',);
                }

                if (0 === strpos($pathinfo, '/Default/preparationT')) {
                    // esf_espace_abonne_preparationStepsTwo
                    if ($pathinfo === '/Default/preparationTwo') {
                        return array (  '_controller' => 'ESF\\EspaceAbonneBundle\\Controller\\DefaultController::preparationTwoAction',  '_route' => 'esf_espace_abonne_preparationStepsTwo',);
                    }

                    // esf_espace_abonne_preparationStepsThree
                    if ($pathinfo === '/Default/preparationThree') {
                        return array (  '_controller' => 'ESF\\EspaceAbonneBundle\\Controller\\DefaultController::preparationTwoAction',  '_route' => 'esf_espace_abonne_preparationStepsThree',);
                    }

                }

            }

            // esf_espace_abonne_mutuelle
            if ($pathinfo === '/Default/mutuelle') {
                return array (  '_controller' => 'ESF\\EspaceAbonneBundle\\Controller\\DefaultController::mutuelleAction',  '_route' => 'esf_espace_abonne_mutuelle',);
            }

        }

        // espace_admin_panel
        if ($pathinfo === '/Admin/adminPanel') {
            return array (  '_controller' => 'ESFEspaceAbonneBundle:Admin:adminPanel',  '_route' => 'espace_admin_panel',);
        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_security_login;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }
                not_fos_user_security_login:

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_security_logout;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }
            not_fos_user_security_logout:

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_profile_edit;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }
            not_fos_user_profile_edit:

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_registration_register;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }
                not_fos_user_registration_register:

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
