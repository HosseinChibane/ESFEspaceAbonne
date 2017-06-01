<?php

/* ESFEspaceAbonneBundle:back:preparationOne.html.twig */
class __TwigTemplate_488099b3eb703d8c564df41a4907d89881b778517bb76b9672ca49529a891cef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":backend:sidebar.html.twig", "ESFEspaceAbonneBundle:back:preparationOne.html.twig", 1);
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
        $__internal_831940b3789597cd555917455e46997514cb0a233729c9c06083dbcbc3161b42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_831940b3789597cd555917455e46997514cb0a233729c9c06083dbcbc3161b42->enter($__internal_831940b3789597cd555917455e46997514cb0a233729c9c06083dbcbc3161b42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:back:preparationOne.html.twig"));

        $__internal_034bc4aad9cb372f918bdd32816d3b5e3c8bbec096458a371fa3625034c3d57f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_034bc4aad9cb372f918bdd32816d3b5e3c8bbec096458a371fa3625034c3d57f->enter($__internal_034bc4aad9cb372f918bdd32816d3b5e3c8bbec096458a371fa3625034c3d57f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:back:preparationOne.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_831940b3789597cd555917455e46997514cb0a233729c9c06083dbcbc3161b42->leave($__internal_831940b3789597cd555917455e46997514cb0a233729c9c06083dbcbc3161b42_prof);

        
        $__internal_034bc4aad9cb372f918bdd32816d3b5e3c8bbec096458a371fa3625034c3d57f->leave($__internal_034bc4aad9cb372f918bdd32816d3b5e3c8bbec096458a371fa3625034c3d57f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1fad118e4dd99af07c69e8094f6f89413056ff9105e50b0029f5bd23a3cd0845 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1fad118e4dd99af07c69e8094f6f89413056ff9105e50b0029f5bd23a3cd0845->enter($__internal_1fad118e4dd99af07c69e8094f6f89413056ff9105e50b0029f5bd23a3cd0845_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a348a7e9a9f7f2145d6a8b1a68d2f9d48b9e1f577c2b043ffd4ee6933f9ce9f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a348a7e9a9f7f2145d6a8b1a68d2f9d48b9e1f577c2b043ffd4ee6933f9ce9f6->enter($__internal_a348a7e9a9f7f2145d6a8b1a68d2f9d48b9e1f577c2b043ffd4ee6933f9ce9f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tInscription Préparation - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_a348a7e9a9f7f2145d6a8b1a68d2f9d48b9e1f577c2b043ffd4ee6933f9ce9f6->leave($__internal_a348a7e9a9f7f2145d6a8b1a68d2f9d48b9e1f577c2b043ffd4ee6933f9ce9f6_prof);

        
        $__internal_1fad118e4dd99af07c69e8094f6f89413056ff9105e50b0029f5bd23a3cd0845->leave($__internal_1fad118e4dd99af07c69e8094f6f89413056ff9105e50b0029f5bd23a3cd0845_prof);

    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_fbe7a7bee23550ab5ef8079454769b1dfbb7b67ba8561b13fdab742bc115c6ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbe7a7bee23550ab5ef8079454769b1dfbb7b67ba8561b13fdab742bc115c6ab->enter($__internal_fbe7a7bee23550ab5ef8079454769b1dfbb7b67ba8561b13fdab742bc115c6ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_3d1c86dac2d2da9fc4f6bad47d0dd6ac444ed93ef050bad4e4e830fe81c7fe7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d1c86dac2d2da9fc4f6bad47d0dd6ac444ed93ef050bad4e4e830fe81c7fe7c->enter($__internal_3d1c86dac2d2da9fc4f6bad47d0dd6ac444ed93ef050bad4e4e830fe81c7fe7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 8
        echo "\t<ol class=\"breadcrumb\">
\t\t<li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_monProfil");
        echo "\">Home</a></li>
\t\t<li class=\"active\">Inscription</li>
\t</ol>
";
        
        $__internal_3d1c86dac2d2da9fc4f6bad47d0dd6ac444ed93ef050bad4e4e830fe81c7fe7c->leave($__internal_3d1c86dac2d2da9fc4f6bad47d0dd6ac444ed93ef050bad4e4e830fe81c7fe7c_prof);

        
        $__internal_fbe7a7bee23550ab5ef8079454769b1dfbb7b67ba8561b13fdab742bc115c6ab->leave($__internal_fbe7a7bee23550ab5ef8079454769b1dfbb7b67ba8561b13fdab742bc115c6ab_prof);

    }

    // line 14
    public function block_Content($context, array $blocks = array())
    {
        $__internal_d7d7e6afe652638d0dca38cb44f22fe107fa490c445e80cbbc2550192ccbb89b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7d7e6afe652638d0dca38cb44f22fe107fa490c445e80cbbc2550192ccbb89b->enter($__internal_d7d7e6afe652638d0dca38cb44f22fe107fa490c445e80cbbc2550192ccbb89b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_bdea83f4a7874f97e148733597f8851a595da729d86fa3c688c019e16b6f41cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdea83f4a7874f97e148733597f8851a595da729d86fa3c688c019e16b6f41cc->enter($__internal_bdea83f4a7874f97e148733597f8851a595da729d86fa3c688c019e16b6f41cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

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
        
        $__internal_bdea83f4a7874f97e148733597f8851a595da729d86fa3c688c019e16b6f41cc->leave($__internal_bdea83f4a7874f97e148733597f8851a595da729d86fa3c688c019e16b6f41cc_prof);

        
        $__internal_d7d7e6afe652638d0dca38cb44f22fe107fa490c445e80cbbc2550192ccbb89b->leave($__internal_d7d7e6afe652638d0dca38cb44f22fe107fa490c445e80cbbc2550192ccbb89b_prof);

    }

    public function getTemplateName()
    {
        return "ESFEspaceAbonneBundle:back:preparationOne.html.twig";
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
", "ESFEspaceAbonneBundle:back:preparationOne.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\src\\ESF\\EspaceAbonneBundle/Resources/views/back/preparationOne.html.twig");
    }
}
