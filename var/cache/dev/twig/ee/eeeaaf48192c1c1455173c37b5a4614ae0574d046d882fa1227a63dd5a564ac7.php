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
        $__internal_8311859118b7966cc458c3ef31003efe18e32ae17b42966827c2dae59972cb78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8311859118b7966cc458c3ef31003efe18e32ae17b42966827c2dae59972cb78->enter($__internal_8311859118b7966cc458c3ef31003efe18e32ae17b42966827c2dae59972cb78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_ea4cbeca44e3e9d110ae69d278f1781ed5e033ba2559216a7ddef4510ee6685e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea4cbeca44e3e9d110ae69d278f1781ed5e033ba2559216a7ddef4510ee6685e->enter($__internal_ea4cbeca44e3e9d110ae69d278f1781ed5e033ba2559216a7ddef4510ee6685e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8311859118b7966cc458c3ef31003efe18e32ae17b42966827c2dae59972cb78->leave($__internal_8311859118b7966cc458c3ef31003efe18e32ae17b42966827c2dae59972cb78_prof);

        
        $__internal_ea4cbeca44e3e9d110ae69d278f1781ed5e033ba2559216a7ddef4510ee6685e->leave($__internal_ea4cbeca44e3e9d110ae69d278f1781ed5e033ba2559216a7ddef4510ee6685e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4b7b446624c6876a379f9d654f0aae167e4810a04c23cc7bc8a23224aa9115c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b7b446624c6876a379f9d654f0aae167e4810a04c23cc7bc8a23224aa9115c2->enter($__internal_4b7b446624c6876a379f9d654f0aae167e4810a04c23cc7bc8a23224aa9115c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2ef71eada2190b40237839c8f4f224b0ee68daab7f277a8fec991875302cb0f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ef71eada2190b40237839c8f4f224b0ee68daab7f277a8fec991875302cb0f0->enter($__internal_2ef71eada2190b40237839c8f4f224b0ee68daab7f277a8fec991875302cb0f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_2ef71eada2190b40237839c8f4f224b0ee68daab7f277a8fec991875302cb0f0->leave($__internal_2ef71eada2190b40237839c8f4f224b0ee68daab7f277a8fec991875302cb0f0_prof);

        
        $__internal_4b7b446624c6876a379f9d654f0aae167e4810a04c23cc7bc8a23224aa9115c2->leave($__internal_4b7b446624c6876a379f9d654f0aae167e4810a04c23cc7bc8a23224aa9115c2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_a2f7b5c518c0ef1707c3e8fef7ccebf442f607a86499c1032c7ab3cb173f2389 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2f7b5c518c0ef1707c3e8fef7ccebf442f607a86499c1032c7ab3cb173f2389->enter($__internal_a2f7b5c518c0ef1707c3e8fef7ccebf442f607a86499c1032c7ab3cb173f2389_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9a153b34bd6f37851d53cbce2ef376c8c6451f218e06360b3e0d87f909c30915 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a153b34bd6f37851d53cbce2ef376c8c6451f218e06360b3e0d87f909c30915->enter($__internal_9a153b34bd6f37851d53cbce2ef376c8c6451f218e06360b3e0d87f909c30915_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_9a153b34bd6f37851d53cbce2ef376c8c6451f218e06360b3e0d87f909c30915->leave($__internal_9a153b34bd6f37851d53cbce2ef376c8c6451f218e06360b3e0d87f909c30915_prof);

        
        $__internal_a2f7b5c518c0ef1707c3e8fef7ccebf442f607a86499c1032c7ab3cb173f2389->leave($__internal_a2f7b5c518c0ef1707c3e8fef7ccebf442f607a86499c1032c7ab3cb173f2389_prof);

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
