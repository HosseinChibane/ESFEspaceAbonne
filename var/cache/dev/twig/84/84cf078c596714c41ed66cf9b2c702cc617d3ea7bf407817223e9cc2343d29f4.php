<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_227bf05438f4c997854767723c58bf4578b66eb4f3a59fe8dc8d8d7716f7685d extends Twig_Template
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
        $__internal_32a7467852fb25c62b2b16123c8d8616525597b9f3d5efed966daa4b7795debd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32a7467852fb25c62b2b16123c8d8616525597b9f3d5efed966daa4b7795debd->enter($__internal_32a7467852fb25c62b2b16123c8d8616525597b9f3d5efed966daa4b7795debd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_13fa6aed3abf9b3319fe0117cf0f4e3aa78a98f496bcbb88141397abcbb4b124 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13fa6aed3abf9b3319fe0117cf0f4e3aa78a98f496bcbb88141397abcbb4b124->enter($__internal_13fa6aed3abf9b3319fe0117cf0f4e3aa78a98f496bcbb88141397abcbb4b124_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_32a7467852fb25c62b2b16123c8d8616525597b9f3d5efed966daa4b7795debd->leave($__internal_32a7467852fb25c62b2b16123c8d8616525597b9f3d5efed966daa4b7795debd_prof);

        
        $__internal_13fa6aed3abf9b3319fe0117cf0f4e3aa78a98f496bcbb88141397abcbb4b124->leave($__internal_13fa6aed3abf9b3319fe0117cf0f4e3aa78a98f496bcbb88141397abcbb4b124_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_b475774fb56667d7cbb10e9c96dbd0c956b618404461b215253fc842cafa36d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b475774fb56667d7cbb10e9c96dbd0c956b618404461b215253fc842cafa36d0->enter($__internal_b475774fb56667d7cbb10e9c96dbd0c956b618404461b215253fc842cafa36d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_daa5b6350f223a6ab0a22fccb4cb035e86f6e84bd60675f294b4a8e2242fee93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_daa5b6350f223a6ab0a22fccb4cb035e86f6e84bd60675f294b4a8e2242fee93->enter($__internal_daa5b6350f223a6ab0a22fccb4cb035e86f6e84bd60675f294b4a8e2242fee93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_daa5b6350f223a6ab0a22fccb4cb035e86f6e84bd60675f294b4a8e2242fee93->leave($__internal_daa5b6350f223a6ab0a22fccb4cb035e86f6e84bd60675f294b4a8e2242fee93_prof);

        
        $__internal_b475774fb56667d7cbb10e9c96dbd0c956b618404461b215253fc842cafa36d0->leave($__internal_b475774fb56667d7cbb10e9c96dbd0c956b618404461b215253fc842cafa36d0_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_1f49e2c0d4111bfb92bdcb86d982ae807bc99052f9201bea9346b85b57ee6d9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f49e2c0d4111bfb92bdcb86d982ae807bc99052f9201bea9346b85b57ee6d9a->enter($__internal_1f49e2c0d4111bfb92bdcb86d982ae807bc99052f9201bea9346b85b57ee6d9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_f298a3cf90e516146d711404a25e94547845e84a07c6750793d3296d9c4c1181 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f298a3cf90e516146d711404a25e94547845e84a07c6750793d3296d9c4c1181->enter($__internal_f298a3cf90e516146d711404a25e94547845e84a07c6750793d3296d9c4c1181_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_f298a3cf90e516146d711404a25e94547845e84a07c6750793d3296d9c4c1181->leave($__internal_f298a3cf90e516146d711404a25e94547845e84a07c6750793d3296d9c4c1181_prof);

        
        $__internal_1f49e2c0d4111bfb92bdcb86d982ae807bc99052f9201bea9346b85b57ee6d9a->leave($__internal_1f49e2c0d4111bfb92bdcb86d982ae807bc99052f9201bea9346b85b57ee6d9a_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_4743f22de03fc5ed50292dc1d7c874ec20c5462226a423b227181c32a64ce418 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4743f22de03fc5ed50292dc1d7c874ec20c5462226a423b227181c32a64ce418->enter($__internal_4743f22de03fc5ed50292dc1d7c874ec20c5462226a423b227181c32a64ce418_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_8c1f888c2f5d37457e6abbe763067450714be14e524f0b226945fecba478f4cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c1f888c2f5d37457e6abbe763067450714be14e524f0b226945fecba478f4cc->enter($__internal_8c1f888c2f5d37457e6abbe763067450714be14e524f0b226945fecba478f4cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_8c1f888c2f5d37457e6abbe763067450714be14e524f0b226945fecba478f4cc->leave($__internal_8c1f888c2f5d37457e6abbe763067450714be14e524f0b226945fecba478f4cc_prof);

        
        $__internal_4743f22de03fc5ed50292dc1d7c874ec20c5462226a423b227181c32a64ce418->leave($__internal_4743f22de03fc5ed50292dc1d7c874ec20c5462226a423b227181c32a64ce418_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
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
", "FOSUserBundle:Registration:email.txt.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\app/Resources/FOSUserBundle/views/Registration/email.txt.twig");
    }
}
