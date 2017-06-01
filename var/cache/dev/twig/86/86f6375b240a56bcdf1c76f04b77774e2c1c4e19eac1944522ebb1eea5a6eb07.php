<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_416fbccd4eddf24fb582e105e94319e664dab29c1539ed248a8f3949d07da149 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:check_email.html.twig", 1);
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
        $__internal_3eb64e89ca0e9cbaad78d1f8b74a91d3637dd6988fb391ee5dff687c7b265e04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3eb64e89ca0e9cbaad78d1f8b74a91d3637dd6988fb391ee5dff687c7b265e04->enter($__internal_3eb64e89ca0e9cbaad78d1f8b74a91d3637dd6988fb391ee5dff687c7b265e04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $__internal_c05d355709e57d069c7a3968ebb0ece90f2712b0a2c7625cd97b39fbe47879cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c05d355709e57d069c7a3968ebb0ece90f2712b0a2c7625cd97b39fbe47879cf->enter($__internal_c05d355709e57d069c7a3968ebb0ece90f2712b0a2c7625cd97b39fbe47879cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3eb64e89ca0e9cbaad78d1f8b74a91d3637dd6988fb391ee5dff687c7b265e04->leave($__internal_3eb64e89ca0e9cbaad78d1f8b74a91d3637dd6988fb391ee5dff687c7b265e04_prof);

        
        $__internal_c05d355709e57d069c7a3968ebb0ece90f2712b0a2c7625cd97b39fbe47879cf->leave($__internal_c05d355709e57d069c7a3968ebb0ece90f2712b0a2c7625cd97b39fbe47879cf_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3e005c5c422f420e582b9f16646b1a381eb841f88107e7ffa9ef675ff2e8e8d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e005c5c422f420e582b9f16646b1a381eb841f88107e7ffa9ef675ff2e8e8d7->enter($__internal_3e005c5c422f420e582b9f16646b1a381eb841f88107e7ffa9ef675ff2e8e8d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_3d22995c8b93f5dc12ecf79fe19c6ed71818e089536bd68de0c19103b004c169 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d22995c8b93f5dc12ecf79fe19c6ed71818e089536bd68de0c19103b004c169->enter($__internal_3d22995c8b93f5dc12ecf79fe19c6ed71818e089536bd68de0c19103b004c169_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_3d22995c8b93f5dc12ecf79fe19c6ed71818e089536bd68de0c19103b004c169->leave($__internal_3d22995c8b93f5dc12ecf79fe19c6ed71818e089536bd68de0c19103b004c169_prof);

        
        $__internal_3e005c5c422f420e582b9f16646b1a381eb841f88107e7ffa9ef675ff2e8e8d7->leave($__internal_3e005c5c422f420e582b9f16646b1a381eb841f88107e7ffa9ef675ff2e8e8d7_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:check_email.html.twig";
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
", "FOSUserBundle:Resetting:check_email.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\app/Resources/FOSUserBundle/views/Resetting/check_email.html.twig");
    }
}
