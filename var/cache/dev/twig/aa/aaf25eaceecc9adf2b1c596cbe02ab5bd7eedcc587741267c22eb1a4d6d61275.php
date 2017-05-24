<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_0403cffa2d28cf07ff3704ecfc8114f7ddf2ef8c9b9ce240c9bc0d94a2b7cd92 extends Twig_Template
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
        $__internal_5a3188348d58ac5442869be76e12ca0fe7564255fa03e6dceaa860cd9020ec02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a3188348d58ac5442869be76e12ca0fe7564255fa03e6dceaa860cd9020ec02->enter($__internal_5a3188348d58ac5442869be76e12ca0fe7564255fa03e6dceaa860cd9020ec02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        $__internal_ab4a469fc8f28cd09d6f83b4fd83315b0e667de208a94f2617a5e435b41b1cbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab4a469fc8f28cd09d6f83b4fd83315b0e667de208a94f2617a5e435b41b1cbd->enter($__internal_ab4a469fc8f28cd09d6f83b4fd83315b0e667de208a94f2617a5e435b41b1cbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_5a3188348d58ac5442869be76e12ca0fe7564255fa03e6dceaa860cd9020ec02->leave($__internal_5a3188348d58ac5442869be76e12ca0fe7564255fa03e6dceaa860cd9020ec02_prof);

        
        $__internal_ab4a469fc8f28cd09d6f83b4fd83315b0e667de208a94f2617a5e435b41b1cbd->leave($__internal_ab4a469fc8f28cd09d6f83b4fd83315b0e667de208a94f2617a5e435b41b1cbd_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_0b596402cddf19704dcc574ef756f9d4a5b6679c2409aa468173f2ae5f7da5dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b596402cddf19704dcc574ef756f9d4a5b6679c2409aa468173f2ae5f7da5dc->enter($__internal_0b596402cddf19704dcc574ef756f9d4a5b6679c2409aa468173f2ae5f7da5dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_0877479d5c56fb2b12e5df319b3e26fe21259401d83ab84dd36eab037ca74962 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0877479d5c56fb2b12e5df319b3e26fe21259401d83ab84dd36eab037ca74962->enter($__internal_0877479d5c56fb2b12e5df319b3e26fe21259401d83ab84dd36eab037ca74962_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_0877479d5c56fb2b12e5df319b3e26fe21259401d83ab84dd36eab037ca74962->leave($__internal_0877479d5c56fb2b12e5df319b3e26fe21259401d83ab84dd36eab037ca74962_prof);

        
        $__internal_0b596402cddf19704dcc574ef756f9d4a5b6679c2409aa468173f2ae5f7da5dc->leave($__internal_0b596402cddf19704dcc574ef756f9d4a5b6679c2409aa468173f2ae5f7da5dc_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_131ba2483043137c8b25e504f9ef2fbb726d25918df06b48d2491da5cf1fb8b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_131ba2483043137c8b25e504f9ef2fbb726d25918df06b48d2491da5cf1fb8b1->enter($__internal_131ba2483043137c8b25e504f9ef2fbb726d25918df06b48d2491da5cf1fb8b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_95e5ed3ba56e9ab1dedad5c9ff92aa326ac69e1334ef3c1bea36d238319527bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95e5ed3ba56e9ab1dedad5c9ff92aa326ac69e1334ef3c1bea36d238319527bd->enter($__internal_95e5ed3ba56e9ab1dedad5c9ff92aa326ac69e1334ef3c1bea36d238319527bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_95e5ed3ba56e9ab1dedad5c9ff92aa326ac69e1334ef3c1bea36d238319527bd->leave($__internal_95e5ed3ba56e9ab1dedad5c9ff92aa326ac69e1334ef3c1bea36d238319527bd_prof);

        
        $__internal_131ba2483043137c8b25e504f9ef2fbb726d25918df06b48d2491da5cf1fb8b1->leave($__internal_131ba2483043137c8b25e504f9ef2fbb726d25918df06b48d2491da5cf1fb8b1_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_277ab125b9daa4dcc8f01459551e18ff326db86b4fbe1d23f78c5e24ce39ccfa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_277ab125b9daa4dcc8f01459551e18ff326db86b4fbe1d23f78c5e24ce39ccfa->enter($__internal_277ab125b9daa4dcc8f01459551e18ff326db86b4fbe1d23f78c5e24ce39ccfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_38ffbf083d19f5f8648240adbeac02ce5337ab0109b4f9b93c2907edefb97d2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38ffbf083d19f5f8648240adbeac02ce5337ab0109b4f9b93c2907edefb97d2b->enter($__internal_38ffbf083d19f5f8648240adbeac02ce5337ab0109b4f9b93c2907edefb97d2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_38ffbf083d19f5f8648240adbeac02ce5337ab0109b4f9b93c2907edefb97d2b->leave($__internal_38ffbf083d19f5f8648240adbeac02ce5337ab0109b4f9b93c2907edefb97d2b_prof);

        
        $__internal_277ab125b9daa4dcc8f01459551e18ff326db86b4fbe1d23f78c5e24ce39ccfa->leave($__internal_277ab125b9daa4dcc8f01459551e18ff326db86b4fbe1d23f78c5e24ce39ccfa_prof);

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
