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
        $__internal_81b1f7b72907fb7097603757a3a3daf48231819c06150d86cf7d635058faf40f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81b1f7b72907fb7097603757a3a3daf48231819c06150d86cf7d635058faf40f->enter($__internal_81b1f7b72907fb7097603757a3a3daf48231819c06150d86cf7d635058faf40f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_df894102b595e46fdce60968428e370229a50e4097ed7fadda93fae93ca5d19b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df894102b595e46fdce60968428e370229a50e4097ed7fadda93fae93ca5d19b->enter($__internal_df894102b595e46fdce60968428e370229a50e4097ed7fadda93fae93ca5d19b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_81b1f7b72907fb7097603757a3a3daf48231819c06150d86cf7d635058faf40f->leave($__internal_81b1f7b72907fb7097603757a3a3daf48231819c06150d86cf7d635058faf40f_prof);

        
        $__internal_df894102b595e46fdce60968428e370229a50e4097ed7fadda93fae93ca5d19b->leave($__internal_df894102b595e46fdce60968428e370229a50e4097ed7fadda93fae93ca5d19b_prof);

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
