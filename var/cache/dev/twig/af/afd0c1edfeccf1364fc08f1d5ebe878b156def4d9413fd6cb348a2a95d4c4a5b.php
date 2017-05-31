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
        $__internal_d349120bff269d79494fd49cd9d44e5d6e8d6c4b73fe3fb3bcfd1cd7b9e0e906 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d349120bff269d79494fd49cd9d44e5d6e8d6c4b73fe3fb3bcfd1cd7b9e0e906->enter($__internal_d349120bff269d79494fd49cd9d44e5d6e8d6c4b73fe3fb3bcfd1cd7b9e0e906_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_028324dd023189083ebc251fc3381d970be9c0faf43a6d58cea6280010fbb3ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_028324dd023189083ebc251fc3381d970be9c0faf43a6d58cea6280010fbb3ad->enter($__internal_028324dd023189083ebc251fc3381d970be9c0faf43a6d58cea6280010fbb3ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_d349120bff269d79494fd49cd9d44e5d6e8d6c4b73fe3fb3bcfd1cd7b9e0e906->leave($__internal_d349120bff269d79494fd49cd9d44e5d6e8d6c4b73fe3fb3bcfd1cd7b9e0e906_prof);

        
        $__internal_028324dd023189083ebc251fc3381d970be9c0faf43a6d58cea6280010fbb3ad->leave($__internal_028324dd023189083ebc251fc3381d970be9c0faf43a6d58cea6280010fbb3ad_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_8a1f3535707e12aedb9f33fb4d420267f7a9ba22e894f2e52cb935a0ec3a636e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a1f3535707e12aedb9f33fb4d420267f7a9ba22e894f2e52cb935a0ec3a636e->enter($__internal_8a1f3535707e12aedb9f33fb4d420267f7a9ba22e894f2e52cb935a0ec3a636e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1c9f8f5ad5906a901931d12ec5c5a066a2bf1345f7d5129583582a67b2c42e6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c9f8f5ad5906a901931d12ec5c5a066a2bf1345f7d5129583582a67b2c42e6b->enter($__internal_1c9f8f5ad5906a901931d12ec5c5a066a2bf1345f7d5129583582a67b2c42e6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_1c9f8f5ad5906a901931d12ec5c5a066a2bf1345f7d5129583582a67b2c42e6b->leave($__internal_1c9f8f5ad5906a901931d12ec5c5a066a2bf1345f7d5129583582a67b2c42e6b_prof);

        
        $__internal_8a1f3535707e12aedb9f33fb4d420267f7a9ba22e894f2e52cb935a0ec3a636e->leave($__internal_8a1f3535707e12aedb9f33fb4d420267f7a9ba22e894f2e52cb935a0ec3a636e_prof);

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
