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
        $__internal_672113f61c77c61f9056edaecc2b181c06f579a1d4abab57b62afa6e8f1fa9c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_672113f61c77c61f9056edaecc2b181c06f579a1d4abab57b62afa6e8f1fa9c6->enter($__internal_672113f61c77c61f9056edaecc2b181c06f579a1d4abab57b62afa6e8f1fa9c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_2a619b1519cdd152c6688e167f9cad05e2bd4a16ba895473fe4c90483bee9578 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a619b1519cdd152c6688e167f9cad05e2bd4a16ba895473fe4c90483bee9578->enter($__internal_2a619b1519cdd152c6688e167f9cad05e2bd4a16ba895473fe4c90483bee9578_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_672113f61c77c61f9056edaecc2b181c06f579a1d4abab57b62afa6e8f1fa9c6->leave($__internal_672113f61c77c61f9056edaecc2b181c06f579a1d4abab57b62afa6e8f1fa9c6_prof);

        
        $__internal_2a619b1519cdd152c6688e167f9cad05e2bd4a16ba895473fe4c90483bee9578->leave($__internal_2a619b1519cdd152c6688e167f9cad05e2bd4a16ba895473fe4c90483bee9578_prof);

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
