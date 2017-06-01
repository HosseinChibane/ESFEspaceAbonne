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
        $__internal_393d722fcf249715b8830c5d1014cc84e233661c2578ec85b99e6a9b530825af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_393d722fcf249715b8830c5d1014cc84e233661c2578ec85b99e6a9b530825af->enter($__internal_393d722fcf249715b8830c5d1014cc84e233661c2578ec85b99e6a9b530825af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_2b5839e584918a5717f7ccedde5fd991aac7ff3c26323886b794256064273879 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b5839e584918a5717f7ccedde5fd991aac7ff3c26323886b794256064273879->enter($__internal_2b5839e584918a5717f7ccedde5fd991aac7ff3c26323886b794256064273879_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_393d722fcf249715b8830c5d1014cc84e233661c2578ec85b99e6a9b530825af->leave($__internal_393d722fcf249715b8830c5d1014cc84e233661c2578ec85b99e6a9b530825af_prof);

        
        $__internal_2b5839e584918a5717f7ccedde5fd991aac7ff3c26323886b794256064273879->leave($__internal_2b5839e584918a5717f7ccedde5fd991aac7ff3c26323886b794256064273879_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b924e7165a74f34e7fa85be5a5d1dd2941b8f622688a09ae179b9d728baa6eee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b924e7165a74f34e7fa85be5a5d1dd2941b8f622688a09ae179b9d728baa6eee->enter($__internal_b924e7165a74f34e7fa85be5a5d1dd2941b8f622688a09ae179b9d728baa6eee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_507b8896c5cd6cdcb2b6146d1f5a6554d760202a4de62f476c218b9e890a603b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_507b8896c5cd6cdcb2b6146d1f5a6554d760202a4de62f476c218b9e890a603b->enter($__internal_507b8896c5cd6cdcb2b6146d1f5a6554d760202a4de62f476c218b9e890a603b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_507b8896c5cd6cdcb2b6146d1f5a6554d760202a4de62f476c218b9e890a603b->leave($__internal_507b8896c5cd6cdcb2b6146d1f5a6554d760202a4de62f476c218b9e890a603b_prof);

        
        $__internal_b924e7165a74f34e7fa85be5a5d1dd2941b8f622688a09ae179b9d728baa6eee->leave($__internal_b924e7165a74f34e7fa85be5a5d1dd2941b8f622688a09ae179b9d728baa6eee_prof);

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
