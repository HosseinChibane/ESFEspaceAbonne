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
        $__internal_8c97703ec238baed72bc9fd472e7250ce4172c778a4287ac1cb7a99e382cd5c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c97703ec238baed72bc9fd472e7250ce4172c778a4287ac1cb7a99e382cd5c1->enter($__internal_8c97703ec238baed72bc9fd472e7250ce4172c778a4287ac1cb7a99e382cd5c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/back/mesParametresMDP.html.twig"));

        $__internal_70535afa8a1df9a45706680520fa0017762e80d30a3a9c6fa53638e7f07b0f7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70535afa8a1df9a45706680520fa0017762e80d30a3a9c6fa53638e7f07b0f7d->enter($__internal_70535afa8a1df9a45706680520fa0017762e80d30a3a9c6fa53638e7f07b0f7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/back/mesParametresMDP.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8c97703ec238baed72bc9fd472e7250ce4172c778a4287ac1cb7a99e382cd5c1->leave($__internal_8c97703ec238baed72bc9fd472e7250ce4172c778a4287ac1cb7a99e382cd5c1_prof);

        
        $__internal_70535afa8a1df9a45706680520fa0017762e80d30a3a9c6fa53638e7f07b0f7d->leave($__internal_70535afa8a1df9a45706680520fa0017762e80d30a3a9c6fa53638e7f07b0f7d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_063a4cf28726b43f825786d297bb6b1e8db29770deee22f9ac33b0f04ea13254 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_063a4cf28726b43f825786d297bb6b1e8db29770deee22f9ac33b0f04ea13254->enter($__internal_063a4cf28726b43f825786d297bb6b1e8db29770deee22f9ac33b0f04ea13254_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1771da145b5cf3cc7ef6fc49a81980f65afa0117389bf0e97a41d42884602cf4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1771da145b5cf3cc7ef6fc49a81980f65afa0117389bf0e97a41d42884602cf4->enter($__internal_1771da145b5cf3cc7ef6fc49a81980f65afa0117389bf0e97a41d42884602cf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Mes Parametres - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_1771da145b5cf3cc7ef6fc49a81980f65afa0117389bf0e97a41d42884602cf4->leave($__internal_1771da145b5cf3cc7ef6fc49a81980f65afa0117389bf0e97a41d42884602cf4_prof);

        
        $__internal_063a4cf28726b43f825786d297bb6b1e8db29770deee22f9ac33b0f04ea13254->leave($__internal_063a4cf28726b43f825786d297bb6b1e8db29770deee22f9ac33b0f04ea13254_prof);

    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_c5e06e6e4f0a8200ad18de46d95ddb187ddaea5eb70bbd66a13c8c10a7409824 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5e06e6e4f0a8200ad18de46d95ddb187ddaea5eb70bbd66a13c8c10a7409824->enter($__internal_c5e06e6e4f0a8200ad18de46d95ddb187ddaea5eb70bbd66a13c8c10a7409824_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_91a4c834560d9c67ea10d397e7f3ef402fed90ef280ef358261e8c13b310c934 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91a4c834560d9c67ea10d397e7f3ef402fed90ef280ef358261e8c13b310c934->enter($__internal_91a4c834560d9c67ea10d397e7f3ef402fed90ef280ef358261e8c13b310c934_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 8
        echo "    <ol class=\"breadcrumb\">
        <li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_monProfil");
        echo "\">Home</a></li>
        <li class=\"active\">Mes Paramètres</li>
    </ol>
";
        
        $__internal_91a4c834560d9c67ea10d397e7f3ef402fed90ef280ef358261e8c13b310c934->leave($__internal_91a4c834560d9c67ea10d397e7f3ef402fed90ef280ef358261e8c13b310c934_prof);

        
        $__internal_c5e06e6e4f0a8200ad18de46d95ddb187ddaea5eb70bbd66a13c8c10a7409824->leave($__internal_c5e06e6e4f0a8200ad18de46d95ddb187ddaea5eb70bbd66a13c8c10a7409824_prof);

    }

    // line 14
    public function block_Content($context, array $blocks = array())
    {
        $__internal_b9362fd00e1766d83436e516bb745287b6922110263d90abebc9ae7feb2a3322 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9362fd00e1766d83436e516bb745287b6922110263d90abebc9ae7feb2a3322->enter($__internal_b9362fd00e1766d83436e516bb745287b6922110263d90abebc9ae7feb2a3322_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_50f201db151d1175c27b299f00649e2ff8f40320b3cdc41f850ec7ef11b901d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50f201db151d1175c27b299f00649e2ff8f40320b3cdc41f850ec7ef11b901d7->enter($__internal_50f201db151d1175c27b299f00649e2ff8f40320b3cdc41f850ec7ef11b901d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

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
        
        $__internal_50f201db151d1175c27b299f00649e2ff8f40320b3cdc41f850ec7ef11b901d7->leave($__internal_50f201db151d1175c27b299f00649e2ff8f40320b3cdc41f850ec7ef11b901d7_prof);

        
        $__internal_b9362fd00e1766d83436e516bb745287b6922110263d90abebc9ae7feb2a3322->leave($__internal_b9362fd00e1766d83436e516bb745287b6922110263d90abebc9ae7feb2a3322_prof);

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
