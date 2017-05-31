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
        $__internal_af4420b20b284765f8f9359d4ab9ab5ec0d52f1e8f3d918aa8e1d9efce99bd48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af4420b20b284765f8f9359d4ab9ab5ec0d52f1e8f3d918aa8e1d9efce99bd48->enter($__internal_af4420b20b284765f8f9359d4ab9ab5ec0d52f1e8f3d918aa8e1d9efce99bd48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_6cc8d497cf17eb5a0d7ca1393248eba8c988624b5b31c8f2a05d004bdf24934b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cc8d497cf17eb5a0d7ca1393248eba8c988624b5b31c8f2a05d004bdf24934b->enter($__internal_6cc8d497cf17eb5a0d7ca1393248eba8c988624b5b31c8f2a05d004bdf24934b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_af4420b20b284765f8f9359d4ab9ab5ec0d52f1e8f3d918aa8e1d9efce99bd48->leave($__internal_af4420b20b284765f8f9359d4ab9ab5ec0d52f1e8f3d918aa8e1d9efce99bd48_prof);

        
        $__internal_6cc8d497cf17eb5a0d7ca1393248eba8c988624b5b31c8f2a05d004bdf24934b->leave($__internal_6cc8d497cf17eb5a0d7ca1393248eba8c988624b5b31c8f2a05d004bdf24934b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6b44a9d9de2aaf1c6ec53d0390783fce54668fccdbb2504b31878643223ecbd0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b44a9d9de2aaf1c6ec53d0390783fce54668fccdbb2504b31878643223ecbd0->enter($__internal_6b44a9d9de2aaf1c6ec53d0390783fce54668fccdbb2504b31878643223ecbd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_6761d989441257b89133aa6e3974e0a7cf9b8f73aea8782240529ae2f9f5cd64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6761d989441257b89133aa6e3974e0a7cf9b8f73aea8782240529ae2f9f5cd64->enter($__internal_6761d989441257b89133aa6e3974e0a7cf9b8f73aea8782240529ae2f9f5cd64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_6761d989441257b89133aa6e3974e0a7cf9b8f73aea8782240529ae2f9f5cd64->leave($__internal_6761d989441257b89133aa6e3974e0a7cf9b8f73aea8782240529ae2f9f5cd64_prof);

        
        $__internal_6b44a9d9de2aaf1c6ec53d0390783fce54668fccdbb2504b31878643223ecbd0->leave($__internal_6b44a9d9de2aaf1c6ec53d0390783fce54668fccdbb2504b31878643223ecbd0_prof);

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
