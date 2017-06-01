<?php

/* @ESFEspaceAbonne/back/logementThree.html.twig */
class __TwigTemplate_f05b0ac725769d3c2c4921fe4a4580025a1161d95976495349c4043420b1baf7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":backend:sidebar.html.twig", "@ESFEspaceAbonne/back/logementThree.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'Content' => array($this, 'block_Content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return ":backend:sidebar.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cb9058329d8412db9aa085f77a016a3d073efbdd7c17ec004d4f34fe9359cade = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb9058329d8412db9aa085f77a016a3d073efbdd7c17ec004d4f34fe9359cade->enter($__internal_cb9058329d8412db9aa085f77a016a3d073efbdd7c17ec004d4f34fe9359cade_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/back/logementThree.html.twig"));

        $__internal_e90e97a1bc3351bdd902b5859e6430e6947aefeaa81a2f036b9de50cbd758f61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e90e97a1bc3351bdd902b5859e6430e6947aefeaa81a2f036b9de50cbd758f61->enter($__internal_e90e97a1bc3351bdd902b5859e6430e6947aefeaa81a2f036b9de50cbd758f61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/back/logementThree.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cb9058329d8412db9aa085f77a016a3d073efbdd7c17ec004d4f34fe9359cade->leave($__internal_cb9058329d8412db9aa085f77a016a3d073efbdd7c17ec004d4f34fe9359cade_prof);

        
        $__internal_e90e97a1bc3351bdd902b5859e6430e6947aefeaa81a2f036b9de50cbd758f61->leave($__internal_e90e97a1bc3351bdd902b5859e6430e6947aefeaa81a2f036b9de50cbd758f61_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2eaba0753ed5680832cd8ddf3372248dd31eebc2cececd7af6fcd19e80678000 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2eaba0753ed5680832cd8ddf3372248dd31eebc2cececd7af6fcd19e80678000->enter($__internal_2eaba0753ed5680832cd8ddf3372248dd31eebc2cececd7af6fcd19e80678000_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_71a0b482bc8fdd612860f3c20ccac80841f52062b6b1d306fb1c3febba74ea3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71a0b482bc8fdd612860f3c20ccac80841f52062b6b1d306fb1c3febba74ea3c->enter($__internal_71a0b482bc8fdd612860f3c20ccac80841f52062b6b1d306fb1c3febba74ea3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tInscription logement - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_71a0b482bc8fdd612860f3c20ccac80841f52062b6b1d306fb1c3febba74ea3c->leave($__internal_71a0b482bc8fdd612860f3c20ccac80841f52062b6b1d306fb1c3febba74ea3c_prof);

        
        $__internal_2eaba0753ed5680832cd8ddf3372248dd31eebc2cececd7af6fcd19e80678000->leave($__internal_2eaba0753ed5680832cd8ddf3372248dd31eebc2cececd7af6fcd19e80678000_prof);

    }

    // line 7
    public function block_Content($context, array $blocks = array())
    {
        $__internal_11660c3bd11f2d59824025ffe14ed78098b4be553df2cf324aebb8559b7ef81f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11660c3bd11f2d59824025ffe14ed78098b4be553df2cf324aebb8559b7ef81f->enter($__internal_11660c3bd11f2d59824025ffe14ed78098b4be553df2cf324aebb8559b7ef81f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_efdb1a0305454d72fcfd6670054f5ab560f993a55c54341cdffaaa9cb860332e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efdb1a0305454d72fcfd6670054f5ab560f993a55c54341cdffaaa9cb860332e->enter($__internal_efdb1a0305454d72fcfd6670054f5ab560f993a55c54341cdffaaa9cb860332e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        echo " 
\t<div class=\"row\">
\t\t<div class=\"col-md-12\">
\t\t\t<h2>Etape 3</h2>
\t\t\t<p>Veuillez joindre le(s) PDF precedent afin de valider votre demande pour que nous puissions la prendre en compte.</p>         

\t\t\t";
        // line 13
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "

\t\t\t";
        // line 15
        if ( !$this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "valid", array())) {
            // line 16
            echo "\t\t\t\t<div class=\"alert alert-error\">
\t\t\t\t\t";
            // line 17
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            echo "
\t\t\t\t</div>
\t\t\t";
        }
        // line 20
        echo "
\t\t\t<div class=\"form-group\">
\t\t\t\t";
        // line 22
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "documentinscription", array()), "nom", array()), 'label', array("label" => "Document d'Inscription"));
        echo "
\t\t\t\t";
        // line 23
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "documentinscription", array()), "nom", array()), 'widget');
        echo "
\t\t\t</div>

\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "documentinscription", array()), "pdfFile", array()), 'widget');
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<a class=\"btn btn-danger\" href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_logementStepsOne");
        echo "\">Retour à l'étape 1</a>
\t\t\t\t\t\t";
        // line 38
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "documentinscription", array()), "Enregistrer", array()), 'widget');
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t";
        // line 44
        echo "\t\t\t";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "

\t\t\t";
        // line 46
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end', array("render_rest" => false));
        echo "
\t\t</div>
\t</div>

";
        
        $__internal_efdb1a0305454d72fcfd6670054f5ab560f993a55c54341cdffaaa9cb860332e->leave($__internal_efdb1a0305454d72fcfd6670054f5ab560f993a55c54341cdffaaa9cb860332e_prof);

        
        $__internal_11660c3bd11f2d59824025ffe14ed78098b4be553df2cf324aebb8559b7ef81f->leave($__internal_11660c3bd11f2d59824025ffe14ed78098b4be553df2cf324aebb8559b7ef81f_prof);

    }

    public function getTemplateName()
    {
        return "@ESFEspaceAbonne/back/logementThree.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 46,  135 => 44,  127 => 38,  123 => 37,  112 => 29,  103 => 23,  99 => 22,  95 => 20,  89 => 17,  86 => 16,  84 => 15,  79 => 13,  63 => 7,  50 => 4,  41 => 3,  11 => 1,);
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

{% block Content %} 
\t<div class=\"row\">
\t\t<div class=\"col-md-12\">
\t\t\t<h2>Etape 3</h2>
\t\t\t<p>Veuillez joindre le(s) PDF precedent afin de valider votre demande pour que nous puissions la prendre en compte.</p>         

\t\t\t{{ form_start(form) }}

\t\t\t{% if not form.vars.valid %}
\t\t\t\t<div class=\"alert alert-error\">
\t\t\t\t\t{{ form_errors(form) }}
\t\t\t\t</div>
\t\t\t{% endif %}

\t\t\t<div class=\"form-group\">
\t\t\t\t{{ form_label(form.documentinscription.nom, 'Document d\\'Inscription') }}
\t\t\t\t{{ form_widget(form.documentinscription.nom) }}
\t\t\t</div>

\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t{{ form_widget(form.documentinscription.pdfFile) }}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<a class=\"btn btn-danger\" href=\"{{ path('esf_espace_abonne_logementStepsOne') }}\">Retour à l'étape 1</a>
\t\t\t\t\t\t{{ form_widget(form.documentinscription.Enregistrer) }}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t{# Token CSRF #}
\t\t\t{{ form_widget(form._token) }}

\t\t\t{{ form_end(form, {'render_rest': false }) }}
\t\t</div>
\t</div>

{% endblock %}", "@ESFEspaceAbonne/back/logementThree.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\src\\ESF\\EspaceAbonneBundle\\Resources\\views\\back\\logementThree.html.twig");
    }
}
