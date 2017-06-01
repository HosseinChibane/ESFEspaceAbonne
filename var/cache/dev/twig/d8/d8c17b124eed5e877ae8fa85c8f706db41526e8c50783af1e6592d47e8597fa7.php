<?php

/* ESFEspaceAbonneBundle:back:logementOne.html.twig */
class __TwigTemplate_933685bcdbbc827024c1c4f72ce1afb54d809b8c40c05288ecace8b455262add extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":backend:sidebar.html.twig", "ESFEspaceAbonneBundle:back:logementOne.html.twig", 1);
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
        $__internal_66c215769724ddc70c5e7f09c53c32224bf077bf7443bfe4ad7ea5ddd0d6bf25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66c215769724ddc70c5e7f09c53c32224bf077bf7443bfe4ad7ea5ddd0d6bf25->enter($__internal_66c215769724ddc70c5e7f09c53c32224bf077bf7443bfe4ad7ea5ddd0d6bf25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:back:logementOne.html.twig"));

        $__internal_ae9573b734c826629771bd54aab0c0087d572a621b78abadf00526b7b129f4c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae9573b734c826629771bd54aab0c0087d572a621b78abadf00526b7b129f4c0->enter($__internal_ae9573b734c826629771bd54aab0c0087d572a621b78abadf00526b7b129f4c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:back:logementOne.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_66c215769724ddc70c5e7f09c53c32224bf077bf7443bfe4ad7ea5ddd0d6bf25->leave($__internal_66c215769724ddc70c5e7f09c53c32224bf077bf7443bfe4ad7ea5ddd0d6bf25_prof);

        
        $__internal_ae9573b734c826629771bd54aab0c0087d572a621b78abadf00526b7b129f4c0->leave($__internal_ae9573b734c826629771bd54aab0c0087d572a621b78abadf00526b7b129f4c0_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_67668009a12ed76f52ea571adedf8b248fe611c8fb3f7a6cffcdbe3d151ceff1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67668009a12ed76f52ea571adedf8b248fe611c8fb3f7a6cffcdbe3d151ceff1->enter($__internal_67668009a12ed76f52ea571adedf8b248fe611c8fb3f7a6cffcdbe3d151ceff1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_391ca3cd5103a7f9e2761c277a461b88816e2958ea19bf472bc54c2ee80216de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_391ca3cd5103a7f9e2761c277a461b88816e2958ea19bf472bc54c2ee80216de->enter($__internal_391ca3cd5103a7f9e2761c277a461b88816e2958ea19bf472bc54c2ee80216de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tInscription logement - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_391ca3cd5103a7f9e2761c277a461b88816e2958ea19bf472bc54c2ee80216de->leave($__internal_391ca3cd5103a7f9e2761c277a461b88816e2958ea19bf472bc54c2ee80216de_prof);

        
        $__internal_67668009a12ed76f52ea571adedf8b248fe611c8fb3f7a6cffcdbe3d151ceff1->leave($__internal_67668009a12ed76f52ea571adedf8b248fe611c8fb3f7a6cffcdbe3d151ceff1_prof);

    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_464b00253fb66332273e30c36e62f270b5cd37c18196ab9c37afd7e944378f52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_464b00253fb66332273e30c36e62f270b5cd37c18196ab9c37afd7e944378f52->enter($__internal_464b00253fb66332273e30c36e62f270b5cd37c18196ab9c37afd7e944378f52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_c50633a0a48625b82e37911d3c11d8e7a53547393299d26eb256c696100f81da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c50633a0a48625b82e37911d3c11d8e7a53547393299d26eb256c696100f81da->enter($__internal_c50633a0a48625b82e37911d3c11d8e7a53547393299d26eb256c696100f81da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 8
        echo "    <ol class=\"breadcrumb\">
        <li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_monProfil");
        echo "\">Home</a></li>
        <li class=\"active\">Inscription</li>
    </ol>
";
        
        $__internal_c50633a0a48625b82e37911d3c11d8e7a53547393299d26eb256c696100f81da->leave($__internal_c50633a0a48625b82e37911d3c11d8e7a53547393299d26eb256c696100f81da_prof);

        
        $__internal_464b00253fb66332273e30c36e62f270b5cd37c18196ab9c37afd7e944378f52->leave($__internal_464b00253fb66332273e30c36e62f270b5cd37c18196ab9c37afd7e944378f52_prof);

    }

    // line 14
    public function block_Content($context, array $blocks = array())
    {
        $__internal_06c3276aac95376992d68db684a385273eef402985a012c3e35d51be761a0fd3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06c3276aac95376992d68db684a385273eef402985a012c3e35d51be761a0fd3->enter($__internal_06c3276aac95376992d68db684a385273eef402985a012c3e35d51be761a0fd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_12731d12d8bed7e5e1c17ae208843c5f0a5e69373771810a74078f75088d7b63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12731d12d8bed7e5e1c17ae208843c5f0a5e69373771810a74078f75088d7b63->enter($__internal_12731d12d8bed7e5e1c17ae208843c5f0a5e69373771810a74078f75088d7b63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

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
        
        $__internal_12731d12d8bed7e5e1c17ae208843c5f0a5e69373771810a74078f75088d7b63->leave($__internal_12731d12d8bed7e5e1c17ae208843c5f0a5e69373771810a74078f75088d7b63_prof);

        
        $__internal_06c3276aac95376992d68db684a385273eef402985a012c3e35d51be761a0fd3->leave($__internal_06c3276aac95376992d68db684a385273eef402985a012c3e35d51be761a0fd3_prof);

    }

    public function getTemplateName()
    {
        return "ESFEspaceAbonneBundle:back:logementOne.html.twig";
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
{% endblock %}", "ESFEspaceAbonneBundle:back:logementOne.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\src\\ESF\\EspaceAbonneBundle/Resources/views/back/logementOne.html.twig");
    }
}
