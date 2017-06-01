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
        $__internal_e0ce6ff5219a9b7ff9a4ba2df5f54464dbc3ff6f72df279bf21808e41714ffa2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0ce6ff5219a9b7ff9a4ba2df5f54464dbc3ff6f72df279bf21808e41714ffa2->enter($__internal_e0ce6ff5219a9b7ff9a4ba2df5f54464dbc3ff6f72df279bf21808e41714ffa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_2cb2c3f9f394f836fd2a5eaafb5fd5b9fdcf83b749a12bc6b317eee8d41b9f17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cb2c3f9f394f836fd2a5eaafb5fd5b9fdcf83b749a12bc6b317eee8d41b9f17->enter($__internal_2cb2c3f9f394f836fd2a5eaafb5fd5b9fdcf83b749a12bc6b317eee8d41b9f17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e0ce6ff5219a9b7ff9a4ba2df5f54464dbc3ff6f72df279bf21808e41714ffa2->leave($__internal_e0ce6ff5219a9b7ff9a4ba2df5f54464dbc3ff6f72df279bf21808e41714ffa2_prof);

        
        $__internal_2cb2c3f9f394f836fd2a5eaafb5fd5b9fdcf83b749a12bc6b317eee8d41b9f17->leave($__internal_2cb2c3f9f394f836fd2a5eaafb5fd5b9fdcf83b749a12bc6b317eee8d41b9f17_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2ca66449711b7bdd158128000de90de1833adc4a7a57d46e48172ea4d8155eab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ca66449711b7bdd158128000de90de1833adc4a7a57d46e48172ea4d8155eab->enter($__internal_2ca66449711b7bdd158128000de90de1833adc4a7a57d46e48172ea4d8155eab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_2acc0667b15a7f1a19602b4fe4f68e9cdbdf6d54536435fdba42af2abf691f56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2acc0667b15a7f1a19602b4fe4f68e9cdbdf6d54536435fdba42af2abf691f56->enter($__internal_2acc0667b15a7f1a19602b4fe4f68e9cdbdf6d54536435fdba42af2abf691f56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_2acc0667b15a7f1a19602b4fe4f68e9cdbdf6d54536435fdba42af2abf691f56->leave($__internal_2acc0667b15a7f1a19602b4fe4f68e9cdbdf6d54536435fdba42af2abf691f56_prof);

        
        $__internal_2ca66449711b7bdd158128000de90de1833adc4a7a57d46e48172ea4d8155eab->leave($__internal_2ca66449711b7bdd158128000de90de1833adc4a7a57d46e48172ea4d8155eab_prof);

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
