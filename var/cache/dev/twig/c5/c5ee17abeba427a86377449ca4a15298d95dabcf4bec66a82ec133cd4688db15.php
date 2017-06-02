<?php

/* @ESFEspaceAbonne/back/preparationOne.html.twig */
class __TwigTemplate_f9dcf117b173379e3c8fdeba41c5ffbbbf10091642f0df7ef51b134ed381662b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":backend:sidebar.html.twig", "@ESFEspaceAbonne/back/preparationOne.html.twig", 1);
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
        $__internal_cd8c231d3e91008cf50f9d3b22d2b12a2431b040c922556e7a15c6304f17459e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd8c231d3e91008cf50f9d3b22d2b12a2431b040c922556e7a15c6304f17459e->enter($__internal_cd8c231d3e91008cf50f9d3b22d2b12a2431b040c922556e7a15c6304f17459e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/back/preparationOne.html.twig"));

        $__internal_94012da22da3f6eeb61d550a59cb7b0bc6b22b2fc7d381ec7870547b387d31ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94012da22da3f6eeb61d550a59cb7b0bc6b22b2fc7d381ec7870547b387d31ba->enter($__internal_94012da22da3f6eeb61d550a59cb7b0bc6b22b2fc7d381ec7870547b387d31ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/back/preparationOne.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cd8c231d3e91008cf50f9d3b22d2b12a2431b040c922556e7a15c6304f17459e->leave($__internal_cd8c231d3e91008cf50f9d3b22d2b12a2431b040c922556e7a15c6304f17459e_prof);

        
        $__internal_94012da22da3f6eeb61d550a59cb7b0bc6b22b2fc7d381ec7870547b387d31ba->leave($__internal_94012da22da3f6eeb61d550a59cb7b0bc6b22b2fc7d381ec7870547b387d31ba_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0e1bb405122769f42f5639d6ce40de85e02aa01115b76ca5c71f96947d79a86f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e1bb405122769f42f5639d6ce40de85e02aa01115b76ca5c71f96947d79a86f->enter($__internal_0e1bb405122769f42f5639d6ce40de85e02aa01115b76ca5c71f96947d79a86f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9d7030ee0e3d45569c56f3163e730015157044a518bf1a9e05f25644db69e1d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d7030ee0e3d45569c56f3163e730015157044a518bf1a9e05f25644db69e1d8->enter($__internal_9d7030ee0e3d45569c56f3163e730015157044a518bf1a9e05f25644db69e1d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tInscription Préparation - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_9d7030ee0e3d45569c56f3163e730015157044a518bf1a9e05f25644db69e1d8->leave($__internal_9d7030ee0e3d45569c56f3163e730015157044a518bf1a9e05f25644db69e1d8_prof);

        
        $__internal_0e1bb405122769f42f5639d6ce40de85e02aa01115b76ca5c71f96947d79a86f->leave($__internal_0e1bb405122769f42f5639d6ce40de85e02aa01115b76ca5c71f96947d79a86f_prof);

    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_4eef509ac617b5f6cef43140636e8bc7f036cca469cebc70f07d2289119fdd58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4eef509ac617b5f6cef43140636e8bc7f036cca469cebc70f07d2289119fdd58->enter($__internal_4eef509ac617b5f6cef43140636e8bc7f036cca469cebc70f07d2289119fdd58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_326851afae1e25a26a9f5157a89625ddbaab48e849de1c6402189f0d34ddeee8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_326851afae1e25a26a9f5157a89625ddbaab48e849de1c6402189f0d34ddeee8->enter($__internal_326851afae1e25a26a9f5157a89625ddbaab48e849de1c6402189f0d34ddeee8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 8
        echo "\t<ol class=\"breadcrumb\">
\t\t<li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_monProfil");
        echo "\">Home</a></li>
\t\t<li class=\"active\">Inscription</li>
\t</ol>
";
        
        $__internal_326851afae1e25a26a9f5157a89625ddbaab48e849de1c6402189f0d34ddeee8->leave($__internal_326851afae1e25a26a9f5157a89625ddbaab48e849de1c6402189f0d34ddeee8_prof);

        
        $__internal_4eef509ac617b5f6cef43140636e8bc7f036cca469cebc70f07d2289119fdd58->leave($__internal_4eef509ac617b5f6cef43140636e8bc7f036cca469cebc70f07d2289119fdd58_prof);

    }

    // line 14
    public function block_Content($context, array $blocks = array())
    {
        $__internal_1a095dac508e60a9af3e4be0889fdf37e5a3479179a45cb14e08c146a750e7ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a095dac508e60a9af3e4be0889fdf37e5a3479179a45cb14e08c146a750e7ff->enter($__internal_1a095dac508e60a9af3e4be0889fdf37e5a3479179a45cb14e08c146a750e7ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_6c6aeccd31561992019d280929c1190f5527e0e859c862eb4423310ff27d52ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c6aeccd31561992019d280929c1190f5527e0e859c862eb4423310ff27d52ff->enter($__internal_6c6aeccd31561992019d280929c1190f5527e0e859c862eb4423310ff27d52ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

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
        
        $__internal_6c6aeccd31561992019d280929c1190f5527e0e859c862eb4423310ff27d52ff->leave($__internal_6c6aeccd31561992019d280929c1190f5527e0e859c862eb4423310ff27d52ff_prof);

        
        $__internal_1a095dac508e60a9af3e4be0889fdf37e5a3479179a45cb14e08c146a750e7ff->leave($__internal_1a095dac508e60a9af3e4be0889fdf37e5a3479179a45cb14e08c146a750e7ff_prof);

    }

    public function getTemplateName()
    {
        return "@ESFEspaceAbonne/back/preparationOne.html.twig";
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
", "@ESFEspaceAbonne/back/preparationOne.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\src\\ESF\\EspaceAbonneBundle\\Resources\\views\\back\\preparationOne.html.twig");
    }
}
