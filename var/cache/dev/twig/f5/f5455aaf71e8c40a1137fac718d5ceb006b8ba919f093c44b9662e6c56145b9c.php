<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_dba6e54cc3dcb2f5dda489f39413e0200e704d1ee3c8de4d203557c254f90821 extends Twig_Template
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
        $__internal_300e0809d536658adb34287560100cd6f4d5797155efffd8299ab3f19e706d26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_300e0809d536658adb34287560100cd6f4d5797155efffd8299ab3f19e706d26->enter($__internal_300e0809d536658adb34287560100cd6f4d5797155efffd8299ab3f19e706d26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_53b353e1becd88aa4ba5ff75f12fef467bea48fd785849f9419ba4b219e754b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53b353e1becd88aa4ba5ff75f12fef467bea48fd785849f9419ba4b219e754b5->enter($__internal_53b353e1becd88aa4ba5ff75f12fef467bea48fd785849f9419ba4b219e754b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_300e0809d536658adb34287560100cd6f4d5797155efffd8299ab3f19e706d26->leave($__internal_300e0809d536658adb34287560100cd6f4d5797155efffd8299ab3f19e706d26_prof);

        
        $__internal_53b353e1becd88aa4ba5ff75f12fef467bea48fd785849f9419ba4b219e754b5->leave($__internal_53b353e1becd88aa4ba5ff75f12fef467bea48fd785849f9419ba4b219e754b5_prof);

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
