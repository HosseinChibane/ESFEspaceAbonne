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
        $__internal_677716b1255a93d4b55247b3a7975c9e8e1aa0b79f735b2be961000732efd718 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_677716b1255a93d4b55247b3a7975c9e8e1aa0b79f735b2be961000732efd718->enter($__internal_677716b1255a93d4b55247b3a7975c9e8e1aa0b79f735b2be961000732efd718_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_81f6a39a29b894b62f16047b5927dd6ceb0414c2d191594f0d7f5847f760adbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81f6a39a29b894b62f16047b5927dd6ceb0414c2d191594f0d7f5847f760adbd->enter($__internal_81f6a39a29b894b62f16047b5927dd6ceb0414c2d191594f0d7f5847f760adbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_677716b1255a93d4b55247b3a7975c9e8e1aa0b79f735b2be961000732efd718->leave($__internal_677716b1255a93d4b55247b3a7975c9e8e1aa0b79f735b2be961000732efd718_prof);

        
        $__internal_81f6a39a29b894b62f16047b5927dd6ceb0414c2d191594f0d7f5847f760adbd->leave($__internal_81f6a39a29b894b62f16047b5927dd6ceb0414c2d191594f0d7f5847f760adbd_prof);

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
