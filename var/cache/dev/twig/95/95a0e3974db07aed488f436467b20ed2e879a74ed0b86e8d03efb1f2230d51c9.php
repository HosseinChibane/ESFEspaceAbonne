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
        $__internal_7fd9c9f2356d371f55de20714ba43adea3d2e2b3a51c9dcb8a699ca2f457b51d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7fd9c9f2356d371f55de20714ba43adea3d2e2b3a51c9dcb8a699ca2f457b51d->enter($__internal_7fd9c9f2356d371f55de20714ba43adea3d2e2b3a51c9dcb8a699ca2f457b51d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/back/logementOne.html.twig"));

        $__internal_45b3177f6a7e3744d01f58c414590c0260de997d2eaf3ea71d325dec7df8ae6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45b3177f6a7e3744d01f58c414590c0260de997d2eaf3ea71d325dec7df8ae6d->enter($__internal_45b3177f6a7e3744d01f58c414590c0260de997d2eaf3ea71d325dec7df8ae6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/back/logementOne.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7fd9c9f2356d371f55de20714ba43adea3d2e2b3a51c9dcb8a699ca2f457b51d->leave($__internal_7fd9c9f2356d371f55de20714ba43adea3d2e2b3a51c9dcb8a699ca2f457b51d_prof);

        
        $__internal_45b3177f6a7e3744d01f58c414590c0260de997d2eaf3ea71d325dec7df8ae6d->leave($__internal_45b3177f6a7e3744d01f58c414590c0260de997d2eaf3ea71d325dec7df8ae6d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6ba34c339cfcd99327a3a82a2b36c88ad89897dade0883b87646770554673f7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ba34c339cfcd99327a3a82a2b36c88ad89897dade0883b87646770554673f7d->enter($__internal_6ba34c339cfcd99327a3a82a2b36c88ad89897dade0883b87646770554673f7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_75c41b833a3f5b77b07abdfd0d90f622b99f504757f343db321f0d89a1118716 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75c41b833a3f5b77b07abdfd0d90f622b99f504757f343db321f0d89a1118716->enter($__internal_75c41b833a3f5b77b07abdfd0d90f622b99f504757f343db321f0d89a1118716_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tInscription logement - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_75c41b833a3f5b77b07abdfd0d90f622b99f504757f343db321f0d89a1118716->leave($__internal_75c41b833a3f5b77b07abdfd0d90f622b99f504757f343db321f0d89a1118716_prof);

        
        $__internal_6ba34c339cfcd99327a3a82a2b36c88ad89897dade0883b87646770554673f7d->leave($__internal_6ba34c339cfcd99327a3a82a2b36c88ad89897dade0883b87646770554673f7d_prof);

    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_da6edec6d684059ce0fa676a739dcac76ff007a91ce6604ea2019aa540cf480c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da6edec6d684059ce0fa676a739dcac76ff007a91ce6604ea2019aa540cf480c->enter($__internal_da6edec6d684059ce0fa676a739dcac76ff007a91ce6604ea2019aa540cf480c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_1f0869014a38a025c4ee48de7695fe15235e2e9e453a27812b86b042f58771dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f0869014a38a025c4ee48de7695fe15235e2e9e453a27812b86b042f58771dd->enter($__internal_1f0869014a38a025c4ee48de7695fe15235e2e9e453a27812b86b042f58771dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 8
        echo "    <ol class=\"breadcrumb\">
        <li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_monProfil");
        echo "\">Home</a></li>
        <li class=\"active\">Inscription</li>
    </ol>
";
        
        $__internal_1f0869014a38a025c4ee48de7695fe15235e2e9e453a27812b86b042f58771dd->leave($__internal_1f0869014a38a025c4ee48de7695fe15235e2e9e453a27812b86b042f58771dd_prof);

        
        $__internal_da6edec6d684059ce0fa676a739dcac76ff007a91ce6604ea2019aa540cf480c->leave($__internal_da6edec6d684059ce0fa676a739dcac76ff007a91ce6604ea2019aa540cf480c_prof);

    }

    // line 14
    public function block_Content($context, array $blocks = array())
    {
        $__internal_19d05549e6dc1f4148538a258303ed48dbb98a47da69463c155628048a0bffce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19d05549e6dc1f4148538a258303ed48dbb98a47da69463c155628048a0bffce->enter($__internal_19d05549e6dc1f4148538a258303ed48dbb98a47da69463c155628048a0bffce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_d3ebf562fe40a7f80b79ef58d8f66f4f8626a1a6ffcc7d28d3b55715dbcf789c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3ebf562fe40a7f80b79ef58d8f66f4f8626a1a6ffcc7d28d3b55715dbcf789c->enter($__internal_d3ebf562fe40a7f80b79ef58d8f66f4f8626a1a6ffcc7d28d3b55715dbcf789c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

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
        
        $__internal_d3ebf562fe40a7f80b79ef58d8f66f4f8626a1a6ffcc7d28d3b55715dbcf789c->leave($__internal_d3ebf562fe40a7f80b79ef58d8f66f4f8626a1a6ffcc7d28d3b55715dbcf789c_prof);

        
        $__internal_19d05549e6dc1f4148538a258303ed48dbb98a47da69463c155628048a0bffce->leave($__internal_19d05549e6dc1f4148538a258303ed48dbb98a47da69463c155628048a0bffce_prof);

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
