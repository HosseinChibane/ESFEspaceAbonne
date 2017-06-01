<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_d5240f9375656bf9e9ca6ed3bca9a78b76f54ebb9052bc6c653f84bced66baf9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d4c33226a6e14e2a54cc08c96733d167293e8d5cd42058cc409ba1657b39be22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4c33226a6e14e2a54cc08c96733d167293e8d5cd42058cc409ba1657b39be22->enter($__internal_d4c33226a6e14e2a54cc08c96733d167293e8d5cd42058cc409ba1657b39be22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_210f9770d586178745085536fab255f474fe7c9f3e5050a985fdc9d1176c01a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_210f9770d586178745085536fab255f474fe7c9f3e5050a985fdc9d1176c01a1->enter($__internal_210f9770d586178745085536fab255f474fe7c9f3e5050a985fdc9d1176c01a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d4c33226a6e14e2a54cc08c96733d167293e8d5cd42058cc409ba1657b39be22->leave($__internal_d4c33226a6e14e2a54cc08c96733d167293e8d5cd42058cc409ba1657b39be22_prof);

        
        $__internal_210f9770d586178745085536fab255f474fe7c9f3e5050a985fdc9d1176c01a1->leave($__internal_210f9770d586178745085536fab255f474fe7c9f3e5050a985fdc9d1176c01a1_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0bd8a0dd90d1f1ba53d074693d86602acd717b1dae330be9de2d07d8044eb767 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0bd8a0dd90d1f1ba53d074693d86602acd717b1dae330be9de2d07d8044eb767->enter($__internal_0bd8a0dd90d1f1ba53d074693d86602acd717b1dae330be9de2d07d8044eb767_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_de5a5e9a752d418c7e6647669cbeb464df4d5832beee5bfc2297b1edec7ef406 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de5a5e9a752d418c7e6647669cbeb464df4d5832beee5bfc2297b1edec7ef406->enter($__internal_de5a5e9a752d418c7e6647669cbeb464df4d5832beee5bfc2297b1edec7ef406_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_de5a5e9a752d418c7e6647669cbeb464df4d5832beee5bfc2297b1edec7ef406->leave($__internal_de5a5e9a752d418c7e6647669cbeb464df4d5832beee5bfc2297b1edec7ef406_prof);

        
        $__internal_0bd8a0dd90d1f1ba53d074693d86602acd717b1dae330be9de2d07d8044eb767->leave($__internal_0bd8a0dd90d1f1ba53d074693d86602acd717b1dae330be9de2d07d8044eb767_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_60ed7d33634cfd13828843dacfeaf9b78288caac2c464fae71edc07c01f97035 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60ed7d33634cfd13828843dacfeaf9b78288caac2c464fae71edc07c01f97035->enter($__internal_60ed7d33634cfd13828843dacfeaf9b78288caac2c464fae71edc07c01f97035_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_aae16df96d9e0b2f69836b269d78bafe17c324ed980753d2b503896a2e10ab5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aae16df96d9e0b2f69836b269d78bafe17c324ed980753d2b503896a2e10ab5a->enter($__internal_aae16df96d9e0b2f69836b269d78bafe17c324ed980753d2b503896a2e10ab5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_aae16df96d9e0b2f69836b269d78bafe17c324ed980753d2b503896a2e10ab5a->leave($__internal_aae16df96d9e0b2f69836b269d78bafe17c324ed980753d2b503896a2e10ab5a_prof);

        
        $__internal_60ed7d33634cfd13828843dacfeaf9b78288caac2c464fae71edc07c01f97035->leave($__internal_60ed7d33634cfd13828843dacfeaf9b78288caac2c464fae71edc07c01f97035_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2f3cc9453b1636af036539bd9623a9b512393557630edb1fc5f69798994c7f15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f3cc9453b1636af036539bd9623a9b512393557630edb1fc5f69798994c7f15->enter($__internal_2f3cc9453b1636af036539bd9623a9b512393557630edb1fc5f69798994c7f15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b9fc697e4defa293e1f2e4e6821afc2a325faa1cf70bfe6def5ab11a2ec24489 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9fc697e4defa293e1f2e4e6821afc2a325faa1cf70bfe6def5ab11a2ec24489->enter($__internal_b9fc697e4defa293e1f2e4e6821afc2a325faa1cf70bfe6def5ab11a2ec24489_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_b9fc697e4defa293e1f2e4e6821afc2a325faa1cf70bfe6def5ab11a2ec24489->leave($__internal_b9fc697e4defa293e1f2e4e6821afc2a325faa1cf70bfe6def5ab11a2ec24489_prof);

        
        $__internal_2f3cc9453b1636af036539bd9623a9b512393557630edb1fc5f69798994c7f15->leave($__internal_2f3cc9453b1636af036539bd9623a9b512393557630edb1fc5f69798994c7f15_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
