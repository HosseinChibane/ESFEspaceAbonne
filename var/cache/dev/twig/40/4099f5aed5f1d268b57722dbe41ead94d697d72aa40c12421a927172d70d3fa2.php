<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_f795458e28f1cc5816869e0489a29daaf4a442b0dceb5020827a43108192c747 extends Twig_Template
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
        $__internal_829bc6cc09a02a7a7d8eff35e1a0ddce9a0f57f115955b9a8bf5d55a99d7544b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_829bc6cc09a02a7a7d8eff35e1a0ddce9a0f57f115955b9a8bf5d55a99d7544b->enter($__internal_829bc6cc09a02a7a7d8eff35e1a0ddce9a0f57f115955b9a8bf5d55a99d7544b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        $__internal_ec36dfe1b6329cf030050478f2cf2d5d82f13ab6312961a02e4b0273ad879f10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec36dfe1b6329cf030050478f2cf2d5d82f13ab6312961a02e4b0273ad879f10->enter($__internal_ec36dfe1b6329cf030050478f2cf2d5d82f13ab6312961a02e4b0273ad879f10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo ($context["status_code"] ?? $this->getContext($context, "status_code"));
        echo " ";
        echo ($context["status_text"] ?? $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_829bc6cc09a02a7a7d8eff35e1a0ddce9a0f57f115955b9a8bf5d55a99d7544b->leave($__internal_829bc6cc09a02a7a7d8eff35e1a0ddce9a0f57f115955b9a8bf5d55a99d7544b_prof);

        
        $__internal_ec36dfe1b6329cf030050478f2cf2d5d82f13ab6312961a02e4b0273ad879f10->leave($__internal_ec36dfe1b6329cf030050478f2cf2d5d82f13ab6312961a02e4b0273ad879f10_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "@Twig/Exception/error.txt.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.txt.twig");
    }
}
