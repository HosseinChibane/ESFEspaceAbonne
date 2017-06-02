<?php

/* @ESFEspaceAbonne/back/logementOne.html.twig */
class __TwigTemplate_8fcc21cd29ecc0b5c594e727c528724ee74ad84e95d4d6d5838901f17c106a33 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":backend:sidebar.html.twig", "@ESFEspaceAbonne/back/logementOne.html.twig", 1);
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
        $__internal_6a08a2b77047716cd29a234c7ad04da5a4089835e653be42ce9857c317b1bc55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a08a2b77047716cd29a234c7ad04da5a4089835e653be42ce9857c317b1bc55->enter($__internal_6a08a2b77047716cd29a234c7ad04da5a4089835e653be42ce9857c317b1bc55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/back/logementOne.html.twig"));

        $__internal_a1cd37b9410eafe08002772209a02219ce36305858ad73ffdee5e7466275bed6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1cd37b9410eafe08002772209a02219ce36305858ad73ffdee5e7466275bed6->enter($__internal_a1cd37b9410eafe08002772209a02219ce36305858ad73ffdee5e7466275bed6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/back/logementOne.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6a08a2b77047716cd29a234c7ad04da5a4089835e653be42ce9857c317b1bc55->leave($__internal_6a08a2b77047716cd29a234c7ad04da5a4089835e653be42ce9857c317b1bc55_prof);

        
        $__internal_a1cd37b9410eafe08002772209a02219ce36305858ad73ffdee5e7466275bed6->leave($__internal_a1cd37b9410eafe08002772209a02219ce36305858ad73ffdee5e7466275bed6_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f7d640082281d8d1bb59b8aeaf3a3b0eb0e99f5a770dbecafe5b2259ab5e4669 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7d640082281d8d1bb59b8aeaf3a3b0eb0e99f5a770dbecafe5b2259ab5e4669->enter($__internal_f7d640082281d8d1bb59b8aeaf3a3b0eb0e99f5a770dbecafe5b2259ab5e4669_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_afd973680b0986fb170f37c5ffec088b053802f4aec8f8e677de9fa187fb1241 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afd973680b0986fb170f37c5ffec088b053802f4aec8f8e677de9fa187fb1241->enter($__internal_afd973680b0986fb170f37c5ffec088b053802f4aec8f8e677de9fa187fb1241_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tInscription logement - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_afd973680b0986fb170f37c5ffec088b053802f4aec8f8e677de9fa187fb1241->leave($__internal_afd973680b0986fb170f37c5ffec088b053802f4aec8f8e677de9fa187fb1241_prof);

        
        $__internal_f7d640082281d8d1bb59b8aeaf3a3b0eb0e99f5a770dbecafe5b2259ab5e4669->leave($__internal_f7d640082281d8d1bb59b8aeaf3a3b0eb0e99f5a770dbecafe5b2259ab5e4669_prof);

    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_1e8efee2a3e4c4f7aad10e6242d32bf5e8f86e132743b8fc14305826339743ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e8efee2a3e4c4f7aad10e6242d32bf5e8f86e132743b8fc14305826339743ba->enter($__internal_1e8efee2a3e4c4f7aad10e6242d32bf5e8f86e132743b8fc14305826339743ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_124e53b6c8a81cd3f8b92dc327588927c9f888eb44ddee6a800b9b63d360ba3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_124e53b6c8a81cd3f8b92dc327588927c9f888eb44ddee6a800b9b63d360ba3f->enter($__internal_124e53b6c8a81cd3f8b92dc327588927c9f888eb44ddee6a800b9b63d360ba3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 8
        echo "\t<ol class=\"breadcrumb\">
\t\t<li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_monProfil");
        echo "\">Home</a></li>
\t\t<li class=\"active\">Inscription</li>
\t</ol>
";
        
        $__internal_124e53b6c8a81cd3f8b92dc327588927c9f888eb44ddee6a800b9b63d360ba3f->leave($__internal_124e53b6c8a81cd3f8b92dc327588927c9f888eb44ddee6a800b9b63d360ba3f_prof);

        
        $__internal_1e8efee2a3e4c4f7aad10e6242d32bf5e8f86e132743b8fc14305826339743ba->leave($__internal_1e8efee2a3e4c4f7aad10e6242d32bf5e8f86e132743b8fc14305826339743ba_prof);

    }

    // line 14
    public function block_Content($context, array $blocks = array())
    {
        $__internal_bc0879151f777379b25e7c7fbc27ce11748d35fe4eb8b5bb02e51a9031a5d64d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc0879151f777379b25e7c7fbc27ce11748d35fe4eb8b5bb02e51a9031a5d64d->enter($__internal_bc0879151f777379b25e7c7fbc27ce11748d35fe4eb8b5bb02e51a9031a5d64d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_8c6a5a8e40097b57a09b4212fee17d982102f1ccfe7fae999bd2406d9dc6aea0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c6a5a8e40097b57a09b4212fee17d982102f1ccfe7fae999bd2406d9dc6aea0->enter($__internal_8c6a5a8e40097b57a09b4212fee17d982102f1ccfe7fae999bd2406d9dc6aea0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

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
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "type", array()), 'label', array("label" => "Type de logement"));
        echo "
\t\t\t\t";
        // line 28
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "type", array()), 'errors');
        echo "
\t\t\t\t";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "type", array()), 'widget');
        echo "

\t\t\t\t";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nometablissement", array()), 'label', array("label" => "Université"));
        echo "
\t\t\t\t";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nometablissement", array()), 'errors');
        echo "
\t\t\t\t";
        // line 33
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nometablissement", array()), 'widget');
        echo "

\t\t\t\t";
        // line 35
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "raisonsocial", array()), 'label', array("label" => "Partenaire"));
        echo "
