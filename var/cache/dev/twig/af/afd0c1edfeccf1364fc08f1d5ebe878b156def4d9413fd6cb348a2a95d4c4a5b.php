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
        $__internal_9bafde40ce2486c23da1138b2bcc6d51802cda6be9e505bb02de3d7e5261e14f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9bafde40ce2486c23da1138b2bcc6d51802cda6be9e505bb02de3d7e5261e14f->enter($__internal_9bafde40ce2486c23da1138b2bcc6d51802cda6be9e505bb02de3d7e5261e14f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_3da906191754fdb7ac3418d41a0956eba9152da287605c877559a132da53ecc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3da906191754fdb7ac3418d41a0956eba9152da287605c877559a132da53ecc8->enter($__internal_3da906191754fdb7ac3418d41a0956eba9152da287605c877559a132da53ecc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_9bafde40ce2486c23da1138b2bcc6d51802cda6be9e505bb02de3d7e5261e14f->leave($__internal_9bafde40ce2486c23da1138b2bcc6d51802cda6be9e505bb02de3d7e5261e14f_prof);

        
        $__internal_3da906191754fdb7ac3418d41a0956eba9152da287605c877559a132da53ecc8->leave($__internal_3da906191754fdb7ac3418d41a0956eba9152da287605c877559a132da53ecc8_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_bc0a427fc8e36a51b10e1c11ff760de081eb439e8d775adc0f0c99f7f8dbee5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc0a427fc8e36a51b10e1c11ff760de081eb439e8d775adc0f0c99f7f8dbee5b->enter($__internal_bc0a427fc8e36a51b10e1c11ff760de081eb439e8d775adc0f0c99f7f8dbee5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a31585dbe2d700d6c95b4899b285482bb4d2c42716a9c36d4bd522db7fe3ed76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a31585dbe2d700d6c95b4899b285482bb4d2c42716a9c36d4bd522db7fe3ed76->enter($__internal_a31585dbe2d700d6c95b4899b285482bb4d2c42716a9c36d4bd522db7fe3ed76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_a31585dbe2d700d6c95b4899b285482bb4d2c42716a9c36d4bd522db7fe3ed76->leave($__internal_a31585dbe2d700d6c95b4899b285482bb4d2c42716a9c36d4bd522db7fe3ed76_prof);

        
        $__internal_bc0a427fc8e36a51b10e1c11ff760de081eb439e8d775adc0f0c99f7f8dbee5b->leave($__internal_bc0a427fc8e36a51b10e1c11ff760de081eb439e8d775adc0f0c99f7f8dbee5b_prof);

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
