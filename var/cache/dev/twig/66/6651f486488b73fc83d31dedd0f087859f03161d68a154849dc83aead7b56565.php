<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_9374c4d8d2d6b3759d1910d52c7a6d6a7ee2be4fc6ece8403f2e66dc43a072e3 extends Twig_Template
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
        $__internal_2c360045df1cb024af8d9f032e8e26a242303b98af336670eed2be6f2c3f13f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c360045df1cb024af8d9f032e8e26a242303b98af336670eed2be6f2c3f13f7->enter($__internal_2c360045df1cb024af8d9f032e8e26a242303b98af336670eed2be6f2c3f13f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_b0dc101ee189f6c07d5213056e3b66c48e3676879481a7e36c69aa05e14a9f52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0dc101ee189f6c07d5213056e3b66c48e3676879481a7e36c69aa05e14a9f52->enter($__internal_b0dc101ee189f6c07d5213056e3b66c48e3676879481a7e36c69aa05e14a9f52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_2c360045df1cb024af8d9f032e8e26a242303b98af336670eed2be6f2c3f13f7->leave($__internal_2c360045df1cb024af8d9f032e8e26a242303b98af336670eed2be6f2c3f13f7_prof);

        
        $__internal_b0dc101ee189f6c07d5213056e3b66c48e3676879481a7e36c69aa05e14a9f52->leave($__internal_b0dc101ee189f6c07d5213056e3b66c48e3676879481a7e36c69aa05e14a9f52_prof);

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
