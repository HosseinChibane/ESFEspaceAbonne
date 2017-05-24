<?php

/* @ESFEspaceAbonne/Default/logementOne.html.twig */
class __TwigTemplate_ec7334484d09f236c836d2d4eacf67a7085d3f3aab3e766bd26da01e845bb330 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":backend:sidebar.html.twig", "@ESFEspaceAbonne/Default/logementOne.html.twig", 1);
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
        $__internal_fbaa5ba70507294573a75a854646d390bc3a8e44bbffd6bcf68e86115cae1408 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbaa5ba70507294573a75a854646d390bc3a8e44bbffd6bcf68e86115cae1408->enter($__internal_fbaa5ba70507294573a75a854646d390bc3a8e44bbffd6bcf68e86115cae1408_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/Default/logementOne.html.twig"));

        $__internal_041a15403d652b5dcc530ddd9c1d7ffbfa6189ec39e3e7d20adafadec264ca75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_041a15403d652b5dcc530ddd9c1d7ffbfa6189ec39e3e7d20adafadec264ca75->enter($__internal_041a15403d652b5dcc530ddd9c1d7ffbfa6189ec39e3e7d20adafadec264ca75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/Default/logementOne.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fbaa5ba70507294573a75a854646d390bc3a8e44bbffd6bcf68e86115cae1408->leave($__internal_fbaa5ba70507294573a75a854646d390bc3a8e44bbffd6bcf68e86115cae1408_prof);

        
        $__internal_041a15403d652b5dcc530ddd9c1d7ffbfa6189ec39e3e7d20adafadec264ca75->leave($__internal_041a15403d652b5dcc530ddd9c1d7ffbfa6189ec39e3e7d20adafadec264ca75_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e9bbe91b4131701ff762c0e266f62fd33df4e741efd7dd196f8706eed78549a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9bbe91b4131701ff762c0e266f62fd33df4e741efd7dd196f8706eed78549a5->enter($__internal_e9bbe91b4131701ff762c0e266f62fd33df4e741efd7dd196f8706eed78549a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1dc624d8b5b7296375d4e8eff67213c548c4189570ef86bbc091d4400163bec9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1dc624d8b5b7296375d4e8eff67213c548c4189570ef86bbc091d4400163bec9->enter($__internal_1dc624d8b5b7296375d4e8eff67213c548c4189570ef86bbc091d4400163bec9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tInscription logement - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_1dc624d8b5b7296375d4e8eff67213c548c4189570ef86bbc091d4400163bec9->leave($__internal_1dc624d8b5b7296375d4e8eff67213c548c4189570ef86bbc091d4400163bec9_prof);

        
        $__internal_e9bbe91b4131701ff762c0e266f62fd33df4e741efd7dd196f8706eed78549a5->leave($__internal_e9bbe91b4131701ff762c0e266f62fd33df4e741efd7dd196f8706eed78549a5_prof);

    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_e20ffa2c3b919c46f8ef18e30f2ba49f6d9f96daa9afb3d2becaeca9f464c953 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e20ffa2c3b919c46f8ef18e30f2ba49f6d9f96daa9afb3d2becaeca9f464c953->enter($__internal_e20ffa2c3b919c46f8ef18e30f2ba49f6d9f96daa9afb3d2becaeca9f464c953_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_9e1c379d9e326aaa7766f77a1878094e7672f56b900c0daa09e07c4c787cea3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e1c379d9e326aaa7766f77a1878094e7672f56b900c0daa09e07c4c787cea3d->enter($__internal_9e1c379d9e326aaa7766f77a1878094e7672f56b900c0daa09e07c4c787cea3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 8
        echo "    <ol class=\"breadcrumb\">
        <li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_monProfil");
        echo "\">Home</a></li>
        <li class=\"active\">Inscription</li>
    </ol>
";
        
        $__internal_9e1c379d9e326aaa7766f77a1878094e7672f56b900c0daa09e07c4c787cea3d->leave($__internal_9e1c379d9e326aaa7766f77a1878094e7672f56b900c0daa09e07c4c787cea3d_prof);

        
        $__internal_e20ffa2c3b919c46f8ef18e30f2ba49f6d9f96daa9afb3d2becaeca9f464c953->leave($__internal_e20ffa2c3b919c46f8ef18e30f2ba49f6d9f96daa9afb3d2becaeca9f464c953_prof);

    }

    // line 14
    public function block_Content($context, array $blocks = array())
    {
        $__internal_cd3130060a3c99e15a70f592e31fcbee3be79af1c90dad055effc7f2729db5a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd3130060a3c99e15a70f592e31fcbee3be79af1c90dad055effc7f2729db5a7->enter($__internal_cd3130060a3c99e15a70f592e31fcbee3be79af1c90dad055effc7f2729db5a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_e77fe002fcb773cef23e3f33ceb20e2009e4555876876d11849465a51b1ddd24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e77fe002fcb773cef23e3f33ceb20e2009e4555876876d11849465a51b1ddd24->enter($__internal_e77fe002fcb773cef23e3f33ceb20e2009e4555876876d11849465a51b1ddd24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

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
        
        $__internal_e77fe002fcb773cef23e3f33ceb20e2009e4555876876d11849465a51b1ddd24->leave($__internal_e77fe002fcb773cef23e3f33ceb20e2009e4555876876d11849465a51b1ddd24_prof);

        
        $__internal_cd3130060a3c99e15a70f592e31fcbee3be79af1c90dad055effc7f2729db5a7->leave($__internal_cd3130060a3c99e15a70f592e31fcbee3be79af1c90dad055effc7f2729db5a7_prof);

    }

    public function getTemplateName()
    {
        return "@ESFEspaceAbonne/Default/logementOne.html.twig";
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
{% endblock %}", "@ESFEspaceAbonne/Default/logementOne.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\src\\ESF\\EspaceAbonneBundle\\Resources\\views\\Default\\logementOne.html.twig");
    }
}
