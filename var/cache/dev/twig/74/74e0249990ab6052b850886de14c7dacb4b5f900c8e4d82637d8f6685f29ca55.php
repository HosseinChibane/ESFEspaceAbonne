<?php

/* @ESFEspaceAbonne/Default/mesParametresMDP.html.twig */
class __TwigTemplate_765ea4b0e5214521cf14361f2cc8fb88bcd6ef6e908fe2f166d7929e0dc05585 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":backend:sidebar.html.twig", "@ESFEspaceAbonne/Default/mesParametresMDP.html.twig", 1);
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
        $__internal_54c8573890436591a937318d5aa8336b17759bce4822e1587059c7b16d174abf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54c8573890436591a937318d5aa8336b17759bce4822e1587059c7b16d174abf->enter($__internal_54c8573890436591a937318d5aa8336b17759bce4822e1587059c7b16d174abf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/Default/mesParametresMDP.html.twig"));

        $__internal_bb40d16dfb952f409fbd6202ec52ec03230a0f1fee2995106a30a0d1166853bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb40d16dfb952f409fbd6202ec52ec03230a0f1fee2995106a30a0d1166853bc->enter($__internal_bb40d16dfb952f409fbd6202ec52ec03230a0f1fee2995106a30a0d1166853bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/Default/mesParametresMDP.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_54c8573890436591a937318d5aa8336b17759bce4822e1587059c7b16d174abf->leave($__internal_54c8573890436591a937318d5aa8336b17759bce4822e1587059c7b16d174abf_prof);

        
        $__internal_bb40d16dfb952f409fbd6202ec52ec03230a0f1fee2995106a30a0d1166853bc->leave($__internal_bb40d16dfb952f409fbd6202ec52ec03230a0f1fee2995106a30a0d1166853bc_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_832531e87388849682c5b43d8716fc78210276702e99eaa2ef158d3b702bd8bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_832531e87388849682c5b43d8716fc78210276702e99eaa2ef158d3b702bd8bc->enter($__internal_832531e87388849682c5b43d8716fc78210276702e99eaa2ef158d3b702bd8bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_99ee980a73664e9d1cf58e4f8d5436851c66bc70de5cbf2e0bec3a12e557d353 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99ee980a73664e9d1cf58e4f8d5436851c66bc70de5cbf2e0bec3a12e557d353->enter($__internal_99ee980a73664e9d1cf58e4f8d5436851c66bc70de5cbf2e0bec3a12e557d353_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Mes Parametres - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_99ee980a73664e9d1cf58e4f8d5436851c66bc70de5cbf2e0bec3a12e557d353->leave($__internal_99ee980a73664e9d1cf58e4f8d5436851c66bc70de5cbf2e0bec3a12e557d353_prof);

        
        $__internal_832531e87388849682c5b43d8716fc78210276702e99eaa2ef158d3b702bd8bc->leave($__internal_832531e87388849682c5b43d8716fc78210276702e99eaa2ef158d3b702bd8bc_prof);

    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_8b37956515f74b8fd9b9a85249fb1e80549e757561a3c3c1b98a75809298cc2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b37956515f74b8fd9b9a85249fb1e80549e757561a3c3c1b98a75809298cc2f->enter($__internal_8b37956515f74b8fd9b9a85249fb1e80549e757561a3c3c1b98a75809298cc2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_2284cd23ff9de0b596983a09be898891c04240fc901c5230547535cdb02d6651 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2284cd23ff9de0b596983a09be898891c04240fc901c5230547535cdb02d6651->enter($__internal_2284cd23ff9de0b596983a09be898891c04240fc901c5230547535cdb02d6651_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 8
        echo "    <ol class=\"breadcrumb\">
        <li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_monProfil");
        echo "\">Home</a></li>
        <li class=\"active\">Mes Paramètres</li>
    </ol>
";
        
        $__internal_2284cd23ff9de0b596983a09be898891c04240fc901c5230547535cdb02d6651->leave($__internal_2284cd23ff9de0b596983a09be898891c04240fc901c5230547535cdb02d6651_prof);

        
        $__internal_8b37956515f74b8fd9b9a85249fb1e80549e757561a3c3c1b98a75809298cc2f->leave($__internal_8b37956515f74b8fd9b9a85249fb1e80549e757561a3c3c1b98a75809298cc2f_prof);

    }

    // line 14
    public function block_Content($context, array $blocks = array())
    {
        $__internal_190f42afc55e119c4d11166de44742842431ddbf6d10284ae54210f8bb98f0b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_190f42afc55e119c4d11166de44742842431ddbf6d10284ae54210f8bb98f0b8->enter($__internal_190f42afc55e119c4d11166de44742842431ddbf6d10284ae54210f8bb98f0b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_3c41a4b4135cbbdd22852baea3647d23bf1fdab33eb4b101be95e0aedc2c70fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c41a4b4135cbbdd22852baea3647d23bf1fdab33eb4b101be95e0aedc2c70fb->enter($__internal_3c41a4b4135cbbdd22852baea3647d23bf1fdab33eb4b101be95e0aedc2c70fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

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
        
        $__internal_3c41a4b4135cbbdd22852baea3647d23bf1fdab33eb4b101be95e0aedc2c70fb->leave($__internal_3c41a4b4135cbbdd22852baea3647d23bf1fdab33eb4b101be95e0aedc2c70fb_prof);

        
        $__internal_190f42afc55e119c4d11166de44742842431ddbf6d10284ae54210f8bb98f0b8->leave($__internal_190f42afc55e119c4d11166de44742842431ddbf6d10284ae54210f8bb98f0b8_prof);

    }

    public function getTemplateName()
    {
        return "@ESFEspaceAbonne/Default/mesParametresMDP.html.twig";
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
{% endblock %}", "@ESFEspaceAbonne/Default/mesParametresMDP.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\src\\ESF\\EspaceAbonneBundle\\Resources\\views\\Default\\mesParametresMDP.html.twig");
    }
}
