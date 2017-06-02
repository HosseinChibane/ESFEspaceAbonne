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
        $__internal_8448a7e30f1f319401b46551f898505e497bcc67712d499631e1b7e28e256e14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8448a7e30f1f319401b46551f898505e497bcc67712d499631e1b7e28e256e14->enter($__internal_8448a7e30f1f319401b46551f898505e497bcc67712d499631e1b7e28e256e14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $__internal_373a1845790ce12feb3eb507a3d564345bbc0d69296fea5f1a41efbf2e53af09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_373a1845790ce12feb3eb507a3d564345bbc0d69296fea5f1a41efbf2e53af09->enter($__internal_373a1845790ce12feb3eb507a3d564345bbc0d69296fea5f1a41efbf2e53af09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8448a7e30f1f319401b46551f898505e497bcc67712d499631e1b7e28e256e14->leave($__internal_8448a7e30f1f319401b46551f898505e497bcc67712d499631e1b7e28e256e14_prof);

        
        $__internal_373a1845790ce12feb3eb507a3d564345bbc0d69296fea5f1a41efbf2e53af09->leave($__internal_373a1845790ce12feb3eb507a3d564345bbc0d69296fea5f1a41efbf2e53af09_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_496930e79e56ccb700a7f3d1ec30e4f6b28cb9047978d9c598cdf7409680f030 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_496930e79e56ccb700a7f3d1ec30e4f6b28cb9047978d9c598cdf7409680f030->enter($__internal_496930e79e56ccb700a7f3d1ec30e4f6b28cb9047978d9c598cdf7409680f030_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_2dcf242372269ad887413b834cb359d09916c3fb430268f55ac9d365927f8944 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2dcf242372269ad887413b834cb359d09916c3fb430268f55ac9d365927f8944->enter($__internal_2dcf242372269ad887413b834cb359d09916c3fb430268f55ac9d365927f8944_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_2dcf242372269ad887413b834cb359d09916c3fb430268f55ac9d365927f8944->leave($__internal_2dcf242372269ad887413b834cb359d09916c3fb430268f55ac9d365927f8944_prof);

        
        $__internal_496930e79e56ccb700a7f3d1ec30e4f6b28cb9047978d9c598cdf7409680f030->leave($__internal_496930e79e56ccb700a7f3d1ec30e4f6b28cb9047978d9c598cdf7409680f030_prof);

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
