<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_0ef36c05b82178f590a1b68d8da886291e17ddc0f26b9bff03f221087b8c75bb extends Twig_Template
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
        $__internal_5e71fb9d8d726d0fb8d504010e32de4ba38a1ff0089f8093f875991a63fa5066 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e71fb9d8d726d0fb8d504010e32de4ba38a1ff0089f8093f875991a63fa5066->enter($__internal_5e71fb9d8d726d0fb8d504010e32de4ba38a1ff0089f8093f875991a63fa5066_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_2e0bd8ef426c3de249eb0ee36749ee51c3e2f1def08d9a573dba0d2406edf02f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e0bd8ef426c3de249eb0ee36749ee51c3e2f1def08d9a573dba0d2406edf02f->enter($__internal_2e0bd8ef426c3de249eb0ee36749ee51c3e2f1def08d9a573dba0d2406edf02f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_5e71fb9d8d726d0fb8d504010e32de4ba38a1ff0089f8093f875991a63fa5066->leave($__internal_5e71fb9d8d726d0fb8d504010e32de4ba38a1ff0089f8093f875991a63fa5066_prof);

        
        $__internal_2e0bd8ef426c3de249eb0ee36749ee51c3e2f1def08d9a573dba0d2406edf02f->leave($__internal_2e0bd8ef426c3de249eb0ee36749ee51c3e2f1def08d9a573dba0d2406edf02f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
