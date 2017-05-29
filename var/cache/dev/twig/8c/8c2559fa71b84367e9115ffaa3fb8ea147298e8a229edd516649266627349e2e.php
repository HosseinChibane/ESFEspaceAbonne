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
        $__internal_bbb34b83998b58191ff2563da28529a16c21befa9d819e5ecd2ab1d7e1c40133 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbb34b83998b58191ff2563da28529a16c21befa9d819e5ecd2ab1d7e1c40133->enter($__internal_bbb34b83998b58191ff2563da28529a16c21befa9d819e5ecd2ab1d7e1c40133_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_804e3f98396e813ed5f3bab40dd9feaa0e8d04a41b040bb17472feef91107d30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_804e3f98396e813ed5f3bab40dd9feaa0e8d04a41b040bb17472feef91107d30->enter($__internal_804e3f98396e813ed5f3bab40dd9feaa0e8d04a41b040bb17472feef91107d30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bbb34b83998b58191ff2563da28529a16c21befa9d819e5ecd2ab1d7e1c40133->leave($__internal_bbb34b83998b58191ff2563da28529a16c21befa9d819e5ecd2ab1d7e1c40133_prof);

        
        $__internal_804e3f98396e813ed5f3bab40dd9feaa0e8d04a41b040bb17472feef91107d30->leave($__internal_804e3f98396e813ed5f3bab40dd9feaa0e8d04a41b040bb17472feef91107d30_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_84116bf83b632344c3b967ae15f2574d59cfb0658819f743f59182ee26d440e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84116bf83b632344c3b967ae15f2574d59cfb0658819f743f59182ee26d440e5->enter($__internal_84116bf83b632344c3b967ae15f2574d59cfb0658819f743f59182ee26d440e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_922178f5ff9834f0ef6630f8838b964536f5bc709b1966e79ca3a43b6b1b1053 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_922178f5ff9834f0ef6630f8838b964536f5bc709b1966e79ca3a43b6b1b1053->enter($__internal_922178f5ff9834f0ef6630f8838b964536f5bc709b1966e79ca3a43b6b1b1053_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_922178f5ff9834f0ef6630f8838b964536f5bc709b1966e79ca3a43b6b1b1053->leave($__internal_922178f5ff9834f0ef6630f8838b964536f5bc709b1966e79ca3a43b6b1b1053_prof);

        
        $__internal_84116bf83b632344c3b967ae15f2574d59cfb0658819f743f59182ee26d440e5->leave($__internal_84116bf83b632344c3b967ae15f2574d59cfb0658819f743f59182ee26d440e5_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_78751dc5a7cfc5d8e991385e6533f6163087c25b8c9cdaa8ca1fbee336f746f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78751dc5a7cfc5d8e991385e6533f6163087c25b8c9cdaa8ca1fbee336f746f7->enter($__internal_78751dc5a7cfc5d8e991385e6533f6163087c25b8c9cdaa8ca1fbee336f746f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6fb0a8ad245c9452566401f6131f167f36210d82f6c228612aa01835f24543b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fb0a8ad245c9452566401f6131f167f36210d82f6c228612aa01835f24543b9->enter($__internal_6fb0a8ad245c9452566401f6131f167f36210d82f6c228612aa01835f24543b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_6fb0a8ad245c9452566401f6131f167f36210d82f6c228612aa01835f24543b9->leave($__internal_6fb0a8ad245c9452566401f6131f167f36210d82f6c228612aa01835f24543b9_prof);

        
        $__internal_78751dc5a7cfc5d8e991385e6533f6163087c25b8c9cdaa8ca1fbee336f746f7->leave($__internal_78751dc5a7cfc5d8e991385e6533f6163087c25b8c9cdaa8ca1fbee336f746f7_prof);

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
