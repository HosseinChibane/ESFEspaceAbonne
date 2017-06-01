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
        $__internal_9f690770ffc8174a622a186a53775fdebbb29f1237e120dcb869a1786b60459e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f690770ffc8174a622a186a53775fdebbb29f1237e120dcb869a1786b60459e->enter($__internal_9f690770ffc8174a622a186a53775fdebbb29f1237e120dcb869a1786b60459e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/back/mesParametresMDP.html.twig"));

        $__internal_348bee8a8209b84d28bbe5ebdd16e65dc1a051a66a0bb1038cc7e69d597104ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_348bee8a8209b84d28bbe5ebdd16e65dc1a051a66a0bb1038cc7e69d597104ce->enter($__internal_348bee8a8209b84d28bbe5ebdd16e65dc1a051a66a0bb1038cc7e69d597104ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/back/mesParametresMDP.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9f690770ffc8174a622a186a53775fdebbb29f1237e120dcb869a1786b60459e->leave($__internal_9f690770ffc8174a622a186a53775fdebbb29f1237e120dcb869a1786b60459e_prof);

        
        $__internal_348bee8a8209b84d28bbe5ebdd16e65dc1a051a66a0bb1038cc7e69d597104ce->leave($__internal_348bee8a8209b84d28bbe5ebdd16e65dc1a051a66a0bb1038cc7e69d597104ce_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_44bdd26ff1e48448b12d4ce07b0ecad9ce3ac84832d8822d406339df7799624b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44bdd26ff1e48448b12d4ce07b0ecad9ce3ac84832d8822d406339df7799624b->enter($__internal_44bdd26ff1e48448b12d4ce07b0ecad9ce3ac84832d8822d406339df7799624b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a16af83f3f064367b4bebf15938a7dd9a62fcbe03a50e05ff6a7805afd699f11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a16af83f3f064367b4bebf15938a7dd9a62fcbe03a50e05ff6a7805afd699f11->enter($__internal_a16af83f3f064367b4bebf15938a7dd9a62fcbe03a50e05ff6a7805afd699f11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Mes Parametres - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_a16af83f3f064367b4bebf15938a7dd9a62fcbe03a50e05ff6a7805afd699f11->leave($__internal_a16af83f3f064367b4bebf15938a7dd9a62fcbe03a50e05ff6a7805afd699f11_prof);

        
        $__internal_44bdd26ff1e48448b12d4ce07b0ecad9ce3ac84832d8822d406339df7799624b->leave($__internal_44bdd26ff1e48448b12d4ce07b0ecad9ce3ac84832d8822d406339df7799624b_prof);

    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_15dd533f21661869ad7531f736712ab5e1982318ff67e8acdd3e4bd6268a3cf7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15dd533f21661869ad7531f736712ab5e1982318ff67e8acdd3e4bd6268a3cf7->enter($__internal_15dd533f21661869ad7531f736712ab5e1982318ff67e8acdd3e4bd6268a3cf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_5e62503e51328fdb0285dea0e260237957c48ff1f04a5cf433dee78ab21cbae5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e62503e51328fdb0285dea0e260237957c48ff1f04a5cf433dee78ab21cbae5->enter($__internal_5e62503e51328fdb0285dea0e260237957c48ff1f04a5cf433dee78ab21cbae5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 8
        echo "    <ol class=\"breadcrumb\">
        <li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_monProfil");
        echo "\">Home</a></li>
        <li class=\"active\">Mes Paramètres</li>
    </ol>
";
        
        $__internal_5e62503e51328fdb0285dea0e260237957c48ff1f04a5cf433dee78ab21cbae5->leave($__internal_5e62503e51328fdb0285dea0e260237957c48ff1f04a5cf433dee78ab21cbae5_prof);

        
        $__internal_15dd533f21661869ad7531f736712ab5e1982318ff67e8acdd3e4bd6268a3cf7->leave($__internal_15dd533f21661869ad7531f736712ab5e1982318ff67e8acdd3e4bd6268a3cf7_prof);

    }

    // line 14
    public function block_Content($context, array $blocks = array())
    {
        $__internal_d5d0ae8e3f5f0a6d754478e83803dc1e0148806f5ce538bf776ba2821618d671 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5d0ae8e3f5f0a6d754478e83803dc1e0148806f5ce538bf776ba2821618d671->enter($__internal_d5d0ae8e3f5f0a6d754478e83803dc1e0148806f5ce538bf776ba2821618d671_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_09221c93956406ecdd8564f582bf532894b91daad4f546458c7d020c2080a00b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09221c93956406ecdd8564f582bf532894b91daad4f546458c7d020c2080a00b->enter($__internal_09221c93956406ecdd8564f582bf532894b91daad4f546458c7d020c2080a00b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

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
        
        $__internal_09221c93956406ecdd8564f582bf532894b91daad4f546458c7d020c2080a00b->leave($__internal_09221c93956406ecdd8564f582bf532894b91daad4f546458c7d020c2080a00b_prof);

        
        $__internal_d5d0ae8e3f5f0a6d754478e83803dc1e0148806f5ce538bf776ba2821618d671->leave($__internal_d5d0ae8e3f5f0a6d754478e83803dc1e0148806f5ce538bf776ba2821618d671_prof);

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
