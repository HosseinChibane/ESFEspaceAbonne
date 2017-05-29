<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_9eb7b8fd9e2c07e3882b21b47f9eca86a1687d5e8a259200b7213b7dd114242d extends Twig_Template
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
        $__internal_6ff12d8445f71544bf7db32957db1ada67c638d8e2a87a5b3f03bafcca358472 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ff12d8445f71544bf7db32957db1ada67c638d8e2a87a5b3f03bafcca358472->enter($__internal_6ff12d8445f71544bf7db32957db1ada67c638d8e2a87a5b3f03bafcca358472_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_dcf87817659af11bb2c57b8ff185705ffcba263a81e9c227446627d4f2e8da86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcf87817659af11bb2c57b8ff185705ffcba263a81e9c227446627d4f2e8da86->enter($__internal_dcf87817659af11bb2c57b8ff185705ffcba263a81e9c227446627d4f2e8da86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_6ff12d8445f71544bf7db32957db1ada67c638d8e2a87a5b3f03bafcca358472->leave($__internal_6ff12d8445f71544bf7db32957db1ada67c638d8e2a87a5b3f03bafcca358472_prof);

        
        $__internal_dcf87817659af11bb2c57b8ff185705ffcba263a81e9c227446627d4f2e8da86->leave($__internal_dcf87817659af11bb2c57b8ff185705ffcba263a81e9c227446627d4f2e8da86_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_c2c82a35d4a593a9429e9eca2144fb3a4f1740dbeab2ea0f385d6c4e352cfcf8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2c82a35d4a593a9429e9eca2144fb3a4f1740dbeab2ea0f385d6c4e352cfcf8->enter($__internal_c2c82a35d4a593a9429e9eca2144fb3a4f1740dbeab2ea0f385d6c4e352cfcf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_13ba9a392dec86543b12b2a0576aa73a359a3bc11137fe139ad7ffc5a22ed3a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13ba9a392dec86543b12b2a0576aa73a359a3bc11137fe139ad7ffc5a22ed3a1->enter($__internal_13ba9a392dec86543b12b2a0576aa73a359a3bc11137fe139ad7ffc5a22ed3a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_13ba9a392dec86543b12b2a0576aa73a359a3bc11137fe139ad7ffc5a22ed3a1->leave($__internal_13ba9a392dec86543b12b2a0576aa73a359a3bc11137fe139ad7ffc5a22ed3a1_prof);

        
        $__internal_c2c82a35d4a593a9429e9eca2144fb3a4f1740dbeab2ea0f385d6c4e352cfcf8->leave($__internal_c2c82a35d4a593a9429e9eca2144fb3a4f1740dbeab2ea0f385d6c4e352cfcf8_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_7e341e28bea571dfac130b9dc97d3b5a950300c6cb175513ad77513d129dfcd7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e341e28bea571dfac130b9dc97d3b5a950300c6cb175513ad77513d129dfcd7->enter($__internal_7e341e28bea571dfac130b9dc97d3b5a950300c6cb175513ad77513d129dfcd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_247ad1b063cc05f60d9533ab2d359af257adb6508d34deb881d29cec23c1c1fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_247ad1b063cc05f60d9533ab2d359af257adb6508d34deb881d29cec23c1c1fd->enter($__internal_247ad1b063cc05f60d9533ab2d359af257adb6508d34deb881d29cec23c1c1fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_247ad1b063cc05f60d9533ab2d359af257adb6508d34deb881d29cec23c1c1fd->leave($__internal_247ad1b063cc05f60d9533ab2d359af257adb6508d34deb881d29cec23c1c1fd_prof);

        
        $__internal_7e341e28bea571dfac130b9dc97d3b5a950300c6cb175513ad77513d129dfcd7->leave($__internal_7e341e28bea571dfac130b9dc97d3b5a950300c6cb175513ad77513d129dfcd7_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_7c08843301fe091cf3d587e0db11b327e3567787bd16553b651e252a02516412 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c08843301fe091cf3d587e0db11b327e3567787bd16553b651e252a02516412->enter($__internal_7c08843301fe091cf3d587e0db11b327e3567787bd16553b651e252a02516412_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_d95d11f3683599103216d8b5799b219f29c3203945e8f7ee335bba7719f317ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d95d11f3683599103216d8b5799b219f29c3203945e8f7ee335bba7719f317ae->enter($__internal_d95d11f3683599103216d8b5799b219f29c3203945e8f7ee335bba7719f317ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_d95d11f3683599103216d8b5799b219f29c3203945e8f7ee335bba7719f317ae->leave($__internal_d95d11f3683599103216d8b5799b219f29c3203945e8f7ee335bba7719f317ae_prof);

        
        $__internal_7c08843301fe091cf3d587e0db11b327e3567787bd16553b651e252a02516412->leave($__internal_7c08843301fe091cf3d587e0db11b327e3567787bd16553b651e252a02516412_prof);

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
