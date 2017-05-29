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
        $__internal_fb3e55c4049f02c65e6a2afae4f1f15937e176efdf8276b9867f95137092f44b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb3e55c4049f02c65e6a2afae4f1f15937e176efdf8276b9867f95137092f44b->enter($__internal_fb3e55c4049f02c65e6a2afae4f1f15937e176efdf8276b9867f95137092f44b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_4872820598dc9de372a666d6f8279476f0f97e2ee275afa6974bb741caff3c36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4872820598dc9de372a666d6f8279476f0f97e2ee275afa6974bb741caff3c36->enter($__internal_4872820598dc9de372a666d6f8279476f0f97e2ee275afa6974bb741caff3c36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_fb3e55c4049f02c65e6a2afae4f1f15937e176efdf8276b9867f95137092f44b->leave($__internal_fb3e55c4049f02c65e6a2afae4f1f15937e176efdf8276b9867f95137092f44b_prof);

        
        $__internal_4872820598dc9de372a666d6f8279476f0f97e2ee275afa6974bb741caff3c36->leave($__internal_4872820598dc9de372a666d6f8279476f0f97e2ee275afa6974bb741caff3c36_prof);

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
