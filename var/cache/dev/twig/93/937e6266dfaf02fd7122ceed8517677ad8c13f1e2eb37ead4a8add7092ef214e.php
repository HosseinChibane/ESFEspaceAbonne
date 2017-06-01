<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_76f39323b0263d82465756e8e47bcfa1c3d09e28681a18ee201c4455761b1335 extends Twig_Template
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
        $__internal_d7d7b2feabc4da1aad9fc0bf62eb8526fcf5fb16a34cd1a2be2dfa8974b63e3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7d7b2feabc4da1aad9fc0bf62eb8526fcf5fb16a34cd1a2be2dfa8974b63e3c->enter($__internal_d7d7b2feabc4da1aad9fc0bf62eb8526fcf5fb16a34cd1a2be2dfa8974b63e3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_9d5eb75a7831e9521223620509c6cfdd36e71d6cd195c8f372eebae8013fd379 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d5eb75a7831e9521223620509c6cfdd36e71d6cd195c8f372eebae8013fd379->enter($__internal_9d5eb75a7831e9521223620509c6cfdd36e71d6cd195c8f372eebae8013fd379_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_d7d7b2feabc4da1aad9fc0bf62eb8526fcf5fb16a34cd1a2be2dfa8974b63e3c->leave($__internal_d7d7b2feabc4da1aad9fc0bf62eb8526fcf5fb16a34cd1a2be2dfa8974b63e3c_prof);

        
        $__internal_9d5eb75a7831e9521223620509c6cfdd36e71d6cd195c8f372eebae8013fd379->leave($__internal_9d5eb75a7831e9521223620509c6cfdd36e71d6cd195c8f372eebae8013fd379_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
", "TwigBundle:Exception:exception.css.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
