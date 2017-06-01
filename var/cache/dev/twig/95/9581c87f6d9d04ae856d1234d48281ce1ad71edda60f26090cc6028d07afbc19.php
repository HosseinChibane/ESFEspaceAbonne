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
        $__internal_becff61c937f9b5fdb120fc22f716c328623f1f6404a5f4e7903529d36f65867 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_becff61c937f9b5fdb120fc22f716c328623f1f6404a5f4e7903529d36f65867->enter($__internal_becff61c937f9b5fdb120fc22f716c328623f1f6404a5f4e7903529d36f65867_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_53ac37dc53e2df1d85c50f8f2edc9dc440baa4f06f91a91e473e9e1f96b01b49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53ac37dc53e2df1d85c50f8f2edc9dc440baa4f06f91a91e473e9e1f96b01b49->enter($__internal_53ac37dc53e2df1d85c50f8f2edc9dc440baa4f06f91a91e473e9e1f96b01b49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_becff61c937f9b5fdb120fc22f716c328623f1f6404a5f4e7903529d36f65867->leave($__internal_becff61c937f9b5fdb120fc22f716c328623f1f6404a5f4e7903529d36f65867_prof);

        
        $__internal_53ac37dc53e2df1d85c50f8f2edc9dc440baa4f06f91a91e473e9e1f96b01b49->leave($__internal_53ac37dc53e2df1d85c50f8f2edc9dc440baa4f06f91a91e473e9e1f96b01b49_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_457106d2cb977a604e52e269e22af1ecf803b33eaa7702b3e47f9d4ec60d1b2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_457106d2cb977a604e52e269e22af1ecf803b33eaa7702b3e47f9d4ec60d1b2c->enter($__internal_457106d2cb977a604e52e269e22af1ecf803b33eaa7702b3e47f9d4ec60d1b2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_1955a25d29c983c4c85e02e3655e6299c9160900bc03b4f3474662704f062ffb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1955a25d29c983c4c85e02e3655e6299c9160900bc03b4f3474662704f062ffb->enter($__internal_1955a25d29c983c4c85e02e3655e6299c9160900bc03b4f3474662704f062ffb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_1955a25d29c983c4c85e02e3655e6299c9160900bc03b4f3474662704f062ffb->leave($__internal_1955a25d29c983c4c85e02e3655e6299c9160900bc03b4f3474662704f062ffb_prof);

        
        $__internal_457106d2cb977a604e52e269e22af1ecf803b33eaa7702b3e47f9d4ec60d1b2c->leave($__internal_457106d2cb977a604e52e269e22af1ecf803b33eaa7702b3e47f9d4ec60d1b2c_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_c771794a692db54a5ca75e3b563178d41c0c0c2ae801e286769119de03dcb6bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c771794a692db54a5ca75e3b563178d41c0c0c2ae801e286769119de03dcb6bb->enter($__internal_c771794a692db54a5ca75e3b563178d41c0c0c2ae801e286769119de03dcb6bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e8a821d73d76095f103240ac5cda890b5b31ae2c722864f46deba41779ea3c23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8a821d73d76095f103240ac5cda890b5b31ae2c722864f46deba41779ea3c23->enter($__internal_e8a821d73d76095f103240ac5cda890b5b31ae2c722864f46deba41779ea3c23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_e8a821d73d76095f103240ac5cda890b5b31ae2c722864f46deba41779ea3c23->leave($__internal_e8a821d73d76095f103240ac5cda890b5b31ae2c722864f46deba41779ea3c23_prof);

        
        $__internal_c771794a692db54a5ca75e3b563178d41c0c0c2ae801e286769119de03dcb6bb->leave($__internal_c771794a692db54a5ca75e3b563178d41c0c0c2ae801e286769119de03dcb6bb_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_75a14709c8950fd854e221c19a181df782025e69db5a5d3a3b7c323a014d7595 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75a14709c8950fd854e221c19a181df782025e69db5a5d3a3b7c323a014d7595->enter($__internal_75a14709c8950fd854e221c19a181df782025e69db5a5d3a3b7c323a014d7595_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7d06305101b1ce2ae79cc15c603ee7d5f8cfcc8f6e32adc48684de98539a7bd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d06305101b1ce2ae79cc15c603ee7d5f8cfcc8f6e32adc48684de98539a7bd7->enter($__internal_7d06305101b1ce2ae79cc15c603ee7d5f8cfcc8f6e32adc48684de98539a7bd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_7d06305101b1ce2ae79cc15c603ee7d5f8cfcc8f6e32adc48684de98539a7bd7->leave($__internal_7d06305101b1ce2ae79cc15c603ee7d5f8cfcc8f6e32adc48684de98539a7bd7_prof);

        
        $__internal_75a14709c8950fd854e221c19a181df782025e69db5a5d3a3b7c323a014d7595->leave($__internal_75a14709c8950fd854e221c19a181df782025e69db5a5d3a3b7c323a014d7595_prof);

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
