<?php

/* @FOSUser/Group/list.html.twig */
class __TwigTemplate_286a8eb0ac231059f4ba4930b2aa723b3e58c5c281c3649378338a323eb2a997 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/list.html.twig", 1);
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
        $__internal_e7760a0e03471f7585b5a99797eed8e10ad19d1670d0b917f0144cba356d94c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7760a0e03471f7585b5a99797eed8e10ad19d1670d0b917f0144cba356d94c0->enter($__internal_e7760a0e03471f7585b5a99797eed8e10ad19d1670d0b917f0144cba356d94c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $__internal_185929f665694024d593dfaaaad01b770e68bf1000f78eda108b07afc3a5b224 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_185929f665694024d593dfaaaad01b770e68bf1000f78eda108b07afc3a5b224->enter($__internal_185929f665694024d593dfaaaad01b770e68bf1000f78eda108b07afc3a5b224_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e7760a0e03471f7585b5a99797eed8e10ad19d1670d0b917f0144cba356d94c0->leave($__internal_e7760a0e03471f7585b5a99797eed8e10ad19d1670d0b917f0144cba356d94c0_prof);

        
        $__internal_185929f665694024d593dfaaaad01b770e68bf1000f78eda108b07afc3a5b224->leave($__internal_185929f665694024d593dfaaaad01b770e68bf1000f78eda108b07afc3a5b224_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_98771e448f3c0b1a613002a26dfc5101f03a064ee0aa6e9b24bd225c4d715d87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98771e448f3c0b1a613002a26dfc5101f03a064ee0aa6e9b24bd225c4d715d87->enter($__internal_98771e448f3c0b1a613002a26dfc5101f03a064ee0aa6e9b24bd225c4d715d87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_7e5fa618d3533ef9661e756e282f7163e6a5b7da540fb7790da06196a173f478 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e5fa618d3533ef9661e756e282f7163e6a5b7da540fb7790da06196a173f478->enter($__internal_7e5fa618d3533ef9661e756e282f7163e6a5b7da540fb7790da06196a173f478_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_7e5fa618d3533ef9661e756e282f7163e6a5b7da540fb7790da06196a173f478->leave($__internal_7e5fa618d3533ef9661e756e282f7163e6a5b7da540fb7790da06196a173f478_prof);

        
        $__internal_98771e448f3c0b1a613002a26dfc5101f03a064ee0aa6e9b24bd225c4d715d87->leave($__internal_98771e448f3c0b1a613002a26dfc5101f03a064ee0aa6e9b24bd225c4d715d87_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list.html.twig";
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
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/list.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\app\\Resources\\FOSUserBundle\\views\\Group\\list.html.twig");
    }
}
