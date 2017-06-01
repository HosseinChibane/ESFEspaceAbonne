<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_5857356ac41b69b6f875e3ebab93638c8005eb65db129e614d17921c216c1fd8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d81a4d8e5fdae2c7df21976e1d539a85dc1cf2fb30db99bf2956175d448d9dd4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d81a4d8e5fdae2c7df21976e1d539a85dc1cf2fb30db99bf2956175d448d9dd4->enter($__internal_d81a4d8e5fdae2c7df21976e1d539a85dc1cf2fb30db99bf2956175d448d9dd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_b0afbdff0b01f3c2e5a472ef2bc5e0e9f21fa6e86034710dc4a167cc6925a1cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0afbdff0b01f3c2e5a472ef2bc5e0e9f21fa6e86034710dc4a167cc6925a1cb->enter($__internal_b0afbdff0b01f3c2e5a472ef2bc5e0e9f21fa6e86034710dc4a167cc6925a1cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_d81a4d8e5fdae2c7df21976e1d539a85dc1cf2fb30db99bf2956175d448d9dd4->leave($__internal_d81a4d8e5fdae2c7df21976e1d539a85dc1cf2fb30db99bf2956175d448d9dd4_prof);

        
        $__internal_b0afbdff0b01f3c2e5a472ef2bc5e0e9f21fa6e86034710dc4a167cc6925a1cb->leave($__internal_b0afbdff0b01f3c2e5a472ef2bc5e0e9f21fa6e86034710dc4a167cc6925a1cb_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "@Twig/Exception/exception.atom.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.atom.twig");
    }
}
