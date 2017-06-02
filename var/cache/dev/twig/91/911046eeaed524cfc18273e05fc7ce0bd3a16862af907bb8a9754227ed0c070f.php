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
        $__internal_77f048abda9fe2d41933759b43fd19016a996e9d3acff3de9ed7fb7185a82cd6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77f048abda9fe2d41933759b43fd19016a996e9d3acff3de9ed7fb7185a82cd6->enter($__internal_77f048abda9fe2d41933759b43fd19016a996e9d3acff3de9ed7fb7185a82cd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_c9c0f2e79f5f558a19f3640e0fbc56a867a4fa687d818a87860e2ceac1d1542c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9c0f2e79f5f558a19f3640e0fbc56a867a4fa687d818a87860e2ceac1d1542c->enter($__internal_c9c0f2e79f5f558a19f3640e0fbc56a867a4fa687d818a87860e2ceac1d1542c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_77f048abda9fe2d41933759b43fd19016a996e9d3acff3de9ed7fb7185a82cd6->leave($__internal_77f048abda9fe2d41933759b43fd19016a996e9d3acff3de9ed7fb7185a82cd6_prof);

        
        $__internal_c9c0f2e79f5f558a19f3640e0fbc56a867a4fa687d818a87860e2ceac1d1542c->leave($__internal_c9c0f2e79f5f558a19f3640e0fbc56a867a4fa687d818a87860e2ceac1d1542c_prof);

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
