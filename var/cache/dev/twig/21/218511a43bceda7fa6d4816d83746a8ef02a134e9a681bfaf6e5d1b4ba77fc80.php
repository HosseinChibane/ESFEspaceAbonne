<?php

/* @FOSUser/Group/edit.html.twig */
class __TwigTemplate_f24177dcb61cbfb5f81db4058b5586bed868b99eec9ef2e9fe615da7b7c76b2f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/edit.html.twig", 1);
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
        $__internal_e0fdb1e4415cddca108fc14156193ba16bbd76bb37212c1428c5f1dd516c4c13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0fdb1e4415cddca108fc14156193ba16bbd76bb37212c1428c5f1dd516c4c13->enter($__internal_e0fdb1e4415cddca108fc14156193ba16bbd76bb37212c1428c5f1dd516c4c13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $__internal_5fbbe4eb79c8e5b9f580d7b06873109467769d63eace5452df9ab6665ed152a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fbbe4eb79c8e5b9f580d7b06873109467769d63eace5452df9ab6665ed152a3->enter($__internal_5fbbe4eb79c8e5b9f580d7b06873109467769d63eace5452df9ab6665ed152a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e0fdb1e4415cddca108fc14156193ba16bbd76bb37212c1428c5f1dd516c4c13->leave($__internal_e0fdb1e4415cddca108fc14156193ba16bbd76bb37212c1428c5f1dd516c4c13_prof);

        
        $__internal_5fbbe4eb79c8e5b9f580d7b06873109467769d63eace5452df9ab6665ed152a3->leave($__internal_5fbbe4eb79c8e5b9f580d7b06873109467769d63eace5452df9ab6665ed152a3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_37be5f989c79c32271571fc5aec70e934f2133a2edb07491ae20eff29a2b5033 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37be5f989c79c32271571fc5aec70e934f2133a2edb07491ae20eff29a2b5033->enter($__internal_37be5f989c79c32271571fc5aec70e934f2133a2edb07491ae20eff29a2b5033_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c6510b87b41b408d0192985a65c8aed90d9be14de5989a31dccf512e03fed102 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6510b87b41b408d0192985a65c8aed90d9be14de5989a31dccf512e03fed102->enter($__internal_c6510b87b41b408d0192985a65c8aed90d9be14de5989a31dccf512e03fed102_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_c6510b87b41b408d0192985a65c8aed90d9be14de5989a31dccf512e03fed102->leave($__internal_c6510b87b41b408d0192985a65c8aed90d9be14de5989a31dccf512e03fed102_prof);

        
        $__internal_37be5f989c79c32271571fc5aec70e934f2133a2edb07491ae20eff29a2b5033->leave($__internal_37be5f989c79c32271571fc5aec70e934f2133a2edb07491ae20eff29a2b5033_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/edit.html.twig";
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
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/edit.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\app\\Resources\\FOSUserBundle\\views\\Group\\edit.html.twig");
    }
}
