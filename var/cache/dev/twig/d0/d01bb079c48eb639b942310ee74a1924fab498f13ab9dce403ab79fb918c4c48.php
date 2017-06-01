<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_bdb560ca71e435e0b88cfe7a690e5faa5deff9e7e12608602edb4419ea96fc92 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_13d61ebd9e17a61eed0b8ea700c5b26ef6c6dba5aac70ca7d69c6d9abb72761b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13d61ebd9e17a61eed0b8ea700c5b26ef6c6dba5aac70ca7d69c6d9abb72761b->enter($__internal_13d61ebd9e17a61eed0b8ea700c5b26ef6c6dba5aac70ca7d69c6d9abb72761b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $__internal_8733c2325160ab0f5c9f593f63221f0df2e41bd9a45bf82266dda24f452e7c95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8733c2325160ab0f5c9f593f63221f0df2e41bd9a45bf82266dda24f452e7c95->enter($__internal_8733c2325160ab0f5c9f593f63221f0df2e41bd9a45bf82266dda24f452e7c95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_13d61ebd9e17a61eed0b8ea700c5b26ef6c6dba5aac70ca7d69c6d9abb72761b->leave($__internal_13d61ebd9e17a61eed0b8ea700c5b26ef6c6dba5aac70ca7d69c6d9abb72761b_prof);

        
        $__internal_8733c2325160ab0f5c9f593f63221f0df2e41bd9a45bf82266dda24f452e7c95->leave($__internal_8733c2325160ab0f5c9f593f63221f0df2e41bd9a45bf82266dda24f452e7c95_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e512699da1b9249c41deaacb9868bbcad10d52e9a70858fd7eaf4f2ee60158c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e512699da1b9249c41deaacb9868bbcad10d52e9a70858fd7eaf4f2ee60158c1->enter($__internal_e512699da1b9249c41deaacb9868bbcad10d52e9a70858fd7eaf4f2ee60158c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_4a9efa58ff4326322c2dd93162e83a90bf333b18131a12ee4b3571d8e33968a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a9efa58ff4326322c2dd93162e83a90bf333b18131a12ee4b3571d8e33968a0->enter($__internal_4a9efa58ff4326322c2dd93162e83a90bf333b18131a12ee4b3571d8e33968a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_4a9efa58ff4326322c2dd93162e83a90bf333b18131a12ee4b3571d8e33968a0->leave($__internal_4a9efa58ff4326322c2dd93162e83a90bf333b18131a12ee4b3571d8e33968a0_prof);

        
        $__internal_e512699da1b9249c41deaacb9868bbcad10d52e9a70858fd7eaf4f2ee60158c1->leave($__internal_e512699da1b9249c41deaacb9868bbcad10d52e9a70858fd7eaf4f2ee60158c1_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
", "FOSUserBundle:Profile:edit.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\app/Resources/FOSUserBundle/views/Profile/edit.html.twig");
    }
}
