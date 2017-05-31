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
        $__internal_90a6787aa7d0f45a86c59b30ca8e192cc073c2419412b43d6b0ca8d50e73fcbd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90a6787aa7d0f45a86c59b30ca8e192cc073c2419412b43d6b0ca8d50e73fcbd->enter($__internal_90a6787aa7d0f45a86c59b30ca8e192cc073c2419412b43d6b0ca8d50e73fcbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:back:preparationOne.html.twig"));

        $__internal_be4f35c2d4acc30608d6916330053dd13e88c9cc233a37b47b3c6dbff69aeb2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be4f35c2d4acc30608d6916330053dd13e88c9cc233a37b47b3c6dbff69aeb2d->enter($__internal_be4f35c2d4acc30608d6916330053dd13e88c9cc233a37b47b3c6dbff69aeb2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:back:preparationOne.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_90a6787aa7d0f45a86c59b30ca8e192cc073c2419412b43d6b0ca8d50e73fcbd->leave($__internal_90a6787aa7d0f45a86c59b30ca8e192cc073c2419412b43d6b0ca8d50e73fcbd_prof);

        
        $__internal_be4f35c2d4acc30608d6916330053dd13e88c9cc233a37b47b3c6dbff69aeb2d->leave($__internal_be4f35c2d4acc30608d6916330053dd13e88c9cc233a37b47b3c6dbff69aeb2d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1cc56628b97b69fd624c18c627b8811e667a47053a80737932924a4fb5079c67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1cc56628b97b69fd624c18c627b8811e667a47053a80737932924a4fb5079c67->enter($__internal_1cc56628b97b69fd624c18c627b8811e667a47053a80737932924a4fb5079c67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ec1de55d2fb70968fb5eae2a49366d7064f147173093946d078c6ddef8a9a249 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec1de55d2fb70968fb5eae2a49366d7064f147173093946d078c6ddef8a9a249->enter($__internal_ec1de55d2fb70968fb5eae2a49366d7064f147173093946d078c6ddef8a9a249_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tInscription Préparation - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_ec1de55d2fb70968fb5eae2a49366d7064f147173093946d078c6ddef8a9a249->leave($__internal_ec1de55d2fb70968fb5eae2a49366d7064f147173093946d078c6ddef8a9a249_prof);

        
        $__internal_1cc56628b97b69fd624c18c627b8811e667a47053a80737932924a4fb5079c67->leave($__internal_1cc56628b97b69fd624c18c627b8811e667a47053a80737932924a4fb5079c67_prof);

    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_9458b81f290b8ec49aded8860779867ef4d54a70b2e78a12eb512d1c851cecdb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9458b81f290b8ec49aded8860779867ef4d54a70b2e78a12eb512d1c851cecdb->enter($__internal_9458b81f290b8ec49aded8860779867ef4d54a70b2e78a12eb512d1c851cecdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_f0dae85c11386ddda24b4bda3dec84d4f2a5208f00af0561fcdae833b0c6b4bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0dae85c11386ddda24b4bda3dec84d4f2a5208f00af0561fcdae833b0c6b4bf->enter($__internal_f0dae85c11386ddda24b4bda3dec84d4f2a5208f00af0561fcdae833b0c6b4bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 8
        echo "\t<ol class=\"breadcrumb\">
\t\t<li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_monProfil");
        echo "\">Home</a></li>
\t\t<li class=\"active\">Inscription</li>
\t</ol>
";
        
        $__internal_f0dae85c11386ddda24b4bda3dec84d4f2a5208f00af0561fcdae833b0c6b4bf->leave($__internal_f0dae85c11386ddda24b4bda3dec84d4f2a5208f00af0561fcdae833b0c6b4bf_prof);

        
        $__internal_9458b81f290b8ec49aded8860779867ef4d54a70b2e78a12eb512d1c851cecdb->leave($__internal_9458b81f290b8ec49aded8860779867ef4d54a70b2e78a12eb512d1c851cecdb_prof);

    }

    // line 14
    public function block_Content($context, array $blocks = array())
    {
        $__internal_bb3c07896f216c07e62ca877988287e6fea3202502b7b4a2e7fa4ecf8c95ed18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb3c07896f216c07e62ca877988287e6fea3202502b7b4a2e7fa4ecf8c95ed18->enter($__internal_bb3c07896f216c07e62ca877988287e6fea3202502b7b4a2e7fa4ecf8c95ed18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_39cbf3ca009ce106f5440a3087ca9e133db05a854620f20baf26ccfc078370fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39cbf3ca009ce106f5440a3087ca9e133db05a854620f20baf26ccfc078370fb->enter($__internal_39cbf3ca009ce106f5440a3087ca9e133db05a854620f20baf26ccfc078370fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

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
        
        $__internal_39cbf3ca009ce106f5440a3087ca9e133db05a854620f20baf26ccfc078370fb->leave($__internal_39cbf3ca009ce106f5440a3087ca9e133db05a854620f20baf26ccfc078370fb_prof);

        
        $__internal_bb3c07896f216c07e62ca877988287e6fea3202502b7b4a2e7fa4ecf8c95ed18->leave($__internal_bb3c07896f216c07e62ca877988287e6fea3202502b7b4a2e7fa4ecf8c95ed18_prof);

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
