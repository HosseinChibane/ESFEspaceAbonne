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
        $__internal_e33fbb4aee3fcd3f1939f2f17ada30dc6025563a1f9fa9bf287d7d1006a0774e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e33fbb4aee3fcd3f1939f2f17ada30dc6025563a1f9fa9bf287d7d1006a0774e->enter($__internal_e33fbb4aee3fcd3f1939f2f17ada30dc6025563a1f9fa9bf287d7d1006a0774e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/back/logementOne.html.twig"));

        $__internal_71c01bf02bc29ebb5b985bce91cc1c5e619b58f8a0fe0d969327572c9fd72795 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71c01bf02bc29ebb5b985bce91cc1c5e619b58f8a0fe0d969327572c9fd72795->enter($__internal_71c01bf02bc29ebb5b985bce91cc1c5e619b58f8a0fe0d969327572c9fd72795_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/back/logementOne.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e33fbb4aee3fcd3f1939f2f17ada30dc6025563a1f9fa9bf287d7d1006a0774e->leave($__internal_e33fbb4aee3fcd3f1939f2f17ada30dc6025563a1f9fa9bf287d7d1006a0774e_prof);

        
        $__internal_71c01bf02bc29ebb5b985bce91cc1c5e619b58f8a0fe0d969327572c9fd72795->leave($__internal_71c01bf02bc29ebb5b985bce91cc1c5e619b58f8a0fe0d969327572c9fd72795_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f8ffa5a3e6c094d69a80a62bc180af9f4ffa346c94c169b49a31ff6c2318aebc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8ffa5a3e6c094d69a80a62bc180af9f4ffa346c94c169b49a31ff6c2318aebc->enter($__internal_f8ffa5a3e6c094d69a80a62bc180af9f4ffa346c94c169b49a31ff6c2318aebc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_05eec19ff8178b89670d522579ce079aa161da2b7c0bfd68a1fc030768948751 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05eec19ff8178b89670d522579ce079aa161da2b7c0bfd68a1fc030768948751->enter($__internal_05eec19ff8178b89670d522579ce079aa161da2b7c0bfd68a1fc030768948751_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tInscription logement - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_05eec19ff8178b89670d522579ce079aa161da2b7c0bfd68a1fc030768948751->leave($__internal_05eec19ff8178b89670d522579ce079aa161da2b7c0bfd68a1fc030768948751_prof);

        
        $__internal_f8ffa5a3e6c094d69a80a62bc180af9f4ffa346c94c169b49a31ff6c2318aebc->leave($__internal_f8ffa5a3e6c094d69a80a62bc180af9f4ffa346c94c169b49a31ff6c2318aebc_prof);

    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_e08729c79c6e684b7624c66b912064eab3e3020a99d1184b5ed2a3ea1705b246 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e08729c79c6e684b7624c66b912064eab3e3020a99d1184b5ed2a3ea1705b246->enter($__internal_e08729c79c6e684b7624c66b912064eab3e3020a99d1184b5ed2a3ea1705b246_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_ee8bdeb973dfe8cbb1bc519315318f6be2921f3258f5e7c0d89be5e395eb86fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee8bdeb973dfe8cbb1bc519315318f6be2921f3258f5e7c0d89be5e395eb86fb->enter($__internal_ee8bdeb973dfe8cbb1bc519315318f6be2921f3258f5e7c0d89be5e395eb86fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 8
        echo "    <ol class=\"breadcrumb\">
        <li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_monProfil");
        echo "\">Home</a></li>
        <li class=\"active\">Inscription</li>
    </ol>
";
        
        $__internal_ee8bdeb973dfe8cbb1bc519315318f6be2921f3258f5e7c0d89be5e395eb86fb->leave($__internal_ee8bdeb973dfe8cbb1bc519315318f6be2921f3258f5e7c0d89be5e395eb86fb_prof);

        
        $__internal_e08729c79c6e684b7624c66b912064eab3e3020a99d1184b5ed2a3ea1705b246->leave($__internal_e08729c79c6e684b7624c66b912064eab3e3020a99d1184b5ed2a3ea1705b246_prof);

    }

    // line 14
    public function block_Content($context, array $blocks = array())
    {
        $__internal_e0abac6b9475aace892f1022559d343cfef1a42704a7a103ff7cbef37230d374 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0abac6b9475aace892f1022559d343cfef1a42704a7a103ff7cbef37230d374->enter($__internal_e0abac6b9475aace892f1022559d343cfef1a42704a7a103ff7cbef37230d374_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_5cf638950c054444fc259c54093fadf4a85e0ad02bca4d34690148f1792887bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cf638950c054444fc259c54093fadf4a85e0ad02bca4d34690148f1792887bc->enter($__internal_5cf638950c054444fc259c54093fadf4a85e0ad02bca4d34690148f1792887bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

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
        
        $__internal_5cf638950c054444fc259c54093fadf4a85e0ad02bca4d34690148f1792887bc->leave($__internal_5cf638950c054444fc259c54093fadf4a85e0ad02bca4d34690148f1792887bc_prof);

        
        $__internal_e0abac6b9475aace892f1022559d343cfef1a42704a7a103ff7cbef37230d374->leave($__internal_e0abac6b9475aace892f1022559d343cfef1a42704a7a103ff7cbef37230d374_prof);

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
