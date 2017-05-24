<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_3d9d6dfc79361527a87ca4f075dd70303712b2500424b9269a3708f4ab6a1881 extends Twig_Template
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
        $__internal_b602ab9d08f3b30b60164dd9659f8a010ffe05bcd929f2ea0b7e8b6a924a3195 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b602ab9d08f3b30b60164dd9659f8a010ffe05bcd929f2ea0b7e8b6a924a3195->enter($__internal_b602ab9d08f3b30b60164dd9659f8a010ffe05bcd929f2ea0b7e8b6a924a3195_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_d578985be454bccdbf3ee6e91b39446c1eb84afceae2eaddc822a0c200e2ce86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d578985be454bccdbf3ee6e91b39446c1eb84afceae2eaddc822a0c200e2ce86->enter($__internal_d578985be454bccdbf3ee6e91b39446c1eb84afceae2eaddc822a0c200e2ce86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_b602ab9d08f3b30b60164dd9659f8a010ffe05bcd929f2ea0b7e8b6a924a3195->leave($__internal_b602ab9d08f3b30b60164dd9659f8a010ffe05bcd929f2ea0b7e8b6a924a3195_prof);

        
        $__internal_d578985be454bccdbf3ee6e91b39446c1eb84afceae2eaddc822a0c200e2ce86->leave($__internal_d578985be454bccdbf3ee6e91b39446c1eb84afceae2eaddc822a0c200e2ce86_prof);

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
