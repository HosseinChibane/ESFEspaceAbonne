<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_c7bfb4498e823a07d852f8ad5352aa9be73df8c82a184651ba762ad0ca96fc27 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a1ef3bc79183dd4089a12e605f8a2618fd9ff0cfd18f43979026423d181ad304 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1ef3bc79183dd4089a12e605f8a2618fd9ff0cfd18f43979026423d181ad304->enter($__internal_a1ef3bc79183dd4089a12e605f8a2618fd9ff0cfd18f43979026423d181ad304_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $__internal_f393845bb9bf4397932275abaa3668915974d7ce7deebdf6bf17203932a62112 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f393845bb9bf4397932275abaa3668915974d7ce7deebdf6bf17203932a62112->enter($__internal_f393845bb9bf4397932275abaa3668915974d7ce7deebdf6bf17203932a62112_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a1ef3bc79183dd4089a12e605f8a2618fd9ff0cfd18f43979026423d181ad304->leave($__internal_a1ef3bc79183dd4089a12e605f8a2618fd9ff0cfd18f43979026423d181ad304_prof);

        
        $__internal_f393845bb9bf4397932275abaa3668915974d7ce7deebdf6bf17203932a62112->leave($__internal_f393845bb9bf4397932275abaa3668915974d7ce7deebdf6bf17203932a62112_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cf853854fa03b49bd1363511437d37041dda2a2c7e1a6233fd8d7c6a008c288a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf853854fa03b49bd1363511437d37041dda2a2c7e1a6233fd8d7c6a008c288a->enter($__internal_cf853854fa03b49bd1363511437d37041dda2a2c7e1a6233fd8d7c6a008c288a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_d9507515b29be306e1a5241a25a052ed9d6fd793735f6ca53ab4943494ac5947 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9507515b29be306e1a5241a25a052ed9d6fd793735f6ca53ab4943494ac5947->enter($__internal_d9507515b29be306e1a5241a25a052ed9d6fd793735f6ca53ab4943494ac5947_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_d9507515b29be306e1a5241a25a052ed9d6fd793735f6ca53ab4943494ac5947->leave($__internal_d9507515b29be306e1a5241a25a052ed9d6fd793735f6ca53ab4943494ac5947_prof);

        
        $__internal_cf853854fa03b49bd1363511437d37041dda2a2c7e1a6233fd8d7c6a008c288a->leave($__internal_cf853854fa03b49bd1363511437d37041dda2a2c7e1a6233fd8d7c6a008c288a_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Resetting/reset.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\app\\Resources\\FOSUserBundle\\views\\Resetting\\reset.html.twig");
    }
}
