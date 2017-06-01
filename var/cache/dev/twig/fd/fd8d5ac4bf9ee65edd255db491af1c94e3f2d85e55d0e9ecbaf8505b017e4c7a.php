<?php

/* @FOSUser/Resetting/email.txt.twig */
class __TwigTemplate_4f72b6fedc3bf9f7bffd47ffeb9b76c3c45401380da9c2b0bd93ad0c5462fc68 extends Twig_Template
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
        $__internal_5155cc13e7ae87f680eedb8469ba4ae0921f27162e1ca8cfc927c8e4f4f8eab0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5155cc13e7ae87f680eedb8469ba4ae0921f27162e1ca8cfc927c8e4f4f8eab0->enter($__internal_5155cc13e7ae87f680eedb8469ba4ae0921f27162e1ca8cfc927c8e4f4f8eab0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        $__internal_991e4f5cac98bc545c83a88d271744782c12fdf86a04f4fe84ae43815d902083 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_991e4f5cac98bc545c83a88d271744782c12fdf86a04f4fe84ae43815d902083->enter($__internal_991e4f5cac98bc545c83a88d271744782c12fdf86a04f4fe84ae43815d902083_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_5155cc13e7ae87f680eedb8469ba4ae0921f27162e1ca8cfc927c8e4f4f8eab0->leave($__internal_5155cc13e7ae87f680eedb8469ba4ae0921f27162e1ca8cfc927c8e4f4f8eab0_prof);

        
        $__internal_991e4f5cac98bc545c83a88d271744782c12fdf86a04f4fe84ae43815d902083->leave($__internal_991e4f5cac98bc545c83a88d271744782c12fdf86a04f4fe84ae43815d902083_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_ffde08afaf1ee50757d1a1f1191443966211d1c81a7a4af987ccb97ade08b7d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ffde08afaf1ee50757d1a1f1191443966211d1c81a7a4af987ccb97ade08b7d6->enter($__internal_ffde08afaf1ee50757d1a1f1191443966211d1c81a7a4af987ccb97ade08b7d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_4121d8dd46834f0249164c490e592984d68bd962cbe7cfe6b6b87b6fb8b0c05d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4121d8dd46834f0249164c490e592984d68bd962cbe7cfe6b6b87b6fb8b0c05d->enter($__internal_4121d8dd46834f0249164c490e592984d68bd962cbe7cfe6b6b87b6fb8b0c05d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_4121d8dd46834f0249164c490e592984d68bd962cbe7cfe6b6b87b6fb8b0c05d->leave($__internal_4121d8dd46834f0249164c490e592984d68bd962cbe7cfe6b6b87b6fb8b0c05d_prof);

        
        $__internal_ffde08afaf1ee50757d1a1f1191443966211d1c81a7a4af987ccb97ade08b7d6->leave($__internal_ffde08afaf1ee50757d1a1f1191443966211d1c81a7a4af987ccb97ade08b7d6_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_79565a86ca69e62a429be259734fd38bcb7d042764236668b41d76f6d55265e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79565a86ca69e62a429be259734fd38bcb7d042764236668b41d76f6d55265e4->enter($__internal_79565a86ca69e62a429be259734fd38bcb7d042764236668b41d76f6d55265e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_4a94d544a46e5c5ce4307a059beabe03faa450624eb98cd7c8bd32532d8ed101 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a94d544a46e5c5ce4307a059beabe03faa450624eb98cd7c8bd32532d8ed101->enter($__internal_4a94d544a46e5c5ce4307a059beabe03faa450624eb98cd7c8bd32532d8ed101_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_4a94d544a46e5c5ce4307a059beabe03faa450624eb98cd7c8bd32532d8ed101->leave($__internal_4a94d544a46e5c5ce4307a059beabe03faa450624eb98cd7c8bd32532d8ed101_prof);

        
        $__internal_79565a86ca69e62a429be259734fd38bcb7d042764236668b41d76f6d55265e4->leave($__internal_79565a86ca69e62a429be259734fd38bcb7d042764236668b41d76f6d55265e4_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_9a6e46f97d0e1b4d22978e645cc112409013d758a88ae1b2a57cdb07d84a0bf4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a6e46f97d0e1b4d22978e645cc112409013d758a88ae1b2a57cdb07d84a0bf4->enter($__internal_9a6e46f97d0e1b4d22978e645cc112409013d758a88ae1b2a57cdb07d84a0bf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_a9345d74fa3faf99bcd1b1fe1126637066ce219fa0420cf78d0fffa980ac0a4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9345d74fa3faf99bcd1b1fe1126637066ce219fa0420cf78d0fffa980ac0a4a->enter($__internal_a9345d74fa3faf99bcd1b1fe1126637066ce219fa0420cf78d0fffa980ac0a4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_a9345d74fa3faf99bcd1b1fe1126637066ce219fa0420cf78d0fffa980ac0a4a->leave($__internal_a9345d74fa3faf99bcd1b1fe1126637066ce219fa0420cf78d0fffa980ac0a4a_prof);

        
        $__internal_9a6e46f97d0e1b4d22978e645cc112409013d758a88ae1b2a57cdb07d84a0bf4->leave($__internal_9a6e46f97d0e1b4d22978e645cc112409013d758a88ae1b2a57cdb07d84a0bf4_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/email.txt.twig";
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
", "@FOSUser/Resetting/email.txt.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\app\\Resources\\FOSUserBundle\\views\\Resetting\\email.txt.twig");
    }
}
