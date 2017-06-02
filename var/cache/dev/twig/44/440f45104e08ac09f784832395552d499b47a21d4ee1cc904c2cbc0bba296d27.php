<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_f8d9129032c94531c8da88864dc5221ecc5c936a78aab4d2081250cde885ac99 extends Twig_Template
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
        $__internal_f7e5be8474e887a7252815287076ecf4511947ed01a072a0bedf80bc00bf9ab2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7e5be8474e887a7252815287076ecf4511947ed01a072a0bedf80bc00bf9ab2->enter($__internal_f7e5be8474e887a7252815287076ecf4511947ed01a072a0bedf80bc00bf9ab2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_ae61eb2d446ae11d35d7613e1695e9a1734ed38316379414dedb8478075f4ab9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae61eb2d446ae11d35d7613e1695e9a1734ed38316379414dedb8478075f4ab9->enter($__internal_ae61eb2d446ae11d35d7613e1695e9a1734ed38316379414dedb8478075f4ab9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_f7e5be8474e887a7252815287076ecf4511947ed01a072a0bedf80bc00bf9ab2->leave($__internal_f7e5be8474e887a7252815287076ecf4511947ed01a072a0bedf80bc00bf9ab2_prof);

        
        $__internal_ae61eb2d446ae11d35d7613e1695e9a1734ed38316379414dedb8478075f4ab9->leave($__internal_ae61eb2d446ae11d35d7613e1695e9a1734ed38316379414dedb8478075f4ab9_prof);

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