\t\t\t\t";
        // line 36
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "raisonsocial", array()), 'errors');
        echo "
\t\t\t\t";
        // line 37
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "raisonsocial", array()), 'widget');
        echo "

\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t";
        // line 43
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "reinitialiser", array()), 'widget');
        echo "
\t\t\t\t\t\t";
        // line 44
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "rechercher", array()), 'widget');
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        // line 49
        echo "\t\t\t";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "

\t\t\t";
        // line 51
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end', array("render_rest" => false));
        echo "
\t\t</div>
\t</div>
";
        
        $__internal_8c6a5a8e40097b57a09b4212fee17d982102f1ccfe7fae999bd2406d9dc6aea0->leave($__internal_8c6a5a8e40097b57a09b4212fee17d982102f1ccfe7fae999bd2406d9dc6aea0_prof);

        
        $__internal_bc0879151f777379b25e7c7fbc27ce11748d35fe4eb8b5bb02e51a9031a5d64d->leave($__internal_bc0879151f777379b25e7c7fbc27ce11748d35fe4eb8b5bb02e51a9031a5d64d_prof);

    }

    public function getTemplateName()
    {
        return "@ESFEspaceAbonne/back/logementOne.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 51,  178 => 49,  171 => 44,  167 => 43,  158 => 37,  154 => 36,  150 => 35,  145 => 33,  141 => 32,  137 => 31,  132 => 29,  128 => 28,  124 => 27,  120 => 25,  114 => 22,  111 => 21,  109 => 20,  105 => 19,  90 => 14,  76 => 9,  73 => 8,  64 => 7,  51 => 4,  42 => 3,  11 => 1,);
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

\t\t\t\t{{ form_label(form.type, 'Type de logement') }}
\t\t\t\t{{ form_errors(form.type) }}
\t\t\t\t{{ form_widget(form.type) }}

\t\t\t\t{{ form_label(form.nometablissement, 'Université') }}
\t\t\t\t{{ form_errors(form.nometablissement) }}
\t\t\t\t{{ form_widget(form.nometablissement) }}

\t\t\t\t{{ form_label(form.raisonsocial, 'Partenaire') }}
\t\t\t\t{{ form_errors(form.raisonsocial) }}
\t\t\t\t{{ form_widget(form.raisonsocial) }}

\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t{{ form_widget(form.reinitialiser) }}
\t\t\t\t\t\t{{ form_widget(form.rechercher) }}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t{# Token CSRF #}
\t\t\t{{ form_widget(form._token) }}

\t\t\t{{ form_end(form, {'render_rest': false}) }}
\t\t</div>
\t</div>
{% endblock %}", "@ESFEspaceAbonne/back/logementOne.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\src\\ESF\\EspaceAbonneBundle\\Resources\\views\\back\\logementOne.html.twig");
    }
}
