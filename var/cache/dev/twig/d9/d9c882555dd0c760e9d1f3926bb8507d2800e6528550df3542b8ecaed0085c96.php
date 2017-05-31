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
        $__internal_23b4697c7053b0ccf2069904262d92b0dc23d007c600151c7ea3d108d970e798 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23b4697c7053b0ccf2069904262d92b0dc23d007c600151c7ea3d108d970e798->enter($__internal_23b4697c7053b0ccf2069904262d92b0dc23d007c600151c7ea3d108d970e798_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_9b61c56dd3b64ab8b356b5774b3898845ba9286b4113b932ff7859478f96652c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b61c56dd3b64ab8b356b5774b3898845ba9286b4113b932ff7859478f96652c->enter($__internal_9b61c56dd3b64ab8b356b5774b3898845ba9286b4113b932ff7859478f96652c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_23b4697c7053b0ccf2069904262d92b0dc23d007c600151c7ea3d108d970e798->leave($__internal_23b4697c7053b0ccf2069904262d92b0dc23d007c600151c7ea3d108d970e798_prof);

        
        $__internal_9b61c56dd3b64ab8b356b5774b3898845ba9286b4113b932ff7859478f96652c->leave($__internal_9b61c56dd3b64ab8b356b5774b3898845ba9286b4113b932ff7859478f96652c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e4afb3443a406142a2f37dd970c7c072399ddeaa4c76ec2bba9d2d867624a2ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4afb3443a406142a2f37dd970c7c072399ddeaa4c76ec2bba9d2d867624a2ec->enter($__internal_e4afb3443a406142a2f37dd970c7c072399ddeaa4c76ec2bba9d2d867624a2ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_bf12af01fa6d56767cb19b3694e43af763ceff5dfe628d584d8d110956a9ecaa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf12af01fa6d56767cb19b3694e43af763ceff5dfe628d584d8d110956a9ecaa->enter($__internal_bf12af01fa6d56767cb19b3694e43af763ceff5dfe628d584d8d110956a9ecaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_bf12af01fa6d56767cb19b3694e43af763ceff5dfe628d584d8d110956a9ecaa->leave($__internal_bf12af01fa6d56767cb19b3694e43af763ceff5dfe628d584d8d110956a9ecaa_prof);

        
        $__internal_e4afb3443a406142a2f37dd970c7c072399ddeaa4c76ec2bba9d2d867624a2ec->leave($__internal_e4afb3443a406142a2f37dd970c7c072399ddeaa4c76ec2bba9d2d867624a2ec_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_be0043f042572a51ff4b547eef95107b12c6df24bf6039881736163f29b82099 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be0043f042572a51ff4b547eef95107b12c6df24bf6039881736163f29b82099->enter($__internal_be0043f042572a51ff4b547eef95107b12c6df24bf6039881736163f29b82099_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_1040fdd2ad27040f96cdb5316d875bb6a21d61bf9f5900b66fec1fb01ec32793 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1040fdd2ad27040f96cdb5316d875bb6a21d61bf9f5900b66fec1fb01ec32793->enter($__internal_1040fdd2ad27040f96cdb5316d875bb6a21d61bf9f5900b66fec1fb01ec32793_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_1040fdd2ad27040f96cdb5316d875bb6a21d61bf9f5900b66fec1fb01ec32793->leave($__internal_1040fdd2ad27040f96cdb5316d875bb6a21d61bf9f5900b66fec1fb01ec32793_prof);

        
        $__internal_be0043f042572a51ff4b547eef95107b12c6df24bf6039881736163f29b82099->leave($__internal_be0043f042572a51ff4b547eef95107b12c6df24bf6039881736163f29b82099_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5c3708c909bec53ed7ad99a95dc97085f0023646bd3d2ecdf346827d924f6540 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c3708c909bec53ed7ad99a95dc97085f0023646bd3d2ecdf346827d924f6540->enter($__internal_5c3708c909bec53ed7ad99a95dc97085f0023646bd3d2ecdf346827d924f6540_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_347c08a9242c6f73b322fb1bdd0936c29807ade212e6ce3186c6bb08f4d620a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_347c08a9242c6f73b322fb1bdd0936c29807ade212e6ce3186c6bb08f4d620a3->enter($__internal_347c08a9242c6f73b322fb1bdd0936c29807ade212e6ce3186c6bb08f4d620a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_347c08a9242c6f73b322fb1bdd0936c29807ade212e6ce3186c6bb08f4d620a3->leave($__internal_347c08a9242c6f73b322fb1bdd0936c29807ade212e6ce3186c6bb08f4d620a3_prof);

        
        $__internal_5c3708c909bec53ed7ad99a95dc97085f0023646bd3d2ecdf346827d924f6540->leave($__internal_5c3708c909bec53ed7ad99a95dc97085f0023646bd3d2ecdf346827d924f6540_prof);

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
