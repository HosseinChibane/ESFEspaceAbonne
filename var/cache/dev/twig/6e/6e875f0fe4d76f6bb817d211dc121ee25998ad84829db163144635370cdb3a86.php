<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_ff5e6085d685c8340b3e5b6f2683dbf97a9970e2ee9f18937f0b35bba34feab4 extends Twig_Template
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
        $__internal_7b3d35c511514b0c663824f3f4f31331be6ea4b8a7a55447718a609f04082ce4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b3d35c511514b0c663824f3f4f31331be6ea4b8a7a55447718a609f04082ce4->enter($__internal_7b3d35c511514b0c663824f3f4f31331be6ea4b8a7a55447718a609f04082ce4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_64ce10d9718ba5b0b0a1ae100e9a707564087ea881d49d5f766ec36b18e96e93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64ce10d9718ba5b0b0a1ae100e9a707564087ea881d49d5f766ec36b18e96e93->enter($__internal_64ce10d9718ba5b0b0a1ae100e9a707564087ea881d49d5f766ec36b18e96e93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_7b3d35c511514b0c663824f3f4f31331be6ea4b8a7a55447718a609f04082ce4->leave($__internal_7b3d35c511514b0c663824f3f4f31331be6ea4b8a7a55447718a609f04082ce4_prof);

        
        $__internal_64ce10d9718ba5b0b0a1ae100e9a707564087ea881d49d5f766ec36b18e96e93->leave($__internal_64ce10d9718ba5b0b0a1ae100e9a707564087ea881d49d5f766ec36b18e96e93_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
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
{{ status_code }} {{ status_text }}

*/
", "@Twig/Exception/error.css.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.css.twig");
    }
}
