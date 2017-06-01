<?php

/* ESFEspaceAbonneBundle:back:logementThree.html.twig */
class __TwigTemplate_37500f121037a75835dae8693c03dbfe58dd79b70fc7807518d3104841a9275d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":backend:sidebar.html.twig", "ESFEspaceAbonneBundle:back:logementThree.html.twig", 1);
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
        $__internal_000ff296a042fcbc28acca24a248e4acc5c1b32f090d0492bb775d53da897dda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_000ff296a042fcbc28acca24a248e4acc5c1b32f090d0492bb775d53da897dda->enter($__internal_000ff296a042fcbc28acca24a248e4acc5c1b32f090d0492bb775d53da897dda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:back:logementThree.html.twig"));

        $__internal_00b74564a36d1fc235002a0db58f6e00906967e819c8a5d23ebd628892ae2991 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00b74564a36d1fc235002a0db58f6e00906967e819c8a5d23ebd628892ae2991->enter($__internal_00b74564a36d1fc235002a0db58f6e00906967e819c8a5d23ebd628892ae2991_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:back:logementThree.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_000ff296a042fcbc28acca24a248e4acc5c1b32f090d0492bb775d53da897dda->leave($__internal_000ff296a042fcbc28acca24a248e4acc5c1b32f090d0492bb775d53da897dda_prof);

        
        $__internal_00b74564a36d1fc235002a0db58f6e00906967e819c8a5d23ebd628892ae2991->leave($__internal_00b74564a36d1fc235002a0db58f6e00906967e819c8a5d23ebd628892ae2991_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a10599aa92acd56a097637c45d57133d7e1827085427c858cae78ec10d4ded67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a10599aa92acd56a097637c45d57133d7e1827085427c858cae78ec10d4ded67->enter($__internal_a10599aa92acd56a097637c45d57133d7e1827085427c858cae78ec10d4ded67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_cf3ea4bd59629e302780b0f4fd33464996b872cb9b347931cb4b11f7f28a0d2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf3ea4bd59629e302780b0f4fd33464996b872cb9b347931cb4b11f7f28a0d2d->enter($__internal_cf3ea4bd59629e302780b0f4fd33464996b872cb9b347931cb4b11f7f28a0d2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tInscription logement - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_cf3ea4bd59629e302780b0f4fd33464996b872cb9b347931cb4b11f7f28a0d2d->leave($__internal_cf3ea4bd59629e302780b0f4fd33464996b872cb9b347931cb4b11f7f28a0d2d_prof);

        
        $__internal_a10599aa92acd56a097637c45d57133d7e1827085427c858cae78ec10d4ded67->leave($__internal_a10599aa92acd56a097637c45d57133d7e1827085427c858cae78ec10d4ded67_prof);

    }

    // line 7
    public function block_Content($context, array $blocks = array())
    {
        $__internal_29ef4c68e55c92cc690bac5b06cb8043a29992690c155898448d45a91194ebaa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29ef4c68e55c92cc690bac5b06cb8043a29992690c155898448d45a91194ebaa->enter($__internal_29ef4c68e55c92cc690bac5b06cb8043a29992690c155898448d45a91194ebaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_997a0089d0ef5277355f24330c5a50dd888d67ab5a0f6130f576ad7e47fe92a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_997a0089d0ef5277355f24330c5a50dd888d67ab5a0f6130f576ad7e47fe92a7->enter($__internal_997a0089d0ef5277355f24330c5a50dd888d67ab5a0f6130f576ad7e47fe92a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

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
        
        $__internal_997a0089d0ef5277355f24330c5a50dd888d67ab5a0f6130f576ad7e47fe92a7->leave($__internal_997a0089d0ef5277355f24330c5a50dd888d67ab5a0f6130f576ad7e47fe92a7_prof);

        
        $__internal_29ef4c68e55c92cc690bac5b06cb8043a29992690c155898448d45a91194ebaa->leave($__internal_29ef4c68e55c92cc690bac5b06cb8043a29992690c155898448d45a91194ebaa_prof);

    }

    public function getTemplateName()
    {
        return "ESFEspaceAbonneBundle:back:logementThree.html.twig";
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

{% endblock %}", "ESFEspaceAbonneBundle:back:logementThree.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\src\\ESF\\EspaceAbonneBundle/Resources/views/back/logementThree.html.twig");
    }
}
