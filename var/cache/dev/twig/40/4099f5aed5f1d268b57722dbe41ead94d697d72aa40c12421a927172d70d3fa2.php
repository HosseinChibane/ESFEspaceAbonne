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
        $__internal_6530eb480342257eee78c9c766af0d29317e63d47fa2c4bf3433563abdeb30b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6530eb480342257eee78c9c766af0d29317e63d47fa2c4bf3433563abdeb30b9->enter($__internal_6530eb480342257eee78c9c766af0d29317e63d47fa2c4bf3433563abdeb30b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        $__internal_de0befebd206a8a598118b916070a1ef44aa8dfe1fddad9455bcec66ef82b13f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de0befebd206a8a598118b916070a1ef44aa8dfe1fddad9455bcec66ef82b13f->enter($__internal_de0befebd206a8a598118b916070a1ef44aa8dfe1fddad9455bcec66ef82b13f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

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
        
        $__internal_6530eb480342257eee78c9c766af0d29317e63d47fa2c4bf3433563abdeb30b9->leave($__internal_6530eb480342257eee78c9c766af0d29317e63d47fa2c4bf3433563abdeb30b9_prof);

        
        $__internal_de0befebd206a8a598118b916070a1ef44aa8dfe1fddad9455bcec66ef82b13f->leave($__internal_de0befebd206a8a598118b916070a1ef44aa8dfe1fddad9455bcec66ef82b13f_prof);

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
