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
        $__internal_9aae37293e4db8dd3f93159f0112704de1844ab88b0b3b08a06098e0f8754e37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9aae37293e4db8dd3f93159f0112704de1844ab88b0b3b08a06098e0f8754e37->enter($__internal_9aae37293e4db8dd3f93159f0112704de1844ab88b0b3b08a06098e0f8754e37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:back:mesParametresMDP.html.twig"));

        $__internal_03b1300cf3864c6122642e42deea97d34ba6b7a05c03b8bdcd6bf6ed0259b14d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03b1300cf3864c6122642e42deea97d34ba6b7a05c03b8bdcd6bf6ed0259b14d->enter($__internal_03b1300cf3864c6122642e42deea97d34ba6b7a05c03b8bdcd6bf6ed0259b14d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:back:mesParametresMDP.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9aae37293e4db8dd3f93159f0112704de1844ab88b0b3b08a06098e0f8754e37->leave($__internal_9aae37293e4db8dd3f93159f0112704de1844ab88b0b3b08a06098e0f8754e37_prof);

        
        $__internal_03b1300cf3864c6122642e42deea97d34ba6b7a05c03b8bdcd6bf6ed0259b14d->leave($__internal_03b1300cf3864c6122642e42deea97d34ba6b7a05c03b8bdcd6bf6ed0259b14d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f6cf6df011ca8b1f913cb79e89dbe1c8c80a73229b92012ec7aeb53f998c47aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6cf6df011ca8b1f913cb79e89dbe1c8c80a73229b92012ec7aeb53f998c47aa->enter($__internal_f6cf6df011ca8b1f913cb79e89dbe1c8c80a73229b92012ec7aeb53f998c47aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_fb75f38a886dbb11668dd34a459bab335b84941d85dc0f88abc0c29de8913c82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb75f38a886dbb11668dd34a459bab335b84941d85dc0f88abc0c29de8913c82->enter($__internal_fb75f38a886dbb11668dd34a459bab335b84941d85dc0f88abc0c29de8913c82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Mes Parametres - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_fb75f38a886dbb11668dd34a459bab335b84941d85dc0f88abc0c29de8913c82->leave($__internal_fb75f38a886dbb11668dd34a459bab335b84941d85dc0f88abc0c29de8913c82_prof);

        
        $__internal_f6cf6df011ca8b1f913cb79e89dbe1c8c80a73229b92012ec7aeb53f998c47aa->leave($__internal_f6cf6df011ca8b1f913cb79e89dbe1c8c80a73229b92012ec7aeb53f998c47aa_prof);

    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_88d17674ea96f520a23a4f4dc6f590b0eb314be012d2858a6dd1c544c5f62b6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88d17674ea96f520a23a4f4dc6f590b0eb314be012d2858a6dd1c544c5f62b6d->enter($__internal_88d17674ea96f520a23a4f4dc6f590b0eb314be012d2858a6dd1c544c5f62b6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_42a63386a13b4835bf05cbd1d5dcb6288f482514b453f6facbdfca441a7e9b30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42a63386a13b4835bf05cbd1d5dcb6288f482514b453f6facbdfca441a7e9b30->enter($__internal_42a63386a13b4835bf05cbd1d5dcb6288f482514b453f6facbdfca441a7e9b30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 8
        echo "    <ol class=\"breadcrumb\">
        <li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_monProfil");
        echo "\">Home</a></li>
        <li class=\"active\">Mes Paramètres</li>
    </ol>
";
        
        $__internal_42a63386a13b4835bf05cbd1d5dcb6288f482514b453f6facbdfca441a7e9b30->leave($__internal_42a63386a13b4835bf05cbd1d5dcb6288f482514b453f6facbdfca441a7e9b30_prof);

        
        $__internal_88d17674ea96f520a23a4f4dc6f590b0eb314be012d2858a6dd1c544c5f62b6d->leave($__internal_88d17674ea96f520a23a4f4dc6f590b0eb314be012d2858a6dd1c544c5f62b6d_prof);

    }

    // line 14
    public function block_Content($context, array $blocks = array())
    {
        $__internal_a22446b363a8c3bc8facea17107daf078e4575631a702d849bd1a4a5e798c8fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a22446b363a8c3bc8facea17107daf078e4575631a702d849bd1a4a5e798c8fc->enter($__internal_a22446b363a8c3bc8facea17107daf078e4575631a702d849bd1a4a5e798c8fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_65212b1938745e06f4d5f559eaadf7ce3646e214a796d539f19b3fe0d347ceac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65212b1938745e06f4d5f559eaadf7ce3646e214a796d539f19b3fe0d347ceac->enter($__internal_65212b1938745e06f4d5f559eaadf7ce3646e214a796d539f19b3fe0d347ceac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

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
        
        $__internal_65212b1938745e06f4d5f559eaadf7ce3646e214a796d539f19b3fe0d347ceac->leave($__internal_65212b1938745e06f4d5f559eaadf7ce3646e214a796d539f19b3fe0d347ceac_prof);

        
        $__internal_a22446b363a8c3bc8facea17107daf078e4575631a702d849bd1a4a5e798c8fc->leave($__internal_a22446b363a8c3bc8facea17107daf078e4575631a702d849bd1a4a5e798c8fc_prof);

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
