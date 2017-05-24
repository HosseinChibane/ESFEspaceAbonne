<?php

/* ESFEspaceAbonneBundle:Default:logementOne.html.twig */
class __TwigTemplate_01ed4834bdbaf092aae04d63d00cd9fba339546f01e67efbc78e01fa7ad96415 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":backend:sidebar.html.twig", "ESFEspaceAbonneBundle:Default:logementOne.html.twig", 1);
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
        $__internal_fa23e51558bc50d388d7ee8a522248ba6d9c72c1bec0a8876f8decf98cda937e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa23e51558bc50d388d7ee8a522248ba6d9c72c1bec0a8876f8decf98cda937e->enter($__internal_fa23e51558bc50d388d7ee8a522248ba6d9c72c1bec0a8876f8decf98cda937e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:Default:logementOne.html.twig"));

        $__internal_bc18c33697261a82499a270315f4cbbd851d0379b595f56b84e6b9ba9bc62f39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc18c33697261a82499a270315f4cbbd851d0379b595f56b84e6b9ba9bc62f39->enter($__internal_bc18c33697261a82499a270315f4cbbd851d0379b595f56b84e6b9ba9bc62f39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:Default:logementOne.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fa23e51558bc50d388d7ee8a522248ba6d9c72c1bec0a8876f8decf98cda937e->leave($__internal_fa23e51558bc50d388d7ee8a522248ba6d9c72c1bec0a8876f8decf98cda937e_prof);

        
        $__internal_bc18c33697261a82499a270315f4cbbd851d0379b595f56b84e6b9ba9bc62f39->leave($__internal_bc18c33697261a82499a270315f4cbbd851d0379b595f56b84e6b9ba9bc62f39_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_84984b5490090906ce5aa407c24c4a10f48bf4e90d6a08b2286a3983aa553a7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84984b5490090906ce5aa407c24c4a10f48bf4e90d6a08b2286a3983aa553a7b->enter($__internal_84984b5490090906ce5aa407c24c4a10f48bf4e90d6a08b2286a3983aa553a7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5dfeb3f6b232a89fce3f608d3316e904483a2b4aedcb782eec2a2ec282a1eb60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5dfeb3f6b232a89fce3f608d3316e904483a2b4aedcb782eec2a2ec282a1eb60->enter($__internal_5dfeb3f6b232a89fce3f608d3316e904483a2b4aedcb782eec2a2ec282a1eb60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tInscription logement - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_5dfeb3f6b232a89fce3f608d3316e904483a2b4aedcb782eec2a2ec282a1eb60->leave($__internal_5dfeb3f6b232a89fce3f608d3316e904483a2b4aedcb782eec2a2ec282a1eb60_prof);

        
        $__internal_84984b5490090906ce5aa407c24c4a10f48bf4e90d6a08b2286a3983aa553a7b->leave($__internal_84984b5490090906ce5aa407c24c4a10f48bf4e90d6a08b2286a3983aa553a7b_prof);

    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_88e466bc7fe9e414830e072ceb53abcf86ee9564700ff9b7e2f0b300a84a1135 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88e466bc7fe9e414830e072ceb53abcf86ee9564700ff9b7e2f0b300a84a1135->enter($__internal_88e466bc7fe9e414830e072ceb53abcf86ee9564700ff9b7e2f0b300a84a1135_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_281c57ca821f67e603aeef8f01f3029e70893e6e355fcfd5ee346fd01f8e0ff3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_281c57ca821f67e603aeef8f01f3029e70893e6e355fcfd5ee346fd01f8e0ff3->enter($__internal_281c57ca821f67e603aeef8f01f3029e70893e6e355fcfd5ee346fd01f8e0ff3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 8
        echo "    <ol class=\"breadcrumb\">
        <li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_monProfil");
        echo "\">Home</a></li>
        <li class=\"active\">Inscription</li>
    </ol>
";
        
        $__internal_281c57ca821f67e603aeef8f01f3029e70893e6e355fcfd5ee346fd01f8e0ff3->leave($__internal_281c57ca821f67e603aeef8f01f3029e70893e6e355fcfd5ee346fd01f8e0ff3_prof);

        
        $__internal_88e466bc7fe9e414830e072ceb53abcf86ee9564700ff9b7e2f0b300a84a1135->leave($__internal_88e466bc7fe9e414830e072ceb53abcf86ee9564700ff9b7e2f0b300a84a1135_prof);

    }

    // line 14
    public function block_Content($context, array $blocks = array())
    {
        $__internal_92aced23fe4c9535eb919e1cdfe148a59e395b9bcde2704f1c2de0f42222570d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92aced23fe4c9535eb919e1cdfe148a59e395b9bcde2704f1c2de0f42222570d->enter($__internal_92aced23fe4c9535eb919e1cdfe148a59e395b9bcde2704f1c2de0f42222570d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_e5dc85f807a31e91dd8faee783bd4fafad082bc7efc542a474ea5663ef0ee20a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5dc85f807a31e91dd8faee783bd4fafad082bc7efc542a474ea5663ef0ee20a->enter($__internal_e5dc85f807a31e91dd8faee783bd4fafad082bc7efc542a474ea5663ef0ee20a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

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
        
        $__internal_e5dc85f807a31e91dd8faee783bd4fafad082bc7efc542a474ea5663ef0ee20a->leave($__internal_e5dc85f807a31e91dd8faee783bd4fafad082bc7efc542a474ea5663ef0ee20a_prof);

        
        $__internal_92aced23fe4c9535eb919e1cdfe148a59e395b9bcde2704f1c2de0f42222570d->leave($__internal_92aced23fe4c9535eb919e1cdfe148a59e395b9bcde2704f1c2de0f42222570d_prof);

    }

    public function getTemplateName()
    {
        return "ESFEspaceAbonneBundle:Default:logementOne.html.twig";
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
{% endblock %}", "ESFEspaceAbonneBundle:Default:logementOne.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\src\\ESF\\EspaceAbonneBundle/Resources/views/Default/logementOne.html.twig");
    }
}
