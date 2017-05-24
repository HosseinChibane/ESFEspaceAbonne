<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_038a7473147f101396a23963b8191bb212f149abc437d39455bf60651e648ded extends Twig_Template
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
        $__internal_adf20b3e18cc9834b64980b92a7fee652dbf23fa91d723b4adafe56abdca7488 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_adf20b3e18cc9834b64980b92a7fee652dbf23fa91d723b4adafe56abdca7488->enter($__internal_adf20b3e18cc9834b64980b92a7fee652dbf23fa91d723b4adafe56abdca7488_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_8069488ead2a2d80ed653a81a92dc5bcd891bc9d0ead76b4e81c26a75d8c55a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8069488ead2a2d80ed653a81a92dc5bcd891bc9d0ead76b4e81c26a75d8c55a3->enter($__internal_8069488ead2a2d80ed653a81a92dc5bcd891bc9d0ead76b4e81c26a75d8c55a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_adf20b3e18cc9834b64980b92a7fee652dbf23fa91d723b4adafe56abdca7488->leave($__internal_adf20b3e18cc9834b64980b92a7fee652dbf23fa91d723b4adafe56abdca7488_prof);

        
        $__internal_8069488ead2a2d80ed653a81a92dc5bcd891bc9d0ead76b4e81c26a75d8c55a3->leave($__internal_8069488ead2a2d80ed653a81a92dc5bcd891bc9d0ead76b4e81c26a75d8c55a3_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_860b908e9c061f99df58fe90ca879d2cadfc7ed96b4cc973f41c91b7ecc2efc6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_860b908e9c061f99df58fe90ca879d2cadfc7ed96b4cc973f41c91b7ecc2efc6->enter($__internal_860b908e9c061f99df58fe90ca879d2cadfc7ed96b4cc973f41c91b7ecc2efc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_eb57f45b3caa1ccfd5c2727a72d4dd5336671740c008d01368bb44b69df898d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb57f45b3caa1ccfd5c2727a72d4dd5336671740c008d01368bb44b69df898d8->enter($__internal_eb57f45b3caa1ccfd5c2727a72d4dd5336671740c008d01368bb44b69df898d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_eb57f45b3caa1ccfd5c2727a72d4dd5336671740c008d01368bb44b69df898d8->leave($__internal_eb57f45b3caa1ccfd5c2727a72d4dd5336671740c008d01368bb44b69df898d8_prof);

        
        $__internal_860b908e9c061f99df58fe90ca879d2cadfc7ed96b4cc973f41c91b7ecc2efc6->leave($__internal_860b908e9c061f99df58fe90ca879d2cadfc7ed96b4cc973f41c91b7ecc2efc6_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_093ac2b0325308e2db28828b6f748b0d927f019c3cf95ad14ef8335c770a2dcf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_093ac2b0325308e2db28828b6f748b0d927f019c3cf95ad14ef8335c770a2dcf->enter($__internal_093ac2b0325308e2db28828b6f748b0d927f019c3cf95ad14ef8335c770a2dcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_c37bcc626b4aa19ce7785be9e3bc2a8a19a969a66294141be66c2353bff10054 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c37bcc626b4aa19ce7785be9e3bc2a8a19a969a66294141be66c2353bff10054->enter($__internal_c37bcc626b4aa19ce7785be9e3bc2a8a19a969a66294141be66c2353bff10054_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_c37bcc626b4aa19ce7785be9e3bc2a8a19a969a66294141be66c2353bff10054->leave($__internal_c37bcc626b4aa19ce7785be9e3bc2a8a19a969a66294141be66c2353bff10054_prof);

        
        $__internal_093ac2b0325308e2db28828b6f748b0d927f019c3cf95ad14ef8335c770a2dcf->leave($__internal_093ac2b0325308e2db28828b6f748b0d927f019c3cf95ad14ef8335c770a2dcf_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_2a195555f8b3c34f71463673e9391903f75834ec3911c627897aadd94b76d66b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a195555f8b3c34f71463673e9391903f75834ec3911c627897aadd94b76d66b->enter($__internal_2a195555f8b3c34f71463673e9391903f75834ec3911c627897aadd94b76d66b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_503be3cc4d60b663f0ebe7b1ef12b191a755f7e4f41ff8f7fc12a89d039c3cf7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_503be3cc4d60b663f0ebe7b1ef12b191a755f7e4f41ff8f7fc12a89d039c3cf7->enter($__internal_503be3cc4d60b663f0ebe7b1ef12b191a755f7e4f41ff8f7fc12a89d039c3cf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_503be3cc4d60b663f0ebe7b1ef12b191a755f7e4f41ff8f7fc12a89d039c3cf7->leave($__internal_503be3cc4d60b663f0ebe7b1ef12b191a755f7e4f41ff8f7fc12a89d039c3cf7_prof);

        
        $__internal_2a195555f8b3c34f71463673e9391903f75834ec3911c627897aadd94b76d66b->leave($__internal_2a195555f8b3c34f71463673e9391903f75834ec3911c627897aadd94b76d66b_prof);

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
