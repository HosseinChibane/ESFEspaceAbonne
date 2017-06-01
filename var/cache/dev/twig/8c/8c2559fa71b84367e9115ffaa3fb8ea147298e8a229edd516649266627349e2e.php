<?php

/* @WebProfiler/Profiler/info.html.twig */
class __TwigTemplate_d315ef6e899a30faeca59ce7a6ca67f4a8b8f9ba63150a00da23b585eb3acc91 extends Twig_Template
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
        $__internal_27af5a01d710d875a7f512547b97dde2565df8e3161f86cee3f68a3d691569cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27af5a01d710d875a7f512547b97dde2565df8e3161f86cee3f68a3d691569cb->enter($__internal_27af5a01d710d875a7f512547b97dde2565df8e3161f86cee3f68a3d691569cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_b5b1da21293cf38fa3d640a00793ed95bcf4db624c051badca06c1494ee0d313 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5b1da21293cf38fa3d640a00793ed95bcf4db624c051badca06c1494ee0d313->enter($__internal_b5b1da21293cf38fa3d640a00793ed95bcf4db624c051badca06c1494ee0d313_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_27af5a01d710d875a7f512547b97dde2565df8e3161f86cee3f68a3d691569cb->leave($__internal_27af5a01d710d875a7f512547b97dde2565df8e3161f86cee3f68a3d691569cb_prof);

        
        $__internal_b5b1da21293cf38fa3d640a00793ed95bcf4db624c051badca06c1494ee0d313->leave($__internal_b5b1da21293cf38fa3d640a00793ed95bcf4db624c051badca06c1494ee0d313_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_1c27c9b0012c24abf3b4b231b39c4dca36b815fa9a03c6d66f033b45989b6d60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c27c9b0012c24abf3b4b231b39c4dca36b815fa9a03c6d66f033b45989b6d60->enter($__internal_1c27c9b0012c24abf3b4b231b39c4dca36b815fa9a03c6d66f033b45989b6d60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_f1715885a472a27d4853eede44c29cbf76a827fd412e6bec529eb27ce2fbdd24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1715885a472a27d4853eede44c29cbf76a827fd412e6bec529eb27ce2fbdd24->enter($__internal_f1715885a472a27d4853eede44c29cbf76a827fd412e6bec529eb27ce2fbdd24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_f1715885a472a27d4853eede44c29cbf76a827fd412e6bec529eb27ce2fbdd24->leave($__internal_f1715885a472a27d4853eede44c29cbf76a827fd412e6bec529eb27ce2fbdd24_prof);

        
        $__internal_1c27c9b0012c24abf3b4b231b39c4dca36b815fa9a03c6d66f033b45989b6d60->leave($__internal_1c27c9b0012c24abf3b4b231b39c4dca36b815fa9a03c6d66f033b45989b6d60_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_daec305cdb3835933de0ae0589b5c5550a15a356fad06e326bb0ef6e7a3a686a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_daec305cdb3835933de0ae0589b5c5550a15a356fad06e326bb0ef6e7a3a686a->enter($__internal_daec305cdb3835933de0ae0589b5c5550a15a356fad06e326bb0ef6e7a3a686a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_7df0ca65e5d4cf9367e2ca484b12942fc7b96d4bf239f88848c6f5d7e2767258 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7df0ca65e5d4cf9367e2ca484b12942fc7b96d4bf239f88848c6f5d7e2767258->enter($__internal_7df0ca65e5d4cf9367e2ca484b12942fc7b96d4bf239f88848c6f5d7e2767258_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_7df0ca65e5d4cf9367e2ca484b12942fc7b96d4bf239f88848c6f5d7e2767258->leave($__internal_7df0ca65e5d4cf9367e2ca484b12942fc7b96d4bf239f88848c6f5d7e2767258_prof);

        
        $__internal_daec305cdb3835933de0ae0589b5c5550a15a356fad06e326bb0ef6e7a3a686a->leave($__internal_daec305cdb3835933de0ae0589b5c5550a15a356fad06e326bb0ef6e7a3a686a_prof);

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
