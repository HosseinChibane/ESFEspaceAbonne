<?php

/* @ESFEspaceAbonne/back/mesParametresMDP.html.twig */
class __TwigTemplate_fe42da1ed0c86900fc5c8f3a3e86c76c86d5987938296cc3068fae64c1653053 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":backend:sidebar.html.twig", "@ESFEspaceAbonne/back/mesParametresMDP.html.twig", 1);
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
        $__internal_9663c3757b82d9ecfc65b8fe21f66e1962791161382615174d36ec26a0e3229e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9663c3757b82d9ecfc65b8fe21f66e1962791161382615174d36ec26a0e3229e->enter($__internal_9663c3757b82d9ecfc65b8fe21f66e1962791161382615174d36ec26a0e3229e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/back/mesParametresMDP.html.twig"));

        $__internal_ca87bb71f71a557d06b832e14eaf4cab14f732a60985b758321cb127a05dbb27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca87bb71f71a557d06b832e14eaf4cab14f732a60985b758321cb127a05dbb27->enter($__internal_ca87bb71f71a557d06b832e14eaf4cab14f732a60985b758321cb127a05dbb27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/back/mesParametresMDP.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9663c3757b82d9ecfc65b8fe21f66e1962791161382615174d36ec26a0e3229e->leave($__internal_9663c3757b82d9ecfc65b8fe21f66e1962791161382615174d36ec26a0e3229e_prof);

        
        $__internal_ca87bb71f71a557d06b832e14eaf4cab14f732a60985b758321cb127a05dbb27->leave($__internal_ca87bb71f71a557d06b832e14eaf4cab14f732a60985b758321cb127a05dbb27_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f535a72905890c4d785a64bb8fe684bf7b996543dc932452fb2cbfcee7f9212f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f535a72905890c4d785a64bb8fe684bf7b996543dc932452fb2cbfcee7f9212f->enter($__internal_f535a72905890c4d785a64bb8fe684bf7b996543dc932452fb2cbfcee7f9212f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ce0148f765d2c0ef3a37f4fced47abd125ad09959667be4c43c7d7532afb200f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce0148f765d2c0ef3a37f4fced47abd125ad09959667be4c43c7d7532afb200f->enter($__internal_ce0148f765d2c0ef3a37f4fced47abd125ad09959667be4c43c7d7532afb200f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Mes Parametres - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_ce0148f765d2c0ef3a37f4fced47abd125ad09959667be4c43c7d7532afb200f->leave($__internal_ce0148f765d2c0ef3a37f4fced47abd125ad09959667be4c43c7d7532afb200f_prof);

        
        $__internal_f535a72905890c4d785a64bb8fe684bf7b996543dc932452fb2cbfcee7f9212f->leave($__internal_f535a72905890c4d785a64bb8fe684bf7b996543dc932452fb2cbfcee7f9212f_prof);

    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_f7bbf05b1133daffec518a9d61f6fdc53f582b6a7526a31b9e6c281880f1d262 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7bbf05b1133daffec518a9d61f6fdc53f582b6a7526a31b9e6c281880f1d262->enter($__internal_f7bbf05b1133daffec518a9d61f6fdc53f582b6a7526a31b9e6c281880f1d262_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_2967f03d93f62720757a1dde3340870f948c37d23ca1597b593249632f84b77b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2967f03d93f62720757a1dde3340870f948c37d23ca1597b593249632f84b77b->enter($__internal_2967f03d93f62720757a1dde3340870f948c37d23ca1597b593249632f84b77b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 8
        echo "    <ol class=\"breadcrumb\">
        <li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_monProfil");
        echo "\">Home</a></li>
        <li class=\"active\">Mes Paramètres</li>
    </ol>
";
        
        $__internal_2967f03d93f62720757a1dde3340870f948c37d23ca1597b593249632f84b77b->leave($__internal_2967f03d93f62720757a1dde3340870f948c37d23ca1597b593249632f84b77b_prof);

        
        $__internal_f7bbf05b1133daffec518a9d61f6fdc53f582b6a7526a31b9e6c281880f1d262->leave($__internal_f7bbf05b1133daffec518a9d61f6fdc53f582b6a7526a31b9e6c281880f1d262_prof);

    }

    // line 14
    public function block_Content($context, array $blocks = array())
    {
        $__internal_974a9574047fb59414e5fd6c3a17f81901f7cbf5574406207d0faac4846c193a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_974a9574047fb59414e5fd6c3a17f81901f7cbf5574406207d0faac4846c193a->enter($__internal_974a9574047fb59414e5fd6c3a17f81901f7cbf5574406207d0faac4846c193a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_db15e1e599f7fce3c636f303f87426b68537f16668af363f84ce49fa5a982025 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db15e1e599f7fce3c636f303f87426b68537f16668af363f84ce49fa5a982025->enter($__internal_db15e1e599f7fce3c636f303f87426b68537f16668af363f84ce49fa5a982025_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        echo " 
 

<!-- Mes Parametres -->
";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
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
    <div>
     ";
        // line 29
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_change_password"), "attr" => array("class" => "fos_user_change_password")));
        echo "
     ";
        // line 30
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
     <div>
      <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" /> ";
        // line 33
        echo "    </div>
    ";
        // line 34
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
  </div>            
</div>      
";
        // line 37
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
</div>
";
        
        $__internal_db15e1e599f7fce3c636f303f87426b68537f16668af363f84ce49fa5a982025->leave($__internal_db15e1e599f7fce3c636f303f87426b68537f16668af363f84ce49fa5a982025_prof);

        
        $__internal_974a9574047fb59414e5fd6c3a17f81901f7cbf5574406207d0faac4846c193a->leave($__internal_974a9574047fb59414e5fd6c3a17f81901f7cbf5574406207d0faac4846c193a_prof);

    }

    public function getTemplateName()
    {
        return "@ESFEspaceAbonne/back/mesParametresMDP.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 37,  138 => 34,  135 => 33,  130 => 30,  126 => 29,  120 => 25,  114 => 22,  111 => 21,  109 => 20,  104 => 18,  90 => 14,  76 => 9,  73 => 8,  64 => 7,  51 => 4,  42 => 3,  11 => 1,);
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
{{ form_start(form) }}

{% if not form.vars.valid %}
  <div class=\"alert alert-error\">
    {{ form_errors(form) }}
  </div>
{% endif %}

<div class=\"col-md-5\">
  <div class=\"form-group\">
    <div>
     {{ form_start(form, { 'action': path('fos_user_change_password'), 'attr': { 'class': 'fos_user_change_password' } }) }}
     {{ form_widget(form) }}
     <div>
      <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" /> {#value=\"{{ 'change_password.submit'|trans }}\" #}
    </div>
    {{ form_end(form) }}
  </div>            
</div>      
{{ form_end(form) }}
</div>
{% endblock %}", "@ESFEspaceAbonne/back/mesParametresMDP.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\src\\ESF\\EspaceAbonneBundle\\Resources\\views\\back\\mesParametresMDP.html.twig");
    }
}
