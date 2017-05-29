<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_1b2be407181ca8d4f01e79d1329d431d76524db4432130e90d38608a60a0b484 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
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
        $__internal_bf67d0fe2d999c79528008ffbc1a73ed27b02588fc6889f91e4c30118e5b4532 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf67d0fe2d999c79528008ffbc1a73ed27b02588fc6889f91e4c30118e5b4532->enter($__internal_bf67d0fe2d999c79528008ffbc1a73ed27b02588fc6889f91e4c30118e5b4532_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $__internal_1d809f93550cb959e059014334a19476eda4b04c50dd287ff9fff39e8a26d651 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d809f93550cb959e059014334a19476eda4b04c50dd287ff9fff39e8a26d651->enter($__internal_1d809f93550cb959e059014334a19476eda4b04c50dd287ff9fff39e8a26d651_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bf67d0fe2d999c79528008ffbc1a73ed27b02588fc6889f91e4c30118e5b4532->leave($__internal_bf67d0fe2d999c79528008ffbc1a73ed27b02588fc6889f91e4c30118e5b4532_prof);

        
        $__internal_1d809f93550cb959e059014334a19476eda4b04c50dd287ff9fff39e8a26d651->leave($__internal_1d809f93550cb959e059014334a19476eda4b04c50dd287ff9fff39e8a26d651_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_97a619339a632123d707c3cf6558db9f6e05b3550f689a16bb978392afb13f5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97a619339a632123d707c3cf6558db9f6e05b3550f689a16bb978392afb13f5a->enter($__internal_97a619339a632123d707c3cf6558db9f6e05b3550f689a16bb978392afb13f5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_000a1dc433044af626e95acb382e0ac6c3e263a5ea80da5c8744a18725a769ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_000a1dc433044af626e95acb382e0ac6c3e263a5ea80da5c8744a18725a769ea->enter($__internal_000a1dc433044af626e95acb382e0ac6c3e263a5ea80da5c8744a18725a769ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_000a1dc433044af626e95acb382e0ac6c3e263a5ea80da5c8744a18725a769ea->leave($__internal_000a1dc433044af626e95acb382e0ac6c3e263a5ea80da5c8744a18725a769ea_prof);

        
        $__internal_97a619339a632123d707c3cf6558db9f6e05b3550f689a16bb978392afb13f5a->leave($__internal_97a619339a632123d707c3cf6558db9f6e05b3550f689a16bb978392afb13f5a_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
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
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Profile/edit.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\app\\Resources\\FOSUserBundle\\views\\Profile\\edit.html.twig");
    }
}
