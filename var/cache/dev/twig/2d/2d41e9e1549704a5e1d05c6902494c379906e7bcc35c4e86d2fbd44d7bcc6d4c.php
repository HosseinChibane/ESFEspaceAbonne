<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_9eac273453083f3e13c23c24f192f40bc9848348643f990e228b3eaaf0b9c0cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_8cbf2a89428afdc7de75bae9d0f07234d0e49656fd0a886dafab2b08d878b745 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8cbf2a89428afdc7de75bae9d0f07234d0e49656fd0a886dafab2b08d878b745->enter($__internal_8cbf2a89428afdc7de75bae9d0f07234d0e49656fd0a886dafab2b08d878b745_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $__internal_046ee4327d16402f53d3b8a62976fd990c45f62b4931872fa48a876cc6fc5da4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_046ee4327d16402f53d3b8a62976fd990c45f62b4931872fa48a876cc6fc5da4->enter($__internal_046ee4327d16402f53d3b8a62976fd990c45f62b4931872fa48a876cc6fc5da4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8cbf2a89428afdc7de75bae9d0f07234d0e49656fd0a886dafab2b08d878b745->leave($__internal_8cbf2a89428afdc7de75bae9d0f07234d0e49656fd0a886dafab2b08d878b745_prof);

        
        $__internal_046ee4327d16402f53d3b8a62976fd990c45f62b4931872fa48a876cc6fc5da4->leave($__internal_046ee4327d16402f53d3b8a62976fd990c45f62b4931872fa48a876cc6fc5da4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e6b323bc6c64beb58a67e7a48a40de42ebbdfdcba77f8796e074f0cde5b07495 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6b323bc6c64beb58a67e7a48a40de42ebbdfdcba77f8796e074f0cde5b07495->enter($__internal_e6b323bc6c64beb58a67e7a48a40de42ebbdfdcba77f8796e074f0cde5b07495_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_f440f5dd71b18b86ff52f412740e23d5681a3fa2dc2246b51728081ab5f7ec3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f440f5dd71b18b86ff52f412740e23d5681a3fa2dc2246b51728081ab5f7ec3a->enter($__internal_f440f5dd71b18b86ff52f412740e23d5681a3fa2dc2246b51728081ab5f7ec3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_f440f5dd71b18b86ff52f412740e23d5681a3fa2dc2246b51728081ab5f7ec3a->leave($__internal_f440f5dd71b18b86ff52f412740e23d5681a3fa2dc2246b51728081ab5f7ec3a_prof);

        
        $__internal_e6b323bc6c64beb58a67e7a48a40de42ebbdfdcba77f8796e074f0cde5b07495->leave($__internal_e6b323bc6c64beb58a67e7a48a40de42ebbdfdcba77f8796e074f0cde5b07495_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
", "FOSUserBundle:Profile:show.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\app/Resources/FOSUserBundle/views/Profile/show.html.twig");
    }
}
