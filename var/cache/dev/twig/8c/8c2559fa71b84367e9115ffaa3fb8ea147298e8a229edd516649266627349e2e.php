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
        $__internal_dfd9f5d968bd9921b794f02196218fc7e61fd0107671405681b92de827fc2300 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfd9f5d968bd9921b794f02196218fc7e61fd0107671405681b92de827fc2300->enter($__internal_dfd9f5d968bd9921b794f02196218fc7e61fd0107671405681b92de827fc2300_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_2b18a45bf27819353d3451abe7c13d27790f1895dd2ec01a5487ee55acae306b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b18a45bf27819353d3451abe7c13d27790f1895dd2ec01a5487ee55acae306b->enter($__internal_2b18a45bf27819353d3451abe7c13d27790f1895dd2ec01a5487ee55acae306b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dfd9f5d968bd9921b794f02196218fc7e61fd0107671405681b92de827fc2300->leave($__internal_dfd9f5d968bd9921b794f02196218fc7e61fd0107671405681b92de827fc2300_prof);

        
        $__internal_2b18a45bf27819353d3451abe7c13d27790f1895dd2ec01a5487ee55acae306b->leave($__internal_2b18a45bf27819353d3451abe7c13d27790f1895dd2ec01a5487ee55acae306b_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_1770c9f597bfc583ce3a100b851986ae22baa03a11274d7ea576f770c62bf1ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1770c9f597bfc583ce3a100b851986ae22baa03a11274d7ea576f770c62bf1ca->enter($__internal_1770c9f597bfc583ce3a100b851986ae22baa03a11274d7ea576f770c62bf1ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_c960067918def2848d2afce9ebd493ffb476c5841746c7f7fc39be966ecc40b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c960067918def2848d2afce9ebd493ffb476c5841746c7f7fc39be966ecc40b3->enter($__internal_c960067918def2848d2afce9ebd493ffb476c5841746c7f7fc39be966ecc40b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_c960067918def2848d2afce9ebd493ffb476c5841746c7f7fc39be966ecc40b3->leave($__internal_c960067918def2848d2afce9ebd493ffb476c5841746c7f7fc39be966ecc40b3_prof);

        
        $__internal_1770c9f597bfc583ce3a100b851986ae22baa03a11274d7ea576f770c62bf1ca->leave($__internal_1770c9f597bfc583ce3a100b851986ae22baa03a11274d7ea576f770c62bf1ca_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a2b015e93fcf8a5a28ecf7fb6b501ae13d9e191294cc30169b92b5f2113ecd14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2b015e93fcf8a5a28ecf7fb6b501ae13d9e191294cc30169b92b5f2113ecd14->enter($__internal_a2b015e93fcf8a5a28ecf7fb6b501ae13d9e191294cc30169b92b5f2113ecd14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_db00a7df5b8efd234c0ea57a349233caa642d745ee79080e9047f0a1f40634a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db00a7df5b8efd234c0ea57a349233caa642d745ee79080e9047f0a1f40634a5->enter($__internal_db00a7df5b8efd234c0ea57a349233caa642d745ee79080e9047f0a1f40634a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_db00a7df5b8efd234c0ea57a349233caa642d745ee79080e9047f0a1f40634a5->leave($__internal_db00a7df5b8efd234c0ea57a349233caa642d745ee79080e9047f0a1f40634a5_prof);

        
        $__internal_a2b015e93fcf8a5a28ecf7fb6b501ae13d9e191294cc30169b92b5f2113ecd14->leave($__internal_a2b015e93fcf8a5a28ecf7fb6b501ae13d9e191294cc30169b92b5f2113ecd14_prof);

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
