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
        $__internal_9a0a2f7b382664a116b57d6ce0ccb26d257c4fe35333850661dad3e7269859d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a0a2f7b382664a116b57d6ce0ccb26d257c4fe35333850661dad3e7269859d1->enter($__internal_9a0a2f7b382664a116b57d6ce0ccb26d257c4fe35333850661dad3e7269859d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:back:logementOne.html.twig"));

        $__internal_168d74108a9f50c1fed5ac28d503f2ca1365189f8b1c9db3bd83e3deecf1be3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_168d74108a9f50c1fed5ac28d503f2ca1365189f8b1c9db3bd83e3deecf1be3e->enter($__internal_168d74108a9f50c1fed5ac28d503f2ca1365189f8b1c9db3bd83e3deecf1be3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:back:logementOne.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9a0a2f7b382664a116b57d6ce0ccb26d257c4fe35333850661dad3e7269859d1->leave($__internal_9a0a2f7b382664a116b57d6ce0ccb26d257c4fe35333850661dad3e7269859d1_prof);

        
        $__internal_168d74108a9f50c1fed5ac28d503f2ca1365189f8b1c9db3bd83e3deecf1be3e->leave($__internal_168d74108a9f50c1fed5ac28d503f2ca1365189f8b1c9db3bd83e3deecf1be3e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0144d7eaefc9e0f3c0a3d64faf0aef6fbdb1dd94f888c327491adf172c0f7ae4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0144d7eaefc9e0f3c0a3d64faf0aef6fbdb1dd94f888c327491adf172c0f7ae4->enter($__internal_0144d7eaefc9e0f3c0a3d64faf0aef6fbdb1dd94f888c327491adf172c0f7ae4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3688d7ffb949a7772cf1fb6152d0d59ef6cea03c76b89b80a07c334eac1a7f89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3688d7ffb949a7772cf1fb6152d0d59ef6cea03c76b89b80a07c334eac1a7f89->enter($__internal_3688d7ffb949a7772cf1fb6152d0d59ef6cea03c76b89b80a07c334eac1a7f89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tInscription logement - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_3688d7ffb949a7772cf1fb6152d0d59ef6cea03c76b89b80a07c334eac1a7f89->leave($__internal_3688d7ffb949a7772cf1fb6152d0d59ef6cea03c76b89b80a07c334eac1a7f89_prof);

        
        $__internal_0144d7eaefc9e0f3c0a3d64faf0aef6fbdb1dd94f888c327491adf172c0f7ae4->leave($__internal_0144d7eaefc9e0f3c0a3d64faf0aef6fbdb1dd94f888c327491adf172c0f7ae4_prof);

    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_4111748c2071a003482e41ca458daa8691a580fff202dfeebd30493c9e9385c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4111748c2071a003482e41ca458daa8691a580fff202dfeebd30493c9e9385c5->enter($__internal_4111748c2071a003482e41ca458daa8691a580fff202dfeebd30493c9e9385c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_1cd3e26552c0afc250e2e84a185d70382193d69fdceac22d92cdf37f5f1c4d78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cd3e26552c0afc250e2e84a185d70382193d69fdceac22d92cdf37f5f1c4d78->enter($__internal_1cd3e26552c0afc250e2e84a185d70382193d69fdceac22d92cdf37f5f1c4d78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 8
        echo "\t<ol class=\"breadcrumb\">
\t\t<li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_monProfil");
        echo "\">Home</a></li>
\t\t<li class=\"active\">Inscription</li>
\t</ol>
";
        
        $__internal_1cd3e26552c0afc250e2e84a185d70382193d69fdceac22d92cdf37f5f1c4d78->leave($__internal_1cd3e26552c0afc250e2e84a185d70382193d69fdceac22d92cdf37f5f1c4d78_prof);

        
        $__internal_4111748c2071a003482e41ca458daa8691a580fff202dfeebd30493c9e9385c5->leave($__internal_4111748c2071a003482e41ca458daa8691a580fff202dfeebd30493c9e9385c5_prof);

    }

    // line 14
    public function block_Content($context, array $blocks = array())
    {
        $__internal_a12b36ac0fd844311d4281179815e70a558594c6f828172ab951bcd37feef324 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a12b36ac0fd844311d4281179815e70a558594c6f828172ab951bcd37feef324->enter($__internal_a12b36ac0fd844311d4281179815e70a558594c6f828172ab951bcd37feef324_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_c6e385a0ae3ba62f0f6ae6923f9af0d611bc0a128c50920d4464f61efee25ca0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6e385a0ae3ba62f0f6ae6923f9af0d611bc0a128c50920d4464f61efee25ca0->enter($__internal_c6e385a0ae3ba62f0f6ae6923f9af0d611bc0a128c50920d4464f61efee25ca0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

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
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "type", array()), 'label', array("label" => "Type de logement"));
        echo "
\t\t\t\t";
        // line 28
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "type", array()), 'errors');
        echo "
\t\t\t\t";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "type", array()), 'widget');
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

\t\t\t\t";
        // line 35
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "raisonsocial", array()), 'label', array("label" => "Partenaire"));
        echo "
\t\t\t\t";
        // line 36
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "raisonsocial", array()), 'errors');
        echo "
\t\t\t\t";
        // line 37
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "raisonsocial", array()), 'widget');
        echo "

\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t";
        // line 43
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "reinitialiser", array()), 'widget');
        echo "
\t\t\t\t\t\t";
        // line 44
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "rechercher", array()), 'widget');
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        // line 49
        echo "\t\t\t";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "

\t\t\t";
        // line 51
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end', array("render_rest" => false));
        echo "
\t\t</div>
\t</div>
";
        
        $__internal_c6e385a0ae3ba62f0f6ae6923f9af0d611bc0a128c50920d4464f61efee25ca0->leave($__internal_c6e385a0ae3ba62f0f6ae6923f9af0d611bc0a128c50920d4464f61efee25ca0_prof);

        
        $__internal_a12b36ac0fd844311d4281179815e70a558594c6f828172ab951bcd37feef324->leave($__internal_a12b36ac0fd844311d4281179815e70a558594c6f828172ab951bcd37feef324_prof);

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
        return array (  184 => 51,  178 => 49,  171 => 44,  167 => 43,  158 => 37,  154 => 36,  150 => 35,  145 => 33,  141 => 32,  137 => 31,  132 => 29,  128 => 28,  124 => 27,  120 => 25,  114 => 22,  111 => 21,  109 => 20,  105 => 19,  90 => 14,  76 => 9,  73 => 8,  64 => 7,  51 => 4,  42 => 3,  11 => 1,);
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

\t\t\t\t{{ form_label(form.type, 'Type de logement') }}
\t\t\t\t{{ form_errors(form.type) }}
\t\t\t\t{{ form_widget(form.type) }}

\t\t\t\t{{ form_label(form.nometablissement, 'Université') }}
\t\t\t\t{{ form_errors(form.nometablissement) }}
\t\t\t\t{{ form_widget(form.nometablissement) }}

\t\t\t\t{{ form_label(form.raisonsocial, 'Partenaire') }}
\t\t\t\t{{ form_errors(form.raisonsocial) }}
\t\t\t\t{{ form_widget(form.raisonsocial) }}

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
