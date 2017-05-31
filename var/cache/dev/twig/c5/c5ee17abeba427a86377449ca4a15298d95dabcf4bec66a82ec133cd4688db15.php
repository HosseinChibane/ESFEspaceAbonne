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
        $__internal_f882403bd09f419ee668a612dfbbef5f008aa96ab8d8a04ca2cb34aa0eb7a1b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f882403bd09f419ee668a612dfbbef5f008aa96ab8d8a04ca2cb34aa0eb7a1b5->enter($__internal_f882403bd09f419ee668a612dfbbef5f008aa96ab8d8a04ca2cb34aa0eb7a1b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/back/preparationOne.html.twig"));

        $__internal_380cc95787e373595f0e931ea4156e145b5919cea1924f185266b99dbdafce02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_380cc95787e373595f0e931ea4156e145b5919cea1924f185266b99dbdafce02->enter($__internal_380cc95787e373595f0e931ea4156e145b5919cea1924f185266b99dbdafce02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/back/preparationOne.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f882403bd09f419ee668a612dfbbef5f008aa96ab8d8a04ca2cb34aa0eb7a1b5->leave($__internal_f882403bd09f419ee668a612dfbbef5f008aa96ab8d8a04ca2cb34aa0eb7a1b5_prof);

        
        $__internal_380cc95787e373595f0e931ea4156e145b5919cea1924f185266b99dbdafce02->leave($__internal_380cc95787e373595f0e931ea4156e145b5919cea1924f185266b99dbdafce02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_517061a5529dad32c4f018cff47fe8b139f7d774140501d10e756cb30f88a0d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_517061a5529dad32c4f018cff47fe8b139f7d774140501d10e756cb30f88a0d6->enter($__internal_517061a5529dad32c4f018cff47fe8b139f7d774140501d10e756cb30f88a0d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7e71f4ea341d75bef68b4296c8939f7142de11756e797509dbbbaa4d220de31a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e71f4ea341d75bef68b4296c8939f7142de11756e797509dbbbaa4d220de31a->enter($__internal_7e71f4ea341d75bef68b4296c8939f7142de11756e797509dbbbaa4d220de31a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tInscription Préparation - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_7e71f4ea341d75bef68b4296c8939f7142de11756e797509dbbbaa4d220de31a->leave($__internal_7e71f4ea341d75bef68b4296c8939f7142de11756e797509dbbbaa4d220de31a_prof);

        
        $__internal_517061a5529dad32c4f018cff47fe8b139f7d774140501d10e756cb30f88a0d6->leave($__internal_517061a5529dad32c4f018cff47fe8b139f7d774140501d10e756cb30f88a0d6_prof);

    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_818ab581f4313c84dd9fa66cb9b17692a2e56058875c8451f4734ef67e9cab4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_818ab581f4313c84dd9fa66cb9b17692a2e56058875c8451f4734ef67e9cab4b->enter($__internal_818ab581f4313c84dd9fa66cb9b17692a2e56058875c8451f4734ef67e9cab4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_ed7a5c80e91e1d0654e7be95dee2fb27fe0d730aac231cb03c8847184bbdadcb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed7a5c80e91e1d0654e7be95dee2fb27fe0d730aac231cb03c8847184bbdadcb->enter($__internal_ed7a5c80e91e1d0654e7be95dee2fb27fe0d730aac231cb03c8847184bbdadcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 8
        echo "\t<ol class=\"breadcrumb\">
\t\t<li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_monProfil");
        echo "\">Home</a></li>
\t\t<li class=\"active\">Inscription</li>
\t</ol>
";
        
        $__internal_ed7a5c80e91e1d0654e7be95dee2fb27fe0d730aac231cb03c8847184bbdadcb->leave($__internal_ed7a5c80e91e1d0654e7be95dee2fb27fe0d730aac231cb03c8847184bbdadcb_prof);

        
        $__internal_818ab581f4313c84dd9fa66cb9b17692a2e56058875c8451f4734ef67e9cab4b->leave($__internal_818ab581f4313c84dd9fa66cb9b17692a2e56058875c8451f4734ef67e9cab4b_prof);

    }

    // line 14
    public function block_Content($context, array $blocks = array())
    {
        $__internal_ffb37e2ecb25998d830f6b4f46ef6d16482a09250228708478f5b993819c051c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ffb37e2ecb25998d830f6b4f46ef6d16482a09250228708478f5b993819c051c->enter($__internal_ffb37e2ecb25998d830f6b4f46ef6d16482a09250228708478f5b993819c051c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_6a29f9756c7cd63a8ae0f16b43e483020eb6a4af46b3171a14330d73097d6d95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a29f9756c7cd63a8ae0f16b43e483020eb6a4af46b3171a14330d73097d6d95->enter($__internal_6a29f9756c7cd63a8ae0f16b43e483020eb6a4af46b3171a14330d73097d6d95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

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
        
        $__internal_6a29f9756c7cd63a8ae0f16b43e483020eb6a4af46b3171a14330d73097d6d95->leave($__internal_6a29f9756c7cd63a8ae0f16b43e483020eb6a4af46b3171a14330d73097d6d95_prof);

        
        $__internal_ffb37e2ecb25998d830f6b4f46ef6d16482a09250228708478f5b993819c051c->leave($__internal_ffb37e2ecb25998d830f6b4f46ef6d16482a09250228708478f5b993819c051c_prof);

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
