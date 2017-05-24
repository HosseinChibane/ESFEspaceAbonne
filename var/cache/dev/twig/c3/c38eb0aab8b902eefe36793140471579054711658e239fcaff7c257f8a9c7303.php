<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_1fd590905737af71df5194e7e97db933a6bded2e23180e652d8094d6f2a202e8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_934d31f99a9287e8f3192eb518035634d8154ba0249e1484c5a9e77ca86bb3df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_934d31f99a9287e8f3192eb518035634d8154ba0249e1484c5a9e77ca86bb3df->enter($__internal_934d31f99a9287e8f3192eb518035634d8154ba0249e1484c5a9e77ca86bb3df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_239fc9b80eb679aed4a85fcc072292199acda9dc74dd05d2d4c341de8d91a42f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_239fc9b80eb679aed4a85fcc072292199acda9dc74dd05d2d4c341de8d91a42f->enter($__internal_239fc9b80eb679aed4a85fcc072292199acda9dc74dd05d2d4c341de8d91a42f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_934d31f99a9287e8f3192eb518035634d8154ba0249e1484c5a9e77ca86bb3df->leave($__internal_934d31f99a9287e8f3192eb518035634d8154ba0249e1484c5a9e77ca86bb3df_prof);

        
        $__internal_239fc9b80eb679aed4a85fcc072292199acda9dc74dd05d2d4c341de8d91a42f->leave($__internal_239fc9b80eb679aed4a85fcc072292199acda9dc74dd05d2d4c341de8d91a42f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_fab8ca970dd849d81ba7f10e0dc1d42a8f575f2bceb0fa56819cd5f761381153 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fab8ca970dd849d81ba7f10e0dc1d42a8f575f2bceb0fa56819cd5f761381153->enter($__internal_fab8ca970dd849d81ba7f10e0dc1d42a8f575f2bceb0fa56819cd5f761381153_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_2551c5f0ce4de66b3512eb002f19a38696e0b4c99c50670dab972992f43276ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2551c5f0ce4de66b3512eb002f19a38696e0b4c99c50670dab972992f43276ee->enter($__internal_2551c5f0ce4de66b3512eb002f19a38696e0b4c99c50670dab972992f43276ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_2551c5f0ce4de66b3512eb002f19a38696e0b4c99c50670dab972992f43276ee->leave($__internal_2551c5f0ce4de66b3512eb002f19a38696e0b4c99c50670dab972992f43276ee_prof);

        
        $__internal_fab8ca970dd849d81ba7f10e0dc1d42a8f575f2bceb0fa56819cd5f761381153->leave($__internal_fab8ca970dd849d81ba7f10e0dc1d42a8f575f2bceb0fa56819cd5f761381153_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_880d2b1a380ad3a2e2c6500f4585093e6ecc77c4e41d58fb085e9df4d2fd9a35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_880d2b1a380ad3a2e2c6500f4585093e6ecc77c4e41d58fb085e9df4d2fd9a35->enter($__internal_880d2b1a380ad3a2e2c6500f4585093e6ecc77c4e41d58fb085e9df4d2fd9a35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a4481a62ccd87e604e64411d19910da05acde876b1066bd9b7c4d5b394f919db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4481a62ccd87e604e64411d19910da05acde876b1066bd9b7c4d5b394f919db->enter($__internal_a4481a62ccd87e604e64411d19910da05acde876b1066bd9b7c4d5b394f919db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_a4481a62ccd87e604e64411d19910da05acde876b1066bd9b7c4d5b394f919db->leave($__internal_a4481a62ccd87e604e64411d19910da05acde876b1066bd9b7c4d5b394f919db_prof);

        
        $__internal_880d2b1a380ad3a2e2c6500f4585093e6ecc77c4e41d58fb085e9df4d2fd9a35->leave($__internal_880d2b1a380ad3a2e2c6500f4585093e6ecc77c4e41d58fb085e9df4d2fd9a35_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
