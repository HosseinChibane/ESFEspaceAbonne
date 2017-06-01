<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_275d7e912388c3f9c60ef5622bde95546e672cd5e1d9b509ed38bf0d61b674b8 extends Twig_Template
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
        $__internal_c706b980f413529ed5e952ff097ebc0a22e0bdb036dd6b88b2d2a1c62d9656dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c706b980f413529ed5e952ff097ebc0a22e0bdb036dd6b88b2d2a1c62d9656dc->enter($__internal_c706b980f413529ed5e952ff097ebc0a22e0bdb036dd6b88b2d2a1c62d9656dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_56065132889da2947a977d1bac1a6e0158873b0f5cb198af723fed5b5b34635e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56065132889da2947a977d1bac1a6e0158873b0f5cb198af723fed5b5b34635e->enter($__internal_56065132889da2947a977d1bac1a6e0158873b0f5cb198af723fed5b5b34635e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_c706b980f413529ed5e952ff097ebc0a22e0bdb036dd6b88b2d2a1c62d9656dc->leave($__internal_c706b980f413529ed5e952ff097ebc0a22e0bdb036dd6b88b2d2a1c62d9656dc_prof);

        
        $__internal_56065132889da2947a977d1bac1a6e0158873b0f5cb198af723fed5b5b34635e->leave($__internal_56065132889da2947a977d1bac1a6e0158873b0f5cb198af723fed5b5b34635e_prof);

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
