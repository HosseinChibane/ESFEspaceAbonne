<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_0ed43657211e2f45fa0b4382da11d9835dba6aa61473b39cd0f764bc5033d53b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_1e2a578622c80da982230d77e7991430d96759663f64d144da13603a4b356618 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e2a578622c80da982230d77e7991430d96759663f64d144da13603a4b356618->enter($__internal_1e2a578622c80da982230d77e7991430d96759663f64d144da13603a4b356618_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $__internal_0c1c0e70db047e47dd4a9242870f83477db99bb8fe6e030848fd9e22636bbe32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c1c0e70db047e47dd4a9242870f83477db99bb8fe6e030848fd9e22636bbe32->enter($__internal_0c1c0e70db047e47dd4a9242870f83477db99bb8fe6e030848fd9e22636bbe32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1e2a578622c80da982230d77e7991430d96759663f64d144da13603a4b356618->leave($__internal_1e2a578622c80da982230d77e7991430d96759663f64d144da13603a4b356618_prof);

        
        $__internal_0c1c0e70db047e47dd4a9242870f83477db99bb8fe6e030848fd9e22636bbe32->leave($__internal_0c1c0e70db047e47dd4a9242870f83477db99bb8fe6e030848fd9e22636bbe32_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_48e221cbeba6041e1ea9303ff7ed23a8b1eae7550c10889e3f927d51ce94aa31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48e221cbeba6041e1ea9303ff7ed23a8b1eae7550c10889e3f927d51ce94aa31->enter($__internal_48e221cbeba6041e1ea9303ff7ed23a8b1eae7550c10889e3f927d51ce94aa31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_593d35a3073d11e81c295ef267c41f4217e9ad7195e63f9d23e54a78632c3e81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_593d35a3073d11e81c295ef267c41f4217e9ad7195e63f9d23e54a78632c3e81->enter($__internal_593d35a3073d11e81c295ef267c41f4217e9ad7195e63f9d23e54a78632c3e81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_593d35a3073d11e81c295ef267c41f4217e9ad7195e63f9d23e54a78632c3e81->leave($__internal_593d35a3073d11e81c295ef267c41f4217e9ad7195e63f9d23e54a78632c3e81_prof);

        
        $__internal_48e221cbeba6041e1ea9303ff7ed23a8b1eae7550c10889e3f927d51ce94aa31->leave($__internal_48e221cbeba6041e1ea9303ff7ed23a8b1eae7550c10889e3f927d51ce94aa31_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/register.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\app\\Resources\\FOSUserBundle\\views\\Registration\\register.html.twig");
    }
}
