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
        $__internal_944faa950e7d17b9dacf6f70c4f83733516b71d45d3c1209cdf47302ec146934 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_944faa950e7d17b9dacf6f70c4f83733516b71d45d3c1209cdf47302ec146934->enter($__internal_944faa950e7d17b9dacf6f70c4f83733516b71d45d3c1209cdf47302ec146934_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_b644e993bd3f5e9e16a5c13f8c405e95bef42d08593d29e1e2d682be13619875 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b644e993bd3f5e9e16a5c13f8c405e95bef42d08593d29e1e2d682be13619875->enter($__internal_b644e993bd3f5e9e16a5c13f8c405e95bef42d08593d29e1e2d682be13619875_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_944faa950e7d17b9dacf6f70c4f83733516b71d45d3c1209cdf47302ec146934->leave($__internal_944faa950e7d17b9dacf6f70c4f83733516b71d45d3c1209cdf47302ec146934_prof);

        
        $__internal_b644e993bd3f5e9e16a5c13f8c405e95bef42d08593d29e1e2d682be13619875->leave($__internal_b644e993bd3f5e9e16a5c13f8c405e95bef42d08593d29e1e2d682be13619875_prof);

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
