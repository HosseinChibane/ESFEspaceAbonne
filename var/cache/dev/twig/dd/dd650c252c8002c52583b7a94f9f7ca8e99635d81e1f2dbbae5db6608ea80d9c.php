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
        $__internal_abf365761e78cf4626361657490da4ae497331554e54392c50d9d76edfbe7ca9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_abf365761e78cf4626361657490da4ae497331554e54392c50d9d76edfbe7ca9->enter($__internal_abf365761e78cf4626361657490da4ae497331554e54392c50d9d76edfbe7ca9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_5c5734f12d745a730f397f4cdd2c5261c2dd5083da907b3ca3d26e1f193489cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c5734f12d745a730f397f4cdd2c5261c2dd5083da907b3ca3d26e1f193489cb->enter($__internal_5c5734f12d745a730f397f4cdd2c5261c2dd5083da907b3ca3d26e1f193489cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_abf365761e78cf4626361657490da4ae497331554e54392c50d9d76edfbe7ca9->leave($__internal_abf365761e78cf4626361657490da4ae497331554e54392c50d9d76edfbe7ca9_prof);

        
        $__internal_5c5734f12d745a730f397f4cdd2c5261c2dd5083da907b3ca3d26e1f193489cb->leave($__internal_5c5734f12d745a730f397f4cdd2c5261c2dd5083da907b3ca3d26e1f193489cb_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_aed9548df8b8f0a7f212b774bcf58243058666f27e9d664485af65fe38b8998a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aed9548df8b8f0a7f212b774bcf58243058666f27e9d664485af65fe38b8998a->enter($__internal_aed9548df8b8f0a7f212b774bcf58243058666f27e9d664485af65fe38b8998a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_289c9a1286066586dbf7517798d62999928bd4618c365d0b22aa48d5e0a703a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_289c9a1286066586dbf7517798d62999928bd4618c365d0b22aa48d5e0a703a4->enter($__internal_289c9a1286066586dbf7517798d62999928bd4618c365d0b22aa48d5e0a703a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_289c9a1286066586dbf7517798d62999928bd4618c365d0b22aa48d5e0a703a4->leave($__internal_289c9a1286066586dbf7517798d62999928bd4618c365d0b22aa48d5e0a703a4_prof);

        
        $__internal_aed9548df8b8f0a7f212b774bcf58243058666f27e9d664485af65fe38b8998a->leave($__internal_aed9548df8b8f0a7f212b774bcf58243058666f27e9d664485af65fe38b8998a_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_774e0a8700e1a3620d03a877f8ad54772b327e6756b74963c58bfc350b1015d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_774e0a8700e1a3620d03a877f8ad54772b327e6756b74963c58bfc350b1015d1->enter($__internal_774e0a8700e1a3620d03a877f8ad54772b327e6756b74963c58bfc350b1015d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5991bfffbda94fbcffbc25f2814df5cc26bf841f55008a5f2076b715c17a9fe5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5991bfffbda94fbcffbc25f2814df5cc26bf841f55008a5f2076b715c17a9fe5->enter($__internal_5991bfffbda94fbcffbc25f2814df5cc26bf841f55008a5f2076b715c17a9fe5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_5991bfffbda94fbcffbc25f2814df5cc26bf841f55008a5f2076b715c17a9fe5->leave($__internal_5991bfffbda94fbcffbc25f2814df5cc26bf841f55008a5f2076b715c17a9fe5_prof);

        
        $__internal_774e0a8700e1a3620d03a877f8ad54772b327e6756b74963c58bfc350b1015d1->leave($__internal_774e0a8700e1a3620d03a877f8ad54772b327e6756b74963c58bfc350b1015d1_prof);

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
