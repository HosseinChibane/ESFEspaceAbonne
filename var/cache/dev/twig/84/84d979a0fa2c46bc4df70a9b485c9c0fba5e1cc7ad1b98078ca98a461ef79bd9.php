<?php

/* ESFEspaceAbonneBundle:back:mesParametresMAIL.html.twig */
class __TwigTemplate_9876ce046ae005dd6703e8df7c0f454924ff8431596c9a3ea530303e5ca2f475 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":backend:sidebar.html.twig", "ESFEspaceAbonneBundle:back:mesParametresMAIL.html.twig", 1);
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
        $__internal_009e9a4449695d4226dfbcf69d66f9f63f799d99690b9b6556264bde7d50dbc0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_009e9a4449695d4226dfbcf69d66f9f63f799d99690b9b6556264bde7d50dbc0->enter($__internal_009e9a4449695d4226dfbcf69d66f9f63f799d99690b9b6556264bde7d50dbc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:back:mesParametresMAIL.html.twig"));

        $__internal_6a345ec6b6d6802d172133b5a2a3cf0abba1e966d924d4d0f5bb79bad5c86f83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a345ec6b6d6802d172133b5a2a3cf0abba1e966d924d4d0f5bb79bad5c86f83->enter($__internal_6a345ec6b6d6802d172133b5a2a3cf0abba1e966d924d4d0f5bb79bad5c86f83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:back:mesParametresMAIL.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_009e9a4449695d4226dfbcf69d66f9f63f799d99690b9b6556264bde7d50dbc0->leave($__internal_009e9a4449695d4226dfbcf69d66f9f63f799d99690b9b6556264bde7d50dbc0_prof);

        
        $__internal_6a345ec6b6d6802d172133b5a2a3cf0abba1e966d924d4d0f5bb79bad5c86f83->leave($__internal_6a345ec6b6d6802d172133b5a2a3cf0abba1e966d924d4d0f5bb79bad5c86f83_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4c25ab230e0252f5253ed63f5f9f9dbd63049c58a497d8d47834fd478e66962b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c25ab230e0252f5253ed63f5f9f9dbd63049c58a497d8d47834fd478e66962b->enter($__internal_4c25ab230e0252f5253ed63f5f9f9dbd63049c58a497d8d47834fd478e66962b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_340c4b0456d9224ee7768cca76e5e9f5a63ea6765563f9020a6e0e2cee5d3383 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_340c4b0456d9224ee7768cca76e5e9f5a63ea6765563f9020a6e0e2cee5d3383->enter($__internal_340c4b0456d9224ee7768cca76e5e9f5a63ea6765563f9020a6e0e2cee5d3383_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Mes Parametres - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_340c4b0456d9224ee7768cca76e5e9f5a63ea6765563f9020a6e0e2cee5d3383->leave($__internal_340c4b0456d9224ee7768cca76e5e9f5a63ea6765563f9020a6e0e2cee5d3383_prof);

        
        $__internal_4c25ab230e0252f5253ed63f5f9f9dbd63049c58a497d8d47834fd478e66962b->leave($__internal_4c25ab230e0252f5253ed63f5f9f9dbd63049c58a497d8d47834fd478e66962b_prof);

    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_03c02fc3744cd48834c9375d8c7c5e986ddcee008a666c71ed344a9a27c4ae21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03c02fc3744cd48834c9375d8c7c5e986ddcee008a666c71ed344a9a27c4ae21->enter($__internal_03c02fc3744cd48834c9375d8c7c5e986ddcee008a666c71ed344a9a27c4ae21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_89e6c8f23d0efbe459c0ca2fbafeb9aeed810d7dda670e78f2b5dc2f9a2ec4a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89e6c8f23d0efbe459c0ca2fbafeb9aeed810d7dda670e78f2b5dc2f9a2ec4a0->enter($__internal_89e6c8f23d0efbe459c0ca2fbafeb9aeed810d7dda670e78f2b5dc2f9a2ec4a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 8
        echo "    <ol class=\"breadcrumb\">
        <li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_monProfil");
        echo "\">Home</a></li>
        <li class=\"active\">Mes Paramètres</li>
    </ol>
";
        
        $__internal_89e6c8f23d0efbe459c0ca2fbafeb9aeed810d7dda670e78f2b5dc2f9a2ec4a0->leave($__internal_89e6c8f23d0efbe459c0ca2fbafeb9aeed810d7dda670e78f2b5dc2f9a2ec4a0_prof);

        
        $__internal_03c02fc3744cd48834c9375d8c7c5e986ddcee008a666c71ed344a9a27c4ae21->leave($__internal_03c02fc3744cd48834c9375d8c7c5e986ddcee008a666c71ed344a9a27c4ae21_prof);

    }

    // line 14
    public function block_Content($context, array $blocks = array())
    {
        $__internal_12b669090974a0088292d55b0bd4a6ccb3cf25ff7bf383127be84677d1a73d48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12b669090974a0088292d55b0bd4a6ccb3cf25ff7bf383127be84677d1a73d48->enter($__internal_12b669090974a0088292d55b0bd4a6ccb3cf25ff7bf383127be84677d1a73d48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_5e2ec23dfdab07c9773b8964bbe1e053c37f1cdcbe9b578de9cc122d8e764ca8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e2ec23dfdab07c9773b8964bbe1e053c37f1cdcbe9b578de9cc122d8e764ca8->enter($__internal_5e2ec23dfdab07c9773b8964bbe1e053c37f1cdcbe9b578de9cc122d8e764ca8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        echo " 


<!-- Mes Parametres -->
";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit"), "attr" => array("class" => "fos_user_profile_edit")));
        echo "

";
        // line 20
        if ( !$this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "valid", array())) {
            // line 21
            echo "  <div class=\"alert alert-error\">
    ";
            // line 22
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            echo "
  </div>
";
        }
        // line 25
        echo "
<div class=\"col-md-5\">
  <div class=\"form-group\">
    ";
        // line 28
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
    <div>
      <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" /> ";
        // line 31
        echo "    </div>
    ";
        // line 32
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
  </div>
</div>

";
        
        $__internal_5e2ec23dfdab07c9773b8964bbe1e053c37f1cdcbe9b578de9cc122d8e764ca8->leave($__internal_5e2ec23dfdab07c9773b8964bbe1e053c37f1cdcbe9b578de9cc122d8e764ca8_prof);

        
        $__internal_12b669090974a0088292d55b0bd4a6ccb3cf25ff7bf383127be84677d1a73d48->leave($__internal_12b669090974a0088292d55b0bd4a6ccb3cf25ff7bf383127be84677d1a73d48_prof);

    }

    public function getTemplateName()
    {
        return "ESFEspaceAbonneBundle:back:mesParametresMAIL.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 32,  130 => 31,  125 => 28,  120 => 25,  114 => 22,  111 => 21,  109 => 20,  104 => 18,  90 => 14,  76 => 9,  73 => 8,  64 => 7,  51 => 4,  42 => 3,  11 => 1,);
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
  Mes Parametres - {{ parent() }}
{% endblock %}

{% block breadcrumb %}
    <ol class=\"breadcrumb\">
        <li><a href=\"{{ path('esf_espace_abonne_monProfil') }}\">Home</a></li>
        <li class=\"active\">Mes Paramètres</li>
    </ol>
{% endblock %}

{% block Content %} 


<!-- Mes Parametres -->
{{ form_start(form, { 'action': path('fos_user_profile_edit'), 'attr': { 'class': 'fos_user_profile_edit' } }) }}

{% if not form.vars.valid %}
  <div class=\"alert alert-error\">
    {{ form_errors(form) }}
  </div>
{% endif %}

<div class=\"col-md-5\">
  <div class=\"form-group\">
    {{ form_widget(form) }}
    <div>
      <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" /> {#value=\"{{ 'profile.edit.submit'|trans }}\" #}
    </div>
    {{ form_end(form) }}
  </div>
</div>

{% endblock %}", "ESFEspaceAbonneBundle:back:mesParametresMAIL.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\src\\ESF\\EspaceAbonneBundle/Resources/views/back/mesParametresMAIL.html.twig");
    }
}
