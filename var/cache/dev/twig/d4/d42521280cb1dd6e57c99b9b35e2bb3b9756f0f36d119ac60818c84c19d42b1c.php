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
        $__internal_1908de389808654a3dc3d92f0d8fb77451216849ab0a7de438cd8d0bb683062b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1908de389808654a3dc3d92f0d8fb77451216849ab0a7de438cd8d0bb683062b->enter($__internal_1908de389808654a3dc3d92f0d8fb77451216849ab0a7de438cd8d0bb683062b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_3799d489f032a0c75da6566775b383f418d6e8affdaa9d2dc2bc8c7a4cf432f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3799d489f032a0c75da6566775b383f418d6e8affdaa9d2dc2bc8c7a4cf432f7->enter($__internal_3799d489f032a0c75da6566775b383f418d6e8affdaa9d2dc2bc8c7a4cf432f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_1908de389808654a3dc3d92f0d8fb77451216849ab0a7de438cd8d0bb683062b->leave($__internal_1908de389808654a3dc3d92f0d8fb77451216849ab0a7de438cd8d0bb683062b_prof);

        
        $__internal_3799d489f032a0c75da6566775b383f418d6e8affdaa9d2dc2bc8c7a4cf432f7->leave($__internal_3799d489f032a0c75da6566775b383f418d6e8affdaa9d2dc2bc8c7a4cf432f7_prof);

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
