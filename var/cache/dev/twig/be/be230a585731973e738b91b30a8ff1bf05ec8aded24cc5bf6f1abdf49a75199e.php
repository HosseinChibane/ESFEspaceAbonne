<?php

/* @ESFEspaceAbonne/Default/logementThree.html.twig */
class __TwigTemplate_e1ca671c2f078dcc14f5c4ed7f154fef7626278d682b5f440d22718f20800b60 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":backend:sidebar.html.twig", "@ESFEspaceAbonne/Default/logementThree.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'Content' => array($this, 'block_Content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return ":backend:sidebar.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5c1826819a71d06960b10c8ba3a2190fbeee79cbd926ce12cd692fd9f1d77ae6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c1826819a71d06960b10c8ba3a2190fbeee79cbd926ce12cd692fd9f1d77ae6->enter($__internal_5c1826819a71d06960b10c8ba3a2190fbeee79cbd926ce12cd692fd9f1d77ae6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/Default/logementThree.html.twig"));

        $__internal_a2c3b6a09fa07cf736a0a953213b72a3a9a69e45542f767a184b39e5e60319be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2c3b6a09fa07cf736a0a953213b72a3a9a69e45542f767a184b39e5e60319be->enter($__internal_a2c3b6a09fa07cf736a0a953213b72a3a9a69e45542f767a184b39e5e60319be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/Default/logementThree.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5c1826819a71d06960b10c8ba3a2190fbeee79cbd926ce12cd692fd9f1d77ae6->leave($__internal_5c1826819a71d06960b10c8ba3a2190fbeee79cbd926ce12cd692fd9f1d77ae6_prof);

        
        $__internal_a2c3b6a09fa07cf736a0a953213b72a3a9a69e45542f767a184b39e5e60319be->leave($__internal_a2c3b6a09fa07cf736a0a953213b72a3a9a69e45542f767a184b39e5e60319be_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b99997bb1085d97668cdfbd4739e10f2555ed728b3ef3e509797201d91cf7353 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b99997bb1085d97668cdfbd4739e10f2555ed728b3ef3e509797201d91cf7353->enter($__internal_b99997bb1085d97668cdfbd4739e10f2555ed728b3ef3e509797201d91cf7353_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_250fe6cfb8e313e434a0c4b93501092a372f5dbdbd1b9b852efd5049c47fe57d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_250fe6cfb8e313e434a0c4b93501092a372f5dbdbd1b9b852efd5049c47fe57d->enter($__internal_250fe6cfb8e313e434a0c4b93501092a372f5dbdbd1b9b852efd5049c47fe57d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tInscription logement - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_250fe6cfb8e313e434a0c4b93501092a372f5dbdbd1b9b852efd5049c47fe57d->leave($__internal_250fe6cfb8e313e434a0c4b93501092a372f5dbdbd1b9b852efd5049c47fe57d_prof);

        
        $__internal_b99997bb1085d97668cdfbd4739e10f2555ed728b3ef3e509797201d91cf7353->leave($__internal_b99997bb1085d97668cdfbd4739e10f2555ed728b3ef3e509797201d91cf7353_prof);

    }

    // line 7
    public function block_Content($context, array $blocks = array())
    {
        $__internal_55cd7f60236257c8d9599775f85c028a5ee5cd12c9323022a47589225459ee1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55cd7f60236257c8d9599775f85c028a5ee5cd12c9323022a47589225459ee1b->enter($__internal_55cd7f60236257c8d9599775f85c028a5ee5cd12c9323022a47589225459ee1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_bc096b88f64d6ccdad0efeda526faa620d99756478806fe17cea44117d66864c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc096b88f64d6ccdad0efeda526faa620d99756478806fe17cea44117d66864c->enter($__internal_bc096b88f64d6ccdad0efeda526faa620d99756478806fe17cea44117d66864c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        echo " 
\t<div class=\"row\">
\t\t<div class=\"col-md-12\">
\t\t\t<h2>Etape 3</h2>
\t\t\t<p>Veuillez joindre le(s) PDF precedent afin de valider votre demande pour que nous puissions la prendre en compte.</p>         

\t\t\t";
        // line 13
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "

\t\t\t";
        // line 15
        if ( !$this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "valid", array())) {
            // line 16
            echo "\t\t\t\t<div class=\"alert alert-error\">
\t\t\t\t\t";
            // line 17
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            echo "
\t\t\t\t</div>
\t\t\t";
        }
        // line 20
        echo "
\t\t\t<div class=\"form-group\">
\t\t\t\t";
        // line 22
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "documentinscription", array()), "nom", array()), 'label', array("label" => "Document d'Inscription"));
        echo "
\t\t\t\t";
        // line 23
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "documentinscription", array()), "nom", array()), 'widget');
        echo "
