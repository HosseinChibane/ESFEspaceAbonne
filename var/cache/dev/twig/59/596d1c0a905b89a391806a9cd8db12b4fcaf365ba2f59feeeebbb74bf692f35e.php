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
        $__internal_ab31e271048c7a7a52ac241cfb5320b79beaae929df119e769bf762a30a49199 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab31e271048c7a7a52ac241cfb5320b79beaae929df119e769bf762a30a49199->enter($__internal_ab31e271048c7a7a52ac241cfb5320b79beaae929df119e769bf762a30a49199_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_6d22d6b4c8f61d32908f7fa81de80f14f39682b633ac60d9be6459402b467346 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d22d6b4c8f61d32908f7fa81de80f14f39682b633ac60d9be6459402b467346->enter($__internal_6d22d6b4c8f61d32908f7fa81de80f14f39682b633ac60d9be6459402b467346_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ab31e271048c7a7a52ac241cfb5320b79beaae929df119e769bf762a30a49199->leave($__internal_ab31e271048c7a7a52ac241cfb5320b79beaae929df119e769bf762a30a49199_prof);

        
        $__internal_6d22d6b4c8f61d32908f7fa81de80f14f39682b633ac60d9be6459402b467346->leave($__internal_6d22d6b4c8f61d32908f7fa81de80f14f39682b633ac60d9be6459402b467346_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f7b27a2d55448e3f254da719197d73292fac02f55a8b8a5b800bdcf7fbf39b2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7b27a2d55448e3f254da719197d73292fac02f55a8b8a5b800bdcf7fbf39b2c->enter($__internal_f7b27a2d55448e3f254da719197d73292fac02f55a8b8a5b800bdcf7fbf39b2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_d25f49d3698b9ca5d6350356bc5d555882ea7ab79b29e1d17722f96a431a7b99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d25f49d3698b9ca5d6350356bc5d555882ea7ab79b29e1d17722f96a431a7b99->enter($__internal_d25f49d3698b9ca5d6350356bc5d555882ea7ab79b29e1d17722f96a431a7b99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_d25f49d3698b9ca5d6350356bc5d555882ea7ab79b29e1d17722f96a431a7b99->leave($__internal_d25f49d3698b9ca5d6350356bc5d555882ea7ab79b29e1d17722f96a431a7b99_prof);

        
        $__internal_f7b27a2d55448e3f254da719197d73292fac02f55a8b8a5b800bdcf7fbf39b2c->leave($__internal_f7b27a2d55448e3f254da719197d73292fac02f55a8b8a5b800bdcf7fbf39b2c_prof);

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
