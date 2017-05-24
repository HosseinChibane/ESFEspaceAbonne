<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_a419e3c5464861381eb9fc74093da09129620d04536eebd35daa3ad0b617b0a0 extends Twig_Template
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
        $__internal_4983afa47eb29eb16202226cdacc46ce275ea69beab9792f40816170b40f5c6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4983afa47eb29eb16202226cdacc46ce275ea69beab9792f40816170b40f5c6a->enter($__internal_4983afa47eb29eb16202226cdacc46ce275ea69beab9792f40816170b40f5c6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_d40627c30078090dafd6402b8b694f7ae8de4b6d38662f36d1b61187bd725b96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d40627c30078090dafd6402b8b694f7ae8de4b6d38662f36d1b61187bd725b96->enter($__internal_d40627c30078090dafd6402b8b694f7ae8de4b6d38662f36d1b61187bd725b96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_4983afa47eb29eb16202226cdacc46ce275ea69beab9792f40816170b40f5c6a->leave($__internal_4983afa47eb29eb16202226cdacc46ce275ea69beab9792f40816170b40f5c6a_prof);

        
        $__internal_d40627c30078090dafd6402b8b694f7ae8de4b6d38662f36d1b61187bd725b96->leave($__internal_d40627c30078090dafd6402b8b694f7ae8de4b6d38662f36d1b61187bd725b96_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "@Twig/Exception/error.atom.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.atom.twig");
    }
}
