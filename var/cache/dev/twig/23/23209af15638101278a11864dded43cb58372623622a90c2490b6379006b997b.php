<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_c74d712a78d54348396dc44fc18737dc6ccd7d607c2b3e84b3dd425a9e581926 extends Twig_Template
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
        $__internal_c44d7e70397ecc8dc2ffa19c18ded8c947971e863f04f14210c5677c271d15d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c44d7e70397ecc8dc2ffa19c18ded8c947971e863f04f14210c5677c271d15d5->enter($__internal_c44d7e70397ecc8dc2ffa19c18ded8c947971e863f04f14210c5677c271d15d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_8ccb1fe819aaaf97eca3613affcbc3dc9b4e3140b5c92d2fee6ac75d94f187a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ccb1fe819aaaf97eca3613affcbc3dc9b4e3140b5c92d2fee6ac75d94f187a7->enter($__internal_8ccb1fe819aaaf97eca3613affcbc3dc9b4e3140b5c92d2fee6ac75d94f187a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_c44d7e70397ecc8dc2ffa19c18ded8c947971e863f04f14210c5677c271d15d5->leave($__internal_c44d7e70397ecc8dc2ffa19c18ded8c947971e863f04f14210c5677c271d15d5_prof);

        
        $__internal_8ccb1fe819aaaf97eca3613affcbc3dc9b4e3140b5c92d2fee6ac75d94f187a7->leave($__internal_8ccb1fe819aaaf97eca3613affcbc3dc9b4e3140b5c92d2fee6ac75d94f187a7_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
", "@Twig/Exception/exception.json.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.json.twig");
    }
}
