<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_b06b74da2b592b3a6bd526f263fc94585af5f25ecd3d5625d3004e0003a29de6 extends Twig_Template
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
        $__internal_f283d62ccdf6ef90e6e0b5f50c568dd5293bca6eb7340a00ccf5da7995810610 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f283d62ccdf6ef90e6e0b5f50c568dd5293bca6eb7340a00ccf5da7995810610->enter($__internal_f283d62ccdf6ef90e6e0b5f50c568dd5293bca6eb7340a00ccf5da7995810610_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_ef67fe5282106745b98509b2adc3aafa236f5cbb57dfd52375ff3944841aa99d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef67fe5282106745b98509b2adc3aafa236f5cbb57dfd52375ff3944841aa99d->enter($__internal_ef67fe5282106745b98509b2adc3aafa236f5cbb57dfd52375ff3944841aa99d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_f283d62ccdf6ef90e6e0b5f50c568dd5293bca6eb7340a00ccf5da7995810610->leave($__internal_f283d62ccdf6ef90e6e0b5f50c568dd5293bca6eb7340a00ccf5da7995810610_prof);

        
        $__internal_ef67fe5282106745b98509b2adc3aafa236f5cbb57dfd52375ff3944841aa99d->leave($__internal_ef67fe5282106745b98509b2adc3aafa236f5cbb57dfd52375ff3944841aa99d_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_db915f8ad6f6ba6b0248f915edecdd8c70d1e197652c059108c8984ed0ad8e5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db915f8ad6f6ba6b0248f915edecdd8c70d1e197652c059108c8984ed0ad8e5e->enter($__internal_db915f8ad6f6ba6b0248f915edecdd8c70d1e197652c059108c8984ed0ad8e5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_433750dd83ea625ea8aee7f78f65736d4d8362e0e2c16c6b5130994832992098 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_433750dd83ea625ea8aee7f78f65736d4d8362e0e2c16c6b5130994832992098->enter($__internal_433750dd83ea625ea8aee7f78f65736d4d8362e0e2c16c6b5130994832992098_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_433750dd83ea625ea8aee7f78f65736d4d8362e0e2c16c6b5130994832992098->leave($__internal_433750dd83ea625ea8aee7f78f65736d4d8362e0e2c16c6b5130994832992098_prof);

        
        $__internal_db915f8ad6f6ba6b0248f915edecdd8c70d1e197652c059108c8984ed0ad8e5e->leave($__internal_db915f8ad6f6ba6b0248f915edecdd8c70d1e197652c059108c8984ed0ad8e5e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
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
", "@WebProfiler/Profiler/ajax_layout.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\ajax_layout.html.twig");
    }
}
