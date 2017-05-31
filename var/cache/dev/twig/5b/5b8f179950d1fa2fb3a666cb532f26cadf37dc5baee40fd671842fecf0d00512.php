<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_51127bdfd0b07024cdf461245c5688f4dfa899885611c2a9b60443b5b7a4c617 extends Twig_Template
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
        $__internal_e68a327dbec0f7f4ba426d500d3de9214091c59fc47d4200a1cd79f977d7cdcc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e68a327dbec0f7f4ba426d500d3de9214091c59fc47d4200a1cd79f977d7cdcc->enter($__internal_e68a327dbec0f7f4ba426d500d3de9214091c59fc47d4200a1cd79f977d7cdcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        $__internal_686eb92a6c1cf95efc7465ae2a88b43df9de2bd1f2b90e8990d77f3b0930c00d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_686eb92a6c1cf95efc7465ae2a88b43df9de2bd1f2b90e8990d77f3b0930c00d->enter($__internal_686eb92a6c1cf95efc7465ae2a88b43df9de2bd1f2b90e8990d77f3b0930c00d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_e68a327dbec0f7f4ba426d500d3de9214091c59fc47d4200a1cd79f977d7cdcc->leave($__internal_e68a327dbec0f7f4ba426d500d3de9214091c59fc47d4200a1cd79f977d7cdcc_prof);

        
        $__internal_686eb92a6c1cf95efc7465ae2a88b43df9de2bd1f2b90e8990d77f3b0930c00d->leave($__internal_686eb92a6c1cf95efc7465ae2a88b43df9de2bd1f2b90e8990d77f3b0930c00d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
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
", "@Twig/Exception/error.js.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.js.twig");
    }
}
