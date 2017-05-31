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
        $__internal_0f68a29c449cea5b2fd926ba3f83ffec7a6e92229acc7a91071aa0c6e5cde196 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f68a29c449cea5b2fd926ba3f83ffec7a6e92229acc7a91071aa0c6e5cde196->enter($__internal_0f68a29c449cea5b2fd926ba3f83ffec7a6e92229acc7a91071aa0c6e5cde196_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_ccf05597979a4e9d824aa1ea3ccb156e6fdf40ebe9aa5161bf7f020e2bfe618a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccf05597979a4e9d824aa1ea3ccb156e6fdf40ebe9aa5161bf7f020e2bfe618a->enter($__internal_ccf05597979a4e9d824aa1ea3ccb156e6fdf40ebe9aa5161bf7f020e2bfe618a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_0f68a29c449cea5b2fd926ba3f83ffec7a6e92229acc7a91071aa0c6e5cde196->leave($__internal_0f68a29c449cea5b2fd926ba3f83ffec7a6e92229acc7a91071aa0c6e5cde196_prof);

        
        $__internal_ccf05597979a4e9d824aa1ea3ccb156e6fdf40ebe9aa5161bf7f020e2bfe618a->leave($__internal_ccf05597979a4e9d824aa1ea3ccb156e6fdf40ebe9aa5161bf7f020e2bfe618a_prof);

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
