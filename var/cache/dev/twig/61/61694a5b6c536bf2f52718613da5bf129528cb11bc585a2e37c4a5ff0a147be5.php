<?php

/* ESFEspaceAbonneBundle:Default:preparationOne.html.twig */
class __TwigTemplate_765e716e339aad9c17a2f57a3d7ab1452dbb46ebc2b6ed00fc9c9c7ec72f9dac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":backend:sidebar.html.twig", "ESFEspaceAbonneBundle:Default:preparationOne.html.twig", 1);
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
        $__internal_d6409c2fa8eabdde94116df123914600f388c2023fca3c64600af9ac9e2c18c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6409c2fa8eabdde94116df123914600f388c2023fca3c64600af9ac9e2c18c4->enter($__internal_d6409c2fa8eabdde94116df123914600f388c2023fca3c64600af9ac9e2c18c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:Default:preparationOne.html.twig"));

        $__internal_a476a35b271a304e4402e63bf20859a0b36189d885a78a73f7866ede559e6837 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a476a35b271a304e4402e63bf20859a0b36189d885a78a73f7866ede559e6837->enter($__internal_a476a35b271a304e4402e63bf20859a0b36189d885a78a73f7866ede559e6837_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:Default:preparationOne.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d6409c2fa8eabdde94116df123914600f388c2023fca3c64600af9ac9e2c18c4->leave($__internal_d6409c2fa8eabdde94116df123914600f388c2023fca3c64600af9ac9e2c18c4_prof);

        
        $__internal_a476a35b271a304e4402e63bf20859a0b36189d885a78a73f7866ede559e6837->leave($__internal_a476a35b271a304e4402e63bf20859a0b36189d885a78a73f7866ede559e6837_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_13e4b1a429e214dc030b15b9c24926eada2f6f99a4a51d3df659dbd909940c26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13e4b1a429e214dc030b15b9c24926eada2f6f99a4a51d3df659dbd909940c26->enter($__internal_13e4b1a429e214dc030b15b9c24926eada2f6f99a4a51d3df659dbd909940c26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_45e5257024eced797f813b320cee93773a623f7c8f078b8d9fd1aade35703bd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45e5257024eced797f813b320cee93773a623f7c8f078b8d9fd1aade35703bd3->enter($__internal_45e5257024eced797f813b320cee93773a623f7c8f078b8d9fd1aade35703bd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tInscription Préparation - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_45e5257024eced797f813b320cee93773a623f7c8f078b8d9fd1aade35703bd3->leave($__internal_45e5257024eced797f813b320cee93773a623f7c8f078b8d9fd1aade35703bd3_prof);

        
        $__internal_13e4b1a429e214dc030b15b9c24926eada2f6f99a4a51d3df659dbd909940c26->leave($__internal_13e4b1a429e214dc030b15b9c24926eada2f6f99a4a51d3df659dbd909940c26_prof);

    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_a3305b2ae7639fa7d96654dff6be1077139b0ae9a6841fefbdcfbfc6aca61d72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3305b2ae7639fa7d96654dff6be1077139b0ae9a6841fefbdcfbfc6aca61d72->enter($__internal_a3305b2ae7639fa7d96654dff6be1077139b0ae9a6841fefbdcfbfc6aca61d72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_23055edc3a6fa2cfd6c9fc09db0d863e1072b8faeb667dec95ecf87b78618aa8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23055edc3a6fa2cfd6c9fc09db0d863e1072b8faeb667dec95ecf87b78618aa8->enter($__internal_23055edc3a6fa2cfd6c9fc09db0d863e1072b8faeb667dec95ecf87b78618aa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 8
        echo "\t<ol class=\"breadcrumb\">
\t\t<li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_monProfil");
        echo "\">Home</a></li>
\t\t<li class=\"active\">Inscription</li>
\t</ol>
";
        
        $__internal_23055edc3a6fa2cfd6c9fc09db0d863e1072b8faeb667dec95ecf87b78618aa8->leave($__internal_23055edc3a6fa2cfd6c9fc09db0d863e1072b8faeb667dec95ecf87b78618aa8_prof);

        
        $__internal_a3305b2ae7639fa7d96654dff6be1077139b0ae9a6841fefbdcfbfc6aca61d72->leave($__internal_a3305b2ae7639fa7d96654dff6be1077139b0ae9a6841fefbdcfbfc6aca61d72_prof);

    }

    // line 14
    public function block_Content($context, array $blocks = array())
    {
        $__internal_f45c75817a1c993f8645e969dc23a2bd0d4bc454cb9d8806599d25ab48ac6b9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f45c75817a1c993f8645e969dc23a2bd0d4bc454cb9d8806599d25ab48ac6b9d->enter($__internal_f45c75817a1c993f8645e969dc23a2bd0d4bc454cb9d8806599d25ab48ac6b9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_a2dcf92700323863d7365241f290dde9a427624f6d344a31a5d596397524a539 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2dcf92700323863d7365241f290dde9a427624f6d344a31a5d596397524a539->enter($__internal_a2dcf92700323863d7365241f290dde9a427624f6d344a31a5d596397524a539_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

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
        
        $__internal_a2dcf92700323863d7365241f290dde9a427624f6d344a31a5d596397524a539->leave($__internal_a2dcf92700323863d7365241f290dde9a427624f6d344a31a5d596397524a539_prof);

        
        $__internal_f45c75817a1c993f8645e969dc23a2bd0d4bc454cb9d8806599d25ab48ac6b9d->leave($__internal_f45c75817a1c993f8645e969dc23a2bd0d4bc454cb9d8806599d25ab48ac6b9d_prof);

    }

    public function getTemplateName()
    {
        return "ESFEspaceAbonneBundle:Default:preparationOne.html.twig";
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
", "ESFEspaceAbonneBundle:Default:preparationOne.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\src\\ESF\\EspaceAbonneBundle/Resources/views/Default/preparationOne.html.twig");
    }
}
