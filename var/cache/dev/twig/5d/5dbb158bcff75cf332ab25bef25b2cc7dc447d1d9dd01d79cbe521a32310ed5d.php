<?php

/* @FOSUser/ChangePassword/change_password.html.twig */
class __TwigTemplate_9b7f382caf7efa41e29abff6fb8ac657e199abbade0dacd8e2aa4e6bdfd38b71 extends Twig_Template
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
        $__internal_d29a9c64238320e068aab73193ca6716bc7d1fe99c69331879b44b14ced36f73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d29a9c64238320e068aab73193ca6716bc7d1fe99c69331879b44b14ced36f73->enter($__internal_d29a9c64238320e068aab73193ca6716bc7d1fe99c69331879b44b14ced36f73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password.html.twig"));

        $__internal_c082b438439fec6a6e4affd25c8c5333f11dbd5b1106bc92d71160fc3c385624 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c082b438439fec6a6e4affd25c8c5333f11dbd5b1106bc92d71160fc3c385624->enter($__internal_c082b438439fec6a6e4affd25c8c5333f11dbd5b1106bc92d71160fc3c385624_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d29a9c64238320e068aab73193ca6716bc7d1fe99c69331879b44b14ced36f73->leave($__internal_d29a9c64238320e068aab73193ca6716bc7d1fe99c69331879b44b14ced36f73_prof);

        
        $__internal_c082b438439fec6a6e4affd25c8c5333f11dbd5b1106bc92d71160fc3c385624->leave($__internal_c082b438439fec6a6e4affd25c8c5333f11dbd5b1106bc92d71160fc3c385624_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0599bff6b1c0a9697a8e315d343b0e836d47a273cc771a6d279ce04faaff4ccd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0599bff6b1c0a9697a8e315d343b0e836d47a273cc771a6d279ce04faaff4ccd->enter($__internal_0599bff6b1c0a9697a8e315d343b0e836d47a273cc771a6d279ce04faaff4ccd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_16df78199b4c231b2c2b1384ae1f5b773321366b69b37c1476f18847fb6abd56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16df78199b4c231b2c2b1384ae1f5b773321366b69b37c1476f18847fb6abd56->enter($__internal_16df78199b4c231b2c2b1384ae1f5b773321366b69b37c1476f18847fb6abd56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 4)->display($context);
        
        $__internal_16df78199b4c231b2c2b1384ae1f5b773321366b69b37c1476f18847fb6abd56->leave($__internal_16df78199b4c231b2c2b1384ae1f5b773321366b69b37c1476f18847fb6abd56_prof);

        
        $__internal_0599bff6b1c0a9697a8e315d343b0e836d47a273cc771a6d279ce04faaff4ccd->leave($__internal_0599bff6b1c0a9697a8e315d343b0e836d47a273cc771a6d279ce04faaff4ccd_prof);

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
