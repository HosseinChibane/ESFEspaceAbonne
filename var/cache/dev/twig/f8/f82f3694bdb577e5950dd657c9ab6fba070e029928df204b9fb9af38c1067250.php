<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_ce66923b45adebe77b658ff3975b7e42c8f052b690d795ca179024c3110752df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_68a8cb91f13e23deafea62a8476c04a54fbff37a3fb2ffe290e69aece9ff13f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68a8cb91f13e23deafea62a8476c04a54fbff37a3fb2ffe290e69aece9ff13f0->enter($__internal_68a8cb91f13e23deafea62a8476c04a54fbff37a3fb2ffe290e69aece9ff13f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_6ce28c88f148962bd825f27b28139b0471bfe29e99ca7b83d8a5e47ddb4d1209 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ce28c88f148962bd825f27b28139b0471bfe29e99ca7b83d8a5e47ddb4d1209->enter($__internal_6ce28c88f148962bd825f27b28139b0471bfe29e99ca7b83d8a5e47ddb4d1209_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_68a8cb91f13e23deafea62a8476c04a54fbff37a3fb2ffe290e69aece9ff13f0->leave($__internal_68a8cb91f13e23deafea62a8476c04a54fbff37a3fb2ffe290e69aece9ff13f0_prof);

        
        $__internal_6ce28c88f148962bd825f27b28139b0471bfe29e99ca7b83d8a5e47ddb4d1209->leave($__internal_6ce28c88f148962bd825f27b28139b0471bfe29e99ca7b83d8a5e47ddb4d1209_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8e0967131121c70375efd39628939d48bfa10c0b5081a2345ab3fdcd1355206e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e0967131121c70375efd39628939d48bfa10c0b5081a2345ab3fdcd1355206e->enter($__internal_8e0967131121c70375efd39628939d48bfa10c0b5081a2345ab3fdcd1355206e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a94b48a80aace27ef100c450598c473c490bc5efe26d61bc43bdc702af9b0167 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a94b48a80aace27ef100c450598c473c490bc5efe26d61bc43bdc702af9b0167->enter($__internal_a94b48a80aace27ef100c450598c473c490bc5efe26d61bc43bdc702af9b0167_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_a94b48a80aace27ef100c450598c473c490bc5efe26d61bc43bdc702af9b0167->leave($__internal_a94b48a80aace27ef100c450598c473c490bc5efe26d61bc43bdc702af9b0167_prof);

        
        $__internal_8e0967131121c70375efd39628939d48bfa10c0b5081a2345ab3fdcd1355206e->leave($__internal_8e0967131121c70375efd39628939d48bfa10c0b5081a2345ab3fdcd1355206e_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_8283b02ff06a6a45cea2f85888397568c13716f58775a8bbb2ae3dc6387a5c48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8283b02ff06a6a45cea2f85888397568c13716f58775a8bbb2ae3dc6387a5c48->enter($__internal_8283b02ff06a6a45cea2f85888397568c13716f58775a8bbb2ae3dc6387a5c48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ace791d98cfefcb2b3c6c62bc85ccd381547aeb2419b2d3aa505bb3490afa041 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ace791d98cfefcb2b3c6c62bc85ccd381547aeb2419b2d3aa505bb3490afa041->enter($__internal_ace791d98cfefcb2b3c6c62bc85ccd381547aeb2419b2d3aa505bb3490afa041_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_ace791d98cfefcb2b3c6c62bc85ccd381547aeb2419b2d3aa505bb3490afa041->leave($__internal_ace791d98cfefcb2b3c6c62bc85ccd381547aeb2419b2d3aa505bb3490afa041_prof);

        
        $__internal_8283b02ff06a6a45cea2f85888397568c13716f58775a8bbb2ae3dc6387a5c48->leave($__internal_8283b02ff06a6a45cea2f85888397568c13716f58775a8bbb2ae3dc6387a5c48_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_43c2c7882735a3a8944ddc7c157f6522b1cb7062829f6113691fba9f2d6461c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43c2c7882735a3a8944ddc7c157f6522b1cb7062829f6113691fba9f2d6461c3->enter($__internal_43c2c7882735a3a8944ddc7c157f6522b1cb7062829f6113691fba9f2d6461c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_33f4d74f6380913c377a1a16cf0b0cc19194c165fe674c84befa153fb9121202 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33f4d74f6380913c377a1a16cf0b0cc19194c165fe674c84befa153fb9121202->enter($__internal_33f4d74f6380913c377a1a16cf0b0cc19194c165fe674c84befa153fb9121202_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_33f4d74f6380913c377a1a16cf0b0cc19194c165fe674c84befa153fb9121202->leave($__internal_33f4d74f6380913c377a1a16cf0b0cc19194c165fe674c84befa153fb9121202_prof);

        
        $__internal_43c2c7882735a3a8944ddc7c157f6522b1cb7062829f6113691fba9f2d6461c3->leave($__internal_43c2c7882735a3a8944ddc7c157f6522b1cb7062829f6113691fba9f2d6461c3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
", "TwigBundle:Exception:exception_full.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
