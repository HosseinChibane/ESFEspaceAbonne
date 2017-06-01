<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_f693788ec7e82f1313b42122b50b8a0d7de0d85ba9a8c5b454761f632864ac7d extends Twig_Template
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
        $__internal_0e86ae1b3924a7db8d7a43e934043647941734c54eff9ccfbcd163dcbcb17a0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e86ae1b3924a7db8d7a43e934043647941734c54eff9ccfbcd163dcbcb17a0d->enter($__internal_0e86ae1b3924a7db8d7a43e934043647941734c54eff9ccfbcd163dcbcb17a0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_bb4964f4df42ce7f580d3dec60c83e3088b309d17c413891470f8acacadbe46c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb4964f4df42ce7f580d3dec60c83e3088b309d17c413891470f8acacadbe46c->enter($__internal_bb4964f4df42ce7f580d3dec60c83e3088b309d17c413891470f8acacadbe46c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_0e86ae1b3924a7db8d7a43e934043647941734c54eff9ccfbcd163dcbcb17a0d->leave($__internal_0e86ae1b3924a7db8d7a43e934043647941734c54eff9ccfbcd163dcbcb17a0d_prof);

        
        $__internal_bb4964f4df42ce7f580d3dec60c83e3088b309d17c413891470f8acacadbe46c->leave($__internal_bb4964f4df42ce7f580d3dec60c83e3088b309d17c413891470f8acacadbe46c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
", "TwigBundle:Exception:error.js.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
