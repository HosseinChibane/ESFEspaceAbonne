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
        $__internal_778563f54530031c72468e124e2ebe8dae37a481af2ad3ba30998756a44aa908 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_778563f54530031c72468e124e2ebe8dae37a481af2ad3ba30998756a44aa908->enter($__internal_778563f54530031c72468e124e2ebe8dae37a481af2ad3ba30998756a44aa908_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_a60db3fe13da479860f84b76d48543323e031e4a7cef9fc6b024d1b2ca761df1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a60db3fe13da479860f84b76d48543323e031e4a7cef9fc6b024d1b2ca761df1->enter($__internal_a60db3fe13da479860f84b76d48543323e031e4a7cef9fc6b024d1b2ca761df1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_778563f54530031c72468e124e2ebe8dae37a481af2ad3ba30998756a44aa908->leave($__internal_778563f54530031c72468e124e2ebe8dae37a481af2ad3ba30998756a44aa908_prof);

        
        $__internal_a60db3fe13da479860f84b76d48543323e031e4a7cef9fc6b024d1b2ca761df1->leave($__internal_a60db3fe13da479860f84b76d48543323e031e4a7cef9fc6b024d1b2ca761df1_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_dab56e6ac6da8a883231bfd59d2d9b3443c52568b974ecb95ed0b4734114db45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dab56e6ac6da8a883231bfd59d2d9b3443c52568b974ecb95ed0b4734114db45->enter($__internal_dab56e6ac6da8a883231bfd59d2d9b3443c52568b974ecb95ed0b4734114db45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_30134486eea272b14f46989b11ddb77cc276fa1f63077192f44a986b3933c79b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30134486eea272b14f46989b11ddb77cc276fa1f63077192f44a986b3933c79b->enter($__internal_30134486eea272b14f46989b11ddb77cc276fa1f63077192f44a986b3933c79b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_30134486eea272b14f46989b11ddb77cc276fa1f63077192f44a986b3933c79b->leave($__internal_30134486eea272b14f46989b11ddb77cc276fa1f63077192f44a986b3933c79b_prof);

        
        $__internal_dab56e6ac6da8a883231bfd59d2d9b3443c52568b974ecb95ed0b4734114db45->leave($__internal_dab56e6ac6da8a883231bfd59d2d9b3443c52568b974ecb95ed0b4734114db45_prof);

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
