<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_7835299414e9709ed525443ccc963cf78a374bafb29b3f52daf2747c064f48db extends Twig_Template
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
        $__internal_8fe031f439756ea336c2671b6b37ee9f454e7ddc5e291d084beb05068816f9b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8fe031f439756ea336c2671b6b37ee9f454e7ddc5e291d084beb05068816f9b2->enter($__internal_8fe031f439756ea336c2671b6b37ee9f454e7ddc5e291d084beb05068816f9b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_086f16c2b4b72c22a20f00d1521bb4766ce91027239ec8c935639a694a9c3b5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_086f16c2b4b72c22a20f00d1521bb4766ce91027239ec8c935639a694a9c3b5e->enter($__internal_086f16c2b4b72c22a20f00d1521bb4766ce91027239ec8c935639a694a9c3b5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

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
        
        $__internal_8fe031f439756ea336c2671b6b37ee9f454e7ddc5e291d084beb05068816f9b2->leave($__internal_8fe031f439756ea336c2671b6b37ee9f454e7ddc5e291d084beb05068816f9b2_prof);

        
        $__internal_086f16c2b4b72c22a20f00d1521bb4766ce91027239ec8c935639a694a9c3b5e->leave($__internal_086f16c2b4b72c22a20f00d1521bb4766ce91027239ec8c935639a694a9c3b5e_prof);

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
