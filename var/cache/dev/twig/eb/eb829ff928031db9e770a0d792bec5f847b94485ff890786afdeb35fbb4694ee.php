<?php

/* ESFEspaceAbonneBundle:back:mesParametresMDP.html.twig */
class __TwigTemplate_ec575393feb825394f149540619812a62446a0a5eed63bd6a3d9729b4089779a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":backend:sidebar.html.twig", "ESFEspaceAbonneBundle:back:mesParametresMDP.html.twig", 1);
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
        $__internal_f38ee1ede53f8d0ce1adc86fe4c5dc30530ce470d0a440a4504aab28ba71a2aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f38ee1ede53f8d0ce1adc86fe4c5dc30530ce470d0a440a4504aab28ba71a2aa->enter($__internal_f38ee1ede53f8d0ce1adc86fe4c5dc30530ce470d0a440a4504aab28ba71a2aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:back:mesParametresMDP.html.twig"));

        $__internal_e0d283df88e733e0dd36756fd22dbbeedac5236f71d7f006b33bb70cd7c6511d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0d283df88e733e0dd36756fd22dbbeedac5236f71d7f006b33bb70cd7c6511d->enter($__internal_e0d283df88e733e0dd36756fd22dbbeedac5236f71d7f006b33bb70cd7c6511d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:back:mesParametresMDP.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f38ee1ede53f8d0ce1adc86fe4c5dc30530ce470d0a440a4504aab28ba71a2aa->leave($__internal_f38ee1ede53f8d0ce1adc86fe4c5dc30530ce470d0a440a4504aab28ba71a2aa_prof);

        
        $__internal_e0d283df88e733e0dd36756fd22dbbeedac5236f71d7f006b33bb70cd7c6511d->leave($__internal_e0d283df88e733e0dd36756fd22dbbeedac5236f71d7f006b33bb70cd7c6511d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1fb6f9a375510f6a4c780bb7cde570031c09312bc43a7a7454b6c90dc6a209ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1fb6f9a375510f6a4c780bb7cde570031c09312bc43a7a7454b6c90dc6a209ff->enter($__internal_1fb6f9a375510f6a4c780bb7cde570031c09312bc43a7a7454b6c90dc6a209ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c69afc46eb77b928da977d98efb31b14dcf4bdf88440e05c9e80f66adad9d8e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c69afc46eb77b928da977d98efb31b14dcf4bdf88440e05c9e80f66adad9d8e8->enter($__internal_c69afc46eb77b928da977d98efb31b14dcf4bdf88440e05c9e80f66adad9d8e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Mes Parametres - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_c69afc46eb77b928da977d98efb31b14dcf4bdf88440e05c9e80f66adad9d8e8->leave($__internal_c69afc46eb77b928da977d98efb31b14dcf4bdf88440e05c9e80f66adad9d8e8_prof);

        
        $__internal_1fb6f9a375510f6a4c780bb7cde570031c09312bc43a7a7454b6c90dc6a209ff->leave($__internal_1fb6f9a375510f6a4c780bb7cde570031c09312bc43a7a7454b6c90dc6a209ff_prof);

    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_3f0c29b640be92603f8c6ca728d1f1114d74523211eafb878b335f2b6aa68ac3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f0c29b640be92603f8c6ca728d1f1114d74523211eafb878b335f2b6aa68ac3->enter($__internal_3f0c29b640be92603f8c6ca728d1f1114d74523211eafb878b335f2b6aa68ac3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_0d041e8011612a8f39c5e06b4817b6af37e360c95adc3d48d235a8f0d80712ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d041e8011612a8f39c5e06b4817b6af37e360c95adc3d48d235a8f0d80712ba->enter($__internal_0d041e8011612a8f39c5e06b4817b6af37e360c95adc3d48d235a8f0d80712ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 8
        echo "    <ol class=\"breadcrumb\">
        <li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_monProfil");
        echo "\">Home</a></li>
        <li class=\"active\">Mes Paramètres</li>
    </ol>
";
        
        $__internal_0d041e8011612a8f39c5e06b4817b6af37e360c95adc3d48d235a8f0d80712ba->leave($__internal_0d041e8011612a8f39c5e06b4817b6af37e360c95adc3d48d235a8f0d80712ba_prof);

        
        $__internal_3f0c29b640be92603f8c6ca728d1f1114d74523211eafb878b335f2b6aa68ac3->leave($__internal_3f0c29b640be92603f8c6ca728d1f1114d74523211eafb878b335f2b6aa68ac3_prof);

    }

    // line 14
    public function block_Content($context, array $blocks = array())
    {
        $__internal_d2d8aaf2c8f529cd6642f9203a33379131afbfdef20d4ae77f5dd2567df96d93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2d8aaf2c8f529cd6642f9203a33379131afbfdef20d4ae77f5dd2567df96d93->enter($__internal_d2d8aaf2c8f529cd6642f9203a33379131afbfdef20d4ae77f5dd2567df96d93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_387991ec72f619f82137c42b318a5359ca909c160b9950f2a2b03cc2d2e29fea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_387991ec72f619f82137c42b318a5359ca909c160b9950f2a2b03cc2d2e29fea->enter($__internal_387991ec72f619f82137c42b318a5359ca909c160b9950f2a2b03cc2d2e29fea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

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
        
        $__internal_387991ec72f619f82137c42b318a5359ca909c160b9950f2a2b03cc2d2e29fea->leave($__internal_387991ec72f619f82137c42b318a5359ca909c160b9950f2a2b03cc2d2e29fea_prof);

        
        $__internal_d2d8aaf2c8f529cd6642f9203a33379131afbfdef20d4ae77f5dd2567df96d93->leave($__internal_d2d8aaf2c8f529cd6642f9203a33379131afbfdef20d4ae77f5dd2567df96d93_prof);

    }

    public function getTemplateName()
    {
        return "ESFEspaceAbonneBundle:back:mesParametresMDP.html.twig";
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
{% endblock %}", "ESFEspaceAbonneBundle:back:mesParametresMDP.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\src\\ESF\\EspaceAbonneBundle/Resources/views/back/mesParametresMDP.html.twig");
    }
}
