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
        $__internal_6a5ccef63c060db29b11bfade8c6da318fe9e88c540212ccc2ad633ed4963ffa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a5ccef63c060db29b11bfade8c6da318fe9e88c540212ccc2ad633ed4963ffa->enter($__internal_6a5ccef63c060db29b11bfade8c6da318fe9e88c540212ccc2ad633ed4963ffa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:back:logementThree.html.twig"));

        $__internal_aef883c17d6a8be7edf51a4b0d0d5d26bcf882b22b326ed35c956b2a6f998c68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aef883c17d6a8be7edf51a4b0d0d5d26bcf882b22b326ed35c956b2a6f998c68->enter($__internal_aef883c17d6a8be7edf51a4b0d0d5d26bcf882b22b326ed35c956b2a6f998c68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:back:logementThree.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6a5ccef63c060db29b11bfade8c6da318fe9e88c540212ccc2ad633ed4963ffa->leave($__internal_6a5ccef63c060db29b11bfade8c6da318fe9e88c540212ccc2ad633ed4963ffa_prof);

        
        $__internal_aef883c17d6a8be7edf51a4b0d0d5d26bcf882b22b326ed35c956b2a6f998c68->leave($__internal_aef883c17d6a8be7edf51a4b0d0d5d26bcf882b22b326ed35c956b2a6f998c68_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9c24e425b7307546a402a732189a4f462c74fc338b87db8476160fca69b41a9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c24e425b7307546a402a732189a4f462c74fc338b87db8476160fca69b41a9b->enter($__internal_9c24e425b7307546a402a732189a4f462c74fc338b87db8476160fca69b41a9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_bddf3780b1414df058976c9c35cab1b334a5f3d24bd08f5938a77cc19cf46a18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bddf3780b1414df058976c9c35cab1b334a5f3d24bd08f5938a77cc19cf46a18->enter($__internal_bddf3780b1414df058976c9c35cab1b334a5f3d24bd08f5938a77cc19cf46a18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tInscription logement - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_bddf3780b1414df058976c9c35cab1b334a5f3d24bd08f5938a77cc19cf46a18->leave($__internal_bddf3780b1414df058976c9c35cab1b334a5f3d24bd08f5938a77cc19cf46a18_prof);

        
        $__internal_9c24e425b7307546a402a732189a4f462c74fc338b87db8476160fca69b41a9b->leave($__internal_9c24e425b7307546a402a732189a4f462c74fc338b87db8476160fca69b41a9b_prof);

    }

    // line 7
    public function block_Content($context, array $blocks = array())
    {
        $__internal_977a2e56c75447b951dbef576913f44a9a35a1d1366a77e3428c2ac2cfa47d33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_977a2e56c75447b951dbef576913f44a9a35a1d1366a77e3428c2ac2cfa47d33->enter($__internal_977a2e56c75447b951dbef576913f44a9a35a1d1366a77e3428c2ac2cfa47d33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_e27585476a31aeee485e58a5350da56c409f38ead9574bf48ca4f2c5d6684041 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e27585476a31aeee485e58a5350da56c409f38ead9574bf48ca4f2c5d6684041->enter($__internal_e27585476a31aeee485e58a5350da56c409f38ead9574bf48ca4f2c5d6684041_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

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
        
        $__internal_e27585476a31aeee485e58a5350da56c409f38ead9574bf48ca4f2c5d6684041->leave($__internal_e27585476a31aeee485e58a5350da56c409f38ead9574bf48ca4f2c5d6684041_prof);

        
        $__internal_977a2e56c75447b951dbef576913f44a9a35a1d1366a77e3428c2ac2cfa47d33->leave($__internal_977a2e56c75447b951dbef576913f44a9a35a1d1366a77e3428c2ac2cfa47d33_prof);

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
