<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_c8f560cfa1de8ac8da3c49c8fa93a1fb563506353a0aa9180ffac8ab66709027 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3bc9382c6fd3adfe127086f3ce6d420fa65c9c92af15af8ecb5e4d3a650b2e37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3bc9382c6fd3adfe127086f3ce6d420fa65c9c92af15af8ecb5e4d3a650b2e37->enter($__internal_3bc9382c6fd3adfe127086f3ce6d420fa65c9c92af15af8ecb5e4d3a650b2e37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_8bb55a630af3b2229aaa395f6b2bce0f579a400f362ce3464fb33f23609240df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bb55a630af3b2229aaa395f6b2bce0f579a400f362ce3464fb33f23609240df->enter($__internal_8bb55a630af3b2229aaa395f6b2bce0f579a400f362ce3464fb33f23609240df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3bc9382c6fd3adfe127086f3ce6d420fa65c9c92af15af8ecb5e4d3a650b2e37->leave($__internal_3bc9382c6fd3adfe127086f3ce6d420fa65c9c92af15af8ecb5e4d3a650b2e37_prof);

        
        $__internal_8bb55a630af3b2229aaa395f6b2bce0f579a400f362ce3464fb33f23609240df->leave($__internal_8bb55a630af3b2229aaa395f6b2bce0f579a400f362ce3464fb33f23609240df_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b082c79abb193be1ce2cca5971389f38c4107eadc08008f7bc5d1ec6567b1e98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b082c79abb193be1ce2cca5971389f38c4107eadc08008f7bc5d1ec6567b1e98->enter($__internal_b082c79abb193be1ce2cca5971389f38c4107eadc08008f7bc5d1ec6567b1e98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1a4cbb89ed74081f30fb2a0bbe595d4f1b870c6a84bfaf589e78013e5534e336 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a4cbb89ed74081f30fb2a0bbe595d4f1b870c6a84bfaf589e78013e5534e336->enter($__internal_1a4cbb89ed74081f30fb2a0bbe595d4f1b870c6a84bfaf589e78013e5534e336_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_1a4cbb89ed74081f30fb2a0bbe595d4f1b870c6a84bfaf589e78013e5534e336->leave($__internal_1a4cbb89ed74081f30fb2a0bbe595d4f1b870c6a84bfaf589e78013e5534e336_prof);

        
        $__internal_b082c79abb193be1ce2cca5971389f38c4107eadc08008f7bc5d1ec6567b1e98->leave($__internal_b082c79abb193be1ce2cca5971389f38c4107eadc08008f7bc5d1ec6567b1e98_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_e7781a85f3bece2980a0f3b57703cd231d582836b13784399e680380d5e42855 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7781a85f3bece2980a0f3b57703cd231d582836b13784399e680380d5e42855->enter($__internal_e7781a85f3bece2980a0f3b57703cd231d582836b13784399e680380d5e42855_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e3c2ceb6e396502b0ed4dbf336b1f344b0a0e8a730e017157095f69144bce707 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3c2ceb6e396502b0ed4dbf336b1f344b0a0e8a730e017157095f69144bce707->enter($__internal_e3c2ceb6e396502b0ed4dbf336b1f344b0a0e8a730e017157095f69144bce707_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_e3c2ceb6e396502b0ed4dbf336b1f344b0a0e8a730e017157095f69144bce707->leave($__internal_e3c2ceb6e396502b0ed4dbf336b1f344b0a0e8a730e017157095f69144bce707_prof);

        
        $__internal_e7781a85f3bece2980a0f3b57703cd231d582836b13784399e680380d5e42855->leave($__internal_e7781a85f3bece2980a0f3b57703cd231d582836b13784399e680380d5e42855_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
