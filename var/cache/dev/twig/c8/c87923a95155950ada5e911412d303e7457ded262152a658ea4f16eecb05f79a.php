<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_294c327ef2c5bac2b52fa021297650215a2863323c82c80e5863a490037cf4b5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
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
        $__internal_ef535e6a62dc40ea966b4fc6836a9a43a1212724a56f4baefa7fae81a9b081bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef535e6a62dc40ea966b4fc6836a9a43a1212724a56f4baefa7fae81a9b081bb->enter($__internal_ef535e6a62dc40ea966b4fc6836a9a43a1212724a56f4baefa7fae81a9b081bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $__internal_262e8c53b2a39c51192cea915b568cbf9f9542f74405c1942ab7e9379b416870 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_262e8c53b2a39c51192cea915b568cbf9f9542f74405c1942ab7e9379b416870->enter($__internal_262e8c53b2a39c51192cea915b568cbf9f9542f74405c1942ab7e9379b416870_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ef535e6a62dc40ea966b4fc6836a9a43a1212724a56f4baefa7fae81a9b081bb->leave($__internal_ef535e6a62dc40ea966b4fc6836a9a43a1212724a56f4baefa7fae81a9b081bb_prof);

        
        $__internal_262e8c53b2a39c51192cea915b568cbf9f9542f74405c1942ab7e9379b416870->leave($__internal_262e8c53b2a39c51192cea915b568cbf9f9542f74405c1942ab7e9379b416870_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2b46c60de6fe69fa15084b3598acd6ad1471cc45d2c98b7725600c3555594032 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b46c60de6fe69fa15084b3598acd6ad1471cc45d2c98b7725600c3555594032->enter($__internal_2b46c60de6fe69fa15084b3598acd6ad1471cc45d2c98b7725600c3555594032_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_4bcca5722ff96c19c4d8bbf29feb3865cedbae2623402627bb7d468f17bc5c2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bcca5722ff96c19c4d8bbf29feb3865cedbae2623402627bb7d468f17bc5c2f->enter($__internal_4bcca5722ff96c19c4d8bbf29feb3865cedbae2623402627bb7d468f17bc5c2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_4bcca5722ff96c19c4d8bbf29feb3865cedbae2623402627bb7d468f17bc5c2f->leave($__internal_4bcca5722ff96c19c4d8bbf29feb3865cedbae2623402627bb7d468f17bc5c2f_prof);

        
        $__internal_2b46c60de6fe69fa15084b3598acd6ad1471cc45d2c98b7725600c3555594032->leave($__internal_2b46c60de6fe69fa15084b3598acd6ad1471cc45d2c98b7725600c3555594032_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
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
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Profile/edit.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\app\\Resources\\FOSUserBundle\\views\\Profile\\edit.html.twig");
    }
}
