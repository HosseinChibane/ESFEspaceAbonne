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
        $__internal_35193dd63a1587a228fee15231f8294a9c0313164b32f3630a3ec04f4e26c258 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35193dd63a1587a228fee15231f8294a9c0313164b32f3630a3ec04f4e26c258->enter($__internal_35193dd63a1587a228fee15231f8294a9c0313164b32f3630a3ec04f4e26c258_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:back:logementThree.html.twig"));

        $__internal_37915032bbcf065a1eb30c0375c06af397144539a3db2ddbfab766fc0d40250c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37915032bbcf065a1eb30c0375c06af397144539a3db2ddbfab766fc0d40250c->enter($__internal_37915032bbcf065a1eb30c0375c06af397144539a3db2ddbfab766fc0d40250c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:back:logementThree.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_35193dd63a1587a228fee15231f8294a9c0313164b32f3630a3ec04f4e26c258->leave($__internal_35193dd63a1587a228fee15231f8294a9c0313164b32f3630a3ec04f4e26c258_prof);

        
        $__internal_37915032bbcf065a1eb30c0375c06af397144539a3db2ddbfab766fc0d40250c->leave($__internal_37915032bbcf065a1eb30c0375c06af397144539a3db2ddbfab766fc0d40250c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5991c592fcf76eb07ab09ce9a1f2ee7730e2beda8988764ebbe730df5a660967 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5991c592fcf76eb07ab09ce9a1f2ee7730e2beda8988764ebbe730df5a660967->enter($__internal_5991c592fcf76eb07ab09ce9a1f2ee7730e2beda8988764ebbe730df5a660967_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c421c0041877ec2a9393478f884d58343ebfee811dfe869bf666f2d8f8bd2576 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c421c0041877ec2a9393478f884d58343ebfee811dfe869bf666f2d8f8bd2576->enter($__internal_c421c0041877ec2a9393478f884d58343ebfee811dfe869bf666f2d8f8bd2576_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tInscription logement - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_c421c0041877ec2a9393478f884d58343ebfee811dfe869bf666f2d8f8bd2576->leave($__internal_c421c0041877ec2a9393478f884d58343ebfee811dfe869bf666f2d8f8bd2576_prof);

        
        $__internal_5991c592fcf76eb07ab09ce9a1f2ee7730e2beda8988764ebbe730df5a660967->leave($__internal_5991c592fcf76eb07ab09ce9a1f2ee7730e2beda8988764ebbe730df5a660967_prof);

    }

    // line 7
    public function block_Content($context, array $blocks = array())
    {
        $__internal_f7f4dfbfe5191922a904512016615b59b564783f331000cb45982b51472f1fba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7f4dfbfe5191922a904512016615b59b564783f331000cb45982b51472f1fba->enter($__internal_f7f4dfbfe5191922a904512016615b59b564783f331000cb45982b51472f1fba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_fd1d4c9009d06da00be50612dd2faa500aac654017178787d444f031c9e4b950 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd1d4c9009d06da00be50612dd2faa500aac654017178787d444f031c9e4b950->enter($__internal_fd1d4c9009d06da00be50612dd2faa500aac654017178787d444f031c9e4b950_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

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
        
        $__internal_fd1d4c9009d06da00be50612dd2faa500aac654017178787d444f031c9e4b950->leave($__internal_fd1d4c9009d06da00be50612dd2faa500aac654017178787d444f031c9e4b950_prof);

        
        $__internal_f7f4dfbfe5191922a904512016615b59b564783f331000cb45982b51472f1fba->leave($__internal_f7f4dfbfe5191922a904512016615b59b564783f331000cb45982b51472f1fba_prof);

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
