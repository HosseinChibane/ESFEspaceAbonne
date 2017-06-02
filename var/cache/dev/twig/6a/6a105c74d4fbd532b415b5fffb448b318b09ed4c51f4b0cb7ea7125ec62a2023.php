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
        $__internal_62d9aadd344824bb9c8984350891c81fbab449fb393f68b111a7f19c0524abf5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62d9aadd344824bb9c8984350891c81fbab449fb393f68b111a7f19c0524abf5->enter($__internal_62d9aadd344824bb9c8984350891c81fbab449fb393f68b111a7f19c0524abf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_c0068df6279f19415d75a1991e0379f740b70c696a061211414f51b241692304 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0068df6279f19415d75a1991e0379f740b70c696a061211414f51b241692304->enter($__internal_c0068df6279f19415d75a1991e0379f740b70c696a061211414f51b241692304_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_62d9aadd344824bb9c8984350891c81fbab449fb393f68b111a7f19c0524abf5->leave($__internal_62d9aadd344824bb9c8984350891c81fbab449fb393f68b111a7f19c0524abf5_prof);

        
        $__internal_c0068df6279f19415d75a1991e0379f740b70c696a061211414f51b241692304->leave($__internal_c0068df6279f19415d75a1991e0379f740b70c696a061211414f51b241692304_prof);

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
