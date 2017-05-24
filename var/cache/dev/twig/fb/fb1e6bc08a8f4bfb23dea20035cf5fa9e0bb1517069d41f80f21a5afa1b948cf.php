<?php

/* @FOSUser/ChangePassword/change_password.html.twig */
class __TwigTemplate_25ae7b1cce44df0a2d4159c31a1e8e82247291c4a75bac2d59be47f94c2e9dec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 1);
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
        $__internal_b695f449cb5b9c98dae746a9354fe6393e996a62e0688f2c31419869dbc3ef06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b695f449cb5b9c98dae746a9354fe6393e996a62e0688f2c31419869dbc3ef06->enter($__internal_b695f449cb5b9c98dae746a9354fe6393e996a62e0688f2c31419869dbc3ef06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password.html.twig"));

        $__internal_21d09a07a086e9c1ee9c22dd54a7d265f738fd2be3c7b8833ebff6fb0f8e682b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21d09a07a086e9c1ee9c22dd54a7d265f738fd2be3c7b8833ebff6fb0f8e682b->enter($__internal_21d09a07a086e9c1ee9c22dd54a7d265f738fd2be3c7b8833ebff6fb0f8e682b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b695f449cb5b9c98dae746a9354fe6393e996a62e0688f2c31419869dbc3ef06->leave($__internal_b695f449cb5b9c98dae746a9354fe6393e996a62e0688f2c31419869dbc3ef06_prof);

        
        $__internal_21d09a07a086e9c1ee9c22dd54a7d265f738fd2be3c7b8833ebff6fb0f8e682b->leave($__internal_21d09a07a086e9c1ee9c22dd54a7d265f738fd2be3c7b8833ebff6fb0f8e682b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fc18d37452b619be0800e0c15f8f6efce3cfff24dac14837ed57e01dea7cabf9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc18d37452b619be0800e0c15f8f6efce3cfff24dac14837ed57e01dea7cabf9->enter($__internal_fc18d37452b619be0800e0c15f8f6efce3cfff24dac14837ed57e01dea7cabf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_3871c6962c80c388d2faab326b8d5c981d7ede532f463329b2d0a917f779ec06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3871c6962c80c388d2faab326b8d5c981d7ede532f463329b2d0a917f779ec06->enter($__internal_3871c6962c80c388d2faab326b8d5c981d7ede532f463329b2d0a917f779ec06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 4)->display($context);
        
        $__internal_3871c6962c80c388d2faab326b8d5c981d7ede532f463329b2d0a917f779ec06->leave($__internal_3871c6962c80c388d2faab326b8d5c981d7ede532f463329b2d0a917f779ec06_prof);

        
        $__internal_fc18d37452b619be0800e0c15f8f6efce3cfff24dac14837ed57e01dea7cabf9->leave($__internal_fc18d37452b619be0800e0c15f8f6efce3cfff24dac14837ed57e01dea7cabf9_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/change_password.html.twig";
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
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/ChangePassword/change_password.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\app\\Resources\\FOSUserBundle\\views\\ChangePassword\\change_password.html.twig");
    }
}
