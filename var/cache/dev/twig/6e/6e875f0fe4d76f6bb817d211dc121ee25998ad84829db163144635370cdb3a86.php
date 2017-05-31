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
        $__internal_8be3a0245728197c9d32a054c282390aed38f797f7345e1a5c3588e9a795d15b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8be3a0245728197c9d32a054c282390aed38f797f7345e1a5c3588e9a795d15b->enter($__internal_8be3a0245728197c9d32a054c282390aed38f797f7345e1a5c3588e9a795d15b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_192fc7fc3a019dfa42f0d27f2f49962e9fe5b95c4624521d68defa123434a6ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_192fc7fc3a019dfa42f0d27f2f49962e9fe5b95c4624521d68defa123434a6ae->enter($__internal_192fc7fc3a019dfa42f0d27f2f49962e9fe5b95c4624521d68defa123434a6ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

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
        
        $__internal_8be3a0245728197c9d32a054c282390aed38f797f7345e1a5c3588e9a795d15b->leave($__internal_8be3a0245728197c9d32a054c282390aed38f797f7345e1a5c3588e9a795d15b_prof);

        
        $__internal_192fc7fc3a019dfa42f0d27f2f49962e9fe5b95c4624521d68defa123434a6ae->leave($__internal_192fc7fc3a019dfa42f0d27f2f49962e9fe5b95c4624521d68defa123434a6ae_prof);

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
