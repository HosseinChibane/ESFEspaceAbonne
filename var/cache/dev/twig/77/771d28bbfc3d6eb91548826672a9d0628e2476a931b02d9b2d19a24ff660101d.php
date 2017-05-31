<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_4e45ec3581ae4645c1a35829c95ac9490ff4d77734490c2ba094e9e590d4f358 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_2bed5a64f3d0cd0e80d2c91697e53f0d3cdbfae135c3c3dbfffb378a2344abc1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2bed5a64f3d0cd0e80d2c91697e53f0d3cdbfae135c3c3dbfffb378a2344abc1->enter($__internal_2bed5a64f3d0cd0e80d2c91697e53f0d3cdbfae135c3c3dbfffb378a2344abc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $__internal_5893899157d9443e05ed333e3d26fbf5a00d6c02ba1c9fe2d23d54fb90858352 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5893899157d9443e05ed333e3d26fbf5a00d6c02ba1c9fe2d23d54fb90858352->enter($__internal_5893899157d9443e05ed333e3d26fbf5a00d6c02ba1c9fe2d23d54fb90858352_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2bed5a64f3d0cd0e80d2c91697e53f0d3cdbfae135c3c3dbfffb378a2344abc1->leave($__internal_2bed5a64f3d0cd0e80d2c91697e53f0d3cdbfae135c3c3dbfffb378a2344abc1_prof);

        
        $__internal_5893899157d9443e05ed333e3d26fbf5a00d6c02ba1c9fe2d23d54fb90858352->leave($__internal_5893899157d9443e05ed333e3d26fbf5a00d6c02ba1c9fe2d23d54fb90858352_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_562378a47f9753a2506559639a0c5eb683816a85ff1a80ecc5b1a5d43bb7f3c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_562378a47f9753a2506559639a0c5eb683816a85ff1a80ecc5b1a5d43bb7f3c6->enter($__internal_562378a47f9753a2506559639a0c5eb683816a85ff1a80ecc5b1a5d43bb7f3c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_1a8d66caf0528e279a9e037fa714de9adcbca9f9f30dc598d061cef5de23f4b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a8d66caf0528e279a9e037fa714de9adcbca9f9f30dc598d061cef5de23f4b3->enter($__internal_1a8d66caf0528e279a9e037fa714de9adcbca9f9f30dc598d061cef5de23f4b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_1a8d66caf0528e279a9e037fa714de9adcbca9f9f30dc598d061cef5de23f4b3->leave($__internal_1a8d66caf0528e279a9e037fa714de9adcbca9f9f30dc598d061cef5de23f4b3_prof);

        
        $__internal_562378a47f9753a2506559639a0c5eb683816a85ff1a80ecc5b1a5d43bb7f3c6->leave($__internal_562378a47f9753a2506559639a0c5eb683816a85ff1a80ecc5b1a5d43bb7f3c6_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\app/Resources/FOSUserBundle/views/Registration/register.html.twig");
    }
}
