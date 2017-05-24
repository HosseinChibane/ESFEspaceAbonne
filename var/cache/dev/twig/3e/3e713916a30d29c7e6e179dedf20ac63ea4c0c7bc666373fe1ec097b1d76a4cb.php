<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_4127eded2460d3908f12508816f80420977cdd5e2c197fbcca02dea238836141 extends Twig_Template
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
        $__internal_6e226981adb857a760585bc9733e4cd3b9c295fd2a8f2b0d65f72e023ba1f939 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e226981adb857a760585bc9733e4cd3b9c295fd2a8f2b0d65f72e023ba1f939->enter($__internal_6e226981adb857a760585bc9733e4cd3b9c295fd2a8f2b0d65f72e023ba1f939_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_40b5c7f91d0cb6e408db32e3fb72a2d2fd0fc3b7a1abf170558ff2a92d4c10ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40b5c7f91d0cb6e408db32e3fb72a2d2fd0fc3b7a1abf170558ff2a92d4c10ce->enter($__internal_40b5c7f91d0cb6e408db32e3fb72a2d2fd0fc3b7a1abf170558ff2a92d4c10ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

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
        
        $__internal_6e226981adb857a760585bc9733e4cd3b9c295fd2a8f2b0d65f72e023ba1f939->leave($__internal_6e226981adb857a760585bc9733e4cd3b9c295fd2a8f2b0d65f72e023ba1f939_prof);

        
        $__internal_40b5c7f91d0cb6e408db32e3fb72a2d2fd0fc3b7a1abf170558ff2a92d4c10ce->leave($__internal_40b5c7f91d0cb6e408db32e3fb72a2d2fd0fc3b7a1abf170558ff2a92d4c10ce_prof);

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
