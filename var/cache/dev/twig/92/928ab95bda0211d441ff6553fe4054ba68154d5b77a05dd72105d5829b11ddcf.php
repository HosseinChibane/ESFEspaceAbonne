<?php

/* @FOSUser/Group/show.html.twig */
class __TwigTemplate_5f840e16011cc759cc70b31de4cf65aed7cbe8b5d56852e3adbebc54020e7bf8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/show.html.twig", 1);
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
        $__internal_587b4874137aff31bc80fa5e3cf796e006d3e75c91b45331bf43e5b6a1215cb0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_587b4874137aff31bc80fa5e3cf796e006d3e75c91b45331bf43e5b6a1215cb0->enter($__internal_587b4874137aff31bc80fa5e3cf796e006d3e75c91b45331bf43e5b6a1215cb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $__internal_e9cfb4bc28e67774a6d9d838abc93902b88580e338c3b6ec675dff59e1722df4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9cfb4bc28e67774a6d9d838abc93902b88580e338c3b6ec675dff59e1722df4->enter($__internal_e9cfb4bc28e67774a6d9d838abc93902b88580e338c3b6ec675dff59e1722df4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_587b4874137aff31bc80fa5e3cf796e006d3e75c91b45331bf43e5b6a1215cb0->leave($__internal_587b4874137aff31bc80fa5e3cf796e006d3e75c91b45331bf43e5b6a1215cb0_prof);

        
        $__internal_e9cfb4bc28e67774a6d9d838abc93902b88580e338c3b6ec675dff59e1722df4->leave($__internal_e9cfb4bc28e67774a6d9d838abc93902b88580e338c3b6ec675dff59e1722df4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7e0a000b3acc57b15766612d548c8c07cd05f914e37c36e64814177030ad6722 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e0a000b3acc57b15766612d548c8c07cd05f914e37c36e64814177030ad6722->enter($__internal_7e0a000b3acc57b15766612d548c8c07cd05f914e37c36e64814177030ad6722_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_30fbf384a5e2e9e121c307bbf7da086a2cc6eff15fe9d177256d821a4a801478 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30fbf384a5e2e9e121c307bbf7da086a2cc6eff15fe9d177256d821a4a801478->enter($__internal_30fbf384a5e2e9e121c307bbf7da086a2cc6eff15fe9d177256d821a4a801478_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_30fbf384a5e2e9e121c307bbf7da086a2cc6eff15fe9d177256d821a4a801478->leave($__internal_30fbf384a5e2e9e121c307bbf7da086a2cc6eff15fe9d177256d821a4a801478_prof);

        
        $__internal_7e0a000b3acc57b15766612d548c8c07cd05f914e37c36e64814177030ad6722->leave($__internal_7e0a000b3acc57b15766612d548c8c07cd05f914e37c36e64814177030ad6722_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show.html.twig";
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
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/show.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\app\\Resources\\FOSUserBundle\\views\\Group\\show.html.twig");
    }
}
