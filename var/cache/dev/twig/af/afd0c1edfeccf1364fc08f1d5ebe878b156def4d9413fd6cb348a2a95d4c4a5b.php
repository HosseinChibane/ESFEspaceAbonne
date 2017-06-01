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
        $__internal_c8b371928e568ae1aa58a05f6740c2e8c566c327be4d101adc38bb48f72a32e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8b371928e568ae1aa58a05f6740c2e8c566c327be4d101adc38bb48f72a32e6->enter($__internal_c8b371928e568ae1aa58a05f6740c2e8c566c327be4d101adc38bb48f72a32e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_536bae595e369bd3d0def76d6c62bb381aedd25c41380d3f598df68bbd4ed5df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_536bae595e369bd3d0def76d6c62bb381aedd25c41380d3f598df68bbd4ed5df->enter($__internal_536bae595e369bd3d0def76d6c62bb381aedd25c41380d3f598df68bbd4ed5df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_c8b371928e568ae1aa58a05f6740c2e8c566c327be4d101adc38bb48f72a32e6->leave($__internal_c8b371928e568ae1aa58a05f6740c2e8c566c327be4d101adc38bb48f72a32e6_prof);

        
        $__internal_536bae595e369bd3d0def76d6c62bb381aedd25c41380d3f598df68bbd4ed5df->leave($__internal_536bae595e369bd3d0def76d6c62bb381aedd25c41380d3f598df68bbd4ed5df_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_ae2314494f4716072c0d120ffcdf90236aea800502c1286a0a344f57001a0f1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae2314494f4716072c0d120ffcdf90236aea800502c1286a0a344f57001a0f1d->enter($__internal_ae2314494f4716072c0d120ffcdf90236aea800502c1286a0a344f57001a0f1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_5a503de1da8bd1e25c91b6523fa5fa149217ca6fa95aa1e77def62d75e8f7414 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a503de1da8bd1e25c91b6523fa5fa149217ca6fa95aa1e77def62d75e8f7414->enter($__internal_5a503de1da8bd1e25c91b6523fa5fa149217ca6fa95aa1e77def62d75e8f7414_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_5a503de1da8bd1e25c91b6523fa5fa149217ca6fa95aa1e77def62d75e8f7414->leave($__internal_5a503de1da8bd1e25c91b6523fa5fa149217ca6fa95aa1e77def62d75e8f7414_prof);

        
        $__internal_ae2314494f4716072c0d120ffcdf90236aea800502c1286a0a344f57001a0f1d->leave($__internal_ae2314494f4716072c0d120ffcdf90236aea800502c1286a0a344f57001a0f1d_prof);

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
