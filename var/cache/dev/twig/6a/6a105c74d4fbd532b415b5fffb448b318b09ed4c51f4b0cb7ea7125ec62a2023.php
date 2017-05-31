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
        $__internal_3323547f6c3c90bbccdd996167c91881aa30bc7592771a2c5c8661745b2688de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3323547f6c3c90bbccdd996167c91881aa30bc7592771a2c5c8661745b2688de->enter($__internal_3323547f6c3c90bbccdd996167c91881aa30bc7592771a2c5c8661745b2688de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_9006df873de9350cd80dd700e9780e61a2dec7b973127a3b997801d1516364a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9006df873de9350cd80dd700e9780e61a2dec7b973127a3b997801d1516364a5->enter($__internal_9006df873de9350cd80dd700e9780e61a2dec7b973127a3b997801d1516364a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_3323547f6c3c90bbccdd996167c91881aa30bc7592771a2c5c8661745b2688de->leave($__internal_3323547f6c3c90bbccdd996167c91881aa30bc7592771a2c5c8661745b2688de_prof);

        
        $__internal_9006df873de9350cd80dd700e9780e61a2dec7b973127a3b997801d1516364a5->leave($__internal_9006df873de9350cd80dd700e9780e61a2dec7b973127a3b997801d1516364a5_prof);

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
