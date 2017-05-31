<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_ec60a874105fd08413a5ec4695d97ffc0b43431952b94463f9ef14f9a9df6134 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
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
        $__internal_ca242b8bf594363145b7b972ce55c37af6c758b8da848c0e943f4391673098f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca242b8bf594363145b7b972ce55c37af6c758b8da848c0e943f4391673098f4->enter($__internal_ca242b8bf594363145b7b972ce55c37af6c758b8da848c0e943f4391673098f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $__internal_125066b4a7a7b5b0e9fa09332da2d64b8545f6e180392fd15c2300b594228438 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_125066b4a7a7b5b0e9fa09332da2d64b8545f6e180392fd15c2300b594228438->enter($__internal_125066b4a7a7b5b0e9fa09332da2d64b8545f6e180392fd15c2300b594228438_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ca242b8bf594363145b7b972ce55c37af6c758b8da848c0e943f4391673098f4->leave($__internal_ca242b8bf594363145b7b972ce55c37af6c758b8da848c0e943f4391673098f4_prof);

        
        $__internal_125066b4a7a7b5b0e9fa09332da2d64b8545f6e180392fd15c2300b594228438->leave($__internal_125066b4a7a7b5b0e9fa09332da2d64b8545f6e180392fd15c2300b594228438_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_55f787a8087008d5044fc491ead31d373c853279093bed0cbe7020ad7af583ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55f787a8087008d5044fc491ead31d373c853279093bed0cbe7020ad7af583ae->enter($__internal_55f787a8087008d5044fc491ead31d373c853279093bed0cbe7020ad7af583ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_4bde634474161afdc3affd29ac2d3a8b70dd282d0117f0d38a468f4131f0b47f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bde634474161afdc3affd29ac2d3a8b70dd282d0117f0d38a468f4131f0b47f->enter($__internal_4bde634474161afdc3affd29ac2d3a8b70dd282d0117f0d38a468f4131f0b47f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_4bde634474161afdc3affd29ac2d3a8b70dd282d0117f0d38a468f4131f0b47f->leave($__internal_4bde634474161afdc3affd29ac2d3a8b70dd282d0117f0d38a468f4131f0b47f_prof);

        
        $__internal_55f787a8087008d5044fc491ead31d373c853279093bed0cbe7020ad7af583ae->leave($__internal_55f787a8087008d5044fc491ead31d373c853279093bed0cbe7020ad7af583ae_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
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
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Profile/show.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\app\\Resources\\FOSUserBundle\\views\\Profile\\show.html.twig");
    }
}
