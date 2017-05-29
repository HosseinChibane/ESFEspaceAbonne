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
        $__internal_2d8c5ca1a189bcbd4ea19dab7c93db7e83bede820a478f21fa6ab9ec2d552998 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d8c5ca1a189bcbd4ea19dab7c93db7e83bede820a478f21fa6ab9ec2d552998->enter($__internal_2d8c5ca1a189bcbd4ea19dab7c93db7e83bede820a478f21fa6ab9ec2d552998_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:back:logementOne.html.twig"));

        $__internal_fe5e788df51d74b6b409b0127a78905b36cbce46556cb7f93d9862f0f0eac09b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe5e788df51d74b6b409b0127a78905b36cbce46556cb7f93d9862f0f0eac09b->enter($__internal_fe5e788df51d74b6b409b0127a78905b36cbce46556cb7f93d9862f0f0eac09b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:back:logementOne.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2d8c5ca1a189bcbd4ea19dab7c93db7e83bede820a478f21fa6ab9ec2d552998->leave($__internal_2d8c5ca1a189bcbd4ea19dab7c93db7e83bede820a478f21fa6ab9ec2d552998_prof);

        
        $__internal_fe5e788df51d74b6b409b0127a78905b36cbce46556cb7f93d9862f0f0eac09b->leave($__internal_fe5e788df51d74b6b409b0127a78905b36cbce46556cb7f93d9862f0f0eac09b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_943c62ebeeda15174f72fd95ef297575dd09f8adffc7c7eb6465c73130193142 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_943c62ebeeda15174f72fd95ef297575dd09f8adffc7c7eb6465c73130193142->enter($__internal_943c62ebeeda15174f72fd95ef297575dd09f8adffc7c7eb6465c73130193142_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_46bf1ffcb949fd6ce3bec60f2e065104258876392f542f2b9a6540f172b6fd82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46bf1ffcb949fd6ce3bec60f2e065104258876392f542f2b9a6540f172b6fd82->enter($__internal_46bf1ffcb949fd6ce3bec60f2e065104258876392f542f2b9a6540f172b6fd82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tInscription logement - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_46bf1ffcb949fd6ce3bec60f2e065104258876392f542f2b9a6540f172b6fd82->leave($__internal_46bf1ffcb949fd6ce3bec60f2e065104258876392f542f2b9a6540f172b6fd82_prof);

        
        $__internal_943c62ebeeda15174f72fd95ef297575dd09f8adffc7c7eb6465c73130193142->leave($__internal_943c62ebeeda15174f72fd95ef297575dd09f8adffc7c7eb6465c73130193142_prof);

    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_f326fdc8b87165b199df5c8e0f34efa119eb377bc894c889e52fa431bb7db3c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f326fdc8b87165b199df5c8e0f34efa119eb377bc894c889e52fa431bb7db3c2->enter($__internal_f326fdc8b87165b199df5c8e0f34efa119eb377bc894c889e52fa431bb7db3c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_5b272619666fa5b110d4f7da2ec58be88b42ef92027d7fc246c8fd82f594d7a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b272619666fa5b110d4f7da2ec58be88b42ef92027d7fc246c8fd82f594d7a3->enter($__internal_5b272619666fa5b110d4f7da2ec58be88b42ef92027d7fc246c8fd82f594d7a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 8
        echo "    <ol class=\"breadcrumb\">
        <li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_monProfil");
        echo "\">Home</a></li>
        <li class=\"active\">Inscription</li>
    </ol>
";
        
        $__internal_5b272619666fa5b110d4f7da2ec58be88b42ef92027d7fc246c8fd82f594d7a3->leave($__internal_5b272619666fa5b110d4f7da2ec58be88b42ef92027d7fc246c8fd82f594d7a3_prof);

        
        $__internal_f326fdc8b87165b199df5c8e0f34efa119eb377bc894c889e52fa431bb7db3c2->leave($__internal_f326fdc8b87165b199df5c8e0f34efa119eb377bc894c889e52fa431bb7db3c2_prof);

    }

    // line 14
    public function block_Content($context, array $blocks = array())
    {
        $__internal_4f798c95554fbe92b01ad318aad0539c32d720cace6be902810d2eed5b8cd075 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f798c95554fbe92b01ad318aad0539c32d720cace6be902810d2eed5b8cd075->enter($__internal_4f798c95554fbe92b01ad318aad0539c32d720cace6be902810d2eed5b8cd075_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_07a87023fb63b2a3225757f7d0b532cf77a04b8e0cb8efa22fa69212c5d61548 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07a87023fb63b2a3225757f7d0b532cf77a04b8e0cb8efa22fa69212c5d61548->enter($__internal_07a87023fb63b2a3225757f7d0b532cf77a04b8e0cb8efa22fa69212c5d61548_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

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
        
        $__internal_07a87023fb63b2a3225757f7d0b532cf77a04b8e0cb8efa22fa69212c5d61548->leave($__internal_07a87023fb63b2a3225757f7d0b532cf77a04b8e0cb8efa22fa69212c5d61548_prof);

        
        $__internal_4f798c95554fbe92b01ad318aad0539c32d720cace6be902810d2eed5b8cd075->leave($__internal_4f798c95554fbe92b01ad318aad0539c32d720cace6be902810d2eed5b8cd075_prof);

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
