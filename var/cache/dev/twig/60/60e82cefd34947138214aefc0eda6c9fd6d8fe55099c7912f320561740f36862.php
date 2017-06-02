<?php

/* @Twig/Exception/traces.xml.twig */
class __TwigTemplate_64f248ecf9326c9d0b9ddb4b5effd5cb5dde46eb5a334f0f4e2d88688581f589 extends Twig_Template
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
        $__internal_a8284b21a5ddde8f4128db571e30bb594d22a7467635d6fa2b671aa9c2a5edb2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8284b21a5ddde8f4128db571e30bb594d22a7467635d6fa2b671aa9c2a5edb2->enter($__internal_a8284b21a5ddde8f4128db571e30bb594d22a7467635d6fa2b671aa9c2a5edb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        $__internal_4285c4569a514209ef1e2c8ea5c7a1e2dcb8367c288577a6f62243d7d2b54b65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4285c4569a514209ef1e2c8ea5c7a1e2dcb8367c288577a6f62243d7d2b54b65->enter($__internal_4285c4569a514209ef1e2c8ea5c7a1e2dcb8367c288577a6f62243d7d2b54b65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.xml.twig", 4)->display(array("trace" => $context["trace"]));
            // line 5
            echo "
            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_a8284b21a5ddde8f4128db571e30bb594d22a7467635d6fa2b671aa9c2a5edb2->leave($__internal_a8284b21a5ddde8f4128db571e30bb594d22a7467635d6fa2b671aa9c2a5edb2_prof);

        
        $__internal_4285c4569a514209ef1e2c8ea5c7a1e2dcb8367c288577a6f62243d7d2b54b65->leave($__internal_4285c4569a514209ef1e2c8ea5c7a1e2dcb8367c288577a6f62243d7d2b54b65_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  37 => 5,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

            </trace>
{% endfor %}
        </traces>
", "@Twig/Exception/traces.xml.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\traces.xml.twig");
    }
}
