<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_870747102dec4c530e2146e632c637d98d23db7e5d2e2c0994dcbb7c91837f2a extends Twig_Template
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
        $__internal_4e798c62b0712d2a7ed47118d474a700c47a663fc24654027022a13ccaef55fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e798c62b0712d2a7ed47118d474a700c47a663fc24654027022a13ccaef55fd->enter($__internal_4e798c62b0712d2a7ed47118d474a700c47a663fc24654027022a13ccaef55fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_1750d6d7894da29e1e0ea23537dd393d525e9537b13b2269e7b8d72f62225744 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1750d6d7894da29e1e0ea23537dd393d525e9537b13b2269e7b8d72f62225744->enter($__internal_1750d6d7894da29e1e0ea23537dd393d525e9537b13b2269e7b8d72f62225744_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_4e798c62b0712d2a7ed47118d474a700c47a663fc24654027022a13ccaef55fd->leave($__internal_4e798c62b0712d2a7ed47118d474a700c47a663fc24654027022a13ccaef55fd_prof);

        
        $__internal_1750d6d7894da29e1e0ea23537dd393d525e9537b13b2269e7b8d72f62225744->leave($__internal_1750d6d7894da29e1e0ea23537dd393d525e9537b13b2269e7b8d72f62225744_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
