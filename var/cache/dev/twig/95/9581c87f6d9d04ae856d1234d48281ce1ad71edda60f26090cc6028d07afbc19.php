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
        $__internal_1b787ce61688a51b2e671b5c7a27fafc1ae7c229096d2d0c1ae4b4f3d290786e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b787ce61688a51b2e671b5c7a27fafc1ae7c229096d2d0c1ae4b4f3d290786e->enter($__internal_1b787ce61688a51b2e671b5c7a27fafc1ae7c229096d2d0c1ae4b4f3d290786e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_c3a6f3f035bb34bb463a7c4d5b01cc631ddd4891381556cb0ab4757f5bf0ae78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3a6f3f035bb34bb463a7c4d5b01cc631ddd4891381556cb0ab4757f5bf0ae78->enter($__internal_c3a6f3f035bb34bb463a7c4d5b01cc631ddd4891381556cb0ab4757f5bf0ae78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1b787ce61688a51b2e671b5c7a27fafc1ae7c229096d2d0c1ae4b4f3d290786e->leave($__internal_1b787ce61688a51b2e671b5c7a27fafc1ae7c229096d2d0c1ae4b4f3d290786e_prof);

        
        $__internal_c3a6f3f035bb34bb463a7c4d5b01cc631ddd4891381556cb0ab4757f5bf0ae78->leave($__internal_c3a6f3f035bb34bb463a7c4d5b01cc631ddd4891381556cb0ab4757f5bf0ae78_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_714539454b52f531e6560c873b8418ecc6faf7a542f54e7dafa546a8fbaa0745 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_714539454b52f531e6560c873b8418ecc6faf7a542f54e7dafa546a8fbaa0745->enter($__internal_714539454b52f531e6560c873b8418ecc6faf7a542f54e7dafa546a8fbaa0745_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_3559b2ea4d95e6e26871e75e4b000b7c90c15e8e5cc387000a56a5f36f99e1ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3559b2ea4d95e6e26871e75e4b000b7c90c15e8e5cc387000a56a5f36f99e1ed->enter($__internal_3559b2ea4d95e6e26871e75e4b000b7c90c15e8e5cc387000a56a5f36f99e1ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_3559b2ea4d95e6e26871e75e4b000b7c90c15e8e5cc387000a56a5f36f99e1ed->leave($__internal_3559b2ea4d95e6e26871e75e4b000b7c90c15e8e5cc387000a56a5f36f99e1ed_prof);

        
        $__internal_714539454b52f531e6560c873b8418ecc6faf7a542f54e7dafa546a8fbaa0745->leave($__internal_714539454b52f531e6560c873b8418ecc6faf7a542f54e7dafa546a8fbaa0745_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_b802a23fe298ae09b0fc102a7a23b405f5ad9df75151d1f4c364cf504076a371 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b802a23fe298ae09b0fc102a7a23b405f5ad9df75151d1f4c364cf504076a371->enter($__internal_b802a23fe298ae09b0fc102a7a23b405f5ad9df75151d1f4c364cf504076a371_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7c0c0200d210d2b91a7a4964558ac854b3dfea500dbb3d6eced4131130316a71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c0c0200d210d2b91a7a4964558ac854b3dfea500dbb3d6eced4131130316a71->enter($__internal_7c0c0200d210d2b91a7a4964558ac854b3dfea500dbb3d6eced4131130316a71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_7c0c0200d210d2b91a7a4964558ac854b3dfea500dbb3d6eced4131130316a71->leave($__internal_7c0c0200d210d2b91a7a4964558ac854b3dfea500dbb3d6eced4131130316a71_prof);

        
        $__internal_b802a23fe298ae09b0fc102a7a23b405f5ad9df75151d1f4c364cf504076a371->leave($__internal_b802a23fe298ae09b0fc102a7a23b405f5ad9df75151d1f4c364cf504076a371_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_fb55e98aecb6f86847c5f75c67f1f6c0aec9df62c2e0f82a8335f7f64fa524ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb55e98aecb6f86847c5f75c67f1f6c0aec9df62c2e0f82a8335f7f64fa524ad->enter($__internal_fb55e98aecb6f86847c5f75c67f1f6c0aec9df62c2e0f82a8335f7f64fa524ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c75b0f41f08d31e7dd132f763b675ebba9459fa6fea1a8a249c24ebc16bb4d55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c75b0f41f08d31e7dd132f763b675ebba9459fa6fea1a8a249c24ebc16bb4d55->enter($__internal_c75b0f41f08d31e7dd132f763b675ebba9459fa6fea1a8a249c24ebc16bb4d55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_c75b0f41f08d31e7dd132f763b675ebba9459fa6fea1a8a249c24ebc16bb4d55->leave($__internal_c75b0f41f08d31e7dd132f763b675ebba9459fa6fea1a8a249c24ebc16bb4d55_prof);

        
        $__internal_fb55e98aecb6f86847c5f75c67f1f6c0aec9df62c2e0f82a8335f7f64fa524ad->leave($__internal_fb55e98aecb6f86847c5f75c67f1f6c0aec9df62c2e0f82a8335f7f64fa524ad_prof);

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
