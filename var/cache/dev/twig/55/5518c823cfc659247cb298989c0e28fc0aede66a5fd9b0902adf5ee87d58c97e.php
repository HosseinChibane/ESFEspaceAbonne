<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_9eb7b8fd9e2c07e3882b21b47f9eca86a1687d5e8a259200b7213b7dd114242d extends Twig_Template
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
        $__internal_cc6338472f75f0f5e905152dd867d11e7c2995b4d9ffd6a6eda227fab766e6d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc6338472f75f0f5e905152dd867d11e7c2995b4d9ffd6a6eda227fab766e6d7->enter($__internal_cc6338472f75f0f5e905152dd867d11e7c2995b4d9ffd6a6eda227fab766e6d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_6bc7a4a3472b2beae4bea1ba1206b20101f074751cb0b0090d7ee9cc2878a93a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bc7a4a3472b2beae4bea1ba1206b20101f074751cb0b0090d7ee9cc2878a93a->enter($__internal_6bc7a4a3472b2beae4bea1ba1206b20101f074751cb0b0090d7ee9cc2878a93a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_cc6338472f75f0f5e905152dd867d11e7c2995b4d9ffd6a6eda227fab766e6d7->leave($__internal_cc6338472f75f0f5e905152dd867d11e7c2995b4d9ffd6a6eda227fab766e6d7_prof);

        
        $__internal_6bc7a4a3472b2beae4bea1ba1206b20101f074751cb0b0090d7ee9cc2878a93a->leave($__internal_6bc7a4a3472b2beae4bea1ba1206b20101f074751cb0b0090d7ee9cc2878a93a_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_211cb3f76eb9d500c42ba8263299da39a2575390c319d176bc40df7c15877f4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_211cb3f76eb9d500c42ba8263299da39a2575390c319d176bc40df7c15877f4a->enter($__internal_211cb3f76eb9d500c42ba8263299da39a2575390c319d176bc40df7c15877f4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_13155d9b30577da6c448d9989f53ff8436ebfe2ca4a422b93cec87ffefd3d726 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13155d9b30577da6c448d9989f53ff8436ebfe2ca4a422b93cec87ffefd3d726->enter($__internal_13155d9b30577da6c448d9989f53ff8436ebfe2ca4a422b93cec87ffefd3d726_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_13155d9b30577da6c448d9989f53ff8436ebfe2ca4a422b93cec87ffefd3d726->leave($__internal_13155d9b30577da6c448d9989f53ff8436ebfe2ca4a422b93cec87ffefd3d726_prof);

        
        $__internal_211cb3f76eb9d500c42ba8263299da39a2575390c319d176bc40df7c15877f4a->leave($__internal_211cb3f76eb9d500c42ba8263299da39a2575390c319d176bc40df7c15877f4a_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_cf6cbfb352742a1aed6aaabf85790ee932ffce2b75964278233c38aeb6bf7835 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf6cbfb352742a1aed6aaabf85790ee932ffce2b75964278233c38aeb6bf7835->enter($__internal_cf6cbfb352742a1aed6aaabf85790ee932ffce2b75964278233c38aeb6bf7835_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_c566976578e0f251cbc946ff7646160a4d944fb1afe391c954ad6fcd4a9c6b06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c566976578e0f251cbc946ff7646160a4d944fb1afe391c954ad6fcd4a9c6b06->enter($__internal_c566976578e0f251cbc946ff7646160a4d944fb1afe391c954ad6fcd4a9c6b06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_c566976578e0f251cbc946ff7646160a4d944fb1afe391c954ad6fcd4a9c6b06->leave($__internal_c566976578e0f251cbc946ff7646160a4d944fb1afe391c954ad6fcd4a9c6b06_prof);

        
        $__internal_cf6cbfb352742a1aed6aaabf85790ee932ffce2b75964278233c38aeb6bf7835->leave($__internal_cf6cbfb352742a1aed6aaabf85790ee932ffce2b75964278233c38aeb6bf7835_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_d2746396fd104181397030e8da2cd69cf2810327483f31bfaba8438ac23e7302 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2746396fd104181397030e8da2cd69cf2810327483f31bfaba8438ac23e7302->enter($__internal_d2746396fd104181397030e8da2cd69cf2810327483f31bfaba8438ac23e7302_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_2262efa83c2c8b49a2428b63ce2c200f68eb5be5f4863a25018e3506f6db34e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2262efa83c2c8b49a2428b63ce2c200f68eb5be5f4863a25018e3506f6db34e3->enter($__internal_2262efa83c2c8b49a2428b63ce2c200f68eb5be5f4863a25018e3506f6db34e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_2262efa83c2c8b49a2428b63ce2c200f68eb5be5f4863a25018e3506f6db34e3->leave($__internal_2262efa83c2c8b49a2428b63ce2c200f68eb5be5f4863a25018e3506f6db34e3_prof);

        
        $__internal_d2746396fd104181397030e8da2cd69cf2810327483f31bfaba8438ac23e7302->leave($__internal_d2746396fd104181397030e8da2cd69cf2810327483f31bfaba8438ac23e7302_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
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
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Resetting:email.txt.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\app/Resources/FOSUserBundle/views/Resetting/email.txt.twig");
    }
}
