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
        $__internal_0eca2ca252665826f78ea2bde7ccc5dc2e5b79ef1a7a3a87a7c0cf1442509b8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0eca2ca252665826f78ea2bde7ccc5dc2e5b79ef1a7a3a87a7c0cf1442509b8c->enter($__internal_0eca2ca252665826f78ea2bde7ccc5dc2e5b79ef1a7a3a87a7c0cf1442509b8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        $__internal_cffac7d05b199fda214d153a883414a082ea6712863c73e60eeecf260586af30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cffac7d05b199fda214d153a883414a082ea6712863c73e60eeecf260586af30->enter($__internal_cffac7d05b199fda214d153a883414a082ea6712863c73e60eeecf260586af30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_0eca2ca252665826f78ea2bde7ccc5dc2e5b79ef1a7a3a87a7c0cf1442509b8c->leave($__internal_0eca2ca252665826f78ea2bde7ccc5dc2e5b79ef1a7a3a87a7c0cf1442509b8c_prof);

        
        $__internal_cffac7d05b199fda214d153a883414a082ea6712863c73e60eeecf260586af30->leave($__internal_cffac7d05b199fda214d153a883414a082ea6712863c73e60eeecf260586af30_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_3b374de6c02be4e81188a13a37c90997bb42408b05bfcc5ad332d7f5c577dba9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b374de6c02be4e81188a13a37c90997bb42408b05bfcc5ad332d7f5c577dba9->enter($__internal_3b374de6c02be4e81188a13a37c90997bb42408b05bfcc5ad332d7f5c577dba9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_bff6576010d15fee58f88b6fe07d2cc02899418474652dd7c61a7c3d9cf2fd68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bff6576010d15fee58f88b6fe07d2cc02899418474652dd7c61a7c3d9cf2fd68->enter($__internal_bff6576010d15fee58f88b6fe07d2cc02899418474652dd7c61a7c3d9cf2fd68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_bff6576010d15fee58f88b6fe07d2cc02899418474652dd7c61a7c3d9cf2fd68->leave($__internal_bff6576010d15fee58f88b6fe07d2cc02899418474652dd7c61a7c3d9cf2fd68_prof);

        
        $__internal_3b374de6c02be4e81188a13a37c90997bb42408b05bfcc5ad332d7f5c577dba9->leave($__internal_3b374de6c02be4e81188a13a37c90997bb42408b05bfcc5ad332d7f5c577dba9_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_17ba3e5c24dbf6bf48ed2c2f62c68f8785d65c68df3565254d9e91741ed62dec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17ba3e5c24dbf6bf48ed2c2f62c68f8785d65c68df3565254d9e91741ed62dec->enter($__internal_17ba3e5c24dbf6bf48ed2c2f62c68f8785d65c68df3565254d9e91741ed62dec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_82742d468e1b5ae7cd122e43a992da639eec7101f6193d31bde4f62ef044d818 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82742d468e1b5ae7cd122e43a992da639eec7101f6193d31bde4f62ef044d818->enter($__internal_82742d468e1b5ae7cd122e43a992da639eec7101f6193d31bde4f62ef044d818_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_82742d468e1b5ae7cd122e43a992da639eec7101f6193d31bde4f62ef044d818->leave($__internal_82742d468e1b5ae7cd122e43a992da639eec7101f6193d31bde4f62ef044d818_prof);

        
        $__internal_17ba3e5c24dbf6bf48ed2c2f62c68f8785d65c68df3565254d9e91741ed62dec->leave($__internal_17ba3e5c24dbf6bf48ed2c2f62c68f8785d65c68df3565254d9e91741ed62dec_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_6d79c0c35cbb2f5c248be4081d4d89514497214f944273f92747f34fc833c30b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d79c0c35cbb2f5c248be4081d4d89514497214f944273f92747f34fc833c30b->enter($__internal_6d79c0c35cbb2f5c248be4081d4d89514497214f944273f92747f34fc833c30b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_98c75689e04e0ccc41699b433e0543c3bee94da1df7612231a657f2c7c1b9406 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98c75689e04e0ccc41699b433e0543c3bee94da1df7612231a657f2c7c1b9406->enter($__internal_98c75689e04e0ccc41699b433e0543c3bee94da1df7612231a657f2c7c1b9406_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_98c75689e04e0ccc41699b433e0543c3bee94da1df7612231a657f2c7c1b9406->leave($__internal_98c75689e04e0ccc41699b433e0543c3bee94da1df7612231a657f2c7c1b9406_prof);

        
        $__internal_6d79c0c35cbb2f5c248be4081d4d89514497214f944273f92747f34fc833c30b->leave($__internal_6d79c0c35cbb2f5c248be4081d4d89514497214f944273f92747f34fc833c30b_prof);

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
