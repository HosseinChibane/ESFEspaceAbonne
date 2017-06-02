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
        $__internal_aadaba0cb3bfdbc29b7b32679559be16cfdba0d5b3866db6179e8da5fe3c02ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aadaba0cb3bfdbc29b7b32679559be16cfdba0d5b3866db6179e8da5fe3c02ff->enter($__internal_aadaba0cb3bfdbc29b7b32679559be16cfdba0d5b3866db6179e8da5fe3c02ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_bc52d110ce5fbae0819655a02835baf2fad2f3c2a17ef5eba08113b2472f8077 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc52d110ce5fbae0819655a02835baf2fad2f3c2a17ef5eba08113b2472f8077->enter($__internal_bc52d110ce5fbae0819655a02835baf2fad2f3c2a17ef5eba08113b2472f8077_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aadaba0cb3bfdbc29b7b32679559be16cfdba0d5b3866db6179e8da5fe3c02ff->leave($__internal_aadaba0cb3bfdbc29b7b32679559be16cfdba0d5b3866db6179e8da5fe3c02ff_prof);

        
        $__internal_bc52d110ce5fbae0819655a02835baf2fad2f3c2a17ef5eba08113b2472f8077->leave($__internal_bc52d110ce5fbae0819655a02835baf2fad2f3c2a17ef5eba08113b2472f8077_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1174ee04d24686e40bab103c30b76517518b9c67b79b39411e0ab6ec498ab15c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1174ee04d24686e40bab103c30b76517518b9c67b79b39411e0ab6ec498ab15c->enter($__internal_1174ee04d24686e40bab103c30b76517518b9c67b79b39411e0ab6ec498ab15c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ba297fa277a78b2c623d62ac5d62673e227af498abdb37fd4307edfe84a6f44d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba297fa277a78b2c623d62ac5d62673e227af498abdb37fd4307edfe84a6f44d->enter($__internal_ba297fa277a78b2c623d62ac5d62673e227af498abdb37fd4307edfe84a6f44d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_ba297fa277a78b2c623d62ac5d62673e227af498abdb37fd4307edfe84a6f44d->leave($__internal_ba297fa277a78b2c623d62ac5d62673e227af498abdb37fd4307edfe84a6f44d_prof);

        
        $__internal_1174ee04d24686e40bab103c30b76517518b9c67b79b39411e0ab6ec498ab15c->leave($__internal_1174ee04d24686e40bab103c30b76517518b9c67b79b39411e0ab6ec498ab15c_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_f06ea66bca12208a99e09c70f3dfe318d6d08e3b6ac2f645730d4e1786b623ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f06ea66bca12208a99e09c70f3dfe318d6d08e3b6ac2f645730d4e1786b623ee->enter($__internal_f06ea66bca12208a99e09c70f3dfe318d6d08e3b6ac2f645730d4e1786b623ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_400aeef9e35d812a0d24228659dfdb0bcb53894edcb0a8cf85ca26a4046d3054 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_400aeef9e35d812a0d24228659dfdb0bcb53894edcb0a8cf85ca26a4046d3054->enter($__internal_400aeef9e35d812a0d24228659dfdb0bcb53894edcb0a8cf85ca26a4046d3054_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_400aeef9e35d812a0d24228659dfdb0bcb53894edcb0a8cf85ca26a4046d3054->leave($__internal_400aeef9e35d812a0d24228659dfdb0bcb53894edcb0a8cf85ca26a4046d3054_prof);

        
        $__internal_f06ea66bca12208a99e09c70f3dfe318d6d08e3b6ac2f645730d4e1786b623ee->leave($__internal_f06ea66bca12208a99e09c70f3dfe318d6d08e3b6ac2f645730d4e1786b623ee_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_639c56aee25af1c09f99bd9c784022ada98c6b2f5a97b0be4133d696890c39d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_639c56aee25af1c09f99bd9c784022ada98c6b2f5a97b0be4133d696890c39d0->enter($__internal_639c56aee25af1c09f99bd9c784022ada98c6b2f5a97b0be4133d696890c39d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6c2a49a7e4d0431f39a3b5c6e8ea8e37c52235e4924cfa4fcf5f5f83c47764a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c2a49a7e4d0431f39a3b5c6e8ea8e37c52235e4924cfa4fcf5f5f83c47764a9->enter($__internal_6c2a49a7e4d0431f39a3b5c6e8ea8e37c52235e4924cfa4fcf5f5f83c47764a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_6c2a49a7e4d0431f39a3b5c6e8ea8e37c52235e4924cfa4fcf5f5f83c47764a9->leave($__internal_6c2a49a7e4d0431f39a3b5c6e8ea8e37c52235e4924cfa4fcf5f5f83c47764a9_prof);

        
        $__internal_639c56aee25af1c09f99bd9c784022ada98c6b2f5a97b0be4133d696890c39d0->leave($__internal_639c56aee25af1c09f99bd9c784022ada98c6b2f5a97b0be4133d696890c39d0_prof);

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
