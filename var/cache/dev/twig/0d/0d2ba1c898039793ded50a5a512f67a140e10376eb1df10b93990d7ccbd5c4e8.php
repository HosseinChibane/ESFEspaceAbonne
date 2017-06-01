<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_6626e4fc6be6a15952dc990874b6ef16e9535ec0799ccdb092245401cefefeec extends Twig_Template
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
        $__internal_08528f26110d3597ed2d9c426ab62739452df8288835a96d2f32b1627bf4f62e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08528f26110d3597ed2d9c426ab62739452df8288835a96d2f32b1627bf4f62e->enter($__internal_08528f26110d3597ed2d9c426ab62739452df8288835a96d2f32b1627bf4f62e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_ddf77c20869a4558508abb93287c0eff516e924d5c8d1e9e4cca229ecd459749 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddf77c20869a4558508abb93287c0eff516e924d5c8d1e9e4cca229ecd459749->enter($__internal_ddf77c20869a4558508abb93287c0eff516e924d5c8d1e9e4cca229ecd459749_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_08528f26110d3597ed2d9c426ab62739452df8288835a96d2f32b1627bf4f62e->leave($__internal_08528f26110d3597ed2d9c426ab62739452df8288835a96d2f32b1627bf4f62e_prof);

        
        $__internal_ddf77c20869a4558508abb93287c0eff516e924d5c8d1e9e4cca229ecd459749->leave($__internal_ddf77c20869a4558508abb93287c0eff516e924d5c8d1e9e4cca229ecd459749_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "@Twig/Exception/exception.css.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.css.twig");
    }
}
