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
        $__internal_51e29c6ba6aa74547655d71a482234549b8ba32c08eb7720d380603eebe654ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51e29c6ba6aa74547655d71a482234549b8ba32c08eb7720d380603eebe654ec->enter($__internal_51e29c6ba6aa74547655d71a482234549b8ba32c08eb7720d380603eebe654ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/back/preparationOne.html.twig"));

        $__internal_f23234d1c00087f765a611c96dfe4b1b6253f218b4a33d7ad9a0c9656da67b90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f23234d1c00087f765a611c96dfe4b1b6253f218b4a33d7ad9a0c9656da67b90->enter($__internal_f23234d1c00087f765a611c96dfe4b1b6253f218b4a33d7ad9a0c9656da67b90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/back/preparationOne.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_51e29c6ba6aa74547655d71a482234549b8ba32c08eb7720d380603eebe654ec->leave($__internal_51e29c6ba6aa74547655d71a482234549b8ba32c08eb7720d380603eebe654ec_prof);

        
        $__internal_f23234d1c00087f765a611c96dfe4b1b6253f218b4a33d7ad9a0c9656da67b90->leave($__internal_f23234d1c00087f765a611c96dfe4b1b6253f218b4a33d7ad9a0c9656da67b90_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e917c1c7a01c600a3a505edb29c22f54b97c01cda07e0929009bffdebed41121 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e917c1c7a01c600a3a505edb29c22f54b97c01cda07e0929009bffdebed41121->enter($__internal_e917c1c7a01c600a3a505edb29c22f54b97c01cda07e0929009bffdebed41121_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_810324291588dd3e88e06451500738666c6fb123bb8d74b63644e021a1ea8a8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_810324291588dd3e88e06451500738666c6fb123bb8d74b63644e021a1ea8a8a->enter($__internal_810324291588dd3e88e06451500738666c6fb123bb8d74b63644e021a1ea8a8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tInscription Préparation - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_810324291588dd3e88e06451500738666c6fb123bb8d74b63644e021a1ea8a8a->leave($__internal_810324291588dd3e88e06451500738666c6fb123bb8d74b63644e021a1ea8a8a_prof);

        
        $__internal_e917c1c7a01c600a3a505edb29c22f54b97c01cda07e0929009bffdebed41121->leave($__internal_e917c1c7a01c600a3a505edb29c22f54b97c01cda07e0929009bffdebed41121_prof);

    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_3d6c2bacd32b1e4f66566fd67dee52968c4d77fc0e0d306fc46ac92d82ebc532 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d6c2bacd32b1e4f66566fd67dee52968c4d77fc0e0d306fc46ac92d82ebc532->enter($__internal_3d6c2bacd32b1e4f66566fd67dee52968c4d77fc0e0d306fc46ac92d82ebc532_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_a2757487afa20725ed57c8d13eb10c19294dd4b600700a0d66b9f2e61daacb3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2757487afa20725ed57c8d13eb10c19294dd4b600700a0d66b9f2e61daacb3d->enter($__internal_a2757487afa20725ed57c8d13eb10c19294dd4b600700a0d66b9f2e61daacb3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 8
        echo "\t<ol class=\"breadcrumb\">
\t\t<li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_monProfil");
        echo "\">Home</a></li>
\t\t<li class=\"active\">Inscription</li>
\t</ol>
";
        
        $__internal_a2757487afa20725ed57c8d13eb10c19294dd4b600700a0d66b9f2e61daacb3d->leave($__internal_a2757487afa20725ed57c8d13eb10c19294dd4b600700a0d66b9f2e61daacb3d_prof);

        
        $__internal_3d6c2bacd32b1e4f66566fd67dee52968c4d77fc0e0d306fc46ac92d82ebc532->leave($__internal_3d6c2bacd32b1e4f66566fd67dee52968c4d77fc0e0d306fc46ac92d82ebc532_prof);

    }

    // line 14
    public function block_Content($context, array $blocks = array())
    {
        $__internal_4c2e9fe30435f8440debc50f7bd940a7efcc3578be0cf540cf6459b5139c888d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c2e9fe30435f8440debc50f7bd940a7efcc3578be0cf540cf6459b5139c888d->enter($__internal_4c2e9fe30435f8440debc50f7bd940a7efcc3578be0cf540cf6459b5139c888d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_f12116809dc9e6f83dd78b70b79d187828a5307578f5c9c52ec0bdcd267ee2e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f12116809dc9e6f83dd78b70b79d187828a5307578f5c9c52ec0bdcd267ee2e9->enter($__internal_f12116809dc9e6f83dd78b70b79d187828a5307578f5c9c52ec0bdcd267ee2e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

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
        
        $__internal_f12116809dc9e6f83dd78b70b79d187828a5307578f5c9c52ec0bdcd267ee2e9->leave($__internal_f12116809dc9e6f83dd78b70b79d187828a5307578f5c9c52ec0bdcd267ee2e9_prof);

        
        $__internal_4c2e9fe30435f8440debc50f7bd940a7efcc3578be0cf540cf6459b5139c888d->leave($__internal_4c2e9fe30435f8440debc50f7bd940a7efcc3578be0cf540cf6459b5139c888d_prof);

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
