<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_870747102dec4c530e2146e632c637d98d23db7e5d2e2c0994dcbb7c91837f2a extends Twig_Template
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
        $__internal_b7e9f6303a97eee9e86d1ce601345db25233bab83c3976f5d8af9813d684b004 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7e9f6303a97eee9e86d1ce601345db25233bab83c3976f5d8af9813d684b004->enter($__internal_b7e9f6303a97eee9e86d1ce601345db25233bab83c3976f5d8af9813d684b004_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_480a73b303de18a82fac2298fe4dd0019e603e7539a29a54db16819249bbb28b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_480a73b303de18a82fac2298fe4dd0019e603e7539a29a54db16819249bbb28b->enter($__internal_480a73b303de18a82fac2298fe4dd0019e603e7539a29a54db16819249bbb28b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_b7e9f6303a97eee9e86d1ce601345db25233bab83c3976f5d8af9813d684b004->leave($__internal_b7e9f6303a97eee9e86d1ce601345db25233bab83c3976f5d8af9813d684b004_prof);

        
        $__internal_480a73b303de18a82fac2298fe4dd0019e603e7539a29a54db16819249bbb28b->leave($__internal_480a73b303de18a82fac2298fe4dd0019e603e7539a29a54db16819249bbb28b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.atom.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
