<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_5857356ac41b69b6f875e3ebab93638c8005eb65db129e614d17921c216c1fd8 extends Twig_Template
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
        $__internal_9ee45b92fa464a7c28cb00e3c36a5dcb7bd647ccf8c8ae2c26ce5c945c585da0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ee45b92fa464a7c28cb00e3c36a5dcb7bd647ccf8c8ae2c26ce5c945c585da0->enter($__internal_9ee45b92fa464a7c28cb00e3c36a5dcb7bd647ccf8c8ae2c26ce5c945c585da0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_fd68b9524c329a7aa3e23cc80c60fcead2552a1419fa6017f9eb126bf74924b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd68b9524c329a7aa3e23cc80c60fcead2552a1419fa6017f9eb126bf74924b2->enter($__internal_fd68b9524c329a7aa3e23cc80c60fcead2552a1419fa6017f9eb126bf74924b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_9ee45b92fa464a7c28cb00e3c36a5dcb7bd647ccf8c8ae2c26ce5c945c585da0->leave($__internal_9ee45b92fa464a7c28cb00e3c36a5dcb7bd647ccf8c8ae2c26ce5c945c585da0_prof);

        
        $__internal_fd68b9524c329a7aa3e23cc80c60fcead2552a1419fa6017f9eb126bf74924b2->leave($__internal_fd68b9524c329a7aa3e23cc80c60fcead2552a1419fa6017f9eb126bf74924b2_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
", "@Twig/Exception/exception.atom.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.atom.twig");
    }
}
