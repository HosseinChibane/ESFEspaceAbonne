<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_7bda56077bbb7401a058835596f3f387516402e812eb4777338d058bae6b3f73 extends Twig_Template
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
        $__internal_4dd8db817f80b881b707408e7fe233b736d72662440b5d075ca8c8aaae4ec314 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4dd8db817f80b881b707408e7fe233b736d72662440b5d075ca8c8aaae4ec314->enter($__internal_4dd8db817f80b881b707408e7fe233b736d72662440b5d075ca8c8aaae4ec314_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_10adfce2ab65d015f0ac62f02b15e228868347043ee74a1216655a6e96076489 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10adfce2ab65d015f0ac62f02b15e228868347043ee74a1216655a6e96076489->enter($__internal_10adfce2ab65d015f0ac62f02b15e228868347043ee74a1216655a6e96076489_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4dd8db817f80b881b707408e7fe233b736d72662440b5d075ca8c8aaae4ec314->leave($__internal_4dd8db817f80b881b707408e7fe233b736d72662440b5d075ca8c8aaae4ec314_prof);

        
        $__internal_10adfce2ab65d015f0ac62f02b15e228868347043ee74a1216655a6e96076489->leave($__internal_10adfce2ab65d015f0ac62f02b15e228868347043ee74a1216655a6e96076489_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5a76627b4bbb5b8e27e74cb48e3e3e80e350078af85a021ae9ff239b17caaeab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a76627b4bbb5b8e27e74cb48e3e3e80e350078af85a021ae9ff239b17caaeab->enter($__internal_5a76627b4bbb5b8e27e74cb48e3e3e80e350078af85a021ae9ff239b17caaeab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6de01062ab43efe6ebbb1bdae682f80af8d6225b1d842e956a13ef516f2d1b7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6de01062ab43efe6ebbb1bdae682f80af8d6225b1d842e956a13ef516f2d1b7b->enter($__internal_6de01062ab43efe6ebbb1bdae682f80af8d6225b1d842e956a13ef516f2d1b7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_6de01062ab43efe6ebbb1bdae682f80af8d6225b1d842e956a13ef516f2d1b7b->leave($__internal_6de01062ab43efe6ebbb1bdae682f80af8d6225b1d842e956a13ef516f2d1b7b_prof);

        
        $__internal_5a76627b4bbb5b8e27e74cb48e3e3e80e350078af85a021ae9ff239b17caaeab->leave($__internal_5a76627b4bbb5b8e27e74cb48e3e3e80e350078af85a021ae9ff239b17caaeab_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_b4e612e8f08299d934567f8e846587e419433c974baee844cd7e88a9098a8cfd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4e612e8f08299d934567f8e846587e419433c974baee844cd7e88a9098a8cfd->enter($__internal_b4e612e8f08299d934567f8e846587e419433c974baee844cd7e88a9098a8cfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a897201000e5a8903b2c3e6fb723575a4bb14d7d19384e3613dff9a92336b3fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a897201000e5a8903b2c3e6fb723575a4bb14d7d19384e3613dff9a92336b3fb->enter($__internal_a897201000e5a8903b2c3e6fb723575a4bb14d7d19384e3613dff9a92336b3fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_a897201000e5a8903b2c3e6fb723575a4bb14d7d19384e3613dff9a92336b3fb->leave($__internal_a897201000e5a8903b2c3e6fb723575a4bb14d7d19384e3613dff9a92336b3fb_prof);

        
        $__internal_b4e612e8f08299d934567f8e846587e419433c974baee844cd7e88a9098a8cfd->leave($__internal_b4e612e8f08299d934567f8e846587e419433c974baee844cd7e88a9098a8cfd_prof);

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