\t\t\t</div>

\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "documentinscription", array()), "pdfFile", array()), 'widget');
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<a class=\"btn btn-danger\" href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_logementStepsOne");
        echo "\">Retour à l'étape 1</a>
\t\t\t\t\t\t";
        // line 38
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "documentinscription", array()), "Enregistrer", array()), 'widget');
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t";
        // line 44
        echo "\t\t\t";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "

\t\t\t";
        // line 46
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end', array("render_rest" => false));
        echo "
\t\t</div>
\t</div>

";
        
        $__internal_bc096b88f64d6ccdad0efeda526faa620d99756478806fe17cea44117d66864c->leave($__internal_bc096b88f64d6ccdad0efeda526faa620d99756478806fe17cea44117d66864c_prof);

        
        $__internal_55cd7f60236257c8d9599775f85c028a5ee5cd12c9323022a47589225459ee1b->leave($__internal_55cd7f60236257c8d9599775f85c028a5ee5cd12c9323022a47589225459ee1b_prof);

    }

    public function getTemplateName()
    {
        return "@ESFEspaceAbonne/Default/logementThree.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 46,  135 => 44,  127 => 38,  123 => 37,  112 => 29,  103 => 23,  99 => 22,  95 => 20,  89 => 17,  86 => 16,  84 => 15,  79 => 13,  63 => 7,  50 => 4,  41 => 3,  11 => 1,);
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
\tInscription logement - {{ parent() }}
{% endblock %}

{% block Content %} 
\t<div class=\"row\">
\t\t<div class=\"col-md-12\">
\t\t\t<h2>Etape 3</h2>
\t\t\t<p>Veuillez joindre le(s) PDF precedent afin de valider votre demande pour que nous puissions la prendre en compte.</p>         

\t\t\t{{ form_start(form) }}

\t\t\t{% if not form.vars.valid %}
\t\t\t\t<div class=\"alert alert-error\">
\t\t\t\t\t{{ form_errors(form) }}
\t\t\t\t</div>
\t\t\t{% endif %}

\t\t\t<div class=\"form-group\">
\t\t\t\t{{ form_label(form.documentinscription.nom, 'Document d\\'Inscription') }}
\t\t\t\t{{ form_widget(form.documentinscription.nom) }}
\t\t\t</div>

\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t{{ form_widget(form.documentinscription.pdfFile) }}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<a class=\"btn btn-danger\" href=\"{{ path('esf_espace_abonne_logementStepsOne') }}\">Retour à l'étape 1</a>
\t\t\t\t\t\t{{ form_widget(form.documentinscription.Enregistrer) }}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t{# Token CSRF #}
\t\t\t{{ form_widget(form._token) }}

\t\t\t{{ form_end(form, {'render_rest': false }) }}
\t\t</div>
\t</div>

{% endblock %}", "@ESFEspaceAbonne/Default/logementThree.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\src\\ESF\\EspaceAbonneBundle\\Resources\\views\\Default\\logementThree.html.twig");
    }
}
