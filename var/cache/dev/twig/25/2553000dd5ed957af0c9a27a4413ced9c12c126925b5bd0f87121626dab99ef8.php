<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_1a974130bb256025ebebf3b01571b6dfce70f6c570330f2fc4191d528595a91e extends Twig_Template
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
        $__internal_87c8ca17cb0ce5a9ce0a51f72223392ddcf34d14722abcfa7dd0f7cfe1bf4bd7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87c8ca17cb0ce5a9ce0a51f72223392ddcf34d14722abcfa7dd0f7cfe1bf4bd7->enter($__internal_87c8ca17cb0ce5a9ce0a51f72223392ddcf34d14722abcfa7dd0f7cfe1bf4bd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_fd0678107df49778a1791de5568ae4e03f5ade194261ecf5237256396c35ae62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd0678107df49778a1791de5568ae4e03f5ade194261ecf5237256396c35ae62->enter($__internal_fd0678107df49778a1791de5568ae4e03f5ade194261ecf5237256396c35ae62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_87c8ca17cb0ce5a9ce0a51f72223392ddcf34d14722abcfa7dd0f7cfe1bf4bd7->leave($__internal_87c8ca17cb0ce5a9ce0a51f72223392ddcf34d14722abcfa7dd0f7cfe1bf4bd7_prof);

        
        $__internal_fd0678107df49778a1791de5568ae4e03f5ade194261ecf5237256396c35ae62->leave($__internal_fd0678107df49778a1791de5568ae4e03f5ade194261ecf5237256396c35ae62_prof);

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
