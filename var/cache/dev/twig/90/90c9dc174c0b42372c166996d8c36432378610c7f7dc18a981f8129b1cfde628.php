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
        $__internal_f779c013477d2089d726ccef568d73039dba264ad74c21b784fb1184e7825129 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f779c013477d2089d726ccef568d73039dba264ad74c21b784fb1184e7825129->enter($__internal_f779c013477d2089d726ccef568d73039dba264ad74c21b784fb1184e7825129_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_d8eb16c1fec6347f8557837eeaf8c4c4e0c70a6152a27415fba5258d648e09c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8eb16c1fec6347f8557837eeaf8c4c4e0c70a6152a27415fba5258d648e09c0->enter($__internal_d8eb16c1fec6347f8557837eeaf8c4c4e0c70a6152a27415fba5258d648e09c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_f779c013477d2089d726ccef568d73039dba264ad74c21b784fb1184e7825129->leave($__internal_f779c013477d2089d726ccef568d73039dba264ad74c21b784fb1184e7825129_prof);

        
        $__internal_d8eb16c1fec6347f8557837eeaf8c4c4e0c70a6152a27415fba5258d648e09c0->leave($__internal_d8eb16c1fec6347f8557837eeaf8c4c4e0c70a6152a27415fba5258d648e09c0_prof);

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
