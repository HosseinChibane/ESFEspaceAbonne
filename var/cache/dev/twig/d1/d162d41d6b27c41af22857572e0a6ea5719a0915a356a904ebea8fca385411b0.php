<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_6af58d5e8928c0d2ad6c4fe42742140e92fbbf66f530df390e1204c0564e2012 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
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
        $__internal_a1099b39f477ed30550282141e04e66484492b59976b77fc17d9902ad0a0a526 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1099b39f477ed30550282141e04e66484492b59976b77fc17d9902ad0a0a526->enter($__internal_a1099b39f477ed30550282141e04e66484492b59976b77fc17d9902ad0a0a526_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $__internal_95e685534b37bad1ac6062cb055796bd6e60c4b2428e97f01c55dacad76a0850 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95e685534b37bad1ac6062cb055796bd6e60c4b2428e97f01c55dacad76a0850->enter($__internal_95e685534b37bad1ac6062cb055796bd6e60c4b2428e97f01c55dacad76a0850_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a1099b39f477ed30550282141e04e66484492b59976b77fc17d9902ad0a0a526->leave($__internal_a1099b39f477ed30550282141e04e66484492b59976b77fc17d9902ad0a0a526_prof);

        
        $__internal_95e685534b37bad1ac6062cb055796bd6e60c4b2428e97f01c55dacad76a0850->leave($__internal_95e685534b37bad1ac6062cb055796bd6e60c4b2428e97f01c55dacad76a0850_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cf349adf70a898e329914a2f51c9a8ec687a3ad57bba05e6f64c427e0542c913 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf349adf70a898e329914a2f51c9a8ec687a3ad57bba05e6f64c427e0542c913->enter($__internal_cf349adf70a898e329914a2f51c9a8ec687a3ad57bba05e6f64c427e0542c913_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_8df856694007e4b36111a407e170711e9210962a3feb52ace7293806ec9d0ec7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8df856694007e4b36111a407e170711e9210962a3feb52ace7293806ec9d0ec7->enter($__internal_8df856694007e4b36111a407e170711e9210962a3feb52ace7293806ec9d0ec7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_8df856694007e4b36111a407e170711e9210962a3feb52ace7293806ec9d0ec7->leave($__internal_8df856694007e4b36111a407e170711e9210962a3feb52ace7293806ec9d0ec7_prof);

        
        $__internal_cf349adf70a898e329914a2f51c9a8ec687a3ad57bba05e6f64c427e0542c913->leave($__internal_cf349adf70a898e329914a2f51c9a8ec687a3ad57bba05e6f64c427e0542c913_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
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
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Resetting/request.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\app\\Resources\\FOSUserBundle\\views\\Resetting\\request.html.twig");
    }
}
