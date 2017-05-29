<?php

/* @FOSUser/Group/new.html.twig */
class __TwigTemplate_53836646d5f19fb062d069c8fbc19fa6518a47c2966ef82d1615f8d410c85081 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/new.html.twig", 1);
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
        $__internal_77737da3a9a0285a0d6a03743610b695b74b9d182563ca28813151912de5105d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77737da3a9a0285a0d6a03743610b695b74b9d182563ca28813151912de5105d->enter($__internal_77737da3a9a0285a0d6a03743610b695b74b9d182563ca28813151912de5105d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $__internal_83db56947a194149f44aac927558ccf38904908a6ef70782db1e127b899a4ac5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83db56947a194149f44aac927558ccf38904908a6ef70782db1e127b899a4ac5->enter($__internal_83db56947a194149f44aac927558ccf38904908a6ef70782db1e127b899a4ac5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_77737da3a9a0285a0d6a03743610b695b74b9d182563ca28813151912de5105d->leave($__internal_77737da3a9a0285a0d6a03743610b695b74b9d182563ca28813151912de5105d_prof);

        
        $__internal_83db56947a194149f44aac927558ccf38904908a6ef70782db1e127b899a4ac5->leave($__internal_83db56947a194149f44aac927558ccf38904908a6ef70782db1e127b899a4ac5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_70ef5a73f5e025fae01f8502bbb9ea340473edf313145e00eb85e98f621559de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70ef5a73f5e025fae01f8502bbb9ea340473edf313145e00eb85e98f621559de->enter($__internal_70ef5a73f5e025fae01f8502bbb9ea340473edf313145e00eb85e98f621559de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_7346ef7cbd5dd6f4794fd3c50d2df6ef132b786f32365f1baa78cae7aaf4d356 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7346ef7cbd5dd6f4794fd3c50d2df6ef132b786f32365f1baa78cae7aaf4d356->enter($__internal_7346ef7cbd5dd6f4794fd3c50d2df6ef132b786f32365f1baa78cae7aaf4d356_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_7346ef7cbd5dd6f4794fd3c50d2df6ef132b786f32365f1baa78cae7aaf4d356->leave($__internal_7346ef7cbd5dd6f4794fd3c50d2df6ef132b786f32365f1baa78cae7aaf4d356_prof);

        
        $__internal_70ef5a73f5e025fae01f8502bbb9ea340473edf313145e00eb85e98f621559de->leave($__internal_70ef5a73f5e025fae01f8502bbb9ea340473edf313145e00eb85e98f621559de_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/new.html.twig";
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
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/new.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\app\\Resources\\FOSUserBundle\\views\\Group\\new.html.twig");
    }
}
