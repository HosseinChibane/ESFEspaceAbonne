<?php

/* @ESFEspaceAbonne/back/mesParametresMAIL.html.twig */
class __TwigTemplate_85bd9f57d72998fff84f211d7844fb0b42742bf6cc156caeb69aeb1376a1e212 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":backend:sidebar.html.twig", "@ESFEspaceAbonne/back/mesParametresMAIL.html.twig", 1);
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
        $__internal_7600beffe6270d18f59c02e65da31199d4bafb5ee2423e3a923781903319b312 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7600beffe6270d18f59c02e65da31199d4bafb5ee2423e3a923781903319b312->enter($__internal_7600beffe6270d18f59c02e65da31199d4bafb5ee2423e3a923781903319b312_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/back/mesParametresMAIL.html.twig"));

        $__internal_745937848bfbb2dfb91840c8696afc73943608905a0be19fe74d76e6a38c13d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_745937848bfbb2dfb91840c8696afc73943608905a0be19fe74d76e6a38c13d2->enter($__internal_745937848bfbb2dfb91840c8696afc73943608905a0be19fe74d76e6a38c13d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/back/mesParametresMAIL.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7600beffe6270d18f59c02e65da31199d4bafb5ee2423e3a923781903319b312->leave($__internal_7600beffe6270d18f59c02e65da31199d4bafb5ee2423e3a923781903319b312_prof);

        
        $__internal_745937848bfbb2dfb91840c8696afc73943608905a0be19fe74d76e6a38c13d2->leave($__internal_745937848bfbb2dfb91840c8696afc73943608905a0be19fe74d76e6a38c13d2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b3bf5ec57432ff5db6ea51d3b6f8509266709f2ede5c41a3be5fbedd37806b8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3bf5ec57432ff5db6ea51d3b6f8509266709f2ede5c41a3be5fbedd37806b8b->enter($__internal_b3bf5ec57432ff5db6ea51d3b6f8509266709f2ede5c41a3be5fbedd37806b8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5320a1b0c18978729b992244b80f7d0e46ad9e72607f7a87865848d27c26841d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5320a1b0c18978729b992244b80f7d0e46ad9e72607f7a87865848d27c26841d->enter($__internal_5320a1b0c18978729b992244b80f7d0e46ad9e72607f7a87865848d27c26841d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Mes Parametres - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_5320a1b0c18978729b992244b80f7d0e46ad9e72607f7a87865848d27c26841d->leave($__internal_5320a1b0c18978729b992244b80f7d0e46ad9e72607f7a87865848d27c26841d_prof);

        
        $__internal_b3bf5ec57432ff5db6ea51d3b6f8509266709f2ede5c41a3be5fbedd37806b8b->leave($__internal_b3bf5ec57432ff5db6ea51d3b6f8509266709f2ede5c41a3be5fbedd37806b8b_prof);

    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_dc63a5dab2a1e66b97cb771e9500710036322b72280819b0b4c3fb781bd638a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc63a5dab2a1e66b97cb771e9500710036322b72280819b0b4c3fb781bd638a1->enter($__internal_dc63a5dab2a1e66b97cb771e9500710036322b72280819b0b4c3fb781bd638a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_991c9b73169731ded122bb70a9c962b8415165b6b754c565f6039fb667a40661 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_991c9b73169731ded122bb70a9c962b8415165b6b754c565f6039fb667a40661->enter($__internal_991c9b73169731ded122bb70a9c962b8415165b6b754c565f6039fb667a40661_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 8
        echo "    <ol class=\"breadcrumb\">
        <li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_monProfil");
        echo "\">Home</a></li>
        <li class=\"active\">Mes Paramètres</li>
    </ol>
";
        
        $__internal_991c9b73169731ded122bb70a9c962b8415165b6b754c565f6039fb667a40661->leave($__internal_991c9b73169731ded122bb70a9c962b8415165b6b754c565f6039fb667a40661_prof);

        
        $__internal_dc63a5dab2a1e66b97cb771e9500710036322b72280819b0b4c3fb781bd638a1->leave($__internal_dc63a5dab2a1e66b97cb771e9500710036322b72280819b0b4c3fb781bd638a1_prof);

    }

    // line 14
    public function block_Content($context, array $blocks = array())
    {
        $__internal_b317f735f5451a5cc297c75f61ad3b08820d4ff91c0e8d2e8beaa80791df357c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b317f735f5451a5cc297c75f61ad3b08820d4ff91c0e8d2e8beaa80791df357c->enter($__internal_b317f735f5451a5cc297c75f61ad3b08820d4ff91c0e8d2e8beaa80791df357c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_4e7377bf0487210c4f4a74af28e64e07603e700e485eb9f90d453f8922ae5fa5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e7377bf0487210c4f4a74af28e64e07603e700e485eb9f90d453f8922ae5fa5->enter($__internal_4e7377bf0487210c4f4a74af28e64e07603e700e485eb9f90d453f8922ae5fa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

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
        
        $__internal_4e7377bf0487210c4f4a74af28e64e07603e700e485eb9f90d453f8922ae5fa5->leave($__internal_4e7377bf0487210c4f4a74af28e64e07603e700e485eb9f90d453f8922ae5fa5_prof);

        
        $__internal_b317f735f5451a5cc297c75f61ad3b08820d4ff91c0e8d2e8beaa80791df357c->leave($__internal_b317f735f5451a5cc297c75f61ad3b08820d4ff91c0e8d2e8beaa80791df357c_prof);

    }

    public function getTemplateName()
    {
        return "@ESFEspaceAbonne/back/mesParametresMAIL.html.twig";
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

{% endblock %}", "@ESFEspaceAbonne/back/mesParametresMAIL.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\src\\ESF\\EspaceAbonneBundle\\Resources\\views\\back\\mesParametresMAIL.html.twig");
    }
}
