<?php

/* @ESFEspaceAbonne/back/preparationOne.html.twig */
class __TwigTemplate_f9dcf117b173379e3c8fdeba41c5ffbbbf10091642f0df7ef51b134ed381662b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":backend:sidebar.html.twig", "@ESFEspaceAbonne/back/preparationOne.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'Content' => array($this, 'block_Content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return ":backend:sidebar.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a00cd54c97a0a2d0c1a61c8ddcab983d4c2da8fbdff4bf7dd8e196650412e4c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a00cd54c97a0a2d0c1a61c8ddcab983d4c2da8fbdff4bf7dd8e196650412e4c9->enter($__internal_a00cd54c97a0a2d0c1a61c8ddcab983d4c2da8fbdff4bf7dd8e196650412e4c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/back/preparationOne.html.twig"));

        $__internal_df9fe10fced57d2b937f01eabba4dc8bb0d298558103f58fcde81d3eb78815e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df9fe10fced57d2b937f01eabba4dc8bb0d298558103f58fcde81d3eb78815e5->enter($__internal_df9fe10fced57d2b937f01eabba4dc8bb0d298558103f58fcde81d3eb78815e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/back/preparationOne.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a00cd54c97a0a2d0c1a61c8ddcab983d4c2da8fbdff4bf7dd8e196650412e4c9->leave($__internal_a00cd54c97a0a2d0c1a61c8ddcab983d4c2da8fbdff4bf7dd8e196650412e4c9_prof);

        
        $__internal_df9fe10fced57d2b937f01eabba4dc8bb0d298558103f58fcde81d3eb78815e5->leave($__internal_df9fe10fced57d2b937f01eabba4dc8bb0d298558103f58fcde81d3eb78815e5_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_32106620e6849946d823d60ba04810a268a05a855f68273eb2cdb548ed450059 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32106620e6849946d823d60ba04810a268a05a855f68273eb2cdb548ed450059->enter($__internal_32106620e6849946d823d60ba04810a268a05a855f68273eb2cdb548ed450059_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7e0e09f72a630bcb6a1e49cc72bbe2f8652b2627596c97fcb479529cb1ccc12a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e0e09f72a630bcb6a1e49cc72bbe2f8652b2627596c97fcb479529cb1ccc12a->enter($__internal_7e0e09f72a630bcb6a1e49cc72bbe2f8652b2627596c97fcb479529cb1ccc12a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tInscription Préparation - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_7e0e09f72a630bcb6a1e49cc72bbe2f8652b2627596c97fcb479529cb1ccc12a->leave($__internal_7e0e09f72a630bcb6a1e49cc72bbe2f8652b2627596c97fcb479529cb1ccc12a_prof);

        
        $__internal_32106620e6849946d823d60ba04810a268a05a855f68273eb2cdb548ed450059->leave($__internal_32106620e6849946d823d60ba04810a268a05a855f68273eb2cdb548ed450059_prof);

    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_688412f6bdce71971a1c8dc8d6ae56d51dd111b0ba05376fba7423d2383976ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_688412f6bdce71971a1c8dc8d6ae56d51dd111b0ba05376fba7423d2383976ef->enter($__internal_688412f6bdce71971a1c8dc8d6ae56d51dd111b0ba05376fba7423d2383976ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_e4a0002c5a8ec4567f943ae9154aa38b2ec30171989b1723f40d25c0d7b0a232 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4a0002c5a8ec4567f943ae9154aa38b2ec30171989b1723f40d25c0d7b0a232->enter($__internal_e4a0002c5a8ec4567f943ae9154aa38b2ec30171989b1723f40d25c0d7b0a232_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 8
        echo "\t<ol class=\"breadcrumb\">
\t\t<li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_monProfil");
        echo "\">Home</a></li>
\t\t<li class=\"active\">Inscription</li>
\t</ol>
";
        
        $__internal_e4a0002c5a8ec4567f943ae9154aa38b2ec30171989b1723f40d25c0d7b0a232->leave($__internal_e4a0002c5a8ec4567f943ae9154aa38b2ec30171989b1723f40d25c0d7b0a232_prof);

        
        $__internal_688412f6bdce71971a1c8dc8d6ae56d51dd111b0ba05376fba7423d2383976ef->leave($__internal_688412f6bdce71971a1c8dc8d6ae56d51dd111b0ba05376fba7423d2383976ef_prof);

    }

    // line 14
    public function block_Content($context, array $blocks = array())
    {
        $__internal_9d1461f3dd0d0ffad207922afe963beafddeb603d0efe237507fa6c22d2dea12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d1461f3dd0d0ffad207922afe963beafddeb603d0efe237507fa6c22d2dea12->enter($__internal_9d1461f3dd0d0ffad207922afe963beafddeb603d0efe237507fa6c22d2dea12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_d85b19f37f88fdbc69c478b81dd2749da70f56b3dbc865cc80d33865a7d69308 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d85b19f37f88fdbc69c478b81dd2749da70f56b3dbc865cc80d33865a7d69308->enter($__internal_d85b19f37f88fdbc69c478b81dd2749da70f56b3dbc865cc80d33865a7d69308_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        echo " 
\t<div class=\"row\">
\t\t<div class=\"col-md-12\">
\t\t\t<h2>Etape 1</h2>
\t\t\t<p>Veuillez sélectionner les champs ci-dessous et rechercher afin de passer à l'étape suivante.</p>
\t\t\t";
        // line 19
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
\t\t\t";
        // line 20
        if ( !$this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "valid", array())) {
            // line 21
            echo "\t\t\t\t<div class=\"alert alert-error\">
\t\t\t\t\t";
            // line 22
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            echo "
\t\t\t\t</div>
\t\t\t";
        }
        // line 25
        echo "\t\t\t<div class=\"form-group\">

\t\t\t\t";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "typePreparation", array()), 'label', array("label" => "Type de préparation"));
        echo "
\t\t\t\t";
        // line 28
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "typePreparation", array()), 'errors');
        echo "
\t\t\t\t";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "typePreparation", array()), 'widget');
        echo "

\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t";
        // line 35
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "reinitialiser", array()), 'widget');
        echo "
\t\t\t\t\t\t";
        // line 36
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "rechercher", array()), 'widget');
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>\t\t\t\t
\t\t\t</div>
\t\t\t";
        // line 41
        echo "\t\t\t";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "
\t\t\t
\t\t\t";
        // line 43
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end', array("render_rest" => false));
        echo "
\t\t</div>
\t</div>
";
        
        $__internal_d85b19f37f88fdbc69c478b81dd2749da70f56b3dbc865cc80d33865a7d69308->leave($__internal_d85b19f37f88fdbc69c478b81dd2749da70f56b3dbc865cc80d33865a7d69308_prof);

        
        $__internal_9d1461f3dd0d0ffad207922afe963beafddeb603d0efe237507fa6c22d2dea12->leave($__internal_9d1461f3dd0d0ffad207922afe963beafddeb603d0efe237507fa6c22d2dea12_prof);

    }

    public function getTemplateName()
    {
        return "@ESFEspaceAbonne/back/preparationOne.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 43,  152 => 41,  145 => 36,  141 => 35,  132 => 29,  128 => 28,  124 => 27,  120 => 25,  114 => 22,  111 => 21,  109 => 20,  105 => 19,  90 => 14,  76 => 9,  73 => 8,  64 => 7,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \":backend:sidebar.html.twig\" %}

{% block title %}
\tInscription Préparation - {{ parent() }}
{% endblock %}

{% block breadcrumb %}
\t<ol class=\"breadcrumb\">
\t\t<li><a href=\"{{ path('esf_espace_abonne_monProfil') }}\">Home</a></li>
\t\t<li class=\"active\">Inscription</li>
\t</ol>
{% endblock %}

{% block Content %} 
\t<div class=\"row\">
\t\t<div class=\"col-md-12\">
\t\t\t<h2>Etape 1</h2>
\t\t\t<p>Veuillez sélectionner les champs ci-dessous et rechercher afin de passer à l'étape suivante.</p>
\t\t\t{{ form_start(form) }}
\t\t\t{% if not form.vars.valid %}
\t\t\t\t<div class=\"alert alert-error\">
\t\t\t\t\t{{ form_errors(form) }}
\t\t\t\t</div>
\t\t\t{% endif %}
\t\t\t<div class=\"form-group\">

\t\t\t\t{{ form_label(form.typePreparation, 'Type de préparation') }}
\t\t\t\t{{ form_errors(form.typePreparation) }}
\t\t\t\t{{ form_widget(form.typePreparation) }}

\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t{{ form_widget(form.reinitialiser) }}
\t\t\t\t\t\t{{ form_widget(form.rechercher) }}
\t\t\t\t\t</div>
\t\t\t\t</div>\t\t\t\t
\t\t\t</div>
\t\t\t{# Token CSRF #}
\t\t\t{{ form_widget(form._token) }}
\t\t\t
\t\t\t{{ form_end(form,{'render_rest': false}) }}
\t\t</div>
\t</div>
{% endblock %}
", "@ESFEspaceAbonne/back/preparationOne.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\src\\ESF\\EspaceAbonneBundle\\Resources\\views\\back\\preparationOne.html.twig");
    }
}
