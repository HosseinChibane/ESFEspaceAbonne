<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_3898a54e63cb7d4aa9609425036bf0f94158284dccdd564842d4804011d8d47f extends Twig_Template
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
        $__internal_f81dd3296cb73e3f814fd054d5650464d4025fe6182347b0ca75236ac684776b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f81dd3296cb73e3f814fd054d5650464d4025fe6182347b0ca75236ac684776b->enter($__internal_f81dd3296cb73e3f814fd054d5650464d4025fe6182347b0ca75236ac684776b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_3c7cc3d0989b5f20a25fd1985715f68c657ace674577aca8d480d84374bf8535 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c7cc3d0989b5f20a25fd1985715f68c657ace674577aca8d480d84374bf8535->enter($__internal_3c7cc3d0989b5f20a25fd1985715f68c657ace674577aca8d480d84374bf8535_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f81dd3296cb73e3f814fd054d5650464d4025fe6182347b0ca75236ac684776b->leave($__internal_f81dd3296cb73e3f814fd054d5650464d4025fe6182347b0ca75236ac684776b_prof);

        
        $__internal_3c7cc3d0989b5f20a25fd1985715f68c657ace674577aca8d480d84374bf8535->leave($__internal_3c7cc3d0989b5f20a25fd1985715f68c657ace674577aca8d480d84374bf8535_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_10dd56add05e5c6c1fe42eafc58a1fcf02595ceaf04518c354eaf1f6d02baa2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10dd56add05e5c6c1fe42eafc58a1fcf02595ceaf04518c354eaf1f6d02baa2f->enter($__internal_10dd56add05e5c6c1fe42eafc58a1fcf02595ceaf04518c354eaf1f6d02baa2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_1d152b44110e697e88946456cd246e1d5f482d6cb9a2fb314da5554726b6e29b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d152b44110e697e88946456cd246e1d5f482d6cb9a2fb314da5554726b6e29b->enter($__internal_1d152b44110e697e88946456cd246e1d5f482d6cb9a2fb314da5554726b6e29b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_1d152b44110e697e88946456cd246e1d5f482d6cb9a2fb314da5554726b6e29b->leave($__internal_1d152b44110e697e88946456cd246e1d5f482d6cb9a2fb314da5554726b6e29b_prof);

        
        $__internal_10dd56add05e5c6c1fe42eafc58a1fcf02595ceaf04518c354eaf1f6d02baa2f->leave($__internal_10dd56add05e5c6c1fe42eafc58a1fcf02595ceaf04518c354eaf1f6d02baa2f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9e9e886d1d5f7a064746d84600a50187d95ac540eb21da297d3168a7b50536cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e9e886d1d5f7a064746d84600a50187d95ac540eb21da297d3168a7b50536cd->enter($__internal_9e9e886d1d5f7a064746d84600a50187d95ac540eb21da297d3168a7b50536cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_ee59a0430f26522cf0a3b763619b2148511a5d04dd285ace7df386058074c01f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee59a0430f26522cf0a3b763619b2148511a5d04dd285ace7df386058074c01f->enter($__internal_ee59a0430f26522cf0a3b763619b2148511a5d04dd285ace7df386058074c01f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ee59a0430f26522cf0a3b763619b2148511a5d04dd285ace7df386058074c01f->leave($__internal_ee59a0430f26522cf0a3b763619b2148511a5d04dd285ace7df386058074c01f_prof);

        
        $__internal_9e9e886d1d5f7a064746d84600a50187d95ac540eb21da297d3168a7b50536cd->leave($__internal_9e9e886d1d5f7a064746d84600a50187d95ac540eb21da297d3168a7b50536cd_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0e4ea05738761d166a62dcf4529d380cc94f4e227ab2e48340208c8e859ad689 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e4ea05738761d166a62dcf4529d380cc94f4e227ab2e48340208c8e859ad689->enter($__internal_0e4ea05738761d166a62dcf4529d380cc94f4e227ab2e48340208c8e859ad689_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d970278aeb67d26da0208bc5fb1433c79219f477f4b4778609fbfe7bc4fb9015 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d970278aeb67d26da0208bc5fb1433c79219f477f4b4778609fbfe7bc4fb9015->enter($__internal_d970278aeb67d26da0208bc5fb1433c79219f477f4b4778609fbfe7bc4fb9015_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d970278aeb67d26da0208bc5fb1433c79219f477f4b4778609fbfe7bc4fb9015->leave($__internal_d970278aeb67d26da0208bc5fb1433c79219f477f4b4778609fbfe7bc4fb9015_prof);

        
        $__internal_0e4ea05738761d166a62dcf4529d380cc94f4e227ab2e48340208c8e859ad689->leave($__internal_0e4ea05738761d166a62dcf4529d380cc94f4e227ab2e48340208c8e859ad689_prof);

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
