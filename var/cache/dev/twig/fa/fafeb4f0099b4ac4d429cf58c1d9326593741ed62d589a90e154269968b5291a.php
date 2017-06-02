<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_ef6e3f6ad234795a911cb673f7a5a253670c1bdc25b6d95f7a01dd043b56dd46 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_682627a9d32dce38f4039e80851194ca5e10f06bb7044c50a44633359ddbd880 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_682627a9d32dce38f4039e80851194ca5e10f06bb7044c50a44633359ddbd880->enter($__internal_682627a9d32dce38f4039e80851194ca5e10f06bb7044c50a44633359ddbd880_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        $__internal_e727ea7f5b2b11a4ce7ad44c97965e5c4b8bf785a3c0be747e6146e45fe67196 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e727ea7f5b2b11a4ce7ad44c97965e5c4b8bf785a3c0be747e6146e45fe67196->enter($__internal_e727ea7f5b2b11a4ce7ad44c97965e5c4b8bf785a3c0be747e6146e45fe67196_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_682627a9d32dce38f4039e80851194ca5e10f06bb7044c50a44633359ddbd880->leave($__internal_682627a9d32dce38f4039e80851194ca5e10f06bb7044c50a44633359ddbd880_prof);

        
        $__internal_e727ea7f5b2b11a4ce7ad44c97965e5c4b8bf785a3c0be747e6146e45fe67196->leave($__internal_e727ea7f5b2b11a4ce7ad44c97965e5c4b8bf785a3c0be747e6146e45fe67196_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_ddc0ae7318a03d3c5ec906721843bf05bfb81890552ef167dd9ba577a2e4bc40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ddc0ae7318a03d3c5ec906721843bf05bfb81890552ef167dd9ba577a2e4bc40->enter($__internal_ddc0ae7318a03d3c5ec906721843bf05bfb81890552ef167dd9ba577a2e4bc40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_ec0a2fdccc5464360853599b5f4d0d8798bdb03d540f3e82de78a8d1f984f927 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec0a2fdccc5464360853599b5f4d0d8798bdb03d540f3e82de78a8d1f984f927->enter($__internal_ec0a2fdccc5464360853599b5f4d0d8798bdb03d540f3e82de78a8d1f984f927_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_ec0a2fdccc5464360853599b5f4d0d8798bdb03d540f3e82de78a8d1f984f927->leave($__internal_ec0a2fdccc5464360853599b5f4d0d8798bdb03d540f3e82de78a8d1f984f927_prof);

        
        $__internal_ddc0ae7318a03d3c5ec906721843bf05bfb81890552ef167dd9ba577a2e4bc40->leave($__internal_ddc0ae7318a03d3c5ec906721843bf05bfb81890552ef167dd9ba577a2e4bc40_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_edbcce9fbfe693944872661d8ee2bbe1f20ecb749bc574f7e9dda7a2b2ce0b01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_edbcce9fbfe693944872661d8ee2bbe1f20ecb749bc574f7e9dda7a2b2ce0b01->enter($__internal_edbcce9fbfe693944872661d8ee2bbe1f20ecb749bc574f7e9dda7a2b2ce0b01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_9fa2e08957567584085742f9d82fcae2411473cbe34161ae7ab849733fa5e1f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fa2e08957567584085742f9d82fcae2411473cbe34161ae7ab849733fa5e1f9->enter($__internal_9fa2e08957567584085742f9d82fcae2411473cbe34161ae7ab849733fa5e1f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_9fa2e08957567584085742f9d82fcae2411473cbe34161ae7ab849733fa5e1f9->leave($__internal_9fa2e08957567584085742f9d82fcae2411473cbe34161ae7ab849733fa5e1f9_prof);

        
        $__internal_edbcce9fbfe693944872661d8ee2bbe1f20ecb749bc574f7e9dda7a2b2ce0b01->leave($__internal_edbcce9fbfe693944872661d8ee2bbe1f20ecb749bc574f7e9dda7a2b2ce0b01_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_eea9a89bd20b8220a87f9c0072164d429d03eb489338c75cdc64fb16026f04c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eea9a89bd20b8220a87f9c0072164d429d03eb489338c75cdc64fb16026f04c5->enter($__internal_eea9a89bd20b8220a87f9c0072164d429d03eb489338c75cdc64fb16026f04c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_d2497706d9f9aac0f47eb10e416498fe630dde8fbbc6f5da37503c83c20e8b93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2497706d9f9aac0f47eb10e416498fe630dde8fbbc6f5da37503c83c20e8b93->enter($__internal_d2497706d9f9aac0f47eb10e416498fe630dde8fbbc6f5da37503c83c20e8b93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_d2497706d9f9aac0f47eb10e416498fe630dde8fbbc6f5da37503c83c20e8b93->leave($__internal_d2497706d9f9aac0f47eb10e416498fe630dde8fbbc6f5da37503c83c20e8b93_prof);

        
        $__internal_eea9a89bd20b8220a87f9c0072164d429d03eb489338c75cdc64fb16026f04c5->leave($__internal_eea9a89bd20b8220a87f9c0072164d429d03eb489338c75cdc64fb16026f04c5_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  85 => 13,  73 => 10,  64 => 8,  54 => 4,  45 => 2,  35 => 13,  33 => 8,  30 => 7,  28 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{%- autoescape false -%}
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "@FOSUser/Registration/email.txt.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\app\\Resources\\FOSUserBundle\\views\\Registration\\email.txt.twig");
    }
}
