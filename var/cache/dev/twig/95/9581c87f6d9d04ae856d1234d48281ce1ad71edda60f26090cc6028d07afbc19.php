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
        $__internal_7aeb761b2f12fd36baa0c402b344b6cec2c9fa4582b99754a184dc038969557e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7aeb761b2f12fd36baa0c402b344b6cec2c9fa4582b99754a184dc038969557e->enter($__internal_7aeb761b2f12fd36baa0c402b344b6cec2c9fa4582b99754a184dc038969557e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_dd941a77ddab24050a59608528fffd7dfd7c3c539aee00e2077e7a44f4058832 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd941a77ddab24050a59608528fffd7dfd7c3c539aee00e2077e7a44f4058832->enter($__internal_dd941a77ddab24050a59608528fffd7dfd7c3c539aee00e2077e7a44f4058832_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7aeb761b2f12fd36baa0c402b344b6cec2c9fa4582b99754a184dc038969557e->leave($__internal_7aeb761b2f12fd36baa0c402b344b6cec2c9fa4582b99754a184dc038969557e_prof);

        
        $__internal_dd941a77ddab24050a59608528fffd7dfd7c3c539aee00e2077e7a44f4058832->leave($__internal_dd941a77ddab24050a59608528fffd7dfd7c3c539aee00e2077e7a44f4058832_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9db64e1a8e378cee44f517a4ecd716d8f75840c356e02b0f2274d0bbba0bad86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9db64e1a8e378cee44f517a4ecd716d8f75840c356e02b0f2274d0bbba0bad86->enter($__internal_9db64e1a8e378cee44f517a4ecd716d8f75840c356e02b0f2274d0bbba0bad86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_3567a77cf1a860867b6626647691d866b61de15289bf49a326ec08d6469b6f10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3567a77cf1a860867b6626647691d866b61de15289bf49a326ec08d6469b6f10->enter($__internal_3567a77cf1a860867b6626647691d866b61de15289bf49a326ec08d6469b6f10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_3567a77cf1a860867b6626647691d866b61de15289bf49a326ec08d6469b6f10->leave($__internal_3567a77cf1a860867b6626647691d866b61de15289bf49a326ec08d6469b6f10_prof);

        
        $__internal_9db64e1a8e378cee44f517a4ecd716d8f75840c356e02b0f2274d0bbba0bad86->leave($__internal_9db64e1a8e378cee44f517a4ecd716d8f75840c356e02b0f2274d0bbba0bad86_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_9c5955b8cc70b3be8e3911018caf0ff0ae667debc2465420e55cc410b5f79850 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c5955b8cc70b3be8e3911018caf0ff0ae667debc2465420e55cc410b5f79850->enter($__internal_9c5955b8cc70b3be8e3911018caf0ff0ae667debc2465420e55cc410b5f79850_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_46837f680c21f0fa3033eadc8c5facaef8918aa5dd039042af56da11ae38714b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46837f680c21f0fa3033eadc8c5facaef8918aa5dd039042af56da11ae38714b->enter($__internal_46837f680c21f0fa3033eadc8c5facaef8918aa5dd039042af56da11ae38714b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_46837f680c21f0fa3033eadc8c5facaef8918aa5dd039042af56da11ae38714b->leave($__internal_46837f680c21f0fa3033eadc8c5facaef8918aa5dd039042af56da11ae38714b_prof);

        
        $__internal_9c5955b8cc70b3be8e3911018caf0ff0ae667debc2465420e55cc410b5f79850->leave($__internal_9c5955b8cc70b3be8e3911018caf0ff0ae667debc2465420e55cc410b5f79850_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_e97f440c1bd60dca0dd7bba8e0bbac74841fef5dcdaebe7e4a52a03460288af6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e97f440c1bd60dca0dd7bba8e0bbac74841fef5dcdaebe7e4a52a03460288af6->enter($__internal_e97f440c1bd60dca0dd7bba8e0bbac74841fef5dcdaebe7e4a52a03460288af6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9199c6ebca34ec9abcd38d30915ea52010b6c5bfdb89b6f0a1f9eae24d7de2ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9199c6ebca34ec9abcd38d30915ea52010b6c5bfdb89b6f0a1f9eae24d7de2ca->enter($__internal_9199c6ebca34ec9abcd38d30915ea52010b6c5bfdb89b6f0a1f9eae24d7de2ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_9199c6ebca34ec9abcd38d30915ea52010b6c5bfdb89b6f0a1f9eae24d7de2ca->leave($__internal_9199c6ebca34ec9abcd38d30915ea52010b6c5bfdb89b6f0a1f9eae24d7de2ca_prof);

        
        $__internal_e97f440c1bd60dca0dd7bba8e0bbac74841fef5dcdaebe7e4a52a03460288af6->leave($__internal_e97f440c1bd60dca0dd7bba8e0bbac74841fef5dcdaebe7e4a52a03460288af6_prof);

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
