<?php

/* ESFEspaceAbonneBundle:Default:mesparametresMDP.html.twig */
class __TwigTemplate_b02351e23cb9f1749c3f6ef5faa865e610604e86f65b89403eeba8b15971c59a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":backend:sidebar.html.twig", "ESFEspaceAbonneBundle:Default:mesparametresMDP.html.twig", 1);
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
        $__internal_5007f1032ab2cb539218fa79f5016734e53f2201c04e78d2a99a58378158a895 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5007f1032ab2cb539218fa79f5016734e53f2201c04e78d2a99a58378158a895->enter($__internal_5007f1032ab2cb539218fa79f5016734e53f2201c04e78d2a99a58378158a895_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:Default:mesparametresMDP.html.twig"));

        $__internal_0616c4a0d4eaf9a983d471560021b4607352b6cb1ebcc9be24936cefb67f56aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0616c4a0d4eaf9a983d471560021b4607352b6cb1ebcc9be24936cefb67f56aa->enter($__internal_0616c4a0d4eaf9a983d471560021b4607352b6cb1ebcc9be24936cefb67f56aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:Default:mesparametresMDP.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5007f1032ab2cb539218fa79f5016734e53f2201c04e78d2a99a58378158a895->leave($__internal_5007f1032ab2cb539218fa79f5016734e53f2201c04e78d2a99a58378158a895_prof);

        
        $__internal_0616c4a0d4eaf9a983d471560021b4607352b6cb1ebcc9be24936cefb67f56aa->leave($__internal_0616c4a0d4eaf9a983d471560021b4607352b6cb1ebcc9be24936cefb67f56aa_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a6567d3100b4be819a5bcec8334915fd5a9e2855d1fb7fae199f4244832888e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6567d3100b4be819a5bcec8334915fd5a9e2855d1fb7fae199f4244832888e0->enter($__internal_a6567d3100b4be819a5bcec8334915fd5a9e2855d1fb7fae199f4244832888e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_179f3296fcfe722b4973d163f908f0e5f88c7d886f32fd9047e858164b860aa9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_179f3296fcfe722b4973d163f908f0e5f88c7d886f32fd9047e858164b860aa9->enter($__internal_179f3296fcfe722b4973d163f908f0e5f88c7d886f32fd9047e858164b860aa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Mes Parametres - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_179f3296fcfe722b4973d163f908f0e5f88c7d886f32fd9047e858164b860aa9->leave($__internal_179f3296fcfe722b4973d163f908f0e5f88c7d886f32fd9047e858164b860aa9_prof);

        
        $__internal_a6567d3100b4be819a5bcec8334915fd5a9e2855d1fb7fae199f4244832888e0->leave($__internal_a6567d3100b4be819a5bcec8334915fd5a9e2855d1fb7fae199f4244832888e0_prof);

    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_bed3851345d7ad431b1e6fbc5166ab2e218978ea5904c6163b974ba6774162bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bed3851345d7ad431b1e6fbc5166ab2e218978ea5904c6163b974ba6774162bf->enter($__internal_bed3851345d7ad431b1e6fbc5166ab2e218978ea5904c6163b974ba6774162bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_2e78ea63353ab857620d0e91e75ed16f05bf3eadc17f2aebcb00087cb1951d2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e78ea63353ab857620d0e91e75ed16f05bf3eadc17f2aebcb00087cb1951d2c->enter($__internal_2e78ea63353ab857620d0e91e75ed16f05bf3eadc17f2aebcb00087cb1951d2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 8
        echo "    <ol class=\"breadcrumb\">
        <li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_monProfil");
        echo "\">Home</a></li>
        <li class=\"active\">Mes Paramètres</li>
    </ol>
";
        
        $__internal_2e78ea63353ab857620d0e91e75ed16f05bf3eadc17f2aebcb00087cb1951d2c->leave($__internal_2e78ea63353ab857620d0e91e75ed16f05bf3eadc17f2aebcb00087cb1951d2c_prof);

        
        $__internal_bed3851345d7ad431b1e6fbc5166ab2e218978ea5904c6163b974ba6774162bf->leave($__internal_bed3851345d7ad431b1e6fbc5166ab2e218978ea5904c6163b974ba6774162bf_prof);

    }

    // line 14
    public function block_Content($context, array $blocks = array())
    {
        $__internal_dc403afa80f1ee6f2c2cb0baeffa2bcd5478df0150d1959b6c441d780cd908a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc403afa80f1ee6f2c2cb0baeffa2bcd5478df0150d1959b6c441d780cd908a1->enter($__internal_dc403afa80f1ee6f2c2cb0baeffa2bcd5478df0150d1959b6c441d780cd908a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_b12d8328c4851527a3f68a61c11ee437d9e299206a83d0e95e3038e20639a219 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b12d8328c4851527a3f68a61c11ee437d9e299206a83d0e95e3038e20639a219->enter($__internal_b12d8328c4851527a3f68a61c11ee437d9e299206a83d0e95e3038e20639a219_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

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
        
        $__internal_b12d8328c4851527a3f68a61c11ee437d9e299206a83d0e95e3038e20639a219->leave($__internal_b12d8328c4851527a3f68a61c11ee437d9e299206a83d0e95e3038e20639a219_prof);

        
        $__internal_dc403afa80f1ee6f2c2cb0baeffa2bcd5478df0150d1959b6c441d780cd908a1->leave($__internal_dc403afa80f1ee6f2c2cb0baeffa2bcd5478df0150d1959b6c441d780cd908a1_prof);

    }

    public function getTemplateName()
    {
        return "ESFEspaceAbonneBundle:Default:mesparametresMDP.html.twig";
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
{% endblock %}", "ESFEspaceAbonneBundle:Default:mesparametresMDP.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\src\\ESF\\EspaceAbonneBundle/Resources/views/Default/mesparametresMDP.html.twig");
    }
}
