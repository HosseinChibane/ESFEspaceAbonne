<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_0ed43657211e2f45fa0b4382da11d9835dba6aa61473b39cd0f764bc5033d53b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fc8d4193e97db89597cf6d357bb39aba2881d23a8e5b8f23cecd495e415ea1a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc8d4193e97db89597cf6d357bb39aba2881d23a8e5b8f23cecd495e415ea1a9->enter($__internal_fc8d4193e97db89597cf6d357bb39aba2881d23a8e5b8f23cecd495e415ea1a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $__internal_4b7d869f41867841cf5c99503a1f14d97af56a5ad219441b8eff437bb33082eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b7d869f41867841cf5c99503a1f14d97af56a5ad219441b8eff437bb33082eb->enter($__internal_4b7d869f41867841cf5c99503a1f14d97af56a5ad219441b8eff437bb33082eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fc8d4193e97db89597cf6d357bb39aba2881d23a8e5b8f23cecd495e415ea1a9->leave($__internal_fc8d4193e97db89597cf6d357bb39aba2881d23a8e5b8f23cecd495e415ea1a9_prof);

        
        $__internal_4b7d869f41867841cf5c99503a1f14d97af56a5ad219441b8eff437bb33082eb->leave($__internal_4b7d869f41867841cf5c99503a1f14d97af56a5ad219441b8eff437bb33082eb_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9692869f00481b2f6094ee26d1f8b36f790f649440be48963aa5aaf33431cf81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9692869f00481b2f6094ee26d1f8b36f790f649440be48963aa5aaf33431cf81->enter($__internal_9692869f00481b2f6094ee26d1f8b36f790f649440be48963aa5aaf33431cf81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_deae13341eb83f5ac7676a2c8e4687d21bcf74d26e4cf02387736fd7986d1f82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_deae13341eb83f5ac7676a2c8e4687d21bcf74d26e4cf02387736fd7986d1f82->enter($__internal_deae13341eb83f5ac7676a2c8e4687d21bcf74d26e4cf02387736fd7986d1f82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_deae13341eb83f5ac7676a2c8e4687d21bcf74d26e4cf02387736fd7986d1f82->leave($__internal_deae13341eb83f5ac7676a2c8e4687d21bcf74d26e4cf02387736fd7986d1f82_prof);

        
        $__internal_9692869f00481b2f6094ee26d1f8b36f790f649440be48963aa5aaf33431cf81->leave($__internal_9692869f00481b2f6094ee26d1f8b36f790f649440be48963aa5aaf33431cf81_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/register.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\app\\Resources\\FOSUserBundle\\views\\Registration\\register.html.twig");
    }
}
