<?php

/* @ESFEspaceAbonne/back/logementThree.html.twig */
class __TwigTemplate_f05b0ac725769d3c2c4921fe4a4580025a1161d95976495349c4043420b1baf7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":backend:sidebar.html.twig", "@ESFEspaceAbonne/back/logementThree.html.twig", 1);
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
        $__internal_6bdde969f6078d1502a0db48f156eb200ac6073946c006f49cedf39c8c480a36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6bdde969f6078d1502a0db48f156eb200ac6073946c006f49cedf39c8c480a36->enter($__internal_6bdde969f6078d1502a0db48f156eb200ac6073946c006f49cedf39c8c480a36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/back/logementThree.html.twig"));

        $__internal_7268756106768ca00f5538b42d4c254803e6b4b6649de39e280111f24c78ede7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7268756106768ca00f5538b42d4c254803e6b4b6649de39e280111f24c78ede7->enter($__internal_7268756106768ca00f5538b42d4c254803e6b4b6649de39e280111f24c78ede7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/back/logementThree.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6bdde969f6078d1502a0db48f156eb200ac6073946c006f49cedf39c8c480a36->leave($__internal_6bdde969f6078d1502a0db48f156eb200ac6073946c006f49cedf39c8c480a36_prof);

        
        $__internal_7268756106768ca00f5538b42d4c254803e6b4b6649de39e280111f24c78ede7->leave($__internal_7268756106768ca00f5538b42d4c254803e6b4b6649de39e280111f24c78ede7_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4bfbe58df3070e0428ab546a2856cd6171b9273ace0d9b3b81c5c7f0e9dadca3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4bfbe58df3070e0428ab546a2856cd6171b9273ace0d9b3b81c5c7f0e9dadca3->enter($__internal_4bfbe58df3070e0428ab546a2856cd6171b9273ace0d9b3b81c5c7f0e9dadca3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d10d693b9f219cd615a5ff01655893df53f3416e5b36b16bd171e768b6791d12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d10d693b9f219cd615a5ff01655893df53f3416e5b36b16bd171e768b6791d12->enter($__internal_d10d693b9f219cd615a5ff01655893df53f3416e5b36b16bd171e768b6791d12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tInscription logement - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_d10d693b9f219cd615a5ff01655893df53f3416e5b36b16bd171e768b6791d12->leave($__internal_d10d693b9f219cd615a5ff01655893df53f3416e5b36b16bd171e768b6791d12_prof);

        
        $__internal_4bfbe58df3070e0428ab546a2856cd6171b9273ace0d9b3b81c5c7f0e9dadca3->leave($__internal_4bfbe58df3070e0428ab546a2856cd6171b9273ace0d9b3b81c5c7f0e9dadca3_prof);

    }

    // line 7
    public function block_Content($context, array $blocks = array())
    {
        $__internal_c98663acbd86c47614c4558942d160ee7dc8488cc5407f6c2b011b7ae83a4992 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c98663acbd86c47614c4558942d160ee7dc8488cc5407f6c2b011b7ae83a4992->enter($__internal_c98663acbd86c47614c4558942d160ee7dc8488cc5407f6c2b011b7ae83a4992_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_b5968441fb8c212ec349147a4fce9a2dc788c7db8382a9137754249f240de1a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5968441fb8c212ec349147a4fce9a2dc788c7db8382a9137754249f240de1a1->enter($__internal_b5968441fb8c212ec349147a4fce9a2dc788c7db8382a9137754249f240de1a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

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
        
        $__internal_b5968441fb8c212ec349147a4fce9a2dc788c7db8382a9137754249f240de1a1->leave($__internal_b5968441fb8c212ec349147a4fce9a2dc788c7db8382a9137754249f240de1a1_prof);

        
        $__internal_c98663acbd86c47614c4558942d160ee7dc8488cc5407f6c2b011b7ae83a4992->leave($__internal_c98663acbd86c47614c4558942d160ee7dc8488cc5407f6c2b011b7ae83a4992_prof);

    }

    public function getTemplateName()
    {
        return "@ESFEspaceAbonne/back/logementThree.html.twig";
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

{% endblock %}", "@ESFEspaceAbonne/back/logementThree.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\src\\ESF\\EspaceAbonneBundle\\Resources\\views\\back\\logementThree.html.twig");
    }
}
