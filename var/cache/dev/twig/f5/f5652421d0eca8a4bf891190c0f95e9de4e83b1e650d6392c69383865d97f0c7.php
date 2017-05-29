<?php

/* @FOSUser/Resetting/check_email.html.twig */
class __TwigTemplate_b267e3675181f6071f351d436d053bb4a286e035bc80efc7d0ed1a5d0ae2a4fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/check_email.html.twig", 1);
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
        $__internal_3a58500c78fbe4cb3b45a1e2a454b47a6b12b747f82770937db21deb0c97e8f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a58500c78fbe4cb3b45a1e2a454b47a6b12b747f82770937db21deb0c97e8f7->enter($__internal_3a58500c78fbe4cb3b45a1e2a454b47a6b12b747f82770937db21deb0c97e8f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/check_email.html.twig"));

        $__internal_e81f54e7cafed0170dcfcbb6b6f9f2dfcd92fff2275d6774d46b84ed7ef42932 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e81f54e7cafed0170dcfcbb6b6f9f2dfcd92fff2275d6774d46b84ed7ef42932->enter($__internal_e81f54e7cafed0170dcfcbb6b6f9f2dfcd92fff2275d6774d46b84ed7ef42932_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3a58500c78fbe4cb3b45a1e2a454b47a6b12b747f82770937db21deb0c97e8f7->leave($__internal_3a58500c78fbe4cb3b45a1e2a454b47a6b12b747f82770937db21deb0c97e8f7_prof);

        
        $__internal_e81f54e7cafed0170dcfcbb6b6f9f2dfcd92fff2275d6774d46b84ed7ef42932->leave($__internal_e81f54e7cafed0170dcfcbb6b6f9f2dfcd92fff2275d6774d46b84ed7ef42932_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_12f1b6367409317fc6bca753626a243400f78a1bde55f83e34d363f32568717a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12f1b6367409317fc6bca753626a243400f78a1bde55f83e34d363f32568717a->enter($__internal_12f1b6367409317fc6bca753626a243400f78a1bde55f83e34d363f32568717a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_e55d82e2a1ee528fa4981c9ac9d67d7a8713cae6124f29e2e190ae744cc8cc7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e55d82e2a1ee528fa4981c9ac9d67d7a8713cae6124f29e2e190ae744cc8cc7c->enter($__internal_e55d82e2a1ee528fa4981c9ac9d67d7a8713cae6124f29e2e190ae744cc8cc7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => ($context["tokenLifetime"] ?? $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_e55d82e2a1ee528fa4981c9ac9d67d7a8713cae6124f29e2e190ae744cc8cc7c->leave($__internal_e55d82e2a1ee528fa4981c9ac9d67d7a8713cae6124f29e2e190ae744cc8cc7c_prof);

        
        $__internal_12f1b6367409317fc6bca753626a243400f78a1bde55f83e34d363f32568717a->leave($__internal_12f1b6367409317fc6bca753626a243400f78a1bde55f83e34d363f32568717a_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  49 => 6,  40 => 5,  11 => 1,);
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

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
</p>
{% endblock %}
", "@FOSUser/Resetting/check_email.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\app\\Resources\\FOSUserBundle\\views\\Resetting\\check_email.html.twig");
    }
}
