<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_008fe33c83efc2ec86a7acd4afd6a671b54d03fbcbad507f37ace20c452cd095 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_80ca0ddeb370e23a5cd22d2836d5cd6ff1392a9066cb6b9fa4a444a67575bf4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80ca0ddeb370e23a5cd22d2836d5cd6ff1392a9066cb6b9fa4a444a67575bf4e->enter($__internal_80ca0ddeb370e23a5cd22d2836d5cd6ff1392a9066cb6b9fa4a444a67575bf4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_51196594734b43d6229c4a55512709e2b3bd0c82891d9021da30fdb893c969c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51196594734b43d6229c4a55512709e2b3bd0c82891d9021da30fdb893c969c8->enter($__internal_51196594734b43d6229c4a55512709e2b3bd0c82891d9021da30fdb893c969c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_80ca0ddeb370e23a5cd22d2836d5cd6ff1392a9066cb6b9fa4a444a67575bf4e->leave($__internal_80ca0ddeb370e23a5cd22d2836d5cd6ff1392a9066cb6b9fa4a444a67575bf4e_prof);

        
        $__internal_51196594734b43d6229c4a55512709e2b3bd0c82891d9021da30fdb893c969c8->leave($__internal_51196594734b43d6229c4a55512709e2b3bd0c82891d9021da30fdb893c969c8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_894d94684ae3fe6ad457ac0c4c9963d985037389f5f0763295eddb11d598453f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_894d94684ae3fe6ad457ac0c4c9963d985037389f5f0763295eddb11d598453f->enter($__internal_894d94684ae3fe6ad457ac0c4c9963d985037389f5f0763295eddb11d598453f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_15ba858e1bb26473d8064c6f9cac7c8581b0e800262cc3cb665e3356ca89a88c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15ba858e1bb26473d8064c6f9cac7c8581b0e800262cc3cb665e3356ca89a88c->enter($__internal_15ba858e1bb26473d8064c6f9cac7c8581b0e800262cc3cb665e3356ca89a88c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_15ba858e1bb26473d8064c6f9cac7c8581b0e800262cc3cb665e3356ca89a88c->leave($__internal_15ba858e1bb26473d8064c6f9cac7c8581b0e800262cc3cb665e3356ca89a88c_prof);

        
        $__internal_894d94684ae3fe6ad457ac0c4c9963d985037389f5f0763295eddb11d598453f->leave($__internal_894d94684ae3fe6ad457ac0c4c9963d985037389f5f0763295eddb11d598453f_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_48f1d330066746b68a4302ee8bf21f47f43dc21aacb8eb0cd4dc441032442650 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48f1d330066746b68a4302ee8bf21f47f43dc21aacb8eb0cd4dc441032442650->enter($__internal_48f1d330066746b68a4302ee8bf21f47f43dc21aacb8eb0cd4dc441032442650_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_570233838f09fd1c652916de12e95968d008cec6ce1fa6c0b97f8620e9e7f9f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_570233838f09fd1c652916de12e95968d008cec6ce1fa6c0b97f8620e9e7f9f3->enter($__internal_570233838f09fd1c652916de12e95968d008cec6ce1fa6c0b97f8620e9e7f9f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_570233838f09fd1c652916de12e95968d008cec6ce1fa6c0b97f8620e9e7f9f3->leave($__internal_570233838f09fd1c652916de12e95968d008cec6ce1fa6c0b97f8620e9e7f9f3_prof);

        
        $__internal_48f1d330066746b68a4302ee8bf21f47f43dc21aacb8eb0cd4dc441032442650->leave($__internal_48f1d330066746b68a4302ee8bf21f47f43dc21aacb8eb0cd4dc441032442650_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_482cdb750e2630ddc3160bd70922e7fb7a6c0d32456156594f66ba61ecad7c86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_482cdb750e2630ddc3160bd70922e7fb7a6c0d32456156594f66ba61ecad7c86->enter($__internal_482cdb750e2630ddc3160bd70922e7fb7a6c0d32456156594f66ba61ecad7c86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_abd7a2e74c7f2ea2dedc8fce26868603ae02843bababdb64947f609c7f367ba5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abd7a2e74c7f2ea2dedc8fce26868603ae02843bababdb64947f609c7f367ba5->enter($__internal_abd7a2e74c7f2ea2dedc8fce26868603ae02843bababdb64947f609c7f367ba5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_abd7a2e74c7f2ea2dedc8fce26868603ae02843bababdb64947f609c7f367ba5->leave($__internal_abd7a2e74c7f2ea2dedc8fce26868603ae02843bababdb64947f609c7f367ba5_prof);

        
        $__internal_482cdb750e2630ddc3160bd70922e7fb7a6c0d32456156594f66ba61ecad7c86->leave($__internal_482cdb750e2630ddc3160bd70922e7fb7a6c0d32456156594f66ba61ecad7c86_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "WebProfilerBundle:Collector:exception.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
