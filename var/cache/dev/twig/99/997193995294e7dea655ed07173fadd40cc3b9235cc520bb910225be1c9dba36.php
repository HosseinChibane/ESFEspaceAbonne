<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_ff276abf7458a85ec755fc74ee1cc90936feebf64e90ec6f2ce2d41c0ba7e959 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_585266537f8bee09a5334c8b16956ee3a87a76066c903073c342d6a8135ac217 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_585266537f8bee09a5334c8b16956ee3a87a76066c903073c342d6a8135ac217->enter($__internal_585266537f8bee09a5334c8b16956ee3a87a76066c903073c342d6a8135ac217_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_043163f9f552f7ae100cf55eaf02d5f282e4f6de2956ed9715aa1503b4e4202f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_043163f9f552f7ae100cf55eaf02d5f282e4f6de2956ed9715aa1503b4e4202f->enter($__internal_043163f9f552f7ae100cf55eaf02d5f282e4f6de2956ed9715aa1503b4e4202f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_585266537f8bee09a5334c8b16956ee3a87a76066c903073c342d6a8135ac217->leave($__internal_585266537f8bee09a5334c8b16956ee3a87a76066c903073c342d6a8135ac217_prof);

        
        $__internal_043163f9f552f7ae100cf55eaf02d5f282e4f6de2956ed9715aa1503b4e4202f->leave($__internal_043163f9f552f7ae100cf55eaf02d5f282e4f6de2956ed9715aa1503b4e4202f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ea6061bddeec01e41f937e613901606dedd8eb9abf589ec4f2e0784d76e6b769 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea6061bddeec01e41f937e613901606dedd8eb9abf589ec4f2e0784d76e6b769->enter($__internal_ea6061bddeec01e41f937e613901606dedd8eb9abf589ec4f2e0784d76e6b769_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_d22d85f134ed12430dfdce5c0760c3ea6c11236a7cbc8bcdde17d5606bc28d70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d22d85f134ed12430dfdce5c0760c3ea6c11236a7cbc8bcdde17d5606bc28d70->enter($__internal_d22d85f134ed12430dfdce5c0760c3ea6c11236a7cbc8bcdde17d5606bc28d70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_d22d85f134ed12430dfdce5c0760c3ea6c11236a7cbc8bcdde17d5606bc28d70->leave($__internal_d22d85f134ed12430dfdce5c0760c3ea6c11236a7cbc8bcdde17d5606bc28d70_prof);

        
        $__internal_ea6061bddeec01e41f937e613901606dedd8eb9abf589ec4f2e0784d76e6b769->leave($__internal_ea6061bddeec01e41f937e613901606dedd8eb9abf589ec4f2e0784d76e6b769_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "WebProfilerBundle:Collector:ajax.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
