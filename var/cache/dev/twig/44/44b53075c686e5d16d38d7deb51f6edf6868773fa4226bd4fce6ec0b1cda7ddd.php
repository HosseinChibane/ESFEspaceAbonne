<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_a5b0f1b2d914583b33ece80e04a2606df901aac0a080ab0968507fd8a6ddfaff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ec90ade784cc689c313a9832ad22cfef58a88f7fcf39d303a83e9f4e8ec5faa9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec90ade784cc689c313a9832ad22cfef58a88f7fcf39d303a83e9f4e8ec5faa9->enter($__internal_ec90ade784cc689c313a9832ad22cfef58a88f7fcf39d303a83e9f4e8ec5faa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_21c63daac7d48dd6cc585be7a7b9eacbb650f4024d1b2cefb4c2823ffedc1311 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21c63daac7d48dd6cc585be7a7b9eacbb650f4024d1b2cefb4c2823ffedc1311->enter($__internal_21c63daac7d48dd6cc585be7a7b9eacbb650f4024d1b2cefb4c2823ffedc1311_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ec90ade784cc689c313a9832ad22cfef58a88f7fcf39d303a83e9f4e8ec5faa9->leave($__internal_ec90ade784cc689c313a9832ad22cfef58a88f7fcf39d303a83e9f4e8ec5faa9_prof);

        
        $__internal_21c63daac7d48dd6cc585be7a7b9eacbb650f4024d1b2cefb4c2823ffedc1311->leave($__internal_21c63daac7d48dd6cc585be7a7b9eacbb650f4024d1b2cefb4c2823ffedc1311_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_ad83b13a01de95a1d32b31f5e6a52346955d10d7701649bd79ae99a97112b081 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad83b13a01de95a1d32b31f5e6a52346955d10d7701649bd79ae99a97112b081->enter($__internal_ad83b13a01de95a1d32b31f5e6a52346955d10d7701649bd79ae99a97112b081_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_e0650ff58a9359f7ef00a25c9be7896816b3c728f78a932ee81a89f091d5a0e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0650ff58a9359f7ef00a25c9be7896816b3c728f78a932ee81a89f091d5a0e1->enter($__internal_e0650ff58a9359f7ef00a25c9be7896816b3c728f78a932ee81a89f091d5a0e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 27
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 29
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_e0650ff58a9359f7ef00a25c9be7896816b3c728f78a932ee81a89f091d5a0e1->leave($__internal_e0650ff58a9359f7ef00a25c9be7896816b3c728f78a932ee81a89f091d5a0e1_prof);

        
        $__internal_ad83b13a01de95a1d32b31f5e6a52346955d10d7701649bd79ae99a97112b081->leave($__internal_ad83b13a01de95a1d32b31f5e6a52346955d10d7701649bd79ae99a97112b081_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_061ddf0118a85ceea53fa4536dfbe76ec3dd9fb1b42a281f37653817973450b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_061ddf0118a85ceea53fa4536dfbe76ec3dd9fb1b42a281f37653817973450b7->enter($__internal_061ddf0118a85ceea53fa4536dfbe76ec3dd9fb1b42a281f37653817973450b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4d55cc9c78e56fcae8e08a464b67b98b0c9c0af3dafe362b78339c250bfb2fcc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d55cc9c78e56fcae8e08a464b67b98b0c9c0af3dafe362b78339c250bfb2fcc->enter($__internal_4d55cc9c78e56fcae8e08a464b67b98b0c9c0af3dafe362b78339c250bfb2fcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_4d55cc9c78e56fcae8e08a464b67b98b0c9c0af3dafe362b78339c250bfb2fcc->leave($__internal_4d55cc9c78e56fcae8e08a464b67b98b0c9c0af3dafe362b78339c250bfb2fcc_prof);

        
        $__internal_061ddf0118a85ceea53fa4536dfbe76ec3dd9fb1b42a281f37653817973450b7->leave($__internal_061ddf0118a85ceea53fa4536dfbe76ec3dd9fb1b42a281f37653817973450b7_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 36,  84 => 35,  75 => 34,  61 => 29,  55 => 27,  46 => 26,  36 => 1,  34 => 12,  33 => 11,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'purge' : {
        status:  'success',
        title:   'The profiler database was purged successfully',
        message: 'Now you need to browse some pages with the Symfony Profiler enabled to collect data.'
    },
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    },
    'upload_error' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'No file given or the file was not uploaded successfully.'
    },
    'already_exists' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'The token already exists in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}