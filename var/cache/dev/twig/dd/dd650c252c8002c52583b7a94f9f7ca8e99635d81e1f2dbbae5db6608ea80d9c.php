<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_608d6a0288b534b2552a9cee86d4ccdbb5b9a5f55419992b736482d7f47f88c0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2febfb6229aa2ac4e03087dc27122d3be6a1a61352a018f590ecfb133cea044c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2febfb6229aa2ac4e03087dc27122d3be6a1a61352a018f590ecfb133cea044c->enter($__internal_2febfb6229aa2ac4e03087dc27122d3be6a1a61352a018f590ecfb133cea044c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_38869dc8fefe06464bc27428af1db8a83ed329f6108d35e40bb8ac76848fa280 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38869dc8fefe06464bc27428af1db8a83ed329f6108d35e40bb8ac76848fa280->enter($__internal_38869dc8fefe06464bc27428af1db8a83ed329f6108d35e40bb8ac76848fa280_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2febfb6229aa2ac4e03087dc27122d3be6a1a61352a018f590ecfb133cea044c->leave($__internal_2febfb6229aa2ac4e03087dc27122d3be6a1a61352a018f590ecfb133cea044c_prof);

        
        $__internal_38869dc8fefe06464bc27428af1db8a83ed329f6108d35e40bb8ac76848fa280->leave($__internal_38869dc8fefe06464bc27428af1db8a83ed329f6108d35e40bb8ac76848fa280_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_bb77fc49185346f31ad75152de5e6304b4cd739ba2661f26beef13ab0469fca3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb77fc49185346f31ad75152de5e6304b4cd739ba2661f26beef13ab0469fca3->enter($__internal_bb77fc49185346f31ad75152de5e6304b4cd739ba2661f26beef13ab0469fca3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_dd5839fd6478d0504109e06b1bf1ee4d581878829a8d5bb37a62de79fd9e5f75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd5839fd6478d0504109e06b1bf1ee4d581878829a8d5bb37a62de79fd9e5f75->enter($__internal_dd5839fd6478d0504109e06b1bf1ee4d581878829a8d5bb37a62de79fd9e5f75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_dd5839fd6478d0504109e06b1bf1ee4d581878829a8d5bb37a62de79fd9e5f75->leave($__internal_dd5839fd6478d0504109e06b1bf1ee4d581878829a8d5bb37a62de79fd9e5f75_prof);

        
        $__internal_bb77fc49185346f31ad75152de5e6304b4cd739ba2661f26beef13ab0469fca3->leave($__internal_bb77fc49185346f31ad75152de5e6304b4cd739ba2661f26beef13ab0469fca3_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_d7b866b72eaa9ca0b9b2058527051f06467733774b10e8388f4c46c636210a22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7b866b72eaa9ca0b9b2058527051f06467733774b10e8388f4c46c636210a22->enter($__internal_d7b866b72eaa9ca0b9b2058527051f06467733774b10e8388f4c46c636210a22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d0d297a3a96f966c439ad81f187254b56b0d3128ec1b2d456d13061cbecd3b4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0d297a3a96f966c439ad81f187254b56b0d3128ec1b2d456d13061cbecd3b4d->enter($__internal_d0d297a3a96f966c439ad81f187254b56b0d3128ec1b2d456d13061cbecd3b4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_d0d297a3a96f966c439ad81f187254b56b0d3128ec1b2d456d13061cbecd3b4d->leave($__internal_d0d297a3a96f966c439ad81f187254b56b0d3128ec1b2d456d13061cbecd3b4d_prof);

        
        $__internal_d7b866b72eaa9ca0b9b2058527051f06467733774b10e8388f4c46c636210a22->leave($__internal_d7b866b72eaa9ca0b9b2058527051f06467733774b10e8388f4c46c636210a22_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
