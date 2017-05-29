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
        $__internal_b54c26bbcd48b4038f3d07f4c651bc324c9ca8597d801954f3c442ff14df0df6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b54c26bbcd48b4038f3d07f4c651bc324c9ca8597d801954f3c442ff14df0df6->enter($__internal_b54c26bbcd48b4038f3d07f4c651bc324c9ca8597d801954f3c442ff14df0df6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $__internal_b47d13c16bb000a7639840e3ec481e03e2841451db75826db4b4841efd453d8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b47d13c16bb000a7639840e3ec481e03e2841451db75826db4b4841efd453d8a->enter($__internal_b47d13c16bb000a7639840e3ec481e03e2841451db75826db4b4841efd453d8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b54c26bbcd48b4038f3d07f4c651bc324c9ca8597d801954f3c442ff14df0df6->leave($__internal_b54c26bbcd48b4038f3d07f4c651bc324c9ca8597d801954f3c442ff14df0df6_prof);

        
        $__internal_b47d13c16bb000a7639840e3ec481e03e2841451db75826db4b4841efd453d8a->leave($__internal_b47d13c16bb000a7639840e3ec481e03e2841451db75826db4b4841efd453d8a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8fa5d8f9e2de21272ebb3baa3f3de19a6894d5f43acd0c7bbe636d4678a7c49f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8fa5d8f9e2de21272ebb3baa3f3de19a6894d5f43acd0c7bbe636d4678a7c49f->enter($__internal_8fa5d8f9e2de21272ebb3baa3f3de19a6894d5f43acd0c7bbe636d4678a7c49f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_67e3f876034e3a426935b9febdd00bba293218d32c63acfb0e36c74371a0c8d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67e3f876034e3a426935b9febdd00bba293218d32c63acfb0e36c74371a0c8d5->enter($__internal_67e3f876034e3a426935b9febdd00bba293218d32c63acfb0e36c74371a0c8d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_67e3f876034e3a426935b9febdd00bba293218d32c63acfb0e36c74371a0c8d5->leave($__internal_67e3f876034e3a426935b9febdd00bba293218d32c63acfb0e36c74371a0c8d5_prof);

        
        $__internal_8fa5d8f9e2de21272ebb3baa3f3de19a6894d5f43acd0c7bbe636d4678a7c49f->leave($__internal_8fa5d8f9e2de21272ebb3baa3f3de19a6894d5f43acd0c7bbe636d4678a7c49f_prof);

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
