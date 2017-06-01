<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_396fc7b03e8e62cb4302b128282d1b5776c0ac9223b84c459391ce3b2c140592 extends Twig_Template
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
        $__internal_92649a3465eeb3182bd82b7f4ed34b758c4f0529686e660411ce64438a540e0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92649a3465eeb3182bd82b7f4ed34b758c4f0529686e660411ce64438a540e0b->enter($__internal_92649a3465eeb3182bd82b7f4ed34b758c4f0529686e660411ce64438a540e0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_a2bad906a6ea95fae69502f2101462ca1509267e79afd0810ad8b3f3fcaa04da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2bad906a6ea95fae69502f2101462ca1509267e79afd0810ad8b3f3fcaa04da->enter($__internal_a2bad906a6ea95fae69502f2101462ca1509267e79afd0810ad8b3f3fcaa04da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_92649a3465eeb3182bd82b7f4ed34b758c4f0529686e660411ce64438a540e0b->leave($__internal_92649a3465eeb3182bd82b7f4ed34b758c4f0529686e660411ce64438a540e0b_prof);

        
        $__internal_a2bad906a6ea95fae69502f2101462ca1509267e79afd0810ad8b3f3fcaa04da->leave($__internal_a2bad906a6ea95fae69502f2101462ca1509267e79afd0810ad8b3f3fcaa04da_prof);

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
