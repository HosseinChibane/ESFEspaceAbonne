<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_a243cba5a67ae754c89b566d046e9119099d4884437feadf4eb00c213af98e86 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_43d771cb41c67f1f3d0f400b898624ab4200b223ae8a546425c14b5369302a22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43d771cb41c67f1f3d0f400b898624ab4200b223ae8a546425c14b5369302a22->enter($__internal_43d771cb41c67f1f3d0f400b898624ab4200b223ae8a546425c14b5369302a22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_2de82e41a8c18d32043273dbe6982474719636a3c8e28b3bcad34a18ad185876 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2de82e41a8c18d32043273dbe6982474719636a3c8e28b3bcad34a18ad185876->enter($__internal_2de82e41a8c18d32043273dbe6982474719636a3c8e28b3bcad34a18ad185876_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_43d771cb41c67f1f3d0f400b898624ab4200b223ae8a546425c14b5369302a22->leave($__internal_43d771cb41c67f1f3d0f400b898624ab4200b223ae8a546425c14b5369302a22_prof);

        
        $__internal_2de82e41a8c18d32043273dbe6982474719636a3c8e28b3bcad34a18ad185876->leave($__internal_2de82e41a8c18d32043273dbe6982474719636a3c8e28b3bcad34a18ad185876_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_78d9fb45d10322b7001b6b94d33325453f2b9f975526b4781bcb0de01f458bbf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78d9fb45d10322b7001b6b94d33325453f2b9f975526b4781bcb0de01f458bbf->enter($__internal_78d9fb45d10322b7001b6b94d33325453f2b9f975526b4781bcb0de01f458bbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_498e96ea5e07ec3ef74cfb8c078c5c392cfabb2f161f5c556a07ce3dcc3bbb1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_498e96ea5e07ec3ef74cfb8c078c5c392cfabb2f161f5c556a07ce3dcc3bbb1c->enter($__internal_498e96ea5e07ec3ef74cfb8c078c5c392cfabb2f161f5c556a07ce3dcc3bbb1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_498e96ea5e07ec3ef74cfb8c078c5c392cfabb2f161f5c556a07ce3dcc3bbb1c->leave($__internal_498e96ea5e07ec3ef74cfb8c078c5c392cfabb2f161f5c556a07ce3dcc3bbb1c_prof);

        
        $__internal_78d9fb45d10322b7001b6b94d33325453f2b9f975526b4781bcb0de01f458bbf->leave($__internal_78d9fb45d10322b7001b6b94d33325453f2b9f975526b4781bcb0de01f458bbf_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
