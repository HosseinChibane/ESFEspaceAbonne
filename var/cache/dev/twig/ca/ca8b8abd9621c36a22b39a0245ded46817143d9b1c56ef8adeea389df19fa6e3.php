<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_82933e0b80ab99602c44e529befc5ce14a47a1553919ad097e3f50896c1d972a extends Twig_Template
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
        $__internal_1d0c1dd8473bc0ffe35228092bc51ed267a4d839e27ba3e2d56cd1d01e3dee89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d0c1dd8473bc0ffe35228092bc51ed267a4d839e27ba3e2d56cd1d01e3dee89->enter($__internal_1d0c1dd8473bc0ffe35228092bc51ed267a4d839e27ba3e2d56cd1d01e3dee89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_8d2484eac96362642140e7f5e8c9af60e9630d3418ad8bf5b10d7648b3f65c2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d2484eac96362642140e7f5e8c9af60e9630d3418ad8bf5b10d7648b3f65c2d->enter($__internal_8d2484eac96362642140e7f5e8c9af60e9630d3418ad8bf5b10d7648b3f65c2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1d0c1dd8473bc0ffe35228092bc51ed267a4d839e27ba3e2d56cd1d01e3dee89->leave($__internal_1d0c1dd8473bc0ffe35228092bc51ed267a4d839e27ba3e2d56cd1d01e3dee89_prof);

        
        $__internal_8d2484eac96362642140e7f5e8c9af60e9630d3418ad8bf5b10d7648b3f65c2d->leave($__internal_8d2484eac96362642140e7f5e8c9af60e9630d3418ad8bf5b10d7648b3f65c2d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_af86e1c5414e4e4cf981a215e0a1c755a3f336fc1f5c29b1f1086dc223c6f7ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af86e1c5414e4e4cf981a215e0a1c755a3f336fc1f5c29b1f1086dc223c6f7ed->enter($__internal_af86e1c5414e4e4cf981a215e0a1c755a3f336fc1f5c29b1f1086dc223c6f7ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e145bf6193b0daa232981526e3ee827802f57eb4ba7cafb94c97849951b2c55b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e145bf6193b0daa232981526e3ee827802f57eb4ba7cafb94c97849951b2c55b->enter($__internal_e145bf6193b0daa232981526e3ee827802f57eb4ba7cafb94c97849951b2c55b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_e145bf6193b0daa232981526e3ee827802f57eb4ba7cafb94c97849951b2c55b->leave($__internal_e145bf6193b0daa232981526e3ee827802f57eb4ba7cafb94c97849951b2c55b_prof);

        
        $__internal_af86e1c5414e4e4cf981a215e0a1c755a3f336fc1f5c29b1f1086dc223c6f7ed->leave($__internal_af86e1c5414e4e4cf981a215e0a1c755a3f336fc1f5c29b1f1086dc223c6f7ed_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_352d42bd14d6e89f40113f3dd2aada66281c88c2ca4c28e02fd086bc86942c24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_352d42bd14d6e89f40113f3dd2aada66281c88c2ca4c28e02fd086bc86942c24->enter($__internal_352d42bd14d6e89f40113f3dd2aada66281c88c2ca4c28e02fd086bc86942c24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9a6d0635c8ff0cf3ed717223a6017ccdce28d3b2817a0db7c80c577334df0e90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a6d0635c8ff0cf3ed717223a6017ccdce28d3b2817a0db7c80c577334df0e90->enter($__internal_9a6d0635c8ff0cf3ed717223a6017ccdce28d3b2817a0db7c80c577334df0e90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_9a6d0635c8ff0cf3ed717223a6017ccdce28d3b2817a0db7c80c577334df0e90->leave($__internal_9a6d0635c8ff0cf3ed717223a6017ccdce28d3b2817a0db7c80c577334df0e90_prof);

        
        $__internal_352d42bd14d6e89f40113f3dd2aada66281c88c2ca4c28e02fd086bc86942c24->leave($__internal_352d42bd14d6e89f40113f3dd2aada66281c88c2ca4c28e02fd086bc86942c24_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_0e4fb1f8faae22d8c8bdda9089c3d703790a7d9d2d303061ab9b6c766ad1da5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e4fb1f8faae22d8c8bdda9089c3d703790a7d9d2d303061ab9b6c766ad1da5a->enter($__internal_0e4fb1f8faae22d8c8bdda9089c3d703790a7d9d2d303061ab9b6c766ad1da5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7ca8271181c708b6ab49b71aa34958d99aa7f3b8b77f3787a927c81397922aef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ca8271181c708b6ab49b71aa34958d99aa7f3b8b77f3787a927c81397922aef->enter($__internal_7ca8271181c708b6ab49b71aa34958d99aa7f3b8b77f3787a927c81397922aef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_7ca8271181c708b6ab49b71aa34958d99aa7f3b8b77f3787a927c81397922aef->leave($__internal_7ca8271181c708b6ab49b71aa34958d99aa7f3b8b77f3787a927c81397922aef_prof);

        
        $__internal_0e4fb1f8faae22d8c8bdda9089c3d703790a7d9d2d303061ab9b6c766ad1da5a->leave($__internal_0e4fb1f8faae22d8c8bdda9089c3d703790a7d9d2d303061ab9b6c766ad1da5a_prof);

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
