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
        $__internal_e7a40f502c76eb659ee3369b3ca1656d11b7159d90f03fec977fde6ef8eaaa42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7a40f502c76eb659ee3369b3ca1656d11b7159d90f03fec977fde6ef8eaaa42->enter($__internal_e7a40f502c76eb659ee3369b3ca1656d11b7159d90f03fec977fde6ef8eaaa42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_ee11e8b046138e4b572ea17da00f3f6750ac0cc25931ab0c0a53861ee2236433 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee11e8b046138e4b572ea17da00f3f6750ac0cc25931ab0c0a53861ee2236433->enter($__internal_ee11e8b046138e4b572ea17da00f3f6750ac0cc25931ab0c0a53861ee2236433_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_e7a40f502c76eb659ee3369b3ca1656d11b7159d90f03fec977fde6ef8eaaa42->leave($__internal_e7a40f502c76eb659ee3369b3ca1656d11b7159d90f03fec977fde6ef8eaaa42_prof);

        
        $__internal_ee11e8b046138e4b572ea17da00f3f6750ac0cc25931ab0c0a53861ee2236433->leave($__internal_ee11e8b046138e4b572ea17da00f3f6750ac0cc25931ab0c0a53861ee2236433_prof);

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
