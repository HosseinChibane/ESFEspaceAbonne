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
        $__internal_d7c0de846b6a784eeb1f961b16968532e45a21077f31f61f5a4b8fa2d70ff848 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7c0de846b6a784eeb1f961b16968532e45a21077f31f61f5a4b8fa2d70ff848->enter($__internal_d7c0de846b6a784eeb1f961b16968532e45a21077f31f61f5a4b8fa2d70ff848_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        $__internal_a475eaf201b37d845388179c3eb2c949349a25323b1085bbd67501b067450c69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a475eaf201b37d845388179c3eb2c949349a25323b1085bbd67501b067450c69->enter($__internal_a475eaf201b37d845388179c3eb2c949349a25323b1085bbd67501b067450c69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_d7c0de846b6a784eeb1f961b16968532e45a21077f31f61f5a4b8fa2d70ff848->leave($__internal_d7c0de846b6a784eeb1f961b16968532e45a21077f31f61f5a4b8fa2d70ff848_prof);

        
        $__internal_a475eaf201b37d845388179c3eb2c949349a25323b1085bbd67501b067450c69->leave($__internal_a475eaf201b37d845388179c3eb2c949349a25323b1085bbd67501b067450c69_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_bd8c9a488322ce18552f9de52505974cec56c0836bbcef8c67fa9284b5e152f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd8c9a488322ce18552f9de52505974cec56c0836bbcef8c67fa9284b5e152f2->enter($__internal_bd8c9a488322ce18552f9de52505974cec56c0836bbcef8c67fa9284b5e152f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_71cf50ace4ad3a6a383518ddc37111ebdc1dc626db98c6fb80fa7ae732b84e70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71cf50ace4ad3a6a383518ddc37111ebdc1dc626db98c6fb80fa7ae732b84e70->enter($__internal_71cf50ace4ad3a6a383518ddc37111ebdc1dc626db98c6fb80fa7ae732b84e70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_71cf50ace4ad3a6a383518ddc37111ebdc1dc626db98c6fb80fa7ae732b84e70->leave($__internal_71cf50ace4ad3a6a383518ddc37111ebdc1dc626db98c6fb80fa7ae732b84e70_prof);

        
        $__internal_bd8c9a488322ce18552f9de52505974cec56c0836bbcef8c67fa9284b5e152f2->leave($__internal_bd8c9a488322ce18552f9de52505974cec56c0836bbcef8c67fa9284b5e152f2_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_3ab5447c6109d99958a0d50d9bee47b120a782157e5b9163c07d61607fdbc895 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ab5447c6109d99958a0d50d9bee47b120a782157e5b9163c07d61607fdbc895->enter($__internal_3ab5447c6109d99958a0d50d9bee47b120a782157e5b9163c07d61607fdbc895_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_f268f09bf3def3dec81175dcae2c464c985c9607c4ecc89191e4299ce810b54f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f268f09bf3def3dec81175dcae2c464c985c9607c4ecc89191e4299ce810b54f->enter($__internal_f268f09bf3def3dec81175dcae2c464c985c9607c4ecc89191e4299ce810b54f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_f268f09bf3def3dec81175dcae2c464c985c9607c4ecc89191e4299ce810b54f->leave($__internal_f268f09bf3def3dec81175dcae2c464c985c9607c4ecc89191e4299ce810b54f_prof);

        
        $__internal_3ab5447c6109d99958a0d50d9bee47b120a782157e5b9163c07d61607fdbc895->leave($__internal_3ab5447c6109d99958a0d50d9bee47b120a782157e5b9163c07d61607fdbc895_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_014e77c3e5c96bc8070b05cd03f91b294c3ac69782fd8b584f767ecd68a9d0b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_014e77c3e5c96bc8070b05cd03f91b294c3ac69782fd8b584f767ecd68a9d0b3->enter($__internal_014e77c3e5c96bc8070b05cd03f91b294c3ac69782fd8b584f767ecd68a9d0b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_0052cf9bcc522a9cb0a54b8cdc5ec5e845122b9ccbcdbf6b4b742ea1aabd6e22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0052cf9bcc522a9cb0a54b8cdc5ec5e845122b9ccbcdbf6b4b742ea1aabd6e22->enter($__internal_0052cf9bcc522a9cb0a54b8cdc5ec5e845122b9ccbcdbf6b4b742ea1aabd6e22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_0052cf9bcc522a9cb0a54b8cdc5ec5e845122b9ccbcdbf6b4b742ea1aabd6e22->leave($__internal_0052cf9bcc522a9cb0a54b8cdc5ec5e845122b9ccbcdbf6b4b742ea1aabd6e22_prof);

        
        $__internal_014e77c3e5c96bc8070b05cd03f91b294c3ac69782fd8b584f767ecd68a9d0b3->leave($__internal_014e77c3e5c96bc8070b05cd03f91b294c3ac69782fd8b584f767ecd68a9d0b3_prof);

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
