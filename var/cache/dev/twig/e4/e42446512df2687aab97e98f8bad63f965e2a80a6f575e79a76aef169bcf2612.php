<?php

/* @WebProfiler/Profiler/info.html.twig */
class __TwigTemplate_a1e6eca7fdfdaa00522ee7be8da6e4676b456b7b7c60865736b6301991728299 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Profiler/info.html.twig", 1);
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
        $__internal_e18a7cad51f82b1187ab53197420c6bf884ed0f5c0a33c9ddfebf9bd97e4d3eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e18a7cad51f82b1187ab53197420c6bf884ed0f5c0a33c9ddfebf9bd97e4d3eb->enter($__internal_e18a7cad51f82b1187ab53197420c6bf884ed0f5c0a33c9ddfebf9bd97e4d3eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_e8e7fe347ba839835b0cce7b9ba792be4f463814e976b19f7da414be8ac1d85d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8e7fe347ba839835b0cce7b9ba792be4f463814e976b19f7da414be8ac1d85d->enter($__internal_e8e7fe347ba839835b0cce7b9ba792be4f463814e976b19f7da414be8ac1d85d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e18a7cad51f82b1187ab53197420c6bf884ed0f5c0a33c9ddfebf9bd97e4d3eb->leave($__internal_e18a7cad51f82b1187ab53197420c6bf884ed0f5c0a33c9ddfebf9bd97e4d3eb_prof);

        
        $__internal_e8e7fe347ba839835b0cce7b9ba792be4f463814e976b19f7da414be8ac1d85d->leave($__internal_e8e7fe347ba839835b0cce7b9ba792be4f463814e976b19f7da414be8ac1d85d_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_736035577949d70fd75b53b29759e452d84acab7289e7ac1a564440df104133f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_736035577949d70fd75b53b29759e452d84acab7289e7ac1a564440df104133f->enter($__internal_736035577949d70fd75b53b29759e452d84acab7289e7ac1a564440df104133f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_93db90f26f02d566afd61d9ffd8d7e6901602274d05303f02ceadea9c8ec5379 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93db90f26f02d566afd61d9ffd8d7e6901602274d05303f02ceadea9c8ec5379->enter($__internal_93db90f26f02d566afd61d9ffd8d7e6901602274d05303f02ceadea9c8ec5379_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_93db90f26f02d566afd61d9ffd8d7e6901602274d05303f02ceadea9c8ec5379->leave($__internal_93db90f26f02d566afd61d9ffd8d7e6901602274d05303f02ceadea9c8ec5379_prof);

        
        $__internal_736035577949d70fd75b53b29759e452d84acab7289e7ac1a564440df104133f->leave($__internal_736035577949d70fd75b53b29759e452d84acab7289e7ac1a564440df104133f_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_73ff14921fa4c7b7ed8b6366747644c187e1cbdd3646e9d41e06ec1d57078056 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73ff14921fa4c7b7ed8b6366747644c187e1cbdd3646e9d41e06ec1d57078056->enter($__internal_73ff14921fa4c7b7ed8b6366747644c187e1cbdd3646e9d41e06ec1d57078056_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e14f96f849c5152ceb36dd682524b7603ece6f0da297387c3c69705bf962d3b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e14f96f849c5152ceb36dd682524b7603ece6f0da297387c3c69705bf962d3b7->enter($__internal_e14f96f849c5152ceb36dd682524b7603ece6f0da297387c3c69705bf962d3b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_e14f96f849c5152ceb36dd682524b7603ece6f0da297387c3c69705bf962d3b7->leave($__internal_e14f96f849c5152ceb36dd682524b7603ece6f0da297387c3c69705bf962d3b7_prof);

        
        $__internal_73ff14921fa4c7b7ed8b6366747644c187e1cbdd3646e9d41e06ec1d57078056->leave($__internal_73ff14921fa4c7b7ed8b6366747644c187e1cbdd3646e9d41e06ec1d57078056_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/info.html.twig";
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
", "@WebProfiler/Profiler/info.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\info.html.twig");
    }
}
