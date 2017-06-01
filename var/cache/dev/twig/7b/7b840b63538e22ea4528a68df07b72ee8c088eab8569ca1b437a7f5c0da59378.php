<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_de697eef40675d6be258a998bba48f274e00cddd38cc7bb49c0fefdeedb46cd2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_559eadda7aa99903aa3733de6ec8e22abb9b1d9ecbfbcc43743ff8d2f9858b7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_559eadda7aa99903aa3733de6ec8e22abb9b1d9ecbfbcc43743ff8d2f9858b7f->enter($__internal_559eadda7aa99903aa3733de6ec8e22abb9b1d9ecbfbcc43743ff8d2f9858b7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_86a65ac45a6ca341bb0ad2930b6841c76490abde8080dd0b3a18bc04b669211e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86a65ac45a6ca341bb0ad2930b6841c76490abde8080dd0b3a18bc04b669211e->enter($__internal_86a65ac45a6ca341bb0ad2930b6841c76490abde8080dd0b3a18bc04b669211e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_559eadda7aa99903aa3733de6ec8e22abb9b1d9ecbfbcc43743ff8d2f9858b7f->leave($__internal_559eadda7aa99903aa3733de6ec8e22abb9b1d9ecbfbcc43743ff8d2f9858b7f_prof);

        
        $__internal_86a65ac45a6ca341bb0ad2930b6841c76490abde8080dd0b3a18bc04b669211e->leave($__internal_86a65ac45a6ca341bb0ad2930b6841c76490abde8080dd0b3a18bc04b669211e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a593425d4ba1501cdb3b698f096020e8e33744abaa04fa1b1d23c72ef27eeecf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a593425d4ba1501cdb3b698f096020e8e33744abaa04fa1b1d23c72ef27eeecf->enter($__internal_a593425d4ba1501cdb3b698f096020e8e33744abaa04fa1b1d23c72ef27eeecf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_63077114a179093862b17973d9f429c71795e65a2059dc619bd27e0542182b81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63077114a179093862b17973d9f429c71795e65a2059dc619bd27e0542182b81->enter($__internal_63077114a179093862b17973d9f429c71795e65a2059dc619bd27e0542182b81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_63077114a179093862b17973d9f429c71795e65a2059dc619bd27e0542182b81->leave($__internal_63077114a179093862b17973d9f429c71795e65a2059dc619bd27e0542182b81_prof);

        
        $__internal_a593425d4ba1501cdb3b698f096020e8e33744abaa04fa1b1d23c72ef27eeecf->leave($__internal_a593425d4ba1501cdb3b698f096020e8e33744abaa04fa1b1d23c72ef27eeecf_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
", "FOSUserBundle:Group:new.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\app/Resources/FOSUserBundle/views/Group/new.html.twig");
    }
}
