<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_41630ed3e806a2aef94c96d0d4094f5d5aba82c487633f5edcbf87a0078572a9 extends Twig_Template
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
        $__internal_cf5322a81a3208398ecd8e914cad68654d05c9eb5192271b0950575f29d980ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf5322a81a3208398ecd8e914cad68654d05c9eb5192271b0950575f29d980ee->enter($__internal_cf5322a81a3208398ecd8e914cad68654d05c9eb5192271b0950575f29d980ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_90bedf260824c6379b6402aec93e7dafc289ac9b921ef76733c225152b053d77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90bedf260824c6379b6402aec93e7dafc289ac9b921ef76733c225152b053d77->enter($__internal_90bedf260824c6379b6402aec93e7dafc289ac9b921ef76733c225152b053d77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cf5322a81a3208398ecd8e914cad68654d05c9eb5192271b0950575f29d980ee->leave($__internal_cf5322a81a3208398ecd8e914cad68654d05c9eb5192271b0950575f29d980ee_prof);

        
        $__internal_90bedf260824c6379b6402aec93e7dafc289ac9b921ef76733c225152b053d77->leave($__internal_90bedf260824c6379b6402aec93e7dafc289ac9b921ef76733c225152b053d77_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_1a4172318d904089e06db5f6683eaee366b08966aeeecad219641a9ad1264c39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a4172318d904089e06db5f6683eaee366b08966aeeecad219641a9ad1264c39->enter($__internal_1a4172318d904089e06db5f6683eaee366b08966aeeecad219641a9ad1264c39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_6bbb58d4622ff5700469c4a003f53131a34b43af631762e78cb1fb3c84c13c46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bbb58d4622ff5700469c4a003f53131a34b43af631762e78cb1fb3c84c13c46->enter($__internal_6bbb58d4622ff5700469c4a003f53131a34b43af631762e78cb1fb3c84c13c46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_6bbb58d4622ff5700469c4a003f53131a34b43af631762e78cb1fb3c84c13c46->leave($__internal_6bbb58d4622ff5700469c4a003f53131a34b43af631762e78cb1fb3c84c13c46_prof);

        
        $__internal_1a4172318d904089e06db5f6683eaee366b08966aeeecad219641a9ad1264c39->leave($__internal_1a4172318d904089e06db5f6683eaee366b08966aeeecad219641a9ad1264c39_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9c2763e0da853c0dbde15c2597207bb8fa4c8e0d56dd7acbf6a661cd771a888f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c2763e0da853c0dbde15c2597207bb8fa4c8e0d56dd7acbf6a661cd771a888f->enter($__internal_9c2763e0da853c0dbde15c2597207bb8fa4c8e0d56dd7acbf6a661cd771a888f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d4e4aa12cc87a2d418fb5a9b7e4a23b5ebebb25622e6d40a5ac5c4eb1349eb22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4e4aa12cc87a2d418fb5a9b7e4a23b5ebebb25622e6d40a5ac5c4eb1349eb22->enter($__internal_d4e4aa12cc87a2d418fb5a9b7e4a23b5ebebb25622e6d40a5ac5c4eb1349eb22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_d4e4aa12cc87a2d418fb5a9b7e4a23b5ebebb25622e6d40a5ac5c4eb1349eb22->leave($__internal_d4e4aa12cc87a2d418fb5a9b7e4a23b5ebebb25622e6d40a5ac5c4eb1349eb22_prof);

        
        $__internal_9c2763e0da853c0dbde15c2597207bb8fa4c8e0d56dd7acbf6a661cd771a888f->leave($__internal_9c2763e0da853c0dbde15c2597207bb8fa4c8e0d56dd7acbf6a661cd771a888f_prof);

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
