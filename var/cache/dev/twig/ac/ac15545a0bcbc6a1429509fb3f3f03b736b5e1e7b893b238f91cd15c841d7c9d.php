<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_1e0fe6a4376ee5d40ec5bbbce9bce552111844037bb9d6bd71f1b8dc0f7d569e extends Twig_Template
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
        $__internal_28c5a3e03e5595dd8bafddddb8715b19c3cace2734a093d6f46468906c5a252a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28c5a3e03e5595dd8bafddddb8715b19c3cace2734a093d6f46468906c5a252a->enter($__internal_28c5a3e03e5595dd8bafddddb8715b19c3cace2734a093d6f46468906c5a252a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_da6b705f7638d1c4aa7467105b21fd3880f7bd261c118fb4e7b61a42e8e9520f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da6b705f7638d1c4aa7467105b21fd3880f7bd261c118fb4e7b61a42e8e9520f->enter($__internal_da6b705f7638d1c4aa7467105b21fd3880f7bd261c118fb4e7b61a42e8e9520f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_28c5a3e03e5595dd8bafddddb8715b19c3cace2734a093d6f46468906c5a252a->leave($__internal_28c5a3e03e5595dd8bafddddb8715b19c3cace2734a093d6f46468906c5a252a_prof);

        
        $__internal_da6b705f7638d1c4aa7467105b21fd3880f7bd261c118fb4e7b61a42e8e9520f->leave($__internal_da6b705f7638d1c4aa7467105b21fd3880f7bd261c118fb4e7b61a42e8e9520f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
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
", "@Twig/Exception/error.rdf.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.rdf.twig");
    }
}
