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
        $__internal_0a27d72cbaabdfedfeaba91dfbcd0fa95acdf128480bb74735e776939290aa30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a27d72cbaabdfedfeaba91dfbcd0fa95acdf128480bb74735e776939290aa30->enter($__internal_0a27d72cbaabdfedfeaba91dfbcd0fa95acdf128480bb74735e776939290aa30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_62b14306ae2a4ddc963eb60b878e4194ea3dc4d4777b6d2ce6f1b99e46cfb6ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62b14306ae2a4ddc963eb60b878e4194ea3dc4d4777b6d2ce6f1b99e46cfb6ac->enter($__internal_62b14306ae2a4ddc963eb60b878e4194ea3dc4d4777b6d2ce6f1b99e46cfb6ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_0a27d72cbaabdfedfeaba91dfbcd0fa95acdf128480bb74735e776939290aa30->leave($__internal_0a27d72cbaabdfedfeaba91dfbcd0fa95acdf128480bb74735e776939290aa30_prof);

        
        $__internal_62b14306ae2a4ddc963eb60b878e4194ea3dc4d4777b6d2ce6f1b99e46cfb6ac->leave($__internal_62b14306ae2a4ddc963eb60b878e4194ea3dc4d4777b6d2ce6f1b99e46cfb6ac_prof);

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
