<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_2b9f05ed0e930667f108f41f6ecdc12ff2dbd50fb56f43486d9ccf020a280b06 extends Twig_Template
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
        $__internal_e78697f2f6a7ca175a2dedd8673489ad5b72981132e6eee0434959be2285f403 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e78697f2f6a7ca175a2dedd8673489ad5b72981132e6eee0434959be2285f403->enter($__internal_e78697f2f6a7ca175a2dedd8673489ad5b72981132e6eee0434959be2285f403_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_7f6b6e6ee5e7a854dfe3f5be41d97fb8fff38d6d1c22aacba9bfe5a38978ba23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f6b6e6ee5e7a854dfe3f5be41d97fb8fff38d6d1c22aacba9bfe5a38978ba23->enter($__internal_7f6b6e6ee5e7a854dfe3f5be41d97fb8fff38d6d1c22aacba9bfe5a38978ba23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e78697f2f6a7ca175a2dedd8673489ad5b72981132e6eee0434959be2285f403->leave($__internal_e78697f2f6a7ca175a2dedd8673489ad5b72981132e6eee0434959be2285f403_prof);

        
        $__internal_7f6b6e6ee5e7a854dfe3f5be41d97fb8fff38d6d1c22aacba9bfe5a38978ba23->leave($__internal_7f6b6e6ee5e7a854dfe3f5be41d97fb8fff38d6d1c22aacba9bfe5a38978ba23_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4d92cb0f4f4b15a3ac2ef38824d06a68bb62c95cc2260c7f2e8cae7f1f71f257 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d92cb0f4f4b15a3ac2ef38824d06a68bb62c95cc2260c7f2e8cae7f1f71f257->enter($__internal_4d92cb0f4f4b15a3ac2ef38824d06a68bb62c95cc2260c7f2e8cae7f1f71f257_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_1b57edb0ec4906fe9718e96fc5120e8e23a095b905b350c23e2950a035df0b71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b57edb0ec4906fe9718e96fc5120e8e23a095b905b350c23e2950a035df0b71->enter($__internal_1b57edb0ec4906fe9718e96fc5120e8e23a095b905b350c23e2950a035df0b71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_1b57edb0ec4906fe9718e96fc5120e8e23a095b905b350c23e2950a035df0b71->leave($__internal_1b57edb0ec4906fe9718e96fc5120e8e23a095b905b350c23e2950a035df0b71_prof);

        
        $__internal_4d92cb0f4f4b15a3ac2ef38824d06a68bb62c95cc2260c7f2e8cae7f1f71f257->leave($__internal_4d92cb0f4f4b15a3ac2ef38824d06a68bb62c95cc2260c7f2e8cae7f1f71f257_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8aa6eda016960b434e5dc2b683b2ea30e1a0b6ce529cd6548f4a0c1062d48306 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8aa6eda016960b434e5dc2b683b2ea30e1a0b6ce529cd6548f4a0c1062d48306->enter($__internal_8aa6eda016960b434e5dc2b683b2ea30e1a0b6ce529cd6548f4a0c1062d48306_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_b8233b613db9dc61835c45e4d573d14e314860cfd05e5a889063e5d688b3b4e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8233b613db9dc61835c45e4d573d14e314860cfd05e5a889063e5d688b3b4e4->enter($__internal_b8233b613db9dc61835c45e4d573d14e314860cfd05e5a889063e5d688b3b4e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b8233b613db9dc61835c45e4d573d14e314860cfd05e5a889063e5d688b3b4e4->leave($__internal_b8233b613db9dc61835c45e4d573d14e314860cfd05e5a889063e5d688b3b4e4_prof);

        
        $__internal_8aa6eda016960b434e5dc2b683b2ea30e1a0b6ce529cd6548f4a0c1062d48306->leave($__internal_8aa6eda016960b434e5dc2b683b2ea30e1a0b6ce529cd6548f4a0c1062d48306_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_868ca3e824aded3d7d0b93bae9b5c1915fb39fde37275058320abc83d1ff4067 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_868ca3e824aded3d7d0b93bae9b5c1915fb39fde37275058320abc83d1ff4067->enter($__internal_868ca3e824aded3d7d0b93bae9b5c1915fb39fde37275058320abc83d1ff4067_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6abf26f4aa46321dd817b16c9471e77cf78d1c4e0b2ebcece58e46f575daab2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6abf26f4aa46321dd817b16c9471e77cf78d1c4e0b2ebcece58e46f575daab2e->enter($__internal_6abf26f4aa46321dd817b16c9471e77cf78d1c4e0b2ebcece58e46f575daab2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_6abf26f4aa46321dd817b16c9471e77cf78d1c4e0b2ebcece58e46f575daab2e->leave($__internal_6abf26f4aa46321dd817b16c9471e77cf78d1c4e0b2ebcece58e46f575daab2e_prof);

        
        $__internal_868ca3e824aded3d7d0b93bae9b5c1915fb39fde37275058320abc83d1ff4067->leave($__internal_868ca3e824aded3d7d0b93bae9b5c1915fb39fde37275058320abc83d1ff4067_prof);

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
