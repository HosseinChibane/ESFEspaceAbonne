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
        $__internal_33c3f8ecf0cd5d4c2328828a7133ad455d584b099fb9cf95289f641ad5c87d0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33c3f8ecf0cd5d4c2328828a7133ad455d584b099fb9cf95289f641ad5c87d0f->enter($__internal_33c3f8ecf0cd5d4c2328828a7133ad455d584b099fb9cf95289f641ad5c87d0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_0edee2e6bf7f7201464b652bd7860da2b5d76c724e718c713671b66f2b84e46f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0edee2e6bf7f7201464b652bd7860da2b5d76c724e718c713671b66f2b84e46f->enter($__internal_0edee2e6bf7f7201464b652bd7860da2b5d76c724e718c713671b66f2b84e46f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_33c3f8ecf0cd5d4c2328828a7133ad455d584b099fb9cf95289f641ad5c87d0f->leave($__internal_33c3f8ecf0cd5d4c2328828a7133ad455d584b099fb9cf95289f641ad5c87d0f_prof);

        
        $__internal_0edee2e6bf7f7201464b652bd7860da2b5d76c724e718c713671b66f2b84e46f->leave($__internal_0edee2e6bf7f7201464b652bd7860da2b5d76c724e718c713671b66f2b84e46f_prof);

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
