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
        $__internal_6071e536c6ba6160f339f9c154286621ccbeca87fe5961d432bcc85a563f2864 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6071e536c6ba6160f339f9c154286621ccbeca87fe5961d432bcc85a563f2864->enter($__internal_6071e536c6ba6160f339f9c154286621ccbeca87fe5961d432bcc85a563f2864_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_269e76bf6bfdaffdccb19f9331dcb7c6ad661679e46b06bcb4ad24fbf2516dcb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_269e76bf6bfdaffdccb19f9331dcb7c6ad661679e46b06bcb4ad24fbf2516dcb->enter($__internal_269e76bf6bfdaffdccb19f9331dcb7c6ad661679e46b06bcb4ad24fbf2516dcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_6071e536c6ba6160f339f9c154286621ccbeca87fe5961d432bcc85a563f2864->leave($__internal_6071e536c6ba6160f339f9c154286621ccbeca87fe5961d432bcc85a563f2864_prof);

        
        $__internal_269e76bf6bfdaffdccb19f9331dcb7c6ad661679e46b06bcb4ad24fbf2516dcb->leave($__internal_269e76bf6bfdaffdccb19f9331dcb7c6ad661679e46b06bcb4ad24fbf2516dcb_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_526ab3221a3df9f41832c92f5da22eccaf07f07fd342f28396d7a128372f596c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_526ab3221a3df9f41832c92f5da22eccaf07f07fd342f28396d7a128372f596c->enter($__internal_526ab3221a3df9f41832c92f5da22eccaf07f07fd342f28396d7a128372f596c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_4f708dac0d03b7f3c29492c3f20c91981ca383c50e109d3e9bd4a252d6e56979 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f708dac0d03b7f3c29492c3f20c91981ca383c50e109d3e9bd4a252d6e56979->enter($__internal_4f708dac0d03b7f3c29492c3f20c91981ca383c50e109d3e9bd4a252d6e56979_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_4f708dac0d03b7f3c29492c3f20c91981ca383c50e109d3e9bd4a252d6e56979->leave($__internal_4f708dac0d03b7f3c29492c3f20c91981ca383c50e109d3e9bd4a252d6e56979_prof);

        
        $__internal_526ab3221a3df9f41832c92f5da22eccaf07f07fd342f28396d7a128372f596c->leave($__internal_526ab3221a3df9f41832c92f5da22eccaf07f07fd342f28396d7a128372f596c_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_d50aae23a64e2a0f69b24b13cfccd04636e41e4d06b10fff5c9d410c9a2d9f04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d50aae23a64e2a0f69b24b13cfccd04636e41e4d06b10fff5c9d410c9a2d9f04->enter($__internal_d50aae23a64e2a0f69b24b13cfccd04636e41e4d06b10fff5c9d410c9a2d9f04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_d9ad846794e479dd266fbf20fddc6a4c091d6c654ee0793e7ae957172bc1259f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9ad846794e479dd266fbf20fddc6a4c091d6c654ee0793e7ae957172bc1259f->enter($__internal_d9ad846794e479dd266fbf20fddc6a4c091d6c654ee0793e7ae957172bc1259f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_d9ad846794e479dd266fbf20fddc6a4c091d6c654ee0793e7ae957172bc1259f->leave($__internal_d9ad846794e479dd266fbf20fddc6a4c091d6c654ee0793e7ae957172bc1259f_prof);

        
        $__internal_d50aae23a64e2a0f69b24b13cfccd04636e41e4d06b10fff5c9d410c9a2d9f04->leave($__internal_d50aae23a64e2a0f69b24b13cfccd04636e41e4d06b10fff5c9d410c9a2d9f04_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_a95f145d11f14debfa7b83ef58af772c70cdd57d97636043b002d77eb3803c75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a95f145d11f14debfa7b83ef58af772c70cdd57d97636043b002d77eb3803c75->enter($__internal_a95f145d11f14debfa7b83ef58af772c70cdd57d97636043b002d77eb3803c75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_51028b14e1d3c22c6fde3018eb580235ef65449ec01933e5b6b721ffd9a4d6b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51028b14e1d3c22c6fde3018eb580235ef65449ec01933e5b6b721ffd9a4d6b7->enter($__internal_51028b14e1d3c22c6fde3018eb580235ef65449ec01933e5b6b721ffd9a4d6b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_51028b14e1d3c22c6fde3018eb580235ef65449ec01933e5b6b721ffd9a4d6b7->leave($__internal_51028b14e1d3c22c6fde3018eb580235ef65449ec01933e5b6b721ffd9a4d6b7_prof);

        
        $__internal_a95f145d11f14debfa7b83ef58af772c70cdd57d97636043b002d77eb3803c75->leave($__internal_a95f145d11f14debfa7b83ef58af772c70cdd57d97636043b002d77eb3803c75_prof);

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
