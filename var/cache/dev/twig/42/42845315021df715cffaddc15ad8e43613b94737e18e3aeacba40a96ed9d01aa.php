<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_2c9bec8c5350ef08308557ccbbfe8ff1080abcd6411c6f8f61d27f9b58f7c04a extends Twig_Template
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
        $__internal_fa1b50611089fe736aa3087aaabc211679ff9e434b51e22853c932c357bdf42b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa1b50611089fe736aa3087aaabc211679ff9e434b51e22853c932c357bdf42b->enter($__internal_fa1b50611089fe736aa3087aaabc211679ff9e434b51e22853c932c357bdf42b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_4b6cfc3776de49e06e445aebdc3783f67e4d1151152b200d5a9ba1c077ea7277 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b6cfc3776de49e06e445aebdc3783f67e4d1151152b200d5a9ba1c077ea7277->enter($__internal_4b6cfc3776de49e06e445aebdc3783f67e4d1151152b200d5a9ba1c077ea7277_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_fa1b50611089fe736aa3087aaabc211679ff9e434b51e22853c932c357bdf42b->leave($__internal_fa1b50611089fe736aa3087aaabc211679ff9e434b51e22853c932c357bdf42b_prof);

        
        $__internal_4b6cfc3776de49e06e445aebdc3783f67e4d1151152b200d5a9ba1c077ea7277->leave($__internal_4b6cfc3776de49e06e445aebdc3783f67e4d1151152b200d5a9ba1c077ea7277_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
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
", "@Twig/Exception/exception.js.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.js.twig");
    }
}
