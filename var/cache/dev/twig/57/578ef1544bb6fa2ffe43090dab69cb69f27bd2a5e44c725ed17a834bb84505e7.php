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
        $__internal_64361d4cf44378898df9ce6f9e4eda4b2081cdf39e33ced03cfdef975f7d6434 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64361d4cf44378898df9ce6f9e4eda4b2081cdf39e33ced03cfdef975f7d6434->enter($__internal_64361d4cf44378898df9ce6f9e4eda4b2081cdf39e33ced03cfdef975f7d6434_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_c3370687a8f9dfa0a80dc57033b3344eff0ca9c300bedfd71e442b41fafda9ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3370687a8f9dfa0a80dc57033b3344eff0ca9c300bedfd71e442b41fafda9ed->enter($__internal_c3370687a8f9dfa0a80dc57033b3344eff0ca9c300bedfd71e442b41fafda9ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_64361d4cf44378898df9ce6f9e4eda4b2081cdf39e33ced03cfdef975f7d6434->leave($__internal_64361d4cf44378898df9ce6f9e4eda4b2081cdf39e33ced03cfdef975f7d6434_prof);

        
        $__internal_c3370687a8f9dfa0a80dc57033b3344eff0ca9c300bedfd71e442b41fafda9ed->leave($__internal_c3370687a8f9dfa0a80dc57033b3344eff0ca9c300bedfd71e442b41fafda9ed_prof);

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
