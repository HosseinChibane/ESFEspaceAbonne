<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_6626e4fc6be6a15952dc990874b6ef16e9535ec0799ccdb092245401cefefeec extends Twig_Template
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
        $__internal_01bec1b43e1bc82c0945c167d81c5da147e8e3587e988f4e909ff3be0dba3a41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01bec1b43e1bc82c0945c167d81c5da147e8e3587e988f4e909ff3be0dba3a41->enter($__internal_01bec1b43e1bc82c0945c167d81c5da147e8e3587e988f4e909ff3be0dba3a41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_b64eb807b6b25c97a092ea807789f9b21143fc8f0fb3c3e962ba0680592f48f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b64eb807b6b25c97a092ea807789f9b21143fc8f0fb3c3e962ba0680592f48f3->enter($__internal_b64eb807b6b25c97a092ea807789f9b21143fc8f0fb3c3e962ba0680592f48f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_01bec1b43e1bc82c0945c167d81c5da147e8e3587e988f4e909ff3be0dba3a41->leave($__internal_01bec1b43e1bc82c0945c167d81c5da147e8e3587e988f4e909ff3be0dba3a41_prof);

        
        $__internal_b64eb807b6b25c97a092ea807789f9b21143fc8f0fb3c3e962ba0680592f48f3->leave($__internal_b64eb807b6b25c97a092ea807789f9b21143fc8f0fb3c3e962ba0680592f48f3_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "@Twig/Exception/exception.css.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.css.twig");
    }
}