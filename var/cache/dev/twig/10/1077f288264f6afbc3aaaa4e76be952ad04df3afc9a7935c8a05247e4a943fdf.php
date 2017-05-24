<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_26896925fd5e8a5ca6117ba62a8d9a342a1e14d947b04c0fc543d8960be97641 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_295d87fe365a95b9a01bda1644c5868a47a8b938e76ac1e84cf61dbb1b8debc3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_295d87fe365a95b9a01bda1644c5868a47a8b938e76ac1e84cf61dbb1b8debc3->enter($__internal_295d87fe365a95b9a01bda1644c5868a47a8b938e76ac1e84cf61dbb1b8debc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_37a2d4629dc410294ec59a48939204ae75b266548da2794ea94df93c7d3b1d01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37a2d4629dc410294ec59a48939204ae75b266548da2794ea94df93c7d3b1d01->enter($__internal_37a2d4629dc410294ec59a48939204ae75b266548da2794ea94df93c7d3b1d01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_295d87fe365a95b9a01bda1644c5868a47a8b938e76ac1e84cf61dbb1b8debc3->leave($__internal_295d87fe365a95b9a01bda1644c5868a47a8b938e76ac1e84cf61dbb1b8debc3_prof);

        
        $__internal_37a2d4629dc410294ec59a48939204ae75b266548da2794ea94df93c7d3b1d01->leave($__internal_37a2d4629dc410294ec59a48939204ae75b266548da2794ea94df93c7d3b1d01_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_cb754807cace1b474dfc03dda848a7a24657c2495a04bfa0cd63c8572ba37dd8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb754807cace1b474dfc03dda848a7a24657c2495a04bfa0cd63c8572ba37dd8->enter($__internal_cb754807cace1b474dfc03dda848a7a24657c2495a04bfa0cd63c8572ba37dd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ee0af94126a1adf09892bad7092251f714ad60376e947ff3c4b2ac1579b0a60a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee0af94126a1adf09892bad7092251f714ad60376e947ff3c4b2ac1579b0a60a->enter($__internal_ee0af94126a1adf09892bad7092251f714ad60376e947ff3c4b2ac1579b0a60a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_ee0af94126a1adf09892bad7092251f714ad60376e947ff3c4b2ac1579b0a60a->leave($__internal_ee0af94126a1adf09892bad7092251f714ad60376e947ff3c4b2ac1579b0a60a_prof);

        
        $__internal_cb754807cace1b474dfc03dda848a7a24657c2495a04bfa0cd63c8572ba37dd8->leave($__internal_cb754807cace1b474dfc03dda848a7a24657c2495a04bfa0cd63c8572ba37dd8_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
