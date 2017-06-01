<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_672b59d0635e17dd48753ee2348f50fb558c58328ed2b98d6c9f24ee783d2c66 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_de67aba907650e1e82d7f515d120b807f5e00db51fc7d9e2edffe2f34e242a8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de67aba907650e1e82d7f515d120b807f5e00db51fc7d9e2edffe2f34e242a8b->enter($__internal_de67aba907650e1e82d7f515d120b807f5e00db51fc7d9e2edffe2f34e242a8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $__internal_4d6ad890f307ab50b5449e09359d90f9dc17a691cd20237fdfdb06dbe6e1d383 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d6ad890f307ab50b5449e09359d90f9dc17a691cd20237fdfdb06dbe6e1d383->enter($__internal_4d6ad890f307ab50b5449e09359d90f9dc17a691cd20237fdfdb06dbe6e1d383_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_de67aba907650e1e82d7f515d120b807f5e00db51fc7d9e2edffe2f34e242a8b->leave($__internal_de67aba907650e1e82d7f515d120b807f5e00db51fc7d9e2edffe2f34e242a8b_prof);

        
        $__internal_4d6ad890f307ab50b5449e09359d90f9dc17a691cd20237fdfdb06dbe6e1d383->leave($__internal_4d6ad890f307ab50b5449e09359d90f9dc17a691cd20237fdfdb06dbe6e1d383_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4403cfb1901514f033dfc447021668bc0d395d28e1c39df77132330259ce117a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4403cfb1901514f033dfc447021668bc0d395d28e1c39df77132330259ce117a->enter($__internal_4403cfb1901514f033dfc447021668bc0d395d28e1c39df77132330259ce117a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_e6b8958c7a59309dcbbb8bbc899a2dcd50b2a5d8e5e984c63657ce7d0582ea84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6b8958c7a59309dcbbb8bbc899a2dcd50b2a5d8e5e984c63657ce7d0582ea84->enter($__internal_e6b8958c7a59309dcbbb8bbc899a2dcd50b2a5d8e5e984c63657ce7d0582ea84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "\t\t<!-- Page Content -->
\t\t<div class=\"container\">
\t\t\t<!-- Page Heading/Breadcrumbs -->
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t<h1 class=\"page-header\">Création d'un compte
\t\t\t\t\t\t<small></small>
\t\t\t\t\t</h1>
\t\t\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t\t\t<li><a href=\"\">Accueil</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"active\">Inscription</li>
\t\t\t\t\t</ol>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<!-- /.row -->
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t<div class=\"jumbotron\">

\t\t\t\t\t\t<p>";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
\t\t\t\t\t\t";
        // line 28
        if (($context["targetUrl"] ?? $this->getContext($context, "targetUrl"))) {
            // line 29
            echo "\t\t\t\t\t\t\t<p><a href=\"";
            echo twig_escape_filter($this->env, ($context["targetUrl"] ?? $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
\t\t\t\t\t\t";
        }
        // line 31
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t";
        
        $__internal_e6b8958c7a59309dcbbb8bbc899a2dcd50b2a5d8e5e984c63657ce7d0582ea84->leave($__internal_e6b8958c7a59309dcbbb8bbc899a2dcd50b2a5d8e5e984c63657ce7d0582ea84_prof);

        
        $__internal_4403cfb1901514f033dfc447021668bc0d395d28e1c39df77132330259ce117a->leave($__internal_4403cfb1901514f033dfc447021668bc0d395d28e1c39df77132330259ce117a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 31,  78 => 29,  76 => 28,  72 => 27,  49 => 6,  40 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

\t{% block fos_user_content %}
\t\t<!-- Page Content -->
\t\t<div class=\"container\">
\t\t\t<!-- Page Heading/Breadcrumbs -->
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t<h1 class=\"page-header\">Création d'un compte
\t\t\t\t\t\t<small></small>
\t\t\t\t\t</h1>
\t\t\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t\t\t<li><a href=\"\">Accueil</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"active\">Inscription</li>
\t\t\t\t\t</ol>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<!-- /.row -->
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t<div class=\"jumbotron\">

\t\t\t\t\t\t<p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
\t\t\t\t\t\t{% if targetUrl %}
\t\t\t\t\t\t\t<p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t{% endblock fos_user_content %}
", "FOSUserBundle:Registration:confirmed.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\app/Resources/FOSUserBundle/views/Registration/confirmed.html.twig");
    }
}
