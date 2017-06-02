<?php

/* @FOSUser/Resetting/check_email.html.twig */
class __TwigTemplate_b267e3675181f6071f351d436d053bb4a286e035bc80efc7d0ed1a5d0ae2a4fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/check_email.html.twig", 1);
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
        $__internal_6edfdec196a9c56399c5ba5c5c4ce5363dcda655977f9297008d40db5656e4b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6edfdec196a9c56399c5ba5c5c4ce5363dcda655977f9297008d40db5656e4b8->enter($__internal_6edfdec196a9c56399c5ba5c5c4ce5363dcda655977f9297008d40db5656e4b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/check_email.html.twig"));

        $__internal_00839f813e9c268662db56066fd53c2c763f454bfd4d2c2e6c5411ede9f564f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00839f813e9c268662db56066fd53c2c763f454bfd4d2c2e6c5411ede9f564f0->enter($__internal_00839f813e9c268662db56066fd53c2c763f454bfd4d2c2e6c5411ede9f564f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6edfdec196a9c56399c5ba5c5c4ce5363dcda655977f9297008d40db5656e4b8->leave($__internal_6edfdec196a9c56399c5ba5c5c4ce5363dcda655977f9297008d40db5656e4b8_prof);

        
        $__internal_00839f813e9c268662db56066fd53c2c763f454bfd4d2c2e6c5411ede9f564f0->leave($__internal_00839f813e9c268662db56066fd53c2c763f454bfd4d2c2e6c5411ede9f564f0_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c8864473aebbe7899926a109506fff16764ce59807405dd530b375b2bbbde00d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8864473aebbe7899926a109506fff16764ce59807405dd530b375b2bbbde00d->enter($__internal_c8864473aebbe7899926a109506fff16764ce59807405dd530b375b2bbbde00d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_ad02172f10d38b2f82f6fbcf589021ff67adf78d5d00e04fade815e781af10ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad02172f10d38b2f82f6fbcf589021ff67adf78d5d00e04fade815e781af10ad->enter($__internal_ad02172f10d38b2f82f6fbcf589021ff67adf78d5d00e04fade815e781af10ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
\t\t\t\t\t\t<li class=\"active\">Mot de passe oublié</li>
\t\t\t\t\t</ol>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<!-- /.row -->
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t<div class=\"jumbotron\">
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t";
        // line 27
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => ($context["tokenLifetime"] ?? $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<!-- /.container -->
\t";
        
        $__internal_ad02172f10d38b2f82f6fbcf589021ff67adf78d5d00e04fade815e781af10ad->leave($__internal_ad02172f10d38b2f82f6fbcf589021ff67adf78d5d00e04fade815e781af10ad_prof);

        
        $__internal_c8864473aebbe7899926a109506fff16764ce59807405dd530b375b2bbbde00d->leave($__internal_c8864473aebbe7899926a109506fff16764ce59807405dd530b375b2bbbde00d_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 27,  49 => 6,  40 => 5,  11 => 1,);
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
\t\t\t\t\t\t<li class=\"active\">Mot de passe oublié</li>
\t\t\t\t\t</ol>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<!-- /.row -->
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t<div class=\"jumbotron\">
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<!-- /.container -->
\t{% endblock %}
", "@FOSUser/Resetting/check_email.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\app\\Resources\\FOSUserBundle\\views\\Resetting\\check_email.html.twig");
    }
}
