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
        $__internal_de74e3f34ae2b302e3ccbc86880131e1682600fa689174494a66a4ccda5b5a3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de74e3f34ae2b302e3ccbc86880131e1682600fa689174494a66a4ccda5b5a3c->enter($__internal_de74e3f34ae2b302e3ccbc86880131e1682600fa689174494a66a4ccda5b5a3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        $__internal_763fb62db5ee0d61e1b693ce07b07a078b0238176c0f33c31b1f7e9d9a8204ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_763fb62db5ee0d61e1b693ce07b07a078b0238176c0f33c31b1f7e9d9a8204ea->enter($__internal_763fb62db5ee0d61e1b693ce07b07a078b0238176c0f33c31b1f7e9d9a8204ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_de74e3f34ae2b302e3ccbc86880131e1682600fa689174494a66a4ccda5b5a3c->leave($__internal_de74e3f34ae2b302e3ccbc86880131e1682600fa689174494a66a4ccda5b5a3c_prof);

        
        $__internal_763fb62db5ee0d61e1b693ce07b07a078b0238176c0f33c31b1f7e9d9a8204ea->leave($__internal_763fb62db5ee0d61e1b693ce07b07a078b0238176c0f33c31b1f7e9d9a8204ea_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_b1f4f4e5311fe28322662a6e6ba5a41faf1d6856e7ee12980b4af9278659d657 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1f4f4e5311fe28322662a6e6ba5a41faf1d6856e7ee12980b4af9278659d657->enter($__internal_b1f4f4e5311fe28322662a6e6ba5a41faf1d6856e7ee12980b4af9278659d657_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_03164a02a68ebeeaa5384ec9860598aa856433278c7f6dc27f912fb0b9e58b23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03164a02a68ebeeaa5384ec9860598aa856433278c7f6dc27f912fb0b9e58b23->enter($__internal_03164a02a68ebeeaa5384ec9860598aa856433278c7f6dc27f912fb0b9e58b23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_03164a02a68ebeeaa5384ec9860598aa856433278c7f6dc27f912fb0b9e58b23->leave($__internal_03164a02a68ebeeaa5384ec9860598aa856433278c7f6dc27f912fb0b9e58b23_prof);

        
        $__internal_b1f4f4e5311fe28322662a6e6ba5a41faf1d6856e7ee12980b4af9278659d657->leave($__internal_b1f4f4e5311fe28322662a6e6ba5a41faf1d6856e7ee12980b4af9278659d657_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_3254b22b47f65b1037974c739310305c68c26be34d9873f66a642ca749c9cfd1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3254b22b47f65b1037974c739310305c68c26be34d9873f66a642ca749c9cfd1->enter($__internal_3254b22b47f65b1037974c739310305c68c26be34d9873f66a642ca749c9cfd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_8399b212322012fe4cf82095d38214ec2f96d8472003685d63670fb650e32d9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8399b212322012fe4cf82095d38214ec2f96d8472003685d63670fb650e32d9e->enter($__internal_8399b212322012fe4cf82095d38214ec2f96d8472003685d63670fb650e32d9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_8399b212322012fe4cf82095d38214ec2f96d8472003685d63670fb650e32d9e->leave($__internal_8399b212322012fe4cf82095d38214ec2f96d8472003685d63670fb650e32d9e_prof);

        
        $__internal_3254b22b47f65b1037974c739310305c68c26be34d9873f66a642ca749c9cfd1->leave($__internal_3254b22b47f65b1037974c739310305c68c26be34d9873f66a642ca749c9cfd1_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_d5539d2039ebbdf653e40fff5c8c221ac76a6b977457101b6eab0fbbf4010f5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5539d2039ebbdf653e40fff5c8c221ac76a6b977457101b6eab0fbbf4010f5d->enter($__internal_d5539d2039ebbdf653e40fff5c8c221ac76a6b977457101b6eab0fbbf4010f5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_029dbc038af985d402bb0751129346a421eb999d6196eb290d7fcd035507a3d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_029dbc038af985d402bb0751129346a421eb999d6196eb290d7fcd035507a3d7->enter($__internal_029dbc038af985d402bb0751129346a421eb999d6196eb290d7fcd035507a3d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_029dbc038af985d402bb0751129346a421eb999d6196eb290d7fcd035507a3d7->leave($__internal_029dbc038af985d402bb0751129346a421eb999d6196eb290d7fcd035507a3d7_prof);

        
        $__internal_d5539d2039ebbdf653e40fff5c8c221ac76a6b977457101b6eab0fbbf4010f5d->leave($__internal_d5539d2039ebbdf653e40fff5c8c221ac76a6b977457101b6eab0fbbf4010f5d_prof);

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
