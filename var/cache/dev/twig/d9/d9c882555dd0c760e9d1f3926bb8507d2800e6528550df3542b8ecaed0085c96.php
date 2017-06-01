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
        $__internal_12408580b1716fdbf6c344c24d1b5aac80d047c30e17bf301f6c45b1143f2fde = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12408580b1716fdbf6c344c24d1b5aac80d047c30e17bf301f6c45b1143f2fde->enter($__internal_12408580b1716fdbf6c344c24d1b5aac80d047c30e17bf301f6c45b1143f2fde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_f702c4597c542c9686efb3f7a924f2c683c9e846c0326217573a6bd5d1b33a14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f702c4597c542c9686efb3f7a924f2c683c9e846c0326217573a6bd5d1b33a14->enter($__internal_f702c4597c542c9686efb3f7a924f2c683c9e846c0326217573a6bd5d1b33a14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_12408580b1716fdbf6c344c24d1b5aac80d047c30e17bf301f6c45b1143f2fde->leave($__internal_12408580b1716fdbf6c344c24d1b5aac80d047c30e17bf301f6c45b1143f2fde_prof);

        
        $__internal_f702c4597c542c9686efb3f7a924f2c683c9e846c0326217573a6bd5d1b33a14->leave($__internal_f702c4597c542c9686efb3f7a924f2c683c9e846c0326217573a6bd5d1b33a14_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6fba9dc423484f8aeddec3135e7b054e725783af75dfc9e4f8809f571f4ddcda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fba9dc423484f8aeddec3135e7b054e725783af75dfc9e4f8809f571f4ddcda->enter($__internal_6fba9dc423484f8aeddec3135e7b054e725783af75dfc9e4f8809f571f4ddcda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_3df78a713ab49f4a044bfd4124a7dfb929780ca5b741dab315d74659bb4e39db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3df78a713ab49f4a044bfd4124a7dfb929780ca5b741dab315d74659bb4e39db->enter($__internal_3df78a713ab49f4a044bfd4124a7dfb929780ca5b741dab315d74659bb4e39db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_3df78a713ab49f4a044bfd4124a7dfb929780ca5b741dab315d74659bb4e39db->leave($__internal_3df78a713ab49f4a044bfd4124a7dfb929780ca5b741dab315d74659bb4e39db_prof);

        
        $__internal_6fba9dc423484f8aeddec3135e7b054e725783af75dfc9e4f8809f571f4ddcda->leave($__internal_6fba9dc423484f8aeddec3135e7b054e725783af75dfc9e4f8809f571f4ddcda_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3f9e1d1e79eaea4bf34abba4adeaa9932ebae1c3bec510bbafbd87df3676ac53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f9e1d1e79eaea4bf34abba4adeaa9932ebae1c3bec510bbafbd87df3676ac53->enter($__internal_3f9e1d1e79eaea4bf34abba4adeaa9932ebae1c3bec510bbafbd87df3676ac53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_4bff3f86bb5287c010f307df0d33de91a9df9eb58222b12e3af70709b596efec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bff3f86bb5287c010f307df0d33de91a9df9eb58222b12e3af70709b596efec->enter($__internal_4bff3f86bb5287c010f307df0d33de91a9df9eb58222b12e3af70709b596efec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_4bff3f86bb5287c010f307df0d33de91a9df9eb58222b12e3af70709b596efec->leave($__internal_4bff3f86bb5287c010f307df0d33de91a9df9eb58222b12e3af70709b596efec_prof);

        
        $__internal_3f9e1d1e79eaea4bf34abba4adeaa9932ebae1c3bec510bbafbd87df3676ac53->leave($__internal_3f9e1d1e79eaea4bf34abba4adeaa9932ebae1c3bec510bbafbd87df3676ac53_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f68b7f193a3eadd0b03f67d4b91f828e246967a394991cb8568c0609c64c9332 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f68b7f193a3eadd0b03f67d4b91f828e246967a394991cb8568c0609c64c9332->enter($__internal_f68b7f193a3eadd0b03f67d4b91f828e246967a394991cb8568c0609c64c9332_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_454eae82b0e42e9f54626ec946756c24bef916f43597f481dde6959aa98b6bcf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_454eae82b0e42e9f54626ec946756c24bef916f43597f481dde6959aa98b6bcf->enter($__internal_454eae82b0e42e9f54626ec946756c24bef916f43597f481dde6959aa98b6bcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_454eae82b0e42e9f54626ec946756c24bef916f43597f481dde6959aa98b6bcf->leave($__internal_454eae82b0e42e9f54626ec946756c24bef916f43597f481dde6959aa98b6bcf_prof);

        
        $__internal_f68b7f193a3eadd0b03f67d4b91f828e246967a394991cb8568c0609c64c9332->leave($__internal_f68b7f193a3eadd0b03f67d4b91f828e246967a394991cb8568c0609c64c9332_prof);

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
