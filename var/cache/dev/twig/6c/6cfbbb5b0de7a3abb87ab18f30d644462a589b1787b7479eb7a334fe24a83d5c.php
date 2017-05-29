<?php

/* @FOSUser/Registration/confirmed.html.twig */
class __TwigTemplate_a87c9caa5d78189d360814aafd6d49e4aed24cd98cafebb57baf5169739de060 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/confirmed.html.twig", 1);
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
        $__internal_66b503e1fa2b1a59f4999cb62f44032cf24f8b7d9a5d7d9ee998661a33792d15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66b503e1fa2b1a59f4999cb62f44032cf24f8b7d9a5d7d9ee998661a33792d15->enter($__internal_66b503e1fa2b1a59f4999cb62f44032cf24f8b7d9a5d7d9ee998661a33792d15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $__internal_dda31b7beebdddb83fbc108427d118bfaa9413df1ea03735124abc1e1ce82d49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dda31b7beebdddb83fbc108427d118bfaa9413df1ea03735124abc1e1ce82d49->enter($__internal_dda31b7beebdddb83fbc108427d118bfaa9413df1ea03735124abc1e1ce82d49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_66b503e1fa2b1a59f4999cb62f44032cf24f8b7d9a5d7d9ee998661a33792d15->leave($__internal_66b503e1fa2b1a59f4999cb62f44032cf24f8b7d9a5d7d9ee998661a33792d15_prof);

        
        $__internal_dda31b7beebdddb83fbc108427d118bfaa9413df1ea03735124abc1e1ce82d49->leave($__internal_dda31b7beebdddb83fbc108427d118bfaa9413df1ea03735124abc1e1ce82d49_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_88d53e02e5b2b8431a5d6ad926b624a6fefa50def2a593dc795ee49b9e85cb2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88d53e02e5b2b8431a5d6ad926b624a6fefa50def2a593dc795ee49b9e85cb2d->enter($__internal_88d53e02e5b2b8431a5d6ad926b624a6fefa50def2a593dc795ee49b9e85cb2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_e87aba6e137726220f7d3315b89d3de94cf5607afa4890ea78858f04647e116e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e87aba6e137726220f7d3315b89d3de94cf5607afa4890ea78858f04647e116e->enter($__internal_e87aba6e137726220f7d3315b89d3de94cf5607afa4890ea78858f04647e116e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_e87aba6e137726220f7d3315b89d3de94cf5607afa4890ea78858f04647e116e->leave($__internal_e87aba6e137726220f7d3315b89d3de94cf5607afa4890ea78858f04647e116e_prof);

        
        $__internal_88d53e02e5b2b8431a5d6ad926b624a6fefa50def2a593dc795ee49b9e85cb2d->leave($__internal_88d53e02e5b2b8431a5d6ad926b624a6fefa50def2a593dc795ee49b9e85cb2d_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/confirmed.html.twig";
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
", "@FOSUser/Registration/confirmed.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\app\\Resources\\FOSUserBundle\\views\\Registration\\confirmed.html.twig");
    }
}
