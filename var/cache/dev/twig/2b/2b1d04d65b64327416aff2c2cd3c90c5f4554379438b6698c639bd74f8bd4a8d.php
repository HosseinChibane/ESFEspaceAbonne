<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_07f33d8a7fef8dd925b472c1b7cb757e67e81f3ed40080e23c8f1afb74264aab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_8644f77a82175473726b7bc9f589a71c4c6a6cf256499e5ee48f5e3147d83bc7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8644f77a82175473726b7bc9f589a71c4c6a6cf256499e5ee48f5e3147d83bc7->enter($__internal_8644f77a82175473726b7bc9f589a71c4c6a6cf256499e5ee48f5e3147d83bc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $__internal_163a0dd96936fc5c0dbfe6b32e1ffe7eef42db98154e043ca97f2ec446f3879e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_163a0dd96936fc5c0dbfe6b32e1ffe7eef42db98154e043ca97f2ec446f3879e->enter($__internal_163a0dd96936fc5c0dbfe6b32e1ffe7eef42db98154e043ca97f2ec446f3879e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8644f77a82175473726b7bc9f589a71c4c6a6cf256499e5ee48f5e3147d83bc7->leave($__internal_8644f77a82175473726b7bc9f589a71c4c6a6cf256499e5ee48f5e3147d83bc7_prof);

        
        $__internal_163a0dd96936fc5c0dbfe6b32e1ffe7eef42db98154e043ca97f2ec446f3879e->leave($__internal_163a0dd96936fc5c0dbfe6b32e1ffe7eef42db98154e043ca97f2ec446f3879e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_788b1616c21893177af69675b9912a93b4e9dbfd46f8387f66e7c73218a25881 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_788b1616c21893177af69675b9912a93b4e9dbfd46f8387f66e7c73218a25881->enter($__internal_788b1616c21893177af69675b9912a93b4e9dbfd46f8387f66e7c73218a25881_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_08d06666c005befcac6232a08fdbf9e6ea06e2338a5f718971ef120659a4b7cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08d06666c005befcac6232a08fdbf9e6ea06e2338a5f718971ef120659a4b7cd->enter($__internal_08d06666c005befcac6232a08fdbf9e6ea06e2338a5f718971ef120659a4b7cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_08d06666c005befcac6232a08fdbf9e6ea06e2338a5f718971ef120659a4b7cd->leave($__internal_08d06666c005befcac6232a08fdbf9e6ea06e2338a5f718971ef120659a4b7cd_prof);

        
        $__internal_788b1616c21893177af69675b9912a93b4e9dbfd46f8387f66e7c73218a25881->leave($__internal_788b1616c21893177af69675b9912a93b4e9dbfd46f8387f66e7c73218a25881_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:request.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\app/Resources/FOSUserBundle/views/Resetting/request.html.twig");
    }
}
