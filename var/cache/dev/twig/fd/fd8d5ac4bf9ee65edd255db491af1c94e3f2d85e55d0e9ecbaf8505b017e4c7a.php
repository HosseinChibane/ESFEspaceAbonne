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
        $__internal_11218ead77783a09fce43691760c77f1db732b39bed413d27975ac70e9a0b583 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11218ead77783a09fce43691760c77f1db732b39bed413d27975ac70e9a0b583->enter($__internal_11218ead77783a09fce43691760c77f1db732b39bed413d27975ac70e9a0b583_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        $__internal_6a754d10e4f1a9ca8b65f3ba2f1cc4089f924116b04459f0a51a84d544206423 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a754d10e4f1a9ca8b65f3ba2f1cc4089f924116b04459f0a51a84d544206423->enter($__internal_6a754d10e4f1a9ca8b65f3ba2f1cc4089f924116b04459f0a51a84d544206423_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_11218ead77783a09fce43691760c77f1db732b39bed413d27975ac70e9a0b583->leave($__internal_11218ead77783a09fce43691760c77f1db732b39bed413d27975ac70e9a0b583_prof);

        
        $__internal_6a754d10e4f1a9ca8b65f3ba2f1cc4089f924116b04459f0a51a84d544206423->leave($__internal_6a754d10e4f1a9ca8b65f3ba2f1cc4089f924116b04459f0a51a84d544206423_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_f215d2c84932bafb96121e076d04631b4f6d1ba5abcdb7d10cf99624c3fe5bb9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f215d2c84932bafb96121e076d04631b4f6d1ba5abcdb7d10cf99624c3fe5bb9->enter($__internal_f215d2c84932bafb96121e076d04631b4f6d1ba5abcdb7d10cf99624c3fe5bb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_31c31e607feb886da58833767f6ba45fed3de027537be354da6b5a014122e96a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31c31e607feb886da58833767f6ba45fed3de027537be354da6b5a014122e96a->enter($__internal_31c31e607feb886da58833767f6ba45fed3de027537be354da6b5a014122e96a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_31c31e607feb886da58833767f6ba45fed3de027537be354da6b5a014122e96a->leave($__internal_31c31e607feb886da58833767f6ba45fed3de027537be354da6b5a014122e96a_prof);

        
        $__internal_f215d2c84932bafb96121e076d04631b4f6d1ba5abcdb7d10cf99624c3fe5bb9->leave($__internal_f215d2c84932bafb96121e076d04631b4f6d1ba5abcdb7d10cf99624c3fe5bb9_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_8323c26879491117ede1f7e53d7890166bef4d8076adb9a006074a0341163c54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8323c26879491117ede1f7e53d7890166bef4d8076adb9a006074a0341163c54->enter($__internal_8323c26879491117ede1f7e53d7890166bef4d8076adb9a006074a0341163c54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_b4da4aee836e61459efe80d2bebf8bc75985579e724d910d9a9c11f1a4b68d52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4da4aee836e61459efe80d2bebf8bc75985579e724d910d9a9c11f1a4b68d52->enter($__internal_b4da4aee836e61459efe80d2bebf8bc75985579e724d910d9a9c11f1a4b68d52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_b4da4aee836e61459efe80d2bebf8bc75985579e724d910d9a9c11f1a4b68d52->leave($__internal_b4da4aee836e61459efe80d2bebf8bc75985579e724d910d9a9c11f1a4b68d52_prof);

        
        $__internal_8323c26879491117ede1f7e53d7890166bef4d8076adb9a006074a0341163c54->leave($__internal_8323c26879491117ede1f7e53d7890166bef4d8076adb9a006074a0341163c54_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_8da0986ceeb9dc7d43d6d98e8dae91ed4ffca927d6bae62db7c634510aebf352 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8da0986ceeb9dc7d43d6d98e8dae91ed4ffca927d6bae62db7c634510aebf352->enter($__internal_8da0986ceeb9dc7d43d6d98e8dae91ed4ffca927d6bae62db7c634510aebf352_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_a3900702f0f6ad6ec236db6e7b01dce32d867d8bee436ef91bbe0c166467faa3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3900702f0f6ad6ec236db6e7b01dce32d867d8bee436ef91bbe0c166467faa3->enter($__internal_a3900702f0f6ad6ec236db6e7b01dce32d867d8bee436ef91bbe0c166467faa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_a3900702f0f6ad6ec236db6e7b01dce32d867d8bee436ef91bbe0c166467faa3->leave($__internal_a3900702f0f6ad6ec236db6e7b01dce32d867d8bee436ef91bbe0c166467faa3_prof);

        
        $__internal_8da0986ceeb9dc7d43d6d98e8dae91ed4ffca927d6bae62db7c634510aebf352->leave($__internal_8da0986ceeb9dc7d43d6d98e8dae91ed4ffca927d6bae62db7c634510aebf352_prof);

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
