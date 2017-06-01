<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_7445401fbba8784bb7432eb736d4dac0fb56c6cd20a210d867105ec5c5d44ef6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_6f412a994023a73a26000b03c2e0efc2d77e194c8c5c640532d6d0780be10d82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f412a994023a73a26000b03c2e0efc2d77e194c8c5c640532d6d0780be10d82->enter($__internal_6f412a994023a73a26000b03c2e0efc2d77e194c8c5c640532d6d0780be10d82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_ca60c9963c7c0f172421d9c0f1844a27aa1ab9a102a33b201342a52cbeeca2e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca60c9963c7c0f172421d9c0f1844a27aa1ab9a102a33b201342a52cbeeca2e0->enter($__internal_ca60c9963c7c0f172421d9c0f1844a27aa1ab9a102a33b201342a52cbeeca2e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f412a994023a73a26000b03c2e0efc2d77e194c8c5c640532d6d0780be10d82->leave($__internal_6f412a994023a73a26000b03c2e0efc2d77e194c8c5c640532d6d0780be10d82_prof);

        
        $__internal_ca60c9963c7c0f172421d9c0f1844a27aa1ab9a102a33b201342a52cbeeca2e0->leave($__internal_ca60c9963c7c0f172421d9c0f1844a27aa1ab9a102a33b201342a52cbeeca2e0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a35e06d98a9bc67773a291fb654116f9e8158362fa2e545c43c0b787627ee9be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a35e06d98a9bc67773a291fb654116f9e8158362fa2e545c43c0b787627ee9be->enter($__internal_a35e06d98a9bc67773a291fb654116f9e8158362fa2e545c43c0b787627ee9be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_4435d4b1af9ffb80b666ea51b6da9b793e2a68711ab3f383295142701300bdb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4435d4b1af9ffb80b666ea51b6da9b793e2a68711ab3f383295142701300bdb9->enter($__internal_4435d4b1af9ffb80b666ea51b6da9b793e2a68711ab3f383295142701300bdb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_4435d4b1af9ffb80b666ea51b6da9b793e2a68711ab3f383295142701300bdb9->leave($__internal_4435d4b1af9ffb80b666ea51b6da9b793e2a68711ab3f383295142701300bdb9_prof);

        
        $__internal_a35e06d98a9bc67773a291fb654116f9e8158362fa2e545c43c0b787627ee9be->leave($__internal_a35e06d98a9bc67773a291fb654116f9e8158362fa2e545c43c0b787627ee9be_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_23e5f5b03267f0f25aa5d0131c7ef4576f82910929304469ca77bda1fdebf6e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23e5f5b03267f0f25aa5d0131c7ef4576f82910929304469ca77bda1fdebf6e7->enter($__internal_23e5f5b03267f0f25aa5d0131c7ef4576f82910929304469ca77bda1fdebf6e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2239a7731249f6ea333f737ad69026d1e2f27a70172b13f54c21c978a223202d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2239a7731249f6ea333f737ad69026d1e2f27a70172b13f54c21c978a223202d->enter($__internal_2239a7731249f6ea333f737ad69026d1e2f27a70172b13f54c21c978a223202d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_2239a7731249f6ea333f737ad69026d1e2f27a70172b13f54c21c978a223202d->leave($__internal_2239a7731249f6ea333f737ad69026d1e2f27a70172b13f54c21c978a223202d_prof);

        
        $__internal_23e5f5b03267f0f25aa5d0131c7ef4576f82910929304469ca77bda1fdebf6e7->leave($__internal_23e5f5b03267f0f25aa5d0131c7ef4576f82910929304469ca77bda1fdebf6e7_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_5758dac76b496adc88129e46afd9ab4e948a570cb4a82d351025e1361a010bc2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5758dac76b496adc88129e46afd9ab4e948a570cb4a82d351025e1361a010bc2->enter($__internal_5758dac76b496adc88129e46afd9ab4e948a570cb4a82d351025e1361a010bc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f1f4b729256f06a5e333b15900a4aaba1997b491566249be53aaf72f1712eb7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1f4b729256f06a5e333b15900a4aaba1997b491566249be53aaf72f1712eb7e->enter($__internal_f1f4b729256f06a5e333b15900a4aaba1997b491566249be53aaf72f1712eb7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_f1f4b729256f06a5e333b15900a4aaba1997b491566249be53aaf72f1712eb7e->leave($__internal_f1f4b729256f06a5e333b15900a4aaba1997b491566249be53aaf72f1712eb7e_prof);

        
        $__internal_5758dac76b496adc88129e46afd9ab4e948a570cb4a82d351025e1361a010bc2->leave($__internal_5758dac76b496adc88129e46afd9ab4e948a570cb4a82d351025e1361a010bc2_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
