<?php

/* ESFEspaceAbonneBundle:Back:preparationOne.html.twig */
class __TwigTemplate_fdc46d795e7f24fe2a87b4d30f49dc41dec60111b72a4f654a3b043124cde586 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":backend:sidebar.html.twig", "ESFEspaceAbonneBundle:Back:preparationOne.html.twig", 1);
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
        $__internal_c6af10cb631c08cc2ca541636589c2eba575a640a8174eded2cf748736a865ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6af10cb631c08cc2ca541636589c2eba575a640a8174eded2cf748736a865ee->enter($__internal_c6af10cb631c08cc2ca541636589c2eba575a640a8174eded2cf748736a865ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:Back:preparationOne.html.twig"));

        $__internal_bb17fc57617d93fb7587009c3cf11d02533099ba9f59b130105ad54c44fc5f87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb17fc57617d93fb7587009c3cf11d02533099ba9f59b130105ad54c44fc5f87->enter($__internal_bb17fc57617d93fb7587009c3cf11d02533099ba9f59b130105ad54c44fc5f87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:Back:preparationOne.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c6af10cb631c08cc2ca541636589c2eba575a640a8174eded2cf748736a865ee->leave($__internal_c6af10cb631c08cc2ca541636589c2eba575a640a8174eded2cf748736a865ee_prof);

        
        $__internal_bb17fc57617d93fb7587009c3cf11d02533099ba9f59b130105ad54c44fc5f87->leave($__internal_bb17fc57617d93fb7587009c3cf11d02533099ba9f59b130105ad54c44fc5f87_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b2e99e8b29a74c0af886d5be3df558a19eaa8f5531c10f421ba2ea47e8aa0a82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2e99e8b29a74c0af886d5be3df558a19eaa8f5531c10f421ba2ea47e8aa0a82->enter($__internal_b2e99e8b29a74c0af886d5be3df558a19eaa8f5531c10f421ba2ea47e8aa0a82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d1b2984598f59971474ac932f1a560e456a1b078b77ee60fd4f0951b8c13840e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1b2984598f59971474ac932f1a560e456a1b078b77ee60fd4f0951b8c13840e->enter($__internal_d1b2984598f59971474ac932f1a560e456a1b078b77ee60fd4f0951b8c13840e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tInscription Préparation - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_d1b2984598f59971474ac932f1a560e456a1b078b77ee60fd4f0951b8c13840e->leave($__internal_d1b2984598f59971474ac932f1a560e456a1b078b77ee60fd4f0951b8c13840e_prof);

        
        $__internal_b2e99e8b29a74c0af886d5be3df558a19eaa8f5531c10f421ba2ea47e8aa0a82->leave($__internal_b2e99e8b29a74c0af886d5be3df558a19eaa8f5531c10f421ba2ea47e8aa0a82_prof);

    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_aac95b1f079da7e5f31439025b4c6ba76cc9b5e6d75e88ae792b8438d562c032 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aac95b1f079da7e5f31439025b4c6ba76cc9b5e6d75e88ae792b8438d562c032->enter($__internal_aac95b1f079da7e5f31439025b4c6ba76cc9b5e6d75e88ae792b8438d562c032_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_8a4e7d48628926ad6fc2530951c131765c0907be7b956220adcb37aec210d969 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a4e7d48628926ad6fc2530951c131765c0907be7b956220adcb37aec210d969->enter($__internal_8a4e7d48628926ad6fc2530951c131765c0907be7b956220adcb37aec210d969_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 8
        echo "\t<ol class=\"breadcrumb\">
\t\t<li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_monProfil");
        echo "\">Home</a></li>
\t\t<li class=\"active\">Inscription</li>
\t</ol>
";
        
        $__internal_8a4e7d48628926ad6fc2530951c131765c0907be7b956220adcb37aec210d969->leave($__internal_8a4e7d48628926ad6fc2530951c131765c0907be7b956220adcb37aec210d969_prof);

        
        $__internal_aac95b1f079da7e5f31439025b4c6ba76cc9b5e6d75e88ae792b8438d562c032->leave($__internal_aac95b1f079da7e5f31439025b4c6ba76cc9b5e6d75e88ae792b8438d562c032_prof);

    }

    // line 14
    public function block_Content($context, array $blocks = array())
    {
        $__internal_ed50961789be79830b5d2dc194cdebe4fca72a6fb634d12f283bea2b1855bf87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed50961789be79830b5d2dc194cdebe4fca72a6fb634d12f283bea2b1855bf87->enter($__internal_ed50961789be79830b5d2dc194cdebe4fca72a6fb634d12f283bea2b1855bf87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_a5e6bf26b642277d20b55392a34ec5bbde9cf72f05d14f584a40fde1c0d60794 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5e6bf26b642277d20b55392a34ec5bbde9cf72f05d14f584a40fde1c0d60794->enter($__internal_a5e6bf26b642277d20b55392a34ec5bbde9cf72f05d14f584a40fde1c0d60794_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

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
        
        $__internal_a5e6bf26b642277d20b55392a34ec5bbde9cf72f05d14f584a40fde1c0d60794->leave($__internal_a5e6bf26b642277d20b55392a34ec5bbde9cf72f05d14f584a40fde1c0d60794_prof);

        
        $__internal_ed50961789be79830b5d2dc194cdebe4fca72a6fb634d12f283bea2b1855bf87->leave($__internal_ed50961789be79830b5d2dc194cdebe4fca72a6fb634d12f283bea2b1855bf87_prof);

    }

    public function getTemplateName()
    {
        return "ESFEspaceAbonneBundle:Back:preparationOne.html.twig";
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
", "ESFEspaceAbonneBundle:Back:preparationOne.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\src\\ESF\\EspaceAbonneBundle/Resources/views/Back/preparationOne.html.twig");
    }
}
