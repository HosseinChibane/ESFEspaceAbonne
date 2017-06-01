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
        $__internal_7e67967dc9016fa16fee73601575900eed03271384bb140150be34548305398e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e67967dc9016fa16fee73601575900eed03271384bb140150be34548305398e->enter($__internal_7e67967dc9016fa16fee73601575900eed03271384bb140150be34548305398e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_5481fa957a12d7de3af4d60e8b2c4f58bb520cc11d88a8294186fa9ccbb462ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5481fa957a12d7de3af4d60e8b2c4f58bb520cc11d88a8294186fa9ccbb462ff->enter($__internal_5481fa957a12d7de3af4d60e8b2c4f58bb520cc11d88a8294186fa9ccbb462ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7e67967dc9016fa16fee73601575900eed03271384bb140150be34548305398e->leave($__internal_7e67967dc9016fa16fee73601575900eed03271384bb140150be34548305398e_prof);

        
        $__internal_5481fa957a12d7de3af4d60e8b2c4f58bb520cc11d88a8294186fa9ccbb462ff->leave($__internal_5481fa957a12d7de3af4d60e8b2c4f58bb520cc11d88a8294186fa9ccbb462ff_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_fb85cde415cbd669bd3c43b894aef2b0b4026ed77f3c2fa20acd3ac2ecd31f81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb85cde415cbd669bd3c43b894aef2b0b4026ed77f3c2fa20acd3ac2ecd31f81->enter($__internal_fb85cde415cbd669bd3c43b894aef2b0b4026ed77f3c2fa20acd3ac2ecd31f81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_fc37e5b8b63f7fcad26d635ffc4dc76bfd239323d9fc10b3b0beace8c6be4111 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc37e5b8b63f7fcad26d635ffc4dc76bfd239323d9fc10b3b0beace8c6be4111->enter($__internal_fc37e5b8b63f7fcad26d635ffc4dc76bfd239323d9fc10b3b0beace8c6be4111_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_fc37e5b8b63f7fcad26d635ffc4dc76bfd239323d9fc10b3b0beace8c6be4111->leave($__internal_fc37e5b8b63f7fcad26d635ffc4dc76bfd239323d9fc10b3b0beace8c6be4111_prof);

        
        $__internal_fb85cde415cbd669bd3c43b894aef2b0b4026ed77f3c2fa20acd3ac2ecd31f81->leave($__internal_fb85cde415cbd669bd3c43b894aef2b0b4026ed77f3c2fa20acd3ac2ecd31f81_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_94f01ba5971b11505c0f471cf485a891a4f773b00b6d40ea3b2eeae612ebae32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94f01ba5971b11505c0f471cf485a891a4f773b00b6d40ea3b2eeae612ebae32->enter($__internal_94f01ba5971b11505c0f471cf485a891a4f773b00b6d40ea3b2eeae612ebae32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_2d3ba2bac4e5152105b937afd416f9c34c5499a3017a62cfb687484c11131f5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d3ba2bac4e5152105b937afd416f9c34c5499a3017a62cfb687484c11131f5d->enter($__internal_2d3ba2bac4e5152105b937afd416f9c34c5499a3017a62cfb687484c11131f5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_2d3ba2bac4e5152105b937afd416f9c34c5499a3017a62cfb687484c11131f5d->leave($__internal_2d3ba2bac4e5152105b937afd416f9c34c5499a3017a62cfb687484c11131f5d_prof);

        
        $__internal_94f01ba5971b11505c0f471cf485a891a4f773b00b6d40ea3b2eeae612ebae32->leave($__internal_94f01ba5971b11505c0f471cf485a891a4f773b00b6d40ea3b2eeae612ebae32_prof);

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
