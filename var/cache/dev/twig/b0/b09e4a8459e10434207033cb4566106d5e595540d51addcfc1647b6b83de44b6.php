<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_40c72d47af16f52911b4ccde8be14f47e84730b7f8dc904856d61621e152b554 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_ed5692c12bbf922ea1bdba693e205a8fc779de41a908a9045f371818720e2119 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed5692c12bbf922ea1bdba693e205a8fc779de41a908a9045f371818720e2119->enter($__internal_ed5692c12bbf922ea1bdba693e205a8fc779de41a908a9045f371818720e2119_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_f6fd4c51180c4b7cc8003b0d9e903f20c77a8e412f0da3de8c6c67d62af514e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6fd4c51180c4b7cc8003b0d9e903f20c77a8e412f0da3de8c6c67d62af514e7->enter($__internal_f6fd4c51180c4b7cc8003b0d9e903f20c77a8e412f0da3de8c6c67d62af514e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ed5692c12bbf922ea1bdba693e205a8fc779de41a908a9045f371818720e2119->leave($__internal_ed5692c12bbf922ea1bdba693e205a8fc779de41a908a9045f371818720e2119_prof);

        
        $__internal_f6fd4c51180c4b7cc8003b0d9e903f20c77a8e412f0da3de8c6c67d62af514e7->leave($__internal_f6fd4c51180c4b7cc8003b0d9e903f20c77a8e412f0da3de8c6c67d62af514e7_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_87bcc1d7e937ae4c50f3d5cf14231595fa57db85ac025db2ca3f61a702d54d6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87bcc1d7e937ae4c50f3d5cf14231595fa57db85ac025db2ca3f61a702d54d6b->enter($__internal_87bcc1d7e937ae4c50f3d5cf14231595fa57db85ac025db2ca3f61a702d54d6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_1fa4622d1420c0f7170641c29b440739e245d969950fec5f23a81d38c98a42e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fa4622d1420c0f7170641c29b440739e245d969950fec5f23a81d38c98a42e7->enter($__internal_1fa4622d1420c0f7170641c29b440739e245d969950fec5f23a81d38c98a42e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_1fa4622d1420c0f7170641c29b440739e245d969950fec5f23a81d38c98a42e7->leave($__internal_1fa4622d1420c0f7170641c29b440739e245d969950fec5f23a81d38c98a42e7_prof);

        
        $__internal_87bcc1d7e937ae4c50f3d5cf14231595fa57db85ac025db2ca3f61a702d54d6b->leave($__internal_87bcc1d7e937ae4c50f3d5cf14231595fa57db85ac025db2ca3f61a702d54d6b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0086ceed1264abccba39285243ae6bbd19c5f2c1e9d2bd11b1618e9f991eaa5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0086ceed1264abccba39285243ae6bbd19c5f2c1e9d2bd11b1618e9f991eaa5a->enter($__internal_0086ceed1264abccba39285243ae6bbd19c5f2c1e9d2bd11b1618e9f991eaa5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_aa3c2fe44ae5a7bc73df14d6e6f4f175bc3d4c4e15d2a88bc545c15af58751ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa3c2fe44ae5a7bc73df14d6e6f4f175bc3d4c4e15d2a88bc545c15af58751ed->enter($__internal_aa3c2fe44ae5a7bc73df14d6e6f4f175bc3d4c4e15d2a88bc545c15af58751ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_aa3c2fe44ae5a7bc73df14d6e6f4f175bc3d4c4e15d2a88bc545c15af58751ed->leave($__internal_aa3c2fe44ae5a7bc73df14d6e6f4f175bc3d4c4e15d2a88bc545c15af58751ed_prof);

        
        $__internal_0086ceed1264abccba39285243ae6bbd19c5f2c1e9d2bd11b1618e9f991eaa5a->leave($__internal_0086ceed1264abccba39285243ae6bbd19c5f2c1e9d2bd11b1618e9f991eaa5a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_23f325a0d15b7c5c7c740917aa10a2aa5ff46176ebeb33220ccfe9e0f4588010 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23f325a0d15b7c5c7c740917aa10a2aa5ff46176ebeb33220ccfe9e0f4588010->enter($__internal_23f325a0d15b7c5c7c740917aa10a2aa5ff46176ebeb33220ccfe9e0f4588010_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ab5630b42c34c0bbf0bdbfb591a183367614d78d9270e59f69f3089bb6a05d54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab5630b42c34c0bbf0bdbfb591a183367614d78d9270e59f69f3089bb6a05d54->enter($__internal_ab5630b42c34c0bbf0bdbfb591a183367614d78d9270e59f69f3089bb6a05d54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ab5630b42c34c0bbf0bdbfb591a183367614d78d9270e59f69f3089bb6a05d54->leave($__internal_ab5630b42c34c0bbf0bdbfb591a183367614d78d9270e59f69f3089bb6a05d54_prof);

        
        $__internal_23f325a0d15b7c5c7c740917aa10a2aa5ff46176ebeb33220ccfe9e0f4588010->leave($__internal_23f325a0d15b7c5c7c740917aa10a2aa5ff46176ebeb33220ccfe9e0f4588010_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
", "WebProfilerBundle:Collector:router.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
