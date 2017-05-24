<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_dfac1bb7d1c4d41c31351a50cb9fbb1802c76a212a9046e7980f3679a53d7b9d extends Twig_Template
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
        $__internal_6c69c75b4c7d947a8dac90b3ec637d0c204bbefb0e72bc3e23c6357beede69e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c69c75b4c7d947a8dac90b3ec637d0c204bbefb0e72bc3e23c6357beede69e5->enter($__internal_6c69c75b4c7d947a8dac90b3ec637d0c204bbefb0e72bc3e23c6357beede69e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_e5c65d08fbf3fefb3c40b24676002aaaac429fad0907c8bda43d9b68adc566f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5c65d08fbf3fefb3c40b24676002aaaac429fad0907c8bda43d9b68adc566f8->enter($__internal_e5c65d08fbf3fefb3c40b24676002aaaac429fad0907c8bda43d9b68adc566f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_6c69c75b4c7d947a8dac90b3ec637d0c204bbefb0e72bc3e23c6357beede69e5->leave($__internal_6c69c75b4c7d947a8dac90b3ec637d0c204bbefb0e72bc3e23c6357beede69e5_prof);

        
        $__internal_e5c65d08fbf3fefb3c40b24676002aaaac429fad0907c8bda43d9b68adc566f8->leave($__internal_e5c65d08fbf3fefb3c40b24676002aaaac429fad0907c8bda43d9b68adc566f8_prof);

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
