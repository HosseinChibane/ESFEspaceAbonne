<?php

/* TwigBundle:Exception:traces.xml.twig */
class __TwigTemplate_9efb20665ef65d362f72f57b1033050fd3e20f64f7a068f109b6174b4117f65d extends Twig_Template
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
        $__internal_a13398551bc23c375addb4b29b6db783c683c48368c1a865dda82a3194914281 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a13398551bc23c375addb4b29b6db783c683c48368c1a865dda82a3194914281->enter($__internal_a13398551bc23c375addb4b29b6db783c683c48368c1a865dda82a3194914281_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        $__internal_c79ecc9b7f7eb08076ca42564b39aa7d3d9d6d2e3ed8feb75d8afa9524500343 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c79ecc9b7f7eb08076ca42564b39aa7d3d9d6d2e3ed8feb75d8afa9524500343->enter($__internal_c79ecc9b7f7eb08076ca42564b39aa7d3d9d6d2e3ed8feb75d8afa9524500343_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

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
            $this->loadTemplate("@Twig/Exception/trace.txt.twig", "TwigBundle:Exception:traces.xml.twig", 4)->display(array("trace" => $context["trace"]));
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
        
        $__internal_a13398551bc23c375addb4b29b6db783c683c48368c1a865dda82a3194914281->leave($__internal_a13398551bc23c375addb4b29b6db783c683c48368c1a865dda82a3194914281_prof);

        
        $__internal_c79ecc9b7f7eb08076ca42564b39aa7d3d9d6d2e3ed8feb75d8afa9524500343->leave($__internal_c79ecc9b7f7eb08076ca42564b39aa7d3d9d6d2e3ed8feb75d8afa9524500343_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.xml.twig";
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
", "TwigBundle:Exception:traces.xml.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/traces.xml.twig");
    }
}