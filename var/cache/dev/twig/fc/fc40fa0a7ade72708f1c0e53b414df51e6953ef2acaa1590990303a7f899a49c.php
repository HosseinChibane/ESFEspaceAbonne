<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_540b76e5c209fcc9f1625db52cef5a9c4f6b8dbab7a075e926ecf7cd021023e2 extends Twig_Template
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
        $__internal_ce87c907a5afcf994d95434a2599522d7be9a8d4e5893da27f744efa3138f275 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce87c907a5afcf994d95434a2599522d7be9a8d4e5893da27f744efa3138f275->enter($__internal_ce87c907a5afcf994d95434a2599522d7be9a8d4e5893da27f744efa3138f275_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_ec1dda8d4dd10dd1c651e766bdbb96b45722d61af6a7d1f06681293239c9c348 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec1dda8d4dd10dd1c651e766bdbb96b45722d61af6a7d1f06681293239c9c348->enter($__internal_ec1dda8d4dd10dd1c651e766bdbb96b45722d61af6a7d1f06681293239c9c348_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_ce87c907a5afcf994d95434a2599522d7be9a8d4e5893da27f744efa3138f275->leave($__internal_ce87c907a5afcf994d95434a2599522d7be9a8d4e5893da27f744efa3138f275_prof);

        
        $__internal_ec1dda8d4dd10dd1c651e766bdbb96b45722d61af6a7d1f06681293239c9c348->leave($__internal_ec1dda8d4dd10dd1c651e766bdbb96b45722d61af6a7d1f06681293239c9c348_prof);

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
