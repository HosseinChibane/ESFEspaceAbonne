<?php

/* ESFEspaceAbonneBundle:back:preparationOne.html.twig */
class __TwigTemplate_488099b3eb703d8c564df41a4907d89881b778517bb76b9672ca49529a891cef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":backend:sidebar.html.twig", "ESFEspaceAbonneBundle:back:preparationOne.html.twig", 1);
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
        $__internal_45d887c5886d2ff5c2a768cb7805eca12279885a0fc0cd7155f8225fe0816d84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45d887c5886d2ff5c2a768cb7805eca12279885a0fc0cd7155f8225fe0816d84->enter($__internal_45d887c5886d2ff5c2a768cb7805eca12279885a0fc0cd7155f8225fe0816d84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:back:preparationOne.html.twig"));

        $__internal_7cdf89c98641f346f205128b310b8c8e0fb72ba71ed55282ddb44e085f7c22bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cdf89c98641f346f205128b310b8c8e0fb72ba71ed55282ddb44e085f7c22bb->enter($__internal_7cdf89c98641f346f205128b310b8c8e0fb72ba71ed55282ddb44e085f7c22bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:back:preparationOne.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_45d887c5886d2ff5c2a768cb7805eca12279885a0fc0cd7155f8225fe0816d84->leave($__internal_45d887c5886d2ff5c2a768cb7805eca12279885a0fc0cd7155f8225fe0816d84_prof);

        
        $__internal_7cdf89c98641f346f205128b310b8c8e0fb72ba71ed55282ddb44e085f7c22bb->leave($__internal_7cdf89c98641f346f205128b310b8c8e0fb72ba71ed55282ddb44e085f7c22bb_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_55c5910e53596acad5138305b34926dc99ea75af2ae372cf3a50766bb72e1468 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55c5910e53596acad5138305b34926dc99ea75af2ae372cf3a50766bb72e1468->enter($__internal_55c5910e53596acad5138305b34926dc99ea75af2ae372cf3a50766bb72e1468_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_040a46d645760b5c390930242684985f2b8ede12f3667ead4072c5edaec815bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_040a46d645760b5c390930242684985f2b8ede12f3667ead4072c5edaec815bf->enter($__internal_040a46d645760b5c390930242684985f2b8ede12f3667ead4072c5edaec815bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tInscription Préparation - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_040a46d645760b5c390930242684985f2b8ede12f3667ead4072c5edaec815bf->leave($__internal_040a46d645760b5c390930242684985f2b8ede12f3667ead4072c5edaec815bf_prof);

        
        $__internal_55c5910e53596acad5138305b34926dc99ea75af2ae372cf3a50766bb72e1468->leave($__internal_55c5910e53596acad5138305b34926dc99ea75af2ae372cf3a50766bb72e1468_prof);

    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_bf85d4e17d0268f827bceea45f9453ec9e7c63ef7f019aa92b97d25a696abcd9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf85d4e17d0268f827bceea45f9453ec9e7c63ef7f019aa92b97d25a696abcd9->enter($__internal_bf85d4e17d0268f827bceea45f9453ec9e7c63ef7f019aa92b97d25a696abcd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_28f42c6c11c7de30b54904eb0a66b8e076d3241b18f3ac038ba0f441e6ba7d71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28f42c6c11c7de30b54904eb0a66b8e076d3241b18f3ac038ba0f441e6ba7d71->enter($__internal_28f42c6c11c7de30b54904eb0a66b8e076d3241b18f3ac038ba0f441e6ba7d71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 8
        echo "\t<ol class=\"breadcrumb\">
\t\t<li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_monProfil");
        echo "\">Home</a></li>
\t\t<li class=\"active\">Inscription</li>
\t</ol>
";
        
        $__internal_28f42c6c11c7de30b54904eb0a66b8e076d3241b18f3ac038ba0f441e6ba7d71->leave($__internal_28f42c6c11c7de30b54904eb0a66b8e076d3241b18f3ac038ba0f441e6ba7d71_prof);

        
        $__internal_bf85d4e17d0268f827bceea45f9453ec9e7c63ef7f019aa92b97d25a696abcd9->leave($__internal_bf85d4e17d0268f827bceea45f9453ec9e7c63ef7f019aa92b97d25a696abcd9_prof);

    }

    // line 14
    public function block_Content($context, array $blocks = array())
    {
        $__internal_97ca435fb0f2a81f15e43a6b2fbedf635f255ef9b2e3f43a0f7feb11d3b5d4ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97ca435fb0f2a81f15e43a6b2fbedf635f255ef9b2e3f43a0f7feb11d3b5d4ba->enter($__internal_97ca435fb0f2a81f15e43a6b2fbedf635f255ef9b2e3f43a0f7feb11d3b5d4ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_a53905be79adaed3afe13d277b6939f8f5293ce367529d0508d0298673cb21a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a53905be79adaed3afe13d277b6939f8f5293ce367529d0508d0298673cb21a8->enter($__internal_a53905be79adaed3afe13d277b6939f8f5293ce367529d0508d0298673cb21a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

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
        
        $__internal_a53905be79adaed3afe13d277b6939f8f5293ce367529d0508d0298673cb21a8->leave($__internal_a53905be79adaed3afe13d277b6939f8f5293ce367529d0508d0298673cb21a8_prof);

        
        $__internal_97ca435fb0f2a81f15e43a6b2fbedf635f255ef9b2e3f43a0f7feb11d3b5d4ba->leave($__internal_97ca435fb0f2a81f15e43a6b2fbedf635f255ef9b2e3f43a0f7feb11d3b5d4ba_prof);

    }

    public function getTemplateName()
    {
        return "ESFEspaceAbonneBundle:back:preparationOne.html.twig";
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
", "ESFEspaceAbonneBundle:back:preparationOne.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\src\\ESF\\EspaceAbonneBundle/Resources/views/back/preparationOne.html.twig");
    }
}
