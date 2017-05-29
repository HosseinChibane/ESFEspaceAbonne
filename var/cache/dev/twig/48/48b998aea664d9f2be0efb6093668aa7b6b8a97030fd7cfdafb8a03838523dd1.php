<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_86c2ad551ebe1bb17812582cc48b29c0e2cfce02edc682225822547dd78200df extends Twig_Template
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
        $__internal_a8cde7182b363ea9fe928ade19f4f9212835f415d1bf0cc75d1fb0906b7095c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8cde7182b363ea9fe928ade19f4f9212835f415d1bf0cc75d1fb0906b7095c6->enter($__internal_a8cde7182b363ea9fe928ade19f4f9212835f415d1bf0cc75d1fb0906b7095c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_c1616d91cd13d155dcf308b9218f8f9d2fea07bb666cb2232f71976629062128 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1616d91cd13d155dcf308b9218f8f9d2fea07bb666cb2232f71976629062128->enter($__internal_c1616d91cd13d155dcf308b9218f8f9d2fea07bb666cb2232f71976629062128_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

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
        
        $__internal_a8cde7182b363ea9fe928ade19f4f9212835f415d1bf0cc75d1fb0906b7095c6->leave($__internal_a8cde7182b363ea9fe928ade19f4f9212835f415d1bf0cc75d1fb0906b7095c6_prof);

        
        $__internal_c1616d91cd13d155dcf308b9218f8f9d2fea07bb666cb2232f71976629062128->leave($__internal_c1616d91cd13d155dcf308b9218f8f9d2fea07bb666cb2232f71976629062128_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
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
", "TwigBundle:Exception:error.txt.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
