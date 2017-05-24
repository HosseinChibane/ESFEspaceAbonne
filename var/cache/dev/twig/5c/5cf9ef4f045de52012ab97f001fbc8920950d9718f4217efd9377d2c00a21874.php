<?php

/* ESFEspaceAbonneBundle:Default:logementThree.html.twig */
class __TwigTemplate_02901c8cb13bc800e48642a066b7d5c8ee630b8b1d6db1751c405fe22c9bea74 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":backend:sidebar.html.twig", "ESFEspaceAbonneBundle:Default:logementThree.html.twig", 1);
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
        $__internal_cebd2c2d3740cdc2a9733adce03a25807db8611158d0189d3dfcb7eaf03f85e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cebd2c2d3740cdc2a9733adce03a25807db8611158d0189d3dfcb7eaf03f85e3->enter($__internal_cebd2c2d3740cdc2a9733adce03a25807db8611158d0189d3dfcb7eaf03f85e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:Default:logementThree.html.twig"));

        $__internal_7f34da9d2e77f2aaae1824773d0a4c2d05a212b82d94ea7fde6a268d49f2c6e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f34da9d2e77f2aaae1824773d0a4c2d05a212b82d94ea7fde6a268d49f2c6e5->enter($__internal_7f34da9d2e77f2aaae1824773d0a4c2d05a212b82d94ea7fde6a268d49f2c6e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:Default:logementThree.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cebd2c2d3740cdc2a9733adce03a25807db8611158d0189d3dfcb7eaf03f85e3->leave($__internal_cebd2c2d3740cdc2a9733adce03a25807db8611158d0189d3dfcb7eaf03f85e3_prof);

        
        $__internal_7f34da9d2e77f2aaae1824773d0a4c2d05a212b82d94ea7fde6a268d49f2c6e5->leave($__internal_7f34da9d2e77f2aaae1824773d0a4c2d05a212b82d94ea7fde6a268d49f2c6e5_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4fb45422fd0e6a75844ebcd102cd5a242c7fad1337bf42a380aa10e8be46791d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4fb45422fd0e6a75844ebcd102cd5a242c7fad1337bf42a380aa10e8be46791d->enter($__internal_4fb45422fd0e6a75844ebcd102cd5a242c7fad1337bf42a380aa10e8be46791d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_11bf56d643aa433c24316df193fe177f02916bb78a9bce493ba4b6dad389e9c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11bf56d643aa433c24316df193fe177f02916bb78a9bce493ba4b6dad389e9c3->enter($__internal_11bf56d643aa433c24316df193fe177f02916bb78a9bce493ba4b6dad389e9c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tInscription logement - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_11bf56d643aa433c24316df193fe177f02916bb78a9bce493ba4b6dad389e9c3->leave($__internal_11bf56d643aa433c24316df193fe177f02916bb78a9bce493ba4b6dad389e9c3_prof);

        
        $__internal_4fb45422fd0e6a75844ebcd102cd5a242c7fad1337bf42a380aa10e8be46791d->leave($__internal_4fb45422fd0e6a75844ebcd102cd5a242c7fad1337bf42a380aa10e8be46791d_prof);

    }

    // line 7
    public function block_Content($context, array $blocks = array())
    {
        $__internal_363bb55df41f24342b8fcbcb0f37e8dd2ec391d8f3544651c3345f8849556107 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_363bb55df41f24342b8fcbcb0f37e8dd2ec391d8f3544651c3345f8849556107->enter($__internal_363bb55df41f24342b8fcbcb0f37e8dd2ec391d8f3544651c3345f8849556107_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_f0a94aad6ce6c5296732dece1e360d597cf5152b0dd2a47651a6305cb3c3ef0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0a94aad6ce6c5296732dece1e360d597cf5152b0dd2a47651a6305cb3c3ef0a->enter($__internal_f0a94aad6ce6c5296732dece1e360d597cf5152b0dd2a47651a6305cb3c3ef0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

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
        
        $__internal_f0a94aad6ce6c5296732dece1e360d597cf5152b0dd2a47651a6305cb3c3ef0a->leave($__internal_f0a94aad6ce6c5296732dece1e360d597cf5152b0dd2a47651a6305cb3c3ef0a_prof);

        
        $__internal_363bb55df41f24342b8fcbcb0f37e8dd2ec391d8f3544651c3345f8849556107->leave($__internal_363bb55df41f24342b8fcbcb0f37e8dd2ec391d8f3544651c3345f8849556107_prof);

    }

    public function getTemplateName()
    {
        return "ESFEspaceAbonneBundle:Default:logementThree.html.twig";
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

{% endblock %}", "ESFEspaceAbonneBundle:Default:logementThree.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\src\\ESF\\EspaceAbonneBundle/Resources/views/Default/logementThree.html.twig");
    }
}
