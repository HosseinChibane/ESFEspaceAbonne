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
        $__internal_d704b55fe118d35b4b2e3a0daffe5bbbdce3d6e9c42a225f54975728d208dd8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d704b55fe118d35b4b2e3a0daffe5bbbdce3d6e9c42a225f54975728d208dd8b->enter($__internal_d704b55fe118d35b4b2e3a0daffe5bbbdce3d6e9c42a225f54975728d208dd8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:back:logementOne.html.twig"));

        $__internal_1ca2566c0f99a280dc80f2dadb758105fbad92a8472cbd9dbea254bef536a38f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ca2566c0f99a280dc80f2dadb758105fbad92a8472cbd9dbea254bef536a38f->enter($__internal_1ca2566c0f99a280dc80f2dadb758105fbad92a8472cbd9dbea254bef536a38f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:back:logementOne.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d704b55fe118d35b4b2e3a0daffe5bbbdce3d6e9c42a225f54975728d208dd8b->leave($__internal_d704b55fe118d35b4b2e3a0daffe5bbbdce3d6e9c42a225f54975728d208dd8b_prof);

        
        $__internal_1ca2566c0f99a280dc80f2dadb758105fbad92a8472cbd9dbea254bef536a38f->leave($__internal_1ca2566c0f99a280dc80f2dadb758105fbad92a8472cbd9dbea254bef536a38f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3602760b9645ed7aefac1d5bc8d6ad96d79fbdec9d3fcaa0a708da7d3e9a5820 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3602760b9645ed7aefac1d5bc8d6ad96d79fbdec9d3fcaa0a708da7d3e9a5820->enter($__internal_3602760b9645ed7aefac1d5bc8d6ad96d79fbdec9d3fcaa0a708da7d3e9a5820_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_85dae860805e356a4655009741a7876617043e00eae1af2fe5338b1d56a1196a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85dae860805e356a4655009741a7876617043e00eae1af2fe5338b1d56a1196a->enter($__internal_85dae860805e356a4655009741a7876617043e00eae1af2fe5338b1d56a1196a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tInscription logement - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_85dae860805e356a4655009741a7876617043e00eae1af2fe5338b1d56a1196a->leave($__internal_85dae860805e356a4655009741a7876617043e00eae1af2fe5338b1d56a1196a_prof);

        
        $__internal_3602760b9645ed7aefac1d5bc8d6ad96d79fbdec9d3fcaa0a708da7d3e9a5820->leave($__internal_3602760b9645ed7aefac1d5bc8d6ad96d79fbdec9d3fcaa0a708da7d3e9a5820_prof);

    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_bd99530e8eca802c2c40fca8366014243e026f2e711bb63ee8bbd0374bd8d5be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd99530e8eca802c2c40fca8366014243e026f2e711bb63ee8bbd0374bd8d5be->enter($__internal_bd99530e8eca802c2c40fca8366014243e026f2e711bb63ee8bbd0374bd8d5be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_97818e61b8a9ae69c743f1fe87bfb0fd38aa73e8483a0d62989a346d98e82fa5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97818e61b8a9ae69c743f1fe87bfb0fd38aa73e8483a0d62989a346d98e82fa5->enter($__internal_97818e61b8a9ae69c743f1fe87bfb0fd38aa73e8483a0d62989a346d98e82fa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 8
        echo "    <ol class=\"breadcrumb\">
        <li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_monProfil");
        echo "\">Home</a></li>
        <li class=\"active\">Inscription</li>
    </ol>
";
        
        $__internal_97818e61b8a9ae69c743f1fe87bfb0fd38aa73e8483a0d62989a346d98e82fa5->leave($__internal_97818e61b8a9ae69c743f1fe87bfb0fd38aa73e8483a0d62989a346d98e82fa5_prof);

        
        $__internal_bd99530e8eca802c2c40fca8366014243e026f2e711bb63ee8bbd0374bd8d5be->leave($__internal_bd99530e8eca802c2c40fca8366014243e026f2e711bb63ee8bbd0374bd8d5be_prof);

    }

    // line 14
    public function block_Content($context, array $blocks = array())
    {
        $__internal_bea7bade2a0e35160b7c3dcd61315d327bc454c19c6d2ad3a7061dd275af1844 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bea7bade2a0e35160b7c3dcd61315d327bc454c19c6d2ad3a7061dd275af1844->enter($__internal_bea7bade2a0e35160b7c3dcd61315d327bc454c19c6d2ad3a7061dd275af1844_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_c96df8ba9d7caed1c7300b69b7a7f5efbbae3728636602b3b5169802f2895f61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c96df8ba9d7caed1c7300b69b7a7f5efbbae3728636602b3b5169802f2895f61->enter($__internal_c96df8ba9d7caed1c7300b69b7a7f5efbbae3728636602b3b5169802f2895f61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

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
        
        $__internal_c96df8ba9d7caed1c7300b69b7a7f5efbbae3728636602b3b5169802f2895f61->leave($__internal_c96df8ba9d7caed1c7300b69b7a7f5efbbae3728636602b3b5169802f2895f61_prof);

        
        $__internal_bea7bade2a0e35160b7c3dcd61315d327bc454c19c6d2ad3a7061dd275af1844->leave($__internal_bea7bade2a0e35160b7c3dcd61315d327bc454c19c6d2ad3a7061dd275af1844_prof);

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
