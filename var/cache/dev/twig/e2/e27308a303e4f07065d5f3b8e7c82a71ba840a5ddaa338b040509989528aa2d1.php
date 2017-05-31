<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_9d21a8e78a8550bf370ecfa92ff5a7de446c20a2453714ae36c673b88e9cbf39 extends Twig_Template
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
        $__internal_4afdf9ed171cc7d0899fe7dd85c2309ba8b268b9b690220030cb4d4d651137bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4afdf9ed171cc7d0899fe7dd85c2309ba8b268b9b690220030cb4d4d651137bc->enter($__internal_4afdf9ed171cc7d0899fe7dd85c2309ba8b268b9b690220030cb4d4d651137bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_f8e59bd024342b0dfbc8879c4f2a4c344a53f0809902d2ba75627d6fe7a2a72c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8e59bd024342b0dfbc8879c4f2a4c344a53f0809902d2ba75627d6fe7a2a72c->enter($__internal_f8e59bd024342b0dfbc8879c4f2a4c344a53f0809902d2ba75627d6fe7a2a72c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_4afdf9ed171cc7d0899fe7dd85c2309ba8b268b9b690220030cb4d4d651137bc->leave($__internal_4afdf9ed171cc7d0899fe7dd85c2309ba8b268b9b690220030cb4d4d651137bc_prof);

        
        $__internal_f8e59bd024342b0dfbc8879c4f2a4c344a53f0809902d2ba75627d6fe7a2a72c->leave($__internal_f8e59bd024342b0dfbc8879c4f2a4c344a53f0809902d2ba75627d6fe7a2a72c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "@Twig/Exception/error.json.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.json.twig");
    }
}
