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
        $__internal_d11f4933172364475aa216e7279d51e8b3578c0c39b39116ce69983bfcb40943 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d11f4933172364475aa216e7279d51e8b3578c0c39b39116ce69983bfcb40943->enter($__internal_d11f4933172364475aa216e7279d51e8b3578c0c39b39116ce69983bfcb40943_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_c35ac306b7ad8b50d80c822d9568a974854bc10e37d6901daa14e3233c76ef4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c35ac306b7ad8b50d80c822d9568a974854bc10e37d6901daa14e3233c76ef4e->enter($__internal_c35ac306b7ad8b50d80c822d9568a974854bc10e37d6901daa14e3233c76ef4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d11f4933172364475aa216e7279d51e8b3578c0c39b39116ce69983bfcb40943->leave($__internal_d11f4933172364475aa216e7279d51e8b3578c0c39b39116ce69983bfcb40943_prof);

        
        $__internal_c35ac306b7ad8b50d80c822d9568a974854bc10e37d6901daa14e3233c76ef4e->leave($__internal_c35ac306b7ad8b50d80c822d9568a974854bc10e37d6901daa14e3233c76ef4e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_520525715ac31ba026ec0cd3690ebad16fc2e9c319af9bec4faea851791678f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_520525715ac31ba026ec0cd3690ebad16fc2e9c319af9bec4faea851791678f2->enter($__internal_520525715ac31ba026ec0cd3690ebad16fc2e9c319af9bec4faea851791678f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_f54ec44d2dd0de53e66907ec058f1052bd57b2d45794354e342f6eff55a4e440 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f54ec44d2dd0de53e66907ec058f1052bd57b2d45794354e342f6eff55a4e440->enter($__internal_f54ec44d2dd0de53e66907ec058f1052bd57b2d45794354e342f6eff55a4e440_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f54ec44d2dd0de53e66907ec058f1052bd57b2d45794354e342f6eff55a4e440->leave($__internal_f54ec44d2dd0de53e66907ec058f1052bd57b2d45794354e342f6eff55a4e440_prof);

        
        $__internal_520525715ac31ba026ec0cd3690ebad16fc2e9c319af9bec4faea851791678f2->leave($__internal_520525715ac31ba026ec0cd3690ebad16fc2e9c319af9bec4faea851791678f2_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_cf9e07f98f196fc94c90a0650163fedbb6b1df4684918a1ac9b62beae94deff6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf9e07f98f196fc94c90a0650163fedbb6b1df4684918a1ac9b62beae94deff6->enter($__internal_cf9e07f98f196fc94c90a0650163fedbb6b1df4684918a1ac9b62beae94deff6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f1c46135dc99f7fa5100c59a8c37f3c6aaa23e53a57b1e2daea1e71347de2b23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1c46135dc99f7fa5100c59a8c37f3c6aaa23e53a57b1e2daea1e71347de2b23->enter($__internal_f1c46135dc99f7fa5100c59a8c37f3c6aaa23e53a57b1e2daea1e71347de2b23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f1c46135dc99f7fa5100c59a8c37f3c6aaa23e53a57b1e2daea1e71347de2b23->leave($__internal_f1c46135dc99f7fa5100c59a8c37f3c6aaa23e53a57b1e2daea1e71347de2b23_prof);

        
        $__internal_cf9e07f98f196fc94c90a0650163fedbb6b1df4684918a1ac9b62beae94deff6->leave($__internal_cf9e07f98f196fc94c90a0650163fedbb6b1df4684918a1ac9b62beae94deff6_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_95bf8ca1e4a364892b35b89f9ad8e6f40cb8dca21b7abcbb4c47f1961e438513 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95bf8ca1e4a364892b35b89f9ad8e6f40cb8dca21b7abcbb4c47f1961e438513->enter($__internal_95bf8ca1e4a364892b35b89f9ad8e6f40cb8dca21b7abcbb4c47f1961e438513_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4f8f3d4f5b78a594fc849d225621a254cbb3e34059ff7309442e171aeedb8a82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f8f3d4f5b78a594fc849d225621a254cbb3e34059ff7309442e171aeedb8a82->enter($__internal_4f8f3d4f5b78a594fc849d225621a254cbb3e34059ff7309442e171aeedb8a82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_4f8f3d4f5b78a594fc849d225621a254cbb3e34059ff7309442e171aeedb8a82->leave($__internal_4f8f3d4f5b78a594fc849d225621a254cbb3e34059ff7309442e171aeedb8a82_prof);

        
        $__internal_95bf8ca1e4a364892b35b89f9ad8e6f40cb8dca21b7abcbb4c47f1961e438513->leave($__internal_95bf8ca1e4a364892b35b89f9ad8e6f40cb8dca21b7abcbb4c47f1961e438513_prof);

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
