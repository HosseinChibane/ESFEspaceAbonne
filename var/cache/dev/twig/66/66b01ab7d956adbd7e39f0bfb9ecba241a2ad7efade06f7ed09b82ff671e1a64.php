<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_dbb7bfe32b64a2ba6c18207074c946ed64e9fa569af83148961321689a46e801 extends Twig_Template
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
        $__internal_eb5d95154f2de2ee0485eef3274aa60dde8acbf57cf6bc935b37fef6b1af948a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb5d95154f2de2ee0485eef3274aa60dde8acbf57cf6bc935b37fef6b1af948a->enter($__internal_eb5d95154f2de2ee0485eef3274aa60dde8acbf57cf6bc935b37fef6b1af948a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_65ca25a84dc357ddaa2af997feb654dcb537d3e057e98a1ef205e72242cc9e26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65ca25a84dc357ddaa2af997feb654dcb537d3e057e98a1ef205e72242cc9e26->enter($__internal_65ca25a84dc357ddaa2af997feb654dcb537d3e057e98a1ef205e72242cc9e26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_eb5d95154f2de2ee0485eef3274aa60dde8acbf57cf6bc935b37fef6b1af948a->leave($__internal_eb5d95154f2de2ee0485eef3274aa60dde8acbf57cf6bc935b37fef6b1af948a_prof);

        
        $__internal_65ca25a84dc357ddaa2af997feb654dcb537d3e057e98a1ef205e72242cc9e26->leave($__internal_65ca25a84dc357ddaa2af997feb654dcb537d3e057e98a1ef205e72242cc9e26_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_329689c3b7d25ac31182b80248d69ef222e4509fb101c70dccca28b73e415d2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_329689c3b7d25ac31182b80248d69ef222e4509fb101c70dccca28b73e415d2f->enter($__internal_329689c3b7d25ac31182b80248d69ef222e4509fb101c70dccca28b73e415d2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_02526a790522f67894f67c5ac3c9cda44bea497fa7f573c3abe97f58d3a3bd2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02526a790522f67894f67c5ac3c9cda44bea497fa7f573c3abe97f58d3a3bd2c->enter($__internal_02526a790522f67894f67c5ac3c9cda44bea497fa7f573c3abe97f58d3a3bd2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_02526a790522f67894f67c5ac3c9cda44bea497fa7f573c3abe97f58d3a3bd2c->leave($__internal_02526a790522f67894f67c5ac3c9cda44bea497fa7f573c3abe97f58d3a3bd2c_prof);

        
        $__internal_329689c3b7d25ac31182b80248d69ef222e4509fb101c70dccca28b73e415d2f->leave($__internal_329689c3b7d25ac31182b80248d69ef222e4509fb101c70dccca28b73e415d2f_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_dd7b8950a1876ff3ee04fd95f6be287e0245f2bf3a64e532f590f4a03fe82329 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd7b8950a1876ff3ee04fd95f6be287e0245f2bf3a64e532f590f4a03fe82329->enter($__internal_dd7b8950a1876ff3ee04fd95f6be287e0245f2bf3a64e532f590f4a03fe82329_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_5264b7aaaa8ff114d5837aee8185b25f52ecfeb6a268a57fa3a96c76cbf9bb7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5264b7aaaa8ff114d5837aee8185b25f52ecfeb6a268a57fa3a96c76cbf9bb7f->enter($__internal_5264b7aaaa8ff114d5837aee8185b25f52ecfeb6a268a57fa3a96c76cbf9bb7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_5264b7aaaa8ff114d5837aee8185b25f52ecfeb6a268a57fa3a96c76cbf9bb7f->leave($__internal_5264b7aaaa8ff114d5837aee8185b25f52ecfeb6a268a57fa3a96c76cbf9bb7f_prof);

        
        $__internal_dd7b8950a1876ff3ee04fd95f6be287e0245f2bf3a64e532f590f4a03fe82329->leave($__internal_dd7b8950a1876ff3ee04fd95f6be287e0245f2bf3a64e532f590f4a03fe82329_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_fc005833ce85f82832a960c4f02ac3ce0914a97e038a8ed2925ffc473b07728c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc005833ce85f82832a960c4f02ac3ce0914a97e038a8ed2925ffc473b07728c->enter($__internal_fc005833ce85f82832a960c4f02ac3ce0914a97e038a8ed2925ffc473b07728c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_0cc600db315c3a490996a5f436cd821b85b5d243ab643a428aa35cd592124e7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cc600db315c3a490996a5f436cd821b85b5d243ab643a428aa35cd592124e7d->enter($__internal_0cc600db315c3a490996a5f436cd821b85b5d243ab643a428aa35cd592124e7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_0cc600db315c3a490996a5f436cd821b85b5d243ab643a428aa35cd592124e7d->leave($__internal_0cc600db315c3a490996a5f436cd821b85b5d243ab643a428aa35cd592124e7d_prof);

        
        $__internal_fc005833ce85f82832a960c4f02ac3ce0914a97e038a8ed2925ffc473b07728c->leave($__internal_fc005833ce85f82832a960c4f02ac3ce0914a97e038a8ed2925ffc473b07728c_prof);

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
