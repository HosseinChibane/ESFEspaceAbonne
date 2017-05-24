<?php

/* @ESFEspaceAbonne/Default/preparationOne.html.twig */
class __TwigTemplate_56f43226f1c6040db3d8c2b6c24f9b680a204cb92475a2acaae7cf3389a4fb28 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":backend:sidebar.html.twig", "@ESFEspaceAbonne/Default/preparationOne.html.twig", 1);
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
        $__internal_fd8bb6253ce6154f4b093d781d0d2aafa0ea82400151ac438b167109bd909559 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd8bb6253ce6154f4b093d781d0d2aafa0ea82400151ac438b167109bd909559->enter($__internal_fd8bb6253ce6154f4b093d781d0d2aafa0ea82400151ac438b167109bd909559_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/Default/preparationOne.html.twig"));

        $__internal_c4a96cfa4dc3bdd23b05af96ea03df17858b3eafc6ecfdf92029ee9330a87503 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4a96cfa4dc3bdd23b05af96ea03df17858b3eafc6ecfdf92029ee9330a87503->enter($__internal_c4a96cfa4dc3bdd23b05af96ea03df17858b3eafc6ecfdf92029ee9330a87503_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/Default/preparationOne.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fd8bb6253ce6154f4b093d781d0d2aafa0ea82400151ac438b167109bd909559->leave($__internal_fd8bb6253ce6154f4b093d781d0d2aafa0ea82400151ac438b167109bd909559_prof);

        
        $__internal_c4a96cfa4dc3bdd23b05af96ea03df17858b3eafc6ecfdf92029ee9330a87503->leave($__internal_c4a96cfa4dc3bdd23b05af96ea03df17858b3eafc6ecfdf92029ee9330a87503_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8c759e765875e8f9fa96f89f3e84d3a53137a688ff70538879dc8f30295ddfee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c759e765875e8f9fa96f89f3e84d3a53137a688ff70538879dc8f30295ddfee->enter($__internal_8c759e765875e8f9fa96f89f3e84d3a53137a688ff70538879dc8f30295ddfee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b3e743c5e04d156fc6faf9250b4fb8f9bda5c853f572529589a18433082e071d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3e743c5e04d156fc6faf9250b4fb8f9bda5c853f572529589a18433082e071d->enter($__internal_b3e743c5e04d156fc6faf9250b4fb8f9bda5c853f572529589a18433082e071d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tInscription Préparation - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_b3e743c5e04d156fc6faf9250b4fb8f9bda5c853f572529589a18433082e071d->leave($__internal_b3e743c5e04d156fc6faf9250b4fb8f9bda5c853f572529589a18433082e071d_prof);

        
        $__internal_8c759e765875e8f9fa96f89f3e84d3a53137a688ff70538879dc8f30295ddfee->leave($__internal_8c759e765875e8f9fa96f89f3e84d3a53137a688ff70538879dc8f30295ddfee_prof);

    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_879b04daf38a8923de20212550a14465025133eacb7ff05285cfce0ad2072602 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_879b04daf38a8923de20212550a14465025133eacb7ff05285cfce0ad2072602->enter($__internal_879b04daf38a8923de20212550a14465025133eacb7ff05285cfce0ad2072602_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_31b123a56ea187760fb41e9b85045d1c5e3ff7ef9baffccb32ce084ae3e76766 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31b123a56ea187760fb41e9b85045d1c5e3ff7ef9baffccb32ce084ae3e76766->enter($__internal_31b123a56ea187760fb41e9b85045d1c5e3ff7ef9baffccb32ce084ae3e76766_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 8
        echo "\t<ol class=\"breadcrumb\">
\t\t<li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_monProfil");
        echo "\">Home</a></li>
\t\t<li class=\"active\">Inscription</li>
\t</ol>
";
        
        $__internal_31b123a56ea187760fb41e9b85045d1c5e3ff7ef9baffccb32ce084ae3e76766->leave($__internal_31b123a56ea187760fb41e9b85045d1c5e3ff7ef9baffccb32ce084ae3e76766_prof);

        
        $__internal_879b04daf38a8923de20212550a14465025133eacb7ff05285cfce0ad2072602->leave($__internal_879b04daf38a8923de20212550a14465025133eacb7ff05285cfce0ad2072602_prof);

    }

    // line 14
    public function block_Content($context, array $blocks = array())
    {
        $__internal_75e5fdc7ea4307fe7b8c999949f0cd2ccb4e6b12f099c317c33fa0ae01d38887 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75e5fdc7ea4307fe7b8c999949f0cd2ccb4e6b12f099c317c33fa0ae01d38887->enter($__internal_75e5fdc7ea4307fe7b8c999949f0cd2ccb4e6b12f099c317c33fa0ae01d38887_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_fe67b9bfef0747298cb3717b90cbef0044b44c8e3d643e4f0dff06b4eb21e159 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe67b9bfef0747298cb3717b90cbef0044b44c8e3d643e4f0dff06b4eb21e159->enter($__internal_fe67b9bfef0747298cb3717b90cbef0044b44c8e3d643e4f0dff06b4eb21e159_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

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
        
        $__internal_fe67b9bfef0747298cb3717b90cbef0044b44c8e3d643e4f0dff06b4eb21e159->leave($__internal_fe67b9bfef0747298cb3717b90cbef0044b44c8e3d643e4f0dff06b4eb21e159_prof);

        
        $__internal_75e5fdc7ea4307fe7b8c999949f0cd2ccb4e6b12f099c317c33fa0ae01d38887->leave($__internal_75e5fdc7ea4307fe7b8c999949f0cd2ccb4e6b12f099c317c33fa0ae01d38887_prof);

    }

    public function getTemplateName()
    {
        return "@ESFEspaceAbonne/Default/preparationOne.html.twig";
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
", "@ESFEspaceAbonne/Default/preparationOne.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\src\\ESF\\EspaceAbonneBundle\\Resources\\views\\Default\\preparationOne.html.twig");
    }
}
