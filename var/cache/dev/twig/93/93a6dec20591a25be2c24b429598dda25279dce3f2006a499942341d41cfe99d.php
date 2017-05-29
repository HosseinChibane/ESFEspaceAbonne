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
        $__internal_bf2af0dc3d5dcbe480b64e7c008f4ecd82e37cfef50e24c366ae7a1fcab0b64e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf2af0dc3d5dcbe480b64e7c008f4ecd82e37cfef50e24c366ae7a1fcab0b64e->enter($__internal_bf2af0dc3d5dcbe480b64e7c008f4ecd82e37cfef50e24c366ae7a1fcab0b64e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:back:preparationOne.html.twig"));

        $__internal_f2752b5fe418238e4aed21e5a8563e6156ae7b57e15f826869bf8e6c50a4626f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2752b5fe418238e4aed21e5a8563e6156ae7b57e15f826869bf8e6c50a4626f->enter($__internal_f2752b5fe418238e4aed21e5a8563e6156ae7b57e15f826869bf8e6c50a4626f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:back:preparationOne.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bf2af0dc3d5dcbe480b64e7c008f4ecd82e37cfef50e24c366ae7a1fcab0b64e->leave($__internal_bf2af0dc3d5dcbe480b64e7c008f4ecd82e37cfef50e24c366ae7a1fcab0b64e_prof);

        
        $__internal_f2752b5fe418238e4aed21e5a8563e6156ae7b57e15f826869bf8e6c50a4626f->leave($__internal_f2752b5fe418238e4aed21e5a8563e6156ae7b57e15f826869bf8e6c50a4626f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_51033c6cfc4b9da2a2717f5a277ffa781c84725ecdad6380ad145c9826296cd3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51033c6cfc4b9da2a2717f5a277ffa781c84725ecdad6380ad145c9826296cd3->enter($__internal_51033c6cfc4b9da2a2717f5a277ffa781c84725ecdad6380ad145c9826296cd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_369981101887528d95573ae047f96fe7d0ae28cae294f75811ec14a5151fd143 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_369981101887528d95573ae047f96fe7d0ae28cae294f75811ec14a5151fd143->enter($__internal_369981101887528d95573ae047f96fe7d0ae28cae294f75811ec14a5151fd143_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tInscription Préparation - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_369981101887528d95573ae047f96fe7d0ae28cae294f75811ec14a5151fd143->leave($__internal_369981101887528d95573ae047f96fe7d0ae28cae294f75811ec14a5151fd143_prof);

        
        $__internal_51033c6cfc4b9da2a2717f5a277ffa781c84725ecdad6380ad145c9826296cd3->leave($__internal_51033c6cfc4b9da2a2717f5a277ffa781c84725ecdad6380ad145c9826296cd3_prof);

    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_dc4cc502a46708362315dd3acd5162d2deb54e51192ad2913a93e685dbf70e1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc4cc502a46708362315dd3acd5162d2deb54e51192ad2913a93e685dbf70e1a->enter($__internal_dc4cc502a46708362315dd3acd5162d2deb54e51192ad2913a93e685dbf70e1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_44ce4ee94fb531a325f25293363f75de933414a44e0fbcc7f292a1d62ce76e03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44ce4ee94fb531a325f25293363f75de933414a44e0fbcc7f292a1d62ce76e03->enter($__internal_44ce4ee94fb531a325f25293363f75de933414a44e0fbcc7f292a1d62ce76e03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 8
        echo "\t<ol class=\"breadcrumb\">
\t\t<li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_monProfil");
        echo "\">Home</a></li>
\t\t<li class=\"active\">Inscription</li>
\t</ol>
";
        
        $__internal_44ce4ee94fb531a325f25293363f75de933414a44e0fbcc7f292a1d62ce76e03->leave($__internal_44ce4ee94fb531a325f25293363f75de933414a44e0fbcc7f292a1d62ce76e03_prof);

        
        $__internal_dc4cc502a46708362315dd3acd5162d2deb54e51192ad2913a93e685dbf70e1a->leave($__internal_dc4cc502a46708362315dd3acd5162d2deb54e51192ad2913a93e685dbf70e1a_prof);

    }

    // line 14
    public function block_Content($context, array $blocks = array())
    {
        $__internal_47d320f0ba679e125f626e2f15d668cc689bf64334e141549186cd82a9aeac29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47d320f0ba679e125f626e2f15d668cc689bf64334e141549186cd82a9aeac29->enter($__internal_47d320f0ba679e125f626e2f15d668cc689bf64334e141549186cd82a9aeac29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_fa6238f930d1e49f25e21471d0ca280c09cd747623451de2e7db883188bc631b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa6238f930d1e49f25e21471d0ca280c09cd747623451de2e7db883188bc631b->enter($__internal_fa6238f930d1e49f25e21471d0ca280c09cd747623451de2e7db883188bc631b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

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
        
        $__internal_fa6238f930d1e49f25e21471d0ca280c09cd747623451de2e7db883188bc631b->leave($__internal_fa6238f930d1e49f25e21471d0ca280c09cd747623451de2e7db883188bc631b_prof);

        
        $__internal_47d320f0ba679e125f626e2f15d668cc689bf64334e141549186cd82a9aeac29->leave($__internal_47d320f0ba679e125f626e2f15d668cc689bf64334e141549186cd82a9aeac29_prof);

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
