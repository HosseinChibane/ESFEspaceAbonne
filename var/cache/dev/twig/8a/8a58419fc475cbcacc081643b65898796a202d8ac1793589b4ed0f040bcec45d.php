<?php

/* ESFEspaceAbonneBundle:Back:logementOne.html.twig */
class __TwigTemplate_d666e1aef5b14f90a520e914e8edb82809640a39ec7920a23ffcee37e27fc798 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":backend:sidebar.html.twig", "ESFEspaceAbonneBundle:Back:logementOne.html.twig", 1);
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
        $__internal_9a0c4d7ec6836e088b1518155eca0ae57d45faf02aa1c17018db93d7c980e657 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a0c4d7ec6836e088b1518155eca0ae57d45faf02aa1c17018db93d7c980e657->enter($__internal_9a0c4d7ec6836e088b1518155eca0ae57d45faf02aa1c17018db93d7c980e657_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:Back:logementOne.html.twig"));

        $__internal_31eb42830e60e8e7894cb4a9139eab7b5a80540b01ba88960632b2c159eb2c40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31eb42830e60e8e7894cb4a9139eab7b5a80540b01ba88960632b2c159eb2c40->enter($__internal_31eb42830e60e8e7894cb4a9139eab7b5a80540b01ba88960632b2c159eb2c40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:Back:logementOne.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9a0c4d7ec6836e088b1518155eca0ae57d45faf02aa1c17018db93d7c980e657->leave($__internal_9a0c4d7ec6836e088b1518155eca0ae57d45faf02aa1c17018db93d7c980e657_prof);

        
        $__internal_31eb42830e60e8e7894cb4a9139eab7b5a80540b01ba88960632b2c159eb2c40->leave($__internal_31eb42830e60e8e7894cb4a9139eab7b5a80540b01ba88960632b2c159eb2c40_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_676d785eb6ab4e3557ead4d1fabdd9b0246a677846dc49cdcccb24382a007d0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_676d785eb6ab4e3557ead4d1fabdd9b0246a677846dc49cdcccb24382a007d0a->enter($__internal_676d785eb6ab4e3557ead4d1fabdd9b0246a677846dc49cdcccb24382a007d0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_adeeb6283192d6397b2fbf155ddf7224cb9585ffaa0de246a3fd26cf2634af03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_adeeb6283192d6397b2fbf155ddf7224cb9585ffaa0de246a3fd26cf2634af03->enter($__internal_adeeb6283192d6397b2fbf155ddf7224cb9585ffaa0de246a3fd26cf2634af03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tInscription logement - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_adeeb6283192d6397b2fbf155ddf7224cb9585ffaa0de246a3fd26cf2634af03->leave($__internal_adeeb6283192d6397b2fbf155ddf7224cb9585ffaa0de246a3fd26cf2634af03_prof);

        
        $__internal_676d785eb6ab4e3557ead4d1fabdd9b0246a677846dc49cdcccb24382a007d0a->leave($__internal_676d785eb6ab4e3557ead4d1fabdd9b0246a677846dc49cdcccb24382a007d0a_prof);

    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_00d87d28f2a994b846ce8342a711c72baf1d5e3d1149b1330ffed069869ccf45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00d87d28f2a994b846ce8342a711c72baf1d5e3d1149b1330ffed069869ccf45->enter($__internal_00d87d28f2a994b846ce8342a711c72baf1d5e3d1149b1330ffed069869ccf45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_2618367b064013dc9002c20388d027185012514aadbab8926150c054001ac132 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2618367b064013dc9002c20388d027185012514aadbab8926150c054001ac132->enter($__internal_2618367b064013dc9002c20388d027185012514aadbab8926150c054001ac132_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 8
        echo "    <ol class=\"breadcrumb\">
        <li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_monProfil");
        echo "\">Home</a></li>
        <li class=\"active\">Inscription</li>
    </ol>
";
        
        $__internal_2618367b064013dc9002c20388d027185012514aadbab8926150c054001ac132->leave($__internal_2618367b064013dc9002c20388d027185012514aadbab8926150c054001ac132_prof);

        
        $__internal_00d87d28f2a994b846ce8342a711c72baf1d5e3d1149b1330ffed069869ccf45->leave($__internal_00d87d28f2a994b846ce8342a711c72baf1d5e3d1149b1330ffed069869ccf45_prof);

    }

    // line 14
    public function block_Content($context, array $blocks = array())
    {
        $__internal_6f75e37c47527671f15dafef115bc857c38a8847d7c72ae52cbaba677866721c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f75e37c47527671f15dafef115bc857c38a8847d7c72ae52cbaba677866721c->enter($__internal_6f75e37c47527671f15dafef115bc857c38a8847d7c72ae52cbaba677866721c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_499df922c9efa187eb63fb093f92f45d39b84ce67c1d20454bc8d54e96fef242 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_499df922c9efa187eb63fb093f92f45d39b84ce67c1d20454bc8d54e96fef242->enter($__internal_499df922c9efa187eb63fb093f92f45d39b84ce67c1d20454bc8d54e96fef242_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

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
        
        $__internal_499df922c9efa187eb63fb093f92f45d39b84ce67c1d20454bc8d54e96fef242->leave($__internal_499df922c9efa187eb63fb093f92f45d39b84ce67c1d20454bc8d54e96fef242_prof);

        
        $__internal_6f75e37c47527671f15dafef115bc857c38a8847d7c72ae52cbaba677866721c->leave($__internal_6f75e37c47527671f15dafef115bc857c38a8847d7c72ae52cbaba677866721c_prof);

    }

    public function getTemplateName()
    {
        return "ESFEspaceAbonneBundle:Back:logementOne.html.twig";
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
{% endblock %}", "ESFEspaceAbonneBundle:Back:logementOne.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\src\\ESF\\EspaceAbonneBundle/Resources/views/Back/logementOne.html.twig");
    }
}
