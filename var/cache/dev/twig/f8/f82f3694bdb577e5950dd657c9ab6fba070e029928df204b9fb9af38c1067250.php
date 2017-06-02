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
        $__internal_373c27e202b5173c94cf6e1e86553d325a5f52c0078d6e9b9b481c35a5afd44c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_373c27e202b5173c94cf6e1e86553d325a5f52c0078d6e9b9b481c35a5afd44c->enter($__internal_373c27e202b5173c94cf6e1e86553d325a5f52c0078d6e9b9b481c35a5afd44c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_bcb41661b7a0457263e25180a76723e422e9c23a45a0448eb8bbf8d9a2e044c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcb41661b7a0457263e25180a76723e422e9c23a45a0448eb8bbf8d9a2e044c2->enter($__internal_bcb41661b7a0457263e25180a76723e422e9c23a45a0448eb8bbf8d9a2e044c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_373c27e202b5173c94cf6e1e86553d325a5f52c0078d6e9b9b481c35a5afd44c->leave($__internal_373c27e202b5173c94cf6e1e86553d325a5f52c0078d6e9b9b481c35a5afd44c_prof);

        
        $__internal_bcb41661b7a0457263e25180a76723e422e9c23a45a0448eb8bbf8d9a2e044c2->leave($__internal_bcb41661b7a0457263e25180a76723e422e9c23a45a0448eb8bbf8d9a2e044c2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0de1cb07967a2c5b43333accb58c33cc4d1f07812cbb1b53adf9b5027ccbc076 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0de1cb07967a2c5b43333accb58c33cc4d1f07812cbb1b53adf9b5027ccbc076->enter($__internal_0de1cb07967a2c5b43333accb58c33cc4d1f07812cbb1b53adf9b5027ccbc076_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_8d5499def36f9ed43e657ee223cd6bcdb266525880312eea718714abae539ac8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d5499def36f9ed43e657ee223cd6bcdb266525880312eea718714abae539ac8->enter($__internal_8d5499def36f9ed43e657ee223cd6bcdb266525880312eea718714abae539ac8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_8d5499def36f9ed43e657ee223cd6bcdb266525880312eea718714abae539ac8->leave($__internal_8d5499def36f9ed43e657ee223cd6bcdb266525880312eea718714abae539ac8_prof);

        
        $__internal_0de1cb07967a2c5b43333accb58c33cc4d1f07812cbb1b53adf9b5027ccbc076->leave($__internal_0de1cb07967a2c5b43333accb58c33cc4d1f07812cbb1b53adf9b5027ccbc076_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_1a1a6e31088bb71e60eea1b9c9e568028e0ebedf4e2756104b878d604a77dd70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a1a6e31088bb71e60eea1b9c9e568028e0ebedf4e2756104b878d604a77dd70->enter($__internal_1a1a6e31088bb71e60eea1b9c9e568028e0ebedf4e2756104b878d604a77dd70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_87ede86887ded354321942346421ab5f6fb35c9abc944f66707d2f7d58ee5d74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87ede86887ded354321942346421ab5f6fb35c9abc944f66707d2f7d58ee5d74->enter($__internal_87ede86887ded354321942346421ab5f6fb35c9abc944f66707d2f7d58ee5d74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_87ede86887ded354321942346421ab5f6fb35c9abc944f66707d2f7d58ee5d74->leave($__internal_87ede86887ded354321942346421ab5f6fb35c9abc944f66707d2f7d58ee5d74_prof);

        
        $__internal_1a1a6e31088bb71e60eea1b9c9e568028e0ebedf4e2756104b878d604a77dd70->leave($__internal_1a1a6e31088bb71e60eea1b9c9e568028e0ebedf4e2756104b878d604a77dd70_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_d2fac2cf419ccc016f75454eaf90b5a1fe45b70dd822c629440766898f9ab108 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2fac2cf419ccc016f75454eaf90b5a1fe45b70dd822c629440766898f9ab108->enter($__internal_d2fac2cf419ccc016f75454eaf90b5a1fe45b70dd822c629440766898f9ab108_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0b5db6c5e20c07d9a5aaea4b7fae6d2915d655f83f826c19f7661031902cd4e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b5db6c5e20c07d9a5aaea4b7fae6d2915d655f83f826c19f7661031902cd4e3->enter($__internal_0b5db6c5e20c07d9a5aaea4b7fae6d2915d655f83f826c19f7661031902cd4e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_0b5db6c5e20c07d9a5aaea4b7fae6d2915d655f83f826c19f7661031902cd4e3->leave($__internal_0b5db6c5e20c07d9a5aaea4b7fae6d2915d655f83f826c19f7661031902cd4e3_prof);

        
        $__internal_d2fac2cf419ccc016f75454eaf90b5a1fe45b70dd822c629440766898f9ab108->leave($__internal_d2fac2cf419ccc016f75454eaf90b5a1fe45b70dd822c629440766898f9ab108_prof);

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
