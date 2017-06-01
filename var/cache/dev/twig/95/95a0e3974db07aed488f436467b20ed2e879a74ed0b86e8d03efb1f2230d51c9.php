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
        $__internal_92423212d16858a843da671eb31450093faebd148a234fe6ef4235fc93f93d51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92423212d16858a843da671eb31450093faebd148a234fe6ef4235fc93f93d51->enter($__internal_92423212d16858a843da671eb31450093faebd148a234fe6ef4235fc93f93d51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/back/logementOne.html.twig"));

        $__internal_abff7bfde70cd408794048bee7b21654f050980f64525cadff57d298cba5de43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abff7bfde70cd408794048bee7b21654f050980f64525cadff57d298cba5de43->enter($__internal_abff7bfde70cd408794048bee7b21654f050980f64525cadff57d298cba5de43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/back/logementOne.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_92423212d16858a843da671eb31450093faebd148a234fe6ef4235fc93f93d51->leave($__internal_92423212d16858a843da671eb31450093faebd148a234fe6ef4235fc93f93d51_prof);

        
        $__internal_abff7bfde70cd408794048bee7b21654f050980f64525cadff57d298cba5de43->leave($__internal_abff7bfde70cd408794048bee7b21654f050980f64525cadff57d298cba5de43_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3b0ee191f843be0010206c7dfb0062648a59b41ad1f1f71de55bfe3726fea266 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b0ee191f843be0010206c7dfb0062648a59b41ad1f1f71de55bfe3726fea266->enter($__internal_3b0ee191f843be0010206c7dfb0062648a59b41ad1f1f71de55bfe3726fea266_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e0f89e5bea0040ee136c9141658c6bca48799a77fe8c518635a65fdd2d834724 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0f89e5bea0040ee136c9141658c6bca48799a77fe8c518635a65fdd2d834724->enter($__internal_e0f89e5bea0040ee136c9141658c6bca48799a77fe8c518635a65fdd2d834724_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tInscription logement - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_e0f89e5bea0040ee136c9141658c6bca48799a77fe8c518635a65fdd2d834724->leave($__internal_e0f89e5bea0040ee136c9141658c6bca48799a77fe8c518635a65fdd2d834724_prof);

        
        $__internal_3b0ee191f843be0010206c7dfb0062648a59b41ad1f1f71de55bfe3726fea266->leave($__internal_3b0ee191f843be0010206c7dfb0062648a59b41ad1f1f71de55bfe3726fea266_prof);

    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_11aaee6bed2b63a8550cf099cf3b6e1c2f973d38a488e63591949e2bf7ee43b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11aaee6bed2b63a8550cf099cf3b6e1c2f973d38a488e63591949e2bf7ee43b2->enter($__internal_11aaee6bed2b63a8550cf099cf3b6e1c2f973d38a488e63591949e2bf7ee43b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_37db040fbee3ec164f4590776cfe4fc77c7a0f0d3eb155c949a2be09fddbd3c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37db040fbee3ec164f4590776cfe4fc77c7a0f0d3eb155c949a2be09fddbd3c8->enter($__internal_37db040fbee3ec164f4590776cfe4fc77c7a0f0d3eb155c949a2be09fddbd3c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 8
        echo "    <ol class=\"breadcrumb\">
        <li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_monProfil");
        echo "\">Home</a></li>
        <li class=\"active\">Inscription</li>
    </ol>
";
        
        $__internal_37db040fbee3ec164f4590776cfe4fc77c7a0f0d3eb155c949a2be09fddbd3c8->leave($__internal_37db040fbee3ec164f4590776cfe4fc77c7a0f0d3eb155c949a2be09fddbd3c8_prof);

        
        $__internal_11aaee6bed2b63a8550cf099cf3b6e1c2f973d38a488e63591949e2bf7ee43b2->leave($__internal_11aaee6bed2b63a8550cf099cf3b6e1c2f973d38a488e63591949e2bf7ee43b2_prof);

    }

    // line 14
    public function block_Content($context, array $blocks = array())
    {
        $__internal_b7d2d0e5879f3af01b7710c1d9e9d9b8d1801d424e94552fd421c7b02da179b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7d2d0e5879f3af01b7710c1d9e9d9b8d1801d424e94552fd421c7b02da179b9->enter($__internal_b7d2d0e5879f3af01b7710c1d9e9d9b8d1801d424e94552fd421c7b02da179b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_398aad674ef65897050fc8016939f054c1d2a31e86978ed8ff102be34fb3909b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_398aad674ef65897050fc8016939f054c1d2a31e86978ed8ff102be34fb3909b->enter($__internal_398aad674ef65897050fc8016939f054c1d2a31e86978ed8ff102be34fb3909b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

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
        
        $__internal_398aad674ef65897050fc8016939f054c1d2a31e86978ed8ff102be34fb3909b->leave($__internal_398aad674ef65897050fc8016939f054c1d2a31e86978ed8ff102be34fb3909b_prof);

        
        $__internal_b7d2d0e5879f3af01b7710c1d9e9d9b8d1801d424e94552fd421c7b02da179b9->leave($__internal_b7d2d0e5879f3af01b7710c1d9e9d9b8d1801d424e94552fd421c7b02da179b9_prof);

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
