<?php

/* TwigBundle:Exception:traces.txt.twig */
class __TwigTemplate_3b3064d108a550ed136f4a6e312e8cc47219b27cb7ff578bdd3f3db4554355aa extends Twig_Template
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
        $__internal_4788fc4c73c307b1a2b3bee853cefa322ca27b65da64ffc2409cc903891464cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4788fc4c73c307b1a2b3bee853cefa322ca27b65da64ffc2409cc903891464cd->enter($__internal_4788fc4c73c307b1a2b3bee853cefa322ca27b65da64ffc2409cc903891464cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

        $__internal_7b4c9f097f5ee7f29ce4dc071728396fd4150d7e33ef639fc169457c3aeae413 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b4c9f097f5ee7f29ce4dc071728396fd4150d7e33ef639fc169457c3aeae413->enter($__internal_7b4c9f097f5ee7f29ce4dc071728396fd4150d7e33ef639fc169457c3aeae413_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "TwigBundle:Exception:traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_4788fc4c73c307b1a2b3bee853cefa322ca27b65da64ffc2409cc903891464cd->leave($__internal_4788fc4c73c307b1a2b3bee853cefa322ca27b65da64ffc2409cc903891464cd_prof);

        
        $__internal_7b4c9f097f5ee7f29ce4dc071728396fd4150d7e33ef639fc169457c3aeae413->leave($__internal_7b4c9f097f5ee7f29ce4dc071728396fd4150d7e33ef639fc169457c3aeae413_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.txt.twig";
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
", "TwigBundle:Exception:traces.txt.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/traces.txt.twig");
    }
}
