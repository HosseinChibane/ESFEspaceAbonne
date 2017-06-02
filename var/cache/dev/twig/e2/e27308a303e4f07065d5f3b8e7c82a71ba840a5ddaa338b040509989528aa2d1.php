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
        $__internal_ec2a2b75f3f46e14a192e1e4495299e01922b5ab6c9a25397728446c8ce930dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec2a2b75f3f46e14a192e1e4495299e01922b5ab6c9a25397728446c8ce930dc->enter($__internal_ec2a2b75f3f46e14a192e1e4495299e01922b5ab6c9a25397728446c8ce930dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_c271a4273696df2e6025dd59426434b9e0f10f1e9eda4c68504f8c078783ce81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c271a4273696df2e6025dd59426434b9e0f10f1e9eda4c68504f8c078783ce81->enter($__internal_c271a4273696df2e6025dd59426434b9e0f10f1e9eda4c68504f8c078783ce81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_ec2a2b75f3f46e14a192e1e4495299e01922b5ab6c9a25397728446c8ce930dc->leave($__internal_ec2a2b75f3f46e14a192e1e4495299e01922b5ab6c9a25397728446c8ce930dc_prof);

        
        $__internal_c271a4273696df2e6025dd59426434b9e0f10f1e9eda4c68504f8c078783ce81->leave($__internal_c271a4273696df2e6025dd59426434b9e0f10f1e9eda4c68504f8c078783ce81_prof);

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
