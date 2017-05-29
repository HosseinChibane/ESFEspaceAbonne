<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_7f504cad57161ea3ac8948e43f2e9d3717821a8b386d2fe66cb0e0a17297c829 extends Twig_Template
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
        $__internal_0245227da6ae84c4911e3982dcc50c622e525d269337e1fa7690a87c16d89c4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0245227da6ae84c4911e3982dcc50c622e525d269337e1fa7690a87c16d89c4d->enter($__internal_0245227da6ae84c4911e3982dcc50c622e525d269337e1fa7690a87c16d89c4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_2b4d778f227b2e4f5f6f69ab8ab73be3e9449cfa6c9f75d02d45d0a41d19445f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b4d778f227b2e4f5f6f69ab8ab73be3e9449cfa6c9f75d02d45d0a41d19445f->enter($__internal_2b4d778f227b2e4f5f6f69ab8ab73be3e9449cfa6c9f75d02d45d0a41d19445f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_0245227da6ae84c4911e3982dcc50c622e525d269337e1fa7690a87c16d89c4d->leave($__internal_0245227da6ae84c4911e3982dcc50c622e525d269337e1fa7690a87c16d89c4d_prof);

        
        $__internal_2b4d778f227b2e4f5f6f69ab8ab73be3e9449cfa6c9f75d02d45d0a41d19445f->leave($__internal_2b4d778f227b2e4f5f6f69ab8ab73be3e9449cfa6c9f75d02d45d0a41d19445f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
", "TwigBundle:Exception:error.rdf.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
