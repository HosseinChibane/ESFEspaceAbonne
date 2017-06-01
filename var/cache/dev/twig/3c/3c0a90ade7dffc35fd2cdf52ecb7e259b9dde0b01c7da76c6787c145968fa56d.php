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
        $__internal_3f0d08136dc13da730978a5d1c2ec10cdc188d1195b0216e8baec4db7b599f38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f0d08136dc13da730978a5d1c2ec10cdc188d1195b0216e8baec4db7b599f38->enter($__internal_3f0d08136dc13da730978a5d1c2ec10cdc188d1195b0216e8baec4db7b599f38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        $__internal_1e86e336743bec6b1c476514c31a69e10f9314d0ae1d74937c958f7a75f436ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e86e336743bec6b1c476514c31a69e10f9314d0ae1d74937c958f7a75f436ec->enter($__internal_1e86e336743bec6b1c476514c31a69e10f9314d0ae1d74937c958f7a75f436ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

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
        
        $__internal_3f0d08136dc13da730978a5d1c2ec10cdc188d1195b0216e8baec4db7b599f38->leave($__internal_3f0d08136dc13da730978a5d1c2ec10cdc188d1195b0216e8baec4db7b599f38_prof);

        
        $__internal_1e86e336743bec6b1c476514c31a69e10f9314d0ae1d74937c958f7a75f436ec->leave($__internal_1e86e336743bec6b1c476514c31a69e10f9314d0ae1d74937c958f7a75f436ec_prof);

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
