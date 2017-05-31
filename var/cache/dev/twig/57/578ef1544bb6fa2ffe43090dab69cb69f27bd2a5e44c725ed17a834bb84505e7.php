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
        $__internal_d5ba5c4da80f6644f1525d89b34ff51ba5dab28f7493eed8b484d8228c2fa8fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5ba5c4da80f6644f1525d89b34ff51ba5dab28f7493eed8b484d8228c2fa8fe->enter($__internal_d5ba5c4da80f6644f1525d89b34ff51ba5dab28f7493eed8b484d8228c2fa8fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_fbc9cbd296debf436a0a0a1048b8f68c1735d66d87b3336e18c288356bfe8262 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbc9cbd296debf436a0a0a1048b8f68c1735d66d87b3336e18c288356bfe8262->enter($__internal_fbc9cbd296debf436a0a0a1048b8f68c1735d66d87b3336e18c288356bfe8262_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_d5ba5c4da80f6644f1525d89b34ff51ba5dab28f7493eed8b484d8228c2fa8fe->leave($__internal_d5ba5c4da80f6644f1525d89b34ff51ba5dab28f7493eed8b484d8228c2fa8fe_prof);

        
        $__internal_fbc9cbd296debf436a0a0a1048b8f68c1735d66d87b3336e18c288356bfe8262->leave($__internal_fbc9cbd296debf436a0a0a1048b8f68c1735d66d87b3336e18c288356bfe8262_prof);

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
