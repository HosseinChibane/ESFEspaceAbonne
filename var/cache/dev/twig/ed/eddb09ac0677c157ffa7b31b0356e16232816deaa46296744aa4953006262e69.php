<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_9b90d187e1e4816df330bdf604a7aedf9ab2577b579976e5f63a41699478e235 extends Twig_Template
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
        $__internal_e4163d8896cfac5e68331cd371cf9f1afa6d7da5ceae332c822b9a917b92cbe2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4163d8896cfac5e68331cd371cf9f1afa6d7da5ceae332c822b9a917b92cbe2->enter($__internal_e4163d8896cfac5e68331cd371cf9f1afa6d7da5ceae332c822b9a917b92cbe2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_7207fcb4cc920a87b7af6cbe8162441825a307a403b84821b32c2ef9a09d2d7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7207fcb4cc920a87b7af6cbe8162441825a307a403b84821b32c2ef9a09d2d7f->enter($__internal_7207fcb4cc920a87b7af6cbe8162441825a307a403b84821b32c2ef9a09d2d7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_e4163d8896cfac5e68331cd371cf9f1afa6d7da5ceae332c822b9a917b92cbe2->leave($__internal_e4163d8896cfac5e68331cd371cf9f1afa6d7da5ceae332c822b9a917b92cbe2_prof);

        
        $__internal_7207fcb4cc920a87b7af6cbe8162441825a307a403b84821b32c2ef9a09d2d7f->leave($__internal_7207fcb4cc920a87b7af6cbe8162441825a307a403b84821b32c2ef9a09d2d7f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
