<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_608d6a0288b534b2552a9cee86d4ccdbb5b9a5f55419992b736482d7f47f88c0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
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
        $__internal_d94da5194d78cceafe09ea6f1974cdd5ba6056c82880ab1a3b2e4ec3f36e4746 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d94da5194d78cceafe09ea6f1974cdd5ba6056c82880ab1a3b2e4ec3f36e4746->enter($__internal_d94da5194d78cceafe09ea6f1974cdd5ba6056c82880ab1a3b2e4ec3f36e4746_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_a03db4cc51564e11d71051af054264f373e6dd56593ec6f0b5148ba2a9dff7df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a03db4cc51564e11d71051af054264f373e6dd56593ec6f0b5148ba2a9dff7df->enter($__internal_a03db4cc51564e11d71051af054264f373e6dd56593ec6f0b5148ba2a9dff7df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d94da5194d78cceafe09ea6f1974cdd5ba6056c82880ab1a3b2e4ec3f36e4746->leave($__internal_d94da5194d78cceafe09ea6f1974cdd5ba6056c82880ab1a3b2e4ec3f36e4746_prof);

        
        $__internal_a03db4cc51564e11d71051af054264f373e6dd56593ec6f0b5148ba2a9dff7df->leave($__internal_a03db4cc51564e11d71051af054264f373e6dd56593ec6f0b5148ba2a9dff7df_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b050f1604c1edd4a2cf098bc0e16e328a5414d74485dcf9b9d436ab56f8a6f41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b050f1604c1edd4a2cf098bc0e16e328a5414d74485dcf9b9d436ab56f8a6f41->enter($__internal_b050f1604c1edd4a2cf098bc0e16e328a5414d74485dcf9b9d436ab56f8a6f41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e6658b5eb6ef024abcf1cba7039e7f3af12f785f3f0fbb8d88a6425f4fe440ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6658b5eb6ef024abcf1cba7039e7f3af12f785f3f0fbb8d88a6425f4fe440ab->enter($__internal_e6658b5eb6ef024abcf1cba7039e7f3af12f785f3f0fbb8d88a6425f4fe440ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_e6658b5eb6ef024abcf1cba7039e7f3af12f785f3f0fbb8d88a6425f4fe440ab->leave($__internal_e6658b5eb6ef024abcf1cba7039e7f3af12f785f3f0fbb8d88a6425f4fe440ab_prof);

        
        $__internal_b050f1604c1edd4a2cf098bc0e16e328a5414d74485dcf9b9d436ab56f8a6f41->leave($__internal_b050f1604c1edd4a2cf098bc0e16e328a5414d74485dcf9b9d436ab56f8a6f41_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_e3b08384e93f5f37e0ab3295d3507080c73b7840967e13c131c210c694bd5d44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3b08384e93f5f37e0ab3295d3507080c73b7840967e13c131c210c694bd5d44->enter($__internal_e3b08384e93f5f37e0ab3295d3507080c73b7840967e13c131c210c694bd5d44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1fcd4219336ce379418f24de3fd42e3becc8a76e15d53aaccb09ba7504e222b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fcd4219336ce379418f24de3fd42e3becc8a76e15d53aaccb09ba7504e222b7->enter($__internal_1fcd4219336ce379418f24de3fd42e3becc8a76e15d53aaccb09ba7504e222b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_1fcd4219336ce379418f24de3fd42e3becc8a76e15d53aaccb09ba7504e222b7->leave($__internal_1fcd4219336ce379418f24de3fd42e3becc8a76e15d53aaccb09ba7504e222b7_prof);

        
        $__internal_e3b08384e93f5f37e0ab3295d3507080c73b7840967e13c131c210c694bd5d44->leave($__internal_e3b08384e93f5f37e0ab3295d3507080c73b7840967e13c131c210c694bd5d44_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
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
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
