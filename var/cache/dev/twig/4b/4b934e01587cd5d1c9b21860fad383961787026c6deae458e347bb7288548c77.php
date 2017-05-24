<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_df56c95b04c149c0aceba6e51a09863a64961ad53955611aa24970756a5b6db1 extends Twig_Template
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
        $__internal_f4aeaa1fbd98ff62dea568ad30e00d0158a98b3fd5627ac250665c615db75160 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4aeaa1fbd98ff62dea568ad30e00d0158a98b3fd5627ac250665c615db75160->enter($__internal_f4aeaa1fbd98ff62dea568ad30e00d0158a98b3fd5627ac250665c615db75160_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_b1616f31d808971854ebbb10463ba238bfa5b900ce23b82b5460993d80a66566 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1616f31d808971854ebbb10463ba238bfa5b900ce23b82b5460993d80a66566->enter($__internal_b1616f31d808971854ebbb10463ba238bfa5b900ce23b82b5460993d80a66566_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_f4aeaa1fbd98ff62dea568ad30e00d0158a98b3fd5627ac250665c615db75160->leave($__internal_f4aeaa1fbd98ff62dea568ad30e00d0158a98b3fd5627ac250665c615db75160_prof);

        
        $__internal_b1616f31d808971854ebbb10463ba238bfa5b900ce23b82b5460993d80a66566->leave($__internal_b1616f31d808971854ebbb10463ba238bfa5b900ce23b82b5460993d80a66566_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "TwigBundle:Exception:exception.rdf.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
