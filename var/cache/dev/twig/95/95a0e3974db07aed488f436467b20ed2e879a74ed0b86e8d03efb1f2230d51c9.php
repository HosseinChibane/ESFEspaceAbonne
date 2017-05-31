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
        $__internal_d2c7a8f61353518280eaf767206b444b3ca14fc277e06635686e24c297b4c80a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2c7a8f61353518280eaf767206b444b3ca14fc277e06635686e24c297b4c80a->enter($__internal_d2c7a8f61353518280eaf767206b444b3ca14fc277e06635686e24c297b4c80a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/back/logementOne.html.twig"));

        $__internal_05e60565a2ad7fa5dc7ed9954c3c2543accbe8b060ffe1760d7889774050cf01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05e60565a2ad7fa5dc7ed9954c3c2543accbe8b060ffe1760d7889774050cf01->enter($__internal_05e60565a2ad7fa5dc7ed9954c3c2543accbe8b060ffe1760d7889774050cf01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/back/logementOne.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d2c7a8f61353518280eaf767206b444b3ca14fc277e06635686e24c297b4c80a->leave($__internal_d2c7a8f61353518280eaf767206b444b3ca14fc277e06635686e24c297b4c80a_prof);

        
        $__internal_05e60565a2ad7fa5dc7ed9954c3c2543accbe8b060ffe1760d7889774050cf01->leave($__internal_05e60565a2ad7fa5dc7ed9954c3c2543accbe8b060ffe1760d7889774050cf01_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ce41fa6ad9b8d782f8bdea5fe7b9b6fe782807b253fc0ab52e00d8e4aebf182a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce41fa6ad9b8d782f8bdea5fe7b9b6fe782807b253fc0ab52e00d8e4aebf182a->enter($__internal_ce41fa6ad9b8d782f8bdea5fe7b9b6fe782807b253fc0ab52e00d8e4aebf182a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2364ee777a99b345a61aae93084075d931a122314077c9a48ee83027a424bc7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2364ee777a99b345a61aae93084075d931a122314077c9a48ee83027a424bc7d->enter($__internal_2364ee777a99b345a61aae93084075d931a122314077c9a48ee83027a424bc7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tInscription logement - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_2364ee777a99b345a61aae93084075d931a122314077c9a48ee83027a424bc7d->leave($__internal_2364ee777a99b345a61aae93084075d931a122314077c9a48ee83027a424bc7d_prof);

        
        $__internal_ce41fa6ad9b8d782f8bdea5fe7b9b6fe782807b253fc0ab52e00d8e4aebf182a->leave($__internal_ce41fa6ad9b8d782f8bdea5fe7b9b6fe782807b253fc0ab52e00d8e4aebf182a_prof);

    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_f224a6e5e95d5a05c26afcc5f4d347d3a79e859e3f65312333e8a536ec289f1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f224a6e5e95d5a05c26afcc5f4d347d3a79e859e3f65312333e8a536ec289f1f->enter($__internal_f224a6e5e95d5a05c26afcc5f4d347d3a79e859e3f65312333e8a536ec289f1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_af4a1f8ea9b5596a31fbae7160545f37949ceb1bbc7ebf7e6e365347279ea9ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af4a1f8ea9b5596a31fbae7160545f37949ceb1bbc7ebf7e6e365347279ea9ee->enter($__internal_af4a1f8ea9b5596a31fbae7160545f37949ceb1bbc7ebf7e6e365347279ea9ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 8
        echo "    <ol class=\"breadcrumb\">
        <li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_monProfil");
        echo "\">Home</a></li>
        <li class=\"active\">Inscription</li>
    </ol>
";
        
        $__internal_af4a1f8ea9b5596a31fbae7160545f37949ceb1bbc7ebf7e6e365347279ea9ee->leave($__internal_af4a1f8ea9b5596a31fbae7160545f37949ceb1bbc7ebf7e6e365347279ea9ee_prof);

        
        $__internal_f224a6e5e95d5a05c26afcc5f4d347d3a79e859e3f65312333e8a536ec289f1f->leave($__internal_f224a6e5e95d5a05c26afcc5f4d347d3a79e859e3f65312333e8a536ec289f1f_prof);

    }

    // line 14
    public function block_Content($context, array $blocks = array())
    {
        $__internal_21fcf05ce15c4efed8f3729cd1d58132fc05a243976500e012b15a70e84b696c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21fcf05ce15c4efed8f3729cd1d58132fc05a243976500e012b15a70e84b696c->enter($__internal_21fcf05ce15c4efed8f3729cd1d58132fc05a243976500e012b15a70e84b696c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_c3a23310e04ba744c6bbb106e953ae7edba5ea56cc0378887fd56eeafa69fdef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3a23310e04ba744c6bbb106e953ae7edba5ea56cc0378887fd56eeafa69fdef->enter($__internal_c3a23310e04ba744c6bbb106e953ae7edba5ea56cc0378887fd56eeafa69fdef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

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
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "typeLogement", array()), 'label', array("label" => "Type de logement"));
        echo "
\t\t\t\t";
        // line 28
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "typeLogement", array()), 'errors');
        echo "
\t\t\t\t";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "typeLogement", array()), 'widget');
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

\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t";
        // line 39
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "reinitialiser", array()), 'widget');
        echo "
\t\t\t\t\t\t";
        // line 40
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "rechercher", array()), 'widget');
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        // line 45
        echo "\t\t\t";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "

\t\t\t";
        // line 47
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end', array("render_rest" => false));
        echo "
\t\t</div>
\t</div>
";
        
        $__internal_c3a23310e04ba744c6bbb106e953ae7edba5ea56cc0378887fd56eeafa69fdef->leave($__internal_c3a23310e04ba744c6bbb106e953ae7edba5ea56cc0378887fd56eeafa69fdef_prof);

        
        $__internal_21fcf05ce15c4efed8f3729cd1d58132fc05a243976500e012b15a70e84b696c->leave($__internal_21fcf05ce15c4efed8f3729cd1d58132fc05a243976500e012b15a70e84b696c_prof);

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
        return array (  171 => 47,  165 => 45,  158 => 40,  154 => 39,  145 => 33,  141 => 32,  137 => 31,  132 => 29,  128 => 28,  124 => 27,  120 => 25,  114 => 22,  111 => 21,  109 => 20,  105 => 19,  90 => 14,  76 => 9,  73 => 8,  64 => 7,  51 => 4,  42 => 3,  11 => 1,);
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
    <ol class=\"breadcrumb\">
        <li><a href=\"{{ path('esf_espace_abonne_monProfil') }}\">Home</a></li>
        <li class=\"active\">Inscription</li>
    </ol>
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

\t\t\t\t{{ form_label(form.typeLogement, 'Type de logement') }}
\t\t\t\t{{ form_errors(form.typeLogement) }}
\t\t\t\t{{ form_widget(form.typeLogement) }}

\t\t\t\t{{ form_label(form.nometablissement, 'Université') }}
\t\t\t\t{{ form_errors(form.nometablissement) }}
\t\t\t\t{{ form_widget(form.nometablissement) }}

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
