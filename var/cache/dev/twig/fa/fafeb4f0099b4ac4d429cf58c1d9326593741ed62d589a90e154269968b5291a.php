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
        $__internal_498e6a2e1b282c2447d9c291b86f353ed54747282983e34db2031e9e9e69288f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_498e6a2e1b282c2447d9c291b86f353ed54747282983e34db2031e9e9e69288f->enter($__internal_498e6a2e1b282c2447d9c291b86f353ed54747282983e34db2031e9e9e69288f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        $__internal_2c0cd4a0c5fd8112e3d997895ec83afd028724216c808bc08db2b669e4389201 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c0cd4a0c5fd8112e3d997895ec83afd028724216c808bc08db2b669e4389201->enter($__internal_2c0cd4a0c5fd8112e3d997895ec83afd028724216c808bc08db2b669e4389201_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_498e6a2e1b282c2447d9c291b86f353ed54747282983e34db2031e9e9e69288f->leave($__internal_498e6a2e1b282c2447d9c291b86f353ed54747282983e34db2031e9e9e69288f_prof);

        
        $__internal_2c0cd4a0c5fd8112e3d997895ec83afd028724216c808bc08db2b669e4389201->leave($__internal_2c0cd4a0c5fd8112e3d997895ec83afd028724216c808bc08db2b669e4389201_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_b2f24c1217c422e9ecc561a04d4359b283b73366b969b12043fe3755fbc33de1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2f24c1217c422e9ecc561a04d4359b283b73366b969b12043fe3755fbc33de1->enter($__internal_b2f24c1217c422e9ecc561a04d4359b283b73366b969b12043fe3755fbc33de1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_7d4a03141f6ec7ceca7ef75ffaf2b9fdadfba1735d2192e55d00194b8bf7eaf2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d4a03141f6ec7ceca7ef75ffaf2b9fdadfba1735d2192e55d00194b8bf7eaf2->enter($__internal_7d4a03141f6ec7ceca7ef75ffaf2b9fdadfba1735d2192e55d00194b8bf7eaf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_7d4a03141f6ec7ceca7ef75ffaf2b9fdadfba1735d2192e55d00194b8bf7eaf2->leave($__internal_7d4a03141f6ec7ceca7ef75ffaf2b9fdadfba1735d2192e55d00194b8bf7eaf2_prof);

        
        $__internal_b2f24c1217c422e9ecc561a04d4359b283b73366b969b12043fe3755fbc33de1->leave($__internal_b2f24c1217c422e9ecc561a04d4359b283b73366b969b12043fe3755fbc33de1_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_f8dfb44cc6011438a18d3d14de3484ce902cbda38d7e27d70edeeb8c0c42f15b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8dfb44cc6011438a18d3d14de3484ce902cbda38d7e27d70edeeb8c0c42f15b->enter($__internal_f8dfb44cc6011438a18d3d14de3484ce902cbda38d7e27d70edeeb8c0c42f15b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_35c4a04a6c2cca8557b67fd284a96fb86786d67416d714c8c1f439341df961ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35c4a04a6c2cca8557b67fd284a96fb86786d67416d714c8c1f439341df961ee->enter($__internal_35c4a04a6c2cca8557b67fd284a96fb86786d67416d714c8c1f439341df961ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_35c4a04a6c2cca8557b67fd284a96fb86786d67416d714c8c1f439341df961ee->leave($__internal_35c4a04a6c2cca8557b67fd284a96fb86786d67416d714c8c1f439341df961ee_prof);

        
        $__internal_f8dfb44cc6011438a18d3d14de3484ce902cbda38d7e27d70edeeb8c0c42f15b->leave($__internal_f8dfb44cc6011438a18d3d14de3484ce902cbda38d7e27d70edeeb8c0c42f15b_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_8b4573fb76eb5a02b6f6942dd8b8034a25d723c2f1d5a9040805ff646159f234 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b4573fb76eb5a02b6f6942dd8b8034a25d723c2f1d5a9040805ff646159f234->enter($__internal_8b4573fb76eb5a02b6f6942dd8b8034a25d723c2f1d5a9040805ff646159f234_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_b3329120474b89b06ff43f6a1037a68dadd025d874686a45326b18df169d2b19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3329120474b89b06ff43f6a1037a68dadd025d874686a45326b18df169d2b19->enter($__internal_b3329120474b89b06ff43f6a1037a68dadd025d874686a45326b18df169d2b19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_b3329120474b89b06ff43f6a1037a68dadd025d874686a45326b18df169d2b19->leave($__internal_b3329120474b89b06ff43f6a1037a68dadd025d874686a45326b18df169d2b19_prof);

        
        $__internal_8b4573fb76eb5a02b6f6942dd8b8034a25d723c2f1d5a9040805ff646159f234->leave($__internal_8b4573fb76eb5a02b6f6942dd8b8034a25d723c2f1d5a9040805ff646159f234_prof);

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
