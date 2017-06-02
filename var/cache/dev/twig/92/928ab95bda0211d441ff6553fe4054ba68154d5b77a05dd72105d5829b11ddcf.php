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
        $__internal_8011857f18d73f0eac52471a5403525ae3a67a188bab2a8c11173dab39011ca0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8011857f18d73f0eac52471a5403525ae3a67a188bab2a8c11173dab39011ca0->enter($__internal_8011857f18d73f0eac52471a5403525ae3a67a188bab2a8c11173dab39011ca0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $__internal_be2a620a894517ef172acbd659e32e727d6ae4c6dd0a81c376af137382df94f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be2a620a894517ef172acbd659e32e727d6ae4c6dd0a81c376af137382df94f7->enter($__internal_be2a620a894517ef172acbd659e32e727d6ae4c6dd0a81c376af137382df94f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8011857f18d73f0eac52471a5403525ae3a67a188bab2a8c11173dab39011ca0->leave($__internal_8011857f18d73f0eac52471a5403525ae3a67a188bab2a8c11173dab39011ca0_prof);

        
        $__internal_be2a620a894517ef172acbd659e32e727d6ae4c6dd0a81c376af137382df94f7->leave($__internal_be2a620a894517ef172acbd659e32e727d6ae4c6dd0a81c376af137382df94f7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_954cb90a233571796e76b29303b1c2af9bcf7fb7e7f51549d64e5146db079d71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_954cb90a233571796e76b29303b1c2af9bcf7fb7e7f51549d64e5146db079d71->enter($__internal_954cb90a233571796e76b29303b1c2af9bcf7fb7e7f51549d64e5146db079d71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_826a6fb1e3e42b7bb4b5a2b28fc5d882a1fa3a21107679972189285c4be684e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_826a6fb1e3e42b7bb4b5a2b28fc5d882a1fa3a21107679972189285c4be684e7->enter($__internal_826a6fb1e3e42b7bb4b5a2b28fc5d882a1fa3a21107679972189285c4be684e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_826a6fb1e3e42b7bb4b5a2b28fc5d882a1fa3a21107679972189285c4be684e7->leave($__internal_826a6fb1e3e42b7bb4b5a2b28fc5d882a1fa3a21107679972189285c4be684e7_prof);

        
        $__internal_954cb90a233571796e76b29303b1c2af9bcf7fb7e7f51549d64e5146db079d71->leave($__internal_954cb90a233571796e76b29303b1c2af9bcf7fb7e7f51549d64e5146db079d71_prof);

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
