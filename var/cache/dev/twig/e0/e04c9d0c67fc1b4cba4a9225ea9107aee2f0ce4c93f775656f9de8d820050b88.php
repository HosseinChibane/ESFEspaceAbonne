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
        $__internal_aaf5ab4bb3f8dbff5cb42f416f23f85e361db7b51346037a8822cf59beee319a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aaf5ab4bb3f8dbff5cb42f416f23f85e361db7b51346037a8822cf59beee319a->enter($__internal_aaf5ab4bb3f8dbff5cb42f416f23f85e361db7b51346037a8822cf59beee319a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $__internal_b6273283ead9e7767fceb449540637819408af25a264c68e58f9005ae0ffecf9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6273283ead9e7767fceb449540637819408af25a264c68e58f9005ae0ffecf9->enter($__internal_b6273283ead9e7767fceb449540637819408af25a264c68e58f9005ae0ffecf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aaf5ab4bb3f8dbff5cb42f416f23f85e361db7b51346037a8822cf59beee319a->leave($__internal_aaf5ab4bb3f8dbff5cb42f416f23f85e361db7b51346037a8822cf59beee319a_prof);

        
        $__internal_b6273283ead9e7767fceb449540637819408af25a264c68e58f9005ae0ffecf9->leave($__internal_b6273283ead9e7767fceb449540637819408af25a264c68e58f9005ae0ffecf9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fdff4b711b7b9a8f6a6c9243594f65ebbb9e6afc1f120dbac180973d944ea28d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fdff4b711b7b9a8f6a6c9243594f65ebbb9e6afc1f120dbac180973d944ea28d->enter($__internal_fdff4b711b7b9a8f6a6c9243594f65ebbb9e6afc1f120dbac180973d944ea28d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_bb45ba898cf9e70b193a0154ff398eb7fccf3ad8f7f3e9fdd9a339577352ad9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb45ba898cf9e70b193a0154ff398eb7fccf3ad8f7f3e9fdd9a339577352ad9d->enter($__internal_bb45ba898cf9e70b193a0154ff398eb7fccf3ad8f7f3e9fdd9a339577352ad9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_bb45ba898cf9e70b193a0154ff398eb7fccf3ad8f7f3e9fdd9a339577352ad9d->leave($__internal_bb45ba898cf9e70b193a0154ff398eb7fccf3ad8f7f3e9fdd9a339577352ad9d_prof);

        
        $__internal_fdff4b711b7b9a8f6a6c9243594f65ebbb9e6afc1f120dbac180973d944ea28d->leave($__internal_fdff4b711b7b9a8f6a6c9243594f65ebbb9e6afc1f120dbac180973d944ea28d_prof);

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
