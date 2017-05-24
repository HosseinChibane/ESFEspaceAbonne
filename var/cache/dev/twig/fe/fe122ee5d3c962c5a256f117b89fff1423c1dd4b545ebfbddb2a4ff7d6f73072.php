<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_8978c0f992dd4ba695003c8d89f25ec3193aaa28a11e6fff3e5d3afca5e5efab extends Twig_Template
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
        $__internal_d871c5e71fd74911e2a3f4148965a29f1ab169a13fc3101eb446cb607c0218bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d871c5e71fd74911e2a3f4148965a29f1ab169a13fc3101eb446cb607c0218bc->enter($__internal_d871c5e71fd74911e2a3f4148965a29f1ab169a13fc3101eb446cb607c0218bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_ec8a8d925ac935ee7a7851f46da4e2b63fd46568c2a4638c034e17f51e99405b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec8a8d925ac935ee7a7851f46da4e2b63fd46568c2a4638c034e17f51e99405b->enter($__internal_ec8a8d925ac935ee7a7851f46da4e2b63fd46568c2a4638c034e17f51e99405b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_d871c5e71fd74911e2a3f4148965a29f1ab169a13fc3101eb446cb607c0218bc->leave($__internal_d871c5e71fd74911e2a3f4148965a29f1ab169a13fc3101eb446cb607c0218bc_prof);

        
        $__internal_ec8a8d925ac935ee7a7851f46da4e2b63fd46568c2a4638c034e17f51e99405b->leave($__internal_ec8a8d925ac935ee7a7851f46da4e2b63fd46568c2a4638c034e17f51e99405b_prof);

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
