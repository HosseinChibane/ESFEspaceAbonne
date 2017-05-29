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
        $__internal_a6706f2ff67675643516b07733c1b2d0965fd1970e660a6e409edf514cd3444b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6706f2ff67675643516b07733c1b2d0965fd1970e660a6e409edf514cd3444b->enter($__internal_a6706f2ff67675643516b07733c1b2d0965fd1970e660a6e409edf514cd3444b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/back/preparationOne.html.twig"));

        $__internal_f139e92ae8f5e908c61ec7ba889e01a5a0d830fd34bb43e3a2d53d7f2e5cc5d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f139e92ae8f5e908c61ec7ba889e01a5a0d830fd34bb43e3a2d53d7f2e5cc5d7->enter($__internal_f139e92ae8f5e908c61ec7ba889e01a5a0d830fd34bb43e3a2d53d7f2e5cc5d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/back/preparationOne.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a6706f2ff67675643516b07733c1b2d0965fd1970e660a6e409edf514cd3444b->leave($__internal_a6706f2ff67675643516b07733c1b2d0965fd1970e660a6e409edf514cd3444b_prof);

        
        $__internal_f139e92ae8f5e908c61ec7ba889e01a5a0d830fd34bb43e3a2d53d7f2e5cc5d7->leave($__internal_f139e92ae8f5e908c61ec7ba889e01a5a0d830fd34bb43e3a2d53d7f2e5cc5d7_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2cb20abb7c0e2f319109ed97fef577973deb1a8b0589653f0df6a7c50e84c52e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2cb20abb7c0e2f319109ed97fef577973deb1a8b0589653f0df6a7c50e84c52e->enter($__internal_2cb20abb7c0e2f319109ed97fef577973deb1a8b0589653f0df6a7c50e84c52e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e4c290e7265f14628fb0f07beb044b63bed54044e99418969260672788772bd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4c290e7265f14628fb0f07beb044b63bed54044e99418969260672788772bd5->enter($__internal_e4c290e7265f14628fb0f07beb044b63bed54044e99418969260672788772bd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tInscription Préparation - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_e4c290e7265f14628fb0f07beb044b63bed54044e99418969260672788772bd5->leave($__internal_e4c290e7265f14628fb0f07beb044b63bed54044e99418969260672788772bd5_prof);

        
        $__internal_2cb20abb7c0e2f319109ed97fef577973deb1a8b0589653f0df6a7c50e84c52e->leave($__internal_2cb20abb7c0e2f319109ed97fef577973deb1a8b0589653f0df6a7c50e84c52e_prof);

    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_835ef6b639b1ce65a0b79b171411c1cee4379a866a6bff845829222566774e32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_835ef6b639b1ce65a0b79b171411c1cee4379a866a6bff845829222566774e32->enter($__internal_835ef6b639b1ce65a0b79b171411c1cee4379a866a6bff845829222566774e32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_1b1ec5a9871b42924bb921722f714f73d7054741d425091e5e56b40d89aac53c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b1ec5a9871b42924bb921722f714f73d7054741d425091e5e56b40d89aac53c->enter($__internal_1b1ec5a9871b42924bb921722f714f73d7054741d425091e5e56b40d89aac53c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 8
        echo "\t<ol class=\"breadcrumb\">
\t\t<li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_monProfil");
        echo "\">Home</a></li>
\t\t<li class=\"active\">Inscription</li>
\t</ol>
";
        
        $__internal_1b1ec5a9871b42924bb921722f714f73d7054741d425091e5e56b40d89aac53c->leave($__internal_1b1ec5a9871b42924bb921722f714f73d7054741d425091e5e56b40d89aac53c_prof);

        
        $__internal_835ef6b639b1ce65a0b79b171411c1cee4379a866a6bff845829222566774e32->leave($__internal_835ef6b639b1ce65a0b79b171411c1cee4379a866a6bff845829222566774e32_prof);

    }

    // line 14
    public function block_Content($context, array $blocks = array())
    {
        $__internal_f52a62e013ce6d280040ed37058b85ed9b99a0c8c414858fb523f336c2f269e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f52a62e013ce6d280040ed37058b85ed9b99a0c8c414858fb523f336c2f269e6->enter($__internal_f52a62e013ce6d280040ed37058b85ed9b99a0c8c414858fb523f336c2f269e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_265df3f909e0ca4a58ae5578e1d32c8267db67ba562f705fd925123a164e44e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_265df3f909e0ca4a58ae5578e1d32c8267db67ba562f705fd925123a164e44e2->enter($__internal_265df3f909e0ca4a58ae5578e1d32c8267db67ba562f705fd925123a164e44e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

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
        
        $__internal_265df3f909e0ca4a58ae5578e1d32c8267db67ba562f705fd925123a164e44e2->leave($__internal_265df3f909e0ca4a58ae5578e1d32c8267db67ba562f705fd925123a164e44e2_prof);

        
        $__internal_f52a62e013ce6d280040ed37058b85ed9b99a0c8c414858fb523f336c2f269e6->leave($__internal_f52a62e013ce6d280040ed37058b85ed9b99a0c8c414858fb523f336c2f269e6_prof);

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
