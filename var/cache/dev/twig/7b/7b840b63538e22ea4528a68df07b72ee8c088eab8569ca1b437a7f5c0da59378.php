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
        $__internal_e131f33cecd5349d7331175d672465b7dbe3cf6acb89ee30453429467d249222 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e131f33cecd5349d7331175d672465b7dbe3cf6acb89ee30453429467d249222->enter($__internal_e131f33cecd5349d7331175d672465b7dbe3cf6acb89ee30453429467d249222_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_17cc7117aa1f6d6be83d64c83da619c7839bc1340c88fb93b85c200f2398e16d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17cc7117aa1f6d6be83d64c83da619c7839bc1340c88fb93b85c200f2398e16d->enter($__internal_17cc7117aa1f6d6be83d64c83da619c7839bc1340c88fb93b85c200f2398e16d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e131f33cecd5349d7331175d672465b7dbe3cf6acb89ee30453429467d249222->leave($__internal_e131f33cecd5349d7331175d672465b7dbe3cf6acb89ee30453429467d249222_prof);

        
        $__internal_17cc7117aa1f6d6be83d64c83da619c7839bc1340c88fb93b85c200f2398e16d->leave($__internal_17cc7117aa1f6d6be83d64c83da619c7839bc1340c88fb93b85c200f2398e16d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_08d73e89b02e46f5ad0032e2001a7055e3833844a82faffbc49c601fd1990a3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08d73e89b02e46f5ad0032e2001a7055e3833844a82faffbc49c601fd1990a3b->enter($__internal_08d73e89b02e46f5ad0032e2001a7055e3833844a82faffbc49c601fd1990a3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_b1a9056295a7d98012be7263bcae3da787cdfd2300b521d30c0972424b31cb4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1a9056295a7d98012be7263bcae3da787cdfd2300b521d30c0972424b31cb4e->enter($__internal_b1a9056295a7d98012be7263bcae3da787cdfd2300b521d30c0972424b31cb4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_b1a9056295a7d98012be7263bcae3da787cdfd2300b521d30c0972424b31cb4e->leave($__internal_b1a9056295a7d98012be7263bcae3da787cdfd2300b521d30c0972424b31cb4e_prof);

        
        $__internal_08d73e89b02e46f5ad0032e2001a7055e3833844a82faffbc49c601fd1990a3b->leave($__internal_08d73e89b02e46f5ad0032e2001a7055e3833844a82faffbc49c601fd1990a3b_prof);

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
