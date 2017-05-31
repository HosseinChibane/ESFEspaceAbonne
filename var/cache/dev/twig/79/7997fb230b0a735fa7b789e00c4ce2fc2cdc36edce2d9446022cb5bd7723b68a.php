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
        $__internal_b4619109e0dac2ace21ee3e2c0fb58e01a5e6b15de0e80c1526d577d8c23b771 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4619109e0dac2ace21ee3e2c0fb58e01a5e6b15de0e80c1526d577d8c23b771->enter($__internal_b4619109e0dac2ace21ee3e2c0fb58e01a5e6b15de0e80c1526d577d8c23b771_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/back/logementThree.html.twig"));

        $__internal_19fabac27a16a63c06e25b22d8bef2e1bb4213f2ab9d22563c36cf2dfaee15b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19fabac27a16a63c06e25b22d8bef2e1bb4213f2ab9d22563c36cf2dfaee15b1->enter($__internal_19fabac27a16a63c06e25b22d8bef2e1bb4213f2ab9d22563c36cf2dfaee15b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/back/logementThree.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b4619109e0dac2ace21ee3e2c0fb58e01a5e6b15de0e80c1526d577d8c23b771->leave($__internal_b4619109e0dac2ace21ee3e2c0fb58e01a5e6b15de0e80c1526d577d8c23b771_prof);

        
        $__internal_19fabac27a16a63c06e25b22d8bef2e1bb4213f2ab9d22563c36cf2dfaee15b1->leave($__internal_19fabac27a16a63c06e25b22d8bef2e1bb4213f2ab9d22563c36cf2dfaee15b1_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_cf5ad04c6dadc1d04722b9136a8a1104c5b5b53997dd4754f0abbdb699a5197f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf5ad04c6dadc1d04722b9136a8a1104c5b5b53997dd4754f0abbdb699a5197f->enter($__internal_cf5ad04c6dadc1d04722b9136a8a1104c5b5b53997dd4754f0abbdb699a5197f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1390c468237253e54b2b2468d629da38713002a0cad0a9059a0557a785aaa04b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1390c468237253e54b2b2468d629da38713002a0cad0a9059a0557a785aaa04b->enter($__internal_1390c468237253e54b2b2468d629da38713002a0cad0a9059a0557a785aaa04b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tInscription logement - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_1390c468237253e54b2b2468d629da38713002a0cad0a9059a0557a785aaa04b->leave($__internal_1390c468237253e54b2b2468d629da38713002a0cad0a9059a0557a785aaa04b_prof);

        
        $__internal_cf5ad04c6dadc1d04722b9136a8a1104c5b5b53997dd4754f0abbdb699a5197f->leave($__internal_cf5ad04c6dadc1d04722b9136a8a1104c5b5b53997dd4754f0abbdb699a5197f_prof);

    }

    // line 7
    public function block_Content($context, array $blocks = array())
    {
        $__internal_833a5e32d3bbe5e194b782b0164597bedfe9a330e12f0f17ad0cd92687828f51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_833a5e32d3bbe5e194b782b0164597bedfe9a330e12f0f17ad0cd92687828f51->enter($__internal_833a5e32d3bbe5e194b782b0164597bedfe9a330e12f0f17ad0cd92687828f51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_6ad2d9e218f5daf8f58bce8dc0c997c27637e05d434f81d9902e673c22cb3e8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ad2d9e218f5daf8f58bce8dc0c997c27637e05d434f81d9902e673c22cb3e8f->enter($__internal_6ad2d9e218f5daf8f58bce8dc0c997c27637e05d434f81d9902e673c22cb3e8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

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
        
        $__internal_6ad2d9e218f5daf8f58bce8dc0c997c27637e05d434f81d9902e673c22cb3e8f->leave($__internal_6ad2d9e218f5daf8f58bce8dc0c997c27637e05d434f81d9902e673c22cb3e8f_prof);

        
        $__internal_833a5e32d3bbe5e194b782b0164597bedfe9a330e12f0f17ad0cd92687828f51->leave($__internal_833a5e32d3bbe5e194b782b0164597bedfe9a330e12f0f17ad0cd92687828f51_prof);

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
