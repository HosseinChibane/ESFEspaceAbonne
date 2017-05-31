<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_92fafa2b2f43aac83441a749c3ff9dc89c943a09cae1f5b98e812bb1ad3fedfe extends Twig_Template
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
        $__internal_9fb99462427b47471857b7d4bae979518acbcf837b4b791d30ef124f4206d0fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fb99462427b47471857b7d4bae979518acbcf837b4b791d30ef124f4206d0fd->enter($__internal_9fb99462427b47471857b7d4bae979518acbcf837b4b791d30ef124f4206d0fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_b63c9c0a028e58d29a932861f6e47dd4eabba814b3de51f444e89a722f98bcb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b63c9c0a028e58d29a932861f6e47dd4eabba814b3de51f444e89a722f98bcb1->enter($__internal_b63c9c0a028e58d29a932861f6e47dd4eabba814b3de51f444e89a722f98bcb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_9fb99462427b47471857b7d4bae979518acbcf837b4b791d30ef124f4206d0fd->leave($__internal_9fb99462427b47471857b7d4bae979518acbcf837b4b791d30ef124f4206d0fd_prof);

        
        $__internal_b63c9c0a028e58d29a932861f6e47dd4eabba814b3de51f444e89a722f98bcb1->leave($__internal_b63c9c0a028e58d29a932861f6e47dd4eabba814b3de51f444e89a722f98bcb1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
", "TwigBundle:Exception:exception.atom.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
