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
        $__internal_46ab1d4ee982b5bcfe3bbbe8e22b0749ba6d3c49bd8845850291009fcd0a9f52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46ab1d4ee982b5bcfe3bbbe8e22b0749ba6d3c49bd8845850291009fcd0a9f52->enter($__internal_46ab1d4ee982b5bcfe3bbbe8e22b0749ba6d3c49bd8845850291009fcd0a9f52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_27ed1a40302e163440d176c9c299372b78ef29849afcfbd1880468d1ec920b04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27ed1a40302e163440d176c9c299372b78ef29849afcfbd1880468d1ec920b04->enter($__internal_27ed1a40302e163440d176c9c299372b78ef29849afcfbd1880468d1ec920b04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_46ab1d4ee982b5bcfe3bbbe8e22b0749ba6d3c49bd8845850291009fcd0a9f52->leave($__internal_46ab1d4ee982b5bcfe3bbbe8e22b0749ba6d3c49bd8845850291009fcd0a9f52_prof);

        
        $__internal_27ed1a40302e163440d176c9c299372b78ef29849afcfbd1880468d1ec920b04->leave($__internal_27ed1a40302e163440d176c9c299372b78ef29849afcfbd1880468d1ec920b04_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b8b75122cc5d510cf8d2ac4b893464a1a674942c5584c78fd42da6d22e4d50b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8b75122cc5d510cf8d2ac4b893464a1a674942c5584c78fd42da6d22e4d50b5->enter($__internal_b8b75122cc5d510cf8d2ac4b893464a1a674942c5584c78fd42da6d22e4d50b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9c1e9d9edc334b0a426071aff3761e93906863bef5c9d3a933f14594fc31bd35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c1e9d9edc334b0a426071aff3761e93906863bef5c9d3a933f14594fc31bd35->enter($__internal_9c1e9d9edc334b0a426071aff3761e93906863bef5c9d3a933f14594fc31bd35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_9c1e9d9edc334b0a426071aff3761e93906863bef5c9d3a933f14594fc31bd35->leave($__internal_9c1e9d9edc334b0a426071aff3761e93906863bef5c9d3a933f14594fc31bd35_prof);

        
        $__internal_b8b75122cc5d510cf8d2ac4b893464a1a674942c5584c78fd42da6d22e4d50b5->leave($__internal_b8b75122cc5d510cf8d2ac4b893464a1a674942c5584c78fd42da6d22e4d50b5_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_affa5867db2f41813fba63815c11d8a5363038d323d1aceeab30d9fa8da48d8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_affa5867db2f41813fba63815c11d8a5363038d323d1aceeab30d9fa8da48d8e->enter($__internal_affa5867db2f41813fba63815c11d8a5363038d323d1aceeab30d9fa8da48d8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_86eb4209f1f22290c42fdcb2d125ceaff33ae186fcb204b037acf2d2fee83f83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86eb4209f1f22290c42fdcb2d125ceaff33ae186fcb204b037acf2d2fee83f83->enter($__internal_86eb4209f1f22290c42fdcb2d125ceaff33ae186fcb204b037acf2d2fee83f83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_86eb4209f1f22290c42fdcb2d125ceaff33ae186fcb204b037acf2d2fee83f83->leave($__internal_86eb4209f1f22290c42fdcb2d125ceaff33ae186fcb204b037acf2d2fee83f83_prof);

        
        $__internal_affa5867db2f41813fba63815c11d8a5363038d323d1aceeab30d9fa8da48d8e->leave($__internal_affa5867db2f41813fba63815c11d8a5363038d323d1aceeab30d9fa8da48d8e_prof);

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
