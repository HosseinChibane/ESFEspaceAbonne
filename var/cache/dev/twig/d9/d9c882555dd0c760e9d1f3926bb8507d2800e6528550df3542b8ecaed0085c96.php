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
        $__internal_c0484055fd3eb43ca09481ed386b6873604a7f5e01148f197b37f11583923256 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0484055fd3eb43ca09481ed386b6873604a7f5e01148f197b37f11583923256->enter($__internal_c0484055fd3eb43ca09481ed386b6873604a7f5e01148f197b37f11583923256_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_3f4ee6b7929c81287d3e11363d6aeb5a24742f90085bef657cfdc94549b2a6b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f4ee6b7929c81287d3e11363d6aeb5a24742f90085bef657cfdc94549b2a6b3->enter($__internal_3f4ee6b7929c81287d3e11363d6aeb5a24742f90085bef657cfdc94549b2a6b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c0484055fd3eb43ca09481ed386b6873604a7f5e01148f197b37f11583923256->leave($__internal_c0484055fd3eb43ca09481ed386b6873604a7f5e01148f197b37f11583923256_prof);

        
        $__internal_3f4ee6b7929c81287d3e11363d6aeb5a24742f90085bef657cfdc94549b2a6b3->leave($__internal_3f4ee6b7929c81287d3e11363d6aeb5a24742f90085bef657cfdc94549b2a6b3_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c7e5062e189aa2e860ff6a095b7f8624ba1130abed5e80eda6afd53b0d14144d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7e5062e189aa2e860ff6a095b7f8624ba1130abed5e80eda6afd53b0d14144d->enter($__internal_c7e5062e189aa2e860ff6a095b7f8624ba1130abed5e80eda6afd53b0d14144d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_1ffd230f491d29bf694c0a9ed52609487381a7a1d427da60a614ea11558c1c35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ffd230f491d29bf694c0a9ed52609487381a7a1d427da60a614ea11558c1c35->enter($__internal_1ffd230f491d29bf694c0a9ed52609487381a7a1d427da60a614ea11558c1c35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_1ffd230f491d29bf694c0a9ed52609487381a7a1d427da60a614ea11558c1c35->leave($__internal_1ffd230f491d29bf694c0a9ed52609487381a7a1d427da60a614ea11558c1c35_prof);

        
        $__internal_c7e5062e189aa2e860ff6a095b7f8624ba1130abed5e80eda6afd53b0d14144d->leave($__internal_c7e5062e189aa2e860ff6a095b7f8624ba1130abed5e80eda6afd53b0d14144d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5cc42314dd15f7262d26810669e46e23a9526b7e8f2827076ea86a6cf2d54be9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5cc42314dd15f7262d26810669e46e23a9526b7e8f2827076ea86a6cf2d54be9->enter($__internal_5cc42314dd15f7262d26810669e46e23a9526b7e8f2827076ea86a6cf2d54be9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_5c7e11bc1d3ab2738c34896ff2465fb8f1a3e4556b21f4a287e7cb9d8cb34c87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c7e11bc1d3ab2738c34896ff2465fb8f1a3e4556b21f4a287e7cb9d8cb34c87->enter($__internal_5c7e11bc1d3ab2738c34896ff2465fb8f1a3e4556b21f4a287e7cb9d8cb34c87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_5c7e11bc1d3ab2738c34896ff2465fb8f1a3e4556b21f4a287e7cb9d8cb34c87->leave($__internal_5c7e11bc1d3ab2738c34896ff2465fb8f1a3e4556b21f4a287e7cb9d8cb34c87_prof);

        
        $__internal_5cc42314dd15f7262d26810669e46e23a9526b7e8f2827076ea86a6cf2d54be9->leave($__internal_5cc42314dd15f7262d26810669e46e23a9526b7e8f2827076ea86a6cf2d54be9_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_bfc4fae667d3b930a858bde6a942a866143c9c38fb377483c717b192ab3c2be9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bfc4fae667d3b930a858bde6a942a866143c9c38fb377483c717b192ab3c2be9->enter($__internal_bfc4fae667d3b930a858bde6a942a866143c9c38fb377483c717b192ab3c2be9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0347e988e6b0aa219ad97b3e8a9ee77cf72cf43f96af7af0af400a9a005d5f2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0347e988e6b0aa219ad97b3e8a9ee77cf72cf43f96af7af0af400a9a005d5f2f->enter($__internal_0347e988e6b0aa219ad97b3e8a9ee77cf72cf43f96af7af0af400a9a005d5f2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_0347e988e6b0aa219ad97b3e8a9ee77cf72cf43f96af7af0af400a9a005d5f2f->leave($__internal_0347e988e6b0aa219ad97b3e8a9ee77cf72cf43f96af7af0af400a9a005d5f2f_prof);

        
        $__internal_bfc4fae667d3b930a858bde6a942a866143c9c38fb377483c717b192ab3c2be9->leave($__internal_bfc4fae667d3b930a858bde6a942a866143c9c38fb377483c717b192ab3c2be9_prof);

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
