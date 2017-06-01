<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_0371bd13a60bd8882bc96a0c40e3ea62a9eb96d8d1a59e3bd9f19257d4614bcf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_a27fbdc2713dc8da5a3b9de4192434cd50fb2e585943a1e51006633d93b0d1c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a27fbdc2713dc8da5a3b9de4192434cd50fb2e585943a1e51006633d93b0d1c4->enter($__internal_a27fbdc2713dc8da5a3b9de4192434cd50fb2e585943a1e51006633d93b0d1c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $__internal_7ba7834ff1f6c176981bfdac6877e389d83d0d54cdf2e5132deb18af36ed28af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ba7834ff1f6c176981bfdac6877e389d83d0d54cdf2e5132deb18af36ed28af->enter($__internal_7ba7834ff1f6c176981bfdac6877e389d83d0d54cdf2e5132deb18af36ed28af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a27fbdc2713dc8da5a3b9de4192434cd50fb2e585943a1e51006633d93b0d1c4->leave($__internal_a27fbdc2713dc8da5a3b9de4192434cd50fb2e585943a1e51006633d93b0d1c4_prof);

        
        $__internal_7ba7834ff1f6c176981bfdac6877e389d83d0d54cdf2e5132deb18af36ed28af->leave($__internal_7ba7834ff1f6c176981bfdac6877e389d83d0d54cdf2e5132deb18af36ed28af_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7290127a34f05d9b755b32911f9f0cdda71f902b4c5cf8aa8464d91b58791b8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7290127a34f05d9b755b32911f9f0cdda71f902b4c5cf8aa8464d91b58791b8f->enter($__internal_7290127a34f05d9b755b32911f9f0cdda71f902b4c5cf8aa8464d91b58791b8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_3a3ed00e99a3d035b3666164aa8994333087010be1786e1e0aca6445a15c664c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a3ed00e99a3d035b3666164aa8994333087010be1786e1e0aca6445a15c664c->enter($__internal_3a3ed00e99a3d035b3666164aa8994333087010be1786e1e0aca6445a15c664c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_3a3ed00e99a3d035b3666164aa8994333087010be1786e1e0aca6445a15c664c->leave($__internal_3a3ed00e99a3d035b3666164aa8994333087010be1786e1e0aca6445a15c664c_prof);

        
        $__internal_7290127a34f05d9b755b32911f9f0cdda71f902b4c5cf8aa8464d91b58791b8f->leave($__internal_7290127a34f05d9b755b32911f9f0cdda71f902b4c5cf8aa8464d91b58791b8f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
", "FOSUserBundle:Group:list.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\app/Resources/FOSUserBundle/views/Group/list.html.twig");
    }
}
