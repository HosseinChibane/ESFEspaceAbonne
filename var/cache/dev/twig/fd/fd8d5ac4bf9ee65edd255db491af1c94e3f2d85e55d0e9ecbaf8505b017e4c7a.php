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
        $__internal_1f72d92500a13d57b89616e320201b3fce4fa79a57128331a8550aff401f8202 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f72d92500a13d57b89616e320201b3fce4fa79a57128331a8550aff401f8202->enter($__internal_1f72d92500a13d57b89616e320201b3fce4fa79a57128331a8550aff401f8202_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        $__internal_33129a77ce122e4baf7823661b7f93eb3101fb395648791c200463b27e256b3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33129a77ce122e4baf7823661b7f93eb3101fb395648791c200463b27e256b3c->enter($__internal_33129a77ce122e4baf7823661b7f93eb3101fb395648791c200463b27e256b3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_1f72d92500a13d57b89616e320201b3fce4fa79a57128331a8550aff401f8202->leave($__internal_1f72d92500a13d57b89616e320201b3fce4fa79a57128331a8550aff401f8202_prof);

        
        $__internal_33129a77ce122e4baf7823661b7f93eb3101fb395648791c200463b27e256b3c->leave($__internal_33129a77ce122e4baf7823661b7f93eb3101fb395648791c200463b27e256b3c_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_73c5d91a5adc9c34b64090e38bdf1f473df48e531f10536074d0509a0963e9c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73c5d91a5adc9c34b64090e38bdf1f473df48e531f10536074d0509a0963e9c0->enter($__internal_73c5d91a5adc9c34b64090e38bdf1f473df48e531f10536074d0509a0963e9c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_d8183cc5c1b8c030aa55d382226b74fdd2f1d5440d36e237731a2a0c29f4926c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8183cc5c1b8c030aa55d382226b74fdd2f1d5440d36e237731a2a0c29f4926c->enter($__internal_d8183cc5c1b8c030aa55d382226b74fdd2f1d5440d36e237731a2a0c29f4926c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_d8183cc5c1b8c030aa55d382226b74fdd2f1d5440d36e237731a2a0c29f4926c->leave($__internal_d8183cc5c1b8c030aa55d382226b74fdd2f1d5440d36e237731a2a0c29f4926c_prof);

        
        $__internal_73c5d91a5adc9c34b64090e38bdf1f473df48e531f10536074d0509a0963e9c0->leave($__internal_73c5d91a5adc9c34b64090e38bdf1f473df48e531f10536074d0509a0963e9c0_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_2d3e94f366fce8973c238f5751030de28bd7977faeaa9527014899f5826b45c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d3e94f366fce8973c238f5751030de28bd7977faeaa9527014899f5826b45c2->enter($__internal_2d3e94f366fce8973c238f5751030de28bd7977faeaa9527014899f5826b45c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_999e7b29639e5e9fdf57a8c88c21d8a23998c8dc147d1a111eb7aa0222849222 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_999e7b29639e5e9fdf57a8c88c21d8a23998c8dc147d1a111eb7aa0222849222->enter($__internal_999e7b29639e5e9fdf57a8c88c21d8a23998c8dc147d1a111eb7aa0222849222_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_999e7b29639e5e9fdf57a8c88c21d8a23998c8dc147d1a111eb7aa0222849222->leave($__internal_999e7b29639e5e9fdf57a8c88c21d8a23998c8dc147d1a111eb7aa0222849222_prof);

        
        $__internal_2d3e94f366fce8973c238f5751030de28bd7977faeaa9527014899f5826b45c2->leave($__internal_2d3e94f366fce8973c238f5751030de28bd7977faeaa9527014899f5826b45c2_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_b61906b6d53e45d1e4d44d2251e57d5667336e73121ee4e3fb94484221672a46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b61906b6d53e45d1e4d44d2251e57d5667336e73121ee4e3fb94484221672a46->enter($__internal_b61906b6d53e45d1e4d44d2251e57d5667336e73121ee4e3fb94484221672a46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_30afb19ab0bf99a694debbbd6520aa3e12432b99c49d422c6df24a69f145d55a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30afb19ab0bf99a694debbbd6520aa3e12432b99c49d422c6df24a69f145d55a->enter($__internal_30afb19ab0bf99a694debbbd6520aa3e12432b99c49d422c6df24a69f145d55a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_30afb19ab0bf99a694debbbd6520aa3e12432b99c49d422c6df24a69f145d55a->leave($__internal_30afb19ab0bf99a694debbbd6520aa3e12432b99c49d422c6df24a69f145d55a_prof);

        
        $__internal_b61906b6d53e45d1e4d44d2251e57d5667336e73121ee4e3fb94484221672a46->leave($__internal_b61906b6d53e45d1e4d44d2251e57d5667336e73121ee4e3fb94484221672a46_prof);

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
