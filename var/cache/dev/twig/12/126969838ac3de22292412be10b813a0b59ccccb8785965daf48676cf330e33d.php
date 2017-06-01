<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_fbff8bb767668e417b21f8d50b7146687149b5f67c0bf26d39560895c52df962 extends Twig_Template
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
        $__internal_a84753a3b1c4b6a38a2d77ab819e857256989557e64c0ad6851b70ed7fa0169d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a84753a3b1c4b6a38a2d77ab819e857256989557e64c0ad6851b70ed7fa0169d->enter($__internal_a84753a3b1c4b6a38a2d77ab819e857256989557e64c0ad6851b70ed7fa0169d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $__internal_0c7daa07f1bf70fd47c07fe9a2dfb5da244c07e98429a14fd685f44d8335e2cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c7daa07f1bf70fd47c07fe9a2dfb5da244c07e98429a14fd685f44d8335e2cb->enter($__internal_0c7daa07f1bf70fd47c07fe9a2dfb5da244c07e98429a14fd685f44d8335e2cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a84753a3b1c4b6a38a2d77ab819e857256989557e64c0ad6851b70ed7fa0169d->leave($__internal_a84753a3b1c4b6a38a2d77ab819e857256989557e64c0ad6851b70ed7fa0169d_prof);

        
        $__internal_0c7daa07f1bf70fd47c07fe9a2dfb5da244c07e98429a14fd685f44d8335e2cb->leave($__internal_0c7daa07f1bf70fd47c07fe9a2dfb5da244c07e98429a14fd685f44d8335e2cb_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_26e5128186fcae4f15df86b82b85623ac85cb55a0108dc8a52afb045cdfbf822 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26e5128186fcae4f15df86b82b85623ac85cb55a0108dc8a52afb045cdfbf822->enter($__internal_26e5128186fcae4f15df86b82b85623ac85cb55a0108dc8a52afb045cdfbf822_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_6b2cdc029b63f46875f84cf017d65ebed665e6e475b8985abbc1dfed701b6e60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b2cdc029b63f46875f84cf017d65ebed665e6e475b8985abbc1dfed701b6e60->enter($__internal_6b2cdc029b63f46875f84cf017d65ebed665e6e475b8985abbc1dfed701b6e60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_6b2cdc029b63f46875f84cf017d65ebed665e6e475b8985abbc1dfed701b6e60->leave($__internal_6b2cdc029b63f46875f84cf017d65ebed665e6e475b8985abbc1dfed701b6e60_prof);

        
        $__internal_26e5128186fcae4f15df86b82b85623ac85cb55a0108dc8a52afb045cdfbf822->leave($__internal_26e5128186fcae4f15df86b82b85623ac85cb55a0108dc8a52afb045cdfbf822_prof);

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
