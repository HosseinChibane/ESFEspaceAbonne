<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_604a3c9a6652c85e5208a11765882dfcb17482d97ca7aa7d9c47eefa89f28cb6 extends Twig_Template
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
        $__internal_dae43672ab1ab772dd34e8863da33b33a3c35959fe0f19034c36367ad689d779 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dae43672ab1ab772dd34e8863da33b33a3c35959fe0f19034c36367ad689d779->enter($__internal_dae43672ab1ab772dd34e8863da33b33a3c35959fe0f19034c36367ad689d779_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $__internal_f49a0ec4f15bc4a82a8ba40859a46bebed4f2b9c76f0237b126e602c99c1116d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f49a0ec4f15bc4a82a8ba40859a46bebed4f2b9c76f0237b126e602c99c1116d->enter($__internal_f49a0ec4f15bc4a82a8ba40859a46bebed4f2b9c76f0237b126e602c99c1116d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dae43672ab1ab772dd34e8863da33b33a3c35959fe0f19034c36367ad689d779->leave($__internal_dae43672ab1ab772dd34e8863da33b33a3c35959fe0f19034c36367ad689d779_prof);

        
        $__internal_f49a0ec4f15bc4a82a8ba40859a46bebed4f2b9c76f0237b126e602c99c1116d->leave($__internal_f49a0ec4f15bc4a82a8ba40859a46bebed4f2b9c76f0237b126e602c99c1116d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2a2cfe4d6a15a69e580df3e957672aa8d5a10b1a1cd5c2dab946a053b37ccb02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a2cfe4d6a15a69e580df3e957672aa8d5a10b1a1cd5c2dab946a053b37ccb02->enter($__internal_2a2cfe4d6a15a69e580df3e957672aa8d5a10b1a1cd5c2dab946a053b37ccb02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_48e89c1867aac0a4c9d617e99c565d0286cec2b3a13d1f566c7fb3e244b478e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48e89c1867aac0a4c9d617e99c565d0286cec2b3a13d1f566c7fb3e244b478e0->enter($__internal_48e89c1867aac0a4c9d617e99c565d0286cec2b3a13d1f566c7fb3e244b478e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_48e89c1867aac0a4c9d617e99c565d0286cec2b3a13d1f566c7fb3e244b478e0->leave($__internal_48e89c1867aac0a4c9d617e99c565d0286cec2b3a13d1f566c7fb3e244b478e0_prof);

        
        $__internal_2a2cfe4d6a15a69e580df3e957672aa8d5a10b1a1cd5c2dab946a053b37ccb02->leave($__internal_2a2cfe4d6a15a69e580df3e957672aa8d5a10b1a1cd5c2dab946a053b37ccb02_prof);

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
