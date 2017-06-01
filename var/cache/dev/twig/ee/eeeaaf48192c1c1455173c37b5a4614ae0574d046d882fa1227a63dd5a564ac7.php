<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_c8f560cfa1de8ac8da3c49c8fa93a1fb563506353a0aa9180ffac8ab66709027 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
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
        $__internal_b272e875eabcc95df17fb571f80a5afb49369dbb4068fecd47cb0844636e5331 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b272e875eabcc95df17fb571f80a5afb49369dbb4068fecd47cb0844636e5331->enter($__internal_b272e875eabcc95df17fb571f80a5afb49369dbb4068fecd47cb0844636e5331_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_16767259f78e8035ef5ad1301c2449c272b75018e52a74f3d32b478ce126914a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16767259f78e8035ef5ad1301c2449c272b75018e52a74f3d32b478ce126914a->enter($__internal_16767259f78e8035ef5ad1301c2449c272b75018e52a74f3d32b478ce126914a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b272e875eabcc95df17fb571f80a5afb49369dbb4068fecd47cb0844636e5331->leave($__internal_b272e875eabcc95df17fb571f80a5afb49369dbb4068fecd47cb0844636e5331_prof);

        
        $__internal_16767259f78e8035ef5ad1301c2449c272b75018e52a74f3d32b478ce126914a->leave($__internal_16767259f78e8035ef5ad1301c2449c272b75018e52a74f3d32b478ce126914a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a383eb6b43e2164a01d28a2dc34cde47ae27e0290e0a82ac6c1b873dd49725a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a383eb6b43e2164a01d28a2dc34cde47ae27e0290e0a82ac6c1b873dd49725a2->enter($__internal_a383eb6b43e2164a01d28a2dc34cde47ae27e0290e0a82ac6c1b873dd49725a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b756e1b03f8a65d86d9f47db56d692d2dac1ff02a37e50dff30dc2f6ceff967d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b756e1b03f8a65d86d9f47db56d692d2dac1ff02a37e50dff30dc2f6ceff967d->enter($__internal_b756e1b03f8a65d86d9f47db56d692d2dac1ff02a37e50dff30dc2f6ceff967d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_b756e1b03f8a65d86d9f47db56d692d2dac1ff02a37e50dff30dc2f6ceff967d->leave($__internal_b756e1b03f8a65d86d9f47db56d692d2dac1ff02a37e50dff30dc2f6ceff967d_prof);

        
        $__internal_a383eb6b43e2164a01d28a2dc34cde47ae27e0290e0a82ac6c1b873dd49725a2->leave($__internal_a383eb6b43e2164a01d28a2dc34cde47ae27e0290e0a82ac6c1b873dd49725a2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_0f8f1dd14d89d094443630fca8b19976772070107bcc97f81ce9250181f64e57 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f8f1dd14d89d094443630fca8b19976772070107bcc97f81ce9250181f64e57->enter($__internal_0f8f1dd14d89d094443630fca8b19976772070107bcc97f81ce9250181f64e57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8a019f199252c255785ad8c5cf1562a8de0b9aee08e5dab4669278ea1ed577c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a019f199252c255785ad8c5cf1562a8de0b9aee08e5dab4669278ea1ed577c2->enter($__internal_8a019f199252c255785ad8c5cf1562a8de0b9aee08e5dab4669278ea1ed577c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_8a019f199252c255785ad8c5cf1562a8de0b9aee08e5dab4669278ea1ed577c2->leave($__internal_8a019f199252c255785ad8c5cf1562a8de0b9aee08e5dab4669278ea1ed577c2_prof);

        
        $__internal_0f8f1dd14d89d094443630fca8b19976772070107bcc97f81ce9250181f64e57->leave($__internal_0f8f1dd14d89d094443630fca8b19976772070107bcc97f81ce9250181f64e57_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
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
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
