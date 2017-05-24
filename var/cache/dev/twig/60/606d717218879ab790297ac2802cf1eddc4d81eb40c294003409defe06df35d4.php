<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_91e074fe9721a7a54826d1ff9d7dfe8df7bc5c18d05643ad2ed01e06a90393e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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
        $__internal_d16f9c294c6dd073f5581df267c6340161d1c0572a8f6b8ee850d4e088e2588e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d16f9c294c6dd073f5581df267c6340161d1c0572a8f6b8ee850d4e088e2588e->enter($__internal_d16f9c294c6dd073f5581df267c6340161d1c0572a8f6b8ee850d4e088e2588e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $__internal_b2b6efa82347e6997e320b09b9e3894bb18206a12d71accaff28736cf894bcba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2b6efa82347e6997e320b09b9e3894bb18206a12d71accaff28736cf894bcba->enter($__internal_b2b6efa82347e6997e320b09b9e3894bb18206a12d71accaff28736cf894bcba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d16f9c294c6dd073f5581df267c6340161d1c0572a8f6b8ee850d4e088e2588e->leave($__internal_d16f9c294c6dd073f5581df267c6340161d1c0572a8f6b8ee850d4e088e2588e_prof);

        
        $__internal_b2b6efa82347e6997e320b09b9e3894bb18206a12d71accaff28736cf894bcba->leave($__internal_b2b6efa82347e6997e320b09b9e3894bb18206a12d71accaff28736cf894bcba_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c6505e1117f90643b0b9d955df12009cf9722d8d82033e128af344963189f2c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6505e1117f90643b0b9d955df12009cf9722d8d82033e128af344963189f2c0->enter($__internal_c6505e1117f90643b0b9d955df12009cf9722d8d82033e128af344963189f2c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_8fae25f3e84146367bcb81eafabd2b2a82f8a4196aabec1d7f581182029b8b40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fae25f3e84146367bcb81eafabd2b2a82f8a4196aabec1d7f581182029b8b40->enter($__internal_8fae25f3e84146367bcb81eafabd2b2a82f8a4196aabec1d7f581182029b8b40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_8fae25f3e84146367bcb81eafabd2b2a82f8a4196aabec1d7f581182029b8b40->leave($__internal_8fae25f3e84146367bcb81eafabd2b2a82f8a4196aabec1d7f581182029b8b40_prof);

        
        $__internal_c6505e1117f90643b0b9d955df12009cf9722d8d82033e128af344963189f2c0->leave($__internal_c6505e1117f90643b0b9d955df12009cf9722d8d82033e128af344963189f2c0_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
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
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "FOSUserBundle:Security:login.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\app/Resources/FOSUserBundle/views/Security/login.html.twig");
    }
}
