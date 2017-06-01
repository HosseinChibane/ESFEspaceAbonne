<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_7f504cad57161ea3ac8948e43f2e9d3717821a8b386d2fe66cb0e0a17297c829 extends Twig_Template
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
        $__internal_09cd4c26a5fbbf63a9eaede3c01b12599cf3ad520474e98dd2bb4dc59b5c4deb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09cd4c26a5fbbf63a9eaede3c01b12599cf3ad520474e98dd2bb4dc59b5c4deb->enter($__internal_09cd4c26a5fbbf63a9eaede3c01b12599cf3ad520474e98dd2bb4dc59b5c4deb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_5ed19c4f099e72ea25c6a55574a61105c5cc859781d8d43ce741eacb78b6f72f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ed19c4f099e72ea25c6a55574a61105c5cc859781d8d43ce741eacb78b6f72f->enter($__internal_5ed19c4f099e72ea25c6a55574a61105c5cc859781d8d43ce741eacb78b6f72f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_09cd4c26a5fbbf63a9eaede3c01b12599cf3ad520474e98dd2bb4dc59b5c4deb->leave($__internal_09cd4c26a5fbbf63a9eaede3c01b12599cf3ad520474e98dd2bb4dc59b5c4deb_prof);

        
        $__internal_5ed19c4f099e72ea25c6a55574a61105c5cc859781d8d43ce741eacb78b6f72f->leave($__internal_5ed19c4f099e72ea25c6a55574a61105c5cc859781d8d43ce741eacb78b6f72f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
", "TwigBundle:Exception:error.rdf.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
