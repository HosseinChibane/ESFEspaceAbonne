<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_a85918de05cbbd749cf63a17540aedffdcc4d7e03a2e5faa65d8a57d64d0e829 extends Twig_Template
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
        $__internal_026ec52772395ed0b5a0d00be1167963391c5ece14af193b259ebd2cdaeb964e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_026ec52772395ed0b5a0d00be1167963391c5ece14af193b259ebd2cdaeb964e->enter($__internal_026ec52772395ed0b5a0d00be1167963391c5ece14af193b259ebd2cdaeb964e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_2c301fcf1a67975501d783340a0df7d7f7d67cee625aa20f2a8c15eacbd2ddcf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c301fcf1a67975501d783340a0df7d7f7d67cee625aa20f2a8c15eacbd2ddcf->enter($__internal_2c301fcf1a67975501d783340a0df7d7f7d67cee625aa20f2a8c15eacbd2ddcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_026ec52772395ed0b5a0d00be1167963391c5ece14af193b259ebd2cdaeb964e->leave($__internal_026ec52772395ed0b5a0d00be1167963391c5ece14af193b259ebd2cdaeb964e_prof);

        
        $__internal_2c301fcf1a67975501d783340a0df7d7f7d67cee625aa20f2a8c15eacbd2ddcf->leave($__internal_2c301fcf1a67975501d783340a0df7d7f7d67cee625aa20f2a8c15eacbd2ddcf_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "@Twig/Exception/exception.json.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.json.twig");
    }
}
