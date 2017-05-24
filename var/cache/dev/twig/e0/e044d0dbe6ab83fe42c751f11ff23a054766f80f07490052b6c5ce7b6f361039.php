<?php

/* @FOSUser/Group/new.html.twig */
class __TwigTemplate_84064c0bb16677747541c0f4f51eb4c72733c289a8dd050f1f2ad8b7d77499cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/new.html.twig", 1);
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
        $__internal_2af2e68b70eaf9b360ab2665839418a93f9357f73af8f9093595cee1c45a894b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2af2e68b70eaf9b360ab2665839418a93f9357f73af8f9093595cee1c45a894b->enter($__internal_2af2e68b70eaf9b360ab2665839418a93f9357f73af8f9093595cee1c45a894b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $__internal_ab622104cc1e5e03ab49e4b505dd76f398dc5903c9519919b987d05a142eb246 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab622104cc1e5e03ab49e4b505dd76f398dc5903c9519919b987d05a142eb246->enter($__internal_ab622104cc1e5e03ab49e4b505dd76f398dc5903c9519919b987d05a142eb246_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2af2e68b70eaf9b360ab2665839418a93f9357f73af8f9093595cee1c45a894b->leave($__internal_2af2e68b70eaf9b360ab2665839418a93f9357f73af8f9093595cee1c45a894b_prof);

        
        $__internal_ab622104cc1e5e03ab49e4b505dd76f398dc5903c9519919b987d05a142eb246->leave($__internal_ab622104cc1e5e03ab49e4b505dd76f398dc5903c9519919b987d05a142eb246_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0f8d7b8b2adf1440daa6e584c01f8a60fe0952805eae3b0475a6442c49e1b6b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f8d7b8b2adf1440daa6e584c01f8a60fe0952805eae3b0475a6442c49e1b6b3->enter($__internal_0f8d7b8b2adf1440daa6e584c01f8a60fe0952805eae3b0475a6442c49e1b6b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_491836d57e5ccb552ddb0da90dd61c792e9a5c8585d91769cd6b8169b0089f70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_491836d57e5ccb552ddb0da90dd61c792e9a5c8585d91769cd6b8169b0089f70->enter($__internal_491836d57e5ccb552ddb0da90dd61c792e9a5c8585d91769cd6b8169b0089f70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_491836d57e5ccb552ddb0da90dd61c792e9a5c8585d91769cd6b8169b0089f70->leave($__internal_491836d57e5ccb552ddb0da90dd61c792e9a5c8585d91769cd6b8169b0089f70_prof);

        
        $__internal_0f8d7b8b2adf1440daa6e584c01f8a60fe0952805eae3b0475a6442c49e1b6b3->leave($__internal_0f8d7b8b2adf1440daa6e584c01f8a60fe0952805eae3b0475a6442c49e1b6b3_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/new.html.twig";
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
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/new.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\app\\Resources\\FOSUserBundle\\views\\Group\\new.html.twig");
    }
}
