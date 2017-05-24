<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_7a6a2124b5ddd2d41e74f4792325d18e6576456ba07c84c31af18fc1ac83c11a extends Twig_Template
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
        $__internal_6da32527a973758e291399e6a180622d7922d623b1c4d02c9beba5b578fb0ffc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6da32527a973758e291399e6a180622d7922d623b1c4d02c9beba5b578fb0ffc->enter($__internal_6da32527a973758e291399e6a180622d7922d623b1c4d02c9beba5b578fb0ffc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_ce5ff2e5eb9e59f9d3c8571a7fcea216dc1e4267cbec377b59e8c8c852c8304e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce5ff2e5eb9e59f9d3c8571a7fcea216dc1e4267cbec377b59e8c8c852c8304e->enter($__internal_ce5ff2e5eb9e59f9d3c8571a7fcea216dc1e4267cbec377b59e8c8c852c8304e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_6da32527a973758e291399e6a180622d7922d623b1c4d02c9beba5b578fb0ffc->leave($__internal_6da32527a973758e291399e6a180622d7922d623b1c4d02c9beba5b578fb0ffc_prof);

        
        $__internal_ce5ff2e5eb9e59f9d3c8571a7fcea216dc1e4267cbec377b59e8c8c852c8304e->leave($__internal_ce5ff2e5eb9e59f9d3c8571a7fcea216dc1e4267cbec377b59e8c8c852c8304e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  31 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
{% for trace in exception.trace %}
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

{% endfor %}
{% endif %}
", "@Twig/Exception/traces.txt.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\traces.txt.twig");
    }
}
