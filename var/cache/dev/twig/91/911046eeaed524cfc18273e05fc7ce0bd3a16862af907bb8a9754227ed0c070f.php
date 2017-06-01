<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_3cb5d70ad1997d319d33ad5f3897451eecbf7d9a912e314b5193c55885eb2a45 extends Twig_Template
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
        $__internal_c67271eaff248db9af6048b1a902bd0357c60cda7dfa63d966a67278cbc55173 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c67271eaff248db9af6048b1a902bd0357c60cda7dfa63d966a67278cbc55173->enter($__internal_c67271eaff248db9af6048b1a902bd0357c60cda7dfa63d966a67278cbc55173_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_eb684cfd0d09a704a8b14d8812b760a557fdf917ee9bd79980af1e499b706288 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb684cfd0d09a704a8b14d8812b760a557fdf917ee9bd79980af1e499b706288->enter($__internal_eb684cfd0d09a704a8b14d8812b760a557fdf917ee9bd79980af1e499b706288_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_c67271eaff248db9af6048b1a902bd0357c60cda7dfa63d966a67278cbc55173->leave($__internal_c67271eaff248db9af6048b1a902bd0357c60cda7dfa63d966a67278cbc55173_prof);

        
        $__internal_eb684cfd0d09a704a8b14d8812b760a557fdf917ee9bd79980af1e499b706288->leave($__internal_eb684cfd0d09a704a8b14d8812b760a557fdf917ee9bd79980af1e499b706288_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
", "TwigBundle:Exception:exception.js.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
