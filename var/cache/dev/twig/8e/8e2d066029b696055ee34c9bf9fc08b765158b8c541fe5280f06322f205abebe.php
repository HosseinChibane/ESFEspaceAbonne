<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_e7afdeb0b5b6de0bdcc2d0bb0325811549c5adf1012508a20ed3229ec4816c42 extends Twig_Template
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
        $__internal_2654825fbba05e00a7d9a7a7ffe000320cf616945df5421b3aeca8cec67ad743 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2654825fbba05e00a7d9a7a7ffe000320cf616945df5421b3aeca8cec67ad743->enter($__internal_2654825fbba05e00a7d9a7a7ffe000320cf616945df5421b3aeca8cec67ad743_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_bd3510c6792e9ac32d7445184494521326803706585645a17ae858570bcf719c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd3510c6792e9ac32d7445184494521326803706585645a17ae858570bcf719c->enter($__internal_bd3510c6792e9ac32d7445184494521326803706585645a17ae858570bcf719c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_2654825fbba05e00a7d9a7a7ffe000320cf616945df5421b3aeca8cec67ad743->leave($__internal_2654825fbba05e00a7d9a7a7ffe000320cf616945df5421b3aeca8cec67ad743_prof);

        
        $__internal_bd3510c6792e9ac32d7445184494521326803706585645a17ae858570bcf719c->leave($__internal_bd3510c6792e9ac32d7445184494521326803706585645a17ae858570bcf719c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
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
", "@Twig/Exception/exception.rdf.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.rdf.twig");
    }
}
