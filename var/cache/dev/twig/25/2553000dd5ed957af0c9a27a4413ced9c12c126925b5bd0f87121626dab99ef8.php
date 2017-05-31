<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_1a974130bb256025ebebf3b01571b6dfce70f6c570330f2fc4191d528595a91e extends Twig_Template
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
        $__internal_9f2bdc26b9fc7daaa36a94816807163760d52eff02b5a013a4247b34db0658a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f2bdc26b9fc7daaa36a94816807163760d52eff02b5a013a4247b34db0658a0->enter($__internal_9f2bdc26b9fc7daaa36a94816807163760d52eff02b5a013a4247b34db0658a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_7eeb344257d234dcdf992cd40ad455a24ae0380ecec7f61ad042bbea7fd82011 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7eeb344257d234dcdf992cd40ad455a24ae0380ecec7f61ad042bbea7fd82011->enter($__internal_7eeb344257d234dcdf992cd40ad455a24ae0380ecec7f61ad042bbea7fd82011_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_9f2bdc26b9fc7daaa36a94816807163760d52eff02b5a013a4247b34db0658a0->leave($__internal_9f2bdc26b9fc7daaa36a94816807163760d52eff02b5a013a4247b34db0658a0_prof);

        
        $__internal_7eeb344257d234dcdf992cd40ad455a24ae0380ecec7f61ad042bbea7fd82011->leave($__internal_7eeb344257d234dcdf992cd40ad455a24ae0380ecec7f61ad042bbea7fd82011_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
", "TwigBundle:Exception:exception.rdf.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
