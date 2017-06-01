<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_10211c20825dbe7fc481b4965a9ce9b0d05759fa80bb1acd158f708b85643074 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_2cb7892ba0d9d3ea2b6c4b2cf60c7578e568050eb95ab6fd48d484a316cf4e3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2cb7892ba0d9d3ea2b6c4b2cf60c7578e568050eb95ab6fd48d484a316cf4e3e->enter($__internal_2cb7892ba0d9d3ea2b6c4b2cf60c7578e568050eb95ab6fd48d484a316cf4e3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_7dcfd942b77c60c5f8d59c0b2d6b1e499011db25b52beb734d5707c13e8f4b16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7dcfd942b77c60c5f8d59c0b2d6b1e499011db25b52beb734d5707c13e8f4b16->enter($__internal_7dcfd942b77c60c5f8d59c0b2d6b1e499011db25b52beb734d5707c13e8f4b16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2cb7892ba0d9d3ea2b6c4b2cf60c7578e568050eb95ab6fd48d484a316cf4e3e->leave($__internal_2cb7892ba0d9d3ea2b6c4b2cf60c7578e568050eb95ab6fd48d484a316cf4e3e_prof);

        
        $__internal_7dcfd942b77c60c5f8d59c0b2d6b1e499011db25b52beb734d5707c13e8f4b16->leave($__internal_7dcfd942b77c60c5f8d59c0b2d6b1e499011db25b52beb734d5707c13e8f4b16_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cbb3de9a5b3618c917643209c9284aa264131e763687740699fa36547e6417ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbb3de9a5b3618c917643209c9284aa264131e763687740699fa36547e6417ea->enter($__internal_cbb3de9a5b3618c917643209c9284aa264131e763687740699fa36547e6417ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_6fb57c353132b387bae774a611eef3d5e4d38715d23a93022e1315276475b4d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fb57c353132b387bae774a611eef3d5e4d38715d23a93022e1315276475b4d0->enter($__internal_6fb57c353132b387bae774a611eef3d5e4d38715d23a93022e1315276475b4d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_6fb57c353132b387bae774a611eef3d5e4d38715d23a93022e1315276475b4d0->leave($__internal_6fb57c353132b387bae774a611eef3d5e4d38715d23a93022e1315276475b4d0_prof);

        
        $__internal_cbb3de9a5b3618c917643209c9284aa264131e763687740699fa36547e6417ea->leave($__internal_cbb3de9a5b3618c917643209c9284aa264131e763687740699fa36547e6417ea_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\app/Resources/FOSUserBundle/views/Group/edit.html.twig");
    }
}
