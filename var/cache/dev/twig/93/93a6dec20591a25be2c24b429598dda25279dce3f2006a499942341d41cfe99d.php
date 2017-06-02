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
        $__internal_9a08ab3ef84afacf918df2a8c4f4de2a028d28d609f3ab737e4b859270901f46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a08ab3ef84afacf918df2a8c4f4de2a028d28d609f3ab737e4b859270901f46->enter($__internal_9a08ab3ef84afacf918df2a8c4f4de2a028d28d609f3ab737e4b859270901f46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:back:preparationOne.html.twig"));

        $__internal_c37cfff2b3734d97d7460946cf35ff81d647a09aa8a9d0ad3ca43db71d728343 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c37cfff2b3734d97d7460946cf35ff81d647a09aa8a9d0ad3ca43db71d728343->enter($__internal_c37cfff2b3734d97d7460946cf35ff81d647a09aa8a9d0ad3ca43db71d728343_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:back:preparationOne.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9a08ab3ef84afacf918df2a8c4f4de2a028d28d609f3ab737e4b859270901f46->leave($__internal_9a08ab3ef84afacf918df2a8c4f4de2a028d28d609f3ab737e4b859270901f46_prof);

        
        $__internal_c37cfff2b3734d97d7460946cf35ff81d647a09aa8a9d0ad3ca43db71d728343->leave($__internal_c37cfff2b3734d97d7460946cf35ff81d647a09aa8a9d0ad3ca43db71d728343_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5d69b8057e66b6df3f33a4b43f328d3fcd3e532d84474fbb44b4f31485ae601b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d69b8057e66b6df3f33a4b43f328d3fcd3e532d84474fbb44b4f31485ae601b->enter($__internal_5d69b8057e66b6df3f33a4b43f328d3fcd3e532d84474fbb44b4f31485ae601b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_463b0df947aa3cb3e8211b06c20203ccd52189085df787acd249de5fdbd96b6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_463b0df947aa3cb3e8211b06c20203ccd52189085df787acd249de5fdbd96b6f->enter($__internal_463b0df947aa3cb3e8211b06c20203ccd52189085df787acd249de5fdbd96b6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tInscription Préparation - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_463b0df947aa3cb3e8211b06c20203ccd52189085df787acd249de5fdbd96b6f->leave($__internal_463b0df947aa3cb3e8211b06c20203ccd52189085df787acd249de5fdbd96b6f_prof);

        
        $__internal_5d69b8057e66b6df3f33a4b43f328d3fcd3e532d84474fbb44b4f31485ae601b->leave($__internal_5d69b8057e66b6df3f33a4b43f328d3fcd3e532d84474fbb44b4f31485ae601b_prof);

    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_def0c7f097c0c3bacdf8208bad41864a433575d924622d4ae3e70363d568399d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_def0c7f097c0c3bacdf8208bad41864a433575d924622d4ae3e70363d568399d->enter($__internal_def0c7f097c0c3bacdf8208bad41864a433575d924622d4ae3e70363d568399d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_8a16eacfd18f52b2ca8bfc13a38ac157f96686ea417766e7469d3c2bf4259cf5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a16eacfd18f52b2ca8bfc13a38ac157f96686ea417766e7469d3c2bf4259cf5->enter($__internal_8a16eacfd18f52b2ca8bfc13a38ac157f96686ea417766e7469d3c2bf4259cf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 8
        echo "\t<ol class=\"breadcrumb\">
\t\t<li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_monProfil");
        echo "\">Home</a></li>
\t\t<li class=\"active\">Inscription</li>
\t</ol>
";
        
        $__internal_8a16eacfd18f52b2ca8bfc13a38ac157f96686ea417766e7469d3c2bf4259cf5->leave($__internal_8a16eacfd18f52b2ca8bfc13a38ac157f96686ea417766e7469d3c2bf4259cf5_prof);

        
        $__internal_def0c7f097c0c3bacdf8208bad41864a433575d924622d4ae3e70363d568399d->leave($__internal_def0c7f097c0c3bacdf8208bad41864a433575d924622d4ae3e70363d568399d_prof);

    }

    // line 14
    public function block_Content($context, array $blocks = array())
    {
        $__internal_af8b32704af755f6f749c55909a24ef77aa985c7f1c5939180454448c6e09632 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af8b32704af755f6f749c55909a24ef77aa985c7f1c5939180454448c6e09632->enter($__internal_af8b32704af755f6f749c55909a24ef77aa985c7f1c5939180454448c6e09632_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_2f0533575e0aa6b276da7e34ceacfa492a095863b6264a61b1654095e73f46a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f0533575e0aa6b276da7e34ceacfa492a095863b6264a61b1654095e73f46a1->enter($__internal_2f0533575e0aa6b276da7e34ceacfa492a095863b6264a61b1654095e73f46a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

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
        
        $__internal_2f0533575e0aa6b276da7e34ceacfa492a095863b6264a61b1654095e73f46a1->leave($__internal_2f0533575e0aa6b276da7e34ceacfa492a095863b6264a61b1654095e73f46a1_prof);

        
        $__internal_af8b32704af755f6f749c55909a24ef77aa985c7f1c5939180454448c6e09632->leave($__internal_af8b32704af755f6f749c55909a24ef77aa985c7f1c5939180454448c6e09632_prof);

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
