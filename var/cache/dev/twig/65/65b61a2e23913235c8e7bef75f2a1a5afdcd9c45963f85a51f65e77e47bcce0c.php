<?php

/* TwigBundle:Exception:logs.html.twig */
class __TwigTemplate_5784dd7ed3d76dfb8d9c86cf66bbd7417067ec8d557bf753d55228342f2e05c5 extends Twig_Template
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
        $__internal_46d13159cecb6e77fcc5c16f483493f8f5af4b3bee9a21ef63e1112fbfad4ddb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46d13159cecb6e77fcc5c16f483493f8f5af4b3bee9a21ef63e1112fbfad4ddb->enter($__internal_46d13159cecb6e77fcc5c16f483493f8f5af4b3bee9a21ef63e1112fbfad4ddb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:logs.html.twig"));

        $__internal_81b1038443f5430acc41cc9072687ac2d674e132f39e4168eb0567a8f632ec31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81b1038443f5430acc41cc9072687ac2d674e132f39e4168eb0567a8f632ec31->enter($__internal_81b1038443f5430acc41cc9072687ac2d674e132f39e4168eb0567a8f632ec31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:logs.html.twig"));

        // line 1
        echo "<ol class=\"traces logs\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["logs"] ?? $this->getContext($context, "logs")));
        foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
            // line 3
            echo "        <li";
            if (($this->getAttribute($context["log"], "priority", array()) >= 400)) {
                echo " class=\"error\"";
            } elseif (($this->getAttribute($context["log"], "priority", array()) >= 300)) {
                echo " class=\"warning\"";
            }
            echo ">
            ";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute($context["log"], "priorityName", array()), "html", null, true);
            echo " - ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->formatLogMessage($this->getAttribute($context["log"], "message", array()), $this->getAttribute($context["log"], "context", array()));
            echo "
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "</ol>
";
        
        $__internal_46d13159cecb6e77fcc5c16f483493f8f5af4b3bee9a21ef63e1112fbfad4ddb->leave($__internal_46d13159cecb6e77fcc5c16f483493f8f5af4b3bee9a21ef63e1112fbfad4ddb_prof);

        
        $__internal_81b1038443f5430acc41cc9072687ac2d674e132f39e4168eb0567a8f632ec31->leave($__internal_81b1038443f5430acc41cc9072687ac2d674e132f39e4168eb0567a8f632ec31_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:logs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  41 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<ol class=\"traces logs\">
    {% for log in logs %}
        <li{% if log.priority >= 400 %} class=\"error\"{% elseif log.priority >= 300 %} class=\"warning\"{% endif %}>
            {{ log.priorityName }} - {{ log.message|format_log_message(log.context) }}
        </li>
    {% endfor %}
</ol>
", "TwigBundle:Exception:logs.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/logs.html.twig");
    }
}
